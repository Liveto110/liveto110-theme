<?php
/**
 * LiveTo110 Theme functions and definitions
 *
 * @package LiveTo110 Theme
 */
/**
 * Set the content width based on the theme's design and stylesheet.
 */
if ( ! isset( $content_width ) ) {
	$content_width = 640; /* pixels */
}

if ( ! function_exists( 'liveto110_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function liveto110_setup() {

	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on LiveTo110 Theme, use a find and replace
	 * to change 'liveto110' to the name of your theme in all the template files
	 */
	load_theme_textdomain( 'liveto110', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link http://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
	 */
	add_theme_support( 'post-thumbnails' );
	add_image_size( 'special-offer-homepage', 585, 9999);
	add_image_size( 'single-post', 750, 9999);
	add_image_size( 'page-masthead', 1265, 9999);
	add_image_size( 'freebie-signup', 125, 9999);
	add_image_size( 'full-width-slide', 1265, 500, true );
	add_image_size( 'square-thumbnail', 600, 600, true );
	add_image_size( 'videos-carousel-thumbnail', 120, 120, true );
	add_image_size( 'homeslide', 1265, 600, false );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => __( 'Primary Navigation', 'liveto110' ),
		'secondary' => __( 'Secondary Navigation', 'liveto110' ),
		'search-and-shop' => __( 'Search & Shop Navigation', 'liveto110' ),
		'learn' => __( 'Learn Navigation', 'liveto110' ),
		'support' => __( 'Support Navigation', 'liveto110' ),
		'social-links' => __( 'Social Links', 'liveto110' ),
	) );

	// Enable support for Post Formats.
	add_theme_support( 'post-formats', array( 
		'aside',
		'audio',
		'gallery',
		'image',
		'link',
		'quote',
		'status',
		'video'
	) );

	// Setup the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'liveto110_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );

	// Enable support for HTML5 markup.
	add_theme_support( 'html5', array(
		'comment-list',
		'search-form',
		'comment-form',
		'gallery',
	) );

	// WooCommerce
	add_theme_support( 'woocommerce' );
}
endif; // liveto110_setup
add_action( 'after_setup_theme', 'liveto110_setup' );

/**
 * Register widget area.
 *
 * @link http://codex.wordpress.org/Function_Reference/register_sidebar
 */
function liveto110_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Right Sidebar', 'liveto110' ),
		'id'            => 'sidebar-right',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<header class="widget-header"><h1 class="widget-title">',
		'after_title'   => '</h1></header><div class="widget-content">',
	) );
	register_sidebar( array(
		'name'          => __( 'Left Sidebar', 'liveto110' ),
		'id'            => 'sidebar-left',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<header class="widget-header"><h1 class="widget-title">',
		'after_title'   => '</h1></header><div class="widget-content">',
	) );
	register_sidebar( array(
		'name'          => __( 'shop Sidebar', 'liveto110' ),
		'id'            => 'sidebar-shop',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<header class="widget-header"><h1 class="widget-title">',
		'after_title'   => '</h1></header><div class="widget-content">',
	) );
	register_sidebar( array(
		'name' 			=> __( 'YouTube Videos', 'liveto110' ),
		'id' 			=> 'sidebar-youtube',
		'description' 	=> 'Add the YouTube Channel Gallery widget here.',
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h1 class="widget-title sr-only">',
		'after_title'   => '</h1><div class="widget-content">',
	));
}
add_action( 'widgets_init', 'liveto110_widgets_init' );

/**
 * Register Quicksand, Adobe Garamond Pro and Lato fonts
 *
 * @return string
 */
function liveto110_fonts_url() {
	$fonts_url = '';

	/* Translators: If there are characters in your language that are not
	 * supported by Quicksand, translate this to 'off'. Do not translate into your
	 * own language.
	 */
	$quicksand = _x( 'on', 'Quicksand font: on or off', 'liveto110' );

	/* Translators: If there are characters in your language that are not
	 * supported by Lato, translate this to 'off'. Do not translate into your
	 * own language.
	 */
	$lato = _x( 'on', 'Lato font: on or off', 'liveto110' );

	if ( 'off' !== $quicksand || 'off' !== $lato ) {
		$font_families = array();

		if ( 'off' !== $quicksand )
			$font_families[] = 'Quicksand:300,400,700';

		if ( 'off' !== $lato )
			$font_families[] = 'Lato:300,400,700,300italic,400italic,700italic';

		$query_args = array(
			'family' => urlencode( implode( '|', $font_families ) ),
			'subset' => urlencode( 'latin,latin-ext' ),
		);
		$fonts_url = add_query_arg( $query_args, "//fonts.googleapis.com/css" );
	}

	return $fonts_url;
}

/**
 * Enqueue scripts and styles.
 */
function liveto110_scripts() {
	// Add Quicksand and Lato fonts.
	wp_enqueue_style( 'liveto110-fonts', liveto110_fonts_url(), array(), null );
	// Add Gill Sans Light
	wp_enqueue_style( 'gill-sans-light', get_template_directory_uri() . '/fonts/gill-sans-light/styles.css', array(), '' );
	// Add Coneria Script font.
	wp_enqueue_style( 'coneria-script', get_template_directory_uri() . '/fonts/coneria-script/styles.css', array(), '' );	
	// Add FontAwesome font.
	wp_enqueue_style( 'fontawesome', get_template_directory_uri() . '/css/font-awesome/font-awesome.css', array(), '' );
	// The main stylesheet
	wp_enqueue_style( 'liveto110-style', get_template_directory_uri() . '/css/styles.css', array(), '' );

	wp_enqueue_script( 'liveto110-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20120206', true );

	wp_enqueue_script( 'liveto110-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20130115', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}

	wp_enqueue_script( 'bootstrap-script', get_template_directory_uri() . '/js/vendor/bootstrap.min.js', array( 'jquery' ), '', true );
    wp_enqueue_script( 'bootstrap-hover', get_template_directory_uri() . '/js/vendor/bootstrap-hover-dropdown.min.js', array( 'jquery' ), '', true );
	wp_enqueue_script( 'plugins-script', get_template_directory_uri() . '/js/plugins.js', array( 'bootstrap-script' ), '', true );
	wp_enqueue_script( 'liveto110-script', get_template_directory_uri() . '/js/main.js', array( 'plugins-script' ), '', true );
}
add_action( 'wp_enqueue_scripts', 'liveto110_scripts' );

/* Include ACF */
// include_once get_template_directory() . '/inc/plugins/advanced-custom-fields/acf.php';

/* TGM Plugin Activation Settings */
require_once get_template_directory() . '/inc/tgm-plugin-settings.php';

/* Include ACF */
// include_once get_template_directory() . '/inc/advanced-custom-fields/acf.php';

/* Add SMOF */
require_once('admin/index.php');

/**
 * Implement the Custom Header feature.
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
 * Custom Shortcodes.
 */
require get_template_directory() . '/inc/shortcodes.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';

/**
 * Load Custom Post Types.
 */
require get_template_directory() . '/inc/custom-post-types.php';

/**
 * Load Custom Fields.
 */
require get_template_directory() . '/inc/custom-fields.php';

// Register Custom Navigation Walker
require_once get_template_directory() . '/inc/wp_bootstrap_navwalker.php';