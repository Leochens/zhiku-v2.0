<?php
/* Smarty version 3.1.30, created on 2018-01-31 03:45:21
  from "E:\IT_study\zhiku-v2.0\tpl\admin\artiList.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a712dc1010ae1_59985337',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bf97199cb2e89dd7430385739eb7a4fbbab08c24' => 
    array (
      0 => 'E:\\IT_study\\zhiku-v2.0\\tpl\\admin\\artiList.html',
      1 => 1517366434,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a712dc1010ae1_59985337 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html>
<head>
    <title>新闻列表</title>
</head>
<body>
<ul>
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['artiList']->value, 'item');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
?>
    <li>
        <h1><?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
</h1>
        <a href="admin.php?controller=article&method=arti_delete&id=<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
">删除</a>
        <a href="admin.php?controller=article&method=arti_insert_update&id=<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
">编辑</a><br><br>
        <b>作者 </b><span ><?php echo $_smarty_tpl->tpl_vars['item']->value['author'];?>
</span >
        <b>标签 </b><span ><?php echo $_smarty_tpl->tpl_vars['item']->value['tags'];?>
</span >
        <b>时间 </b><span ><?php echo date('Y-m-d H-i-s',$_smarty_tpl->tpl_vars['item']->value['dateline']);?>
</span >
        <b>编号 </b><span ><?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
</span ><br><br><br><br><br><br>
        <b>图片 </b><span ><?php echo $_smarty_tpl->tpl_vars['item']->value['pic_path'];?>
</span ><br><br>

        <div><?php echo $_smarty_tpl->tpl_vars['item']->value['content'];?>
</div>
    </li>
<?php
}
} else {
?>

<h3>暂无新闻</h3>
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

</ul>
<a href="admin.php?controller=admin&method=index">返回首页</a>
<a href="admin.php?controller=article&method=arti_insert_update">添加新闻</a>

</body>
</html><?php }
}