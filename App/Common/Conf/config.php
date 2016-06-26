<?php
return array(
	//'配置项'=>'配置值'
   'DB_TYPE'    =>  'mysql',//数据库类型
    'DB_HOST'   =>  'localhost',//数据库地址
    'DB_NAME'   =>  'eshop',//数据库名
    'DB_USER'   =>  'root',//用户名
    'DB_PWD'    =>  '123021',//密码
    'DB_PORT'   =>  '3306',//端口
    'DB_PREFIX'  =>  'it_',//数据表前缀
    'URL_MODEL' =>  2,//URL访问模式，可选参数0，1，2，3
                        //0（普通模式）；1（PATHINFO模式）；2（REWRITE模式）；3（兼容模式）。默认为1
    'URL_PATHINFO_DEPR' => '-',//PATHHINFO模式下，各参数之间的分割符
);
