<?php

/**
 * Mozrest functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Mozrest
 */

if (!defined('_MOZREST_VERSION')) {
	// Replace the version number of the theme on each release.
	define('_MOZREST_VERSION', '1.0.0');
}

if (!function_exists('mozrest_setup')) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function mozrest_setup()
	{
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
		load_theme_textdomain('mozrest', get_template_directory() . '/languages');

		// Add default posts and comments RSS feed links to head.
		add_theme_support('automatic-feed-links');

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support('title-tag');
		/***********************************************
		 * CUSTOM LENGTH EXCERPT
		 ***********************************************/
		function custom_excerpt_length($length)
		{
			global $post;
			if ($post->post_type == 'post') {
				return 14;
			} else if ($post->post_type == 'testimonial') {
				return 26;
			} else { // if ($post->post_type == 'illustration') {
				return 300;
			}
		}
		add_filter('excerpt_length', 'custom_excerpt_length', 999);
		remove_filter('the_excerpt', 'wpautop');
		function new_excerpt_more($more)
		{
			return '';
		}
		add_filter('excerpt_more', 'new_excerpt_more');

		//estimated reading time
		function the_reading_time()
		{
			$content = get_post_field('post_content', $post->ID);
			$word_count = str_word_count(strip_tags($content));
			$totalreadingtime = ceil($word_count / 200);

			echo $totalreadingtime;
		}
		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support('post-thumbnails');

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus(
			array(
				'primary' => esc_html__('Primary', 'mozrest'),
				'footer1' => esc_html__('Footer1', 'mozrest'),
				'footer2' => esc_html__('Footer2', 'mozrest'),
				'footer3' => esc_html__('Footer3', 'mozrest'),
				'footer4' => esc_html__('Footer4', 'mozrest'),
				'footer5' => esc_html__('Footer5', 'mozrest'),
				'footerBottom' => esc_html__('FooterBottom', 'mozrest'),
			)
		);
		/**
		 * Gets the URL for a category term archive based on the category's slug.
		 *
		 * @param string $category_slug The slug of the category to get the category arcive for.
		 *
		 * @return string The category (term) archive URL. Empty string on error.
		 */
		function the_category_url_by_slug($category_slug)
		{
			echo get_category_link(get_cat_ID($category_slug));
		}
		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		function get_url_by_slug($slug)
		{
			$page_url_id = get_page_by_path($slug);
			$page_url_link = get_permalink($page_url_id);
			echo $page_url_link;
		}
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

		/***********************************************
		 * CUSTOM TYPE: CUSTOMER
		 ***********************************************/
		function create_customer_type()
		{
			$args = array(
				'labels' => array(
					'name' => 'Customers',
					'singular_name' => 'Customer'
				),
				'public' => true,
				'publicly_queryable' => true,
				'show_ui' => true,
				'show_in_menu' => true,
				'query_var' => true,
				'rewrite' => true,
				'capability_type' => 'post',
				'has_archive' => true,
				'hierarchical' => false,
				'show_tagcloud' => false,
				'show_in_nav_menus' => true,
				'menu_position' => 5,
				'menu_icon' => 'dashicons-admin-users',
				'supports' => array('title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments', 'custom-fields')
			);
			register_post_type('customer', $args);
		}
		add_action('init', 'create_customer_type');

		// Customer Types
		function create_customer_taxonomies()
		{
			register_taxonomy(
				'customer_category',
				'customer',
				array(
					'labels' => array(
						'name' => 'Customer Types',
						'singular_name' => 'Customer Type'
					),
					'show_ui' => true,
					'show_tagcloud' => false,
					'hierarchical' => true,
					'show_in_nav_menus' => true
				)
			);
		}
		add_action('init', 'create_customer_taxonomies', 0);

		/***********************************************
		 * CUSTOM TYPE: TESTIMONIAL
		 ***********************************************/
		function create_testimonial_type()
		{
			$args = array(
				'labels' => array(
					'name' => 'Testimonials',
					'singular_name' => 'Testimonial'
				),
				'public' => true,
				'publicly_queryable' => true,
				'show_ui' => true,
				'show_in_menu' => true,
				'query_var' => true,
				'rewrite' => true,
				'capability_type' => 'post',
				'has_archive' => true,
				'hierarchical' => false,
				'show_tagcloud' => false,
				'show_in_nav_menus' => true,
				'menu_position' => 5,

				'menu_icon' => 'dashicons-admin-comments',
				'supports' => array('title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments', 'custom-fields')
			);
			register_post_type('testimonial', $args);
		}
		add_action('init', 'create_testimonial_type');

		// Testimonial Types
		function create_testimonial_taxonomies()
		{
			register_taxonomy(
				'testimonial_category',
				'testimonial',
				array(
					'labels' => array(
						'name' => 'Testimonial Types',
						'singular_name' => 'Testimonial Type'
					),
					'show_ui' => true,
					'show_tagcloud' => false,
					'hierarchical' => true,
					'show_in_nav_menus' => true
				)
			);
		}
		add_action('init', 'create_testimonial_taxonomies', 0);
	}
endif;
add_action('after_setup_theme', 'mozrest_setup');

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function mozrest_content_width()
{
	$GLOBALS['content_width'] = apply_filters('mozrest_content_width', 640);
}
add_action('after_setup_theme', 'mozrest_content_width', 0);

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function mozrest_widgets_init()
{
	register_sidebar(
		array(
			'name'          => esc_html__('Sidebar', 'mozrest'),
			'id'            => 'sidebar-1',
			'description'   => esc_html__('Add widgets here.', 'mozrest'),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action('widgets_init', 'mozrest_widgets_init');

/**
 * Enqueue scripts and styles.
 */
function mozrest_scripts()
{
	wp_enqueue_style('style', get_stylesheet_uri(), array(), _MOZREST_VERSION);
	wp_enqueue_style('bootstrap_css', get_template_directory_uri() . '/css/bootstrap.min.css', array(), _MOZREST_VERSION);
	wp_enqueue_style('font-awesome', get_template_directory_uri() . '/css/font-awesome.min.css', array(), _MOZREST_VERSION);
	wp_enqueue_style('mozresticons', get_template_directory_uri() . '/css/mozresticons.css', array(), _MOZREST_VERSION);
	wp_enqueue_style('splide_css', get_template_directory_uri() . '/css/splide.min.css', array(), _MOZREST_VERSION);
	wp_enqueue_style('splide_theme_css', get_template_directory_uri() . '/css/splide-default.min.css', array(), _MOZREST_VERSION);
	wp_enqueue_style('aos_css', get_template_directory_uri() . '/css/aos.css', array(), _MOZREST_VERSION);
	wp_enqueue_style('mozrest_css', get_template_directory_uri() . '/css/mozrest.css', array(), _MOZREST_VERSION);


	wp_enqueue_script('jquery', get_template_directory_uri() . '/js/jquery-3.6.0.min.js', array(), _MOZREST_VERSION, true);
	wp_enqueue_script('bootstrap_js', get_template_directory_uri() . '/js/bootstrap.bundle.min.js', array(), _MOZREST_VERSION, true);
	wp_enqueue_script('splide_js', get_template_directory_uri() . '/js/splide.min.js', array(), _MOZREST_VERSION, true);
	wp_enqueue_script('aos_js', get_template_directory_uri() . '/js/aos.js', array(), _MOZREST_VERSION, true);
	wp_enqueue_script('mozrest_js', get_template_directory_uri() . '/js/mozrest.min.js', array(), _MOZREST_VERSION, true);


	if (is_singular() && comments_open() && get_option('thread_comments')) {
		wp_enqueue_script('comment-reply');
	}
}
add_action('wp_enqueue_scripts', 'mozrest_scripts');


/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';


/**
 * Load Jetpack compatibility file.
 */
if (defined('JETPACK__VERSION')) {
	require get_template_directory() . '/inc/jetpack.php';
}

/**
 * Load WooCommerce compatibility file.
 */
if (class_exists('WooCommerce')) {
	require get_template_directory() . '/inc/woocommerce.php';
}