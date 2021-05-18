<!doctype html>
<html <?php language_attributes(); ?>>
	<head>
		<title><?php bloginfo( 'name' ); ?></title>
		<meta charset="utf-8">
		<meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
		<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri();; ?>/css/lib/hamburgers.min.css">
		<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri();; ?>/css/style.min.css">
		<link rel="stylesheet" href="https://use.typekit.net/frw8eue.css">
		<?php wp_head(); ?> 
	</head>

	<body>
	<header class="headerWhite">
		<div class="logoHeader">
			<a href="<?php echo site_url(); ?>">
				<img class="logoColor" src="<?php echo get_stylesheet_directory_uri(); ?>/images/logo_shuker_Dorris_color.png" alt="Shuker and Dorris Logo">
				<img class="logoWhite" src="<?php echo get_stylesheet_directory_uri(); ?>/images/logo_shuker_dorris_white.png" alt="Shuker and Dorris Logo">
			</a>
		</div>
		<div class="hamburger hamburger--squeeze">
			<div class="hamburger-box">
			<div class="hamburger-inner"></div>
			</div>
		</div>
		<nav class="mainNav">
			<?php wp_nav_menu( 'main-menu' ); ?>
		</nav>
	</header>