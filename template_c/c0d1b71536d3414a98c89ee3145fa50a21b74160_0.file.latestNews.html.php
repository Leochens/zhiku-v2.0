<?php
/* Smarty version 3.1.30, created on 2018-02-02 07:37:34
  from "E:\IT_study\zhiku-v2.0\tpl\index_component\latestNews.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a74072eac5133_74376652',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c0d1b71536d3414a98c89ee3145fa50a21b74160' => 
    array (
      0 => 'E:\\IT_study\\zhiku-v2.0\\tpl\\index_component\\latestNews.html',
      1 => 1517553451,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a74072eac5133_74376652 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_modifier_truncate')) require_once 'E:\\IT_study\\zhiku-v2.0\\libs\\View\\smarty_libs\\plugins\\modifier.truncate.php';
?>
         <section class="section">
            <div class="title-wrap">
              <h3 class="section-title">最新</h3>
              <a href="#" class="all-posts-url">查看全部</a>
            </div>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['latest']->value, 'item', false, NULL, 'foo', array (
  'iteration' => true,
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['__smarty_foreach_foo']->value['iteration']++;
?>
            <article class="entry post-list" style="height: 250px;">
              <div class="entry__img-holder post-list__img-holder">
                <a href="<?php echo $_smarty_tpl->tpl_vars['router_article_articleDetail']->value;
echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
">
                  <div class="thumb-container thumb-75">
                    <img data-src="<?php echo $_smarty_tpl->tpl_vars['item']->value['pic_path'];?>
" src="img/empty.png" class="entry__img lazyload" alt="">
                  </div>
                </a>
              </div>

              <div class="entry__body post-list__body" style="max-height: 250px;" >
                <div class="entry__header">
                  <a href="#" class="entry__meta-category"><?php echo $_smarty_tpl->tpl_vars['item']->value['tags'];?>
</a>
                  <h2 class="entry__title">
                    <a href="<?php echo $_smarty_tpl->tpl_vars['router_article_articleDetail']->value;
echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
</a>
                  </h2>
                  <ul class="entry__meta">
                    <li class="entry__meta-author">
                      <i class="ui-author"></i>
                      <a href="#"><?php echo $_smarty_tpl->tpl_vars['item']->value['author'];?>
</a>
                    </li>
                    <li class="entry__meta-date">
                      <i class="ui-date"></i>
                  <?php echo date('Y-m-d H-i-s',$_smarty_tpl->tpl_vars['item']->value['dateline']);?>

                      
                    </li>
                    <li class="entry__meta-comments" >
                      <i class="ui-comments"></i>
                      <a href="#">0</a>
                    </li>
                  </ul>
                </div>
                <div class="entry__excerpt ">
                    <!--此处技术点 
                        用samrty的strip_tags去除标签 再截取200个字符 结尾省略号
                        -->
                  <p><?php echo smarty_modifier_truncate(preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['item']->value['content']),200," <a href='".((string)$_smarty_tpl->tpl_vars['router_article_articleDetail']->value).((string)$_smarty_tpl->tpl_vars['item']->value['id'])."'>...查看文章</a>");?>
</p>
                </div>
              </div>
            </article>
             <?php if ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_foo']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_foo']->value['iteration'] : null) == 5) {?>
                    <?php break 1;?>
                    <?php }?> 
     
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

           
          </section> <!-- end latest news -->
<?php }
}
