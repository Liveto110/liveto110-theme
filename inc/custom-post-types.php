<?php
#-----------------------------------------------------------------#
# Testimonials
#-----------------------------------------------------------------#
function liveto110_testimonial_register() {
	$testimonial_labels = array(
		'name' => _x('Testimonials', 'taxonomy general name', 'liveto110'),
		'singular_name' => __('Testimonial', 'liveto110'),
		'search_items' => __('Search Testimonials', 'liveto110'),
		'all_items' => __('Testimonials', 'liveto110'),
		'parent_item' => __('Parent Testimonial', 'liveto110'),
		'edit_item' => __('Edit Testimonial', 'liveto110'),
		'update_item' => __('Update Testimonial', 'liveto110'),
		'add_new_item' => __('Add New Testimonial', 'liveto110')
	);

	$args = array(
		'labels' => $testimonial_labels,
		'rewrite' => array(
			'slug' => 'testimonial-post',
			'with_front' => false
		),
		'singular_label' => __('Testimonial', 'liveto110'),
		'public' => true,
		'publicly_queryable' => true,
		'show_ui' => true,
		'hierarchical' => false,
		'menu_icon' => get_template_directory_uri() . '/img/icons/icon-testimonials.png',
		'supports' => array('title', 'editor', 'thumbnail')
	);
	register_post_type('testimonial-post', $args);
}
add_action('init', 'liveto110_testimonial_register');

#-----------------------------------------------------------------#
# Service posts
#-----------------------------------------------------------------#
function liveto110_service_register() {
	$service_labels = array(
		'name' => _x('Service posts', 'taxonomy general name', 'liveto110'),
		'singular_name' => __('Service post', 'liveto110'),
		'search_items' => __('Search Service posts', 'liveto110'),
		'all_items' => __('Service posts', 'liveto110'),
		'parent_item' => __('Parent Service post', 'liveto110'),
		'edit_item' => __('Edit Service post', 'liveto110'),
		'update_item' => __('Update Service post', 'liveto110'),
		'add_new_item' => __('Add New Service post', 'liveto110')
	);

	$args = array(
		'labels' => $service_labels,
		'rewrite' => array('slug' => 'service-post', 'with_front' => false),
		'singular_label' => __('Service post', 'liveto110'),
		'public' => true,
		'publicly_queryable' => true,
		'show_ui' => true,
		'hierarchical' => false,
		'menu_icon' => get_template_directory_uri() . '/img/icons/icon-services.png',
		'supports' => array('title', 'editor', 'thumbnail')
	);
	register_post_type('service-post', $args);
}
add_action('init', 'liveto110_service_register');

#-----------------------------------------------------------------#
# Team Members
#-----------------------------------------------------------------#
function liveto110_team_register() {
	$team_labels = array(
		'name' => _x('Team Members', 'taxonomy general name', 'liveto110'),
		'singular_name' => __('Team member', 'liveto110'),
		'search_items' => __('Search Team Members', 'liveto110'),
		'all_items' => __('Team Members', 'liveto110'),
		'parent_item' => __('Parent Team Member', 'liveto110'),
		'edit_item' => __('Edit Team Member', 'liveto110'),
		'update_item' => __('Update Team Member', 'liveto110'),
		'add_new_item' => __('Add New Team Member', 'liveto110')
	);

	$args = array(
		'labels' => $team_labels,
		'rewrite' => array('slug' => 'team-post', 'with_front' => false),
		'singular_label' => __('Team Member', 'liveto110'),
		'public' => true,
		'publicly_queryable' => true,
		'show_ui' => true,
		'hierarchical' => false,
		'menu_icon' => get_template_directory_uri() . '/img/icons/icon-teammemder.png',
		'supports' => array('title', 'editor', 'thumbnail', 'excerpt')
	);
	register_post_type('team-post', $args);
}
add_action('init', 'liveto110_team_register');

#-----------------------------------------------------------------#
# Portfolio
#-----------------------------------------------------------------#
function liveto110_portfolio_register() {
	$portfolio_labels = array(
		'name' => _x('Portfolio', 'taxonomy general name', 'liveto110'),
		'singular_name' => __('Portfolio Item', 'liveto110'),
		'search_items' => __('Search Portfolio Items', 'liveto110'),
		'all_items' => __('Portfolio', 'liveto110'),
		'parent_item' => __('Parent Portfolio Item', 'liveto110'),
		'edit_item' => __('Edit Portfolio Item', 'liveto110'),
		'update_item' => __('Update Portfolio Item', 'liveto110'),
		'add_new_item' => __('Add New Portfolio Item', 'liveto110')
	);

	$args = array(
		'labels' => $portfolio_labels,
		'rewrite' => array('slug' => 'portfolio-post', 'with_front' => false),
		'singular_label' => __('Project', 'liveto110'),
		'public' => true,
		'publicly_queryable' => true,
		'show_ui' => true,
		'hierarchical' => false,
		'menu_icon' => get_template_directory_uri() . '/img/icons/icon-portfolio.png',
		'supports' => array('title', 'editor', 'thumbnail')
	);
	register_post_type('portfolio', $args);
}
add_action('init', 'liveto110_portfolio_register');

#-----------------------------------------------------------------#
# Taxonomies attached to Portfolio CPT
#-----------------------------------------------------------------#
$category_labels = array(
	'name' => _x('Project Categories', 'taxonomy general name', 'liveto110'),
	'singular_name' => __('Project Category', 'liveto110'),
	'search_items' => __('Search Project Categories', 'liveto110'),
	'all_items' => __('All Project Categories', 'liveto110'),
	'parent_item' => __('Parent Project Category', 'liveto110'),
	'edit_item' => __('Edit Project Category', 'liveto110'),
	'update_item' => __('Update Project Category', 'liveto110'),
	'add_new_item' => __('Add New Project Category', 'liveto110'),
	'menu_name' => __('Project Categories', 'liveto110')
);
register_taxonomy("project-type",
	array("portfolio"),
	array(
		"hierarchical" => true,
		'labels' => $category_labels,
		'show_ui' => true,
		'query_var' => true,
		'rewrite' => array('slug' => 'project-type')
	)
);

#-----------------------------------------------------------------#
# Portfolio Posts class
#-----------------------------------------------------------------#
add_filter('post_class', 'custom_taxonomy_post_class', 10, 3);
if (!function_exists('custom_taxonomy_post_class')) {
	function custom_taxonomy_post_class($classes, $class, $ID) {
		$taxonomy = 'project-type';
		$terms = get_the_terms((int)$ID, $taxonomy);

		if (!empty($terms)) {
			foreach ((array)$terms as $order => $term) {
				if (!in_array($term->slug, $classes)) {
					$classes[] = $term->slug;
				}
			}
		}
		return $classes;
	}
}

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
		'menu_icon' => get_template_directory_uri() . '/img/icons/icon-freebies.png',
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
# FAQ
#-----------------------------------------------------------------#
function liveto110_faq_register() {
	$faq_labels = array(
		'name' => _x('FAQ', 'taxonomy general name', 'liveto110'),
		'singular_name' => __('FAQ', 'liveto110'),
		'search_items' => __('Search FAQ', 'liveto110'),
		'all_items' => __('FAQ', 'liveto110'),
		'parent_item' => __('Parent FAQ', 'liveto110'),
		'edit_item' => __('Edit FAQ', 'liveto110'),
		'update_item' => __('Update FAQ', 'liveto110'),
		'add_new_item' => __('Add New FAQ', 'liveto110')
	);

	$args = array(
		'labels' => $faq_labels,
		'rewrite' => array('slug' => 'faq', 'with_front' => false),
		'singular_label' => __('FAQ', 'liveto110'),
		'public' => true,
		'publicly_queryable' => true,
		'show_ui' => true,
		'hierarchical' => false,
		'menu_icon' => get_template_directory_uri() . '/img/icons/icon-faq.png',
		'supports' => array('title', 'editor')
	);
	register_post_type('faq', $args);
}
add_action('init', 'liveto110_faq_register');
#-----------------------------------------------------------------#
# Taxonomies attached to FAQ CPT
#-----------------------------------------------------------------#
$category_labels = array(
	'name' => _x('FAQ Topics', 'taxonomy general name', 'liveto110'),
	'singular_name' => __('FAQ Topic', 'liveto110'),
	'search_items' => __('Search FAQ Topics', 'liveto110'),
	'all_items' => __('All FAQ Topics', 'liveto110'),
	'parent_item' => __('Parent FAQ Topic', 'liveto110'),
	'edit_item' => __('Edit FAQ Topic', 'liveto110'),
	'update_item' => __('Update FAQ Topic', 'liveto110'),
	'add_new_item' => __('Add New FAQ Topic', 'liveto110'),
	'menu_name' => __('FAQ Topics', 'liveto110')
);
register_taxonomy("faq-topic",
	array("faq"),
	array(
		"hierarchical" => true,
		'labels' => $category_labels,
		'show_ui' => true,
		'query_var' => true,
		'rewrite' => array('slug' => 'faq-topic')
	)
);

#-----------------------------------------------------------------#
# ACF Custom Fields
#-----------------------------------------------------------------#
if ( function_exists( "register_field_group" ) ) {
	register_field_group( array(
		'id' => 'acf_service-post-meta',
		'title' => 'Service Post Meta',
		'fields' => array (
			array (
				'key' => 'field_53580a1df276b',
				'label' => 'Icon Code',
				'name' => 'icon_code',
				'type' => 'text',
				'instructions' => 'Please visit http://fortawesome.github.io/Font-Awesome/icons/ to get the icon code. Eg. fa-globe',
				'required' => 0,
				'default_value' => 'fa-globe',
				'placeholder' => 'fa-globe',
				'prepend' => '',
				'append' => '',
				'formatting' => 'none',
				'maxlength' => '',
			),
			array (
				'key' => 'field_53569c497bf1d',
				'label' => 'Button Text',
				'name' => 'button_text',
				'type' => 'text',
				'instructions' => 'The text to show on the button.',
				'required' => 0,
				'default_value' => 'Button Text',
				'placeholder' => 'Button Text',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),
		),
		'location' => array (
			array (
				array (
					'param' => 'post_type',
					'operator' => '==',
					'value' => 'service-post',
					'order_no' => 0,
					'group_no' => 0,
				),
			),
		),
		'options' => array (
			'position' => 'normal',
			'layout' => 'no_box',
			'hide_on_screen' => array (
				0 => 'excerpt',
				1 => 'discussion',
				2 => 'comments',
				3 => 'author',
				4 => 'format',
				5 => 'categories',
				6 => 'tags',
				7 => 'send-trackbacks',
			),
		),
		'menu_order' => 0,
	));
	register_field_group(array (
		'id' => 'acf_testimonials-meta',
		'title' => 'Testimonials Meta',
		'fields' => array (
			array (
				'key' => 'field_535ebbce960e4',
				'label' => 'Name',
				'name' => 'name',
				'type' => 'text',
				'instructions' => 'Testimonial author\'s name.',
				'required' => 1,
				'default_value' => '',
				'placeholder' => 'John Doe',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),
		),
		'location' => array (
			array (
				array (
					'param' => 'post_type',
					'operator' => '==',
					'value' => 'testimonial-post',
					'order_no' => 0,
					'group_no' => 0,
				),
			),
		),
		'options' => array (
			'position' => 'normal',
			'layout' => 'no_box',
			'hide_on_screen' => array (
				0 => 'excerpt',
				1 => 'custom_fields',
				2 => 'discussion',
				3 => 'comments',
				4 => 'revisions',
				5 => 'author',
				6 => 'format',
				7 => 'categories',
				8 => 'tags',
				9 => 'send-trackbacks',
			),
		),
		'menu_order' => 0,
	));
register_field_group(array (
		'id' => 'acf_signup-page-masthead',
		'title' => 'Signup Page Masthead',
		'fields' => array (
			array (
				'key' => 'field_535fc6b9e4f41',
				'label' => 'Title',
				'name' => 'title',
				'type' => 'text',
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),
			array (
				'key' => 'field_535fc6e8e4f42',
				'label' => 'Subtitle',
				'name' => 'subtitle',
				'type' => 'text',
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),
			array (
				'key' => 'field_535fc716e4f43',
				'label' => 'Sub-Subtitle',
				'name' => 'sub-subtitle',
				'type' => 'text',
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),
			array (
				'key' => 'field_535fc739e4f44',
				'label' => 'Short Description',
				'name' => 'short_description',
				'type' => 'wysiwyg',
				'default_value' => '',
				'toolbar' => 'basic',
				'media_upload' => 'no',
			),
			array (
				'key' => 'field_535fc772e4f45',
				'label' => 'Left Image',
				'name' => 'left_image',
				'type' => 'image',
				'save_format' => 'url',
				'preview_size' => 'thumbnail',
				'library' => 'all',
			),
			array (
				'key' => 'field_535fc79de4f46',
				'label' => 'Right Image',
				'name' => 'right_image',
				'type' => 'image',
				'save_format' => 'url',
				'preview_size' => 'thumbnail',
				'library' => 'all',
			),
		),
		'location' => array (
			array (
				array (
					'param' => 'page_template',
					'operator' => '==',
					'value' => 'page-templates/sign-me-up.php',
					'order_no' => 0,
					'group_no' => 0,
				),
			),
		),
		'options' => array (
			'position' => 'acf_after_title',
			'layout' => 'default',
			'hide_on_screen' => array (
				0 => 'the_content',
				1 => 'excerpt',
				2 => 'custom_fields',
				3 => 'discussion',
				4 => 'comments',
				5 => 'revisions',
				6 => 'author',
				7 => 'format',
				8 => 'categories',
				9 => 'tags',
				10 => 'send-trackbacks',
			),
		),
		'menu_order' => 0,
	));
	register_field_group(array (
		'id' => 'acf_signup-page-welcome',
		'title' => 'Signup Page Welcome',
		'fields' => array (
			array (
				'key' => 'field_535fc97667022',
				'label' => 'Welcome Text',
				'name' => 'welcome_text',
				'type' => 'wysiwyg',
				'default_value' => '',
				'toolbar' => 'full',
				'media_upload' => 'no',
			),
		),
		'location' => array (
			array (
				array (
					'param' => 'page_template',
					'operator' => '==',
					'value' => 'page-templates/sign-me-up.php',
					'order_no' => 0,
					'group_no' => 0,
				),
			),
		),
		'options' => array (
			'position' => 'normal',
			'layout' => 'default',
			'hide_on_screen' => array (
				0 => 'the_content',
				1 => 'excerpt',
				2 => 'custom_fields',
				3 => 'discussion',
				4 => 'comments',
				5 => 'revisions',
				6 => 'author',
				7 => 'format',
				8 => 'categories',
				9 => 'tags',
				10 => 'send-trackbacks',
			),
		),
		'menu_order' => 0,
	));
}