<?php /* Template Name: Team */ ?>

<?php get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

	<section class="hero">
    <div class="container">
      <h1 class="title__h2"><?php the_title(); ?></h1>
    </div>
  </section>

	<section class="team">
	  <div class="container">

			<?php if( have_rows('employees') ): ?>
				<div class="employees-grid">
					<?php while ( have_rows('employees') ) : the_row(); ?>
						<?php
							$name = get_sub_field('name');
							$title = get_sub_field('title');
							$email = get_sub_field('email');

							$thumb_id = get_sub_field('image');
							$thumb_src = wp_get_attachment_image_src($thumb_id, 'employee-thumb');
							$thumb_src_2x = wp_get_attachment_image_src($thumb_id, 'employee-thumb-2x');
						?>

						<div class="employees-grid__item">
							<div class="employee__thumb">
								<img src="<?php echo $thumb_src[0]; ?>" srcset="<?php echo $thumb_src_2x[0]; ?> 620w" sizes="(min-width: 600px) 310px, 100vw" alt="<?php echo $title; ?>">
							</div>
							<div class="employee__info">
								<h2 class="employee__name title__h3"><?php echo $name; ?></h2>
								<p class="employee__title"><?php echo $title; ?></p>
								<p class="employee__email"><a href="mailto:<?php echo $email; ?>"><?php echo $email; ?></a></p>
							</div>
						</div>

					<?php endwhile; ?>
				</div>
			<?php endif; ?>


	  </div>
	</section>

<?php endwhile; endif; ?>

<?php get_footer(); ?>
