<?php get_header(); ?>
<?php get_sidebar(); ?>
    <div class="box_right">
        <div class="box_right_texs"><?php the_title(); ?></div>
        <div class="contents">
<?php
			global $wp;
			$current_url = home_url(add_query_arg(array(),$wp->request));
			//echo $current_url;
			
			$xbjs = strstr($current_url,'xbjs');
			$zyjs = strstr($current_url,'zyjs');
			//$zsjy = strstr($current_url,'zsjy');
			$xbdt = strstr($current_url,'xbdt');
			$jsjs = strstr($current_url,'jsjs');
			$jymx = strstr($current_url,'jymx');
			$xbbk = strstr($current_url,'xbbk');
			$lybu = strstr($current_url,'lybu');
			$qsbx = strstr($current_url,'qsbx');
			if(!empty($zyjs)){
				$qurey = 'zyjs';
				$getid = get_cat_ID('专业介绍');
				$hqwz = 'zyjs';
				require"zyjs.php";
			}else if(!empty($xbdt)){
				$getid = get_cat_ID('系部动态');
				$qurey = 'xbdt';
				$hqwz = 'xbdt';
				require"zyjs.php";
			}else if(!empty($jsjs)){
				$getid = get_cat_ID('教师介绍');
				$qurey = 'jsjs';
				$hqwz = 'jsjs';
				require"jsjs.php";
			}else if(!empty($jymx)){
				$getid = get_cat_ID('就业明星');
				$qurey = 'jymx';
				$hqwz = 'jymx';
				require"jsjs.php";
			}else if(!empty($xbbk)){
				$getid = get_cat_ID('系部博客');
				$qurey = 'xbbk';
				$hqwz = 'xbbk';
				require"zyjs.php";
			}else if(!empty($lybu)){
				//$getid = get_cat_ID('留言报修');
				require"ly.php";
			}else if(!empty($qsbx)){
				//$getid = get_cat_ID('留言报修');
				require"bx.php";
				echo 'baoxiu';
			}else/* if(!empty($xbjs))*/{
			
?>
    			
        		<p>
<?php
					while( have_posts() ) : the_post();
						the_content();
					endwhile;
?>
        		</p>
			</div>
		</div>
        <div class="fudong">
            <ul>
                <li>
                    <p class="g1"><a href="http://www.baidu.com"></a></p>
                </li>
                <li>
                    <a href="javascript:scroll(0,0)"><img src="/wp-content/themes/nsijsj/images1/tope.jpg" width="44" height="51" /></a>
                </li>
            </ul>
		</div>
		<div class="clear"></div>
	</div>
</div>
<div class="box_foot"></div>
<style type="text/css">
	.box_right{width:68%;}
</style>

    
<?php
			}
?>
     
<?php get_footer(); ?>