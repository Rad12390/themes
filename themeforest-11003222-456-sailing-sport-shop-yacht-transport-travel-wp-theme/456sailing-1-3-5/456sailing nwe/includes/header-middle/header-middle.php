 	<?php $message_box_location = ot_get_option('message_box_location');?>
	<?php $search_locations = ot_get_option('search_locations');?>
	<?php $left_header_m_tm = ot_get_option('left_header_m_tm');?>
	<?php $right_header_m_tm = ot_get_option('right_header_m_tm');?>
	<?php $h_sm_locations = ot_get_option('h_sm_locations');?>
	<?php $logo_location = ot_get_option('logo_location');?>
	<?php $decorative_icon_header = ot_get_option('decorative_icon_header'); ?>

	<?php if($logo_location=="left"){?>
	
		<div class="header-middle-content header-middle-logo-left clearfix">
		
			<?php get_template_part('includes/header-middle/logo' ) ?>
		
			<div class="header-search-menu-message">
		
			<?php get_template_part('includes/header-middle/header_search' ) ?>
			
			<?php get_template_part('includes/header-middle/header_search_mobile' ) ?>
			
			<?php if($message_box_location=="right"){?>
				<?php get_template_part('includes/header-middle/header-message-box' ) ?>
			<?php } ?>
			
			<?php if ( has_nav_menu( 'right-header-menu' ) ) { ?>
					<?php wp_nav_menu( array( 'theme_location' => 'right-header-menu', 'menu_class' => 'right-header-menu header-middle-menu', 'container' => '', 'depth' => 1  ) ); ?>
			<?php } ?>
			
			</div>
			
			<?php get_template_part('includes/header-middle/cart' ) ?>
			
			<?php get_template_part('includes/wpml' ) ?>
			<?php get_template_part('includes/wpml-mobile' ) ?>
			
			<?php if($h_sm_locations=="right_h"):?>
				<?php get_template_part('includes/header_social_media' ) ?>
			<?php endif; ?>
			
			<?php get_template_part('includes/menu' ) ?>
			
			<?php if($decorative_icon_header):?><?php get_template_part('includes/header-middle/header_sep_line_icon' ) ?><?php endif; ?>
		
		</div>
		
	<?php } elseif($logo_location=="center"){?>
	
			<div class="header-middle-content header-middle-logo-top header-middle-logo-top-center clearfix">
			
				<div class="header-middle-top clearfix">
					<div class="header-middle-logo-top-center-left">
					
						<?php if ( has_nav_menu( 'left-header-menu' ) ) { ?>
							<div class="header-middle-menu-wrap"<?php if($left_header_m_tm):?> style="margin-top:<?php echo esc_attr($left_header_m_tm);?>px"<?php endif; ?>>
								<?php wp_nav_menu( array( 'theme_location' => 'left-header-menu', 'menu_class' => 'left-header-menu header-middle-menu', 'container' => '', 'depth' => 1  ) ); ?>
							</div>
						<?php } ?>
						
						<?php if($search_locations=="left_h"){?>
							<?php get_template_part('includes/header-middle/header_search' ) ?>
							<?php get_template_part('includes/header-middle/header_search_mobile' ) ?>
						<?php }else{ ?>
							&nbsp;
						<?php } ?>
						
						<?php if($message_box_location=="left"){?>
							<?php get_template_part('includes/header-middle/header-message-box' ) ?>
						<?php } ?>
						
						<?php if($h_sm_locations=="left_h"):?>
							<?php get_template_part('includes/header_social_media' ) ?>
						<?php endif; ?>
						
					</div>
					<div class="header-middle-logo-top-center-center"><?php get_template_part('includes/header-middle/logo' ) ?></div>
					<div class="header-middle-logo-top-center-right">
						
						<?php if ( has_nav_menu( 'right-header-menu' ) ) { ?>
							<div class="header-middle-menu-wrap"<?php if($right_header_m_tm):?> style="margin-top:<?php echo esc_attr($right_header_m_tm);?>px"<?php endif; ?>>
								<?php wp_nav_menu( array( 'theme_location' => 'right-header-menu', 'menu_class' => 'right-header-menu header-middle-menu', 'container' => '', 'depth' => 1  ) ); ?>
							</div>
						<?php } ?>
						
						<?php if($search_locations=="right_h"){?>
							<?php get_template_part('includes/header-middle/header_search' ) ?>
							<?php get_template_part('includes/header-middle/header_search_mobile' ) ?>
						<?php } ?>
						
						<?php if($message_box_location=="right"){?>
							<?php get_template_part('includes/header-middle/header-message-box' ) ?>
						<?php } ?>
						
						<?php if($h_sm_locations=="right_h"):?>
							<?php get_template_part('includes/header_social_media' ) ?>
						<?php endif; ?>
						
					</div>
				</div>
				<?php get_template_part('includes/header-middle/header_sep_line_icon' ) ?>
				<div class="header-middle-bottom">
				
					<div class="header-middle-bottom-right">
	
						<?php get_template_part('includes/header-middle/cart' ) ?>
						
						<?php get_template_part('includes/wpml' ) ?>
						<?php get_template_part('includes/wpml-mobile' ) ?>
						
						<?php if($search_locations=="bottom_right_h"){?>
							<?php get_template_part('includes/header-middle/header_search' ) ?>
							<?php get_template_part('includes/header-middle/header_search_mobile' ) ?>
						<?php } ?>
						
						<?php if($message_box_location=="bottom_right"){?>
							<?php get_template_part('includes/header-middle/header-message-box' ) ?>
						<?php } ?>
						
						<?php if($h_sm_locations=="bottom_right_h"):?>
							<?php get_template_part('includes/header_social_media' ) ?>
						<?php endif; ?>
						
					</div>	
				
					<?php get_template_part('includes/menu' ) ?>	
					
				</div>
			
			</div>
			
	
	<?php }else{?>
	
		<div class="header-middle-content header-middle-logo-top header-middle-logo-top-left clearfix">
		
			<div class="header-middle-top clearfix">
				
				<?php get_template_part('includes/header-middle/logo' ) ?>
				
					<?php if($h_sm_locations=="left_h"):?>
						<?php get_template_part('includes/header_social_media' ) ?>
					<?php endif; ?>
				
					<?php if($message_box_location=="left"){?>
						<?php get_template_part('includes/header-middle/header-message-box' ) ?>
					<?php } ?>
					
					<?php if($search_locations=="left_h"){?>
						<?php get_template_part('includes/header-middle/header_search' ) ?>
						<?php get_template_part('includes/header-middle/header_search_mobile' ) ?>
					<?php } ?>

					<?php if ( has_nav_menu( 'left-header-menu' ) ) { ?>
						<div class="header-middle-menu-wrap"<?php if($left_header_m_tm):?> style="margin-top:<?php echo esc_attr($left_header_m_tm);?>px"<?php endif; ?>>
							<?php wp_nav_menu( array( 'theme_location' => 'left-header-menu', 'menu_class' => 'left-header-menu header-middle-menu', 'container' => '', 'depth' => 1  ) ); ?>
						</div>
					<?php } ?>
				
				<div class="header-middle-content-right">
					
					<?php if($h_sm_locations=="right_h"):?>
						<?php get_template_part('includes/header_social_media' ) ?>
					<?php endif; ?>
				
					<?php if($search_locations=="right_h"){?>
						<?php get_template_part('includes/header-middle/header_search' ) ?>
						<?php get_template_part('includes/header-middle/header_search_mobile' ) ?>
					<?php } ?>
					
					<?php if($message_box_location=="right"){?>
						<?php get_template_part('includes/header-middle/header-message-box' ) ?>
					<?php } ?>
					
					<?php if ( has_nav_menu( 'right-header-menu' ) ) { ?>
						<div class="header-middle-menu-wrap"<?php if($right_header_m_tm):?> style="margin-top:<?php echo esc_attr($right_header_m_tm);?>px"<?php endif; ?>>
							<?php wp_nav_menu( array( 'theme_location' => 'right-header-menu', 'menu_class' => 'right-header-menu header-middle-menu', 'container' => '', 'depth' => 1  ) ); ?>
						</div>
					<?php } ?>
					
				</div>
			</div>
			<?php get_template_part('includes/header-middle/header_sep_line_icon' ) ?>
			<div class="header-middle-bottom">
			
				<div class="header-middle-bottom-right">

					<?php get_template_part('includes/header-middle/cart' ) ?>
					
					<?php get_template_part('includes/wpml' ) ?>
					<?php get_template_part('includes/wpml-mobile' ) ?>
					
					<?php if($search_locations=="bottom_right_h"){?>
						<?php get_template_part('includes/header-middle/header_search' ) ?>
						<?php get_template_part('includes/header-middle/header_search_mobile' ) ?>
					<?php } ?>
					
					<?php if($message_box_location=="bottom_right"){?>
						<?php get_template_part('includes/header-middle/header-message-box' ) ?>
					<?php } ?>
					
					<?php if($h_sm_locations=="bottom_right_h"):?>
						<?php get_template_part('includes/header_social_media' ) ?>
					<?php endif; ?>
					
				</div>	
			
				<?php get_template_part('includes/menu' ) ?>	
				
			</div>
	
		</div>
	
	<?php }?>