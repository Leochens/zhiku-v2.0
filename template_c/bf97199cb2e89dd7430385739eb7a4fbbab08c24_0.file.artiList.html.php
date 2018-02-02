<?php
/* Smarty version 3.1.30, created on 2018-02-02 17:35:20
  from "E:\IT_study\zhiku-v2.0\tpl\admin\artiList.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a7430d88e3727_46633250',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bf97199cb2e89dd7430385739eb7a4fbbab08c24' => 
    array (
      0 => 'E:\\IT_study\\zhiku-v2.0\\tpl\\admin\\artiList.html',
      1 => 1517564118,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a7430d88e3727_46633250 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_modifier_truncate')) require_once 'E:\\IT_study\\zhiku-v2.0\\libs\\View\\smarty_libs\\plugins\\modifier.truncate.php';
?>
<!DOCTYPE html>
<html>
<head>
    <title>新闻列表</title>
</head>
<body>
<a href="<?php echo $_smarty_tpl->tpl_vars['router_admin_index']->value;?>
">返回管理首页</a>
<a href="<?php echo $_smarty_tpl->tpl_vars['router_index']->value;?>
">返回网站首页</a>
<a href="<?php echo $_smarty_tpl->tpl_vars['router_article_articleInsertUpdate']->value;?>
">添加文章</a>

<!--<ul>

    <li>
        <h1><?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
</h1>
        <a href="<?php echo $_smarty_tpl->tpl_vars['router_article_articleDelete']->value;
echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
">删除</a>
        <a href="<?php echo $_smarty_tpl->tpl_vars['router_article_articleInsertUpdate']->value;
echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
">编辑</a><br><br>
        <b>作者 </b><span ><?php echo $_smarty_tpl->tpl_vars['item']->value['author'];?>
</span >
        <b>标签 </b><span ><?php echo $_smarty_tpl->tpl_vars['item']->value['tags'];?>
</span >
        <b>时间 </b><span ><?php echo date('Y-m-d H-i-s',$_smarty_tpl->tpl_vars['item']->value['dateline']);?>
</span >
        <b>编号 </b><span ><?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
</span ><br>
        <b>优先级 </b><span ><?php echo $_smarty_tpl->tpl_vars['item']->value['flag'];?>
</span ><br>
        <b>图片 </b><span ><?php echo $_smarty_tpl->tpl_vars['item']->value['pic_path'];?>
</span ><br><br>
    
        <div><?php echo $_smarty_tpl->tpl_vars['item']->value['content'];?>
</div>
    </li>

<h3>暂无文章</h3>0

</ul>-->
<br><br><br>
<div class="list_main container cols-md-12">
    <ul class="list-group">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['artiList']->value, 'item');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
?>
        <li class="par ">
            <a href="<?php echo $_smarty_tpl->tpl_vars['router_article_articleDetail']->value;
echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
" class="list-group-item inactive">
                <h4 class="list-group-item-heading"><?php echo (($tmp = @$_smarty_tpl->tpl_vars['item']->value['title'])===null||$tmp==='' ? "无内容" : $tmp);?>
</h4>
                <p class="list-group-item-text" style="line-height: 2"><?php echo smarty_modifier_truncate(preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['item']->value['content']),200,"...");?>

                    <span class="item_control"><i class="glyphicon glyphicon-user"></i> <?php echo $_smarty_tpl->tpl_vars['item']->value['author'];?>
</span>
                    <span class="item_control"><i class="glyphicon glyphicon-time"></i> <?php echo date('Y-m-d H-i-s',$_smarty_tpl->tpl_vars['item']->value['dateline']);?>
</span>
                    <span class="item_control"><i class="glyphicon glyphicon-tag"></i> <?php echo $_smarty_tpl->tpl_vars['item']->value['tags'];?>
</span>
                </p>

            </a>
            <div class="list-group-item inactive" href="">
                <a href="<?php echo $_smarty_tpl->tpl_vars['router_article_articleInsertUpdate']->value;
echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
" class="it"><i class="glyphicon glyphicon-edit"></i> 编辑</a>
                <a href="<?php echo $_smarty_tpl->tpl_vars['router_article_articleDelete']->value;
echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
" class="it"><i class="glyphicon glyphicon-remove-sign"></i> 删除</a>
            </div>

        </li>
        <?php
}
} else {
?>

        <h3>暂无文章</h3>0
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

    </ul>
   
</div>


<style type="text/css">
    ul,li{
        list-style: none;
    }
    .par{
        margin: 5px;
    }
    .item_control{
        margin:0 10px ;
        color: #8B0000;
    }
   .it{
       cursor: pointer;
        margin:0 10px ;
   }
</style>
</body>
</html><?php }
}
