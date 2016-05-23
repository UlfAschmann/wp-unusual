/*! Main */
jQuery(document).ready(function ($) {

	// Fixa navbar ao ultrapassa-lo
	var navbar = $('#navbar-main'),
		distance = navbar.offset().top,
		$window = $(window);
	ancho = $(window).width();

	$window.scroll(function () {

		alto_barra = 51;
		if (ancho >= 1024) {
			alto_barra = 85;
		}
		console.log(alto_barra);
		if ($window.scrollTop() >= alto_barra) {
			navbar.removeClass('navbar-fixed-bottom');
		} else {
			navbar.addClass('navbar-fixed-bottom');
		}
		if ($window.scrollTop() >= distance) {
			navbar.removeClass('navbar-fixed-top').addClass('navbar-fixed-top');
		} else {
			navbar.removeClass('navbar-fixed-top');
		}

	});

	$(".player").mb_YTPlayer();

	$('.navbar-collapse a').click(function () {
		$(".navbar-collapse").collapse('hide');
	});
});
