<?php
header("content-type:text/html;charset=utf-8");
//指定根目录
define("APP_NAME", "JD");
//指定执行程序文件
define("APP_PATH", "./admin/");
//重新定义__ROOT__
define("__ROOT__", "/JD");
//显示错误信息
define("APP_DEBUG",true);
include_once './ThinkPHP/ThinkPHP.php';
