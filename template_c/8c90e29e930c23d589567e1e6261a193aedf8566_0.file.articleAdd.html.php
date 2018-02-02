<?php
/* Smarty version 3.1.30, created on 2018-02-02 15:35:58
  from "E:\IT_study\zhiku-v2.0\tpl\admin\articleAdd.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a7414deb88811_04547637',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8c90e29e930c23d589567e1e6261a193aedf8566' => 
    array (
      0 => 'E:\\IT_study\\zhiku-v2.0\\tpl\\admin\\articleAdd.html',
      1 => 1517556918,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a7414deb88811_04547637 (Smarty_Internal_Template $_smarty_tpl) {
?>

<br><br><br>
<div class="container">
    <form   class="col-sm-6 col-md-12"  action="admin.php?controller=article&method=articleInsertUpdate" method="post">
        <input class="form-control input-lg"  type="text" placeholder="文章标题" name="title" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['data']->value['title'])===null||$tmp==='' ? '' : $tmp);?>
">
        <br>
        <div class="input-group">
          <span class="input-group-addon" id="basic-addon1" >作者</span>
          <input type="text" name="author" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['data']->value['author'])===null||$tmp==='' ? '' : $tmp);?>
" class="form-control" placeholder="" aria-describedby="basic-addon1">
        </div>

        <div class="input-group">
          <span class="input-group-addon" id="basic-addon2" >标签</span>
          <input type="text" class="form-control" name="tags" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['data']->value['tags'])===null||$tmp==='' ? '' : $tmp);?>
" placeholder="" aria-describedby="basic-addon2">
        </div>

        <div class="input-group">
          <span class="input-group-addon">时间</span>
          <input type="text" name="dateline" value="<?php echo date('Y-m-d H-i-s',$_smarty_tpl->tpl_vars['time']->value);?>
" class="form-control" aria-label="Amount (to the nearest dollar)">
        </div>

        <div class="input-group">
          <span class="input-group-addon">题图</span>
          <input type="text" name="pic_path" class="form-control" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['data']->value['pic_path'])===null||$tmp==='' ? 'img/blog/editors_post_img.jpg' : $tmp);?>
" aria-label="Amount (to the nearest dollar)">
        </div>
        <label for="index"> 优先级 &nbsp;</label>
          <select name="flag" id="index" value='<?php echo (($tmp = @$_smarty_tpl->tpl_vars['data']->value['flag'])===null||$tmp==='' ? 'normal' : $tmp);?>
' >
            <option>hot</option>
            <option>latest</option>
            <option>normal</option>
            <option>important</option>
          </select>
        <input type="submit" value="提交" class="input-group pull-right">
        <br>
        <textarea name="content" id="summernote" class="form-control" rows="6" ><?php echo (($tmp = @$_smarty_tpl->tpl_vars['data']->value['content'])===null||$tmp==='' ? '' : $tmp);?>
</textarea>
        <!-- Single button -->
         <input type="hidden" name="id" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['data']->value['id'])===null||$tmp==='' ? '' : $tmp);?>
">
    </form>
</div>

<?php echo '<script'; ?>
>
    // 初始化插件
$(function () {
    $("#summernote").summernote();
});
$('#summernote').summernote({
     // 语言
     lang:'zh-CN',
  height: 400,                 // set editor height
  minHeight: null,             // set minimum height of editor
  maxHeight: null,             // set maximum height of editor
  focus: true                  // set focus to editable area after initializing summernote
});

<?php echo '</script'; ?>
>


<?php }
}
