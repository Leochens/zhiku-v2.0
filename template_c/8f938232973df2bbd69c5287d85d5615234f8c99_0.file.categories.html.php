<?php
/* Smarty version 3.1.30, created on 2018-02-02 07:37:34
  from "E:\IT_study\zhiku-v2.0\tpl\index_component\categories.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a74072ece8434_94925090',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8f938232973df2bbd69c5287d85d5615234f8c99' => 
    array (
      0 => 'E:\\IT_study\\zhiku-v2.0\\tpl\\index_component\\categories.html',
      1 => 1517553451,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a74072ece8434_94925090 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_modifier_truncate')) require_once 'E:\\IT_study\\zhiku-v2.0\\libs\\View\\smarty_libs\\plugins\\modifier.truncate.php';
?>
          <section class="section mb-0">
            <div class="row">

              <!-- 思政 -->

            <div class="col-md-6 mb-40">
                <div class="title-wrap bottom-line bottom-line--orange">
                  <h3 class="section-title section-title--sm">思政</h3>
                </div>
                <article class="entry">
                  <div class="entry__img-holder">
                    <a href="<?php echo $_smarty_tpl->tpl_vars['router_article_articleDetail']->value;
echo $_smarty_tpl->tpl_vars['hot']->value[0]['id'];?>
">
                      <div class="thumb-container thumb-75">
                        <img data-src="<?php echo $_smarty_tpl->tpl_vars['hot']->value[0]['pic_path'];?>
" src="<?php echo $_smarty_tpl->tpl_vars['hot']->value[0]['pic_path'];?>
" class="entry__img lazyload" alt="" />
                      </div>
                    </a>
                  </div>

                  <div class="entry__body">
                    <div class="entry__header">
                      <h2 class="entry__title">
                        <a href="<?php echo $_smarty_tpl->tpl_vars['router_article_articleDetail']->value;
echo $_smarty_tpl->tpl_vars['hot']->value[0]['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['hot']->value[0]['title'];?>
</a>
                      </h2>
                      <ul class="entry__meta">
                        <li class="entry__meta-author">
                          <i class="ui-author"></i>
                          <a href="#"><?php echo $_smarty_tpl->tpl_vars['hot']->value[0]['author'];?>
</a>
                        </li>
                        <li class="entry__meta-date">
                          <i class="ui-date"></i>
                          <?php echo date('Y-m-d',$_smarty_tpl->tpl_vars['hot']->value[0]['dateline']);?>

                        </li>
                        <li class="entry__meta-comments">
                          <i class="ui-comments"></i>
                          <a href="#">0</a>
                        </li>
                      </ul>
                    </div>
                    <div class="entry__excerpt">
                      <p><?php echo smarty_modifier_truncate(preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['hot']->value[0]['content']),200," <a href='".((string)$_smarty_tpl->tpl_vars['router_article_articleDetail']->value).((string)$_smarty_tpl->tpl_vars['hot']->value[0]['id'])."'>...查看文章</a>");?>
</p>
                    </div>
                  </div>
                </article>
                <ul class="post-list-small post-list-small--border-top">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['hot']->value, 'item', false, NULL, 'foo', array (
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
                          <a href="<?php echo $_smarty_tpl->tpl_vars['router_article_articleDetail']->value;
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
                    <?php if ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_foo']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_foo']->value['iteration'] : null) == 4) {?>
                    <?php break 1;?>
                    <?php }?>                   
                  <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                  
                </ul>
              </div> <!-- end world -->

              <!-- 改革 -->
              <div class="col-md-6 mb-40">
                <div class="title-wrap bottom-line bottom-line--violet">
                  <h3 class="section-title section-title--sm">改革</h3>
                </div>
                               <article class="entry">
                  <div class="entry__img-holder">
                    <a href="<?php echo $_smarty_tpl->tpl_vars['router_article_articleDetail']->value;
echo $_smarty_tpl->tpl_vars['hot']->value[0]['id'];?>
">
                      <div class="thumb-container thumb-75">
                        <img data-src="<?php echo $_smarty_tpl->tpl_vars['hot']->value[1]['pic_path'];?>
" src="<?php echo $_smarty_tpl->tpl_vars['hot']->value[1]['pic_path'];?>
" class="entry__img lazyload" alt="" />
                      </div>
                    </a>
                  </div>

                  <div class="entry__body">
                    <div class="entry__header">
                      <h2 class="entry__title">
                        <a href="<?php echo $_smarty_tpl->tpl_vars['router_article_articleDetail']->value;
echo $_smarty_tpl->tpl_vars['hot']->value[1]['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['hot']->value[1]['title'];?>
</a>
                      </h2>
                      <ul class="entry__meta">
                        <li class="entry__meta-author">
                          <i class="ui-author"></i>
                          <a href="#"><?php echo $_smarty_tpl->tpl_vars['hot']->value[1]['author'];?>
</a>
                        </li>
                        <li class="entry__meta-date">
                          <i class="ui-date"></i>
                          <?php echo date('Y-m-d',$_smarty_tpl->tpl_vars['hot']->value[1]['dateline']);?>

                        </li>
                        <li class="entry__meta-comments">
                          <i class="ui-comments"></i>
                          <a href="#">0</a>
                        </li>
                      </ul>
                    </div>
                    <div class="entry__excerpt">
                      <p><?php echo smarty_modifier_truncate(preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['hot']->value[1]['content']),200," <a href='".((string)$_smarty_tpl->tpl_vars['router_article_articleDetail']->value).((string)$_smarty_tpl->tpl_vars['hot']->value[1]['id'])."'>...查看文章</a>");?>
</p>
                    </div>
                  </div>
                </article>
                <ul class="post-list-small post-list-small--border-top">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['hot']->value, 'item', false, NULL, 'foo', array (
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
                          <a href="<?php echo $_smarty_tpl->tpl_vars['router_article_articleDetail']->value;
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
                    <?php if ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_foo']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_foo']->value['iteration'] : null) == 4) {?>
                    <?php break 1;?>
                    <?php }?>                   
                  <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                  
                </ul>
              </div> <!-- end sport -->

              <!-- 大学 -->
              <div class="col-md-6 mb-40">
                <div class="title-wrap bottom-line bottom-line--blue">
                  <h3 class="section-title section-title--sm">大学</h3>
                </div>
                <article class="entry">
                  <div class="entry__img-holder">
                    <a href="<?php echo $_smarty_tpl->tpl_vars['router_article_articleDetail']->value;
echo $_smarty_tpl->tpl_vars['hot']->value[2]['id'];?>
">
                      <div class="thumb-container thumb-75">
                        <img data-src="<?php echo $_smarty_tpl->tpl_vars['hot']->value[2]['pic_path'];?>
" src="<?php echo $_smarty_tpl->tpl_vars['hot']->value[2]['pic_path'];?>
" class="entry__img lazyload" alt="" />
                      </div>
                    </a>
                  </div>

                  <div class="entry__body">
                    <div class="entry__header">
                      <h2 class="entry__title">
                        <a href="<?php echo $_smarty_tpl->tpl_vars['router_article_articleDetail']->value;
echo $_smarty_tpl->tpl_vars['hot']->value[2]['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['hot']->value[2]['title'];?>
</a>
                      </h2>
                      <ul class="entry__meta">
                        <li class="entry__meta-author">
                          <i class="ui-author"></i>
                          <a href="#"><?php echo $_smarty_tpl->tpl_vars['hot']->value[2]['author'];?>
</a>
                        </li>
                        <li class="entry__meta-date">
                          <i class="ui-date"></i>
                          <?php echo date('Y-m-d',$_smarty_tpl->tpl_vars['hot']->value[2]['dateline']);?>

                        </li>
                        <li class="entry__meta-comments">
                          <i class="ui-comments"></i>
                          <a href="#">0</a>
                        </li>
                      </ul>
                    </div>
                    <div class="entry__excerpt">
                      <p><?php echo smarty_modifier_truncate(preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['hot']->value[2]['content']),200," <a href='".((string)$_smarty_tpl->tpl_vars['router_article_articleDetail']->value).((string)$_smarty_tpl->tpl_vars['hot']->value[2]['id'])."'>...查看文章</a>");?>
</p>
                    </div>
                  </div>
                </article>
                <ul class="post-list-small post-list-small--border-top">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['hot']->value, 'item', false, NULL, 'foo', array (
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
                          <a href="<?php echo $_smarty_tpl->tpl_vars['router_article_articleDetail']->value;
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
                    <?php if ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_foo']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_foo']->value['iteration'] : null) == 4) {?>
                    <?php break 1;?>
                    <?php }?>                   
                  <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                  
                </ul>
              </div> <!-- end business -->

                <!-- 大学 -->
              <div class="col-md-6 mb-40">
                <div class="title-wrap bottom-line bottom-line--blue">
                  <h3 class="section-title section-title--sm">大学</h3>
                </div>
                <article class="entry">
                  <div class="entry__img-holder">
                    <a href="<?php echo $_smarty_tpl->tpl_vars['router_article_articleDetail']->value;
echo $_smarty_tpl->tpl_vars['hot']->value[3]['id'];?>
">
                      <div class="thumb-container thumb-75">
                        <img data-src="<?php echo $_smarty_tpl->tpl_vars['hot']->value[3]['pic_path'];?>
" src="<?php echo $_smarty_tpl->tpl_vars['hot']->value[3]['pic_path'];?>
" class="entry__img lazyload" alt="" />
                      </div>
                    </a>
                  </div>

                  <div class="entry__body">
                    <div class="entry__header">
                      <h2 class="entry__title">
                        <a href="<?php echo $_smarty_tpl->tpl_vars['router_article_articleDetail']->value;
echo $_smarty_tpl->tpl_vars['hot']->value[3]['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['hot']->value[3]['title'];?>
</a>
                      </h2>
                      <ul class="entry__meta">
                        <li class="entry__meta-author">
                          <i class="ui-author"></i>
                          <a href="#"><?php echo $_smarty_tpl->tpl_vars['hot']->value[3]['author'];?>
</a>
                        </li>
                        <li class="entry__meta-date">
                          <i class="ui-date"></i>
                          <?php echo date('Y-m-d',$_smarty_tpl->tpl_vars['hot']->value[3]['dateline']);?>

                        </li>
                        <li class="entry__meta-comments">
                          <i class="ui-comments"></i>
                          <a href="#">0</a>
                        </li>
                      </ul>
                    </div>
                    <div class="entry__excerpt">
                      <p><?php echo smarty_modifier_truncate(preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['hot']->value[3]['content']),200," <a href='".((string)$_smarty_tpl->tpl_vars['router_article_articleDetail']->value).((string)$_smarty_tpl->tpl_vars['hot']->value[3]['id'])."'>...查看文章</a>");?>
</p>
                    </div>
                  </div>
                </article>
                <ul class="post-list-small post-list-small--border-top">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['hot']->value, 'item', false, NULL, 'foo', array (
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
                          <a href="<?php echo $_smarty_tpl->tpl_vars['router_article_articleDetail']->value;
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
                    <?php if ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_foo']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_foo']->value['iteration'] : null) == 4) {?>
                    <?php break 1;?>
                    <?php }?>                   
                  <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                  
                </ul>
              </div> <!-- end business -->
            </div>                
          </section> <!-- end posts from categories -->
<?php }
}
