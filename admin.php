<?php 
header("Content-Type:text/html;charset=utf-8"); //防乱码
session_start();                    //会话控制

require_once 'config.php';          //配置文件

require_once 'start.php';           //启动文件
START::Run($config);                //启动框架


