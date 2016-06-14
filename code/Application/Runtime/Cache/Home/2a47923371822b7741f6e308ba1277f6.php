<?php if (!defined('THINK_PATH')) exit();?><script type='text/javascript'src='/PHP_SCHOOL/code/Application/Home/Public/js/easydialog.min.js'></script><style>* { margin:0;padding:0; }</style><script type='text/javascript' src='/PHP_SCHOOL/code/Application/Home/Public/js/jquery-1.11.1.min.js'></script><link href='/PHP_SCHOOL/code/Application/Home/Public/css/easydialog.css' rel='stylesheet' type='text/css' /><script>window.onload=function (){easyDialog.open({
  container : {
    header : '提示',
    content : '您还没有登陆，将在2秒后跳转到首页 '
  },
  autoClose : 2000,
  drag : false,
  callback: function(){window.location='../Index/index';}
});
};</script>