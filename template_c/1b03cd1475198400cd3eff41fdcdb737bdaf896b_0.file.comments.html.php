<?php
/* Smarty version 3.1.30, created on 2018-01-31 14:58:43
  from "E:\IT_study\zhiku-v2.0\tpl\single_article\comments.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a71cb93afc762_14162347',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1b03cd1475198400cd3eff41fdcdb737bdaf896b' => 
    array (
      0 => 'E:\\IT_study\\zhiku-v2.0\\tpl\\single_article\\comments.html',
      1 => 1517407119,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a71cb93afc762_14162347 (Smarty_Internal_Template $_smarty_tpl) {
?>
  <!-- Comments 评论-->
          <div class="entry-comments mt-30">
            <div class="title-wrap mt-40">
              <h5 class="uppercase">0 comments</h5>
            </div>
            <!--<ul class="comment-list">
              <li class="comment">  
                <div class="comment-body">
                  <div class="comment-avatar">
                    <img alt="" src="img/blog/comment_1.jpg">
                  </div>
                  <div class="comment-text">
                    <h6 class="comment-author">Joeby Ragpa</h6>
                    <div class="comment-metadata">
                      <a href="#" class="comment-date">July 17, 2017 at 12:48 pm</a>
                    </div>                      
                    <p>This template is so awesome. I didn’t expect so many features inside. E-commerce pages are very useful, you can launch your online store in few seconds. I will rate 5 stars.</p>
                    <a href="#" class="comment-reply">Reply</a>
                  </div>
                </div>

                <ul class="children">
                  <li class="comment">
                    <div class="comment-body">
                      <div class="comment-avatar">
                        <img alt="" src="img/blog/comment_2.jpg">
                      </div>
                      <div class="comment-text">
                        <h6 class="comment-author">Alexander Samokhin</h6>
                        <div class="comment-metadata">
                          <a href="#" class="comment-date">July 17, 2017 at 12:48 pm</a>  
                        </div>                      
                        <p>This template is so awesome. I didn’t expect so many features inside. E-commerce pages are very useful, you can launch your online store in few seconds. I will rate 5 stars.</p>
                        <a href="#" class="comment-reply">Reply</a>
                      </div>
                    </div>
                  </li> <!-- end reply comment -->
                <!--</ul>

              </li> <!-- end 1-2 comment -->

              <!--<li>
                <div class="comment-body">
                  <div class="comment-avatar">
                    <img alt="" src="img/blog/comment_3.jpg">
                  </div>
                  <div class="comment-text">
                    <h6 class="comment-author">Chris Root</h6>
                    <div class="comment-metadata">
                      <a href="#" class="comment-date">July 17, 2017 at 12:48 pm</a>  
                    </div>                      
                    <p>This template is so awesome. I didn’t expect so many features inside. E-commerce pages are very useful, you can launch your online store in few seconds. I will rate 5 stars.</p>
                    <a href="#" class="comment-reply">Reply</a>
                  </div>
                </div>
              </li> <!-- end 3 comment -->
      <!--</ul>   -->      
          </div> <!-- end comments -->


          <!-- Comment Form  发布评论-->
          <div id="respond" class="comment-respond">
            <div class="title-wrap">
              <h5 class="comment-respond__title uppercase">评论|留言</h5>
            </div>
            <form id="form" class="comment-form" method="post" action="#">
              <p class="comment-form-comment">
                <!-- <label for="comment">Comment</label> -->
                <textarea id="comment" name="comment" rows="5" required="required" placeholder="留下您的宝贵意见。"></textarea>
              </p>

              <div class="row row-20">
                <div class="col-lg-4">
                  <input name="name" id="name" type="text" placeholder="Name*">
                </div>
                <div class="col-lg-4">
                  <input name="email" id="email" type="email" placeholder="Email*">
                </div>
                <div class="col-lg-4">
                  <input name="website" id="website" type="text" placeholder="Website">
                </div>
              </div>

              <p class="comment-form-submit">
                <input type="submit" class="btn btn-lg btn-color btn-button" value="发表" id="submit-message">
              </p>
              
            </form>
          </div> <!-- end comment form -->
<?php }
}
