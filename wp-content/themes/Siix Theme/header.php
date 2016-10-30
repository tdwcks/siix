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
	<a href="<?php echo site_url(); ?>/"><img class="logo" src="<?php the_field('logo', 'option'); ?>"></a>
	<a class="menu-trigger">Menu</a>
	<div class="trigger-info"><p>We create badass music for motion picture advertising and <strong class="last-word">beyond.</strong></p></div>
	<nav>
		<ul>
			<li><a target="_blank" href="http://www.siix.sourceaudio.com/#!explorer">Industry Access</a></li>
			<li><a href="<?php echo site_url(); ?>/composer-area">Composer Area</a></li>
			<li><a href="<?php echo site_url(); ?>/contact">Contact</a></li>
		</ul>
	</nav>
	<ul class="social">
		<li><a target="_blank" href="https://www.facebook.com/siixtrailermusic"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
		<li><a target="_blank" href="https://twitter.com/SIIX_Music"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
		<li><a target="_blank" href="https://www.linkedin.com/company/siix-trailer-music-and-sound?trk=ppro_cprof"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
		<li><a href="mailto:hello@siixmusic.com?"><i class="fa fa-envelope-o" aria-hidden="true"></i></a></li>
	</ul>
</header>
<section class="information">
		<a class="exit"></a>
		<h1>“We create badass music for motion picture advertising and beyond.”</h1>
		<p>SIIX Trailer Music and Sound is home to some of the most innovative artists, composers and producers. We deliver cutting-edge cues and custom scores with a distinct sound, created by artists who are pushing the norm.</p>
		<p>The management team behind SIIX are passionate film, trailer, games and music addicts who convey original ideas to reality.</p>
		<p>But that’s enough about us, we would love to get to know <a href="<?php echo site_url(); ?>/contact">more about you.</a></p>
</section>