<?php 


/**
*   
*/
class indexController 
{


    function index()
    { 
        //核心 ： 获得数据之后填充数据
        $indexobj = M('index');
        $All = $indexobj->getAllArt();    //获得全部文章
        $Hot = $indexobj->getThisArt('hot'); //筛选Hot文章
        $Latest = $indexobj->getThisArt('latest');
        $Important = $indexobj->getThisArt('important');
        $Normal = $indexobj->getThisArt('normal');
       // echo "<pre>";
       // print_r($res);
       // 建立路由
       $router = array(
        'single'=>'index.php?controller=article&method=articleDetail&id=',
        'index'=>'index.php',
        'add'=>'index.php?controller=article&method=arti_insert_update'
    );
       //print_r($Hot);
        VIEW::assign(array(
          'router'=>$router,
          'arti_data'=>$All,
          'hot'=>$Hot,
          'latest'=>$Latest,
          'important'=>$Important,
          'normal'=>$Normal
        ));
        VIEW::display('tpl/index.html');
    }


}

 ?>