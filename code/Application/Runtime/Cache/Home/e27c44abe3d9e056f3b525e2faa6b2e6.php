<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<html>
    <head>
        <title>找回密码</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

        <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
        <link href="<?php echo HOME_PUBLIC; ?>css/bootstrap.css" rel='stylesheet' type='text/css' />

        <link href="<?php echo HOME_PUBLIC; ?>css/style.css" rel='stylesheet' type='text/css' />

        <script type="text/javascript" src="<?php echo HOME_PUBLIC; ?>js/jquery-1.11.1.min.js"></script>
        <script>
            
        </script>
    </head>
    <body>

        <div class="men">
            <div class="container">
                <div class="col-md-12 register">
                    <form name='reset_form'  onsubmit="return false">
                        <div class="register-top-grid" > 
                            <h3  style="text-align:center;">重设密码</h3>
                            <div>
                                <span>账号<label>*</label></span>
                                <input type="text" name="user_id_lost"  value="<?php echo $post['user_id'];?>"> 
                                <span  id='user_id_from' style="color: #ff0000" ><?php echo $error['user_id'];?></span>
                            </div>
                            <div>
                                <span>Email<label>*</label></span>
                                <input type="text" name="email" value="<?php echo $post['email'];?>"> 
                                <span id='email' style="color: #ff0000"><?php echo $error['email'];?></span>
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

                        </div>

                        <center>
                            <div class="clearfix"> </div>
                            <div class="register-but">
                                <input type="submit" name="submit" value="重设" onclick="return ajax_post_reset()">
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