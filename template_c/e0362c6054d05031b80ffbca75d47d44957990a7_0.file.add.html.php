<?php
/* Smarty version 3.1.30, created on 2018-02-02 04:53:02
  from "E:\IT_study\zhiku-v2.0\tpl\admin\router_article_articleInsertUpdate.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a73e09e865a49_94539560',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e0362c6054d05031b80ffbca75d47d44957990a7' => 
    array (
      0 => 'E:\\IT_study\\zhiku-v2.0\\tpl\\admin\\router_article_articleInsertUpdate.html',
      1 => 1517543580,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a73e09e865a49_94539560 (Smarty_Internal_Template $_smarty_tpl) {
?>


<br><br><br>
<div class="container">
    <form   class="col-sm-6 col-md-12">
        <input class="form-control input-lg"  type="text" placeholder="文章标题">
        <br>
        <div class="input-group">
          <span class="input-group-addon" id="basic-addon1">作者</span>
          <input type="text" class="form-control" placeholder="" aria-describedby="basic-addon1">
        </div>

        <div class="input-group">
          <span class="input-group-addon" id="basic-addon2">标签</span>
          <input type="text" class="form-control" placeholder="" aria-describedby="basic-addon2">
        </div>

        <div class="input-group">
          <span class="input-group-addon">时间</span>
          <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)">
        </div>

        <div class="input-group">
          <span class="input-group-addon">题图</span>
          <input type="text" class="form-control" value="http://www.bootcss.com/p/flat-ui/images/demo/browser-pic-5.jpg" aria-label="Amount (to the nearest dollar)">
        </div>
        <label for="index"> 优先级 &nbsp;</label>

          <select id="index" value='normal' >
            <option>hot</option>
            <option>latest</option>
            <option>normal</option>
            <option>important</option>
          </select>
        <input type="submit" value="提交" class="input-group pull-right">
        <br>
        <textarea name="content" id="summernote" class="form-control" rows="6" ></textarea>
        <!-- Single button -->
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
><?php }
}
