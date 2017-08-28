<?php 
	class news{
		public function __construct($id,$num){
			$getid = get_cat_ID($id);
			$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
			query_posts('&showposts=' .$limit = $num. '&paged=' . $paged . '&cat='.$getid);
			//$wp_query->is_archive = true;
			//$wp_query->is_home = false;
		}
	}
?>