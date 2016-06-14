<?php

namespace Home\Controller;

use Think\Controller;

class ShoppingcartController extends Controller {

    public function index() {
        if (!empty($_SESSION['user_id'])) {
            if (isset($_GET['id'])) {
                if (isset($_GET['func'])) {
                    $shoppingcart = new \Home\Model\ShoppingcartModel();
                    if ($_GET['func'] == 'change') {
                        if (!empty($_GET['num'])) {
                            if ($shoppingcart->change_shoppingcart($_GET['id'], $_GET['num'])) {
                                $this->ajaxReturn(array('result' => true, 'total_price' => $shoppingcart->get_shoppingcart_money()), 'JSON', JSON_UNESCAPED_UNICODE);
                            } else {
                                $this->ajaxReturn(array('result' => false), 'JSON', JSON_UNESCAPED_UNICODE);
                            }
                        }
                    } else if ($_GET['func'] == 'delete') {
                        if ($shoppingcart->delete_shoppingcart($_GET['id'])) {
                            $this->ajaxReturn(array('result' => true, 'total_price' => $shoppingcart->get_shoppingcart_money()), 'JSON', JSON_UNESCAPED_UNICODE);
                        } else {
                            $this->ajaxReturn(array('result' => false), 'JSON', JSON_UNESCAPED_UNICODE);
                        }
                    }
                }
            } else {
                $shoppingcart = new \Home\Model\ShoppingcartModel();
                if (isset($_GET['func'])) {
                    if ($_GET['func'] == 'deleteall') {
                        if ($shoppingcart->delete_all_shoppingcart()) {
                            $this->ajaxReturn(array('result' => true, 'total_price' => $shoppingcart->get_shoppingcart_money()), 'JSON', JSON_UNESCAPED_UNICODE);
                        } else {
                            $this->ajaxReturn(array('result' => false), 'JSON', JSON_UNESCAPED_UNICODE);
                        }
                    }
                } else if (isset($_SESSION['user_id'])) {

                    $result = $shoppingcart->get_all_shoppingcart();
                    if ($result) {
                        $goods = new \Home\Model\GoodsModel();
                        for ($i = 0; $i < count($result); $i++) {
                            $temp = $goods->select_goods_shoppingcart($result[$i]['goods_id'])[0];
                            $result[$i]['name'] = $temp['name'];
                            $result[$i]['img1'] = $temp['img1'];
                        }
                        $this->assign('result', $result);
                    }
                }
                $this->display();
            }
        } else {
            $this->show("<script type='text/javascript'src='" . HOME_PUBLIC . "js/easydialog.min.js'></script>"
                    . "<style>* { margin:0;padding:0; }</style>"
                    . "<script type='text/javascript' src='" . HOME_PUBLIC . "js/jquery-1.11.1.min.js'></script>"
                    . "<link href='" . HOME_PUBLIC . "css/easydialog.css' rel='stylesheet' type='text/css' />"
                    . "<script>window.onload=function (){easyDialog.open({
                        container : {
                          header : '提示',
                          content : '您还没有登陆，将在2秒后跳转到首页 '
                        },
                        autoClose : 2000,
                        drag : false,
                        callback: function(){window.location='../Index/index';}
                      });
                      };</script>");
        }
    }

    public function addToShoppingcart() {
        if (!empty($_SESSION['user_id'])) {
            if (isset($_GET['goods_id']) && !empty($_GET['goods_id']) && isset($_GET['num']) && !empty($_GET['num'])) {
                $data = array(
                    'user_id' => $_SESSION['user_id'],
                    'goods_id' => $_GET['goods_id'],
                    'num' => $_GET['num']
                );
                $shoppingcart = new \Home\Model\ShoppingcartModel();
                if ($shoppingcart->addToShoppingcart($data)) {
                    $this->redirect('index');
                }
            }
        } else {
            $this->show("<script type='text/javascript'src='" . HOME_PUBLIC . "js/easydialog.min.js'></script>"
                    . "<style>* { margin:0;padding:0; }</style>"
                    . "<script type='text/javascript' src='" . HOME_PUBLIC . "js/jquery-1.11.1.min.js'></script>"
                    . "<link href='" . HOME_PUBLIC . "css/easydialog.css' rel='stylesheet' type='text/css' />"
                    . "<script>window.onload=function (){easyDialog.open({
                        container : {
                          header : '提示',
                          content : '您还没有登陆，将在2秒后跳转到首页 '
                        },
                        autoClose : 2000,
                        drag : false,
                        callback: function(){window.location='../Index/index';}
                      });
                      };</script>");
        }
    }

    public function buy() {
        if (!empty($_SESSION['user_id']) && isset($_SESSION['user_id'])) {
            if (isset($_GET['confirm'])) {
                //$this->display('detail');
                $flag=true;
                $shoppingcart=new \Home\Model\ShoppingcartModel();
                $order=new \Home\Model\OrderModel();
                $shoppingcart_result=$shoppingcart->get_all_shoppingcart();
                //dump($shoppingcart_result);
                $order_id=$order->query("select max(order_id)+1 as order_id from legoushop.legoushop_order");
                if($order_id[0]['order_id']==1||$order_id[0]['order_id']==NULL){
                    $order_id[0]['order_id']='1000000000000000';
                }
                if($shoppingcart_result){
                    for($i=0;$i<count($shoppingcart_result);$i++){
                        unset($shoppingcart_result[$i]['id']);
                        $shoppingcart_result[$i]['user_id']=  session('user_id');
                        $shoppingcart_result[$i]['status']=1;
                        $shoppingcart_result[$i]['order_id']=$order_id[0]['order_id'];
                         dump($shoppingcart_result);
                        if(!$order->addOrder($shoppingcart_result[$i])){
                            $flag=false;
                        }
                    }
                }
                $shoppingcart_result=$shoppingcart->delete_all_shoppingcart();
                $this->redirect("Order/index");
            } else {
                $this->show("<script type='text/javascript'src='" . HOME_PUBLIC . "js/easydialog.min.js'></script>"
                        . "<style>* { margin:0;padding:0; }</style>"
                        . "<script type='text/javascript' src='" . HOME_PUBLIC . "js/jquery-1.11.1.min.js'></script>"
                        . "<link href='" . HOME_PUBLIC . "css/easydialog.css' rel='stylesheet' type='text/css' />"
                        . "<script>
                        var btnYesFn = function(){
                            window.location='__ACTION__?confirm=1';
                            return true;
                          };
                          var btnNoFn = function(){
                            history.go(-1)
                            return true;
                          };
                        window.onload=function (){easyDialog.open({
                        container : {
                          header : '提示',
                          content : '共计" . $_SESSION['shoppingcart_money'] . "，确认购买？ ',
                         yesFn : btnYesFn,
                         noFn : btnNoFn
                        }
                      });
                      };</script>");
            }
        }
    }

}
