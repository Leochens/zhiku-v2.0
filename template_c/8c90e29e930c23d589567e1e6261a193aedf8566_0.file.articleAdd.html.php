<?php
/* Smarty version 3.1.30, created on 2018-01-30 12:42:48
  from "E:\IT_study\zhiku-v2.0\tpl\admin\articleAdd.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a705a38af1fd6_43745382',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8c90e29e930c23d589567e1e6261a193aedf8566' => 
    array (
      0 => 'E:\\IT_study\\zhiku-v2.0\\tpl\\admin\\articleAdd.html',
      1 => 1517312520,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a705a38af1fd6_43745382 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html>
<head>
    <title>添加新闻</title>
</head>
<body>
<form id="form" action="admin.php?controller=admin&method=articleAdd" method="post">
    
    标题<input type="" name="title" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['data']->value['title'])===null||$tmp==='' ? '' : $tmp);?>
"><br>
    作者<input type="" name="author" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['data']->value['author'])===null||$tmp==='' ? '' : $tmp);?>
"><br>
    出处<input type="" name="from" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['data']->value['from'])===null||$tmp==='' ? '' : $tmp);?>
"><br>
    内容<textarea style="width: 600px ;height: 400px;" name="content" ><?php echo (($tmp = @$_smarty_tpl->tpl_vars['data']->value['content'])===null||$tmp==='' ? '' : $tmp);?>
</textarea><br>

    <!--获得id-->
    <input type="hidden" name="id" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['data']->value['id'])===null||$tmp==='' ? '' : $tmp);?>
">

    <input type="submit" value="提交">
    
</form>
</body>
</html><?php }
}
