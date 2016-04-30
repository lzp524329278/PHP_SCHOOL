<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<html>
<head>
<title>登录页</title>
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
 
<!--<script type="text/javascript" src="js/jquery-1.11.1.min.js"></script>-->
<!-- dropdown -->
<!--<script src="js/jquery.easydropdown.js"></script>-->
<!-- start menu -->
<!--<link href="css/megamenu.css" rel="stylesheet" type="text/css" media="all" />
<script type="text/javascript" src="js/megamenu.js"></script>
<script>$(document).ready(function(){$(".megamenu").megamenu();});</script>-->
</head>
<body>
<div class="men">
	<div class="container">
	    <div class="register">
			   <div class="col-md-6 login-left">
			  	 <h3>我是新用户</h3>
				 <p>通过注册账户，您可以正常的享受购物功能，<br/>包括存储您的收货地址，购物车功能,<br/>还可以给我们留言反馈.</p>
				 <a class="acount-btn" href="register.html">注册</a>
			   </div>
			   <div class="col-md-6 login-right">
			  	<h3>我已有账号</h3>
				<p>如果你在本商城已经注册账户，请登录</p>
				<form>
				  <div>
					<span>用户名<label>*</label></span>
					<input type="text"> 
				  </div>
				  <div>
					<span>密码<label>*</label></span>
					<input type="text"> 
				  </div>
				  <a class="forgot" href="#">忘记密码?&nbsp;</a>
				  <input type="submit" value="Login">
			    </form>
			   </div>	
			   <div class="clearfix"> </div>
		</div>
	 </div>
</div>
</body>
</html>