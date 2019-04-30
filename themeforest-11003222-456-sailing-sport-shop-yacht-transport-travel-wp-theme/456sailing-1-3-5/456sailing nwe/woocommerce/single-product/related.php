<?php
/**
 * Related Products
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product/related.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see 	    https://docs.woocommerce.com/document/template-structure/
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     3.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

global $product, $post, $woocommerce_loop;

$related = $product->get_related( $posts_per_page );

if ( sizeof( $related ) == 0 ) return;

$args = apply_filters( 'woocommerce_related_products_args', array(
	'post_type'				=> 'product',
	'ignore_sticky_posts'	=> 1,
	'no_found_rows' 		=> 1,
	'posts_per_page' 		=> $posts_per_page,
	'orderby' 				=> $orderby,
	'post__in' 				=> $related,
	'post__not_in'			=> array( $product->id )
) );

$products = new WP_Query( $args );

$woocommerce_loop['columns'] = $columns;

if ( $products->have_posts() ) :
if ( $related_products ) :

 ?>
<?php $product_bottom_a_type = ot_get_option('product_bottom_a_type');
$product_bottom_a_speed = ot_get_option('product_bottom_a_speed');
$product_bottom_a_delay = ot_get_option('product_bottom_a_delay');
$product_bottom_a_offset = ot_get_option('product_bottom_a_offset');
$product_bottom_a_easing = ot_get_option('product_bottom_a_easing');

if(!$product_bottom_a_speed){
	$product_bottom_a_speed = '1000';
}
if(!$product_bottom_a_delay){
	$product_bottom_a_delay = '0';
}

if(!$product_bottom_a_offset){
	$product_bottom_a_offset = '80';
}

$animation_att = ' data-animation="'.esc_attr($product_bottom_a_type).'" data-speed="'.esc_attr($product_bottom_a_speed).'" data-delay="'.esc_attr($product_bottom_a_delay).'" data-offset="'.esc_attr($product_bottom_a_offset).'" data-easing="'.esc_attr($product_bottom_a_easing).'"';

?>

		<div class="lpd-related lpd-products">
	
			<h2 class="lpd-heading-title<?php if($product_bottom_a_type){?> cre-animate<?php }?>"<?php if($product_bottom_a_type){ echo $animation_att;}?>><span><?php _e( 'Related Products', 'woocommerce' ); ?></span></h2>
	
		<?php woocommerce_product_loop_start(); ?>

			<?php foreach ( $related_products as $related_product ) : ?>

				<?php
				 	$post_object = get_post( $related_product->get_id() );

					setup_postdata( $GLOBALS['post'] =& $post_object );

					wc_get_template_part( 'content', 'product' ); ?>

			<?php endforeach; ?>

		<?php woocommerce_product_loop_end(); ?>
		</div>

<?php endif; endif;

wp_reset_postdata();