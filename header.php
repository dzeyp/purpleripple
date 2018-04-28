<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package understrap
 */

$container = get_theme_mod( 'understrap_container_type' );
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-title" content="<?php bloginfo( 'name' ); ?> - <?php bloginfo( 'description' ); ?>">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

	<link href="https://fonts.googleapis.com/css?family=Montserrat:400,600|Pacifico|Rubik:700" rel="stylesheet">

	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.10/css/all.css" integrity="sha384-+d0P83n9kaQMCwj8F4RJB66tzIwOKmrdb46+porD/OvrJ+37WqIM7UoBtwHO6Nlg" crossorigin="anonymous">

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.2.2/css/swiper.min.css">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.2.2/js/swiper.min.js"></script>
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<div class="hfeed site" id="page">

<div class="container-fluid p-0">

<div class="row main-row main-nav no-gutter">
	<div class="col-3">
		asdf
	</div>
	<div class="col-9 text-right">
		<div class="d-none d-md-block">
			<ul>
				<li><a href="">Home</a></li>
				<li><a href="">Who we are</a></li>
				<li><a href="">Services</a></li>
				<li><a href="">Contacts</a></li>
			</ul>
			<span><i class="fas fa-phone"></i>&nbsp;050-123-4567</span>
		</div>
		<div class="d-md-none">
			<button type="button" id="main-nav-button" class="btn btn-primary collapsed" data-toggle="collapse" href="#mobile-menu"><i class="fas fa-bars"></i></button>
		</div>
	</div>
	<div class="col-12 collapse text-center no-gutter" id="mobile-menu">
		<ul>
			<li><a href="">Home</a></li>
			<li><a href="">Who we are</a></li>
			<li><a href="">Services</a></li>
			<li><a href="">Contacts</a></li>
		</ul>
		<span><i class="fas fa-phone"></i>&nbsp;+971&nbsp;50&nbsp;1234567</span>
	</div>
</div>
