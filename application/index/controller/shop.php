<?php
/**
 * Created by PhpStorm.
 * User: xiaoxie
 * Date: 2017/3/10
 * Time: 12:46
 * shop
 */
namespace app\index\controller;

use think\Controller;
use think\Db;
use think\Session;
use think\Request;
use \think\Url;

class Shop extends Controller
{

    public function index()
    {
        $request = Request::instance();
        
        $index = $request->pathinfo();
        if ($index == '/') {
            $request->root("index.php");
        }
        return $this->fetch();
    }

    public function shop()
    {
        return $this->fetch();
    }
}
?>