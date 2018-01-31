<?php 

/**
*   对文章的增删改查
*/
class articleController 
{
    
    private $table='article';  
    private $auth='';
    public function arti_insert_update()   
    {
       $this->checklogin();
        //判断是否有POST数据
        if(empty($_POST))
        {
            //如果没有 就显示添加修改的界面
            // 并且有get['id']存在 就说明是要修改数据
            //修改数据要显示旧的数据        
            if (isset($_GET['id'])) {
                $newsobj = M('article');
                $data = $newsobj->getArticle($_GET['id']);
            }else{
                $data = array();
            }
            VIEW::assign(array('data'=>$data,'time'=>time()));     //注册data
            VIEW::display('tpl/admin/articleAdd.html');       //显示模板
        }else{
            //如果有 就表示是添加新的新闻
            //添加新闻要清空显示区域
            //print_r($_POST);
            $this->articleSub();
        }       

    }
    public function arti_delete($table,$id)
    {
        $this->checklogin();

        if(intval($_GET['id']))
        {
            
            $artiobj = M('article');
            if($artiobj->delArticle($_GET['id']))
                $this->showMessage('删除成功','admin.php?controller=article&method=arti_show');
            else
                $this->showMessage('操作失败',
                'admin.php?controller=admin&method=artiAdd&id='.$_GET['id']);            
        }        
    }

    public function arti_show()
    {
        $newsobj = M('article');
        $list = $newsobj->showList();

        VIEW::assign(array('artiList'=>$list));
        VIEW::display('tpl/admin/artiList.html');        
    }

    private function showMessage($info, $url){
        echo "<script>alert('$info');window.location.href='$url'</script>";
        exit;
    }  

    private function articleSub()
    {
        $this->checklogin();


        $res = M('article')->submitArticle($_POST);
        if($res==0)
            $this->showMessage('操作失败',
            'admin.php?controller=article&method=arti_insert_update&id='.$_POST['id']);
        else if($res==1)
            $this->showMessage('添加成功',
            'admin.php?controller=article&method=arti_show');
        else if($res==2)
            $this->showMessage('修改成功',
            'admin.php?controller=article&method=arti_show');
    }

    //跳转到单独页面
    //放入singlearticle模型中
    public function articleDetail()
    {
  

        $single = M('singlearticle');
        if(isset($_GET['id'])&&!empty($_GET['id']))
        $single->toDetail($_GET['id']);

    }

    function __construct()
    {
         
    }

    private function checklogin()
    {
        //判断当前是否已经登录->auth模型
        $authobj = M('auth');
        $this->auth = $authobj->getAuth();
        //不在登录页并且没有登录，就要跳转到登录页面
        if(empty($this->auth)&&START::$method!='login')
        {
            $this->showMessage('请登录后再操作','admin.php?controller=admin&method=login');
        }              
    }
}

 ?>