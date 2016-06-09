<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<html>
    <head>
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
//        function search(){
////           var xhr = ajaxFunction();
////            if (!xhr) {
////                // alert('asf');
////                return false;
////            }
////            xhr.onreadystatechange = function () {
////                if (xhr.readyState == 4) {
////                    //alert('asf');
////                    //console.log(xhr.responseText);
////                    document.getElementById('content').innerHTML=xhr.responseText;
////                }
////            }
//            //xhr.open('get', '/PHP_SCHOOL/code/index.php/Home/Search/index?keyword='+encodeURIComponent(document.search_form.keyword.value));
//            window.location='/PHP_SCHOOL/code/index.php/Home/Search/index?keyword='+encodeURIComponent(document.search_form.keyword.value);
//            //xhr.send(null);
//        }
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
//        function ajax_get_login() {
//
//            var xhr = ajaxFunction();
//            if (!xhr) {
//                // alert('asf');
//                return false;
//            }
//            xhr.onreadystatechange = function () {
//                if (xhr.readyState == 4) {
//                    //alert('asf');
//                    //console.log(xhr.responseText);
//                    document.getElementById('content').innerHTML=xhr.responseText;
//                }
//            }
//            xhr.open('get', '/PHP_SCHOOL/code/index.php/Home/User/login.html');
//            xhr.send(null);
//        }
    </script>
</head>
<body>
    <div class="header_top">
        <div class="container">
            <div class="header_top-box">
                <div class="cssmenu">
                    <ul>
                        <?php if(session('?user_id')): ?><li class="active"><a href="#"><?php echo session('user_name');?></a></li> 
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

        <title>商品详情页</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

        <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
        <link href="<?php echo HOME_PUBLIC; ?>css/bootstrap.css" rel='stylesheet' type='text/css' />

        <link href="<?php echo HOME_PUBLIC; ?>css/style.css" rel='stylesheet' type='text/css' />

        <script type="text/javascript" src="<?php echo HOME_PUBLIC; ?>js/jquery-1.11.1.min.js"></script>
        <link rel="stylesheet" href="<?php echo HOME_PUBLIC; ?>css/etalage.css">
        <script src="<?php echo HOME_PUBLIC; ?>js/jquery.etalage.min.js"></script>
        <script>
            jQuery(document).ready(function ($) {

                $('#etalage').etalage({
                    thumb_image_width: 300,
                    thumb_image_height: 400,
                    source_image_width: 900,
                    source_image_height: 1200,
                    show_hint: true,
                    click_callback: function (image_anchor, instance_id) {
                        alert('Callback example:\nYou clicked on an image with the anchor: "' + image_anchor + '"\n(in Etalage instance: "' + instance_id + '")');
                    }
                });

            });
        </script>
    </head>
    <body>
    <div class="men">
        <div class="container">
            <div class="single_top">
                <div class="col-md-9 single_right">
                    <div class="grid images_3_of_2">
                        <ul id="etalage">
                            <li>
                                <a href="optionallink.html">
                                    <img class="etalage_thumb_image" src="<?php echo HOME_PUBLIC; ?>images/s1.jpg" class="img-responsive" />
                                    <img class="etalage_source_image" src="<?php echo HOME_PUBLIC; ?>images/s1.jpg" class="img-responsive" title="" />
                                </a>
                            </li>
                            <li>
                                <img class="etalage_thumb_image" src="<?php echo HOME_PUBLIC; ?>images/s2.jpg" class="img-responsive" />
                                <img class="etalage_source_image" src="<?php echo HOME_PUBLIC; ?>images/s2.jpg" class="img-responsive" title="" />
                            </li>
                            <li>
                                <img class="etalage_thumb_image" src="<?php echo HOME_PUBLIC; ?>images/s3.jpg" class="img-responsive"  />
                                <img class="etalage_source_image" src="<?php echo HOME_PUBLIC; ?>images/s3.jpg"class="img-responsive"  />
                            </li>
                            <li>
                                <img class="etalage_thumb_image" src="<?php echo HOME_PUBLIC; ?>images/s4.jpg" class="img-responsive"  />
                                <img class="etalage_source_image" src="<?php echo HOME_PUBLIC; ?>images/s4.jpg"class="img-responsive"  />
                            </li>
                        </ul>
                        <div class="clearfix"></div>		
                    </div> 
                    <div class="desc1 span_3_of_2">
                        <h1>商品名</h1>
                        <span>888元</span><p class="m_5"><span class="reducedfrom">999元</span></p>
                        <div class="btn_form">
                            <form>
                                <input type="submit" value="点击购买" title="">
                            </form>
                        </div>
                        <span class="m_link"><a href="#">添加到 购物车</a> </span>
                        <p class="m_text2">商家特殊留言</p>
                    </div>
                    <div class="clearfix"></div>	
                </div>
                <div class="col-md-3">
                    <!-- FlexSlider -->
                    <section class="slider_flex">
                        <div class="flexslider">
                            <ul class="slides">
                                <li><img src="<?php echo HOME_PUBLIC; ?>images/pic4.jpg" class="img-responsive" alt=""/></li>
                                <li><img src="<?php echo HOME_PUBLIC; ?>images/pic7.jpg" class="img-responsive" alt=""/></li>
                                <li><img src="<?php echo HOME_PUBLIC; ?>images/pic6.jpg" class="img-responsive" alt=""/></li>
                                <li><img src="<?php echo HOME_PUBLIC; ?>images/pic5.jpg" class="img-responsive" alt=""/></li>
                            </ul>
                        </div>
                    </section>
                    <!-- FlexSlider -->
                </div>
                <div class="clearfix"> </div>
            </div>
            <div class="toogle">
                <h2>产品详情</h2>
                <p class="m_text2">这里是产品详情</p>
            </div>
            <div class="toogle">
                <h2>更多信息</h2>
                <p class="m_text2">这里是更多信息</p>
            </div>
            <h4 class="head_single">相关产品</h4>
            <div class="span_3">
                <div class="col-sm-3 grid_1">
                    <a href="#">
                        <img src="<?php echo HOME_PUBLIC; ?>images/pic9.jpg" class="img-responsive" alt=""/>
                        <h3>商品名</h3>
                        <p>商品详情</p>
                        <h4>399元</h4>
                    </a>  
                </div> 
                <div class="col-sm-3 grid_1">
                    <a href="#">
                        <img src="<?php echo HOME_PUBLIC; ?>images/pic8.jpg" class="img-responsive" alt=""/>
                        <h3>商品名</h3>
                        <p>商品详情</p>
                        <h4>399元</h4>
                    </a>  
                </div> 
                <div class="col-sm-3 grid_1">
                    <a href="#">
                        <img src="<?php echo HOME_PUBLIC; ?>images/pic1.jpg" class="img-responsive" alt=""/>
                        <h3>商品名</h3>
                        <p>商品详情</p>
                        <h4>399元</h4>
                    </a>  
                </div> 
                <div class="col-sm-3 grid_1">
                    <a href="#">
                        <img src="<?php echo HOME_PUBLIC; ?>images/pic3.jpg" class="img-responsive" alt=""/>
                        <h3>商品名</h3>
                        <p>商品详情</p>
                        <h4>399元</h4>
                    </a>  
                </div> 
                <div class="clearfix"></div>
            </div>
        </div>
    </div>

    <link href="<?php echo HOME_PUBLIC; ?>css/flexslider.css" rel='stylesheet' type='text/css' />
    <script defer src="<?php echo HOME_PUBLIC; ?>js/jquery.flexslider.js"></script>
    <script type="text/javascript">
            $(function () {
                SyntaxHighlighter.all();
            });
            $(window).load(function () {
                $('.flexslider').flexslider({
                    animation: "slide",
                    start: function (slider) {
                        $('body').removeClass('loading');
                    }
                });
            });
    </script>
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