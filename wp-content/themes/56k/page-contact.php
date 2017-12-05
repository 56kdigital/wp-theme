<?php /* Template Name: Contact */ ?>

<?php get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

	<section class="hero hero--center">
    <div class="container">
      <h1 class="title__h2">Get in Touch!</h1>
      <p>Want to be the next part of the 56K saga? Or maybe you need our help with? Which ever the case, we’re open for business. We usually answer within one day.  Please contact us below.</p>
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
