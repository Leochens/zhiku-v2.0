<?php
/* Smarty version 3.1.30, created on 2018-01-31 13:02:48
  from "E:\IT_study\zhiku-v2.0\tpl\index_component\hotNews.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a71b0687a81f0_20887091',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6f077af4ad88eb0558d352c6309ca8ac8005662f' => 
    array (
      0 => 'E:\\IT_study\\zhiku-v2.0\\tpl\\index_component\\hotNews.html',
      1 => 1517400139,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a71b0687a81f0_20887091 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_modifier_truncate')) require_once 'E:\\IT_study\\zhiku-v2.0\\libs\\View\\smarty_libs\\plugins\\modifier.truncate.php';
?>
          <section class="section tab-post mb-10">
            <div class="title-wrap">
              <h3 class="section-title">热点</h3>

              <div class="tabs tab-post__tabs"> 
                <ul class="tabs__list">
                  <li class="tabs__item tabs__item--active">
                    <a href="#tab-all" class="tabs__trigger">全部</a>
                  </li>
                  <li class="tabs__item">
                    <a href="#tab-teach" class="tabs__trigger">教育</a>
                  </li>
                  <li class="tabs__item">
                    <a href="#tab-environment" class="tabs__trigger">生态</a>
                  </li>
                  <li class="tabs__item">
                    <a href="#tab-politics" class="tabs__trigger">思政</a>
                  </li>
                  <li class="tabs__item">
                    <a href="#tab-science" class="tabs__trigger">科技</a>
                  </li>
                </ul> <!-- end tabs -->
              </div>
            </div>
    
            <!-- tab content -->
   
            <div class="tabs__content tabs__content-trigger tab-post__tabs-content">
             
              <div class="tabs__content-pane tabs__content-pane--active" id="tab-all">
                <div class="row">
                 <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['arti_data']->value, 'item', false, NULL, 'foo', array (
  'iteration' => true,
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['__smarty_foreach_foo']->value['iteration']++;
?>
                  <div class="col-md-6">
                    <article class="entry">
                      <div class="entry__img-holder">
                        <a href="<?php echo $_smarty_tpl->tpl_vars['router']->value['single'];
echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
">
                          <div class="thumb-container thumb-75">
                            <img data-src="<?php echo $_smarty_tpl->tpl_vars['item']->value['pic_path'];?>
" src="<?php echo $_smarty_tpl->tpl_vars['item']->value['pic_path'];?>
" class="entry__img lazyload" alt="" />
                          </div>
                        </a>
                      </div>

                      <div class="entry__body">
                        <div class="entry__header">
                          <a href="#" class="entry__meta-category"><?php echo $_smarty_tpl->tpl_vars['item']->value['tags'];?>
</a>
                          <h2 class="entry__title">
                            <a href="<?php echo $_smarty_tpl->tpl_vars['router']->value['single'];
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
                             <?php echo date('Y-m-d',$_smarty_tpl->tpl_vars['item']->value['dateline']);?>

                            </li>
                            <li class="entry__meta-comments">
                              <i class="ui-comments"></i>
                              <a href="#">0</a>
                            </li>
                          </ul>
                        </div>
                        <div class="entry__excerpt">
                          <p><?php echo smarty_modifier_truncate(preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['item']->value['content']),200," <a href='".((string)$_smarty_tpl->tpl_vars['router']->value['single']).((string)$_smarty_tpl->tpl_vars['item']->value['id'])."'>...查看文章</a>");?>
</p>
                        </div>
                      </div>
                    </article>
                  </div>
                <?php if ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_foo']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_foo']->value['iteration'] : null) == 4) {?>
                  <?php break 1;?>
                  <?php }?>
                 <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                </div>

              </div> <!-- end pane 1 -->
             
              <div class="tabs__content-pane" id="tab-teach">
                <div class="row">
                  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['hot']->value, 'item', false, NULL, 'foo', array (
  'iteration' => true,
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['__smarty_foreach_foo']->value['iteration']++;
?>
                  <div class="col-md-6">
                    <article class="entry">
                      <div class="entry__img-holder">
                        <a href="<?php echo $_smarty_tpl->tpl_vars['router']->value['single'];
echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
">
                          <div class="thumb-container thumb-75">
                            <img data-src="<?php echo $_smarty_tpl->tpl_vars['item']->value['pic_path'];?>
" src="<?php echo $_smarty_tpl->tpl_vars['item']->value['pic_path'];?>
" class="entry__img lazyload" alt="" />
                          </div>
                        </a>
                      </div>

                      <div class="entry__body">
                        <div class="entry__header">
                          <a href="#" class="entry__meta-category"><?php echo $_smarty_tpl->tpl_vars['item']->value['tags'];?>
</a>
                          <h2 class="entry__title">
                            <a href="<?php echo $_smarty_tpl->tpl_vars['router']->value['single'];
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
                             <?php echo date('Y-m-d',$_smarty_tpl->tpl_vars['item']->value['dateline']);?>

                            </li>
                            <li class="entry__meta-comments">
                              <i class="ui-comments"></i>
                              <a href="#">0</a>
                            </li>
                          </ul>
                        </div>
                        <div class="entry__excerpt">
                          <p><?php echo smarty_modifier_truncate(preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['item']->value['content']),200,"...");?>
</p>
                        </div>
                      </div>
                    </article>
                  </div>
                    <?php if ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_foo']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_foo']->value['iteration'] : null) == 4) {?>
                      <?php break 1;?>
                    <?php }?>                  
                   <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                </div>
              </div> <!-- end pane 2 -->
              <!--<div class="tabs__content-pane" id="tab-environment">
                <div class="row">
                  <div class="col-md-6">
                    <article class="entry">
                      <div class="entry__img-holder">
                        <a href="tpl/single_article/single-post.html">
                          <div class="thumb-container thumb-75">
                            <img data-src="img/blog/grid_post_img_1.jpg" src="img/empty.png" class="entry__img lazyload" alt="" />
                          </div>
                        </a>
                      </div>

                      <div class="entry__body">
                        <div class="entry__header">
                          <a href="#" class="entry__meta-category">科技</a>
                          <h2 class="entry__title">
                            <a href="tpl/single_article/single-post.html">Optimal Amount of Rainfall for Plants</a>
                          </h2>
                          <ul class="entry__meta">
                            <li class="entry__meta-author">
                              <i class="ui-author"></i>
                              <a href="#">DeoThemes</a>
                            </li>
                            <li class="entry__meta-date">
                              <i class="ui-date"></i>
                              21 October, 2017
                            </li>
                            <li class="entry__meta-comments">
                              <i class="ui-comments"></i>
                              <a href="#">115</a>
                            </li>
                          </ul>
                        </div>
                        <div class="entry__excerpt">
                          <p>Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos. Lorem ipsum dolor sit amet, consectetur adipiscing elit...</p>
                        </div>
                      </div>
                    </article>
                  </div>
                  <div class="col-md-6">
                    <article class="entry">
                      <div class="entry__img-holder">
                        <a href="tpl/single_article/single-post.html">
                          <div class="thumb-container thumb-75">
                            <img data-src="img/blog/grid_post_img_2.jpg" src="img/empty.png" class="entry__img lazyload" alt="" />
                          </div>
                        </a>
                      </div>

                      <div class="entry__body">
                        <div class="entry__header">
                          <a href="#" class="entry__meta-category">思政</a>
                          <h2 class="entry__title">
                            <a href="tpl/single_article/single-post.html">BRICS Nations Agree to Create Own Development Bank</a>
                          </h2>
                          <ul class="entry__meta">
                            <li class="entry__meta-author">
                              <i class="ui-author"></i>
                              <a href="#">DeoThemes</a>
                            </li>
                            <li class="entry__meta-date">
                              <i class="ui-date"></i>
                              21 October, 2017
                            </li>
                            <li class="entry__meta-comments">
                              <i class="ui-comments"></i>
                              <a href="#">115</a>
                            </li>
                          </ul>
                        </div>
                        <div class="entry__excerpt">
                          <p>Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos. Lorem ipsum dolor sit amet, consectetur adipiscing elit...</p>
                        </div>
                      </div>
                    </article>
                  </div>
                </div>
              </div> <!-- end pane 3 -->
              <!--<div class="tabs__content-pane" id="tab-politics">
                <div class="row">
                  <div class="col-md-6">
                    <article class="entry">
                      <div class="entry__img-holder">
                        <a href="tpl/single_article/single-post.html">
                          <div class="thumb-container thumb-75">
                            <img data-src="img/blog/grid_post_img_1.jpg" src="img/empty.png" class="entry__img lazyload" alt="" />
                          </div>
                        </a>
                      </div>

                      <div class="entry__body">
                        <div class="entry__header">
                          <a href="#" class="entry__meta-category">生物</a>
                          <h2 class="entry__title">
                            <a href="tpl/single_article/single-post.html">Optimal Amount of Rainfall for Plants</a>
                          </h2>
                          <ul class="entry__meta">
                            <li class="entry__meta-author">
                              <i class="ui-author"></i>
                              <a href="#">DeoThemes</a>
                            </li>
                            <li class="entry__meta-date">
                              <i class="ui-date"></i>
                              21 October, 2017
                            </li>
                            <li class="entry__meta-comments">
                              <i class="ui-comments"></i>
                              <a href="#">115</a>
                            </li>
                          </ul>
                        </div>
                        <div class="entry__excerpt">
                          <p>Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos. Lorem ipsum dolor sit amet, consectetur adipiscing elit...</p>
                        </div>
                      </div>
                    </article>
                  </div>
                  <div class="col-md-6">
                    <article class="entry">
                      <div class="entry__img-holder">
                        <a href="tpl/single_article/single-post.html">
                          <div class="thumb-container thumb-75">
                            <img data-src="img/blog/grid_post_img_2.jpg" src="img/empty.png" class="entry__img lazyload" alt="" />
                          </div>
                        </a>
                      </div>

                      <div class="entry__body">
                        <div class="entry__header">
                          <a href="#" class="entry__meta-category">经济</a>
                          <h2 class="entry__title">
                            <a href="tpl/single_article/single-post.html">BRICS Nations Agree to Create Own Development Bank</a>
                          </h2>
                          <ul class="entry__meta">
                            <li class="entry__meta-author">
                              <i class="ui-author"></i>
                              <a href="#">DeoThemes</a>
                            </li>
                            <li class="entry__meta-date">
                              <i class="ui-date"></i>
                              21 October, 2017
                            </li>
                            <li class="entry__meta-comments">
                              <i class="ui-comments"></i>
                              <a href="#">115</a>
                            </li>
                          </ul>
                        </div>
                        <div class="entry__excerpt">
                          <p>Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos. Lorem ipsum dolor sit amet, consectetur adipiscing elit...</p>
                        </div>
                      </div>
                    </article>
                  </div>
                </div>
              </div> <!-- end pane 4 -->
              <!--<div class="tabs__content-pane" id="tab-science">
                <div class="row">
                  <div class="col-md-6">
                    <article class="entry">
                      <div class="entry__img-holder">
                        <a href="tpl/single_article/single-post.html">
                          <div class="thumb-container thumb-75">
                            <img data-src="img/blog/grid_post_img_1.jpg" src="img/empty.png" class="entry__img lazyload" alt="" />
                          </div>
                        </a>
                      </div>

                      <div class="entry__body">
                        <div class="entry__header">
                          <a href="#" class="entry__meta-category">science</a>
                          <h2 class="entry__title">
                            <a href="tpl/single_article/single-post.html">Optimal Amount of Rainfall for Plants</a>
                          </h2>
                          <ul class="entry__meta">
                            <li class="entry__meta-author">
                              <i class="ui-author"></i>
                              <a href="#">DeoThemes</a>
                            </li>
                            <li class="entry__meta-date">
                              <i class="ui-date"></i>
                              21 October, 2017
                            </li>
                            <li class="entry__meta-comments">
                              <i class="ui-comments"></i>
                              <a href="#">115</a>
                            </li>
                          </ul>
                        </div>
                        <div class="entry__excerpt">
                          <p>Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos. Lorem ipsum dolor sit amet, consectetur adipiscing elit...</p>
                        </div>
                      </div>
                    </article>
                  </div>
                  <div class="col-md-6">
                    <article class="entry">
                      <div class="entry__img-holder">
                        <a href="tpl/single_article/single-post.html">
                          <div class="thumb-container thumb-75">
                            <img data-src="img/blog/grid_post_img_2.jpg" src="img/empty.png" class="entry__img lazyload" alt="" />
                          </div>
                        </a>
                      </div>

                      <div class="entry__body">
                        <div class="entry__header">
                          <a href="#" class="entry__meta-category">business</a>
                          <h2 class="entry__title">
                            <a href="tpl/single_article/single-post.html">BRICS Nations Agree to Create Own Development Bank</a>
                          </h2>
                          <ul class="entry__meta">
                            <li class="entry__meta-author">
                              <i class="ui-author"></i>
                              <a href="#">DeoThemes</a>
                            </li>
                            <li class="entry__meta-date">
                              <i class="ui-date"></i>
                              21 October, 2017
                            </li>
                            <li class="entry__meta-comments">
                              <i class="ui-comments"></i>
                              <a href="#">115</a>
                            </li>
                          </ul>
                        </div>
                        <div class="entry__excerpt">
                          <p>Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos. Lorem ipsum dolor sit amet, consectetur adipiscing elit...</p>
                        </div>
                      </div>
                    </article>
                  </div>
                </div>
              </div> <!-- end pane 5 -->

            </div> <!-- end tab content -->            
          </section> <!-- end hot news -->
<?php }
}