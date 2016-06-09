<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<html>
    <head>
        <title>注册</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

        <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
        <link href="<?php echo HOME_PUBLIC; ?>css/bootstrap.css" rel='stylesheet' type='text/css' />

        <link href="<?php echo HOME_PUBLIC; ?>css/style.css" rel='stylesheet' type='text/css' />

        <script type="text/javascript" src="<?php echo HOME_PUBLIC; ?>js/jquery-1.11.1.min.js"></script>

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

    <div class="men">
        <div class="container">
            <div class="col-md-12 register">
                <form action="/PHP_SCHOOL/code/index.php/Home/User/register.html" method="post">
                    <div class="register-top-grid" > 
                        <h3  style="text-align:center;">个人信息</h3>
                        <div>
                            <span>用户名<label>*</label></span>
                            <input type="text" name="user_id" value=<?php echo ($value); ?>> 
                        </div>
                        <div>
                            <span>密码<label>*</label></span>
                            <input type="text" name="password">
                        </div>
                        <div>
                            <span>确认密码<label>*</label></span>
                            <input type="text" name="password2">
                        </div>
                        <div>
                            <span>Email<label>*</label></span>
                            <input type="text" name="email"> 
                        </div>
                        <div>
                            <span>姓名<label>*</label></span>
                            <input type="text" name="username"> 
                        </div>
                        <div>
                            <span>手机号码<label>*</label></span>
                            <input type="text" name="telphone_num"> 
                        </div>
                        <div class="text">
                            <span>联系地址<label>*</label></span>
                            <textarea name="address"></textarea>
                        </div>
                    </div>

                    <center>
                        <div class="clearfix"> </div>
                        <div class="register-but">
                            <input type="submit" name="submit" value="提交">
                            <div class="clearfix"> </div>
                        </div>
                    </center>
                </form>
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