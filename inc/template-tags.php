<?php
/**
 * Custom template tags for this theme.
 *
 * Eventually, some of the functionality here could be replaced by core features.
 *
 * @package LiveTo110 Theme
 */

if ( ! function_exists( 'liveto110_paging_nav' ) ) :
/**
 * Display navigation to next/previous set of posts when applicable.
 */
function liveto110_paging_nav() {
	// Don't print empty markup if there's only one page.
	if ( $GLOBALS['wp_query']->max_num_pages < 2 ) {
		return;
	}
	?>
	<nav class="navigation paging-navigation" role="navigation">
		<h1 class="screen-reader-text sr-only"><?php _e( 'Posts navigation', 'liveto110' ); ?></h1>
		<div class="nav-links">
			<ul class="pager">
				<?php if ( get_next_posts_link() ) : ?>
					<li class="previous"><?php next_posts_link( __( '<span class="meta-nav">&larr;</span> Older posts', 'liveto110' ) ); ?></li>
				<?php endif; ?>

				<?php if ( get_previous_posts_link() ) : ?>
					<li class="next"><?php previous_posts_link( __( 'Newer posts <span class="meta-nav">&rarr;</span>', 'liveto110' ) ); ?></li>
				<?php endif; ?>
			</ul><!-- /.pager -->
		</div><!-- .nav-links -->
	</nav><!-- .navigation -->
	<?php
}
endif;

if ( ! function_exists( 'liveto110_post_nav' ) ) :
/**
 * Display navigation to next/previous post when applicable.
 */
function liveto110_post_nav() {
	// Don't print empty markup if there's nowhere to navigate.
	$previous = ( is_attachment() ) ? get_post( get_post()->post_parent ) : get_adjacent_post( false, '', true );
	$next     = get_adjacent_post( false, '', false );

	if ( ! $next && ! $previous ) {
		return;
	}
	?>
	<nav class="navigation post-navigation" role="navigation">
		<h1 class="screen-reader-text sr-only"><?php _e( 'Post navigation', 'liveto110' ); ?></h1>
		<div class="nav-links">
			<ul class="pager">
				<?php
					previous_post_link( '<li class="previous">%link</li>', _x( '<span class="meta-nav">&larr;</span> %title', 'Previous post link', 'liveto110' ) );
					next_post_link(     '<li class="next">%link</li>',     _x( '%title <span class="meta-nav">&rarr;</span>', 'Next post link',     'liveto110' ) );
				?>
			</ul><!-- /.pager -->
		</div><!-- .nav-links -->
	</nav><!-- .navigation -->
	<?php
}
endif;

if ( ! function_exists( 'liveto110_posted_on' ) ) :
/**
 * Prints HTML with meta information for the current post-date/time and author.
 */
function liveto110_posted_on() {
	if ( is_sticky() && is_home() && ! is_paged() ) {
		echo '<span class="featured-post">' . __( 'Sticky', 'liveto110' ) . '</span>';
	}

	// Set up and print post meta information.
	printf( '<span class="entry-date"><a href="%1$s" rel="bookmark"><time class="entry-date" datetime="%2$s">%3$s</time></a></span> ',
		esc_url( get_permalink() ),
		esc_attr( get_the_date( 'c' ) ),
		esc_html( get_the_date() )
	);
}
endif;

/**
 * Returns true if a blog has more than 1 category.
 *
 * @return bool
 */
function liveto110_categorized_blog() {
	if ( false === ( $all_the_cool_cats = get_transient( 'liveto110_categories' ) ) ) {
		// Create an array of all the categories that are attached to posts.
		$all_the_cool_cats = get_categories( array(
			'fields'     => 'ids',
			'hide_empty' => 1,

			// We only need to know if there is more than one category.
			'number'     => 2,
		) );

		// Count the number of categories that are attached to the posts.
		$all_the_cool_cats = count( $all_the_cool_cats );

		set_transient( 'liveto110_categories', $all_the_cool_cats );
	}

	if ( $all_the_cool_cats > 1 ) {
		// This blog has more than 1 category so liveto110_categorized_blog should return true.
		return true;
	} else {
		// This blog has only 1 category so liveto110_categorized_blog should return false.
		return false;
	}
}

/**
 * Flush out the transients used in liveto110_categorized_blog.
 */
function liveto110_category_transient_flusher() {
	// Like, beat it. Dig?
	delete_transient( 'liveto110_categories' );
}
add_action( 'edit_category', 'liveto110_category_transient_flusher' );
add_action( 'save_post',     'liveto110_category_transient_flusher' );

/**
 * Save SMOF Option
 */
function save_smof_option() {
	global $of_options, $options_machine, $smof_data, $smof_details;

	if( !defined('ADMIN_PATH') )
		define( 'ADMIN_PATH', get_template_directory() . '/admin/' );

	if( !defined('ADMIN_DIR') )
		define( 'ADMIN_DIR', get_template_directory_uri() . '/admin/' );

	require_once ( ADMIN_PATH . 'functions/functions.load.php' );
	require_once ( ADMIN_PATH . 'classes/class.options_machine.php' );

	$options_machine = new Options_Machine($of_options);

	$defaults = $options_machine->Defaults;

	return $defaults;
}