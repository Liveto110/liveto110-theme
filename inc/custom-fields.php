<?php
#-----------------------------------------------------------------#
# ACF Custom Fields
#-----------------------------------------------------------------#
if ( function_exists( "register_field_group" ) ) {
	// Service Post Meta
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
	// Testimonials Meta
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
	// Signup Page Masthead
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
				'key' => 'field_5367c7e2f632b',
				'label' => 'Central Image',
				'name' => 'central_image',
				'type' => 'image',
				'save_format' => 'url',
				'preview_size' => 'page-masthead',
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
	// Signup Page Welcome
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