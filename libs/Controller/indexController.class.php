<?php 


/**
*   
*/
class indexController 
{
    function index()
    {
        $indexobj = M('index');
        $res = $indexobj->getArt();
       // echo "<pre>";
       // print_r($res);
        VIEW::assign(array('arti_data'=>$res));
        VIEW::display('tpl/index.html');
    }


}

 ?>