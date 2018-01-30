<?php
/* Smarty version 3.1.30, created on 2018-01-30 11:27:10
  from "E:\IT_study\zhiku-v2.0\tpl\header.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a70487edba936_46257461',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1569b2119ccea9fe8ea6e7919a490c34562af7d3' => 
    array (
      0 => 'E:\\IT_study\\zhiku-v2.0\\tpl\\header.html',
      1 => 1517308020,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:tpl/sidenav.html' => 1,
  ),
),false)) {
function content_5a70487edba936_46257461 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!-- Nav -->

<!-- Bg Overlay -->
  <div class="content-overlay"></div>

  <?php $_smarty_tpl->_subTemplateRender("file:tpl/sidenav.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>




    <!-- Navigation -->
    
   <header class="nav">

      <div class="nav__holder nav--sticky">
        <div class="container relative">
          <div class="flex-parent">

            <!-- Side Menu Button -->
            <button class="nav-icon-toggle" id="nav-icon-toggle" aria-label="Open side menu">
              <span class="nav-icon-toggle__box">
                <span class="nav-icon-toggle__inner"></span>
              </span>
            </button> <!-- end Side menu button -->

            <!-- Mobile logo -->
            <a href="index.html" class="logo logo--mobile d-lg-none">
              <img class="logo__img" src="img/logo_mobile.png" srcset="img/logo_mobile.png 1x, img/logo_mobile@2x.png 2x" alt="logo">
            </a>

            <!-- Nav-wrap -->
            <nav class="flex-child nav__wrap d-none d-lg-block">              
              <ul class="nav__menu">

                <li class="active">
                  <a href="index.html">智库首页</a>
                </li>

                <li class="nav__dropdown">
                  <a href="#">研究团队</a>
                  <ul class="nav__dropdown-menu">
                    <li><a href="#">Gallery Post</a></li>
                    <li><a href="tpl/single-post.html">V0ideo Post</a></li>
                    <li><a href="tpl/single-post.html">Audio Post</a></li>
                    <li><a href="#">Quote Post</a></li>
                  </ul>
                </li>

                <li class="nav__dropdown">
                  <a href="#">研究成果</a>
                  <ul class="nav__dropdown-menu">
                    <li><a href="#">About</a></li>
                    <li><a href="#">Contact</a></li>
                    <li><a href="#">Search Results</a></li>
                    <li><a href="#">Categories</a></li>
                    <li><a href="#">404</a></li>
                  </ul>
                </li>

                <li class="nav__dropdown">
                  <a href="#">关于我们</a>
                  <ul class="nav__dropdown-menu">
                    <li><a href="#">Lazy Load</a></li>
                    <li><a href="#">Shortcodes</a></li>
                  </ul>
                </li>

                <li>
                  <a href="#">中外智库</a>
                </li>


              </ul> <!-- end menu -->
            </nav> <!-- end nav-wrap -->

            <!-- Nav Right -->
            <div class="nav__right nav--align-right d-lg-flex">

              <!-- Socials -->
              <div class="nav__right-item socials nav__socials d-none d-lg-flex"> 
                <a class="social social-facebook social--nobase" href="#" target="_blank" aria-label="facebook">
                  <i class="ui-facebook"></i>
                </a>
                <a class="social social-twitter social--nobase" href="#" target="_blank" aria-label="twitter">
                  <i class="ui-twitter"></i>
                </a>
                <a class="social social-google social--nobase" href="#" target="_blank" aria-label="google">
                  <i class="ui-google"></i>
                </a>
                <a class="social social-youtube social--nobase" href="#" target="_blank" aria-label="youtube">
                  <i class="ui-youtube"></i>
                </a>
                <a class="social social-instagram social--nobase" href="#" target="_blank" aria-label="instagram">
                  <i class="ui-instagram"></i>
                </a>
              </div>

              <!-- Search -->
              <div class="nav__right-item nav__search">
                <a href="#" class="nav__search-trigger" id="nav__search-trigger">
                  <i class="ui-search nav__search-trigger-icon"></i>
                </a>
                <div class="nav__search-box" id="nav__search-box">
                  <form class="nav__search-form">
                    <input type="text" placeholder="Search an article" class="nav__search-input">
                    <button type="submit" class="search-button btn btn-lg btn-color btn-button">
                      <i class="ui-search nav__search-icon"></i>
                    </button>
                  </form>
                </div>
                
              </div>

            </div> <!-- end nav right -->  
        
          </div> <!-- end flex-parent -->
        </div> <!-- end container -->

      </div>
    </header> <!-- end navigation -->
  
<!-- Header -->
    <div class="header">
      <div class="container">
        <div class="flex-parent align-items-center">
          
          <!-- Logo -->
          <a href="index.html" class="logo d-none d-lg-block">
            <img class="logo__img" src="img/logo.png" srcset="img/logo.png 1x, img/logo@2x.png 2x" alt="logo">
          </a>

          <!-- Ad Banner 728 -->
         <div class="text-center">
            <a href="#">
              <!--<img src="img/blog/placeholder_leaderboard.jpg" alt="">--> 
            </a>
          </div>

        </div>
      </div>
    </div> <!-- end header -->

<?php }
}
