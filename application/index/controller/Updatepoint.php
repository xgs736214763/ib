<?php
/**
 * Created by PhpStorm.
 * User: xiaoxie
 * Date: 2017/3/13
 * Time: 13:53
 */
namespace app\index\controller;

use think\Controller;

class Updatepoint extends Common
{

    /**
     * 楼层信息
     */
    public function floor()
    {
        $floor = db('floor');
        $square = db('square');
        $squarelist = $square->select();
        if (session('mark') == 1) {
            $where = '';
        } else {
            $where['campus_id'] = array(
                'in',
                session('rules')
            );
        }
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
        $pro = $this->getAllProvinces();
        $page = $floorlist->render();
        $this->assign('pro', $pro);
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
        $floor = db('floor');
        $result = $floor->where('id=' . $floorId)->find();
        // print_r($result);
        // echo $floor->getlastsql();
        $adjust_data = $result['point_data'];
        if ($adjust_data) {
            $arrs = explode('|', $adjust_data);
        } else {
            $arrs = '';
        }
        if ($arrs) {
            foreach ($arrs as $key => $val) {
                $arr = explode(',', $val);
                $pointlist[$key]['posX'] = $arr[0];
                $pointlist[$key]['posY'] = $arr[1];
            }
        } else {
            $pointlist = '';
        }
        $aplist = json_encode($pointlist);
        $this->assign('aplist', $aplist);
        $this->assign('map', $map);
        $this->assign('sca', $sca);
        return $this->fetch();
    }

    // 添加矫正点坐标
    public function ajaxinsertpoint()
    {
        $x = input('post.y');
        $y = input('post.x');
        $floor_id = input('post.floor_id');
        
        $floor = db('floor');
        $adjust_data = $floor->where('id=' . $floor_id)->find();
        $scax = $adjust_data['PhysicalSizeX'] / $adjust_data['floor_img_X'];
        $scay = $adjust_data['PhysicalSizeY'] / $adjust_data['floor_img_Y'];
        $adjust_datas = $adjust_data['adjust_data'];
        $point_data = $adjust_data['point_data'];
        if ($adjust_datas) {
            $data['adjust_data'] = $adjust_datas . '|' . round($x * $scax) . ',' . round($y * $scay);
        } else {
            $data['adjust_data'] = round($x * $scax) . ',' . round($y * $scay);
        }
        if ($point_data) {
            $data['point_data'] = $point_data . '|' . $x * $scax . ',' . $y * $scay;
        } else {
            $data['point_data'] = $x * $scax . ',' . $y * $scay;
        }
        $result = $floor->where('id=' . $floor_id)->update($data);
        $datas['x'] = $x;
        $datas['y'] = $y;
        if ($result) {
            // / $this->ajaxReturn($datas);
            echo json_encode($datas);
        }
    }

    // 拖动保存数据
    public function savedate()
    {
        $id = input('post.id');
        $xCor = input('post.lat');
        $yCor = input('post.lng');
        $maxposy = input('post.maxposX');
        $i = input('post.i');
        // echo $i;
        $where['id'] = $id;
        
        $floor = db('floor');
        
        $result = $floor->where($where)->find();
        // echo $floor->getlastsql();
        $adjust_data = $result['adjust_data'];
        $point_data = $result['point_data'];
        if ($adjust_data) {
            // 260,204|249,332|187,387
            $arrs = explode('|', $adjust_data);
            // var_dump($arrs);exit;
        }
        $str = '';
        if ($xCor < 1 || $xCor > $maxposy || $yCor < 1) {
            $len = count($arrs) - 1;
            if ($len == 1) {
                foreach ($arrs as $key => $val) {
                    $arr = explode(',', $val);
                    
                    if ($key == $i) {
                        // 208,163|547,159
                        // 208,163|447,171|547,159
                    } else {
                        $str .= $arr[0] . ',';
                        $str .= $arr[1];
                    }
                    // var_dump($pointlist);
                    // 88,216|236,211|384,193
                }
            } else {
                foreach ($arrs as $key => $val) {
                    $arr = explode(',', $val);
                    
                    if ($key == $i) {} else if ($key == $len) {
                        $str .= $arr[0] . ',';
                        $str .= $arr[1];
                    } else {
                        $str .= $arr[0] . ',';
                        $str .= $arr[1] . '|';
                    }
                }
            }
            $strl = substr($str, - 1, 1);
            if ($strl == '|') {
                $str = substr($str, 0, - 1);
            }
            $data['adjust_data'] = $str;
            $result = $floor->where($where)->update($data);
        } else {
            $len = count($arrs) - 1;
            foreach ($arrs as $key => $val) {
                $arr = explode(',', $val);
                if ($key == $i) {
                    if ($i == $len) {
                        $str .= round($xCor) . ',';
                        $str .= round($yCor);
                    } else {
                        $str .= round($xCor) . ',';
                        $str .= round($yCor) . '|';
                    }
                } elseif ($key == $len) {
                    $str .= $arr[0] . ',';
                    $str .= $arr[1];
                } else {
                    $str .= $arr[0] . ',';
                    $str .= $arr[1] . '|';
                }
            }
            $data['adjust_data'] = $str;
            $result = $floor->where($where)->update($data);
        }
        // 原始点位保存
        if ($point_data) {
            $arrspoint = explode('|', $point_data);
        }
        $strs = '';
        if ($xCor < 1 || $xCor > $maxposy || $yCor < 1) {
            $len = count($arrspoint) - 1;
            if ($len == 1) {
                foreach ($arrspoint as $key => $val) {
                    $arr = explode(',', $val);
                    
                    if ($key == $i) {} else {
                        $strs .= $arr[0] . ',';
                        $strs .= $arr[1];
                    }
                }
            } else {
                foreach ($arrspoint as $key => $val) {
                    $arr = explode(',', $val);
                    
                    if ($key == $i) {} elseif ($key == $len) {
                        $strs .= $arr[0] . ',';
                        $strs .= $arr[1];
                    } else {
                        $strs .= $arr[0] . ',';
                        $strs .= $arr[1] . '|';
                    }
                }
            }
            $strl = substr($strs, - 1, 1);
            if ($strl == '|') {
                $strs = substr($strs, 0, - 1);
            }
            $data['point_data'] = $strs;
            $result = $floor->where($where)->update($data);
        } else {
            $len = count($arrspoint) - 1;
            foreach ($arrspoint as $key => $val) {
                $arr = explode(',', $val);
                if ($key == $i) {
                    if ($i == $len) {
                        $strs .= $xCor . ',';
                        $strs .= $yCor;
                    } else {
                        $strs .= $xCor . ',';
                        $strs .= $yCor . '|';
                    }
                } elseif ($key == $len) {
                    $strs .= $arr[0] . ',';
                    $strs .= $arr[1];
                } else {
                    $strs .= $arr[0] . ',';
                    $strs .= $arr[1] . '|';
                }
            }
            $data['point_data'] = $strs;
            $result = $floor->where($where)->update($data);
        }
        if ($result) {
            echo json_encode($i);
        } else {
            echo 100;
        }
    }

    // 拿到所有的省级
    public function getAllProvinces()
    {
        $pro = db('sys_location_info')->where('parent_location_id=0')->select();
        return $pro;
    }

    //
    public function ajaxGetAreasByCityId()
    {
        $id = input('post.location_id');
        $dbo = db('sys_location_info');
        $citys = $dbo->where('parent_location_id=' . $id)->select();
        
        echo json_encode($citys);
    }
}