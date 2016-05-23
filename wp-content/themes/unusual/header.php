<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
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
		<link href="css/bootstrap.min.css" rel="stylesheet">

		<!-- Custom CSS -->
		<link href="css/main_style.css" rel="stylesheet">
		<link href='https://fonts.googleapis.com/css?family=Roboto:400,300,500,700' rel='stylesheet' type='text/css'>
		<link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,300,100,700' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
		<link rel="stylesheet" href="css/animate.css">
		<link href="bfassets/css/bootFolio.css" rel="stylesheet">
		<link href="bfassets/css/prettyPhoto.css" rel="stylesheet">

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

	<body <?php body_class(); ?>>

		<div id="content" class="site-content">
