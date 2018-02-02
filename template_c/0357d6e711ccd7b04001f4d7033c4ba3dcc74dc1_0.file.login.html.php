<?php
/* Smarty version 3.1.30, created on 2018-02-02 16:35:50
  from "E:\IT_study\zhiku-v2.0\tpl\admin\login.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a7422e6cf7259_28332003',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0357d6e711ccd7b04001f4d7033c4ba3dcc74dc1' => 
    array (
      0 => 'E:\\IT_study\\zhiku-v2.0\\tpl\\admin\\login.html',
      1 => 1517560549,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a7422e6cf7259_28332003 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!doctype html>
<html class="no-js">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="description" content="">
  <meta name="keywords" content="">
  <meta name="viewport"
        content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
  <title>Amaze UI Examples</title>
  <meta name="renderer" content="webkit">
  <meta http-equiv="Cache-Control" content="no-siteapp"/>
  <link rel="stylesheet" href="tpl/admin/css/amazeui.min.css">
  <link rel="stylesheet" href="tpl/admin/css/bootstrap.min.css">
  <link rel="stylesheet" href="tpl/admin/css/app.css">
</head>
<body>
<div class="am-g myapp-login">
    <div class="myapp-login-logo-block">
        <div class="myapp-login-logo">
            <i class="glyphicon glyphicon-tower sm"></i>
        </div>
        <div class="myapp-login-logo-text">
            <div class="myapp-login-logo-text">
                Think<span>Tank</span>
                <div class="info">智库，智慧的仓库。</div>
            </div>
        </div>

        <div class="login-font">
            <i>登录</i> or <span> 注册</span>
        </div>
        <div class="am-u-sm-4 login-am-center">
            <form class="am-form" method="post" action="<?php echo $_smarty_tpl->tpl_vars['router_admin_login']->value;?>
">
                <fieldset>
                    <div class="am-form-group">
                        <input name="username" type="text" class="" id="doc-ipt-email-1" placeholder="用户名">
                    </div>
                    <div class="am-form-group">
                        <input name="password" type="password" class="" id="doc-ipt-pwd-1" placeholder="密码">
                    </div>
                    <p><input type="submit" class="am-btn am-btn-default"></input></p>
                </fieldset>
            </form>
        </div>
      
    </div>

</div>
<div class="copyright" align="center">
    <?php echo $_smarty_tpl->tpl_vars['copyright']->value;?>

</div>  
<!--[if (gte IE 9)|!(IE)]><!-->
<?php echo '<script'; ?>
 src="tpl/admin/js/jquery.min.js"><?php echo '</script'; ?>
>
<!--<![endif]-->
<!--[if lte IE 8 ]>
<?php echo '<script'; ?>
 src="http://libs.baidu.com/jquery/1.11.3/jquery.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="http://cdn.staticfile.org/modernizr/2.8.3/modernizr.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="assets/js/amazeui.ie8polyfill.min.js"><?php echo '</script'; ?>
>
<![endif]-->

</body>
</html><?php }
}
