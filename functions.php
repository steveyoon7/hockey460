<?php
/**
 * hockey functions and definitions
 *
 * @package hockey
 */

/**
 * the content width based on the theme's design and stylesheet cannot surpass 640px.
 */

 
if ( ! isset( $content_width ) ) {
	$content_width = 640; /* pixels */
}

/* hockey is warrped in a conditional statement that says if not fucntions exist hockey setup, then run the fucntion.  */

if ( ! function_exists( 'hockey_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */

 
function hockey_setup() {

	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on hockey, use a find and replace
	 * to change 'hockey' to the name of your theme in all the template files
	 */
	load_theme_textdomain( 'hockey', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head of the page.
	add_theme_support( 'automatic-feed-links' );

	/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	 
	 
	add_theme_support( 'post-thumbnails' );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link http://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
	 */
	//add_theme_support( 'post-thumbnails' );

	// This is where you register your custom menu for your theme. In this case it is called Primary menu. We also have a social media menu
	register_nav_menus( array(
		'primary' => __( 'Primary Menu', 'hockey' ),
		'social' => __( 'Social Menu', 'hockey' ),
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form', 
		'comment-form', 
		'comment-list', 
		'gallery',
		'caption',
	) );

	/*
	 * Enable support for Post Formats.
	 * See http://codex.wordpress.org/Post_Formats
	 */
	add_theme_support( 'post-formats', array(
		'aside', 'image', 'video', 'quote', 'link',
	) );

	// Set up the WordPress core custom background feature. This is to further customize the background if needed.
	
	//add_theme_support( 'custom-background', apply_filters( 'hockey_custom_background_args', array(
// 		'default-color' => 'ffffff',
// 		'default-image' => '',
//	) ) );
}
endif; // hockey_setup
add_action( 'after_setup_theme', 'hockey_setup' );

/**
 * Register widget area.
 *
 * @link http://codex.wordpress.org/Function_Reference/register_sidebar
 */
 
 // This is where you register and define the sidebar and classify the header  
 
function hockey_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Sidebar', 'hockey' ),
		'id'            => 'sidebar-1',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );

/* This conditional will create the sidebar and allow for widgets to be placed within the footer of the site. Registers the sidebars on the WordPress dashboard so that users can quickly drag and drop desired widgets */

	register_sidebar( array(
		'name'          => __( 'Footer Widget', 'hockey' ),
		'description'   => __( 'Footer widgets will be included in the footer of the site.', 'hockey' ),
		'id'            => 'sidebar-2',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );


}
add_action( 'widgets_init', 'hockey_widgets_init' );

/**
 * Enqueue scripts and styles is meant to link stylesheets and other fonts and icons to the php files.
 */
function hockey_scripts() {
	wp_enqueue_style( 'hockey-style', get_stylesheet_uri() );
	
	//adding stylesheet for the sidebar //
	
	wp_enqueue_style( 'hockey-content-sidebar', get_template_directory_uri() . '/layouts/content-sidebar.css');
	
	//adding fonts from google-fonts to the theme
	
	wp_enqueue_style( 'hockey-google-fonts', 'http://fonts.googleapis.com/css?family=Crimson+Text:400,600,700|Crete+Round');

	//adding icons from font awesome to the widgets

	wp_enqueue_style( 'hockey-fontawesome', 'http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css');
	
	wp_enqueue_script( 'hockey-hide-search', get_template_directory_uri() . '/js/hide-search.js', array('jquery'), '20150302', true );
	
	wp_enqueue_script( 'hockey-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '201502029', true );

	wp_enqueue_script( 'hockey-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20150228', true );
	
	wp_enqueue_script( 'my-simone-masonry', get_template_directory_uri() . '/js/masonry-settings.js', array('masonry'), '20150301', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}

// These files are all found under the includes folder 

add_action( 'wp_enqueue_scripts', 'hockey_scripts' );

/**
 * Implement the Custom Header feature. This allows for the user to customize the header image
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';
