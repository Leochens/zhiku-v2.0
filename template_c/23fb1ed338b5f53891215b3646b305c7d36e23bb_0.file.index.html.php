<?php
/* Smarty version 3.1.30, created on 2018-01-31 11:38:12
  from "E:\IT_study\zhiku-v2.0\tpl\index.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a719c94a52408_82304801',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '23fb1ed338b5f53891215b3646b305c7d36e23bb' => 
    array (
      0 => 'E:\\IT_study\\zhiku-v2.0\\tpl\\index.html',
      1 => 1517394959,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:tpl/head_srcs.html' => 1,
    'file:tpl/preloader.html' => 1,
    'file:tpl/header.html' => 1,
    'file:tpl/index_component/trending.html' => 1,
    'file:tpl/index_component/featured.html' => 1,
    'file:tpl/index_component/content.html' => 1,
    'file:footer.html' => 1,
    'file:tpl/js_srcs.html' => 1,
  ),
),false)) {
function content_5a719c94a52408_82304801 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="zh">
<head>
  <title>河大智库</title>
  <!--加载必要的文件 如css文件-->
 <?php $_smarty_tpl->_subTemplateRender("file:tpl/head_srcs.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


</head>

<body class="bg-light">

    <main class="main oh" id="main">
    <!--页面预加载-->
    <?php $_smarty_tpl->_subTemplateRender("file:tpl/preloader.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
  
    <!--页头-->
    <?php $_smarty_tpl->_subTemplateRender("file:tpl/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
     
    <!-- Trending Now --><!--滚动条-->
    <?php $_smarty_tpl->_subTemplateRender("file:tpl/index_component/trending.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
   
    <!--特色图-->
    <?php $_smarty_tpl->_subTemplateRender("file:tpl/index_component/featured.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
  
    <!--中部内容-->
    <?php $_smarty_tpl->_subTemplateRender("file:tpl/index_component/content.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <!--页脚文件-->
    <?php $_smarty_tpl->_subTemplateRender("file:footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


    <div id="back-to-top">
      <a href="#top" aria-label="Go to top"><i class="ui-arrow-up"></i></a>
    </div>
  </main> <!-- end main-wrapper -->

  
  <!-- jQuery Scripts  包含必要js文件-->
<?php $_smarty_tpl->_subTemplateRender("file:tpl/js_srcs.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

</body>
</html>
<?php }
}
