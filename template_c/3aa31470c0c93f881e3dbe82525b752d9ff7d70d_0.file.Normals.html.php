<?php
/* Smarty version 3.1.30, created on 2018-01-31 12:58:53
  from "E:\IT_study\zhiku-v2.0\tpl\index_component\Normals.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a71af7df38b60_46277651',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3aa31470c0c93f881e3dbe82525b752d9ff7d70d' => 
    array (
      0 => 'E:\\IT_study\\zhiku-v2.0\\tpl\\index_component\\Normals.html',
      1 => 1517399805,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a71af7df38b60_46277651 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_modifier_truncate')) require_once 'E:\\IT_study\\zhiku-v2.0\\libs\\View\\smarty_libs\\plugins\\modifier.truncate.php';
?>
<section class="section editors-picks mb-20">
            <div class="title-wrap">
              <h3 class="section-title">杂烩</h3>
              <a href="#" class="all-posts-url">查看更多</a>
            </div>
            <div class="row">
              <div class="col-lg-7">
                <article class="entry">
                  <div class="entry__img-holder">
                    <a href="<?php echo $_smarty_tpl->tpl_vars['router']->value['single'];
echo $_smarty_tpl->tpl_vars['arti_data']->value[0]['id'];?>
">
                      <div class="thumb-container thumb-75">
                        <img data-src="<?php echo $_smarty_tpl->tpl_vars['arti_data']->value[0]['pic_path'];?>
" src="<?php echo $_smarty_tpl->tpl_vars['arti_data']->value[0]['pic_path'];?>
" class="entry__img lazyload" alt="" />
                      </div>
                    </a>
                  </div>

                  <div class="entry__body">
                    <div class="entry__header">
                      <a href="#" class="entry__meta-category">science</a>
                      <h2 class="entry__title">
                        <a href="<?php echo $_smarty_tpl->tpl_vars['router']->value['single'];
echo $_smarty_tpl->tpl_vars['arti_data']->value[0]['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['arti_data']->value[0]['title'];?>
</a>
                      </h2>
                      <ul class="entry__meta">
                        <li class="entry__meta-author">
                          <i class="ui-author"></i>
                          <a href="#"><?php echo $_smarty_tpl->tpl_vars['arti_data']->value[0]['author'];?>
</a>
                        </li>
                        <li class="entry__meta-date">
                          <i class="ui-date"></i>
                          <?php echo date('Y-m-d H-i-s',$_smarty_tpl->tpl_vars['arti_data']->value[0]['dateline']);?>

                        </li>
                        <li class="entry__meta-comments">
                          <i class="ui-comments"></i>
                          <a href="#">0</a>
                        </li>
                      </ul>
                    </div>
                    <div class="entry__excerpt">
                      <p><?php echo smarty_modifier_truncate(preg_replace('!<[^>]*?>!', ' ', nl2br($_smarty_tpl->tpl_vars['arti_data']->value[0]['content'])),100," ... ");?>
</p>
                    </div>
                  </div>
                </article>
              </div>
              <div class="col-lg-5">    

                <ul class="post-list-small">
              <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['arti_data']->value, 'item', false, NULL, 'foo', array (
  'iteration' => true,
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['__smarty_foreach_foo']->value['iteration']++;
?> 
                       
                    <li class="post-list-small__item">
                        <article class="post-list-small__entry">
                          <div class="post-list-small__body">
                            <h3 class="post-list-small__entry-title">
                              <a href="<?php echo $_smarty_tpl->tpl_vars['router']->value['single'];
echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
</a>
                            </h3>
                            <ul class="entry__meta">
                              <li class="entry__meta-date">
                                <i class="ui-date"></i>
                                <?php echo date('Y-m-d',$_smarty_tpl->tpl_vars['item']->value['dateline']);?>

                              </li>
                            </ul>
                          </div>                  
                        </article>
                  </li>
                  <!--限制输出条数-->
                <?php if ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_foo']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_foo']->value['iteration'] : null) == 7) {?>
                    <?php break 1;?>
                <?php }?>                    
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                </ul>
              </div>
            </div>
          </section> 
<?php }
}
