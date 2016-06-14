<?php if (!defined('THINK_PATH')) exit();?>&lt;!doctype html&gt;
&lt;html lang=&quot;en&quot;&gt;
&lt;head&gt;
  &lt;meta charset=&quot;utf-8&quot;&gt;
  &lt;title&gt;jQuery UI 对话框（Dialog） - 动画&lt;/title&gt;
  &lt;link rel=&quot;stylesheet&quot; href=&quot;//apps.bdimg.com/libs/jqueryui/1.10.4/css/jquery-ui.min.css&quot;&gt;
  &lt;script src=&quot;//apps.bdimg.com/libs/jquery/1.10.2/jquery.min.js&quot;&gt;&lt;/script&gt;
  &lt;script src=&quot;//apps.bdimg.com/libs/jqueryui/1.10.4/jquery-ui.min.js&quot;&gt;&lt;/script&gt;
  &lt;link rel=&quot;stylesheet&quot; href=&quot;jqueryui/style.css&quot;&gt;
  &lt;script&gt;
  $(function() {
    $( &quot;#dialog&quot; ).dialog({
      autoOpen: false,
      show: {
        effect: &quot;blind&quot;,
        duration: 1000
      },
      hide: {
        effect: &quot;explode&quot;,
        duration: 1000
      }
    });
 
    $( &quot;#opener&quot; ).click(function() {
      $( &quot;#dialog&quot; ).dialog( &quot;open&quot; );
    });
  });
  &lt;/script&gt;
&lt;/head&gt;
&lt;body&gt;
 
&lt;div id=&quot;dialog&quot; title=&quot;Basic dialog&quot;&gt;
  &lt;p&gt;这是一个动画显示的对话框，用于显示信息。对话框窗口可以移动，调整尺寸，默认可通过 &#x27;x&#x27; 图标关闭。&lt;/p&gt;
&lt;/div&gt;
 
&lt;button id=&quot;opener&quot;&gt;打开对话框&lt;/button&gt;
 
 
&lt;/body&gt;
&lt;/html&gt;