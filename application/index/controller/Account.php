<?php
/**
 * Created by PhpStorm.
 * User: xiaoxie
 * Date: 2017/3/13
 * Time: 14:48
 */
namespace app\index\controller;

use think\Controller;
use think\Session;
use think\Request;
use think\Exception;

class Account extends Common
{

    public function xiugai()
    {
        return $this->fetch();
    }

    public function ajaxupdatepassword()
    {
        $password = md5(input('post.password'));
        $password1 = input('post.password1');
        $password2 = input('post.password2');
        $commager = db('commager');
        $name = session('admin');
        $result = $commager->where("loginName='$name'")->find();
        // echo $commager->getLastSql();exit;
        $passwd = $result['passwd'];
        // echo $passwd;exit;
        if (empty($password) || empty($password1) || empty($password2)) {
            exit();
        }
        if ($password1 == $password2) {
            if ($password == $passwd) {
                $data['passwd'] = md5($password2);
                $msg['msg'] = $commager->where("loginName='$name'")->update($data);
                
                if ($msg['msg']) {
                    // $this->ajaxReturn($msg);
                    echo json_encode($msg);
                } else {
                    $msg['msg'] = '4'; // 密码不符合
                    echo json_encode($msg);
                }
            } else {
                $msg['msg'] = '3'; // 密码不符合
                echo json_encode($msg);
            }
        } else {
            $msg['msg'] = '2'; // 两个密码不匹配符合
            echo json_encode($msg);
        }
    }

    /**
     * *权限管理
     */
    public function member()
    {
        if (Request::instance()->isPost()) {
            $data['loginName'] = input('username');
            $user = db('commager')->where($data)->find();
            if ($user) {
                $this->error('用户名已存在');
                exit();
            }
            $data['passwd'] = md5(input('password'));
            $data['addtime'] = date('Y-m-d H:i:s');
            $re = db('commager')->insert($data);
            if ($re) {
                $this->success('添加成功');
            } else {
                $this->errot('新增失败');
                exit();
            }
        }
        return $this->fetch();
    }

    /**
     * *分配规则
     */
    public function rules()
    {
        $where['id'] = input('id');
        // 提交新增
        if (Request::instance()->isPost()) {
            $datas = input('post.');
            if ($datas) {
                $ruledata['rules'] = implode(",", $datas['rules']);
            } else {
                $ruledata['rules'] = '';
            }
            $res = db('commager')->where($where)->update($ruledata);
            if ($res) {
                $this->success('权限增加成功');
            } else {
                // print_r($ruledata);exit;
            }
        }
        // 查询管理员规则
        $adminlist = db('commager')->where($where)->find();
        if ($adminlist) {
            if ($adminlist['rules']) {
                $adminRule = explode(',', $adminlist['rules']);
            } else {
                $adminRule = [];
            }
        } else {
            exit('管理员不存在');
        }
        $lists = db('square')->field('id,campus_name')->select();
        if ($lists) {
            foreach ($lists as $key => $list) {
                
                if (in_array($list['id'], $adminRule)) {
                    $list['checked'] = 'checked';
                } else {
                    
                    $list['checked'] = '0';
                }
                $data[] = $list;
            }
        }
        // print_r($data);
        $this->assign('lists', $data);
        return $this->fetch();
    }

    /**
     * *管理员列表
     */
    public function memberlist()
    {
        $lists = db('commager')->paginate('10');
        $this->assign('lists', $lists);
        return $this->fetch('members');
    }

    public function ajaxdeleteadnin()
    {
        $where['id'] = input('id');
        $res = db('commager')->where($where)->delete();
        if ($res) {
            $data['status'] = 'success';
        } else {
            $data['status'] = 'error';
        }
        echo json_encode($data);
    }
}

