<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, minimal-ui">
	<meta name="author" content="Yuiko Hamada">
	<meta property="og:type" content="<?php if(is_home()){ ?>blog<?php } else { ?>article<?php }?>">
	<meta property="fb:app_id" content="1526377227683556">
	<title><?php wp_title('-', true, 'right'); ?><?php bloginfo('name'); ?></title>
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/import.css">
	<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
	<link href='https://fonts.googleapis.com/css?family=Cookie' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,700' rel='stylesheet' type='text/css'>
	<link rel="icon" type="image/vnd.microsoft.icon" href="<?php echo get_template_directory_uri(); ?>/images/common/favicon.ico">
	<?php wp_head(); ?>
	<script>
	  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

	  ga('create', 'UA-66903750-1', 'auto');
	  ga('send', 'pageview');

	</script>
</head>

<body <?php body_class(); ?>>
	<div id="wrapper">
		<div id="container">
			<div class="bg-white clearfix">
				<header>
					<h1><?php wp_title('-', true, 'right'); ?><?php bloginfo('name'); ?><a href="http://y-hmd.com/blog"><img src="<?php echo get_template_directory_uri(); ?>/images/common/mv.png" alt="LOL.blog"></a></h1>
				</header>
				<nav id="sp-menu">
					<div id="menu-btn">
						<img src="<?php echo get_template_directory_uri(); ?>/images/common/sp-menu.png" alt="">
					</div>
					<ul id="sp-menu-ul">
						<?php
							$cat_all = get_terms( "category", "fields=all&get=all" );
							foreach($cat_all as $value):
						?>
						<li><a href="<?php echo get_category_link($value->term_id); ?>"><?php echo $value->name;?></a></li>
						<?php endforeach; ?>
					</ul>
				</nav>