<?php
/* Smarty version 3.1.30, created on 2018-01-31 14:15:56
  from "E:\IT_study\zhiku-v2.0\tpl\footer.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a71c18c8d9aa1_63722281',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0134854ceed262bec0b0895750f5d341e900671b' => 
    array (
      0 => 'E:\\IT_study\\zhiku-v2.0\\tpl\\footer.html',
      1 => 1517404320,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a71c18c8d9aa1_63722281 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!-- Footer -->
    <footer class="footer footer--dark">
      <div class="container">
        <div class="footer__widgets">
          <div class="row">

            <div class="col-lg-3 col-md-6">
              <div class="widget">
                <a href="index.html">
                  <img src="img/logo_mobile.png" srcset="img/logo_mobile.png 1x, img/logo_mobile@2x.png 2x" class="logo__img" alt="">
                </a>
                <p class="mt-20">获得时间的青睐，智库为您呈现您的需求啦啦啦啦。获得时间的青睐，智库为您呈现您的需求啦啦啦啦。获得时间的青睐，智库为您呈现您的需求啦啦啦啦。获得时间的青睐，智库为您呈现您的需求啦啦啦啦。</p>
              </div>
            </div>

            <div class="col-lg-3 col-md-6">
              <h4 class="widget-title">最新</h4>
              <ul class="post-list-small">
               <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['arti_data']->value, 'item', false, NULL, 'foo', array (
  'iteration' => true,
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['__smarty_foreach_foo']->value['iteration']++;
?>
              
                <li class="post-list-small__item">
                  <article class="post-list-small__entry clearfix">
                    <div class="post-list-small__img-holder">
                      <div class="thumb-container thumb-75">
                        <a href="<?php echo $_smarty_tpl->tpl_vars['router']->value['single'];
echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
">
                          <img data-src="<?php echo $_smarty_tpl->tpl_vars['item']->value['pic_path'];?>
" src="<?php echo $_smarty_tpl->tpl_vars['item']->value['pic_path'];?>
" alt="" class="lazyload">
                        </a>
                      </div>
                    </div>
                    <div class="post-list-small__body">
                      <h3 class="post-list-small__entry-title">
                        <a href="<?php echo $_smarty_tpl->tpl_vars['router']->value['single'];
echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
</a>
                      </h3>
                      <ul class="entry__meta">
                        <li class="entry__meta-date">
                          <i class="ui-date"></i>
                          <?php echo date('Y-m-d',$_smarty_tpl->tpl_vars['item']->value['dateline']);?>

                        </li>
                      </ul>
                    </div>                  
                  </article>
                </li>
                <?php if ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_foo']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_foo']->value['iteration'] : null) == 2) {?>
                    <?php break 1;?>
                    <?php }?> 

                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

              </ul>
            </div>

            <div class="col-lg-3 col-md-6">
              <div class="widget widget__newsletter">
                <h4 class="widget-title">Follow us</h4>

                <div class="socials mb-20">
                  <a href="#" class="social social-facebook" aria-label="facebook"><i class="ui-facebook"></i></a>
                  <a href="#" class="social social-twitter" aria-label="twitter"><i class="ui-twitter"></i></a>
                  <a href="#" class="social social-google-plus" aria-label="google+"><i class="ui-google"></i></a>
                  <a href="#" class="social social-youtube" aria-label="youtube"><i class="ui-youtube"></i></a>
                  <a href="#" class="social social-instagram" aria-label="instagram"><i class="ui-instagram"></i></a>
                </div>

                <form class="mc4wp-form" method="post">
                  <div class="mc4wp-form-fields">
                    <p>
                      <input type="email" name="EMAIL" placeholder="您的邮件地址。" required="">
                    </p>
                    <p>
                      <input type="submit" class="btn btn-lg btn-color" value="提交">
                    </p>
                  </div>
                </form>
                
              </div>
            </div>            

            <div class="col-lg-3 col-md-6">
              <div class="widget widget_nav_menu">
                <h4 class="widget-title">关于</h4>
                <ul>
                  <li><a href="#">关于智库</a></li>
                  <li><a href="#">联系我们</a></li>
                  <li><a href="#">分类查询</a></li>
                  <li><a href="#">其他智库</a></li>
                </ul>
              </div>
            </div>            

          </div>
        </div>    
      </div> <!-- end container -->

      <div class="footer__bottom">
        <div class="container">
          <div class="row">
            <div class="col-lg-7 order-lg-2 text-right text-md-center">
              <div class="widget widget_nav_menu">
                <ul>
                  <li><a href="#">Terms</a></li>
                  <li><a href="#">Privacy</a></li>
                  <li><a href="#">Advertise</a></li>
                  <li><a href="#">Affiliates</a></li>
                  <li><a href="#">Newsletter</a></li>
                </ul>
              </div>              
            </div>
            <div class="col-lg-5 order-lg-1 text-md-center">
              <span class="copyright">
                Copyright &copy; 2018.张鹤麟 <a href="index.php?controller=admin&methed=login">@</a> mokis.top All rights reserved.
              </span>
            </div>            
          </div>
          
        </div>
      </div> <!-- end bottom footer -->
    </footer> <!-- end footer -->
<?php }
}
