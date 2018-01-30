<?php 

/**
*   对文章的增删改查
*/
class articleController 
{
    
    private $table='article';  
    public function arti_insert_update($table,$data)   
    {
        
        extract($data);

        $title = addslashes($title);
        $author = addslashes($title);
        $content = addslashes($content);
        
        DB::insert($this->table,$data);
    }
    public function arti_delete($table,$id)
    {

    }
    public function arti_update($table,$data,$id)
    {

    }
    public function arti_show($id)
    {

    }

    function __construct(argument)
    {
        # code...
    }
}

 ?>