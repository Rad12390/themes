<?php function lpd_fonts_styles() {
	
	require_once(ABSPATH .'/wp-admin/includes/plugin.php');
	
?>

<?php $body_font_family = ot_get_option('body_font_family');
	
	if ($body_font_family==""){
		$body_font_family = "Raleway";
	}
?>

<?php $heading_font_family = ot_get_option('heading_font_family');
	
	if ($heading_font_family==""){
		$heading_font_family = "Raleway";
	}
?>

<?php $elements_font_family = ot_get_option('elements_font_family');
	
	if ($elements_font_family==""){
		$elements_font_family = "Lato";
	}
?>

<?php $body_font_size  = ot_get_option('body_font_size');
	
	if ($body_font_size == ""){
		$body_font_size  = "13";
	}
?>

<?php $navigation_font_size  = ot_get_option('navigation_font_size');
	
	if ($navigation_font_size == ""){
		$navigation_font_size  = "13";
	}
?>

<?php $dropdown_font_size  = ot_get_option('dropdown_font_size');
	
	if ($dropdown_font_size == ""){
		$dropdown_font_size  = "13";
	}
?>

<?php $navigation_font_style  = ot_get_option('navigation_font_style');
	
	if ($navigation_font_style == ""){
		$navigation_font_style  = "400";
	}
?>

<?php $dropdown_font_style  = ot_get_option('dropdown_font_style');
	
	if ($dropdown_font_style == ""){
		$dropdown_font_style  = "400";
	}
?>

<?php $navigation_text_transform  = ot_get_option('navigation_text_transform');
	
	if ($navigation_text_transform != ""){
		$navigation_text_transform  = "text-transform:uppercase;";
	}
?>
<?php $dropdown_text_transform  = ot_get_option('dropdown_text_transform');
	
	if ($dropdown_text_transform != ""){
		$dropdown_text_transform  = "text-transform:uppercase;";
	}
?>
<?php $navigation_letter_spacing  = ot_get_option('navigation_letter_spacing');
	
	if ($navigation_letter_spacing != ""){
		$navigation_letter_spacing  = "letter-spacing:".esc_html($navigation_letter_spacing)."px;";
	}
?>
<?php $dropdown_letter_spacing  = ot_get_option('dropdown_letter_spacing');
	
	if ($dropdown_letter_spacing != ""){
		$dropdown_letter_spacing  = "letter-spacing:".esc_html($dropdown_letter_spacing)."px;";
	}
?>
<?php $button_letter_spacing  = ot_get_option('button_letter_spacing');
	
	if ($button_letter_spacing != ""){
		$button_letter_spacing  = "letter-spacing:".esc_html($button_letter_spacing)."px;";
	}

$button_font_style  = ot_get_option('button_font_style');
?>

<?php
$tk_body_font  = ot_get_option('tk_body_font');
$tk_heading_font  = ot_get_option('tk_heading_font');
$tk_elements_font  = ot_get_option('tk_elements_font');
?>

<style>
.menu3dmega > ul > li > a, .menu3dmega > ul > li > span{
	font-weight: <?php echo esc_html($navigation_font_style);?>;
	font-size: <?php echo esc_html($navigation_font_size);?>px;
	<?php echo $navigation_text_transform;?>
	<?php echo $navigation_letter_spacing;?>
}
.menu3dmega > ul ul li > a{
	font-weight: <?php echo esc_html($dropdown_font_style);?>;
	font-size: <?php echo esc_html($dropdown_font_size);?>px;
	<?php echo $dropdown_text_transform;?>
	<?php echo $dropdown_letter_spacing;?>
}
.btn{
	font-weight: <?php esc_html($button_font_style);?>;
	<?php echo $button_letter_spacing;?>
}
.form-control,
body{
	font-size: <?php echo esc_html($body_font_size);?>px;
}
.tagcloud a, .tags a,
.cart-icon .count,
.wpml-switcher > .current-lang .language_code,
.fm-item-title,
#footer-meta .sm_label,
.tooltip,
.lpd-product-data,
.lpd-out-of-s,
.lpd-onsale,
.wordpress-456sail .woocommerce #content .quantity,
.wordpress-456sail .woocommerce .quantity,
.wordpress-456sail.woocommerce-page #content .quantity,
.wordpress-456sail.woocommerce-page .quantity,
.wordpress-456sail .woocommerce #content div.product p.price,
.wordpress-456sail .woocommerce #content div.product span.price,
.wordpress-456sail .woocommerce div.product p.price,
.wordpress-456sail .woocommerce div.product span.price,
.wordpress-456sail.woocommerce-page #content div.product p.price
.wordpress-456sail.woocommerce-page #content div.product span.price,
.wordpress-456sail.woocommerce-page div.product p.price,
.wordpress-456sail.woocommerce-page div.product span.price,
.wordpress-456sail .woocommerce table.shop_table td.product-subtotal,
.wordpress-456sail.woocommerce-page table.shop_table td.product-subtotal,
.wordpress-456sail .woocommerce table.shop_table td.product-subtotal,
.wordpress-456sail.woocommerce-page table.shop_table td.product-subtotal,
.wordpress-456sail .woocommerce table.shop_table td.product-price,
.wordpress-456sail.woocommerce-page table.shop_table td.product-price,
.wordpress-456sail .woocommerce table.shop_table td.product-price,
.wordpress-456sail.woocommerce-page table.shop_table td.product-price,
.mh_description.mh-font-style,
.mega_header .sub-title,
.mh2-font-style,
.pw-font-style,
.secondary-font-style,
.lpd_header_content.font_type_2,
.vc_progress_bar,
.lpd_icon_header_content.font_type_2,
.lpd-banner h3,
.lpd-module.font-type-2 h3,
#title-breadcrumb h1,
.blog-post-title,
.blog-post-meta .date span.month,
.wordpress-456sailing .woocommerce #content div.product .product_title,
.wordpress-456sailing .woocommerce div.product .product_title,
.wordpress-456sailing.woocommerce-page #content div.product .product_title,
.wordpress-456sailing.woocommerce-page div.product .product_title,
.wordpress-456sailing .woocommerce #content div.product p.price,
.wordpress-456sailing .woocommerce #content div.product span.price,
.wordpress-456sailing .woocommerce div.product p.price,
.wordpress-456sailing .woocommerce div.product span.price,
.wordpress-456sailing.woocommerce-page #content div.product p.price,
.wordpress-456sailing.woocommerce-page #content div.product span.price,
.wordpress-456sailing.woocommerce-page div.product p.price,
.wordpress-456sailing.woocommerce-page div.product span.price,
.lpd-testimonial h5,
.lpd-product-category-wrap .lpd-product-category-content h3,
.wordpress-456sailing .vc_separator.separator-style-3 h4,
h3.tw-title,
.feac-title.feac-title-style2 h4,
.total-cart-wrap h2,
#order_review_heading,
.lpd-checkout-accordion .panel-title a,
.lpd-product-title-secondary h3,
#shopping_cart_panel .shopping_cart_title,
.lpd-shopping-cart-title{
	font-family:
	<?php if($tk_elements_font){
		echo esc_html($tk_elements_font);
	}else{
	    if($elements_font_family == 'Open+Sans'){
	        echo "'Open Sans', 'Helvetica Neue', Helvetica, Arial, sans-serif";
	    }elseif($elements_font_family == 'Titillium+Web'){
	        echo "'Titillium Web', 'Helvetica Neue', Helvetica, Arial, sans-serif";
	    }elseif($elements_font_family == 'Oxygen'){
	        echo "'Oxygen', 'Helvetica Neue', Helvetica, Arial, sans-serif";
	    }elseif($elements_font_family == 'Quicksand'){
	        echo "'Quicksand', 'Helvetica Neue', Helvetica, Arial, sans-serif";
	    }elseif($elements_font_family == 'Lato'){
	        echo "'Lato', 'Helvetica Neue', Helvetica, Arial, sans-serif";
	    }elseif($elements_font_family == 'Raleway'){
	        echo "'Raleway', 'Helvetica Neue', Helvetica, Arial, sans-serif";
	    }elseif($elements_font_family == 'Source+Sans+Pro'){
	        echo "'Source Sans Pro', 'Helvetica Neue', Helvetica, Arial, sans-serif";
	    }elseif($elements_font_family == 'Dosis'){
	        echo "'Dosis', 'Helvetica Neue', Helvetica, Arial, sans-serif";
	    }elseif($elements_font_family == 'Exo'){
	        echo "'Exo', 'Helvetica Neue', Helvetica, Arial, sans-serif";
	    }elseif($elements_font_family == 'Arvo'){
	        echo "'Arvo', serif";
	    }elseif($elements_font_family == 'Vollkorn'){
	        echo "'Vollkorn', serif";
	    }elseif($elements_font_family == 'Ubuntu'){
	        echo "'Ubuntu', 'Helvetica Neue', Helvetica, Arial, sans-serif";
	    }elseif($elements_font_family == 'PT+Sans'){
	        echo "'PT Sans', 'Helvetica Neue', Helvetica, Arial, sans-serif";
	    }elseif($elements_font_family == 'PT+Serif'){
	        echo "'PT Serif', serif";
	    }elseif($elements_font_family == 'Droid+Sans'){
	        echo "'Droid Sans', 'Helvetica Neue', Helvetica, Arial, sans-serif";
	    }elseif($elements_font_family == 'Droid+Serif'){
	        echo "'Droid Serif', serif";
	    }elseif($elements_font_family == 'Cabin'){
	        echo "'Cabin', 'Helvetica Neue', Helvetica, Arial, sans-serif";
	    }elseif($elements_font_family == 'Lora'){
	        echo "'Lora', serif";
	    }elseif($elements_font_family == 'Oswald'){
	        echo "'Oswald', 'Helvetica Neue', Helvetica, Arial, sans-serif";
	    }elseif($elements_font_family == 'Varela+Round'){
	        echo "'Varela Round', 'Helvetica Neue', Helvetica, Arial, sans-serif";
	    }elseif($elements_font_family == 'Unna'){
	        echo "'Unna', serif";
	    }elseif($elements_font_family == 'Rokkitt'){
	        echo "'Rokkitt', serif";
	    }elseif($elements_font_family == 'Merriweather'){
	        echo "'Merriweather', serif";
	    }elseif($elements_font_family == 'Bitter'){
	        echo "'Bitter', serif";
	    }elseif($elements_font_family == 'Kreon'){
	        echo "'Kreon', serif";
	    }elseif($elements_font_family == 'Playfair+Display'){
	        echo "'Playfair Display', serif";
	    }elseif($elements_font_family == 'Roboto+Slab'){
	        echo "'Roboto Slab', serif";
	    }elseif($elements_font_family == 'Bree+Serif'){
	        echo "'Bree Serif', serif";
	    }elseif($elements_font_family == 'Libre+Baskerville'){
	        echo "'Libre Baskerville', serif";
	    }elseif($elements_font_family == 'Cantata+One'){
	        echo "'Cantata One', serif";
	    }elseif($elements_font_family == 'Alegreya'){
	        echo "'Alegreya', serif";
	    }elseif($elements_font_family == 'Noto+Serif'){
	        echo "'Noto Serif', serif";
	    }elseif($elements_font_family == 'EB+Garamond'){
	        echo "'EB Garamond', serif";
	    }elseif($elements_font_family == 'Noticia+Text'){
	        echo "'Noticia Text', serif";
	    }elseif($elements_font_family == 'Old+Standard+TT'){
	        echo "'Old Standard TT', serif";
	    }elseif($elements_font_family == 'Crimson+Text'){
	        echo "'Crimson Text', serif";
	    }elseif($elements_font_family == 'Josefin+Sans'){
	        echo "'Josefin Sans','Helvetica Neue', Helvetica, Arial, sans-serif";
	    }elseif($elements_font_family == 'Ubuntu'){
	        echo "'Ubuntu','Helvetica Neue', Helvetica, Arial, sans-serif";
	    }elseif($elements_font_family == 'museo-sans'){
	        echo '"museo-sans", sans-serif';
	    }elseif($elements_font_family == 'museo-slab'){
	        echo '"museo-slab", serif';
	    }elseif($elements_font_family == 'adelle'){
	        echo '"adelle", serif';
	    }elseif($elements_font_family == 'nimbus-sans'){
	        echo '"nimbus-sans", sans-serif';
	    }elseif($elements_font_family == 'museo'){
	        echo '"museo", serif';
	    }elseif($elements_font_family == 'ff-enzo-web'){
	        echo '"ff-enzo-web", sans-serif';
	    }elseif($elements_font_family == 'adobe-garamond-pro'){
	        echo '"adobe-garamond-pro", sans-serif';
	    }else{
	       echo esc_html($elements_font_family); 
	    }
    }?>;
}
body{
	font-family:
	<?php if($tk_body_font){
		echo esc_html($tk_body_font);
	}else{
		if($body_font_family == 'Open+Sans'){
	        echo "'Open Sans', 'Helvetica Neue', Helvetica, Arial, sans-serif";
	    }elseif($body_font_family == 'Titillium+Web'){
	        echo "'Titillium Web', 'Helvetica Neue', Helvetica, Arial, sans-serif";
	    }elseif($body_font_family == 'Oxygen'){
	        echo "'Oxygen', 'Helvetica Neue', Helvetica, Arial, sans-serif";
	    }elseif($body_font_family == 'Quicksand'){
	        echo "'Quicksand', 'Helvetica Neue', Helvetica, Arial, sans-serif";
	    }elseif($body_font_family == 'Lato'){
	        echo "'Lato', 'Helvetica Neue', Helvetica, Arial, sans-serif";
	    }elseif($body_font_family == 'Raleway'){
	        echo "'Raleway', 'Helvetica Neue', Helvetica, Arial, sans-serif";
	    }elseif($body_font_family == 'Source+Sans+Pro'){
	        echo "'Source Sans Pro', 'Helvetica Neue', Helvetica, Arial, sans-serif";
	    }elseif($body_font_family == 'Dosis'){
	        echo "'Dosis', 'Helvetica Neue', Helvetica, Arial, sans-serif";
	    }elseif($body_font_family == 'Exo'){
	        echo "'Exo', 'Helvetica Neue', Helvetica, Arial, sans-serif";
	    }elseif($body_font_family == 'Arvo'){
	        echo "'Arvo', serif";
	    }elseif($body_font_family == 'Vollkorn'){
	        echo "'Vollkorn', serif";
	    }elseif($body_font_family == 'Ubuntu'){
	        echo "'Ubuntu', 'Helvetica Neue', Helvetica, Arial, sans-serif";
	    }elseif($body_font_family == 'PT+Sans'){
	        echo "'PT Sans', 'Helvetica Neue', Helvetica, Arial, sans-serif";
	    }elseif($body_font_family == 'PT+Serif'){
	        echo "'PT Serif', serif";
	    }elseif($body_font_family == 'Droid+Sans'){
	        echo "'Droid Sans', 'Helvetica Neue', Helvetica, Arial, sans-serif";
	    }elseif($body_font_family == 'Droid+Serif'){
	        echo "'Droid Serif', serif";
	    }elseif($body_font_family == 'Cabin'){
	        echo "'Cabin', 'Helvetica Neue', Helvetica, Arial, sans-serif";
	    }elseif($body_font_family == 'Lora'){
	        echo "'Lora', serif";
	    }elseif($body_font_family == 'Oswald'){
	        echo "'Oswald', 'Helvetica Neue', Helvetica, Arial, sans-serif";
	    }elseif($body_font_family == 'Varela+Round'){
	        echo "'Varela Round', 'Helvetica Neue', Helvetica, Arial, sans-serif";
	    }elseif($body_font_family == 'Unna'){
	        echo "'Unna', serif";
	    }elseif($body_font_family == 'Rokkitt'){
	        echo "'Rokkitt', serif";
	    }elseif($body_font_family == 'Merriweather'){
	        echo "'Merriweather', serif";
	    }elseif($body_font_family == 'Bitter'){
	        echo "'Bitter', serif";
	    }elseif($body_font_family == 'Kreon'){
	        echo "'Kreon', serif";
	    }elseif($body_font_family == 'Playfair+Display'){
	        echo "'Playfair Display', serif";
	    }elseif($body_font_family == 'Roboto+Slab'){
	        echo "'Roboto Slab', serif";
	    }elseif($body_font_family == 'Bree+Serif'){
	        echo "'Bree Serif', serif";
	    }elseif($body_font_family == 'Libre+Baskerville'){
	        echo "'Libre Baskerville', serif";
	    }elseif($body_font_family == 'Cantata+One'){
	        echo "'Cantata One', serif";
	    }elseif($body_font_family == 'Alegreya'){
	        echo "'Alegreya', serif";
	    }elseif($body_font_family == 'Noto+Serif'){
	        echo "'Noto Serif', serif";
	    }elseif($body_font_family == 'EB+Garamond'){
	        echo "'EB Garamond', serif";
	    }elseif($body_font_family == 'Noticia+Text'){
	        echo "'Noticia Text', serif";
	    }elseif($body_font_family == 'Old+Standard+TT'){
	        echo "'Old Standard TT', serif";
	    }elseif($body_font_family == 'Crimson+Text'){
	        echo "'Crimson Text', serif";
	    }elseif($body_font_family == 'Josefin+Sans'){
	        echo "'Josefin Sans','Helvetica Neue', Helvetica, Arial, sans-serif";
	    }elseif($body_font_family == 'Ubuntu'){
	        echo "'Ubuntu','Helvetica Neue', Helvetica, Arial, sans-serif";
	    }elseif($body_font_family == 'museo-sans'){
	        echo '"museo-sans", sans-serif';
	    }elseif($body_font_family == 'museo-slab'){
	        echo '"museo-slab", serif';
	    }elseif($body_font_family == 'adelle'){
	        echo '"adelle", serif';
	    }elseif($body_font_family == 'nimbus-sans'){
	        echo '"nimbus-sans", sans-serif';
	    }elseif($body_font_family == 'museo'){
	        echo '"museo", serif';
	    }elseif($body_font_family == 'ff-enzo-web'){
	        echo '"ff-enzo-web", sans-serif';
	    }elseif($body_font_family == 'adobe-garamond-pro'){
	        echo '"adobe-garamond-pro", sans-serif';
	    }else{
	       echo esc_html($body_font_family); 
	    }
    }?>;
}
h1,h2,h3,h4,h5,h6,.h1,.h2,.h3,.h4,.h5,.h6{
	font-family:
	<?php if($tk_heading_font){
		echo esc_html($tk_heading_font);
	}else{
	    if($heading_font_family == 'Open+Sans'){
	        echo "'Open Sans', 'Helvetica Neue', Helvetica, Arial, sans-serif";
	    }elseif($heading_font_family == 'Titillium+Web'){
	        echo "'Titillium Web', 'Helvetica Neue', Helvetica, Arial, sans-serif";
	    }elseif($heading_font_family == 'Oxygen'){
	        echo "'Oxygen', 'Helvetica Neue', Helvetica, Arial, sans-serif";
	    }elseif($heading_font_family == 'Quicksand'){
	        echo "'Quicksand', 'Helvetica Neue', Helvetica, Arial, sans-serif";
	    }elseif($heading_font_family == 'Lato'){
	        echo "'Lato', 'Helvetica Neue', Helvetica, Arial, sans-serif";
	    }elseif($heading_font_family == 'Raleway'){
	        echo "'Raleway', 'Helvetica Neue', Helvetica, Arial, sans-serif";
	    }elseif($heading_font_family == 'Source+Sans+Pro'){
	        echo "'Source Sans Pro', 'Helvetica Neue', Helvetica, Arial, sans-serif";
	    }elseif($heading_font_family == 'Dosis'){
	        echo "'Dosis', 'Helvetica Neue', Helvetica, Arial, sans-serif";
	    }elseif($heading_font_family == 'Exo'){
	        echo "'Exo', 'Helvetica Neue', Helvetica, Arial, sans-serif";
	    }elseif($heading_font_family == 'Arvo'){
	        echo "'Arvo', serif";
	    }elseif($heading_font_family == 'Vollkorn'){
	        echo "'Vollkorn', serif";
	    }elseif($heading_font_family == 'Ubuntu'){
	        echo "'Ubuntu', 'Helvetica Neue', Helvetica, Arial, sans-serif";
	    }elseif($heading_font_family == 'PT+Sans'){
	        echo "'PT Sans', 'Helvetica Neue', Helvetica, Arial, sans-serif";
	    }elseif($heading_font_family == 'PT+Serif'){
	        echo "'PT Serif', serif";
	    }elseif($heading_font_family == 'Droid+Sans'){
	        echo "'Droid Sans', 'Helvetica Neue', Helvetica, Arial, sans-serif";
	    }elseif($heading_font_family == 'Droid+Serif'){
	        echo "'Droid Serif', serif";
	    }elseif($heading_font_family == 'Cabin'){
	        echo "'Cabin', 'Helvetica Neue', Helvetica, Arial, sans-serif";
	    }elseif($heading_font_family == 'Lora'){
	        echo "'Lora', serif";
	    }elseif($heading_font_family == 'Oswald'){
	        echo "'Oswald', 'Helvetica Neue', Helvetica, Arial, sans-serif";
	    }elseif($heading_font_family == 'Varela+Round'){
	        echo "'Varela Round', 'Helvetica Neue', Helvetica, Arial, sans-serif";
	    }elseif($heading_font_family == 'Unna'){
	        echo "'Unna', serif";
	    }elseif($heading_font_family == 'Rokkitt'){
	        echo "'Rokkitt', serif";
	    }elseif($heading_font_family == 'Merriweather'){
	        echo "'Merriweather', serif";
	    }elseif($heading_font_family == 'Bitter'){
	        echo "'Bitter', serif";
	    }elseif($heading_font_family == 'Kreon'){
	        echo "'Kreon', serif";
	    }elseif($heading_font_family == 'Playfair+Display'){
	        echo "'Playfair Display', serif";
	    }elseif($heading_font_family == 'Roboto+Slab'){
	        echo "'Roboto Slab', serif";
	    }elseif($heading_font_family == 'Bree+Serif'){
	        echo "'Bree Serif', serif";
	    }elseif($heading_font_family == 'Libre+Baskerville'){
	        echo "'Libre Baskerville', serif";
	    }elseif($heading_font_family == 'Cantata+One'){
	        echo "'Cantata One', serif";
	    }elseif($heading_font_family == 'Alegreya'){
	        echo "'Alegreya', serif";
	    }elseif($heading_font_family == 'Noto+Serif'){
	        echo "'Noto Serif', serif";
	    }elseif($heading_font_family == 'EB+Garamond'){
	        echo "'EB Garamond', serif";
	    }elseif($heading_font_family == 'Noticia+Text'){
	        echo "'Noticia Text', serif";
	    }elseif($heading_font_family == 'Old+Standard+TT'){
	        echo "'Old Standard TT', serif";
	    }elseif($heading_font_family == 'Crimson+Text'){
	        echo "'Crimson Text', serif";
	    }elseif($heading_font_family == 'Josefin+Sans'){
	        echo "'Josefin Sans','Helvetica Neue', Helvetica, Arial, sans-serif";
	    }elseif($heading_font_family == 'Ubuntu'){
	        echo "'Ubuntu','Helvetica Neue', Helvetica, Arial, sans-serif";
	    }elseif($heading_font_family == 'museo-sans'){
	        echo '"museo-sans", sans-serif';
	    }elseif($heading_font_family == 'museo-slab'){
	        echo '"museo-slab", serif';
	    }elseif($heading_font_family == 'adelle'){
	        echo '"adelle", serif';
	    }elseif($heading_font_family == 'nimbus-sans'){
	        echo '"nimbus-sans", sans-serif';
	    }elseif($heading_font_family == 'museo'){
	        echo '"museo", serif';
	    }elseif($heading_font_family == 'ff-enzo-web'){
	        echo '"ff-enzo-web", sans-serif';
	    }elseif($heading_font_family == 'adobe-garamond-pro'){
	        echo '"adobe-garamond-pro", sans-serif';
	    }else{
	       echo esc_html($heading_font_family); 
	    }
    }?>;
}
</style>

<?php }?>
<?php add_action( 'wp_head', 'lpd_fonts_styles' );?>