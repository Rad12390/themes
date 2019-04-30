<?php $video = lpd_parse_video(get_post_meta($post->ID, 'video_post_meta', true));?>
<?php $link = get_post_meta($post->ID, 'link_post_meta', true); ?>
<?php $blog_front_a_type = ot_get_option('blog_front_a_type');
$blog_front_a_speed = ot_get_option('blog_front_a_speed');
$blog_front_a_delay = ot_get_option('blog_front_a_delay');
$blog_front_a_offset = ot_get_option('blog_front_a_offset');
$blog_front_a_easing = ot_get_option('blog_front_a_easing');

if(!$blog_front_a_speed){
	$blog_front_a_speed = '1000';
}
if(!$blog_front_a_delay){
	$blog_front_a_delay = '0';
}

if(!$blog_front_a_offset){
	$blog_front_a_offset = '80';
}

$animation_att = ' data-animation="'.$blog_front_a_type.'" data-speed="'.$blog_front_a_speed.'" data-delay="'.$blog_front_a_delay.'" data-offset="'.$blog_front_a_offset.'" data-easing="'.$blog_front_a_easing.'"';

?>

<div class="<?php $allClasses = get_post_class(); foreach ($allClasses as $class) { echo $class . " "; } ?>blog-post">

	
	<div class="blog-post-meta lpd-animated-link">
		<div <?php if($blog_front_a_type){?>class="cre-animate"<?php }?><?php if($blog_front_a_type){ echo $animation_att;}?>>
			<a href="<?php echo esc_url(get_day_link(get_the_time('Y'), get_the_time('m'), get_the_time('d'))); ?>" class="date">
			<span class="month"><?php the_time('M'); ?></span>
			<span class="day"><?php the_time('d'); ?></span></a>
			<div class="author">
				<?php echo get_avatar( get_the_author_meta( 'ID' ), 80 ); ?>
				<a href="<?php echo esc_url(get_author_posts_url(get_the_author_meta( 'ID' ))); ?>"><?php echo esc_html(get_the_author()); ?></a>
			</div>
			<?php if ( !$link ) { ?><a href="<?php comments_link(); ?>" class="comment"><?php comments_number(esc_html__('No Comments', GETTEXT_DOMAIN), esc_html__('1 Comment', GETTEXT_DOMAIN), esc_html__('% Comments', GETTEXT_DOMAIN)); ?></a><?php }?>
		</div>
	</div>
	<div class="blog-post-wrap">
		<?php if (  (function_exists('has_post_thumbnail')) && (has_post_thumbnail())  ) {?> 
			<?php $post_thumbnail_id = get_post_thumbnail_id(); ?> 
			<?php $alt = get_post_meta($post_thumbnail_id, '_wp_attachment_image_alt', true);?>
			<a href="<?php if ( $link ) {echo esc_url($link);}else{the_permalink();}?>" class="blog-post-link-img<?php if($blog_front_a_type){?> cre-animate<?php }?>"<?php if($blog_front_a_type){ echo $animation_att;}?>>
				<img class="page-thumbnail img-responsive" alt="<?php echo esc_attr($alt); ?>" src="<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'theme-size-16x9' ); echo esc_url($image[0]);?>" />
			</a>
		<?php } elseif ( $video ) {?>
			<?php if(has_post_thumbnail()){?>
				<?php $post_thumbnail_id = get_post_thumbnail_id(); ?> 
				<?php $alt = get_post_meta($post_thumbnail_id, '_wp_attachment_image_alt', true);?>
				<a href="<?php the_permalink();?>" class="blog-post-link-img<?php if($blog_front_a_type){?> cre-animate<?php }?>"<?php if($blog_front_a_type){ echo $animation_att;}?>>
					<img class="page-thumbnail img-responsive" alt="<?php echo esc_attr($alt); ?>" src="<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'theme-size-16x9' ); echo esc_url($image[0]);?>" />
				</a>
			<?php }else{?>
				<div class="lpd-video-responsive<?php if($blog_front_a_type){?> cre-animate<?php }?>"<?php if($blog_front_a_type){ echo $animation_att;}?>><iframe class="" width="780" height="439" src="<?php echo esc_url($video) ?>?wmode=transparent;showinfo=0" frameborder="0" allowfullscreen></iframe></div>
			<?php }?>
		<?php }?>
		
		<h2 class="lpd-animated-link blog-post-title<?php if($blog_front_a_type){?> cre-animate<?php }?>"<?php if($blog_front_a_type){ echo $animation_att;}?>><a href="<?php if ( $link ) {echo esc_url($link);}else{the_permalink();}?>"><?php the_title(); ?></a></h2>
		
		<div class="blog-post-taxo lpd-animated-link<?php if($blog_front_a_type){?> cre-animate<?php }?>"<?php if($blog_front_a_type){ echo $animation_att;}?>>
		<?php if($categories = wp_get_post_categories($post->ID)){?>
		<?php esc_html_e('Categories', GETTEXT_DOMAIN)?>:
		<ul>
	        <?php
	        $cat_id = '';
	        foreach ($categories as $category) {
	           $cat_id .= $category. ', ';
	        }
	        $categories=get_categories('include='.$cat_id.'');
	        $i = 1;
	        foreach($categories as $category) {
	            $results[] = '<li><a href="' . esc_url(get_category_link( $category->term_id )) . '" title="' . sprintf( esc_attr__('View all posts in %s', GETTEXT_DOMAIN), $category->name ) . '" ' . '>' . esc_html($category->name).'</a>';
	            if ( $i != count($categories) ) {
		        	$results[] .= ',&nbsp;';
	            }
	            $results[] .= '</li>';
	            $i++;
	        }
	        echo implode("", $results);?>
		</ul>
	    <?php }?>
		<?php the_tags(); ?>
		</div>						
						
	    <div class="blog-post-content<?php if($blog_front_a_type){?> cre-animate<?php }?>"<?php if($blog_front_a_type){ echo $animation_att;}?>>
	    <?php if ( $link ) { ?>
	    <?php global $more;?>
	    <?php $more = 1;?>
	    <?php the_content(); ?>
	    <?php }else{?>
	    <?php global $more;?>
	    <?php $more = 0;?>
	    <?php the_content(esc_html__('read more &rarr;', GETTEXT_DOMAIN)); ?>
	    <?php }?>
	    </div>
	</div>
	
	
    
    <?php $test=''; if ( $test ) { ?>
    <div class="blog-post-meta lpd-animated-link<?php if($blog_front_a_type){?> cre-animate<?php }?>"<?php if($blog_front_a_type){ echo $animation_att;}?>>
		<a href="<?php echo esc_url(get_day_link(get_the_time('Y'), get_the_time('m'), get_the_time('d'))); ?>" class="date"><?php the_time('d/m/Y'); ?></a>
		<a href="<?php echo esc_url(get_author_posts_url(get_the_author_meta( 'ID' ))); ?>" class="author"><?php echo esc_html(get_the_author()); ?></a>
		
    </div>
    <?php }?>
    
</div>