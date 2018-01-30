<?php
/* Smarty version 3.1.30, created on 2018-01-30 12:30:21
  from "E:\IT_study\zhiku-v2.0\tpl\admin\login.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a70574dc7dd82_89118075',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0357d6e711ccd7b04001f4d7033c4ba3dcc74dc1' => 
    array (
      0 => 'E:\\IT_study\\zhiku-v2.0\\tpl\\admin\\login.html',
      1 => 1517229831,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a70574dc7dd82_89118075 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html>
<head>
    <title>登录页面</title>
</head>
<body>



<form method="post" action="admin.php?controller=admin&method=login" id="login">
    <input type="text" name="username" id="username"><br>
    <input type="password" name="password" id="password"><br>
    <input type="submit" value="提交登录" id="submit">
</form>


<style type="text/css">
    #login{
        margin: 100px auto;
        width: 300px;
        border: 1px solid #ddd;
        border-radius: 20px;
        padding: 6px 8px;
        overflow: hidden;
    }
    input{
        display: block;
        width: 250px;
        margin: 0 auto;
        height: 25px;
        padding: 2px 3px 2px 3px;
    }
    #submit{
        width: 100px;
        height: 25px;
        padding: 0;
    }
</style>

</body>
</html><?php }
}
