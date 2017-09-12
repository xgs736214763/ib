<?php
// 广场基础信息
namespace app\index\controller;

use think\Db;
use think\Request;

class Place extends Common
{

    // 广场基础信息
    public function square()
    {
        $square = Db::table('square');
        // 查询条件
        $name = input('get.name');
        
        if (session('mark') == 1) {
            $where = '';
        } else {
            $where['campus_id'] = array(
                'in',
                session('rules')
            );
        }
        if ($name) {
            $where['campus_name'] = array(
                'like',
                "%$name%"
            );
        }
        // 创建子查询
        $sql = Db::table('aps')->field(array(
            'count(*)' => 'cnt',
            'campus_id'
        ))
            ->group('campus_id')
            ->buildSql();
        // 获取查询结果
        $list = Db::table('square')->join('sys_location_info', ' square.location_id= sys_location_info.location_id')
            ->join([
            $sql => 'a'
        ], "a.campus_id = square.id", 'left')
            ->where($where)
            ->paginate(10);
        // echo Db::table('square')->getlastsql();
        $this->assign('list', $list); // 赋值数据集
                                      // 查询所有的省份
        $pro = $this->getAllProvinces();
        $this->assign('pro', $pro);
        return $this->fetch();
    }

    // 新增广场信息ajax
    public function ajaxsquare()
    {
        // 获取post数据
        $data['location_id'] = input('post.location_id');
        $data['campus_name'] = input('post.campus_name');
        $data['campus_address'] = input('post.campus_address');
        $data['ip'] = input('post.ip');
        $data['dataport'] = input('post.dataport');
        $data['rtcport'] = input('post.rtcport');
        $square = db('square');
        // insert入库
        $result = $square->insert($data);
        echo json_encode($result);
        // $this->ajaxReturn($result);
    }

    // 广场信息的编辑ajax
    public function ajaxeduitsquare()
    {
        // 查询条件
        $map['id'] = input('post.id');
        // 获取post数据
        $data = input('post.');
        // 实例化数据
        $square = db('square');
        $result = $square->where($map)->update($data);
        if ($result) {
            echo json_encode($result);
        }
    }

    // 删除广场信息
    public function ajaxdeletesquare()
    {
        $map['id'] = input('post.id');
        $square = db('square');
        $result = $square->where($map)->delete();
        db('building')->where('campusId=' . $map['id'])->delete();
        db('floor')->where('campus_id=' . $map['id'])->delete();
        db('aps')->where('campus_id=' . $map['id'])->delete();
        if ($result) {
            echo json_encode($result);
        }
    }

    // 建筑管理
    public function building()
    {
        $building = db('building');
        // 查询
        if (session('mark') == 1) {
            $where = '';
        } else {
            $where['campusId'] = array(
                'in',
                session('rules')
            );
        }
        $building_name = input('get.name');
        if ($building_name) {
            
            $where['building_name'] = array(
                'like',
                "%$building_name%"
            );
        }
        $sql = db('aps')->field(array(
            'count(*)' => 'cnt',
            'building_id'
        ))
            ->group('building_id')
            ->buildSql();
        $result = $building->alias('b')
            ->join([
            'square' => 's'
        ], ' b.campusId = s.id')
            ->field('b.id,l.location_name,b.campusId,s.campus_name,b.building_name,a.cnt')
            ->join([
            'sys_location_info' => 'l'
        ], ' l.location_id = s.location_id')
            ->join([
            $sql => 'a'
        ], " a.building_id = b.id", 'left')
            ->where($where)
            ->paginate(10);
        // echo $building->getlastsql();
        $square = db('square');
        // 根据权限查找广场条件
        if (session('mark') == 1) {
            $wheres = '';
        } else {
            $wheres['id'] = array(
                'in',
                session('rules')
            );
        }
        $square_result = $square->field('id,campus_name')
            ->where($wheres)
            ->select();
        $page = $result->render();
        $this->assign('show', $page);
        $this->assign('square', $square_result);
        $this->assign('list', $result);
        return $this->fetch();
    }

    // 添加建筑ajax
    public function ajaxaddbuilding()
    {
        $data = input('post.');
        $campusresult = db('building')->where($data)->find();
        if ($campusresult) {
            echo 'error';
        } else {
            if ($data['building_name']) {
                $building = db('building');
                $result = $building->insert($data);
                if ($result) {
                    echo json_encode($result);
                }
            }
        }
    }

    // 编辑建筑信息
    public function ajaxeduitbuilding()
    {
        $data = input('post.');
        if ($data['building_name']) {
            $id = input('post.id');
            $building = db('building');
            $result = $building->where('id=' . $id)->update($data);
            if ($result) {
                echo json_encode($result);
            }
        }
    }

    // 删除建筑信息
    public function ajaxdeletebuilding()
    {
        $id = input('post.id');
        $building = db('building');
        $map = $building->where('id=' . $id)->find();
        $result = $building->where('id=' . $id)->delete();
        db('floor')->where('campus_id=' . $map['id'])->delete();
        db('aps')->where('campus_id=' . $map['id'])->delete();
        if ($result) {
            echo json_encode($result);
        }
    }

    // 楼层展示
    public function floor()
    {
        $square = db('square');
        // 查询出广场信息
        // 根据权限查找广场条件
        
        $floor = db('floor');
        // 查询条件
        $request = Request::instance();
        $floor_name = input('get.name');
        $campus_id = input('get.campus_id');
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
        // var_dump($where);
        if (empty($campus_id)) {
            // 获取url里面的请求信息
            $campus_ids = $request->only([
                'campus_id'
            ]);
            if ($campus_ids) {
                $campus_id = $campus_ids['campus_id'];
            }
        }
        // echo $campus_id;exit;
        if (! empty($floor_name) && ! empty($campus_id)) {
            $where['floor_name'] = $floor_name;
            if (in_array($campus_id, session('adminRules'))) {
                $where['campus_id'] = $campus_id;
            }
        } elseif (! empty($floor_name)) {
            $where['floor_name'] = $floor_name;
            session('campus_id', null);
        } elseif (! empty($campus_id)) {
            // 如果广场id在规则里
            if (in_array($campus_id, session('adminRules'))) {
                $where['campus_id'] = $campus_id;
            } else {
                // 否则展示权限了
                $where['campus_id'] = array(
                    'in',
                    session('rules')
                );
            }
            session('campus_id', $campus_id);
        } else {
            session('campus_id', null);
        }
        $sql = db('aps')->field(array(
            'count(*)' => 'cnt',
            'floor_id'
        ))
            ->group('floor_id')
            ->buildSql();
        // echo $floor->getlastsql();
        $floorlist = $floor->join([
            'square' => 's'
        ], ' s.id= floor.campus_id')
            ->join([
            'building' => 'b'
        ], ' b.id = floor.building_id')
            ->join('sys_location_info', 'sys_location_info.location_id = s.location_id')
            ->field('s.campus_name ,floor.floor_name,b.building_name,floor.floor_img_X,floor.floor_img_Y,floor_img_path,sys_location_info.location_name,floor.building_id,floor.campus_id,floor.id,a.cnt,magnification')
            ->join([
            $sql => 'a'
        ], " a.floor_id =floor.id", 'left')
            ->where($where)
            ->paginate(10);
        // echo $floor->getlastsql();
        // var_dump($floorlist);
        $page = $floorlist->render();
        $this->assign('page', $page); // 赋值分页输出
        $this->assign('squarelist', $squarelist);
        $this->assign('floorlist', $floorlist);
        return $this->fetch();
    }

    // 获取建筑信息id
    function getbuilding()
    {
        $id = input('post.id');
        $building = db('building');
        $result = $building->where('campusId=' . $id)->select();
        echo json_encode($result);
    }

    // 获取建筑信息id
    function getbuildings()
    {
        $id = input('post.id');
        $building = db('building');
        $result = $building->where('campusId=' . $id)->select();
        echo json_encode($result);
    }

    // /添加楼层信息
    function ajaxAddFloor()
    {
        $dbo = db('floor');
        $data['campus_id'] = input('post.campus_id');
        $data['building_id'] = input('post.building_id');
        $data['floor_name'] = input('post.floor_name');
        if ($dbo->insert($data)) {
            $id = $dbo->getLastInsID(); // 插入的主键值id
            $where['id'] = $id;
            $dates['floor_map_id'] = $id;
            $dates['floor_id'] = $id;
            $dbo->where($where)->update($dates);
            echo 'ok';
        } else {
            echo 'no';
        }
    }

    // 修改楼层信息
    public function ajaxEdiFloor()
    {
        $dbo = db('floor');
        $data = input('post.');
        if ($dbo->update($data)) {
            echo 'ok';
        } else {
            echo 'no';
        }
    }

    // 删除楼层信息
    public function deletefloor()
    {
        $map['id'] = input('post.id');
        if ($map) {
            $floorimg = db('floor')->where($map)->find();
            $floorimgpath = $floorimg['floor_img_path'];
            if ($floorimgpath) {
                unlink("./Public/$floorimgpath");
            }
            $result = db('floor')->where($map)->delete();
            $where['floor_id'] = input('post.id');
            db('aps')->where($where)->delete();
        }
        echo json_encode($result);
    }

    // 地图上传
    public function upload()
    {
        $file = request()->file('image');
        $campus_id = input('campus_id_up');
        $building_id = input('building_id_up');
        $floor_id = input('floor_id_up');
        $filename = $campus_id . '_' . $building_id . '_' . $floor_id; // 按照广场id建筑id楼层id生成文件名
        $page = input('post.page');
        if (empty($page)) {
            $page = 1;
        }
        // 移动到框架应用根目录/public/uploads/ 目录下
        $info = $file->rule('uniqid')
            ->validate([
            'size' => 6553500,
            'ext' => 'jpg,png,gif,jpeg'
        ])
            ->move(ROOT_PATH . 'public' . DS . 'map', "$filename");
        if ($info) {
            // 成功上传后 获取上传信息
            $dbo = db("floor");
            $data['floor_img_X'] = 0;
            $data['floor_img_Y'] = 0;
            $data['PhysicalSizeX'] = input('post.floorXSize');
            $data['PhysicalSizeY'] = input('post.floorYSize');
            $data['floor_img_path'] = 'map/' . $info->getSaveName();
            $data['id'] = $floor_id;
            if ($dbo->update($data)) {
                // $dbo->getlastsql();exit;
                $campus_id = session('campus_id');
                // echo $campus_id;exit;
                $array = getimagesize(ROOT_PATH . 'public' . DS . 'map' . DS . $info->getSaveName());
                $width = $array[0];
                $height = $array[1];
                if ($height >= 8000) {
                    $wh['floor_img_X'] = $width / 16;
                    $wh['floor_img_Y'] = $height / 16;
                } else if ($height >= 7000) {
                    $wh['floor_img_X'] = $width / 14;
                    $wh['floor_img_Y'] = $height / 14;
                } else if ($height >= 6000) {
                    $wh['floor_img_X'] = $width / 12;
                    $wh['floor_img_Y'] = $height / 12;
                } else if ($height >= 5000) {
                    $wh['floor_img_X'] = $width / 10;
                    $wh['floor_img_Y'] = $height / 10;
                } else if ($height >= 4000) {
                    $wh['floor_img_X'] = $width / 8;
                    $wh['floor_img_Y'] = $height / 8;
                } else if ($height >= 3000) {
                    $wh['floor_img_X'] = $width / 6;
                    $wh['floor_img_Y'] = $height / 6;
                } else if ($height >= 2000) {
                    $wh['floor_img_X'] = $width / 4;
                    $wh['floor_img_Y'] = $height / 4;
                } else if ($height >= 1000) {
                    $wh['floor_img_X'] = $width / 2;
                    $wh['floor_img_Y'] = $height / 2;
                } else {
                    $wh['floor_img_X'] = $width;
                    $wh['floor_img_Y'] = $height;
                }
                
                $wh['id'] = $floor_id;
                $dbo->update($wh);
                // var_dump($array);exit;
                $this->success('上传图片成功', "floor?page=$page&campus_id=$campus_id");
            } else {
                $this->success('上传图片失败', "floor");
            }
        } else {
            // 上传失败获取错误信息
            echo $file->getError();
        }
    }

    // 拿到所有的省级
    public function getAllProvinces()
    {
        $pro = Db::table('sys_location_info')->where('parent_location_id=0')->select();
        return $pro;
    }

    //
    public function ajaxGetAreasByCityId()
    {
        $id = $_POST['location_id'];
        $dbo = db('sys_location_info');
        $citys = $dbo->where('parent_location_id=' . $id)->select();
        
        echo json_encode($citys);
    }
}

?>