<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Home\Controller;

/**
 * Description of GoodsController
 *
 * @author Administrator
 */
use Think\Controller;

class GoodsController  extends Controller{
    //put your code here
    public function index(){
<<<<<<< HEAD
        if(isset($_GET)&&$_GET['goods_id']){
            $gooods=new \Home\Model\GoodsModel();
            $result=$gooods->select_goods_detail($_GET['goods_id']);
            $other=$gooods->select_search($result[0]['keyword'],1,'sale_num_month',"null","goods_id !='".$_GET['goods_id']."'",4);
            $other2=$gooods->select_search('',1,'sale_num_month',"null","goods_id !='".$_GET['goods_id']."'",4);
            //接口操作
            if(isset($_GET['func'])&&$_GET['func']==='json'){
                $json['result']=$result;
                $json['other']=$other;
                $this->ajaxReturn($result,'JSON',JSON_UNESCAPED_UNICODE);
            }else{ 
                
                $this->assign("result", $result[0]);
                $this->assign('other',$other);
                $this->assign('other2',$other2);
                $this->display();
                //dump($result[0]);
                //dump($other);
            }
        }
=======
        $this->display();
>>>>>>> eca857d6cdd15586d8a785693bd5cf009ea61bff
    }
}
