	<?php $message_box_content = ot_get_option('message_box_content'); ?>
	<?php $message_box_icon_bg = ot_get_option('message_box_icon_bg'); ?>
	<?php $message_box_icon = ot_get_option('message_box_icon'); ?>
	<?php $message_box_type = ot_get_option('message_box_type'); ?>
	<?php $message_box_tm = ot_get_option('message_box_tm'); ?>
	<?php $message_box_location = ot_get_option('message_box_location'); ?>
	<?php $s_cart = ot_get_option('s_cart');?>
	<?php $wpml_switcher = ot_get_option('wpml_switcher');?>

	<?php if($message_box_content):?>
		<div class="header-message-box<?php if($message_box_icon):?><?php echo ' '.esc_attr($message_box_type);?><?php endif; ?><?php if($message_box_location=='bottom_right'): if($s_cart!=""||$wpml_switcher!=""){ echo ' header-message-box_margin_right'; } endif; ?>"<?php if($message_box_location=='left'||$message_box_location=='right'):?><?php if($message_box_tm):?> style="margin-top:<?php echo esc_attr($message_box_tm);?>px"<?php endif; ?><?php endif; ?>>
			<?php if($message_box_icon):?><div class="hmb-icon" style="background-color:<?php echo esc_attr($message_box_icon_bg);?>"><img alt="" src="<?php echo esc_url($message_box_icon);?>"></div><?php endif; ?>
			<?php echo wp_kses($message_box_content, array('a' => array('href' => array(),'title' => array()),'p' => array(),'span' => array('style' => array()),'b' => array(),'i' => array(),'u' => array(),'em' => array(),'strong' => array()));;?>
		</div>
	<?php endif; ?>