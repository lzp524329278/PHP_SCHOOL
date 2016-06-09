<?php

namespace Home\Controller;

use Think\Controller;

class UserController extends Controller {

    function init() {
        header("Content-type:text / html;charset = utf-8");
    }

    public function login() {
        $this->display();
    }

    public function register() {
        if (!empty($_POST)) {
            $user = new \Home\Model\UserModel();
            if ($user->register($_POST)) {
                 $this->assign("title", "注册成功");
                 $this->assign("message", "注册成功,3秒后跳转至登录页面");
                 $this->assign("redirect_link", __CONTROLLER__."/login.html");
                $this->display("../public/html/message");
                redirect(__CONTROLLER__."/login.html", 3);
            }
        } else {
            $this->display();
        }
    }

}
