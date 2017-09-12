<?php
/**
 * Created by PhpStorm.
 * User: xiaoxie
 * Date: 2017/3/10
 * Time: 12:46
 */
namespace app\index\controller;

use think\Db;

class Index extends Common
{

    public function index()
    {
        // 广场数量
        $square = Db::table('square');
        $squarecount = $square->count();
        $buildingcount = Db::table('building')->count();
        $floorcount = Db::table('floor')->count();
        $apcount = Db::table('aps')->count();
        $this->assign('squarecount', $squarecount);
        $this->assign('buildingcount', $buildingcount);
        $this->assign('floorcount', $floorcount);
        $this->assign('apcount', $apcount);
        return $this->fetch();
    }
}
