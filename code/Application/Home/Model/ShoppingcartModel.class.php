<?php

namespace Home\Model;

use Think\Model;

class ShoppingcartModel extends Model {

    //查询当前购物车的价格总额
    public function get_shoppingcart_money() {
        //设置查询字段为个数和单价
        $this->field('num,per_price');
        //设置查询条件
        $condition['user_id'] = session('user_id');
        $this->where($condition);
<<<<<<< HEAD

        $result = $this->select();
        if (!$result) {
            return '0.00元';
        }
        $total = 0.0;
        foreach ($result as $row) {
            $total+=$row['num'] * $row['per_price'];
        }
        return $total . '元';
    }

    public function get_all_shoppingcart() {
        if (isset($_SESSION['user_id'])) {
            $this->field('id,goods_id,num,per_price');
            $condition['user_id'] = session('user_id');
            $this->where($condition);
            $result = $this->select();
            return $result;
        }
        return false;
    }

    public function addToShoppingcart($data) {
        $goods = new \Home\Model\GoodsModel();
        $result = $goods->field('price,discount_status,discount_price')->where("goods_id=" . $data['goods_id'])->select();
        if ($result) {
            $data['per_price'] = $result[0]['discount_status'] ? $result[0]['discount_price'] : $result[0]['price'];

            //先判断购物车中是否存在这个商品，并且价格一致，是的话直接改商品购买量，否则就新增条目
            $num = $this->field('id,num')->where("goods_id=" . $data['goods_id'] . " AND user_id=" . $data['user_id'] . " AND per_price=" . $data['per_price'])->select();
            if ($num) {
                $data['num'] = $num[0]['num'] + $data['num'];
                dump($data);
                if ($this->where('id=' . $num[0]['id'])->save($data)) {
                    session('shoppingcart_money', $this->get_shoppingcart_money());
                    return true;
                }
            } else {
                dump($data);
                if ($this->add($data)) {
                    session('shoppingcart_money', $this->get_shoppingcart_money());
                    return true;
                }
            }
        }
        return false;
    }

    public function change_shoppingcart($id, $num) {
//        $sql = "update legoushop.legoushop_shoppingcart set num='$num' where id='$id'";
//        return $this->query($sql);
        if (isset($_SESSION['user_id'])) {
            $data['num'] = $num;
            $result = $this->where("id=$id")->save($data);
            if ($result) {// 根据条件更新记录
                session('shoppingcart_money', $this->get_shoppingcart_money());
            }
            return $result;
        }
        return false;
    }

    public function delete_shoppingcart($id) {
        //$sql="delete from legoushop.legoushop_shoppingcart where id='$id'";
        //return $this->query($sql);
        if (isset($_SESSION['user_id'])) {
            $result = $this->delete($id);
            if ($result) {// 根据条件更新记录
                session('shoppingcart_money', $this->get_shoppingcart_money());
            }
            return $result;
        }
        return false;
    }

    public function delete_all_shoppingcart() {
        if (isset($_SESSION['user_id'])) {
            $result = $this->where("user_id=".$_SESSION['user_id'])->delete();
            if ($result) {// 根据条件更新记录
                session('shoppingcart_money', $this->get_shoppingcart_money());
            }
            return $result;
        }
        return false;
=======
        
        $result=$this->select();
        if(!$result){
            return '0.00元';
        }
        $total=0.0;
        foreach ($result as $row) {
            $total+=$row['num']*$row['per_price'];
        }
        return $total.'元';
        
>>>>>>> eca857d6cdd15586d8a785693bd5cf009ea61bff
    }

}
