<?php

// v1.3

// featured container

function vc_featured_container_func( $atts, $content = null ) {
   extract( shortcode_atts( array(
      'title_color' => '',
      'title' => '',
      'container_color' => '',
      'title_font_weight' => '',
      'title_font_size' => '',
      'title_letter_spacing' => '',
      'title_line_height' => '',
      'title_font_style' => '',
      'enable_title_sepatator' => '',    
      'bookmark' => '',
      'bookmark_sec_color' => '',
      'padding_top' => '',
      'padding_right' => '',
      'padding_bottom' => '',
      'padding_left' => '',
      'separator_color' => '',

   ), $atts ) );
   
	if ( empty( $title_font_weight ) ) {
		$title_font_weight = '300';
	}
   
   $title_line_height_styles = esc_attr($title_line_height);
   
   $background_color = 'background-color:'.esc_attr($container_color).';';
   $title_font_size = 'font-size:'.esc_attr($title_font_size).'px;';
   $title_font_weight = 'font-weight:'.esc_attr($title_font_weight).';';
   $title_letter_spacing = 'letter-spacing:'.esc_attr($title_letter_spacing).'px;';
   $title_line_height = 'line-height:'.esc_attr($title_line_height).'px;';
   $title_color = 'color:'.esc_attr($title_color).';';
   
   $padding_top = 'padding-top:'.esc_attr($padding_top).'px;';
   $padding_right = 'padding-right:'.esc_attr($padding_right).'px;';
   $padding_bottom = 'padding-bottom:'.esc_attr($padding_bottom).'px;';
   $padding_left = 'padding-left:'.esc_attr($padding_left).'px;';
   
   if($container_color||$padding_top||$padding_right||$padding_bottom||$padding_left){
	   $container_styles = ' style="'.$background_color.''.$padding_top.''.$padding_right.''.$padding_bottom.''.$padding_left.'"';
   }
   
   if($container_color||$title_font_size||$title_font_weight||$title_letter_spacing||$title_line_height||$title_color){
	   $styles_h4 = ' style="'.$title_font_weight.''.$title_font_size.''.$title_letter_spacing.''.$title_line_height.''.$title_color.''.$background_color.'"';
   }
   
	if($bookmark_sec_color!=""||$enable_title_sepatator!=""){
	
		global $shortcode_atts;
		
		$shortcode_atts = array(
			'bookmark_sec_color' => $bookmark_sec_color,
			'separator_color' => $separator_color,
			'enable_title_sepatator' => $enable_title_sepatator,
			'title_line_height_styles' => $title_line_height_styles,
		);
		
		global $lpd_featured_container_ID;
		
		$lpd_featured_container_ID = rand();
		
	}
   
   ob_start();?>
   
	<div class="featured-container-<?php echo esc_attr($lpd_featured_container_ID) ;?> featured-container<?php if($bookmark!=''){?> feac-bookmark<?php }?>"<?php echo $container_styles ;?>>
		<?php if($title){?>
			<div class="feac-title<?php if($title_font_style!=''){?> feac-title-style2<?php } ?><?php if($enable_title_sepatator!=''){?> feac-title-separator<?php } ?>">
				<h4<?php echo $styles_h4;?>><?php echo esc_html($title);?></h4>
			</div>
		<?php } ?>
		<div class="feac-content"><?php echo do_shortcode($content); ?></div>
	</div>
	
	<?php
	if($bookmark_sec_color!=""||$enable_title_sepatator!=""){ 
		$counter_js = new lpd_featured_container_class();
		
		$counter_js->lpd_featured_container_callback();
	}	
	?>

   <?php return ob_get_clean();
}

class lpd_featured_container_class
{
    protected static $var = '';

    public static function lpd_featured_container_callback(){
    
	global $lpd_featured_container_ID;
	
	global $shortcode_atts;
	
	$bookmark_sec_color = $shortcode_atts['bookmark_sec_color'];
	$separator_color = $shortcode_atts['separator_color'];
	$enable_title_sepatator = $shortcode_atts['enable_title_sepatator'];
	$title_line_height_styles = $shortcode_atts['title_line_height_styles'];
	$title_line_height_styles = $title_line_height_styles/2;
	
		ob_start();?>
		
		<style>
		<?php if($bookmark_sec_color!=""){?>.featured-container-<?php echo $lpd_featured_container_ID; ?>:after{border-right: 30px solid <?php echo $bookmark_sec_color; ?>;}<?php }?>
		<?php if($enable_title_sepatator!=""){?>.featured-container-<?php echo $lpd_featured_container_ID; ?> .feac-title.feac-title-separator:before{top:<?php echo $title_line_height_styles; ?>px;background-color:<?php echo $separator_color; ?>;}<?php }?>
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

add_shortcode( 'vc_featured_container', 'vc_featured_container_func' );

	vc_map(array(
		"name" => __("Featured Container", GETTEXT_DOMAIN),
		"base" => "vc_featured_container",
		"class" => "",
		"icon" => "icon-wpb-lpd",
		"as_parent" => array('except' => 'vc_featured_container'),
		"content_element" => true,
		"controls" => "full",
		"show_settings_on_create" => true,
		"params" => array(
			array(
				"type" => "colorpicker",
				"class" => "",
				"heading" => __("Container Color", GETTEXT_DOMAIN),
				"param_name" => "container_color",
				"value" => "",
				"description" => __("Select container color.", GETTEXT_DOMAIN),
			),
			array(
				 "type" => "textarea",
				 "holder" => "div",
				 "class" => "",
				 "heading" => __("Title", GETTEXT_DOMAIN),
				 "param_name" => "title",
				 "value" => '',
				 "description" => __("Enter your title.", GETTEXT_DOMAIN)
			),
			array(
				"type" => "colorpicker",
				"class" => "",
				"heading" => __("Title Color", GETTEXT_DOMAIN),
				"param_name" => "title_color",
				"value" => "",
				"description" => __("Select title color.", GETTEXT_DOMAIN),
			),
			array(
				 "type" => "textfield",
				 "holder" => "div",
				 "class" => "",
				 "heading" => __("Title Font Size", GETTEXT_DOMAIN),
				 "param_name" => "title_font_size",
				 "value" => '',
				 "description" => __("Font Size, only integers (ex: 16, 18, 20).", GETTEXT_DOMAIN)
			),
			array(
				 "type" => "textfield",
				 "holder" => "div",
				 "class" => "",
				 "heading" => __("Title Letter Spacing", GETTEXT_DOMAIN),
				 "param_name" => "title_letter_spacing",
				 "value" => '',
				 "description" => __("Letter spacing for the content, only integers (ex: 0.75, 1, 3,).", GETTEXT_DOMAIN)
			),
			array(
				 "type" => "textfield",
				 "holder" => "div",
				 "class" => "",
				 "heading" => __("Title Line Height", GETTEXT_DOMAIN),
				 "param_name" => "title_line_height",
				 "value" => '',
				 "description" => __("Line height for the content (in pixels), only integers (ex: 20, 24, 30,).", GETTEXT_DOMAIN)
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
				"type" => 'checkbox',
				"heading" => __("Title Separator", GETTEXT_DOMAIN),
				"param_name" => "enable_title_sepatator",
				"description" => __("Enable title separator line.", GETTEXT_DOMAIN),
				"value" => Array(__("Enable", GETTEXT_DOMAIN) => 'enable')
			),
			array(
				"type" => "colorpicker",
				"class" => "",
				"heading" => __("Separator Line Color", GETTEXT_DOMAIN),
				"param_name" => "separator_color",
				"value" => "",
				"description" => __("Select separator color.", GETTEXT_DOMAIN),
			),
			array(
				"type" => 'checkbox',
				"heading" => __("Secondary Title Font Style", GETTEXT_DOMAIN),
				"param_name" => "title_font_style",
				"description" => __("Check, if you want to enable secondary font style for title.", GETTEXT_DOMAIN),
				"value" => Array(__("Enable", GETTEXT_DOMAIN) => 'enable')
			),
			array(
				"type" => 'checkbox',
				"heading" => __("Bookmark", GETTEXT_DOMAIN),
				"param_name" => "bookmark",
				"description" => __("Check, if you want to enable bookmark.", GETTEXT_DOMAIN),
				"value" => Array(__("Enable", GETTEXT_DOMAIN) => 'enable')
			),
			array(
				"type" => "colorpicker",
				"class" => "",
				"heading" => __("Bookmark Secondary Color", GETTEXT_DOMAIN),
				"param_name" => "bookmark_sec_color",
				"value" => "",
				"description" => __("Select bookmark secondary color.", GETTEXT_DOMAIN),
			),
			array(
				 "type" => "textfield",
				 "holder" => "div",
				 "class" => "",
				 "heading" => __("Padding Top", GETTEXT_DOMAIN),
				 "param_name" => "padding_top",
				 "value" => '',
				 "description" => __("Padding top of container, only integers (ex: 10, 50, 100).", GETTEXT_DOMAIN)
			),
			array(
				 "type" => "textfield",
				 "holder" => "div",
				 "class" => "",
				 "heading" => __("Padding Bottom", GETTEXT_DOMAIN),
				 "param_name" => "padding_bottom",
				 "value" => '',
				 "description" => __("Padding bottom of container, only integers (ex: 10, 50, 100).", GETTEXT_DOMAIN)
			),
			array(
				 "type" => "textfield",
				 "holder" => "div",
				 "class" => "",
				 "heading" => __("Padding Left", GETTEXT_DOMAIN),
				 "param_name" => "padding_left",
				 "value" => '',
				 "description" => __("Padding left of container, only integers (ex: 10, 50, 100).", GETTEXT_DOMAIN)
			),
			array(
				 "type" => "textfield",
				 "holder" => "div",
				 "class" => "",
				 "heading" => __("Padding Right", GETTEXT_DOMAIN),
				 "param_name" => "padding_right",
				 "value" => '',
				 "description" => __("Padding right of container, only integers (ex: 10, 50, 100).", GETTEXT_DOMAIN)
			),
		
		),
		"js_view" => 'VcColumnView'
	));

	if ( class_exists( 'WPBakeryShortCodesContainer' ) ) {
		class WPBakeryShortCode_vc_featured_container extends WPBakeryShortCodesContainer {
		}
	}

?>