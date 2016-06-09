<?php

namespace Home\Controller;

use Think\Controller;

class UserController extends Controller {

    public function login() {
        if (!empty($_POST)) {
            $user = new \Home\Model\UserModel();
            $result = $user->login($_POST);
            if ($result) {
                session('user_name',$result);
                session('user_id',$_POST['user_id']);
               //session(array('name'=>'use_name','expire'=>3600));
//                $this->assign("title", "登录成功");
//                $this->assign("message", "登录成功,3秒后跳转至首页面");
//                $this->assign("redirect_link", INDEX_PATH);
//                $this->display("../public/html/message");
                //redirect(INDEX_PATH);
                $return['result']=true;
                $return['user_name']=$result;
                $this->ajaxReturn($return,'JSON',JSON_UNESCAPED_UNICODE);
            } else {
                $return['result']=false;
                //$this->assign('error', '用户名或密码错误');
                $this->ajaxReturn($return);
                //$this->display();
            }
        } else {
            //$return=false;
            //$this->ajaxReturn($return);
            $this->display();
        }
    }

    public function logout() {
        session(null);
        redirect(INDEX_PATH);
    }
    public function register() {
        if (!empty($_POST)) {
            $user = new \Home\Model\UserModel();
            if (!$user->create($_POST)) {
                // 如果创建失败 表示验证没有通过 输出错误提示信息
                header('Content-Type:text/html; charset=utf-8');
                $error = $user->getError();
                $this->assign('error', $error);
                $this->assign('post', $_POST);
                $this->display();
            } else {
                // 验证通过 可以进行其他数据操作
                if ($user->register($_POST)) {
                    $this->assign("title", "注册成功");
                    $this->assign("message", "注册成功,3秒后跳转至登录页面");
                    $this->assign("redirect_link", __CONTROLLER__ . "/login.html");
                    $this->display("../public/html/message");
                    redirect(__CONTROLLER__ . "/login.html", 3);
                } else {

                    $this->display();
                }
            }
        } else {
            $this->display();
        }
    }

}
