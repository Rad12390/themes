<?php 
	
if (is_plugin_active('js_composer/js_composer.php')) {

	require_once (TEMPLATEPATH. '/functions/vc/vc_add_shortcode.php');
	require_once (TEMPLATEPATH. '/functions/vc/vc_banner.php');
	require_once (TEMPLATEPATH. '/functions/vc/vc_blockquote.php');
	require_once (TEMPLATEPATH. '/functions/vc/vc_bullet_list.php');
	require_once (TEMPLATEPATH. '/functions/vc/vc_new_button.php');
	require_once (TEMPLATEPATH. '/functions/vc/vc_featured_container.php');
	require_once (TEMPLATEPATH. '/functions/vc/vc_front_container.php');
	require_once (TEMPLATEPATH. '/functions/vc/vc_lpd_header.php');
	require_once (TEMPLATEPATH. '/functions/vc/vc_intro_container.php');
	require_once (TEMPLATEPATH. '/functions/vc/vc_icon_element_2.php');
	require_once (TEMPLATEPATH. '/functions/vc/vc_lpd_icon_header.php');
	require_once (TEMPLATEPATH. '/functions/vc/vc_icon_module.php');
	require_once (TEMPLATEPATH. '/functions/vc/vc_icon_working_time.php');
	require_once (TEMPLATEPATH. '/functions/vc/vc_mega_header.php');
	require_once (TEMPLATEPATH. '/functions/vc/vc_module.php');
	require_once (TEMPLATEPATH. '/functions/vc/vc_package.php');
	require_once (TEMPLATEPATH. '/functions/vc/vc_post_widget.php');
	require_once (TEMPLATEPATH. '/functions/vc/vc_sale_container.php');
	require_once (TEMPLATEPATH. '/functions/vc/vc_team_widget.php');
	require_once (TEMPLATEPATH. '/functions/vc/vc_testimonial.php');
	require_once (TEMPLATEPATH. '/functions/vc/vc_working_hours.php');
	
	if (is_plugin_active('woocommerce/woocommerce.php')) {
		require_once (TEMPLATEPATH. '/functions/vc/vc_woo_carousel_products.php');
		require_once (TEMPLATEPATH. '/functions/vc/vc_woo_carousel_product_categories.php');
		require_once (TEMPLATEPATH. '/functions/vc/vc_woo_carousel_product_category.php');
		require_once (TEMPLATEPATH. '/functions/vc/vc_woo_carousel_recent_products.php');
		require_once (TEMPLATEPATH. '/functions/vc/vc_woo_carousel_featured_products.php');;
	}
	
}
	
?>