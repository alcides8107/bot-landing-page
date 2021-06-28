<?php

function thegem_get_theme_options() {
	_deprecated_function( __FUNCTION__, '4.6.0', 'thegem_get_font_options_list()' );
	return array('fonts' => array('subcats'=> array_fill_keys(thegem_get_font_options_list(), 1)));
}

/*function thegem_get_theme_options() {
	$options = array(
		'general' => array(
			'title' => __('General', 'thegem'),
			'subcats' => array(
				'theme_layout' => array(
					'title' => __('Theme Layout', 'thegem'),
					'options' => array(
						'page_layout_style' => array(
							'title' => __('Page Layout Style', 'thegem'),
							'type' => 'select',
							'items' => array(
								'fullwidth' => __('Fullwidth Layout', 'thegem'),
								'boxed' => __('Boxed Layout', 'thegem'),
							),
							'default' => 'fullwidth',
							'description' => __('Select theme layout style', 'thegem'),
						),
						'page_paddings' => array(
							'title' => __('Fullwidth With Page Paddings', 'thegem'),
							'type' => 'group',
							'options' => array(
								'page_padding_top' => array(
									'title' => __('Top (px)', 'thegem'),
									'type' => 'fixed-number',
									'min' => 0,
									'max' => 200,
									'default' => 0,
								),
								'page_padding_bottom' => array(
									'title' => __('Bottom (px)', 'thegem'),
									'type' => 'fixed-number',
									'min' => 0,
									'max' => 200,
									'default' => 0,
								),
								'page_padding_left' => array(
									'title' => __('Left (px)', 'thegem'),
									'type' => 'fixed-number',
									'min' => 0,
									'max' => 200,
									'default' => 0,
								),
								'page_padding_right' => array(
									'title' => __('Right (px)', 'thegem'),
									'type' => 'fixed-number',
									'min' => 0,
									'max' => 200,
									'default' => 0,
								),
							),
						),
						'disable_scroll_top_button' => array(
							'title' => __('Disable "Scroll To Top" Button', 'thegem'),
							'description' => __('Disable on-scroll "to the top" button', 'thegem'),
							'type' => 'checkbox',
							'value' => 1,
							'default' => 0,
						),
						'disable_uppercase_font' => array(
							'title' => __('Disable uppercase font', 'thegem'),
							'description' => __('Disable uppercase style for main menu items, headings etc. across the whole website', 'thegem'),
							'type' => 'checkbox',
							'value' => 1,
							'default' => 0,
						),
						'disable_smooth_scroll' => array(
							'title' => __('Disable "Smooth Scroll"', 'thegem'),
							'description' => __('Disable "Smooth Scroll" effect for vertical scrolling', 'thegem'),
							'type' => 'checkbox',
							'value' => 1,
							'default' => 0,
						),
						'enable_page_preloader' => array(
							'title' => __('Enable Page Preloader', 'thegem'),
							'description' => __('Enable page preloader for the whole website', 'thegem'),
							'type' => 'checkbox',
							'value' => 1,
							'default' => 0,
						),
					),
				),
				'identity' => array(
					'title' => __('Identity', 'thegem'),
					'options' => array(
						'logo_width' => array(
							'title' => __('Desktop Logo Width For Non-Retina Screens', 'thegem'),
							'type' => 'fixed-number',
							'min' => 0,
							'max' => 1200,
							'default' => 100,
							'description' => __('On our demo website we use 164 pix. logo', 'thegem'),
						),
						'small_logo_width' => array(
							'title' => __('Mobile Logo Width For Non-Retina Screens', 'thegem'),
							'type' => 'fixed-number',
							'min' => 0,
							'max' => 1200,
							'default' => 100,
							'description' => __('On our demo website we use 132 pix. logo', 'thegem'),
						),
						'logo' => array(
							'title' => __('Desktop Logo', 'thegem'),
							'type' => 'image',
							'default' => get_template_directory_uri() . '/images/default-logo.png',
							'description' => __('Upload your logo for desktop screens here. Pls note: if you wish to achieve best quality on retina screens, your logo size should be 3 times larger as the size you have set in "Desktop Logo Width For Non-Retina Screens". On our demo website we use 164 x 3 = 492 pix', 'thegem'),
						),
						'small_logo' => array(
							'title' => __('Small Size & Mobile logo', 'thegem'),
							'type' => 'image',
							'default' => get_template_directory_uri() . '/images/default-logo-small.png',
							'description' => __('Upload your logo for mobile screens here. Pls note: if you wish to achieve best quality on retina mobile screens, your logo size should be 3 times larger as the size you have set in "Mobile Logo Width For Non-Retina Screens". On our demo website we use 132 x 3 = 396 pix', 'thegem'),
						),
						'logo_light' => array(
							'title' => __('Light Desktop Logo', 'thegem'),
							'type' => 'image',
							'default' => get_template_directory_uri() . '/images/default-logo-light.png',
							'description' => __('Here you can upload a light version of your desktop logo to be used on dark header backgrounds. Pls note: if you wish to achieve best quality on retina screens, your logo size should be 3 times larger as the size you have set in "Desktop Logo Width For Non-Retina Screens". On our demo website we use 164 x 3 = 492 pix', 'thegem'),
						),
						'small_logo_light' => array(
							'title' => __('Light Small Size & Mobile logo', 'thegem'),
							'type' => 'image',
							'default' => get_template_directory_uri() . '/images/default-logo.png',
							'description' => __('Here you can upload a light version of your mobile logo to be used on dark header backgrounds. Pls note: if you wish to achieve best quality on retina screens, your logo size should be 3 times larger as the size you have set in "Mobile Logo Width For Non-Retina Screens". On our demo website we use 132 x 3 = 396 pix', 'thegem'),
						),
						'favicon' => array(
							'title' => __('Favicon', 'thegem'),
							'type' => 'image',
							'default' => get_template_directory_uri() . '/images/favicon.ico',
							'description' => __('Upload or select file for your favicon', 'thegem'),
						),
					),
				),
				'advanced' => array(
					'title' => __('Advanced', 'thegem'),
					'options' => array(
						'preloader_style' => array(
							'title' => __('Preloader Style', 'thegem'),
							'type' => 'select',
							'items' => array(
								'preloader-1' => __('Preloader 1', 'thegem'),
								'preloader-2' => __('Preloader 2', 'thegem'),
								'preloader-3' => __('Preloader 3', 'thegem'),
								'preloader-4' => __('Preloader 4', 'thegem'),
							),
							'default' => 'preloader-1',
							'description' => __('Choose preloader you wish to use on your website', 'thegem'),
						),
						'custom_css' => array(
							'title' => __('Custom CSS', 'thegem'),
							'type' => 'textarea',
							'description' => __('Type your custom css here, which you would like to add to theme\'s css (or overwrite it)', 'thegem'),
						),
						'custom_js' => array(
							'title' => __('Custom JS', 'thegem'),
							'type' => 'textarea',
							'description' => __('Type your custom javascript here, which you would like to add to theme\'s js', 'thegem'),
						),
						'tracking_js' => array(
							'title' => __('Tracking', 'thegem'),
							'type' => 'textarea',
							'description' => __('Google Analytics, Google Tag Manager, Facebook Pixel etc.', 'thegem'),
						),
						'portfolio_rewrite_slug' => array(
							'title' => __('Portfolio post type rewrite slug', 'thegem'),
							'type' => 'input',
							'description' => sprintf(__('Here you can define your own slug to appear as part of portfolio\'s URL. By default /pf/ is used.<br><b>IMPORTANT:</b> after changing this slugs, please visit <a href="%s">"Permalink Settings"</a> page and click on "Save changes".', 'thegem'), admin_url('options-permalink.php')),
						),
						'portfolio_archive_page' => array(
							'title' => __(' Parent page for portfolio items', 'thegem'),
							'type' => 'input',
							'description' => __('Here you can define the main parent page for your portfolio items. This feature is useful for defining your breadcrumb structure on portfolio pages.', 'thegem'),
							'type' => 'select',
							'items' => thegem_get_pages_list(),
							'default' => '',
						),
						'news_rewrite_slug' => array(
							'title' => __('News post type rewrite slug', 'thegem'),
							'type' => 'input',
							'description' => sprintf(__('Here you can define your own slug to appear as part of news URL. By default /news/ is used.<br><b>IMPORTANT:</b> after changing this slugs, please visit <a href="%s">"Permalink Settings"</a> page and click on "Save changes".', 'thegem'), admin_url('options-permalink.php')),
						),
						'disable_og_tags' => array(
							'title' => __('Deactivate TheGem\'s Open Graph Tags', 'thegem'),
							'type' => 'checkbox',
							'value' => 1,
							'default' => 0,
						),
						'activate_news_posttype' => array(
							'title' => __('Activate "News" post type', 'thegem'),
							'type' => 'checkbox',
							'value' => 1,
							'default' => 0,
							'description' => __('Additional custom post type, similar to blog posts. This post type can be used to manage news on the website separately to your blog and blog posts.', 'thegem'),
						),
						'activate_nivoslider' => array(
							'title' => __('Activate NivoSlider', 'thegem'),
							'type' => 'checkbox',
							'value' => 1,
							'default' => 0,
							'description' => sprintf(__('Additional simple slider, which can be used to insert slideshows into your pages. Learn more in our <a href="%s" target="_blank">documentation</a>', 'thegem'), esc_url('https://codex-themes.com/thegem/documentation/')),
						),
						'purge_thumbnails' => array(
							'html' => '<div class="description">'.esc_html__('In case you will delete any image thumbnails (portfolio grids, products, galleries etc.) from your hosting, you need to click this button to clear the thumbnails cache in the database in order to be able to regenerate new thumbnails.', 'thegem').'</div><div><a href="'.esc_url(admin_url(wp_nonce_url('admin.php?page=thegem-thumbnails&thegem_flush_thumbnails_cache', 'thegem-thumbnails-cache-flush-all'))).'">'.esc_html__('Purge All Thumbnails Cache', 'thegem').'</a></div>',
							'type' => 'html-block',
						),
					),
				),
				'additional' => array(
					'title' => __('Additional Settings', 'thegem'),
					'options' => array(
						'404_page' => array(
							'title' => __('Custom 404 Page', 'thegem'),
							'type' => 'select',
							'items' => thegem_get_pages_list(),
							'default' => '',
						),
						'enable_mobile_lazy_loading' => array(
							'title' => __('Enabe Lazy Loading Animations On Mobiles', 'thegem'),
							'description' => __('Enabe Lazy Loading Animations On Mobiles', 'thegem'),
							'type' => 'checkbox',
							'value' => 1,
							'default' => 0,
						),
					),
				),
				'pagespeed' => array(
					'title' => __('Pagespeed Optimization', 'thegem'),
					'options' => array(
						'pagespeed_lazy_images_desktop_enable' => array(
							'title' => __('Activate image loading optimization (for desktops)', 'thegem'),
							'description' => __('All images on a webpage will start loading only by nearing the desktop device viewport', 'thegem'),
							'type' => 'checkbox',
							'value' => 1,
							'default' => 0,
						),
						'pagespeed_lazy_images_mobile_enable' => array(
							'title' => __('Activate image loading optimization (for mobiles)', 'thegem'),
							'description' => __('All images on a webpage will start loading only by nearing the mobile device viewport', 'thegem'),
							'type' => 'checkbox',
							'value' => 1,
							'default' => 0,
						),
						'pagespeed_lazy_images_visibility_offset' => array(
							'title' => __('"Start loading" distance to viewport (in px)', 'thegem'),
							'type' => 'input',
							'description' => __('The distance to a device\'s viewport in pixel, when the images should start loading (i.e. buffering zone)', 'thegem'),
						),
						'pagespeed_lazy_images_page_cache_enabled' => array(
							'title' => __('Does your website use any caching plugins?', 'thegem'),
							'description' => __('Select this in case your website uses any of caching plugins like WP Super Cache, W3 Total Cache etc', 'thegem'),
							'type' => 'checkbox',
							'value' => 1,
							'default' => 0,
						),
					),
				),
			),
		),

		'header' => array(
			'title' => __('Menu &amp; Header', 'thegem'),
			'subcats' => array(
				'general' => array(
					'title' => __('Main Menu &amp; Header Area', 'thegem'),
					'options' => array(
						'disable_fixed_header' => array(
							'title' => __('Disable Fixed Header', 'thegem'),
							'type' => 'checkbox',
							'value' => 1,
							'default' => 0,
						),
						'global_hide_breadcrumbs' => array(
							'title' => __('Hide Breadcrumbs', 'thegem'),
							'type' => 'checkbox',
							'value' => 1,
							'default' => 0,
						),
						'sticky_header_on_mobile' => array(
							'title' => __('Sticky Header On Mobile', 'thegem'),
							'type' => 'checkbox',
							'value' => 1,
							'default' => 0,
						),
						'hide_search_icon' => array(
							'title' => __('Hide Search Icon', 'thegem'),
							'type' => 'checkbox',
							'value' => 1,
							'default' => 0,
						),
						'header_layout' => array(
							'title' => __('Main Menu & Header Layout ', 'thegem'),
							'type' => 'select',
							'items' => array(
								'default' => __('Horizontal', 'thegem'),
								'fullwidth' => __('100% Width', 'thegem'),
								'fullwidth_hamburger' => __('100% Width & Hamburger Menu', 'thegem'),
								'vertical' => __('Vertical', 'thegem'),
								'overlay' => __('Overlay', 'thegem'),
								'perspective' => __('Perspective', 'thegem'),
							),
							'description' => __('Choose the layout for displaying your main menu and website header.', 'thegem'),
						),
						'header_style' => array(
							'title' => __('Main Menu & Header Style', 'thegem'),
							'type' => 'select',
							'items' => array(
								'1' => __('Light Main Menu & Dark Submenu', 'thegem'),
								'2' => __('Elegant Font Light Menu', 'thegem'),
								'3' => __('Light Main Menu & Light Submenu', 'thegem'),
								'4' => __('Dark Main Menu & Dark Submenu', 'thegem'),
							),
							'description' => __('Choose the style / colors for displaying your main menu and website header.', 'thegem'),
						),
						'mobile_menu_layout' => array(
							'title' => __('Mobile Menu Layout', 'thegem'),
							'type' => 'select',
							'items' => array(
								'default' => __('Default layout', 'thegem'),
								'overlay' => __('Overlay layout', 'thegem'),
								'slide-horizontal' => __('Slide Left layout', 'thegem'),
								'slide-vertical' => __('Slide Top layout', 'thegem'),
							),
							'description' => __('Choose the layout for displaying your mobile menu.', 'thegem'),
						),
						'mobile_menu_layout_style' => array(
							'title' => __('Mobile Menu Layout Style', 'thegem'),
							'type' => 'select',
							'items' => array(
								'light' => __('Light', 'thegem'),
								'dark' => __('Dark', 'thegem'),
							),
							'description' => __('Choose the layout style for displaying your mobile menu.', 'thegem'),
						),
						'logo_position' => array(
							'title' => __('Logo Alignment', 'thegem'),
							'type' => 'select',
							'items' => array(
								'left' => __('Left', 'thegem'),
								'right' => __('Right', 'thegem'),
								'center' => __('Centered Above Main Menu', 'thegem'),
								'menu_center' => __('Centered In Main Menu', 'thegem'),
							),
							'default' => 'left',
							'description' => __('Select position of your logo in website header', 'thegem'),
						),
						'menu_appearance_tablet_portrait' => array(
							'title' => __('Menu appearance on tablets (portrait orientation)', 'thegem'),
							'type' => 'select',
							'items' => array(
								'responsive' => __('Responsive', 'thegem'),
								'centered' => __('Centered', 'thegem'),
								'default' => __('Default', 'thegem'),
							),
							'default' => 'responsive',
							'description' => __('Select the menu appearance style on tablet screens in portrait orientation', 'thegem'),
						),
						'menu_appearance_tablet_landscape' => array(
							'title' => __('Menu appearance on tablets (landscape orientation)', 'thegem'),
							'type' => 'select',
							'items' => array(
								'responsive' => __('Responsive', 'thegem'),
								'centered' => __('Centered', 'thegem'),
								'default' => __('Default', 'thegem'),
							),
							'default' => 'default',
							'description' => __('Select the menu appearance style on tablet screens in landscape orientation', 'thegem'),
						),
						'hamburger_menu_icon_size' => array(
							'title' => __('Hamburger Icon Style', 'thegem'),
							'type' => 'select',
							'items' => array(
								'' => __('Default', 'thegem'),
								'1' => __('Small', 'thegem'),
							),
						),
					),
				),
				'top_area' => array(
					'title' => __('Top Area', 'thegem'),
					'options' => array(
						'top_area_style' => array(
							'title' => __('Top Area Style', 'thegem'),
							'type' => 'select',
							'items' => array(
								'0' => __('Disabled', 'thegem'),
								'1' => __('Light Background', 'thegem'),
								'2' => __('Dark Background', 'thegem'),
								'3' => __('Anthracite Background', 'thegem'),
							),
							'description' => __('Select the style of top area (contacts & socials bar above main menu and logo) or disable it', 'thegem'),
						),
						'top_area_alignment' => array(
							'title' => __('Top Area Alignment', 'thegem'),
							'type' => 'select',
							'items' => array(
								'left' => __('Left', 'thegem'),
								'right' => __('Right', 'thegem'),
								'center' => __('Centered', 'thegem'),
								'justified' => __('Justified', 'thegem'),
							),
							'description' => __('Select content alignment in the top area of your website', 'thegem'),
						),
						'top_area_contacts' => array(
							'title' => __('Show Contacts', 'thegem'),
							'type' => 'checkbox',
							'value' => 1,
							'default' => 0,
							'description' => __('By activating this option your contact data will be displayed in top area of your website. You can edit your contact data in "Contacts & Socials" section of Theme Options', 'thegem'),
						),
						'top_area_socials' => array(
							'title' => __('Show Socials', 'thegem'),
							'type' => 'checkbox',
							'value' => 1,
							'default' => 0,
							'description' => __('By activating this option the links to your social profiles will be displayed in top area of your website. You can edit your social profiles in "Contacts & Socials" section of Theme Options', 'thegem'),
						),
						'top_area_button_text' => array(
							'title' => __('Top Area Button Text', 'thegem'),
							'type' => 'input',
							'default' => '',
							'description' => __('Here you can activate and name the button to be displayed in top area. Leave blank if you don\'t wish to use a button in top area.', 'thegem'),
						),
						'top_area_button_link' => array(
							'title' => __('Top Area Button Link', 'thegem'),
							'type' => 'input',
							'default' => '',
							'description' => __('Here you can enter the link for your top area button.', 'thegem'),
						),
						'top_area_disable_fixed' => array(
							'title' => __('Disable Fixed Top Area', 'thegem'),
							'type' => 'checkbox',
							'value' => 1,
							'default' => 0,
						),
						'top_area_disable_mobile' => array(
							'title' => __('Disable Top Area For Mobiles', 'thegem'),
							'type' => 'checkbox',
							'value' => 1,
							'default' => 0,
						),
						'top_area_disable_tablet' => array(
							'title' => __('Disable Top Area For Tablets', 'thegem'),
							'type' => 'checkbox',
							'value' => 1,
							'default' => 0,
						),
					),
				),

			),
		),

		'fonts' => array(
			'title' => __('Fonts', 'thegem'),
			'subcats' => array(
				'main_menu_font' => array(
					'title' => __('Main Menu Font', 'thegem'),
					'options' => array(
						'main_menu_font_family' => array(
							'title' => __('Font Family', 'thegem'),
							'type' => 'font-select',
							'description' => __('Select font family you would like to use. On the top of the fonts list you\'ll find web safe fonts', 'thegem'),
						),
						'main_menu_font_style' => array(
							'title' => __('Font Style', 'thegem'),
							'type' => 'font-style',
							'description' => __('Select font style for your font', 'thegem'),
						),
						'main_menu_font_sets' => array(
							'title' => __('Font Sets', 'thegem'),
							'type' => 'font-sets',
							'description' => __('Type in or load additional font sets which you would like to use with your chosen google font (latin-ext is loaded by default)', 'thegem'),
							'default' => 'latin,latin-ext'
						),
						'main_menu_font_size' => array(
							'title' => __('Font Size', 'thegem'),
							'description' => __('Select the font size', 'thegem'),
							'type' => 'fixed-number',
							'min' => 10,
							'max' => 100,
							'default' => 18,
						),
						'main_menu_line_height' => array(
							'title' => __('Line Height', 'thegem'),
							'description' => __('Select the line height', 'thegem'),
							'type' => 'fixed-number',
							'min' => 10,
							'max' => 150,
							'default' => 18,
						),
					),
				),
				'submenu_font' => array(
					'title' => __('Submenu Font', 'thegem'),
					'options' => array(
						'submenu_font_family' => array(
							'title' => __('Font Family', 'thegem'),
							'type' => 'font-select',
							'description' => __('Select font family you would like to use. On the top of the fonts list you\'ll find web safe fonts', 'thegem'),
						),
						'submenu_font_style' => array(
							'title' => __('Font Style', 'thegem'),
							'type' => 'font-style',
							'description' => __('Select font style for your font', 'thegem'),
						),
						'submenu_font_sets' => array(
							'title' => __('Font Sets', 'thegem'),
							'type' => 'font-sets',
							'description' => __('Type in or load additional font sets which you would like to use with your chosen google font (latin-ext is loaded by default)', 'thegem'),
							'default' => 'latin,latin-ext'
						),
						'submenu_font_size' => array(
							'title' => __('Font Size', 'thegem'),
							'description' => __('Select the font size', 'thegem'),
							'type' => 'fixed-number',
							'min' => 10,
							'max' => 100,
							'default' => 12,
						),
						'submenu_line_height' => array(
							'title' => __('Line Height', 'thegem'),
							'description' => __('Select the line height', 'thegem'),
							'type' => 'fixed-number',
							'min' => 10,
							'max' => 150,
							'default' => 18,
						),
					),
				),
				'overlay_menu_font' => array(
					'title' => __('Overlay Menu Font', 'thegem'),
					'options' => array(
						'overlay_menu_font_family' => array(
							'title' => __('Font Family', 'thegem'),
							'type' => 'font-select',
							'description' => __('Select font family you would like to use. On the top of the fonts list you\'ll find web safe fonts', 'thegem'),
						),
						'overlay_menu_font_style' => array(
							'title' => __('Font Style', 'thegem'),
							'type' => 'font-style',
							'description' => __('Select font style for your font', 'thegem'),
						),
						'overlay_menu_font_sets' => array(
							'title' => __('Font Sets', 'thegem'),
							'type' => 'font-sets',
							'description' => __('Type in or load additional font sets which you would like to use with your chosen google font (latin-ext is loaded by default)', 'thegem'),
							'default' => 'latin,latin-ext'
						),
						'overlay_menu_font_size' => array(
							'title' => __('Font Size', 'thegem'),
							'description' => __('Select the font size', 'thegem'),
							'type' => 'fixed-number',
							'min' => 10,
							'max' => 100,
							'default' => 12,
						),
						'overlay_menu_line_height' => array(
							'title' => __('Line Height', 'thegem'),
							'description' => __('Select the line height', 'thegem'),
							'type' => 'fixed-number',
							'min' => 10,
							'max' => 150,
							'default' => 18,
						),
					),
				),
				'mobile_menu_font' => array(
					'title' => __('Mobile Menu Font', 'thegem'),
					'options' => array(
						'mobile_menu_font_family' => array(
							'title' => __('Font Family', 'thegem'),
							'type' => 'font-select',
							'description' => __('Select font family you would like to use. On the top of the fonts list you\'ll find web safe fonts', 'thegem'),
						),
						'mobile_menu_font_style' => array(
							'title' => __('Font Style', 'thegem'),
							'type' => 'font-style',
							'description' => __('Select font style for your font', 'thegem'),
						),
						'mobile_menu_font_sets' => array(
							'title' => __('Font Sets', 'thegem'),
							'type' => 'font-sets',
							'description' => __('Type in or load additional font sets which you would like to use with your chosen google font (latin-ext is loaded by default)', 'thegem'),
							'default' => 'latin,latin-ext'
						),
						'mobile_menu_font_size' => array(
							'title' => __('Font Size', 'thegem'),
							'description' => __('Select the font size', 'thegem'),
							'type' => 'fixed-number',
							'min' => 10,
							'max' => 100,
							'default' => 12,
						),
						'mobile_menu_line_height' => array(
							'title' => __('Line Height', 'thegem'),
							'description' => __('Select the line height', 'thegem'),
							'type' => 'fixed-number',
							'min' => 10,
							'max' => 150,
							'default' => 18,
						),
					)
				),
				'styled_subtitle_font' => array(
					'title' => __('Styled Subtitle Font', 'thegem'),
					'options' => array(
						'styled_subtitle_font_family' => array(
							'title' => __('Font Family', 'thegem'),
							'type' => 'font-select',
							'description' => __('Select font family you would like to use. On the top of the fonts list you\'ll find web safe fonts', 'thegem'),
						),
						'styled_subtitle_font_style' => array(
							'title' => __('Font Style', 'thegem'),
							'type' => 'font-style',
							'description' => __('Select font style for your font', 'thegem'),
						),
						'styled_subtitle_font_sets' => array(
							'title' => __('Font Sets', 'thegem'),
							'type' => 'font-sets',
							'description' => __('Type in or load additional font sets which you would like to use with your chosen google font (latin-ext is loaded by default)', 'thegem'),
							'default' => 'latin,latin-ext'
						),
						'styled_subtitle_font_size' => array(
							'title' => __('Font Size', 'thegem'),
							'description' => __('Select the font size', 'thegem'),
							'type' => 'fixed-number',
							'min' => 10,
							'max' => 100,
							'default' => 29,
						),
						'styled_subtitle_line_height' => array(
							'title' => __('Line Height', 'thegem'),
							'description' => __('Select the line height', 'thegem'),
							'type' => 'fixed-number',
							'min' => 10,
							'max' => 150,
							'default' => 18,
						),
						'styled_subtitle_custom_responsive_fonts' => array(
							'title' => __('Use manual settings for mobiles and tablets', 'thegem'),
							'type' => 'checkbox',
							'value' => 1,
							'default' => 0,
						),
						'styled_subtitle_custom_responsive_fonts_group' => array(
							'type' => 'hidden-group',
							'options' => array(
								'styled_subtitle_font_size_tablet' => array(
									'title' => __('Font Size for Tablets', 'thegem'),
									'description' => __('Select the font size', 'thegem'),
									'type' => 'fixed-number',
									'min' => 10,
									'max' => 100,
									'default' => 18,
								),
								'styled_subtitle_line_height_tablet' => array(
									'title' => __('Line Height for Tablets', 'thegem'),
									'description' => __('Select the line height', 'thegem'),
									'type' => 'fixed-number',
									'min' => 10,
									'max' => 150,
									'default' => 29,
								),
								'styled_subtitle_font_size_mobile' => array(
									'title' => __('Font Size for Mobiles', 'thegem'),
									'description' => __('Select the font size', 'thegem'),
									'type' => 'fixed-number',
									'min' => 10,
									'max' => 100,
									'default' => 18,
								),
								'styled_subtitle_line_height_mobile' => array(
									'title' => __('Line Height for Mobiles', 'thegem'),
									'description' => __('Select the line height', 'thegem'),
									'type' => 'fixed-number',
									'min' => 10,
									'max' => 150,
									'default' => 29,
								),
							),
						),

					),
				),
				'h1_font' => array(
					'title' => __('H1 Font', 'thegem'),
					'options' => array(
						'h1_font_family' => array(
							'title' => __('Font Family', 'thegem'),
							'type' => 'font-select',
							'description' => __('Select font family you would like to use. On the top of the fonts list you\'ll find web safe fonts', 'thegem'),
						),
						'h1_font_style' => array(
							'title' => __('Font Style', 'thegem'),
							'type' => 'font-style',
							'description' => __('Select font style for your font', 'thegem'),
						),
						'h1_font_sets' => array(
							'title' => __('Font Sets', 'thegem'),
							'type' => 'font-sets',
							'description' => __('Type in or load additional font sets which you would like to use with your chosen google font (latin-ext is loaded by default)', 'thegem'),
							'default' => 'latin,latin-ext'
						),
						'h1_font_size' => array(
							'title' => __('Font Size', 'thegem'),
							'description' => __('Select the font size', 'thegem'),
							'type' => 'fixed-number',
							'min' => 10,
							'max' => 100,
							'default' => 29,
						),
						'h1_line_height' => array(
							'title' => __('Line Height', 'thegem'),
							'description' => __('Select the line height', 'thegem'),
							'type' => 'fixed-number',
							'min' => 10,
							'max' => 150,
							'default' => 18,
						),
						'h1_custom_responsive_fonts' => array(
							'title' => __('Use manual settings for mobiles and tablets', 'thegem'),
							'type' => 'checkbox',
							'value' => 1,
							'default' => 0,
						),
						'h1_custom_responsive_fonts_group' => array(
							'type' => 'hidden-group',
							'options' => array(
								'h1_font_size_tablet' => array(
									'title' => __('Font Size for Tablets', 'thegem'),
									'description' => __('Select the font size', 'thegem'),
									'type' => 'fixed-number',
									'min' => 10,
									'max' => 100,
									'default' => 18,
								),
								'h1_line_height_tablet' => array(
									'title' => __('Line Height for Tablets', 'thegem'),
									'description' => __('Select the line height', 'thegem'),
									'type' => 'fixed-number',
									'min' => 10,
									'max' => 150,
									'default' => 29,
								),
								'h1_font_size_mobile' => array(
									'title' => __('Font Size for Mobiles', 'thegem'),
									'description' => __('Select the font size', 'thegem'),
									'type' => 'fixed-number',
									'min' => 10,
									'max' => 100,
									'default' => 18,
								),
								'h1_line_height_mobile' => array(
									'title' => __('Line Height for Mobiles', 'thegem'),
									'description' => __('Select the line height', 'thegem'),
									'type' => 'fixed-number',
									'min' => 10,
									'max' => 150,
									'default' => 29,
								),
							),
						),
					),
				),
				'h2_font' => array(
					'title' => __('H2 Font', 'thegem'),
					'options' => array(
						'h2_font_family' => array(
							'title' => __('Font Family', 'thegem'),
							'type' => 'font-select',
							'description' => __('Select font family you would like to use. On the top of the fonts list you\'ll find web safe fonts', 'thegem'),
						),
						'h2_font_style' => array(
							'title' => __('Font Style', 'thegem'),
							'type' => 'font-style',
							'description' => __('Select font style for your font', 'thegem'),
						),
						'h2_font_sets' => array(
							'title' => __('Font Sets', 'thegem'),
							'type' => 'font-sets',
							'description' => __('Type in or load additional font sets which you would like to use with your chosen google font (latin-ext is loaded by default)', 'thegem'),
							'default' => 'latin,latin-ext'
						),
						'h2_font_size' => array(
							'title' => __('Font Size', 'thegem'),
							'description' => __('Select the font size', 'thegem'),
							'type' => 'fixed-number',
							'min' => 10,
							'max' => 100,
							'default' => 25,
						),
						'h2_line_height' => array(
							'title' => __('Line Height', 'thegem'),
							'description' => __('Select the line height', 'thegem'),
							'type' => 'fixed-number',
							'min' => 10,
							'max' => 150,
							'default' => 18,
						),
						'h2_custom_responsive_fonts' => array(
							'title' => __('Use manual settings for mobiles and tablets', 'thegem'),
							'type' => 'checkbox',
							'value' => 1,
							'default' => 0,
						),
						'h2_custom_responsive_fonts_group' => array(
							'type' => 'hidden-group',
							'options' => array(
								'h2_font_size_tablet' => array(
									'title' => __('Font Size for Tablets', 'thegem'),
									'description' => __('Select the font size', 'thegem'),
									'type' => 'fixed-number',
									'min' => 10,
									'max' => 100,
									'default' => 18,
								),
								'h2_line_height_tablet' => array(
									'title' => __('Line Height for Tablets', 'thegem'),
									'description' => __('Select the line height', 'thegem'),
									'type' => 'fixed-number',
									'min' => 10,
									'max' => 150,
									'default' => 29,
								),
								'h2_font_size_mobile' => array(
									'title' => __('Font Size for Mobiles', 'thegem'),
									'description' => __('Select the font size', 'thegem'),
									'type' => 'fixed-number',
									'min' => 10,
									'max' => 100,
									'default' => 18,
								),
								'h2_line_height_mobile' => array(
									'title' => __('Line Height for Mobiles', 'thegem'),
									'description' => __('Select the line height', 'thegem'),
									'type' => 'fixed-number',
									'min' => 10,
									'max' => 150,
									'default' => 29,
								),
							),
						),
					),
				),
				'h3_font' => array(
					'title' => __('H3 Font', 'thegem'),
					'options' => array(
						'h3_font_family' => array(
							'title' => __('Font Family', 'thegem'),
							'type' => 'font-select',
							'description' => __('Select font family you would like to use. On the top of the fonts list you\'ll find web safe fonts', 'thegem'),
						),
						'h3_font_style' => array(
							'title' => __('Font Style', 'thegem'),
							'type' => 'font-style',
							'description' => __('Select font style for your font', 'thegem'),
						),
						'h3_font_sets' => array(
							'title' => __('Font Sets', 'thegem'),
							'type' => 'font-sets',
							'description' => __('Type in or load additional font sets which you would like to use with your chosen google font (latin-ext is loaded by default)', 'thegem'),
							'default' => 'latin,latin-ext'
						),
						'h3_font_size' => array(
							'title' => __('Font Size', 'thegem'),
							'description' => __('Select the font size', 'thegem'),
							'type' => 'fixed-number',
							'min' => 10,
							'max' => 100,
							'default' => 23,
						),
						'h3_line_height' => array(
							'title' => __('Line Height', 'thegem'),
							'description' => __('Select the line height', 'thegem'),
							'type' => 'fixed-number',
							'min' => 10,
							'max' => 150,
							'default' => 18,
						),
						'h3_custom_responsive_fonts' => array(
							'title' => __('Use manual settings for mobiles and tablets', 'thegem'),
							'type' => 'checkbox',
							'value' => 1,
							'default' => 0,
						),
						'h3_custom_responsive_fonts_group' => array(
							'type' => 'hidden-group',
							'options' => array(
								'h3_font_size_tablet' => array(
									'title' => __('Font Size for Tablets', 'thegem'),
									'description' => __('Select the font size', 'thegem'),
									'type' => 'fixed-number',
									'min' => 10,
									'max' => 100,
									'default' => 18,
								),
								'h3_line_height_tablet' => array(
									'title' => __('Line Height for Tablets', 'thegem'),
									'description' => __('Select the line height', 'thegem'),
									'type' => 'fixed-number',
									'min' => 10,
									'max' => 150,
									'default' => 29,
								),
								'h3_font_size_mobile' => array(
									'title' => __('Font Size for Mobiles', 'thegem'),
									'description' => __('Select the font size', 'thegem'),
									'type' => 'fixed-number',
									'min' => 10,
									'max' => 100,
									'default' => 18,
								),
								'h3_line_height_mobile' => array(
									'title' => __('Line Height for Mobiles', 'thegem'),
									'description' => __('Select the line height', 'thegem'),
									'type' => 'fixed-number',
									'min' => 10,
									'max' => 150,
									'default' => 29,
								),
							),
						),
					),
				),
				'h4_font' => array(
					'title' => __('H4 Font', 'thegem'),
					'options' => array(
						'h4_font_family' => array(
							'title' => __('Font Family', 'thegem'),
							'type' => 'font-select',
							'description' => __('Select font family you would like to use. On the top of the fonts list you\'ll find web safe fonts', 'thegem'),
						),
						'h4_font_style' => array(
							'title' => __('Font Style', 'thegem'),
							'type' => 'font-style',
							'description' => __('Select font style for your font', 'thegem'),
						),
						'h4_font_sets' => array(
							'title' => __('Font Sets', 'thegem'),
							'type' => 'font-sets',
							'description' => __('Type in or load additional font sets which you would like to use with your chosen google font (latin-ext is loaded by default)', 'thegem'),
							'default' => 'latin,latin-ext'
						),
						'h4_font_size' => array(
							'title' => __('Font Size', 'thegem'),
							'description' => __('Select the font size', 'thegem'),
							'type' => 'fixed-number',
							'min' => 10,
							'max' => 100,
							'default' => 21,
						),
						'h4_line_height' => array(
							'title' => __('Line Height', 'thegem'),
							'description' => __('Select the line height', 'thegem'),
							'type' => 'fixed-number',
							'min' => 10,
							'max' => 150,
							'default' => 18,
						),
						'h4_custom_responsive_fonts' => array(
							'title' => __('Use manual settings for mobiles and tablets', 'thegem'),
							'type' => 'checkbox',
							'value' => 1,
							'default' => 0,
						),
						'h4_custom_responsive_fonts_group' => array(
							'type' => 'hidden-group',
							'options' => array(
								'h4_font_size_tablet' => array(
									'title' => __('Font Size for Tablets', 'thegem'),
									'description' => __('Select the font size', 'thegem'),
									'type' => 'fixed-number',
									'min' => 10,
									'max' => 100,
									'default' => 18,
								),
								'h4_line_height_tablet' => array(
									'title' => __('Line Height for Tablets', 'thegem'),
									'description' => __('Select the line height', 'thegem'),
									'type' => 'fixed-number',
									'min' => 10,
									'max' => 150,
									'default' => 29,
								),
								'h4_font_size_mobile' => array(
									'title' => __('Font Size for Mobiles', 'thegem'),
									'description' => __('Select the font size', 'thegem'),
									'type' => 'fixed-number',
									'min' => 10,
									'max' => 100,
									'default' => 18,
								),
								'h4_line_height_mobile' => array(
									'title' => __('Line Height for Mobiles', 'thegem'),
									'description' => __('Select the line height', 'thegem'),
									'type' => 'fixed-number',
									'min' => 10,
									'max' => 150,
									'default' => 29,
								),
							),
						),
					),
				),
				'h5_font' => array(
					'title' => __('H5 Font', 'thegem'),
					'options' => array(
						'h5_font_family' => array(
							'title' => __('Font Family', 'thegem'),
							'type' => 'font-select',
							'description' => __('Select font family you would like to use. On the top of the fonts list you\'ll find web safe fonts', 'thegem'),
						),
						'h5_font_style' => array(
							'title' => __('Font Style', 'thegem'),
							'type' => 'font-style',
							'description' => __('Select font style for your font', 'thegem'),
						),
						'h5_font_sets' => array(
							'title' => __('Font Sets', 'thegem'),
							'type' => 'font-sets',
							'description' => __('Type in or load additional font sets which you would like to use with your chosen google font (latin-ext is loaded by default)', 'thegem'),
							'default' => 'latin,latin-ext'
						),
						'h5_font_size' => array(
							'title' => __('Font Size', 'thegem'),
							'description' => __('Select the font size', 'thegem'),
							'type' => 'fixed-number',
							'min' => 10,
							'max' => 100,
							'default' => 19,
						),
						'h5_line_height' => array(
							'title' => __('Line Height', 'thegem'),
							'description' => __('Select the line height', 'thegem'),
							'type' => 'fixed-number',
							'min' => 10,
							'max' => 150,
							'default' => 18,
						),
						'h5_custom_responsive_fonts' => array(
							'title' => __('Use manual settings for mobiles and tablets', 'thegem'),
							'type' => 'checkbox',
							'value' => 1,
							'default' => 0,
						),
						'h5_custom_responsive_fonts_group' => array(
							'type' => 'hidden-group',
							'options' => array(
								'h5_font_size_tablet' => array(
									'title' => __('Font Size for Tablets', 'thegem'),
									'description' => __('Select the font size', 'thegem'),
									'type' => 'fixed-number',
									'min' => 10,
									'max' => 100,
									'default' => 18,
								),
								'h5_line_height_tablet' => array(
									'title' => __('Line Height for Tablets', 'thegem'),
									'description' => __('Select the line height', 'thegem'),
									'type' => 'fixed-number',
									'min' => 10,
									'max' => 150,
									'default' => 29,
								),
								'h5_font_size_mobile' => array(
									'title' => __('Font Size for Mobiles', 'thegem'),
									'description' => __('Select the font size', 'thegem'),
									'type' => 'fixed-number',
									'min' => 10,
									'max' => 100,
									'default' => 18,
								),
								'h5_line_height_mobile' => array(
									'title' => __('Line Height for Mobiles', 'thegem'),
									'description' => __('Select the line height', 'thegem'),
									'type' => 'fixed-number',
									'min' => 10,
									'max' => 150,
									'default' => 29,
								),
							),
						),
					),
				),
				'h6_font' => array(
					'title' => __('H6 Font', 'thegem'),
					'options' => array(
						'h6_font_family' => array(
							'title' => __('Font Family', 'thegem'),
							'type' => 'font-select',
							'description' => __('Select font family you would like to use. On the top of the fonts list you\'ll find web safe fonts', 'thegem'),
						),
						'h6_font_style' => array(
							'title' => __('Font Style', 'thegem'),
							'type' => 'font-style',
							'description' => __('Select font style for your font', 'thegem'),
						),
						'h6_font_sets' => array(
							'title' => __('Font Sets', 'thegem'),
							'type' => 'font-sets',
							'description' => __('Type in or load additional font sets which you would like to use with your chosen google font (latin-ext is loaded by default)', 'thegem'),
							'default' => 'latin,latin-ext'
						),
						'h6_font_size' => array(
							'title' => __('Font Size', 'thegem'),
							'description' => __('Select the font size', 'thegem'),
							'type' => 'fixed-number',
							'min' => 10,
							'max' => 100,
							'default' => 17,
						),
						'h6_line_height' => array(
							'title' => __('Line Height', 'thegem'),
							'description' => __('Select the line height', 'thegem'),
							'type' => 'fixed-number',
							'min' => 10,
							'max' => 150,
							'default' => 18,
						),
						'h6_custom_responsive_fonts' => array(
							'title' => __('Use manual settings for mobiles and tablets', 'thegem'),
							'type' => 'checkbox',
							'value' => 1,
							'default' => 0,
						),
						'h6_custom_responsive_fonts_group' => array(
							'type' => 'hidden-group',
							'options' => array(
								'h6_font_size_tablet' => array(
									'title' => __('Font Size for Tablets', 'thegem'),
									'description' => __('Select the font size', 'thegem'),
									'type' => 'fixed-number',
									'min' => 10,
									'max' => 100,
									'default' => 18,
								),
								'h6_line_height_tablet' => array(
									'title' => __('Line Height for Tablets', 'thegem'),
									'description' => __('Select the line height', 'thegem'),
									'type' => 'fixed-number',
									'min' => 10,
									'max' => 150,
									'default' => 29,
								),
								'h6_font_size_mobile' => array(
									'title' => __('Font Size for Mobiles', 'thegem'),
									'description' => __('Select the font size', 'thegem'),
									'type' => 'fixed-number',
									'min' => 10,
									'max' => 100,
									'default' => 18,
								),
								'h6_line_height_mobile' => array(
									'title' => __('Line Height for Mobiles', 'thegem'),
									'description' => __('Select the line height', 'thegem'),
									'type' => 'fixed-number',
									'min' => 10,
									'max' => 150,
									'default' => 29,
								),
							),
						),
					),
				),
				'xlarge_title_font' => array(
					'title' => __('XLarge Title Font', 'thegem'),
					'options' => array(
						'xlarge_title_font_family' => array(
							'title' => __('Font Family', 'thegem'),
							'type' => 'font-select',
							'description' => __('Select font family you would like to use. On the top of the fonts list you\'ll find web safe fonts', 'thegem'),
						),
						'xlarge_title_font_style' => array(
							'title' => __('Font Style', 'thegem'),
							'type' => 'font-style',
							'description' => __('Select font style for your font', 'thegem'),
						),
						'xlarge_title_font_sets' => array(
							'title' => __('Font Sets', 'thegem'),
							'type' => 'font-sets',
							'description' => __('Type in or load additional font sets which you would like to use with your chosen google font (latin-ext is loaded by default)', 'thegem'),
							'default' => 'latin,latin-ext'
						),
						'xlarge_title_font_size' => array(
							'title' => __('Font Size', 'thegem'),
							'description' => __('Select the font size', 'thegem'),
							'type' => 'fixed-number',
							'min' => 10,
							'max' => 100,
							'default' => 17,
						),
						'xlarge_title_line_height' => array(
							'title' => __('Line Height', 'thegem'),
							'description' => __('Select the line height', 'thegem'),
							'type' => 'fixed-number',
							'min' => 10,
							'max' => 150,
							'default' => 18,
						),
						'xlarge_custom_responsive_fonts' => array(
							'title' => __('Use manual settings for mobiles and tablets', 'thegem'),
							'type' => 'checkbox',
							'value' => 1,
							'default' => 0,
						),
						'xlarge_custom_responsive_fonts_group' => array(
							'type' => 'hidden-group',
							'options' => array(
								'xlarge_font_size_tablet' => array(
									'title' => __('Font Size for Tablets', 'thegem'),
									'description' => __('Select the font size', 'thegem'),
									'type' => 'fixed-number',
									'min' => 10,
									'max' => 100,
									'default' => 18,
								),
								'xlarge_line_height_tablet' => array(
									'title' => __('Line Height for Tablets', 'thegem'),
									'description' => __('Select the line height', 'thegem'),
									'type' => 'fixed-number',
									'min' => 10,
									'max' => 150,
									'default' => 29,
								),
								'xlarge_font_size_mobile' => array(
									'title' => __('Font Size for Mobiles', 'thegem'),
									'description' => __('Select the font size', 'thegem'),
									'type' => 'fixed-number',
									'min' => 10,
									'max' => 100,
									'default' => 18,
								),
								'xlarge_line_height_mobile' => array(
									'title' => __('Line Height for Mobiles', 'thegem'),
									'description' => __('Select the line height', 'thegem'),
									'type' => 'fixed-number',
									'min' => 10,
									'max' => 150,
									'default' => 29,
								),
							),
						),
					),
				),
				'light_title_font' => array(
					'title' => __('Light Title Font', 'thegem'),
					'options' => array(
						'light_title_font_family' => array(
							'title' => __('Font Family', 'thegem'),
							'type' => 'font-select',
							'description' => __('Select font family you would like to use. On the top of the fonts list you\'ll find web safe fonts', 'thegem'),
						),
						'light_title_font_style' => array(
							'title' => __('Font Style', 'thegem'),
							'type' => 'font-style',
							'description' => __('Select font style for your font', 'thegem'),
						),
						'light_title_font_sets' => array(
							'title' => __('Font Sets', 'thegem'),
							'type' => 'font-sets',
							'description' => __('Type in or load additional font sets which you would like to use with your chosen google font (latin-ext is loaded by default)', 'thegem'),
							'default' => 'latin,latin-ext'
						),
					),
				),
				'body_font' => array(
					'title' => __('Body Font', 'thegem'),
					'options' => array(
						'body_font_family' => array(
							'title' => __('Font Family', 'thegem'),
							'type' => 'font-select',
							'description' => __('Select font family you would like to use. On the top of the fonts list you\'ll find web safe fonts', 'thegem'),
						),
						'body_font_style' => array(
							'title' => __('Font Style', 'thegem'),
							'type' => 'font-style',
							'description' => __('Select font style for your font', 'thegem'),
						),
						'body_font_sets' => array(
							'title' => __('Font Sets', 'thegem'),
							'type' => 'font-sets',
							'description' => __('Type in or load additional font sets which you would like to use with your chosen google font (latin-ext is loaded by default)', 'thegem'),
							'default' => 'latin,latin-ext'
						),
						'body_font_size' => array(
							'title' => __('Font Size', 'thegem'),
							'description' => __('Select the font size', 'thegem'),
							'type' => 'fixed-number',
							'min' => 10,
							'max' => 100,
							'default' => 14,
						),
						'body_line_height' => array(
							'title' => __('Line Height', 'thegem'),
							'description' => __('Select the line height', 'thegem'),
							'type' => 'fixed-number',
							'min' => 10,
							'max' => 150,
							'default' => 18,
						),
					),
				),
				'title_excerpt_font' => array(
					'title' => __('Title Excerpt Font', 'thegem'),
					'options' => array(
						'title_excerpt_font_family' => array(
							'title' => __('Font Family', 'thegem'),
							'type' => 'font-select',
							'description' => __('Select font family you would like to use. On the top of the fonts list you\'ll find web safe fonts', 'thegem'),
						),
						'title_excerpt_font_style' => array(
							'title' => __('Font Style', 'thegem'),
							'type' => 'font-style',
							'description' => __('Select font style for your font', 'thegem'),
						),
						'title_excerpt_font_sets' => array(
							'title' => __('Font Sets', 'thegem'),
							'type' => 'font-sets',
							'description' => __('Type in or load additional font sets which you would like to use with your chosen google font (latin-ext is loaded by default)', 'thegem'),
							'default' => 'latin,latin-ext'
						),
						'title_excerpt_font_size' => array(
							'title' => __('Font Size', 'thegem'),
							'description' => __('Select the font size', 'thegem'),
							'type' => 'fixed-number',
							'min' => 10,
							'max' => 100,
							'default' => 29,
						),
						'title_excerpt_line_height' => array(
							'title' => __('Line Height', 'thegem'),
							'description' => __('Select the line height', 'thegem'),
							'type' => 'fixed-number',
							'min' => 10,
							'max' => 150,
							'default' => 18,
						),
						'title_excerpt_custom_responsive_fonts' => array(
							'title' => __('Use manual settings for mobiles and tablets', 'thegem'),
							'type' => 'checkbox',
							'value' => 1,
							'default' => 0,
						),
						'title_excerpt_custom_responsive_fonts_group' => array(
							'type' => 'hidden-group',
							'options' => array(
								'title_excerpt_font_size_tablet' => array(
									'title' => __('Font Size for Tablets', 'thegem'),
									'description' => __('Select the font size', 'thegem'),
									'type' => 'fixed-number',
									'min' => 10,
									'max' => 100,
									'default' => 18,
								),
								'title_excerpt_line_height_tablet' => array(
									'title' => __('Line Height for Tablets', 'thegem'),
									'description' => __('Select the line height', 'thegem'),
									'type' => 'fixed-number',
									'min' => 10,
									'max' => 150,
									'default' => 29,
								),
								'title_excerpt_font_size_mobile' => array(
									'title' => __('Font Size for Mobiles', 'thegem'),
									'description' => __('Select the font size', 'thegem'),
									'type' => 'fixed-number',
									'min' => 10,
									'max' => 100,
									'default' => 18,
								),
								'title_excerpt_line_height_mobile' => array(
									'title' => __('Line Height for Mobiles', 'thegem'),
									'description' => __('Select the line height', 'thegem'),
									'type' => 'fixed-number',
									'min' => 10,
									'max' => 150,
									'default' => 29,
								),
							),
						),
					),
				),
				'widget_title_font' => array(
					'title' => __('Widget Title Font', 'thegem'),
					'options' => array(
						'widget_title_font_family' => array(
							'title' => __('Font Family', 'thegem'),
							'type' => 'font-select',
							'description' => __('Select font family you would like to use. On the top of the fonts list you\'ll find web safe fonts', 'thegem'),
						),
						'widget_title_font_style' => array(
							'title' => __('Font Style', 'thegem'),
							'type' => 'font-style',
							'description' => __('Select font style for your font', 'thegem'),
						),
						'widget_title_font_sets' => array(
							'title' => __('Font Sets', 'thegem'),
							'type' => 'font-sets',
							'description' => __('Type in or load additional font sets which you would like to use with your chosen google font (latin-ext is loaded by default)', 'thegem'),
							'default' => 'latin,latin-ext'
						),
						'widget_title_font_size' => array(
							'title' => __('Font Size', 'thegem'),
							'description' => __('Select the font size', 'thegem'),
							'type' => 'fixed-number',
							'min' => 10,
							'max' => 100,
							'default' => 14,
						),
						'widget_title_line_height' => array(
							'title' => __('Line Height', 'thegem'),
							'description' => __('Select the line height', 'thegem'),
							'type' => 'fixed-number',
							'min' => 10,
							'max' => 150,
							'default' => 18,
						),
					),
				),
				'button_font' => array(
					'title' => __('Button Font', 'thegem'),
					'options' => array(
						'button_font_family' => array(
							'title' => __('Font Family', 'thegem'),
							'type' => 'font-select',
							'description' => __('Select font family you would like to use. On the top of the fonts list you\'ll find web safe fonts', 'thegem'),
						),
						'button_font_style' => array(
							'title' => __('Font Style', 'thegem'),
							'type' => 'font-style',
							'description' => __('Select font style for your font', 'thegem'),
						),
						'button_font_sets' => array(
							'title' => __('Font Sets', 'thegem'),
							'type' => 'font-sets',
							'description' => __('Type in or load additional font sets which you would like to use with your chosen google font (latin-ext is loaded by default)', 'thegem'),
							'default' => 'latin,latin-ext'
						),
					),
				),
				'button_thin_font' => array(
					'title' => __('Button Thin Font', 'thegem'),
					'options' => array(
						'button_thin_font_family' => array(
							'title' => __('Font Family', 'thegem'),
							'type' => 'font-select',
							'description' => __('Select font family you would like to use. On the top of the fonts list you\'ll find web safe fonts', 'thegem'),
						),
						'button_thin_font_style' => array(
							'title' => __('Font Style', 'thegem'),
							'type' => 'font-style',
							'description' => __('Select font style for your font', 'thegem'),
						),
						'button_thin_font_sets' => array(
							'title' => __('Font Sets', 'thegem'),
							'type' => 'font-sets',
							'description' => __('Type in or load additional font sets which you would like to use with your chosen google font (latin-ext is loaded by default)', 'thegem'),
							'default' => 'latin,latin-ext'
						),
					),
				),
				'portfolio_title_font' => array(
					'title' => __('Portfolio Title Font', 'thegem'),
					'options' => array(
						'portfolio_title_font_family' => array(
							'title' => __('Font Family', 'thegem'),
							'type' => 'font-select',
							'description' => __('Select font family you would like to use. On the top of the fonts list you\'ll find web safe fonts', 'thegem'),
						),
						'portfolio_title_font_style' => array(
							'title' => __('Font Style', 'thegem'),
							'type' => 'font-style',
							'description' => __('Select font style for your font', 'thegem'),
						),
						'portfolio_title_font_sets' => array(
							'title' => __('Font Sets', 'thegem'),
							'type' => 'font-sets',
							'description' => __('Type in or load additional font sets which you would like to use with your chosen google font (latin-ext is loaded by default)', 'thegem'),
							'default' => 'latin,latin-ext'
						),
						'portfolio_title_font_size' => array(
							'title' => __('Font Size', 'thegem'),
							'description' => __('Select the font size', 'thegem'),
							'type' => 'fixed-number',
							'min' => 10,
							'max' => 100,
							'default' => 16,
						),
						'portfolio_title_line_height' => array(
							'title' => __('Line Height', 'thegem'),
							'description' => __('Select the line height', 'thegem'),
							'type' => 'fixed-number',
							'min' => 10,
							'max' => 150,
							'default' => 18,
						),
					),
				),
				'portfolio_description_font' => array(
					'title' => __('Portfolio Description Font', 'thegem'),
					'options' => array(
						'portfolio_description_font_family' => array(
							'title' => __('Font Family', 'thegem'),
							'type' => 'font-select',
							'description' => __('Select font family you would like to use. On the top of the fonts list you\'ll find web safe fonts', 'thegem'),
						),
						'portfolio_description_font_style' => array(
							'title' => __('Font Style', 'thegem'),
							'type' => 'font-style',
							'description' => __('Select font style for your font', 'thegem'),
						),
						'portfolio_description_font_sets' => array(
							'title' => __('Font Sets', 'thegem'),
							'type' => 'font-sets',
							'description' => __('Type in or load additional font sets which you would like to use with your chosen google font (latin-ext is loaded by default)', 'thegem'),
							'default' => 'latin,latin-ext'
						),
						'portfolio_description_font_size' => array(
							'title' => __('Font Size', 'thegem'),
							'description' => __('Select the font size', 'thegem'),
							'type' => 'fixed-number',
							'min' => 10,
							'max' => 100,
							'default' => 16,
						),
						'portfolio_description_line_height' => array(
							'title' => __('Line Height', 'thegem'),
							'description' => __('Select the line height', 'thegem'),
							'type' => 'fixed-number',
							'min' => 10,
							'max' => 150,
							'default' => 18,
						),
					),
				),
				'quickfinder_title_font' => array(
					'title' => __('Quickfinder Title Font (Bold Style)', 'thegem'),
					'options' => array(
						'quickfinder_title_font_family' => array(
							'title' => __('Font Family', 'thegem'),
							'type' => 'font-select',
							'description' => __('Select font family you would like to use. On the top of the fonts list you\'ll find web safe fonts', 'thegem'),
						),
						'quickfinder_title_font_style' => array(
							'title' => __('Font Style', 'thegem'),
							'type' => 'font-style',
							'description' => __('Select font style for your font', 'thegem'),
						),
						'quickfinder_title_font_sets' => array(
							'title' => __('Font Sets', 'thegem'),
							'type' => 'font-sets',
							'description' => __('Type in or load additional font sets which you would like to use with your chosen google font (latin-ext is loaded by default)', 'thegem'),
							'default' => 'latin,latin-ext'
						),
						'quickfinder_title_font_size' => array(
							'title' => __('Font Size', 'thegem'),
							'description' => __('Select the font size', 'thegem'),
							'type' => 'fixed-number',
							'min' => 10,
							'max' => 100,
							'default' => 16,
						),
						'quickfinder_title_line_height' => array(
							'title' => __('Line Height', 'thegem'),
							'description' => __('Select the line height', 'thegem'),
							'type' => 'fixed-number',
							'min' => 10,
							'max' => 150,
							'default' => 18,
						),
					),
				),
				'quickfinder_title_thin_font' => array(
					'title' => __('Quickfinder Title Font (Thin Style)', 'thegem'),
					'options' => array(
						'quickfinder_title_thin_font_family' => array(
							'title' => __('Font Family', 'thegem'),
							'type' => 'font-select',
							'description' => __('Select font family you would like to use. On the top of the fonts list you\'ll find web safe fonts', 'thegem'),
						),
						'quickfinder_title_thin_font_style' => array(
							'title' => __('Font Style', 'thegem'),
							'type' => 'font-style',
							'description' => __('Select font style for your font', 'thegem'),
						),
						'quickfinder_title_thin_font_sets' => array(
							'title' => __('Font Sets', 'thegem'),
							'type' => 'font-sets',
							'description' => __('Type in or load additional font sets which you would like to use with your chosen google font (latin-ext is loaded by default)', 'thegem'),
							'default' => 'latin,latin-ext'
						),
						'quickfinder_title_thin_font_size' => array(
							'title' => __('Font Size', 'thegem'),
							'description' => __('Select the font size', 'thegem'),
							'type' => 'fixed-number',
							'min' => 10,
							'max' => 100,
							'default' => 16,
						),
						'quickfinder_title_thin_line_height' => array(
							'title' => __('Line Height', 'thegem'),
							'description' => __('Select the line height', 'thegem'),
							'type' => 'fixed-number',
							'min' => 10,
							'max' => 150,
							'default' => 18,
						),
					),
				),
				'quickfinder_description_font' => array(
					'title' => __('Quickfinder Description Font', 'thegem'),
					'options' => array(
						'quickfinder_description_font_family' => array(
							'title' => __('Font Family', 'thegem'),
							'type' => 'font-select',
							'description' => __('Select font family you would like to use. On the top of the fonts list you\'ll find web safe fonts', 'thegem'),
						),
						'quickfinder_description_font_style' => array(
							'title' => __('Font Style', 'thegem'),
							'type' => 'font-style',
							'description' => __('Select font style for your font', 'thegem'),
						),
						'quickfinder_description_font_sets' => array(
							'title' => __('Font Sets', 'thegem'),
							'type' => 'font-sets',
							'description' => __('Type in or load additional font sets which you would like to use with your chosen google font (latin-ext is loaded by default)', 'thegem'),
							'default' => 'latin,latin-ext'
						),
						'quickfinder_description_font_size' => array(
							'title' => __('Font Size', 'thegem'),
							'description' => __('Select the font size', 'thegem'),
							'type' => 'fixed-number',
							'min' => 10,
							'max' => 100,
							'default' => 16,
						),
						'quickfinder_description_line_height' => array(
							'title' => __('Line Height', 'thegem'),
							'description' => __('Select the line height', 'thegem'),
							'type' => 'fixed-number',
							'min' => 10,
							'max' => 150,
							'default' => 18,
						),
					),
				),
				'gallery_title_font' => array(
					'title' => __('Gallery Title Font', 'thegem'),
					'options' => array(
						'gallery_title_font_family' => array(
							'title' => __('Font Family', 'thegem'),
							'type' => 'font-select',
							'description' => __('Select font family you would like to use. On the top of the fonts list you\'ll find web safe fonts', 'thegem'),
						),
						'gallery_title_font_style' => array(
							'title' => __('Font Style', 'thegem'),
							'type' => 'font-style',
							'description' => __('Select font style for your font', 'thegem'),
						),
						'gallery_title_font_sets' => array(
							'title' => __('Font Sets', 'thegem'),
							'type' => 'font-sets',
							'description' => __('Type in or load additional font sets which you would like to use with your chosen google font (latin-ext is loaded by default)', 'thegem'),
							'default' => 'latin,latin-ext'
						),
						'gallery_title_font_size' => array(
							'title' => __('Font Size', 'thegem'),
							'description' => __('Select the font size', 'thegem'),
							'type' => 'fixed-number',
							'min' => 10,
							'max' => 100,
							'default' => 16,
						),
						'gallery_title_line_height' => array(
							'title' => __('Line Height', 'thegem'),
							'description' => __('Select the line height', 'thegem'),
							'type' => 'fixed-number',
							'min' => 10,
							'max' => 150,
							'default' => 18,
						),
					),
				),
				'gallery_title_bold_font' => array(
					'title' => __('Gallery Title Font (Bold Style)', 'thegem'),
					'options' => array(
						'gallery_title_bold_font_family' => array(
							'title' => __('Font Family', 'thegem'),
							'type' => 'font-select',
							'description' => __('Select font family you would like to use. On the top of the fonts list you\'ll find web safe fonts', 'thegem'),
						),
						'gallery_title_bold_font_style' => array(
							'title' => __('Font Style', 'thegem'),
							'type' => 'font-style',
							'description' => __('Select font style for your font', 'thegem'),
						),
						'gallery_title_bold_font_sets' => array(
							'title' => __('Font Sets', 'thegem'),
							'type' => 'font-sets',
							'description' => __('Type in or load additional font sets which you would like to use with your chosen google font (latin-ext is loaded by default)', 'thegem'),
							'default' => 'latin,latin-ext'
						),
						'gallery_title_bold_font_size' => array(
							'title' => __('Font Size', 'thegem'),
							'description' => __('Select the font size', 'thegem'),
							'type' => 'fixed-number',
							'min' => 10,
							'max' => 100,
							'default' => 16,
						),
						'gallery_title_bold_line_height' => array(
							'title' => __('Line Height', 'thegem'),
							'description' => __('Select the line height', 'thegem'),
							'type' => 'fixed-number',
							'min' => 10,
							'max' => 150,
							'default' => 18,
						),
					),
				),
				'gallery_description_font' => array(
					'title' => __('Gallery Description Font', 'thegem'),
					'options' => array(
						'gallery_description_font_family' => array(
							'title' => __('Font Family', 'thegem'),
							'type' => 'font-select',
							'description' => __('Select font family you would like to use. On the top of the fonts list you\'ll find web safe fonts', 'thegem'),
						),
						'gallery_description_font_style' => array(
							'title' => __('Font Style', 'thegem'),
							'type' => 'font-style',
							'description' => __('Select font style for your font', 'thegem'),
						),
						'gallery_description_font_sets' => array(
							'title' => __('Font Sets', 'thegem'),
							'type' => 'font-sets',
							'description' => __('Type in or load additional font sets which you would like to use with your chosen google font (latin-ext is loaded by default)', 'thegem'),
							'default' => 'latin,latin-ext'
						),
						'gallery_description_font_size' => array(
							'title' => __('Font Size', 'thegem'),
							'description' => __('Select the font size', 'thegem'),
							'type' => 'fixed-number',
							'min' => 10,
							'max' => 100,
							'default' => 16,
						),
						'gallery_description_line_height' => array(
							'title' => __('Line Height', 'thegem'),
							'description' => __('Select the line height', 'thegem'),
							'type' => 'fixed-number',
							'min' => 10,
							'max' => 150,
							'default' => 18,
						),
					),
				),
				'testimonial_font' => array(
					'title' => __('Testimonials Quoted Text', 'thegem'),
					'options' => array(
						'testimonial_font_family' => array(
							'title' => __('Font Family', 'thegem'),
							'type' => 'font-select',
							'description' => __('Select font family you would like to use. On the top of the fonts list you\'ll find web safe fonts', 'thegem'),
						),
						'testimonial_font_style' => array(
							'title' => __('Font Style', 'thegem'),
							'type' => 'font-style',
							'description' => __('Select font style for your font', 'thegem'),
						),
						'testimonial_font_sets' => array(
							'title' => __('Font Sets', 'thegem'),
							'type' => 'font-sets',
							'description' => __('Type in or load additional font sets which you would like to use with your chosen google font (latin-ext is loaded by default)', 'thegem'),
							'default' => 'latin,latin-ext'
						),
						'testimonial_font_size' => array(
							'title' => __('Font Size', 'thegem'),
							'description' => __('Select the font size', 'thegem'),
							'type' => 'fixed-number',
							'min' => 10,
							'max' => 100,
							'default' => 16,
						),
						'testimonial_line_height' => array(
							'title' => __('Line Height', 'thegem'),
							'description' => __('Select the line height', 'thegem'),
							'type' => 'fixed-number',
							'min' => 10,
							'max' => 150,
							'default' => 18,
						),
					),
				),
				'counter_font' => array(
					'title' => __('Counter Numbers', 'thegem'),
					'options' => array(
						'counter_font_family' => array(
							'title' => __('Font Family', 'thegem'),
							'type' => 'font-select',
							'description' => __('Select font family you would like to use. On the top of the fonts list you\'ll find web safe fonts', 'thegem'),
						),
						'counter_font_style' => array(
							'title' => __('Font Style', 'thegem'),
							'type' => 'font-style',
							'description' => __('Select font style for your font', 'thegem'),
						),
						'counter_font_sets' => array(
							'title' => __('Font Sets', 'thegem'),
							'type' => 'font-sets',
							'description' => __('Type in or load additional font sets which you would like to use with your chosen google font (latin-ext is loaded by default)', 'thegem'),
							'default' => 'latin,latin-ext'
						),
						'counter_font_size' => array(
							'title' => __('Font Size', 'thegem'),
							'description' => __('Select the font size', 'thegem'),
							'type' => 'fixed-number',
							'min' => 10,
							'max' => 100,
							'default' => 16,
						),
						'counter_line_height' => array(
							'title' => __('Line Height', 'thegem'),
							'description' => __('Select the line height', 'thegem'),
							'type' => 'fixed-number',
							'min' => 10,
							'max' => 150,
							'default' => 18,
						),
						'counter_custom_responsive_fonts' => array(
							'title' => __('Use manual settings for mobiles and tablets', 'thegem'),
							'type' => 'checkbox',
							'value' => 1,
							'default' => 0,
						),
						'counter_custom_responsive_fonts_group' => array(
							'type' => 'hidden-group',
							'options' => array(
								'counter_font_size_tablet' => array(
									'title' => __('Font Size for Tablets', 'thegem'),
									'description' => __('Select the font size', 'thegem'),
									'type' => 'fixed-number',
									'min' => 10,
									'max' => 100,
									'default' => 18,
								),
								'counter_line_height_tablet' => array(
									'title' => __('Line Height for Tablets', 'thegem'),
									'description' => __('Select the line height', 'thegem'),
									'type' => 'fixed-number',
									'min' => 10,
									'max' => 150,
									'default' => 29,
								),
								'counter_font_size_mobile' => array(
									'title' => __('Font Size for Mobiles', 'thegem'),
									'description' => __('Select the font size', 'thegem'),
									'type' => 'fixed-number',
									'min' => 10,
									'max' => 100,
									'default' => 18,
								),
								'counter_line_height_mobile' => array(
									'title' => __('Line Height for Mobiles', 'thegem'),
									'description' => __('Select the line height', 'thegem'),
									'type' => 'fixed-number',
									'min' => 10,
									'max' => 150,
									'default' => 29,
								),
							),
						),
					),
				),
				'tabs_title_font' => array(
					'title' => __('Title Font for Tabs, Tours & Accordions (Bold Style)', 'thegem'),
					'options' => array(
						'tabs_title_font_family' => array(
							'title' => __('Font Family', 'thegem'),
							'type' => 'font-select',
							'description' => __('Select font family you would like to use. On the top of the fonts list you\'ll find web safe fonts', 'thegem'),
						),
						'tabs_title_font_style' => array(
							'title' => __('Font Style', 'thegem'),
							'type' => 'font-style',
							'description' => __('Select font style for your font', 'thegem'),
						),
						'tabs_title_font_sets' => array(
							'title' => __('Font Sets', 'thegem'),
							'type' => 'font-sets',
							'description' => __('Type in or load additional font sets which you would like to use with your chosen google font (latin-ext is loaded by default)', 'thegem'),
							'default' => 'latin,latin-ext'
						),
						'tabs_title_font_size' => array(
							'title' => __('Font Size', 'thegem'),
							'description' => __('Select the font size', 'thegem'),
							'type' => 'fixed-number',
							'min' => 10,
							'max' => 100,
							'default' => 16,
						),
						'tabs_title_line_height' => array(
							'title' => __('Line Height', 'thegem'),
							'description' => __('Select the line height', 'thegem'),
							'type' => 'fixed-number',
							'min' => 10,
							'max' => 150,
							'default' => 18,
						),
					),
				),
				'tabs_title_thin_font' => array(
					'title' => __('Title Font for Tabs, Tours & Accordions (Thin Style)', 'thegem'),
					'options' => array(
						'tabs_title_thin_font_family' => array(
							'title' => __('Font Family', 'thegem'),
							'type' => 'font-select',
							'description' => __('Select font family you would like to use. On the top of the fonts list you\'ll find web safe fonts', 'thegem'),
						),
						'tabs_title_thin_font_style' => array(
							'title' => __('Font Style', 'thegem'),
							'type' => 'font-style',
							'description' => __('Select font style for your font', 'thegem'),
						),
						'tabs_title_thin_font_sets' => array(
							'title' => __('Font Sets', 'thegem'),
							'type' => 'font-sets',
							'description' => __('Type in or load additional font sets which you would like to use with your chosen google font (latin-ext is loaded by default)', 'thegem'),
							'default' => 'latin,latin-ext'
						),
						'tabs_title_thin_font_size' => array(
							'title' => __('Font Size', 'thegem'),
							'description' => __('Select the font size', 'thegem'),
							'type' => 'fixed-number',
							'min' => 10,
							'max' => 100,
							'default' => 16,
						),
						'tabs_title_thin_line_height' => array(
							'title' => __('Line Height', 'thegem'),
							'description' => __('Select the line height', 'thegem'),
							'type' => 'fixed-number',
							'min' => 10,
							'max' => 150,
							'default' => 18,
						),
					),
				),
				'woocommerce_price_font' => array(
					'title' => __('WooCommerce Product Category Price', 'thegem'),
					'options' => array(
						'woocommerce_price_font_family' => array(
							'title' => __('Font Family', 'thegem'),
							'type' => 'font-select',
							'description' => __('Select font family you would like to use. On the top of the fonts list you\'ll find web safe fonts', 'thegem'),
						),
						'woocommerce_price_font_style' => array(
							'title' => __('Font Style', 'thegem'),
							'type' => 'font-style',
							'description' => __('Select font style for your font', 'thegem'),
						),
						'woocommerce_price_font_sets' => array(
							'title' => __('Font Sets', 'thegem'),
							'type' => 'font-sets',
							'description' => __('Type in or load additional font sets which you would like to use with your chosen google font (latin-ext is loaded by default)', 'thegem'),
							'default' => 'latin,latin-ext'
						),
						'woocommerce_price_font_size' => array(
							'title' => __('Font Size', 'thegem'),
							'description' => __('Select the font size', 'thegem'),
							'type' => 'fixed-number',
							'min' => 10,
							'max' => 100,
							'default' => 16,
						),
						'woocommerce_price_line_height' => array(
							'title' => __('Line Height', 'thegem'),
							'description' => __('Select the line height', 'thegem'),
							'type' => 'fixed-number',
							'min' => 10,
							'max' => 150,
							'default' => 18,
						),
					),
				),
				'slideshow_title_font' => array(
					'title' => __('NivoSlider Title Font', 'thegem'),
					'options' => array(
						'slideshow_title_font_family' => array(
							'title' => __('Font Family', 'thegem'),
							'type' => 'font-select',
							'description' => __('Select font family you would like to use. On the top of the fonts list you\'ll find web safe fonts', 'thegem'),
						),
						'slideshow_title_font_style' => array(
							'title' => __('Font Style', 'thegem'),
							'type' => 'font-style',
							'description' => __('Select font style for your font', 'thegem'),
						),
						'slideshow_title_font_sets' => array(
							'title' => __('Font Sets', 'thegem'),
							'type' => 'font-sets',
							'description' => __('Type in or load additional font sets which you would like to use with your chosen google font (latin-ext is loaded by default)', 'thegem'),
							'default' => 'latin,latin-ext'
						),
						'slideshow_title_font_size' => array(
							'title' => __('Font Size', 'thegem'),
							'description' => __('Select the font size', 'thegem'),
							'type' => 'fixed-number',
							'min' => 10,
							'max' => 100,
							'default' => 16,
						),
						'slideshow_title_line_height' => array(
							'title' => __('Line Height', 'thegem'),
							'description' => __('Select the line height', 'thegem'),
							'type' => 'fixed-number',
							'min' => 10,
							'max' => 150,
							'default' => 18,
						),
					),
				),
				'slideshow_description_font' => array(
					'title' => __('NivoSlider Description Font', 'thegem'),
					'options' => array(
						'slideshow_description_font_family' => array(
							'title' => __('Font Family', 'thegem'),
							'type' => 'font-select',
							'description' => __('Select font family you would like to use. On the top of the fonts list you\'ll find web safe fonts', 'thegem'),
						),
						'slideshow_description_font_style' => array(
							'title' => __('Font Style', 'thegem'),
							'type' => 'font-style',
							'description' => __('Select font style for your font', 'thegem'),
						),
						'slideshow_description_font_sets' => array(
							'title' => __('Font Sets', 'thegem'),
							'type' => 'font-sets',
							'description' => __('Type in or load additional font sets which you would like to use with your chosen google font (latin-ext is loaded by default)', 'thegem'),
							'default' => 'latin,latin-ext'
						),
						'slideshow_description_font_size' => array(
							'title' => __('Font Size', 'thegem'),
							'description' => __('Select the font size', 'thegem'),
							'type' => 'fixed-number',
							'min' => 10,
							'max' => 100,
							'default' => 16,
						),
						'slideshow_description_line_height' => array(
							'title' => __('Line Height', 'thegem'),
							'description' => __('Select the line height', 'thegem'),
							'type' => 'fixed-number',
							'min' => 10,
							'max' => 150,
							'default' => 18,
						),
					),
				),
			),
		),

		'colors' => array(
			'title' => __('Colors', 'thegem'),
			'subcats' => array(
				'background_main_colors' => array(
					'title' => __('Background And Main Colors', 'thegem'),
					'options' => array(
						'basic_outer_background_color' => array(
							'title' => __('Background Color For Boxed Layouts &amp; Perspective Menu', 'thegem'),
							'type' => 'color',
							'description' => __('Select website\'s backround color in boxed layout and perspective menu', 'thegem'),
						),
						'top_background_color' => array(
							'title' => __('Main Menu &amp; Header Area Background', 'thegem'),
							'type' => 'color',
							'description' => __('Background color for the website\'s header area with main menu and logo', 'thegem'),
						),
						'main_background_color' => array(
							'title' => __('Main Content Background Color', 'thegem'),
							'type' => 'color',
							'description' => __('Main background color for pages, blog posts, portfolio &amp; shop items. It is also used as background for certain blog list styles, portfolio overviews, team items and tables. Additionally this color is used as text font color for text elements published on dark backgrounds, like footer on our demo website.', 'thegem'),
						),
						'styled_elements_background_color' => array(
							'title' => __('Styled Element Background Color', 'thegem'),
							'type' => 'color',
							'description' => __('After the main content background color this is a second most important background color for the website. It is used as background for following widgets: submenu, diagrams, project info, recent posts & comments, testimonials & teams. Also it is used as item\'s background color in grid overviews of blog posts and portfolio items; in testimonial, team and tables shortcodes as well as in background of sticky posts.', 'thegem'),
						),
						'styled_elements_color_1' => array(
							'title' => __('Styled Element Color 1', 'thegem'),
							'type' => 'color',
							'description' => __('This color is used mainly as font text color of some widget elements, some elements like teams, testimonials, blog items. It is also used as background color for the label of sticky post in blogs', 'thegem'),
						),
						'styled_elements_color_2' => array(
							'title' => __('Styled Element Color 2', 'thegem'),
							'type' => 'color',
							'description' => __('Background color for a few widget elements.', 'thegem'),
						),
						'styled_elements_color_3' => array(
							'title' => __('Styled Element Color 3', 'thegem'),
							'type' => 'color',
							'description' => __('This color is used for following elements: likes icon and markers in widget headings ', 'thegem'),
						),
						'styled_elements_color_4' => array(
							'title' => __('Styled Element Color 4', 'thegem'),
							'type' => 'color',
							'description' => __('This color is used for following elements: woocommerce buttons', 'thegem'),
						),
						'divider_default_color' => array(
							'title' => __('Divider Default Color', 'thegem'),
							'type' => 'color',
							'description' => __('Default color for dividers used in theme: content dividers, widget dividers, blog & news posts dividers etc.', 'thegem'),
						),
						'box_border_color' => array(
							'title' => __('Box Border & Sharing Icons In Blog Posts', 'thegem'),
							'type' => 'color',
							'description' => __('Color used as default border color in box elements in main content and sidebar widgets. Also this color is used as font color for social sharing icons in blog posts.', 'thegem'),
						),
					),
				),
				'menu_colors' => array(
					'title' => __('Menu Colors', 'thegem'),
					'options' => array(
						'main_menu_level1_color' => array(
							'title' => __('Level 1 Text Color', 'thegem'),
							'type' => 'color',
						),
						'main_menu_level1_background_color' => array(
							'title' => __('Level 1 Background Color', 'thegem'),
							'type' => 'color',
						),
						'main_menu_level1_hover_color' => array(
							'title' => __('Level 1 Hover Text Color', 'thegem'),
							'type' => 'color',
						),
						'main_menu_level1_hover_background_color' => array(
							'title' => __('Level 1 Hover Background Color', 'thegem'),
							'type' => 'color',
						),
						'main_menu_level1_active_color' => array(
							'title' => __('Level 1 Active Text Color', 'thegem'),
							'type' => 'color',
						),
						'main_menu_level1_active_background_color' => array(
							'title' => __('Level 1 Active Background Color', 'thegem'),
							'type' => 'color',
						),
						'main_menu_level2_color' => array(
							'title' => __('Level 2 Text Color', 'thegem'),
							'type' => 'color',
						),
						'main_menu_level2_background_color' => array(
							'title' => __('Level 2 Background Color', 'thegem'),
							'type' => 'color',
						),
						'main_menu_level2_hover_color' => array(
							'title' => __('Level 2 Hover Text Color', 'thegem'),
							'type' => 'color',
						),
						'main_menu_level2_hover_background_color' => array(
							'title' => __('Level 2 Hover Background Color', 'thegem'),
							'type' => 'color',
						),
						'main_menu_level2_active_color' => array(
							'title' => __('Level 2 Active Text Color', 'thegem'),
							'type' => 'color',
						),
						'main_menu_level2_active_background_color' => array(
							'title' => __('Level 2 Active Background Color', 'thegem'),
							'type' => 'color',
						),
						'main_menu_mega_column_title_color' => array(
							'title' => __('Mega Menu Column Titles Text Color', 'thegem'),
							'type' => 'color',
						),
						'main_menu_mega_column_title_hover_color' => array(
							'title' => __('Mega Menu Column Titles Hover Text Color', 'thegem'),
							'type' => 'color',
						),
						'main_menu_mega_column_title_active_color' => array(
							'title' => __('Mega Menu Column Titles Active Text Color', 'thegem'),
							'type' => 'color',
						),
						'main_menu_level3_color' => array(
							'title' => __('Level 3+ Text Color', 'thegem'),
							'type' => 'color',
						),
						'main_menu_level3_background_color' => array(
							'title' => __('Level 3+ Background Color', 'thegem'),
							'type' => 'color',
						),
						'main_menu_level3_hover_color' => array(
							'title' => __('Level 3+ Hover Text Color', 'thegem'),
							'type' => 'color',
						),
						'main_menu_level3_hover_background_color' => array(
							'title' => __('Level 3+ Hover Background Color', 'thegem'),
							'type' => 'color',
						),
						'main_menu_level3_active_color' => array(
							'title' => __('Level 3+ Active Text Color', 'thegem'),
							'type' => 'color',
						),
						'main_menu_level3_active_background_color' => array(
							'title' => __('Level 3+ Active Background Color', 'thegem'),
							'type' => 'color',
						),
						'main_menu_level1_light_color' => array(
							'title' => __('Level 1 Light Text Color', 'thegem'),
							'type' => 'color',
						),
						'main_menu_level1_light_hover_color' => array(
							'title' => __('Level 1 Hover Light Text Color', 'thegem'),
							'type' => 'color',
						),
						'main_menu_level1_light_active_color' => array(
							'title' => __('Level 1 Active Light Text Color', 'thegem'),
							'type' => 'color',
						),
						'main_menu_level2_border_color' => array(
							'title' => __('Level 2+ Border Color', 'thegem'),
							'type' => 'color',
						),
						'mega_menu_icons_color' => array(
							'title' => __('Mega Menu Icons Color', 'thegem'),
							'type' => 'color',
						),
						'overlay_menu_background_color' => array(
							'title' => __('Overlay Menu Background Color', 'thegem'),
							'type' => 'color',
						),
						'overlay_menu_color' => array(
							'title' => __('Overlay Menu Text Color', 'thegem'),
							'type' => 'color',
						),
						'overlay_menu_hover_color' => array(
							'title' => __('Overlay Menu Hover Text Color', 'thegem'),
							'type' => 'color',
						),
						'overlay_menu_active_color' => array(
							'title' => __('Overlay Menu Active Text Color', 'thegem'),
							'type' => 'color',
						),
						'hamburger_menu_icon_color' => array(
							'title' => __('Hamburger Icon Color', 'thegem'),
							'type' => 'color',
						),
						'hamburger_menu_icon_light_color' => array(
							'title' => __('Hamburger Icon Light Color', 'thegem'),
							'type' => 'color',
						),
					),
				),
				'mobile_menu_colors' => array(
					'title' => __('Mobile Menu Colors', 'thegem'),
					'options' => array(
						'mobile_menu_button_color' => array(
							'title' => __('Mobile Menu Button Color', 'thegem'),
							'type' => 'color',
						),
						'mobile_menu_button_light_color' => array(
							'title' => __('Mobile Menu Button Light Color', 'thegem'),
							'type' => 'color',
						),
						'mobile_menu_background_color' => array(
							'title' => __('Menu Background Color', 'thegem'),
							'type' => 'color',
						),
						'mobile_menu_level1_color' => array(
							'title' => __('Level 1 Text Color', 'thegem'),
							'type' => 'color',
						),
						'mobile_menu_level1_background_color' => array(
							'title' => __('Level 1 Background Color', 'thegem'),
							'type' => 'color',
						),
						'mobile_menu_level1_active_color' => array(
							'title' => __('Level 1 Active Text Color', 'thegem'),
							'type' => 'color',
						),
						'mobile_menu_level1_active_background_color' => array(
							'title' => __('Level 1 Active Background Color', 'thegem'),
							'type' => 'color',
						),
						'mobile_menu_level2_color' => array(
							'title' => __('Level 2 Text Color', 'thegem'),
							'type' => 'color',
						),
						'mobile_menu_level2_background_color' => array(
							'title' => __('Level 2 Background Color', 'thegem'),
							'type' => 'color',
						),
						'mobile_menu_level2_active_color' => array(
							'title' => __('Level 2 Active Text Color', 'thegem'),
							'type' => 'color',
						),
						'mobile_menu_level2_active_background_color' => array(
							'title' => __('Level 2 Active Background Color', 'thegem'),
							'type' => 'color',
						),
						'mobile_menu_level3_color' => array(
							'title' => __('Level 3+ Text Color', 'thegem'),
							'type' => 'color',
						),
						'mobile_menu_level3_background_color' => array(
							'title' => __('Level 3+ Background Color', 'thegem'),
							'type' => 'color',
						),
						'mobile_menu_level3_active_color' => array(
							'title' => __('Level 3+ Active Text Color', 'thegem'),
							'type' => 'color',
						),
						'mobile_menu_level3_active_background_color' => array(
							'title' => __('Level 3+ Active Background Color', 'thegem'),
							'type' => 'color',
						),
						'mobile_menu_border_color' => array(
							'title' => __('Border Color', 'thegem'),
							'type' => 'color',
						),
						'mobile_menu_social_icon_color' => array(
							'title' => __('Social Icon Color', 'thegem'),
							'type' => 'color',
						),
						'mobile_menu_hide_color' => array(
							'title' => __('Hide Menu Button Color', 'thegem'),
							'type' => 'color',
						),
					),
				),
				'top_area_colors' => array(
					'title' => __('Top Area Colors', 'thegem'),
					'options' => array(
						'top_area_background_color' => array(
							'title' => __('Top Area Background Color', 'thegem'),
							'type' => 'color',
							'description' => __('Background color for the selected style of top area (contacts & socials bar above main menu and logo). You can select from different top area styles in "Header -> Top Area"', 'thegem'),
						),
						'top_area_border_color' => array(
							'title' => __('Top Area Border Color', 'thegem'),
							'type' => 'color',
						),
						'top_area_separator_color' => array(
							'title' => __('Top Area Separator Color', 'thegem'),
							'type' => 'color',
						),
						'top_area_text_color' => array(
							'title' => __('Top Area Text Color', 'thegem'),
							'type' => 'color',
							'description' => __('Main font color for text used in top area', 'thegem'),
						),
						'top_area_link_color' => array(
							'title' => __('Top Area Link Text Color', 'thegem'),
							'type' => 'color',
							'description' => __('Color of the links used in top area', 'thegem'),
						),
						'top_area_link_hover_color' => array(
							'title' => __('Top Area Link Hover Text Color', 'thegem'),
							'type' => 'color',
							'description' => __('Color for links hovers used in top area', 'thegem'),
						),
						'top_area_button_text_color' => array(
							'title' => __('Top Area Button Text Color', 'thegem'),
							'type' => 'color',
							'description' => __('Font color for the button in top area (if used)', 'thegem'),
						),
						'top_area_button_background_color' => array(
							'title' => __('Top Area Button Background Color', 'thegem'),
							'type' => 'color',
							'description' => __('Background color for the button in top area (if used)', 'thegem'),
						),
						'top_area_button_hover_text_color' => array(
							'title' => __('Top Area Button Hover Text Color', 'thegem'),
							'type' => 'color',
							'description' => __('Font hover color for the button in top area (if used)', 'thegem'),
						),
						'top_area_button_hover_background_color' => array(
							'title' => __('Top Area Button Hover Background Color', 'thegem'),
							'type' => 'color',
							'description' => __('Background hover color for the button in top area (if used)', 'thegem'),
						),
					),
				),
				'footer_colors' => array(
					'title' => __('Footer Area Colors', 'thegem'),
					'options' => array(
						'footer_background_color' => array(
							'title' => __('Footer Background Color', 'thegem'),
							'type' => 'color',
							'description' => __('Background color of the footer area with copyrights and socials at the bottom of the website.', 'thegem'),
						),
						'footer_text_color' => array(
							'title' => __('Footer Text Color', 'thegem'),
							'type' => 'color',
						),
						'footer_menu_color' => array(
							'title' => __('Footer menu font color', 'thegem'),
							'type' => 'color',
							'description' => __('Font color of footer menu', 'thegem'),
						),
						'footer_menu_hover_color' => array(
							'title' => __('Footer menu hover font color', 'thegem'),
							'type' => 'color',
							'description' => __('Font color of hover item in footer menu', 'thegem'),
						),
						'footer_menu_separator_color' => array(
							'title' => __('Footer menu separator color', 'thegem'),
							'type' => 'color',
							'description' => __('Color of a separator-line between menu items in footer', 'thegem'),
						),
						'footer_top_border_color' => array(
							'title' => __('Footer top border color', 'thegem'),
							'type' => 'color',
							'description' => __('Color of the border, separating website’s footer and footer widgetised area', 'thegem'),
						),
						'footer_widget_area_background_color' => array(
							'title' => __('Footer Widgetised Area Background Color', 'thegem'),
							'type' => 'color',
							'description' => __('Background color for widgetised area in footer', 'thegem'),
						),
						'footer_widget_title_color' => array(
							'title' => __('Footer Widget Title Color', 'thegem'),
							'type' => 'color',
							'description' => __('Font color of widget titles used in footer widgetised area', 'thegem'),
						),
						'footer_widget_text_color' => array(
							'title' => __('Footer Widget Text Color', 'thegem'),
							'type' => 'color',
							'description' => __('Font color of text used in widgets in footer widgetised area', 'thegem'),
						),
						'footer_widget_link_color' => array(
							'title' => __('Footer Widget Link Color', 'thegem'),
							'type' => 'color',
							'description' => __('Font color of links in widgets used in footer widgetised area', 'thegem'),
						),
						'footer_widget_hover_link_color' => array(
							'title' => __('Footer Widget Hover Link Color', 'thegem'),
							'type' => 'color',
							'description' => __('Hover color for links used in widgets in footer widgetised area', 'thegem'),
						),
						'footer_widget_active_link_color' => array(
							'title' => __('Footer Widget Active Link Color', 'thegem'),
							'type' => 'color',
							'description' => __('Color for active links used in widgets in footer widgetised area', 'thegem'),
						),
						'footer_widget_triangle_color' => array(
							'title' => __('Widget\'s title triangle color ', 'thegem'),
							'type' => 'color',
							'description' => __('Color of the small triangle label after the widget\'s title in footer', 'thegem'),
						),
					),
				),
				'text_colors' => array(
					'title' => __('Text Colors', 'thegem'),
					'options' => array(
						'body_color' => array(
							'title' => __('Body Color', 'thegem'),
							'type' => 'color',
						),
						'h1_color' => array(
							'title' => __('H1 Color', 'thegem'),
							'type' => 'color',
						),
						'h2_color' => array(
							'title' => __('H2 Color', 'thegem'),
							'type' => 'color',
						),
						'h3_color' => array(
							'title' => __('H3 Color', 'thegem'),
							'type' => 'color',
						),
						'h4_color' => array(
							'title' => __('H4 Color', 'thegem'),
							'type' => 'color',
						),
						'h5_color' => array(
							'title' => __('H5 Color', 'thegem'),
							'type' => 'color',
						),
						'h6_color' => array(
							'title' => __('H6 Color', 'thegem'),
							'type' => 'color',
						),
						'link_color' => array(
							'title' => __('Link Color', 'thegem'),
							'type' => 'color',
						),
						'hover_link_color' => array(
							'title' => __('Hover Link Color', 'thegem'),
							'type' => 'color',
						),
						'active_link_color' => array(
							'title' => __('Active Link Color', 'thegem'),
							'type' => 'color',
						),
						'copyright_text_color' => array(
							'title' => __('Copyright Text Color', 'thegem'),
							'type' => 'color',
						),
						'copyright_link_color' => array(
							'title' => __('Copyright Link Color', 'thegem'),
							'type' => 'color',
						),
						'title_bar_background_color' => array(
							'title' => __('Title Bar Default Background', 'thegem'),
							'type' => 'color',
						),
						'title_bar_text_color' => array(
							'title' => __('Title Bar Default Font', 'thegem'),
							'type' => 'color',
						),
						'date_filter_subtitle_color' => array(
							'title' => __('Date, Filter & Team Subtitle Color', 'thegem'),
							'type' => 'color',
						),
						'system_icons_font' => array(
							'title' => __('System Icons Font', 'thegem'),
							'type' => 'color',
						),
						'system_icons_font_2' => array(
							'title' => __('System Icons Font 2', 'thegem'),
							'type' => 'color',
						),
					),
				),
				'button_colors' => array(
					'title' => __('Button Colors', 'thegem'),
					'options' => array(
						'button_text_basic_color' => array(
							'title' => __('Basic Text Color', 'thegem'),
							'type' => 'color',
							'description' => __('Font color for the text used in default flat buttons. Note: you can freely customise your buttons inside your content using "Button" shortcode in Visual Composer', 'thegem'),
						),
						'button_text_hover_color' => array(
							'title' => __('Hover Text Color', 'thegem'),
							'type' => 'color',
							'description' => __('Hover font color for the text used in default flat buttons. Note: you can freely customise your buttons inside your content using "Button" shortcode in Visual Composer', 'thegem'),
						),
						'button_background_basic_color' => array(
							'title' => __('Basic Background Color', 'thegem'),
							'type' => 'color',
							'description' => __('Background color for default flat buttons. Note: you can freely customise your buttons inside your content using "Button" shortcode in Visual Composer', 'thegem'),
						),
						'button_background_hover_color' => array(
							'title' => __('Hover Background Color', 'thegem'),
							'type' => 'color',
							'description' => __('Hover background color for default flat buttons. Note: you can freely customise your buttons inside your content using "Button" shortcode in Visual Composer', 'thegem'),
						),
						'button_outline_text_basic_color' => array(
							'title' => __('Basic Outline Text Color', 'thegem'),
							'type' => 'color',
							'description' => __('Font color for the text used in default outlined buttons. Note: you can freely customise your buttons inside your content using "Button" shortcode in Visual Composer', 'thegem'),
						),
						'button_outline_text_hover_color' => array(
							'title' => __('Hover Outline Text Color', 'thegem'),
							'type' => 'color',
							'description' => __('Hover font color for the text used in default outlined buttons. Note: you can freely customise your buttons inside your content using "Button" shortcode in Visual Composer', 'thegem'),
						),
						'button_outline_border_basic_color' => array(
							'title' => __('Basic Outline Border Color', 'thegem'),
							'type' => 'color',
							'description' => __('Border color used in default outlined buttons. Note: you can freely customise your buttons inside your content using "Button" shortcode in Visual Composer', 'thegem'),
						),
					),
				),
				'widgets_colors' => array(
					'title' => __('Widgets Colors', 'thegem'),
					'options' => array(
						'widget_title_color' => array(
							'title' => __('Widget Title Color', 'thegem'),
							'type' => 'color',
							'description' => __('Font color of widget titles used in sidebars', 'thegem'),
						),
						'widget_link_color' => array(
							'title' => __('Widget Link Color', 'thegem'),
							'type' => 'color',
							'description' => __('Font color of links in widgets used in sidebars', 'thegem'),
						),
						'widget_hover_link_color' => array(
							'title' => __('Widget Hover Link Color', 'thegem'),
							'type' => 'color',
							'description' => __('Hover color for links used in sidebar widgets', 'thegem'),
						),
						'widget_active_link_color' => array(
							'title' => __('Widget Active Link Color', 'thegem'),
							'type' => 'color',
							'description' => __('Color for active links used in sidebar widgets', 'thegem'),
						),
					),
				),
				'portfolio_colors' => array(
					'title' => __('Portfolio Colors', 'thegem'),
					'options' => array(
						'portfolio_title_color' => array(
							'title' => __('Portfolio Overview Title Text', 'thegem'),
							'type' => 'color',
							'description' => __('Choose portfolio item\'s title color for grid-style portfolio overviews', 'thegem'),
						),
						'portfolio_description_color' => array(
							'title' => __('Portfolio Overview Description Text', 'thegem'),
							'type' => 'color',
							'description' => __('Choose portfolio item\'s description color for grid-style portfolio overviews', 'thegem'),
						),
						'portfolio_date_color' => array(
							'title' => __('Portfolio Date Color', 'thegem'),
							'type' => 'color',
							'description' => __('Font color for showing the date in portfolio overviews', 'thegem'),
						),
						'portfolio_arrow_color' => array(
							'title' => __('Portfolio Slider Arrow Font Color', 'thegem'),
							'type' => 'color',
						),
						'portfolio_arrow_hover_color' => array(
							'title' => __('Portfolio Slider Arrow Font Color on Hover', 'thegem'),
							'type' => 'color',
						),
						'portfolio_arrow_background_color' => array(
							'title' => __('Portfolio Slider Arrow Background Color', 'thegem'),
							'type' => 'color',
						),
						'portfolio_arrow_background_hover_color' => array(
							'title' => __('Portfolio Slider Arrow Background on Hover', 'thegem'),
							'type' => 'color',
						),
						'portfolio_sorting_controls_color' => array(
							'title' => __('Sorting Controls Font Color', 'thegem'),
							'type' => 'color',
						),
						'portfolio_sorting_background_color' => array(
							'title' => __('Sorting Controls Background', 'thegem'),
							'type' => 'color',
						),
						'portfolio_sorting_switch_color' => array(
							'title' => __('Sorting Controls Switch', 'thegem'),
							'type' => 'color',
						),
						'portfolio_sorting_separator_color' => array(
							'title' => __('Separator', 'thegem'),
							'type' => 'color',
						),
						'portfolio_filter_button_color' => array(
							'title' => __('Filter Button Font Color', 'thegem'),
							'type' => 'color',
						),
						'portfolio_filter_button_background_color' => array(
							'title' => __('Filter Button Background', 'thegem'),
							'type' => 'color',
						),
						'portfolio_filter_button_hover_color' => array(
							'title' => __('Filter Button Font Color on Hover', 'thegem'),
							'type' => 'color',
						),
						'portfolio_filter_button_hover_background_color' => array(
							'title' => __('Filter Button Background on Hover', 'thegem'),
							'type' => 'color',
						),
						'portfolio_filter_button_active_color' => array(
							'title' => __('Active Filter Button Font Color', 'thegem'),
							'type' => 'color',
						),
						'portfolio_filter_button_active_background_color' => array(
							'title' => __('Active Filter Button Background', 'thegem'),
							'type' => 'color',
						),
					),
				),
				'gallery_colors' => array(
					'title' => __('Slideshow, Gallery And Image Box Colors', 'thegem'),
					'options' => array(
						'gallery_caption_background_color' => array(
							'title' => __('Gallery Lightbox Caption Background', 'thegem'),
							'type' => 'color',
							'description' => __('Select background color for image description in image lightbox (zoomed view)', 'thegem'),
						),
						'gallery_title_color' => array(
							'title' => __('Gallery Lightbox Title Text', 'thegem'),
							'type' => 'color',
							'description' => __('Choose title color for image description in gallery in image lightbox (zoomed view)', 'thegem'),
						),
						'gallery_description_color' => array(
							'title' => __('Gallery Lightbox Description Text', 'thegem'),
							'type' => 'color',
							'description' => __('Select text color for image description in image lightbox (zoomed view)', 'thegem'),
						),
						'slideshow_arrow_background' => array(
							'title' => __('Slideshow Arrow Background', 'thegem'),
							'type' => 'color',
							'description' => __('Background color for the arrows in Layerslider, Revolution & Nivo Slider slideshows', 'thegem'),
						),
						'slideshow_arrow_hover_background' => array(
							'title' => __('Slideshow Arrow Hover Background', 'thegem'),
							'type' => 'color',
							'description' => __('Hover background color for the arrows in Layerslider, Revolution & Nivo Slider slideshows', 'thegem'),
						),
						'slideshow_arrow_color' => array(
							'title' => __('Slideshow Arrow Font', 'thegem'),
							'type' => 'color',
							'description' => __('Font color for the arrows in Layerslider, Revolution & Nivo Slider slideshows', 'thegem'),
						),
						'sliders_arrow_color' => array(
							'title' => __('Sliders Arrow Font', 'thegem'),
							'type' => 'color',
							'description' => __('Font color for the arrows in content sliders (not in Layeslider, Revolution or Nivo Sliders)', 'thegem'),
						),
						'sliders_arrow_background_color' => array(
							'title' => __('Sliders Arrow Background', 'thegem'),
							'type' => 'color',
							'description' => __('Backround color for the arrows in content sliders (not in Layeslider, Revolution or Nivo Sliders)', 'thegem'),
						),
						'sliders_arrow_hover_color' => array(
							'title' => __('Sliders Arrow Hover Font', 'thegem'),
							'type' => 'color',
							'description' => __('Hover font color for the arrows in content sliders (not in Layeslider, Revolution or Nivo Sliders)', 'thegem'),
						),
						'sliders_arrow_background_hover_color' => array(
							'title' => __('Sliders Arrow Hover Background', 'thegem'),
							'type' => 'color',
							'description' => __('Hover background color for the arrows in content sliders (not in Layeslider, Revolution or Nivo Sliders)', 'thegem'),
						),
						'hover_effect_default_color' => array(
							'title' => __('"Cyan Breeze" Hover Color', 'thegem'),
							'type' => 'color',
						),
						'hover_effect_zooming_blur_color' => array(
							'title' => __('"Zooming White" Hover Color', 'thegem'),
							'type' => 'color',
						),
						'hover_effect_horizontal_sliding_color' => array(
							'title' => __('"Horizontal Sliding" Hover Color', 'thegem'),
							'type' => 'color',
						),
						'hover_effect_vertical_sliding_color' => array(
							'title' => __('"Vertical Sliding" Hover Color', 'thegem'),
							'type' => 'color',
						),
					),
				),
				'quickfinder_colors' => array(
					'title' => __('Quickfinder Colors', 'thegem'),
					'options' => array(
						'quickfinder_title_color' => array(
							'title' => __('Quickfinder Title Text', 'thegem'),
							'type' => 'color',
							'description' => __('Font color for the default quickfinder titles. Note: you can freely customise your quickfinders inside your content using "Quickfinder" shortcode in Visual Composer', 'thegem'),
						),
						'quickfinder_description_color' => array(
							'title' => __('Quickfinder Description Text', 'thegem'),
							'type' => 'color',
							'description' => __('Font color for the default quickfinder description. Note: you can freely customise your quickfinders inside your content using "Quickfinder" shortcode in Visual Composer', 'thegem'),
						),
					),
				),
				'testimonial_colors' => array(
					'title' => __('Testimonial colors', 'thegem'),
					'options' => array(
						'testimonial_arrow_color' => array(
							'title' => __('Slider Arrow Font Color', 'thegem'),
							'type' => 'color',
						),
						'testimonial_arrow_hover_color' => array(
							'title' => __('Slider Arrow Font Color on Hover', 'thegem'),
							'type' => 'color',
						),
						'testimonial_arrow_background_color' => array(
							'title' => __('Slider Arrow Background Color', 'thegem'),
							'type' => 'color',
						),
						'testimonial_arrow_background_hover_color' => array(
							'title' => __('Slider Arrow Background Color on Hover', 'thegem'),
							'type' => 'color',
						),
					),
				),
				'bullets_pager_colors' => array(
					'title' => __('Bullets, Icons, Dropcaps & Pagination', 'thegem'),
					'options' => array(
						'bullets_symbol_color' => array(
							'title' => __('Bullets Symbol', 'thegem'),
							'type' => 'color',
							'description' => __('This color is used in bullets in navigation & menu widgets as well as as font color for icons in contact widget', 'thegem'),
						),
						'icons_symbol_color' => array(
							'title' => __('Icons Font', 'thegem'),
							'type' => 'color',
							'description' => __('Default font color for icons. Note: using icons shortcodes in Visual Composer you can freely customise your icons as you wish', 'thegem'),
						),
						'icons_portfolio_gallery_hover_color' => array(
							'title' => __('Icons In Portfolio & Gallery Hovers', 'thegem'),
							'type' => 'color',
							'description' => __('Font color for icons, used in portfolio & gallery hovers. By default the main website\'s background color is used', 'thegem'),
						),
						'pagination_basic_color' => array(
							'title' => __('Pagination Basic', 'thegem'),
							'type' => 'color',
							'description' => __('Font color for numbers in classic pagination', 'thegem'),
						),
						'pagination_basic_background_color' => array(
							'title' => __('Pagination Basic Background', 'thegem'),
							'type' => 'color',
							'description' => __('Background color for numbers in classic pagination', 'thegem'),
						),
						'pagination_hover_color' => array(
							'title' => __('Pagination Hover', 'thegem'),
							'type' => 'color',
							'description' => __('Hover color for classic pagination', 'thegem'),
						),
						'pagination_active_color' => array(
							'title' => __('Pagination Active', 'thegem'),
							'type' => 'color',
							'description' => __('Active color  for classic pagination', 'thegem'),
						),
						'mini_pagination_color' => array(
							'title' => __('Slider Mini-Pagination (Not Active)', 'thegem'),
							'type' => 'color',
						),
						'mini_pagination_active_color' => array(
							'title' => __('Slider Mini-Pagination (Active)', 'thegem'),
							'type' => 'color',
						),
						'blockquote_icon_testimonials' => array(
							'title' => __('Color of blockquotes icon in testimonials', 'thegem'),
							'type' => 'color',
						),
						'blockquote_icon_blockquotes' => array(
							'title' => __('Color of blockquotes icon in blockquotes element', 'thegem'),
							'type' => 'color',
						),
					),
				),
				'socials_colors' => array(
					'title' => __('Social Icons Colors', 'thegem'),
					'options' => array(
						'socials_colors_top_area' => array(
							'title' => __('Social Icons in Top Area', 'thegem'),
							'type' => 'color',
							'description' => __('Color of social icons used in top area', 'thegem'),
						),
						'socials_colors_footer' => array(
							'title' => __('Social Icons in Footer', 'thegem'),
							'type' => 'color',
							'description' => __('Color of social icons used in website\'s footer', 'thegem'),
						),
						'socials_colors_posts' => array(
							'title' => __('Social Icons on Pages, Posts, Portfolio Items', 'thegem'),
							'type' => 'color',
							'description' => __('Color of social icons used on pages, blog posts and portfolio items', 'thegem'),
						),
						'socials_colors_woocommerce' => array(
							'title' => __('Social Icons on WooCommerce Pages', 'thegem'),
							'type' => 'color',
							'description' => __('Color of social icons used on WooCommerce pages', 'thegem'),
						),
					),
				),
				'contact_form' => array(
				),
				'form_colors' => array(
					'title' => __('Other Forms', 'thegem'),
					'options' => array(
						'form_elements_background_color' => array(
							'title' => __('Background', 'thegem'),
							'type' => 'color',
						),
						'form_elements_text_color' => array(
							'title' => __('Font', 'thegem'),
							'type' => 'color',
						),
						'form_elements_border_color' => array(
							'title' => __('Border', 'thegem'),
							'type' => 'color',
						),
					),
				),
				'breadcrumbs_color' => array(
					'title' => __('Breadcrumbs', 'thegem'),
					'options' => array(
						'breadcrumbs_default_color' => array(
							'title' => __('Breadcrumbs Color', 'thegem'),
							'type' => 'color',
						),
						'breadcrumbs_active_color' => array(
							'title' => __('Breadcrumbs Active Item Color', 'thegem'),
							'type' => 'color',
						),
						'breadcrumbs_hover_color' => array(
							'title' => __('Breadcrumbs Hover Color', 'thegem'),
							'type' => 'color',
						),
					),
				),
				'preloader_color' => array(
					'title' => __('Preloader Colors', 'thegem'),
					'options' => array(
						'preloader_page_background' => array(
							'title' => __('Page Preloader Background Colors', 'thegem'),
							'type' => 'color',
						),
						'preloader_line_1' => array(
							'title' => __('Preloader line 1', 'thegem'),
							'type' => 'color',
						),
						'preloader_line_2' => array(
							'title' => __('Preloader line 2', 'thegem'),
							'type' => 'color',
						),
						'preloader_line_3' => array(
							'title' => __('Preloader line 3', 'thegem'),
							'type' => 'color',
						),
					),
				),
			),
		),

		'backgrounds' => array(
			'title' => __('Backgrounds', 'thegem'),
			'subcats' => array(
				'backgrounds_images' => array(
					'title' => __('Background Images', 'thegem'),
					'options' => array(
						'basic_outer_background_image' => array(
							'title' => __('Background for Boxed Layout', 'thegem'),
							'type' => 'image',
							'description' => __('Select or upload image file for website\'s backround in boxed layout', 'thegem'),
						),
						'basic_outer_background_image_select' => array(
							'title' => __('Background Patterns for Boxed Layout', 'thegem'),
							'type' => 'image-select',
							'target' => 'basic_outer_background_image',
							'items' => array(
								0 => 'low_contrast_linen',
								1 => 'mochaGrunge',
								2 => 'bedge_grunge',
								3 => 'solid',
								4 => 'concrete_wall',
								5 => 'dark_circles',
								6 => 'debut_dark',
							),
						),
						'top_background_image' => array(
							'title' => __('Main Menu & Header Area Background', 'thegem'),
							'type' => 'image',
							'description' => __('Select or upload background image file for the website\'s header area with main menu and logo', 'thegem'),
						),
						'top_area_background_image' => array(
							'title' => __('Top Area Background', 'thegem'),
							'type' => 'image',
							'description' => __('Select or upload background image file for the selected style of top area (contacts & socials bar above main menu and logo). You can select from different top area styles in "Header -> Top Area"', 'thegem'),
						),
						'main_background_image' => array(
							'title' => __('Main Content Background', 'thegem'),
							'type' => 'image',
							'description' => __('Select or upload image file for website\'s main content background', 'thegem'),
						),
						'footer_background_image' => array(
							'title' => __('Footer Background', 'thegem'),
							'type' => 'image',
							'description' => __('Select or upload background image file for the footer area with copyrights and socials at the bottom of the website.', 'thegem'),
						),
						'footer_widget_area_background_image' => array(
							'title' => __(' Footer Widgetised Area Background Image', 'thegem'),
							'type' => 'image',
							'description' => __('Select or upload background image file for widgetised area in footer', 'thegem'),
						),
					),
				),
			),
		),

		'slideshow' => array(
			'title' => __('NivoSlider Options', 'thegem'),
			'subcats' => array(
				'slideshow_options' => array(
					'title' => __('NivoSlider Options', 'thegem'),
					'options' => array(
						'slider_effect' => array(
							'title' => __('Effect', 'thegem'),
							'type' => 'select',
							'items' => array(
								'random' => 'random',
								'fold' => 'fold',
								'fade' => 'fade',
								'sliceDown' => 'sliceDown',
								'sliceDownRight' => 'sliceDownRight',
								'sliceDownLeft' => 'sliceDownLeft',
								'sliceUpRight' => 'sliceUpRight',
								'sliceUpLeft' => 'sliceUpLeft',
								'sliceUpDown' => 'sliceUpDown',
								'sliceUpDownLeft' => 'sliceUpDownLeft',
								'fold' => 'fold',
								'fade' => 'fade',
								'boxRandom' => 'boxRandom',
								'boxRain' => 'boxRain',
								'boxRainReverse' => 'boxRainReverse',
								'boxRainGrow' => 'boxRainGrow',
								'boxRainGrowReverse' => 'boxRainGrowReverse',
							),
						),
						'slider_slices' => array(
							'title' => __('Slices', 'thegem'),
							'type' => 'fixed-number',
							'min' => 1,
							'max' => 20,
							'default' => 15,
						),
						'slider_boxCols' => array(
							'title' => __('Box Cols', 'thegem'),
							'type' => 'fixed-number',
							'min' => 1,
							'max' => 10,
							'default' => 8,
						),
						'slider_boxRows' => array(
							'title' => __('Box Rows', 'thegem'),
							'type' => 'fixed-number',
							'min' => 1,
							'max' => 10,
							'default' => 4,
						),
						'slider_animSpeed' => array(
							'title' => __('Animation Speed ( x 100 milliseconds )', 'thegem'),
							'type' => 'fixed-number',
							'min' => 1,
							'max' => 50,
							'default' => 5,
						),
						'slider_pauseTime' => array(
							'title' => __('Pause Time ( x 1000 milliseconds )', 'thegem'),
							'type' => 'fixed-number',
							'min' => 1,
							'max' => 20,
							'default' => 3,
						),
						'slider_directionNav' => array(
							'title' => __('Direction Navigation', 'thegem'),
							'type' => 'checkbox',
							'value' => 1,
							'default' => 0,
						),
						'slider_controlNav' => array(
							'title' => __('Control Navigation', 'thegem'),
							'type' => 'checkbox',
							'value' => 1,
							'default' => 0,
						),
					),
				),
			),
		),

		'blog' => array(
			'title' => __('Blog & Portfolio', 'thegem'),
			'subcats' => array(
				'blog_options' => array(
					'title' => __('Blog Post Settings', 'thegem'),
					'options' => array(
						'show_author' => array(
							'title' => __('Show author info', 'thegem'),
							'type' => 'checkbox',
							'value' => 1,
							'default' => 0,
						),
						'excerpt_length' => array(
							'title' => __('Excerpt lenght', 'thegem'),
							'type' => 'fixed-number',
							'min' => 1,
							'max' => 150,
							'default' => 20,
						),
						'blog_hide_author' => array(
							'title' => __('Hide author name', 'thegem'),
							'type' => 'checkbox',
							'value' => 1,
							'default' => 0,
						),
						'blog_hide_date' => array(
							'title' => __('Hide date', 'thegem'),
							'type' => 'checkbox',
							'value' => 1,
							'default' => 0,
						),
						'blog_hide_date_in_blog_cat' => array(
							'title' => __('Hide date in blog categories', 'thegem'),
							'type' => 'checkbox',
							'value' => 1,
							'default' => 0,
						),
						'blog_hide_categories' => array(
							'title' => __('Hide categories', 'thegem'),
							'type' => 'checkbox',
							'value' => 1,
							'default' => 0,
						),
						'blog_hide_tags' => array(
							'title' => __('Hide tags', 'thegem'),
							'type' => 'checkbox',
							'value' => 1,
							'default' => 0,
						),
						'blog_hide_comments' => array(
							'title' => __('Hide comments icon', 'thegem'),
							'type' => 'checkbox',
							'value' => 1,
							'default' => 0,
						),
						'blog_hide_likes' => array(
							'title' => __('Hide likes', 'thegem'),
							'type' => 'checkbox',
							'value' => 1,
							'default' => 0,
						),
						'blog_hide_navigation' => array(
							'title' => __('Hide posts navigation', 'thegem'),
							'type' => 'checkbox',
							'value' => 1,
							'default' => 0,
						),
						'blog_hide_socials' => array(
							'title' => __('Hide social sharing', 'thegem'),
							'type' => 'checkbox',
							'value' => 1,
							'default' => 0,
						),
						'blog_hide_realted' => array(
							'title' => __('Hide related posts', 'thegem'),
							'type' => 'checkbox',
							'value' => 1,
							'default' => 0,
						),
					),
				),
				'portfolio_options' => array(
					'title' => __('Portfolio Page Settings', 'thegem'),
					'options' => array(
						'portfolio_hide_date' => array(
							'title' => __('Hide date', 'thegem'),
							'type' => 'checkbox',
							'value' => 1,
							'default' => 0,
						),
						'portfolio_hide_sets' => array(
							'title' => __('Hide portfolio sets', 'thegem'),
							'type' => 'checkbox',
							'value' => 1,
							'default' => 0,
						),
						'portfolio_hide_likes' => array(
							'title' => __('Hide likes', 'thegem'),
							'type' => 'checkbox',
							'value' => 1,
							'default' => 0,
						),
						'portfolio_hide_top_navigation' => array(
							'title' => __('Hide posts top navigation', 'thegem'),
							'type' => 'checkbox',
							'value' => 1,
							'default' => 0,
						),
						'portfolio_hide_bottom_navigation' => array(
							'title' => __('Hide posts bottom navigation', 'thegem'),
							'type' => 'checkbox',
							'value' => 1,
							'default' => 0,
						),
						'portfolio_hide_socials' => array(
							'title' => __('Hide social sharing', 'thegem'),
							'type' => 'checkbox',
							'value' => 1,
							'default' => 0,
						),
					),
				),
			),
		),

		'footer' => array(
			'title' => __('Footer', 'thegem'),
			'subcats' => array(
				'footer_options' => array(
					'title' => __('Footer Options', 'thegem'),
					'options' => array(
						'footer_active' => array(
							'title' => __('Activate default footer', 'thegem'),
							'type' => 'checkbox',
							'value' => 1,
							'default' => 0,
						),
						'footer_html' => array(
							'title' => __('Footer Text', 'thegem'),
							'type' => 'textarea',
						),
						'custom_footer' => array(
							'title' => __('Select Custom Footer', 'thegem'),
							'type' => 'select',
							'items' => thegem_get_footers_list(),
							'default' => '',
						),
						'footer_widget_area_hide' => array(
							'title' => __('Hide footer widget area', 'thegem'),
							'type' => 'checkbox',
							'value' => 1,
							'default' => 0,
						),
					),
				),
			),
		),

		'socials' => array(
			'title' => __('Contacts & Socials', 'thegem'),
			'subcats' => array(
				'contacts' => array(
					'title' => __('Contacts', 'thegem'),
					'options' => array(
						'contacts_address' => array(
							'title' => __('Address', 'thegem'),
							'type' => 'input',
							'default' => '',
						),
						'contacts_phone' => array(
							'title' => __('Phone', 'thegem'),
							'type' => 'input',
							'default' => '',
						),
						'contacts_fax' => array(
							'title' => __('Fax', 'thegem'),
							'type' => 'input',
							'default' => '',
						),
						'contacts_email' => array(
							'title' => __('Email', 'thegem'),
							'type' => 'input',
							'default' => '',
						),
						'contacts_website' => array(
							'title' => __('Website', 'thegem'),
							'type' => 'input',
							'default' => '',
						),
					),
				),
				'top_area_contacts' => array(
					'title' => __('Top Area Contacts', 'thegem'),
					'options' => array(
						'top_area_contacts_address_group' => array(
							'title' => __('Address', 'thegem'),
							'type' => 'group',
							'options' => array(
								'top_area_contacts_address' => array(
									'title' => __('Text', 'thegem'),
									'type' => 'input',
									'default' => '',
								),
								'top_area_contacts_address_icon_color' => array(
									'title' => __('Icon Color', 'thegem'),
									'type' => 'color',
								),
								'top_area_contacts_address_icon_pack' => array(
									'title' => __('Icon Pack', 'thegem'),
									'type' => 'select',
									'items' => thegem_icon_packs_select_array(),
									'default' => 'elegant',
								),
								'top_area_contacts_address_icon' => array(
									'title' => __('Icon', 'thegem'),
									'type' => 'icon',
									'default' => '',
								),
							),
						),
						'top_area_contacts_phone_group' => array(
							'title' => __('Phone', 'thegem'),
							'type' => 'group',
							'options' => array(
								'top_area_contacts_phone' => array(
									'title' => __('Text', 'thegem'),
									'type' => 'input',
									'default' => '',
								),
								'top_area_contacts_phone_icon_color' => array(
									'title' => __('Icon Color', 'thegem'),
									'type' => 'color',
								),
								'top_area_contacts_phone_icon_pack' => array(
									'title' => __('Icon Pack', 'thegem'),
									'type' => 'select',
									'items' => thegem_icon_packs_select_array(),
									'default' => 'elegant',
								),
								'top_area_contacts_phone_icon' => array(
									'title' => __('Icon', 'thegem'),
									'type' => 'icon',
									'default' => '',
								),
							),
						),
						'top_area_contacts_fax_group' => array(
							'title' => __('Fax', 'thegem'),
							'type' => 'group',
							'options' => array(
								'top_area_contacts_fax' => array(
									'title' => __('Text', 'thegem'),
									'type' => 'input',
									'default' => '',
								),
								'top_area_contacts_fax_icon_color' => array(
									'title' => __('Icon Color', 'thegem'),
									'type' => 'color',
								),
								'top_area_contacts_fax_icon_pack' => array(
									'title' => __('Icon Pack', 'thegem'),
									'type' => 'select',
									'items' => thegem_icon_packs_select_array(),
									'default' => 'elegant',
								),
								'top_area_contacts_fax_icon' => array(
									'title' => __('Icon', 'thegem'),
									'type' => 'icon',
									'default' => '',
								),
							),
						),
						'top_area_contacts_email_group' => array(
							'title' => __('Email', 'thegem'),
							'type' => 'group',
							'options' => array(
								'top_area_contacts_email' => array(
									'title' => __('Text', 'thegem'),
									'type' => 'input',
									'default' => '',
								),
								'top_area_contacts_email_icon_color' => array(
									'title' => __('Icon Color', 'thegem'),
									'type' => 'color',
								),
								'top_area_contacts_email_icon_pack' => array(
									'title' => __('Icon Pack', 'thegem'),
									'type' => 'select',
									'items' => thegem_icon_packs_select_array(),
									'default' => 'elegant',
								),
								'top_area_contacts_email_icon' => array(
									'title' => __('Icon', 'thegem'),
									'type' => 'icon',
									'default' => '',
								),
							),
						),
						'top_area_contacts_website_group' => array(
							'title' => __('Website', 'thegem'),
							'type' => 'group',
							'options' => array(
								'top_area_contacts_website' => array(
									'title' => __('Text', 'thegem'),
									'type' => 'input',
									'default' => '',
								),
								'top_area_contacts_website_icon_color' => array(
									'title' => __('Icon Color', 'thegem'),
									'type' => 'color',
								),
								'top_area_contacts_website_icon_pack' => array(
									'title' => __('Icon Pack', 'thegem'),
									'type' => 'select',
									'items' => thegem_icon_packs_select_array(),
									'default' => 'elegant',
								),
								'top_area_contacts_website_icon' => array(
									'title' => __('Icon', 'thegem'),
									'type' => 'icon',
									'default' => '',
								),
							),
						),
					),
				),
				'socials_options' => array(
					'title' => __('Socials', 'thegem'),
					'options' => array_merge(thegem_generate_socials_icons_options(), array(
						'socials_add_new' => array(
							'html' => '<a href="'.esc_url(admin_url('?page=socials-manager')).'">'.esc_html__('Add new social network', 'thegem').'</a>',
							'type' => 'html-block',
						),
						'show_social_icons' => array(
							'title' => __('Display Links For Sharing Posts On Social Networks', 'thegem'),
							'type' => 'checkbox',
							'value' => 1,
							'default' => 0,
						),
					))
				),
			),
		),
	);

	if(defined('WPCF7_VERSION') || defined('YIKES_MC_VERSION') || defined('MC4WP_VERSION')) {
		$options['colors']['subcats']['contact_form'] = array(
			'title' => __('Contact Form 7 & Mailchimp Forms', 'thegem'),
			'options' => array()
		);
		if(defined('WPCF7_VERSION')) {
			$options['colors']['subcats']['contact_form']['options'] = array_merge($options['colors']['subcats']['contact_form']['options'], array(
				'contact_form_light_colors' => array(
					'title' => __('Contact Form Light', 'thegem'),
					'type' => 'group',
					'options' => array(
						'contact_form_light_custom_styles' => array(
							'title' => __('Use Custom Styles', 'thegem'),
							'type' => 'checkbox',
							'value' => 1,
							'default' => 0,
						),
						'contact_form_light_custom_styles_group' => array(
							'type' => 'hidden-group',
							'options' => array(
								'contact_form_light_input_color' => array(
									'title' => __('Input Font Color', 'thegem'),
									'type' => 'color',
								),
								'contact_form_light_input_background_color' => array(
									'title' => __('Input Background Color', 'thegem'),
									'type' => 'color',
								),
								'contact_form_light_input_border_color' => array(
									'title' => __('Input Border Color', 'thegem'),
									'type' => 'color',
								),
								'contact_form_light_input_placeholder_color' => array(
									'title' => __('Input Placeholder Font Color', 'thegem'),
									'type' => 'color',
								),
								'contact_form_light_input_icon_color' => array(
									'title' => __('Input Icon Color', 'thegem'),
									'type' => 'color',
								),
								'contact_form_light_label_color' => array(
									'title' => __('Label Font Color', 'thegem'),
									'type' => 'color',
								),
								'contact_form_light_button_style' => array(
									'title' => __('Button Style', 'thegem'),
									'type' => 'select',
									'items' => array(
										'flat' => __('Flat', 'thegem'),
										'outline' => __('Outline', 'thegem'),
									),
									'default' => 'flat',
								),
								'contact_form_light_button_position' => array(
									'title' => __('Button Position', 'thegem'),
									'type' => 'select',
									'items' => array(
										'fullwidth' => __('Fullwidth', 'thegem'),
										'left' => __('Left', 'thegem'),
										'right' => __('Right', 'thegem'),
										'center' => __('Center', 'thegem'),
									),
									'default' => 'fullwidth',
								),
								'contact_form_light_button_size' => array(
									'title' => __('Button Size', 'thegem'),
									'type' => 'select',
									'items' => array(
										'tiny' => __('Tiny', 'thegem'),
										'small' => __('Small', 'thegem'),
										'medium' => __('Medium', 'thegem'),
										'large' => __('Large', 'thegem'),
										'giant' => __('Giant', 'thegem'),
									),
									'default' => 'small',
								),
								'contact_form_light_button_text_weight' => array(
									'title' => __('Button Text Weight', 'thegem'),
									'type' => 'select',
									'items' => array(
										'normal' => __('Normal', 'thegem'),
										'thin' => __('Thin', 'thegem'),
									),
									'default' => 'normal',
								),
								'contact_form_light_button_border' => array(
									'title' => __('Button Border Width', 'thegem'),
									'type' => 'select',
									'items' => array(0, 1, 2, 3, 4, 5, 6),
									'default' => 0,
								),
								'contact_form_light_button_corner' => array(
									'title' => __('Button Border Radius', 'thegem'),
									'type' => 'fixed-number',
									'min' => 0,
									'max' => 50,
									'default' => 3,
								),
								'contact_form_light_button_no_uppercase' => array(
									'title' => __('Button No Uppercase', 'thegem'),
									'type' => 'checkbox',
									'value' => 1,
									'default' => 0,
								),
								'contact_form_light_button_empty' => array(
									'type' => 'group-empty',
								),
								'contact_form_light_button_text_color' => array(
									'title' => __('Button Text Color', 'thegem'),
									'type' => 'color',
								),
								'contact_form_light_button_hover_text_color' => array(
									'title' => __('Button Hover Text Color', 'thegem'),
									'type' => 'color',
								),
								'contact_form_light_button_background_color' => array(
									'title' => __('Button Backround Color', 'thegem'),
									'type' => 'color',
								),
								'contact_form_light_button_hover_background_color' => array(
									'title' => __('Button Hover Backround Color', 'thegem'),
									'type' => 'color',
								),
								'contact_form_light_button_border_color' => array(
									'title' => __('Button Border Color', 'thegem'),
									'type' => 'color',
								),
								'contact_form_light_button_hover_border_color' => array(
									'title' => __('Button Hover Border Color', 'thegem'),
									'type' => 'color',
								),
							),
						),
					),
				),
				'contact_form_dark_colors' => array(
					'title' => __('Contact Form dark', 'thegem'),
					'type' => 'group',
					'options' => array(
						'contact_form_dark_custom_styles' => array(
							'title' => __('Use Custom Styles', 'thegem'),
							'type' => 'checkbox',
							'value' => 1,
							'default' => 0,
						),
						'contact_form_dark_custom_styles_group' => array(
							'type' => 'hidden-group',
							'options' => array(
								'contact_form_dark_input_color' => array(
									'title' => __('Input Font Color', 'thegem'),
									'type' => 'color',
								),
								'contact_form_dark_input_background_color' => array(
									'title' => __('Input Background Color', 'thegem'),
									'type' => 'color',
								),
								'contact_form_dark_input_border_color' => array(
									'title' => __('Input Border Color', 'thegem'),
									'type' => 'color',
								),
								'contact_form_dark_input_placeholder_color' => array(
									'title' => __('Input Placeholder Font Color', 'thegem'),
									'type' => 'color',
								),
								'contact_form_dark_input_icon_color' => array(
									'title' => __('Input Icon Color', 'thegem'),
									'type' => 'color',
								),
								'contact_form_dark_label_color' => array(
									'title' => __('Label Font Color', 'thegem'),
									'type' => 'color',
								),
								'contact_form_dark_button_style' => array(
									'title' => __('Button Style', 'thegem'),
									'type' => 'select',
									'items' => array(
										'flat' => __('Flat', 'thegem'),
										'outline' => __('Outline', 'thegem'),
									),
									'default' => 'flat',
								),
								'contact_form_dark_button_position' => array(
									'title' => __('Button Position', 'thegem'),
									'type' => 'select',
									'items' => array(
										'fullwidth' => __('Fullwidth', 'thegem'),
										'left' => __('Left', 'thegem'),
										'right' => __('Right', 'thegem'),
										'center' => __('Center', 'thegem'),
									),
									'default' => 'fullwidth',
								),
								'contact_form_dark_button_size' => array(
									'title' => __('Button Size', 'thegem'),
									'type' => 'select',
									'items' => array(
										'tiny' => __('Tiny', 'thegem'),
										'small' => __('Small', 'thegem'),
										'medium' => __('Medium', 'thegem'),
										'large' => __('Large', 'thegem'),
										'giant' => __('Giant', 'thegem'),
									),
									'default' => 'small',
								),
								'contact_form_dark_button_text_weight' => array(
									'title' => __('Button Text Weight', 'thegem'),
									'type' => 'select',
									'items' => array(
										'normal' => __('Normal', 'thegem'),
										'thin' => __('Thin', 'thegem'),
									),
									'default' => 'normal',
								),
								'contact_form_dark_button_border' => array(
									'title' => __('Button Border Width', 'thegem'),
									'type' => 'select',
									'items' => array(0, 1, 2, 3, 4, 5, 6),
									'default' => 0,
								),
								'contact_form_dark_button_corner' => array(
									'title' => __('Button Border Radius', 'thegem'),
									'type' => 'fixed-number',
									'min' => 0,
									'max' => 50,
									'default' => 3,
								),
								'contact_form_dark_button_no_uppercase' => array(
									'title' => __('Button No Uppercase', 'thegem'),
									'type' => 'checkbox',
									'value' => 1,
									'default' => 0,
								),
								'contact_form_dark_button_empty' => array(
									'type' => 'group-empty',
								),
								'contact_form_dark_button_text_color' => array(
									'title' => __('Button Text Color', 'thegem'),
									'type' => 'color',
								),
								'contact_form_dark_button_hover_text_color' => array(
									'title' => __('Button Hover Text Color', 'thegem'),
									'type' => 'color',
								),
								'contact_form_dark_button_background_color' => array(
									'title' => __('Button Backround Color', 'thegem'),
									'type' => 'color',
								),
								'contact_form_dark_button_hover_background_color' => array(
									'title' => __('Button Hover Backround Color', 'thegem'),
									'type' => 'color',
								),
								'contact_form_dark_button_border_color' => array(
									'title' => __('Button Border Color', 'thegem'),
									'type' => 'color',
								),
								'contact_form_dark_button_hover_border_color' => array(
									'title' => __('Button Hover Border Color', 'thegem'),
									'type' => 'color',
								),
							),
						),
					),
				),
			));
		}
		if(defined('YIKES_MC_VERSION') || defined('MC4WP_VERSION')) {
			$options['colors']['subcats']['contact_form']['options'] = array_merge($options['colors']['subcats']['contact_form']['options'], array(
				'mailchimp_content_colors' => array(
					'title' => __('MailChimp inside Content', 'thegem'),
					'type' => 'group',
					'options' => array(
						'mailchimp_content_custom_styles' => array(
							'title' => __('Use Custom Styles', 'thegem'),
							'type' => 'checkbox',
							'value' => 1,
							'default' => 0,
						),
						'mailchimp_content_custom_styles_group' => array(
							'type' => 'hidden-group',
							'options' => array(
								'mailchimp_content_input_color' => array(
									'title' => __('Input Font Color', 'thegem'),
									'type' => 'color',
								),
								'mailchimp_content_input_background_color' => array(
									'title' => __('Input Background Color', 'thegem'),
									'type' => 'color',
								),
								'mailchimp_content_input_border_color' => array(
									'title' => __('Input Border Color', 'thegem'),
									'type' => 'color',
								),
								'mailchimp_content_input_placeholder_color' => array(
									'title' => __('Input Placeholder Font Color', 'thegem'),
									'type' => 'color',
								),
								'mailchimp_content_text_color' => array(
									'title' => __('Font Color', 'thegem'),
									'type' => 'color',
								),
								'mailchimp_content_label_color' => array(
									'title' => __('Label Font Color', 'thegem'),
									'type' => 'color',
								),
								'mailchimp_content_button_text_color' => array(
									'title' => __('Button Text Color', 'thegem'),
									'type' => 'color',
								),
								'mailchimp_content_button_hover_text_color' => array(
									'title' => __('Button Hover Text Color', 'thegem'),
									'type' => 'color',
								),
								'mailchimp_content_button_background_color' => array(
									'title' => __('Button Backround Color', 'thegem'),
									'type' => 'color',
								),
								'mailchimp_content_button_hover_background_color' => array(
									'title' => __('Button Hover Backround Color', 'thegem'),
									'type' => 'color',
								),
							),
						),
					),
				),

				'mailchimp_sidebars_colors' => array(
					'title' => __('MailChimp inside Sidebars', 'thegem'),
					'type' => 'group',
					'options' => array(
						'mailchimp_sidebars_custom_styles' => array(
							'title' => __('Use Custom Styles', 'thegem'),
							'type' => 'checkbox',
							'value' => 1,
							'default' => 0,
						),
						'mailchimp_sidebars_custom_styles_group' => array(
							'type' => 'hidden-group',
							'options' => array(
								'mailchimp_sidebars_background_color' => array(
									'title' => __('Background Color', 'thegem'),
									'type' => 'color',
								),
								'mailchimp_sidebars_input_color' => array(
									'title' => __('Input Font Color', 'thegem'),
									'type' => 'color',
								),
								'mailchimp_sidebars_input_background_color' => array(
									'title' => __('Input Background Color', 'thegem'),
									'type' => 'color',
								),
								'mailchimp_sidebars_input_border_color' => array(
									'title' => __('Input Border Color', 'thegem'),
									'type' => 'color',
								),
								'mailchimp_sidebars_input_placeholder_color' => array(
									'title' => __('Input Placeholder Font Color', 'thegem'),
									'type' => 'color',
								),
								'mailchimp_sidebars_text_color' => array(
									'title' => __('Font Color', 'thegem'),
									'type' => 'color',
								),
								'mailchimp_sidebars_label_color' => array(
									'title' => __('Label Font Color', 'thegem'),
									'type' => 'color',
								),
								'mailchimp_sidebars_button_text_color' => array(
									'title' => __('Button Text Color', 'thegem'),
									'type' => 'color',
								),
								'mailchimp_sidebars_button_hover_text_color' => array(
									'title' => __('Button Hover Text Color', 'thegem'),
									'type' => 'color',
								),
								'mailchimp_sidebars_button_background_color' => array(
									'title' => __('Button Backround Color', 'thegem'),
									'type' => 'color',
								),
								'mailchimp_sidebars_button_hover_background_color' => array(
									'title' => __('Button Hover Backround Color', 'thegem'),
									'type' => 'color',
								),
							),
						),
					),
				),

				'mailchimp_footer_colors' => array(
					'title' => __('MailChimp inside Footer', 'thegem'),
					'type' => 'group',
					'options' => array(
						'mailchimp_footer_custom_styles' => array(
							'title' => __('Use Custom Styles', 'thegem'),
							'type' => 'checkbox',
							'value' => 1,
							'default' => 0,
						),
						'mailchimp_footer_custom_styles_group' => array(
							'type' => 'hidden-group',
							'options' => array(
								'mailchimp_footer_background_color' => array(
									'title' => __('Background Color', 'thegem'),
									'type' => 'color',
								),
								'mailchimp_footer_input_color' => array(
									'title' => __('Input Font Color', 'thegem'),
									'type' => 'color',
								),
								'mailchimp_footer_input_background_color' => array(
									'title' => __('Input Background Color', 'thegem'),
									'type' => 'color',
								),
								'mailchimp_footer_input_border_color' => array(
									'title' => __('Input Border Color', 'thegem'),
									'type' => 'color',
								),
								'mailchimp_footer_input_placeholder_color' => array(
									'title' => __('Input Placeholder Font Color', 'thegem'),
									'type' => 'color',
								),
								'mailchimp_footer_text_color' => array(
									'title' => __('Font Color', 'thegem'),
									'type' => 'color',
								),
								'mailchimp_footer_label_color' => array(
									'title' => __('Label Font Color', 'thegem'),
									'type' => 'color',
								),
								'mailchimp_footer_button_text_color' => array(
									'title' => __('Button Text Color', 'thegem'),
									'type' => 'color',
								),
								'mailchimp_footer_button_hover_text_color' => array(
									'title' => __('Button Hover Text Color', 'thegem'),
									'type' => 'color',
								),
								'mailchimp_footer_button_background_color' => array(
									'title' => __('Button Backround Color', 'thegem'),
									'type' => 'color',
								),
								'mailchimp_footer_button_hover_background_color' => array(
									'title' => __('Button Hover Backround Color', 'thegem'),
									'type' => 'color',
								),
							),
						),
					),
				),
			));
		}
	}

	if(thegem_is_plugin_active('woocommerce/woocommerce.php')) {
		$options['general']['subcats']['woocommerce'] = array(
			'title' => __('WooCommerce Settings', 'thegem'),
			'options' => array(
				'size_guide_image' => array(
					'title' => __('Size Guide Image', 'thegem'),
					'type' => 'image',
					'description' => __('Upload your size guide image here', 'thegem'),
				),
				'product_quick_view' => array(
					'title' => __('Quick view', 'thegem'),
					'type' => 'checkbox',
					'value' => 1,
					'default' => 0,
					'description' => __('Enable product quick view', 'thegem'),
				),
				'products_pagination' => array(
					'title' => __('Products pagination', 'thegem'),
					'type' => 'select',
					'items' => array(
						'normal' => __('Normal', 'thegem'),
						'more' => __('Load More', 'thegem'),
						'scroll' => __('Infinite Scroll', 'thegem')
					),
					'default' => 'normal',
					'description' => __('WooCommerce products pagination type', 'thegem')
				),
				'catalog_view' => array(
					'title' => __('Enable catalog mode', 'thegem'),
					'type' => 'checkbox',
					'value' => 1,
					'default' => 0,
					'description' => __('Enable catalog mode. This will disable Add To Cart buttons / Checkout and Shopping cart.', 'thegem'),
				),

				'hide_card_icon' => array(
					'title' => __('Hide Card Icon', 'thegem'),
					'type' => 'checkbox',
					'value' => 1,
					'default' => 0,
				),
				'checkout_type' => array(
					'title' => __('Checkout Page', 'thegem'),
					'type' => 'select',
					'items' => array(
						'multi-step' => __('Multi-Step Checkout', 'thegem'),
						'one-page' => __('One-Page Checkout', 'thegem')
					),
					'default' => 'multi-step',
					'description' => __('WooCommerce checkout view', 'thegem')
				),
				'mobile_cart_position' => array(
					'title' => __('Cart Icon Position For Mobiles', 'thegem'),
					'type' => 'select',
					'items' => array(
						'top' => __('Visible On Top', 'thegem'),
						'menu' => __('Visible In Menu', 'thegem'),
					),
					'description' => __('Position of the cart icon on mobile devices', 'thegem'),
				),
				'hamburger_menu_cart_position' => array(
					'title' => __('Cart Icon Position For Hamburger Menu', 'thegem'),
					'type' => 'select',
					'items' => array(
						'' => __('Visible In Menu', 'thegem'),
						'1' => __('Visible On Top Near Hamburger Icon', 'thegem'),
					),
					'description' => __('Position of the cart icon in case of hamburger menu layout on desktops and notebooks', 'thegem'),
				),
				'cart_label_count' => array(
					'title' => __('Product amount label (cart icon)', 'thegem'),
					'type' => 'select',
					'items' => array(
						'0' => __('Show Positions Amount', 'thegem'),
						'1' => __('Show Total Product Amount', 'thegem'),
					),
				),
				'woocommerce_activate_images_sizes' => array(
					'title' => __('Activate TheGem\'s Product Image Settings', 'thegem'),
					'type' => 'checkbox',
					'value' => 1,
					'default' => 0,
					//'description' => __('Use custom image sizes for woocommerce products instead ', 'thegem'),
				),
				'woocommerce_catalog_image' => array(
					'title' => __('WooCommerce Catalog Image Size', 'thegem'),
					'type' => 'group',
					'options' => array(
						'woocommerce_catalog_image_width' => array(
							'title' => __('Width', 'thegem'),
							'type' => 'fixed-number',
							'min' => 0,
							'max' => 1000,
							'default' => 0,
						),
						'woocommerce_catalog_image_height' => array(
							'title' => __('Height', 'thegem'),
							'type' => 'fixed-number',
							'min' => 0,
							'max' => 1000,
							'default' => 0,
						),
					),
				),
				'woocommerce_product_image' => array(
					'title' => __('WooCommerce Single Product Image Size', 'thegem'),
					'type' => 'group',
					'options' => array(
						'woocommerce_product_image_width' => array(
							'title' => __('Width', 'thegem'),
							'type' => 'fixed-number',
							'min' => 0,
							'max' => 1000,
							'default' => 0,
						),
						'woocommerce_product_image_height' => array(
							'title' => __('Height', 'thegem'),
							'type' => 'fixed-number',
							'min' => 0,
							'max' => 1000,
							'default' => 0,
						),
					),
				),
				'woocommerce_thumbnail_image' => array(
					'title' => __('WooCommerce Product Thumbnails Image Size', 'thegem'),
					'type' => 'group',
					'options' => array(
						'woocommerce_thumbnail_image_width' => array(
							'title' => __('Width', 'thegem'),
							'type' => 'fixed-number',
							'min' => 0,
							'max' => 1000,
							'default' => 0,
						),
						'woocommerce_thumbnail_image_height' => array(
							'title' => __('Height', 'thegem'),
							'type' => 'fixed-number',
							'min' => 0,
							'max' => 1000,
							'default' => 0,
						),
					),
				),
			)
		);

		$options['fonts']['subcats']['woocommerce_fonts'] = array(
			'title' => __('WooCommerce Fonts', 'thegem'),
			'options' => array(

				'product_title_listing_font' => array(
					'title' => __('Product Title (Listings & Grids)', 'thegem'),
					'type' => 'group',
					'options' => array(
						'product_title_listing_font_family' => array(
							'title' => __('Font Family', 'thegem'),
							'type' => 'font-select',
						),
						'product_title_listing_font_style' => array(
							'title' => __('Font Style', 'thegem'),
							'type' => 'font-style',
						),
						'product_title_listing_font_sets' => array(
							'title' => __('Font Sets', 'thegem'),
							'type' => 'font-sets',
							'default' => 'latin,latin-ext'
						),
						'product_title_listing_font_size' => array(
							'title' => __('Font Size', 'thegem'),
							'type' => 'fixed-number',
							'min' => 10,
							'max' => 100,
							'default' => 16,
						),
						'product_title_listing_line_height' => array(
							'title' => __('Line Height', 'thegem'),
							'type' => 'fixed-number',
							'min' => 10,
							'max' => 150,
							'default' => 18,
						),
					),
				),

				'product_title_page_font' => array(
					'title' => __('Product Title (Product Page)', 'thegem'),
					'type' => 'group',
					'options' => array(
						'product_title_page_font_family' => array(
							'title' => __('Font Family', 'thegem'),
							'type' => 'font-select',
						),
						'product_title_page_font_style' => array(
							'title' => __('Font Style', 'thegem'),
							'type' => 'font-style',
						),
						'product_title_page_font_sets' => array(
							'title' => __('Font Sets', 'thegem'),
							'type' => 'font-sets',
							'default' => 'latin,latin-ext'
						),
						'product_title_page_font_size' => array(
							'title' => __('Font Size', 'thegem'),
							'type' => 'fixed-number',
							'min' => 10,
							'max' => 100,
							'default' => 16,
						),
						'product_title_page_line_height' => array(
							'title' => __('Line Height', 'thegem'),
							'type' => 'fixed-number',
							'min' => 10,
							'max' => 150,
							'default' => 18,
						),
					),
				),
				'product_title_widget_font' => array(
					'title' => __('Product Title (Widget)', 'thegem'),
					'type' => 'group',
					'options' => array(
						'product_title_widget_font_family' => array(
							'title' => __('Font Family', 'thegem'),
							'type' => 'font-select',
						),
						'product_title_widget_font_style' => array(
							'title' => __('Font Style', 'thegem'),
							'type' => 'font-style',
						),
						'product_title_widget_font_sets' => array(
							'title' => __('Font Sets', 'thegem'),
							'type' => 'font-sets',
							'default' => 'latin,latin-ext'
						),
						'product_title_widget_font_size' => array(
							'title' => __('Font Size', 'thegem'),
							'type' => 'fixed-number',
							'min' => 10,
							'max' => 100,
							'default' => 16,
						),
						'product_title_widget_line_height' => array(
							'title' => __('Line Height', 'thegem'),
							'type' => 'fixed-number',
							'min' => 10,
							'max' => 150,
							'default' => 18,
						),
					),
				),
				'product_title_cart_font' => array(
					'title' => __('Product Title (Cart)', 'thegem'),
					'type' => 'group',
					'options' => array(
						'product_title_cart_font_family' => array(
							'title' => __('Font Family', 'thegem'),
							'type' => 'font-select',
						),
						'product_title_cart_font_style' => array(
							'title' => __('Font Style', 'thegem'),
							'type' => 'font-style',
						),
						'product_title_cart_font_sets' => array(
							'title' => __('Font Sets', 'thegem'),
							'type' => 'font-sets',
							'default' => 'latin,latin-ext'
						),
						'product_title_cart_font_size' => array(
							'title' => __('Font Size', 'thegem'),
							'type' => 'fixed-number',
							'min' => 10,
							'max' => 100,
							'default' => 16,
						),
						'product_title_cart_line_height' => array(
							'title' => __('Line Height', 'thegem'),
							'type' => 'fixed-number',
							'min' => 10,
							'max' => 150,
							'default' => 18,
						),
					),
				),

				'product_price_listing_font' => array(
					'title' => __('Product Price (Listings & Grids)', 'thegem'),
					'type' => 'group',
					'options' => array(
						'product_price_listing_font_family' => array(
							'title' => __('Font Family', 'thegem'),
							'type' => 'font-select',
						),
						'product_price_listing_font_style' => array(
							'title' => __('Font Style', 'thegem'),
							'type' => 'font-style',
						),
						'product_price_listing_font_sets' => array(
							'title' => __('Font Sets', 'thegem'),
							'type' => 'font-sets',
							'default' => 'latin,latin-ext'
						),
						'product_price_listing_font_size' => array(
							'title' => __('Font Size', 'thegem'),
							'type' => 'fixed-number',
							'min' => 10,
							'max' => 100,
							'default' => 16,
						),
						'product_price_listing_line_height' => array(
							'title' => __('Line Height', 'thegem'),
							'type' => 'fixed-number',
							'min' => 10,
							'max' => 150,
							'default' => 18,
						),
					),
				),
				'product_price_page_font' => array(
					'title' => __('Product Price (Product Page)', 'thegem'),
					'type' => 'group',
					'options' => array(
						'product_price_page_font_family' => array(
							'title' => __('Font Family', 'thegem'),
							'type' => 'font-select',
						),
						'product_price_page_font_style' => array(
							'title' => __('Font Style', 'thegem'),
							'type' => 'font-style',
						),
						'product_price_page_font_sets' => array(
							'title' => __('Font Sets', 'thegem'),
							'type' => 'font-sets',
							'default' => 'latin,latin-ext'
						),
						'product_price_page_font_size' => array(
							'title' => __('Font Size', 'thegem'),
							'type' => 'fixed-number',
							'min' => 10,
							'max' => 100,
							'default' => 16,
						),
						'product_price_page_line_height' => array(
							'title' => __('Line Height', 'thegem'),
							'type' => 'fixed-number',
							'min' => 10,
							'max' => 150,
							'default' => 18,
						),
					),
				),
				'product_price_widget_font' => array(
					'title' => __('Product Price (Widget)', 'thegem'),
					'type' => 'group',
					'options' => array(
						'product_price_widget_font_family' => array(
							'title' => __('Font Family', 'thegem'),
							'type' => 'font-select',
						),
						'product_price_widget_font_style' => array(
							'title' => __('Font Style', 'thegem'),
							'type' => 'font-style',
						),
						'product_price_widget_font_sets' => array(
							'title' => __('Font Sets', 'thegem'),
							'type' => 'font-sets',
							'default' => 'latin,latin-ext'
						),
						'product_price_widget_font_size' => array(
							'title' => __('Font Size', 'thegem'),
							'type' => 'fixed-number',
							'min' => 10,
							'max' => 100,
							'default' => 16,
						),
						'product_price_widget_line_height' => array(
							'title' => __('Line Height', 'thegem'),
							'type' => 'fixed-number',
							'min' => 10,
							'max' => 150,
							'default' => 18,
						),
					),
				),
				'product_price_cart_font' => array(
					'title' => __('Product Price (Cart)', 'thegem'),
					'type' => 'group',
					'options' => array(
						'product_price_cart_font_family' => array(
							'title' => __('Font Family', 'thegem'),
							'type' => 'font-select',
						),
						'product_price_cart_font_style' => array(
							'title' => __('Font Style', 'thegem'),
							'type' => 'font-style',
						),
						'product_price_cart_font_sets' => array(
							'title' => __('Font Sets', 'thegem'),
							'type' => 'font-sets',
							'default' => 'latin,latin-ext'
						),
						'product_price_cart_font_size' => array(
							'title' => __('Font Size', 'thegem'),
							'type' => 'fixed-number',
							'min' => 10,
							'max' => 100,
							'default' => 16,
						),
						'product_price_cart_line_height' => array(
							'title' => __('Line Height', 'thegem'),
							'type' => 'fixed-number',
							'min' => 10,
							'max' => 150,
							'default' => 18,
						),
					),
				),
			)
		);
		$options['colors']['subcats']['woocommerce_colors'] = array(
			'title' => __('WooCommerce Colors', 'thegem'),
			'options' => array(
				'product_title_listing_color' => array(
					'title' => __('Product Title (Listings & Grids)', 'thegem'),
					'type' => 'color',
				),
				'product_title_page_color' => array(
					'title' => __('Product Title (Product Page)', 'thegem'),
					'type' => 'color',
				),
				'product_title_widget_color' => array(
					'title' => __('Product Title (Widget)', 'thegem'),
					'type' => 'color',
				),
				'product_title_cart_color' => array(
					'title' => __('Product Title (Cart)', 'thegem'),
					'type' => 'color',
				),
				'product_price_listing_color' => array(
					'title' => __('Product Price (Listings & Grids)', 'thegem'),
					'type' => 'color',
				),
				'product_price_page_color' => array(
					'title' => __('Product Price (Product Page)', 'thegem'),
					'type' => 'color',
				),
				'product_price_widget_color' => array(
					'title' => __('Product Price (Widget)', 'thegem'),
					'type' => 'color',
				),
				'product_price_cart_color' => array(
					'title' => __('Product Price (Cart)', 'thegem'),
					'type' => 'color',
				),
				'product_separator_listing_color' => array(
					'title' => __('Product Separator (Listings & Grids)', 'thegem'),
					'type' => 'color',
				),
				'minicart_amount_label_color' => array(
					'title' => __('Product amount label (minicart icon)', 'thegem'),
					'type' => 'color',
				),
				'cart_table_header_color' => array(
					'title' => __('Cart & checkout table titles', 'thegem'),
					'type' => 'color',
				),
				'cart_table_header_background_color' => array(
					'title' => __('Cart & checkout table header background', 'thegem'),
					'type' => 'color',
				),
				'cart_form_labels_color' => array(
					'title' => __('Cart & checkout form labels', 'thegem'),
					'type' => 'color',
				),
				'checkout_step_title_color' => array(
					'title' => __('Checkout inactive step title', 'thegem'),
					'type' => 'color',
				),
				'checkout_step_background_color' => array(
					'title' => __('Checkout inactive step background', 'thegem'),
					'type' => 'color',
				),
				'checkout_step_title_active_color' => array(
					'title' => __('Checkout active step title', 'thegem'),
					'type' => 'color',
				),
				'checkout_step_background_active_color' => array(
					'title' => __('Checkout active step background', 'thegem'),
					'type' => 'color',
				),
			)
		);

	} else {

		$options['general']['subcats']['woocommerce'] = array(
			'title' => __('WooCommerce Settings', 'thegem'),
			'hidden' => true,
			'options' => array(
				'size_guide_image' => array( 'type' => 'hidden', ),
				'product_quick_view' => array( 'type' => 'hidden', ),
				'products_pagination' => array( 'type' => 'hidden', ),
				'catalog_view' => array( 'type' => 'hidden', ),
				'checkout_type' => array( 'type' => 'hidden', ),
				'hamburger_menu_cart_position' => array( 'type' => 'hidden', ),
				'product_title_listing_font_family' => array( 'type' => 'hidden', ),
				'product_title_listing_font_style' => array( 'type' => 'hidden', ),
				'product_title_listing_font_sets' => array( 'type' => 'hidden', ),
				'product_title_listing_font_size' => array( 'type' => 'hidden', ),
				'product_title_listing_line_height' => array( 'type' => 'hidden', ),
				'product_title_page_font_family' => array( 'type' => 'hidden', ),
				'product_title_page_font_style' => array( 'type' => 'hidden', ),
				'product_title_page_font_sets' => array( 'type' => 'hidden', ),
				'product_title_page_font_size' => array( 'type' => 'hidden', ),
				'product_title_page_line_height' => array( 'type' => 'hidden', ),
				'product_title_widget_font_family' => array( 'type' => 'hidden', ),
				'product_title_widget_font_style' => array( 'type' => 'hidden', ),
				'product_title_widget_font_sets' => array( 'type' => 'hidden', ),
				'product_title_widget_font_size' => array( 'type' => 'hidden', ),
				'product_title_widget_line_height' => array( 'type' => 'hidden', ),
				'product_title_cart_font_family' => array( 'type' => 'hidden', ),
				'product_title_cart_font_style' => array( 'type' => 'hidden', ),
				'product_title_cart_font_sets' => array( 'type' => 'hidden', ),
				'product_title_cart_font_size' => array( 'type' => 'hidden', ),
				'product_title_cart_line_height' => array( 'type' => 'hidden', ),
				'product_price_listing_font_family' => array( 'type' => 'hidden', ),
				'product_price_listing_font_style' => array( 'type' => 'hidden', ),
				'product_price_listing_font_sets' => array( 'type' => 'hidden', ),
				'product_price_listing_font_size' => array( 'type' => 'hidden', ),
				'product_price_listing_line_height' => array( 'type' => 'hidden', ),
				'product_price_page_font_family' => array( 'type' => 'hidden', ),
				'product_price_page_font_style' => array( 'type' => 'hidden', ),
				'product_price_page_font_sets' => array( 'type' => 'hidden', ),
				'product_price_page_font_size' => array( 'type' => 'hidden', ),
				'product_price_page_line_height' => array( 'type' => 'hidden', ),
				'product_price_widget_font_family' => array( 'type' => 'hidden', ),
				'product_price_widget_font_style' => array( 'type' => 'hidden', ),
				'product_price_widget_font_sets' => array( 'type' => 'hidden', ),
				'product_price_widget_font_size' => array( 'type' => 'hidden', ),
				'product_price_widget_line_height' => array( 'type' => 'hidden', ),
				'product_price_cart_font_family' => array( 'type' => 'hidden', ),
				'product_price_cart_font_style' => array( 'type' => 'hidden', ),
				'product_price_cart_font_sets' => array( 'type' => 'hidden', ),
				'product_price_cart_font_size' => array( 'type' => 'hidden', ),
				'product_price_cart_line_height' => array( 'type' => 'hidden', ),
				'product_title_listing_color' => array( 'type' => 'hidden', ),
				'product_title_page_color' => array( 'type' => 'hidden', ),
				'product_title_widget_color' => array( 'type' => 'hidden', ),
				'product_title_cart_color' => array( 'type' => 'hidden', ),
				'product_price_listing_color' => array( 'type' => 'hidden', ),
				'product_price_page_color' => array( 'type' => 'hidden', ),
				'product_price_widget_color' => array( 'type' => 'hidden', ),
				'product_price_cart_color' => array( 'type' => 'hidden', ),
				'product_separator_listing_color' => array( 'type' => 'hidden', ),
			)
		);
	}

	if(!thegem_get_option('activate_nivoslider')) {
		unset($options['slideshow']);
	}

	return $options;
}*/

/*function thegem_generate_socials_icons_options () {
	$options = array();
	foreach(thegem_socials_icons_list() as $icon => $title) {
		$options[$icon.'_active'] = array(
			'title' => sprintf(__('Activate %s Icon', 'thegem'), $title),
			'type' => 'checkbox',
			'value' => 1,
			'default' => 0,
		);
	}
	foreach(thegem_socials_icons_list() as $icon => $title) {
		$options[$icon.'_link'] = array(
			'title' => sprintf(__('%s Link', 'thegem'), $title),
			'type' => 'input',
			'default' => '#',
		);
	}
	return $options;
}*/

if(!function_exists('thegem_get_current_language')) {
function thegem_get_current_language() {
	static $result;

	if (isset($result)) {
		return $result;
	}

	if(thegem_is_plugin_active('sitepress-multilingual-cms/sitepress.php') && defined('ICL_LANGUAGE_CODE') && ICL_LANGUAGE_CODE) {
		$result = ICL_LANGUAGE_CODE;
		return $result;
	}
	if(thegem_is_plugin_active('polylang/polylang.php') && pll_current_language('slug')) {
		$result = pll_current_language('slug');
		return $result;
	}

	$result = false;
	return $result;
}
}

if(!function_exists('thegem_get_default_language')) {
function thegem_get_default_language() {
	static $result;

	if (isset($result)) {
		return $result;
	}

	if(thegem_is_plugin_active('sitepress-multilingual-cms/sitepress.php')) {
		global $sitepress;
		if(is_object($sitepress) && $sitepress->get_default_language()) {
			$result = $sitepress->get_default_language();
			return $result;
		}
	}
	if(thegem_is_plugin_active('polylang/polylang.php') && pll_default_language('slug')) {
		$result = pll_default_language('slug');
		return $result;
	}

	$result = false;
	return $result;
}
}

/*function thegem_get_option_element($oname = '', $option = array(), $default = NULL) {
	if($default !== NULL) {
		$option['default'] = $default;
	}

	if(!isset($option['default'])) {
		$option['default'] = '';
	}

	$ml_options = array('footer_html', 'top_area_button_text', 'top_area_button_link', 'contacts_address', 'contacts_phone', 'contacts_fax', 'contacts_email', 'contacts_website', 'top_area_contacts_address', 'top_area_contacts_phone', 'top_area_contacts_fax', 'top_area_contacts_email', 'top_area_contacts_website');
	if(in_array($oname, $ml_options) && is_array($option['default'])) {
		if(thegem_get_current_language()) {
			if(isset($option['default'][thegem_get_current_language()])) {
				$option['default'] = $option['default'][thegem_get_current_language()];
			} elseif(thegem_get_default_language() && isset($option['default'][thegem_get_default_language()])) {
				$option['default'] = $option['default'][thegem_get_default_language()];
			} else {
				$option['default'] = '';
			}
		}else {
			$option['default'] = reset($option['default']);
		}
	}

	$option['default'] = stripslashes($option['default']);

	if($option['type'] == 'hidden') {
		$output = '<input type="hidden" id="'.esc_attr($oname).'" name="theme_options['.esc_attr($oname).']"';
		if(isset($option['default'])) {
			$output .= ' value="'.esc_attr($option['default']).'"';
		}
		$output .= '/>';
		return $output;
	}

	$output = '<div class="'.esc_attr('option '.$oname.'_field').'">';

	if(isset($option['type'])) {

		if(isset($option['description'])) {
			$output .= '<div class="description">'.wp_kses($option['description'], array('b' => array(), 'br' => array(), 'a' => array('href' => array()))).'</div>';
		}

		$output .= '<div class="label"><label for="'.esc_attr($oname).'">'.esc_html(isset($option['title']) ? $option['title'] : '').'</label></div><div class="'.esc_attr($option['type']).'">';
		switch ($option['type']) {

		case 'input':
			$output .= '<input id="'.esc_attr($oname).'" name="theme_options['.esc_attr($oname).']"';
			if(isset($option['default'])) {
				$output .= ' value="'.esc_attr($option['default']).'"';
			}
			$output .= '/>';
			break;

		case 'icon':
			$output .= '<input id="'.esc_attr($oname).'" class="icons-picker" name="theme_options['.esc_attr($oname).']"';
			if(isset($option['default'])) {
				$output .= ' value="'.esc_attr($option['default']).'"';
			}
			$output .= '/>';
			break;

		case 'image':
			$output .= '<input id="'.esc_attr($oname).'" name="theme_options['.esc_attr($oname).']"';
			if(isset($option['default'])) {
				$output .= ' value="'.esc_attr($option['default']).'"';
			}
			$output .= '/>';
			break;

		case 'image-select':
			$skins = array('light', 'dark');
			foreach($skins as $skin) {
				foreach($option['items'] as $item) {
					$output .= '<a data-target="'.esc_attr($option['target']).'" href="'.esc_url(get_template_directory_uri().'/images/backgrounds/patterns/'.$skin.'/'.$item.'.jpg').'"><img alt="#" src="'.esc_url(get_template_directory_uri().'/images/backgrounds/patterns/'.$skin.'/'.$item.'-thumb.jpg').'"/></a>';
				}
				$output .= '<span class="clear"></span>';
			}
			break;

		case 'file':
			$output .= '<input id="'.esc_attr($oname).'" name="theme_options['.esc_attr($oname).']"';
			if(isset($option['default'])) {
				$output .= ' value="'.esc_attr($option['default']).'"';
			}
			$output .= '/>';
			break;

		case 'font-select':
			$selected = isset($option['default']) ? $option['default'] : '';
			$fontsList = thegem_fonts_list();
			$output .= '<select id="'.esc_attr($oname).'" name="theme_options['.esc_attr($oname).']">';
			foreach($fontsList as $val => $item) {
				$output .= '<option value="'.esc_attr($val).'"';
				if($val == $selected) {
					$output .= ' selected';
				}
				$output .= '>'.esc_html($item).'</option>';
			}
			$output .= '</select>';
			break;

		case 'font-style':
			$selected = isset($option['default']) ? $option['default'] : '';
			$output .= '<select id="'.esc_attr($oname).'" name="theme_options['.esc_attr($oname).']" data-value="'.esc_attr($selected).'"></select>';
			break;

		case 'font-sets':
			$output .= '<input id="'.esc_attr($oname).'" name="theme_options['.esc_attr($oname).']"';
			if(isset($option['default'])) {
				$output .= ' data-value="'.esc_attr($option['default']).'"';
			}
			$output .= '/>';
			break;

		case 'fixed-number':
			$min = isset($option['min']) ? $option['min'] : 1;
			$max = isset($option['max']) ? $option['max'] : $min+1;
			$default = isset($option['default']) ? $option['default'] : $min;
			$output .= '<input id="'.esc_attr($oname).'" name="theme_options['.esc_attr($oname).']" value="'.esc_attr($default).'" data-min-value="'.esc_attr($min).'" data-max-value="'.esc_attr($max).'"/>';
			break;

		case 'color':
			$output .= '<input id="'.esc_attr($oname).'" name="theme_options['.esc_attr($oname).']"';
			if(isset($option['default'])) {
				$output .= ' value="'.esc_attr($option['default']).'"';
			}
			$output .= ' class="color-select"/>';
			break;

		case 'textarea':
			$output .= '<textarea id="'.esc_attr($oname).'" name="theme_options['.esc_attr($oname).']" cols="100" rows="15">';
			if(isset($option['default'])) {
				$output .= esc_textarea($option['default']);
			}
			$output .= '</textarea>';
			break;

		case 'select':
			$selected = isset($option['default']) ? $option['default'] : '';
			$output .= '<select id="'.esc_attr($oname).'" name="theme_options['.esc_attr($oname).']">';
			foreach($option['items'] as $val => $item) {
				$output .= '<option value="'.$val.'"';
				if($val == $selected) {
					$output .= ' selected';
				}
				$output .= '>'.$item.'</option>';
			}
			$output .= '</select>';
			break;

		default:
			$output .= '<input id="'.esc_attr($oname).'" name="theme_options['.esc_attr($oname).']"';
			if(isset($option['default'])) {
				$output .= ' value="'.esc_attr($option['default']).'"';
			}
			$output .= '/>';
		}

		$output .= '</div>';

		if($option['type'] == 'checkbox') {
			$output = '<div class="option checkbox-option '.esc_attr($oname).'_field">'.(isset($option['description']) ? '<div class="description checkbox-description">'.wp_kses($option['description'], array('b' => array(), 'br' => array(), 'a' => array('href' => array(), 'target' => array()))).'</div>' : '').'<div class="checkbox"><input id="'.esc_attr($oname).'" name="theme_options['.esc_attr($oname).']" type="checkbox" value="'.esc_attr($option['value']).'"';
			if($option['default'] == $option['value']) {
				$output .= ' checked';
			}
			$output .= '> <label for="'.esc_attr($oname).'">'.esc_html($option['title']).'</label></div>';
		}

		if($option['type'] == 'group') {
			$options_values = get_option('thegem_theme_options');
			$output = '<div class="option group-option '.esc_attr($oname).'_field">'.(isset($option['description']) ? '<div class="description group-description">'.esc_html($option['description']).'</div>' : '');
			$output .= '<div class="label"><label for="'.esc_attr($oname).'">'.esc_html($option['title']).'</label></div><div class="'.esc_attr($option['type']).'">';
			foreach($option['options'] as $goname => $goption) {
				$output .= thegem_get_option_element($goname, $goption, isset($options_values[$goname]) ? $options_values[$goname] : NULL);
			}
			$output .= '</div>';
		}

		if($option['type'] == 'group-empty') {
			$output = '<div class="option group-empty-block '.esc_attr($oname).'_field">';
		}

		if($option['type'] == 'html-block') {
			$output = '<div class="option html-block '.esc_attr($oname).'_field">'.$option['html'];
		}

		if($option['type'] == 'hidden-group') {
			$options_values = get_option('thegem_theme_options');
			$output = '<div id="'.esc_attr($oname).'" class="hidden-group-option '.esc_attr($oname).'_field">';
			$output .= '<div class="'.esc_attr($option['type']).'">';
			foreach($option['options'] as $goname => $goption) {
				$output .= thegem_get_option_element($goname, $goption, isset($options_values[$goname]) ? $options_values[$goname] : NULL);
			}
			$output .= '</div>';
		}

		$output .= '<div class="clear"></div></div>';
	}

	return $output;
}*/

function thegem_get_pages_list() {
	$pages = array('' => __('Default', 'thegem'));
	$pages_list = get_pages();
	foreach ($pages_list as $page) {
		$pages[$page->ID] = $page->post_title . ' (ID = ' . $page->ID . ')';
	}
	return $pages;
}

function thegem_color_skin_defaults($skin = 'light') {
	$skin_defaults = apply_filters('thegem_default_skins_options', array(
		'light' => array(
			'main_menu_font_family' => 'Montserrat',
			'main_menu_font_style' => '700',
			'main_menu_font_sets' => '',
			'main_menu_font_size' => '14',
			'main_menu_line_height' => '25',
			'submenu_font_family' => 'Source Sans Pro',
			'submenu_font_style' => 'regular',
			'submenu_font_sets' => '',
			'submenu_font_size' => '16',
			'submenu_line_height' => '20',
			'overlay_menu_font_family' => 'Montserrat',
			'overlay_menu_font_style' => '700',
			'overlay_menu_font_sets' => '',
			'overlay_menu_font_size' => '32',
			'overlay_menu_line_height' => '64',
			'mobile_menu_font_family' => 'Source Sans Pro',
			'mobile_menu_font_style' => 'regular',
			'mobile_menu_font_sets' => '',
			'mobile_menu_font_size' => '16',
			'mobile_menu_line_height' => '20',
			'styled_subtitle_font_family' => 'Source Sans Pro',
			'styled_subtitle_font_style' => '300',
			'styled_subtitle_font_sets' => '',
			'styled_subtitle_font_size' => '24',
			'styled_subtitle_line_height' => '37',
			'styled_subtitle_font_size_tablet' => '22',
			'styled_subtitle_line_height_tablet' => '34',
			'styled_subtitle_font_size_mobile' => '20',
			'styled_subtitle_line_height_mobile' => '27',
			'h1_font_family' => 'Montserrat',
			'h1_font_style' => '700',
			'h1_font_sets' => '',
			'h1_font_size' => '50',
			'h1_line_height' => '69',
			'h1_font_size_tablet' => '38',
			'h1_line_height_tablet' => '53',
			'h1_font_size_mobile' => '36',
			'h1_line_height_mobile' => '48',
			'h2_font_family' => 'Montserrat',
			'h2_font_style' => '700',
			'h2_font_sets' => '',
			'h2_font_size' => '36',
			'h2_line_height' => '53',
			'h2_font_size_tablet' => '32',
			'h2_line_height_tablet' => '42',
			'h2_font_size_mobile' => '30',
			'h2_line_height_mobile' => '40',
			'h3_font_family' => 'Montserrat',
			'h3_font_style' => '700',
			'h3_font_sets' => '',
			'h3_font_size' => '28',
			'h3_line_height' => '42',
			'h3_font_size_tablet' => '26',
			'h3_line_height_tablet' => '38',
			'h3_font_size_mobile' => '24',
			'h3_line_height_mobile' => '34',
			'h4_font_family' => 'Montserrat',
			'h4_font_style' => '700',
			'h4_font_sets' => '',
			'h4_font_size' => '24',
			'h4_line_height' => '38',
			'h4_font_size_tablet' => '24',
			'h4_line_height_tablet' => '36',
			'h4_font_size_mobile' => '22',
			'h4_line_height_mobile' => '30',
			'h5_font_family' => 'Montserrat',
			'h5_font_style' => '700',
			'h5_font_sets' => '',
			'h5_font_size' => '19',
			'h5_line_height' => '30',
			'h5_font_size_tablet' => '19',
			'h5_line_height_tablet' => '30',
			'h5_font_size_mobile' => '19',
			'h5_line_height_mobile' => '26',
			'h6_font_family' => 'Montserrat',
			'h6_font_style' => '700',
			'h6_font_sets' => '',
			'h6_font_size' => '16',
			'h6_line_height' => '25',
			'h6_font_size_tablet' => '16',
			'h6_line_height_tablet' => '25',
			'h6_font_size_mobile' => '16',
			'h6_line_height_mobile' => '23',
			'xlarge_title_font_family' => 'Montserrat',
			'xlarge_title_font_style' => '700',
			'xlarge_title_font_sets' => 'latin,latin-ext',
			'xlarge_title_font_size' => '80',
			'xlarge_title_line_height' => '90',
			'xlarge_font_size_tablet' => '50',
			'xlarge_line_height_tablet' => '69',
			'xlarge_font_size_mobile' => '36',
			'xlarge_line_height_mobile' => '53',
			'light_title_font_family' => 'Montserrat UltraLight',
			'light_title_font_style' => 'regular',
			'light_title_font_sets' => '',
			'body_font_family' => 'Source Sans Pro',
			'body_font_style' => 'regular',
			'body_font_sets' => '',
			'body_font_size' => '16',
			'body_line_height' => '25',
			'title_excerpt_font_family' => 'Source Sans Pro',
			'title_excerpt_font_style' => '300',
			'title_excerpt_font_sets' => '',
			'title_excerpt_font_size' => '24',
			'title_excerpt_line_height' => '37',
			'title_excerpt_font_size_tablet' => '22',
			'title_excerpt_line_height_tablet' => '24',
			'title_excerpt_font_size_mobile' => '20',
			'title_excerpt_line_height_mobile' => '27',
			'widget_title_font_family' => 'Montserrat',
			'widget_title_font_style' => '700',
			'widget_title_font_sets' => '',
			'widget_title_font_size' => '19',
			'widget_title_line_height' => '30',
			'button_font_family' => 'Montserrat',
			'button_font_style' => '700',
			'button_font_sets' => 'latin',
			'button_thin_font_family' => 'Montserrat UltraLight',
			'button_thin_font_style' => 'regular',
			'button_thin_font_sets' => '',
			'portfolio_title_font_family' => 'Montserrat',
			'portfolio_title_font_style' => '700',
			'portfolio_title_font_sets' => '',
			'portfolio_title_font_size' => '16',
			'portfolio_title_line_height' => '24',
			'portfolio_description_font_family' => 'Source Sans Pro',
			'portfolio_description_font_style' => 'regular',
			'portfolio_description_font_sets' => '',
			'portfolio_description_font_size' => '16',
			'portfolio_description_line_height' => '24',
			'quickfinder_title_font_family' => 'Montserrat',
			'quickfinder_title_font_style' => '700',
			'quickfinder_title_font_sets' => 'latin',
			'quickfinder_title_font_size' => '24',
			'quickfinder_title_line_height' => '38',
			'quickfinder_title_thin_font_family' => 'Montserrat UltraLight',
			'quickfinder_title_thin_font_style' => 'regular',
			'quickfinder_title_thin_font_sets' => 'latin,latin-ext',
			'quickfinder_title_thin_font_size' => '24',
			'quickfinder_title_thin_line_height' => '38',
			'quickfinder_description_font_family' => 'Source Sans Pro',
			'quickfinder_description_font_style' => 'regular',
			'quickfinder_description_font_sets' => '',
			'quickfinder_description_font_size' => '16',
			'quickfinder_description_line_height' => '25',
			'gallery_title_font_family' => 'Montserrat UltraLight',
			'gallery_title_font_style' => 'regular',
			'gallery_title_font_sets' => '',
			'gallery_title_font_size' => '24',
			'gallery_title_line_height' => '30',
			'gallery_title_bold_font_family' => 'Montserrat',
			'gallery_title_bold_font_style' => '700',
			'gallery_title_bold_font_sets' => 'latin,latin-ext',
			'gallery_title_bold_font_size' => '24',
			'gallery_title_bold_line_height' => '31',
			'gallery_description_font_family' => 'Source Sans Pro',
			'gallery_description_font_style' => '300',
			'gallery_description_font_sets' => '',
			'gallery_description_font_size' => '17',
			'gallery_description_line_height' => '24',
			'testimonial_font_family' => 'Source Sans Pro',
			'testimonial_font_style' => '300',
			'testimonial_font_sets' => '',
			'testimonial_font_size' => '24',
			'testimonial_line_height' => '36',
			'counter_font_family' => 'Montserrat',
			'counter_font_style' => '700',
			'counter_font_sets' => '',
			'counter_font_size' => '50',
			'counter_line_height' => '69',
			'counter_font_size_tablet' => '36',
			'counter_line_height_tablet' => '53',
			'counter_font_size_mobile' => '36',
			'counter_line_height_mobile' => '53',
			'tabs_title_font_family' => 'Montserrat',
			'tabs_title_font_style' => '700',
			'tabs_title_font_sets' => 'latin,latin-ext',
			'tabs_title_font_size' => '16',
			'tabs_title_line_height' => '25',
			'tabs_title_thin_font_family' => 'Montserrat UltraLight',
			'tabs_title_thin_font_style' => 'regular',
			'tabs_title_thin_font_sets' => 'latin,latin-ext',
			'tabs_title_thin_font_size' => '16',
			'tabs_title_thin_line_height' => '25',
			'woocommerce_price_font_family' => 'Montserrat',
			'woocommerce_price_font_style' => 'regular',
			'woocommerce_price_font_sets' => '',
			'woocommerce_price_font_size' => '26',
			'woocommerce_price_line_height' => '36',
			'slideshow_title_font_family' => 'Montserrat',
			'slideshow_title_font_style' => '700',
			'slideshow_title_font_sets' => '',
			'slideshow_title_font_size' => '50',
			'slideshow_title_line_height' => '69',
			'slideshow_description_font_family' => 'Source Sans Pro',
			'slideshow_description_font_style' => 'regular',
			'slideshow_description_font_sets' => '',
			'slideshow_description_font_size' => '16',
			'slideshow_description_line_height' => '25',
			'product_title_listing_font_family' => 'Montserrat',
			'product_title_listing_font_style' => '700',
			'product_title_listing_font_sets' => 'latin,latin-ext',
			'product_title_listing_font_size' => '16',
			'product_title_listing_line_height' => '25',
			'product_title_page_font_family' => 'Montserrat UltraLight',
			'product_title_page_font_style' => 'regular',
			'product_title_page_font_sets' => 'latin,latin-ext',
			'product_title_page_font_size' => '28',
			'product_title_page_line_height' => '42',
			'product_title_widget_font_family' => 'Source Sans Pro',
			'product_title_widget_font_style' => 'regular',
			'product_title_widget_font_sets' => 'latin,latin-ext',
			'product_title_widget_font_size' => '16',
			'product_title_widget_line_height' => '25',
			'product_title_cart_font_family' => 'Source Sans Pro',
			'product_title_cart_font_style' => 'regular',
			'product_title_cart_font_sets' => 'latin,latin-ext',
			'product_title_cart_font_size' => '16',
			'product_title_cart_line_height' => '25',
			'product_price_listing_font_family' => 'Source Sans Pro',
			'product_price_listing_font_style' => 'regular',
			'product_price_listing_font_sets' => 'latin,latin-ext',
			'product_price_listing_font_size' => '16',
			'product_price_listing_line_height' => '25',
			'product_price_page_font_family' => 'Source Sans Pro',
			'product_price_page_font_style' => '300',
			'product_price_page_font_sets' => 'latin,latin-ext',
			'product_price_page_font_size' => '36',
			'product_price_page_line_height' => '36',
			'product_price_widget_font_family' => 'Source Sans Pro',
			'product_price_widget_font_style' => '300',
			'product_price_widget_font_sets' => 'latin,latin-ext',
			'product_price_widget_font_size' => '20',
			'product_price_widget_line_height' => '30',
			'product_price_cart_font_family' => 'Source Sans Pro',
			'product_price_cart_font_style' => '300',
			'product_price_cart_font_sets' => 'latin,latin-ext',
			'product_price_cart_font_size' => '24',
			'product_price_cart_line_height' => '30',
			'basic_outer_background_color' => '#f0f3f2',
			'top_background_color' => '#ffffff',
			'main_background_color' => '#ffffff',
			'styled_elements_background_color' => '#f4f6f7',
			'styled_elements_color_1' => '#00bcd4',
			'styled_elements_color_2' => '#99a9b5',
			'styled_elements_color_3' => '#f44336',
			'styled_elements_color_4' => '#393d50',
			'divider_default_color' => '#dfe5e8',
			'box_border_color' => '#dfe5e8',
			'main_menu_level1_color' => '#3c3950',
			'main_menu_level1_background_color' => '',
			'main_menu_level1_hover_color' => '#00bcd4',
			'main_menu_level1_hover_background_color' => '',
			'main_menu_level1_active_color' => '#3c3950',
			'main_menu_level1_active_background_color' => '#3c3950',
			'main_menu_level2_color' => '#5f727f',
			'main_menu_level2_background_color' => '#f4f6f7',
			'main_menu_level2_hover_color' => '#3c3950',
			'main_menu_level2_hover_background_color' => '#ffffff',
			'main_menu_level2_active_color' => '#3c3950',
			'main_menu_level2_active_background_color' => '#ffffff',
			'main_menu_mega_column_title_color' => '#3c3950',
			'main_menu_mega_column_title_hover_color' => '#00bcd4',
			'main_menu_mega_column_title_active_color' => '#00bcd4',
			'main_menu_level3_color' => '#5f727f',
			'main_menu_level3_background_color' => '#ffffff',
			'main_menu_level3_hover_color' => '#ffffff',
			'main_menu_level3_hover_background_color' => '#494c64',
			'main_menu_level3_active_color' => '#00bcd4',
			'main_menu_level3_active_background_color' => '#ffffff',
			'main_menu_level1_light_color' => '#ffffff',
			'main_menu_level1_light_hover_color' => '#00bcd4',
			'main_menu_level1_light_active_color' => '#ffffff',
			'main_menu_level2_border_color' => '#dfe5e8',
			'mega_menu_icons_color' => '',
			'overlay_menu_background_color' => '#212331',
			'overlay_menu_color' => '#ffffff',
			'overlay_menu_hover_color' => '#00bcd4',
			'overlay_menu_active_color' => '#00bcd4',
			'hamburger_menu_icon_color' => '#3c3950',
			'hamburger_menu_icon_light_color' => '#ffffff',
			'mobile_menu_button_color' => '#3c3950',
			'mobile_menu_button_light_color' => '#ffffff',
			'mobile_menu_background_color' => '#ffffff',
			'mobile_menu_level1_color' => '#5f727f',
			'mobile_menu_level1_background_color' => '#f4f6f7',
			'mobile_menu_level1_active_color' => '#3c3950',
			'mobile_menu_level1_active_background_color' => '#ffffff',
			'mobile_menu_level2_color' => '#5f727f',
			'mobile_menu_level2_background_color' => '#f4f6f7',
			'mobile_menu_level2_active_color' => '#3c3950',
			'mobile_menu_level2_active_background_color' => '#ffffff',
			'mobile_menu_level3_color' => '#5f727f',
			'mobile_menu_level3_background_color' => '#f4f6f7',
			'mobile_menu_level3_active_color' => '#3c3950',
			'mobile_menu_level3_active_background_color' => '#ffffff',
			'mobile_menu_border_color' => '#dfe5e8',
			'mobile_menu_social_icon_color' => '',
			'mobile_menu_hide_color' => '',
			'top_area_background_color' => '#f4f6f7',
			'top_area_border_color' => '#00bcd4',
			'top_area_separator_color' => '#dfe5e8',
			'top_area_text_color' => '#5f727f',
			'top_area_link_color' => '#5f727f',
			'top_area_link_hover_color' => '#00bcd4',
			'top_area_button_text_color' => '#ffffff',
			'top_area_button_background_color' => '#494c64',
			'top_area_button_hover_text_color' => '#ffffff',
			'top_area_button_hover_background_color' => '#00bcd4',
			'footer_background_color' => '#181828',
			'footer_text_color' => '#99a9b5',
			'footer_menu_color' => '',
			'footer_menu_hover_color' => '',
			'footer_menu_separator_color' => '',
			'footer_top_border_color' => '',
			'footer_widget_area_background_color' => '#212331',
			'footer_widget_title_color' => '#feffff',
			'footer_widget_text_color' => '#99a9b5',
			'footer_widget_link_color' => '#99a9b5',
			'footer_widget_hover_link_color' => '#00bcd4',
			'footer_widget_active_link_color' => '#00bcd4',
			'footer_widget_triangle_color' => '',
			'body_color' => '#5f727f',
			'h1_color' => '#3c3950',
			'h2_color' => '#3c3950',
			'h3_color' => '#3c3950',
			'h4_color' => '#3c3950',
			'h5_color' => '#3c3950',
			'h6_color' => '#3c3950',
			'link_color' => '#00bcd4',
			'hover_link_color' => '#384554',
			'active_link_color' => '#00bcd4',
			'copyright_text_color' => '#99a9b5',
			'copyright_link_color' => '#00bcd4',
			'title_bar_background_color' => '#333144',
			'title_bar_text_color' => '#ffffff',
			'date_filter_subtitle_color' => '#99a9b5',
			'system_icons_font' => '#99a3b0',
			'system_icons_font_2' => '#b6c6c9',
			'button_text_basic_color' => '#ffffff',
			'button_text_hover_color' => '#ffffff',
			'button_background_basic_color' => '#b6c6c9',
			'button_background_hover_color' => '#3c3950',
			'button_outline_text_basic_color' => '#00bcd4',
			'button_outline_text_hover_color' => '#ffffff',
			'button_outline_border_basic_color' => '#00bcd4',
			'widget_title_color' => '#3c3950',
			'widget_link_color' => '#5f727f',
			'widget_hover_link_color' => '#00bcd4',
			'widget_active_link_color' => '#384554',
			'portfolio_title_color' => '#5f727f',
			'portfolio_description_color' => '#5f727f',
			'portfolio_date_color' => '#99a9b5',
			'portfolio_arrow_color' => '',
			'portfolio_arrow_hover_color' => '',
			'portfolio_arrow_background_color' => '',
			'portfolio_arrow_background_hover_color' => '',
			'portfolio_sorting_controls_color' => '',
			'portfolio_sorting_background_color' => '',
			'portfolio_sorting_switch_color' => '',
			'portfolio_sorting_separator_color' => '',
			'portfolio_filter_button_color' => '',
			'portfolio_filter_button_background_color' => '',
			'portfolio_filter_button_hover_color' => '',
			'portfolio_filter_button_hover_background_color' => '',
			'portfolio_filter_button_active_color' => '',
			'portfolio_filter_button_active_background_color' => '',
			'gallery_caption_background_color' => '#000000',
			'gallery_title_color' => '#ffffff',
			'gallery_description_color' => '#ffffff',
			'slideshow_arrow_background' => '#394050',
			'slideshow_arrow_hover_background' => '#00bcd4',
			'slideshow_arrow_color' => '#ffffff',
			'sliders_arrow_color' => '#3c3950',
			'sliders_arrow_background_color' => '#b6c6c9',
			'sliders_arrow_hover_color' => '#ffffff',
			'sliders_arrow_background_hover_color' => '#00bcd4',
			'hover_effect_default_color' => '#00bcd4',
			'hover_effect_zooming_blur_color' => '#ffffff',
			'hover_effect_horizontal_sliding_color' => '#46485c',
			'hover_effect_vertical_sliding_color' => '#f44336',
			'quickfinder_title_color' => '#4c5867',
			'quickfinder_description_color' => '#5f727f',
			'testimonial_arrow_color' => '',
			'testimonial_arrow_hover_color' => '',
			'testimonial_arrow_background_color' => '',
			'testimonial_arrow_background_hover_color' => '',
			'bullets_symbol_color' => '#5f727f',
			'icons_symbol_color' => '#91a0ac',
			'icons_portfolio_gallery_hover_color' => '#ffffff',
			'pagination_basic_color' => '#99a9b5',
			'pagination_basic_background_color' => '#ffffff',
			'pagination_hover_color' => '#00bcd4',
			'pagination_active_color' => '#3c3950',
			'mini_pagination_color' => '#b6c6c9',
			'mini_pagination_active_color' => '#00bcd4',
			'blockquote_icon_testimonials' => '',
			'blockquote_icon_blockquotes' => '',
			'socials_colors_top_area' => '',
			'socials_colors_footer' => '',
			'socials_colors_posts' => '',
			'socials_colors_woocommerce' => '',
			'contact_form_light_input_color' => '',
			'contact_form_light_input_background_color' => '',
			'contact_form_light_input_border_color' => '',
			'contact_form_light_input_placeholder_color' => '',
			'contact_form_light_input_icon_color' => '',
			'contact_form_light_label_color' => '',
			'contact_form_light_button_style' => 'flat',
			'contact_form_light_button_position' => 'fullwidth',
			'contact_form_light_button_size' => 'small',
			'contact_form_light_button_text_weight' => 'normal',
			'contact_form_light_button_border' => '0',
			'contact_form_light_button_corner' => '3',
			'contact_form_light_button_text_color' => '',
			'contact_form_light_button_hover_text_color' => '',
			'contact_form_light_button_background_color' => '',
			'contact_form_light_button_hover_background_color' => '',
			'contact_form_light_button_border_color' => '',
			'contact_form_light_button_hover_border_color' => '',
			'contact_form_dark_input_color' => '',
			'contact_form_dark_input_background_color' => '',
			'contact_form_dark_input_border_color' => '',
			'contact_form_dark_input_placeholder_color' => '',
			'contact_form_dark_input_icon_color' => '',
			'contact_form_dark_label_color' => '',
			'contact_form_dark_button_style' => 'flat',
			'contact_form_dark_button_position' => 'fullwidth',
			'contact_form_dark_button_size' => 'small',
			'contact_form_dark_button_text_weight' => 'normal',
			'contact_form_dark_button_border' => '0',
			'contact_form_dark_button_corner' => '3',
			'contact_form_dark_button_text_color' => '',
			'contact_form_dark_button_hover_text_color' => '',
			'contact_form_dark_button_background_color' => '',
			'contact_form_dark_button_hover_background_color' => '',
			'contact_form_dark_button_border_color' => '',
			'contact_form_dark_button_hover_border_color' => '',
			'mailchimp_content_input_color' => '',
			'mailchimp_content_input_background_color' => '',
			'mailchimp_content_input_border_color' => '',
			'mailchimp_content_input_placeholder_color' => '',
			'mailchimp_content_text_color' => '',
			'mailchimp_content_label_color' => '',
			'mailchimp_content_button_text_color' => '',
			'mailchimp_content_button_hover_text_color' => '',
			'mailchimp_content_button_background_color' => '',
			'mailchimp_content_button_hover_background_color' => '',
			'mailchimp_sidebars_background_color' => '',
			'mailchimp_sidebars_input_color' => '',
			'mailchimp_sidebars_input_background_color' => '',
			'mailchimp_sidebars_input_border_color' => '',
			'mailchimp_sidebars_input_placeholder_color' => '',
			'mailchimp_sidebars_text_color' => '',
			'mailchimp_sidebars_label_color' => '',
			'mailchimp_sidebars_button_text_color' => '',
			'mailchimp_sidebars_button_hover_text_color' => '',
			'mailchimp_sidebars_button_background_color' => '',
			'mailchimp_sidebars_button_hover_background_color' => '',
			'mailchimp_footer_background_color' => '',
			'mailchimp_footer_input_color' => '',
			'mailchimp_footer_input_background_color' => '',
			'mailchimp_footer_input_border_color' => '',
			'mailchimp_footer_input_placeholder_color' => '',
			'mailchimp_footer_text_color' => '',
			'mailchimp_footer_label_color' => '',
			'mailchimp_footer_button_text_color' => '',
			'mailchimp_footer_button_hover_text_color' => '',
			'mailchimp_footer_button_background_color' => '',
			'mailchimp_footer_button_hover_background_color' => '',
			'form_elements_background_color' => '#f4f6f7',
			'form_elements_text_color' => '#3c3950',
			'form_elements_border_color' => '#dfe5e8',
			'breadcrumbs_default_color' => '',
			'breadcrumbs_active_color' => '',
			'breadcrumbs_hover_color' => '',
			'preloader_page_background' => '',
			'preloader_line_1' => '',
			'preloader_line_2' => '',
			'preloader_line_3' => '',
			'product_title_listing_color' => '#5f727f',
			'product_title_page_color' => '#3c3950',
			'product_title_widget_color' => '#5f727f',
			'product_title_cart_color' => '#00bcd4',
			'product_price_listing_color' => '#00bcd4',
			'product_price_page_color' => '#3c3950',
			'product_price_widget_color' => '#3c3950',
			'product_price_cart_color' => '#3c3950',
			'product_separator_listing_color' => '#000000',
			'minicart_amount_label_color' => '#00bcd4',
			'cart_table_header_color' => '',
			'cart_table_header_background_color' => '',
			'cart_form_labels_color' => '',
			'checkout_step_title_color' => '',
			'checkout_step_background_color' => '',
			'checkout_step_title_active_color' => '',
			'checkout_step_background_active_color' => '',
			'basic_outer_background_image' => '',
			'top_background_image' => '',
			'top_area_background_image' => '',
			'main_background_image' => '',
			'footer_background_image' => '',
			'footer_widget_area_background_image' => '',
		)
	));
	if($skin) {
		return $skin_defaults[$skin];
	}
	return $skin_defaults;
}

/*function thegem_first_install_settings_old() {
	return apply_filters('thegem_default_theme_options', array(
		'page_layout_style' => 'fullwidth',
		'page_padding_top' => '10',
		'page_padding_bottom' => '10',
		'page_padding_left' => '10',
		'page_padding_right' => '10',
		'disable_smooth_scroll' => '1',
		'logo_width' => '164',
		'small_logo_width' => '132',
		'logo' => get_template_directory_uri() . '/images/default-logo.png',
		'small_logo' => get_template_directory_uri() . '/images/default-logo-small.png',
		'logo_light' => get_template_directory_uri() . '/images/default-logo-light.png',
		'small_logo_light' => get_template_directory_uri() . '/images/default-logo-light-small.png',
		'favicon' => get_template_directory_uri() . '/images/favicon.ico',
		'preloader_style' => 'preloader-4',
		'custom_css' => '',
		'custom_js' => '',
		'portfolio_rewrite_slug' => '',
		'news_rewrite_slug' => '',
		'404_page' => '',
		'pagespeed_lazy_images_visibility_offset' => '',
		'size_guide_image' => '',
		'products_pagination' => 'normal',
		'checkout_type' => 'multi-step',
		'hamburger_menu_cart_position' => '',
		'cart_label_count' => '0',
		'woocommerce_activate_images_sizes' => '1',
		'woocommerce_catalog_image_width' => '522',
		'woocommerce_catalog_image_height' => '652',
		'woocommerce_product_image_width' => '564',
		'woocommerce_product_image_height' => '744',
		'woocommerce_thumbnail_image_width' => '160',
		'woocommerce_thumbnail_image_height' => '160',
		'header_layout' => 'default',
		'header_style' => '3',
		'mobile_menu_layout' => 'default',
		'mobile_menu_layout_style' => 'light',
		'logo_position' => 'left',
		'menu_appearance_tablet_portrait' => 'responsive',
		'menu_appearance_tablet_landscape' => 'centered',
		'hamburger_menu_icon_size' => '',
		'top_area_style' => '1',
		'top_area_alignment' => 'justified',
		'top_area_contacts' => '1',
		'top_area_socials' => '1',
		'top_area_button_text' => 'Join Now',
		'top_area_button_link' => '#',
		'top_area_disable_fixed' => '1',
		'top_area_disable_mobile' => '1',
		'main_menu_font_family' => 'Montserrat',
		'main_menu_font_style' => '700',
		'main_menu_font_sets' => '',
		'main_menu_font_size' => '14',
		'main_menu_line_height' => '25',
		'submenu_font_family' => 'Source Sans Pro',
		'submenu_font_style' => 'regular',
		'submenu_font_sets' => '',
		'submenu_font_size' => '16',
		'submenu_line_height' => '20',
		'overlay_menu_font_family' => 'Montserrat',
		'overlay_menu_font_style' => '700',
		'overlay_menu_font_sets' => '',
		'overlay_menu_font_size' => '32',
		'overlay_menu_line_height' => '64',
		'mobile_menu_font_family' => 'Source Sans Pro',
		'mobile_menu_font_style' => 'regular',
		'mobile_menu_font_sets' => '',
		'mobile_menu_font_size' => '16',
		'mobile_menu_line_height' => '20',
		'styled_subtitle_font_family' => 'Source Sans Pro',
		'styled_subtitle_font_style' => '300',
		'styled_subtitle_font_sets' => '',
		'styled_subtitle_font_size' => '24',
		'styled_subtitle_line_height' => '37',
		'styled_subtitle_font_size_tablet' => '24',
		'styled_subtitle_line_height_tablet' => '37',
		'styled_subtitle_font_size_mobile' => '24',
		'styled_subtitle_line_height_mobile' => '37',
		'h1_font_family' => 'Montserrat',
		'h1_font_style' => '700',
		'h1_font_sets' => '',
		'h1_font_size' => '50',
		'h1_line_height' => '69',
		'h1_font_size_tablet' => '36',
		'h1_line_height_tablet' => '53',
		'h1_font_size_mobile' => '28',
		'h1_line_height_mobile' => '42',
		'h2_font_family' => 'Montserrat',
		'h2_font_style' => '700',
		'h2_font_sets' => '',
		'h2_font_size' => '36',
		'h2_line_height' => '53',
		'h2_font_size_tablet' => '28',
		'h2_line_height_tablet' => '42',
		'h2_font_size_mobile' => '24',
		'h2_line_height_mobile' => '38',
		'h3_font_family' => 'Montserrat',
		'h3_font_style' => '700',
		'h3_font_sets' => '',
		'h3_font_size' => '28',
		'h3_line_height' => '42',
		'h3_font_size_tablet' => '24',
		'h3_line_height_tablet' => '38',
		'h3_font_size_mobile' => '24',
		'h3_line_height_mobile' => '38',
		'h4_font_family' => 'Montserrat',
		'h4_font_style' => '700',
		'h4_font_sets' => '',
		'h4_font_size' => '24',
		'h4_line_height' => '38',
		'h4_font_size_tablet' => '24',
		'h4_line_height_tablet' => '38',
		'h4_font_size_mobile' => '24',
		'h4_line_height_mobile' => '38',
		'h5_font_family' => 'Montserrat',
		'h5_font_style' => '700',
		'h5_font_sets' => '',
		'h5_font_size' => '19',
		'h5_line_height' => '30',
		'h5_font_size_tablet' => '19',
		'h5_line_height_tablet' => '30',
		'h5_font_size_mobile' => '19',
		'h5_line_height_mobile' => '30',
		'h6_font_family' => 'Montserrat',
		'h6_font_style' => '700',
		'h6_font_sets' => '',
		'h6_font_size' => '16',
		'h6_line_height' => '25',
		'h6_font_size_tablet' => '16',
		'h6_line_height_tablet' => '25',
		'h6_font_size_mobile' => '16',
		'h6_line_height_mobile' => '25',
		'xlarge_title_font_family' => 'Montserrat',
		'xlarge_title_font_style' => '700',
		'xlarge_title_font_sets' => 'latin,latin-ext',
		'xlarge_title_font_size' => '80',
		'xlarge_title_line_height' => '90',
		'xlarge_font_size_tablet' => '50',
		'xlarge_line_height_tablet' => '69',
		'xlarge_font_size_mobile' => '36',
		'xlarge_line_height_mobile' => '53',
		'light_title_font_family' => 'Montserrat UltraLight',
		'light_title_font_style' => 'regular',
		'light_title_font_sets' => '',
		'body_font_family' => 'Source Sans Pro',
		'body_font_style' => 'regular',
		'body_font_sets' => '',
		'body_font_size' => '16',
		'body_line_height' => '25',
		'title_excerpt_font_family' => 'Source Sans Pro',
		'title_excerpt_font_style' => '300',
		'title_excerpt_font_sets' => '',
		'title_excerpt_font_size' => '24',
		'title_excerpt_line_height' => '37',
		'title_excerpt_font_size_tablet' => '24',
		'title_excerpt_line_height_tablet' => '37',
		'title_excerpt_font_size_mobile' => '24',
		'title_excerpt_line_height_mobile' => '37',
		'widget_title_font_family' => 'Montserrat',
		'widget_title_font_style' => '700',
		'widget_title_font_sets' => '',
		'widget_title_font_size' => '19',
		'widget_title_line_height' => '30',
		'button_font_family' => 'Montserrat',
		'button_font_style' => '700',
		'button_font_sets' => 'latin',
		'button_thin_font_family' => 'Montserrat UltraLight',
		'button_thin_font_style' => 'regular',
		'button_thin_font_sets' => '',
		'portfolio_title_font_family' => 'Montserrat',
		'portfolio_title_font_style' => '700',
		'portfolio_title_font_sets' => '',
		'portfolio_title_font_size' => '16',
		'portfolio_title_line_height' => '24',
		'portfolio_description_font_family' => 'Source Sans Pro',
		'portfolio_description_font_style' => 'regular',
		'portfolio_description_font_sets' => '',
		'portfolio_description_font_size' => '16',
		'portfolio_description_line_height' => '24',
		'quickfinder_title_font_family' => 'Montserrat',
		'quickfinder_title_font_style' => '700',
		'quickfinder_title_font_sets' => 'latin',
		'quickfinder_title_font_size' => '24',
		'quickfinder_title_line_height' => '38',
		'quickfinder_title_thin_font_family' => 'Montserrat UltraLight',
		'quickfinder_title_thin_font_style' => 'regular',
		'quickfinder_title_thin_font_sets' => 'latin,latin-ext',
		'quickfinder_title_thin_font_size' => '24',
		'quickfinder_title_thin_line_height' => '38',
		'quickfinder_description_font_family' => 'Source Sans Pro',
		'quickfinder_description_font_style' => 'regular',
		'quickfinder_description_font_sets' => '',
		'quickfinder_description_font_size' => '16',
		'quickfinder_description_line_height' => '25',
		'gallery_title_font_family' => 'Montserrat UltraLight',
		'gallery_title_font_style' => 'regular',
		'gallery_title_font_sets' => '',
		'gallery_title_font_size' => '24',
		'gallery_title_line_height' => '30',
		'gallery_title_bold_font_family' => 'Montserrat',
		'gallery_title_bold_font_style' => '700',
		'gallery_title_bold_font_sets' => 'latin,latin-ext',
		'gallery_title_bold_font_size' => '24',
		'gallery_title_bold_line_height' => '31',
		'gallery_description_font_family' => 'Source Sans Pro',
		'gallery_description_font_style' => '300',
		'gallery_description_font_sets' => '',
		'gallery_description_font_size' => '17',
		'gallery_description_line_height' => '24',
		'testimonial_font_family' => 'Source Sans Pro',
		'testimonial_font_style' => '300',
		'testimonial_font_sets' => '',
		'testimonial_font_size' => '24',
		'testimonial_line_height' => '36',
		'counter_font_family' => 'Montserrat',
		'counter_font_style' => '700',
		'counter_font_sets' => '',
		'counter_font_size' => '50',
		'counter_line_height' => '69',
		'counter_font_size_tablet' => '36',
		'counter_line_height_tablet' => '53',
		'counter_font_size_mobile' => '36',
		'counter_line_height_mobile' => '53',
		'tabs_title_font_family' => 'Montserrat',
		'tabs_title_font_style' => '700',
		'tabs_title_font_sets' => 'latin,latin-ext',
		'tabs_title_font_size' => '16',
		'tabs_title_line_height' => '25',
		'tabs_title_thin_font_family' => 'Montserrat UltraLight',
		'tabs_title_thin_font_style' => 'regular',
		'tabs_title_thin_font_sets' => 'latin,latin-ext',
		'tabs_title_thin_font_size' => '16',
		'tabs_title_thin_line_height' => '25',
		'woocommerce_price_font_family' => 'Montserrat',
		'woocommerce_price_font_style' => 'regular',
		'woocommerce_price_font_sets' => '',
		'woocommerce_price_font_size' => '26',
		'woocommerce_price_line_height' => '36',
		'slideshow_title_font_family' => 'Montserrat',
		'slideshow_title_font_style' => '700',
		'slideshow_title_font_sets' => '',
		'slideshow_title_font_size' => '50',
		'slideshow_title_line_height' => '69',
		'slideshow_description_font_family' => 'Source Sans Pro',
		'slideshow_description_font_style' => 'regular',
		'slideshow_description_font_sets' => '',
		'slideshow_description_font_size' => '16',
		'slideshow_description_line_height' => '25',
		'product_title_listing_font_family' => 'Montserrat',
		'product_title_listing_font_style' => '700',
		'product_title_listing_font_sets' => 'latin,latin-ext',
		'product_title_listing_font_size' => '16',
		'product_title_listing_line_height' => '25',
		'product_title_page_font_family' => 'Montserrat UltraLight',
		'product_title_page_font_style' => 'regular',
		'product_title_page_font_sets' => 'latin,latin-ext',
		'product_title_page_font_size' => '28',
		'product_title_page_line_height' => '42',
		'product_title_widget_font_family' => 'Source Sans Pro',
		'product_title_widget_font_style' => 'regular',
		'product_title_widget_font_sets' => 'latin,latin-ext',
		'product_title_widget_font_size' => '16',
		'product_title_widget_line_height' => '25',
		'product_title_cart_font_family' => 'Source Sans Pro',
		'product_title_cart_font_style' => 'regular',
		'product_title_cart_font_sets' => 'latin,latin-ext',
		'product_title_cart_font_size' => '16',
		'product_title_cart_line_height' => '25',
		'product_price_listing_font_family' => 'Source Sans Pro',
		'product_price_listing_font_style' => 'regular',
		'product_price_listing_font_sets' => 'latin,latin-ext',
		'product_price_listing_font_size' => '16',
		'product_price_listing_line_height' => '25',
		'product_price_page_font_family' => 'Source Sans Pro',
		'product_price_page_font_style' => '300',
		'product_price_page_font_sets' => 'latin,latin-ext',
		'product_price_page_font_size' => '36',
		'product_price_page_line_height' => '36',
		'product_price_widget_font_family' => 'Source Sans Pro',
		'product_price_widget_font_style' => '300',
		'product_price_widget_font_sets' => 'latin,latin-ext',
		'product_price_widget_font_size' => '20',
		'product_price_widget_line_height' => '30',
		'product_price_cart_font_family' => 'Source Sans Pro',
		'product_price_cart_font_style' => '300',
		'product_price_cart_font_sets' => 'latin,latin-ext',
		'product_price_cart_font_size' => '24',
		'product_price_cart_line_height' => '30',
		'basic_outer_background_color' => '#f0f3f2',
		'top_background_color' => '#ffffff',
		'main_background_color' => '#ffffff',
		'styled_elements_background_color' => '#f4f6f7',
		'styled_elements_color_1' => '#00bcd4',
		'styled_elements_color_2' => '#99a9b5',
		'styled_elements_color_3' => '#f44336',
		'styled_elements_color_4' => '#393d50',
		'divider_default_color' => '#dfe5e8',
		'box_border_color' => '#dfe5e8',
		'main_menu_level1_color' => '#3c3950',
		'main_menu_level1_background_color' => '',
		'main_menu_level1_hover_color' => '#00bcd4',
		'main_menu_level1_hover_background_color' => '',
		'main_menu_level1_active_color' => '#3c3950',
		'main_menu_level1_active_background_color' => '#3c3950',
		'main_menu_level2_color' => '#5f727f',
		'main_menu_level2_background_color' => '#f4f6f7',
		'main_menu_level2_hover_color' => '#3c3950',
		'main_menu_level2_hover_background_color' => '#ffffff',
		'main_menu_level2_active_color' => '#3c3950',
		'main_menu_level2_active_background_color' => '#ffffff',
		'main_menu_mega_column_title_color' => '#3c3950',
		'main_menu_mega_column_title_hover_color' => '#00bcd4',
		'main_menu_mega_column_title_active_color' => '#00bcd4',
		'main_menu_level3_color' => '#5f727f',
		'main_menu_level3_background_color' => '#ffffff',
		'main_menu_level3_hover_color' => '#ffffff',
		'main_menu_level3_hover_background_color' => '#494c64',
		'main_menu_level3_active_color' => '#00bcd4',
		'main_menu_level3_active_background_color' => '#ffffff',
		'main_menu_level1_light_color' => '#ffffff',
		'main_menu_level1_light_hover_color' => '#00bcd4',
		'main_menu_level1_light_active_color' => '#ffffff',
		'main_menu_level2_border_color' => '#dfe5e8',
		'mega_menu_icons_color' => '',
		'overlay_menu_background_color' => '#212331',
		'overlay_menu_color' => '#ffffff',
		'overlay_menu_hover_color' => '#00bcd4',
		'overlay_menu_active_color' => '#00bcd4',
		'hamburger_menu_icon_color' => '#3c3950',
		'hamburger_menu_icon_light_color' => '#ffffff',
		'mobile_menu_button_color' => '#3c3950',
		'mobile_menu_button_light_color' => '#ffffff',
		'mobile_menu_background_color' => '#ffffff',
		'mobile_menu_level1_color' => '#5f727f',
		'mobile_menu_level1_background_color' => '#f4f6f7',
		'mobile_menu_level1_active_color' => '#3c3950',
		'mobile_menu_level1_active_background_color' => '#ffffff',
		'mobile_menu_level2_color' => '#5f727f',
		'mobile_menu_level2_background_color' => '#f4f6f7',
		'mobile_menu_level2_active_color' => '#3c3950',
		'mobile_menu_level2_active_background_color' => '#ffffff',
		'mobile_menu_level3_color' => '#5f727f',
		'mobile_menu_level3_background_color' => '#f4f6f7',
		'mobile_menu_level3_active_color' => '#3c3950',
		'mobile_menu_level3_active_background_color' => '#ffffff',
		'mobile_menu_border_color' => '#dfe5e8',
		'mobile_menu_social_icon_color' => '',
		'mobile_menu_hide_color' => '',
		'top_area_background_color' => '#f4f6f7',
		'top_area_border_color' => '#00bcd4',
		'top_area_separator_color' => '#dfe5e8',
		'top_area_text_color' => '#5f727f',
		'top_area_link_color' => '#5f727f',
		'top_area_link_hover_color' => '#00bcd4',
		'top_area_button_text_color' => '#ffffff',
		'top_area_button_background_color' => '#494c64',
		'top_area_button_hover_text_color' => '#ffffff',
		'top_area_button_hover_background_color' => '#00bcd4',
		'footer_background_color' => '#181828',
		'footer_text_color' => '#99a9b5',
		'footer_menu_color' => '',
		'footer_menu_hover_color' => '',
		'footer_menu_separator_color' => '',
		'footer_top_border_color' => '',
		'footer_widget_area_background_color' => '#212331',
		'footer_widget_title_color' => '#feffff',
		'footer_widget_text_color' => '#99a9b5',
		'footer_widget_link_color' => '#99a9b5',
		'footer_widget_hover_link_color' => '#00bcd4',
		'footer_widget_active_link_color' => '#00bcd4',
		'footer_widget_triangle_color' => '',
		'body_color' => '#5f727f',
		'h1_color' => '#3c3950',
		'h2_color' => '#3c3950',
		'h3_color' => '#3c3950',
		'h4_color' => '#3c3950',
		'h5_color' => '#3c3950',
		'h6_color' => '#3c3950',
		'link_color' => '#00bcd4',
		'hover_link_color' => '#384554',
		'active_link_color' => '#00bcd4',
		'copyright_text_color' => '#99a9b5',
		'copyright_link_color' => '#00bcd4',
		'title_bar_background_color' => '#333144',
		'title_bar_text_color' => '#ffffff',
		'date_filter_subtitle_color' => '#99a9b5',
		'system_icons_font' => '#99a3b0',
		'system_icons_font_2' => '#b6c6c9',
		'button_text_basic_color' => '#ffffff',
		'button_text_hover_color' => '#ffffff',
		'button_background_basic_color' => '#b6c6c9',
		'button_background_hover_color' => '#3c3950',
		'button_outline_text_basic_color' => '#00bcd4',
		'button_outline_text_hover_color' => '#ffffff',
		'button_outline_border_basic_color' => '#00bcd4',
		'widget_title_color' => '#3c3950',
		'widget_link_color' => '#5f727f',
		'widget_hover_link_color' => '#00bcd4',
		'widget_active_link_color' => '#384554',
		'portfolio_title_color' => '#5f727f',
		'portfolio_description_color' => '#5f727f',
		'portfolio_date_color' => '#99a9b5',
		'portfolio_arrow_color' => '',
		'portfolio_arrow_hover_color' => '',
		'portfolio_arrow_background_color' => '',
		'portfolio_arrow_background_hover_color' => '',
		'portfolio_sorting_controls_color' => '',
		'portfolio_sorting_background_color' => '',
		'portfolio_sorting_switch_color' => '',
		'portfolio_sorting_separator_color' => '',
		'portfolio_filter_button_color' => '',
		'portfolio_filter_button_background_color' => '',
		'portfolio_filter_button_hover_color' => '',
		'portfolio_filter_button_hover_background_color' => '',
		'portfolio_filter_button_active_color' => '',
		'portfolio_filter_button_active_background_color' => '',
		'gallery_caption_background_color' => '#000000',
		'gallery_title_color' => '#ffffff',
		'gallery_description_color' => '#ffffff',
		'slideshow_arrow_background' => '#394050',
		'slideshow_arrow_hover_background' => '#00bcd4',
		'slideshow_arrow_color' => '#ffffff',
		'sliders_arrow_color' => '#3c3950',
		'sliders_arrow_background_color' => '#b6c6c9',
		'sliders_arrow_hover_color' => '#ffffff',
		'sliders_arrow_background_hover_color' => '#00bcd4',
		'hover_effect_default_color' => '#00bcd4',
		'hover_effect_zooming_blur_color' => '#ffffff',
		'hover_effect_horizontal_sliding_color' => '#46485c',
		'hover_effect_vertical_sliding_color' => '#f44336',
		'quickfinder_title_color' => '#4c5867',
		'quickfinder_description_color' => '#5f727f',
		'testimonial_arrow_color' => '',
		'testimonial_arrow_hover_color' => '',
		'testimonial_arrow_background_color' => '',
		'testimonial_arrow_background_hover_color' => '',
		'bullets_symbol_color' => '#5f727f',
		'icons_symbol_color' => '#91a0ac',
		'icons_portfolio_gallery_hover_color' => '#ffffff',
		'pagination_basic_color' => '#99a9b5',
		'pagination_basic_background_color' => '#ffffff',
		'pagination_hover_color' => '#00bcd4',
		'pagination_active_color' => '#3c3950',
		'mini_pagination_color' => '#b6c6c9',
		'mini_pagination_active_color' => '#00bcd4',
		'blockquote_icon_testimonials' => '',
		'blockquote_icon_blockquotes' => '',
		'socials_colors_top_area' => '',
		'socials_colors_footer' => '',
		'socials_colors_posts' => '',
		'socials_colors_woocommerce' => '',
		'contact_form_light_input_color' => '',
		'contact_form_light_input_background_color' => '',
		'contact_form_light_input_border_color' => '',
		'contact_form_light_input_placeholder_color' => '',
		'contact_form_light_input_icon_color' => '',
		'contact_form_light_label_color' => '',
		'contact_form_light_button_style' => 'flat',
		'contact_form_light_button_position' => 'fullwidth',
		'contact_form_light_button_size' => 'small',
		'contact_form_light_button_text_weight' => 'normal',
		'contact_form_light_button_border' => '0',
		'contact_form_light_button_corner' => '3',
		'contact_form_light_button_text_color' => '',
		'contact_form_light_button_hover_text_color' => '',
		'contact_form_light_button_background_color' => '',
		'contact_form_light_button_hover_background_color' => '',
		'contact_form_light_button_border_color' => '',
		'contact_form_light_button_hover_border_color' => '',
		'contact_form_dark_input_color' => '',
		'contact_form_dark_input_background_color' => '',
		'contact_form_dark_input_border_color' => '',
		'contact_form_dark_input_placeholder_color' => '',
		'contact_form_dark_input_icon_color' => '',
		'contact_form_dark_label_color' => '',
		'contact_form_dark_button_style' => 'flat',
		'contact_form_dark_button_position' => 'fullwidth',
		'contact_form_dark_button_size' => 'small',
		'contact_form_dark_button_text_weight' => 'normal',
		'contact_form_dark_button_border' => '0',
		'contact_form_dark_button_corner' => '3',
		'contact_form_dark_button_text_color' => '',
		'contact_form_dark_button_hover_text_color' => '',
		'contact_form_dark_button_background_color' => '',
		'contact_form_dark_button_hover_background_color' => '',
		'contact_form_dark_button_border_color' => '',
		'contact_form_dark_button_hover_border_color' => '',
		'mailchimp_content_input_color' => '',
		'mailchimp_content_input_background_color' => '',
		'mailchimp_content_input_border_color' => '',
		'mailchimp_content_input_placeholder_color' => '',
		'mailchimp_content_text_color' => '',
		'mailchimp_content_label_color' => '',
		'mailchimp_content_button_text_color' => '',
		'mailchimp_content_button_hover_text_color' => '',
		'mailchimp_content_button_background_color' => '',
		'mailchimp_content_button_hover_background_color' => '',
		'mailchimp_sidebars_background_color' => '',
		'mailchimp_sidebars_input_color' => '',
		'mailchimp_sidebars_input_background_color' => '',
		'mailchimp_sidebars_input_border_color' => '',
		'mailchimp_sidebars_input_placeholder_color' => '',
		'mailchimp_sidebars_text_color' => '',
		'mailchimp_sidebars_label_color' => '',
		'mailchimp_sidebars_button_text_color' => '',
		'mailchimp_sidebars_button_hover_text_color' => '',
		'mailchimp_sidebars_button_background_color' => '',
		'mailchimp_sidebars_button_hover_background_color' => '',
		'mailchimp_footer_background_color' => '',
		'mailchimp_footer_input_color' => '',
		'mailchimp_footer_input_background_color' => '',
		'mailchimp_footer_input_border_color' => '',
		'mailchimp_footer_input_placeholder_color' => '',
		'mailchimp_footer_text_color' => '',
		'mailchimp_footer_label_color' => '',
		'mailchimp_footer_button_text_color' => '',
		'mailchimp_footer_button_hover_text_color' => '',
		'mailchimp_footer_button_background_color' => '',
		'mailchimp_footer_button_hover_background_color' => '',
		'form_elements_background_color' => '#f4f6f7',
		'form_elements_text_color' => '#3c3950',
		'form_elements_border_color' => '#dfe5e8',
		'breadcrumbs_default_color' => '',
		'breadcrumbs_active_color' => '',
		'breadcrumbs_hover_color' => '',
		'preloader_page_background' => '',
		'preloader_line_1' => '',
		'preloader_line_2' => '',
		'preloader_line_3' => '',
		'product_title_listing_color' => '#5f727f',
		'product_title_page_color' => '#3c3950',
		'product_title_widget_color' => '#5f727f',
		'product_title_cart_color' => '#00bcd4',
		'product_price_listing_color' => '#00bcd4',
		'product_price_page_color' => '#3c3950',
		'product_price_widget_color' => '#3c3950',
		'product_price_cart_color' => '#3c3950',
		'product_separator_listing_color' => '#000000',
		'minicart_amount_label_color' => '#00bcd4',
		'cart_table_header_color' => '',
		'cart_table_header_background_color' => '',
		'cart_form_labels_color' => '',
		'checkout_step_title_color' => '',
		'checkout_step_background_color' => '',
		'checkout_step_title_active_color' => '',
		'checkout_step_background_active_color' => '',
		'basic_outer_background_image' => '',
		'top_background_image' => '',
		'top_area_background_image' => '',
		'main_background_image' => '',
		'footer_background_image' => '',
		'footer_widget_area_background_image' => '',
		'slider_effect' => 'random',
		'slider_slices' => '15',
		'slider_boxCols' => '8',
		'slider_boxRows' => '4',
		'slider_animSpeed' => '5',
		'slider_pauseTime' => '20',
		'slider_directionNav' => '1',
		'slider_controlNav' => '1',
		'show_author' => '1',
		'excerpt_length' => '20',
		'footer_active' => '1',
		'footer_html' => array(
			'en' => '2020 &copy; Copyrights CodexThemes',
		),
		'custom_footer' => '',
		'contacts_address' => '908 New Hampshire Avenue #100, Washington, DC 20037, United States',
		'contacts_phone' => '+1 916-875-2235',
		'contacts_fax' => '+1 916-875-2235',
		'contacts_email' => 'info@domain.tld',
		'contacts_website' => 'www.codex-themes.com',
		'top_area_contacts_address' => '19th Ave New York, NY 95822, USA',
		'top_area_contacts_address_icon_color' => '',
		'top_area_contacts_address_icon_pack' => 'elegant',
		'top_area_contacts_address_icon' => '',
		'top_area_contacts_phone' => '',
		'top_area_contacts_phone_icon_color' => '',
		'top_area_contacts_phone_icon_pack' => 'elegant',
		'top_area_contacts_phone_icon' => '',
		'top_area_contacts_fax' => '',
		'top_area_contacts_fax_icon_color' => '',
		'top_area_contacts_fax_icon_pack' => 'elegant',
		'top_area_contacts_fax_icon' => '',
		'top_area_contacts_email' => '',
		'top_area_contacts_email_icon_color' => '',
		'top_area_contacts_email_icon_pack' => 'elegant',
		'top_area_contacts_email_icon' => '',
		'top_area_contacts_website' => '',
		'top_area_contacts_website_icon_color' => '',
		'top_area_contacts_website_icon_pack' => 'elegant',
		'top_area_contacts_website_icon' => '',
		'twitter_active' => '1',
		'facebook_active' => '1',
		'linkedin_active' => '1',
		'googleplus_active' => '1',
		'instagram_active' => '1',
		'pinterest_active' => '1',
		'youtube_active' => '1',
		'twitter_link' => '#',
		'facebook_link' => '#',
		'linkedin_link' => '#',
		'googleplus_link' => '#',
		'stumbleupon_link' => '#',
		'rss_link' => '#',
		'vimeo_link' => '#',
		'instagram_link' => '#',
		'pinterest_link' => '#',
		'youtube_link' => '#',
		'flickr_link' => '#',
		'show_social_icons' => '1',
	));
}*/

function thegem_first_install_settings() {
	return apply_filters('thegem_default_theme_options', array(
		'404_page' => '',
		'activate_news_posttype' => '',
		'activate_nivoslider' => '',
		'active_link_color' => '#00bcd4',
		'add_new_social' => '',
		'askfm_active' => '',
		'askfm_link' => '#',
		'basic_outer_background_color' => '#f0f3f2',
		'basic_outer_background_gradient_angle' => '90',
		'basic_outer_background_gradient_point1_color' => '#181828FF',
		'basic_outer_background_gradient_point1_position' => '0',
		'basic_outer_background_gradient_point2_color' => '#474B62FF',
		'basic_outer_background_gradient_point2_position' => '100',
		'basic_outer_background_gradient_position' => 'center center',
		'basic_outer_background_gradient_type' => 'linear',
		'basic_outer_background_image' => '',
		'basic_outer_background_image_color' => '',
		'basic_outer_background_image_overlay' => '',
		'basic_outer_background_image_repeat' => '0',
		'basic_outer_background_pattern' => '',
		'basic_outer_background_position_x' => 'center',
		'basic_outer_background_position_y' => 'center',
		'basic_outer_background_size' => 'auto',
		'basic_outer_background_type' => 'color',
		'blockquote_icon_blockquotes' => '#A3E7F0FF',
		'blockquote_icon_testimonials' => '#A3E7F0FF',
		'blog_hide_author' => '',
		'blog_hide_categories' => '',
		'blog_hide_comments' => '',
		'blog_hide_date' => '',
		'blog_hide_date_in_blog_cat' => '',
		'blog_hide_likes' => '',
		'blog_hide_navigation' => '',
		'blog_hide_realted' => '',
		'blog_hide_socials' => '',
		'blog_hide_tags' => '',
		'blogger_active' => '',
		'blogger_link' => '#',
		'body_color' => '#5f727f',
		'body_font_family' => 'Source Sans Pro',
		'body_font_sets' => '',
		'body_font_size' => '16',
		'body_font_style' => 'regular',
		'body_letter_spacing' => '',
		'body_line_height' => '25',
		'body_text_transform' => '',
		'box_border_color' => '#dfe5e8',
		'breadcrumbs_active_color' => '#E7FF89FF',
		'breadcrumbs_default_color' => '#FFFFFFFF',
		'breadcrumbs_hover_color' => '#E7FF89FF',
		'bullets_symbol_color' => '#5f727f',
		'button_background_basic_color' => '#b6c6c9',
		'button_background_hover_color' => '#3c3950',
		'button_font_family' => 'Montserrat',
		'button_font_sets' => 'latin',
		'button_font_size' => '',
		'button_font_style' => '700',
		'button_letter_spacing' => '',
		'button_line_height' => '',
		'button_outline_border_basic_color' => '#00bcd4',
		'button_outline_text_basic_color' => '#00bcd4',
		'button_outline_text_hover_color' => '#ffffff',
		'button_text_basic_color' => '#ffffff',
		'button_text_hover_color' => '#ffffff',
		'button_text_transform' => 'uppercase',
		'button_thin_font_family' => 'Montserrat UltraLight',
		'button_thin_font_sets' => '',
		'button_thin_font_size' => '',
		'button_thin_font_style' => 'regular',
		'button_thin_letter_spacing' => '',
		'button_thin_line_height' => '',
		'button_thin_text_transform' => 'uppercase',
		'cart_form_labels_color' => '#B6C6C9FF',
		'cart_label_count' => '0',
		'cart_table_header_background_color' => '#B6C6C9FF',
		'cart_table_header_color' => '#FFFFFFFF',
		'catalog_view' => '',
		'checkout_step_background_active_color' => '#FFD453FF',
		'checkout_step_background_color' => '#E9F0EFFF',
		'checkout_step_title_active_color' => '#3C3950FF',
		'checkout_step_title_color' => '#99A9B5FF',
		'checkout_type' => 'multi-step',
		'circular_overlay_hover_angle' => '90',
		'circular_overlay_hover_point1_color' => 'rgba(0, 188, 212,0.75)',
		'circular_overlay_hover_point1_position' => '0',
		'circular_overlay_hover_point2_color' => 'rgba(53, 64, 147,0.75)',
		'circular_overlay_hover_point2_position' => '100',
		'circular_overlay_hover_position' => '',
		'circular_overlay_hover_type' => 'linear',
		'contact_form_dark_button_background_color' => '#3C3950FF',
		'contact_form_dark_button_border' => '0',
		'contact_form_dark_button_border_color' => '',
		'contact_form_dark_button_corner' => '0',
		'contact_form_dark_button_hover_background_color' => '#B6C6C9FF',
		'contact_form_dark_button_hover_border_color' => '',
		'contact_form_dark_button_hover_text_color' => '#FFFFFFFF',
		'contact_form_dark_button_position' => 'fullwidth',
		'contact_form_dark_button_size' => 'medium',
		'contact_form_dark_button_style' => 'flat',
		'contact_form_dark_button_text_color' => '#FFFFFFFF',
		'contact_form_dark_button_text_weight' => 'normal',
		'contact_form_dark_custom_styles' => '1',
		'contact_form_dark_input_background_color' => '#181828FF',
		'contact_form_dark_input_border_color' => '#394050FF',
		'contact_form_dark_input_color' => '#5F727FFF',
		'contact_form_dark_input_icon_color' => '#46485CFF',
		'contact_form_dark_input_placeholder_color' => '',
		'contact_form_dark_label_color' => '#5F727FFF',
		'contact_form_light_button_background_color' => '#B6C6C9FF',
		'contact_form_light_button_border' => '0',
		'contact_form_light_button_border_color' => '',
		'contact_form_light_button_corner' => '0',
		'contact_form_light_button_hover_background_color' => '#3C3950FF',
		'contact_form_light_button_hover_border_color' => '',
		'contact_form_light_button_hover_text_color' => '#FFFFFFFF',
		'contact_form_light_button_position' => 'fullwidth',
		'contact_form_light_button_size' => 'medium',
		'contact_form_light_button_style' => 'flat',
		'contact_form_light_button_text_color' => '#FFFFFFFF',
		'contact_form_light_button_text_weight' => 'normal',
		'contact_form_light_custom_styles' => '1',
		'contact_form_light_input_background_color' => '#FFFFFFFF',
		'contact_form_light_input_border_color' => '#DFE5E8FF',
		'contact_form_light_input_color' => '#5F727FFF',
		'contact_form_light_input_icon_color' => '#B6C6C9FF',
		'contact_form_light_input_placeholder_color' => '',
		'contact_form_light_label_color' => '#5F727FFF',
		'contacts_address' => '908 New Hampshire Avenue #100, Washington, DC 20037, United States',
		'contacts_email' => 'info@domain.tld',
		'contacts_fax' => '+1 916-875-2235',
		'contacts_phone' => '+1 916-875-2235',
		'contacts_website' => 'www.codex-themes.com',
		'copyright_link_color' => '#00bcd4',
		'copyright_text_color' => '#99a9b5',
		'counter_custom_responsive_fonts' => '1',
		'counter_font_family' => 'Montserrat',
		'counter_font_sets' => '',
		'counter_font_size' => '50',
		'counter_font_size_mobile' => '36',
		'counter_font_size_tablet' => '36',
		'counter_font_style' => '700',
		'counter_letter_spacing' => '',
		'counter_line_height' => '69',
		'counter_line_height_mobile' => '53',
		'counter_line_height_tablet' => '53',
		'counter_text_transform' => '',
		'custom_css' => '',
		'custom_footer' => '',
		'custom_footer_enable' => '',
		'custom_js' => '',
		'custom_js_header' => '',
		'date_filter_subtitle_color' => '#99a9b5',
		'delicious_active' => '',
		'delicious_link' => '#',
		'deviantart_active' => '',
		'deviantart_link' => '',
		'disable_fixed_header' => '0',
		'disable_og_tags' => '1',
		'disable_scroll_top_button' => '0',
		'disable_smooth_scroll' => '0',
		'disable_uppercase_font' => '',
		'discord_active' => '',
		'discord_link' => '#',
		'divider_default_color' => '#dfe5e8',
		'dribbble_active' => '',
		'dribbble_link' => '#',
		'enable_mobile_lazy_loading' => '',
		'enable_page_preloader' => '',
		'excerpt_length' => '20',
		'extra' => NULL,
		'facebook_active' => '1',
		'facebook_link' => '#',
		'favicon' => get_template_directory_uri() . '/images/favicon.ico',
		'flickr_active' => '',
		'flickr_link' => '#',
		'footer' => '1',
		'footer_active' => '1',
		'footer_apply_all_existing' => '0',
		'footer_background_color' => '#181828',
		'footer_background_gradient_angle' => '90',
		'footer_background_gradient_point1_color' => '#474B62FF',
		'footer_background_gradient_point1_position' => '0',
		'footer_background_gradient_point2_color' => '#181828FF',
		'footer_background_gradient_point2_position' => '100',
		'footer_background_gradient_position' => '',
		'footer_background_gradient_type' => 'linear',
		'footer_background_image' => '',
		'footer_background_image_color' => '',
		'footer_background_image_overlay' => '',
		'footer_background_image_repeat' => '0',
		'footer_background_pattern' => '',
		'footer_background_position_x' => 'center',
		'footer_background_position_y' => 'center',
		'footer_background_size' => 'auto',
		'footer_background_type' => 'color',
		'footer_bottom_area_fullwidth' => '',
		'footer_html' => '2020 &copy; Copyrights CodexThemes',
		'footer_menu_color' => '#99A9B5FF',
		'footer_menu_hover_color' => '#00BCD4FF',
		'footer_menu_separator_color' => '#333146FF',
		'footer_parallax' => '',
		'footer_text_color' => '#99A9B5FF',
		'footer_top_border_color' => '#313646FF',
		'footer_widget_active_link_color' => '#00bcd4',
		'footer_widget_area_background_color' => '#212331',
		'footer_widget_area_background_gradient_angle' => '90',
		'footer_widget_area_background_gradient_point1_color' => '#474B62FF',
		'footer_widget_area_background_gradient_point1_position' => '0',
		'footer_widget_area_background_gradient_point2_color' => '#181828FF',
		'footer_widget_area_background_gradient_point2_position' => '100',
		'footer_widget_area_background_gradient_position' => '',
		'footer_widget_area_background_gradient_type' => 'linear',
		'footer_widget_area_background_image' => '',
		'footer_widget_area_background_image_color' => '',
		'footer_widget_area_background_image_overlay' => '',
		'footer_widget_area_background_image_repeat' => '0',
		'footer_widget_area_background_pattern' => '',
		'footer_widget_area_background_position_x' => 'center',
		'footer_widget_area_background_position_y' => 'top',
		'footer_widget_area_background_size' => 'cover',
		'footer_widget_area_background_type' => 'color',
		'footer_widget_area_fullwidth' => '',
		'footer_widget_area_hide' => '0',
		'footer_widget_hover_link_color' => '#00bcd4',
		'footer_widget_link_color' => '#99a9b5',
		'footer_widget_text_color' => '#99a9b5',
		'footer_widget_title_color' => '#feffff',
		'footer_widget_triangle_color' => '#F44336FF',
		'custom_footer_background_color' => '',
		'custom_footer_background_gradient_angle' => '90',
		'custom_footer_background_gradient_point1_color' => '#474B62FF',
		'custom_footer_background_gradient_point1_position' => '0',
		'custom_footer_background_gradient_point2_color' => '#181828FF',
		'custom_footer_background_gradient_point2_position' => '100',
		'custom_footer_background_gradient_position' => '',
		'custom_footer_background_gradient_type' => 'linear',
		'custom_footer_background_image' => '',
		'custom_footer_background_image_color' => '',
		'custom_footer_background_image_overlay' => '',
		'custom_footer_background_image_repeat' => '0',
		'custom_footer_background_pattern' => '',
		'custom_footer_background_position_x' => 'center',
		'custom_footer_background_position_y' => 'center',
		'custom_footer_background_size' => 'auto',
		'custom_footer_background_type' => 'color',
		'form_elements_background_color' => '#f4f6f7',
		'form_elements_border_color' => '#dfe5e8',
		'form_elements_text_color' => '#3c3950',
		'gallery_caption_background_color' => '#000000',
		'gallery_description_color' => '#ffffff',
		'gallery_description_font_family' => 'Source Sans Pro',
		'gallery_description_font_sets' => '',
		'gallery_description_font_size' => '17',
		'gallery_description_font_style' => '300',
		'gallery_description_letter_spacing' => '',
		'gallery_description_line_height' => '24',
		'gallery_description_text_transform' => '',
		'gallery_title_bold_font_family' => 'Montserrat',
		'gallery_title_bold_font_sets' => 'latin,latin-ext',
		'gallery_title_bold_font_size' => '24',
		'gallery_title_bold_font_style' => '700',
		'gallery_title_bold_letter_spacing' => '',
		'gallery_title_bold_line_height' => '31',
		'gallery_title_bold_text_transform' => '',
		'gallery_title_color' => '#ffffff',
		'gallery_title_font_family' => 'Montserrat UltraLight',
		'gallery_title_font_sets' => '',
		'gallery_title_font_size' => '24',
		'gallery_title_font_style' => 'regular',
		'gallery_title_letter_spacing' => '',
		'gallery_title_line_height' => '30',
		'gallery_title_text_transform' => '',
		'global_hide_breadcrumbs' => '',
		'global_settings_apply_blog' => '',
		'global_settings_apply_default' => '',
		'global_settings_apply_portfolio' => '',
		'global_settings_apply_post' => '',
		'global_settings_apply_product' => '',
		'global_settings_apply_product_categories' => '',
		'global_settings_apply_search' => '',
		'googledrive_active' => '',
		'googledrive_link' => '#',
		'googleplus_active' => '1',
		'googleplus_link' => '#',
		'gradient_hover_angle' => '90',
		'gradient_hover_point1_color' => 'rgba(255,43,88,0.8)',
		'gradient_hover_point1_position' => '0',
		'gradient_hover_point2_color' => 'rgba(255,216,0,0.8)',
		'gradient_hover_point2_position' => '100',
		'gradient_hover_position' => '',
		'gradient_hover_type' => 'linear',
		'h1_color' => '#3c3950',
		'h1_custom_responsive_fonts' => '1',
		'h1_font_family' => 'Montserrat',
		'h1_font_sets' => '',
		'h1_font_size' => '50',
		'h1_font_size_mobile' => '36',
		'h1_font_size_tablet' => '38',
		'h1_font_style' => '700',
		'h1_letter_spacing' => '',
		'h1_line_height' => '69',
		'h1_line_height_mobile' => '48',
		'h1_line_height_tablet' => '53',
		'h1_text_transform' => '',
		'h2_color' => '#3c3950',
		'h2_custom_responsive_fonts' => '1',
		'h2_font_family' => 'Montserrat',
		'h2_font_sets' => '',
		'h2_font_size' => '36',
		'h2_font_size_mobile' => '30',
		'h2_font_size_tablet' => '32',
		'h2_font_style' => '700',
		'h2_letter_spacing' => '',
		'h2_line_height' => '53',
		'h2_line_height_mobile' => '40',
		'h2_line_height_tablet' => '42',
		'h2_text_transform' => '',
		'h3_color' => '#3c3950',
		'h3_custom_responsive_fonts' => '1',
		'h3_font_family' => 'Montserrat',
		'h3_font_sets' => '',
		'h3_font_size' => '28',
		'h3_font_size_mobile' => '24',
		'h3_font_size_tablet' => '26',
		'h3_font_style' => '700',
		'h3_letter_spacing' => '',
		'h3_line_height' => '42',
		'h3_line_height_mobile' => '34',
		'h3_line_height_tablet' => '38',
		'h3_text_transform' => '',
		'h4_color' => '#3c3950',
		'h4_custom_responsive_fonts' => '1',
		'h4_font_family' => 'Montserrat',
		'h4_font_sets' => '',
		'h4_font_size' => '24',
		'h4_font_size_mobile' => '24',
		'h4_font_size_tablet' => '22',
		'h4_font_style' => '700',
		'h4_letter_spacing' => '',
		'h4_line_height' => '38',
		'h4_line_height_mobile' => '30',
		'h4_line_height_tablet' => '36',
		'h4_text_transform' => '',
		'h5_color' => '#3c3950',
		'h5_custom_responsive_fonts' => '1',
		'h5_font_family' => 'Montserrat',
		'h5_font_sets' => '',
		'h5_font_size' => '19',
		'h5_font_size_mobile' => '19',
		'h5_font_size_tablet' => '19',
		'h5_font_style' => '700',
		'h5_letter_spacing' => '',
		'h5_line_height' => '30',
		'h5_line_height_mobile' => '26',
		'h5_line_height_tablet' => '30',
		'h5_text_transform' => '',
		'h6_color' => '#3c3950',
		'h6_custom_responsive_fonts' => '1',
		'h6_font_family' => 'Montserrat',
		'h6_font_sets' => '',
		'h6_font_size' => '16',
		'h6_font_size_mobile' => '16',
		'h6_font_size_tablet' => '16',
		'h6_font_style' => '700',
		'h6_letter_spacing' => '',
		'h6_line_height' => '25',
		'h6_line_height_mobile' => '23',
		'h6_line_height_tablet' => '25',
		'h6_text_transform' => '',
		'hamburger_menu_cart_position' => '1',
		'hamburger_menu_icon_color' => '#3c3950',
		'hamburger_menu_icon_light_color' => '#ffffff',
		'hamburger_menu_icon_size' => '',
		'header' => true,
		'header_layout' => 'default',
		'header_show' => '1',
		'header_style' => '3',
		'header_width' => 'normal',
		'hide_card_icon' => '0',
		'hide_search_icon' => '0',
		'hover_effect_default_color' => '#00bcd4',
		'hover_effect_horizontal_sliding_color' => '#46485c',
		'hover_effect_vertical_sliding_color' => '#f44336',
		'hover_effect_zooming_blur_color' => '#ffffff',
		'hover_link_color' => '#384554',
		'icons_portfolio_gallery_hover_color' => '#ffffff',
		'icons_symbol_color' => '#91a0ac',
		'image' => NULL,
		'image_width' => 25,
		'instagram_active' => '1',
		'instagram_link' => '#',
		'light_title_font_family' => 'Montserrat UltraLight',
		'light_title_font_sets' => '',
		'light_title_font_size' => '',
		'light_title_font_style' => 'regular',
		'light_title_letter_spacing' => '',
		'light_title_line_height' => '',
		'light_title_text_transform' => '',
		'link_color' => '#00bcd4',
		'linkedin_active' => '1',
		'linkedin_link' => '#',
		'logo' => get_template_directory_uri() . '/images/default-logo.png',
		'logo_light' => get_template_directory_uri() . '/images/default-logo-light.png',
		'logo_light_selected_img_width' => 328,
		'logo_position' => 'left',
		'logo_selected_img_width' => 328,
		'logo_width' => '164',
		'mailchimp_content_button_background_color' => '#B6C6C9FF',
		'mailchimp_content_button_hover_background_color' => '#3C3950FF',
		'mailchimp_content_button_hover_text_color' => '#FFFFFFFF',
		'mailchimp_content_button_text_color' => '#FFFFFFFF',
		'mailchimp_content_custom_styles' => '1',
		'mailchimp_content_input_background_color' => '#F4F6F7FF',
		'mailchimp_content_input_border_color' => '#DFE5E8FF',
		'mailchimp_content_input_color' => '#3C3950FF',
		'mailchimp_content_input_placeholder_color' => '',
		'mailchimp_content_label_color' => '#5F727FFF',
		'mailchimp_content_text_color' => '',
		'mailchimp_footer_background_color' => '#394050FF',
		'mailchimp_footer_button_background_color' => '#394050FF',
		'mailchimp_footer_button_hover_background_color' => '#3C3950FF',
		'mailchimp_footer_button_hover_text_color' => '#FFFFFFFF',
		'mailchimp_footer_button_text_color' => '#99A9B5FF',
		'mailchimp_footer_custom_styles' => '1',
		'mailchimp_footer_input_background_color' => '#181828FF',
		'mailchimp_footer_input_border_color' => '#394050FF',
		'mailchimp_footer_input_color' => '#5F727FFF',
		'mailchimp_footer_input_placeholder_color' => '',
		'mailchimp_footer_label_color' => '#99A9B5FF',
		'mailchimp_footer_text_color' => '',
		'mailchimp_sidebars_background_color' => '#DFE5E8FF',
		'mailchimp_sidebars_button_background_color' => '#B6C6C9FF',
		'mailchimp_sidebars_button_hover_background_color' => '#3C3950FF',
		'mailchimp_sidebars_button_hover_text_color' => '#FFFFFFFF',
		'mailchimp_sidebars_button_text_color' => '#FFFFFFFF',
		'mailchimp_sidebars_custom_styles' => '1',
		'mailchimp_sidebars_input_background_color' => '#FFFFFFFF',
		'mailchimp_sidebars_input_border_color' => '#DFE5E8FF',
		'mailchimp_sidebars_input_color' => '#99A9B5FF',
		'mailchimp_sidebars_input_placeholder_color' => '',
		'mailchimp_sidebars_label_color' => '#5F727FFF',
		'mailchimp_sidebars_text_color' => '',
		'main_background_color' => '#ffffff',
		'main_background_gradient_angle' => '90',
		'main_background_gradient_point1_color' => '#E9ECDAFF',
		'main_background_gradient_point1_position' => '0',
		'main_background_gradient_point2_color' => '#D5F6FAFF',
		'main_background_gradient_point2_position' => '100',
		'main_background_gradient_position' => '',
		'main_background_gradient_type' => 'linear',
		'main_background_image' => '',
		'main_background_image_color' => '',
		'main_background_image_overlay' => '',
		'main_background_image_repeat' => '0',
		'main_background_pattern' => '',
		'main_background_position_x' => 'center',
		'main_background_position_y' => 'center',
		'main_background_size' => 'auto',
		'main_background_type' => 'color',
		'main_menu_font_family' => 'Montserrat',
		'main_menu_font_sets' => '',
		'main_menu_font_size' => '14',
		'main_menu_font_style' => '700',
		'main_menu_letter_spacing' => '',
		'main_menu_level1_active_background_color' => '#3c3950',
		'main_menu_level1_active_color' => '#3c3950',
		'main_menu_level1_background_color' => '',
		'main_menu_level1_color' => '#3c3950',
		'main_menu_level1_hover_background_color' => '',
		'main_menu_level1_hover_color' => '#00bcd4',
		'main_menu_level1_light_active_color' => '#ffffff',
		'main_menu_level1_light_color' => '#ffffff',
		'main_menu_level1_light_hover_color' => '#00bcd4',
		'main_menu_level2_active_background_color' => '#ffffff',
		'main_menu_level2_active_color' => '#3c3950',
		'main_menu_level2_background_color' => '#f4f6f7',
		'main_menu_level2_border_color' => '#dfe5e8',
		'main_menu_level2_color' => '#5f727f',
		'main_menu_level2_hover_background_color' => '#ffffff',
		'main_menu_level2_hover_color' => '#3c3950',
		'main_menu_level3_active_background_color' => '#ffffff',
		'main_menu_level3_active_color' => '#00bcd4',
		'main_menu_level3_background_color' => '#ffffff',
		'main_menu_level3_color' => '#5f727f',
		'main_menu_level3_hover_background_color' => '#494c64',
		'main_menu_level3_hover_color' => '#ffffff',
		'main_menu_line_height' => '25',
		'main_menu_mega_column_title_active_color' => '#00bcd4',
		'main_menu_mega_column_title_color' => '#3c3950',
		'main_menu_mega_column_title_hover_color' => '#00bcd4',
		'main_menu_text_transform' => 'uppercase',
		'meetup_active' => '',
		'meetup_link' => '#',
		'mega_menu_icons_color' => '#5F727FFF',
		'menu_appearance_tablet_landscape' => 'centered',
		'menu_appearance_tablet_portrait' => 'responsive',
		'menu_opacity' => 50,
		'menu_use_light_menu_logo' => '',
		'mini_pagination_active_color' => '#00bcd4',
		'mini_pagination_color' => '#b6c6c9',
		'minicart_amount_label_color' => '#00bcd4',
		'mobile_cart_position' => 'top',
		'mobile_menu_background_color' => '#ffffff',
		'mobile_menu_border_color' => '#dfe5e8',
		'mobile_menu_button_color' => '#3c3950',
		'mobile_menu_button_light_color' => '#ffffff',
		'mobile_menu_font_family' => 'Source Sans Pro',
		'mobile_menu_font_sets' => '',
		'mobile_menu_font_size' => '16',
		'mobile_menu_font_style' => 'regular',
		'mobile_menu_hide_color' => '',
		'mobile_menu_layout' => 'default',
		'mobile_menu_layout_style' => 'light',
		'mobile_menu_letter_spacing' => '',
		'mobile_menu_level1_active_background_color' => '#ffffff',
		'mobile_menu_level1_active_color' => '#3c3950',
		'mobile_menu_level1_background_color' => '#f4f6f7',
		'mobile_menu_level1_color' => '#5f727f',
		'mobile_menu_level2_active_background_color' => '#ffffff',
		'mobile_menu_level2_active_color' => '#3c3950',
		'mobile_menu_level2_background_color' => '#f4f6f7',
		'mobile_menu_level2_color' => '#5f727f',
		'mobile_menu_level3_active_background_color' => '#ffffff',
		'mobile_menu_level3_active_color' => '#3c3950',
		'mobile_menu_level3_background_color' => '#f4f6f7',
		'mobile_menu_level3_color' => '#5f727f',
		'mobile_menu_line_height' => '20',
		'mobile_menu_social_icon_color' => '',
		'mobile_menu_text_transform' => 'none',
		'myspace_active' => '',
		'myspace_link' => '#',
		'news_rewrite_slug' => '',
		'ok_active' => '',
		'ok_link' => '#',
		'options_sticky_header' => false,
		'overlay_menu_active_color' => '#00bcd4',
		'overlay_menu_background_color' => '#212331',
		'overlay_menu_color' => '#ffffff',
		'overlay_menu_font_family' => 'Montserrat',
		'overlay_menu_font_sets' => '',
		'overlay_menu_font_size' => '32',
		'overlay_menu_font_style' => '700',
		'overlay_menu_hover_color' => '#00bcd4',
		'overlay_menu_letter_spacing' => '',
		'overlay_menu_line_height' => '64',
		'overlay_menu_text_transform' => 'uppercase',
		'page_404_custom' => '',
		'page_default_sidebar' => true,
		'page_default_title_breadcrumbs' => true,
		'page_default_title_style' => '1',
		'page_layout_style' => 'fullwidth',
		'page_padding_bottom' => '10',
		'page_padding_left' => '10',
		'page_padding_locked' => false,
		'page_padding_right' => '10',
		'page_padding_top' => '10',
		'pagespeed_lazy_images_desktop_enable' => '',
		'pagespeed_lazy_images_mobile_enable' => '',
		'pagespeed_lazy_images_page_cache_enabled' => '',
		'pagespeed_lazy_images_visibility_offset' => '300',
		'pagination_active_color' => '#3c3950',
		'pagination_basic_background_color' => '#ffffff',
		'pagination_basic_color' => '#99a9b5',
		'pagination_hover_color' => '#00bcd4',
		'picassa_active' => '',
		'picassa_link' => '#',
		'pinterest_active' => '1',
		'pinterest_link' => '#',
		'portfolio_arrow_background_color' => '#B6C6C9FF',
		'portfolio_arrow_background_hover_color' => '#00BCD4FF',
		'portfolio_arrow_color' => '#FFFFFFFF',
		'portfolio_arrow_hover_color' => '#FFFFFFFF',
		'portfolio_date_color' => '#99a9b5',
		'portfolio_description_color' => '#5f727f',
		'portfolio_description_font_family' => 'Source Sans Pro',
		'portfolio_description_font_sets' => '',
		'portfolio_description_font_size' => '16',
		'portfolio_description_font_style' => 'regular',
		'portfolio_description_letter_spacing' => '',
		'portfolio_description_line_height' => '24',
		'portfolio_description_text_transform' => '',
		'portfolio_filter_button_active_background_color' => '#00BCD4FF',
		'portfolio_filter_button_active_color' => '#FFFFFFFF',
		'portfolio_filter_button_background_color' => '#DFE5E8FF',
		'portfolio_filter_button_color' => '#5F727FFF',
		'portfolio_filter_button_hover_background_color' => '#B6C6C9FF',
		'portfolio_filter_button_hover_color' => '#FFFFFFFF',
		'portfolio_hide_bottom_navigation' => '',
		'portfolio_hide_date' => '',
		'portfolio_hide_likes' => '',
		'portfolio_hide_sets' => '',
		'portfolio_hide_socials' => '',
		'portfolio_hide_top_navigation' => '',
		'portfolio_rewrite_slug' => '',
		'portfolio_sorting_background_color' => '#B6C6C9FF',
		'portfolio_sorting_controls_color' => '#3C3950FF',
		'portfolio_sorting_separator_color' => '#B6C6C9FF',
		'portfolio_sorting_switch_color' => '#FFFFFFFF',
		'portfolio_title_color' => '#5f727f',
		'portfolio_title_font_family' => 'Montserrat',
		'portfolio_title_font_sets' => '',
		'portfolio_title_font_size' => '16',
		'portfolio_title_font_style' => '700',
		'portfolio_title_letter_spacing' => '',
		'portfolio_title_line_height' => '24',
		'portfolio_title_text_transform' => '',
		'preloader' => '',
		'preloader_line_1' => '#B9B7FFFF',
		'preloader_line_2' => '#00BCD4FF',
		'preloader_line_3' => '#A3E7F0FF',
		'preloader_page_background' => '#2C2E3DFF',
		'preloader_style' => 'preloader-4',
		'preloader_type' => 'css',
		'product_categories_price_page_color' => '',
		'product_price_cart_color' => '#3c3950',
		'product_price_cart_font_family' => 'Source Sans Pro',
		'product_price_cart_font_sets' => 'latin,latin-ext',
		'product_price_cart_font_size' => '24',
		'product_price_cart_font_style' => '300',
		'product_price_cart_letter_spacing' => '',
		'product_price_cart_line_height' => '30',
		'product_price_cart_text_transform' => '',
		'product_price_listing_color' => '#00bcd4',
		'product_price_listing_font_family' => 'Source Sans Pro',
		'product_price_listing_font_sets' => 'latin,latin-ext',
		'product_price_listing_font_size' => '16',
		'product_price_listing_font_style' => 'regular',
		'product_price_listing_letter_spacing' => '',
		'product_price_listing_line_height' => '25',
		'product_price_listing_text_transform' => '',
		'product_price_page_color' => '#3c3950',
		'product_price_page_font_family' => 'Source Sans Pro',
		'product_price_page_font_sets' => 'latin,latin-ext',
		'product_price_page_font_size' => '36',
		'product_price_page_font_style' => '300',
		'product_price_page_letter_spacing' => '',
		'product_price_page_line_height' => '36',
		'product_price_page_text_transform' => '',
		'product_price_widget_color' => '#3c3950',
		'product_price_widget_font_family' => 'Source Sans Pro',
		'product_price_widget_font_sets' => 'latin,latin-ext',
		'product_price_widget_font_size' => '20',
		'product_price_widget_font_style' => '300',
		'product_price_widget_letter_spacing' => '',
		'product_price_widget_line_height' => '30',
		'product_price_widget_text_transform' => '',
		'product_quick_view' => '',
		'product_separator_listing_color' => '#000000',
		'product_title_cart_color' => '#00bcd4',
		'product_title_cart_font_family' => 'Source Sans Pro',
		'product_title_cart_font_sets' => 'latin,latin-ext',
		'product_title_cart_font_size' => '16',
		'product_title_cart_font_style' => 'regular',
		'product_title_cart_letter_spacing' => '',
		'product_title_cart_line_height' => '25',
		'product_title_cart_text_transform' => '',
		'product_title_listing_color' => '#5f727f',
		'product_title_listing_font_family' => 'Montserrat',
		'product_title_listing_font_sets' => 'latin,latin-ext',
		'product_title_listing_font_size' => '16',
		'product_title_listing_font_style' => '700',
		'product_title_listing_letter_spacing' => '',
		'product_title_listing_line_height' => '25',
		'product_title_listing_text_transform' => '',
		'product_title_page_color' => '#3c3950',
		'product_title_page_font_family' => 'Montserrat UltraLight',
		'product_title_page_font_sets' => 'latin,latin-ext',
		'product_title_page_font_size' => '28',
		'product_title_page_font_style' => 'regular',
		'product_title_page_letter_spacing' => '',
		'product_title_page_line_height' => '42',
		'product_title_page_text_transform' => '',
		'product_title_widget_color' => '#5f727f',
		'product_title_widget_font_family' => 'Source Sans Pro',
		'product_title_widget_font_sets' => 'latin,latin-ext',
		'product_title_widget_font_size' => '16',
		'product_title_widget_font_style' => 'regular',
		'product_title_widget_letter_spacing' => '',
		'product_title_widget_line_height' => '25',
		'product_title_widget_text_transform' => '',
		'products_pagination' => 'normal',
		'purchase_code' => '',
		'quickfinder_description_color' => '#5f727f',
		'quickfinder_description_font_family' => 'Source Sans Pro',
		'quickfinder_description_font_sets' => '',
		'quickfinder_description_font_size' => '16',
		'quickfinder_description_font_style' => 'regular',
		'quickfinder_description_letter_spacing' => '',
		'quickfinder_description_line_height' => '25',
		'quickfinder_description_text_transform' => '',
		'quickfinder_title_color' => '#4c5867',
		'quickfinder_title_font_family' => 'Montserrat',
		'quickfinder_title_font_sets' => 'latin',
		'quickfinder_title_font_size' => '24',
		'quickfinder_title_font_style' => '700',
		'quickfinder_title_letter_spacing' => '',
		'quickfinder_title_line_height' => '38',
		'quickfinder_title_text_transform' => '',
		'quickfinder_title_thin_font_family' => 'Montserrat UltraLight',
		'quickfinder_title_thin_font_sets' => 'latin,latin-ext',
		'quickfinder_title_thin_font_size' => '24',
		'quickfinder_title_thin_font_style' => 'regular',
		'quickfinder_title_thin_letter_spacing' => '',
		'quickfinder_title_thin_line_height' => '38',
		'quickfinder_title_thin_text_transform' => '',
		'qzone_active' => '',
		'qzone_link' => '#',
		'reddit_active' => '',
		'reddit_link' => '#',
		'rss_active' => '',
		'rss_link' => '#',
		'search_page_custom_settings' => '0',
		'settings' => NULL,
		'share_active' => '',
		'share_link' => '#',
		'show_author' => '1',
		'show_social_icons' => '1',
		'size_guide_image' => '',
		'skype_active' => '',
		'skype_link' => '#',
		'slack_active' => '',
		'slack_link' => '#',
		'slider_animSpeed' => '5',
		'slider_boxCols' => '8',
		'slider_boxRows' => '4',
		'slider_controlNav' => '1',
		'slider_directionNav' => '1',
		'slider_effect' => 'random',
		'slider_pauseTime' => '20',
		'slider_slices' => '15',
		'sliders_arrow_background_color' => '#DFE5E8FF',
		'sliders_arrow_background_hover_color' => '#00bcd4',
		'sliders_arrow_color' => '#3c3950',
		'sliders_arrow_hover_color' => '#ffffff',
		'slideshow_arrow_background' => '#394050',
		'slideshow_arrow_color' => '#ffffff',
		'slideshow_arrow_hover_background' => '#00bcd4',
		'slideshow_description_font_family' => 'Source Sans Pro',
		'slideshow_description_font_sets' => '',
		'slideshow_description_font_size' => '16',
		'slideshow_description_font_style' => 'regular',
		'slideshow_description_line_height' => '25',
		'slideshow_title_font_family' => 'Montserrat',
		'slideshow_title_font_sets' => '',
		'slideshow_title_font_size' => '50',
		'slideshow_title_font_style' => '700',
		'slideshow_title_line_height' => '69',
		'small_logo' => get_template_directory_uri() . '/images/default-logo-small.png',
		'small_logo_light' => get_template_directory_uri() . '/images/default-logo-light-small.png',
		'small_logo_light_selected_img_width' => 264,
		'small_logo_selected_img_width' => 264,
		'small_logo_width' => '132',
		'socials_colors_footer' => '',
		'socials_colors_posts' => '#99A9B5FF',
		'socials_colors_top_area' => '#5F727FFF',
		'socials_colors_woocommerce' => '#99A9B5FF',
		'soundcloud_active' => '',
		'soundcloud_link' => '#',
		'spotify_active' => '',
		'spotify_link' => '#',
		'sticky_header' => '1',
		'sticky_header_on_mobile' => '',
		'stumbleupon_active' => '',
		'stumbleupon_link' => '#',
		'styled_elements_background_color' => '#f4f6f7',
		'styled_elements_color_1' => '#00bcd4',
		'styled_elements_color_2' => '#99a9b5',
		'styled_elements_color_3' => '#f44336',
		'styled_elements_color_4' => '#393d50',
		'styled_subtitle_custom_responsive_fonts' => '1',
		'styled_subtitle_font_family' => 'Source Sans Pro',
		'styled_subtitle_font_sets' => '',
		'styled_subtitle_font_size' => '24',
		'styled_subtitle_font_size_mobile' => '22',
		'styled_subtitle_font_size_tablet' => '20',
		'styled_subtitle_font_style' => '300',
		'styled_subtitle_letter_spacing' => '',
		'styled_subtitle_line_height' => '37',
		'styled_subtitle_line_height_mobile' => '27',
		'styled_subtitle_line_height_tablet' => '34',
		'styled_subtitle_text_transform' => '',
		'submenu_font_family' => 'Source Sans Pro',
		'submenu_font_sets' => '',
		'submenu_font_size' => '16',
		'submenu_font_style' => 'regular',
		'submenu_letter_spacing' => '',
		'submenu_line_height' => '20',
		'submenu_text_transform' => 'none',
		'system_icons_font' => '#99a3b0',
		'system_icons_font_2' => '#b6c6c9',
		'tabs_title_font_family' => 'Montserrat',
		'tabs_title_font_sets' => 'latin,latin-ext',
		'tabs_title_font_size' => '16',
		'tabs_title_font_style' => '700',
		'tabs_title_letter_spacing' => '',
		'tabs_title_line_height' => '25',
		'tabs_title_text_transform' => '',
		'tabs_title_thin_font_family' => 'Montserrat UltraLight',
		'tabs_title_thin_font_sets' => 'latin,latin-ext',
		'tabs_title_thin_font_size' => '16',
		'tabs_title_thin_font_style' => 'regular',
		'tabs_title_thin_letter_spacing' => '',
		'tabs_title_thin_line_height' => '25',
		'tabs_title_thin_text_transform' => '',
		'telegram_active' => '',
		'telegram_link' => '#',
		'testimonial_arrow_background_color' => '#DFE5E8FF',
		'testimonial_arrow_background_hover_color' => '#00BCD4FF',
		'testimonial_arrow_color' => '#3C3950FF',
		'testimonial_arrow_hover_color' => '#FFFFFFFF',
		'testimonial_font_family' => 'Source Sans Pro',
		'testimonial_font_sets' => '',
		'testimonial_font_size' => '24',
		'testimonial_font_style' => '300',
		'testimonial_letter_spacing' => '',
		'testimonial_line_height' => '36',
		'testimonial_text_transform' => '',
		'theme_version' => wp_get_theme(wp_get_theme()->get('Template'))->get('Version'),
		'title_bar_background_color' => '#333144',
		'title_bar_text_color' => '#ffffff',
		'title_excerpt_custom_responsive_fonts' => '1',
		'title_excerpt_font_family' => 'Source Sans Pro',
		'title_excerpt_font_sets' => '',
		'title_excerpt_font_size' => '24',
		'title_excerpt_font_size_mobile' => '20',
		'title_excerpt_font_size_tablet' => '22',
		'title_excerpt_font_style' => '300',
		'title_excerpt_letter_spacing' => '',
		'title_excerpt_line_height' => '37',
		'title_excerpt_line_height_mobile' => '27',
		'title_excerpt_line_height_tablet' => '34',
		'title_excerpt_text_transform' => '',
		'top_area_alignment' => 'justified',
		'top_area_background_color' => '#f4f6f7',
		'top_area_background_gradient_angle' => '90',
		'top_area_background_gradient_point1_color' => '#D6EEEDFF',
		'top_area_background_gradient_point1_position' => '0',
		'top_area_background_gradient_point2_color' => '#F2D8E9FF',
		'top_area_background_gradient_point2_position' => 100,
		'top_area_background_gradient_position' => '',
		'top_area_background_gradient_type' => 'linear',
		'top_area_background_image' => '',
		'top_area_background_image_color' => '',
		'top_area_background_image_overlay' => '',
		'top_area_background_image_repeat' => '0',
		'top_area_background_pattern' => '',
		'top_area_background_position_x' => 'center',
		'top_area_background_position_y' => 'center',
		'top_area_background_size' => 'auto',
		'top_area_background_type' => 'color',
		'top_area_border_color' => '#00bcd4',
		'top_area_button' => true,
		'top_area_button_background_color' => '#494c64',
		'top_area_button_border_color' => '',
		'top_area_button_hover_background_color' => '#00bcd4',
		'top_area_button_hover_border_color' => '',
		'top_area_button_hover_text_color' => '#ffffff',
		'top_area_button_link' => '#',
		'top_area_button_text' => 'Join Now',
		'top_area_button_text_color' => '#FFFFFFFF',
		'top_area_contacts' => '1',
		'top_area_contacts_address' => '19th Ave New York, NY 95822, USA',
		'top_area_contacts_address_icon' => '',
		'top_area_contacts_address_icon_color' => '#5F727FFF',
		'top_area_contacts_address_icon_pack' => 'elegant',
		'top_area_contacts_email' => '',
		'top_area_contacts_email_icon' => '',
		'top_area_contacts_email_icon_color' => '#5F727FFF',
		'top_area_contacts_email_icon_pack' => 'elegant',
		'top_area_contacts_fax' => '',
		'top_area_contacts_fax_icon' => '',
		'top_area_contacts_fax_icon_color' => '#5F727FFF',
		'top_area_contacts_fax_icon_pack' => 'elegant',
		'top_area_contacts_phone' => '',
		'top_area_contacts_phone_icon' => '',
		'top_area_contacts_phone_icon_color' => '#5F727FFF',
		'top_area_contacts_phone_icon_pack' => 'elegant',
		'top_area_contacts_website' => '',
		'top_area_contacts_website_icon' => '',
		'top_area_contacts_website_icon_color' => '#5F727FFF',
		'top_area_contacts_website_icon_pack' => 'elegant',
		'top_area_disable_fixed' => '1',
		'top_area_disable_mobile' => '1',
		'top_area_disable_tablet' => '',
		'top_area_link_color' => '#5f727f',
		'top_area_link_hover_color' => '#00bcd4',
		'top_area_opacity' => 37,
		'top_area_separator_color' => '#dfe5e8',
		'top_area_show' => '1',
		'top_area_socials' => '1',
		'top_area_style' => '1',
		'top_area_text_color' => '#5f727f',
		'top_area_transparency' => false,
        'top_area_width' => 'normal',
		'top_background_color' => '#ffffff',
		'top_background_gradient_angle' => '90',
		'top_background_gradient_point1_color' => '#E9ECDAFF',
		'top_background_gradient_point1_position' => '0',
		'top_background_gradient_point2_color' => '#D5F6FAFF',
		'top_background_gradient_point2_position' => '90',
		'top_background_gradient_position' => '',
		'top_background_gradient_type' => 'linear',
		'top_background_image' => '',
		'top_background_image_color' => '',
		'top_background_image_overlay' => '',
		'top_background_image_repeat' => '0',
		'top_background_pattern' => '',
		'top_background_position_x' => 'center',
		'top_background_position_y' => 'center',
		'top_background_size' => 'auto',
		'top_background_type' => 'color',
		'navigation_background_color' => '#ffffff',
		'navigation_background_gradient_angle' => '90',
		'navigation_background_gradient_point1_color' => '#E9ECDAFF',
		'navigation_background_gradient_point1_position' => '0',
		'navigation_background_gradient_point2_color' => '#D5F6FAFF',
		'navigation_background_gradient_point2_position' => '90',
		'navigation_background_gradient_position' => '',
		'navigation_background_gradient_type' => 'linear',
		'navigation_background_image' => '',
		'navigation_background_image_color' => '',
		'navigation_background_image_overlay' => '',
		'navigation_background_image_repeat' => '0',
		'navigation_background_pattern' => '',
		'navigation_background_position_x' => 'center',
		'navigation_background_position_y' => 'center',
		'navigation_background_size' => 'auto',
		'navigation_background_type' => 'color',
		'tumblr_active' => '',
		'tumblr_link' => '#',
		'twitter_active' => '1',
		'twitter_link' => '#',
		'use_light_menu_logo' => false,
		'viber_active' => '',
		'viber_link' => '#',
		'vimeo_active' => '',
		'vimeo_link' => '#',
		'vk_active' => '',
		'vk_link' => '#',
		'weibo_active' => '',
		'weibo_link' => '#',
		'whatsapp_active' => '',
		'whatsapp_link' => '#',
		'widget_active_link_color' => '#384554',
		'widget_hover_link_color' => '#00bcd4',
		'widget_link_color' => '#5f727f',
		'widget_title_color' => '#3c3950',
		'widget_title_font_family' => 'Montserrat',
		'widget_title_font_sets' => '',
		'widget_title_font_size' => '19',
		'widget_title_font_style' => '700',
		'widget_title_letter_spacing' => '',
		'widget_title_line_height' => '30',
		'widget_title_text_transform' => '',
		'woocommerce_activate_images_sizes' => '1',
		'woocommerce_catalog_image_height' => '652',
		'woocommerce_catalog_image_width' => '522',
		'woocommerce_price_font_family' => 'Montserrat',
		'woocommerce_price_font_sets' => '',
		'woocommerce_price_font_size' => '26',
		'woocommerce_price_font_style' => 'regular',
		'woocommerce_price_letter_spacing' => '',
		'woocommerce_price_line_height' => '36',
		'woocommerce_price_text_transform' => '',
		'woocommerce_product_image_height' => '744',
		'woocommerce_product_image_width' => '564',
		'woocommerce_thumbnail_image_height' => '160',
		'woocommerce_thumbnail_image_width' => '160',
		'wordpress_active' => '',
		'wordpress_link' => '#',
		'xlarge_custom_responsive_fonts' => '1',
		'xlarge_font_size_mobile' => '36',
		'xlarge_font_size_tablet' => '50',
		'xlarge_line_height_mobile' => '53',
		'xlarge_line_height_tablet' => '69',
		'xlarge_title_font_family' => 'Montserrat',
		'xlarge_title_font_sets' => '',
		'xlarge_title_font_size' => '80',
		'xlarge_title_font_style' => '700',
		'xlarge_title_letter_spacing' => '',
		'xlarge_title_line_height' => '90',
		'xlarge_title_text_transform' => '',
		'youtube_active' => '1',
		'youtube_link' => '#',
		'tiktok_active' => '',
		'tiktok_link' => '#',
	));
}

/* Update new options */
function thegem_version_update_options() {
	$newOptions = apply_filters('thegem_version_update_options_array', array (
		'3.0.0' => array(
			'page_padding_top' => '10',
			'page_padding_bottom' => '10',
			'page_padding_left' => '10',
			'page_padding_right' => '10',
			'mobile_menu_font_family' => 'Source Sans Pro',
			'mobile_menu_font_style' => 'regular',
			'mobile_menu_font_sets' => '',
			'mobile_menu_font_size' => '16',
			'mobile_menu_line_height' => '20',
			'styled_elements_color_4' => '#393d50',
			'mobile_menu_background_color' => '',
			'mobile_menu_level1_color' => '#5f727f',
			'mobile_menu_level1_background_color' => '#f4f6f7',
			'mobile_menu_level1_active_color' => '#3c3950',
			'mobile_menu_level1_active_background_color' => '#ffffff',
			'mobile_menu_level2_color' => '#5f727f',
			'mobile_menu_level2_background_color' => '#f4f6f7',
			'mobile_menu_level2_active_color' => '#3c3950',
			'mobile_menu_level2_active_background_color' => '#ffffff',
			'mobile_menu_level3_color' => '#5f727f',
			'mobile_menu_level3_background_color' => '#f4f6f7',
			'mobile_menu_level3_active_color' => '#3c3950',
			'mobile_menu_level3_active_background_color' => '#ffffff',
			'mobile_menu_border_color' => '#dfe5e8',
			'mobile_menu_social_icon_color' => '',
			'mobile_menu_hide_color' => '',
			'product_title_listing_font_family' => 'Montserrat',
			'product_title_listing_font_style' => '700',
			'product_title_listing_font_sets' => 'latin,latin-ext',
			'product_title_listing_font_size' => '16',
			'product_title_listing_line_height' => '25',
			'product_title_page_font_family' => 'Montserrat UltraLight',
			'product_title_page_font_style' => 'regular',
			'product_title_page_font_sets' => 'latin,latin-ext',
			'product_title_page_font_size' => '28',
			'product_title_page_line_height' => '42',
			'product_title_widget_font_family' => 'Source Sans Pro',
			'product_title_widget_font_style' => 'regular',
			'product_title_widget_font_sets' => 'latin,latin-ext',
			'product_title_widget_font_size' => '16',
			'product_title_widget_line_height' => '25',
			'product_title_cart_font_family' => 'Source Sans Pro',
			'product_title_cart_font_style' => 'regular',
			'product_title_cart_font_sets' => 'latin,latin-ext',
			'product_title_cart_font_size' => '16',
			'product_title_cart_line_height' => '25',
			'product_price_listing_font_family' => 'Source Sans Pro',
			'product_price_listing_font_style' => 'regular',
			'product_price_listing_font_sets' => 'latin,latin-ext',
			'product_price_listing_font_size' => '16',
			'product_price_listing_line_height' => '25',
			'product_price_page_font_family' => 'Source Sans Pro',
			'product_price_page_font_style' => '300',
			'product_price_page_font_sets' => 'latin,latin-ext',
			'product_price_page_font_size' => '36',
			'product_price_page_line_height' => '36',
			'product_price_widget_font_family' => 'Source Sans Pro',
			'product_price_widget_font_style' => '300',
			'product_price_widget_font_sets' => 'latin,latin-ext',
			'product_price_widget_font_size' => '20',
			'product_price_widget_line_height' => '30',
			'product_price_cart_font_family' => 'Source Sans Pro',
			'product_price_cart_font_style' => '300',
			'product_price_cart_font_sets' => 'latin,latin-ext',
			'product_price_cart_font_size' => '24',
			'product_price_cart_line_height' => '30',
			'product_title_listing_color' => '#5f727f',
			'product_title_page_color' => '#3c3950',
			'product_title_widget_color' => '#5f727f',
			'product_title_cart_color' => '#00bcd4',
			'product_price_listing_color' => '#00bcd4',
			'product_price_page_color' => '#3c3950',
			'product_price_widget_color' => '#3c3950',
			'product_price_cart_color' => '#3c3950',
			'product_separator_listing_color' => '#000000',
		),
		'3.1.0' => array(
			'woocommerce_activate_images_sizes' => '1',
			'woocommerce_catalog_image_width' => '522',
			'woocommerce_catalog_image_height' => '652',
			'woocommerce_product_image_width' => '564',
			'woocommerce_product_image_height' => '744',
			'woocommerce_thumbnail_image_width' => '160',
			'woocommerce_thumbnail_image_height' => '160',
		),
		'3.8.4' => array(
			'title_excerpt_font_family' => 'Source Sans Pro',
			'title_excerpt_font_style' => '300',
			'title_excerpt_font_sets' => '',
			'title_excerpt_font_size' => '24',
			'title_excerpt_line_height' => '37',
			'title_excerpt_font_size_tablet' => '24',
			'title_excerpt_line_height_tablet' => '37',
			'title_excerpt_font_size_mobile' => '24',
			'title_excerpt_line_height_mobile' => '37',
		),
		'4.6.0' => array(
			'basic_outer_background_type' => 'color',
			'body_letter_spacing' => '',
			'body_text_transform' => 'none',
			'counter_letter_spacing' => '',
			'counter_text_transform' => 'uppercase',
			'footer' => 1,
			'footer_background_type' => 'color',
			'footer_widget_area_background_type' => 'color',
			'footer_widget_area_background_position_x' => 'center',
			'footer_widget_area_background_position_y' => 'top',
			'footer_widget_area_background_size' => 'cover',
			'main_background_type' => 'color',
			'main_background_position_x' => 'left',
			'main_background_position_y' => 'top',
			'main_background_size' => 'auto',
			'main_background_image_repeat' => '1',
			'gallery_description_letter_spacing' => '',
			'gallery_description_text_transform' => 'uppercase',
			'gallery_title_letter_spacing' => '',
			'gallery_title_text_transform' => 'uppercase',
			'h1_letter_spacing' => '',
			'h1_text_transform' => 'uppercase',
			'h2_letter_spacing' => '',
			'h2_text_transform' => 'uppercase',
			'h3_letter_spacing' => '',
			'h3_text_transform' => 'uppercase',
			'h4_letter_spacing' => '',
			'h4_text_transform' => 'uppercase',
			'h5_letter_spacing' => '',
			'h5_text_transform' => 'uppercase',
			'h6_letter_spacing' => '',
			'h6_text_transform' => 'uppercase',
			'xlarge_title_letter_spacing' => '',
			'xlarge_title_text_transform' => 'uppercase',
			'product_title_page_letter_spacing' => '',
			'product_title_page_text_transform' => 'uppercase',
			'main_background_type' => 'color',
			'main_menu_letter_spacing' => '',
			'main_menu_text_transform' => 'uppercase',
			'mobile_menu_letter_spacing' => '',
			'mobile_menu_text_transform' => 'none',
			'overlay_menu_letter_spacing' => '',
			'overlay_menu_text_transform' => 'uppercase',
			'quickfinder_description_letter_spacing' => '',
			'quickfinder_description_text_transform' => 'none',
			'quickfinder_title_letter_spacing' => '',
			'quickfinder_title_text_transform' => 'uppercase',
			'quickfinder_title_thin_letter_spacing' => '',
			'quickfinder_title_thin_text_transform' => 'uppercase',
			'styled_subtitle_letter_spacing' => '',
			'styled_subtitle_text_transform' => 'none',
			'submenu_letter_spacing' => '',
			'submenu_text_transform' => 'none',
			'tabs_title_letter_spacing' => '',
			'tabs_title_text_transform' => 'uppercase',
			'tabs_title_thin_letter_spacing' => '',
			'tabs_title_thin_text_transform' => 'uppercase',
			'testimonial_letter_spacing' => '',
			'testimonial_text_transform' => 'none',
			'title_excerpt_letter_spacing' => '',
			'title_excerpt_text_transform' => 'none',
			'top_area_background_type' => 'color',
			'top_area_button' => true,
			'top_background_type' => 'color',
			'widget_title_letter_spacing' => '',
			'widget_title_text_transform' => 'uppercase',
			'global_settings_apply_blog' => '',
			'global_settings_apply_default' => '',
			'global_settings_apply_portfolio' => '',
			'global_settings_apply_post' => '',
			'global_settings_apply_product' => '',
			'global_settings_apply_product_categories' => '',
			'global_settings_apply_search' => '',
			'preloader' => '',
			'gradient_hover_angle' => '90',
			'gradient_hover_point1_color' => 'rgba(255,43,88,0.8)',
			'gradient_hover_point1_position' => '0',
			'gradient_hover_point2_color' => 'rgba(255,216,0,0.8)',
			'gradient_hover_point2_position' => '100',
			'gradient_hover_position' => '',
			'gradient_hover_type' => 'linear',
			'circular_overlay_hover_angle' => '90',
			'circular_overlay_hover_point1_color' => 'rgba(0, 188, 212,0.75)',
			'circular_overlay_hover_point1_position' => '0',
			'circular_overlay_hover_point2_color' => 'rgba(53, 64, 147,0.75)',
			'circular_overlay_hover_point2_position' => '100',
			'circular_overlay_hover_position' => '',
			'circular_overlay_hover_type' => 'linear',
			'show_menu_socials' => '1',
			'show_menu_socials_mobile' => '1',
		)
	));
	$theme_options = get_option('thegem_theme_options');
	$thegem_theme = wp_get_theme(wp_get_theme()->get('Template'));
	foreach($newOptions as $version => $values) {
		if(version_compare($version, thegem_get_option('theme_version')) > 0) {
			foreach($values as $optionName => $value) {
				$theme_options[$optionName] = $value;
			}
		}
	}
	$theme_options['theme_version'] = $thegem_theme->get('Version');
	update_option('thegem_theme_options', $theme_options);
}

function thegem_migrate_new_options() {
	$old_options = get_option('thegem_theme_options');
	ksort($old_options);
	$newOptions = array();
	update_option('thegem_theme_options_old', $old_options);
	if(!empty($old_options['disable_uppercase_font'])) {
		$old_options['h1_text_transform'] = 'none';
		$old_options['h2_text_transform'] = 'none';
		$old_options['h3_text_transform'] = 'none';
		$old_options['h4_text_transform'] = 'none';
		$old_options['h5_text_transform'] = 'none';
		$old_options['h6_text_transform'] = 'none';
		$old_options['widget_title_text_transform'] = 'none';
		$old_options['product_title_page_text_transform'] = 'none';
		$old_options['main_menu_text_transform'] = 'none';
		$old_options['quickfinder_title_text_transform'] = 'none';
		$old_options['quickfinder_title_thin_text_transform'] = 'none';
		$old_options['overlay_menu_text_transform'] = 'none';
	} elseif($old_options['mobile_menu_layout'] == 'overlay') {
		$old_options['mobile_menu_text_transform'] = 'uppercase';
	}
	$old_options['button_text_transform'] = 'uppercase';
	$old_options['button_thin_text_transform'] = 'uppercase';
	$global_settings = thegem_theme_options_get_page_settings('global');
	$global_settings['title_background_color'] = $old_options['title_bar_background_color'];
	$global_settings['title_background_image_color'] = $old_options['title_bar_background_color'];
	$global_settings['title_text_color'] = $old_options['title_bar_text_color'];
	$global_settings['title_excerpt_text_color'] = $old_options['title_bar_text_color'];
	$global_settings['title_breadcrumbs'] = !empty($old_options['global_hide_breadcrumbs']);
	thegem_theme_options_set_page_settings('global', $global_settings);
	$default_settings = thegem_theme_options_get_page_settings('default');
	$post_settings = $default_settings;
	$portfolio_settings = $default_settings;
	thegem_theme_options_set_page_settings('post', $post_settings);
	thegem_theme_options_set_page_settings('portfolio', $portfolio_settings);
	foreach($old_options as $option => $value) {
		switch ($option) {
			case 'basic_outer_background_color':
				$newOptions['basic_outer_background_color'] = $old_options[$option];
				$newOptions['basic_outer_background_image_color'] = $old_options[$option];
				$newOptions['basic_outer_background_type'] = 'color';
				$old_options['basic_outer_background_type'] = 'color';
				break;
			case 'basic_outer_background_image':
				if(!empty($old_options[$option])) {
					$newOptions['basic_outer_background_image'] = $old_options[$option];
					$newOptions['basic_outer_background_type'] = 'image';
					$old_options['basic_outer_background_type'] = 'image';
				}
				break;
			case 'custom_footer':
				if(!empty($old_options[$option])) {
					$newOptions['custom_footer_enable'] = '1';
					$newOptions['custom_footer'] = $old_options[$option];
				}
				break;
			case 'footer_background_color':
				$newOptions['footer_background_color'] = $old_options[$option];
				$newOptions['footer_background_image_color'] = $old_options[$option];
				$newOptions['footer_background_type'] = 'color';
				$old_options['footer_background_type'] = 'color';
				break;
			case 'footer_background_image':
				if(!empty($old_options[$option])) {
					$newOptions['footer_background_image'] = $old_options[$option];
					$newOptions['footer_background_type'] = 'image';
					$old_options['footer_background_type'] = 'image';
				}
				break;
			case 'footer_widget_area_background_color':
				$newOptions['footer_widget_area_background_color'] = $old_options[$option];
				$newOptions['footer_widget_area_background_image_color'] = $old_options[$option];
				$newOptions['footer_widget_area_background_type'] = 'color';
				$old_options['footer_widget_area_background_type'] = 'color';
				break;
			case 'footer_widget_area_background_image':
				if(!empty($old_options[$option])) {
					$newOptions['footer_widget_area_background_image'] = $old_options[$option];
					$newOptions['footer_widget_area_background_type'] = 'image';
					$old_options['footer_widget_area_background_type'] = 'image';
				}
				break;
			case 'main_background_color':
				$newOptions['main_background_color'] = $old_options[$option];
				$newOptions['main_background_image_color'] = $old_options[$option];
				$newOptions['main_background_type'] = 'color';
				$old_options['main_background_type'] = 'color';
				break;
			case 'main_background_image':
				if(!empty($old_options[$option])) {
					$newOptions['main_background_image'] = $old_options[$option];
					$newOptions['main_background_type'] = 'image';
					$old_options['main_background_type'] = 'image';
				}
				break;
			case 'top_area_background_color':
				$newOptions['top_area_background_color'] = $old_options[$option];
				$newOptions['top_area_background_image_color'] = $old_options[$option];
				$newOptions['top_area_background_type'] = 'color';
				$old_options['top_area_background_type'] = 'color';
				break;
			case 'top_area_background_image':
				if(!empty($old_options[$option])) {
					$newOptions['top_area_background_image'] = $old_options[$option];
					$newOptions['top_area_background_type'] = 'image';
					$old_options['top_area_background_type'] = 'image';
				}
				break;
			case 'top_area_style':
				$newOptions['top_area_style'] = $old_options[$option];
				if(empty($old_options[$option])) {
					$newOptions['top_area_show'] = '';
					$newOptions['top_area_style'] = '1';
					$newOptions['top_area_disable_mobile'] = '1';
					$newOptions['top_area_disable_tablet'] = '1';
				} else {
					$newOptions['top_area_show'] = '1';
				}
				break;
			case 'top_area_button_text':
				$newOptions['top_area_button_text'] = $old_options[$option];
				if(!empty($old_options[$option])) {
					$newOptions['top_area_button'] = true;
				}
				break;
			case 'top_background_color':
				$newOptions['top_background_color'] = $old_options[$option];
				$newOptions['top_background_image_color'] = $old_options[$option];
				$newOptions['top_background_type'] = 'color';
				$old_options['top_background_type'] = 'color';
				$newOptions['navigation_background_color'] = $old_options[$option];
				$newOptions['navigation_background_image_color'] = $old_options[$option];
				$newOptions['navigation_background_type'] = 'color';
				$old_options['navigation_background_type'] = 'color';
				break;
			case 'top_background_image':
				if(!empty($old_options[$option])) {
					$newOptions['top_background_image'] = $old_options[$option];
					$newOptions['top_background_type'] = 'image';
					$old_options['top_background_type'] = 'image';
				}
				break;
			case 'enable_page_preloader':
					$newOptions['preloader'] = $old_options[$option];
				break;
			case 'header_layout':
					$newOptions['header_layout'] = $old_options[$option];
					$newOptions['header_width'] = 'normal';
					if($newOptions['header_layout'] == 'fullwidth') {
						$newOptions['header_layout'] = 'default';
						$newOptions['header_width'] = 'full';
					}
					if($newOptions['header_layout'] == 'fullwidth_hamburger' || $newOptions['header_layout'] == 'overlay' || $newOptions['header_layout'] == 'perspective') {
						$newOptions['header_width'] = 'full';
					}
				break;
			case 'page_padding_left':
			case 'page_padding_top':
			case 'page_padding_right':
			case 'page_padding_bottom':
				$newOptions[$option] = $old_options[$option];
				if(intval($old_options[$option]) > 0) {
					$newOptions['page_layout_style'] = 'body-frame';
				}
			default:
				$newOptions[$option] = $old_options[$option];
		}
	}
	if(empty($old_options['disable_smooth_scroll'])) {
		$newOptions['disable_smooth_scroll'] = 0;
	}
	if(empty($old_options['footer_widget_area_hide'])) {
		$newOptions['footer_widget_area_hide'] = 0;
	}

	if(function_exists('wc_get_page_id') && $shop_page = get_page(wc_get_page_id('shop'))) {
		$page_data = get_post_meta($shop_page->ID, 'thegem_page_data', true);
		if(is_array($page_data) && !isset($page_data['title_show'])) {
			update_option('thegem_options_page_settings_product_categories', $page_data);
			$newOptions['global_settings_apply_product_categories'] = '1';
		}
	}

	$newOptions['global_settings_apply_blog'] = '1';
	$newOptions['global_settings_apply_search'] = '1';
	update_option('thegem_theme_options', $newOptions);
	thegem_get_option(false, false, false, true);

	foreach(array('blog', 'default', 'portfolio', 'post', 'product', 'product_categories', 'search') as $type) {
		$old_options = get_option('thegem_options_page_settings_'.$type);
		update_option('thegem_options_page_settings_'.$type.'_old', $old_options);
		$new_options = array();
		if(!is_array($old_options)) continue;
		foreach($old_options as $option => $value) {
			switch ($option) {
				case 'title_style':
					if($old_options[$option] == 0) {
						$new_options['title_style'] = 1;
						$new_options['title_show'] = '';
					} else {
						$new_options['title_style'] = $old_options[$option];
						$new_options['title_show'] = '1';
					}
					break;
				case 'title_alignment':
					$new_options['title_alignment'] = $old_options[$option];
					$new_options['title_breadcrumbs_alignment'] = $old_options[$option];
					break;
				case 'title_background_color':
					if(empty($old_options['title_background_image'])) {
						$new_options['title_background_type'] = 'color';
					}
					$new_options['title_background_color'] = $old_options[$option];
					$new_options['title_background_image_color'] = $old_options[$option];
					break;
				case 'title_background_image':
					if(!empty($old_options[$option])) {
						$new_options['title_background_image'] = $old_options[$option];
						$new_options['title_background_type'] = 'image';
					}
					break;
				case 'title_video_background':
					if(!empty($old_options[$option])) {
						$new_options['title_background_type'] = 'video';
						$new_options['title_background_video'] = $old_options[$option];
					}
					break;
				case 'title_video_type':
					if(!empty($old_options[$option])) {
						$new_options['title_background_video_type'] = $old_options[$option];
					}
					break;
				case 'title_video_aspect_ratio':
					if(!empty($old_options[$option])) {
						$new_options['title_background_video_aspect_ratio'] = $old_options[$option];
					}
					break;
				case 'title_video_poster':
					if(!empty($old_options[$option])) {
						$new_options['title_background_video_poster'] = $old_options[$option];
					}
					break;
				case 'title_video_overlay_color':
					if(!empty($old_options[$option])) {
						$new_options['title_background_video_overlay'] = thegem_migrate_update_color($old_options[$option]).str_pad(dechex(ceil($old_options['title_video_overlay_opacity']*255)), 2, '0', STR_PAD_LEFT);
					}
					break;
				case 'title_padding_top':
						$new_options['title_padding_top'] = $old_options['title_padding_top'];
						$new_options['title_padding_top_mobile'] = $old_options['title_padding_top'];
						$new_options['title_padding_top_tablet'] = $old_options['title_padding_top'];
					break;
				case 'title_padding_bottom':
						$new_options['title_padding_bottom'] = $old_options['title_padding_bottom'];
						$new_options['title_padding_bottom_mobile'] = $old_options['title_padding_bottom'];
						$new_options['title_padding_bottom_tablet'] = $old_options['title_padding_bottom'];
					break;
				case 'title_breadcrumbs':
					if(empty($old_options[$option])) {
						$new_options['title_breadcrumbs'] = thegem_get_option('global_hide_breadcrumbs');
					} else {
						$new_options['title_breadcrumbs'] = $old_options[$option];
					}
					break;
				case 'header_hide_top_area':
					if(!empty($old_options[$option])) {
						$new_options['header_hide_top_area'] = '1';
					} else {
						$new_options['header_hide_top_area'] = !thegem_get_option('top_area_show');
					}
					break;
				case 'footer_hide_default':
					if(!empty($old_options[$option])) {
						$new_options['footer_hide_default'] = '1';
					} else {
						$new_options['footer_hide_default'] = !thegem_get_option('footer_active');
					}
					break;
				case 'footer_hide_widget_area':
					if(!empty($old_options[$option])) {
						$new_options['footer_hide_widget_area'] = '1';
					} else {
						$new_options['footer_hide_widget_area'] = thegem_get_option('footer_widget_area_hide');
					}
					break;
				case 'effects_hide_header':
					if(!empty($old_options[$option])) {
						$new_options['effects_hide_header'] = '1';
					} else {
						$new_options['effects_hide_header'] = '0';
					}
					break;
				case 'effects_hide_footer':
					if(!empty($old_options[$option])) {
						$new_options['effects_hide_footer'] = '1';
					} else {
						$new_options['effects_hide_footer'] = !thegem_get_option('footer');
					}
					break;
				case 'sidebar_position':
					if(!empty($old_options[$option])) {
						$new_options['sidebar_show'] = '1';
					} else {
						$new_options['sidebar_show'] = '0';
					}
					$new_options['sidebar_position'] = $old_options[$option];
					break;
				case 'slideshow_type':
					if(!empty($old_options[$option])) {
						$new_options['title_style'] = 3;
						$new_options['title_show'] = '1';
					}
					$new_options['slideshow_type'] = $old_options[$option];
					break;
				case 'footer_custom':
					if(!empty($old_options[$option])) {
						$new_options['footer_custom_show'] = '1';
						$new_options['footer_custom'] = $old_options[$option];
					} else {
						$new_options['footer_custom_show'] = thegem_get_option('custom_footer_enable');
						$new_options['footer_custom'] = thegem_get_option('custom_footer');
					}
					break;
				case 'title_background_parallax':
					if(!empty($old_options[$option])) {
						$new_options['title_background_effect'] = 'parallax';
					}
					break;
				case 'effects_no_top_margin':
					if(!empty($old_options[$option])) {
						$new_options['content_padding_top'] = '0';
					}
					break;
				case 'effects_no_bottom_margin':
					if(!empty($old_options[$option])) {
						$new_options['content_padding_bottom'] = '0';
					}
					break;
				case 'title_top_margin':
					if(empty($old_options[$option])) {
						$new_options['title_top_margin'] = '';
					} else {
						$new_options['title_top_margin'] = $old_options[$option];
					}
					break;
				default:
					$new_options[$option] = $old_options[$option];
			}
		}
		$global_settings = thegem_theme_options_get_page_settings('global');
		if($new_options['title_background_type'] == 'color' && empty($new_options['title_background_color']) && !empty($global_settings['title_background_color']) && $new_options['title_style'] != 2) {
			$new_options['title_background_color'] = $global_settings['title_background_color'];
		}
		if(empty($new_options['title_text_color']) && !empty($global_settings['title_text_color']) && $new_options['title_style'] != 2) {
			$new_options['title_text_color'] = $global_settings['title_text_color'];
		}
		if(empty($new_options['title_excerpt_text_color']) && !empty($global_settings['title_excerpt_text_color']) && $new_options['title_style'] != 2) {
			$new_options['title_excerpt_text_color'] = $global_settings['title_excerpt_text_color'];
		}
		if(!empty($new_options['title_xlarge']) && $new_options['title_style'] == 2) {
			$new_options['title_xlarge_custom_migrate'] = $new_options['title_xlarge'];
		}
		if(empty($new_options['effects_hide_footer'])) {
			$new_options['effects_hide_footer'] = '0';
		} else {
			$new_options['effects_hide_footer'] = '1';
		}
		thegem_theme_options_set_page_settings($type, $new_options);
	}
}

/* Create admin theme page */
/*function thegem_theme_add_page() {
	$page = add_submenu_page('thegem-theme-options',esc_html__('TheGem Theme Options','thegem'), esc_html__('Theme Options','thegem'), 'edit_theme_options', 'thegem-theme-options', 'thegem_theme_options_page');
}
if ($thegem_use_old_theme_options) {
	add_action( 'admin_menu', 'thegem_theme_add_page');
}*/

/*function thegem_activation_google_fonts() {
	$fonts_url = '';
	$fonts = array();
	$subsets = 'latin,latin-ext';
	if ( 'off' !== _x( 'on', 'Montserrat font: on or off', 'thegem' ) ) {
		$fonts[] = 'Montserrat:300,400,700';
	}
	if ( 'off' !== _x( 'on', 'Source Sans Pro font: on or off', 'thegem' ) ) {
		$fonts[] = 'Source Sans Pro:300,400';
	}
	if ( $fonts ) {
		$fonts_url = add_query_arg( array(
			'family' => urlencode( implode( '|', $fonts ) ),
			'subset' => urlencode( $subsets ),
		), '//fonts.googleapis.com/css' );
	}

	return $fonts_url;
}*/

/*function thegem_theme_options_admin_enqueue_scripts($hook) {
	wp_register_style('thegem-activation-google-fonts', thegem_activation_google_fonts());
	if($hook != 'toplevel_page_thegem-theme-options') return;
	wp_enqueue_media();
	wp_enqueue_style('thegem-activation-google-fonts');
	wp_enqueue_script('thegem-form-elements', get_template_directory_uri() . '/js/thegem-form-elements.js', array('jquery'), false, true);
	wp_enqueue_script('thegem-image-selector', get_template_directory_uri() . '/js/thegem-image-selector.js', array('jquery'));
	wp_enqueue_script('thegem-file-selector', get_template_directory_uri() . '/js/thegem-file-selector.js', array('jquery'));
	wp_enqueue_script('thegem-font-options', get_template_directory_uri() . '/js/thegem-font-options.js', array('jquery'));
	wp_enqueue_script('thegem-theme-options', get_template_directory_uri() . '/js/thegem-theme_options.js', array('jquery-ui-position', 'jquery-ui-tabs', 'jquery-ui-slider', 'jquery-ui-accordion', 'jquery-ui-draggable', 'jquery-ui-droppable', 'jquery-ui-sortable'));
	wp_localize_script('thegem-theme-options', 'theme_options_object',array(
		'ajax_url' => esc_url(admin_url( 'admin-ajax.php' )),
		'security' => wp_create_nonce('ajax_security'),
		'text1' => esc_html__('Get all from font.', 'thegem'),
		'thegem_color_skin_defaults' => json_encode(thegem_color_skin_defaults()),
		'text2' => esc_html__('et colors, backgrounds and fonts options to default?', 'thegem'),
		'text3' => esc_html__('Update backup data?', 'thegem'),
		'text4' => esc_html__('Restore settings from backup data?', 'thegem'),
		'text5' => esc_html__('Import settings?', 'thegem'),
	));
}
add_action('admin_enqueue_scripts', 'thegem_theme_options_admin_enqueue_scripts');*/

/* Build admin theme page form */
/*function thegem_theme_options_page(){
	if(isset($_REQUEST['action']) && isset($_REQUEST['theme_options'])) {
		thegem_theme_update_options();
	}
	if(isset($_REQUEST['action']) && in_array($_REQUEST['action'], array('save', 'reset', 'restore', 'import'))) {
		if(thegem_generate_custom_css() === 'generate_css_continue') {
			return ;
		}
	}
	$jQuery_ui_theme = 'ui-no-theme';
	$options = thegem_get_theme_options();
	$options_values = get_option('thegem_theme_options');
	$thegem_theme = wp_get_theme(wp_get_theme()->get('Template'));
	//wp_enqueue_code_editor( array( 'type' => 'text/html' ) );
?>
<div class="wrap">
	<div class="theme-title">
		<img class="right-part" src="<?php echo esc_url(get_template_directory_uri().'/images/admin-images/theme-options-title-right.png'); ?>" alt="Codex Tuner" />
		<img class="left-part" src="<?php echo esc_url(get_template_directory_uri().'/images/admin-images/theme-options-title-left.png'); ?>" alt="Theme Options. thegem Business." />
		<div style="clear: both;"></div>
	</div>
	<form id="theme-options-form" method="POST">
		<?php wp_nonce_field('thegem-theme-options'); ?>
		<input type="hidden" name="theme_options[theme_version]" value="<?php echo $thegem_theme->get('Version'); ?>" />
		<div class="option-wrap <?php echo esc_attr($jQuery_ui_theme); ?>">
			<div class="submit_buttons"><button name="action" value="save"><?php esc_html_e( 'Save Changes', 'thegem' ); ?></button></div>
			<div id="categories">
				<?php if(count($options) > 0) : ?>
					<ul class="styled">
						<?php foreach($options as $name => $category) : ?>
							<?php if(isset($category['subcats']) && count($category['subcats']) > 0) : ?>
								<li><a href="<?php echo esc_url('#'.$name); ?>" style="background-image: url('<?php echo esc_url(get_template_directory_uri().'/images/admin-images/'.$name.'_icon.png'); ?>');"><?php print esc_html($category['title']); ?></a></li>
							<?php endif; ?>
						<?php endforeach; ?>
						<li><a href="#backup" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/admin-images/backup_icon.png');"><?php esc_html_e('Backup', 'thegem'); ?></a></li>
						<?php if(!defined('ENVATO_HOSTED_SITE')) : ?><li><a href="#activation" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/admin-images/activation_icon.png');"><?php esc_html_e('Theme activation', 'thegem'); ?></a></li><?php endif; ?>
					</ul>
				<?php endif; ?>

				<?php if(count($options) > 0) : ?>
					<?php foreach($options as $name => $category) : ?>
						<?php if(isset($category['subcats']) && count($category['subcats']) > 0) : ?>
							<div id="<?php echo esc_attr($name); ?>">
								<div class="subcategories">

									<?php foreach($category['subcats'] as $sname => $subcat) : ?>
										<?php if(count($subcat) > 0) : ?>
											<div id="<?php echo esc_attr($sname); ?>"<?php echo (isset($subcat['hidden']) ? ' style="display: none;"' : ''); ?>>
												<h3><?php echo esc_html($subcat['title']); ?></h3>
												<div class="inside">
													<?php foreach($subcat['options'] as $oname => $option) : ?>
														<?php echo thegem_get_option_element($oname, $option, isset($options_values[$oname]) ? $options_values[$oname] : NULL); ?>
													<?php endforeach; ?>
												</div>
											</div>
										<?php endif; ?>
									<?php endforeach; ?>

									<?php if($name === 'general') : ?>
										<div id="default_page_settings">
											<h3><?php esc_html_e('Default page options for new pages, posts & portfolio items', 'thegem'); ?></h3>
											<div class="inside">
												<?php thegem_theme_options_page_settings_block('default'); ?>
											</div>
										</div>
										<div id="blog_page_settings">
											<h3><?php esc_html_e('Default page options for blog list', 'thegem'); ?></h3>
											<div class="inside">
												<?php thegem_theme_options_page_settings_block('blog'); ?>
											</div>
										</div>
										<div id="search_page_settings">
											<h3><?php esc_html_e('Default page options for search results', 'thegem'); ?></h3>
											<div class="inside">
												<?php thegem_theme_options_page_settings_block('search'); ?>
											</div>
										</div>
									<?php endif; ?>

								</div>
							</div>
						<?php endif; ?>
					<?php endforeach; ?>

					<div id="backup">
						<div class="subcategories">
								<div id="backup_theme_options">
									<h3><?php esc_html_e('Backup and Restore Theme Settings', 'thegem'); ?></h3>
									<div class="inside">
										<div class="option backup_restore_settings">
											<p><?php esc_html_e('If you would like to experiment with the settings of your theme and don\'t want to loose your previous settings, use the "Backup Settings"-button to backup your current theme options. You can restore these options later using the button "Restore Settings".', 'thegem'); ?></p>
											<?php if($backup = get_option('thegem_theme_options_backup')) : ?>
												<p><b><?php esc_html_e('Last backup', 'thegem'); ?>: <?php echo date('Y-m-d H:i', $backup['date']) ?></b></p>
											<?php else : ?>
												<p><b><?php esc_html_e('Last backup', 'thegem'); ?>: <?php esc_html_e('No backups yet', 'thegem'); ?></b></p>
											<?php endif; ?>
											<div class="backups-buttons">
												<button name="action" value="backup"><?php esc_html_e( 'Backup Settings', 'thegem' ); ?></button>
												<button name="action" value="restore"><?php esc_html_e( 'Restore Settings', 'thegem' ); ?></button>
											</div>
										</div>
										<div class="option import_settings">
											<p><?php esc_html_e('In order to apply the settings of another thegem theme used in a different install just copy and paste the settings in the text box and click on "Import Settings".', 'thegem'); ?></p>
											<div class="textarea">
												<textarea name="import_settings" cols="100" rows="8"><?php if($settings = get_option('thegem_theme_options')) { echo json_encode($settings); } ?></textarea>
											</div>
											<p>&nbsp;</p>
											<div class="backups-buttons">
												<button name="action" value="import"><?php esc_html_e( 'Import Settings', 'thegem' ); ?></button>
											</div>
										</div>
									</div>
								</div>
						</div>
					</div>

					<?php if(!defined('ENVATO_HOSTED_SITE')) : ?><div id="activation">
						<div class="activation-header">
							<img src="<?php echo get_template_directory_uri(); ?>/images/admin-images/activation-title.png" alt="TheGem"/>
							<h4><?php esc_html_e( 'Welcome to TheGem - Creative Multi-Purpose WordPress Theme', 'thegem' ); ?></h4>
						</div>
						<div class="activation-container">
							<p class="styled-subtitle"><?php esc_html_e( 'Thank you for purchasing TheGem! Would you like to import our awesome demos and take advantage of our amazing features? Please activate your copy of TheGem:', 'thegem' ); ?></p>
							<div class="activation-field">
								<table><tr>
									<td><input type="text" class="activation-input" name="theme_options[purchase_code]" placeholder="<?php esc_html_e( 'Enter purchase code, e.g. cb0e057f-a05d-4758-b314-024db98eff85', 'thegem' ); ?>" value="<?php echo esc_attr(thegem_get_option('purchase_code')); ?>" /></td>
									<td><button class="activation-submit" name="action" value="activation"><?php esc_html_e( 'Activate', 'thegem' ); ?></button></td>
								</tr></table>
								<?php if(get_option('thegem_activation')) : ?>
									<p class="activation-result activation-result-success"><?php esc_html_e('Thank you, your purchase code is valid. TheGem has been activated.', 'thegem'); ?></p>
								<?php else : ?>
									<p class="activation-result activation-result-hidden"></p>
								<?php endif; ?>
								<script type="text/javascript">
									(function($) {
										$('#activation .activation-submit').click(function(e) {
											e.preventDefault();
											$.ajax({
												url: '<?php echo esc_url(admin_url('admin-ajax.php')); ?>',
												data: { action: 'thegem_submit_activation', purchase_code: $('#activation .activation-input').val()},
												method: 'POST',
												timeout: 30000
											}).done(function(msg) {
												$('#activation .activation-result').html('');
												$('#activation .activation-result + .activation-plugin-button').remove();
												$('#activation .activation-result').removeClass('activation-result-hidden activation-result-success activation-result-failure');
												msg = jQuery.parseJSON(msg);
												if(msg.status) {
													$('#activation .activation-result').addClass('activation-result-success');
													<?php if(!get_option('thegem_print_google_code')) : ?>
														var elem = document.createElement('script');
														elem.src = '//www.googletagmanager.com/gtag/js?id=UA-45465556-11';
														elem.async = true;
														elem.onload = function() {
															window.dataLayer = window.dataLayer || [];
															function gtag(){dataLayer.push(arguments);}
															gtag('js', new Date());
															gtag('config', 'UA-45465556-11', { 'anonymize_ip': true });
															gtag('config', 'AW-972114099');
															var $gtag_obj = {
																'send_to': 'AW-972114099/awXFCNfd8GkQs5HFzwM',
																'transaction_id': $('#activation .activation-input').val()
															};
															gtag('event', 'conversion', $gtag_obj);
														}
														document.getElementsByTagName('body')[0].appendChild(elem);
													<?php endif; ?>
												} else {
													$('#activation .activation-result').addClass('activation-result-failure');
												}
												$('#activation .activation-result').html(msg.message);
												if(msg.button) {
													$('#activation .activation-result').after(msg.button);
												}
											}).fail(function() {
												$('#activation .activation-result').html('');
												$('#activation .activation-result').removeClass('activation-result-hidden');
												$('#activation .activation-result').addClass('activation-result-failure');
												$('#activation .activation-result').text('<?php esc_html_e('Ajax error. Try again...', 'thegem'); ?>');
											});
										});
										$('#activation .activation-input').keydown(function(e) {
											if (e.keyCode == 13) {
												$('#activation .activation-submit').trigger('click');
												e.preventDefault();
											}
										});
									})(jQuery);
								</script>
							</div>
							<div class="activation-purchase-image">
								<a href="https://themeforest.net/downloads"><img src="<?php echo get_template_directory_uri(); ?>/images/admin-images/activation-purchase-image.jpg" alt="TheGem"/></a>
							</div>
							<div class="activation-help-links">
								<a href="http://codex-themes.com/thegem/documentation/"><img src="<?php echo get_template_directory_uri(); ?>/images/admin-images/activation-help-doc.jpg"></a>
								<a href="http://codexthemes.ticksy.com/"><img src="<?php echo get_template_directory_uri(); ?>/images/admin-images/activation-help-support.jpg"></a>
								<a href="http://codex-themes.com/thegem/documentation/video-tutorials/"><img src="<?php echo get_template_directory_uri(); ?>/images/admin-images/activation-help-video.jpg"></a>
							</div>
							<div class="activation-rate-block">
								<h4><?php esc_html_e( 'RATE THEGEM', 'thegem' ); ?></h4>
								<p><?php printf(wp_kses(__( 'Please don’t forget to rate TheGem and leave a nice review, it means a lot for us and our theme.<br />Simply log in into your Themeforest, go to <a href="%s">Downloads section</a> and click 5 stars next to the TheGem WordPress theme as shown on screenshot below:', 'thegem' ), array('br' => array(), 'a' => array('href' => array()))), esc_url('https://themeforest.net/downloads')); ?></p>
								<div class="activation-rate-image">
									<a href="https://themeforest.net/downloads"><img src="<?php echo get_template_directory_uri(); ?>/images/admin-images/activation-rate-image.jpg" alt="TheGem"/></a>
								</div>
							</div>
						</div>
					</div><?php endif; ?>

				<?php endif; ?>

			</div>
			<div class="submit_buttons"><button name="action" value="reset"><?php esc_html_e( 'Reset Style Settings', 'thegem' ); ?></button><button name="action" value="save"><?php esc_html_e( 'Save Changes', 'thegem' ); ?></button></div>
		</div>
	</form>
	<script type="text/javascript">
(function($) {
	$(function() {
		var options_dependencies = {
			header_layout: [
				{
					values: ['fullwidth_hamburger'],
					data: {
						main_menu_level1_active_color: '#00bcd4'
					}
				},
				{
					values: ['vertical'],
					data: {
						main_menu_font_family: 'Montserrat',
						main_menu_font_style: '700',
						top_background_color: '#ffffff',
						main_menu_level1_color: '#3c3950',
						main_menu_level1_background_color: '',
						main_menu_level1_hover_color: '#00bcd4',
						main_menu_level1_hover_background_color: '',
						main_menu_level1_active_color: '#00bcd4',
						main_menu_level1_active_background_color: '#f4f6f7',
						main_menu_level2_color: '#99a9b5',
						main_menu_level2_background_color: '#212331',
						main_menu_level2_hover_color: '#ffffff',
						main_menu_level2_hover_background_color: '#393d4f',
						main_menu_level2_active_color: '#ffffff',
						main_menu_level2_active_background_color: '#393d4f',
						main_menu_mega_column_title_color: '#3c3950',
						main_menu_mega_column_title_hover_color: '#00bcd4',
						main_menu_mega_column_title_active_color: '#00bcd4',
						main_menu_level3_color: '#99a9b5',
						main_menu_level3_background_color: '#393d50',
						main_menu_level3_hover_color: '#ffffff',
						main_menu_level3_hover_background_color: '#494c64',
						main_menu_level3_active_color: '#00bcd4',
						main_menu_level3_active_background_color: '#393d50',
						main_menu_level2_border_color: '#494660'
					}
				},
				{
					values: ['perspective'],
					data: {
						main_menu_level1_active_color: '#00bcd4',
						basic_outer_background_color: '#b9b8be'
					}
				}
			],
			header_style: [
				{
					values: ['1'],
					data: {
						main_menu_font_family: 'Montserrat',
						main_menu_font_style: '700',
						top_background_color: '#ffffff',
						main_menu_level1_color: '#3c3950',
						main_menu_level1_background_color: '',
						main_menu_level1_hover_color: '#00bcd4',
						main_menu_level1_hover_background_color: '#',
						main_menu_level1_active_color: '#00bcd4',
						main_menu_level1_active_background_color: '#f4f6f7',
						main_menu_level2_color: '#99a9b5',
						main_menu_level2_background_color: '#212331',
						main_menu_level2_hover_color: '#ffffff',
						main_menu_level2_hover_background_color: '#393d4f',
						main_menu_level2_active_color: '#ffffff',
						main_menu_level2_active_background_color: '#393d4f',
						main_menu_mega_column_title_color: '#ffffff',
						main_menu_mega_column_title_hover_color: '#00bcd4',
						main_menu_mega_column_title_active_color: '#00bcd4',
						main_menu_level3_color: '#99a9b5',
						main_menu_level3_background_color: '#393d50',
						main_menu_level3_hover_color: '#ffffff',
						main_menu_level3_hover_background_color: '#494c64',
						main_menu_level3_active_color: '#00bcd4',
						main_menu_level3_active_background_color: '#393d50',
						main_menu_level2_border_color: '#494660',
						main_menu_level1_light_color: '#ffffff',
						main_menu_level1_light_hover_color: '#00bcd4',
						main_menu_level1_light_active_color: '#00bcd4',
						overlay_menu_background_color: '#212331',
						overlay_menu_color: '#ffffff',
						overlay_menu_hover_color: '#00bcd4',
						overlay_menu_active_color: '#00bcd4',
						hamburger_menu_icon_color: '#3c3950',
						hamburger_menu_icon_light_color: '#ffffff',
						mobile_menu_button_color: '#3c3950',
						mobile_menu_button_light_color: '#ffffff'
					}
				},
				{
					values: ['2'],
					data: {
						main_menu_font_family: 'Source Sans Pro',
						main_menu_font_style: 'regular',
						top_background_color: '#ffffff',
						main_menu_level1_color: '#5f727f',
						main_menu_level1_background_color: '',
						main_menu_level1_hover_color: '#00bcd4',
						main_menu_level1_hover_background_color: '',
						main_menu_level1_active_color: '#00bcd4',
						main_menu_level1_active_background_color: '',
						main_menu_level2_color: '#5f727f',
						main_menu_level2_background_color: '#f4f6f7',
						main_menu_level2_hover_color: '#3c3950',
						main_menu_level2_hover_background_color: '#ffffff',
						main_menu_level2_active_color: '#3c3950',
						main_menu_level2_active_background_color: '#ffffff',
						main_menu_mega_column_title_color: '#5f727f',
						main_menu_mega_column_title_hover_color: '#00bcd4',
						main_menu_mega_column_title_active_color: '#00bcd4',
						main_menu_level3_color: '#5f727f',
						main_menu_level3_background_color: '#ffffff',
						main_menu_level3_hover_color: '#ffffff',
						main_menu_level3_hover_background_color: '#494c64',
						main_menu_level3_active_color: '#00bcd4',
						main_menu_level3_active_background_color: '#ffffff',
						main_menu_level2_border_color: '#dfe5e8',
						main_menu_level1_light_color: '#ffffff',
						main_menu_level1_light_hover_color: '#00bcd4',
						main_menu_level1_light_active_color: '#00bcd4',
						overlay_menu_background_color: '#ffffff',
						overlay_menu_color: '#212331',
						overlay_menu_hover_color: '#00bcd4',
						overlay_menu_active_color: '#00bcd4',
						hamburger_menu_icon_color: '#3c3950',
						hamburger_menu_icon_light_color: '#ffffff',
						mobile_menu_button_color: '#3c3950',
						mobile_menu_button_light_color: '#ffffff'
					}
				},
				{
					values: ['3'],
					data: {
						main_menu_font_family: 'Montserrat',
						main_menu_font_style: '700',
						top_background_color: '#ffffff',
						main_menu_level1_color: '#3c3950',
						main_menu_level1_background_color: '',
						main_menu_level1_hover_color: '#00bcd4',
						main_menu_level1_hover_background_color: '',
						main_menu_level1_active_color: '#3c3950',
						main_menu_level1_active_background_color: '#3c3950',
						main_menu_level2_color: '#5f727f',
						main_menu_level2_background_color: '#f4f6f7',
						main_menu_level2_hover_color: '#3c3950',
						main_menu_level2_hover_background_color: '#ffffff',
						main_menu_level2_active_color: '#3c3950',
						main_menu_level2_active_background_color: '#ffffff',
						main_menu_mega_column_title_color: '#3c3950',
						main_menu_mega_column_title_hover_color: '#00bcd4',
						main_menu_mega_column_title_active_color: '#00bcd4',
						main_menu_level3_color: '#5f727f',
						main_menu_level3_background_color: '#ffffff',
						main_menu_level3_hover_color: '#ffffff',
						main_menu_level3_hover_background_color: '#494c64',
						main_menu_level3_active_color: '#00bcd4',
						main_menu_level3_active_background_color: '#ffffff',
						main_menu_level2_border_color: '#dfe5e8',
						main_menu_level1_light_color: '#ffffff',
						main_menu_level1_light_hover_color: '#00bcd4',
						main_menu_level1_light_active_color: '#ffffff',
						overlay_menu_background_color: '#ffffff',
						overlay_menu_color: '#212331',
						overlay_menu_hover_color: '#00bcd4',
						overlay_menu_active_color: '#00bcd4',
						hamburger_menu_icon_color: '#3c3950',
						hamburger_menu_icon_light_color: '#ffffff',
						mobile_menu_button_color: '#3c3950',
						mobile_menu_button_light_color: '#ffffff'
					}
				},
				{
					values: ['3'],
					condition:function(optionValue, itemValue) {
						return $('#header_layout').val() == 'fullwidth_hamburger' || $('#header_layout').val() == 'vertical' || $('#header_layout').val() == 'perspective';
					},
					data: {
						main_menu_level1_active_color: '#00bcd4'
					}
				},
				{
					values: ['4'],
					data: {
						main_menu_font_family: 'Montserrat',
						main_menu_font_style: '700',
						top_background_color: '#212331',
						main_menu_level1_color: '#99a9b5',
						main_menu_level1_background_color: '',
						main_menu_level1_hover_color: '#00bcd4',
						main_menu_level1_hover_background_color: '',
						main_menu_level1_active_color: '#ffffff',
						main_menu_level1_active_background_color: '#ffffff',
						main_menu_level2_color: '#99a9b5',
						main_menu_level2_background_color: '#393d50',
						main_menu_level2_hover_color: '#ffffff',
						main_menu_level2_hover_background_color: '#212331',
						main_menu_level2_active_color: '#ffffff',
						main_menu_level2_active_background_color: '#212331',
						main_menu_mega_column_title_color: '#ffffff',
						main_menu_mega_column_title_hover_color: '#00bcd4',
						main_menu_mega_column_title_active_color: '#00bcd4',
						main_menu_level3_color: '#99a9b5',
						main_menu_level3_background_color: '#212331',
						main_menu_level3_hover_color: '#ffffff',
						main_menu_level3_hover_background_color: '#131121',
						main_menu_level3_active_color: '#00bcd4',
						main_menu_level3_active_background_color: '#212331',
						main_menu_level2_border_color: '#494c64',
						main_menu_level1_light_color: '#ffffff',
						main_menu_level1_light_hover_color: '#00bcd4',
						main_menu_level1_light_active_color: '#ffffff',
						overlay_menu_background_color: '#212331',
						overlay_menu_color: '#ffffff',
						overlay_menu_hover_color: '#00bcd4',
						overlay_menu_active_color: '#00bcd4',
						hamburger_menu_icon_color: '#ffffff',
						hamburger_menu_icon_light_color: '#ffffff',
						mobile_menu_button_color: '#ffffff',
						mobile_menu_button_light_color: '#ffffff'
					}
				},
				{
					values: ['4'],
					condition:function(optionValue, itemValue) {
						return $('#header_layout').val() == 'fullwidth_hamburger' || $('#header_layout').val() == 'vertical' || $('#header_layout').val() == 'perspective';
					},
					data: {
						main_menu_level1_active_color: '#00bcd4'
					}
				},
			],
			top_area_style: [
				{
					values: ['1'],
					data: {
						top_area_background_color: '#f4f6f7',
						top_area_border_color: '#00bcd4',
						top_area_separator_color: '#dfe5e8',
						top_area_text_color: '#5f727f',
						top_area_link_color: '#5f727f',
						top_area_link_hover_color: '#00bcd4',
						top_area_button_text_color: '#ffffff',
						top_area_button_background_color: '#494c64',
						top_area_button_hover_text_color: '#ffffff',
						top_area_button_hover_background_color: '#00bcd4',
						top_area_icons_color: '#5f727f'
					}
				},
				{
					values: ['2'],
					data: {
						top_area_background_color: '#212331',
						top_area_border_color: '#474b61',
						top_area_separator_color: '#51546c',
						top_area_text_color: '#99a9b5',
						top_area_link_color: '#99a9b5',
						top_area_link_hover_color: '#ffffff',
						top_area_button_text_color: '#ffffff',
						top_area_button_background_color: '#00bcd4',
						top_area_button_hover_text_color: '#ffffff',
						top_area_button_hover_background_color: '#46485c',
						top_area_icons_color: '#99a9b5'
					}
				},
				{
					values: ['3'],
					data: {
						top_area_background_color: '#393d50',
						top_area_border_color: '#00bcd4',
						top_area_separator_color: '#494c64',
						top_area_text_color: '#99a9b5',
						top_area_link_color: '#99a9b5',
						top_area_link_hover_color: '#ffffff',
						top_area_button_text_color: '#ffffff',
						top_area_button_background_color: '#99a9b5',
						top_area_button_hover_text_color: '#ffffff',
						top_area_button_hover_background_color: '#00bcd4',
						top_area_icons_color: '#99a9b5'
					}
				}
			],
			mobile_menu_layout_style: [
				{
					values: ['light'],
					condition: function(optionValue, itemValue) {
						return $('#mobile_menu_layout').val() == 'default';
					},
					data: {
						mobile_menu_font_family: 'Source Sans Pro',
						mobile_menu_font_style: 'regular',
						mobile_menu_font_sets: '',
						mobile_menu_font_size: '16',
						mobile_menu_line_height: '20',
						mobile_menu_background_color: '',
						mobile_menu_level1_color: '#5f727f',
						mobile_menu_level1_background_color: '#f4f6f7',
						mobile_menu_level1_active_color: '#3c3950',
						mobile_menu_level1_active_background_color: '#ffffff',
						mobile_menu_level2_color: '#5f727f',
						mobile_menu_level2_background_color: '#f4f6f7',
						mobile_menu_level2_active_color: '#3c3950',
						mobile_menu_level2_active_background_color: '#ffffff',
						mobile_menu_level3_color: '#5f727f',
						mobile_menu_level3_background_color: '#f4f6f7',
						mobile_menu_level3_active_color: '#3c3950',
						mobile_menu_level3_active_background_color: '#ffffff',
						mobile_menu_border_color: '#dfe5e8',
						mobile_menu_social_icon_color: '',
						mobile_menu_hide_color: ''
					}
				},
				{
					values: ['dark'],
					condition: function(optionValue, itemValue) {
						return $('#mobile_menu_layout').val() == 'default';
					},
					data: {
						mobile_menu_font_family: 'Source Sans Pro',
						mobile_menu_font_style: 'regular',
						mobile_menu_font_sets: '',
						mobile_menu_font_size: '16',
						mobile_menu_line_height: '20',
						mobile_menu_background_color: '',
						mobile_menu_level1_color: '#99a9b5',
						mobile_menu_level1_background_color: '#212331',
						mobile_menu_level1_active_color: '#ffffff',
						mobile_menu_level1_active_background_color: '#181828',
						mobile_menu_level2_color: '#99a9b5',
						mobile_menu_level2_background_color: '#212331',
						mobile_menu_level2_active_color: '#ffffff',
						mobile_menu_level2_active_background_color: '#181828',
						mobile_menu_level3_color: '#99a9b5',
						mobile_menu_level3_background_color: '#212331',
						mobile_menu_level3_active_color: '#3c3950',
						mobile_menu_level3_active_background_color: '#181828',
						mobile_menu_border_color: '#494c64',
						mobile_menu_social_icon_color: '',
						mobile_menu_hide_color: ''
					}
				},
				{
					values: ['light'],
					condition: function(optionValue, itemValue) {
						return $('#mobile_menu_layout').val() == 'overlay';
					},
					data: {
						mobile_menu_font_family: 'Montserrat',
						mobile_menu_font_style: '700',
						mobile_menu_font_sets: '',
						mobile_menu_font_size: '24',
						mobile_menu_line_height: '48',
						mobile_menu_background_color: '#ffffff',
						mobile_menu_level1_color: '#212331',
						mobile_menu_level1_background_color: '',
						mobile_menu_level1_active_color: '#00bcd4',
						mobile_menu_level1_active_background_color: '',
						mobile_menu_level2_color: '#212331',
						mobile_menu_level2_background_color: '',
						mobile_menu_level2_active_color: '#00bcd4',
						mobile_menu_level2_active_background_color: '',
						mobile_menu_level3_color: '#212331',
						mobile_menu_level3_background_color: '',
						mobile_menu_level3_active_color: '#00bcd4',
						mobile_menu_level3_active_background_color: '',
						mobile_menu_border_color: '',
						mobile_menu_social_icon_color: '',
						mobile_menu_hide_color: '#00bcd4'
					}
				},
				{
					values: ['dark'],
					condition: function(optionValue, itemValue) {
						return $('#mobile_menu_layout').val() == 'overlay';
					},
					data: {
						mobile_menu_font_family: 'Montserrat',
						mobile_menu_font_style: '700',
						mobile_menu_font_sets: '',
						mobile_menu_font_size: '24',
						mobile_menu_line_height: '48',
						mobile_menu_background_color: '#212331',
						mobile_menu_level1_color: '#ffffff',
						mobile_menu_level1_background_color: '',
						mobile_menu_level1_active_color: '#00bcd4',
						mobile_menu_level1_active_background_color: '',
						mobile_menu_level2_color: '#ffffff',
						mobile_menu_level2_background_color: '',
						mobile_menu_level2_active_color: '#00bcd4',
						mobile_menu_level2_active_background_color: '',
						mobile_menu_level3_color: '#ffffff',
						mobile_menu_level3_background_color: '',
						mobile_menu_level3_active_color: '#00bcd4',
						mobile_menu_level3_active_background_color: '',
						mobile_menu_border_color: '',
						mobile_menu_social_icon_color: '',
						mobile_menu_hide_color: '#00bcd4'
					}
				},
				{
					values: ['light'],
					condition: function(optionValue, itemValue) {
						return $('#mobile_menu_layout').val() == 'slide-horizontal' || $('#mobile_menu_layout').val() == 'slide-vertical';
					},
					data: {
						mobile_menu_font_family: 'Source Sans Pro',
						mobile_menu_font_style: 'regular',
						mobile_menu_font_sets: '',
						mobile_menu_font_size: '16',
						mobile_menu_line_height: '20',
						mobile_menu_background_color: '#ffffff',
						mobile_menu_level1_color: '#5f727f',
						mobile_menu_level1_background_color: '#dfe5e8',
						mobile_menu_level1_active_color: '#3c3950',
						mobile_menu_level1_active_background_color: '#dfe5e8',
						mobile_menu_level2_color: '#5f727f',
						mobile_menu_level2_background_color: '#f0f3f2',
						mobile_menu_level2_active_color: '#3c3950',
						mobile_menu_level2_active_background_color: '#f0f3f2',
						mobile_menu_level3_color: '#5f727f',
						mobile_menu_level3_background_color: '#ffffff',
						mobile_menu_level3_active_color: '#ffffff',
						mobile_menu_level3_active_background_color: '#494c64',
						mobile_menu_border_color: '#dfe5e8',
						mobile_menu_social_icon_color: '#99a9b5',
						mobile_menu_hide_color: '#3c3950'
					}
				},
				{
					values: ['dark'],
					condition: function(optionValue, itemValue) {
						return $('#mobile_menu_layout').val() == 'slide-horizontal' || $('#mobile_menu_layout').val() == 'slide-vertical';
					},
					data: {
						mobile_menu_font_family: 'Source Sans Pro',
						mobile_menu_font_style: 'regular',
						mobile_menu_font_sets: '',
						mobile_menu_font_size: '16',
						mobile_menu_line_height: '20',
						mobile_menu_background_color: '#212331',
						mobile_menu_level1_color: '#99a9b5',
						mobile_menu_level1_background_color: '#212331',
						mobile_menu_level1_active_color: '#ffffff',
						mobile_menu_level1_active_background_color: '#212331',
						mobile_menu_level2_color: '#99a9b5',
						mobile_menu_level2_background_color: '#393d4f',
						mobile_menu_level2_active_color: '#ffffff',
						mobile_menu_level2_active_background_color: '#393d4f',
						mobile_menu_level3_color: '#99a9b5',
						mobile_menu_level3_background_color: '#494c64',
						mobile_menu_level3_active_color: '#3c3950',
						mobile_menu_level3_active_background_color: '#00bcd4',
						mobile_menu_border_color: '#494c64',
						mobile_menu_social_icon_color: '#99a9b5',
						mobile_menu_hide_color: '#ffffff'
					}
				}
			],
			mobile_menu_layout: [
				{
					values: ['%ALL%'],
					action: function() {
						$('#mobile_menu_layout_style').trigger('change');
					}
				}
			]
		}

		$.each(options_dependencies, function(i, values) {
			$('#'+i).change(function() {
				var optionValue = $(this).val();
				$.each(values, function(valueItemIndex, valueItem) {
					if ((valueItem.values.indexOf('%ALL%') != -1 || valueItem.values.indexOf(optionValue) != -1) && (typeof valueItem.condition !== "function" || valueItem.condition(optionValue, valueItem.value))) {
						if (typeof valueItem.action === "function") {
							valueItem.action();
						}
						if (valueItem.data != undefined) {
							$.each(valueItem.data, function(item, value) {
								$('#'+item).val(value).trigger('change');
							});
						}
					}
				});
			});
		});

		if($('#page_layout_style').val() !== 'fullwidth') {
			$('.page_paddings_field').hide();
		}

		$('#page_layout_style').change(function() {
			if($(this).val() !== 'fullwidth') {
				$('.page_paddings_field').hide();
			} else {
				$('.page_paddings_field').show();
			}
		});

		$('.option .icon .icons-picker').each(function() {
			var $field = $(this);
			var fid = $field.attr('id');
			var $packField = $('#'+fid+'_pack');
			$packField.change(function() {
				$field.data('iconpack', $(this).val());
			}).trigger('change');
		});

		$('.hidden-group-option').each(function() {
			var $field = $(this);
			var fid = $field.attr('id');
			var depOptionFieldId = fid.replace('_group', '');
			var $depOptionField = $('#'+depOptionFieldId);
			$depOptionField.change(function() {
				if($depOptionField.is(':checked')) {
					$field.show();
				} else {
					$field.hide();
				}
			}).trigger('change');
		});
	});
})(jQuery);
</script>
</div>
<?php
}*/

/* Update theme options */
/*function thegem_theme_update_options() {
	if(check_admin_referer('thegem-theme-options')) {
		if(isset($_REQUEST['action']) && isset($_REQUEST['theme_options'])) {
			if($_REQUEST['action'] == 'save') {
				$theme_options = $_REQUEST['theme_options'];
				if(thegem_get_current_language()) {
					$ml_options = array('footer_html', 'top_area_button_text', 'top_area_button_link', 'contacts_address', 'contacts_phone', 'contacts_fax', 'contacts_email', 'contacts_website', 'top_area_contacts_address', 'top_area_contacts_phone', 'top_area_contacts_fax', 'top_area_contacts_email', 'top_area_contacts_website');
					foreach ($ml_options as $ml_option) {
						$value = thegem_get_option($ml_option, false, true);
						if(!is_array($value)) {
							if(thegem_get_default_language()) {
								$value = array(thegem_get_default_language() => $value);
							}
						}
						$value[thegem_get_current_language()] = $theme_options[$ml_option];
						$theme_options[$ml_option] = $value;
					}
				}
				thegem_check_activation($theme_options);
				update_option('thegem_theme_options', $theme_options);
				if(!empty($_REQUEST['thegem_page_data_options_default'])) {
					thegem_theme_options_set_page_settings('default', $_REQUEST['thegem_page_data_options_default']);
				}
				if(!empty($_REQUEST['thegem_page_data_options_blog'])) {
					thegem_theme_options_set_page_settings('blog', $_REQUEST['thegem_page_data_options_blog']);
				}
				if(!empty($_REQUEST['thegem_page_data_options_search'])) {
					thegem_theme_options_set_page_settings('search', $_REQUEST['thegem_page_data_options_search']);
				}
			} elseif($_REQUEST['action'] == 'reset') {
				if($options = get_option('thegem_theme_options')) {
					if(!($skin = thegem_get_option('page_color_style'))) {
						$skin = 'light';
					}
					$defaults = thegem_color_skin_defaults($skin);
					$newOptions = array();
					foreach($defaults as $key => $val) {
						$newOptions[$key] = $val;
					}
					$options = array_merge($options, $newOptions);
					thegem_check_activation($options);
					update_option('thegem_theme_options', $options);
				}

			} elseif($_REQUEST['action'] == 'backup') {
				if($settings = get_option('thegem_theme_options')) {
					update_option('thegem_theme_options_backup', array('date' => time(), 'settings' => json_encode($settings)));
				}
			} elseif($_REQUEST['action'] == 'restore') {
				if($settings = get_option('thegem_theme_options_backup')) {
					thegem_check_activation($options);
					update_option('thegem_theme_options', json_decode($settings['settings'], true));
				}
			} elseif($_REQUEST['action'] == 'import') {
				thegem_check_activation($theme_options);
				update_option('thegem_theme_options', json_decode(stripslashes($_REQUEST['import_settings']), true));
			} elseif($_REQUEST['action'] == 'activation' && isset($_REQUEST['theme_options']['purchase_code'])) {
				$theme_options = get_option('thegem_theme_options');
				$theme_options['purchase_code'] = $_REQUEST['theme_options']['purchase_code'];
				thegem_check_activation($theme_options);
				update_option('thegem_theme_options', $theme_options);
			}
		}
	}
}*/

/* Get theme option*/
if(!function_exists('thegem_get_option')) {
function thegem_get_option($name, $default = false, $ml_full = false, $clearCache = false) {
	static $ref_options;
	static $cache = [];

	if ($clearCache) {
		$ref_options = null;
		$cache = [];
	}
	$cacheKey = $name.'_'.$default.'_'.$ml_full;

	if (isset($cache[$cacheKey])) {
		return $cache[$cacheKey];
	}

	if (!isset($ref_options)) {
		$ref_options = get_option('thegem_theme_options');
	}
	$options = $ref_options;

	if(isset($options[$name])) {
		$ml_options = array('footer_html', 'top_area_button_text', 'top_area_button_link', 'contacts_address', 'contacts_phone', 'contacts_fax', 'contacts_email', 'contacts_website', 'top_area_contacts_address', 'top_area_contacts_phone', 'top_area_contacts_fax', 'top_area_contacts_email', 'top_area_contacts_website', 'custom_footer');
		if(in_array($name, $ml_options) && is_array($options[$name]) && !$ml_full) {
			if(thegem_get_current_language()) {
				if(isset($options[$name][thegem_get_current_language()])) {
					$options[$name] = $options[$name][thegem_get_current_language()];
				} elseif(thegem_get_default_language() && isset($options[$name][thegem_get_default_language()])) {
					$options[$name] = $options[$name][thegem_get_default_language()];
				} else {
					$options[$name] = '';
				}
			}else {
				$options[$name] = reset($options[$name]);
			}
		}
		$result = apply_filters('thegem_option_'.$name, $options[$name]);
		$cache[$cacheKey] = $result;
		return $result;
	}
	$result = apply_filters('thegem_option_'.$name, $default);
	$cache[$cacheKey] = $result;
	return $result;
}
}

function thegem_generate_custom_css() {
	thegem_get_option(false, false, false, true);
	ob_start();
	thegem_custom_fonts();
	require get_template_directory() . '/inc/custom-css.php';
	if(file_exists(get_stylesheet_directory() . '/inc/custom-css.php') && get_stylesheet_directory() != get_template_directory()) {
		require get_stylesheet_directory() . '/inc/custom-css.php';
	}
	$custom_css = ob_get_clean();
	ob_start();
	require get_template_directory() . '/inc/style-editor-css.php';
	$editor_css = ob_get_clean();
	$action = array('action');
	$url = wp_nonce_url('admin.php?page=thegem-theme-options','thegem-theme-options');
	if (false === ($creds = request_filesystem_credentials($url, '', false, get_stylesheet_directory() . '/css/', $action) ) ) {
		return 'generate_css_continue';
	}
	if(!WP_Filesystem($creds)) {
		request_filesystem_credentials($url, '', true, get_stylesheet_directory() . '/css/', $action);
		return 'generate_css_continue';
	}
	global $wp_filesystem;
	$old_name = thegem_get_custom_css_filename();
	$new_name = thegem_generate_custom_css_filename();
	if(!$wp_filesystem->put_contents($wp_filesystem->find_folder(get_stylesheet_directory()) . 'css/'.$new_name.'.css', $custom_css)) {
		update_option('thegem_genearte_css_error', '1');
?>
	<div class="error">
		<p><?php printf(esc_html__('TheGem\'s styles cannot be customized because file "%s" cannot be modified. Please check your server\'s settings. Then click "Save Changes" button.', 'thegem'), get_stylesheet_directory() . '/css/custom.css'); ?></p>
	</div>
<?php
	} else {
		$wp_filesystem->put_contents($wp_filesystem->find_folder(get_template_directory()) . 'css/style-editor.css', $editor_css);
		$custom_css_files = glob(get_template_directory().'/css/custom-*.css');
		foreach($custom_css_files as $file) {
			if(basename($file, '.css') != $new_name) {
				$wp_filesystem->delete($wp_filesystem->find_folder(get_stylesheet_directory()) . 'css/'.basename($file, '.css').'.css', $custom_css);
			}
		}
		thegem_save_custom_css_filename($new_name);
		delete_option('thegem_genearte_css_error');
		delete_option('thegem_generate_empty_custom_css_fail');
	}
}

function thegem_genearte_css_error() {
	if(isset($_GET['page']) && $_GET['page'] == 'thegem-theme-options' && get_option('thegem_genearte_css_error')) {
?>
	<div class="error">
		<p><?php printf(esc_html__('TheGem\'s styles cannot be customized because file "%s" cannot be modified. Please check your server\'s settings. Then click "Save Changes" button.', 'thegem'), get_stylesheet_directory() . '/css/custom.css'); ?></p>
	</div>
<?php
	}
}
add_action('admin_notices', 'thegem_genearte_css_error');

function thegem_activate() {
	global $pagenow;
	if(is_admin() && 'themes.php' == $pagenow && isset($_GET['activated'])) {
		wp_redirect(admin_url('admin.php?page=thegem-dashboard-welcome'));
		exit;
	}
}
add_action('after_setup_theme', 'thegem_activate', 11);

add_action('wp_ajax_thegem_submit_activation', 'thegem_submit_activation');

function thegem_get_activation_info() {
	$thegem_theme = wp_get_theme(wp_get_theme()->get('Template'));
	return $thegem_theme->get('Version');
}

function thegem_submit_activation() {
	delete_option('thegem_activation');
	if(!empty($_REQUEST['purchase_code'])) {
		$theme_options = get_option('thegem_theme_options');
		$theme_options['purchase_code'] = $_REQUEST['purchase_code'];
		update_option('thegem_theme_options', $theme_options);
		$response_p = wp_remote_get(add_query_arg(array('code' => $_REQUEST['purchase_code'], 'info'=>thegem_get_activation_info(), 'site_url' => get_site_url()), esc_url('http://democontent.codex-themes.com/av_validate_code.php')), array('timeout' => 20));

		if(is_wp_error($response_p)) {
			echo json_encode(array('status' => 0, 'message' => esc_html__('Some troubles with connecting to TheGem server.', 'thegem')));
		} else {
			$rp_data = json_decode($response_p['body'], true);
			if(is_array($rp_data) && isset($rp_data['result']) && $rp_data['result'] && isset($rp_data['item_id']) && $rp_data['item_id'] === '16061685') {
				$plugin_button_html = '<div class="activation-plugin-button">'.wp_kses(sprintf(__('<a href="%s">Begin installing plugins</a>', 'thegem'), admin_url('admin.php?page=install-required-plugins')), array('a' => array('href' => array(), 'class' => array()))).'</div>';
				echo json_encode(array('status' => 1, 'message' => esc_html__('Thank you, your purchase code is valid. TheGem has been activated.', 'thegem'), 'button' => $plugin_button_html));
				update_option('thegem_activation', 1);
				update_option('thegem_print_google_code', 1);
			} else {
				echo json_encode(array('status' => 0, 'message' => isset($rp_data['message']) ? $rp_data['message'] : esc_html__('The purchase code you have entered is not valid. TheGem has not been activated.', 'thegem')));
			}
		}
	} else {
		echo json_encode(array('status' => 0, 'message' => esc_html__('Purchase code is empty.', 'thegem')));
	}
	die(-1);
}

function thegem_check_activation($theme_options) {
	if(get_option('thegem_activation')) {
		if(empty($theme_options['purchase_code'])) {
			delete_option('thegem_activation');
		} elseif($theme_options['purchase_code'] !== thegem_get_option('purchase_code')) {
			delete_option('thegem_activation');

			$response_p = wp_remote_get(add_query_arg(array('code' => $theme_options['purchase_code'], 'info'=>thegem_get_activation_info(), 'site_url' => get_site_url()), esc_url('http://democontent.codex-themes.com/av_validate_code.php')), array('timeout' => 20));
			if(!is_wp_error($response_p)) {
				$rp_data = json_decode($response_p['body'], true);
				if(is_array($rp_data) && isset($rp_data['result']) && $rp_data['result'] && isset($rp_data['item_id']) && $rp_data['item_id'] === '16061685') {
					update_option('thegem_activation', 1);
				}
			}
		}
	} elseif(!empty($theme_options['purchase_code'])) {
		$response_p = wp_remote_get(add_query_arg(array('code' => $theme_options['purchase_code'], 'info'=>thegem_get_activation_info(), 'site_url' => get_site_url()), esc_url('http://democontent.codex-themes.com/av_validate_code.php')), array('timeout' => 20));
		if(!is_wp_error($response_p)) {
			$rp_data = json_decode($response_p['body'], true);
			if(is_array($rp_data) && isset($rp_data['result']) && $rp_data['result'] && isset($rp_data['item_id']) && $rp_data['item_id'] === '16061685') {
				update_option('thegem_activation', 1);
			}
		}
	}
}

function thegem_auto_check_activation_after_update() {
	$thegem_theme = wp_get_theme(wp_get_theme()->get('Template'));
	if (get_option('thegem_auto_check_activation_after_update',0)!=$thegem_theme->get('Version')) {
		$theme_options = get_option('thegem_theme_options');

		if (!is_array($theme_options) || !isset($theme_options['purchase_code'])) {
			return;
		}

		delete_option('thegem_activation');
		$response_p = wp_remote_get(add_query_arg(array('code' => $theme_options['purchase_code'], 'info'=>thegem_get_activation_info(), 'site_url' => get_site_url()), esc_url('http://democontent.codex-themes.com/av_validate_code.php')), array('timeout' => 20));
		if(!is_wp_error($response_p)) {
			$rp_data = json_decode($response_p['body'], true);
			if(is_array($rp_data) && isset($rp_data['result']) && $rp_data['result'] && isset($rp_data['item_id']) && $rp_data['item_id'] === '16061685') {
				update_option('thegem_activation', 1);
			}
		}

		update_option('thegem_auto_check_activation_after_update',$thegem_theme->get('Version'));
	}
}

thegem_auto_check_activation_after_update();

function thegem_activation_notice() {
	if(empty( $_COOKIE['thegem_activation'] )) return ;
	if(get_option('thegem_activation')) return ;
	if(defined('ENVATO_HOSTED_SITE') && thegem_get_purchase()) return ;
?>
<style>
	.thegem_license-activation-notice {
		position: relative;
	}
</style>
<script type="text/javascript">
(function ( $ ) {
	var setCookie = function ( c_name, value, exdays ) {
		var exdate = new Date();
		exdate.setDate( exdate.getDate() + exdays );
		var c_value = encodeURIComponent( value ) + ((null === exdays) ? "" : "; expires=" + exdate.toUTCString());
		document.cookie = c_name + "=" + c_value;
	};
	$( document ).on( 'click.thegem-notice-dismiss', '.thegem-notice-dismiss', function ( e ) {
		e.preventDefault();
		var $el = $( this ).closest('#thegem_license-activation-notice' );
		$el.fadeTo( 100, 0, function () {
			$el.slideUp( 100, function () {
				$el.remove();
			} );
		} );
		setCookie( 'thegem_activation', '1', 30 );
	} );
})( window.jQuery );
</script>
<?php
	if(!defined('ENVATO_HOSTED_SITE')) {
		echo '<div class="updated thegem_license-activation-notice" id="thegem_license-activation-notice"><p>' . sprintf( wp_kses(__( 'Welcome to TheGem! Would you like to import our awesome demos and take advantage of our amazing features? Please <a href="%s">activate</a> your copy of TheGem.', 'thegem' ), array('a' => array('href' => array()))), esc_url(admin_url('admin.php?page=thegem-dashboard-welcome')) ) . '</p>' . '<button type="button" class="notice-dismiss thegem-notice-dismiss"><span class="screen-reader-text">' . __( 'Dismiss this notice.', 'default' ) . '</span></button></div>';
	} else {
		echo '<div class="updated thegem_license-activation-notice" id="thegem_license-activation-notice"><p>' . sprintf( wp_kses(__( 'Welcome to TheGem! Would you like to import our awesome demos and take advantage of our amazing features? led. Please install "Envato WordPress Toolkit" plugin and fill <a href="%s">Envato "User Account Information"</a>.', 'thegem' ), array('a' => array('href' => array()))), esc_url(admin_url('admin.php?page=envato-wordpress-toolkit')) ) . '</p>' . '<button type="button" class="notice-dismiss thegem-notice-dismiss"><span class="screen-reader-text">' . __( 'Dismiss this notice.', 'default' ) . '</span></button></div>';
	}
}
add_action('admin_notices', 'thegem_activation_notice');

/*function thegem_theme_options_page_settings_block($type = 'default') {
	ob_start();
	$meta_box_funcs = array();
	$meta_box_funcs['thegem_page_title_settings_box'] = esc_html__('Page Title', 'thegem');
	$meta_box_funcs['thegem_page_header_settings_box'] = esc_html__('Page Header', 'thegem');
	$meta_box_funcs['thegem_page_footer_settings_box'] = esc_html__('Page Footer', 'thegem');
	$meta_box_funcs['thegem_page_sidebar_settings_box'] = esc_html__('Page Sidebar', 'thegem');
	if(thegem_is_plugin_active('thegem-elements/thegem-elements.php')) {
		$meta_box_funcs['thegem_page_slideshow_settings_box'] = esc_html__('Page Slideshow', 'thegem');
	}
	$meta_box_funcs['thegem_page_effects_settings_box'] = esc_html__('Additional Options', 'thegem');
	echo '<div id="thegem-custom-page-options-boxes">';
	foreach($meta_box_funcs as $func => $title) {
		echo '<div class="postbox theme-options-page-settings-box">';
		echo '<h3 class="hndle">'.$title.'</h3>';
		echo '<div class="inside">';
		call_user_func($func, 0, $type);
		echo '</div>';
		echo '</div>';
	}
	echo '</div>';
	$block = ob_get_clean();
	$block = str_replace(array('thegem_page_data', ' for="page_', ' id="page_', '$(\'#page_', '$(\'#wp-page_','hidden-by-title-style-'), array('thegem_page_data_options_'.$type, ' for="page_'.$type.'_', ' id="page_'.$type.'_', '$(\'#page_'.$type.'_', '$(\'#wp-page_'.$type.'_', 'options_'.$type.'_hidden-by-title-style-'), $block);
	$block = str_replace(array('id="page_'.$type.'_'.$type.'_'), array('id="page_'.$type.'_'), $block);
	echo $block;
}*/

function thegem_theme_options_get_page_settings($type) {
	$page_data = thegem_get_sanitize_options_page_data(get_option('thegem_options_page_settings_'.$type), $type);
	return array_map('stripslashes', $page_data);
}

function thegem_theme_options_set_page_settings($type, $data) {
	$page_data = thegem_get_sanitize_options_page_data($data, $type);
	update_option('thegem_options_page_settings_'.$type, $page_data);
}

function thegem_get_sanitize_options_page_data($data, $type = 'default') {
	$page_data = apply_filters('thegem_options_page_data_defaults', array(
		'title_show' => '1',
		'title_style' => '1',
		'title_template' => '',
		'title_xlarge' => '0',
		'title_use_page_settings' => '0',
		'title_background_type' => 'color',
		'title_background_image' => '',
		'title_background_image_repeat' => '',
		'title_background_position_x' => 'center',
		'title_background_position_y' => 'top',
		'title_background_size' => 'cover',
		'title_background_image_color' => '',
		'title_background_image_overlay' => '',
		'title_background_gradient_type' => 'linear',
		'title_background_gradient_angle' => '90',
		'title_background_gradient_position' => 'center center',
		'title_background_gradient_point1_color' => '#00BCD4BF',
		'title_background_gradient_point1_position' => '0',
		'title_background_gradient_point2_color' => '#354093BF',
		'title_background_gradient_point2_position' => '100',
		'title_background_parallax' => '',
		'title_background_color' => '#333144FF',
		'title_background_video_type' => '',
		'title_background_video' => '',
		'title_background_video_aspect_ratio' => '',
		'title_background_video_overlay_color' => '',
		'title_background_video_overlay_opacity' => '',
		'title_background_video_poster' => '',
		'title_menu_on_video' => '',
		'title_text_color' => '#FFFFFFFF',
		'title_excerpt_text_color' => '#FFFFFFFF',
		'title_title_width' => '',
		'title_excerpt_width' => '',
		'title_padding_top' => '80',
		'title_padding_top_tablet' => '80',
		'title_padding_top_mobile' => '80',
		'title_padding_bottom' => '80',
		'title_padding_bottom_tablet' => '80',
		'title_padding_bottom_mobile' => '80',
		'title_padding_left' => '0',
		'title_padding_left_tablet' => '0',
		'title_padding_left_mobile' => '0',
		'title_padding_right' => '0',
		'title_padding_right_tablet' => '0',
		'title_padding_right_mobile' => '0',
		'title_top_margin' => '0',
		'title_top_margin_tablet' => '0',
		'title_top_margin_mobile' => '0',
		'title_excerpt_top_margin' => '18',
		'title_excerpt_top_margin_tablet' => '18',
		'title_excerpt_top_margin_mobile' => '18',
		'title_breadcrumbs' => thegem_get_option('global_hide_breadcrumbs'),
		'title_alignment' => 'center',
		'breadcrumbs_default_color' => thegem_get_option('breadcrumbs_default_color'),
		'breadcrumbs_active_color' => thegem_get_option('breadcrumbs_active_color'),
		'breadcrumbs_hover_color' => thegem_get_option('breadcrumbs_hover_color'),
		'title_breadcrumbs_alignment' => 'center',

		'header_transparent' => '',
		'header_opacity' => '50',
		'header_menu_logo_light' => '',
		'header_hide_top_area' => !thegem_get_option('top_area_show'),
		'header_hide_top_area_tablet' => thegem_get_option('top_area_disable_tablet'),
		'header_hide_top_area_mobile' => thegem_get_option('top_area_disable_mobile'),
		'menu_show' => '1',
		'header_top_area_transparent' => '0',
		'header_top_area_opacity' => '50',
		'content_padding_top' => '135',
		'content_padding_top_tablet' => '',
		'content_padding_top_mobile' => '',
		'content_padding_bottom' => '110',
		'content_padding_bottom_tablet' => '',
		'content_padding_bottom_mobile' => '',
		'footer_custom_show' => thegem_get_option('custom_footer_enable'),
		'footer_custom' => thegem_get_option('custom_footer'),
		'footer_hide_default' => !thegem_get_option('footer_active'),
		'footer_hide_widget_area' => thegem_get_option('footer_widget_area_hide'),

		'main_background_color' => thegem_get_option('main_background_color'),
		'main_background_gradient_angle' => '90',
		'main_background_gradient_point1_color' => '#E9ECDAFF',
		'main_background_gradient_point1_position' => '0',
		'main_background_gradient_point2_color' => '#D5F6FAFF',
		'main_background_gradient_point2_position' => '100',
		'main_background_gradient_position' => '',
		'main_background_gradient_type' => 'linear',
		'main_background_image' => '',
		'main_background_image_color' => '',
		'main_background_image_overlay' => '',
		'main_background_image_repeat' => '0',
		'main_background_pattern' => '',
		'main_background_position_x' => 'center',
		'main_background_position_y' => 'center',
		'main_background_size' => 'auto',
		'main_background_type' => 'color',

		'effects_disabled' => '0',
		'effects_parallax_footer' => '',
		'effects_hide_header' => '0',
		'effects_hide_footer' => !thegem_get_option('footer'),

		'enable_page_preloader' => thegem_get_option('preloader'),

		'sidebar_show' => '0',
		'sidebar_position' => 'left',
		'sidebar_sticky' => '0',

	), $type);

	if($type == 'post') {
		$page_data['show_featured_content'] = 1;
	}

	if(is_array($data)) {
		$page_data = array_merge($page_data, $data);
	}

	$page_data['title_xlarge'] = $page_data['title_xlarge'] ? 1 : 0;
	$page_data['title_show'] = $page_data['title_show'] ? 1 : 0;
	$page_data['title_style'] = thegem_check_array_value(array('1', '2'), $page_data['title_style'], '1');
	$page_data['title_template'] = intval($page_data['title_template']) >= 0 ? intval($page_data['title_template']) : 0;
	$page_data['title_use_page_settings'] = $page_data['title_use_page_settings'] ? 1 : 0;
	$page_data['title_background_type'] = thegem_check_array_value(array('color', 'image', 'video', 'gradient'), $page_data['title_background_type'], 'color');
	$page_data['title_background_image'] = esc_url($page_data['title_background_image']);
	$page_data['title_background_parallax'] = $page_data['title_background_parallax'] ? 1 : 0;
	$page_data['title_background_color'] = sanitize_text_field($page_data['title_background_color']);
	$page_data['title_background_image_color'] = sanitize_text_field($page_data['title_background_image_color']);
	$page_data['title_background_image_overlay'] = sanitize_text_field($page_data['title_background_image_overlay']);
	$page_data['title_background_image_repeat'] = $page_data['title_background_image_repeat'] ? 1 : 0;
	$page_data['title_background_size'] = thegem_check_array_value(array('auto', 'cover', 'contain'), $page_data['title_background_size'], 'cover');
	$page_data['title_background_position_x'] = thegem_check_array_value(array('center', 'left', 'right'), $page_data['title_background_position_x'], 'center');
	$page_data['title_background_position_y'] = thegem_check_array_value(array('center', 'top', 'bottom'), $page_data['title_background_position_y'], 'top');
	$page_data['title_background_gradient_type'] = thegem_check_array_value(array('linear', 'circular'), $page_data['title_background_gradient_type'], 'linear');
	$page_data['title_background_gradient_angle'] = intval($page_data['title_background_gradient_angle']) >= 0 ? intval($page_data['title_background_gradient_angle']) : 0;
	$page_data['title_background_gradient_point1_color'] = sanitize_text_field($page_data['title_background_gradient_point1_color']);
	$page_data['title_background_gradient_point2_color'] = sanitize_text_field($page_data['title_background_gradient_point2_color']);
	$page_data['title_background_gradient_point1_position'] = intval($page_data['title_background_gradient_point1_position']) >= 0 ? intval($page_data['title_background_gradient_point1_position']) : 0;
	$page_data['title_background_gradient_point2_position'] = intval($page_data['title_background_gradient_point2_position']) >= 0 ? intval($page_data['title_background_gradient_point2_position']) : 100;
	$page_data['title_background_video_type'] = thegem_check_array_value(array('', 'youtube', 'vimeo', 'self'), $page_data['title_background_video_type'], '');
	$page_data['title_background_video'] = sanitize_text_field($page_data['title_background_video']);
	$page_data['title_background_video_aspect_ratio'] = sanitize_text_field($page_data['title_background_video_aspect_ratio']);
	$page_data['title_background_video_overlay_color'] = sanitize_text_field($page_data['title_background_video_overlay_color']);
	$page_data['title_background_video_overlay_opacity'] = sanitize_text_field($page_data['title_background_video_overlay_opacity']);
	$page_data['title_background_video_poster'] = esc_url($page_data['title_background_video_poster']);
	$page_data['title_text_color'] = sanitize_text_field($page_data['title_text_color']);
	$page_data['title_excerpt_text_color'] = sanitize_text_field($page_data['title_excerpt_text_color']);
	$page_data['title_title_width'] = intval($page_data['title_title_width']) >= 0 && $page_data['title_title_width'] !== '' ? intval($page_data['title_title_width']) : '';
	$page_data['title_excerpt_width'] = intval($page_data['title_excerpt_width']) >= 0 && $page_data['title_excerpt_width'] !== '' ? intval($page_data['title_excerpt_width']) : '';
	$page_data['title_top_margin'] = $page_data['title_top_margin'] !== '' ? intval($page_data['title_top_margin']) : '';
	$page_data['title_top_margin_tablet'] = $page_data['title_top_margin_tablet'] !== '' ? intval($page_data['title_top_margin_tablet']) : '';
	$page_data['title_top_margin_mobile'] = $page_data['title_top_margin_mobile'] !== '' ? intval($page_data['title_top_margin_mobile']) : '';
	$page_data['title_excerpt_top_margin'] = $page_data['title_excerpt_top_margin'] !== '' ? intval($page_data['title_excerpt_top_margin']) : '';
	$page_data['title_excerpt_top_margin_tablet'] = $page_data['title_excerpt_top_margin_tablet'] !== '' ? intval($page_data['title_excerpt_top_margin_tablet']) : '';
	$page_data['title_excerpt_top_margin_mobile'] = $page_data['title_excerpt_top_margin_mobile'] !== '' ? intval($page_data['title_excerpt_top_margin_mobile']) : '';
	$page_data['title_breadcrumbs'] = $page_data['title_breadcrumbs'] ? 1 : 0;
	$page_data['title_padding_top'] = intval($page_data['title_padding_top']) >= 0 ? intval($page_data['title_padding_top']) : 0;
	$page_data['title_padding_top_tablet'] = intval($page_data['title_padding_top_tablet']) >= 0 ? intval($page_data['title_padding_top_tablet']) : 0;
	$page_data['title_padding_top_mobile'] = intval($page_data['title_padding_top_mobile']) >= 0 ? intval($page_data['title_padding_top_mobile']) : 0;
	$page_data['title_padding_bottom'] = intval($page_data['title_padding_bottom']) >= 0 ? intval($page_data['title_padding_bottom']) : 0;
	$page_data['title_padding_bottom_tablet'] = intval($page_data['title_padding_bottom_tablet']) >= 0 ? intval($page_data['title_padding_bottom_tablet']) : 0;
	$page_data['title_padding_bottom_mobile'] = intval($page_data['title_padding_bottom_mobile']) >= 0 ? intval($page_data['title_padding_bottom_mobile']) : 0;
	$page_data['title_padding_left'] = intval($page_data['title_padding_left']) >= 0 ? intval($page_data['title_padding_left']) : 0;
	$page_data['title_padding_left_tablet'] = intval($page_data['title_padding_left_tablet']) >= 0 ? intval($page_data['title_padding_left_tablet']) : 0;
	$page_data['title_padding_left_mobile'] = intval($page_data['title_padding_left_mobile']) >= 0 ? intval($page_data['title_padding_left_mobile']) : 0;
	$page_data['title_padding_right'] = intval($page_data['title_padding_right']) >= 0 ? intval($page_data['title_padding_right']) : 0;
	$page_data['title_padding_right_tablet'] = intval($page_data['title_padding_right_tablet']) >= 0 ? intval($page_data['title_padding_right_tablet']) : 0;
	$page_data['title_padding_right_mobile'] = intval($page_data['title_padding_right_mobile']) >= 0 ? intval($page_data['title_padding_right_mobile']) : 0;
	$page_data['title_alignment'] = thegem_check_array_value(array('', 'center', 'left', 'right'), $page_data['title_alignment'], '');
	$page_data['breadcrumbs_default_color'] = sanitize_text_field($page_data['breadcrumbs_default_color']);
	$page_data['breadcrumbs_active_color'] = sanitize_text_field($page_data['breadcrumbs_active_color']);
	$page_data['breadcrumbs_hover_color'] = sanitize_text_field($page_data['breadcrumbs_hover_color']);
	$page_data['title_breadcrumbs_alignment'] = thegem_check_array_value(array('center', 'left', 'right'), $page_data['title_breadcrumbs_alignment'], 'center');

	$page_data['header_transparent'] = $page_data['header_transparent'] ? 1 : 0;
	$page_data['header_opacity'] = intval($page_data['header_opacity']) >= 0 && intval($page_data['header_opacity']) <= 100 ? intval($page_data['header_opacity']) : 0;
	$page_data['header_top_area_transparent'] = $page_data['header_top_area_transparent'] ? 1 : 0;
	$page_data['header_top_area_opacity'] = intval($page_data['header_top_area_opacity']) >= 0 && intval($page_data['header_top_area_opacity']) <= 100 ? intval($page_data['header_top_area_opacity']) : 0;
	$page_data['header_menu_logo_light'] = $page_data['header_menu_logo_light'] ? 1 : 0;
	$page_data['header_hide_top_area'] = $page_data['header_hide_top_area'] ? 1 : 0;
	$page_data['header_hide_top_area_tablet'] = $page_data['header_hide_top_area_tablet'] ? 1 : 0;
	$page_data['header_hide_top_area_mobile'] = $page_data['header_hide_top_area_mobile'] ? 1 : 0;
	$page_data['menu_show'] = $page_data['menu_show'] ? 1 : 0;
	$page_data['content_padding_top'] = intval($page_data['content_padding_top']) >= 0 && $page_data['content_padding_top'] !== '' ? intval($page_data['content_padding_top']) : '';
	$page_data['content_padding_top_tablet'] = intval($page_data['content_padding_top_tablet']) >= 0 && $page_data['content_padding_top_tablet'] !== '' ? intval($page_data['content_padding_top_tablet']) : '';
	$page_data['content_padding_top_mobile'] = intval($page_data['content_padding_top_mobile']) >= 0 && $page_data['content_padding_top_mobile'] !== '' ? intval($page_data['content_padding_top_mobile']) : '';
	$page_data['content_padding_bottom'] = intval($page_data['content_padding_bottom']) >= 0 && $page_data['content_padding_bottom'] !== '' ? intval($page_data['content_padding_bottom']) : '';
	$page_data['content_padding_bottom_tablet'] = intval($page_data['content_padding_bottom_tablet']) >= 0 && $page_data['content_padding_bottom_tablet'] !== '' ? intval($page_data['content_padding_bottom_tablet']) : '';
	$page_data['content_padding_bottom_mobile'] = intval($page_data['content_padding_bottom_mobile']) >= 0 && $page_data['content_padding_bottom_mobile'] !== '' ? intval($page_data['content_padding_bottom_mobile']) : '';
	$page_data['footer_custom_show'] = $page_data['footer_custom_show'] ? 1 : 0;
	$page_data['footer_custom'] = intval($page_data['footer_custom']) >= 0 ? intval($page_data['footer_custom']) : 0;
	$page_data['footer_hide_default'] = $page_data['footer_hide_default'] ? 1 : 0;
	$page_data['footer_hide_widget_area'] = $page_data['footer_hide_widget_area'] ? 1 : 0;

	$page_data['main_background_type'] = thegem_check_array_value(array('color', 'image', 'pattern', 'gradient'), $page_data['main_background_type'], 'color');
	$page_data['main_background_image'] = esc_url($page_data['main_background_image']);
	$page_data['main_background_color'] = sanitize_text_field($page_data['main_background_color']);
	$page_data['main_background_image_color'] = sanitize_text_field($page_data['main_background_image_color']);
	$page_data['main_background_image_overlay'] = sanitize_text_field($page_data['main_background_image_overlay']);
	$page_data['main_background_image_repeat'] = $page_data['main_background_image_repeat'] ? 1 : 0;
	$page_data['main_background_size'] = thegem_check_array_value(array('auto', 'cover', 'contain'), $page_data['main_background_size'], 'auto');
	$page_data['main_background_position_x'] = thegem_check_array_value(array('center', 'left', 'right'), $page_data['main_background_position_x'], 'center');
	$page_data['main_background_position_y'] = thegem_check_array_value(array('center', 'top', 'bottom'), $page_data['main_background_position_y'], 'center');
	$page_data['main_background_gradient_type'] = thegem_check_array_value(array('linear', 'circular'), $page_data['main_background_gradient_type'], 'linear');
	$page_data['main_background_gradient_angle'] = intval($page_data['main_background_gradient_angle']) >= 0 ? intval($page_data['main_background_gradient_angle']) : 0;
	$page_data['main_background_gradient_point1_color'] = sanitize_text_field($page_data['main_background_gradient_point1_color']);
	$page_data['main_background_gradient_point2_color'] = sanitize_text_field($page_data['main_background_gradient_point2_color']);
	$page_data['main_background_gradient_point1_position'] = intval($page_data['main_background_gradient_point1_position']) >= 0 ? intval($page_data['main_background_gradient_point1_position']) : 0;
	$page_data['main_background_gradient_point2_position'] = intval($page_data['main_background_gradient_point2_position']) >= 0 ? intval($page_data['main_background_gradient_point2_position']) : 100;
	$page_data['main_background_pattern'] = esc_url($page_data['main_background_pattern']);

	$page_data['effects_disabled'] = $page_data['effects_disabled'] ? 1 : 0;
	$page_data['effects_parallax_footer'] = $page_data['effects_parallax_footer'] ? 1 : 0;
	$page_data['effects_hide_header'] = $page_data['effects_hide_header'] ? 1 : 0;
	$page_data['effects_hide_footer'] = $page_data['effects_hide_footer'] ? 1 : 0;

	$page_data['enable_page_preloader'] = $page_data['enable_page_preloader'] ? 1 : 0;

	$page_data['sidebar_show'] = $page_data['sidebar_show'] ? 1 : 0;
	$page_data['sidebar_position'] = thegem_check_array_value(array('left', 'right'), $page_data['sidebar_position'], 'left');
	$page_data['sidebar_sticky'] = $page_data['sidebar_sticky'] ? 1 : 0;

	if($type == 'post') {
		$page_data['show_featured_content'] = $page_data['show_featured_content'] ? 1 : 0;
	}

	return apply_filters('thegem_options_page_data', $page_data, $type);

}

function thegem_generate_empty_custom_css() {
	thegem_get_option(false, false, false, true);
	ob_start();
	thegem_custom_fonts();
	require get_template_directory() . '/inc/custom-css.php';
	if(file_exists(get_stylesheet_directory() . '/inc/custom-css.php') && get_stylesheet_directory() != get_template_directory()) {
		require get_stylesheet_directory() . '/inc/custom-css.php';
	}
	$custom_css = ob_get_clean();
	ob_start();
	require get_template_directory() . '/inc/style-editor-css.php';
	$editor_css = ob_get_clean();
	$action = array('action');
	$url = wp_nonce_url('admin.php?page=thegem-theme-options','thegem-theme-options');
	if(WP_Filesystem()) {
		global $wp_filesystem;
		$old_name = thegem_get_custom_css_filename();
		$new_name = thegem_generate_custom_css_filename();
		if(!$wp_filesystem->put_contents($wp_filesystem->find_folder(get_stylesheet_directory()) . 'css/'.$new_name.'.css', $custom_css) && get_option('thegem_custom_css_filename')) {
			update_option('thegem_generate_empty_custom_css_fail', 1);
		} else {
			$wp_filesystem->put_contents($wp_filesystem->find_folder(get_template_directory()) . 'css/style-editor.css', $editor_css);
			$custom_css_files = glob(get_template_directory().'/css/custom-*.css');
			foreach($custom_css_files as $file) {
				if(basename($file, '.css') != $new_name) {
					$wp_filesystem->delete($wp_filesystem->find_folder(get_stylesheet_directory()) . 'css/'.basename($file, '.css').'.css', $custom_css);
				}
			}
			thegem_save_custom_css_filename($new_name);
			delete_option('thegem_generate_empty_custom_css_fail');
		}
	} elseif(get_option('thegem_custom_css_filename')) {
		update_option('thegem_generate_empty_custom_css_fail', 1);
	}
}

function thegem_generate_empty_custom_css_notice() {
	if(get_option('thegem_generate_empty_custom_css_fail', 0)) {
?>
	<div class="error thegem-custom-css-regenerate-message" id="thegem-custom-css-generation-error">
		<p><?php printf(wp_kses(__('WARNING: custom.css file is missing in your TheGem installation. Custom.css is important for proper functioning of TheGem. <a href="'.admin_url('admin.php?page=thegem-theme-options').'#/extras/panel.extra_options:regenerateCss">Please regenerate it now.</a> All your settings will remain, this action will not affect your setup.', 'thegem'), array('a' => array('href' => array(), 'onclick' => array(''))))); ?></p>
	</div>
<?php
	$thegem_theme = wp_get_theme(wp_get_theme()->get('Template'));

		if (get_option('thegem_generate_empty_css_forced_redirect_done',0)!=$thegem_theme->get('Version')) {
			$regenerateUrl = admin_url('admin.php?page=thegem-theme-options').'#/extras/panel.extra_options:regenerateEmptyCss';
			wp_register_script( 'thegem_generate_empty_css_forced_redirect', '');
			wp_enqueue_script( 'thegem_generate_empty_css_forced_redirect' );
			wp_add_inline_script('thegem_generate_empty_css_forced_redirect','window.location.href="'.$regenerateUrl.'";');
		}
	/*
	$emptyCssUrl = admin_url('admin.php?page=thegem-theme-options2').'#/extras/panel.extra_options:regenerateEmptyCss';
		wp_add_inline_script();
	*/
	}
}
add_action('admin_notices', 'thegem_generate_empty_custom_css_notice');

add_filter( 'template_include', 'thegem_header_test_template', 99 );

function thegem_header_test_template( $template ) {
	if( !empty($_REQUEST['thegem_header_test'])) {
		$new_template = locate_template( array( 'header-test.php' ) );
		if ( '' != $new_template ) {
			return $new_template ;
		}
	}

	return $template;
}

add_filter( 'show_admin_bar', 'thegem_header_test_hide_admin_bar' );
function thegem_header_test_hide_admin_bar( $show_admin_bar ) {
	if( !is_admin() && !empty($_REQUEST['thegem_header_test'])) {
		$show_admin_bar = false;
	}

	return $show_admin_bar;
}

function thegem_get_preview_option( $options, $option, $default = false ) {
	return isset($options[$option]) ? $options[$option] : thegem_get_option($option, $default);
}

function thegem_preview_menu_html($options = array()) {
?>
<ul id="primary-menu" class="nav-menu styled no-responsive<?php echo(thegem_get_preview_option($options, 'mobile_menu_layout') == 'default' ? ' dl-menu' : ''); ?>">
	<li class="menu-item current-menu-ancestor current-menu-parent menu-item-has-children menu-item-parent megamenu-first-element menu-item-current">
		<a href="#">Some</a><span class="menu-item-parent-toggle"></span>
		<ul class="sub-menu styled dl-submenu">
			<li class="menu-item current-menu-ancestor current-menu-parent menu-item-has-children menu-item-parent megamenu-first-element menu-item-current">
				<a href="#">Level 2 Item #1</a><span class="menu-item-parent-toggle"></span>
				<ul class="sub-menu styled dl-submenu-disabled">
					<li class="dl-back"><a href="#">Back</a></li>
					<li class="menu-item megamenu-first-element"><a href="#">Level 3 Item #1</a></li>
					<li class="menu-item current-menu-item megamenu-first-element menu-item-active"><a href="#">Level 3 Item #2</a></li>
					<li class="menu-item megamenu-first-element"><a href="#">Level 3 Item #3</a></li>
				</ul>
			</li>
			<li class="menu-item megamenu-first-element"><a href="#">Level 2 Item #2</a></li>
			<li class="menu-item megamenu-first-element"><a href="#">Level 2 Item #3</a></li>
			<li class="menu-item megamenu-first-element"><a href="#">Level 2 Item #4</a></li>
		</ul>
	</li>
	<li class="menu-item megamenu-first-element"><a href="#">Dummy</a></li>
	<?php if(thegem_get_preview_option($options, 'logo_position') == 'menu_center' && thegem_get_preview_option($options, 'header_layout') == 'default') : ?>
		<li class="menu-item-logo"><?php thegem_preview_logo_html(thegem_get_preview_option($options, 'header_style')); ?></li>
	<?php endif; ?>
	<li class="menu-item megamenu-first-element"><a href="#">Menu</a></li>
	<li class="menu-item megamenu-first-element"><a href="#">Items</a></li>
	<?php if(thegem_get_preview_option($options, 'header_layout') == 'fullwidth_hamburger') : ?>
		<li class="menu-item menu-item-widgets">
			<div class="vertical-minisearch">
				<form role="search" id="searchform" class="sf" action="#" method="GET">
					<input id="searchform-input" class="sf-input" type="text" placeholder="<?php esc_html_e('Search...', 'thegem'); ?>" name="s">
					<span class="sf-submit-icon"></span>
					<input id="searchform-submit" class="sf-submit" type="submit" value="">
				</form>
			</div>
			<div class="menu-item-socials socials-colored">
				<div class="socials inline-inside">
					<a class="socials-item" href="#" target="_blank" title="Facebook"><i class="socials-item-icon facebook social-item-rounded"></i></a>
					<a class="socials-item" href="#" target="_blank" title="LinkedIn"><i class="socials-item-icon linkedin social-item-rounded"></i></a>
					<a class="socials-item" href="#" target="_blank" title="Twitter"><i class="socials-item-icon twitter social-item-rounded"></i></a>
					<a class="socials-item" href="#" target="_blank" title="Instagram"><i class="socials-item-icon instagram social-item-rounded"></i></a>
					<a class="socials-item" href="#" target="_blank" title="Pinterest"><i class="socials-item-icon pinterest social-item-rounded"></i></a>
					<a class="socials-item" href="#" target="_blank" title="YouTube"><i class="socials-item-icon youtube social-item-rounded"></i></a>
				</div>
			</div>
		</li>
	<?php endif; ?>
</ul>
<?php
}
function thegem_preview_logo_html($header_style = false) {
?>
<div class="site-logo" style="width:164px;">
	<a href="#" rel="home">
		<span class="logo"><img src="<?php echo esc_url(get_template_directory_uri().'/images/'.($header_style == 4 ? 'default-logo-light' : 'default-logo').'.svg'); ?>" alt="<?php echo esc_attr(get_bloginfo( 'name', 'display' )); ?>" style="width:164px;" class="default"/></span>
	</a>
</div>
<?php
}
function thegem_before_perspective_nav_menu_preview($options) {
	if (thegem_get_preview_option($options, 'mobile_menu_layout') == 'overlay') {
		echo '<div class="overlay-menu-wrapper"><div class="overlay-menu-table"><div class="overlay-menu-row"><div class="overlay-menu-cell">';
	}
	if (thegem_get_preview_option($options, 'mobile_menu_layout') == 'slide-horizontal') {
		echo '<div class="mobile-menu-slide-wrapper left"><button class="mobile-menu-slide-close"></button>';
	}
	if (thegem_get_preview_option($options, 'mobile_menu_layout') == 'slide-vertical') {
		echo '<div class="mobile-menu-slide-wrapper top"><button class="mobile-menu-slide-close"></button>';
	}
	echo '<button class="perspective-menu-close'.(thegem_get_preview_option($options, 'hamburger_menu_icon_size') ? ' toggle-size-small' : '').'"></button>';
}
function thegem_after_perspective_nav_menu_preview($options) {
	if (thegem_get_preview_option($options, 'mobile_menu_layout') == 'overlay') {
		echo '</div></div></div></div>';
	}
	if (thegem_get_preview_option($options, 'mobile_menu_layout') == 'slide-horizontal') {
		echo '</div>';
	}
	if (thegem_get_preview_option($options, 'mobile_menu_layout') == 'slide-vertical') {
		echo '</div>';
	}
}
function thegem_before_header_preview($options) {
	if (thegem_get_preview_option($options, 'header_layout') == 'overlay' || thegem_get_preview_option($options, 'mobile_menu_layout') == 'overlay') {
		echo '<div class="menu-overlay"></div>';
	}
}
function thegem_perspective_menu_buttons_preview($options) {
	echo '<div id="perspective-menu-buttons" class="primary-navigation">';
	$minicart_items = '';
	echo '<div class="hamburger-group'.(thegem_get_preview_option($options, 'hamburger_menu_icon_size') ? ' hamburger-size-small hamburger-size-small-original' : '').(thegem_get_preview_option($options, 'hamburger_menu_cart_position') ? ' hamburger-with-cart' : '').'">';
	echo '<button class="perspective-toggle'.(thegem_get_preview_option($options, 'hamburger_menu_icon_size') ? ' toggle-size-small toggle-size-small-original' : '').'">' . esc_html('Primary Menu', 'thegem') . '<span class="menu-line-1"></span><span class="menu-line-2"></span><span class="menu-line-3"></span></button>';
	if(thegem_get_preview_option($options, 'logo_position') == 'right' && $minicart_items) {
		echo $minicart_items;
	}
	echo '<button class="menu-toggle dl-trigger">' . esc_html('Primary Menu', 'thegem') . '<span class="menu-line-1"></span><span class="menu-line-2"></span><span class="menu-line-3"></span></button>';
	echo '</div>';
	echo '</div>';
}
function thegem_before_nav_menu_preview($options) {
	echo '<button class="menu-toggle dl-trigger">' . esc_html('Primary Menu', 'thegem') . '<span class="menu-line-1"></span><span class="menu-line-2"></span><span class="menu-line-3"></span></button>';

	if (thegem_get_preview_option($options, 'header_layout') == 'fullwidth_hamburger' || thegem_get_preview_option($options, 'header_layout') == 'overlay') {
		$minicart_items = '';
		echo '<div class="hamburger-group'.(thegem_get_preview_option($options, 'hamburger_menu_icon_size') ? ' hamburger-size-small hamburger-size-small-original' : '').(thegem_get_preview_option($options, 'hamburger_menu_cart_position') ? ' hamburger-with-cart' : '').'">';
		if (thegem_get_preview_option($options, 'header_layout') == 'fullwidth_hamburger') {
			echo '<button class="hamburger-toggle">' . esc_html('Primary Menu', 'thegem') . '<span class="menu-line-1"></span><span class="menu-line-2"></span><span class="menu-line-3"></span></button>';
		}
		if (thegem_get_preview_option($options, 'header_layout') == 'overlay') {
			echo '<button class="overlay-toggle '.(thegem_get_preview_option($options, 'hamburger_menu_icon_size') ? ' toggle-size-small toggle-size-small-original' : '').'">' . esc_html('Primary Menu', 'thegem') . '<span class="menu-line-1"></span><span class="menu-line-2"></span><span class="menu-line-3"></span></button>';
		}
		if($minicart_items && thegem_get_preview_option($options, 'logo_position') == 'right') {
			echo $minicart_items;
		}
		echo '</div>';
	}
	if (thegem_get_preview_option($options, 'header_layout') == 'overlay' || thegem_get_preview_option($options, 'mobile_menu_layout') == 'overlay') {
		echo '<div class="overlay-menu-wrapper"><div class="overlay-menu-table"><div class="overlay-menu-row"><div class="overlay-menu-cell">';
	}
	if (thegem_get_preview_option($options, 'header_layout') == 'perspective') {
		echo '<button class="perspective-toggle'.(thegem_get_preview_option($options, 'hamburger_menu_icon_size') ? ' toggle-size-small toggle-size-small-original' : '').'">' . esc_html('Primary Menu', 'thegem') . '<span class="menu-line-1"></span><span class="menu-line-2"></span><span class="menu-line-3"></span></button>';
	}
	if (thegem_get_preview_option($options, 'mobile_menu_layout') == 'slide-horizontal') {
		echo '<div class="mobile-menu-slide-wrapper left"><button class="mobile-menu-slide-close"></button>';
	}
	if (thegem_get_preview_option($options, 'mobile_menu_layout') == 'slide-vertical') {
		echo '<div class="mobile-menu-slide-wrapper top"><button class="mobile-menu-slide-close"></button>';
	}
}
function thegem_after_nav_menu_preview($options) {
	if (thegem_get_preview_option($options, 'header_layout') == 'overlay' || thegem_get_preview_option($options, 'mobile_menu_layout') == 'overlay') {
		echo '</div></div></div></div>';
	}
	if (thegem_get_preview_option($options, 'mobile_menu_layout') == 'slide-horizontal') {
		echo '</div>';
	}
	if (thegem_get_preview_option($options, 'mobile_menu_layout') == 'slide-vertical') {
		echo '</div>';
	}
}

function thegem_header_preview_scripts() {
	if(!is_admin() && !empty($_REQUEST['thegem_header_test'])) {
		wp_dequeue_style('thegem-custom');
		wp_enqueue_style('thegem-custom', get_template_directory_uri() . '/css/header-custom.css', array('thegem-style'));
		wp_register_style('thegem-preview-custom-menu-1', get_template_directory_uri() . '/css/header-preview/menu-colors-1.css');
		wp_register_style('thegem-preview-custom-menu-2', get_template_directory_uri() . '/css/header-preview/menu-colors-2.css');
		wp_register_style('thegem-preview-custom-menu-3', get_template_directory_uri() . '/css/header-preview/menu-colors-3.css');
		wp_register_style('thegem-preview-custom-menu-4', get_template_directory_uri() . '/css/header-preview/menu-colors-4.css');
		wp_register_style('thegem-preview-custom-menu-overlay', get_template_directory_uri() . '/css/header-preview/menu-colors-overlay.css');
		wp_register_style('thegem-preview-custom-top-area-1', get_template_directory_uri() . '/css/header-preview/top-area-colors-1.css');
		wp_register_style('thegem-preview-custom-top-area-2', get_template_directory_uri() . '/css/header-preview/top-area-colors-2.css');
		wp_register_style('thegem-preview-custom-top-area-3', get_template_directory_uri() . '/css/header-preview/top-area-colors-3.css');
		wp_register_style('thegem-layout-perspective', get_template_directory_uri() . '/css/thegem-layout-perspective.css');
		wp_register_style('thegem-preview-mobile-default-dark', get_template_directory_uri() . '/css/header-preview/mobile-default-styles-dark.css');
		wp_register_style('thegem-preview-mobile-slide-light', get_template_directory_uri() . '/css/header-preview/mobile-slide-styles-light.css');
		wp_register_style('thegem-preview-mobile-slide-dark', get_template_directory_uri() . '/css/header-preview/mobile-slide-styles-dark.css');
		wp_register_style('thegem-preview-mobile-overlay-light', get_template_directory_uri() . '/css/header-preview/mobile-overlay-styles-light.css');
		wp_register_style('thegem-preview-mobile-overlay-dark', get_template_directory_uri() . '/css/header-preview/mobile-overlay-styles-dark.css');
		wp_enqueue_script('jquery-dlmenu', get_template_directory_uri() . '/js/jquery.dlmenu.js', array('jquery'), false, true);
	}
}
add_action('wp_enqueue_scripts', 'thegem_header_preview_scripts', 4);

function thegem_header_preview_hide_vc_styles($css) {
	if(!is_admin() && !empty($_REQUEST['thegem_header_test'])) {
		$css = '';
	}
	return $css;
}
add_action('vc_shortcodes_custom_css', 'thegem_header_preview_hide_vc_styles');
add_action('vc_post_custom_css', 'thegem_header_preview_hide_vc_styles');


function thegem_apply_options_page_settings($type, $options, $offset = null, $workEndTime = null) {
	if (!$workEndTime) {
		$workEndTime = time() + 20;
	}

	if (!$offset) {
		$offset = 0;
	}

	$workChunkSize = 50;

	if(in_array($type, array('page', 'post', 'thegem_pf_item', 'product'))) {
		$posts = get_posts(array(
			'numberposts' => $workChunkSize,
			'post_type' => $type,
			'orderby' => 'ID',
			'offset' => $offset
		));

		if (empty($posts)) {
			return false;
		}

		foreach($posts as $post) {
			$meta = thegem_get_sanitize_admin_page_data($post->ID);
			$meta = thegem_update_page_data_from_options($meta, $options);
			update_post_meta($post->ID, 'thegem_page_data', $meta);
			if($type == 'post') {
				$meta = thegem_get_sanitize_admin_post_elements_data($post->ID);
				$meta = thegem_update_post_page_elements_data_from_options($meta);
				update_post_meta($post->ID, 'thegem_post_page_elements_data', $meta);
				$meta = thegem_get_sanitize_admin_post_data($post->ID);
				$meta['show_featured_content'] = 'default';
				update_post_meta($post->ID, 'thegem_post_general_item_data', $meta);
			}
			if($type == 'thegem_pf_item') {
				$meta = thegem_get_sanitize_pf_item_elements_data($post->ID);
				$meta = thegem_update_pf_item_page_elements_data_from_options($meta);
				update_post_meta($post->ID, 'thegem_pf_item_page_elements_data', $meta);
			}

			$offset++;
			if (time()>=$workEndTime) {
				return $offset;
			}
		}

		unset($posts);
	}

	if($type == 'cats') {
		$terms = get_terms(array(
			'taxonomy' => array('post_tag', 'category'),
			'hide_empty' => false,
			'orderby' => 'id',
			'offset' => $offset,
			'number' => $workChunkSize
		));

		if (empty($terms)) {
			return false;
		}

		foreach($terms as $term) {
			$meta = thegem_get_sanitize_admin_page_data($term->term_id, array(), 'term');
			$meta = thegem_update_page_data_from_options($meta, $options);
			update_term_meta($term->term_id, 'thegem_page_data', $meta);

			$offset++;
			if (time()>=$workEndTime) {
				return $offset;
			}
		}

		unset($terms);
	}

	if($type == 'product_cats') {
		$terms = get_terms(array(
			'taxonomy' => array('product_cat', 'product_tag'),
			'hide_empty' => false,
			'orderby' => 'id',
			'offset' => $offset,
			'number' => $workChunkSize
		));

		if (empty($terms)) {
			return false;
		}

		foreach($terms as $term) {
			$meta = thegem_get_sanitize_admin_page_data($term->term_id, array(), 'term');
			$meta = thegem_update_page_data_from_options($meta, $options);
			update_term_meta($term->term_id, 'thegem_page_data', $meta);

			$offset++;
			if (time()>=$workEndTime) {
				return $offset;
			}
		}

		unset($terms);
	}

	return thegem_apply_options_page_settings($type, $options, $offset, $workEndTime);
}

function thegem_update_page_data_from_options($data, $options) {
	foreach($options as $option => $value) {
		switch ($option) {
			case 'title_show':
				$data[$option] = 'default';
				break;
			case 'header_hide_top_area':
				$data[$option] = 'default';
				break;
			case 'menu_show':
				$data[$option] = 'default';
				break;
			case 'footer_custom_show':
				$data[$option] = 'default';
				break;
			case 'footer_hide_default':
				$data[$option] = 'default';
				break;
			case 'footer_hide_widget_area':
				$data[$option] = 'default';
				break;
			case 'effects_hide_header':
				$data[$option] = 'default';
				break;
			case 'effects_hide_footer':
				$data[$option] = 'default';
				break;
			case 'sidebar_show':
				$data[$option] = 'default';
				break;
			case 'enable_page_preloader':
				$data[$option] = 'default';
				break;
			default:
				$data[$option] = $value;
		}
	}
	return $data;
}

function thegem_update_post_page_elements_data_from_options($data) {
	$data = array(
		'post_elements' => 'default',
		'show_author' => thegem_get_option('show_author'),
		'blog_hide_author' => thegem_get_option('blog_hide_author'),
		'blog_hide_date' => thegem_get_option('blog_hide_date'),
		'blog_hide_date_in_blog_cat' => thegem_get_option('blog_hide_date_in_blog_cat'),
		'blog_hide_categories' => thegem_get_option('blog_hide_categories'),
		'blog_hide_tags' => thegem_get_option('blog_hide_tags'),
		'blog_hide_comments' => thegem_get_option('blog_hide_comments'),
		'blog_hide_likes' => thegem_get_option('blog_hide_likes'),
		'blog_hide_navigation' => thegem_get_option('blog_hide_navigation'),
		'blog_hide_socials' => thegem_get_option('blog_hide_socials'),
		'blog_hide_realted' => thegem_get_option('blog_hide_realted'),
	);
	return $data;
}

function thegem_update_pf_item_page_elements_data_from_options($data) {
	$data = array(
		'portfolio_page_elements' => 'default',
		'portfolio_hide_top_navigation' => thegem_get_option('portfolio_hide_top_navigation'),
		'portfolio_hide_date' => thegem_get_option('portfolio_hide_date'),
		'portfolio_hide_sets' => thegem_get_option('portfolio_hide_sets'),
		'portfolio_hide_likes' => thegem_get_option('portfolio_hide_likes'),
		'portfolio_hide_socials' => thegem_get_option('portfolio_hide_socials'),
		'portfolio_hide_bottom_navigation' => thegem_get_option('portfolio_hide_bottom_navigation'),
	);
	return $data;
}
