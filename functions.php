<?php
/**
 * Mozrest functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Mozrest
 */

if ( ! defined( '_MOZREST_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_MOZREST_VERSION', '1.0.0' );
}

if ( ! function_exists( 'mozrest_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function mozrest_setup() {
		/***********************************************
		* QUIT ADMIN BAR
		***********************************************/
		add_filter('show_admin_bar', '__return_false');
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on Mozrest, use a find and replace
		 * to change 'mozrest' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'mozrest', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus(
			array(
				'primary' => esc_html__( 'Primary', 'mozrest' ),
			)
		);

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support(
			'html5',
			array(
				'search-form',
				'comment-form',
				'comment-list',
				'gallery',
				'caption',
				'style',
				'script',
			)
		);
	}
endif;
add_action( 'after_setup_theme', 'mozrest_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function mozrest_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'mozrest_content_width', 640 );
}
add_action( 'after_setup_theme', 'mozrest_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function mozrest_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'mozrest' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'mozrest' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'mozrest_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function mozrest_scripts() {
	wp_enqueue_style( 'style', get_stylesheet_uri(), array(), _MOZREST_VERSION );
	wp_enqueue_style( 'bootstrap_css', get_template_directory_uri() . '/css/bootstrap.min.css', array(), _MOZREST_VERSION );
	wp_enqueue_style( 'fontawesome', get_template_directory_uri() . '/css/font-awesome.min.css', array(), _MOZREST_VERSION );
	wp_enqueue_style( 'splide_css', get_template_directory_uri() . '/css/splide.min.css', array(), _MOZREST_VERSION );
	wp_enqueue_style( 'splide_theme_css', get_template_directory_uri() . '/css/splide-default.min.css', array(), _MOZREST_VERSION );
	wp_enqueue_style( 'mozrest_css', get_template_directory_uri() . '/css/mozrest.css', array(), _MOZREST_VERSION );


	wp_enqueue_script( 'jquery', get_template_directory_uri() . '/js/jquery-3.5.1.min.js', array(), _MOZREST_VERSION, true );
	wp_enqueue_script( 'bootstrap_js', get_template_directory_uri() . '/js/bootstrap.bundle.min.js', array(), _MOZREST_VERSION, true );
	wp_enqueue_script( 'splide_js', get_template_directory_uri() . '/js/splide.min.js', array(), _MOZREST_VERSION, true );
	wp_enqueue_script( 'mozrest_js', get_template_directory_uri() . '/js/mozrest.min.js', array(), _MOZREST_VERSION, true );


	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'mozrest_scripts' );


/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';


/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

/**
 * Load WooCommerce compatibility file.
 */
if ( class_exists( 'WooCommerce' ) ) {
	require get_template_directory() . '/inc/woocommerce.php';
}