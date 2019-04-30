<?php

// v1.3

// front container

function vc_front_container_func( $atts, $content = null ) {
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
      'btn_color' => '',
      'monday_time' => '',
      'tuesday_time' => '',
      'wednesday_time' => '',
      'thursday_time' => '',
      'friday_time' => '',
      'saturday_time' => '',
      'sunday_time' => '',
      'workweek' => '',
      'weekend' => '',
      'holidays' => '',
      'min_height' => '',
      'icon_styles' => '',
      'icon_bg_color' => '',
      'bookmark_sec_color' => '',
   ), $atts ) );
   

	if ( empty( $title_font_size ) ) {
		$title_font_size = '30px';
	}
	if ( empty( $title_font_weight ) ) {
		$title_font_weight = '300';
	}
   
   $icon = wp_get_attachment_image_src( $icon, 'full' );
   
   $content = wpb_js_remove_wpautop($content);
   
   if($icon_bg_color!=''){$icon_bg_color = ' style="background-color:'.esc_attr($icon_bg_color). ';"';}
   
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
	
	if($bookmark_sec_color!=""){
	
		global $shortcode_atts;
		
		$shortcode_atts = array(
			'bookmark_sec_color' => $bookmark_sec_color,
		);
		
		global $lpd_front_container_ID;
		
		$lpd_front_container_ID = rand();
		
	}
   
   ob_start();?>
   
	<div class="vc_lpd_front_container-<?php echo esc_attr($lpd_front_container_ID) ;?> vc_lpd_front_container"<?php echo $im_styles; ?>>
		<?php if($title||$icon){?>
			<div class="iw_icon_title">
				<?php if($icon){?>
				<div class="fc-icon<?php if($icon_styles!=''){?> fc-icon-bg<?php } ?>"<?php if($icon_styles!=''){ echo $icon_bg_color; } ?>>
					<img class="fc-icon-img" alt="" src="<?php echo esc_url($icon[0]);?>">	
				</div>
				<?php } ?>
				<?php if($title) {?><h3 class="fc-title"<?php echo $title_styles; ?>><?php echo esc_html($title);?></h3><?php } ?>
			</div>
		<?php } ?>
		<?php if($content) {?><div class="fc-content"><?php echo $content;?></div><?php } ?>
        <?php if($workweek||$monday_time||$tuesday_time||$wednesday_time||$thursday_time||$friday_time||$weekend||$saturday_time||$sunday_time||$holidays){?>
        <ul>
			<?php if($workweek){?><li><span><?php esc_html_e("Workweek", GETTEXT_DOMAIN); ?>:</span><span class="right"><?php echo esc_html($workweek); ?></span></li><?php } ?>
			<?php if($monday_time){?><li><span><?php esc_html_e("Monday", GETTEXT_DOMAIN); ?>:</span><span class="right"><?php echo esc_html($monday_time); ?></span></li><?php } ?>
			<?php if($tuesday_time){?><li><span><?php esc_html_e("Tuesday", GETTEXT_DOMAIN); ?>:</span><span class="right"><?php echo esc_html($tuesday_time); ?></span></li><?php } ?>
			<?php if($wednesday_time){?><li><span><?php esc_html_e("Wednesday", GETTEXT_DOMAIN); ?>:</span><span class="right"><?php echo esc_html($wednesday_time); ?></span></li><?php } ?>
			<?php if($thursday_time){?><li><span><?php esc_html_e("Thursday", GETTEXT_DOMAIN); ?>:</span><span class="right"><?php echo esc_html($thursday_time); ?></span></li><?php } ?>
			<?php if($friday_time){?><li><span><?php esc_html_e("Friday", GETTEXT_DOMAIN); ?>:</span><span class="right"><?php echo esc_html($friday_time); ?></span></li><?php } ?>
			<?php if($weekend){?><li><span><?php esc_html_e("Weekend", GETTEXT_DOMAIN); ?>:</span><span class="right"><?php echo esc_html($weekend); ?></span></li><?php } ?>
			<?php if($saturday_time){?><li><span><?php esc_html_e("Saturday ", GETTEXT_DOMAIN); ?>:</span><span class="right"><?php echo esc_html($saturday_time); ?></span></li><?php } ?>
			<?php if($sunday_time){?><li><span><?php esc_html_e("Sunday", GETTEXT_DOMAIN); ?>:</span><span class="right"><?php echo esc_html($sunday_time); ?></span></li><?php } ?>
			<?php if($holidays){?><li><span><?php esc_html_e("Holidays", GETTEXT_DOMAIN); ?>:</span><span class="right"><?php echo esc_html($holidays); ?></span></li><?php } ?>
        </ul>
        <?php } ?>
        <?php if($bn_text){?><a href="<?php echo esc_url($link_url) ;?>" title="<?php echo esc_attr($link_title) ;?>" target="<?php echo esc_attr($link_target) ;?>" class="btn btn-primary btn-sm fc-btn" style="background-color:<?php echo esc_attr($btn_color);?>;"><?php echo esc_html($bn_text); ?></a><?php } ?>
	</div>
	
	<?php
	if($bookmark_sec_color!=""){ 
		$counter_js = new lpd_front_container_class();
		
		$counter_js->lpd_front_container_callback();
	}	
	?>

   <?php return ob_get_clean();
}

class lpd_front_container_class
{
    protected static $var = '';

    public static function lpd_front_container_callback(){
    
	global $lpd_front_container_ID;
	
	global $shortcode_atts;
	
	$bookmark_sec_color = $shortcode_atts['bookmark_sec_color'];
	
		ob_start();?>
		
		<style>
		<?php if($bookmark_sec_color!=""){?>.vc_lpd_front_container-<?php echo $lpd_front_container_ID; ?>:after{border-right: 30px solid <?php echo $bookmark_sec_color; ?>;}<?php }?>
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

add_shortcode( 'vc_front_container', 'vc_front_container_func' );


vc_map(array(
   "name" => __("Front Container", GETTEXT_DOMAIN),
   "base" => "vc_front_container",
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
	      "type" => 'checkbox',
	      "heading" => __("Icon Styles", GETTEXT_DOMAIN),
	      "param_name" => "icon_styles",
	      "description" => __("Check, if you wish to enable icon styles.", GETTEXT_DOMAIN),
	      "value" => Array(__("enable", GETTEXT_DOMAIN) => 'enable')
	    ),
		array(
			"type" => "colorpicker",
			"class" => "",
			"heading" => __("Icon Background Color", GETTEXT_DOMAIN),
			"param_name" => "icon_bg_color",
			"value" => "",
			"description" => __("Select background button color.", GETTEXT_DOMAIN),
			"dependency" => Array('element' => "icon_styles", 'value' => 'enable')
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
			 "type" => "textarea_html",
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
			"type" => "colorpicker",
			"class" => "",
			"heading" => __("Button Color", GETTEXT_DOMAIN),
			"param_name" => "btn_color",
			"value" => "",
			"description" => __("Select background button color.", GETTEXT_DOMAIN),
		),
	    array(
	      "type" => 'checkbox',
	      "heading" => __("Working Hours", GETTEXT_DOMAIN),
	      "param_name" => "working_hours",
	      "description" => __("Check, if you wish to enable working hours.", GETTEXT_DOMAIN),
	      "value" => Array(__("enable", GETTEXT_DOMAIN) => 'enable')
	    ),
		array(
			 "type" => "textfield",
			 "holder" => "div",
			 "class" => "",
			 "heading" => __("Monday", GETTEXT_DOMAIN),
			 "param_name" => "monday_time",
			 "value" => "",
			 "description" => __("Enter the value (ex:  8am to 5pm).", GETTEXT_DOMAIN),
			 "dependency" => Array('element' => "working_hours", 'value' => 'enable')
		),
		array(
			 "type" => "textfield",
			 "holder" => "div",
			 "class" => "",
			 "heading" => __("Tuesday", GETTEXT_DOMAIN),
			 "param_name" => "tuesday_time",
			 "value" => __("", GETTEXT_DOMAIN),
			 "description" => __("Enter the value (ex:  8am to 5pm).", GETTEXT_DOMAIN),
			 "dependency" => Array('element' => "working_hours", 'value' => 'enable')
		),
		array(
			 "type" => "textfield",
			 "holder" => "div",
			 "class" => "",
			 "heading" => __("Wednesday", GETTEXT_DOMAIN),
			 "param_name" => "wednesday_time",
			 "value" => "",
			 "description" => __("Enter the value (ex:  8am to 5pm).", GETTEXT_DOMAIN),
			 "dependency" => Array('element' => "working_hours", 'value' => 'enable')
		),
		array(
			 "type" => "textfield",
			 "holder" => "div",
			 "class" => "",
			 "heading" => __("Thursday", GETTEXT_DOMAIN),
			 "param_name" => "thursday_time",
			 "value" => "",
			 "description" => __("Enter the value (ex:  8am to 5pm).", GETTEXT_DOMAIN),
			 "dependency" => Array('element' => "working_hours", 'value' => 'enable')
		),
		array(
			 "type" => "textfield",
			 "holder" => "div",
			 "class" => "",
			 "heading" => __("Friday", GETTEXT_DOMAIN),
			 "param_name" => "friday_time",
			 "value" => "",
			 "description" => __("Enter the value (ex:  8am to 5pm).", GETTEXT_DOMAIN),
			 "dependency" => Array('element' => "working_hours", 'value' => 'enable')
		),
		array(
			 "type" => "textfield",
			 "holder" => "div",
			 "class" => "",
			 "heading" => __("Saturday", GETTEXT_DOMAIN),
			 "param_name" => "saturday_time",
			 "value" => "",
			 "description" => __("Enter the value (ex:  8am to 5pm).", GETTEXT_DOMAIN),
			 "dependency" => Array('element' => "working_hours", 'value' => 'enable')
		),
		array(
			 "type" => "textfield",
			 "holder" => "div",
			 "class" => "",
			 "heading" => __("Sunday", GETTEXT_DOMAIN),
			 "param_name" => "sunday_time",
			 "value" => "",
			 "description" => __("Enter the value (ex:  8am to 5pm).", GETTEXT_DOMAIN),
			 "dependency" => Array('element' => "working_hours", 'value' => 'enable')
		),
		array(
			 "type" => "textfield",
			 "holder" => "div",
			 "class" => "",
			 "heading" => __("Workweek", GETTEXT_DOMAIN),
			 "param_name" => "workweek",
			 "value" => "",
			 "description" => __("Enter the value (ex:  8am to 5pm).", GETTEXT_DOMAIN),
			 "dependency" => Array('element' => "working_hours", 'value' => 'enable')
		),
		array(
			 "type" => "textfield",
			 "holder" => "div",
			 "class" => "",
			 "heading" => __("Weekend", GETTEXT_DOMAIN),
			 "param_name" => "weekend",
			 "value" => "",
			 "description" => __("Enter the value (ex:  8am to 5pm).", GETTEXT_DOMAIN),
			 "dependency" => Array('element' => "working_hours", 'value' => 'enable')
		),
		array(
			 "type" => "textfield",
			 "holder" => "div",
			 "class" => "",
			 "heading" => __("Holidays", GETTEXT_DOMAIN),
			 "param_name" => "holidays",
			 "value" => "",
			 "description" => __("Enter the value (ex:  8am to 5pm).", GETTEXT_DOMAIN),
			 "dependency" => Array('element' => "working_hours", 'value' => 'enable')
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