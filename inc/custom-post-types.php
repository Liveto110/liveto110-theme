<?php
#-----------------------------------------------------------------#
# Homepage Slides
#-----------------------------------------------------------------#
function liveto110_homeslide_register() {
	$homeslide_labels = array(
		'name' => _x('HomeSlides', 'taxonomy general name', 'liveto110'),
		'singular_name' => __('HomeSlide', 'liveto110'),
		'search_items' => __('Search HomeSlides', 'liveto110'),
		'all_items' => __('HomeSlides', 'liveto110'),
		'parent_item' => __('Parent HomeSlide', 'liveto110'),
		'edit_item' => __('Edit HomeSlide', 'liveto110'),
		'update_item' => __('Update HomeSlide', 'liveto110'),
		'add_new_item' => __('Add New HomeSlide', 'liveto110')
	);

	$args = array(
		'labels' => $homeslide_labels,
		'rewrite' => array(
			'slug' => 'homeslide',
			'with_front' => false
		),
		'singular_label' => __('HomeSlide', 'liveto110'),
		'public' => true,
		'publicly_queryable' => true,
		'show_ui' => true,
		'hierarchical' => false,
		'menu_icon' => get_template_directory_uri() . '/img/icons/icon-homeslide.png',
		'supports' => array('title', 'editor', 'thumbnail')
	);
	register_post_type('homeslide', $args);
}
add_action('init', 'liveto110_homeslide_register');

#-----------------------------------------------------------------#
# Podcasts
#-----------------------------------------------------------------#
function liveto110_podcasts_register() {
	$podcast_labels = array(
		'name' => _x('Podcasts', 'taxonomy general name', 'liveto110'),
		'singular_name' => __('Podcast', 'liveto110'),
		'search_items' => __('Search Podcasts', 'liveto110'),
		'all_items' => __('Podcasts', 'liveto110'),
		'parent_item' => __('Parent Podcast', 'liveto110'),
		'edit_item' => __('Edit Podcast', 'liveto110'),
		'update_item' => __('Update Podcast', 'liveto110'),
		'add_new_item' => __('Add New Podcast', 'liveto110')
	);

	$args = array(
		'labels' => $podcast_labels,
		'rewrite' => array('slug' => 'podcast-post', 'with_front' => false),
		'singular_label' => __('Podcast', 'liveto110'),
		'public' => true,
		'publicly_queryable' => true,
		'show_ui' => true,
		'hierarchical' => false,
		'menu_icon' => get_template_directory_uri() . '/img/icons/icon-podcast.png',
		'supports' => array('title', 'editor', 'thumbnail' )
	);
	register_post_type('podcast-post', $args);
}
add_action('init', 'liveto110_podcasts_register');

#-----------------------------------------------------------------#
# Freebies
#-----------------------------------------------------------------#
function liveto110_freebies_register() {
	$freebie_labels = array(
		'name' => _x('Freebies', 'taxonomy general name', 'liveto110'),
		'singular_name' => __('Freebie', 'liveto110'),
		'search_items' => __('Search Freebies', 'liveto110'),
		'all_items' => __('Freebies', 'liveto110'),
		'parent_item' => __('Parent Freebie', 'liveto110'),
		'edit_item' => __('Edit Freebie', 'liveto110'),
		'update_item' => __('Update Freebie', 'liveto110'),
		'add_new_item' => __('Add New Freebie', 'liveto110')
	);

	$args = array(
		'labels' => $freebie_labels,
		'rewrite' => array('slug' => 'freebies', 'with_front' => false),
		'singular_label' => __('Freebie', 'liveto110'),
		'public' => true,
		'publicly_queryable' => true,
		'show_ui' => true,
		'hierarchical' => false,
		'menu_icon' => get_template_directory_uri() . '/img/icons/icon-freebie.png',
		'supports' => array('title', 'editor', 'thumbnail')
	);
	register_post_type('freebies', $args);
}
add_action('init', 'liveto110_freebies_register');
#-----------------------------------------------------------------#
# Taxonomies attached to Freebies CPT
#-----------------------------------------------------------------#
$category_labels = array(
	'name' => _x('Freebie Types', 'taxonomy general name', 'liveto110'),
	'singular_name' => __('Freebie Type', 'liveto110'),
	'search_items' => __('Search Freebie Types', 'liveto110'),
	'all_items' => __('All Freebie Types', 'liveto110'),
	'parent_item' => __('Parent Freebie Type', 'liveto110'),
	'edit_item' => __('Edit Freebie Type', 'liveto110'),
	'update_item' => __('Update Freebie Type', 'liveto110'),
	'add_new_item' => __('Add New Freebie Type', 'liveto110'),
	'menu_name' => __('Freebie Types', 'liveto110')
);
register_taxonomy("freebie-type",
	array("freebies"),
	array(
		"hierarchical" => true,
		'labels' => $category_labels,
		'show_ui' => true,
		'query_var' => true,
		'rewrite' => array('slug' => 'freebie-type')
	)
);

#-----------------------------------------------------------------#
# Videos
#-----------------------------------------------------------------#
function liveto110_videos_register() {
	$videos_labels = array(
		'name' => _x('Videos', 'taxonomy general name', 'liveto110'),
		'singular_name' => __('Video', 'liveto110'),
		'search_items' => __('Search Videos', 'liveto110'),
		'all_items' => __('Videos', 'liveto110'),
		'parent_item' => __('Parent Video', 'liveto110'),
		'edit_item' => __('Edit Video', 'liveto110'),
		'update_item' => __('Update Video', 'liveto110'),
		'add_new_item' => __('Add New Video', 'liveto110')
	);

	$args = array(
		'labels' => $videos_labels,
		'rewrite' => array('slug' => 'video', 'with_front' => false),
		'singular_label' => __('Video', 'liveto110'),
		'public' => true,
		'publicly_queryable' => true,
		'show_ui' => true,
		'hierarchical' => false,
		'menu_icon' => get_template_directory_uri() . '/img/icons/icon-video.png',
		'supports' => array('title', 'editor', 'thumbnail')
	);
	register_post_type('video', $args);
}
add_action('init', 'liveto110_videos_register');