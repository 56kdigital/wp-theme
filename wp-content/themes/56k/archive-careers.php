<?php get_header(); ?>

<section class="hero hero--center">
	<div class="container">
		<h1 class="title__h2">Careers</h1>
		<p><?php the_field('careers_hero_content', 'options'); ?></p>
	</div>
</section>

<section class="page-content">
	<div class="container">

		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			<div class="careers-list">
				<div class="careers-list__item">
					<h4 class="job-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
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
			</div>
		<?php endwhile; endif; ?>
	</div>
</section>
<?php get_footer(); ?>
