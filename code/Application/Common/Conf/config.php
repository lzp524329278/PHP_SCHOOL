<?php

return array(
    //'配置项'=>'配置值'

    'DB_TYPE' => 'mysql', // 数据库类型
    'DB_HOST' => 'localhost', // 服务器地址
    'DB_NAME' => 'legoushop', // 数据库名
    'DB_USER' => 'lzp', // 用户名
    'DB_PWD' => 'LZP@@@718918', // 密码
    'DB_PORT' => 3306, // 端口
    'DB_PREFIX' => 'legoushop_', // 数据库表前缀 
    
    //
    'SESSION_OPTIONS' => array(
        'type'=>'db',
<<<<<<< HEAD
        'expire' => 60*100, //过期时间为100分钟
=======
        'expire' => 60*10, //过期时间为10分钟
>>>>>>> eca857d6cdd15586d8a785693bd5cf009ea61bff
    ),
    'SESSION_TABLE'=>'legoushop_session'
);
?>