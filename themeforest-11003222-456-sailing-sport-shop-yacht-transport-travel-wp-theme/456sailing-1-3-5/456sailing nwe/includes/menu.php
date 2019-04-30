			<?php $sep_element= ot_get_option('sep_element');?>
			<?php $nav_style= ot_get_option('nav_style');?>
			<?php $nav_type= ot_get_option('nav_type');?>
			<?php $h_sm_locations = ot_get_option('h_sm_locations');?>
			<?php $logo_location = ot_get_option('logo_location');?>

<?php $catalog_type = ot_get_option('catalog_type');?>
<?php $s_cart = ot_get_option('s_cart');?>
<?php $wpml_switcher= ot_get_option('wpml_switcher');?>
			
			<?php 
				$menu_class = 'menu-container';
				if($nav_style=='standard'){
					$menu_class .= ' menu3dmega-style-1';
				}
				if($nav_type=='3deffect'&&$nav_style=='standard'){
					$menu_class .= ' menu3dmega-3d-effect cl-effect';
				} else if($nav_type=='3deffect'){
					$menu_class .= ' cl-effect';
				}
			?>

			<?php if ( has_nav_menu( 'primary-menu' ) ) { 
				
			?>
			
			<div class="menuMega menu3dmega<?php if (!$sep_element) { ?> new_sep_element<?php } ?>
			
			<?php if($logo_location=="left"){
				
				if(
				
				($h_sm_locations!="right_h")
				
				&&(($wpml_switcher=="")
				
				||($wpml_switcher!=""&&!is_plugin_active('sitepress-multilingual-cms/sitepress.php')))
				
				&&(($s_cart=="")
				||($s_cart!=""&&!is_plugin_active('woocommerce/woocommerce.php'))
				||($catalog_type!=""))
				
				){
				
				?> disable-menu-item-last-margin-right<?php 
				
				}
				
			} ?>
			
			">
				<?php wp_nav_menu( array( 'theme_location' => 'primary-menu', 'menu_class' => $menu_class, 'menu_id' => "", 'container' => '', 'walker' => new lpd_bootstrap_nav_menu_walker() ) ); ?>
			</div>
			<?php } else { ?>
			<div class="menuMega menu3dmega<?php if (!$sep_element) { ?> new_sep_element<?php } ?>">
	            <ul class="menu-container">    
					<?php wp_list_pages( array('title_li' => '', 'menu_class' => '', 'walker' => new lpd_menu3dmega_list_pages_walker() )); ?>
				</ul>
			</div>
			<?php } ?>