<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package hockey
 
 Put all omments in php tags because if not, they showed up on the page!!! 
 
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/images/favicon-2.ico" />

<?php /* This is where the styles would appear on the top of the page */ ?>

<?php wp_head(); ?>
</head>


<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
	<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'hockey' ); ?></a>

	<header id="masthead" class="site-header" role="banner">
		
		<?php /* If there is a header image this will link it so the header image displays and when clicked on will bring you to the home page */ ?>	
			
			<?php if ( get_header_image() ) : ?>
			<div class="header-image">
		<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
			<img src="<?php header_image(); ?>" width="<?php echo esc_attr( get_custom_header()->width ); ?>" height="<?php echo esc_attr( get_custom_header()->height ); ?>" alt="">
		</a>
			</div>
			<?php endif; // End header image check. ?>	
	
		<div class="site-branding">
		
		<?php /* Applying styles to these two classes in style.css below will change our header display. In our case, we created a banner so this does not apply */ ?>
		
			<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
			<h2 class="site-description"><?php bloginfo( 'description' ); ?></h2>
		</div><!-- .site-branding -->

		<nav id="site-navigation" class="main-navigation" role="navigation">
			<button class="menu-toggle" aria-controls="menu" aria-expanded="false"><?php _e( 'Primary Menu', 'hockey' ); ?></button>
			<?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
			
		
			<div class="search-toggle">
 			   <i class="fa fa-search"></i>
			   <a href="#search-container" class="screen-reader-text"><?php _e( 'Search', 'hockey' ); ?></a>
			</div>
			
	<?php /* The purpose of this php tag, is that the functions php will call this php tag, so that our social menu will appear on the same menu as the nav menu */ ?>

			<?php hockey_social_menu(); ?>
			
		</nav><!-- #site-navigation -->

<?php /* The reason why we have two containers is to make space and to have the ability to move it */ ?>

		<div id="search-container" class="search-box-wrapper clear">
    			<div class="search-box clear">
        		
        		<?php /*this creates the search form */ ?>
        			
        			<?php get_search_form(); ?>
    			</div>
		</div>
		
		
	</header><!-- #masthead -->

	<div id="content" class="site-content">
