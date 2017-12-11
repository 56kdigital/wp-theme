<?php get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

	<section class="page-hero hero">
		<div class="container">
			<h1 class="page-title title__h2"><?php the_title(); ?></h1>
		</div>
	</section>

	<section class="page-content">
	  <div class="container">
	    <div class="body-content">
				<?php the_content(); ?>
	    </div>
			<?php $btn_label = get_field('cta_button_label'); ?>
			<?php $btn_link = get_field('cta_button_link'); ?>
			<?php if($btn_label): ?>
		    <div class="section-cta">
		      <p><a href="<?php echo $btn_link; ?>" class="btn"><?php echo $btn_label; ?></a></p>
		    </div>
			<?php endif; ?>
	  </div>
	</section>

<?php endwhile; endif; ?>

<?php get_footer(); ?>
