<?php

function thegem_title_post_type_init() {
	$labels = array(
		'name'			   => __('Titles', 'thegem'),
		'singular_name'	  => __('Titler', 'thegem'),
		'menu_name'		  => __('Custom Titles', 'thegem'),
		'name_admin_bar'	 => __('Title', 'thegem'),
		'add_new'			=> __('Add New', 'thegem'),
		'add_new_item'	   => __('Add New Title', 'thegem'),
		'new_item'		   => __('New Title', 'thegem'),
		'edit_item'		  => __('Edit Title', 'thegem'),
		'view_item'		  => __('View Title', 'thegem'),
		'all_items'		  => __('All Titles', 'thegem'),
		'search_items'	   => __('Search Titles', 'thegem'),
		'not_found'		  => __('No titles found.', 'thegem'),
		'not_found_in_trash' => __('No titles found in Trash.', 'thegem')
	);

	$args = array(
		'labels'			   => $labels,
		'public'			   => true,
		'exclude_from_search'  => true,
		'publicly_queryable'   => true,
		'show_ui'			  => true,
		'query_var'			=> false,
		'hierarchical'		 => false,
		'supports'			 => array('title', 'editor'),
		'menu_position'		=> 39
	);

	register_post_type('thegem_title', $args);
}
add_action('init', 'thegem_title_post_type_init', 5);

function thegem_force_title_type_private($post) {
	if ($post['post_type'] == 'thegem_title' && $post['post_status'] != 'trash') {
		$post['post_status'] = 'private';
	}
	return $post;
}
add_filter('wp_insert_post_data', 'thegem_force_title_type_private');

function thegem_custom_title_shortcodes_array($shortcodes) {
	global $pagenow;
	if((is_admin() && in_array($pagenow, array('post-new.php', 'post.php', 'admin-ajax.php'))) || (!is_admin() && in_array($pagenow, array('index.php')))) {
		$activate = 0;
		if($pagenow === 'post-new.php' && !empty($_REQUEST['post_type']) && $_REQUEST['post_type'] === 'thegem_title') {
			$activate = true;
		}
		if($pagenow === 'post.php' && !empty($_REQUEST['post']) && get_post_type($_REQUEST['post']) === 'thegem_title') {
			$activate = true;
		}
		if($pagenow === 'post.php' && !empty($_REQUEST['post_id']) && get_post_type($_REQUEST['post_id']) === 'thegem_title') {
			$activate = true;
		}
		if($pagenow === 'admin-ajax.php' && !empty($_REQUEST['post_id']) && get_post_type($_REQUEST['post_id']) === 'thegem_title') {
			$activate = true;
		}
		if($pagenow === 'index.php' && !empty($_REQUEST['vc_post_id']) && get_post_type($_REQUEST['vc_post_id']) === 'thegem_title') {
			$activate = true;
		}
		if($activate) {
			$shortcodes['gem_title_background'] = array(
				'name' => __('Background Container', 'thegem'),
				'base' => 'gem_title_background',
				'is_container' => true,
				'js_view' => 'VcGemTitleBackgroundView',
				'icon' => 'thegem-icon-wpb-ui-title-background',
				'category' => __('Custom Page Title', 'thegem'),
				'description' => __('Container for custom title background', 'thegem'),
				'weight' => 10,
				'params' => array_merge(array(
					array(
						'type' => 'checkbox',
						'heading' => __('Fullwidth', 'thegem'),
						'param_name' => 'fullwidth',
						'description' => __('If enabled, title\'s background container will be stretched to fullwidth.', 'thegem'),
						'value' => array(__('Yes', 'thegem') => '1'),
						'std' => 1,
					),
					array(
						'type' => 'checkbox',
						'heading' => __('Disable content stretching', 'thegem'),
						'param_name' => 'container',
						'description' => __('If activated, content inside the background section will not be stretched to fullwidth.', 'thegem'),
						'value' => array(__('Yes', 'thegem') => '1'),
						'dependency' => array(
							'element' => 'fullwidth',
							'value' => array('1')
						),
						'std' => 1,
					),
					array(
						'type' => 'colorpicker',
						'heading' => __('Default text color', 'thegem'),
						'param_name' => 'color',
						'description' => __('Specify default color for text content inside the background container.', 'thegem'),
					),
					array(
						'type' => 'dropdown',
						'heading' => __('Background type', 'thegem'),
						'param_name' => 'background_type',
						'value' => array(
							__('Color', 'thegem') => 'color',
							__('Gradient', 'thegem') => 'gradient',
							__('Image', 'thegem') => 'image',
							__('Video', 'thegem') => 'video',
						),
						'description' => __('Specify background type of the background container.', 'thegem'),
						'save_always' => true,
					),
					array(
						'type' => 'colorpicker',
						'heading' => __('Background Color', 'thegem'),
						'param_name' => 'background_color',
						'dependency' => array(
							'element' => 'background_type',
							'value' => array('color')
						),
						'description' => __('Specify background color for page/post title\'s background. Note: if background color is set in page options -> title area -> dynamic settings, it will overwrite the value set here.', 'thegem'),
					),
					array(
						'type' => 'attach_image',
						'heading' => __('Background image', 'thegem'),
						'param_name' => 'background_image',
						'dependency' => array(
							'element' => 'background_type',
							'value' => array('image')
						),
						'description' => __('Select image for page/post title\'s background. Note: if background image is set in page options -> title area -> dynamic settings, it will overwrite the values set here.', 'thegem'),
					),
					array(
						'type' => 'checkbox',
						'heading' => __('Background repeat', 'thegem'),
						'param_name' => 'background_image_repeat',
						'value' => array(__('Yes', 'thegem') => '1'),
						'dependency' => array(
							'element' => 'background_type',
							'value' => array('image')
						),
					),
					array(
						'type' => 'dropdown',
						'heading' => __('Background size', 'thegem'),
						'param_name' => 'background_size',
						'value' => array(
							__('Auto', 'thegem') => 'auto',
							__('Cover', 'thegem') => 'cover',
							__('Contain', 'thegem') => 'contain',
						),
						'std' => 'cover',
						'save_always' => true,
						'dependency' => array(
							'element' => 'background_type',
							'value' => array('image')
						),
					),
					array(
						'type' => 'dropdown',
						'heading' => __('Background horizontal position', 'thegem'),
						'param_name' => 'background_image_position_x',
						'value' => array(
							__('Center', 'thegem') => 'center',
							__('Left', 'thegem') => 'left',
							__('Right', 'thegem') => 'right'
						),
						'dependency' => array(
							'element' => 'background_type',
							'value' => array('image')
						),
					),
					array(
						'type' => 'dropdown',
						'heading' => __('Background vertical position', 'thegem'),
						'param_name' => 'background_image_position_y',
						'value' => array(
							__('Top', 'thegem') => 'top',
							__('Center', 'thegem') => 'center',
							__('Bottom', 'thegem') => 'bottom'
						),
						'dependency' => array(
							'element' => 'background_type',
							'value' => array('image')
						),
					),
					array(
						'type' => 'colorpicker',
						'heading' => __('Background Color', 'thegem'),
						'param_name' => 'background_image_color',
						'dependency' => array(
							'element' => 'background_type',
							'value' => array('image')
						),
					),
					array(
						'type' => 'colorpicker',
						'heading' => __('Background Overlay Color', 'thegem'),
						'param_name' => 'background_image_overlay',
						'dependency' => array(
							'element' => 'background_type',
							'value' => array('image')
						),
					),
					array(
						'type' => 'checkbox',
						'heading' => __('Parallax', 'thegem'),
						'param_name' => 'background_parallax',
						'value' => array(__('Yes', 'thegem') => '1'),
						'dependency' => array(
							'element' => 'background_type',
							'value' => array('image')
						),
					),
					array(
						'type' => 'checkbox',
						'heading' => __('Ken Burns effect', 'thegem'),
						'param_name' => 'ken_burns_enabled',
						'dependency' => array(
							'element' => 'background_type',
							'value' => array('image')
						),
					),
					array(
						'type' => 'dropdown',
						'value' => array(__('Zoom In', 'thegem') => 'zoom_in', __('Zoom Out', 'thegem') => 'zoom_out'),
						'heading' => __('Direction', 'thegem'),
						'param_name' => 'ken_burns_direction',
						'dependency' => array(
							'element' => 'ken_burns_enabled',
							'not_empty' => true
						)
					),
					array(
						'type' => 'textfield',
						'heading' => __('Transition speed, ms', 'thegem'),
						'value' => 15000,
						'param_name' => 'ken_burns_transition_speed',
						'dependency' => array(
							'element' => 'ken_burns_enabled',
							'not_empty' => true
						)
					),
					array(
						'type' => 'dropdown',
						'heading' => __('Background video type', 'thegem'),
						'param_name' => 'video_background_type',
						'value' => array(
							__('YouTube', 'thegem') => 'youtube',
							__('Vimeo', 'thegem') => 'vimeo',
							__('Self', 'thegem') => 'self'
						),
						'description' => __('Specify video for page/post title\'s background. Note: if background video is set in page options -> title area -> dynamic settings, it will overwrite the values set here.', 'thegem'),
						'dependency' => array(
							'element' => 'background_type',
							'value' => array('video')
						),
					),
					array(
						'type' => 'textfield',
						'heading' => __('Video id (YouTube or Vimeo) or src', 'thegem'),
						'param_name' => 'video_background_src',
						'value' => '',
						'dependency' => array(
							'element' => 'video_background_type',
							'value' => array('youtube', 'vimeo', 'self')
						),
					),
					array(
						'type' => 'textfield',
						'heading' => __('Video Aspect ratio (16:9, 16:10, 4:3...)', 'thegem'),
						'param_name' => 'video_background_acpect_ratio',
						'value' => '16:9',
						'dependency' => array(
							'element' => 'video_background_type',
							'value' => array('youtube', 'vimeo', 'self')
						),
					),
					array(
						'type' => 'colorpicker',
						'heading' => __('Background video overlay color', 'thegem'),
						'param_name' => 'video_background_overlay_color',
						'dependency' => array(
							'element' => 'video_background_type',
							'value' => array('youtube', 'vimeo', 'self')
						),
					),
					array(
						'type' => 'attach_image',
						'heading' => __('Video Poster', 'thegem'),
						'param_name' => 'video_background_poster',
						'dependency' => array(
							'element' => 'video_background_type',
							'value' => array('self')
						)
					),
					array(
						'type' => 'dropdown',
						'heading' => __('Background Gradient Type', 'thegem'),
						'param_name' => 'background_gradient_type',
						'value' => array(
							__('Linear', 'thegem') => 'linear',
							__('Radial', 'thegem') => 'radial',
						),
						'description' => __('Specify gradient settings for page/post title\'s background. Note: if background gradient is set in page options -> title area -> dynamic settings, it will overwrite the values set here.', 'thegem'),
						'dependency' => array(
							'element' => 'background_type',
							'value' => array('gradient')
						),
					),
					array(
						'type' => 'textfield',
						'heading' => __('Background Gradient Angle', 'thegem'),
						'param_name' => 'background_gradient_angle',
						'dependency' => array(
							'element' => 'background_gradient_type',
							'value' => array('linear')
						),
						'std' => '0',
					),
					array(
						'type' => 'dropdown',
						'heading' => __('Background Gradient Position', 'thegem'),
						'param_name' => 'background_gradient_position',
						'value' => array(
							__('Top Left', 'thegem') => 'top left',
							__('Top Center', 'thegem') => 'top center',
							__('Top Right', 'thegem') => 'top right',
							__('Center Left', 'thegem') => 'center left',
							__('Center Center', 'thegem') => 'center center',
							__('Center Right', 'thegem') => 'center right',
							__('Bottom Left', 'thegem') => 'bottom left',
							__('Bottom Center', 'thegem') => 'bottom center',
							__('Bottom Right', 'thegem') => 'bottom right',
						),
						'std' => 'center center',
						'dependency' => array(
							'element' => 'background_gradient_type',
							'value' => array('radial')
						),
					),
					array(
						'type' => 'colorpicker',
						'heading' => __('Background Gradient Color 1', 'thegem'),
						'param_name' => 'background_gradient_point1_color',
						'dependency' => array(
							'element' => 'background_type',
							'value' => array('gradient')
						),
					),
					array(
						'type' => 'textfield',
						'heading' => __('Background Gradient Position 1 (%)', 'thegem'),
						'param_name' => 'background_gradient_point1_position',
						'std' => '0',
						'dependency' => array(
							'element' => 'background_type',
							'value' => array('gradient')
						),
					),
					array(
						'type' => 'colorpicker',
						'heading' => __('Gradient Color 2', 'thegem'),
						'param_name' => 'background_gradient_point2_color',
						'dependency' => array(
							'element' => 'background_type',
							'value' => array('gradient')
						),
					),
					array(
						'type' => 'textfield',
						'heading' => __('Background Gradient Position 2 (%)', 'thegem'),
						'param_name' => 'background_gradient_point2_position',
						'dependency' => array(
							'element' => 'background_type',
							'value' => array('gradient')
						),
						'std' => '100',
					),
					array(
						'type' => 'textfield',
						'heading' => __('Padding top', 'thegem'),
						'param_name' => 'padding_top',
						'std' => 80,
					),
					array(
						'type' => 'textfield',
						'heading' => __('Padding bottom', 'thegem'),
						'param_name' => 'padding_bottom',
						'std' => 80,
					),
					array(
						'type' => 'textfield',
						'heading' => __('Padding left', 'thegem'),
						'param_name' => 'padding_left',
					),
					array(
						'type' => 'textfield',
						'heading' => __('Padding right', 'thegem'),
						'param_name' => 'padding_right',
					),
					array(
						'type' => 'textfield',
						'heading' => __('Extra Class', 'thegem'),
						'param_name' => 'extra_class',
					),
				)),
			);
			$shortcodes['gem_title_title'] = array(
				'name' => __('Title', 'thegem'),
				'base' => 'gem_title_title',
				'icon' => 'thegem-icon-wpb-ui-title-title',
				'category' => __('Custom Page Title', 'thegem'),
				'description' => __('Custom Title - Title', 'thegem'),
				'weight' => 10,
				'params' => array_merge(array(
					array(
						'type' => 'checkbox',
						'heading' => __('Disable automatic page / post title', 'thegem'),
						'param_name' => 'use_shortcode_data',
						'description' => __('By default custom title gets its content dynamically from the page/post title where it is used. Enabling this checkbox deactivates dynamic content.', 'thegem'),
						'value' => array(__('Yes', 'thegem') => '1'),
					),
					array(
						'type' => 'dropdown',
						'heading' => __('Type', 'thegem'),
						'param_name' => 'type',
						'description' => __('Specify content type for title: simple text or rich text.', 'thegem'),
						'value' => array(__('Simple text', 'thegem') => 'sipmle', __('Rich text', 'thegem') => 'rich'),
						'dependency' => array(
							'element' => 'use_shortcode_data',
							'not_empty' => true
						),
					),
					array(
						'type' => 'textfield',
						'heading' => __('Text', 'thegem'),
						'param_name' => 'text',
						'dependency' => array(
							'element' => 'type',
							'value' => 'sipmle'
						),
					),
					array(
						'type' => 'textarea_html',
						'heading' => __('Content', 'thegem'),
						'param_name' => 'content',
						'dependency' => array(
							'element' => 'type',
							'value' => 'rich'
						),
					),
					array(
						'type' => 'colorpicker',
						'heading' => __('Color', 'thegem'),
						'param_name' => 'color',
						'description' => __('Specify color for page/post title. Note: if title\'s color is set in page options -> title area -> dynamic settings, it will overwrite the value set here.', 'thegem'),
					),
					array(
						'type' => 'dropdown',
						'heading' => __('Alignment', 'thegem'),
						'param_name' => 'alignment',
						'value' => array(__('Left', 'thegem') => 'left', __('Right', 'thegem') => 'right', __('Center', 'thegem') => 'center'),
					),
					array(
						'type' => 'checkbox',
						'heading' => __('xLarge text', 'thegem'),
						'param_name' => 'xlarge',
						'value' => array(__('Yes', 'thegem') => '1'),
					),
					array(
						'type' => 'textfield',
						'heading' => __('Max width', 'thegem'),
						'param_name' => 'width',
					),
					array(
						'type' => 'textfield',
						'heading' => __('Margin top', 'thegem'),
						'param_name' => 'margin_top',
					),
					array(
						'type' => 'textfield',
						'heading' => __('Margin bottom', 'thegem'),
						'param_name' => 'margin_bottom',
					),
					array(
						'type' => 'textfield',
						'heading' => __('Extra Class', 'thegem'),
						'param_name' => 'extra_class',
					),
					array(
						'type' => 'thegem_hidden_param',
						'param_name' => 'v',
						'std' => '5',
						'save_always' => true,
					),
				)),
			);
			$shortcodes['gem_title_excerpt'] = array(
				'name' => __('Excerpt', 'thegem'),
				'base' => 'gem_title_excerpt',
				'icon' => 'thegem-icon-wpb-ui-title-excerpt',
				'category' => __('Custom Page Title', 'thegem'),
				'description' => __('Custom Title - Excerpt', 'thegem'),
				'weight' => 10,
				'params' => array_merge(array(
					array(
						'type' => 'checkbox',
						'heading' => __('Disable automatic page/post excerpt ', 'thegem'),
						'param_name' => 'use_shortcode_data',
						'value' => array(__('Yes', 'thegem') => '1'),
						'description' => __('By default custom excerpt gets its content dynamically from the page/post excerpt where it is used. Enabling this checkbox deactivates dynamic content.', 'thegem'),
					),
					array(
						'type' => 'textarea_html',
						'heading' => __('Content', 'thegem'),
						'param_name' => 'content',
						'dependency' => array(
							'element' => 'use_shortcode_data',
							'not_empty' => true
						),
					),
					array(
						'type' => 'colorpicker',
						'heading' => __('Color', 'thegem'),
						'param_name' => 'color',
						'description' => 'Specify color for page/post excerpt. Note: if excerpt\'s color is set in page options -> title area -> dynamic settings, it will overwrite the value set here.',
					),
					array(
						'type' => 'dropdown',
						'heading' => __('Alignment', 'thegem'),
						'param_name' => 'alignment',
						'value' => array(__('Left', 'thegem') => 'left', __('Right', 'thegem') => 'right', __('Center', 'thegem') => 'center'),
					),
					array(
						'type' => 'textfield',
						'heading' => __('Max width', 'thegem'),
						'param_name' => 'width',
					),
					array(
						'type' => 'textfield',
						'heading' => __('Margin top', 'thegem'),
						'param_name' => 'margin_top',
					),
					array(
						'type' => 'textfield',
						'heading' => __('Margin bottom', 'thegem'),
						'param_name' => 'margin_bottom',
					),
					array(
						'type' => 'textfield',
						'heading' => __('Extra Class', 'thegem'),
						'param_name' => 'extra_class',
					),
					array(
						'type' => 'thegem_hidden_param',
						'param_name' => 'v',
						'std' => '5',
						'save_always' => true,
					),
				)),
			);
			$shortcodes['gem_title_icon'] = array(
				'name' => __('Icon', 'thegem'),
				'base' => 'gem_title_icon',
				'icon' => 'thegem-icon-wpb-ui-title-icon',
				'category' => __('Custom Page Title', 'thegem'),
				'description' => __('Custom Title - Icon', 'thegem'),
				'weight' => 10,
				'params' => array_merge(array(
					array(
						'type' => 'dropdown',
						'heading' => __('Icon pack', 'thegem'),
						'param_name' => 'pack',
						'value' => array_merge(array(__('Elegant', 'thegem') => 'elegant', __('Material Design', 'thegem') => 'material', __('FontAwesome', 'thegem') => 'fontawesome'), thegem_userpack_to_dropdown()),
						'std' => 'material'
					),
					array(
						'type' => 'thegem_icon',
						'heading' => __('Icon', 'thegem'),
						'param_name' => 'icon_elegant',
						'icon_pack' => 'elegant',
						'dependency' => array(
							'element' => 'pack',
							'value' => array('elegant')
						),
					),
					array(
						'type' => 'thegem_icon',
						'heading' => __('Icon', 'thegem'),
						'param_name' => 'icon_material',
						'icon_pack' => 'material',
						'dependency' => array(
							'element' => 'pack',
							'value' => array('material')
						),
						'std' => 'f287'
					),
					array(
						'type' => 'thegem_icon',
						'heading' => __('Icon', 'thegem'),
						'param_name' => 'icon_fontawesome',
						'icon_pack' => 'fontawesome',
						'dependency' => array(
							'element' => 'pack',
							'value' => array('fontawesome')
						),
					),
				),
				thegem_userpack_to_shortcode(array(
					array(
						'type' => 'thegem_icon',
						'heading' => __('Icon', 'thegem'),
						'param_name' => 'icon_userpack',
						'icon_pack' => 'userpack',
						'dependency' => array(
							'element' => 'pack',
							'value' => array('userpack')
						),
					),
				)),
				array(
					array(
						'type' => 'dropdown',
						'heading' => __('Shape', 'thegem'),
						'param_name' => 'shape',
						'value' => array(__('Square', 'thegem') => 'square', __('Circle', 'thegem') => 'circle', __('Rhombus', 'thegem') => 'romb', __('Hexagon', 'thegem') => 'hexagon'),
					),
					array(
						'type' => 'dropdown',
						'heading' => __('Style', 'thegem'),
						'param_name' => 'style',
						'value' => array(__('Default', 'thegem') => '', __('45 degree Right', 'thegem') => 'angle-45deg-r', __('45 degree Left', 'thegem') => 'angle-45deg-l', __('90 degree', 'thegem') => 'angle-90deg'),
					),
					array(
						'type' => 'colorpicker',
						'heading' => __('Color', 'thegem'),
						'param_name' => 'color',
					),
					array(
						'type' => 'colorpicker',
						'heading' => __('Color 2', 'thegem'),
						'param_name' => 'color_2',
					),
					array(
						'type' => 'colorpicker',
						'heading' => __('Background Color', 'thegem'),
						'param_name' => 'background_color',
					),
					array(
						'type' => 'colorpicker',
						'heading' => __('Border Color', 'thegem'),
						'param_name' => 'border_color',
					),
					array(
						'type' => 'dropdown',
						'heading' => __('Size', 'thegem'),
						'param_name' => 'size',
						'value' => array(__('Small', 'thegem') => 'small', __('Medium', 'thegem') => 'medium', __('Large', 'thegem') => 'large', __('Extra Large', 'thegem') => 'xlarge'),
					),
					array(
						'type' => 'dropdown',
						'heading' => __('Alignment', 'thegem'),
						'param_name' => 'alignment',
						'value' => array(__('Default position', 'thegem') => 'default', __('Centered', 'thegem') => 'center', __('Left to content', 'thegem') => 'left', __('Right to content', 'thegem') => 'right'),
					),
					array(
						'type' => 'textfield',
						'heading' => __('Margin left', 'thegem'),
						'param_name' => 'margin_left',
						'dependency' => array(
							'element' => 'alignment',
							'value' => array('right')
						),
						'std' => 30,
					),
					array(
						'type' => 'textfield',
						'heading' => __('Margin right', 'thegem'),
						'param_name' => 'margin_right',
						'dependency' => array(
							'element' => 'alignment',
							'value' => array('left')
						),
						'std' => 30,
					),
					array(
						'type' => 'textfield',
						'heading' => __('Extra Class', 'thegem'),
						'param_name' => 'extra_class',
					),
				)),
			);
		}
	}
	return $shortcodes;
}
add_filter('thegem_shortcodes_array', 'thegem_custom_title_shortcodes_array');

function thegem_vc_add_element_categories_custom_title($tabs) {
	$title_tab = false;
	$title_tab_key = -1;
	foreach($tabs as $key => $tab) {
		if($tab['name'] === __('Custom Page Title', 'thegem')) {
			$title_tab = $tab;
			$title_tab_key = $key;
		}
	}
	if($title_tab_key > -1) {
		unset($tabs[$title_tab_key]);
		$title_tab['active'] = 1;
		foreach($tabs as $key => $tab) {
			if($tab['active']) {
				$tabs[$key]['active'] = false;
			}
		}
		$tabs = array_merge(array($title_tab), $tabs);
	}
	return $tabs;
}
add_filter('vc_add_element_categories', 'thegem_vc_add_element_categories_custom_title');

add_shortcode('gem_title_title', 'thegem_title_title_shortcode');
add_shortcode('gem_title_excerpt', 'thegem_title_excerpt_shortcode');
add_shortcode('gem_title_icon', 'thegem_title_icon_shortcode');
add_shortcode('gem_title_background', 'thegem_title_background_shortcode');

function thegem_title_title_shortcode($atts) {
	$output = '';
	$atts = shortcode_atts( array(
		'use_shortcode_data' => 0,
		'type' => 'simple',
		'text' => '',
		'content' => '',
		'color' => '',
		'xlarge' => '',
		'alignment' => 'left',
		'width' => '',
		'margin_top' => '',
		'margin_bottom' => '',
		'extra_class' => '',
		'v' => '',
	), $atts, 'gem_title_title' );
	global $thegem_page_title_template_data;
	$page_data = $thegem_page_title_template_data;
	if(!empty($thegem_page_title_template_data['title_use_page_settings'])) {
		$atts = array_merge($atts, array(
			'type' => $page_data['title_rich_content'] ? 'rich' : 'simple',
			'text' => !empty($thegem_page_title_template_data['main_title']) && empty($atts['use_shortcode_data']) ? $thegem_page_title_template_data['main_title'] : $atts['text'],
			'content' => $page_data['title_content'],
			'color' => $page_data['title_text_color'] ? $page_data['title_text_color'] : $atts['color'],
			//'xlarge' => $atts['xlarge'] || !empty($page_data['title_xlarge_custom_migrate']),
		));
		if(empty($atts['v'])) {
			$atts['xlarge'] = $atts['xlarge'] || !empty($page_data['title_xlarge']);
			$atts['alignment'] = $page_data['title_alignment'] != '' ? $page_data['title_alignment'] : $atts['alignment'];
		}
	}
	if(empty($atts['text']) && !empty($thegem_page_title_template_data['main_title'])) {
		$atts['text'] = $thegem_page_title_template_data['main_title'];
	}
	if(empty($atts['use_shortcode_data']) && !empty($page_data['title_rich_content']) && !empty($page_data['title_content'])) {
		$atts['type'] = 'rich';
		$atts['content'] = $page_data['title_content'];
	}
	$styles = '';
	if($atts['alignment'] == 'right' || $atts['alignment'] == 'center') {
		$styles .= 'text-align: '.$atts['alignment'].';';
	}
	if($atts['alignment'] == 'center') {
		$styles .= 'margin-left: auto;margin-right: auto;';
	}

	if($atts['alignment'] == 'right') {
		$styles .= 'margin-left: auto;margin-right: 0;';
	}

	if(intval($atts['margin_top']) > 0) {
		$styles .= 'margin-top: '.intval($atts['margin_top']).'px;';
	}
	if(intval($atts['margin_bottom']) > 0) {
		$styles .= 'margin-bottom: '.intval($atts['margin_bottom']).'px;';
	}
	if(intval($atts['width']) > 0) {
		$styles .= 'max-width: '.intval($atts['width']).'px;';
	}
	$output .= '<div class="custom-title-title '.esc_attr($atts['extra_class']).'"'.($styles ? ' style ="'.esc_attr($styles).'"' : '').'>';
	if($atts['type'] == 'simple') {
		$output .= '<h1 '.($atts['xlarge'] ? 'class="title-xlarge"' : '');
	} else {
		$output .= '<div class="custom-title-rich"';
	}
	if($atts['color']) {
		$output .= ' style="color: '.esc_attr($atts['color']).'"';
	}
	$output .= '>';
	if($atts['type'] == 'simple' && !empty($atts['text'])) {
		$output .= $atts['text'];
	} elseif($atts['type'] == 'rich') {
		$output .= do_shortcode($atts['content']);
	} else {
		$output .= 'Custom Title';
	}
	if($atts['type'] == 'simple') {
		$output .= '</h1>';
	} else {
		$output .= '</div>';
	}
	$output .= '</div>';
	return $output;
}

function thegem_title_excerpt_shortcode($atts, $content) {
	$output = '';
	$atts = shortcode_atts( array(
		'use_shortcode_data' => 0,
		'content' => $content,
		'color' => '',
		'alignment' => '',
		'width' => '',
		'margin_top' => '',
		'margin_bottom' => '',
		'extra_class' => '',
		'v' => '',
	), $atts, 'gem_title_title' );
	if(empty($atts['v']) && empty($atts['color'])) {
		$global_data = thegem_get_sanitize_options_page_data(get_option('thegem_options_page_settings_global'), 'global');
		$atts['color'] = $global_data['title_excerpt_text_color'];
	}
	global $thegem_page_title_template_data;
	$page_data = $thegem_page_title_template_data;
	if(!empty($thegem_page_title_template_data['title_use_page_settings'])) {
		$atts = array_merge($atts, array(
			'color' => $page_data['title_excerpt_text_color'] ? $page_data['title_excerpt_text_color'] : $atts['color'],
		));
	}
	if(!$atts['use_shortcode_data'] && !empty($page_data['title_excerpt'])) {
		$atts['content'] = $page_data['title_excerpt'];
	}
	$output .= '<div class="custom-title-excerpt styled-subtitle '.esc_attr($atts['extra_class']).'"';
	$styles = '';
	if($atts['alignment'] == 'right' || $atts['alignment'] == 'center') {
		$styles .= 'text-align: '.$atts['alignment'].';';
	}
	if($atts['alignment'] == 'center') {
		$styles .= 'margin-left: auto;margin-right: auto;';
	}
	if(intval($atts['margin_top']) > 0) {
		$styles .= 'margin-top: '.intval($atts['margin_top']).'px;';
	}
	if(intval($atts['margin_bottom']) > 0) {
		$styles .= 'margin-bottom: '.intval($atts['margin_bottom']).'px;';
	}
	if(intval($atts['width']) > 0) {
		$styles .= 'max-width: '.intval($atts['width']).'px;';
	}
	if($atts['color']) {
		$styles .= 'color: '.$atts['color'].';';
	}
	$output .= ' style="'.esc_attr($styles).'">';
	if(!empty($atts['content'])) {
		$output .= do_shortcode($atts['content']);
	} else {
		$output .= 'Custom Excerpt';
	}
	$output .= '</div>';
	return $output;
}

function thegem_title_icon_shortcode($atts) {
	extract(shortcode_atts(array(
		'use_shortcode_data' => 0,
		'pack' => 'material',
		'icon_elegant' => '',
		'icon_material' => 'f287',
		'icon_fontawesome' => '',
		'icon_userpack' => '',
		'shape' => 'square',
		'style' => '',
		'color' => '',
		'color_2' => '',
		'background_color' => '',
		'border_color' => '',
		'size' => 'small',
		'alignment' => 'default',
		'margin_left' => 30,
		'margin_right' => 30,
		'extra_class' => '',
	), $atts, 'gem_title_icon'));
	global $thegem_page_title_template_data;
	$page_data = $thegem_page_title_template_data;
	if(!empty($thegem_page_title_template_data['title_use_page_settings']) && $page_data['title_icon']) {
		$pack = $page_data['title_icon_pack'];
		$icon_elegant = $page_data['title_icon'];
		$icon_material = $page_data['title_icon'];
		$icon_fontawesome = $page_data['title_icon'];
		$icon_userpack = $page_data['title_icon'];
		$shape = $page_data['title_icon_shape'];
		$style = $page_data['title_icon_style'];
		$color = $page_data['title_icon_color'];
		$color_2 = $page_data['title_icon_color'];
		$background_color = $page_data['title_icon_background_color'];
		$border_color = $page_data['title_icon_border_color'];
		$size = $page_data['title_icon_size'];
	}
	if($pack =='elegant' && empty($icon) && $icon_elegant) {
		$icon = $icon_elegant;
	}
	if($pack =='material' && empty($icon) && $icon_material) {
		$icon = $icon_material;
	}
	if($pack =='fontawesome' && empty($icon) && $icon_fontawesome) {
		$icon = $icon_fontawesome;
	}
	if($pack =='userpack' && empty($icon) && $icon_userpack) {
		$icon = $icon_userpack;
	}
	wp_enqueue_style('icons-'.$pack);
	$shape = thegem_check_array_value(array('circle', 'square', 'romb', 'hexagon'), $shape, 'square');
	$style = thegem_check_array_value(array('', 'angle-45deg-r', 'angle-45deg-l', 'angle-90deg', 'gradient'), $style, '');
	$size = thegem_check_array_value(array('small', 'medium', 'large', 'xlarge'), $size, 'small');
	$alignment = thegem_check_array_value(array('default', 'center', 'left', 'right'), $alignment, 'default');
	$css_style_icon = '';
	$css_style_icon_background = '';
	$css_style_icon_1 = '';
	$css_style_icon_2 = '';
	$css_style_icon_3 = '';

	if($background_color) {
		$css_style_icon_background .= 'background-color: '.$background_color.';';
		if(!$border_color || !$style == 'gradient') {
			$css_style_icon .= 'border-color: '.$background_color.';';
		}
	}

	if($border_color) {
		$css_style_icon .= 'border-color: '.$border_color.';';
	}

	$simple_icon = '';
	if(!($background_color || $border_color)) {
		$simple_icon = ' gem-simple-icon';
	}

	if($color = $color) {
		$css_style_icon_1 = 'color: '.$color.';';
		if(($color_2 = $color_2) && $style) {
			$css_style_icon_2 = 'color: '.$color_2.';';
		} else {
			$css_style_icon_2 = 'color: '.$color.';';
		}
	}

	$output = '<span class="gem-icon-half-1" style="' . $css_style_icon_1 . '"><span class="back-angle">&#x' . $icon . ';</span></span>'.
	'<span class="gem-icon-half-2" style="' . $css_style_icon_2 . '"><span class="back-angle">&#x' . $icon . ';</span></span>';

	$return_html = '<div class="gem-icon gem-icon-pack-'.$pack.' gem-icon-size-'.$size.' '.$style.' gem-icon-shape-'.$shape.$simple_icon.esc_attr($extra_class).'" style="'.$css_style_icon.'">'.

		($shape == 'hexagon' ? '<div class="gem-icon-shape-hexagon-back"><div class="gem-icon-shape-hexagon-back-inner"><div class="gem-icon-shape-hexagon-back-inner-before" style="background-color: '.($border_color ? $border_color : $background_color).'"></div></div></div><div class="gem-icon-shape-hexagon-top"><div class="gem-icon-shape-hexagon-top-inner"><div class="gem-icon-shape-hexagon-top-inner-before" style="'.$css_style_icon_background.'"></div></div></div>' : '').
		'<div class="gem-icon-inner" style="'.$css_style_icon_background.'">'.
		($shape == 'romb' ? '<div class="romb-icon-conteiner">' : '').
		$output.
		($shape == 'romb' ? '</div>' : '').
		'</div>'.
		'</div>';

	$margin_styles = '';
	if($alignment == 'left') {
		$margin_styles .= 'margin-right: '.intval($margin_left).'px;';
	}
	if($alignment == 'right') {
		$margin_styles .= 'margin-left: '.intval($margin_right).'px;';
	}
	$output_html = '<div class="custom-title-icon custom-title-icon-alignment-'.esc_attr($alignment).'" style="'.$margin_styles.'">'.$return_html.'</div>';

	return $output_html;
}

function thegem_title_background_shortcode($atts, $content) {
	$satts = shortcode_atts(array(
		'use_shortcode_data' => 0,
		'fullwidth' => '',
		'container' => '',
		'color' => '',
		'background_style' => '',
		'background_position_horizontal' => 'center',
		'background_position_vertical' => 'top',
		'background_type' => '',
		'background_color' => '',
		'background_image' => '',
		'background_image_color' => '',
		'background_image_repeat' => '',
		'background_size' => 'auto',
		'background_image_position_x' => 'center',
		'background_image_position_y' => 'top',
		'background_parallax' => '',
		'background_image_overlay' => '',
		'video_background_type' => 'youtube',
		'video_background_src' => '',
		'video_background_acpect_ratio' => '16:9',
		'video_background_overlay_color' => '',
		'video_background_overlay_opacity' => '1',
		'video_background_poster' => '',
		'background_gradient_type' => 'linear',
		'background_gradient_angle' => '0',
		'background_gradient_position' => 'center center',
		'background_gradient_point1_color' => '',
		'background_gradient_point1_position' => '0',
		'background_gradient_point2_color' => '',
		'background_gradient_point2_position' => '100',
		'padding_top' => '80',
		'padding_bottom' => '80',
		'padding_left' => '',
		'padding_right' => '',
		'extra_class' => '',
		'ken_burns_enabled' => false,
		'ken_burns_direction' => 'zoom_in',
		'ken_burns_transition_speed' => 15000

	), $atts, 'gem_title_background');
	$old_version = $satts['background_type'] == '';
	$satts['background_image'] = thegem_attachment_url($satts['background_image']);
	global $thegem_page_title_template_data;
	$page_data = $thegem_page_title_template_data;
	if(!empty($thegem_page_title_template_data['title_use_page_settings'])) {
		if(!$old_version) {
			if($page_data['title_background_type'] == 'color' && !empty($page_data['title_background_color'])) {
				$satts['background_type'] = $page_data['title_background_type'];
				$satts['background_color'] = $page_data['title_background_color'];
			}
			if($page_data['title_background_type'] == 'image' && !empty($page_data['title_background_image'])) {
				$satts['background_type'] = $page_data['title_background_type'];
				$satts['background_color'] = $page_data['title_background_color'];
				$satts['background_image'] = $page_data['title_background_image'];
				$satts['background_image_color'] = $page_data['title_background_image_color'];
				$satts['background_image_repeat'] = $page_data['title_background_image_repeat'];
				$satts['background_size'] = $page_data['title_background_size'];
				$satts['background_image_position_x'] = $page_data['title_background_position_x'];
				$satts['background_image_position_y'] = $page_data['title_background_position_y'];
				$satts['ken_burns_enabled'] = $page_data['title_background_effect'] == 'ken_burns';
				$satts['ken_burns_direction'] = empty($page_data['title_background_ken_burns_direction']) ? $satts['ken_burns_direction'] : $page_data['title_background_ken_burns_direction'];
				$satts['ken_burns_transition_speed'] = empty($page_data['ken_burns_transition_speed']) ? $satts['ken_burns_transition_speed'] : $page_data['ken_burns_transition_speed'];
				$satts['background_parallax'] = $page_data['title_background_effect'] == 'parallax';
				$satts['background_image_overlay'] = $page_data['title_background_image_overlay'];
			}
			if($page_data['title_background_type'] == 'video' && !empty($page_data['title_background_video'])) {
				$satts['background_type'] = $page_data['title_background_type'];
				$satts['video_background_type'] = $page_data['title_background_video_type'];
				$satts['video_background_src'] = $page_data['title_background_video'];
				$satts['video_background_acpect_ratio'] = $page_data['title_background_video_aspect_ratio'];
				$satts['video_background_overlay_color'] = $page_data['title_background_video_overlay'];
				$satts['video_background_overlay_opacity'] = $page_data['title_video_overlay_opacity'];
				$satts['video_background_poster'] = $page_data['title_background_video_poster'];
			}
			if($page_data['title_background_type'] == 'gradient') {
				$satts['background_type'] = $page_data['title_background_type'];
				$satts['background_gradient_type'] = $page_data['title_background_gradient_type'];
				$satts['background_gradient_angle'] = $page_data['title_background_gradient_angle'];
				$satts['background_gradient_position'] = $page_data['title_background_gradient_position'];
				$satts['background_gradient_point1_color'] = $page_data['title_background_gradient_point1_color'];
				$satts['background_gradient_point1_position'] = $page_data['title_background_gradient_point1_position'];
				$satts['background_gradient_point2_color'] = $page_data['title_background_gradient_point2_color'];
				$satts['background_gradient_point2_position'] = $page_data['title_background_gradient_point2_position'];
			}
		} else {
			if($page_data['title_background_type'] == 'color' && !empty($page_data['title_background_color'])) {
				$satts['background_color'] = $page_data['title_background_color'];
			}
			if($page_data['title_background_type'] == 'image' && !empty($page_data['title_background_image'])) {
				$satts['background_color'] = $page_data['title_background_image_color'];
				$satts['background_image'] = $page_data['title_background_image'];
				$satts['background_image_color'] = $page_data['title_background_image_color'];
				$satts['background_parallax'] = $page_data['title_background_effect'] == 'parallax';
				$satts['background_image_overlay'] = $page_data['title_background_image_overlay'];
				$satts['ken_burns_enabled'] = $page_data['title_background_effect'] == 'ken_burns';
				$satts['ken_burns_direction'] = empty($page_data['title_background_ken_burns_direction']) ? $satts['ken_burns_direction'] : $page_data['title_background_ken_burns_direction'];
				$satts['ken_burns_transition_speed'] = empty($page_data['ken_burns_transition_speed']) ? $satts['ken_burns_transition_speed'] : $page_data['ken_burns_transition_speed'];
				$satts['background_image_position_x'] = $satts['background_position_horizontal'];
				$satts['background_image_position_y'] = $satts['background_position_vertical'];
			}
			if($page_data['title_background_type'] == 'video' && !empty($page_data['title_background_video'])) {
				$satts['video_background_type'] = $page_data['title_background_video_type'];
				$satts['video_background_src'] = $page_data['title_background_video'];
				$satts['video_background_acpect_ratio'] = $page_data['title_background_video_aspect_ratio'];
				$satts['video_background_overlay_color'] = $page_data['title_background_video_overlay'];
				$satts['video_background_overlay_opacity'] = $page_data['title_video_overlay_opacity'];
				$satts['video_background_poster'] = $page_data['title_background_video_poster'];
			}
		}
	}

	if($old_version) {
		if($satts['background_style'] == 'repeat') {
			$satts['background_image_repeat'] = true;
		} elseif($satts['background_style'] == 'cover') {
			$satts['background_size'] = 'cover';
		} elseif($satts['background_style'] == 'contain') {
			$satts['background_size'] = 'contain';
		}
		if(!empty($satts['background_image'])) {
			$satts['background_type'] = 'image';
		}
		if(!empty($satts['video_background_src'])) {
			$satts['background_type'] = 'video';
		}
		if(empty($satts['background_type'])) {
			$satts['background_type'] = 'color';
		}
	}
	$satts['background_image'] = empty($satts['background_image']) ? get_template_directory_uri() . '/images/dummy.png' : $satts['background_image'];
	$css_style = '';
	if($satts['color']) {
		$css_style .= 'color: '.$satts['color'].';';
	}
	$background_image_style = '';
	$video = '';
	$overlay = '';
	if($satts['background_type'] == 'image') {
		if(!empty($satts['background_image'])) {
			$background_image_style .= 
				'background-image: url(\''.$satts['background_image'].'\');'.
				'background-repeat: '.($satts['background_image_repeat'] ? '' : 'no-').'repeat;'.
				//'background-color: '.$satts['background_image_color'].';'.
				'background-position-x: '.$satts['background_image_position_x'].';'.
				'background-position-y: '.$satts['background_image_position_y'].';'.
				'background-size: '.$satts['background_size'].';';
				$css_style .= 'background-color: '.$satts['background_image_color'].';';
			if(!empty($satts['background_image_overlay'])) {
				$overlay = '<div class="page-title-background-overlay" style="background-color: '.esc_attr($satts['background_image_overlay']).'"></div>';
			}
		}
	} elseif($satts['background_type'] == 'gradient') {
		if($satts['background_gradient_type'] == 'radial') {
			$background_image_style .= 
				'background-image: radial-gradient(at '.$satts['background_gradient_position'].','.
				$satts['background_gradient_point1_color'].' '.$satts['background_gradient_point1_position'].'%,'.
				$satts['background_gradient_point2_color'].' '.$satts['background_gradient_point2_position'].'%);';
		} else {
			$background_image_style .= 
				'background-image: linear-gradient('.$satts['background_gradient_angle'].'deg,'.
				$satts['background_gradient_point1_color'].' '.$satts['background_gradient_point1_position'].'%,'.
				$satts['background_gradient_point2_color'].' '.$satts['background_gradient_point2_position'].'%);';
		}
	} elseif($satts['background_type'] == 'video') {
		$video = thegem_video_background($satts['video_background_type'], $satts['video_background_src'], $satts['video_background_acpect_ratio'], false, $satts['video_background_overlay_color'], $satts['video_background_overlay_opacity'], thegem_attachment_url($satts['video_background_poster']));
	} else {
		if(!empty($satts['background_color'])) {
			$css_style .= 'background-color: '.$satts['background_color'].';';
		}
	}

	if($satts['padding_top']) {
		$css_style .= 'padding-top: '.$satts['padding_top'].'px;';
	}
	if($satts['padding_bottom']) {
		$css_style .= 'padding-bottom: '.$satts['padding_bottom'].'px;';
	}
	if($satts['padding_left']) {
		$css_style .= 'padding-left: '.$satts['padding_left'].'px;';
	}
	if($satts['padding_right']) {
		$css_style .= 'padding-right: '.$satts['padding_right'].'px;';
	}

	if ($satts['background_parallax']) {
		wp_enqueue_script('thegem-parallax-vertical');
	}

	$fullwidth_uid = '';
	$html_js = '';
	if($satts['fullwidth']) {
		$fullwidth_uid = uniqid();
		$html_js = '<script type="text/javascript">if (typeof(gem_fix_fullwidth_position) == "function") { gem_fix_fullwidth_position(document.getElementById("fullwidth-block-' . $fullwidth_uid . '")); }</script>';
	}

	if ($satts['ken_burns_enabled']) {
		wp_enqueue_style('thegem-ken-burns');
		wp_enqueue_script('thegem-ken-burns');

		$ken_burns_classes[] = 'thegem-ken-burns-bg';
		$ken_burns_classes[] = $satts['ken_burns_direction'] == 'zoom_in' ? 'thegem-ken-burns-zoom-in' : 'thegem-ken-burns-zoom-out';

		$ken_burns_classes = ' '.implode(' ', $ken_burns_classes);
		$background_image_style .= ' animation-duration: '.(!empty($satts['ken_burns_transition_speed']) ? esc_attr(trim($satts['ken_burns_transition_speed'])) : 15000).'ms;';
	}

	$return_html = '<div'.($satts['fullwidth'] ? ' id="fullwidth-block-' . $fullwidth_uid . '"' : '').' class="custom-title-background'.($satts['fullwidth'] ? ' fullwidth-block' : '') . ($satts['extra_class'] ? ' '.esc_attr($satts['extra_class']) : '') . ($satts['background_parallax'] ? ' fullwidth-block-parallax-vertical' : '') .($satts['ken_burns_enabled'] ? ' custom-title-ken-burns-block' : ''). ' clearfix" ' . ' style="'.$css_style.'">' .  $html_js . ($background_image_style != '' ? '<div class="fullwidth-block-background'.(!empty($ken_burns_classes) ? $ken_burns_classes : '').'" style="'.  $background_image_style.'"></div>' : '') .$overlay.$video. '<div class="fullwidth-block-inner">'.  ($satts['container'] ? '<div class="container">' : '').do_shortcode($content).($satts['container'] ? '</div>' : '').'</div></div>';

	return $return_html;
}

if(class_exists('WPBakeryShortCodesContainer')) {
	class WPBakeryShortCode_gem_title_background extends WPBakeryShortCodesContainer {}
}
