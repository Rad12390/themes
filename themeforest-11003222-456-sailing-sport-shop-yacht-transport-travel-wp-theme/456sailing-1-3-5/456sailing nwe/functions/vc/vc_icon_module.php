<?php

// v1.3

// icon module

function vc_icon_module_func( $atts, $content = null ) { // New function parameter $content is added!
   extract( shortcode_atts( array(
		'title' => '',
		'title_font_size' => '',
		'title_font_weight' => '',
		'title_letter_spacing' => '',
		'title_italic' => '',
		'bg_color' => '',
		'icon' => '',
		'bn_text' => '',
		'link' => '',
		'min_height' => '',
   ), $atts ) );

	if ( empty( $title_font_size ) ) {
		$title_font_size = '30px';
	}
	if ( empty( $title_font_weight ) ) {
		$title_font_weight = '300';
	}
	if ( empty( $bg_color ) ) {
		$bg_color= '#1a74b1';
	}
   
   $icon = wp_get_attachment_image_src( $icon, 'full' );
   
   if($bg_color){$bg_color = 'background-color:'.esc_attr($bg_color). ';';}
   if($min_height){$min_height = 'min-height:'.esc_attr($min_height). 'px;';}
   
   if($bg_color||$min_height){$im_styles = ' style="'.$bg_color.''.$min_height.'"';}
   
	if($title_font_size){$title_font_size = 'font-size:'.esc_attr($title_font_size).';';}
	if($title_font_weight){$title_font_weight = 'font-weight:'.esc_attr($title_font_weight).';';}
	if($title_letter_spacing){$title_letter_spacing = 'letter-spacing:'.esc_attr($title_letter_spacing).'px;';}
	if($title_italic!=''){$title_italic = 'font-style:italic;';}
	
	if($title_font_size||$title_font_weight||$title_letter_spacing||$title_italic!=''){$title_styles = ' style="'.$title_font_size.''.$title_font_weight.''.$title_letter_spacing.''.$title_italic.'"';}
   
	$link = ( $link == '||' ) ? '' : $link;
	$link = vc_build_link( $link );
	
	$link_url = $link['url'];
	$link_title = $link['title'];
	$link_target = $link['target'];
   
   ob_start();?>
   
	<div class="vc_lpd_icon_module"<?php echo $im_styles; ?>>
		<?php if($icon){?>
		<div class="im-icon">
			<img class="im-icon-img" alt="" src="<?php echo esc_url($icon[0]);?>">
			
		</div>
		<?php } ?>
		<?php if($title) {?><h3 class="im-title"<?php echo $title_styles; ?>><?php echo esc_html($title);?></h3><?php } ?>
		<?php if($bn_text){?><a href="<?php echo esc_url($link_url) ;?>" title="<?php echo esc_attr($link_title) ;?>" target="<?php echo esc_attr($link_target) ;?>" class="im-read-more"><?php echo esc_html($bn_text); ?></a><?php } ?>
	</div>

   <?php return ob_get_clean();
}
add_shortcode( 'vc_icon_module', 'vc_icon_module_func' );


vc_map(array(
   "name" => __("Icon Module", GETTEXT_DOMAIN),
   "base" => "vc_icon_module",
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
			"param_name" => "bg_color",
			"value" => "",
			"description" => __("Select border color for icon.", GETTEXT_DOMAIN),
		),
		array(
			 "type" => "textfield",
			 "holder" => "div",
			 "class" => "",
			 "heading" => __("Title", GETTEXT_DOMAIN),
			 "param_name" => "title",
			 "value" => "",
			 "description" => __("Enter your title.", GETTEXT_DOMAIN)
		),
		array(
			"type" => "dropdown",
			"heading" => __("Title Font Size", GETTEXT_DOMAIN),
			"param_name" => "title_font_size",
			"value" => array(
				"30px" => "30px",	
				"24px" => "24px",
				"18px" => "18px",
				"16px" => "16px",		
			),
			"description" => __("Select title font size.", GETTEXT_DOMAIN)
		),
		array(
			"type" => "dropdown",
			"heading" => __("Title Font Weight", GETTEXT_DOMAIN),
			"param_name" => "title_font_weight",
			"value" => array(
				"300" => "300",
				"400" => "400",	
				"500" => "500",
				"700" => "700",
				"900" => "900",		
			),
			"description" => __("Select title font weight.", GETTEXT_DOMAIN)
		),
		array(
			 "type" => "textfield",
			 "holder" => "div",
			 "class" => "",
			 "heading" => __("Title Letter Spacing", GETTEXT_DOMAIN),
			 "param_name" => "title_letter_spacing",
			 "value" => '',
			 "description" => __("Letter spacing for title, only integers (ex: 0.75, 1, 3,).", GETTEXT_DOMAIN)
		),
	    array(
	      "type" => 'checkbox',
	      "heading" => __("Italic Title", GETTEXT_DOMAIN),
	      "param_name" => "title_italic",
	      "description" => __("If selected, italic font style will be enabled for title.", GETTEXT_DOMAIN),
	      "value" => Array(__("enable", GETTEXT_DOMAIN) => 'enable')
	    ),
	    array(
	      "type" => "attach_image",
	      "heading" => __("Icon", GETTEXT_DOMAIN),
	      "param_name" => "icon",
	      "value" => "",
	      "description" => __("Select icon from media library.", GETTEXT_DOMAIN)
	    ),
		array(
			 "type" => "textfield",
			 "holder" => "div",
			 "class" => "",
			 "heading" => __("Button Text", GETTEXT_DOMAIN),
			 "param_name" => "bn_text",
			 "value" => "",
			 "description" => __("Text on the button.", GETTEXT_DOMAIN)
		),
		array(
			 "type" => "vc_link",
			 "holder" => "div",
			 "class" => "",
			 "heading" => __("Button Url (link)", GETTEXT_DOMAIN),
			 "param_name" => "link",
			 "value" => '',
			 "description" => __("Button link.", GETTEXT_DOMAIN)
		),
		array(
			 "type" => "textfield",
			 "holder" => "div",
			 "class" => "",
			 "heading" => __("Module Min Height", GETTEXT_DOMAIN),
			 "param_name" => "min_height",
			 "value" => '',
			 "description" => __("Min height for this module, only integers (ex: 150, 250, 350,).", GETTEXT_DOMAIN)
		),
   )
));

?>