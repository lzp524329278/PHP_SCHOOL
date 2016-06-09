<?php

namespace Home\Controller;

use Think\Controller;

class IndexController extends Controller {

    public function index() {
        if (session('?user_id')) {
            $shoppingcart = new \Home\Model\ShoppingcartModel();
            session('shoppingcart_money', $shoppingcart->get_shoppingcart_money());
        }
        $goods = new \Home\Model\GoodsModel();

        //查找最热商品
        $hot_goods = $goods->select_hot_goods();

        //查找最新商品
        $new_goods = $goods->select_new_goods();

        //查找促销商品
        $discount_goods = $goods->select_discount_goods();



        //$hot_goods[0] = array('name' => 'sdf', 'price' => '123', 'img1' => HOME_PUBLIC . "images/p1.jpg");
        $new_goods[0] = array('name' => 'sdf', 'price' => '123', 'img1' => HOME_PUBLIC . "images/n1.jpg");
        $discount_goods[0] = array('name' => 'sdf', 'price' => '123', 'discount_price' => '123', 'img1' => HOME_PUBLIC . "images/thumb1.jpg");

        $this->assign('hot_goods', $hot_goods);
        $this->assign('new_goods', $new_goods);
        $this->assign('discount_goods', $discount_goods);
        $this->display();
    }

}
