<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/MyFontsWebfontsKit.css">
<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_uri(); ?>" />
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/font-awesome/css/font-awesome.min.css">
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<header>
	<img class="logo" src="<?php echo get_template_directory_uri(); ?>/images/logo.png">
	<a class="menu-trigger">Menu</a>
	<nav>
		<ul>
			<li><a href="<?php echo site_url(); ?>/">Home</a></li>
			<li><a href="<?php echo site_url(); ?>/artists">Artists</a></li>
			<li><a href="<?php echo site_url(); ?>/releases">Releases</a></li>
			<li><a href="<?php echo site_url(); ?>/contact">Contact</a></li>
		</ul>
	</nav>
	<ul class="social">
		<li><a target="_blank" href="https://www.facebook.com/siixtrailermusic"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
		<li><a target="_blank" href=""><i class="fa fa-soundcloud" aria-hidden="true"></i></a></li>
		<li><a target="_blank" href="https://twitter.com/SIIX_Music"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
		<li><a target="_blank" href="https://www.linkedin.com/company/siix-trailer-music-and-sound?trk=ppro_cprof"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
		<li><a href="mailto:julia@sixtus.com?"><i class="fa fa-envelope-o" aria-hidden="true"></i></a></li>
	</ul>
</header>