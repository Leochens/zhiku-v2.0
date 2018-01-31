<?php
/* Smarty version 3.1.30, created on 2018-01-31 13:52:09
  from "E:\IT_study\zhiku-v2.0\tpl\index_component\content.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a71bbf9906815_01149723',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b2d11062fa165e80bc0eb3a5724aa5b2d7d36f2f' => 
    array (
      0 => 'E:\\IT_study\\zhiku-v2.0\\tpl\\index_component\\content.html',
      1 => 1517403040,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:tpl/index_component/hotNews.html' => 1,
    'file:tpl/index_component/latestNews.html' => 1,
    'file:tpl/index_component/Normals.html' => 1,
    'file:tpl/index_component/categories.html' => 1,
    'file:tpl/index_component/right_sidebar.html' => 1,
  ),
),false)) {
function content_5a71bbf9906815_01149723 (Smarty_Internal_Template $_smarty_tpl) {
?>
 <div class="main-container container mt-40" id="main-container">         

      <!-- Content -->
      <div class="row">

        <!-- Posts -->
        <div class="col-lg-8 blog__content mb-30">
          
          <!-- Hot News -->
        <?php $_smarty_tpl->_subTemplateRender("file:tpl/index_component/hotNews.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

          <!-- Latest News -->
        <?php $_smarty_tpl->_subTemplateRender("file:tpl/index_component/latestNews.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

 
          <!-- Ad Banner 728 
          <div class="text-center pb-40">
            <a href="#">
              <img src="img/blog/placeholder_leaderboard.jpg" alt="">
            </a>
          </div>-->

          <!-- Editor's Picks -->
        <?php $_smarty_tpl->_subTemplateRender("file:tpl/index_component/Normals.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


          <!-- end editors picks -->

          <!-- Posts from 菜单 -->
        <?php $_smarty_tpl->_subTemplateRender("file:tpl/index_component/categories.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


          <!-- Carousel posts -->
          <section class="section mb-20">
            <div class="title-wrap">
              <h3 class="section-title section-title--sm">More News</h3>
              <div class="carousel-nav">
                <button class="carousel-nav__btn carousel-nav__btn--prev" aria-label="previous slide">
                  <i class="ui-arrow-left"></i>
                </button>
                <button class="carousel-nav__btn carousel-nav__btn--next" aria-label="next slide">
                  <i class="ui-arrow-right"></i>
                </button>
              </div>
            </div>

            <!-- Slider -->
            <div id="owl-posts" class="owl-carousel owl-theme">
              <article class="entry">
                <div class="entry__img-holder">
                  <a href="tpl/single_article/single-post.html">
                    <div class="thumb-container thumb-75">
                      <img data-src="img/blog/carousel_img_1.jpg" src="img/blog/carousel_img_1.jpg" class="entry__img owl-lazy" alt="" />
                    </div>
                  </a>
                </div>

                <div class="entry__body">
                  <div class="entry__header">
                    <h2 class="entry__title entry__title--sm">
                      <a href="tpl/single_article/single-post.html">The Surprising Way This Designer Picked the Next It Colors</a>
                    </h2>
                    <ul class="entry__meta">
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
                </div>
              </article>
              <article class="entry">
                <div class="entry__img-holder">
                  <a href="tpl/single_article/single-post.html">
                    <div class="thumb-container thumb-75">
                      <img data-src="img/blog/carousel_img_2.jpg" src="img/blog/carousel_img_2.jpg" class="entry__img owl-lazy" alt="" />
                    </div>
                  </a>
                </div>

                <div class="entry__body">
                  <div class="entry__header">
                    <h2 class="entry__title entry__title--sm">
                      <a href="tpl/single_article/single-post.html">What Fashion Editors Are Buying for Every Kid on Our Holiday List</a>
                    </h2>
                    <ul class="entry__meta">
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
                </div>
              </article>
              <article class="entry">
                <div class="entry__img-holder">
                  <a href="tpl/single_article/single-post.html">
                    <div class="thumb-container thumb-75">
                      <img data-src="img/blog/carousel_img_3.jpg" src="img/blog/carousel_img_3.jpg" class="entry__img owl-lazy" alt="" />
                    </div>
                  </a>
                </div>

                <div class="entry__body">
                  <div class="entry__header">
                    <h2 class="entry__title entry__title--sm">
                      <a href="tpl/single_article/single-post.html">Why Coach's Cute New Holiday Collab Is Unexpected</a>
                    </h2>
                    <ul class="entry__meta">
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
                </div>
              </article>
            </div> <!-- end slider -->

          </section>

        </div> <!-- end posts -->

        <!-- Sidebar -->
        <?php $_smarty_tpl->_subTemplateRender("file:tpl/index_component/right_sidebar.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

  
      </div> <!-- end content -->
    </div> <!-- end main container -->
    <?php }
}
