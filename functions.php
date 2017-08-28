<?php
	function catch_that_image(){
		global $post, $posts;
		$first_img = '';
		ob_start();
		ob_end_clean();
		$output = preg_match_all('/<img.+src=[\'"]([^\'"]+)[\'"].*>/i', $post->post_content, $matches);//获取文章中第一张图片的路径并输出
		$first_img = $matches [1] [0];
		if(empty($first_img)){ //如果文章无图片，获取自定义图片
			$first_img = "/wp-content/themes/nsijsj/images/bannert.jpg";//请自行设置一张default.jpg图片
		}
		return $first_img;
	}
	
?>

<?php
	// 面包屑导航
	function the_place($homeName = false){
		if(is_page()):
			global $post;$parent = $post;
			while($parent->post_parent){
				$parent = get_post($parent->post_parent);
				echo $parent->post_title;
			}
		endif;
	}
?>

<?php
function the_slug(){
    $post_data = get_post($post->ID,ARRAY_A);
    $slug = $post_data['post_name'];
    return $slug;
}
/* 获取当前文章所属第一个分类别名的函数*/
function the_category_slug(){
	$category = get_the_category();
	return ($category ? $category[0]->slug : "");
}
?>

<?php
register_nav_menus(
	array(
		'menu1' => __( '导航自定义菜单' ),
		'xbgk' => __( '系部概况' ),
		'jymx' => __( '就业明星' ),
		'xbdt' => __( '系部动态' ),
		'xbbk' => __( '系部博客' ),
		'lxwm' => __( '联系我们' )
	)
);
?>

<?php
function pagination($query_string){
	global $posts_per_page , $paged;  //定义变量范围
	$total_posts = get_category_by_slug($query_string)->count; //获取页面文章数
	if(empty($paged))$paged = 1;
	$prev = $paged - 1;
	$next = $paged + 1;
	$range = 3;  //only edit this if you want to show more page-links
	$showitems = ($range * 2)+1;
	
	$pages = ceil($total_posts/$posts_per_page);
	if($pages != 1){
		echo"<div class='pagination clear wrap'>";
		echo"<ul>";
		echo($paged > 1)?"<li><a href='".get_pagenum_link(1)."'>首页</a></li>":"<li><a href='javascript:void(0);'>首页</a></li>";
		echo ($paged > 1)? "<li><a href='".get_pagenum_link($prev)."'>上一页</a></li>":"";
		 
		for($i=1;$i<=$pages;$i++){
			if (1 != $pages &&( !($i >= $paged+$range+1 || $i <= $paged-$range-1) || $pages <= $showitems )){
				echo ($paged == $i)? "<li class=\"active\"><span>".$i."</span></li>":
				"<li><a href='".get_pagenum_link($i)."' class='inactive' >".$i."</a></li>";
			}
		}
		
		echo ($paged < $pages) ? "<li><a href='".get_pagenum_link($next)."'>下一页</a></li>" :"";
		echo ($paged < $pages) ? "<li><a href='".get_pagenum_link($pages)."'>末页</a></li>":"<li><a href='javascript:void(0);'>末页</a></li>";
		echo"</ul>";
		echo"</div>\n";
		/*echo $paged ."#". $pages ."#". $showitems."#" . $pages ."#". $posts_per_page."#" . $total_posts ."#".$posts_per_page;*/
	}
}
?>

<?php
	function lb($name1,$name2){
		
	}
?>


<?php
	add_filter('comment_form_default_fields', 'mytheme_remove_url');
	add_filter('comment_form_default_fields', 'mytheme_remove_name');
	add_filter('comment_form_default_fields', 'mytheme_remove_mail');
	function mytheme_remove_name($arg) {
		$arg['author'] = '';
		return $arg;
	}
	
	function mytheme_remove_url($arg) {
		$arg['url'] = '';
		return $arg;
	}
	
	
	function mytheme_remove_mail($arg) {
		$arg['email'] = '';
		return $arg;
	}
?>