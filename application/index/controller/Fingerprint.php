<?php
/*
 * 指纹采集
 */
namespace app\index\controller;

use think\Db;
use think\Request;

class Fingerprint extends Common
{

    // 基础配置
    public function basics()
    {
        $data = input('post.');
        
        if ($data) {
            $result = db('system_config')->find();
            if ($result) {
                $Id = $result['Id'];
                $resuts = db('system_config')->where('Id=' . $Id)->update($data);
                if ($resuts) {
                    $this->success('配置成功');
                } else {
                    $this->error('配置失败了');
                }
            } else {
                $resuts = db('system_config')->insertGetId($data);
                if ($resuts) {
                    $this->success('配置成功');
                } else {
                    $this->error('配置失败了');
                }
            }
        }
        return $this->fetch();
    }

    // ajax
    public function udpsends()
    {
        $floor_id = input('get.floor_id'); // 获取楼层ID
                                           // floorid,areaid,x,y,desc,fgdataid
        $data = input('post.');
        $where['Id'] = $data['areaid'];
        $result = db('fgareadata')->where($where)
            ->field('Id,fgareaid,name')
            ->find();
        $x = $data['lng'];
        $y = $data['lat'];
        $fgdataid = $result['fgareaid'];
        $desc = $result['name'];
        $areaid = $result['Id']; //
        $x = $data['lng'];
        $y = $data['lat'];
        $fgdataid = $result['fgareaid'];
        $desc = $result['name'];
        $desc = 'aaa';
        $cj_host = db('locator_config')->where('name=' . "'cj_host'")->value('value');
        $cj_port = db('locator_config')->where('name=' . "'cj_port'")->value('value');
        $path = db('locator_config')->where('name=' . "'exepath'")->value('value');
        $str = $floor_id . ',' . $areaid . ',' . $x . ',' . $y . ',' . "$desc" . ',' . $fgdataid;
        // echo $str;
        $udp = $this->Send_socket_xdcoder_udp($cj_port, $cj_host, $str);
        if ($udp == 'OK') {
            echo 'ok';
        } else {
            exec($path);
        }
    }

    // udp
    public function Send_socket_xdcoder_udp($service_port, $address, $in)
    {
        // 采用php socket技术使用UDP协议连接设备
        $socket = socket_create(AF_INET, SOCK_DGRAM, SOL_UDP);
        @socket_set_option($socket, SOL_SOCKET, SO_RCVTIMEO, array(
            "sec" => 2,
            "usec" => 0
        ));
        // 发送命令
        @socket_sendto($socket, $in, strlen($in), 0, $address, $service_port);
        
        @socket_recvfrom($socket, $buffer, 1024, 0, $address, $service_port);
        
        // 关闭连接
        socket_close($socket);
        if (! empty($buffer)) {
            return $buffer;
        } else {
            echo "失败";
        }
    }
}
?>