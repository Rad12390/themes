<?php

// v1.3

// package

function vc_package_func( $atts, $content = null ) { // New function parameter $content is added!
   extract( shortcode_atts( array(
	'title' => '',
	'title_font_size' => '',
	'title_font_weight' => '',
	'title_letter_spacing' => '',
	'title_italic' => '',
	'bg_color' => '',
	'icon' => '',
	'style' => '',
	'price' => '',
	'price_bg' => '',
	'margin_top' => '',
	'highlighted' => '',
      
   ), $atts ) );
   
	if ( empty( $title_font_size ) ) {
		$title_font_size = '30px';
	}
	if ( empty( $title_font_weight ) ) {
		$title_font_weight = '300';
	}
	if ( empty( $style ) ) {
		$style = '';
	}
   
   $icon = wp_get_attachment_image_src( $icon, 'full' );
   
	if($icon){
		$icon = '<img class="lpd_bullet_img" src="'.esc_url($icon[0]).'"/>';
	}
   
   $package_styles = ' style="background-color:'.esc_attr($bg_color). '"';
   
   if($price_bg||$margin_top){
	   $price_styles = ' style="';
	   if($price_bg){$price_styles .= 'background-color:'.esc_attr($price_bg). ';';}
	   if($margin_top){$price_styles .= 'margin-top:'.esc_attr($margin_top). 'px;';}
	   $price_styles .= '"';
   }
   
	if($icon){
		$custom_icon = ' lpd-bl-custom-icon';    
	}
	
	$graph_lines = explode( ",", $content );
	
   	if($title_font_size){$title_font_size = 'font-size:'.esc_attr($title_font_size).';';}
   	if($title_font_weight){$title_font_weight = 'font-weight:'.esc_attr($title_font_weight).';';}
   	if($title_letter_spacing){$title_letter_spacing = 'letter-spacing:'.esc_attr($title_letter_spacing).'px;';}
   	if($title_italic!=''){$title_italic = 'font-style:italic;';}
   	
   	if($title_font_size||$title_font_weight||$title_letter_spacing||$title_italic!=''){$title_styles = ' style="'.$title_font_size.''.$title_font_weight.''.$title_letter_spacing.''.$title_italic.'"';}
   
   ob_start();?>
   
	<div class="vc-lpd-package<?php if($highlighted!='') {?> vc-lpd-package-highlighted<?php } ?>"<?php echo $package_styles; ?>>
		<?php if($title) {?><h3 class="vc-lpd-package-title"<?php echo $title_styles; ?>><?php echo esc_html($title);?></h3><?php } ?>
		<div class="vc-lpd-package-row clearfix">
			<div class="vc-lpd-package-col-1<?php echo $custom_icon; ?>">
				<?php if($content) { $output = '';?>
				<ul<?php if($style) {?> class="<?php echo esc_attr($style);?>"<?php }?>>
				    <?php foreach ($graph_lines as $line) {
				        if($line){
				
							$output .= '<li>';
							$output .= $icon;
							$output .= $line;
							$output .= '</li>';
				            
				        }
				    }
				    echo $output;?>
				</ul>
				<?php } ?>
			</div>
			<div class="vc-lpd-package-col-2">
				<?php if($price) {?><div class="vc-lpd-package-price"<?php echo $price_styles; ?>><?php echo esc_html($price);?></div><?php } ?>
			</div>
		</div>
	</div>

   <?php return ob_get_clean();
}
add_shortcode( 'vc_package', 'vc_package_func' );

vc_map(array(
   "name" => __("Package", GETTEXT_DOMAIN),
   "base" => "vc_package",
   "class" => "",
   "icon" => "icon-wpb-lpd",
   "category" => __('Content', GETTEXT_DOMAIN),
   'admin_enqueue_js' => "",
   'admin_enqueue_css' => array(get_template_directory_uri().'/functions/vc/assets/vc_extend.css'),
   "params" => array(
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
			 "description" => __("Letter spacing for description, only integers (ex: 0.75, 1, 3,).", GETTEXT_DOMAIN)
		),
	    array(
	      "type" => 'checkbox',
	      "heading" => __("Italic Title", GETTEXT_DOMAIN),
	      "param_name" => "title_italic",
	      "description" => __("If selected, italic font style will be enabled for title.", GETTEXT_DOMAIN),
	      "value" => Array(__("enable", GETTEXT_DOMAIN) => 'enable')
	    ),
		array(
			"type" => "colorpicker",
			"class" => "",
			"heading" => __("Background Color", GETTEXT_DOMAIN),
			"param_name" => "bg_color",
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
	      "heading" => __("List Style", GETTEXT_DOMAIN),
	      "param_name" => "style",
	      "value" => array( 'Style 1' => '', 'Style 2' => 'lpd-bl-style2', 'Style 3' => 'lpd-bl-style3'),
	      "description" => __("Select list style.", GETTEXT_DOMAIN)
	    ),
		array(
			 "type" => "textarea",
			 "holder" => "div",
			 "class" => "",
			 "heading" => __("Content", GETTEXT_DOMAIN),
			 "param_name" => "content",
			 "value" => "",
			 "description" => __("Enter your content.", GETTEXT_DOMAIN)
		),
		array(
			 "type" => "textfield",
			 "holder" => "div",
			 "class" => "",
			 "heading" => __("Price", GETTEXT_DOMAIN),
			 "param_name" => "price",
			 "value" => "",
			 "description" => __("Enter your price value.", GETTEXT_DOMAIN)
		),
		array(
			"type" => "colorpicker",
			"class" => "",
			"heading" => __("Price Background Color", GETTEXT_DOMAIN),
			"param_name" => "price_bg",
			"value" => "",
			"description" => __("Select price background color.", GETTEXT_DOMAIN),
		),
		array(
			 "type" => "textfield",
			 "holder" => "div",
			 "class" => "",
			 "heading" => __("Price Badge Margin Top ", GETTEXT_DOMAIN),
			 "param_name" => "margin_top",
			 "value" => '',
			 "description" => __("Margin top, only integers (ex: 1, 5, 10).", GETTEXT_DOMAIN)
		),
	    array(
	      "type" => 'checkbox',
	      "heading" => __("Highlighted", GETTEXT_DOMAIN),
	      "param_name" => "highlighted",
	      "description" => __("If selected, package container will be highlighted.", GETTEXT_DOMAIN),
	      "value" => Array(__("enable", GETTEXT_DOMAIN) => 'enable')
	    ),
   )
));

?>