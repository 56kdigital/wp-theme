<?php /* Template Name: Contact */ ?>

<?php get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

	<section class="hero hero--center">
    <div class="container">
      <h1 class="title__h2"><?php the_field('hero_title'); ?></h1>
      <p><?php the_field('hero_content'); ?></p>
    </div>
  </section>

	<section class="page-content">
	  <div class="container">
	    <div class="body-content">
				<?php the_content(); ?>
	    </div>
	  </div>
	</section>

<?php endwhile; endif; ?>

<?php get_footer(); ?>
