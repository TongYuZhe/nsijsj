<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="renderer" content="webkit">
<meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1">
<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=0.5, maximum-scale=2.0, user-scalable=no" />
<title>无标题文档</title>
    <link type="text/css" rel="stylesheet" href="/wp-content/themes/nsijsj/css/jquery.mmenu.all.css" media="screen" />
    <link type="text/css" rel="stylesheet" href="/wp-content/themes/nsijsj/css/demo.css" media="screen" />
    <link type="text/css" rel="stylesheet" href="/wp-content/themes/nsijsj/style.css" media="screen" />
    <script type="text/javascript" src="/wp-content/themes/nsijsj/js1/script.js"></script>
    <script type="text/javascript" src="/wp-content/themes/nsijsj/js1/jquery.mmenu.all.min.js"></script>
    <script type="text/javascript">
	$(function() {
		$('nav#menu').mmenu({
			extensions				: [ 'effect-slide-menu', 'shadow-page', 'shadow-panels' ],
			keyboardNavigation 		: false,
			screenReader 			: true,
			counters				: true,
			navbar 	: {
				title	: '沈阳北软职业技术学院-计算机系'
			},
		});
	});
</script>
</head>
<body>
    <div id="page">
        <div class="header">
            <a href="#menu"><span></span></a>
        </div>
        <?php wp_nav_menu( array('container' => 'nav','container_id' => 'menu','theme_location' => menu1) ); ?>
    </div>
    
	<div class="header2">
    	<a href="/"><div class="headerCenter"><img src="/wp-content/themes/nsijsj/images/logo.png" /></div></a>
        <!--<div class="headerBottom"></div>-->
    </div>
	<div class="nav2">
        <?php wp_nav_menu( array('container' => 'div','container_class' => 'navCenter','theme_location' => menu1) ); ?>
    </div>