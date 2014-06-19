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
				'type' => 'textarea',
				'default_value' => '',
				'placeholder' => '',
				'maxlength' => '',
				'rows' => '',
				'formatting' => 'html',
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
			),
		),
		'menu_order' => 0,
	));
	// Signup Page Sections
	register_field_group(array (
		'id' => 'acf_page-sections',
		'title' => 'Page Sections',
		'fields' => array (			
			// How It Works Section
			array (
				'key' => 'field_53655fcb25cc9',
				'label' => 'How It Works',
				'name' => '',
				'type' => 'tab',
			),
			array (
				'key' => 'field_53655857b05a9',
				'label' => 'How It Works',
				'name' => 'how_it_works',
				'type' => 'flexible_content',
				'layouts' => array (
					array (
						'label' => 'Nav Link Text',
						'name' => 'how_it_works_nav_link_text',
						'display' => 'row',
						'min' => '',
						'max' => 1,
						'sub_fields' => array (
							array (
								'key' => 'field_53655a080f4a5',
								'label' => 'Link Text',
								'name' => 'how_it_works_link_text',
								'type' => 'text',
								'column_width' => '',
								'default_value' => 'How it works',
								'placeholder' => '',
								'prepend' => '',
								'append' => '',
								'formatting' => 'none',
								'maxlength' => '',
							),
						),
					),
					array (
						'label' => 'Intro',
						'name' => 'how_it_works_intro',
						'display' => 'row',
						'min' => '',
						'max' => 1,
						'sub_fields' => array (
							array (
								'key' => 'field_53655ab8533ca',
								'label' => 'Intro Title',
								'name' => 'how_it_works_intro_title',
								'type' => 'text',
								'column_width' => '',
								'default_value' => 'Intro Title',
								'placeholder' => '',
								'prepend' => '',
								'append' => '',
								'formatting' => 'none',
								'maxlength' => '',
							),
							array (
								'key' => 'field_53655b06533cb',
								'label' => 'Left Content',
								'name' => 'how_it_works_intro_left_content',
								'type' => 'wysiwyg',
								'column_width' => '',
								'default_value' => 'Intro left side content...',
								'toolbar' => 'full',
								'media_upload' => 'no',
							),
							array (
								'key' => 'field_53655b41533cc',
								'label' => 'Right Content',
								'name' => 'how_it_works_intro_right_content',
								'type' => 'wysiwyg',
								'column_width' => '',
								'default_value' => 'Intro right side content...',
								'toolbar' => 'full',
								'media_upload' => 'no',
							),
						),
					),
					array (
						'label' => 'Video',
						'name' => 'how_it_works_intro_video',
						'display' => 'row',
						'min' => '',
						'max' => 1,
						'sub_fields' => array (
							array (
								'key' => 'field_53655b8f064d7',
								'label' => 'Video URL ID',
								'name' => 'how_it_works_intro_video_url_id',
								'type' => 'text',
								'instructions' => 'The youtube url will have an id at the end after the "youtube.com/watch?v="',
								'column_width' => '',
								'default_value' => 'Bp6Oo4wAsRw',
								'placeholder' => '',
								'prepend' => 'https://www.youtube.com/watch?v=',
								'append' => '',
								'formatting' => 'none',
								'maxlength' => '',
							),
						),
					),
					array (
						'label' => 'Section Title',
						'name' => 'how_it_works_section_title',
						'display' => 'row',
						'min' => '',
						'max' => 1,
						'sub_fields' => array (
							array (
								'key' => 'field_53655c9cb28c2',
								'label' => 'Title Text',
								'name' => 'how_it_works_title_text',
								'type' => 'text',
								'column_width' => '',
								'default_value' => 'How nutritional balancing works',
								'placeholder' => '',
								'prepend' => '',
								'append' => '',
								'formatting' => 'none',
								'maxlength' => '',
							),
						),
					),
					array (
						'label' => 'Section Content',
						'name' => 'how_it_works_section_content',
						'display' => 'row',
						'min' => '',
						'max' => 1,
						'sub_fields' => array (
							array (
								'key' => 'field_53655d698f43b',
								'label' => 'Left Col Content',
								'name' => 'how_it_works_left_col_content',
								'type' => 'textarea',
								'column_width' => '',
								'default_value' => '',
								'placeholder' => '',
								'maxlength' => '',
								'rows' => '',
								'formatting' => 'html',
							),
							array (
								'key' => 'field_53655d978f43c',
								'label' => 'Right Col Content',
								'name' => 'how_it_works_right_col_content',
								'type' => 'textarea',
								'column_width' => '',
								'default_value' => '',
								'placeholder' => '',
								'maxlength' => '',
								'rows' => '',
								'formatting' => 'html',
							),
							array (
								'key' => 'field_53655da98f43d',
								'label' => 'Full Width Content',
								'name' => 'how_it_works_full_width_content',
								'type' => 'textarea',
								'column_width' => '',
								'default_value' => '',
								'placeholder' => '',
								'maxlength' => '',
								'rows' => '',
								'formatting' => 'html',
							),
						),
					),
					array (
						'label' => 'Section Footer',
						'name' => 'how_it_works_section_footer',
						'display' => 'row',
						'min' => '',
						'max' => 1,
						'sub_fields' => array (
							array (
								'key' => 'field_53655e49ca155',
								'label' => 'Footer Title',
								'name' => 'how_it_works_footer_title',
								'type' => 'text',
								'column_width' => '',
								'default_value' => '',
								'placeholder' => '',
								'prepend' => '',
								'append' => '',
								'formatting' => 'none',
								'maxlength' => '',
							),
							array (
								'key' => 'field_53655eacca156',
								'label' => 'Aside Title',
								'name' => 'how_it_works_aside_title',
								'type' => 'text',
								'column_width' => '',
								'default_value' => '',
								'placeholder' => '',
								'prepend' => '',
								'append' => '',
								'formatting' => 'none',
								'maxlength' => '',
							),
							array (
								'key' => 'field_53655f23ca157',
								'label' => 'Aside Image',
								'name' => 'how_it_works_aside_image',
								'type' => 'image',
								'column_width' => '',
								'save_format' => 'url',
								'preview_size' => 'thumbnail',
								'library' => 'all',
							),
							array (
								'key' => 'field_53655f44ca158',
								'label' => 'Aside Content',
								'name' => 'how_it_works_aside_content',
								'type' => 'wysiwyg',
								'column_width' => '',
								'default_value' => '',
								'toolbar' => 'full',
								'media_upload' => 'no',
							),
						),
					),
				),
				'button_label' => 'Add Block',
				'min' => '',
				'max' => '',
			),
			// Core Components Section
			array (
				'key' => 'field_53650f47c2cc3',
				'label' => 'Core Components',
				'name' => '',
				'type' => 'tab',
			),
			array (
				'key' => 'field_5365275996190',
				'label' => 'Core Components',
				'name' => 'core_components',
				'type' => 'flexible_content',
				'layouts' => array (
					array (
						'label' => 'Nav Link Text',
						'name' => 'core_components_nav_link_text',
						'display' => 'row',
						'min' => '',
						'max' => 1,
						'sub_fields' => array (
							array (
								'key' => 'field_536527a196191',
								'label' => 'Link Text',
								'name' => 'core_components_link_text',
								'type' => 'text',
								'column_width' => '',
								'default_value' => 'Core Components',
								'placeholder' => 'Nav Link Text',
								'prepend' => '',
								'append' => '',
								'formatting' => 'none',
								'maxlength' => '',
							),
						),
					),
					array (
						'label' => 'Section Title',
						'name' => 'core_components_section_title',
						'display' => 'row',
						'min' => '',
						'max' => 1,
						'sub_fields' => array (
							array (
								'key' => 'field_5365282996193',
								'label' => 'Title Text',
								'name' => 'core_components_title_text',
								'type' => 'text',
								'column_width' => '',
								'default_value' => 'Components of nutritional balancing',
								'placeholder' => 'Title Text',
								'prepend' => '',
								'append' => '',
								'formatting' => 'none',
								'maxlength' => '',
							),
						),
					),
					array (
						'label' => 'Section Content',
						'name' => 'core_components_section_content',
						'display' => 'row',
						'min' => '',
						'max' => 1,
						'sub_fields' => array (
							array (
								'key' => 'field_536901325a079',
								'label' => 'Blurb',
								'name' => 'core_components_blurb',
								'type' => 'repeater',
								'column_width' => '',
								'sub_fields' => array (
									array (
										'key' => 'field_536901585a07a',
										'label' => 'Blurb Icon',
										'name' => 'core_components_blurb_icon',
										'type' => 'text',
										'column_width' => '',
										'default_value' => 'leaf',
										'placeholder' => 'leaf',
										'prepend' => 'fa-',
										'append' => '',
										'formatting' => 'none',
										'maxlength' => '',
									),
									array (
										'key' => 'field_5369017b5a07b',
										'label' => 'Blurb Title',
										'name' => 'core_components_blurb_title',
										'type' => 'text',
										'column_width' => '',
										'default_value' => 'Blurb Title',
										'placeholder' => 'Blurb Title',
										'prepend' => '',
										'append' => '',
										'formatting' => 'none',
										'maxlength' => '',
									),
									array (
										'key' => 'field_536901995a07c',
										'label' => 'Blurb Content',
										'name' => 'core_components_blurb_content',
										'type' => 'textarea',
										'column_width' => '',
										'default_value' => '',
										'placeholder' => '',
										'maxlength' => '',
										'rows' => '',
										'formatting' => 'br',
									),
								),
								'row_min' => '',
								'row_limit' => 4,
								'layout' => 'row',
								'button_label' => 'Add Blurb',
							),
						),
					),
					array (
						'label' => 'Section Footer',
						'name' => 'core_components_section_footer',
						'display' => 'row',
						'min' => '',
						'max' => 1,
						'sub_fields' => array (
							array (
								'key' => 'field_536905e62bc53',
								'label' => 'Pricing Table',
								'name' => 'core_components_section_footer_pricing_table',
								'type' => 'relationship',
								'column_width' => '',
								'return_format' => 'id',
								'post_type' => array (
									0 => 'product',
								),
								'taxonomy' => array (
									0 => 'product_cat:1438',
								),
								'filters' => array (
								),
								'result_elements' => array (
									0 => 'featured_image',
									1 => 'post_title',
								),
								'max' => 1,
							),
							array (
								'key' => 'field_53692e72a3e90',
								'label' => 'Title Text',
								'name' => 'core_components_section_footer_title_text',
								'type' => 'text',
								'column_width' => '',
								'default_value' => 'Get Started!',
								'placeholder' => 'Title Text',
								'prepend' => '',
								'append' => '',
								'formatting' => 'none',
								'maxlength' => '',
							),
							array (
								'key' => 'field_53692ea6a3e91',
								'label' => 'Sub-Title Text',
								'name' => 'core_components_section_footer_sub_title_text',
								'type' => 'text',
								'column_width' => '',
								'default_value' => 'What you get!',
								'placeholder' => 'Sub-Title Text',
								'prepend' => '',
								'append' => '',
								'formatting' => 'none',
								'maxlength' => '',
							),
							array (
								'key' => 'field_53692ec7a3e92',
								'label' => 'Footer Content',
								'name' => 'core_components_section_footer_footer_content',
								'type' => 'wysiwyg',
								'column_width' => '',
								'default_value' => '',
								'toolbar' => 'full',
								'media_upload' => 'no',
							),
						),
					),
				),
				'button_label' => 'Add Block',
				'min' => '',
				'max' => '',
			),
			// Learn Section
			array (
				'key' => 'field_536671a2904fd',
				'label' => 'Learn',
				'name' => '',
				'type' => 'tab',
			),
			array (
				'key' => 'field_537181a7f7e54',
				'label' => 'Learn',
				'name' => 'learn',
				'type' => 'flexible_content',
				'layouts' => array (
					array (
						'label' => 'Nav Link Text',
						'name' => 'learn_nav_link_text',
						'display' => 'row',
						'min' => '',
						'max' => 1,
						'sub_fields' => array (
							array (
								'key' => 'field_537181a7f7e55',
								'label' => 'Link Text',
								'name' => 'learn_link_text',
								'type' => 'text',
								'column_width' => '',
								'default_value' => 'Learn',
								'placeholder' => 'Nav Link Text',
								'prepend' => '',
								'append' => '',
								'formatting' => 'none',
								'maxlength' => '',
							),
						),
					),
					array (
						'label' => 'Section Title',
						'name' => 'learn_section_title',
						'display' => 'row',
						'min' => '',
						'max' => 1,
						'sub_fields' => array (
							array (
								'key' => 'field_537181a7f7e56',
								'label' => 'Title Text',
								'name' => 'learn_title_text',
								'type' => 'text',
								'column_width' => '',
								'default_value' => 'Learn about how nutritional balancing works',
								'placeholder' => 'Title Text',
								'prepend' => '',
								'append' => '',
								'formatting' => 'none',
								'maxlength' => '',
							),
						),
					),
					array (
						'label' => 'Left Content',
						'name' => 'learn_left_content',
						'display' => 'row',
						'min' => '',
						'max' => 1,
						'sub_fields' => array (
							array (
								'key' => 'field_5371e1b5b5deb',
								'label' => 'Left Section Title',
								'name' => 'learn_left_section_title',
								'type' => 'text',
								'column_width' => '',
								'default_value' => 'Articles',
								'placeholder' => 'Left Section Title',
								'prepend' => '',
								'append' => '',
								'formatting' => 'none',
								'maxlength' => '',
							),
							array (
								'key' => 'field_5371eafd14b09',
								'label' => 'Left Items',
								'name' => 'learn_left_items',
								'type' => 'repeater',
								'column_width' => '',
								'sub_fields' => array (
									array (
										'key' => 'field_5371ebca13d93',
										'label' => 'Item Title',
										'name' => 'learn_left_item_title',
										'type' => 'text',
										'column_width' => '',
										'default_value' => 'Item Title',
										'placeholder' => 'Item Title',
										'prepend' => '',
										'append' => '',
										'formatting' => 'none',
										'maxlength' => '',
									),
									array (
										'key' => 'field_5371ebf813d94',
										'label' => 'Item URL',
										'name' => 'learn_left_item_url',
										'type' => 'text',
										'column_width' => '',
										'default_value' => '#',
										'placeholder' => 'http://www.website.com/',
										'prepend' => '',
										'append' => '',
										'formatting' => 'none',
										'maxlength' => '',
									),
								),
								'row_min' => '',
								'row_limit' => '',
								'layout' => 'table',
								'button_label' => 'Add Item',
							),
						),
					),
					array (
						'label' => 'Right Content',
						'name' => 'learn_right_content',
						'display' => 'row',
						'min' => '',
						'max' => 1,
						'sub_fields' => array (
							array (
								'key' => 'field_5371e2bcc8117',
								'label' => 'Right Section Title',
								'name' => 'learn_right_section_title',
								'type' => 'text',
								'column_width' => '',
								'default_value' => 'Podcasts',
								'placeholder' => 'Right Section Title',
								'prepend' => '',
								'append' => '',
								'formatting' => 'none',
								'maxlength' => '',
							),
							array (
								'key' => 'field_5371eb7e180db',
								'label' => 'Right Items',
								'name' => 'learn_right_items',
								'type' => 'repeater',
								'column_width' => '',
								'sub_fields' => array (
									array (
										'key' => 'field_5371ec6a05458',
										'label' => 'Item Title',
										'name' => 'learn_right_item_title',
										'type' => 'text',
										'column_width' => '',
										'default_value' => 'Item Title',
										'placeholder' => 'Item Title',
										'prepend' => '',
										'append' => '',
										'formatting' => 'none',
										'maxlength' => '',
									),
									array (
										'key' => 'field_5371ec8805459',
										'label' => 'Item URL',
										'name' => 'learn_right_item_url',
										'type' => 'text',
										'column_width' => '',
										'default_value' => '#',
										'formatting' => 'none',
										'maxlength' => '',
										'placeholder' => '',
										'prepend' => '',
										'append' => '',
									),
								),
								'row_min' => 0,
								'row_limit' => 0,
								'layout' => 'table',
								'button_label' => 'Add Row',
							),
						),
					),
					array (
						'label' => 'Section Footer',
						'name' => 'learn_section_footer',
						'display' => 'row',
						'min' => '',
						'max' => 1,
						'sub_fields' => array (
							array (
								'key' => 'field_537181a7f7e54_learn_section_footer_title',
								'label' => 'Footer Title',
								'name' => 'learn_section_footer_title',
								'type' => 'text',
								'column_width' => '',
								'default_value' => 'Dr. Lawrence Wilson\'s Website',
								'placeholder' => 'Footer Title',
								'prepend' => '',
								'append' => '',
								'formatting' => 'none',
								'maxlength' => '',
							),
							array (
								'key' => 'field_537181a7f7e54_learn_section_footer_content',
								'label' => 'Footer Content',
								'name' => 'learn_section_footer_content',
								'type' => 'textarea',
								'column_width' => '',
								'default_value' => '',
								'placeholder' => '',
								'maxlength' => '',
								'rows' => '',
								'formatting' => 'html',
							),
						),
					),
				),
				'min' => '',
				'max' => '',
				'button_label' => 'Add Row',
			),
			// FAQs Section
			array (
				'key' => 'field_537440ad6ed95',
				'label' => 'FAQs',
				'name' => '',
				'type' => 'tab',
			),
			array (
				'key' => 'field_537440c26ed96',
				'label' => 'FAQs',
				'name' => 'faqs',
				'type' => 'flexible_content',
				'layouts' => array (
					array (
						'label' => 'Nav Link Text',
						'name' => 'faqs_nav_link_text',
						'display' => 'row',
						'min' => '',
						'max' => 1,
						'sub_fields' => array (
							array (
								'key' => 'field_faqs_link_text',
								'label' => 'Link Text',
								'name' => 'faqs_link_text',
								'type' => 'text',
								'column_width' => '',
								'default_value' => 'FAQs',
								'placeholder' => 'Nav Link Text',
								'prepend' => '',
								'append' => '',
								'formatting' => 'none',
								'maxlength' => '',
							),
						),
					),
					array (
						'label' => 'Section Title',
						'name' => 'faqs_section_title',
						'display' => 'row',
						'min' => '',
						'max' => 1,
						'sub_fields' => array (
							array (
								'key' => 'field_faqs_title_text',
								'label' => 'Title Text',
								'name' => 'faqs_title_text',
								'type' => 'text',
								'column_width' => '',
								'default_value' => 'FAQs',
								'placeholder' => 'Title Text',
								'prepend' => '',
								'append' => '',
								'formatting' => 'none',
								'maxlength' => '',
							),
						),
					),
					array (
						'label' => 'Section Content',
						'name' => 'faqs_section_content',
						'display' => 'row',
						'min' => '',
						'max' => 1,
						'sub_fields' => array (
							array (
								'key' => 'field_faqs_faq_items',
								'label' => 'FAQ Items',
								'name' => 'faqs_faq_items',
								'type' => 'repeater',
								'column_width' => '',
								'sub_fields' => array (
									array (
										'key' => 'field_faqs_faq_items_question',
										'label' => 'Question',
										'name' => 'faqs_faq_items_question',
										'type' => 'text',
										'column_width' => '',
										'default_value' => '',
										'placeholder' => 'What is the question?',
										'prepend' => '',
										'append' => '',
										'formatting' => 'none',
										'maxlength' => '',
									),
									array (
										'key' => 'field_faqs_faq_items_answer',
										'label' => 'Answer',
										'name' => 'faqs_faq_items_answer',
										'type' => 'textarea',
										'column_width' => '',
										'default_value' => '',
										'placeholder' => '',
										'maxlength' => '',
										'rows' => '',
										'formatting' => 'html',
									),
								),
								'row_min' => '',
								'row_limit' => '',
								'layout' => 'row',
								'button_label' => 'Add FAQ Item',
							),
						),
					),
				),
				'button_label' => 'Add Row',
				'min' => '',
				'max' => '',
			),
			// Pricing Section
			array (
				'key' => 'field_537440ad6ed97',
				'label' => 'Pricing',
				'name' => '',
				'type' => 'tab',
			),
			array (
				'key' => 'field_537440ad6ed98',
				'label' => 'Pricing',
				'name' => 'pricing',
				'type' => 'flexible_content',
				'layouts' => array (
					array (
						'label' => 'Nav Link Text',
						'name' => 'pricing_nav_link_text',
						'display' => 'row',
						'min' => '',
						'max' => 1,
						'sub_fields' => array (
							array (
								'key' => 'field_pricing_link_text',
								'label' => 'Link Text',
								'name' => 'pricing_link_text',
								'type' => 'text',
								'column_width' => '',
								'default_value' => 'Pricing',
								'placeholder' => 'Nav Link Text',
								'prepend' => '',
								'append' => '',
								'formatting' => 'none',
								'maxlength' => '',
							),
						),
					),
				),
				'button_label' => 'Add Row',
				'min' => '',
				'max' => '',
			),
		),
		'location' => array (
			array (
				array (
					'param' => 'page_template',
					'operator' => '==',
					'value' => 'page-templates/start-nb-program.php',
					'order_no' => 0,
					'group_no' => 0,
				),
			),
		),
		'options' => array (
			'position' => 'normal',
			'layout' => 'no_box',
			'hide_on_screen' => array (
			),
		),
		'menu_order' => 0,
	));
	// Health Coaching Page
	register_field_group(array (
		'id' => 'acf_health-coaching',
		'title' => 'Health Coaching',
		'fields' => array (
			array (
				'key' => 'field_5389a6ebb9f9f',
				'label' => 'Additional Content',
				'name' => 'additional_content',
				'type' => 'wysiwyg',
				'default_value' => '',
				'toolbar' => 'full',
				'media_upload' => 'yes',
			),
		),
		'location' => array (
			array (
				array (
					'param' => 'page_template',
					'operator' => '==',
					'value' => 'page-templates/health-coaching.php',
					'order_no' => 0,
					'group_no' => 0,
				),
			),
		),
		'options' => array (
			'position' => 'normal',
			'layout' => 'no_box',
			'hide_on_screen' => array (
			),
		),
		'menu_order' => 0,
	));
	// Homepage Teasers
	register_field_group(array (
		'id' => 'acf_homepage-teasers',
		'title' => 'Homepage Teasers',
		'fields' => array (
			array (
				'key' => 'field_538f42b253bfb',
				'label' => 'Home Teasers',
				'name' => 'home_teasers',
				'type' => 'repeater',
				'sub_fields' => array (
					array (
						'key' => 'field_538f42bf53c01',
						'label' => 'Title',
						'name' => 'home_teaser_title',
						'type' => 'text',
						'column_width' => '',
						'default_value' => 'Teaser Title',
						'placeholder' => '',
						'prepend' => '',
						'append' => '',
						'formatting' => 'none',
						'maxlength' => '',
					),
					array (
						'key' => 'field_5390691e0708d',
						'label' => 'Icon',
						'name' => 'home_teaser_icon',
						'type' => 'text',
						'column_width' => '',
						'default_value' => 'trophy',
						'placeholder' => '',
						'prepend' => 'fa-',
						'append' => '',
						'formatting' => 'none',
						'maxlength' => '',
					),
					array (
						'key' => 'field_5390702964a87',
						'label' => 'Content',
						'name' => 'home_teaser_content',
						'type' => 'textarea',
						'column_width' => '',
						'default_value' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
						'placeholder' => '',
						'maxlength' => '',
						'rows' => '',
						'formatting' => 'html',
					),
					array (
						'key' => 'field_5390706b64a88',
						'label' => 'Button Text',
						'name' => 'home_teaser_button_text',
						'type' => 'text',
						'column_width' => '',
						'default_value' => 'Button Text',
						'placeholder' => '',
						'prepend' => '',
						'append' => '',
						'formatting' => 'none',
						'maxlength' => '',
					),
					array (
						'key' => 'field_5390708e64a89',
						'label' => 'Button URL',
						'name' => 'home_teaser_button_url',
						'type' => 'text',
						'column_width' => '',
						'default_value' => '#',
						'placeholder' => '',
						'prepend' => '',
						'append' => '',
						'formatting' => 'none',
						'maxlength' => '',
					),
				),
				'row_min' => '',
				'row_limit' => 4,
				'layout' => 'row',
				'button_label' => 'Add Teaser Box',
			),
		),
		'location' => array (
			array (
				array (
					'param' => 'page_template',
					'operator' => '==',
					'value' => 'page-templates/home-page.php',
					'order_no' => 0,
					'group_no' => 0,
				),
			),
		),
		'options' => array (
			'position' => 'normal',
			'layout' => 'default',
			'hide_on_screen' => array (
			),
		),
		'menu_order' => 0,
	));
	// HomeSlide Fields
	if(function_exists("register_field_group"))
	{
		register_field_group(array (
			'id' => 'acf_homeslide_new',
			'title' => 'Homeslide_New',
			'fields' => array (
				array (
					'key' => 'field_5399c42fad25c',
					'label' => 'Layout Type',
					'name' => 'homeslide_layout_type',
					'type' => 'select',
					'choices' => array (
						'simple' => 'simple',
						'complex' => 'complex',
					),
					'default_value' => 'simple',
					'allow_null' => 0,
					'multiple' => 0,
				),
				array (
					'key' => 'field_5399c3a3753a8',
					'label' => 'Simple Slide',
					'name' => '',
					'type' => 'tab',
					'conditional_logic' => array (
						'status' => 1,
						'rules' => array (
							array (
								'field' => 'field_5399c42fad25c',
								'operator' => '==',
								'value' => 'simple',
							),
						),
						'allorany' => 'all',
					),
				),
				array (
					'key' => 'field_5399cc4100284',
					'label' => 'Slide Link URL',
					'name' => 'homeslide_slide_link_url',
					'type' => 'text',
					'default_value' => '#',
					'placeholder' => '',
					'prepend' => '',
					'append' => '',
					'formatting' => 'none',
					'maxlength' => '',
				),
				array (
					'key' => 'field_5399c1fd354de',
					'label' => 'Header Title',
					'name' => 'homeslide_header_title',
					'type' => 'text',
					'default_value' => '',
					'placeholder' => '',
					'prepend' => '',
					'append' => '',
					'formatting' => 'html',
					'maxlength' => '',
				),
				array (
					'key' => 'field_5399c224354df',
					'label' => 'Header Subtitle',
					'name' => 'homeslide_header_subtitle',
					'type' => 'text',
					'default_value' => '',
					'placeholder' => '',
					'prepend' => '',
					'append' => '',
					'formatting' => 'html',
					'maxlength' => '',
				),
				array (
					'key' => 'field_5399c231354e0',
					'label' => 'Bordered Title',
					'name' => 'homeslide_bordered_title',
					'type' => 'text',
					'default_value' => '',
					'placeholder' => '',
					'prepend' => '',
					'append' => '',
					'formatting' => 'html',
					'maxlength' => '',
				),
				array (
					'key' => 'field_5399c268354e1',
					'label' => 'Content Title',
					'name' => 'homeslide_content_title',
					'type' => 'text',
					'default_value' => '',
					'placeholder' => '',
					'prepend' => '',
					'append' => '',
					'formatting' => 'html',
					'maxlength' => '',
				),
				array (
					'key' => 'field_5399c276354e2',
					'label' => 'Content Entry',
					'name' => 'homeslide_content_entry',
					'type' => 'textarea',
					'default_value' => '',
					'placeholder' => '',
					'maxlength' => '',
					'rows' => '',
					'formatting' => 'br',
				),
				array (
					'key' => 'field_5399c287354e3',
					'label' => 'Content Image',
					'name' => 'homeslide_content_image',
					'type' => 'image',
					'save_format' => 'url',
					'preview_size' => 'thumbnail',
					'library' => 'all',
				),
				array (
					'key' => 'field_5399c3dc753a9',
					'label' => 'Complex Slide',
					'name' => '',
					'type' => 'tab',
					'conditional_logic' => array (
						'status' => 1,
						'rules' => array (
							array (
								'field' => 'field_5399c42fad25c',
								'operator' => '==',
								'value' => 'complex',
							),
						),
						'allorany' => 'all',
					),
				),
				array (
					'key' => 'field_5399cd675677e',
					'label' => 'Blurbs',
					'name' => 'blurbs',
					'type' => 'repeater',
					'sub_fields' => array (
						array (
							'key' => 'field_5399cd995677f',
							'label' => 'Blurb Image',
							'name' => 'blurb_image',
							'type' => 'image',
							'column_width' => '',
							'save_format' => 'id',
							'preview_size' => 'thumbnail',
							'library' => 'all',
						),
						array (
							'key' => 'field_5399cdbc56780',
							'label' => 'Blurb Link URL',
							'name' => 'blurb_link_url',
							'type' => 'text',
							'column_width' => '',
							'default_value' => '#',
							'placeholder' => '',
							'prepend' => '',
							'append' => '',
							'formatting' => 'none',
							'maxlength' => '',
						),
					),
					'row_min' => '',
					'row_limit' => 3,
					'layout' => 'row',
					'button_label' => 'Add Blurb',
				),
			),
			'location' => array (
				array (
					array (
						'param' => 'post_type',
						'operator' => '==',
						'value' => 'homeslide',
						'order_no' => 0,
						'group_no' => 0,
					),
				),
			),
			'options' => array (
				'position' => 'normal',
				'layout' => 'no_box',
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
	// Video Fields
	if(function_exists("register_field_group"))
	{
		register_field_group(array (
			'id' => 'acf_video-fields-2',
			'title' => 'Video Fields',
			'fields' => array (
				array (
					'key' => 'field_5391f44c6d250',
					'label' => 'Embed Code',
					'name' => 'video_embed_code',
					'type' => 'textarea',
					'default_value' => '',
					'placeholder' => '',
					'maxlength' => '',
					'rows' => '',
					'formatting' => 'html',
				),
			),
			'location' => array (
				array (
					array (
						'param' => 'post_type',
						'operator' => '==',
						'value' => 'video',
						'order_no' => 0,
						'group_no' => 0,
					),
				),
			),
			'options' => array (
				'position' => 'normal',
				'layout' => 'no_box',
				'hide_on_screen' => array (
				),
			),
			'menu_order' => 0,
		));
	}
	// Custom Read More text-field
	register_field_group(array (
		'id' => 'acf_custom-read-more',
		'title' => 'Custom Read More',
		'fields' => array (
			array (
				'key' => 'field_53a2e3188c97f',
				'label' => 'Read More Text',
				'name' => 'read_more_text',
				'type' => 'text',
				'default_value' => 'Read More',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'none',
				'maxlength' => '',
			),
		),
		'location' => array (
			array (
				array (
					'param' => 'post_type',
					'operator' => '==',
					'value' => 'post',
					'order_no' => 0,
					'group_no' => 0,
				),
			),
		),
		'options' => array (
			'position' => 'normal',
			'layout' => 'no_box',
			'hide_on_screen' => array (
			),
		),
		'menu_order' => 0,
	));
}
