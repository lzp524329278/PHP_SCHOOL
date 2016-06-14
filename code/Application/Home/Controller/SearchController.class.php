<?php

namespace Home\Controller;

use Think\Controller;

class SearchController extends Controller {

    public function index() {
        if (isset($_GET)&&!empty($_GET)) {
            
            $now_page=isset($_GET['page'])?$_GET['page']:1;
            $orderby=isset($_GET['orderby'])?$_GET['orderby']:'sale_num';
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
            $orderby=isset($_POST['orderby'])?$_POST['orderby']:'sale_num';
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
}
