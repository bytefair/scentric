<?php
/**
 * _s functions and definitions
 *
 * @package scentric
 * @since Scentric 1.0
 */

/**
 * Set the content width based on the theme's design and stylesheet.
 *
 * @since Scentric 1.0
 */
if ( ! isset( $content_width ) )
	$content_width = 640; /* pixels */

if ( ! function_exists( 'scentric_setup' ) ):
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which runs
 * before the init hook. The init hook is too late for some features, such as indicating
 * support post thumbnails.
 *
 * @since Scentric 1.0
 */
function scentric_setup() {

	/**
	 * Custom template tags for this theme.
	 */
	require( get_template_directory() . '/inc/template-tags.php' );

	/**
	 * Custom functions that act independently of the theme templates
	 */
	//require( get_template_directory() . '/inc/tweaks.php' );

	/**
	 * Custom Theme Options
	 */
	//require( get_template_directory() . '/inc/theme-options/theme-options.php' );

	/**
	 * WordPress.com-specific functions and definitions
	 */
	//require( get_template_directory() . '/inc/wpcom.php' );

	/**
	 * Make theme available for translation
	 * Translations can be filed in the /languages/ directory
	 * If you're building a theme based on _s, use a find and replace
	 * to change 'scentric' to the name of your theme in all the template files
	 */
	load_theme_textdomain( scentric, get_template_directory() . '/languages' );

	/**
	 * Add default posts and comments RSS feed links to head
	 */
	add_theme_support( 'automatic-feed-links' );

	/**
	 * Enable support for Post Thumbnails
	 */
	add_theme_support( 'post-thumbnails' );

	/**
	 * This theme uses wp_nav_menu() in one location.
	 */
	register_nav_menus( array(
		'primary' => __( 'Primary Menu', 'scentric' ),
	) );

	/**
	 * Add support for the Aside Post Formats
	 */
	add_theme_support( 'post-formats', array( 'aside', ) );
}
endif; // scentric_setup
add_action( 'after_setup_theme', 'scentric_setup' );

/**
 * Register widgetized area and update sidebar with default widgets
 *
 * @since Scentric 1.0
 */
function scentric_widgets_init() {
	register_sidebar( array(
		'name' => __( 'Sidebar', 'scentric' ),
		'id' => 'sidebar-1',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => "</aside>",
		'before_title' => '<h1 class="widget-title">',
		'after_title' => '</h1>',
	) );
}
add_action( 'widgets_init', 'scentric_widgets_init' );

/**
 * Enqueue scripts and styles
 */
function scentric_scripts() {
	global $post;

	wp_enqueue_style( 'style', get_stylesheet_uri() );

	/* loads local copy of Modernizr */
	wp_enqueue_script( 'modernizr', get_template_directory_uri().'/js/libs/modernizr-2.5.3.min.js', array(),'2.5.3');

	wp_enqueue_script( 'jquery' );

	/* jQuery plugins and scripts load */
	wp_enqueue_script( 'jquery-plugins', get_template_directory_uri().'/js/plugins.js', array('jquery'), '0',true);
	wp_enqueue_script( 'jquery-script', get_template_directory_uri().'/js/script.js', array('jquery'), '0', true);
	wp_enqueue_script( 'small-menu', get_template_directory_uri() . '/js/libs/small-menu.js', array( 'jquery' ), '20120206', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}

	if ( is_singular() && wp_attachment_is_image( $post->ID ) ) {
		wp_enqueue_script( 'keyboard-image-navigation', get_template_directory_uri() . '/js/libs/keyboard-image-navigation.js', array( 'jquery' ), '20120202' );
	}
}
add_action( 'wp_enqueue_scripts', 'scentric_scripts' );

/**
 * Implement the Custom Header feature
 */
//require( get_template_directory() . '/inc/custom-header.php' );
