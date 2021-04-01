<?php get_header(); ?>
	<div class="main-frame">
		<div class="content-frame continer  col-xs-12">
			<div class="col-md-8" id="content-frame">
                <div class="col-md-8 col-md-offset-4">
                <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                    <?php if( the_post() != null) : ?>
                    <div class="col-xs-12 content-border-frame">
                        <div class="content-header clearfix col-xs-12">
                            <div class="pull-left head-img hidden-xs">
                                <?php echo get_avatar( get_the_author_email(), 51 ); ?>
                            </div>
                            <div class="pull-left">
					            <p class="content-title">
                                        <a href="<?php the_permalink(); ?>" rel="bookmark"><?php ODD_title(); ?></a>
                                    </p>
                                <p class="content-other-info">
                                    <?php the_author_posts_link(); ?> /<?php the_category(', ') ?>/

                                    <?php the_time('Y年n月j日'); ?>
                                </p>
                            </div>
                        </div>
                        <div class="col-xs-12">
                            <img src="<?php echo post_thumbnail_src(); ?>" alt="<?php the_title(); ?>" class="img-responsive"/>
                        </div>
                        <div class="content-text-sim col-xs-12">
                            <?php echo $description = mb_strimwidth(strip_tags(apply_filters('the_content',$post->post_content)),0,200); ?>...
                        </div>
                        <div class="other-v-l-readall pull-left col-xs-12">
                            <div class="view-info pull-left">
                                <div class="view pull-left"></div>
                                <div class="pull-left view-cout">
                                    <p>阅读量:<span><?php post_views(' ',' '); ?></span></p>
                                </div>
                            </div>
                            <div class="like-info pull-left">
                                <div class="like pull-left"></div>
                                <div class="pull-left like-cout">
                                    <p>评论:<span><?php echo $post->comment_count; ?></span></p>
                                </div>
                            </div>
                            <div class="readall-frame pull-left">
                                <div class="readall-img pull-left"></div>
                                <p class="readall pull-left"><a href="<?php the_permalink(); ?>">全文阅读</a></p>
                            </div>
                        </div>
                    </div>
                    <?php endif; ?>
                <?php endwhile; ?>
                <?php endif; ?>
                </div>
                <div class="col-md-7 col-md-offset-5 navigation" id="pagination">
                    <?php next_posts_link(__('LOAD MORE')); ?>
                </div>
            </div>
			<!--main left end-->
			<?php get_sidebar(); ?>
		</div>	
	</div>
    <script>
        var ias = $.ias({

            container: "#content-frame", //包含所有文章的元素

            item: ".content-border-frame", //文章元素

            pagination: ".navigation", //分页元素

            next: ".navigation a", //下一页元素

        });



        ias.extension(new IASTriggerExtension({

            text: '下一页', //此选项为需要点击时的文字

            offset: 2, //设置此项后，到 offset+1 页之后需要手动点击才能加载，取消此项则一直为无限加载

        }));



        ias.extension(new IASSpinnerExtension());



        ias.extension(new IASNoneLeftExtension({

            text: '没有数据咯', // 加载完成时的提示

        }));

    </script>
<?php get_footer(); ?>