<?php ?>

	<footer>
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-12 text-center">© 2016 made with <span><img src="<?php echo get_template_directory_uri(); ?>/img/love.png" alt="love"></span> unusual-projects</div>
			</div>
		</div>
	</footer>



	<!-- jQuery -->
	<script src="<?php echo get_template_directory_uri(); ?>/js/scrolling-nav.js"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.easing.min.js"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.mb.YTPlayer.min.js"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/js/main.js"></script>

	<!-- contact form -->
	<script src="<?php echo get_template_directory_uri(); ?>/assets/vender/intl-tel-input/js/intlTelInput.min.js"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/assets/js/contact-form.js"></script>
	<script src='https://www.google.com/recaptcha/api.js'></script>


	<!-- bootFolio footer-->
	<script src="<?php echo get_template_directory_uri(); ?>/bfassets/js/jquery.bootFolio.js"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/bfassets/js/jquery.prettyPhoto.js"></script>

	<script type="text/javascript">
		$(document).ready(function () {
			$("#unusual").bootFolio({
				bfLayout: "bflayhover",
				bfFullWidth: "full-width",
				bfHover: "bfhover5",
				bfAnimation: "scale",
				bfSpace: "nospace",
				bfAniDuration: 500,
				bfCaptioncolor: "#fff",
				bfTextcolor: "#999",
				bfTextalign: "center",
				bfNavalign: "center"
			});
			$("a[rel^='prettyPhoto']").prettyPhoto();
		});
	</script>


	<!-- Bootstrap Core JavaScript -->
	<script src="js/bootstrap.min.js"></script>
	<?php wp_footer(); ?>
		</body>

		</html>
