<?php
/**
 * Created by PhpStorm.
 * User: xiaoxie
 * Date: 2017/5/18
 * Time: 18:07
 */
namespace app\index\controller;

use think\Controller;
use think\Request;

class Ibeacon extends Common
{

    public function position()
    {
        $floorId = input('floor_id/d'); // 楼层id
        if (empty($floorId)) {
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
        $square = db('square');
        $map = $square->join('floor', 'square.id= floor.campus_id', 'inner')
            ->field('floor.*,square.campus_name,square.location_id,square.campus_address')
            ->where('floor.id=' . $floorId)
            ->find();
        $aps = db('ibeacon');
        $result = $aps->where($where)
            ->field(array(
            'ibname',
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
        if ($result) {
            foreach ($result as $key => $val) {
                $arr[$key]['mac'] = $val['mac'];
                $arr[$key]['ibname'] = $val['ibname'];
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
        $apinfo = $aps->field('mac,ibname,ip,vender,posX,posY,uuid,major,minor')
            ->order('id desc')
            ->find();
        $aplist = json_encode($arr);
        
        // var_dump($aplist);
        $this->assign('aplist', $aplist);
        $this->assign('apinfo', $apinfo);
        $this->assign('map', $map);
        return $this->fetch();
    }

    // 添加ap信息
    public function addap()
    {
        $mac = $_GET['mac'];
        $aps = db('ibeacon');
        if ($mac) {
            
            $where['mac'] = $mac;
            $apinfo = $aps->where($where)
                ->field('mac,ibname,ip,id,vender,posX,posY,uuid,major,minor')
                ->find();
        } else {
            $apinfo = $aps->field('mac,ibname,ip,vender,id,posX,posY,uuid,major,minor')
                ->order('id desc')
                ->find();
        }
        
        // $sql= $aps->getlastsql();
        // $this->assign('apinfo',$apinfo);
        $this->assign('apinfo', $apinfo);
        return $this->fetch();
    }

    // 拖动保存数据
    public function savedate()
    {
        $mac = $_POST['mac'];
        $id = $_POST['id'];
        $xCor = $_POST['lat'];
        $yCor = $_POST['lng'];
        $maxposy = $_POST['maxposX'];
        // $location=$_POST['location'];
        // $ibname=$_POST['ibname'];
        // $ip=$_POST['ip'];
        $aps = db('ibeacon');
        $where['id'] = $id;
        
        if ($xCor < 1 || $xCor > $maxposy || $yCor < 1) {
            $result = $aps->where($where)->delete();
            // echo $aps->getlastsql();
        } else {
            $data['posX'] = $xCor;
            $data['posY'] = $yCor;
            $data['up_time'] = date('Y-m-d H:i:s');
            $wheres['id'] = $id;
            $result = $aps->where($wheres)->update($data);
        }
        
        echo json_encode($result);
    }

    public function saveapinfo()
    {
        $request = Request::instance();
        $location = input('post.location');
        $aps = db('ibeacon');
        $data['up_time'] = date('Y-m-d H:i:s');
        $data['mac'] = input('post.mac');
        $data['ibname'] = input('post.ibname');
        $data['ip'] = input('post.ip');
        $data['vender'] = input('post.vender');
        $mmap['floor_id'] = input('post.floor_id');
        // $mmap['_logic']='AND';
        $map['mac'] = input('post.mac');
        $map['ibname'] = input('post.ibname');
        $map['ip'] = input('post.ip');
        $apsresult = db('ibeacon')->whereOr($map)->find();
        if ($location) { // 存在mac 编辑
            $id = input('id/d');
            $where['id'] = $id;
            if ($location == $_POST['mac']) {
                $maps['id'] = array(
                    'neq',
                    $id
                ); // 排出当前的
                $apre = db('ibeacon')->where($maps)
                    ->where(function ($query) { // 混合查询 id !='' and (mac=' or')
                    $map['mac'] = input('post.mac'); // 闭包要重新定义
                    $map['ibname'] = input('post.ibname');
                    $map['ip'] = input('post.ip');
                    $query->whereOr($map);
                })
                    ->find();
                
                if ($apre) {
                    $datas['ibname'] = $apre['ibname'];
                } else {
                    // echo input('x').'x';
                    // echo input('posX').'posx';exit;
                    if (input('x')) {
                        $data['posX'] = $_POST['x'];
                    } else {
                        $data['posX'] = input('posX');
                    }
                    if (input('y')) {
                        $data['posY'] = $_POST['y'];
                    } else {
                        $data['posY'] = input('posY');
                    }
                    $result = $aps->where($where)->update($data);
                    $datas['status'] = $result;
                }
            } else {
                $maps['id'] = array(
                    'neq',
                    $id
                ); // 排出当前的
                $apre = db('ibeacon')->where($maps)
                    ->where(function ($query) { // 混合查询 id !='' and (mac=' or')
                    $map['mac'] = input('post.mac'); // 闭包要重新定义
                    $map['ibname'] = input('post.ibname');
                    $map['ip'] = input('post.ip');
                    $query->whereOr($map);
                })
                    ->find();
                if ($apre) {
                    $datas['ibname'] = $apre['ibname']; // 如果存在返回提示
                } else {
                    if ($_POST['x']) {
                        $data['posX'] = $_POST['x'];
                    }
                    if ($_POST['y']) {
                        $data['posY'] = $_POST['y'];
                    }
                    $result = $aps->where($where)->update($data);
                    $datas['status'] = $result;
                }
            }
            echo json_encode($datas);
            // $this->ajaxReturn($datas);
        } else {
            if ($apsresult) {
                $data['ibnames'] = $apsresult['ibname'];
                echo json_encode($data);
            } else {
                // (mac,apname,ip,posX,posY,vender,up_time,floor_id,campus_id,building_id)
                $data['posX'] = input('post.x');
                $data['posY'] = input('post.y');
                $data['floor_id'] = input('post.floor_id');
                $data['campus_id'] = input('post.campus_id');
                $data['building_id'] = input('post.building_id');
                $data['uuid'] = input('post.uuid');
                $data['major'] = input('post.major');
                $data['minor'] = input('post.minor');
                $result = $aps->insert($data);
                echo json_encode($data);
            }
        }
    }
}