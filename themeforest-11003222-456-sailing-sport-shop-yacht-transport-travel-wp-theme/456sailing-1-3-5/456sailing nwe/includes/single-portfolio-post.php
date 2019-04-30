<?php $st_buttons_p = ot_get_option('st_buttons_p'); ?>

<?php $video = lpd_parse_video(get_post_meta($post->ID, 'video_post_meta', true));?>
<?php $details = get_post_meta($post->ID, 'portfolio_options_repeatable', true); if($details){$details = array_filter($details);};?>
<?php $share = get_post_meta($post->ID, 'portfolio_options_share', true);?>
<?php $portfolio_post_a_type = ot_get_option('portfolio_post_a_type');
$portfolio_post_a_speed = ot_get_option('portfolio_post_a_speed');
$portfolio_post_a_delay = ot_get_option('portfolio_post_a_delay');
$portfolio_post_a_offset = ot_get_option('portfolio_post_a_offset');
$portfolio_post_a_easing = ot_get_option('portfolio_post_a_easing');

if(!$portfolio_post_a_speed){
	$portfolio_post_a_speed = '1000';
}
if(!$portfolio_post_a_delay){
	$portfolio_post_a_delay = '0';
}

if(!$portfolio_post_a_offset){
	$portfolio_post_a_offset = '80';
}

$animation_att_pp = ' data-animation="'.esc_attr($portfolio_post_a_type).'" data-speed="'.esc_attr($portfolio_post_a_speed).'" data-delay="'.esc_attr($portfolio_post_a_delay).'" data-offset="'.esc_attr($portfolio_post_a_offset).'" data-easing="'.esc_attr($portfolio_post_a_easing).'"';

?>
<?php $portfolio_thumbnails_a_type = ot_get_option('portfolio_thumbnails_a_type');
$portfolio_thumbnails_a_speed = ot_get_option('portfolio_thumbnails_a_speed');
$portfolio_thumbnails_a_delay = ot_get_option('portfolio_thumbnails_a_delay');
$portfolio_thumbnails_a_offset = ot_get_option('portfolio_thumbnails_a_offset');
$portfolio_thumbnails_a_easing = ot_get_option('portfolio_thumbnails_a_easing');

if(!$portfolio_thumbnails_a_speed){
	$portfolio_thumbnails_a_speed = '1000';
}
if(!$portfolio_thumbnails_a_delay){
	$portfolio_thumbnails_a_delay = '0';
}

if(!$portfolio_thumbnails_a_offset){
	$portfolio_thumbnails_a_offset = '80';
}

$animation_att = ' data-animation="'.esc_attr($portfolio_thumbnails_a_type).'" data-speed="'.esc_attr($portfolio_thumbnails_a_speed).'" data-delay="'.esc_attr($portfolio_thumbnails_a_delay).'" data-offset="'.esc_attr($portfolio_thumbnails_a_offset).'" data-easing="'.esc_attr($portfolio_thumbnails_a_easing).'"';

?>

<div id="post-<?php the_ID(); ?>" class="single-post <?php $allClasses = get_post_class(); foreach ($allClasses as $class) { echo $class . " "; } ?>">
	<div class="row">
	
	<?php if ($video) { ?>
	
	<?php $post_thumbnail_id = get_post_thumbnail_id(); ?> 
	<?php $alt = get_post_meta($post_thumbnail_id, '_wp_attachment_image_alt', true);?>
	
		<div class="col-md-8">
			<div class="lpd-video-responsive<?php if($portfolio_thumbnails_a_type){?> cre-animate<?php }?>"<?php if($portfolio_thumbnails_a_type){ echo $animation_att;}?>><iframe class="" width="780" height="439" src="<?php echo esc_url($video) ?>?wmode=transparent;showinfo=0" frameborder="0" allowfullscreen></iframe></div>
			<?php if ((function_exists('has_post_thumbnail')) && (has_post_thumbnail())) {?><img class="page-thumbnail img-responsive" alt="<?php echo esc_attr($alt); ?>" src="<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'theme-size-4x3' ); echo esc_url($image[0]);?>" /><?php }?>
			<?php $images = get_post_meta($post->ID, 'vdw_gallery_id', true);?>
			<?php if ($images) {?>
				<?php foreach ($images as $image) {?>
					<img class="page-thumbnail img-responsive<?php if($portfolio_thumbnails_a_type){?> cre-animate<?php }?>" alt="<?php echo esc_attr($alt); ?>" src="<?php $image = wp_get_attachment_image_src( $image, 'theme-size-4x3' ); echo esc_url($image[0]);?>"<?php if($portfolio_thumbnails_a_type){ echo $animation_att;}?> />
				<?php }?>
			<?php }?>
		</div>
	
	<?php } elseif ((function_exists('has_post_thumbnail')) && (has_post_thumbnail())) {?>
	
	<?php $post_thumbnail_id = get_post_thumbnail_id(); ?> 
	<?php $alt = get_post_meta($post_thumbnail_id, '_wp_attachment_image_alt', true);?>
	
		<div class="col-md-8">
			<img class="page-thumbnail img-responsive<?php if($portfolio_thumbnails_a_type){?> cre-animate<?php }?>" alt="<?php echo esc_attr($alt); ?>" src="<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'theme-size-4x3' ); echo esc_url($image[0]);?>"<?php if($portfolio_thumbnails_a_type){ echo $animation_att;}?> />
			<?php $images = get_post_meta($post->ID, 'vdw_gallery_id', true);?>
			<?php if(!$images): $images = array(); endif;?>
			<?php foreach ($images as $image) {?>
			  <img class="page-thumbnail img-responsive<?php if($portfolio_thumbnails_a_type){?> cre-animate<?php }?>" alt="<?php echo esc_attr($alt); ?>" src="<?php $image = wp_get_attachment_image_src( $image, 'theme-size-4x3' ); echo esc_url($image[0]);?>"<?php if($portfolio_thumbnails_a_type){ echo $animation_att;}?> />
			<?php }?>
		</div>
	
	<?php } else{?>
	
	<div class="col-md-8"><p class="no-content-matched"><?php esc_html_e('Sorry, no contnet matched your criteria.', GETTEXT_DOMAIN) ?></p></div>
	
	<?php }?>
	
	<div class="col-md-4">
		<div class="content">
			<div class="post_content<?php if($portfolio_post_a_type){?> cre-animate<?php }?>"<?php if($portfolio_post_a_type){ echo $animation_att_pp;}?>>
				<?php the_content(); ?>
			</div>
			<?php if($details){?>
			<div class="portfolio-post-details<?php if($portfolio_post_a_type){?> cre-animate<?php }?>"<?php if($portfolio_post_a_type){ echo $animation_att_pp;}?>>
				<h5><?php esc_html_e( 'Project Details', GETTEXT_DOMAIN);?></h5>
	            <ul>
	                <?php
	                $separator = "%%";
	                $output = '';
	                foreach ($details as $item) {
	                    if($item){
	                        list($item_text1, $item_text2) = explode($separator, trim($item));
	                        $output .= '<li><strong>' . esc_html($item_text1) . '</strong> ' . do_shortcode($item_text2) . '</li>';
	                    }
	                }
	                echo $output;
	                ?>
	            </ul>
				<?php if(!$share&&$st_buttons_p){?><div class="st-share-portfolio"><?php echo $st_buttons_p;?></div><?php }?>
			</div>
			<?php }?>
		</div>
	</div>
	
	</div>

			<?php  
			if ( 'portfolio' == get_post_type() ) {
			    $taxs = wp_get_post_terms($post->ID, 'portfolio_tags');;
			    if ( $taxs ) {
			        $tax_ids = array();
			        foreach( $taxs as $individual_tax ) $tax_ids[] = $individual_tax->term_id;
			         
			        $args = array(
					    'tax_query' => array(
					        array(
					            'taxonomy'  => 'portfolio_tags',
					            'terms'     => $tax_ids,
					            'operator'  => 'IN'
					        )
					    ),
			            'post__not_in'          => array( $post->ID ),
			            'showposts'             => 3,
			            'ignore_sticky_posts'   => 1,
			            'post_type' => 'portfolio',			        );
			         
			        $my_query = new wp_query( $args );
			         
			        if( $my_query->have_posts() ) {?> 
			        
			        
	<div class="row">
		<div class="col-md-12">  
			<h2 class="lpd-heading-title<?php if($portfolio_post_a_type){?> cre-animate<?php }?>"<?php if($portfolio_post_a_type){ echo $animation_att_pp;}?>><span><?php esc_html_e( 'Related Portfolio', GETTEXT_DOMAIN ); ?></span></h2>
		</div>	
	</div>
	<div class="row<?php if($portfolio_post_a_type){?> cre-animate<?php }?>"<?php if($portfolio_post_a_type){ echo $animation_att_pp;}?>>
			 
			            <?php
			 
			            while ( $my_query->have_posts() ) :
			            $my_query->the_post();
			            $wp_query->post;
			            
			            ?> 
			                 
		<?php $video = lpd_parse_video(get_post_meta($post->ID, 'video_post_meta', true));?>
		<?php $link = get_post_meta($post->ID, 'link_post_meta', true);?>
		
		<?php $gallery_type = get_post_meta($post->ID, 'portfolio_options_select', true);?>
		<?php $terms = get_the_terms( $post->ID, 'portfolio_category' ); ?>
		
		<?php $caption = '';
		$image_size = 'theme-size-4x3';
		$header_image = wp_get_attachment_image_src( get_post_meta($post->ID, 'portfolio_header_image', true), $image_size );?>
		
		<div class="col-md-4">
		<div class="lpd-post-widget">
			<?php if ( $link ) { ?>
		        <?php if(has_post_thumbnail()) {?>
					<a href="<?php echo esc_url($link); ?>" class="pw-thumbnail">
						<img alt="<?php the_title(); ?>" class="img-responsive" src="<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), $image_size ); echo esc_url($image[0]);?>"/>
						<span class="post-type-icon link"></span>
					</a>
				<?php } elseif($header_image){?>
					<a href="<?php the_permalink(); ?>" class="pw-thumbnail">
						<img alt="<?php the_title(); ?>" class="img-responsive" src="<?php echo esc_url($header_image[0]);?>"/>
						<span class="post-type-icon link"></span>
					</a>
				<?php }else{?>
			        <a href="<?php echo esc_url($link); ?>" class="pw-thumbnail">
			        	<img class="img-responsive" alt="<?php the_title(); ?>" src="<?php echo THEME_ASSETS; ?>img/no-image.png"/>
			        	<span class="post-type-icon link"></span>
					</a>
		        <?php }?>
		    <?php } elseif ( $video ) { ?>
		        <?php if(has_post_thumbnail()) {?>
					<a href="<?php the_permalink(); ?>" class="pw-thumbnail">
						<img alt="<?php the_title(); ?>" class="img-responsive" src="<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), $image_size ); echo esc_url($image[0]);?>"/>
						<span class="post-type-icon video"></span>
					</a>
				<?php } elseif($header_image){?>
					<a href="<?php the_permalink(); ?>" class="pw-thumbnail">
						<img alt="<?php the_title(); ?>" class="img-responsive" src="<?php echo esc_url($header_image[0]);?>"/>
						<span class="post-type-icon video"></span>
					</a>
				<?php }else{?>
			        <a href="<?php the_permalink(); ?>" class="pw-thumbnail">
			        	<img class="img-responsive" alt="<?php the_title(); ?>" src="<?php echo THEME_ASSETS; ?>img/no-image.png"/>
			        	<span class="post-type-icon video"></span>
					</a>
		        <?php }?>
		    <?php } elseif ( (function_exists('has_post_thumbnail')) && (has_post_thumbnail()) ) { ?>
				<a href="<?php the_permalink(); ?>" class="pw-thumbnail">
					<?php if (  (function_exists('has_post_thumbnail')) && (has_post_thumbnail())  ) { ?>
					<img alt="<?php the_title(); ?>" class="img-responsive" src="<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), $image_size ); echo esc_url($image[0]);?>"/>
					<span class="post-type-icon"></span>
					<?php } ?>
				</a>
			<?php } else{?>
				<?php if($header_image){?>
					<a href="<?php the_permalink(); ?>" class="pw-thumbnail">
						<img alt="<?php the_title(); ?>" class="img-responsive" src="<?php echo esc_url($header_image[0]);?>"/>
						<span class="post-type-icon"></span>
					</a>
				<?php }else{?>
		        <a href="<?php the_permalink(); ?>" class="pw-thumbnail">
		        	<img class="img-responsive" alt="<?php the_title(); ?>" src="<?php echo THEME_ASSETS; ?>img/no-image.png"/>
		        	<span class="post-type-icon"></span>
				</a>
				<?php }?>
		    <?php }?>	
			<div class="content">
				<div class="widget-meta lpd-animated-link">
					<table>
						<tbody>
							<tr>
								<td class="pw-author"><a href="<?php echo esc_url(get_author_posts_url(get_the_author_meta( 'ID' ))); ?>" class="author"><?php echo esc_html(get_the_author()); ?></a></td>
								<?php if($terms){?><td class="pw-category">
									
								<?php $resultstr = array(); ?>
					            <?php if($terms) : foreach ($terms as $term) { ?>
					                <?php $resultstr[] = '<a title="'.esc_attr($term->name).'" href="'.esc_url(get_term_link($term->slug, 'portfolio_category')).'">'.esc_html($term->name).'</a>'?>
					            <?php } ?>
					            <?php echo $resultstr[0]; endif;?>
									
								</td><?php }?>
								<td class="pw-date"><a href="<?php echo esc_url(get_day_link(get_the_time('Y'), get_the_time('m'), get_the_time('d'))); ?>" class="date"><?php the_time('M j, Y'); ?></a></td>
							</tr>
						</tbody>
					</table>
				</div>
				<?php if ( $link ) { ?>
				<h4 class="title lpd-animated-link"><a href="<?php echo esc_url($link); ?>"><?php the_title(); ?></a></h4>
				<?php }else{?>
				<h4 class="title lpd-animated-link"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
				<?php }?>
				<?php if ( !$caption ) { ?>
					<div class="lpd-post-widget-content">
						<p><?php echo lpd_excerpt(15)?></p>
					</div>
				<?php }?>
				<div class="lpd-post-widget-element"></div>	
			</div>
		</div>
		</div>	 
			 
			            <?php
			            
			            endwhile;
			 
			            ?> 
			            
	</div>
			 
			        <?php }
			         
			        wp_reset_query();
			         
			    }
			}
		    ?>  

</div>