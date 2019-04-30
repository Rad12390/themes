<?php 
    $custom_logo = ot_get_option('custom_logo');
    $header_type = ot_get_option('header_type');
	$custom_logo_tm = ot_get_option('custom_logo_tm');
?>

	<?php if($custom_logo){?>
	<div class="logo img">
	    <a href="<?php echo esc_url(home_url()); ?>"<?php if($custom_logo_tm){?> style="margin-top:<?php echo esc_attr($custom_logo_tm); ?>px;"<?php }?>><img alt="<?php bloginfo( 'name' ); ?>" src="<?php echo esc_url($custom_logo)?>"/></a>
	</div>
	<?php }else{?>
	<div class="logo">
	    <a href="<?php echo esc_url(home_url()); ?>"><?php bloginfo( 'name' ); ?></a>
	</div>
	<?php }?>