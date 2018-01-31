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
    public function getAllArt()        //记得做筛选 比如hot
    {
        $artiobj=M('article');
        $res = $artiobj->showList();
        return $res;
    }
    public function getThisArt($flag,$limit=1000)
    {
        $artiobj=M('article');
        $res = $artiobj->get_this_arti($flag,$limit);
        return $res;
    }
    function __construct()
    {
        # code...
    }
}

 ?>