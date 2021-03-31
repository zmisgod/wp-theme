<!DOCTYPE html>
<html lang="en">
<head>
	<title><?php if ( is_home() ) {
        bloginfo('name'); echo " - "; bloginfo('description');
    } elseif ( is_category() ) {
        single_cat_title(); echo " - "; bloginfo('name');
    } elseif (is_single() || is_page() ) {
        single_post_title();
    } elseif (is_search() ) {
        echo "搜索结果"; echo " - "; bloginfo('name');
    } elseif (is_404() ) {
        echo '页面未找到!';
    } else {
        wp_title('',true);
    } ?></title>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

    <link rel="shortcut icon" href="<?php bloginfo('template_url'); ?>/img/favicon.ico?v1.1.1" />

    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/bootstrap.css">

    <link rel="stylesheet/less" type="text/css" href="<?php bloginfo('template_url'); ?>/css/index.less?v=2016-1-24-23-47">

    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/animate.min.css">

    <script src="<?php bloginfo('template_url'); ?>/js/less.min.js"></script>

    <script src="<?php bloginfo('template_url'); ?>/js/jquery-2.1.4.min.js"></script>

    <script src="<?php bloginfo('template_url'); ?>/js/jquery-ias.min.js"></script>

    <script src="<?php bloginfo('template_url'); ?>/js/bootstrap.min.js"></script>

    <link rel="alternate" type="application/rss+xml" title="RSS 2.0 - 所有文章" href="<?php echo get_bloginfo('rss2_url'); ?>" /><!--订阅feed链接-->

    <link rel="alternate" type="application/rss+xml" title="RSS 2.0 - 所有评论" href="<?php bloginfo('comments_rss2_url'); ?>" /><!--订阅feed链接-->

    <?php wp_head(); ?>
    <script src="/static/react.js"></script>
    <script src="/static/react-dom.js"></script>
    <script src="/static/browser.min.js"></script>
    
    <script type="text/babel" src="/react/happybirthday/main.js"></script>
    <meta property="qc:admins" content="074026135137746375" />
    <script type="text/javascript">
        var BIRTHDAYLEFT = <?php $myBirthday = '2016-8-21 00:00:00'; echo ceil((strtotime($myBirthday)-time())/60/60/30); ?>;
        var THISCLIENTHEIGHT = $(window).height();
        var THISCLIENTWIDTH = $(window).width();
        var RANDONE = <?php echo rand(0, 255);?>;
        var RANDTWO = <?php echo rand(0, 255);?>;
        var RANDTHREE= <?php echo rand(0, 255);?>;
        $(window).resize(function() {
            THISCLIENTHEIGHT = $(window).height();
            THISCLIENTWIDTH = $(window).width();
        });
    </script>
    <style type="text/css">
      .surprise{
        position: fixed;top: 0;left:0;z-index: 1000
      }
      .happy{
        padding-top: 200px;
      }
      .happy p{
        font-size: 30px;color:#fff;
      }
    </style>
</head>
<?php flush(); ?>
<body>
<div id="zmisgod"></div>
<header>
    <nav class="navbar navbar-default visible-xs" role="navigation">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#example-navbar-collapse">
                <span class="sr-only">切换导航</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="/"><img src="<?php bloginfo('template_url'); ?>/img/logo.png" width="42" height="42"></a>
        </div>
        <div class="collapse navbar-collapse" id="example-navbar-collapse">
            <ul class="nav navbar-nav">
                <?php
                $menuParameters = array(
                    'container' => false,
                    'echo'  => false,
                    'items_wrap' => '%3$s',
                    'depth' => 0,
                    'menu' => 'mymenu',
                );
                echo strip_tags(wp_nav_menu( $menuParameters ), '<li><a>' );
                ?>
                <li>
                    <form action="<?php bloginfo('url'); ?>" method="" target="_blank">
                        <div class="form-group">
                            <input type="text" name="s" maxlength="30"  value="<?php the_search_query(); ?>" placeholder="输入关键字搜索" class="form-control" >
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-default">搜索</button>
                        </div>
                    </form>
                </li>
            </ul>
        </div>
    </nav>
	<div class="header-frame hidden-xs">
		<div class="continer">
			<div class="col-sm-12 text-center">
				<div class="pull-left col-sm-2 col-md-offset-2">
					<img src="<?php bloginfo('template_url'); ?>/img/logo.png" width="42" height="42">
				</div>	
				<ul class="col-sm-8 pull-right">
					<?php 
                        $menuParameters = array(
                            'container' => false,
                            'echo'  => false,
                            'items_wrap' => '%3$s',
                            'depth' => 0,
                            'menu' => 'mymenu',
                        );
                        echo strip_tags(wp_nav_menu( $menuParameters ), '<li><a>' );
                    ?>
				</ul>
			</div>
		</div>
	</div>
</header>
<script>
    $(document).ready(function () {
       $("a").css(
           "transition","all .3s linear"
       );
    });
</script>
<!--header end-->
<div class="banner col-xs-12">
    <p class="text-center banner-text">山高水长，别来无恙</p>
    <p class="text-center banner-text-sq"></p>
</div>
<!--banner end-->