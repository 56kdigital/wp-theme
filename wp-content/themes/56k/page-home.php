<?php /* Template Name: Home */ ?>

<?php get_header(); ?>

<section class="home-hero hero">
	<div class="container">
		<h1 class="hero__title title__h1"><span class="hero__title--intro"><?php the_field('hero_intro_title'); ?></span>
			 An independent, all  senior collective of digital marketeers.</h1>
	</div>
</section>

<section class="home-clients">
	<div class="container">
		<h2 class="title__h3">Our clients</h2>
		<ul class="client-logos">
			<li><img src="src/images/logo-bangerhead.svg" alt="" /></li>
		</ul>
	</div>
</section>

<section class="home-about bg--dk-grey">
	<div class="flex-container">
		<div class="home-about__img flex-col"></div>
		<div class="home-about__content flex-col">
			<h2 class="title__h2 section-title">Who We Are</h2>
			<div class="body-content">
				<p>We help businesses succeed in the online world with Search (SEO & SEM) to Paid Social (Facebook, Instagram & Youtube), Analytics (Tracking, Analysis & CRO),Strategy and Education. </p>
				<p>Our aim is to be the best in the industry by delivering top class results for our clients with innovative technology, work processes and a different agency model.</p>
			</div>
			<div class="section-cta">
				<p><a href="#" class="btn">About Us</a></p>
			</div>
		</div>
	</div>
</section>

<section class="home-careers">
	<div class="flex-container">
		<div class="home-careers__img flex-col"></div>
		<div class="home-careers__content flex-col">
			<h2 class="title__h2 section-title">Careers</h2>
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
				<p><a href="#" class="btn">All Positions</a></p>
			</div>
		</div>
	</div>
</section>

<section class="home-testimonials bg--yellow">
	<div class="container">
		<div class="testimonial-slider">

			<div class="testimonial-slider__item">
				<p class="testimonial-quote title__h2">Best dudes around. They like to party</p>
				<p class="testimonial-author title__h3">Buzzsaw, Party People CEO</p>
			</div>

			<div class="testimonial-slider__item">
				<p class="testimonial-quote title__h2">Working with 56K really was a game changer for us. It bumped up our online sales with 6% within the first month.</p>
				<p class="testimonial-author title__h3">Maria Lövdahl, Coolstuff CEO</p>
			</div>

		</div>
	</div>
</section>

<?php get_footer(); ?>
