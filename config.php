<?php
define('DB_HOSTNAME', 'localhost'); //数据库地址
define('DB_USERNAME', ''); //数据库用户名
define('DB_PASSWORD', ''); //数据库密码
define('DB_NAME', ''); //数据库名
define('DB_VERSION', '4');//数据库版本号，请勿修改
define('DB_PREFIX', 'shorturl_'); //数据库前缀
define('SITE_URL', 'https://demo.domain.org'); //你的网站地址，开头添加协议名，结尾不带“/”
define('SITE_TITLE', 'ShortUrl'); //网页标题
define('ADMIN_USERNAME', 'admin'); //管理员用户名
define('ADMIN_PASSWORD', 'password'); //管理员密码
define('URL_PROTOCOLS', 'http|https|ftp|ftps|mailto|news|mms|rtmp|rtmpt|e2dk'); //允许缩短的网址的协议
define('SHORTURL_VERSION', '1.0.3');//版本号，请勿修改
define('SHORTURL_NUMERICVERSION', '103');//版本号比对形式，请勿修改
define('INDIRECTLYGO','0'); //开启跳转等待请将值更改为“1”，反之为“0”
define('GOTIME','10');	//跳转等待的时间
error_reporting(E_ALL);
$_ERROR = array();
