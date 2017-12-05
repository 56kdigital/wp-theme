<?php get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

	<section class="job-hero">
		<div class="container">
			<h1 class="page-title title__h2"><?php the_title(); ?></h1>
			<ul class="job-details">
				<li>
					<svg class="icon-clock">
						<use xlink:href="#icon-clock"></use>
					</svg>
					<span class="job-meta"><?php the_field('job_type'); ?></span>
				</li>
				<li>
					<svg class="icon-location">
						<use xlink:href="#icon-location"></use>
					</svg>
					<span class="job-meta"><?php the_field('job_location'); ?></span>
				</li>
			</ul>
		</div>
	</section>

	<article class="job-post page-content">
	  <div class="container">
	    <div class="body-content">
				<?php the_content(); ?>
	    </div>
	  </div>
	</article>

<?php endwhile; endif; ?>

<?php get_footer(); ?>
