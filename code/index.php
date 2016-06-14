<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006-2014 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: liu21st <liu21st@gmail.com>
// +----------------------------------------------------------------------

// 应用入口文件

// �?测PHP环境
if(version_compare(PHP_VERSION,'5.3.0','<'))  die('require PHP > 5.3.0 !');

// �?启调试模�? 建议�?发阶段开�? 部署阶段注释或�?�设为false
define('APP_DEBUG',True);

// 定义应用目录
define('APP_PATH','./Application/');

define('INDEX_PATH','/PHP_SCHOOL/code/index.php');

define('HOME_PUBLIC','/PHP_SCHOOL/code/Application/Home/Public/');

// 引入ThinkPHP入口文件
require './ThinkPHP/ThinkPHP.php';


ini_set("session.save_handler", "user");
// 亲^_^ 后面不需要任何代码了 就是如此�?�?