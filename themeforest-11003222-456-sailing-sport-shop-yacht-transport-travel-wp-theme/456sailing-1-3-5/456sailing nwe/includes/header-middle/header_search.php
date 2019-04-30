<?php $header_search = ot_get_option('header_search');?>
<?php $search_tm = ot_get_option('search_tm');?>
<?php $search_locations = ot_get_option('search_locations'); ?>
<?php $s_cart = ot_get_option('s_cart'); ?>
<?php $wpml_switcher = ot_get_option('wpml_switcher'); ?>

<?php if($header_search != "none"){ ?>
<div class="header-middle-search<?php if($search_locations=='bottom_right_h'): if($s_cart!=""||$wpml_switcher!=""){ echo ' header-middle-search_margin_right'; } endif; ?>"<?php if($search_locations=='left_h'||$search_locations=='right_h'):?><?php if($search_tm):?> style="margin-top:<?php echo esc_attr($search_tm);?>px"<?php endif; ?><?php endif; ?>>
	
	<?php if($header_search == "shop_search"){ ?>
		<form role="form" method="get" class="clearfix" action="<?php echo esc_url( home_url( '/'  ) ); ?>">
			<input type="hidden" name="post_type" value="product" />
		    <button type="submit" class="search-btn"></button>
		    <input type="search" class="form-control" id="s" name="s" placeholder="<?php esc_attr_e( 'Search For Products', GETTEXT_DOMAIN ); ?>">
			
		</form>
	<?php } elseif($header_search == "theme_search"){?>
		<form role="form" method="get" class="clearfix" action="<?php echo esc_url( home_url( '/'  ) ); ?>">
		    <button type="submit" class="search-btn"></button>
		    <input type="search" class="form-control" id="s" name="s" placeholder="<?php esc_attr_e( 'Search Site', GETTEXT_DOMAIN ); ?>">
		</form>
	<?php }?>
	
</div>
<?php }?>