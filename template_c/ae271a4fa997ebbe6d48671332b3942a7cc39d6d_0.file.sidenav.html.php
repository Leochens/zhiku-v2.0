<?php
/* Smarty version 3.1.30, created on 2018-01-31 04:12:38
  from "E:\IT_study\zhiku-v2.0\tpl\sidenav.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a7134263ab977_64111339',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ae271a4fa997ebbe6d48671332b3942a7cc39d6d' => 
    array (
      0 => 'E:\\IT_study\\zhiku-v2.0\\tpl\\sidenav.html',
      1 => 1517367733,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a7134263ab977_64111339 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!-- Sidenav -->    
  <header class="sidenav" id="sidenav">

    <!-- close -->
    <div class="sidenav__close">
      <button class="sidenav__close-button" id="sidenav__close-button" aria-label="close sidenav">
        <i class="ui-close sidenav__close-icon"></i>
      </button>
    </div>


    
    <nav class="sidenav__menu-container">
      <ul class="sidenav__menu" role="menubar">
        <!-- Categories -->
        <li>
          <a href="#" class="sidenav__menu-link sidenav__menu-link-category sidenav__menu-link--orange">World</a>
        </li>
        <li>
          <a href="#" class="sidenav__menu-link sidenav__menu-link-category sidenav__menu-link--blue">Business</a>
        </li>
        <li>
          <a href="#" class="sidenav__menu-link sidenav__menu-link-category sidenav__menu-link--red">Politics</a>
        </li>
        <li>
          <a href="#" class="sidenav__menu-link sidenav__menu-link-category sidenav__menu-link--salad">Lifestyle</a>
        </li>
        <li>
          <a href="#" class="sidenav__menu-link sidenav__menu-link-category sidenav__menu-link--purple">Tech</a>
        </li>
        <li>
          <a href="#" class="sidenav__menu-link sidenav__menu-link-category sidenav__menu-link--yellow">Fashion</a>
        </li>
        <li>
          <a href="#" class="sidenav__menu-link sidenav__menu-link-category sidenav__menu-link--light-blue">Sport</a>
        </li>
        <li>
          <a href="#" class="sidenav__menu-link sidenav__menu-link-category sidenav__menu-link--violet">Science</a>
        </li>

        <li>
          <a href="#" class="sidenav__menu-link">Posts</a>
          <button class="sidenav__menu-toggle" aria-haspopup="true" aria-label="Open dropdown"><i class="ui-arrow-down"></i></button>
          <ul class="sidenav__menu-dropdown">
            <li><a href="#" class="sidenav__menu-link">Gallery Post</a></li>
            <li><a href="#" class="sidenav__menu-link">Video Post</a></li>
            <li><a href="#" class="sidenav__menu-link">Audio Post</a></li>
            <li><a href="#" class="sidenav__menu-link">Quote Post</a></li>
          </ul>
        </li>

        <li>
          <a href="#" class="sidenav__menu-link">Pages</a>
          <button class="sidenav__menu-toggle" aria-haspopup="true" aria-label="Open dropdown"><i class="ui-arrow-down"></i></button>
          <ul class="sidenav__menu-dropdown">
            <li><a href="#" class="sidenav__menu-link">about</a></li>
            <li><a href="#" class="sidenav__menu-link">Contact</a></li>
            <li><a href="#" class="sidenav__menu-link">Search Results</a></li>
            <li><a href="#" class="sidenav__menu-link">Categories</a></li>
            <li><a href="#" class="sidenav__menu-link">Shortcodes</a></li>
            <li><a href="#" class="sidenav__menu-link">Lazyload</a></li>
            <li><a href="#" class="sidenav__menu-link">404</a></li>
          </ul>
        </li>

        <li>
          <a href="#" class="sidenav__menu-link">About</a>
        </li>

        <li>
          <a href="#" class="sidenav__menu-link">Contact</a>
        </li>

        <li>
          <a href="#" class="sidenav__menu-link">Advertise</a>
        </li>
      </ul>
    </nav>

    <div class="socials sidenav__socials"> 
      <a class="social social-facebook" href="#" target="_blank" aria-label="facebook">
        <i class="ui-facebook"></i>
      </a>
      <a class="social social-twitter" href="#" target="_blank" aria-label="twitter">
        <i class="ui-twitter"></i>
      </a>
      <a class="social social-google-plus" href="#" target="_blank" aria-label="google">
        <i class="ui-google"></i>
      </a>
      <a class="social social-youtube" href="#" target="_blank" aria-label="youtube">
        <i class="ui-youtube"></i>
      </a>
      <a class="social social-instagram" href="#" target="_blank" aria-label="instagram">
        <i class="ui-instagram"></i>
      </a>
    </div>
  </header> <!-- end sidenav -->
<?php }
}
