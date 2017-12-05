<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta content="width=device-width, initial-scale=1.0, user-scalable=1, minimum-scale=1.0" name="viewport">
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
	<?php get_template_part( 'partials/svg' ); ?>

	<header class="header">
		<div class="container">
			<div class="header-logo">
				<a href="/">
					<svg class="icon-logo">
						<use xlink:href="#icon-logo"></use>
					</svg>
				</a>
			</div>
			<nav class="main-nav">
				<?php wp_nav_menu( array('menu'=>'1', 'container'=>'') ); ?>
			</nav>
		</div>
	</header>

	<main class="main" role="main">
