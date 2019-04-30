<?php

// v1.3

// module

function vc_module_func( $atts, $content = null ) {
   extract( shortcode_atts( array(
      'image' => '',
      'image_size' => '',
      'scale' => '',
      'title' => '',
      'title_borders' => '',
      'title_font_size' => '',
	  'title_font_weight' => '',
	  'letter_spacing' => '',
	  'line_height' => '',
	  'secondary_font' => '',
      'url' => '',
      'badge_text' => '',
      'badge_color' => '',
      'dark_style' => '',
      'border_element' => '',
      
   ), $atts ) );
   
 	if ( empty( $title_font_size ) ) {
		$title_font_size = '18px';
	}
	if ( empty( $title_font_weight ) ) {
		$title_font_weight = '300';
	}
   
   	if(!$image_size){
	   	$image_size = 'thumbnail';
   	}
   
	$img = lpd_getImageBySize( array( 'attach_id' => $image, 'thumb_size' => $image_size, 'class' => "img-responsive" ) );
 
	$out = '';
	$no_scale = '';
	
	if($title_font_size=="36px"){
		$title_font_size = " class='large'";
	}else if($title_font_size=="18px"){
		$title_font_size = " class='small'";
	}else{
		$title_font_size = "";
	}
	
	if($title_borders!=""){
		$title_borders = ' class="title_borders"';
	}
	
	if($dark_style!=""){
		$dark_style = ' module_content_dark';
	}
	
	if($letter_spacing!=""){
		$letter_spacing = 'letter-spacing:'.esc_attr($letter_spacing).'px;';
	}
	
	if($line_height!=""){
		$line_height = 'line-height:'.esc_attr($line_height).'px;';
	}
	
	if($title){
		$title='<h3'.$title_font_size.' style="font-weight:'.$title_font_weight.';'.$letter_spacing.''.$line_height.'"><span'.$title_borders.'>'.esc_html($title).'</span></h3>';
	}
	
	if($badge_text){
		$badge_text='<span class="lpd-badge" style="background-color:'.esc_attr($badge_color).';">'.esc_html($badge_text).'</span>';
	}
	
	if($border_element){
		$border_element=' border-element';
	}
	
	if($title){
		$module_content='<span class="module_content'.$dark_style.''.$border_element.'"><table><tbody><tr><td style="vertical-align:middle">'.$title.'</td></tr></tbody></table></span>';
	}
	
	if($scale!=""){
		$no_scale=' module-no-scale';
	}
	if($secondary_font!=""){
		$secondary_font=' font-type-2';
	}
	
	$out .= '<a href="'.esc_url($url).'" class="lpd-module'.esc_attr($no_scale).''.esc_attr($secondary_font).'">'.$badge_text.''.$img['thumbnail'].''.$module_content.'</a>';
	
    return $out;
}
add_shortcode( 'vc_module', 'vc_module_func' );


vc_map(array(
   "name" => __("Module", GETTEXT_DOMAIN),
   "base" => "vc_module",
   "class" => "",
   "icon" => "icon-wpb-lpd",
   "category" => __('Content', GETTEXT_DOMAIN),
   'admin_enqueue_js' => "",
   'admin_enqueue_css' => array(get_template_directory_uri().'/functions/vc/assets/vc_extend.css'),
   "params" => array(
	    array(
	      "type" => "attach_image",
	      "heading" => __("Image", GETTEXT_DOMAIN),
	      "param_name" => "image",
	      "value" => "",
	      "description" => __("Select image from media library.", GETTEXT_DOMAIN)
	    ),
		array(
			 "type" => "textfield",
			 "holder" => "div",
			 "class" => "",
			 "heading" => __("Image Size", GETTEXT_DOMAIN),
			 "param_name" => "image_size",
			 "value" => "",
			 "description" => __("Enter image size. Example: 'thumbnail', 'medium', 'large', 'full' or other sizes defined by current theme. Alternatively enter image size in pixels: 200x100 (Width x Height). Leave empty to use 'thumbnail' size.", GETTEXT_DOMAIN)
		),  
	    array(
	      "type" => 'checkbox',
	      "heading" => __("Thumbnail Scale", GETTEXT_DOMAIN),
	      "param_name" => "scale",
	      "description" => __("If selected, thumbnail scale will be disabled.", GETTEXT_DOMAIN),
	      "value" => Array(__("disable", GETTEXT_DOMAIN) => 'disable')
	    ),
		array(
			 "type" => "textarea",
			 "holder" => "div",
			 "class" => "",
			 "heading" => __("Title", GETTEXT_DOMAIN),
			 "param_name" => "title",
			 "value" => "",
			 "description" => __("Enter your title.", GETTEXT_DOMAIN)
		),
	    array(
	      "type" => 'checkbox',
	      "heading" => __("Title Borders", GETTEXT_DOMAIN),
	      "param_name" => "title_borders",
	      "description" => __("If selected, title borders will be enabled.", GETTEXT_DOMAIN),
	      "value" => Array(__("enable", GETTEXT_DOMAIN) => 'enable')
	    ),
	    array(
	      "type" => "dropdown",
	      "heading" => __("Title font size", GETTEXT_DOMAIN),
	      "param_name" => "title_font_size",
	      "value" => array( "18px" => "18px", "24px" => "24px", "36px" => "36px"),
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
			 "param_name" => "letter_spacing",
			 "value" => '',
			 "description" => __("Letter spacing for the content, only integers (ex: 0.75, 1, 3,).", GETTEXT_DOMAIN)
		),
		array(
			 "type" => "textfield",
			 "holder" => "div",
			 "class" => "",
			 "heading" => __("Title Line Height", GETTEXT_DOMAIN),
			 "param_name" => "line_height",
			 "value" => '',
			 "description" => __("Line height for the content, only integers (ex: 24, 30, 36,).", GETTEXT_DOMAIN)
		),
	    array(
	      "type" => 'checkbox',
	      "heading" => __("Secondary Font Family", GETTEXT_DOMAIN),
	      "param_name" => "secondary_font",
	      "description" => __("If selected, title secondary font family will be enabled.", GETTEXT_DOMAIN),
	      "value" => Array(__("enable", GETTEXT_DOMAIN) => 'enable')
	    ),
	    array(
	      "type" => 'checkbox',
	      "heading" => __("Dark Style", GETTEXT_DOMAIN),
	      "param_name" => "dark_style",
	      "description" => __("If selected, dark style of the module will be enabled.", GETTEXT_DOMAIN),
	      "value" => Array(__("enable", GETTEXT_DOMAIN) => 'enable')
	    ),
		array(
			 "type" => "textfield",
			 "holder" => "div",
			 "class" => "",
			 "heading" => __("Url (link)", GETTEXT_DOMAIN),
			 "param_name" => "url",
			 "value" => "",
			 "description" => __("Module link.", GETTEXT_DOMAIN)
		),
		array(
			 "type" => "textfield",
			 "holder" => "div",
			 "class" => "",
			 "heading" => __("Badge Text", GETTEXT_DOMAIN),
			 "param_name" => "badge_text",
			 "value" => "",
			 "description" => __("Enter your content if you want to display your badget.", GETTEXT_DOMAIN)
		),
		array(
			"type" => "colorpicker",
			"holder" => "div",
			"class" => "",
			"heading" => __("Badge Color", GETTEXT_DOMAIN),
			"param_name" => "badge_color",
			"value" => '',
			"description" => __("Choose badge color.", GETTEXT_DOMAIN)
		),
	    array(
	      "type" => 'checkbox',
	      "heading" => __("Border Element", GETTEXT_DOMAIN),
	      "param_name" => "border_element",
	      "description" => __("If selected, border element will be enabled.", GETTEXT_DOMAIN),
	      "value" => Array(__("enable", GETTEXT_DOMAIN) => 'enable')
	    )
   )
));

?>