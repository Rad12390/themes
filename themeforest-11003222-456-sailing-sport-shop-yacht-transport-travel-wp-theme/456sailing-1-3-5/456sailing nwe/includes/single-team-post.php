<?php $position = get_post_meta($post->ID, 'team_options_text', true);?>

<?php $facebook = get_post_meta($post->ID, 'team_options_facebook', true);?>
<?php $twitter = get_post_meta($post->ID, 'team_options_twitter', true);?>
<?php $linkedin = get_post_meta($post->ID, 'team_options_linkedin', true);?>
<?php $pinterest = get_post_meta($post->ID, 'team_options_pinterest', true);?>
<?php $google_plus = get_post_meta($post->ID, 'team_options_google_plus', true);?>
<?php $tumblr = get_post_meta($post->ID, 'team_options_tumblr', true);?>
<?php $instagram = get_post_meta($post->ID, 'team_options_instagram', true);?>
<?php $custom1_icon = get_post_meta($post->ID, 'team_options_custom1_icon', true);?>
<?php $custom1_title = get_post_meta($post->ID, 'team_options_custom1_title', true);?>
<?php $custom1_url = get_post_meta($post->ID, 'team_options_custom1_url', true);?>
<?php $custom2_icon = get_post_meta($post->ID, 'team_options_custom2_icon', true);?>
<?php $custom2_title = get_post_meta($post->ID, 'team_options_custom2_title', true);?>
<?php $custom2_url = get_post_meta($post->ID, 'team_options_custom2_url', true);?>
<?php $progress_bar = get_post_meta($post->ID, 'team_options_repeatable', true);?>
<?php if($progress_bar){$progress_bar = array_filter($progress_bar);};?>
<?php $team_post_a_type = ot_get_option('team_post_a_type');
$team_post_a_speed = ot_get_option('team_post_a_speed');
$team_post_a_delay = ot_get_option('team_post_a_delay');
$team_post_a_offset = ot_get_option('team_post_a_offset');
$team_post_a_easing = ot_get_option('team_post_a_easing');

if(!$team_post_a_speed){
	$team_post_a_speed = '1000';
}
if(!$team_post_a_delay){
	$team_post_a_delay = '0';
}

if(!$team_post_a_offset){
	$team_post_a_offset = '80';
}

$animation_att = ' data-animation="'.esc_attr($team_post_a_type).'" data-speed="'.esc_attr($team_post_a_speed).'" data-delay="'.esc_attr($team_post_a_delay).'" data-offset="'.esc_attr($team_post_a_offset).'" data-easing="'.esc_attr($team_post_a_easing).'"';

?>

<div id="post-<?php the_ID(); ?>" class="single-post <?php $allClasses = get_post_class(); foreach ($allClasses as $class) { echo $class . " "; } ?>">
	<div class="row">
	
	<?php if ((function_exists('has_post_thumbnail')) && (has_post_thumbnail())) {?>
	
	<?php $post_thumbnail_id = get_post_thumbnail_id(); ?> 
	<?php $alt = get_post_meta($post_thumbnail_id, '_wp_attachment_image_alt', true);?>
	
		<div class="col-md-6">
			<img class="page-thumbnail img-responsive<?php if($team_post_a_type){?> cre-animate<?php }?>" alt="<?php echo esc_attr($alt); ?>" src="<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'theme-size-3x4' ); echo esc_url($image[0]);?>"<?php if($team_post_a_type){ echo $animation_att;}?> />
		</div>
	
	<?php } else{?>
	
		<div class="col-md-6">
			<img class="page-thumbnail img-responsive<?php if($team_post_a_type){?> cre-animate<?php }?>" alt="<?php esc_html_e('No Image', GETTEXT_DOMAIN) ?>" src="<?php echo get_template_directory_uri(). '/assets/img/add-featured-image-portrait.png'; ?>"<?php if($team_post_a_type){ echo $animation_att;}?> />
		</div>
	
	<?php }?>
	
	<div class="col-md-6<?php if($team_post_a_type){?> cre-animate<?php }?>"<?php if($team_post_a_type){ echo $animation_att;}?>>
		<h4><?php the_title(); ?></h4>
		<?php if ($position) {?>
		<span><?php echo esc_html($position); ?></span>
		<?php }?>
		<?php if ($facebook||$twitter||$linkedin||$pinterest||$google_plus||$tumblr||$instagram||$custom1_icon||$custom2_icon) {?>
		<div class="about-post-details meta_colored_icons picons_social">
			<ul>
				<?php if ($facebook) {?><li><a href="<?php echo esc_url($facebook); ?>"><span class="icon facebook1"></span>Facebook</a></li><?php }?>
				<?php if ($twitter) {?><li><a href="<?php echo esc_url($twitter); ?>"><span class="icon twitter1"></span>Twitter</a></li><?php }?>
				<?php if ($linkedin) {?><li><a href="<?php echo esc_url($linkedin); ?>"><span class="icon linkedin1"></span>LinkedInk</a></li><?php }?>
				<?php if ($pinterest) {?><li><a href="<?php echo esc_url($pinterest); ?>"><span class="icon pinterest1"></span>Pinterest</a></li><?php }?>
				<?php if ($google_plus) {?><li><a href="<?php echo esc_url($google_plus); ?>"><span class="icon google_plus1"></span>Google Plus+</a></li><?php }?>
				<?php if ($tumblr) {?><li><a href="<?php echo esc_url($tumblr); ?>"><span class="icon tumblr1"></span>Tumblr</a></li><?php }?>
				<?php if ($instagram) {?><li><a href="<?php echo esc_url($instagram); ?>"><span class="icon instagram1"></span>Instagram</a></li><?php }?>
				
				<?php if ($custom1_icon&&$custom1_url) {?><li><a href="<?php echo esc_url($custom1_url); ?>"><span class="icon custom-icon"<?php if ($custom1_icon) {?> style="background-image:url(<?php $custom1_icon_image = wp_get_attachment_image_src( $custom1_icon, 'full' ); echo esc_url($custom1_icon_image[0]);?>);"<?php }?>></span><?php echo esc_html($custom1_title); ?></a></li><?php }?>
				<?php if ($custom2_icon&&$custom2_url) {?><li><a href="<?php echo esc_url($custom2_url); ?>"><span class="icon custom-icon"<?php if ($custom2_icon) {?> style="background-image:url(<?php $custom2_icon_image = wp_get_attachment_image_src( $custom2_icon, 'full' ); echo esc_url($custom2_icon_image[0]);?>);"<?php }?>></span><?php echo esc_html($custom2_title); ?></a></li><?php }?>
			</ul>
		</div>
		<?php }?>
		
		<?php
        $separator = "|";
        $output = '';
        foreach ($progress_bar as $item) {
            if($item){
                list($item_text1, $item_text2) = explode($separator, trim($item));
                
				$output .= '<div class="lpd-progress-bar">';
				$output .= '	<span class="progress-title">' . esc_html($item_text2) . ' ' . esc_html($item_text1) . '%</span>';
				$output .= '	<div class="progress">';
				$output .= '	  <div class="progress-bar" role="progressbar" aria-valuenow="' . esc_attr($item_text1) . '" aria-valuemin="0" aria-valuemax="100" style="width: ' . esc_attr($item_text1) . '%;">';
				$output .= '	    <span class="sr-only">' . esc_html($item_text1) . '% ' . esc_html($item_text2) . '</span>';
				$output .= '	  </div>';
				$output .= '	</div>';
				$output .= '</div>';
                
            }
        }
        echo $output;
        ?>
        
	</div>
	
	</div>
	
	<div class="content<?php if($team_post_a_type){?> cre-animate<?php }?>"<?php if($team_post_a_type){ echo $animation_att;}?>>
		<?php the_content(); ?>
	</div>
	
</div>