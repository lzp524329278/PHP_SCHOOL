<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<html>
<head>
<link href="<?php echo HOME_PUBLIC; ?>css/bootstrap.css" rel='stylesheet' type='text/css' />

<link href="<?php echo HOME_PUBLIC; ?>css/style.css" rel='stylesheet' type='text/css' />

<script type="text/javascript" src="js/jquery-1.11.1.min.js"></script>

</head>
<body>
<div class="men">
	<div class="container">
	    <div class="register">
			   <div class="col-md-6 login-left">
			  	 <h3>我是新用户</h3>
				 <p>通过注册账户，您可以正常的享受购物功能，<br/>包括存储您的收货地址，购物车功能,<br/>还可以给我们留言反馈.</p>
				 <a class="acount-btn" href="#">注册</a>
			   </div>
			   <div class="col-md-6 login-right">
			  	<h3>我已有账号</h3>
				<p>如果你在本商城已经注册账户，请登录</p>
				<form name='login_form' action="/PHP_SCHOOL/code/index.php/Home/User/login.html" method="post">
				  <div>
					<span>用户名<label>*</label></span>
					<input type="text" name="user_id"/>
				  </div>
				  <div>
					<span>密码<label>*</label></span>
					<input type="password" name="password" />
				  </div>
				  <a class="forgot" href="#">忘记密码?&nbsp;</a>
                                  <input type="submit" value="Login" onclick="return ajax_post_login()"/>
                                  <span style="color: #ff0000" id='error'><?php echo $error;?></span>
			    </form>
			   </div>	
			   <div class="clearfix"> </div>
		</div>
	 </div>
</div>
</body>

</html>