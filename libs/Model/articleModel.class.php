<?php 

/**
*   对文章的增删改查
*/
class articleModel
{
    
  public $table='article';

    /**
     * 获得表中所有数据的数量
     * @return [type] 返回数量 int
     */
    public function count()
    {
        $sql = "SELECT COUNT(*) FROM ".$this->table;

        return DB::findResult($sql,0,0);

    }
        
    /**
     * 根据id获得数据项
     * @param  [type] $id 数据项id
     * @return [type]     返回记录
     */
    
    public function getArticle($id)
    {
        if(empty($id))
            return array();
        else{
            $id = intval($id) ; //防止sql注入
            $sql = 'SELECT * FROM '.$this->table.' WHERE id = '.$id;
            return DB::findOne($sql);
        }
    }

    public function submitArticle($data)
    {
        
            extract($data); //恢复变量
            if(empty($content)||empty($title))  //没有title和内容不行
                return 0;
            //转义 安全
            $title= addslashes($title);
            $author=addslashes($author);
            //$content=addslashes($content);
            $tags=addslashes($tags);
            $flag=addslashes($flag);
            //$pic_path=addslashes($pic_path);
            $data=array(
                'title'=>$title,
                'author'=>$author,
                'content'=>$content,
                'tags'=>$tags,
                'pic_path'=>$pic_path,
                'dateline'=>time(),
                'flag'=>$flag
            );
            echo $data['content'];
            if($_POST['id']!='')    //如果id不是空 那么说明要修改
            {
                DB::update($this->table,$data,'id = '.$id);
                return 2;
            }else{                  //id为空 则是添加操作
                DB::insert($this->table,$data);
                return 1;
            }
    }

    public function delArticle($id)
    {
        if (DB::delete($this->table,' id = '.$id))
            return true;
        else
            return false;
    }


    public function showList()
    {
        $sql = 'SELECT * FROM '.$this->table.' ORDER BY dateline desc' ;    //按时间倒序排序
        return DB::findAll($sql);
    }

    public function get_this_arti($flag,$limit=1000)
    {
        //获得制定优先级的文章
        $sql = 'SELECT * FROM '.$this->table." WHERE flag ='".$flag."'  ORDER BY dateline desc LIMIT  ".$limit ;    
        
        return DB::findAll($sql);
    }
}