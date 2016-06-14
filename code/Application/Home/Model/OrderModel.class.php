<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Home\Model;

/**
 * Description of OrderModel
 *
 * @author Administrator
 */
use Think\Model;

class OrderModel extends Model {

    public function getAllOrder() {
        if(isset($_SESSION['user_id'])&&!empty($_SESSION['user_id'])){
            $result=$this->where("user_id=".$_SESSION['user_id'])->select();
            return $result;
        }
    }
    public function addOrder($data){
        if(isset($_SESSION['user_id'])&&!empty($_SESSION['user_id'])){
            $result=$this->data($data)->add();
            return $result;
        }
    }

}
