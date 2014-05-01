<?php
/**
 * Custom functions that act independently of the theme templates
 *
 * Eventually, some of the functionality here could be replaced by core features
 *
 * @package LiveTo110 Theme
 */

/**
 * Get our wp_nav_menu() fallback, wp_page_menu(), to show a home link.
 *
 * @param array $args Configuration arguments.
 * @return array
 */
function liveto110_page_menu_args( $args ) {
	$args['show_home'] = true;
	return $args;
}
add_filter( 'wp_page_menu_args', 'liveto110_page_menu_args' );

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function liveto110_body_classes( $classes ) {
	// Adds a class of group-blog to blogs with more than 1 published author.
	if ( is_multi_author() ) {
		$classes[] = 'group-blog';
	}

	return $classes;
}
add_filter( 'body_class', 'liveto110_body_classes' );

/**
 * Filters wp_title to print a neat <title> tag based on what is being viewed.
 *
 * @param string $title Default title text for current view.
 * @param string $sep Optional separator.
 * @return string The filtered title.
 */
function liveto110_wp_title( $title, $sep ) {
	if ( is_feed() ) {
		return $title;
	}
	
	global $page, $paged;

	// Add the blog name
	$title .= get_bloginfo( 'name', 'display' );

	// Add the blog description for the home/front page.
	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) ) {
		$title .= " $sep $site_description";
	}

	// Add a page number if necessary:
	if ( $paged >= 2 || $page >= 2 ) {
		$title .= " $sep " . sprintf( __( 'Page %s', 'liveto110' ), max( $paged, $page ) );
	}

	return $title;
}
add_filter( 'wp_title', 'liveto110_wp_title', 10, 2 );

/**
 * Sets the authordata global when viewing an author archive.
 *
 * This provides backwards compatibility with
 * http://core.trac.wordpress.org/changeset/25574
 *
 * It removes the need to call the_post() and rewind_posts() in an author
 * template to print information about the author.
 *
 * @global WP_Query $wp_query WordPress Query object.
 * @return void
 */
function liveto110_setup_author() {
	global $wp_query;

	if ( $wp_query->is_author() && isset( $wp_query->post ) ) {
		$GLOBALS['authordata'] = get_userdata( $wp_query->post->post_author );
	}
}
add_action( 'wp', 'liveto110_setup_author' );

/*===================================================================================
 * Custom Read More Link
 * =================================================================================*/
function new_excerpt_more( $more ) {
	return ' <a class="read-more-link" href="'. get_permalink( get_the_ID() ) . '"><i class="fa fa-angle-right"></i> ' . __('Read More', 'liveto110') . '</a>';
}
add_filter( 'excerpt_more', 'new_excerpt_more' );

/*===================================================================================
 * Custom Excerpt Length
 * =================================================================================*/
function custom_excerpt_length( $length ) {
	return 20;
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );

/*===================================================================================
 * Add Author Links
 * =================================================================================*/
function add_to_author_profile( $contactmethods ) {
	
	$contactmethods['facebook_profile'] = 'Facebook Profile URL';
	$contactmethods['twitter_profile'] = 'Twitter Profile URL';
	$contactmethods['pinterest_profile'] = 'Pinterest Profile URL';
	$contactmethods['youtube_profile'] = 'Youtube Profile URL';
	$contactmethods['google_profile'] = 'Google Profile URL';
	
	return $contactmethods;
}
add_filter( 'user_contactmethods', 'add_to_author_profile', 10, 1);

/*===================================================================================
 * Deregisater WP-Admin Styles
 * =================================================================================*/
add_action( 'wp_print_styles', 'my_deregister_styles', 100 ); 
function my_deregister_styles() {
	wp_deregister_style( 'wp-admin' );
}

/*===================================================================================
 * Woocommerce - Praveen
 * =================================================================================*/
remove_action( 'woocommerce_before_main_content', 'woocommerce_output_content_wrapper', 10);
remove_action( 'woocommerce_after_main_content', 'woocommerce_output_content_wrapper_end', 10);
add_action('woocommerce_before_main_content', 'my_theme_wrapper_start', 10);
add_action('woocommerce_after_main_content', 'my_theme_wrapper_end', 10);

function my_theme_wrapper_start() { ?>
	<div id="content" class="site-content">
		<div class="container">
			<div class="row">
				<div class="col-sm-8">
					<div id="primary" class="content-area">
						<main id="main" class="site-main" role="main">
<?php }

function my_theme_wrapper_end() { ?>
						</main><!-- #main -->
					</div><!-- #primary -->
				</div><!-- /.col-sm-8 -->

				<div class="hidden-phone col-sm-4">
					<?php get_sidebar('shop'); ?>
				</div><!-- /.hidden-phone .col-sm-4 -->
			</div><!-- /.row -->
		</div><!-- /.container -->
	</div><!-- /#content -->
<?php }

/*===================================================================================
 * Woocommerce - Ariful
 * =================================================================================*/
function woocommerce_output_related_products() {
	woocommerce_related_products(4,4); // Display 3 products in rows of 3
}
add_filter( 'add_to_cart_text', 'woo_custom_cart_button_text' );                        // < 2.1
add_filter( 'woocommerce_product_add_to_cart_text', 'woo_custom_cart_button_text' );    // 2.1 +
 
function woo_custom_cart_button_text() {
	return __( 'Buy now', 'woocommerce' );
}