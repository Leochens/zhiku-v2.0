<?php
/* Smarty version 3.1.30, created on 2018-02-02 17:48:11
  from "E:\IT_study\zhiku-v2.0\tpl\admin\sidebar.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a7433db30ee24_33376434',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bcb94818aae3622219ea23a259d8a912df0eb585' => 
    array (
      0 => 'E:\\IT_study\\zhiku-v2.0\\tpl\\admin\\sidebar.html',
      1 => 1517564889,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a7433db30ee24_33376434 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="column col-sm-2 col-xs-1 sidebar-offcanvas" id="sidebar">
              
                <ul class="nav">
                    <li><a href="#" data-toggle="offcanvas" class="visible-xs text-center"><i class="glyphicon glyphicon-chevron-right"></i></a></li>
                </ul>
               
                <ul class="nav hidden-xs" id="lg-menu">
                    <li class="active">
                        <a href="<?php echo $_smarty_tpl->tpl_vars['router_admin_index']->value;?>
">
                            <i class="glyphicon glyphicon-home"></i>
                             <?php echo $_smarty_tpl->tpl_vars['admin_index']->value;?>

                         </a>
                    </li>
                    <li class="active">
                        <a href="<?php echo $_smarty_tpl->tpl_vars['router_index_index']->value;?>
">
                            <i class="glyphicon glyphicon-send"></i>
                             <?php echo $_smarty_tpl->tpl_vars['admin_front_index']->value;?>

                         </a>
                    </li>
                    <li>
                        <a href="<?php echo $_smarty_tpl->tpl_vars['router_article_articleShow']->value;?>
">
                            <i class="glyphicon glyphicon-list-alt"></i>
                             <?php echo $_smarty_tpl->tpl_vars['admin_article_list']->value;?>

                         </a>
                    </li>
                    <li>
                        <a href="<?php echo $_smarty_tpl->tpl_vars['router_article_articleInsertUpdate']->value;?>
">
                            <i class="glyphicon glyphicon-plus-sign"></i>
                             <?php echo $_smarty_tpl->tpl_vars['admin_add_article']->value;?>

                         </a>
                    </li>
                    <li>
                        <a href="<?php echo $_smarty_tpl->tpl_vars['router_admin_logout']->value;?>
">
                            <i class="glyphicon glyphicon-log-out"></i>
                             <?php echo $_smarty_tpl->tpl_vars['admin_logout']->value;?>

                         </a>
                    </li>
                </ul>
                <div class="log cols-md-2" >
                    <hr>
                    <p>工程师：张鹤麟</p>
                    <p>开发日志：<br>
                        1.后台的对于文章的增删改查功能实现。<br>
                        2.右上角的密码修改和分组管理暂未开发。<br>
                        3.美化整个后台。<br>
                        4.优化login界面。<br>
                    </p>
                    <p></p>
                </div>

                <ul class="list-unstyled hidden-xs" id="sidebar-footer">
                    <li>
                      <a href="#"><h3>智库</h3> <i class="glyphicon glyphicon-user"></i>工程师开发中..</a>
                    </li>
                </ul>
              
                <!-- tiny only nav-->
              <ul class="nav visible-xs" id="xs-menu">
                    <li><a href="#featured" class="text-center"><i class="glyphicon glyphicon-list-alt"></i></a></li>
                    <li><a href="#stories" class="text-center"><i class="glyphicon glyphicon-list"></i></a></li>
                    <li><a href="#" class="text-center"><i class="glyphicon glyphicon-paperclip"></i></a></li>
                    <li><a href="#" class="text-center"><i class="glyphicon glyphicon-refresh"></i></a></li>
                </ul>
              
            </div>
<?php }
}
