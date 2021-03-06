<?php
if ( ! defined( 'ABSPATH' ) ) {
	die( '-1' );
}

/**
 * Shortcode attributes
 * @var $atts
 * @var $el_id
 * @var $el_class
 * @var $width
 * @var $css
 * @var $offset
 * @var $content - shortcode content
 * @var $css_animation
 * Shortcode class
 * @var $this WPBakeryShortCode_VC_Column
 */
$el_class = $el_id = $width = $parallax_speed_bg = $parallax_speed_video = $parallax = $parallax_image = $video_bg = $video_bg_url = $video_bg_parallax = $css = $offset = $css_animation = '';
$output = '';
$disable_custom_paddings_mobile = $disable_custom_paddings_tablet = '';
$background_style = $background_position_horizontal = $background_position_vertical = '';
$link_css = $output = $uniqid = '';
$atts = vc_map_get_attributes( $this->getShortcode(), $atts );
extract( $atts );

$uniqid = uniqid('thegem-custom-') .rand(1,9999);

wp_enqueue_script( 'wpb_composer_front_js' );

$width = wpb_translateColumnWidthToSpan( $width );
$width = vc_column_offset_class_merge( $offset, $width );

$css_classes = array(
	$this->getExtraClass( $el_class ) . $this->getCSSAnimation( $css_animation ),
	'wpb_column',
	'vc_column_container',
	$width,
);

$css_classes[] = $uniqid;

if ( vc_shortcode_custom_css_has_property( $css, array(
		'border',
		'background',
	) ) || $video_bg || $parallax
) {
	$css_classes[] = 'vc_col-has-fill';
}

if ($disable_custom_paddings_tablet) {
	$css_classes[] = 'disable-custom-paggings-tablet';
}
if ($disable_custom_paddings_mobile) {
	$css_classes[] = 'disable-custom-paggings-mobile';
}

$wrapper_attributes = array();

$has_video_bg = ( ! empty( $video_bg ) && ! empty( $video_bg_url ) && vc_extract_youtube_id( $video_bg_url ) );

$parallax_speed = $parallax_speed_bg;
if ( $has_video_bg ) {
	$parallax = $video_bg_parallax;
	$parallax_speed = $parallax_speed_video;
	$parallax_image = $video_bg_url;
	$css_classes[] = 'vc_video-bg-container';

	$output_not_consent = '';
	if (class_exists('TheGemGdpr')) {
		$output_not_consent = TheGemGdpr::getInstance()->replace_disallowed_content('', TheGemGdpr::CONSENT_NAME_YOUTUBE);
	}

	if (empty($output_not_consent)) {
	wp_enqueue_script( 'vc_youtube_iframe_api_js' );
}
}

if ( ! empty( $parallax ) ) {
	wp_enqueue_script( 'vc_jquery_skrollr_js' );
	$wrapper_attributes[] = 'data-vc-parallax="' . esc_attr( $parallax_speed ) . '"'; // parallax speed
	$css_classes[] = 'vc_general vc_parallax vc_parallax-' . $parallax;
	if ( false !== strpos( $parallax, 'fade' ) ) {
		$css_classes[] = 'js-vc_parallax-o-fade';
		$wrapper_attributes[] = 'data-vc-parallax-o-fade="on"';
	} elseif ( false !== strpos( $parallax, 'fixed' ) ) {
		$css_classes[] = 'js-vc_parallax-o-fixed';
	}
}

if ( ! empty( $parallax_image ) ) {
	if ( $has_video_bg ) {
		$parallax_image_src = $parallax_image;
	} else {
		$parallax_image_id = preg_replace( '/[^\d]/', '', $parallax_image );
		$parallax_image_src = wp_get_attachment_image_src( $parallax_image_id, 'full' );
		if ( ! empty( $parallax_image_src[0] ) ) {
			$parallax_image_src = $parallax_image_src[0];
		}
	}
	$wrapper_attributes[] = 'data-vc-parallax-image="' . esc_attr( $parallax_image_src ) . '"';
    
    if(isset($background_style) && !empty($background_style) && ( strcmp($background_style, 'no-repeat') === 0 || strcmp($background_style, 'repeat') === 0) ) {
        $link_css .= '.'.esc_attr($uniqid).'.vc_parallax .vc_parallax-inner {'
                        . 'background-repeat: '.esc_attr($background_style).';'
                        . 'background-position: '.esc_attr($background_position_horizontal).' '.esc_attr($background_position_vertical).';'
                    . ';}';
    } elseif(isset($background_style) && !empty($background_style) && ( strcmp($background_style, 'no-repeat') !== 0 || strcmp($background_style, 'repeat') !== 0 ) ) {
        $link_css .= '.'.esc_attr($uniqid).'.vc_parallax .vc_parallax-inner {'
                        . 'background-size: '.esc_attr($background_style).';'
                        . 'background-position: '.esc_attr($background_position_horizontal).' '.esc_attr($background_position_vertical).';'
                    . ';}';
    }
}
if ( ! $parallax && $has_video_bg ) {
	$wrapper_attributes[] = 'data-vc-video-bg="' . esc_attr( $video_bg_url ) . '"';
}

$data_sticky = '';
if (!empty($el_sticky) && isset($el_sticky_offset)) {
	wp_enqueue_script( 'thegem-stickyColumn' );
	$data_sticky .= ' data-sticky-offset="' . esc_attr(intval($el_sticky_offset)) . '"';
}

if($interactions_enabled) {
	$wrapper_attributes[] = interactions_data_attr($atts);
    $css_classes[] = 'gem-interactions-enabled';
}

$css_class = preg_replace( '/\s+/', ' ', apply_filters( VC_SHORTCODE_CUSTOM_CSS_FILTER_TAG, implode( ' ', array_filter( $css_classes ) ), $this->settings['base'], $atts ) );
$wrapper_attributes[] = 'class="' . esc_attr( trim( $css_class ) ) . '"';
if ( ! empty( $el_id ) ) {
	$wrapper_attributes[] = 'id="' . esc_attr( $el_id ) . '"';
}

if(isset($effects_enabled_delay) && !empty($effects_enabled_delay)) {
	wp_enqueue_style('thegem-wpb-animations');
    $link_css .= '.'.esc_attr($uniqid).' {-webkit-animation-delay: '.(int)$effects_enabled_delay.'ms;'
                . '-moz-animation-delay: '.(int)$effects_enabled_delay.'ms;'
                . '-o-animation-delay: '.(int)$effects_enabled_delay.'ms;'
                . 'animation-delay: '.(int)$effects_enabled_delay.'ms;}';
}

if (isset($output_not_consent) && !empty($output_not_consent)) {
	foreach ($wrapper_attributes as $k=>$wrapper_attribute) {
		preg_match('%(data-vc-video-bg|data-vc-parallax-image).*%', $wrapper_attribute, $matches);
		if (isset($matches[0])) {
			unset($wrapper_attributes[$k]);
		}
	}

$output .= '<div ' . implode( ' ', $wrapper_attributes ) . '>';
	$output .= $output_not_consent;

} else {
	$output .= '<div ' . implode( ' ', $wrapper_attributes ) . '>';
}

$output .= '<div class="vc_column-inner ' . esc_attr( trim( vc_shortcode_custom_css_class( $css ) ) ) . '"'.$data_sticky.'>';
$output .= '<div class="wpb_wrapper">';
$output .= wpb_js_remove_wpautop( $content );
$output .= '</div>';
$output .= '</div>';
$output .= '</div>';

if(!empty($link_css)) {
    $output .= '<script type="text/javascript">
        (function($) {
            $("head").append("<style>'. esc_js($link_css) .'</style>");
        })(jQuery);
    </script>';
}

echo $output;
