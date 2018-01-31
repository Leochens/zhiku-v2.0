<?php
/* Smarty version 3.1.30, created on 2018-01-31 13:52:06
  from "E:\IT_study\zhiku-v2.0\tpl\single_article\single-post.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a71bbf65f8d55_32201043',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0228d9c8851641629cffc3dc152516e5e6cd7abd' => 
    array (
      0 => 'E:\\IT_study\\zhiku-v2.0\\tpl\\single_article\\single-post.html',
      1 => 1517403124,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:tpl/head_srcs.html' => 1,
    'file:tpl/preloader.html' => 1,
    'file:tpl/header.html' => 1,
    'file:tpl/single_article/title_area.html' => 1,
    'file:tpl/single_article/feedback.html' => 1,
    'file:tpl/single_article/about_author.html' => 1,
    'file:tpl/single_article/pre_next.html' => 1,
    'file:tpl/single_article/related.html' => 1,
    'file:tpl/single_article/comments.html' => 1,
    'file:tpl/single_article/right_sidebar.html' => 1,
    'file:tpl/footer.html' => 1,
    'file:tpl/js_srcs.html' => 1,
  ),
),false)) {
function content_5a71bbf65f8d55_32201043 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title> <?php echo $_smarty_tpl->tpl_vars['data']->value['title'];?>
</title>

  <?php $_smarty_tpl->_subTemplateRender("file:tpl/head_srcs.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


</head>

<body class="bg-light single-post">

 <?php $_smarty_tpl->_subTemplateRender("file:tpl/preloader.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

  

  <main class="main oh" id="main">
  <!--页头-->
    <?php $_smarty_tpl->_subTemplateRender("file:tpl/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    
    
   
    <div class="main-container container" id="main-container">

      <!-- Content -->
      <div class="row">
            
        <!-- post content -->
        <div class="col-lg-8 blog__content mb-30">

          <!-- Breadcrumbs -->
          <ul class="breadcrumbs">
            <li class="breadcrumbs__item">
              <a href="<?php echo $_smarty_tpl->tpl_vars['router']->value['index'];?>
" class="breadcrumbs__url"><i class="ui-home"></i></a>
            </li>
            <li class="breadcrumbs__item">
              <a href="<?php echo $_smarty_tpl->tpl_vars['router']->value['index'];?>
" class="breadcrumbs__url">首页</a>
            </li>
            <li class="breadcrumbs__item breadcrumbs__item--current">
              <?php echo $_smarty_tpl->tpl_vars['data']->value['flag'];?>

            </li>
          </ul>

          <!-- standard post -->
          <article class="entry">

            <!--此处模板包含文章的标题 标签 日期 作者 评论数量 首页图-->
            <?php $_smarty_tpl->_subTemplateRender("file:tpl/single_article/title_area.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


            <!-- Share 
            <div class="entry__share">
              <div class="socials entry__share-socials">
                <a href="#" class="social social-facebook entry__share-social social--wide social--medium">
                  <i class="ui-facebook"></i>
                  <span class="social__text">Share on Facebook</span>
                </a>
                <a href="#" class="social social-twitter entry__share-social social--wide social--medium">
                  <i class="ui-twitter"></i>
                  <span class="social__text">Share on Twitter</span>
                </a>
                <a href="#" class="social social-google-plus entry__share-social social--medium">
                  <i class="ui-google"></i>
                </a>
                <a href="#" class="social social-pinterest entry__share-social social--medium">
                  <i class="ui-pinterest"></i>
                </a>
              </div>                    
            </div> <!-- share -->

            <div class="entry__article">
              <!--文章主体-->
              <?php echo $_smarty_tpl->tpl_vars['data']->value['content'];?>


              <!-- tags -->
              <div class="entry__tags">
                <span class="entry__tags-label">Tags:</span>
                <a href="#" rel="tag"><?php echo $_smarty_tpl->tpl_vars['data']->value['tags'];?>
</a>
              </div> <!-- end tags -->

            </div> <!-- end entry article -->
            <!--反馈意见-->
            <?php $_smarty_tpl->_subTemplateRender("file:tpl/single_article/feedback.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


            <!-- 关于作者 -->
            <?php $_smarty_tpl->_subTemplateRender("file:tpl/single_article/about_author.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


            <!-- Prev / Next Post -->
            <?php $_smarty_tpl->_subTemplateRender("file:tpl/single_article/pre_next.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

            

            <!-- Related Posts -->
            <?php $_smarty_tpl->_subTemplateRender("file:tpl/single_article/related.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

            
          </article> <!-- end standard post -->


          <!-- Comments -->
            <?php $_smarty_tpl->_subTemplateRender("file:tpl/single_article/comments.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

          
        </div> <!-- end col -->
          <!--右边的导航-->
            <?php $_smarty_tpl->_subTemplateRender("file:tpl/single_article/right_sidebar.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

       
      </div> <!-- end content -->
    </div> <!-- end main container -->

    <!-- Footer -->
    
  <?php $_smarty_tpl->_subTemplateRender("file:tpl/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


  </main> <!-- end main-wrapper -->

  
  <!-- jQuery Scripts -->
  <?php $_smarty_tpl->_subTemplateRender("file:tpl/js_srcs.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

 

</body>
</html>
<?php }
}
