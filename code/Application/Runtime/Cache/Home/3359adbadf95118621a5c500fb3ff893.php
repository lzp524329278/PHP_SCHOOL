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
    
    <div class="men">
        <div class="container">
            <div class="col-md-12 register">
                <form name='register_form' onsubmit="return false">
                    <div class="register-top-grid" > 
                        <h3  style="text-align:center;">个人信息</h3>
                        <div>
                            <span>账号<label>*</label></span>
                            <input type="text" name="user_id"  value="<?php echo $post['user_id'];?>"> 
                            <span  id='user_id_from' style="color: #ff0000" ><?php echo $error['user_id'];?></span>
                        </div>
                        <div>
                            <span>密码<label>*</label></span>
                            <input type="password" name="password" value="<?php echo $post['password'];?>">
                            <span id='password' style="color: #ff0000"><?php echo $error['password'];?></span>
                        </div>
                        <div>
                            <span>确认密码<label>*</label></span>
                            <input type="password" name="password2" value="<?php echo $post['password2'];?>">
                            <span id='password2' style="color: #ff0000"><?php echo $error['password2'];?></span>
                        </div>
                        <div>
                            <span>Email<label>*</label></span>
                            <input type="text" name="email" value="<?php echo $post['email'];?>"> 
                            <span id='email' style="color: #ff0000"><?php echo $error['email'];?></span>
                        </div>
                        <div>
                            <span>姓名<label>*</label></span>
                            <input type="text" name="user_name" value="<?php echo $post['user_name'];?>"> 
                            <span id='user_name_from' style="color: #ff0000"><?php echo $error['user_name'];?></span>
                        </div>
                        <div>
                            <span>手机号码<label>*</label></span>
                            <input type="text" name="telphone_num" value="<?php echo $post['telphone_num'];?>"> 
                            <span id='telphone_num' style="color: #ff0000"><?php echo $error['telphone_num'];?></span>
                        </div>
                        <div class="text">
                            <span>联系地址<label>*</label></span>
                            <textarea name="address" ><?php echo $post['address'];?></textarea>
                            <span id='address' style="color: #ff0000"><?php echo $error['address'];?></span>
                        </div>
                    </div>

                    <center>
                        <div class="clearfix"> </div>
                        <div class="register-but">
                            <input type="submit" name="submit" value="提交" onclick="return ajax_post_register()">
                            <div class="clearfix"> </div>
                        </div>
                    </center>
                </form>
            </div>

        </div>
    </div>
</div>
</body>
</html>