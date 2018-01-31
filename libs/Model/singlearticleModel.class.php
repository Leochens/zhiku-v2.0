<?php 

/**
* article模型的辅助模型 主要管单页面
*/
class singlearticleModel 
{
    private $table_article = 'article';
    private $table_trending = 'trending';
    private $table_comments = 'comments';

    public function toDetail($id)
    {
        $sql = 'SELECT * FROM '.$this->table_article.' WHERE id= '.$id;
        $data = DB::findOne($sql);      //从数据库获得制定id的文章

        $router = array(
        'single'=>'index.php?controller=article&method=articleDetail&id=',
        'index'=>'index.php'
        );        
        VIEW::assign(array('data'=>$data,'router'=>$router,'arti_data'=>$this->getAll()));
        VIEW::display('tpl/single_article/single-post.html');

    }

    public function getAll()
    {
        return M('article')->showList();
    }
    function __construct()
    {
        # code...
    }
}



 ?>