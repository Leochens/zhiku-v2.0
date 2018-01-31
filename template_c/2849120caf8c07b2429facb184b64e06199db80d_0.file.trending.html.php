<?php
/* Smarty version 3.1.30, created on 2018-01-31 06:34:04
  from "E:\IT_study\zhiku-v2.0\tpl\index_component\trending.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a71554c637428_86657316',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2849120caf8c07b2429facb184b64e06199db80d' => 
    array (
      0 => 'E:\\IT_study\\zhiku-v2.0\\tpl\\index_component\\trending.html',
      1 => 1517376705,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a71554c637428_86657316 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!-- Trending Now -->
    <div class="trending-now">
      <div class="container relative">
        <span class="trending-now__label">看点</span>
        <ul class="newsticker">
          <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['arti_data']->value, 'item');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
?>
          <li class="newsticker__item">
            <a href="tpl/single-post.html" class="newsticker__item-url"><?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
</a>
          </li>
          <?php
}
} else {
?>

          <li class="newsticker__item"><a href="#" class="newsticker__item-url">暂无看点</a></li>
          <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>
          
        </ul>
        <div class="newsticker-buttons">
          <button class="newsticker-button newsticker-button--prev" id="newsticker-button--prev" aria-label="next article"><i class="ui-arrow-left"></i></button>
          <button class="newsticker-button newsticker-button--next" id="newsticker-button--next" aria-label="previous article"><i class="ui-arrow-right"></i></button>
        </div>        
      </div>
    </div>    
<?php }
}
