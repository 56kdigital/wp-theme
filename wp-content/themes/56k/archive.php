<?php get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

	<h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>

<?php endwhile; endif; ?>

<?php get_footer(); ?>
