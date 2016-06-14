<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<html>
    <head>
        <title>订单列表</title>
    <head>
    <script type="application/x-javascript">
        addEventListener("load", function() { setTimeout(hideURLbar, 0);}, false); 
        function hideURLbar(){ 
        window.scrollTo(0,1); 
        } 
    </script>
    <!-- jQuery 组件导入 -->
    <link href="<?php echo HOME_PUBLIC; ?>css/bootstrap.css" rel='stylesheet' type='text/css' />

    <!-- Custom Theme files -->
    <link href="<?php echo HOME_PUBLIC; ?>css/style.css" rel='stylesheet' type='text/css' />
    <!-- Custom Theme files -->
    <!--webfont-->

    <script type="text/javascript" src="<?php echo HOME_PUBLIC; ?>js/jquery-1.11.1.min.js"></script>
    <!-- start menu -->
    <link href="<?php echo HOME_PUBLIC; ?>css/megamenu.css" rel="stylesheet" type="text/css" media="all" />
    <script type="text/javascript" src="<?php echo HOME_PUBLIC; ?>js/megamenu.js"></script>
<script type='text/javascript' src='<?php echo HOME_PUBLIC;?>js/easydialog.min.js'></script>
<link href='<?php echo HOME_PUBLIC;?>css/easydialog.css' rel='stylesheet' type='text/css' />
<script>
    function dialog(title,text){
        easyDialog.open({
            container : {
                header : title,
                content : text
            },
            autoClose : 2000,
            drag : false,
            callback: function(){window.location='../Index/index';}
            });        
    }
</script>
    <script>$(document).ready(function () {
            $(".megamenu").megamenu();
        });
        function stopEnter() {
            if (event.keyCode == 13)
            {
                return false;
            }
        }
        function ajaxFunction() {
            var xmlHttp = false;
            try {
                xmlHttp = new ActiveXObject("Msxml2.XMLHTTP"); // ie msxml3.0+（IE7.0及以上）  
            } catch (e) {
                //alert('第一个不好使');
                try {
                    xmlHttp = new ActiveXObject("Microsoft.XMLHTTP"); //ie msxml2.6（IE5/6）  
                } catch (e2) {
                    //alert('第二个不好使');
                    xmlHttp = new XMLHttpRequest();
                }
            } finally {
               // alert(xmlHttp);
                return xmlHttp;
            }
        }
//function 
        function check_search() {
            if (document.search_form.keyword.value == '商品搜索') {
                //alert('请输入搜索条件');
                dialog('提示','请输入搜索条件');
            } else {
                if (document.getElementById('orderby')) {
                    document.getElementById('orderby').value = 'orderby';
                }
                //window.location='/PHP_SCHOOL/code/index.php/Home/Search/index?page=1&keyword='+document.search_form.keyword.value;
                return true;
            }
            return false;
        }
        var temp = "";
        var flag = true;
        function do_ajax(func, url, send, callback) {
            var xhr = ajaxFunction();
            if (!xhr) {
                return false;
            }
            xhr.onreadystatechange = function () {
                if (xhr.readyState == 4 && xhr.responseText) {
                    //console.log(xhr.responseText);
                    callback(xhr.responseText);
                }
            }
            xhr.open(func, url);
            if(func=='post'){
                xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
            }
            xhr.send(send);
        }
        function ajax_get_login() {
            do_ajax('get', '/PHP_SCHOOL/code/index.php/Home/User/login.html', null, function (data) {
                if (flag) {
                    temp = document.getElementById('content').innerHTML;
                    flag = false;
                }
                document.getElementById('content').innerHTML = data;
            });
        }
        function ajax_post_login() {
            var formdata="user_id="+document.login_form.user_id.value+"&password="+document.login_form.password.value;
            
            do_ajax('post', '/PHP_SCHOOL/code/index.php/Home/User/login.html', formdata, function (data) {
                eval('var result=' + data);
                //console.log(result);
                if (result.result) {
                    document.getElementById('content').innerHTML = temp;
                    document.getElementById('user_name').innerHTML = '<li class="active"><a href="#" >' + result.user_name +
                            '</a></li><li><a href="/PHP_SCHOOL/code/index.php/Home/Shoppingcart/index.html"> 购物车</a></li>' +
                            '<li><a href="/PHP_SCHOOL/code/index.php/Home/User/logout.html">注销</a></li> ';
                    flag = true;
                    //;
                } else {
                    document.getElementById('error').innerHTML = "用户名或密码错误";
                }
            });
            console.log('成功到了这里');
            return false;
        }
        function ajax_get_register() {
            do_ajax('get', '/PHP_SCHOOL/code/index.php/Home/User/register.html', null, function (data) {
                if (flag) {
                    temp = document.getElementById('content').innerHTML;
                    flag = false;
                }
                document.getElementById('content').innerHTML = data;
            });
        }
        function doUpdate(num)
        {
            document.getElementById('message_content').innerHTML = '将在<span style="color:red;">' + num + '</span>秒后自动跳转到之前操作的页面';
            if (num == 0) {
                //document.getElementById('content').innerHTML = temp;
                ajax_get_login(1);
            }
        }
        function ajax_post_register() {
            var formdata="user_id="+document.register_form.user_id.value+"&password="+document.register_form.password.value
            +"&password2="+document.register_form.password2.value +"&email="+document.register_form.email.value
     +"&user_name="+document.register_form.user_name.value +"&telphone_num="+document.register_form.telphone_num.value
      +"&address="+document.register_form.address.value;
            do_ajax('post', '/PHP_SCHOOL/code/index.php/Home/User/register.html',formdata, function (data) {
                eval('var result=' + data);
                //console.log(result);
                if (result.result) {
                    //转到登录
                    do_ajax('get', result.redirect, null, function (data) {
                        document.getElementById('content').innerHTML = data;
                        document.getElementById('message_title').innerHTML = result.title;
                        //document.getElementById('message_content').innerHTML = result.message;
                        var secs = 3;
                        for (var i = secs; i >= 0; i--)
                        {
                            setTimeout('doUpdate(' + i + ')', (secs - i) * 1000);
                        }
                    });

                } else {
                    //document.getElementById('error').innerHTML="用户名或密码错误";
                    document.getElementById('user_id_from').innerHTML = result.error.user_id == undefined ? '' : result.error.user_id;
                    document.getElementById('password').innerHTML = result.error.password == undefined ? '' : result.error.password;
                    document.getElementById('password2').innerHTML = result.error.password2 == undefined ? '' : result.error.password2;
                    document.getElementById('email').innerHTML = result.error.email == undefined ? '' : result.error.email;
                    document.getElementById('user_name_from').innerHTML = result.error.user_name == undefined ? '' : result.error.user_name;
                    document.getElementById('telphone_num').innerHTML = result.error.telphone_num == undefined ? '' : result.error.telphone_num;
                    document.getElementById('address').innerHTML = result.error.address == undefined ? '' : result.error.address;
                }
            });
            return false;
        }
        function ajax_get_reset() {
                do_ajax('get', '/PHP_SCHOOL/code/index.php/Home/User/resetpass.html', null, function (data) {
                    if (flag) {
                        temp = document.getElementById('content').innerHTML;
                        flag = false;
                    }
                    document.getElementById('content').innerHTML = data;
                });
            }
//            function doUpdate(num)
//            {
//                document.getElementById('message_content').innerHTML = '将在<span style="color:red;">' + num + '</span>秒后自动跳转到之前操作的页面';
//                if (num == 0) {
//                    //document.getElementById('content').innerHTML = temp;
//                    ajax_get_login(1);
//                }
//            }
            function ajax_post_reset() {
                var formdata = "user_id_lost=" + document.reset_form.user_id_lost.value + "&password=" + document.reset_form.password.value
                        + "&password2=" + document.reset_form.password2.value + "&email=" + document.reset_form.email.value;
                do_ajax('post', '/PHP_SCHOOL/code/index.php/Home/User/resetpass.html', formdata, function (data) {
                    eval('var result=' + data);
                    //console.log(result);
                    if (result.result) {
                        //转到登录
                        do_ajax('get', result.redirect, null, function (data) {
                            document.getElementById('content').innerHTML = data;
                            document.getElementById('message_title').innerHTML = result.title;
                            var secs = 3;
                            for (var i = secs; i >= 0; i--)
                            {
                                setTimeout('doUpdate(' + i + ')', (secs - i) * 1000);
                            }
                        });

                    } else {
                        console.log(result.error);
                        document.getElementById('user_id_from').innerHTML = result.error.user_id_lost == undefined ? '' : result.error.user_id_lost;
                        document.getElementById('password').innerHTML = result.error.password == undefined ? '' : result.error.password;
                        document.getElementById('password2').innerHTML = result.error.password2 == undefined ? '' : result.error.password2;
                        document.getElementById('email').innerHTML = result.error.email == undefined ? '' : result.error.email;
                    }
                });
                return false;
            }
    </script>
</head>
<body>
    <div class="header_top">
        <div class="container">
            <div class="header_top-box">
                <div class="cssmenu">
                    <ul id='user_name'>
                        <?php if(session('?user_id')): ?><li class="active"><a href="#" ><?php echo session('user_name');?></a></li> 
                            <li><a href="/PHP_SCHOOL/code/index.php/Home/Shoppingcart/index.html"> 购物车</a></li>
                            <li><a href="/PHP_SCHOOL/code/index.php/Home/User/logout.html">注销</a></li> 
                            <?php else: ?> 
                            <li><a href="javascript:ajax_get_login(0)">登录</a></li> 
                            <li><a href="javascript:ajax_get_register(0)">注册</a></li><?php endif; ?>
                    </ul>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
    <div class="header_bottom">
        <div class="container">
            <div class="header_bottom-box">
                <div class="header_bottom_left">
                    <div class="logo">
                        <a href="<?php echo INDEX_PATH;?>"><img src="<?php echo HOME_PUBLIC; ?>images/logo.png" alt=""/></a>
                    </div>
                    <div class="clearfix"> </div>
                </div>
                <div class="header_bottom_right">
                    <div class="search">
                        <form name="search_form" action="/PHP_SCHOOL/code/index.php/Home/Search/index" method="post">
                            <input type="text" value="商品搜索" id='keyword' name="keyword" onfocus="this.value = '';" onblur="if (this.value == '') {
                                        this.value = '商品搜索';
                                    }">
                            <input type="submit" value="" onclick='return check_search();'>
                        </form>
                    </div>
                    <ul class="bag">
                        <a href="#"><i class="bag_left"> </i></a>
                        <a href="#"><li class="bag_right">
                                <p style="text-align: center;" id='total_price'>
                            <?php if(session('?shoppingcart_money')): echo session('shoppingcart_money');?>
                                <?php else: ?>
                                0.00元<?php endif; ?>
                            </p> </li></a>
                        <div class="clearfix"> </div>
                    </ul>
                </div>
                <div class="clearfix"> </div>
            </div>
        </div>
    </div>
    <div class="menu">
        <div class="container">
            <div class="menu_box">
                <ul class="megamenu skyblue">
                    <li><a class="color2" href="<?php echo INDEX_PATH;?>">首页</a></li>
                    <!--                    <li><a class="color4" href="#">特别商品</a></li>		
                                        <li><a class="color10" href="#">服装</a>
                                            <div class="megapanel">
                                                <div class="row">
                                                    <div class="col1">
                                                        <div class="h_nav">
                                                            <h4>男装</h4>
                                                            <ul>
                                                                <li><a href="#">夹克</a></li>
                                                                <li><a href="#">外套</a></li>
                                                                <li><a href="#">套装</a></li>
                                                                <li><a href="#">T恤</a></li>
                                                                <li><a href="#">风衣</a></li>
                                                            </ul>	
                                                        </div>							
                                                    </div>
                                                    <div class="col1">
                                                        <div class="h_nav">
                                                            <h4>女装</h4>
                                                            <ul>
                                                                <li><a href="#">外套</a></li>
                                                                <li><a href="#">裙子</a></li>
                                                                <li><a href="#">包</a></li>
                                                                <li><a href="men.html">牛仔裤</a></li>
                                                                <li><a href="men.html">T恤</a></li>
                                                                <li><a href="men.html">鞋子</a></li>
                                                            </ul>	
                                                        </div>							
                                                    </div>
                                                    <div class="col2">
                                                        <div class="h_nav">
                                                            <h4>流行</h4>
                                                            <ul>
                                                                <li class>
                                                                    <div class="p_left">
                                                                        <img src="<?php echo HOME_PUBLIC; ?>images/t1.jpg" class="img-responsive" alt=""/>
                                                                    </div>
                                                                    <div class="p_right">
                                                                        <h4><a href="#">商品名</a></h4>
                                                                        <span class="item-cat"><small><a href="#">类别</a></small></span>
                                                                        <span class="price">29.99元</span>
                                                                    </div>
                                                                    <div class="clearfix"> </div>
                                                                </li>
                                                                <li>
                                                                    <div class="p_left">
                                                                        <img src="<?php echo HOME_PUBLIC; ?>images/t2.jpg" class="img-responsive" alt=""/>
                                                                    </div>
                                                                    <div class="p_right">
                                                                        <h4><a href="#">商品名</a></h4>
                                                                        <span class="item-cat"><small><a href="#">类别</a></small></span>
                                                                        <span class="price">29.99元</span>
                                                                    </div>
                                                                    <div class="clearfix"> </div>
                                                                </li>
                                                                <li>
                                                                    <div class="p_left">
                                                                        <img src="<?php echo HOME_PUBLIC; ?>images/t3.jpg" class="img-responsive" alt=""/>
                                                                    </div>
                                                                    <div class="p_right">
                                                                        <h4><a href="#">商品名</a></h4>
                                                                        <span class="item-cat"><small><a href="#">类别</a></small></span>
                                                                        <span class="price">29.99元</span>
                                                                    </div>
                                                                    <div class="clearfix"> </div>
                                                                </li>
                                                            </ul>	
                                                        </div>												
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li><a class="color3" href="404.html">首饰</a></li>
                                        <li><a class="color7" href="#">服装</a>
                                            <div class="megapanel">
                                                <div class="row">
                                                    <div class="col1">
                                                        <div class="h_nav">
                                                            <h4>男装</h4>
                                                            <ul>
                                                                <li><a href="men.html">夹克</a></li>
                                                                <li><a href="men.html">外套</a></li>
                                                                <li><a href="men.html">套装</a></li>
                                                                <li><a href="men.html">T恤</a></li>
                                                                <li><a href="men.html">风衣</a></li>
                                                            </ul>	
                                                        </div>							
                                                    </div>
                                                    <div class="col1">
                                                        <div class="h_nav">
                                                            <h4>女装</h4>
                                                            <ul>
                                                                <li><a href="men.html">外套</a></li>
                                                                <li><a href="men.html">裙子</a></li>
                                                                <li><a href="men.html">包</a></li>
                                                                <li><a href="men.html">牛仔裤</a></li>
                                                                <li><a href="men.html">T恤</a></li>
                                                                <li><a href="men.html">鞋子</a></li>
                                                            </ul>	
                                                        </div>							
                                                    </div>
                                                    <div class="col2">
                                                        <div class="h_nav">
                                                            <h4>流行</h4>
                                                            <ul>
                                                                <li class>
                                                                    <div class="p_left">
                                                                        <img src="<?php echo HOME_PUBLIC; ?>images/t1.jpg" class="img-responsive" alt=""/>
                                                                    </div>
                                                                    <div class="p_right">
                                                                        <h4><a href="#">商品名</a></h4>
                                                                        <span class="item-cat"><small><a href="#">类别</a></small></span>
                                                                        <span class="price">29.99元</span>
                                                                    </div>
                                                                    <div class="clearfix"> </div>
                                                                </li>
                                                                <li>
                                                                    <div class="p_left">
                                                                        <img src="<?php echo HOME_PUBLIC; ?>images/t2.jpg" class="img-responsive" alt=""/>
                                                                    </div>
                                                                    <div class="p_right">
                                                                        <h4><a href="#">商品名</a></h4>
                                                                        <span class="item-cat"><small><a href="#">类别</a></small></span>
                                                                        <span class="price">29.99元</span>
                                                                    </div>
                                                                    <div class="clearfix"> </div>
                                                                </li>
                                                                <li>
                                                                    <div class="p_left">
                                                                        <img src="<?php echo HOME_PUBLIC; ?>images/t3.jpg" class="img-responsive" alt=""/>
                                                                    </div>
                                                                    <div class="p_right">
                                                                        <h4><a href="#">商品名</a></h4>
                                                                        <span class="item-cat"><small><a href="#">类别</a></small></span>
                                                                        <span class="price">29.99元</span>
                                                                    </div>
                                                                    <div class="clearfix"> </div>
                                                                </li>
                                                            </ul>	
                                                        </div>												
                                                    </div>
                                                </div>
                                            </div>
                                        </li>-->
                    <div class="clearfix"> </div>
                </ul>
            </div>
        </div>
    </div>

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
    <link href="<?php echo HOME_PUBLIC; ?>css/bootstrap.css" rel='stylesheet' type='text/css' />
    <link href="<?php echo HOME_PUBLIC; ?>css/order.css" rel="stylesheet" type="text/css"/>
    <link href="<?php echo HOME_PUBLIC; ?>css/style.css" rel='stylesheet' type='text/css' />
    <script type="text/javascript" src="<?php echo HOME_PUBLIC; ?>js/jquery-1.11.1.min.js"></script>
    <script>
//        function ajax_delete_order(id) {
//        do_ajax('get', "/PHP_SCHOOL/code/index.php/Home/Order/index" + "?func=delete&id=" + id, null, function(data){
//        eval('var result=' + data);
//        if (result.result){
//        document.getElementById('order' + id).innerHTML = '';
//        document.getElementById('total_price').innerHTML = result.total_price;
//       // document.getElementById('total_price2').innerHTML = "购物金额小计 ￥" + result.total_price;
//        }
//        });
//        }
//        function ajax_change_order(id, num) {
//        do_ajax('get', "/PHP_SCHOOL/code/index.php/Home/Order/index" + "?func=change&id=" + id + "&num=" + num, null, function(data){
//        console.log(data);
//        eval('var result=' + data);
//        if (result.result){
//        //console.log(id);
//        //console.log(num);
//        document.getElementById('num' + id).value = num;
//        document.getElementById('num_' + id).value = num;
//        document.getElementById('total_price').innerHTML = result.total_price;
//        document.getElementById('total_price2').innerHTML = "购物金额小计 ￥" + result.total_price;
//        var per = document.getElementById('per_price_' + id).innerHTML;
//        //consloe.log(per);
//        per = per.slice(1);
//        per = per.slice(0, - 1);
//        per = Number(per);
//        //console.log(num*per);
//        document.getElementById('total_price_' + id).innerHTML = num * per + "元";
//        }
//        });
//        return false;
//        }
//        function clickButton(id, num)
//        {
//        if (event.keyCode == 13)
//        {
//        //ajax_change_order(id, num);
//        return false;
//        }
//        }
//        function ajax_delete_all_order(){
//        do_ajax('get', "/PHP_SCHOOL/code/index.php/Home/Order/index" + "?func=deleteall", null, function(data){
//        eval('var result=' + data);
//        if (result.result){
//       // document.getElementById('all_shopping_cart').innerHTML = '';
//       $("#order_th").siblings().remove();
//        document.getElementById('total_price').innerHTML = result.total_price;
//        document.getElementById('total_price2').innerHTML = "购物金额小计 ￥" + result.total_price;
//        }
//        });
//        }
    </script>
</head>
<body>

    <div id="content">
        <div class="container" >
            <div class="flowBox">
                <div class="panel panel-default">
                    <div class="panel-heading" >订单列表</div>
                </div>
                <form id="formCart" name="formCart" >
                    <table class="table table-bordered" width="99%" align="center" border="1" cellpadding="215" cellspacing="11" bgcolor="#dddddd">
                        <tr id="shppingcart_th">
                            <th bgcolor="#ffffff">订单号</th>
                            <th bgcolor="#ffffff">商品名称</th>
                            <th bgcolor="#ffffff">本店售价:</th>
                            <th bgcolor="#ffffff">购买数量</th>
                            <th bgcolor="#ffffff">小计</th>
                            <th bgcolor="#ffffff">状态</th>
                        </tr>

                        <?php if(is_array($result)): $i = 0; $__LIST__ = $result;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr id='order<?php echo ($vo["id"]); ?>'>
                                <td bgcolor="#ffffff" style="vertical-align: inherit;"><?php echo ($vo["order_id"]); ?></td>
                                <td bgcolor="#ffffff" align="center" style="width:300px;">
                                    <a href="/PHP_SCHOOL/code/index.php/Home/Goods/index?goods_id=<?php echo ($vo["goods_id"]); ?>" target="_blank"><img style="width:80px; height:80px;" src="<?php echo ($vo["img1"]); ?>" border="0" title="<?php echo ($vo["name"]); ?>" /></a><br />
                                    <a href="/PHP_SCHOOL/code/index.php/Home/Goods/index?goods_id=<?php echo ($vo["goods_id"]); ?>" target="_blank" class="f6"><?php echo ($vo["name"]); ?></a>
                                </td>
                                <!--                                <td bgcolor="#ffffff" style="vertical-align: inherit;"></td>-->
                                <td align="center" id='per_price_<?php echo ($vo["id"]); ?>'bgcolor="#ffffff" style="vertical-align: inherit;" >￥<?php echo ($vo["per_price"]); ?>元</td>
                                <td align="center" bgcolor="#ffffff" style="vertical-align: inherit;">
                                    <!--                                    <input type="text" id='num<?php echo ($vo["id"]); ?>' value="<?php echo ($vo["num"]); ?>" size="4" class="inputBg" style="text-align:center "
                                                                               onkeypress="return clickButton(<?php echo ($vo["id"]); ?>, this.value)"/>
                                                                        <input type="hidden" id='num_<?php echo ($vo["id"]); ?>' value="<?php echo ($vo["num"]); ?>" size="1"/>-->
                                    <?php echo ($vo["num"]); ?>
                                </td>
                                <td align="center" id='total_price_<?php echo ($vo["id"]); ?>' bgcolor="#ffffff" style="vertical-align: inherit;">￥<?php echo ($vo['num'] * $vo["per_price"]); ?>元</td>
                                <!--                                <td align="center" bgcolor="#ffffff" style="vertical-align: inherit;">
                                                                    <a href="javascript:void(0)" onclick="ajax_delete_order(<?php echo ($vo["id"]); ?>)" class="f6">删除</a>
                                                                </td>-->
                                <td bgcolor="#ffffff" style="vertical-align: inherit;">
                                    <?php switch($vo["status"]): case "0": ?>异常订单<?php break;?>
                                        <?php case "1": ?>已支付<?php break;?>
                                        <?php case "2": ?>已发货<?php break;?>
                                        <?php case "2": ?>已到货<?php break;?>
                                        <?php case "2": ?>已结束<?php break;?>
                                        <?php default: ?>未支付<?php endswitch;?>
                            </td>
                            </tr><?php endforeach; endif; else: echo "" ;endif; ?>
                    </table>
                    <!--                    <table class="table table-bordered" width="99%" align="center" border="1" cellpadding="5" cellspacing="1" bgcolor="#dddddd">
                                            <tr>
                                                <td bgcolor="#ffffff" id='total_price2'>
                                                    购物金额小计 ￥
                                            <?php if(session('?order_money')): echo session('order_money');?>
                                                <?php else: ?>
                                                0.00元<?php endif; ?>             
                                            </td>
                                            <td align="right" bgcolor="#ffffff">
                                                <input type="button" value="清空购物车" class="bnt_blue_1" onclick="ajax_delete_all_order()" />
                                                                            <input name="submit" type="submit" class="bnt_blue_1" value="更新购物车" onkeydown="return clickButton()" onclick="return ajax_change_order();" />
                                            </td>
                                            </tr>
                                        </table>-->
                </form>
                <!--                <table width="99%" align="center" border="0" cellpadding="5" cellspacing="0" bgcolor="#dddddd">
                                    <tr>
                                        <td bgcolor="#ffffff"><a href="javascript:history.go(-1);"><img src="<?php echo HOME_PUBLIC; ?>images/continue.gif" alt="continue" /></a></td>
                                        <td bgcolor="#ffffff" align="right"><a href="#"><img src="<?php echo HOME_PUBLIC; ?>images/checkout.png" alt="checkout" /></a></td>
                                    </tr>
                                </table>-->
            </div>
        </div>
    </div>
<link href="<?php echo HOME_PUBLIC; ?>css/footer.css" rel='stylesheet' type='text/css' />
<div class="footer">
	<div class="container">
		<!--<img src="images/pay.png" class="img-responsive" alt=""/>
		<ul class="footer_nav">
		  <li><a href="#">��ҳ</a></li>
		  <li><a href="#">Blog</a></li>
		  <li><a href="#">Shop</a></li>
		  <li><a href="#">Media</a></li>
		  <li><a href="#">Features</a></li>
		  <li><a href="#">About Us</a></li>
		  <li><a href="contact.html">Contact Us</a></li>
		</ul>-->
		<p class="copy">Copyright &copy; 2016-<?php echo date("Y")?>乐购商城All rights reserved. </p>
	</div>
</div>
</body>
</html>