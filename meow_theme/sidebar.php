<div class="other-frame col-md-2 hidden-sm hidden-xs clearfix" id="box-fix" style="margin-left:15px">
    <div class="search-box">
        <form action="<?php bloginfo('url'); ?>" method="" target="_blank">
            <input type="text" name="s" maxlength="30" value="<?php the_search_query(); ?>" placeholder="输入关键字搜索"
                   class="col-md-10 col-md-offset-1">
        </form>
    </div>
    <div class="news-art">
        <?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('Second_sidebar')) : ?>
            <div class="bg-rectangle">
                <p class="text-center">文章分类</p>
            </div>
            <ul class="list-unstyled">
                <?php wp_list_categories('depth=1&title_li=&orderby=id&show_count=0&hide_empty=1&child_of=0'); ?>
            </ul>
        <?php endif; ?>
    </div>
    <div class="news-art">
        <?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('Third_sidebar')) : ?>
            <div class="bg-rectangle">
                <p class="text-center">最新文章</p>
            </div>
            <ul class="list-unstyled">
                <?php
                $posts = get_posts('numberposts=6&orderby=post_date');
                foreach ($posts as $post) {
                    setup_postdata($post);
                    echo '<li><a href="' . get_permalink() . '">' . get_the_title() . '</a></li>';
                }
                ?>
            </ul>
        <?php endif; ?>
    </div>
    <div class="news-art">
        <?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('Fourth_sidebar')) : ?>
            <div class="bg-rectangle">
                <p class="text-center">文章存档</p>
            </div>
            <ul class="list-unstyled">
                <?php wp_get_archives('limit=10'); ?>
            </ul>
        <?php endif; ?>
    </div>
    <div class="news-art">
        <div class="bg-rectangle">
            <p class="text-center">用户</p>
        </div>
        <ul class="list-unstyled">
            <?php
            if (is_user_logged_in()) {
                global $current_user, $display_name, $user_email;
                get_currentuserinfo();
                //全局变量$current_user
                echo '<li><a href="' . get_option('siteurl') . '/wp-admin">' . $current_user->user_login . "</a></li>";
                echo wp_loginout();
            } else {
                echo '<li><a href="' . get_option('siteurl') . '/wp-admin">登录/注册</a></li>';
            }
            ?>
        </ul>
    </div>
</div>
<!--right end-->