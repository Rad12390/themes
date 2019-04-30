	<?php $decorative_icon_header = ot_get_option('decorative_icon_header'); ?>
	<?php $decorative_icon_size = ot_get_option('decorative_icon_size'); ?>

	<div class="header-sep-line-icon">
		
	<?php if($decorative_icon_header){?>
	<div class="hsli-icon<?php if($decorative_icon_size){?> hsli-icon-<?php echo esc_attr($decorative_icon_size);?><?php } ?>">
		<img class="hsli-icon-img" alt="" src="<?php echo esc_url($decorative_icon_header);?>">
	</div>
	<?php } ?>
		
	</div>