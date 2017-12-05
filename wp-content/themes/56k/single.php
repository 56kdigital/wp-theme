<?php get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

	<article class="post">

		<h1><?php the_title(); ?></h1>

	</article>

<?php endwhile; endif; ?>

<?php get_footer(); ?>
