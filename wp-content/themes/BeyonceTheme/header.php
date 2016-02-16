<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?php bloginfo('name') ?></title>
	<link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>" type="text/css" media="screen" />
	<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/font-awesome-animation.min.css">
	<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/about-style.css" type="text/css" media="screen" />
	<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/skeleton.css" type="text/css" media="screen" />
	<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/jquery.min.js"></script>
	<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/jquery-ui.min.js"></script>

	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?> >

<header class="clearfix">
	
	<?php 
		$logoClass;
		$navClass;
		if (get_the_ID() == 1) 
			$logoClass = "hideLogo";
			$navClass = "fullNav";
	?>
	
	<h1 class="nav-logo <?php echo $logoClass ?>">
		<a href="<?php echo get_site_url(); ?>">
			Chris Tsujiuchi
		</a>
	</h1>
	
	<nav class="menu main <?php echo $navClass ?>">
	    <?php wp_nav_menu( array( 'theme_location' => 'primary', 'container' => false ) ); ?>
	</nav>

</header>