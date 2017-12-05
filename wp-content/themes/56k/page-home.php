<?php /* Template Name: Home */ ?>

<?php get_header(); ?>

<section class="home-hero hero">
	<div class="container">
		<h1 class="hero__title title__h1"><span class="hero__title--intro"><?php the_field('hero_title_intro'); ?></span> <?php the_field('hero_title'); ?></h1>
	</div>
</section>

<section class="home-clients">
	<div class="container">
		<h2 class="home-clients__title title__h3"><?php the_field('clients_section_title'); ?></h2>
		<?php if( have_rows('clients_logo_list') ): ?>
			<ul class="client-logos flex-grid">
		    <?php while ( have_rows('clients_logo_list') ) : the_row(); ?>
					<?php
						$image_id = get_sub_field('logo');
						$src = wp_get_attachment_image_src($image_id, 'client-logo');
						$src_2x = wp_get_attachment_image_src($image_id, 'client-logo-2x');
						//$srcset = wp_get_attachment_image_srcset($image_id, 'client-logo-2x');
					?>
					<li class="col-1-5"><img src="<?php echo $src_2x[0]; ?>" srcset="<?php //echo $srcset; ?>" alt="<?php the_sub_field('name'); ?>" /></li>
		    <?php endwhile; ?>
			</ul>
		<?php endif; ?>
	</div>
</section>

<section class="home-about bg--dk-grey">
	<div class="flex-container">
		<div class="home-about__img flex-col"></div>
		<div class="home-about__content flex-col">
			<h2 class="title__h2 section-title"><?php the_field('about_section_title'); ?></h2>
			<div class="body-content">
				<?php the_field('about_section_content'); ?>
			</div>
			<div class="section-cta">
				<p><a href="<?php the_field('about_section_button_link'); ?>" class="btn"><?php the_field('about_section_button_label'); ?></a></p>
			</div>
		</div>
	</div>
</section>

<section class="home-careers">
	<div class="flex-container">
		<div class="home-careers__img flex-col"></div>
		<div class="home-careers__content flex-col">
			<h2 class="title__h2 section-title"><?php the_field('careers_section_title'); ?></h2>
			<div class="careers-list">
				<div class="careers-list__item">
					<h4 class="job-title">Senior konsult, med fokus på SEM</h4>
					<ul class="job-details">
						<li>
							<svg class="icon-clock">
								<use xlink:href="#icon-clock"></use>
							</svg>
							<span class="job-meta">Heltid</span>
						</li>
						<li>
							<svg class="icon-cal">
								<use xlink:href="#icon-cal"></use>
							</svg>
							<span class="job-meta">Heltid</span>
						</li>
					</ul>
				</div>
				<div class="careers-list__item">
					<h4 class="job-title">Senior konsult, med fokus på SEM</h4>
					<ul class="job-details">
						<li>
							<svg class="icon-clock">
								<use xlink:href="#icon-clock"></use>
							</svg>
							<span class="job-meta">Heltid</span>
						</li>
						<li>
							<svg class="icon-cal">
								<use xlink:href="#icon-cal"></use>
							</svg>
							<span class="job-meta">Heltid</span>
						</li>
					</ul>
				</div>
				<div class="careers-list__item">
					<h4 class="job-title">Senior konsult, med fokus på SEM</h4>
					<ul class="job-details">
						<li>
							<svg class="icon-clock">
								<use xlink:href="#icon-clock"></use>
							</svg>
							<span class="job-meta">Heltid</span>
						</li>
						<li>
							<svg class="icon-cal">
								<use xlink:href="#icon-cal"></use>
							</svg>
							<span class="job-meta">Heltid</span>
						</li>
					</ul>
				</div>
			</div>
			<div class="section-cta">
				<p><a href="<?php the_field('careers_section_button_link'); ?>" class="btn"><?php the_field('careers_section_button_label'); ?></a></p>
			</div>
		</div>
	</div>
</section>

<section class="home-testimonials bg--yellow">
	<div class="container">
		<?php if( have_rows('testimonials') ): ?>
			<div class="testimonial-slider">
		    <?php while ( have_rows('testimonials') ) : the_row(); ?>
					<div class="testimonial-slider__item">
						<p class="testimonial-quote title__h2"><?php the_sub_field('quote'); ?></p>
						<p class="testimonial-author title__h3"><?php the_sub_field('author'); ?></p>
					</div>
		    <?php endwhile; ?>
			</div>
		<?php endif; ?>
	</div>
</section>

<?php get_footer(); ?>
