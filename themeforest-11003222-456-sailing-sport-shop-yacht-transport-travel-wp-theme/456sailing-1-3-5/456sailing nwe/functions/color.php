<?php function lpd_color_styles() {?>

<?php
$theme_color_1 = ot_get_option('theme_color');
$theme_color_2 = ot_get_option('theme_color_2');
$theme_color_3 = ot_get_option('theme_color_3');
$theme_color_4 = ot_get_option('theme_color_4');

if($theme_color_1==""){
	$theme_color_1 = "red";
}

if($theme_color_2==""){
	$theme_color_2 = "#93d4f0";
}

if($theme_color_3==""){
	$theme_color_3 = "#feb005";
}

if($theme_color_4==""){
	$theme_color_4 = "#ffcc66";
}

$header_color = ot_get_option('header_color');
$footer_meta_color = ot_get_option('footer_meta_color');

if($header_color==""||$footer_meta_color==""){
	$header_color = "#1a74b1";
	$footer_meta_color = "#1a74b1";
}

$header_color_2 = ot_get_option('header_color_2');
$footer_meta_color_2 = ot_get_option('footer_meta_color_2');

if($header_color_2==""||$footer_meta_color_2==""){
	$header_color_2 = "#93d4f0";
	$footer_meta_color_2 = "#93d4f0";
}
?>

<?php if($theme_color_1||$theme_color_2||$theme_color_3||$theme_color_4){?>
<style>
/*------------------------------------------------------------------
1. <?php echo $theme_color_1;?>
-------------------------------------------------------------------*/
a {
  color: <?php echo $theme_color_1;?>;
}
#footer-meta .duo-color-bg .color-1{
	background-color: <?php echo $footer_meta_color;?>;
}
.header-bottom .duo-color-bg .color-1,
.header-middle .duo-color-bg .color-1{
	background-color: <?php echo $header_color;?>;
}
.header-bottom .header-bottom-container .col-md-4{
	background-color: <?php echo $header_color;?>;
}
.cart-icon .count{
	background-color: <?php echo $theme_color_1;?>;
}
.wpml-switcher > .current-lang .language_code{
	background-color: <?php echo $theme_color_1;?>;
}
.cart-dropdown{
	border-color: <?php echo $theme_color_1;?>; 
}
.widget.widget_rss ul li a:hover,
.widget.widget_pages ul li a:hover,
.widget.widget_nav_menu ul li a:hover,
.widget.widget_login ul li a:hover,
.widget.widget_meta ul li a:hover,
.widget.widget_categories ul li a:hover,
.widget.widget_archive ul li a:hover,
.widget.widget_recent_comments ul li a:hover,
.widget.widget_recent_entries ul li a:hover{
	color: <?php echo $theme_color_1;?>; 
}
.tagcloud a:hover,
.tags a:hover{
	background-color: <?php echo $theme_color_1;?>;
	border-color: <?php echo $theme_color_1;?>;	
}
#footer-meta .footer-meta-container .row > div.the-first-fm-column{
	background-color: <?php echo $footer_meta_color;?>;
}
.blog-post-taxo:before{
	background-color: <?php echo $theme_color_1;?>;
}
.blog-post-meta .date span.day{
	color: <?php echo $theme_color_1;?>;
}
.dropcap1{
    background-color: <?php echo $theme_color_1;?>;
}
.wordpress-456sailing .wpb_toggle:before,
.wordpress-456sailing #content h4.wpb_toggle:before{
	background-color: <?php echo $theme_color_1;?>;
}
.wordpress-456sailing .wpb_content_element .wpb_accordion_wrapper .wpb_accordion_header:before{
	background-color: <?php echo $theme_color_1;?>;
}
.btn-warning {
  background-color: <?php echo $theme_color_1;?>;
}
.lpd-product-category-wrap:before{
  background-color: <?php echo $theme_color_1;?>;
}
.lpd-module:before{
  background-color: <?php echo $theme_color_1;?>;
}
.lpd-checkout-accordion .panel-title a{
  background-color: <?php echo $theme_color_1;?>;
}
.menu3dmega > ul.menu3dmega-style-1 > li.open > a span,
.menu3dmega > ul.menu3dmega-style-1 > li.current-menu-item > a span,
.menu3dmega > ul.menu3dmega-style-1 > li.current_page_item > a span,
.menu3dmega > ul.menu3dmega-style-1 > li.current-page-ancestor > a span,
.menu3dmega > ul.menu3dmega-style-1 > li.current-menu-parent > a span,
.menu3dmega > ul.menu3dmega-style-1 > li.current_page_item > a span,
.menu3dmega > ul.menu3dmega-style-1 > li.current_page_parent > a span,
.menu3dmega > ul.menu3dmega-style-1 > li.current_page_ancestor > a span{
    background-color: <?php echo $theme_color_1;?>;
}
.menu3dmega > ul.menu3dmega-style-1 > li > a:hover span{
    background-color: <?php echo $theme_color_1;?>;
}
.csstransforms3d .menu3dmega-3d-effect  a span::before {
    background-color: <?php echo $theme_color_1;?> !important;
}
@media screen and (-ms-high-contrast: active), (-ms-high-contrast: none) {
	.menu3dmega > ul.menu3dmega-style-1 li > a:hover span{
		background-color: <?php echo $theme_color_1;?>;
	}
}
_:-ms-fullscreen, :root .menu3dmega > ul.menu3dmega-style-1 li > a:hover span{
	background-color: <?php echo $theme_color_1;?>;
}
.wordpress-456sailing .widget_product_categories ul li a:hover{
	color: <?php echo $theme_color_1;?>;
	text-decoration: underline;
}
.lpd-post-widget .widget-meta{
    background-color: <?php echo $theme_color_1;?>;
}
.lpd-product-thumbnail .wc-forward,
.lpd-product-btn{
    background-color: <?php echo $theme_color_1;?>;
}
.wordpress-456sailing .wpb_accordion .wpb_accordion_wrapper .ui-state-default .ui-icon,
.wordpress-456sailing .wpb_accordion .wpb_accordion_wrapper .ui-state-active .ui-icon{
    background-color: <?php echo $theme_color_1;?>;
}
.tw-title-wrap{
	background-color: <?php echo $theme_color_1;?>;	
}
.lpd-checkout-accordion .panel{
	border-color: <?php echo $theme_color_1;?>;
}
.lpd-checkout-accordion .panel-title a.collapsed:before{
	background-color: <?php echo $theme_color_1;?>;	
}

/*------------------------------------------------------------------
2. <?php echo $theme_color_2;?>
-------------------------------------------------------------------*/
.btn-warning:hover,
.btn-warning:focus,
.btn-warning:active,
.btn-warning.active{
  background-color: <?php echo $theme_color_2;?>;
}
.menu3dmega > ul.menu3dmega-style-1 > li.open > a:hover span,
.menu3dmega > ul.menu3dmega-style-1 > li.current-menu-item > a:hover span,
.menu3dmega > ul.menu3dmega-style-1 > li.current_page_item > a:hover span,
.menu3dmega > ul.menu3dmega-style-1 > li.current-page-ancestor > a:hover span,
.menu3dmega > ul.menu3dmega-style-1 > li.current-menu-parent > a:hover span,
.menu3dmega > ul.menu3dmega-style-1 > li.current_page_item > a:hover span,
.menu3dmega > ul.menu3dmega-style-1 > li.current_page_parent > a:hover span,
.menu3dmega > ul.menu3dmega-style-1 > li.current_page_ancestor > a:hover span{
    background-color: <?php echo $theme_color_2;?>;
}
.csstransforms3d .menu3dmega-3d-effect .current-menu-item > a:hover span::before,
.csstransforms3d .menu3dmega-3d-effect .current_page_item > a:hover span::before,
.csstransforms3d .menu3dmega-3d-effect .current-page-ancestor > a:hover span::before,
.csstransforms3d .menu3dmega-3d-effect .current-menu-parent > a:hover span::before,
.csstransforms3d .menu3dmega-3d-effect .current_page_item > a:hover span::before,
.csstransforms3d .menu3dmega-3d-effect .current_page_parent > a:hover span::before,
.csstransforms3d .menu3dmega-3d-effect .current_page_ancestor > a:hover span::before{
    background-color: <?php echo $theme_color_2;?> !important;
}
.blog-post-meta .date span.month{
	color: <?php echo $theme_color_2;?>;
}

/*------------------------------------------------------------------
3. <?php echo $theme_color_3;?>
-------------------------------------------------------------------*/
a:hover,
a:focus {
  color: <?php echo $theme_color_3;?>;
}
#footer-meta .duo-color-bg .color-2{
	background-color: <?php echo $footer_meta_color_2;?>;
}
.header-bottom .duo-color-bg .color-2,
.header-middle .duo-color-bg .color-2{
	background-color: <?php echo $header_color_2;?>;
}
.header-bottom .header-bottom-container .col-md-8{
	background-color: <?php echo $header_color_2;?>;
}
.btn-primary {
  background-color: <?php echo $theme_color_3;?>;
}
.header-middle-menu li a:hover{
  color: <?php echo $theme_color_3;?>;
}
.header-top a:hover{
  color: <?php echo $theme_color_3;?>;
}
.lpd-shopping-cart:hover .cart-icon .count{
	background-color: <?php echo $theme_color_3;?>;
}
.wpml-switcher:hover > .current-lang .language_code{
	background-color: <?php echo $theme_color_3;?>;
}
.menu3dmega.skin-123garden > ul ul li > a:hover{
    color:<?php echo $theme_color_3;?> !important;
}
.ws-dropdown ul li a:hover{
    color:<?php echo $theme_color_3;?>;
}
.footer.footer-dark-theme .widget.widget_rss ul li a:hover,
.footer.footer-dark-theme .widget.widget_pages ul li a:hover,
.footer.footer-dark-theme .widget.widget_nav_menu ul li a:hover,
.footer.footer-dark-theme .widget.widget_login ul li a:hover,
.footer.footer-dark-theme .widget.widget_meta ul li a:hover,
.footer.footer-dark-theme .widget.widget_categories ul li a:hover,
.footer.footer-dark-theme .widget.widget_archive ul li a:hover,
.footer.footer-dark-theme .widget.widget_recent_comments ul li a:hover,
.footer.footer-dark-theme .widget.widget_recent_entries ul li a:hover{
    color:<?php echo $theme_color_3;?>;
}
.footer.footer-dark-theme .tagcloud a:hover,
.footer.footer-dark-theme .tags a:hover{
	background-color:<?php echo $theme_color_3;?>;
	border-color:<?php echo $theme_color_3;?>;
}
#footer-meta .footer-meta-container .row > div{
	background-color: <?php echo $footer_meta_color_2;?>;
}
.blog-post-meta .author a:hover{
    color:<?php echo $theme_color_3;?>;	
}
.blog-post-meta .comment:hover{
    color:<?php echo $theme_color_3;?>;	
}
.dropcap2{
    background-color: <?php echo $theme_color_3;?>;
}
.wordpress-456sailing .woocommerce .star-rating,
.wordpress-456sailing.woocommerce-page .star-rating{
	color: <?php echo $theme_color_3;?>;
}
.pw-thumbnail .post-type-icon{
	background-color: <?php echo $theme_color_3;?>;
}
.lpd-post-widget .widget-meta a:hover{
	color: <?php echo $theme_color_3;?>;
}
.sticky .blog-post-title a:hover{
	color: <?php echo $theme_color_3;?>;
}
.lpd-product-thumbnail .wc-forward:hover,
.lpd-product-btn:hover{
    background-color: <?php echo $theme_color_3;?>;
}
.wordpress-456sailing .wpb_accordion .wpb_accordion_wrapper .ui-state-active .ui-icon{
    background-color: <?php echo $theme_color_3;?>;
}
.tabs-dark-bg a{
	color: <?php echo $theme_color_3;?>;
}
.lpd-checkout-accordion .panel-title a:before{
    background-color: <?php echo $theme_color_3;?>;
}

/*------------------------------------------------------------------
4. <?php echo $theme_color_4;?>
-------------------------------------------------------------------*/
.btn-primary:hover,
.btn-primary:focus,
.btn-primary:active,
.btn-primary.active{
  background-color: <?php echo $theme_color_4;?>;
}
.wordpress-456sailing .wpb_tabs .wpb_tabs_nav li.ui-tabs-active a{
	border-color: <?php echo $theme_color_4;?>;
}
.wordpress-456sailing .wpb_content_element .wpb_tour_tabs_wrapper .wpb_tabs_nav .ui-tabs-active a{
	border-color: <?php echo $theme_color_4;?>;
}
.wordpress-456sailing .woocommerce #content div.product .product_title,
.wordpress-456sailing .woocommerce div.product .product_title,
.wordpress-456sailing.woocommerce-page #content div.product .product_title,
.wordpress-456sailing.woocommerce-page div.product .product_title{
	border-bottom-color: <?php echo $theme_color_4;?>;
}
.wordpress-456sailing .woocommerce #content div.product .woocommerce-tabs ul.tabs li.active a,
.wordpress-456sailing .woocommerce div.product .woocommerce-tabs ul.tabs li.active a,
.wordpress-456sailing.woocommerce-page #content div.product .woocommerce-tabs ul.tabs li.active a,
.wordpress-456sailing.woocommerce-page div.product .woocommerce-tabs ul.tabs li.active a{
	border-color: <?php echo $theme_color_4;?>;
}
.lpd-post-widget:hover .title a{
	color: <?php echo $theme_color_4;?>;
}
.deco-sep-line-50,
.deco-sep-line-100,
.deco-sep-line-150,
.deco-sep-line-200{
  background-color: <?php echo $theme_color_4;?>;	
}
.lpd-progress-bar .progress-bar{
  background-color: <?php echo $theme_color_4;?>;
}
.owl-theme .owl-controls .owl-nav [class*=owl-]:hover{
	border-color: <?php echo $theme_color_4;?>;
}
</style>
<?php }?>

<?php }?>
<?php add_action( 'wp_head', 'lpd_color_styles' );?>