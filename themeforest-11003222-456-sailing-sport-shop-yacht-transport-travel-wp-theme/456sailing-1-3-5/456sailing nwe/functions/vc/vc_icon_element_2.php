<?php

// v1.3

// icon element

function vc_icon_element2_func( $atts, $content = null ) {
   extract( shortcode_atts( array(
      'border_color' => '',
      'icon' => '',
      'alignment' => '',
      'icon_size' => '',
   ), $atts ) );
   
	if ( empty( $alignment ) ) {
		$alignment = 'left';
	}
	if ( empty( $icon_size ) ) {
		$icon_size = '30';
	}
   
   $icon = wp_get_attachment_image_src( $icon, 'full' );
   
   ob_start();?>
   
	<?php if($border_color&&$icon){?>
	<div class="ie-icon2<?php if($alignment=="left"){?> ie-icon2-align-left<?php } ?><?php if($alignment=="right"){?> ie-icon2-align-right<?php } ?><?php if($icon_size){?> ie-icon2-<?php echo esc_attr($icon_size);?><?php } ?>" style="background-color:<?php echo esc_attr($border_color);?>;">
		<img class="ie-icon2-img" alt="" src="<?php echo esc_url($icon[0]);?>">
	</div>
	<?php } ?>

   <?php return ob_get_clean();
}
add_shortcode( 'vc_icon_element2', 'vc_icon_element2_func' );


vc_map(array(
   "name" => __("Icon Element", GETTEXT_DOMAIN),
   "base" => "vc_icon_element2",
   "class" => "",
   "icon" => "icon-wpb-lpd",
   "category" => __('Content', GETTEXT_DOMAIN),
   'admin_enqueue_js' => "",
   'admin_enqueue_css' => array(get_template_directory_uri().'/functions/vc/assets/vc_extend.css'),
   "params" => array(
		array(
			"type" => "colorpicker",
			"class" => "",
			"heading" => __("Background Color", GETTEXT_DOMAIN),
			"param_name" => "border_color",
			"value" => "",
			"description" => __("Select border color for icon.", GETTEXT_DOMAIN),
		),
	    array(
	      "type" => "attach_image",
	      "heading" => __("Icon", GETTEXT_DOMAIN),
	      "param_name" => "icon",
	      "value" => "",
	      "description" => __("Select icon from media library.", GETTEXT_DOMAIN)
	    ),
		array(
			"type" => "dropdown",
			"heading" => __("Alignment", GETTEXT_DOMAIN),
			"param_name" => "alignment",
			"value" => array(		
__('Left', GETTEXT_DOMAIN) => "left",
__('Center', GETTEXT_DOMAIN) => "center",
__('Right', GETTEXT_DOMAIN) => "right",
			),
			"description" => __("Select the alignment for icon.", GETTEXT_DOMAIN)
		),
		array(
			"type" => "dropdown",
			"heading" => __("Icon Size", GETTEXT_DOMAIN),
			"param_name" => "icon_size",
			"value" => array(		
__('30px', GETTEXT_DOMAIN) => "30",
__('40px', GETTEXT_DOMAIN) => "40",
__('50px', GETTEXT_DOMAIN) => "50",
			),
			"description" => __("Select icon size.", GETTEXT_DOMAIN)
		),
   )
));

?>