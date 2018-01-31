<?php
/* Smarty version 3.1.30, created on 2018-01-31 09:05:53
  from "E:\IT_study\zhiku-v2.0\tpl\admin\index.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a7178e1039639_43219650',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '19c781328ee225f84823ad23fc65d7f7dcdd1d1e' => 
    array (
      0 => 'E:\\IT_study\\zhiku-v2.0\\tpl\\admin\\index.html',
      1 => 1517385950,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a7178e1039639_43219650 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html>
<head>
    <title>首页</title>
</head>
<body>
<h1>这里是首页 </h1>
<h2>一共 <?php echo (($tmp = @$_smarty_tpl->tpl_vars['newsNum']->value)===null||$tmp==='' ? "0" : $tmp);?>
 篇文章</h2>
<h2><?php echo $_smarty_tpl->tpl_vars['hello']->value;?>
</h2>

<a href="admin.php?controller=admin&method=logOut">退出登录</a>
<a href="admin.php?controller=article&method=arti_insert_update">添加文章</a>
<a href="admin.php?controller=article&method=arti_show">文章列表</a>
</body>
</html><?php }
}
