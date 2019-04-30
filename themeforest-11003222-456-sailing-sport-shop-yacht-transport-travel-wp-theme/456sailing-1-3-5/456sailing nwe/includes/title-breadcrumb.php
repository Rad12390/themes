<?php
$page_title_a_type = ot_get_option('page_title_a_type');
$page_title_a_speed = ot_get_option('page_title_a_speed');
$page_title_a_delay = ot_get_option('page_title_a_delay');
$page_title_a_offset = ot_get_option('page_title_a_offset');
$page_title_a_easing = ot_get_option('page_title_a_easing');

if(!$page_title_a_speed){
	$page_title_a_speed = '1000';
}
if(!$page_title_a_delay){
	$page_title_a_delay = '0';
}

if(!$page_title_a_offset){
	$page_title_a_offset = '80';
}

$animation_att = ' data-animation="'.$page_title_a_type.'" data-speed="'.$page_title_a_speed.'" data-delay="'.$page_title_a_delay.'" data-offset="'.$page_title_a_offset.'" data-easing="'.$page_title_a_easing.'"';
?>

<div id="title-breadcrumb" <?php echo lpd_page_header_image(); ?>>
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div<?php echo lpd_title_padding(); ?> class="title-wrap<?php if($page_title_a_type){?> cre-animate<?php }?>"<?php if($page_title_a_type){ echo $animation_att;}?>>
					<h1><?php echo lpd_title();?></h1>
				</div>
			</div>
		</div>
	</div>
</div>
