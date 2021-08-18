<?php
/**
 * Fiberr functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Fiberr
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

if ( ! function_exists( 'fiberr_setup' ) ) :

	function fiberr_setup() {

		load_theme_textdomain( 'fiberr', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		add_theme_support( 'title-tag' );

		add_theme_support( 'post-thumbnails' );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus(
			array(
				'menu-1' => esc_html__( 'Primary', 'fiberr' ),
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

		// Set up the WordPress core custom background feature.
		add_theme_support(
			'custom-background',
			apply_filters(
				'fiberr_custom_background_args',
				array(
					'default-color' => 'ffffff',
					'default-image' => '',
				)
			)
		);

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo
		 */
		add_theme_support(
			'custom-logo',
			array(
				'height'      => 250,
				'width'       => 250,
				'flex-width'  => true,
				'flex-height' => true,
			)
		);
	}
endif;
add_action( 'after_setup_theme', 'fiberr_setup' );

/**
 * @global int $content_width
 */
function fiberr_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'fiberr_content_width', 640 );
}
add_action( 'after_setup_theme', 'fiberr_content_width', 0 );

/**
 * Register widget area.
*/

function fiberr_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'fiberr' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'fiberr' ),
			'before_widget' => '<section id="%1$s" class="mb-3 border border-danger pl-3 bg-light fiberr-widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h3 class="widget-title">',
			'after_title'   => '</h3>',
		)
	);
}
add_action( 'widgets_init', 'fiberr_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function fiberr_scripts() {
	wp_enqueue_style( 'fiberr-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_style_add_data( 'fiberr-style', 'rtl', 'replace' );
	
	// CSS 
	wp_enqueue_style( 'fontawesome', 'https://use.fontawesome.com/releases/v5.15.3/css/all.css', array(), _S_VERSION );
	wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.min.css', array(), _S_VERSION );
	wp_enqueue_style( 'fiberr-main', get_template_directory_uri() . '/assets/css/style.css', array(), _S_VERSION );

	// JS
	wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/assets/js/bootstrap.bundle.min.js', array( 'jquery' ), _S_VERSION, true );
	wp_enqueue_script( 'fiberr-main', get_template_directory_uri() . '/assets/js/main.js', array( 'jquery' ), _S_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'fiberr_scripts' );

/**
 * Implement Theme Option from customize API
 */
require get_template_directory() . '/inc/customizer.php';
require get_template_directory() . '/inc/template-tags.php';



