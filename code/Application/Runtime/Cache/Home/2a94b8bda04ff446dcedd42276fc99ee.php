<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<html>
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

    <head>
        <title>乐购商城</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

        <link rel="stylesheet" href="<?php echo HOME_PUBLIC; ?>css/jquery.countdown.css" />
        <!-- Custom Theme files -->
        <script src="<?php echo HOME_PUBLIC; ?>js/responsiveslides.min.js"></script>
        <script type="text/javascript">
            $(function () {
                $("#slider").responsiveSlides({
                    auto: true,
                    nav: false,
                    speed: 500,
                    namespace: "callbacks",
                    pager: true,
                });
            });
        </script>
        <script src="<?php echo HOME_PUBLIC; ?>js/jquery.countdown.js"></script>
        <script src="<?php echo HOME_PUBLIC; ?>js/script.js"></script>
    </head>
    <body>
        <div  id='content'>
            <div class="index_slider">
                <div class="container">
                    <div class="callbacks_container">
                        <ul class="rslides" id="slider">
                            <li><img src="<?php echo HOME_PUBLIC; ?>images/slider1.jpg" class="img-responsive" alt=""/></li>
                            <li><img src="<?php echo HOME_PUBLIC; ?>images/2.jpg" class="img-responsive" alt=""/></li>
                            <li><img src="<?php echo HOME_PUBLIC; ?>images/3.jpg" class="img-responsive" alt=""/></li>
                        </ul>
                    </div>
                </div> 
            </div>


            <div class="content_top">
                <div class="container">
                    <div class="grid_1">
                        <div class="col-md-3">
                            <div class="box2">
                                <ul class="list1">
                                    <i class="lock"> </i>
                                    <li class="list1_right"><p>相比于实体店</p><span>价格更低</span></li>
                                    <div class="clearfix"> </div>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="box3">
                                <ul class="list1">
                                    <i class="clock1"> </i>
                                    <li class="list1_right"><p>完善的</p><span>售后服务</span></li>
                                    <div class="clearfix"> </div>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="box4">
                                <ul class="list1">
                                    <i class="vehicle"> </i>
                                    <li class="list1_right"><p>购物99元以上</p><span>免费送货</span></li>
                                    <div class="clearfix"> </div>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="box5">
                                <ul class="list1">
                                    <i class="dollar"> </i>
                                    <li class="list1_right"><p>节约金钱</p><span>节约时间</span></li>
                                    <div class="clearfix"> </div>
                                </ul>
                            </div>
                        </div>
                        <div class="clearfix"> </div>
                    </div>
                    <div class="column_center">
                        <h1 >最时尚的网上商城 </h1>
                        <!--<h2>Clothes is one of the word'd leading E-commerce companies that designs and develops online stores</h2>-->
                    </div>
                    <div class="sellers_grid">
                        <ul class="sellers">
                            <i class="star"> </i>
                            <li class="sellers_desc"><h2>最热</h2></li>
                            <div class="clearfix"> </div>
                        </ul>
                    </div>
                    <div class="grid_2">
                        <?php if($hot_goods): if(is_array($hot_goods)): foreach($hot_goods as $key=>$row): ?><div class="col-md-3 span_6">
                                    <div class="box_inner">
                                        <center>
                                            <img src="<?php echo ($row['img1']); ?>" class="img-responsive" style="height:200px;" alt=""/>
                                            <center/>
                                            <div class="sale-box"> </div>
                                            <div class="desc">
                                                <h3><?php echo ($row['name']); ?></h3>
                                                <h4><?php echo ($row['price']); ?>元</h4>
                                                <ul class="list2">
                                                    <li class="list2_left"><span class="m_1"><a href="/PHP_SCHOOL/code/index.php/Home/Shoppingcart/addToShoppingcart?goods_id=<?php echo ($row['goods_id']); ?>&num=1" class="link">添加到购物车</a></span></li>
                                                    <li class="list2_right"><span class="m_2"><a href="/PHP_SCHOOL/code/index.php/Home/Goods/index?goods_id=<?php echo ($row['goods_id']); ?>" class="link1">详情</a></span></li>
                                                    <div class="clearfix"> </div>
                                                </ul>
                                                <div class="heart"> </div>
                                            </div>
                                    </div>
                                </div><?php endforeach; endif; endif; ?>
                        <div class="clearfix"> </div>
                    </div>
                </div>
            </div>
            <div class="content_middle">
                <div class="container">
                    <ul class="promote">
                        <i class="promote_icon"> </i>
                        <li class="promote_head"><h3>新品</h3></li>
                    </ul>
                    <ul id="flexiselDemo3">
                        <?php if($new_goods): if(is_array($new_goods)): foreach($new_goods as $key=>$row): ?><li>
                                <center><a href="/PHP_SCHOOL/code/index.php/Home/Goods/index?goods_id=<?php echo ($row['goods_id']); ?>"><img src="<?php echo $row['img1'];?>"  style="height:200px; min-height: 125px" class="img-responsive" /></a></center>
                                <div class="grid-flex">
                                    <h4><?php echo $row['name'];?></h4>
                                    <p><?php echo $row['price'];?>元</p>
                                    <div class="m_3"><a href="/PHP_SCHOOL/code/index.php/Home/Shoppingcart/addToShoppingcart?goods_id=<?php echo ($row['goods_id']); ?>&num=1" class="link2">添加到购物车</a></div>
                                    <div class="ticket"> </div>
                                </div>
                                </li><?php endforeach; endif; endif; ?>
                    </ul>
                    <script type="text/javascript">
            $(window).load(function () {
                $("#flexiselDemo3").flexisel({
                    visibleItems: 6,
                    animationSpeed: 1000,
                    autoPlay: true,
                    autoPlaySpeed: 3000,
                    pauseOnHover: true,
                    enableResponsiveBreakpoints: true,
                    responsiveBreakpoints: {
                        portrait: {
                            changePoint: 480,
                            visibleItems: 1
                        },
                        landscape: {
                            changePoint: 640,
                            visibleItems: 2
                        },
                        tablet: {
                            changePoint: 768,
                            visibleItems: 3
                        }
                    }
                });

            });
                    </script>
                    <script type="text/javascript" src="<?php echo HOME_PUBLIC; ?>js/jquery.flexisel.js"></script>
                </div>
            </div>
            <div class="container">
                <?php if($discount_goods): ?><div class="content_middle_bottom">
                    <ul class="spinner">
                        <i class="spinner_icon"> </i>
                        <li class="spinner_head"><h3>促销</h3></li>
                        <div class="clearfix"> </div>
                    </ul>

                    
                        <?php if(is_array($discount_goods)): foreach($discount_goods as $key=>$row): ?><div class="col-md-4">
                                <div class="timer_box">
                                    <div class="thumb"> 
                                        <center>
                                            <img src="<?php echo $row['img1'];?>" class="img-responsive"/>
                                        </center>
                                    </div>
                                </div>
                                <div class="thumb_desc">
                                    <h3><?php echo $row['name'];?></h3>
                                    <div class="price">
                                        <span class="reducedfrom"><?php echo $row['price'];?>元</span>
                                        <span class="actual"><?php echo $row['discount_price'];?>元</span>
                                    </div>
                                </div>
                                <a href="/PHP_SCHOOL/code/index.php/Home/Goods/index?goods_id=<?php echo $row['goods_id'];?>"><div class="m_3 deal"><div class="link3">我要购买</div></div></a>
                            </div><?php endforeach; endif; ?>
                </div><?php endif; ?>

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