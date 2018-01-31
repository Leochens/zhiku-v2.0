<?php 

/**
* 
*/
class indexModel
{
    private $table = '';

    public function changePic()
    {

    }
    public function getArt()        //记得做筛选 比如hot
    {
        $artiobj=M('article');
        $res = $artiobj->showList();
        return $res;
    }
    function __construct()
    {
        # code...
    }
}

 ?>