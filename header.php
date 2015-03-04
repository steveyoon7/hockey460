<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package hockey
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/images/favicon-2.ico" />
<?php wp_head(); ?>
</head>


<body <?php body_class(); ?>>
<div id="page" class="hfeed site">

	<!--Taken from the header.php folder, This code will display header imagine, and when clicked will bring you back to the home page.--!>
	<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'hockey' ); ?></a>
	
	<header id="masthead" class="site-header" role="banner">
			<?php if ( get_header_image() ) : ?>
			<div class="header-image">
		<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
	<!--getting header images and fitting them into the division as the right size--!>
			<img src="<?php header_image(); ?>" width="<?php echo esc_attr( get_custom_header()->width ); ?>" height="<?php echo esc_attr( get_custom_header()->height ); ?>" alt="">
		</a>
			</div>
			<?php endif; // End header image check. ?>	
	
		<div class="site-branding">
	<!-- adding blog name and descriptions on the header to show users what the site is about--!>
			<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
			<h2 class="site-description"><?php bloginfo( 'description' ); ?></h2>
		</div><!-- .site-branding -->

		<nav id="site-navigation" class="main-navigation" role="navigation">
	<!--adding navigation menu on the bottom of the header division--!>
			<button class="menu-toggle" aria-controls="menu" aria-expanded="false"><?php _e( 'Primary Menu', 'hockey' ); ?></button>
			<?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
			
	<!--having a search bar. Any key words typed into the bar will find matching word from the whole website--!>
			<div class="search-toggle">
 			   <i class="fa fa-search"></i>
			   <a href="#search-container" class="screen-reader-text"><?php _e( 'Search', 'hockey' ); ?></a>
			</div>
			
	

			<?php hockey_social_menu(); ?>
			
		</nav>
		
		<!--Social media browser. clicking on certain social networking site will direct users to the relatvent site--!>
		<div id="search-container" class="search-box-wrapper clear">
    			<div class="search-box clear">
        			<?php get_search_form(); ?>
    			</div>
		</div>
		
		
	</header><!-- #masthead -->

	<div id="content" class="site-content">
