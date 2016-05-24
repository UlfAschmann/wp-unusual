<?php
/**
 * @package WordPress
 * @subpackage unusual-projects
 * @since unusual-projects 1.0
 */
?>
	<!DOCTYPE html>
	<html <?php language_attributes(); ?> class="no-js">

	<head>

		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="">
		<meta name="author" content="">

		<title>UNUSUAL-PROJECTS</title>

		<!-- Bootstrap Core CSS -->
		<link href="<?php echo get_template_directory_uri(); ?>/css/bootstrap.min.css" rel="stylesheet">

		<!-- Custom CSS -->
		<link href="<?php echo get_template_directory_uri(); ?>/css/main_style.css" rel="stylesheet">
		<link href='https://fonts.googleapis.com/css?family=Roboto:400,300,500,700' rel='stylesheet' type='text/css'>
		<link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,300,100,700' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
		<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/animate.css">
		<link href="<?php echo get_template_directory_uri(); ?>/bfassets/css/bootFolio.css" rel="stylesheet">
		<link href="<?php echo get_template_directory_uri(); ?>/bfassets/css/prettyPhoto.css" rel="stylesheet">

		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
		<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
	<![endif]-->
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
		<script>
			$(window).load(function () {
				"use strict";
				$(".loader-div").fadeOut("slow");
			});
		</script>
		<?php wp_head(); ?>
	</head>

	<body>

		<!-- loader -->
		<div class="loader-div text-center">
			<img class="loader-img" src="<?php echo get_template_directory_uri(); ?>/img/logo_unusual.png" alt="logo">
			<span class="loader">
		<span class="loader-inner">
		</span>
			</span>
		</div>
		<!-- loader end -->

		<!-- Navigation -->
		<nav id="navbar-main" class="navbar navbar-inverse navbar-fixed-bottom">
			<div class="container-fluid">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand page-scroll" href="#page-top">
						<img src="<?php echo get_template_directory_uri(); ?>/img/logo_unusual.png" alt="">
					</a>
				</div>
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse " id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav">
						<li>
							<a class="page-scroll" href="#page-top">Inicio</a>
						</li>
						<li>
							<a class="page-scroll" href="#about">Nosotros</a>
						</li>
						<li>
							<a class="page-scroll" href="#services">Servicios</a>
						</li>
						<li>
							<a class="page-scroll" href="#portfolio">Portafolio</a>
						</li>
						<li>
							<a class="page-scroll" href="#contact">Contacto</a>
						</li>
					</ul>
				</div>
				<!-- /.navbar-collapse -->
			</div>
			<!-- /.container -->
		</nav>
