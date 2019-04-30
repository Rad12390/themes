<?php
$left_header_email = ot_get_option('left_header_email');
$left_header_email_url = ot_get_option('left_header_email_url');
$left_header_phone = ot_get_option('left_header_phone');
$left_header_phone_url = ot_get_option('left_header_phone_url');
$left_header_location = ot_get_option('left_header_location');
$left_header_location_url = ot_get_option('left_header_location_url');
?>
<?php if($left_header_email||$left_header_phone||$left_header_location){ ?>
<div class="theme-option-contacts">
	<?php if($left_header_email){ ?>
		<?php if($left_header_email_url){ ?>
			<a class="email" href="<?php echo esc_url($left_header_email_url); ?>"><?php echo esc_html($left_header_email); ?></a>
		<?php } else{?>
			<span class="email"><?php echo $left_header_email; ?></span>
		<?php } ?>
	<?php } ?>
	<?php if($left_header_phone){ ?>
		<?php if($left_header_phone_url){ ?>
			<a class="phone" href="<?php echo esc_url($left_header_phone_url); ?>"><?php echo esc_html($left_header_phone); ?></a>
		<?php } else{?>
			<span class="phone"><?php echo $left_header_phone; ?></span>
		<?php } ?>
	<?php } ?>
	<?php if($left_header_location){ ?>
		<?php if($left_header_location_url){ ?>
			<a class="location" href="<?php echo esc_url($left_header_location_url); ?>"><?php echo esc_html($left_header_location); ?></a>
		<?php } else{?>
			<span class="location"><?php echo $left_header_location; ?></span>
		<?php } ?>
	<?php } ?>
</div>
<?php } ?>