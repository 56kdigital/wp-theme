	</main>

	<footer class="footer">
		<div class="container">

			<div class="flex-grid">
				<div class="col-1-4 footer-logo">
					<svg class="icon-logo">
						<use xlink:href="#icon-logo"></use>
					</svg>
				</div>

				<div class="col-1-4 footer-contact">
					<h3 class="title__h3">Contact</h3>
					<p><?php the_field('address', 'options'); ?> <br />
						<?php the_field('postal_code', 'options'); ?>  <?php the_field('city', 'options'); ?> <br />
						 <?php the_field('country', 'options'); ?> </p>
					<p>  <a href="mailto:<?php the_field('contact_email', 'options'); ?>"><?php the_field('contact_email', 'options'); ?></a> <br />
						<?php the_field('company_phone', 'options'); ?></p>
				</div>

				<div class="col-1-4 footer-about">
					<h3 class="title__h3">About</h3>
					<p><?php the_field('footer_about_content', 'options'); ?></p>
				</div>

				<div class="col-1-4 footer-contact-link">
					<a href="<?php bloginfo('url'); ?>/contact/" class="contact-btn">
						<svg class="icon-contact">
							<use xlink:href="#icon-contact"></use>
						</svg>
					</a>
				</div>
			</div>

		</div>
	</footer>

	<?php wp_footer(); ?>
</body>
</html>
