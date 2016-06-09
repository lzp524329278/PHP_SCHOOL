<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<html>
    <head>
        <title>购物车</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
        <link href="css/bootstrap.css" rel='stylesheet' type='text/css' />

        <link href="css/style.css" rel='stylesheet' type='text/css' />
        <script type="text/javascript" src="js/jquery-1.11.1.min.js"></script>
    </head>
    <body>
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
    <script>$(document).ready(function () {
            $(".megamenu").megamenu();
            
        });
        
        function ajaxFunction() {
            var xmlHttp = false;
            try {
                xmlHttp = new ActiveXObject("Msxml2.XMLHTTP"); // ie msxml3.0+（IE7.0及以上）  
            } catch (e) {
                try {
                    xmlHttp = new ActiveXObject("Microsoft.XMLHTTP"); //ie msxml2.6（IE5/6）  
                } catch (e2) {
                    xmlHttp = new XMLHttpRequest();
                }
            } finally {
                return xmlHttp;
            }
        }  
        function check_search() {
            if (document.search_form.keyword.value == '商品搜索') {
                alert('请输入搜索条件');
            } else {
                if(document.getElementById('orderby')){
                   document.getElementById('orderby').value='orderby';
                }
                return true;
            }
            return false;
        }
         var temp = "";
            function do_ajax(func, url, send, callback) {
                var xhr = ajaxFunction();
                if (!xhr) {
                    return false;
                }
                xhr.onreadystatechange = function () {
                    if (xhr.readyState == 4 && xhr.responseText) {
                        callback(xhr.responseText);
                    }
                }
                xhr.open(func, url);
                xhr.send(send);
            }
            function ajax_get_login() {
                do_ajax('get', '/PHP_SCHOOL/code/index.php/Home/User/login.html', null, function (data) {
                    temp = document.getElementById('content').innerHTML;
                    document.getElementById('content').innerHTML = data;
                });
            }
            function ajax_post_login() {
                do_ajax('post', '/PHP_SCHOOL/code/index.php/Home/User/login.html', new FormData(document.login_form), function (data) {
                    eval('var result=' + data);
                    console.log(result);
                    if (result.result) {
                        document.getElementById('content').innerHTML = temp;
                        document.getElementById('user_name').innerHTML='<li class="active"><a href="#" >'+result.user_name+
                                '</a></li><li><a href="/PHP_SCHOOL/code/index.php/Home/Order/index.html"> 购物车</a></li>'+
                            '<li><a href="/PHP_SCHOOL/code/index.php/Home/User/logout.html">注销</a></li> ';
                                //;
                    }else{
                        document.getElementById('error').innerHTML="用户名或密码错误";
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
                            <li><a href="/PHP_SCHOOL/code/index.php/Home/Order/index.html"> 购物车</a></li>
                            <li><a href="/PHP_SCHOOL/code/index.php/Home/User/logout.html">注销</a></li> 
                            <?php else: ?> 
                            <li><a href="javascript:ajax_get_login()">登录</a></li> 
                            <li><a href="/PHP_SCHOOL/code/index.php/Home/User/register.html">注册</a></li><?php endif; ?>
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
                                <p style="text-align: center;">
                            <?php if(session('?user_id')): echo session('shoppingcart_money');?>
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

    <div class="men">
        <div class="container">
            <div class="wishlist">
                <h4 class="title">购物车为空</h4>
                <p class="cart">你的购物车中没有商品.请点击<a href="<?php echo INDEX_PATH;?>">这里</a> 去浏览商品</p>
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