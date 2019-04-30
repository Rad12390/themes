<?php

// v1.3

// icon working time

function vc_icon_working_time_func( $atts, $content = null ) {
   extract( shortcode_atts( array(
		'title' => '',
		'title_font_size' => '',
		'title_font_weight' => '',
		'title_letter_spacing' => '',
		'title_italic' => '',
		'bg_color' => '',
		'icon' => '',
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
   ), $atts ) );
   
	if ( empty( $title_font_size ) ) {
		$title_font_size = '30px';
	}
	if ( empty( $title_font_weight ) ) {
		$title_font_weight = '300';
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
   
   ob_start();?>
   
	<div class="vc_lpd_icon_working_time"<?php echo $im_styles; ?>>
		<?php if($title||$icon){?>
			<div class="iw_icon_title">
				<?php if($icon){?>
				<div class="iw-icon">
					<img class="iw-icon-img" alt="" src="<?php echo esc_url($icon[0]);?>">
					
				</div>
				<?php } ?>
				<?php if($title) {?><h3 class="iw-title"<?php echo $title_styles; ?>><?php echo esc_html($title);?></h3><?php } ?>
			</div>
		<?php } ?>
        <?php if($workweek||$monday_time||$tuesday_time||$wednesday_time||$thursday_time||$friday_time||$weekend||$saturday_time||$sunday_time||$holidays){?>
        <ul>
			<?php if($workweek){?><li><span><?php esc_html_e("Workweek", GETTEXT_DOMAIN); ?>:</span><span class="right"><?php echo esc_html($workweek); ?></span></li><?php } ?>
			<?php if($monday_time){?><li><span><?php esc_html_e("Monday", GETTEXT_DOMAIN); ?>:</span><span class="right"><?php echo esc_html($monday_time); ?></span></li><?php } ?>
			<?php if($tuesday_time){?><li><span><?php esc_html_e("Tuesday", GETTEXT_DOMAIN); ?>:</span><span class="right"><?php echo esc_html($tuesday_time); ?></span></li><?php } ?>
			<?php if($wednesday_time){?><li><span><?php esc_html_e("Wednesday", GETTEXT_DOMAIN); ?>:</span><span class="right"><?php echo esc_html($wednesday_time); ?></span></li><?php } ?>
			<?php if($thursday_time){?><li><span><?php esc_html_e("Thursday", GETTEXT_DOMAIN); ?>:</span><span class="right"><?php echo esc_html($thursday_time); ?></span></li><?php } ?>
			<?php if($friday_time){?><li><span><?php esc_html_e("Friday", GETTEXT_DOMAIN); ?>:</span><span class="right"><?php echo esc_html($friday_time); ?></span></li><?php } ?>
			<?php if($weekend){?><li><span><?php esc_html_e("Weekend", GETTEXT_DOMAIN); ?>:</span><span class="right"><?php echo esc_html($weekend); ?></span></li><?php } ?>
			<?php if($saturday_time){?><li><span><?php esc_html_e("Saturday", GETTEXT_DOMAIN); ?>:</span><span class="right"><?php echo esc_html($saturday_time); ?></span></li><?php } ?>
			<?php if($sunday_time){?><li><span><?php esc_html_e("Sunday", GETTEXT_DOMAIN); ?>:</span><span class="right"><?php echo esc_html($sunday_time); ?></span></li><?php } ?>
			<?php if($holidays){?><li><span><?php esc_html_e("Holidays", GETTEXT_DOMAIN); ?>:</span><span class="right"><?php echo esc_html($holidays); ?></span></li><?php } ?>
        </ul>
        <?php } ?>
	</div>

   <?php return ob_get_clean();
}
add_shortcode( 'vc_icon_working_time', 'vc_icon_working_time_func' );


vc_map(array(
   "name" => __("Icon Working Hours", GETTEXT_DOMAIN),
   "base" => "vc_icon_working_time",
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
			 "heading" => __("Monday", GETTEXT_DOMAIN),
			 "param_name" => "monday_time",
			 "value" => "",
			 "description" => __("Enter the value (ex:  8am to 5pm).", GETTEXT_DOMAIN)
		),
		array(
			 "type" => "textfield",
			 "holder" => "div",
			 "class" => "",
			 "heading" => __("Tuesday", GETTEXT_DOMAIN),
			 "param_name" => "tuesday_time",
			 "value" => "",
			 "description" => __("Enter the value (ex:  8am to 5pm).", GETTEXT_DOMAIN)
		),
		array(
			 "type" => "textfield",
			 "holder" => "div",
			 "class" => "",
			 "heading" => __("Wednesday", GETTEXT_DOMAIN),
			 "param_name" => "wednesday_time",
			 "value" => "",
			 "description" => __("Enter the value (ex:  8am to 5pm).", GETTEXT_DOMAIN)
		),
		array(
			 "type" => "textfield",
			 "holder" => "div",
			 "class" => "",
			 "heading" => __("Thursday", GETTEXT_DOMAIN),
			 "param_name" => "thursday_time",
			 "value" => "",
			 "description" => __("Enter the value (ex:  8am to 5pm).", GETTEXT_DOMAIN)
		),
		array(
			 "type" => "textfield",
			 "holder" => "div",
			 "class" => "",
			 "heading" => __("Friday", GETTEXT_DOMAIN),
			 "param_name" => "friday_time",
			 "value" => "",
			 "description" => __("Enter the value (ex:  8am to 5pm).", GETTEXT_DOMAIN)
		),
		array(
			 "type" => "textfield",
			 "holder" => "div",
			 "class" => "",
			 "heading" => __("Saturday", GETTEXT_DOMAIN),
			 "param_name" => "saturday_time",
			 "value" => "",
			 "description" => __("Enter the value (ex:  8am to 5pm).", GETTEXT_DOMAIN)
		),
		array(
			 "type" => "textfield",
			 "holder" => "div",
			 "class" => "",
			 "heading" => __("Sunday", GETTEXT_DOMAIN),
			 "param_name" => "sunday_time",
			 "value" => "",
			 "description" => __("Enter the value (ex:  8am to 5pm).", GETTEXT_DOMAIN)
		),
		array(
			 "type" => "textfield",
			 "holder" => "div",
			 "class" => "",
			 "heading" => __("Workweek", GETTEXT_DOMAIN),
			 "param_name" => "workweek",
			 "value" => "",
			 "description" => __("Enter the value (ex:  8am to 5pm).", GETTEXT_DOMAIN)
		),
		array(
			 "type" => "textfield",
			 "holder" => "div",
			 "class" => "",
			 "heading" => __("Weekend", GETTEXT_DOMAIN),
			 "param_name" => "weekend",
			 "value" => "",
			 "description" => __("Enter the value (ex:  8am to 5pm).", GETTEXT_DOMAIN)
		),
		array(
			 "type" => "textfield",
			 "holder" => "div",
			 "class" => "",
			 "heading" => __("Holidays", GETTEXT_DOMAIN),
			 "param_name" => "holidays",
			 "value" => "",
			 "description" => __("Enter the value (ex:  8am to 5pm).", GETTEXT_DOMAIN)
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