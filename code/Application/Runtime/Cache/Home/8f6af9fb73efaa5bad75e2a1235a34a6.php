<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<html>
<head>
<title><?php echo $title;?></title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="<?php echo HOME_PUBLIC; ?>css/bootstrap.css" rel='stylesheet' type='text/css' />

<link href="<?php echo HOME_PUBLIC; ?>css/style.css" rel='stylesheet' type='text/css' />

<script type="text/javascript" src="<?php echo HOME_PUBLIC; ?>js/jquery-1.11.1.min.js"></script>

<link rel="stylesheet" href="<?php echo HOME_PUBLIC; ?>css/etalage.css">
</head>
<body>
<div class="men">
	<div class="container">
	    <div class="error-404 text-center">
			<h1 id="message_title"><?php echo $title;?></h1>
			<p id="message_content"><?php echo $message;?></p>
<!--			<a class="b-home" id='redirect_link' href="<?php echo $redirect_link;?>">立刻跳转</a>-->
		 </div>
      </div>
</div>
</body>
</html>