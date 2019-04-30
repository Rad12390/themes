<?php

// v1.3

// sail container

function vc_sale_container_func( $atts, $content = null ) { // New function parameter $content is added!
   extract( shortcode_atts( array(
	'title' => '',
	'price' => '',
	'elements_color' => '',
	'badge_text' => '',
	'badge_color' => '',
   ), $atts ) );
	
	$content = wpb_js_remove_wpautop($content); // fix unclosed/unwanted paragraph tags in $content

   ob_start();?>
   
	<?php if($title&&$content){?>
		<div class="lpd-sale-container">
			<div class="lsc-title"><span class="lsc-title-title"><?php echo esc_html($title);?></span><span class="lsc-title-element" style="color:<?php echo esc_attr($elements_color);?>;"></span><span class="lsc-title-price" style="color:<?php echo esc_attr($elements_color);?>;"><?php echo esc_html($price);?></span></div>
			<div class="lsc-content"><?php echo $content;?></div>
			<?php if($badge_text){?><div class="lsc-badge" style="background-color:<?php echo esc_attr($badge_color);?>;"><?php echo esc_html($badge_text);?></div><?php } ?>
		</div>
	<?php } ?>

   <?php return ob_get_clean();
}
add_shortcode( 'vc_sale_container', 'vc_sale_container_func' );


vc_map(array(
   "name" => __("Sale Container", GETTEXT_DOMAIN),
   "base" => "vc_sale_container",
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
			 "value" => '',
			 "description" => __("Enter your title.", GETTEXT_DOMAIN)
		),
		array(
			 "type" => "textfield",
			 "holder" => "div",
			 "class" => "",
			 "heading" => __("Price", GETTEXT_DOMAIN),
			 "param_name" => "price",
			 "value" => '',
			 "description" => __("Enter your price.", GETTEXT_DOMAIN)
		),
		array(
			"type" => "colorpicker",
			"class" => "",
			"heading" => __("Elements Color", GETTEXT_DOMAIN),
			"param_name" => "elements_color",
			"value" => "",
			"description" => __("Select elements color.", GETTEXT_DOMAIN),
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
			 "heading" => __("Badge Text", GETTEXT_DOMAIN),
			 "param_name" => "badge_text",
			 "value" => "",
			 "description" => __("Enter your content if you want to display your badge.", GETTEXT_DOMAIN)
		),
		array(
			"type" => "colorpicker",
			"holder" => "div",
			"class" => "",
			"heading" => __("Badge Color", GETTEXT_DOMAIN),
			"param_name" => "badge_color",
			"value" => '',
			"description" => __("Choose badge color.", GETTEXT_DOMAIN)
		)
   )
));

?>