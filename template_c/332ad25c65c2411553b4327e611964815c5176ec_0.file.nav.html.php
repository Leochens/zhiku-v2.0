<?php
/* Smarty version 3.1.30, created on 2018-02-02 17:40:36
  from "E:\IT_study\zhiku-v2.0\tpl\admin\nav.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a743214cd7d08_01329821',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '332ad25c65c2411553b4327e611964815c5176ec' => 
    array (
      0 => 'E:\\IT_study\\zhiku-v2.0\\tpl\\admin\\nav.html',
      1 => 1517564376,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a743214cd7d08_01329821 (Smarty_Internal_Template $_smarty_tpl) {
?>
 <div class="navbar navbar-blue navbar-static-top">  
                    <div class="navbar-header">
                      <button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                      </button>
                      <a href="#" class="navbar-brand logo">Z</a>
                    </div>
                    <nav class="collapse navbar-collapse" role="navigation">
                    <form class="navbar-form navbar-left">
                        <div class="input-group input-group-sm" style="max-width:360px;">
                          <input type="text" class="form-control" placeholder="搜索文章..." name="srch-term" id="srch-term">
                          <div class="input-group-btn">
                            <button class="btn btn-default" type="submit"><i class="glyphicon glyphicon-search"></i></button>
                          </div>
                        </div>
                    </form>
                    <ul class="nav navbar-nav">
                      <li>
                        <a href="#"><i class="glyphicon glyphicon-home"></i> 首页</a>
                      </li>
                      <li>
                        <a href="#postModal" role="button" data-toggle="modal"><i class="glyphicon glyphicon-plus"></i> 添加</a>
                      </li>
                      <li>
                        <a href="#"><span class="badge"> 开发</span></a>
                      </li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="glyphicon glyphicon-user"></i></a>
                        <ul class="dropdown-menu">
                          <li><a href="">修改密码</a></li>
                          <li><a href="">分组管理</a></li>

                        </ul>
                      </li>
                    </ul>
                    </nav>
                </div>
<?php }
}
