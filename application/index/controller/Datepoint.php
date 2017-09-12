<?php
/**
 * Created by PhpStorm.
 * User: xiaoxie
 * Date: 2017/4/7
 * Time: 11:49
 */
namespace app\index\controller;

use think\Db;
use think\Request;

class Datepoint extends Common
{

    /**
     * 楼层信息
     */
    public function floor()
    {
        $floor = db('floor');
        $square = db('square');
        // 根据权限查找广场条件
        if (session('mark') == 1) {
            $where = '';
            $wheres = '';
        } else {
            $wheres['id'] = array(
                'in',
                session('rules')
            );
            $where['campus_id'] = array(
                'in',
                session('rules')
            );
        }
        $squarelist = $square->where($wheres)->select();
        $campus_id = input('get.campus_id');
        if (! empty($campus_id)) {
            if (in_array($campus_id, session('adminRules'))) {
                $where['campus_id'] = $campus_id;
            }
        }
        $floorlist = $floor->join([
            'square' => 's'
        ], ' s.id= floor.campus_id')
            ->join([
            'building' => 'b'
        ], 'b.id = floor.building_id')
            ->join('sys_location_info', 'sys_location_info.location_id = s.location_id')
            ->field('s.campus_name ,floor.floor_name,b.building_name,floor.floor_img_X,floor.floor_img_Y,sys_location_info.location_name,floor.building_id,floor.campus_id,floor.id')
            ->where($where)
            ->paginate(10); // 每页显示几条
                                           // echo $floor->getlastsql();
        $page = $floorlist->render();
        $this->assign('list', $floorlist); // 赋值数据集
        $this->assign('page', $page); // 赋值分页输出
        $this->assign('squarelist', $squarelist);
        return $this->fetch();
    }

    // 位置标注
    public function position()
    {
        $floorId = input('get.floor_id');
        if (empty($floorId)) {
            echo $floorId;
            exit();
        }
        // 广场id
        $where['floor_id'] = $floorId;
        $square = db('square');
        $map = $square->join('floor', ' square.id= floor.campus_id')
            ->field('floor.*,square.campus_name,square.location_id,square.campus_address')
            ->where('floor.id=' . $floorId)
            ->find();
        $sca = $map['PhysicalSizeX'] / $map['floor_img_X'];
        $aps = db('aps');
        // 查询ap信息，
        $result = $aps->where($where)
            ->field(array(
            'apname',
            'id',
            'mac',
            'posX' => 'Xcor',
            'posY' => 'Ycor',
            'status',
            'ip',
            'vender',
            'timestampdiff(minute,up_time,now())' => 'off_minute'
        ))
            ->select();
        // echo $aps ->getlastsql();exit;
        // 判断是否在线
        if ($result) {
            foreach ($result as $key => $val) {
                $arr[$key]['mac'] = $val['mac'];
                $arr[$key]['apname'] = $val['apname'];
                $arr[$key]['Xcor'] = $val['Xcor'];
                $arr[$key]['Ycor'] = $val['Ycor'];
                $arr[$key]['id'] = $val['id'];
                $arr[$key]['ip'] = $val['ip'];
                $arr[$key]['vender'] = $val['vender'];
                if ($val['off_minute'] > 30) {
                    $arr[$key]['status'] = 0;
                } else {
                    $arr[$key]['status'] = 1;
                }
            }
        } else {
            $arr = '';
        }
        $apinfo = $aps->field('mac,apname,ip,vender,posX,posY')
            ->order('id desc')
            ->find();
        $status = input('get.status');
        if ($status == 0) {
            $arr = null;
        }
        $aplist = json_encode($arr);
        $this->assign('aplist', $aplist);
        $this->assign('map', $map);
        $this->assign('sca', $sca);
        return $this->fetch();
    }

    public function ajaxpos()
    {
        $mac = input('get.mac');
        session('mac', $mac);
        if ($mac) {
            $campus_id = input('get.campus_id');
            $address = db('locator_config')->where('name=' . "'debug_host'")->value('value');
            $data_port = db('locator_config')->where('name=' . "'debug_port'")->value('value');
            $po = $this->Send_socket_xdcoder_udp($data_port, $address, $mac);
            // $a=$this->Send_socket_xdcoder_udp($rtc_port, $address,$mac.',');
            // echo $a;exit;
            if ($po != 'nopos') {
                $poarr = explode(',', $po);
                $data['x'] = $poarr[1];
                $data['y'] = abs($poarr[2]);
                $where['floor_map_id'] = $poarr[3];
                if (count($poarr) > 5) {
                    $data['testinfo'] = $poarr[5];
                } else {
                    $data['testinfo'] = '';
                }
                $floorname = db('floor')->where($where)
                    ->field('floor_name')
                    ->find();
                $data['floor_name'] = $floorname['floor_name'];
                echo json_encode($data);
            }
            
            // $data['x']=77.29;
            // $data['y']=58.86;
        }
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
            echo "fail";
        }
    }

    // 指纹采集画区域
    public function region()
    {
        $floorId = input('floor_id/d'); // 楼层id
        if (empty($floorId)) {
            echo $floorId;
            exit();
        }
        // 广场id
        $where['floor_id'] = $floorId;
        $mapresult = db('floor')->where($where)->find();
        if ($mapresult) {
            $floor_img_path = $mapresult['floor_img_path'];
            if ($floor_img_path) {} else {
                // echo "<script>alert('请先上传地图')</script>";
                $this->error('请先上传地图');
            }
        }
        $re = db('floor')->where($where)->find();
        $yc = $re['PhysicalSizeY'] / $re['floor_img_Y'];
        $xc = $re['PhysicalSizeX'] / $re['floor_img_X'];
        // echo $xc;
        $square = db('square');
        $map = $square->join(' floor', '  square.id= floor.campus_id', 'inner')
            ->field('floor.*,square.campus_name,square.location_id,square.campus_address')
            ->where('floor.id=' . $floorId)
            ->find();
        $list = db('fgareadata')->where($where)->select();
        foreach ($list as $k => $v) {
            $pointstr = $v['data'];
            $id[] = $v['Id'];
            // echo $id;exit;
            // echo $pointstr;
            $pointarr = explode('|', $pointstr);
            for ($i = 0; $i < count($pointarr); $i ++) {
                $ars = explode(',', $pointarr[$i]);
                // echo $ars[0];exit;
                $ars1[0] = round($re['floor_img_Y'] - $ars[1] / 100 / $yc);
                $ars1[1] = round($ars[0] / 100 / $xc);
                // echo $ars1[1];exit;
                $arrs[$k][] = $ars1;
            }
        }
        // print_r($arrs);exit;
        if (! isset($arrs)) {
            $arrs = '';
            $id = '';
        }
        // var_dump($id);exit;
        $pointlist = json_encode($arrs);
        // echo $pointlist;
        $this->assign('pointlist', $pointlist);
        $this->assign('map', $map);
        $this->assign('id', $id);
        return $this->fetch();
    }

    // 插入各个定点数据
    public function insertdata()
    {
        $data = input('post.');
        // var_dump($data);
        $floor_id = input('floor_id/d'); // 获取楼层ID
                                         // $area = $_GET['area'];
        $i = 1;
        $str = '';
        foreach ($data as $k => $v) {
            if ($i % 2 == 0 && $i != 0) {
                $str .= round($v * 100) . '|';
            } else {
                $str .= round($v * 100) . ',';
            }
            
            $i ++;
        }
        $str = substr($str, 0, - 1); // 去除 |
        unset($data);
        $result = db('fgareadata')->where("floor_id=$floor_id")->find();
        $data['floor_id'] = $floor_id;
        $data['data'] = $str;
        $data['area'] = $_GET['area'];
        $result = db('fgareadata')->insertGetId($data);
        $datafg['fgareaid'] = $result; // 不变的id
        db('fgareadata')->where("id=$result")->update($datafg);
        $list = db('fgareadata')->where("floor_id=$floor_id")
            ->order('area asc')
            ->select();
        if (count($list) > 1) {
            // echo 123;exit;
            foreach ($list as $key => $val) {
                $id = db('fgareadata')->order('id desc')->find();
                $ids = $id['Id'] + 1;
                $datas['Id'] = $ids;
                $datas['data'] = $val['data'];
                $datas['area'] = $val['area'];
                $where['Id'] = $val['Id'];
                $result = db('fgareadata')->where($where)->update($datas);
                if ($result) { // 修改指纹数据
                    $list = db('fgdata')->where('mapid=' . $floor_id)->select();
                    if ($list) {
                        foreach ($list as $key => $val) {
                            $fgareaid = $val['fgareaid'];
                            $areaid = $val['areaid'];
                            $resu = strpos($fgareaid, ',');
                            if ($resu) {
                                $fgareaidarr = explode(',', $fgareaid);
                                // print_r($fgareaidarr);
                                $areaidarr = explode(',', $areaid);
                                $strs = '';
                                for ($i = 0; $i < count($fgareaidarr); $i ++) {
                                    $fgareaids = db('fgareadata')->where('fgareaid=' . $fgareaidarr[$i])->find();
                                    // echo M('fgareadata')->getlastsql().$i.'<br/>';
                                    if ($i == (count($fgareaidarr) - 1)) {
                                        // echo 123;
                                        $strs .= $fgareaids['Id'];
                                    } else {
                                        // echo 456;
                                        $strs .= $fgareaids['Id'] . ',';
                                    }
                                }
                                // echo $strs.'<br/>';
                                $da['areaid'] = $strs;
                                db('fgdata')->where('id=' . $val['id'])->update($da);
                                // echo M('fgdata')->getlastsql();
                            } else {
                                $fgareaids = db('fgareadata')->where('fgareaid=' . $fgareaid)->find();
                                $das['areaid'] = $fgareaids['Id'];
                                // $da['areaid'] = $strs;
                                db('fgdata')->where('id=' . $val['id'])->update($das);
                            }
                        }
                    }
                }
            }
            echo json_encode($result);
        }
        
        // echo json_encode($list);
    }

    // 编辑区域
    public function updatepoints()
    {
        $where['floor_id'] = input('floor_id/d');
        $where['Id'] = input('get.areaid');
        $floor_id = input('get.floor_id');
        $data = input('post.');
        $str = '';
        foreach ($data as $key => $val) {
            $k = substr($key, - 1, 1);
            $lan = substr($key, 0, 3);
            if ($lan == 'lng') {
                $str .= round($val * 100) . ',';
            } else if ($lan == 'lat') {
                $str .= round($val * 100) . '|';
            }
        }
        unset($data);
        $str = substr($str, 0, - 1);
        $data['data'] = $str;
        $data['area'] = input('get.area');
        $result = db('fgareadata')->where($where)->update($data);
        $list = db('fgareadata')->where("floor_id=$floor_id")
            ->order('area asc')
            ->select();
        if (count($list) > 1) {
            // echo 123;exit;
            foreach ($list as $key => $val) {
                $id = db('fgareadata')->order('id desc')->find();
                $ids = $id['Id'] + 1;
                $datas['Id'] = $ids;
                $datas['data'] = $val['data'];
                $datas['area'] = $val['area'];
                $wheres['Id'] = $val['Id'];
                $result = db('fgareadata')->where($wheres)->update($datas);
                if ($result) { // 修改指纹数据
                    $list = db('fgdata')->where('mapid=' . $floor_id)->select();
                    if ($list) {
                        foreach ($list as $key => $val) {
                            $fgareaid = $val['fgareaid'];
                            $areaid = $val['areaid'];
                            $resu = strpos($fgareaid, ',');
                            if ($resu) {
                                $fgareaidarr = explode(',', $fgareaid);
                                // print_r($fgareaidarr);
                                $areaidarr = explode(',', $areaid);
                                $strs = '';
                                for ($i = 0; $i < count($fgareaidarr); $i ++) {
                                    $fgareaids = db('fgareadata')->where('fgareaid=' . $fgareaidarr[$i])->find();
                                    // echo M('fgareadata')->getlastsql().$i.'<br/>';
                                    if ($i == (count($fgareaidarr) - 1)) {
                                        // echo 123;
                                        $strs .= $fgareaids['Id'];
                                    } else {
                                        // echo 456;
                                        $strs .= $fgareaids['Id'] . ',';
                                    }
                                }
                                // echo $strs.'<br/>';
                                $da['areaid'] = $strs;
                                db('fgdata')->where('id=' . $val['id'])->update($da);
                                // echo M('fgdata')->getlastsql();
                            } else {
                                $fgareaids = db('fgareadata')->where('fgareaid=' . $fgareaid)->find();
                                $das['areaid'] = $fgareaids['Id'];
                                db('fgdata')->where('id=' . $val['id'])->update($das);
                            }
                        }
                    }
                }
                // echo M('fgareadata')->getlastsql();
            }
        }
        echo json_encode($result);
        // echo M('fgareadata')->getlastsql();exit;
        // echo json_encode($result);
    }

    public function deletepoints()
    {
        $floor_id = input('get.floor_id'); // 获取楼层ID
        $data = input('post.');
        $str = '';
        foreach ($data as $key => $val) {
            $k = substr($key, - 1, 1);
            $lan = substr($key, 0, 3);
            if ($lan == 'lng') {
                $str .= round($val * 100) . ',';
            } else if ($lan == 'lat') {
                $str .= round($val * 100) . '|';
            }
        }
        
        $str = substr($str, 0, - 1);
        // echo $str;
        $where['floor_id'] = $floor_id;
        $where['data'] = $str;
        $result = db('fgareadata')->where($where)->delete();
        echo json_encode($result);
    }

    // 编辑
    public function eduitregion()
    {
        $data = input('post.');
        // $data = $_GET['name'];
        // var_dump($data);
        
        // $arr = json_decode($data,true);
        var_dump($data);
    }
}