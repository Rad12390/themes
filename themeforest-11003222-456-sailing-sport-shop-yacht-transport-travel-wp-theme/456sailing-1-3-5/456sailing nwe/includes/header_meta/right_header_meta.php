<?php $right_headermeta = ot_get_option('right_headermeta');?>
<?php $h_sm_locations = ot_get_option('h_sm_locations');?>
<?php $meta_contacts_location = ot_get_option('meta_contacts_location');?>

<?php if($h_sm_locations=="right_hm"):?>
	<?php get_template_part('includes/header_social_media' ) ?>
<?php endif; ?>

<?php if($right_headermeta){ ?>
	<div class="custom-meta right-custom-meta "><?php echo wp_kses($right_headermeta, array('a' => array('href' => array(),'title' => array()),'p' => array(),'span' => array('style' => array()),'b' => array(),'i' => array(),'u' => array(),'em' => array(),'strong' => array())); ?></div>
<?php }else{?>
	<?php if ($meta_contacts_location=="right") { ?>
		<?php get_template_part('includes/header_meta/header-meta-contacts' ) ?>
	<?php } else{?>
		<?php if ( has_nav_menu( 'right-meta-menu' ) ) { ?>
			<?php wp_nav_menu( array( 'theme_location' => 'right-meta-menu', 'menu_class' => 'right-meta-menu meta-menu', 'container' => '', 'depth' => 1  ) ); ?>
		<?php } ?>
	<?php } ?>
<?php } ?>


<div class="clearfix"></div>