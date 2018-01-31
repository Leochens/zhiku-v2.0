<?php
/* Smarty version 3.1.30, created on 2018-01-31 03:24:29
  from "E:\IT_study\zhiku-v2.0\tpl\admin\articleAdd.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a7128dd35cf68_73589039',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8c90e29e930c23d589567e1e6261a193aedf8566' => 
    array (
      0 => 'E:\\IT_study\\zhiku-v2.0\\tpl\\admin\\articleAdd.html',
      1 => 1517365446,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a7128dd35cf68_73589039 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html>
<head>
    <title>添加新闻</title>
</head>
<body>
<form id="form" action="admin.php?controller=article&method=arti_insert_update" method="post">
    
    标题<input type="" name="title" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['data']->value['title'])===null||$tmp==='' ? '' : $tmp);?>
"><br>
    发布人<input type="" name="author" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['data']->value['author'])===null||$tmp==='' ? '' : $tmp);?>
"><br>
    标签<input type="" name="tags" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['data']->value['tags'])===null||$tmp==='' ? '' : $tmp);?>
"><br>
    图片路径<input type="" name="pic_path" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['data']->value['pic_path'])===null||$tmp==='' ? 'tpl/img/blog/editors_post_img.jpg' : $tmp);?>
"><br>

    内容<textarea style="width: 600px ;height: 400px;" name="content" ><?php echo (($tmp = @$_smarty_tpl->tpl_vars['data']->value['content'])===null||$tmp==='' ? '' : $tmp);?>
</textarea><br>
    
    <!--获得id-->
    <input type="text" name="dateline" value="<?php echo date('Y-m-d H-i-s',$_smarty_tpl->tpl_vars['time']->value);?>
">
    <input type="hidden" name="id" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['data']->value['id'])===null||$tmp==='' ? '' : $tmp);?>
">
    
    <input type="submit" value="提交">
    
</form>
</body>
</html><?php }
}
