<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<html>
<head>
<title>乐购商城</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="<?php echo HOME_PUBLIC; ?>css/bootstrap.css" rel='stylesheet' type='text/css' />
<!-- Custom Theme files -->
<link href="<?php echo HOME_PUBLIC; ?>css/style.css" rel='stylesheet' type='text/css' />
<link rel="stylesheet" href="<?php echo HOME_PUBLIC; ?>css/jquery.countdown.css" />
<!-- Custom Theme files -->

<script type="text/javascript" src="<?php echo HOME_PUBLIC; ?>js/jquery-1.11.1.min.js"></script>
<script src="<?php echo HOME_PUBLIC; ?>js/responsiveslides.min.js"></script>
<script>
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
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<!--<script type="application/x-javascript">
   addEventListener("load", function() { setTimeout(hideURLbar, 0);}, false); 
   function hideURLbar(){ 
   		window.scrollTo(0,1); 
   } 
 </script>-->
 <!-- jQuery 组件导入 -->
<link href="<?php echo HOME_PUBLIC; ?>css/bootstrap.css" rel='stylesheet' type='text/css' />

<!-- Custom Theme files -->
<link href="<?php echo HOME_PUBLIC; ?>css/style.css" rel='stylesheet' type='text/css' />
<!-- Custom Theme files -->
<!--webfont-->
 
<script type="text/javascript" src="<?php echo HOME_PUBLIC; ?>js/jquery-1.11.1.min.js"></script>
<!-- dropdown -->
<!--<script src="js/jquery.easydropdown.js"></script>-->
<!-- start menu -->
<link href="<?php echo HOME_PUBLIC; ?>css/megamenu.css" rel="stylesheet" type="text/css" media="all" />
<script type="text/javascript" src="<?php echo HOME_PUBLIC; ?>js/megamenu.js"></script>
<script>$(document).ready(function(){$(".megamenu").megamenu();});</script>
</head>
<body>
<div class="header_top">
  <div class="container">
  	<div class="header_top-box">
			 <div class="cssmenu">
				<ul>
					<li class="active"><a href="<?php echo ($user_link); ?>"><?php echo ($user); ?></a></li> 
					<li><a href="wishlist.html"> 购物车</a></li>
					<li><a href="/PHP_SCHOOL/code/index.php/Home/User/login.html">登录</a></li> 
					<li><a href="/PHP_SCHOOL/code/index.php/Home/User/register.html">注册</a></li>
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
			  <input type="text" value="商品搜索" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Your email address';}">
			  <input type="submit" value="">
	  		</div>
	  		<ul class="bag">
	  			<a href="#"><i class="bag_left"> </i></a>
	  			<a href="#"><li class="bag_right"><p>0.00元</p> </li></a>
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
			<li><a class="color2" href="index.html">首页</a></li>
			<li><a class="color4" href="men.html">特别商品</a></li>		
			<li><a class="color10" href="#">服装</a>
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
			</li>
			<div class="clearfix"> </div>
		 </ul>
	  </div>
</div>
</div>

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
			<div class="col-md-3 span_6">
			  <div class="box_inner">
				<img src="<?php echo HOME_PUBLIC; ?>images/p1.jpg" class="img-responsive" alt=""/>
				 <div class="sale-box"> </div>
				 <div class="desc">
				 	<h3>商品名</h3>
				 	<h4>178,90元</h4>
				 	<ul class="list2">
				 	  <li class="list2_left"><span class="m_1"><a href="#" class="link">添加到购物车</a></span></li>
				 	  <li class="list2_right"><span class="m_2"><a href="#" class="link1">详情</a></span></li>
				 	  <div class="clearfix"> </div>
				 	</ul>
				 	<div class="heart"> </div>
				 </div>
			   </div>
			</div>
			<div class="col-md-3 span_6">
			  <div class="box_inner">
				<img src="<?php echo HOME_PUBLIC; ?>images/p2.jpg" class="img-responsive" alt=""/>
				 <div class="sale-box"> </div>
				 <div class="desc">
				 	<h3>商品名</h3>
				 	<h4>178,90元</h4>
				 	<ul class="list2">
				 	  <li class="list2_left"><span class="m_1"><a href="#" class="link">添加到购物车</a></span></li>
				 	  <li class="list2_right"><span class="m_2"><a href="#" class="link1">详情</a></span></li>
				 	  <div class="clearfix"> </div>
				 	</ul>
				 	<div class="heart"> </div>
				 </div>
			   </div>
			</div>
			<div class="col-md-3 span_6">
			  <div class="box_inner">
				<img src="<?php echo HOME_PUBLIC; ?>images/p3.jpg" class="img-responsive" alt=""/>
				 <div class="sale-box"> </div>
				 <div class="desc">
				 	<h3>商品名</h3>
				 	<h4>178,90元</h4>
				 	<ul class="list2">
				 	  <li class="list2_left"><span class="m_1"><a href="#" class="link">添加到购物车</a></span></li>
				 	  <li class="list2_right"><span class="m_2"><a href="#" class="link1">详情</a></span></li>
				 	  <div class="clearfix"> </div>
				 	</ul>
				 	<div class="heart"> </div>
				 </div>
			   </div>
			</div>
			<div class="col-md-3 span_6">
			  <div class="box_inner">
				<img src="<?php echo HOME_PUBLIC; ?>images/p4.jpg" class="img-responsive" alt=""/>
				 <div class="sale-box"> </div>
				 <div class="desc">
				 	<h3>商品名</h3>
				 	<h4>178,90元</h4>
				 	<ul class="list2">
				 	  <li class="list2_left"><span class="m_1"><a href="#" class="link">添加到购物车</a></span></li>
				 	  <li class="list2_right"><span class="m_2"><a href="#" class="link1">详情</a></span></li>
				 	  <div class="clearfix"> </div>
				 	</ul>
				 	<div class="heart"> </div>
				 </div>
			   </div>
			</div>
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
            <li><img src="<?php echo HOME_PUBLIC; ?>images/n1.jpg"  class="img-responsive" />
                <div class="grid-flex"><h4>商品名</h4><p>589,90 $</p>
                    <div class="m_3"><a href="#" class="link2">添加到购物车</a></div>
                    <div class="ticket"> </div>
                </div>
            </li>
            <li><img src="<?php echo HOME_PUBLIC; ?>images/n2.jpg"  class="img-responsive" />
                <div class="grid-flex"><h4>商品名</h4><p>589,90 $</p>
                    <div class="m_3"><a href="#" class="link2">添加到购物车</a></div>
                    <div class="ticket"> </div>
                </div>
            </li>
            <li><img src="<?php echo HOME_PUBLIC; ?>images/n3.jpg"  class="img-responsive" />
                <div class="grid-flex"><h4>商品名</h4><p>589,90 $</p>
                    <div class="m_3"><a href="#" class="link2">添加到购物车</a></div>
                    <div class="ticket"> </div>
                </div>
            </li>
            <li><img src="<?php echo HOME_PUBLIC; ?>images/n4.jpg"  class="img-responsive" />
                <div class="grid-flex"><h4>商品名</h4><p>589,90 $</p>
                    <div class="m_3"><a href="#" class="link2">添加到购物车</a></div>
                    <div class="ticket"> </div>
                </div>
            </li>
            <li><img src="<?php echo HOME_PUBLIC; ?>images/n5.jpg"  class="img-responsive" />
                <div class="grid-flex"><h4>商品名</h4><p>589,90 $</p>
                    <div class="m_3"><a href="#" class="link2">添加到购物车</a></div>
                    <div class="ticket"> </div>
                </div>		
		</ul>
		<script type="text/javascript">
         $(window).load(function() {
            $("#flexiselDemo3").flexisel({
                visibleItems: 6,
                animationSpeed: 1000,
                autoPlay:true,
                autoPlaySpeed: 3000,    		
                pauseOnHover: true,
                enableResponsiveBreakpoints: true,
                responsiveBreakpoints: { 
                    portrait: { 
                        changePoint:480,
                        visibleItems: 1
                    }, 
                    landscape: { 
                        changePoint:640,
                        visibleItems: 2
                    },
                    tablet: { 
                        changePoint:768,
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
   <div class="content_middle_bottom">
      <ul class="spinner">
        <i class="spinner_icon"> </i>
        <li class="spinner_head"><h3>促销</h3></li>
        <div class="clearfix"> </div>
      </ul>
          
          
	  <div class="col-md-4">
		  <div class="timer_box">
			<div class="thumb"> </div>
          </div>
          <div class="thumb_desc">
          	<h3>商品名</h3>
          	<div class="price">
			   <span class="reducedfrom">140.00元</span>
			   <span class="actual">120.00元</span>
			</div>
		 </div>
		 <a href="#"><div class="m_3 deal"><div class="link3">我要购买</div></div></a>
	  </div>
      <div class="col-md-4">
		  <div class="timer_box">
			<div class="thumb"> </div>
          </div>
          <div class="thumb_desc">
          	<h3>商品名</h3>
          	<div class="price">
			   <span class="reducedfrom">140.00元</span>
			   <span class="actual">120.00元</span>
			</div>
		 </div>
		 <a href="#"><div class="m_3 deal"><div class="link3">我要购买</div></div></a>
	  </div>
      <div class="col-md-4">
		  <div class="timer_box">
			<div class="thumb"> </div>
          </div>
          <div class="thumb_desc">
          	<h3>商品名</h3>
          	<div class="price">
			   <span class="reducedfrom">140.00元</span>
			   <span class="actual">120.00元</span>
			</div>
		 </div>
		 <a href="#"><div class="m_3 deal"><div class="link3">我要购买</div></div></a>
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