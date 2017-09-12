<?php
/**
 * Created by PhpStorm.
 * User: xiaoxie
 * Date: 2017/3/10
 * Time: 12:46
 * 登录
 */
namespace app\index\controller;

use think\Controller;
use think\Db;
use think\Session;
use think\Request;
use \think\Url;

class Login extends Controller
{

    // 展示登录页面
    public function index()
    {
        $request = Request::instance();
        
        $index = $request->pathinfo();
        if ($index == '/') {
            $request->root("index.php");
        }
        return $this->fetch();
    }

    public function dologin()
    {
        $commager = Db::table('commager');
        $where['loginName'] = input('post.usernamefld');
        $where['passwd'] = md5(input('post.passwordfld'));
        $result = $commager->where($where)->find();
        if ($result) {
            Session::set('admin', input('post.usernamefld'));
            Session::set('mark', $result['mark']);
            Session::set('rules', $result['rules']);
            $ruleArr = explode(',', substr($result['rules'], 0, - 1));
            Session::set('adminRules', $ruleArr);
            Session::set('id', $result['id']);
            $this->redirect('Index/index');
        } else {
            $this->error('密码错误', 'index/Login/index');
        }
    }

    // 退出登录
    public function loginOut()
    {
        $sessionname = session('admin');
        if (isset($sessionname)) {
            // setcookie(session_name(),'',time()-1,'/');
            session('admin', null);
        }
        session_destroy();
        $this->redirect('Login/index');
    }
}
?>