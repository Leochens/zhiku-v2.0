<?php
/* Smarty version 3.1.30, created on 2018-01-31 03:29:27
  from "E:\IT_study\zhiku-v2.0\tpl\index_component\featured.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a712a0737fbb4_74460225',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ff1b9f5f44110a32d6e07ca3f2b9a6c3f03d2d43' => 
    array (
      0 => 'E:\\IT_study\\zhiku-v2.0\\tpl\\index_component\\featured.html',
      1 => 1517365583,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a712a0737fbb4_74460225 (Smarty_Internal_Template $_smarty_tpl) {
?>
    <!-- Featured Posts Grid -->      
    <section class="featured-posts-grid bg-dark">
      <div class="container clearfix">
        <!-- Large post slider -->
        <div class="featured-posts-grid__item featured-posts-grid__item--lg">
          <div id="owl-hero-grid" class="owl-carousel owl-theme owl-carousel--dots-inside">
            <!--首页轮播大图-->
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['arti_data']->value, 'item');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
?>
            <article class="entry featured-posts-grid__entry">
              <div class="thumb-bg-holder owl-lazy" data-src="<?php echo $_smarty_tpl->tpl_vars['item']->value['pic_path'];?>
">
                <img src="<?php echo $_smarty_tpl->tpl_vars['item']->value['pic_path'];?>
" alt="" class="d-none">
                <a href="tpl/single-post.html" class="thumb-url"></a>
                <div class="bottom-gradient"></div>
              </div>
              <div class="thumb-text-holder">
                <a href="tpl/single-post.html" class="entry__meta-category entry__meta-category-color entry__meta-category-color--salad"><?php echo $_smarty_tpl->tpl_vars['item']->value['tags'];?>
</a>   
                <h2 class="thumb-entry-title">
                  <a href="tpl/single-post.html"><?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
</a>
                </h2>
              </div>
            </article>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

            
          </div> <!-- end owl slider -->
        </div> <!-- end large post slider -->
        

        <div class="featured-posts-grid__item featured-posts-grid__item--sm">        
          <article class="entry featured-posts-grid__entry">
            <div class="thumb-bg-holder" style="background-image: url(img/blog/featured_grid_2.jpg);">
              <a href="tpl/single-post.html" class="thumb-url"></a>
              <div class="bottom-gradient"></div>
            </div>

            <div class="thumb-text-holder">  
              <h2 class="thumb-entry-title thumb-entry-title--sm">
                <a href="tpl/single-post.html">These Are the 20 Best Places to Work in 2018</a>
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
          </article>
        </div>

        <div class="featured-posts-grid__item featured-posts-grid__item--sm">        
          <article class="entry featured-posts-grid__entry">
            <div class="thumb-bg-holder" style="background-image: url(img/blog/featured_grid_3.jpg);">
              <a href="tpl/single-post.html" class="thumb-url"></a>
              <div class="bottom-gradient"></div>
            </div>

            <div class="thumb-text-holder">  
              <h2 class="thumb-entry-title thumb-entry-title--sm">
                <a href="tpl/single-post.html">Experience the Grand Canyon National Park</a>
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
          </article>
        </div>

      </div>
    </section> <!-- end featured posts grid --><?php }
}
