<footer>
	<div class="footerCta">
		<div class="container">
			<h3 class="title">
				<?php the_field('footer_cta', 8); ?>
			</h3>
			<a href="<?php echo site_url('/contact-us/')?>">
				Let’s talk <i class="fa fa-long-arrow-right" aria-hidden="true"></i> 
			</a>
		</div>
	</div>
	<div class="footerMain">
		<div class="container">
			<div class="footerLogo">
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/logo_shuker_dorris_white.png" alt="Shuker and Dorris Logo">
			</div>
			<address>
				<div class="address">
					<a href="https://goo.gl/maps/qgJJyvoXJrs2GKio6">
						121 South Orange Avenue, Suite 1120 <br>
						Orlando, FL 32801
					</a>
				</div>
				<div class="phone">
					<a href="tel:407.337.2060">Phone: 407.337.2060</a> <br>
					<a href="tel:407.337.2050">Fax: 407.337.2050</a>
				</div>
			</address>
			<div class="legalTerms">
				<a href="#">Privacy Policy</a> ©2020 by Shuker & Dorris, P.A.
			</div>
		</div>
	</div>
	<?php require_once('partials/logo-dppa-footer.php'); ?>
</footer>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
<script src="https://use.fontawesome.com/1983581bba.js"></script>
<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/script.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.js"></script>
<script>
	new WOW().init();
</script>
<?php wp_footer(); ?> 
</body>
</html>