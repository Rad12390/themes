<?php

// v1.3

// lpd icon header

function vc_lpd_icon_header_func( $atts, $content = null ) {
   extract( shortcode_atts( array(
	'title' => '',
	'title_font_size' => '',
	'title_font_weight' => '',
	'title_letter_spacing' => '',
	'title_font_style' => '',
	'separator' => '',
	'content_color' => '',
	'alignment' => '',
	'margin_top' => '',
	'margin_bottom' => '',
	'font_type' => '',
	'letter_spacing' => '',
	'line_height' => '',
	'enable_icon' => '',
	'icon_img' => '',
	'img_width' => '',
	'diamond_style' => '',
	'icon_color_bg' => '',
	'icon_color_bg_hover' => '',
	'icon_border_style' => '',
	'icon_color_border' => '',
	'icon_color_border_hover' => '',
	'icon_border_size' => '',
	'icon_border_radius' => '',
	'icon_border_spacing' => '',
	'icon_link' => '',
	'icon_align' => '',
	'bn_text' => '',
	'link' => '',
	'type' => '',
	'size' => '',
   ), $atts ) );

	if ( empty( $title_font_size ) ) {
		$title_font_size = '18px';
	}
	if ( empty( $title_font_weight ) ) {
		$title_font_weight = '300';
	}
	if ( empty( $separator ) ) {
		$separator = '';
	}
	if ( empty( $alignment ) ) {
		$alignment = 'left';
	}
	if ( empty( $font_type ) ) {
		$font_type= '';
	}
	if ( empty( $icon_border_style ) ) {
		$icon_border_style = '';
	}
	if ( empty( $icon_align ) ) {
		$icon_align = 'center';
	}
	if ( empty( $type ) ) {
		$type = 'default';
	}
	if ( empty( $size ) ) {
		$size = 'lg';
	}

   $icon_img = wp_get_attachment_image_src( $icon_img, 'full' );
 
   $content = wpb_js_remove_wpautop($content); // fix unclosed/unwanted paragraph tags in $content

	if($margin_top){$margin_top = 'margin-top:'.esc_attr($margin_top).'px;';}
	if($margin_bottom){$margin_bottom = 'margin-bottom:'.esc_attr($margin_bottom).'px;';}
	
	$styles = $color = '';
	
	if($margin_top||$margin_bottom){$styles = ' style="'.$margin_top.''.$margin_bottom.'"';}
	if($content_color||$letter_spacing){
		$content_styles = ' style="';
		if($content_color){$content_styles .= 'color:'.esc_attr($content_color).';';}
		if($letter_spacing){$content_styles .= 'letter-spacing:'.esc_attr($letter_spacing).'px;';}
		if($line_height){$content_styles .= 'line-height:'.esc_attr($line_height).'px;';}
		$content_styles .= '"';
	}

	$icon_link = ( $icon_link == '||' ) ? '' : $icon_link;
	$icon_link = vc_build_link( $icon_link );
	
	$icon_link_url = $icon_link['url'];
	$icon_link_title = $icon_link['title'];
	$icon_link_target = $icon_link['target'];
	
	$link = ( $link == '||' ) ? '' : $link;
	$link = vc_build_link( $link );
	
	$link_url = $link['url'];
	$link_title = $link['title'];
	$link_target = $link['target'];
	
	$icon_styles=$padding_top='';
	
	if($img_width){
		$icon_styles = ' style="';
		if($img_width){$icon_styles .= 'font-size:'.esc_attr($img_width).'px;';}		
		if($icon_color_bg){$icon_styles .= 'background-color:'.esc_attr($icon_color_bg).';';}
		if($icon_border_style){$icon_styles .= 'border-style:'.esc_attr($icon_border_style).';';}
		if($icon_color_border){$icon_styles .= 'border-color:'.esc_attr($icon_color_border).';';}
		if($icon_border_size){$icon_styles .= 'border-width:'.esc_attr($icon_border_size).'px;';}
		if($icon_border_radius){$icon_styles .= 'border-radius:'.esc_attr($icon_border_radius).'px;';}
		if($icon_border_spacing){$icon_styles .= 'padding:'.esc_attr($icon_border_spacing).'px;';}
		$icon_styles .= '"';
		
		$icon_height = ($img_width/2)+$icon_border_spacing+$icon_border_size;
		if($enable_icon){if($icon_img){$padding_top = $icon_height+30;}}
	}
	
	if($enable_icon){if($icon_img){$padding_top = 'padding-top:'.esc_attr($padding_top).'px;margin-top:'.esc_attr($padding_top).'px;';}}
	
	if($alignment){$alignment = ' style="text-align:'.esc_attr($alignment).';'.esc_attr($padding_top).'"';}
	
	if($icon_color_bg_hover||$icon_color_border_hover){
	
		global $shortcode_atts;
		
		$shortcode_atts = array(
			'icon_color_bg_hover' => $icon_color_bg_hover,
			'icon_color_border_hover' => $icon_color_border_hover,
		);
		
		global $the_lpd_icon_header_ID;
		
		$the_lpd_icon_header_ID = rand();
		
	}
	
   	if($title_font_size){$title_font_size = 'font-size:'.esc_attr($title_font_size).';';}
   	if($title_font_weight){$title_font_weight = 'font-weight:'.esc_attr($title_font_weight).';';}
   	if($title_letter_spacing){$title_letter_spacing = 'letter-spacing:'.esc_attr($title_letter_spacing).'px;';}
   	
   	if($title_font_size||$title_font_weight||$title_letter_spacing){$title_styles = ' style="'.$title_font_size.''.$title_font_weight.''.$title_letter_spacing.'"';}
   
   ob_start();?>
   
   <div class="lpd-icon-header"<?php echo $alignment ;?>>
   
	   <?php if($enable_icon){?>
		   <?php if($icon_img){?>
		   <div class="<?php if($diamond_style){?>diamond-style <?php } ?>lpd-icon-header-icon lpd-align-icon<?php if($icon_color_bg_hover||$icon_color_border_hover){?> lpd-header-icon-<?php echo esc_attr($the_lpd_icon_header_ID);?><?php } ?>"<?php if($icon_align||$icon_height){?> style="<?php if($icon_align){?>text-align:<?php echo $icon_align;?>;<?php } ?><?php if($icon_height){?>top:-<?php echo esc_attr($icon_height);?>px;<?php } ?>"<?php } ?>>
			   <?php if($icon_link_url){?><a href="<?php echo esc_url($icon_link_url) ;?>" class="lpd-href-icon" title="<?php echo esc_attr($icon_link_title) ;?>" target="<?php echo esc_attr($icon_link_target) ;?>"><?php } else{ ?><span class="lpd-wrap-icon"><?php } ?>
				   <div class="lpd-img-wrap-icon"<?php echo $icon_styles ;?>>
					   <img class="lpd-img-icon" src="<?php echo esc_url($icon_img[0]) ;?>">
				   </div>
			  <?php if($icon_link){?></a><?php } else{ ?></span><?php } ?>
		   </div>
		   <?php } ?>
	   <?php } ?>
	   <?php if($title){?><h3<?php echo $title_styles; ?><?php if($title_font_style){?> class="secondary-font-style"<?php } ?>><?php echo esc_html($title); ?></h3><?php } ?>
	   <?php if($separator){?><div class="deco-sep-line-<?php echo esc_attr($separator); ?>"<?php echo $styles; ?>></div><?php } ?>
	   <?php if($content){?><div class="lpd_icon_header_content<?php if($font_type){ echo ' '.$font_type; }?>"<?php echo $content_styles; ?>><?php echo $content; ?></div><?php } ?>
	   <?php if($bn_text){?><a href="<?php echo esc_url($link_url) ;?>" title="<?php echo esc_url($link_title) ;?>" target="<?php echo esc_url($link_target) ;?>" class="lpd_icon_header_btn btn btn-<?php echo esc_attr($type); ?> btn-<?php echo esc_attr($size); ?>"><?php echo esc_html($bn_text); ?></a><?php } ?>
   </div>
   
	<?php
	if($icon_color_bg_hover||$icon_color_border_hover){ 
		$counter_js = new lpd_icon_header_class();
		
		$counter_js->lpd_icon_header_callback();
	}	
	?>
   
   <?php return ob_get_clean();

}
add_shortcode( 'vc_lpd_icon_header', 'vc_lpd_icon_header_func' );


class lpd_icon_header_class
{
    protected static $var = '';

    public static function lpd_icon_header_callback(){
    
	global $the_lpd_icon_header_ID;
	
	global $shortcode_atts;
	
	$icon_color_bg_hover = $shortcode_atts['icon_color_bg_hover'];
	$icon_color_border_hover = $shortcode_atts['icon_color_border_hover'];
	
		ob_start();?>
		
		<style>
			.lpd-icon-header:hover .lpd-header-icon-<?php echo $the_lpd_icon_header_ID;?> .lpd-img-wrap-icon{
				<?php if($icon_color_bg_hover){?>background-color: <?php echo $icon_color_bg_hover; ?> !important;<?php } ?>
				<?php if($icon_color_border_hover){?>border-color: <?php echo $icon_color_border_hover; ?> !important;<?php } ?>
			}
		</style>

		
		<?php $script = ob_get_clean();

        self::$var[] = $script;

        add_action( 'wp_footer', array ( __CLASS__, 'footer' ), 20 );         
    }

	public static function footer() 
	{
	    foreach( self::$var as $script ){
	        echo $script;
	    }
	}

}


vc_map(array(
   "name" => __("Icon Header", GETTEXT_DOMAIN),
   "base" => "vc_lpd_icon_header",
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
			"heading" => __("Secondary Title Font Style", GETTEXT_DOMAIN),
			"param_name" => "title_font_style",
			"description" => __("Check, if you want to enable secondary font style for description.", GETTEXT_DOMAIN),
			"value" => Array(__("Enable", GETTEXT_DOMAIN) => 'enable')
		),
		array(
			"type" => "dropdown",
			"heading" => __("Separator", GETTEXT_DOMAIN),
			"param_name" => "separator",
			"value" => array(		
__('none', GETTEXT_DOMAIN) => "",
__('50px', GETTEXT_DOMAIN) => "50",
__('100px', GETTEXT_DOMAIN) => "100",
__('150px', GETTEXT_DOMAIN) => "150",
__('200px', GETTEXT_DOMAIN) => "200",
			),
			"description" => __("Select icon.", GETTEXT_DOMAIN)
		),
		array(
			 "type" => "textfield",
			 "holder" => "div",
			 "class" => "",
			 "heading" => __("Separator Margin Top", GETTEXT_DOMAIN),
			 "param_name" => "margin_top",
			 "value" => '',
			 "description" => __("Separator margin top, only integers (ex: 1, 5, 10).", GETTEXT_DOMAIN)
		),
		array(
			 "type" => "textfield",
			 "holder" => "div",
			 "class" => "",
			 "heading" => __("Separator Margin Bottom", GETTEXT_DOMAIN),
			 "param_name" => "margin_bottom",
			 "value" => '',
			 "description" => __("Separator margin bottom, only integers (ex: 1, 5, 10).", GETTEXT_DOMAIN)
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
			"description" => __("Select the alignment for title and separator.", GETTEXT_DOMAIN)
		),	
		array(
			 "type" => "textarea_html",
			 "holder" => "div",
			 "class" => "",
			 "heading" => __("Content", GETTEXT_DOMAIN),
			 "param_name" => "content",
			 "value" => '',
			 "description" => __("Enter your content.", GETTEXT_DOMAIN)
		),
		array(
			"type" => "colorpicker",
			"holder" => "div",
			"class" => "",
			"heading" => __("Content Color", GETTEXT_DOMAIN),
			"param_name" => "content_color",
			"value" => '#555',
			"description" => __("Choose content color.", GETTEXT_DOMAIN)
		),
		array(
			"type" => "dropdown",
			"heading" => __("Font Type", GETTEXT_DOMAIN),
			"param_name" => "font_type",
			"value" => array(		
__('Type 1', GETTEXT_DOMAIN) => "",
__('Type 2', GETTEXT_DOMAIN) => "font_type_2",
			),
			"description" => __("Select font type.", GETTEXT_DOMAIN)
		),
		array(
			 "type" => "textfield",
			 "holder" => "div",
			 "class" => "",
			 "heading" => __("Letter Spacing", GETTEXT_DOMAIN),
			 "param_name" => "letter_spacing",
			 "value" => '',
			 "description" => __("Letter spacing for the content, only integers (ex: 0.75, 1, 3,).", GETTEXT_DOMAIN)
		),
		array(
			 "type" => "textfield",
			 "holder" => "div",
			 "class" => "",
			 "heading" => __("Line Height", GETTEXT_DOMAIN),
			 "param_name" => "line_height",
			 "value" => '',
			 "description" => __("Line height for the content (in pixels), only integers (ex: 0.75, 1, 3,).", GETTEXT_DOMAIN)
		),
		array(
			"type" => 'checkbox',
			"heading" => __("Enable Icon", GETTEXT_DOMAIN),
			"param_name" => "enable_icon",
			"description" => __("Enable custom icon.", GETTEXT_DOMAIN),
			"value" => Array(__("Enable", GETTEXT_DOMAIN) => 'enable')
		),
		array(
			"type" => "attach_image",
			"class" => "",
			"heading" => __("Upload Image Icon:", GETTEXT_DOMAIN),
			"param_name" => "icon_img",
			"admin_label" => true,
			"value" => "",
			"description" => __("Upload the custom image icon.", GETTEXT_DOMAIN),
			"dependency" => Array("element" => "enable_icon","value" => "enable"),
		),
		array(
			"type" => "number",
			"class" => "",
			"heading" => __("Image Width", GETTEXT_DOMAIN),
			"param_name" => "img_width",
			"value" => 48,
			"min" => 16,
			"max" => 512,
			"suffix" => "px",
			"description" => __("Provide image width", GETTEXT_DOMAIN),
			"dependency" => Array("element" => "enable_icon","value" => "enable"),
		),
		array(
			"type" => 'checkbox',
			"heading" => __("Design Your Own Icon", GETTEXT_DOMAIN),
			"param_name" => "design_icon",
			"description" => __("Design your own custom icon.", GETTEXT_DOMAIN),
			"value" => Array(__("Yes", GETTEXT_DOMAIN) => 'enable')
		),
		array(
			"type" => 'checkbox',
			"heading" => __("Diamond Style Icon", GETTEXT_DOMAIN),
			"param_name" => "diamond_style",
			"description" => __("Enable diamond style icon.", GETTEXT_DOMAIN),
			"value" => Array(__("Enable", GETTEXT_DOMAIN) => 'enable'),
			"dependency" => Array("element" => "design_icon","value" => "enable"),
		),
		array(
			"type" => "colorpicker",
			"class" => "",
			"heading" => __("Background Color", GETTEXT_DOMAIN),
			"param_name" => "icon_color_bg",
			"value" => "",
			"description" => __("Select background color for icon.", GETTEXT_DOMAIN),	
			"dependency" => Array("element" => "design_icon","value" => "enable"),
		),
		array(
			"type" => "colorpicker",
			"class" => "",
			"heading" => __("Hover Background Color", GETTEXT_DOMAIN),
			"param_name" => "icon_color_bg_hover",
			"value" => "",
			"description" => __("Select hover background color for icon.", GETTEXT_DOMAIN),	
			"dependency" => Array("element" => "design_icon","value" => "enable"),
		),
		array(
			"type" => "dropdown",
			"class" => "",
			"heading" => __("Icon Border Style", GETTEXT_DOMAIN),
			"param_name" => "icon_border_style",
			"value" => array(
				"None"=> "",
				"Solid"=> "solid",
				"Dashed" => "dashed",
				"Dotted" => "dotted",
				"Double" => "double",
				"Inset" => "inset",
				"Outset" => "outset",
			),
			"description" => __("Select the border style for icon.",GETTEXT_DOMAIN),
			"dependency" => Array("element" => "design_icon","value" => "enable"),
		),
		array(
			"type" => "colorpicker",
			"class" => "",
			"heading" => __("Border Color", GETTEXT_DOMAIN),
			"param_name" => "icon_color_border",
			"value" => "",
			"description" => __("Select border color for icon.", GETTEXT_DOMAIN),	
			"dependency" => Array("element" => "design_icon","value" => "enable"),
		),
		array(
			"type" => "colorpicker",
			"class" => "",
			"heading" => __("Hover Border Color", GETTEXT_DOMAIN),
			"param_name" => "icon_color_border_hover",
			"value" => "",
			"description" => __("Select hover border color for icon.", GETTEXT_DOMAIN),	
			"dependency" => Array("element" => "design_icon","value" => "enable"),
		),
		array(
			"type" => "number",
			"class" => "",
			"heading" => __("Border Width", GETTEXT_DOMAIN),
			"param_name" => "icon_border_size",
			"value" => 1,
			"min" => 1,
			"max" => 10,
			"suffix" => "px",
			"description" => __("Thickness of the border.", GETTEXT_DOMAIN),
			"dependency" => Array("element" => "design_icon","value" => "enable"),
		),
		array(
			"type" => "number",
			"class" => "",
			"heading" => __("Border Radius", GETTEXT_DOMAIN),
			"param_name" => "icon_border_radius",
			"value" => '',
			"min" => 1,
			"max" => 500,
			"suffix" => "px",
			"description" => __("0 pixel value will create a square border. As you increase the value, the shape convert in circle slowly. (e.g 500 pixels).", GETTEXT_DOMAIN),
			"dependency" => Array("element" => "design_icon","value" => "enable"),
		),
		array(
			"type" => "number",
			"class" => "",
			"heading" => __("Background Size", GETTEXT_DOMAIN),
			"param_name" => "icon_border_spacing",
			"value" => 30,
			"min" => 1,
			"max" => 500,
			"suffix" => "px",
			"description" => __("Spacing from center of the icon till the boundary of border / background", GETTEXT_DOMAIN),
			"dependency" => Array("element" => "design_icon","value" => "enable"),
		),
		array(
			"type" => "vc_link",
			"class" => "",
			"heading" => __("Link ",GETTEXT_DOMAIN),
			"param_name" => "icon_link",
			"value" => "",
			"dependency" => Array("element" => "enable_icon","value" => "enable"),
		),
		array(
			"type" => "dropdown",
			"class" => "",
			"heading" => __("Alignment", GETTEXT_DOMAIN),
			"param_name" => "icon_align",
			"value" => array(
				"Center"	=>	"center",
				"Left"		=>	"left",
				"Right"		=>	"right"
			),
			"description" => __("Icon Alignment", GETTEXT_DOMAIN),
			"dependency" => Array("element" => "enable_icon","value" => "enable"),
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
			"type" => "dropdown",
			"heading" => __("Type", GETTEXT_DOMAIN),
			"param_name" => "type",
			"value" => array(__('Default', GETTEXT_DOMAIN) => "default", __('Primary', GETTEXT_DOMAIN) => "primary", __('Secondary', GETTEXT_DOMAIN) => "warning"),
			"description" => __("Select type of the button.", GETTEXT_DOMAIN)
		),
		array(
			"type" => "dropdown",
			"heading" => __("Size", GETTEXT_DOMAIN),
			"param_name" => "size",
			"value" => array(__('Large', GETTEXT_DOMAIN) => "lg", __('Medium', GETTEXT_DOMAIN) => "md", __('Small', GETTEXT_DOMAIN) => "sm", __('Extra Small', GETTEXT_DOMAIN) => "xs"),
			"description" => __("Select size of the button.", GETTEXT_DOMAIN)
		),
   )
));

?>