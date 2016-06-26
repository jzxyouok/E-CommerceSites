<?php
/*
 * 网站应用入口文件
 */
//设置应用字符集
header('content-type:text/html;charset=utf-8');
//是否开启调试模式
define('APP_DEBUG', true );
//获取入口文件、站点根目录的工作目录地址
define('WORKING_PATH', str_replace("\\", '/', __DIR__));
//设定Admin后台模块（生成之后需关闭！不然后续在设置默认模块时会出错！）
//define('BIND_MODULE','Admin');
//定义站点应用目录
define('APP_PATH','./App/');
//定义安全文件名称为：index.html
define('DIR_SECURE_FILENAME', 'index.html');

//定义文件上传的存储目录
define('UPLOAD_ROOT_PATH', '/Public/Uploads/');
//引用TP框架文件
require './ThinkPHP/ThinkPHP.php';