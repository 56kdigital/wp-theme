	</main>

	<?php
		$address = get_field('address', 'options');
		$postal_code = get_field('postal_code', 'options');
		$city = get_field('city', 'options');
		$country = get_field('country', 'options');

		$email = get_field('contact_email', 'options');
		$phone = get_field('company_phone', 'options');
	?>

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
					<p><?php echo $address; ?><br />
					<?php echo $postal_code; ?> <?php echo $city; ?><br />
					<?php echo $country; ?></p>
					<p><a href="mailto:<?php echo $email; ?>"><?php echo $email; ?></a></p>
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
