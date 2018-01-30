<?php
/* Smarty version 3.1.30, created on 2018-01-30 12:42:20
  from "E:\IT_study\zhiku-v2.0\tpl\admin\index.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a705a1c4c9252_10970397',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '19c781328ee225f84823ad23fc65d7f7dcdd1d1e' => 
    array (
      0 => 'E:\\IT_study\\zhiku-v2.0\\tpl\\admin\\index.html',
      1 => 1517312538,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a705a1c4c9252_10970397 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html>
<head>
    <title>首页</title>
</head>
<body>
<h1>这里是首页 </h1>
<h2>一共 <?php echo (($tmp = @$_smarty_tpl->tpl_vars['newsNum']->value)===null||$tmp==='' ? "0" : $tmp);?>
 条新闻</h2>
<h2><?php echo $_smarty_tpl->tpl_vars['hello']->value;?>
</h2>

<a href="admin.php?controller=admin&method=logOut">退出登录</a>
<a href="admin.php?controller=admin&method=articleAdd">添加新闻</a>
</body>
</html><?php }
}
