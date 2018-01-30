<?php 

class adminController{


    public $auth='';


    public function __construct()
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
    public function index()
    {
        $news = M('article');
        $count = $news->count();
        //传递的是一个数组 键值对
        VIEW::assign(array('newsNum'=>$count,'hello'=>'你好'));
        VIEW::display('tpl/admin/index.html');
    }
   

    public function login()
    {

        if($_POST)
        {
            //登录处理
            //业务逻辑放在 admin auth
            //admin同表名的模型：从数据库里读取信息
            //auth模型：进行用户的核对
            //-->把一系列的登录处理操作放在新的方法里去处理
            $this->checkLogin();
        }else   //如果没有post数据 就显示登录界面
        {
            VIEW::display('tpl/admin/login.html');
        }
    }


    public function logOut()
    {
        $authobj = M('auth');
        $authobj->logOut();
        $this->showMessage('退出成功','admin.php?controller=admin&method=login');
    }

    public function newsList()
    {
        $newsobj = M('news');
        $list = $newsobj->showList();

        VIEW::assign(array('newsList'=>$list));
        VIEW::display('tpl/admin/html/newsList.html');
    }

    public function articleAdd()
    {
        //判断是否有POST数据
        if(empty($_POST))
        {
            //如果没有 就显示添加修改的界面
            // 并且有get['id']存在 就说明是要修改数据
            //修改数据要显示旧的数据        
            if (isset($_GET['id'])) {
                $newsobj = M('news');
                $data = $newsobj->getArticle($_GET['id']);
            }else{
                $data = array();
            }
            VIEW::assign(array('data'=>$data));     //注册data
            VIEW::display('tpl/admin/articleAdd.html');       //显示模板
        }else{
            //如果有 就表示是添加新的新闻
            //添加新闻要清空显示区域
            //print_r($_POST);
            $this->articleSub();
        }
    }

    public function articleDel()
    {
        if(intval($_GET['id']))
        {
            
            $news = M('news');
            if($news->delArticle($_GET['id']))
                $this->showMessage('删除成功','admin.php?controller=admin&method=newsList');
            else
                $this->showMessage('操作失败',
                'admin.php?controller=admin&method=newsAdd&id='.$_GET['id']);            
        }
    }


/******************************************/
    private function articleSub()
    {
        $res = M('news')->submitArticle($_POST);
        if($res==0)
            $this->showMessage('操作失败',
            'admin.php?controller=admin&method=newsAdd&id='.$_POST['id']);
        else if($res==1)
            $this->showMessage('添加成功',
            'admin.php?controller=admin&method=newsList');
        else if($res==2)
            $this->showMessage('修改成功',
            'admin.php?controller=admin&method=newsList');
    }

    private function checkLogin()
    {
        $authobj = M('auth');   //实例化 auth模型
        echo "1111";
        if($authobj->loginSubmit()){
            echo "444";
            $this->showMessage("登录成功!",'admin.php?controller=admin&method=index');
        }else{
            $this->showMessage("登录失败!",'admin.php?controller=admin&method=login');

        }
    }
    private function showMessage($info, $url){
        echo "<script>alert('$info');window.location.href='$url'</script>";
        exit;
    }    
}

 ?>