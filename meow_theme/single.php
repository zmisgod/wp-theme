<?php get_header(); ?>

<script type="text/babel" src="/react/comments/comments.js"></script>

<?php if (have_posts()) : the_post(); update_post_caches($posts); ?>



	<div class="main-frame">



		<div class="content-frame continer  col-xs-12">



			<div class="col-md-9">



			   <div class="col-md-9 col-md-offset-3 m-content-main clearfix">



			   		<div class="m-header-guide">



			   			<p><span><a href="<?php  $PHP_SELF=$_SERVER['PHP_SELF'];$url='http://'.$_SERVER['HTTP_HOST'].substr($PHP_SELF,0,strrpos($PHP_SELF,'/')+1);echo $url;  ?>">首页</a></span>  >  <span><?php the_category(', ') ?> > </span><span><?php the_title(); ?></span></p>



			   		</div>



			   		<div class="content-header">



						<div class="pull-left head-img">



							<?php echo get_avatar( get_the_author_email(), 51 ); ?>



						</div>



						<div class="pull-left">



							<p class="content-title green bold"><?php the_title(); ?></p>



							<p class="content-other-info"><span>by <?php the_author_posts_link(); ?></span>  / <span><?php the_time('Y年n月j日'); ?></span></p>



						</div>



					</div>



					<div class="m-content-text-area col-xs-12">		



						<?php the_content(); ?>



                    <div id="article-tag">

                        <?php

                            the_tags('<strong>标签：</strong> ', ' ', '')

                        ?>

                    </div>



                    <style>



                    #article-tag { clear: both; border: 1px dotted #ccc; padding: 10px; margin-bottom: 5px; font-size:14px; }



                    #article-tag a {



                        text-decoration: none;



                        color: #fff;



                        border: 1px solid #f5f5f5;



                        background-color: #00AEEF;



                        padding: 5px 10px;



                        border-radius: 4px;





                     }

                    #article-tag a:hover { text-decoration: none;background-color:#f5f5f5;color:#00AEEF; }

                    </style>

					</div>

					<?php else : ?>



					<div class="col-xs-12"><p>什么都没有啊！！！</p></div>



					<?php endif; ?>



			   </div>



                <div class="col-md-9 col-md-offset-3 m-content-main clearfix">

                    <?php



                    $page_id = 14; //page(页面)的id



                    $page_data = get_page( $page_id );



                    $title = '<b>'. $page_data->post_title .'</b>';// 标题</b>



                    $content =  apply_filters('the_content', $page_data->post_content);  //内容



                    if(!empty($content)) :

                        ?>

                        <div class="col-xs-12" id="ad-notice">



                            <div class="little-re-single text-center">



                                <?php echo $title; ?>



                            </div>



                            <?php echo $content; ?>



                        </div>

                    <?php endif; ?>

                </div>



			   <div class="col-md-9 col-md-offset-3 m-content-main clearfix">

					<?php comments_template(); ?>	

               </div>



			</div>



			<!--main left end-->



			<?php get_sidebar(); ?>



		</div>	



	</div>



<script>



$(document).ready(function(){



$("img").addClass("img-responsive");



});



</script>



<?php get_footer(); ?>