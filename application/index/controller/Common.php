<?php
/**
 * Created by PhpStorm.
 * User: xiaoxie
 * Date: 2017/3/10
 * Time: 12:46
 * 公共
 */
namespace app\index\Controller;

use think\Controller;
use think\Session;
use think\Db;

class Common extends Controller
{

    // 检测登录
    public function _initialize()
    {
        $session = session('admin');
        if (! isset($session)) {
            $this->redirect('login/index');
        }
    }
}

?>