<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<html>
    <head>
        <title>商品列表页</title>
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
                        //console.log(xhr.responseText);
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
                    //console.log(result);
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

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link href="<?php echo HOME_PUBLIC; ?>css/bootstrap.css" rel='stylesheet' type='text/css' />
    <link href="<?php echo HOME_PUBLIC; ?>css/style.css" rel='stylesheet' type='text/css' />
    <script>
        var now_page = 1;
        function inner_data(data) {
        console.log(data);
        eval("var json_array=" + data);
        console.log(json_array);
        now_page = json_array.now_page;
        var s = '';
        for (var i = 0; i < json_array.result.length; i++) {
        if ((i) % 3 == 0) {
        s += '<div class="span_2">';
        }
        s += '<div class="col_1_of_single1 span_1_of_single1"> ' +
                ' <a href="#"> <img src="' + json_array.result[i].img1 + '" class="img-responsive" style="height:200px;" alt=""/>' +
                ' <h3>' + json_array.result[i].name + '</h3><p>' + json_array.result[i].details + '</p><h4>' + (json_array.result[i].discount_status == 1 ? json_array.result[i].discount_price : json_array.result[i].price) + '元</h4>' +
                ' </a> ' +
                '</div>';
        if ((i + 1) % 3 == 0) {
        s += '<div class="clearfix"></div>' +
                '</div>';
        }
        }
        document.getElementById('list').innerHTML = s;
        s = "";
        for (var j = 0; j < json_array.brand.length; j++) {
        s += '<li> <a href="javascirpt:void(0)" onclick="' + "to_filter('brand','" + json_array.brand[j].brand + "'" + ')">' + json_array.brand[j].brand + '</a> (' + json_array.brand[j].count + ') </li>';
        }
        s += "<li> <a href='javascirpt:void(0)' style='color:red;' onclick='to_page(1)'>重置 </a> </li>";
        document.getElementById('brand').innerHTML = s;
        s = "";
        for (var j = 0; j < json_array.color.length; j++) {
        s += '<li> <a href="javascirpt:void(0)" onclick="' + "to_filter('color','" + json_array.color[j].color + "'" + ')">' + json_array.color[j].color + '</a> (' + json_array.color[j].count + ') </li>';
        }
        s += "<li> <a href='javascirpt:void(0)' style='color:red;' onclick='to_page(1)'>重置</a>  </li>";
        document.getElementById('color').innerHTML = s;
        var start = json_array.now_page - 3 > 0 ? json_array.now_page - 3 : 1;
        var end = start + 6 < json_array.total_page ? start + 6 : json_array.total_page;
        s = '';
        for (var i = start; i <= end; i++) {
        if (i != json_array.now_page) {
        s += '<li><a href="javascript:void(0)" onclick="to_page(' + i + ')">' + i + '</a></li>';
        } else {
        s += '<li>' + i + '</li>';
        }
        }
        document.getElementById('page').innerHTML = s;
        }
        function to_page(num) {
        do_ajax('get', "/PHP_SCHOOL/code/index.php/Home/Search/index?keyword=<?php echo ($return['keyword']); ?>&page=" + num, null, inner_data);
        }
        function orderby() {
        do_ajax('get', "/PHP_SCHOOL/code/index.php/Home/Search/index?keyword=<?php echo ($return['keyword']); ?>&page=1&orderby=" + document.getElementById('orderby').value, null, inner_data)
        }
        function to_filter(filter_class, filter){
        do_ajax('get', "/PHP_SCHOOL/code/index.php/Home/Search/index?keyword=<?php echo ($return['keyword']); ?>&filter_class=" + filter_class + "&filter=" + filter, null, inner_data)
        }

    </script>

</head>
<body>
    <div id="content">
        <div class="men">
            <div class="container">
                <div class="col-md-3 sidebar">
                    <div class="block block-layered-nav">
                        <div class="block-title"> <strong><span>状态</span></strong> </div>
                        <div class="block-content">
                            <dl id="narrow-by-list">
                                <dt class="even">品牌</dt>
                                <dd class="even">
                                    <ol id="brand">
                                        <!--                                        <li> <a href="#">品牌1</a> (2) </li>
                                                                                <li> <a href="#">品牌2</a> (1) </li>-->
                                        <?php $__FOR_START_11224__=0;$__FOR_END_11224__=count($return['brand']);for($i=$__FOR_START_11224__;$i < $__FOR_END_11224__;$i+=1){ ?><li> <a href="javascirpt:void(0)" onclick="to_filter('brand', '<?php echo ($return['brand'][$i]['brand']); ?>')"><?php echo ($return['brand'][$i]['brand']); ?></a> (<?php echo ($return['brand'][$i]['count']); ?>) </li><?php } ?>
                                        <li><a href="javascript:void(0)" style="color:red;" onclick="to_page(1)">重置</a></li>
                                    </ol>
                                </dd>
                                <dt class="last odd">颜色</dt>
                                <dd class="last odd">
                                    <ol id="color">
                                        <?php $__FOR_START_11057__=0;$__FOR_END_11057__=count($return['color']);for($i=$__FOR_START_11057__;$i < $__FOR_END_11057__;$i+=1){ ?><li> <a href="javascirpt:void(0)" onclick="to_filter('color', '<?php echo ($return['color'][$i]['color']); ?>')"><?php echo ($return['color'][$i]['color']); ?></a> (<?php echo ($return['color'][$i]['count']); ?>) </li><?php } ?>
                                        <li><a href="javascript:void(0)" style="color:red;" onclick="to_page(1)">重置</a></li>
                                    </ol>
                                </dd>
                            </dl>
                        </div>
                    </div>
                </div>
                <div class="col-md-9">
                    <div class="mens-toolbar">
                        <div class="sort">
                            <div class="sort-by">
                                <label>排序</label>
                                <select id='orderby' onchange="orderby()">
                                    <option value="sale_num" id='sale_num'> 热度 </option>
                                    <option value="price_desc" id='price_desc'> 价格 : 从高到低 </option>
                                    <option value="price_asc" id='price_asc'> 价格 : 从低到高 </option>
                                </select >
                            </div>
                        </div>
                        <div class="pager">
                            <ul class="dc_pagination dc_paginationA dc_paginationA06" style="float:right;">
                                <li style="color: #ff0;;">页码</li>
                                <div id='page' style="float:right;">
                                    <?php if(($return['now_page']-3 > 0)): $start = $return['now_page']-3; ?>
                                        <?php else: ?>
                                        <?php $start = '1'; endif; ?>
                                    <?php if(($start+6 < $return['total_page'] )): $end = $start+6; ?>
                                        <?php else: ?>
                                        <?php $end = $return['total_page']; endif; ?>
                                    <?php $__FOR_START_534__=$start;$__FOR_END_534__=$end+1;for($i=$__FOR_START_534__;$i < $__FOR_END_534__;$i+=1){ if($return['now_page'] == $i): ?><li><?php echo ($i); ?></li>
                                            <?php else: ?>
                                            <li><a href="javascript:void(0)" onclick="to_page(<?php echo ($i); ?>)"><?php echo ($i); ?></a></li><?php endif; } ?>
                                </div>
                            </ul>
                            <div class="clearfix"></div>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div id="list">
                        <?php if(is_array($return['result'])): $i = 0; $__LIST__ = $return['result'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i; if(($i-1)%3 == 0): ?><div class="span_2"><?php endif; ?>

                            <div class="col_1_of_single1 span_1_of_single1"> 
                                <a href="#"> <img src="<?php echo ($vo["img1"]); ?>" class="img-responsive" style="height:200px;" alt=""/>
                                    <h3><?php echo ($vo["name"]); ?></h3><p><?php echo ($vo["details"]); ?></p>
                                    <h4>
                                        <?php if($vo["discount_status"] == 1): echo ($vo["discount_price"]); ?>
                                            <?php else: echo ($vo["price"]); endif; ?>
                                        元</h4>
                                </a> 
                            </div>

                            <?php if(($i)%3 == 0): ?><div class="clearfix"></div>
                                </div><?php endif; endforeach; endif; else: echo "" ;endif; ?>

                    </div>
                </div>
            </div>
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