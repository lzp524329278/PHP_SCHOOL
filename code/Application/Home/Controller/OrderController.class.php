<<<<<<< HEAD
<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Home\Controller;

/**
 * Description of OrderController
 *
 * @author Administrator
 */
use Think\Controller;

class OrderController extends Controller {
    public function index(){
        $order=new \Home\Model\OrderModel();
        $goods=new \Home\Model\GoodsModel();
        $result=$order->getAllOrder();
        for ($i=0;$i<count($result);$i++){
            $goods_name=$goods->select_goods_detail($result[$i]['goods_id']);
            if($goods_name){
                $result[$i]['name']=$goods_name[0]['name'];
                $result[$i]['img1']=$goods_name[0]['img1'];
            }
            
        }
        $this->assign("result", $result);
        $this->display();
    }
}
=======
<?php

namespace Home\Controller;

use Think\Controller;

class OrderController extends Controller {

    public function index(){
        $this->display();
    }
}
>>>>>>> eca857d6cdd15586d8a785693bd5cf009ea61bff
