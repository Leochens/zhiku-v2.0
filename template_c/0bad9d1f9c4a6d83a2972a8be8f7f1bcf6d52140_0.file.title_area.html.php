<?php
/* Smarty version 3.1.30, created on 2018-01-31 12:04:06
  from "E:\IT_study\zhiku-v2.0\tpl\single_article\title_area.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a71a2a6ab3c04_14252138',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0bad9d1f9c4a6d83a2972a8be8f7f1bcf6d52140' => 
    array (
      0 => 'E:\\IT_study\\zhiku-v2.0\\tpl\\single_article\\title_area.html',
      1 => 1517395717,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a71a2a6ab3c04_14252138 (Smarty_Internal_Template $_smarty_tpl) {
?>

<!--此处模板包含文章的标题 标签 日期 作者 评论数量 首页图-->

<div class="single-post__entry-header entry__header">
              <a href="#" class="entry__meta-category"><?php echo $_smarty_tpl->tpl_vars['data']->value['tags'];?>
</a>
              <h1 class="single-post__entry-title">
                <?php echo $_smarty_tpl->tpl_vars['data']->value['title'];?>

              </h1>

              <ul class="entry__meta">
                <li class="entry__meta-author">
                  <i class="ui-author"></i>
                  <a href="#"><?php echo $_smarty_tpl->tpl_vars['data']->value['author'];?>
</a>
                </li>
                <li class="entry__meta-date">
                  <i class="ui-date"></i>
                  <?php echo date('Y-m-d H-i-s',$_smarty_tpl->tpl_vars['data']->value['dateline']);?>

                </li>
                <li class="entry__meta-comments">
                  <i class="ui-comments"></i>
                  <a href="#">0</a>
                </li>
              </ul>
            </div>
<div class="entry__img-holder">
              <img src="<?php echo $_smarty_tpl->tpl_vars['data']->value['pic_path'];?>
" alt="" class="entry__img">
            </div>
<?php }
}
