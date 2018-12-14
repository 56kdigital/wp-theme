<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta content="width=device-width, initial-scale=1.0, user-scalable=1, minimum-scale=1.0" name="viewport">

	<!-- Google Tag Manager -->
	<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
	new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
	j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
	'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
	})(window,document,'script','dataLayer','GTM-TXNG7TT');</script>
	<!-- End Google Tag Manager -->

	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
	<!-- Google Tag Manager (noscript) -->
	<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-TXNG7TT"
	height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
	<!-- End Google Tag Manager (noscript) -->

	<?php get_template_part( 'partials/svg' ); ?>

	<header class="header">
		<div class="container">
			<div class="header-logo">
				<a href="<?php bloginfo('url'); ?>" title="Home">
					<svg class="icon-logo">
						<use xlink:href="#icon-logo"></use>
					</svg>
				</a>
			</div>
			<nav class="main-nav">
				<button class="hamburger">
					<span class="hamburger__bar"></span>
					<span class="hamburger__bar"></span>
					<span class="hamburger__bar"></span>
				</button>
				<?php wp_nav_menu( array('menu'=>'1', 'container'=>'') ); ?>
			</nav>
		</div>
	</header>

	<main class="main" role="main">
