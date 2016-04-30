<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<html>
<head>
<title>收货信息</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="<?php echo HOME_PUBLIC; ?>css/bootstrap.css" rel='stylesheet' type='text/css' />
<link href="<?php echo HOME_PUBLIC; ?>css/style.css" rel='stylesheet' type='text/css' />

</head>
<body>
<center>
<div class="men">
	<div class="container">
	  <div class="register">
	  	<div class="contact_box">
	      <div class="contact-top">
			<h1>
	          收货信息
	        </h1>
	        
			  <form method="post" action="#">
					<div class="to">
                     	<input type="text" class="text" value="姓名" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '姓名';}">
					 	<input type="text" class="text" value="手机号码" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '手机号码';}" style="margin-left:20px">
					</div>
					<div class="text">
	                   <textarea value="联系地址" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '联系地址';}">联系地址</textarea>
	                </div>
                    <div class="clearfix"></div>
	                <div class="form-submit">
			          <input type="submit" value="提交">
					</div>
					
               </form>
               
          
       </div>
	  </div>
      </div>
	</div>
</div>
</center>
</body>
</html>