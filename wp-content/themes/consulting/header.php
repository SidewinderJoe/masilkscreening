<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up until id="main-core".
 *
 * @package ThinkUpThemes
 */
?><!DOCTYPE html>

<html <?php language_attributes(); ?>>
<head>
<?php consulting_thinkup_hook_header(); ?>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<link rel="profile" href="//gmpg.org/xfn/11" />
<link rel="pingback" href="<?php esc_url( bloginfo( 'pingback_url' ) ); ?>" />

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="body-core" class="hfeed site">

	<header>
	<div id="site-header">

		<?php if ( get_header_image() ) : ?>
			<div class="custom-header"><img src="<?php header_image(); ?>" width="<?php echo esc_attr( get_custom_header()->width ); ?>" height="<?php echo esc_attr( get_custom_header()->height ); ?>" alt=""></div>
		<?php endif; // End header image check. ?>
	

		<div id="header">
		<div id="header-core">

			<div id="logo">
			<?php /* Custom Logo */ echo consulting_thinkup_custom_logo(); ?>
			</div>

			<div id="header-links" class="main-navigation">
			<div id="header-links-inner" class="header-links">

				<?php $walker = new consulting_thinkup_menudescription;
				wp_nav_menu(array( 'container' => false, 'theme_location'  => 'header_menu', 'walker' => new consulting_thinkup_menudescription() ) ); ?>
				
				<?php consulting_thinkup_input_headersearch(); ?>

			</div>
			</div>
			<!-- #header-links .main-navigation -->
 	
			<?php /* Add responsive header menu */ consulting_thinkup_input_responsivehtml1(); ?>

		</div>
		</div>
		<!-- #header -->

		<?php /* Add responsive header menu */ consulting_thinkup_input_responsivehtml2(); ?>

		<?php /* Add sticky header */ consulting_thinkup_input_headersticky(); ?>

		<?php /* Custom Slider */ consulting_thinkup_input_sliderhome(); ?>

		<?php /* Custom Intro - Above */ consulting_thinkup_custom_intro(); ?>

	</div>

	</header>
	<!-- header -->

	<?php /*  Call To Action - Intro */ consulting_thinkup_input_ctaintro(); ?>
	<?php /*  Pre-Designed HomePage Content */ consulting_thinkup_input_homepagesection(); ?>

	<div id="content">
	<div id="content-core">

		<div id="main">
		<div id="main-core">