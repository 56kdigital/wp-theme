<?php get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

	<section class="hero">
		<div class="container">
		</div>
	</section>

	<section class="page-content">
	  <div class="container">
			<h1 class="page-title title__h2"><?php the_title(); ?></h1>
	    <div class="body-content">
				<?php the_content(); ?>
	    </div>
	    <div class="section-cta">
	      <p><a href="/contact/" class="btn">Get In Touch</a></p>
	    </div>
	  </div>
	</section>

<?php endwhile; endif; ?>

<?php get_footer(); ?>
