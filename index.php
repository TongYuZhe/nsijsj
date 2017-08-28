<?php require_once 'header.php' ?>
<div style="background:#f1f1f1;">
    <div class="bg">
        <div class="mass">
            <div class="banner-wrap">
                <div class="swiper-container">
                    <ul class="swiper-wrapper">
                    <?php 
						$getid = get_cat_ID('图片');
                        $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                        query_posts('&showposts=' .$limit = '8'. '&paged=' . $paged . '&cat='.$getid);
                        $wp_query->is_archive = true;
                        $wp_query->is_home = false;
                    ?>
                    
                    <?php while( have_posts() ) : the_post(); ?>
                        <li class="swiper-slide"><img src="<?php echo catch_that_image(); ?>"></li>
                    <?php endwhile; ?>
                    </ul>
                    <!-- Add Pagination -->
                    <div class="swiper-pagination"></div>
                    <!-- Add Navigation -->
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-button-next"></div>
                </div>
                <script type="text/javascript">
                    var swiper = new Swiper('.swiper-container', {
                        pagination: '.swiper-pagination',
                        nextButton: '.swiper-button-next',
                        prevButton: '.swiper-button-prev',
                        paginationClickable: true,
                      
                    });
                </script>
                <script type="text/javascript">
                    if($(document.body).width() > 700){
                        $(".swiper-container").css("cssText","width:1024px !important ; background:none ; z-index:0");
                        $(".swiper-wrapper > li > img").css("cssText","width:1024px");
                        $(".swiper-slide").css("cssText","text-align:center");
                    }else{
                        $(".swiper-container").css("cssText","width:100% !important ; height:50vw !important ; background:none ; z-index:0");
                        $(".swiper-wrapper > li > img").css("cssText","width:100% ; height:50vw");
                        $(".swiper-slide").css("cssText","text-align:center");
                        $(".swiper-button-next").hide();
                        $(".swiper-button-prev").hide();
                    }
                </script>
            </div>
            
        <div class="main">
            <div class="left">
                <ul>
                    <li class="ab">
                        <p class="b1">Blog /<span>&nbsp;<a href="/xbbk">系部博客</a></span></p>
                        <p class="b2"><a href="/xbbk"><img src="/wp-content/themes/nsijsj/images/index_17.jpg" width="12" height="12" /></a></p>
                    </li>
                    <li><img src="/wp-content/themes/nsijsj/images/index_21.jpg" width="321" height="3" /></li>
                    <?php $getid = get_cat_ID('系部博客'); ?>
                    <?php
                        $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                        query_posts('&showposts=' .$limit = '2'. '&paged=' . $paged . '&cat='.$getid);
                        $wp_query->is_archive = true;
                        $wp_query->is_home = false;
                    ?>
					<?php /*wp_list_categories('include=2&title_li=&style=none');*/ ?><!-- 分类名 -->
					<?php while( have_posts() ) : the_post(); ?>
                        <li class="bc">
                            <p class="b3"><img src="/wp-content/themes/nsijsj/images/index_24.jpg" width="26" height="10" />&nbsp;&nbsp;<a href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a></p>
                            <div class="b4"><?php the_content(); ?></div>
                        </li>
                    <?php endwhile; ?>
                </ul>
            </div>
            <div class="left">
                <ul>
                    <li class="ab">
                        <p class="b1">News /<span>&nbsp;<a href="/xbdt">系部动态</a></span></p>
                        <p class="b2"><a href="/xbdt"><img src="/wp-content/themes/nsijsj/images/index_17.jpg" width="12" height="12" /></a></p>
                    </li>
                    <li><img src="/wp-content/themes/nsijsj/images/index_21.jpg" width="321" height="3" /></li>
                    <?php $getid = get_cat_ID('系部动态'); ?>
                    <?php
                        $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                        query_posts('&showposts=' .$limit = '2'. '&paged=' . $paged . '&cat='.$getid);
                        $wp_query->is_archive = true;
                        $wp_query->is_home = false;
                    ?>
					<?php /*wp_list_categories('include=2&title_li=&style=none');*/ ?><!-- 分类名 -->
					<?php while( have_posts() ) : the_post(); ?>
                        <li class="bc">
                            <p class="b3"><img src="/wp-content/themes/nsijsj/images/index_24.jpg" width="26" height="10" />&nbsp;&nbsp;<a href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a></p>
                            <div class="b4"><?php the_content(); ?></div>
                        </li>
                    <?php endwhile; ?>
                </ul>
            </div>
            <div class="right">
                <ul>
                    <li class="ab">
                        <p class="b1">About /<span>&nbsp;<a href="/xbjs">系部介绍</a></span></p>
                        <p class="b2"><a href="/xbjs"><img src="/wp-content/themes/nsijsj/images/index_17.jpg" width="12" height="12" /></a></p>
                    </li>
                    <li class="mas"><img src="/wp-content/themes/nsijsj/images/index_21.jpg" width="321" height="3" /></li>
                    <?php $getid = get_cat_ID('系部介绍'); ?>
                    <?php
                        $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                        query_posts('&showposts=' .$limit = '1'. '&paged=' . $paged . '&cat='.$getid);
                        $wp_query->is_archive = true;
                        $wp_query->is_home = false;
                    ?>
					<?php /*wp_list_categories('include=2&title_li=&style=none');*/ ?><!-- 分类名 -->
					<?php while( have_posts() ) : the_post(); ?>
                        <li class="lvz"><img class="iw" src="<?php echo catch_that_image() ?>" width="97" height="86" /><?php the_content(); ?></li>
                        <li class="lijs">
                            <p><a href="<?php echo get_permalink(); ?>">查看</a></p>
                            <p class="ma1"><img src="/wp-content/themes/nsijsj/images/index_44.jpg" width="16" height="16" /></p>
                        </li>
                    <?php endwhile; ?>
                </ul>
            </div>
            <div class="clear"></div>
            <div class="ma"><img src="/wp-content/themes/nsijsj/images/index_29.jpg" width="1002" /></div>
            <div class="ma2"></div>
            <div class="left">
                <ul>
                    <li class="ab">
                        <p class="b1">Employment /<span>&nbsp;<a href="/lxwm">就业明星</a></span></p>
                        <p class="b2"><a href="/lxwm"><img src="/wp-content/themes/nsijsj/images/index_17.jpg" width="12" height="12" /></a></p>
                    </li>
                    <li class="mas"><img src="/wp-content/themes/nsijsj/images/index_21.jpg" width="321" height="3" /></li>
                    <?php for($in1 = 0 ; $in1 < 6 ; $in1++){ ?>
                    <li class="rc">
                        <p class="a2"><img src="/wp-content/themes/nsijsj/images/index_32.jpg" width="13" height="17" /></p>
                        <p><a href="#">联系我们</a></p>
                    </li>
                    <?php } ?>
              	</ul>
            </div>
            <div class="left">
                <ul>
                    <li class="ab">
                        <p class="b1">Teacher /<span>&nbsp;<a href="/jsjs">教师介绍</a></span></p>
                        <p class="b2"><a href="/jsjs"><img src="/wp-content/themes/nsijsj/images/index_17.jpg" width="12" height="12" /></a></p>
                    </li>
                    <li><img src="/wp-content/themes/nsijsj/images/index_21.jpg" width="321" height="3" /></li>
                    <?php $getid = get_cat_ID('教师介绍'); ?>
                    <?php
                        $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                        query_posts('&showposts=' .$limit = '3'. '&paged=' . $paged . '&cat='.$getid);
                        $wp_query->is_archive = true;
                        $wp_query->is_home = false;
                    ?>
					<?php /*wp_list_categories('include=2&title_li=&style=none');*/ ?><!-- 分类名 -->
					<?php while( have_posts() ) : the_post(); ?>
                        <li class="eap">
                        	<p class="a1">
                            	<img src="<?php echo catch_that_image() ?>" width="99" height="88" />
                            </p>
                            <p class="a2">
                            	<a href="<?php echo get_permalink(); ?>"><?php echo get_the_content() ?></a>
                            </p>
                        </li>
                    <?php endwhile; ?>
              	</ul>
            </div>
            
            <div class="right">
                <ul>
                    <li class="ab">
                        <p class="b1">Major /<span>&nbsp;<a href="/zyjs">专业介绍</a></span></p>
                        <p class="b2"><a href="/zyjs"><img src="/wp-content/themes/nsijsj/images/index_17.jpg" width="12" height="12" /></a></p>
                    </li>
                    <li><img src="/wp-content/themes/nsijsj/images/index_21.jpg" width="321" height="3" /></li>
                    <?php $getid = get_cat_ID('专业介绍'); ?>
                    <?php
                        $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                        query_posts('&showposts=' .$limit = '3'. '&paged=' . $paged . '&cat='.$getid);
                        $wp_query->is_archive = true;
                        $wp_query->is_home = false;
                    ?>
					<?php /*wp_list_categories('include=2&title_li=&style=none');*/ ?><!-- 分类名 -->
					<?php while( have_posts() ) : the_post(); ?>
                        <li class="bc">
                            <p class="b3"><img src="/wp-content/themes/nsijsj/images/red_03.jpg" width="6" height="6" />&nbsp;&nbsp;<a href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a></p>
                            <div class="b4"><?php the_content(); ?></div>
                        </li>
                    <?php endwhile; ?>
            	</ul>
            </div>
            <div class="clear"></div>
        </div>
        </div>
        <?php require_once 'footer.php' ?>
	</div>
</div>
</body>
</html>