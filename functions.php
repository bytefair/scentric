<?php
/*
** Scentric functions and definitions
**
** @package scentric
** @since Scentric 0.1
*/

/*
** basic theme functions
** mt_widgets_init()        handles dynamic sidebar
** mt_setup()               handles theme supports and custom post types
** mt_scripts()             handles enqueuing of style sheets and scripts
**
** security related functions
** hide WP version number   removes WP version from site
**
** calls to outside functions
** place calls to external php here for easy access
*/


/**
 * Set the content width based on the theme's design and stylesheet.
 *
 * @since Scentric 0.1
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
 * @since Scentric 0.1
 */
function scentric_setup() {

	/**
	 * Custom template tags for this theme.
	 */
	require( get_template_directory() . '/inc/template-tags.php' );

  /**
   * Custom functions that act independently of the theme templates
   */
  require( get_template_directory() . '/inc/extras.php' );

  /**
   * Customizer additions
   */
  require( get_template_directory() . '/inc/customizer.php' );

  /**
   * WordPress.com-specific functions and definitions
   */
  //require( get_template_directory() . '/inc/wpcom.php' );

	/**
	 * Make theme available for translation
	 * Translations can be filed in the /languages/ directory
	 * If you're building a theme based on Scentric, use a find and replace
	 * to change 'scentric' to the name of your theme in all the template files
	 */
	load_theme_textdomain( 'scentric', get_template_directory() . '/languages' );

	/**
	 * This theme uses wp_nav_menu() in one location.
	 */
	register_nav_menus( array(
		'primary' => __( 'Primary Menu', 'scentric' ),
	) );

  /*
  ** theme supports, uncomment these lines to use any or all of them
  */
  //add_theme_support( 'post-formats', array( 'aside', 'gallery', 'link', 'image', 'quote', 'status', 'video', 'audio', 'chat' ) );
  add_theme_support( 'post-thumbnails' );
  add_theme_support( 'automatic-feed-links' );
  add_theme_support( 'custom-background' );
  add_editor_style(); //remember to make this sass file in the sass root
}
endif; // scentric_setup
add_action( 'after_setup_theme', 'scentric_setup' );


/**
 * Register widgetized area and update sidebar with default widgets
 *
 * @since Scentric 0.1
 */
function scentric_widgets_init() {
  /*
  ** sidebar calls
  */
  register_sidebar( array(
    'name' => __( 'Sidebar', 'scentric' ),
    'id' => 'sidebar-1',
    'description' => __( 'The primary sidebar', 'scentric' ),
    'before_widget' => '<aside id="%1$s" class="widget sidebar-widget %2$s">',
    'after_widget' => '</aside>',
    'before_title' => '<h1 class="widget-title">',
    'after_title' => '</h1>',
  ) );
}
add_action( 'widgets_init', 'scentric_widgets_init' );


/**
 * Enqueue scripts and styles
 */
function scentric_scripts() {
	wp_enqueue_style( 'style', get_stylesheet_uri() );

	/* loads local copy of Modernizr */
	wp_enqueue_script( 'modernizr', get_template_directory_uri().'/js/vendor/modernizr-2.6.2.js', array(),'2.6.2');

	/*
  ** replace the default jQuery call, you might want to use Google's CDN for production
  */
  wp_deregister_script( 'jquery' );
  wp_register_script('jquery', get_template_directory_uri().'/js/vendor/jquery-1.8.3.js', array(), '1.8.3', false );
  wp_enqueue_script('jquery');

	/* jQuery plugins and scripts load */
	wp_enqueue_script( 'jquery-plugins', get_template_directory_uri().'/js/plugins.js', array('jquery'), '0',true);
	wp_enqueue_script( 'jquery-script', get_template_directory_uri().'/js/script.js', array('jquery'), '0', true);
	wp_enqueue_script( 'small-menu', get_template_directory_uri() . '/js/vendor/small-menu.js', array( 'jquery' ), '20120206', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}

	if ( is_singular() && wp_attachment_is_image( $post->ID ) ) {
		wp_enqueue_script( 'keyboard-image-navigation', get_template_directory_uri() . '/js/vendor/keyboard-image-navigation.js', array( 'jquery' ), '20120202' );
	}
}
add_action( 'wp_enqueue_scripts', 'scentric_scripts' );


/**
 * Implement the Custom Header feature
 */
//require( get_template_directory() . '/inc/custom-header.php' );

/*
** Removes WordPress version number from site
*/
remove_action( 'wp_head', 'wp-generator' );

?>
