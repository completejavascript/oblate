<!doctype html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<?php if ( !is_single() ) { ?>
	<meta name="description" content="I'm Tania. I design and develop websites, and share everything I learn along the way.">
	<?php } ?>

	<?php if ( is_page('projects') ) { ?>
	<link href="https://fonts.googleapis.com/css?family=Press+Start+2P" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500" rel="stylesheet" type="text/css">
	<?php } ?>

	<?php wp_head(); ?>

	<?php if (!isset($_SERVER['HTTP_USER_AGENT']) || stripos($_SERVER['HTTP_USER_AGENT'], 'Speed Insights') === false): ?>

	<script>
		(function(i, s, o, g, r, a, m) {
			i['GoogleAnalyticsObject'] = r;
			i[r] = i[r] || function() {
				(i[r].q = i[r].q || []).push(arguments)
			}, i[r].l = 1 * new Date();
			a = s.createElement(o),
				m = s.getElementsByTagName(o)[0];
			a.async = 1;
			a.src = g;
			m.parentNode.insertBefore(a, m)
		})(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');

		ga('create', 'UA-42068444-1', 'auto');
		ga('send', 'pageview');

	</script>

	<?php endif; ?>
	
	<!-- Place this tag in your head or just before your close body tag. -->
<script async defer src="https://buttons.github.io/buttons.js"></script>

</head>

<body>

	<?php get_sidebar(); ?>

	<nav class="navigation">
		<div class="home">
			<div>
				<a id="toggle"><i class="fa fa-2x fa-bars" aria-hidden="true"></i></a>
			</div>
			<div class="face">
				<a href="<?php echo site_url(); ?>"><img src="<?php echo site_url(); ?>/wp-content/themes/oblate/images/tr.png"></a>
			</div>
		</div>

		<?php wp_nav_menu( array( 'theme_location' => 'nav-menu' ) ); ?>

		<div class="search">
			<a href="<?php echo site_url(); ?>/search"><i class="fa fa-2x fa-search" aria-hidden="true"></i></a>
		</div>
	</nav>

	<section class="content">

		<main class="main">
