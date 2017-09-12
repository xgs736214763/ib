<?php
/**
 * Created by PhpStorm.
 * User: xiaoxie
 * Date: 2017/3/10
 * Time: 12:50
 * ap点位
 */
namespace app\index\controller;

use think\Db;
use think\Request;

class Apposition extends Common
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
        $page = $floorlist->render();
        $this->assign('list', $floorlist); // 赋值数据集
        $this->assign('page', $page); // 赋值分页输出
        $this->assign('squarelist', $squarelist);
        return $this->fetch();
    }

    /**
     * 点位的标记和描点
     */
    public function position()
    {
        $request = Request::instance();
        // var_dump($request->param('floor_id'));exit;
        $floorId = $request->param('floor_id'); // 楼层id
        if (empty($floorId)) {
            exit();
        }
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
        // 查询楼层信息和广场信息
        $map = $square->join('floor', ' square.id= floor.campus_id')
            ->field('floor.*,square.campus_name,square.location_id,square.campus_address')
            ->where('floor.id=' . $floorId)
            ->find();
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
        $aplist = json_encode($arr);
        // var_dump($aplist);
        $this->assign('aplist', $aplist);
        $this->assign('apinfo', $apinfo);
        $this->assign('map', $map);
        return $this->fetch();
    }

    // 修改和插入ap信息ajax
    public function saveapinfo()
    {
        $request = Request::instance();
        $location = input('post.location');
        $aps = db('aps');
        $data['up_time'] = date('Y-m-d H:i:s');
        $data['mac'] = input('post.mac');
        $data['apname'] = input('post.apname');
        $data['ip'] = input('post.ip');
        $data['vender'] = input('post.vender');
        $data['ssid'] = input('post.apname');
        $mmap['floor_id'] = input('post.floor_id');
        // $mmap['_logic']='AND';
        $map['mac'] = input('post.mac');
        $map['apname'] = input('post.apname');
        $map['ip'] = input('post.ip');
        $apsresult = db('aps')->whereOr($map)->find();
        if ($location) { // 存在mac 编辑
            $id = $_POST['id'];
            $where['id'] = $id;
            if ($location == $_POST['mac']) {
                $maps['id'] = array(
                    'neq',
                    $id
                ); // 排出当前的
                $apre = db('aps')->where($maps)
                    ->where(function ($query) { // 混合查询 id !='' and (mac=' or')
                    $map['mac'] = input('post.mac'); // 闭包要重新定义
                    $map['apname'] = input('post.apname');
                    $map['ip'] = input('post.ip');
                    $query->whereOr($map);
                })
                    ->find();
                
                if ($apre) {
                    $datas['apname'] = $apre['apname'];
                } else {
                    if ($_POST['x']) {
                        $data['posX'] = $_POST['x'];
                    } else {
                        $data['posX'] = $_POST['posX'];
                    }
                    if ($_POST['y']) {
                        $data['posY'] = $_POST['y'];
                    } else {
                        $data['posY'] = $_POST['posY'];
                    }
                    $result = $aps->where($where)->update($data);
                    $datas['status'] = $result;
                }
            } else {
                $maps['id'] = array(
                    'neq',
                    $id
                ); // 排出当前的
                $apre = db('aps')->where($maps)
                    ->where(function ($query) { // 混合查询 id !='' and (mac=' or')
                    $map['mac'] = input('post.mac'); // 闭包要重新定义
                    $map['apname'] = input('post.apname');
                    $map['ip'] = input('post.ip');
                    $query->whereOr($map);
                })
                    ->find();
                if ($apre) {
                    $datas['apname'] = $apre['apname']; // 如果存在返回提示
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
                $data['apnames'] = $apsresult['apname'];
                echo json_encode($data);
            } else {
                // (mac,apname,ip,posX,posY,vender,up_time,floor_id,campus_id,building_id)
                $data['posX'] = input('post.x');
                $data['posY'] = input('post.y');
                $data['floor_id'] = input('post.floor_id');
                $data['campus_id'] = input('post.campus_id');
                $data['building_id'] = input('post.building_id');
                
                $result = $aps->insert($data);
                echo json_encode($data);
            }
        }
    }

    // 拖动保存数据
    public function savedate()
    {
        $mac = input('post.mac');
        $id = input('post.id');
        $xCor = input('post.lat');
        $yCor = input('post.lng');
        $maxposy = input('post.maxposX');
        $location = input('post.location');
        $apname = input('post.apname');
        $ip = input('post.ip');
        $aps = db('aps');
        // if(empty($mac)){
        // $where['id']= $id;
        // }else{
        // $where['mac']= $mac;
        // }
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

    // 画线改变地图宽高
    public function ajaxlength()
    {
        $floor_id = input('post.floor_id');
        $leng = input('post.length');
        $x1 = input('post.x1');
        $x2 = input('post.x2');
        $y1 = input('post.y1');
        $y2 = input('post.y2');
        $x = abs($x2 - $x1);
        $y = abs($y2 - $y1);
        $length = hypot($x, $y);
        $sca = $leng / $length; // 取系数；
        $floor_img = db('floor')->where('id=' . $floor_id)
            ->field('floor_img_X,floor_img_Y')
            ->find();
        $floor_img_x = $floor_img['floor_img_X'] * $sca;
        $floor_img_y = $floor_img['floor_img_Y'] * $sca;
        $map['id'] = $floor_id;
        $map['PhysicalSizeX'] = $floor_img_x;
        $map['PhysicalSizeY'] = $floor_img_y;
        $result = db('floor')->update($map);
        // $this->ajaxReturn($result);
        echo json_encode($result);
    }

    // 添加ap信息
    public function addap()
    {
        $mac = input('get.mac');
        $aps = db('aps');
        if ($mac) {
            $where['mac'] = $mac;
            $apinfo = $aps->where($where)
                ->field('mac,apname,ip,id,vender,posX,posY')
                ->find();
        } else {
            $apinfo = $aps->field('mac,apname,ip,vender,id,posX,posY')
                ->order('id desc')
                ->find();
        }
        $this->assign('apinfo', $apinfo);
        return $this->fetch();
    }
}