<?php function lpd_shop_styles_styles() {?>

<?php $sale_flash_color= ot_get_option('sale_flash_color');?>
<?php $prodcut_font_weight= ot_get_option('prodcut_font_weight');?>
<?php $product_font_size= ot_get_option('product_font_size');?>
<?php $product_line_height= ot_get_option('product_line_height');?>
<?php $product_letter_spacing= ot_get_option('product_letter_spacing');?>
<?php $product_uppercase= ot_get_option('product_uppercase');?>
<?php $sku_font_size= ot_get_option('sku_font_size');?>
<?php $product_price_font_size= ot_get_option('product_price_font_size');?>

<?php if($sale_flash_color||$prodcut_font_weight||$product_font_size||$product_line_height||$product_letter_spacing||$sku_font_size||$product_price_font_size){?><style>

<?php if($sale_flash_color){?>.lpd-onsale-2,.lpd-onsale{background:<?php echo esc_html($sale_flash_color); ?>;}<?php }?>

<?php if($prodcut_font_weight||$product_font_size||$product_line_height||$product_letter_spacing){?>
.lpd-product-title h3{
<?php if($prodcut_font_weight){?>font-weight:<?php echo esc_html($prodcut_font_weight); ?>;<?php }?>
<?php if($product_font_size){?>font-size:<?php echo esc_html($product_font_size); ?>px;<?php }?>
<?php if($product_line_height){?>line-height:<?php echo esc_html($product_font_size); ?>px;<?php }?>
<?php if($product_letter_spacing){?>letter-spacing:<?php echo esc_html($product_letter_spacing); ?>px;<?php }?>
<?php if($product_uppercase!=''){?>text-transform: uppercase;<?php }?>
}
<?php }?>

<?php if($sku_font_size){?>.lpd-product-meta .lpd-product-sku{font-size:<?php echo esc_html($sku_font_size); ?>px;}<?php }?>

<?php if($product_price_font_size){?>ul.lpd-products li.type-product .price{font-size:<?php echo esc_html($product_price_font_size); ?>px;}<?php }?>

</style><?php }?>

<?php }?>
<?php add_action( 'wp_head', 'lpd_shop_styles_styles' );?>