<?php 
    $hb_left_container = ot_get_option('hb_left_container');
    $hb_left_container_icon = ot_get_option('hb_left_container_icon');
    $hb_left_container_icon_bg = ot_get_option('hb_left_container_icon_bg');
    $hb_right_container = ot_get_option('hb_right_container');
    $hb_right_container_icon = ot_get_option('hb_right_container_icon');
    $hb_right_container_icon_bg = ot_get_option('hb_right_container_icon_bg');
?>

		<?php if($hb_left_container||$hb_right_container){?>
		<div class="header-bottom">
			<div class="duo-color-bg">
				<div class="color-1"></div>
				<div class="color-2"></div>
			</div>
			<div class="container header-bottom-container">
				<div class="row">
					<div class="col-md-4">
						<div class="hbc-left<?php if($hb_left_container_icon){?> hbc_left_icon_active<?php }?>"><?php if($hb_left_container){?><?php if($hb_left_container_icon){?><span class="hbc_left_icon" style="background-color:<?php echo esc_attr($hb_left_container_icon_bg);?>;"><img alt="" src="<?php echo esc_url($hb_left_container_icon);?>"></span><?php }?><?php }?><?php echo esc_html($hb_left_container);?></div>	
					</div>
					<div class="col-md-8">
						<div class="hbc-right<?php if($hb_right_container_icon){?> hbc_right_icon_active<?php }?>"><?php if($hb_right_container){?><?php if($hb_right_container_icon){?><span class="hbc_right_icon" style="background-color:<?php echo esc_attr($hb_right_container_icon_bg);?>;"><img alt="" src="<?php echo esc_url($hb_right_container_icon);?>"></span><?php }?><?php }?><?php echo esc_html($hb_right_container);?></div>	
					</div>
				</div>
			</div>	
		</div>
		<?php }?>