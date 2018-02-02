<?php 

/**
*   [CONTROLLER]
*   
*   article控制器 对文章的增删改查的控制器
* 
*   
*   
*   每一个方法中都会对VIEW注册一个what变量，这个what是说明要展示那个页面
*   在admin的index.html中会有一个文件包含 这个文件包含在sidebar左侧边栏 
*   {include file={{$adminTplPath}|cat:$what}}
*   页面会根据what变量选择要显示的模板
*
*   $cfg是公用变量数组 每个方法中还可以添加本方法所使用模板中的专用变量
*/
class articleController extends CONTROLLER
{
    
    /**
     * 保存用户变量
     * @var string
     */
    private $auth='';
    
    /**
     * 通用文章变量
     * @var array
     */
    private $cfg=array();                

    /**
     * 文章的添加和修改
     * @return [type] 返回一个提示框 显示是否操作成功
     * 
     */
    public function articleInsertUpdate()   
    {
       $this->checkLogin();
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
            $this->cfg['what']='articleAdd.html';
            $this->cfg['data']=$data;   
            VIEW::assign($this->cfg);       //注册data
            VIEW::display('tpl/admin/index.html');       //显示模板
        }else{
            //如果有 就表示是添加新的新闻
            //添加新闻要清空显示区域
            //print_r($_POST);
            $this->articleSub();
        }       

    }
    /**
     * 
     * 接收GET参数 并从数据库中删除制定id的数据
     * @return [type] 返回提示框
     */
    public function articleDelete()
    {
        $this->checkLogin();

        if(intval($_GET['id']))
        {
            
            $artiobj = M('article');
            if($artiobj->delArticle($_GET['id']))
                $this->showMessage('删除成功','admin.php?controller=article&method=articleShow');
                //$this->showMessage('删除成功','#');
            else
                $this->showMessage('操作失败',
                'admin.php?controller=article&method=artiAdd&id='.$_GET['id']);            
        }        
    }

    /**
     * 显示文章列表模板
     * @return [type] [description]
     */
    public function articleShow()
    {
        $newsobj = M('article');
        $list = $newsobj->showList();

        $this->cfg['artiList']=$list;
        $this->cfg['what']='artiList.html';
        VIEW::assign($this->cfg);
        VIEW::display('tpl/admin/index.html');        
    }


    /**
     * 私有函数 提示框
     * @param   $info 提示文本  
     * @param  $url  跳转页面 默认不跳转
     * @return 
     */
    private function showMessage($info, $url='#'){
        echo "<script>alert('$info');window.location.href='$url'</script>";
        exit;
    }  

    /**
     * 私有函数 提交文章数据
     * @return 返回提示框
     */
    private function articleSub()
    {
        $this->checkLogin();


        $res = M('article')->submitArticle($_POST);
        if($res==0)
            $this->showMessage('操作失败,标题和内容不能为空。',
            'admin.php?controller=article&method=articleInsertUpdate&id='.$_POST['id']);
        else if($res==1)
            $this->showMessage('添加成功',
            'admin.php?controller=article&method=articleShow');
        else if($res==2)
            $this->showMessage('修改成功',
            'admin.php?controller=article&method=articleShow');
    }


    /**
     * 跳转到单独页面 具体操作在 singlearticle模型中
     *  
     * @return 
     */
    public function articleDetail()
    {
  

        $single = M('singlearticle');
        if(isset($_GET['id'])&&!empty($_GET['id']))
        $single->toDetail($_GET['id']);

    }

    /**
     * 检测用户是否登录
     * @return  若未登录 返回提示框并跳转到登录界面
     */
    private function checkLogin()
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
    /**
     * 构造函数
     * 初始化 文章通用模板变量 
     */
    function __construct()
    {
        CONTROLLER::__construct();      //调用父类构造函数
         $this->cfg['what']='articleAdd.html';
    }
}

 ?>