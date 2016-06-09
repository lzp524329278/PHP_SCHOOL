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
        
        $result=$this->select();
        if(!$result){
            return '0.00元';
        }
        $total=0.0;
        foreach ($result as $row) {
            $total+=$row['num']*$row['per_price'];
        }
        return $total.'元';
        
    }

}
