<?php
/* Smarty version 3.1.30, created on 2018-02-02 15:35:58
  from "E:\IT_study\zhiku-v2.0\tpl\admin\index.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a7414deb0c509_26066928',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '19c781328ee225f84823ad23fc65d7f7dcdd1d1e' => 
    array (
      0 => 'E:\\IT_study\\zhiku-v2.0\\tpl\\admin\\index.html',
      1 => 1517556945,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a7414deb0c509_26066928 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="content-type" content="text/html; charset=UTF-8">
		<meta charset="utf-8">
		<title><?php echo $_smarty_tpl->tpl_vars['TITLE']->value;?>
</title>
		<meta name="generator" content="Bootply" />
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link href="tpl/admin/css/bootstrap.min.css" rel="stylesheet">
    <?php echo '<script'; ?>
 src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.js"><?php echo '</script'; ?>
> 
    <?php echo '<script'; ?>
 src="http://netdna.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.js"><?php echo '</script'; ?>
> 
    <!-- include summernote css/js-->
    <link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.2/summernote.css" rel="stylesheet">
    <?php echo '<script'; ?>
 src="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.2/summernote.js"><?php echo '</script'; ?>
>

		<!--[if lt IE 9]>
			<?php echo '<script'; ?>
 src="//html5shim.googlecode.com/svn/trunk/html5.js"><?php echo '</script'; ?>
>
		<![endif]-->
		<link href="tpl/admin/css/admin_styles.css" rel="stylesheet">
	</head>
	<body>

<div class="wrapper">
    <div class="box">
        <div class="row row-offcanvas row-offcanvas-left">
            <!-- sidebar -->
            <?php ob_start();
echo $_smarty_tpl->tpl_vars['adminTplPath']->value;
$_prefixVariable1=ob_get_clean();
ob_start();
echo ($_prefixVariable1).('sidebar.html');
$_prefixVariable2=ob_get_clean();
$_smarty_tpl->_subTemplateRender($_prefixVariable2, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>

            <!-- /sidebar -->
            <!-- main right col -->
            <div class="column col-sm-10 col-xs-11" id="main">
            <!-- top nav -->
            <?php ob_start();
echo $_smarty_tpl->tpl_vars['adminTplPath']->value;
$_prefixVariable3=ob_get_clean();
ob_start();
echo ($_prefixVariable3).('nav.html');
$_prefixVariable4=ob_get_clean();
$_smarty_tpl->_subTemplateRender($_prefixVariable4, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>

            <!-- /top nav -->
            
            
            <?php ob_start();
echo $_smarty_tpl->tpl_vars['adminTplPath']->value;
$_prefixVariable5=ob_get_clean();
$_smarty_tpl->_subTemplateRender(($_prefixVariable5).($_smarty_tpl->tpl_vars['what']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>

            
            </div>
            <!-- /main right col -->
            <!-- /main -->
        </div>
    </div>
</div>



	<!-- script references 
		<?php echo '<script'; ?>
 src="tpl/admin/js/bootstrap.min.js"><?php echo '</script'; ?>
>-->
		<?php echo '<script'; ?>
 src="tpl/admin/js/admin_scripts.js"><?php echo '</script'; ?>
>
	</body>
</html><?php }
}
