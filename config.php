<?php 

//配置文件

$config=array(
    'dbconfig'=>array(            //数据库配置

        'host'=>'127.0.0.1',
        'user'=>'root',
        'pwd'=>'178463',
        'dbname'=>'zhiku',
        'charset'=>'utf8'
    ),  
    'viewconfig'=>array(          //视图引擎配置

        'left_delimiter'=>"{" ,  //左定界符
        'right_delimiter'=>"}",   //右定界符
        'template_dir'=>"tpl",    //HTML模板目录
        'compile_dir'=>'template_c',  //编译后文件存放的目录 
        'cache_dir'=>'cache'
    )
);
 ?>

