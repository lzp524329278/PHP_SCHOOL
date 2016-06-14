<?php

namespace Home\Controller;

use Think\Controller;

class SearchController extends Controller {

    public function index() {
        if (isset($_GET)&&!empty($_GET)) {
            
            $now_page=isset($_GET['page'])?$_GET['page']:1;
<<<<<<< HEAD
            $orderby=isset($_GET['orderby'])?$_GET['orderby']:'sale_num';
=======
            $orderby=isset($_GET['orderby'])?$_GET['orderby']:'sale_num_month';
>>>>>>> eca857d6cdd15586d8a785693bd5cf009ea61bff
            $filter='null';
            if(isset($_GET['filter_class'])&&isset($_GET['filter'])){
                $filter=$_GET['filter_class']."='".$_GET['filter']."'";
            }
            
            $goods = new \Home\Model\GoodsModel();
            $result = $goods->select_search($_GET['keyword'],$now_page,$orderby,$filter);
            $return=array(
                'color'=>$goods->select_search_color_count($_GET['keyword']),
                'brand'=>$goods->select_search_brand_count($_GET['keyword']),
                'keyword'=>$_GET['keyword'],
                'result'=>$result,
                'now_page'=>$now_page,
                'total_page'=>ceil($goods->select_search_count($_GET['keyword'])/9)
            );
            $this->ajaxReturn($return,'JSON',JSON_UNESCAPED_UNICODE);
        }else if(isset($_POST)&&!empty($_POST)) {
            $now_page=isset($_POST['page'])?$_POST['page']:1;
<<<<<<< HEAD
            $orderby=isset($_POST['orderby'])?$_POST['orderby']:'sale_num';
=======
            $orderby=isset($_POST['orderby'])?$_POST['orderby']:'sale_num_month';
>>>>>>> eca857d6cdd15586d8a785693bd5cf009ea61bff
            $filter='null';
            if(isset($_POST['filter_class'])&&isset($_POST['filter'])){
                $filter=$_POST['filter_class']."='".$_POST['filter']."'";
            }
            
            $goods = new \Home\Model\GoodsModel();
            $result = $goods->select_search($_POST['keyword'],$now_page,$orderby,$filter);
            
            $return=array(
                'color'=>$goods->select_search_color_count($_POST['keyword']),
                'brand'=>$goods->select_search_brand_count($_POST['keyword']),
                'keyword'=>$_POST['keyword'],
                'result'=>$result,
                'now_page'=>$now_page,
                'total_page'=>ceil(($goods->select_search_count($_POST['keyword'])/9))
            );
            $this->assign('return', $return);
            $this->display();
        }
    }
<<<<<<< HEAD
=======
//    private function get_brand($result){
//        
//        $brand_name=array();
//        $brand_count=array();
//        foreach($result as $item){
//            
//            $num=array_search($item['brand'],$brand_name);
//            if($num!==false){
//                $brand_count[$num]++;
//            }else{
//                array_push($brand_name,$item['brand']);
//                array_push($brand_count,1);
//            }
//        }
//        $brand=array(
//            'brand_name'=>$brand_name,
//            'brand_count'=>$brand_count
//        );
//        return $brand;
//    }
//    private function get_color($result){
//        $color=array();
//        $color_name=array();
//        $color_count=array();
//        foreach($result as $item){
//           // isset($color["'".$item['color']."'"])?$color["'".$item['color']."'"]++:$color["'".$item['color']."'"]=1;
//            $num=array_search($item['color'],$color_name);
//            if($num!==false){
//                $color_count[$num]++;
//            }else{
//                array_push($color_name,$item['color']);
//                array_push($color_count,1);
//            }
//        }
//        $color=array(
//            'color_name'=>$color_name,
//            'color_count'=>$color_count
//        );
//        return $color;
//    }
//    public function search() {
//        $this->display();
//    }

>>>>>>> eca857d6cdd15586d8a785693bd5cf009ea61bff
}
