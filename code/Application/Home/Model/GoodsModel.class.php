<?php

namespace Home\Model;

use Think\Model;

class GoodsModel extends Model {

    private $select_hot_good_num = 4;
    private $select_new_good_num = 5;
    private $select_discount_good_num = 3;

    public function select_hot_goods() {
        $sql = "select name,price,img1,amount from legoushop.legoushop_goods order by amount DESC limit " . $this->select_hot_good_num;
        return $this->query($sql);
    }

    public function select_new_goods() {

        $sql = "select name,price,img1,create_time from legoushop.legoushop_goods order by create_time DESC limit " . $this->select_new_good_num;
        return $this->query($sql);
    }

    public function select_discount_goods() {

        $sql = "select name,price,discount_price,img1,discount_start_time,discount_end_time,create_time from legoushop.legoushop_goods where discount_status=1 and discount_start_time<now() and discount_end_time>now() order by create_time DESC limit " . $this->select_discount_good_num;
        return $this->query($sql);
    }

    public function select_search($keyword, $pageNow = 1, $orderby = 'sale_num_month',$filter) {
        switch ($orderby){
            case 'sale_num':
                $order='order by sale_num_month';
                $desc='DESC';
                break;
            case 'price_desc':
                $order="order by case discount_status  when 0 then  price when 1 then  discount_price end";
                $desc='DESC';
                break;
            case 'price_asc':
                $order="order by case discount_status  when 0 then  price when 1 then  discount_price end";
                $desc='ASC';
                break;
        }
        if($filter!="null"){
            $filter=" and ".$filter." ";
        }else{
            $filter='';
        }
        $pageSize=9;
        $start = ($pageNow - 1) * $pageSize;
        $sql = "select goods_id,name,brand,price,color,details,discount_status,discount_price,img1,discount_start_time,discount_end_time,create_time from legoushop.legoushop_goods where keyword like '%$keyword"
                . "%' $filter  $order $desc limit $start,$pageSize";
        return $this->query($sql);
    }
    public function select_search_count($keyword){
        return $this->where('keyword like'."'%$keyword%'")->count();
    }
    public function select_search_color_count($keyword){
        return( $this->query("SELECT color ,count(*) as count FROM legoushop.legoushop_goods where keyword like '%$keyword%' group by color"));
    }
    public function select_search_brand_count($keyword){
        return $this->query("SELECT brand ,count(*) as count FROM legoushop.legoushop_goods where keyword like '%$keyword%' group by brand");
    }
}
