<?php
/**
 * The Header for Fullpage
 *
 * Displays all of the <head>
 * 
 * @package 	WP_Fullpage\Templates\Layout
 */
?>

<!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) | !(IE 8) ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<title><?php wp_title( '|', true, 'right' ); ?></title>
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<!--[if lt IE 9]>
	<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js"></script>
	<![endif]-->

    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/custom.css" type="text/css" media="screen" />
<!--     <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha384-xBuQ/xzmlsLoJpyjoggmTEz8OWUFM0/RC5BsqQBDX2v5cMvDHcMakNTNrHIW2I5f" crossorigin="anonymous"></script>
    <script src="<?php bloginfo('template_url'); ?>/js/jquery.linkunderanim.js"></script> -->


	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

	<?php 

		get_header('default');

		if( WPFP_Query()->fullpage_has_full_navigation() )
			WPFP()->get_sidebar( 'menu' );