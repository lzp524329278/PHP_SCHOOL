<?php if (!defined('THINK_PATH')) exit();?><script type='text/javascript'src='/PHP_SCHOOL/code/Application/Home/Public/js/easydialog.min.js'></script><style>* { margin:0;padding:0; }</style><script type='text/javascript' src='/PHP_SCHOOL/code/Application/Home/Public/js/jquery-1.11.1.min.js'></script><link href='/PHP_SCHOOL/code/Application/Home/Public/css/easydialog.css' rel='stylesheet' type='text/css' /><script>
                        var btnFn = function(){
                            alert( e.target );
                            return true;
                          };
                        window.onload=function (){easyDialog.open({
                        container : {
                          header : '提示',
                          content : '共计2400元，ss确认购买？ '
                        },
                        yesFn : btnFn,
                         noFn : true,
                        callback: function(){window.location='/PHP_SCHOOL/code/index.php/Home/Shoppingcart/buy?confirm=1';}
                      });
                      };</script>