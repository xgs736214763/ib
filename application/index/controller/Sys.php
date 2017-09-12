<?php
namespace app\index\controller;

use think\controller;

/**
 * 系统配置
 */
class Sys extends Common
{

    public function basic()
    {
        $list = db('locator_config')->select();
        $this->assign('list', $list);
        return $this->fetch();
    }

    // ajax基础信息
    public function ajaxeduitsys()
    {
        $where['name'] = input('post.name');
        $data['value'] = input('post.value');
        $data['temp'] = input('post.temp');
        $result = db('locator_config')->where($where)->update($data);
        echo json_encode($result);
    }

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

    // udp 发送resert
    public function udpresert()
    {
        $address = db('locator_config')->where('name=' . "'debug_host'")->value('value');
        $data_port = db('locator_config')->where('name=' . "'debug_port'")->value('value');
        // echo $address;
        $this->Send_socket_xdcoder_udp($data_port, $address, 'reset');
        echo 123;
    }

    // 删除系统配置
    public function ajaxdeletesys()
    {
        $where['name'] = input('post.name');
        $result = db('locator_config')->where($where)->delete();
        echo json_encode($result);
    }
}
?>