<?php $wpml_switcher= ot_get_option('wpml_switcher');?>
<?php $s_cart= ot_get_option('s_cart');?>

    <?php if (is_plugin_active('sitepress-multilingual-cms/sitepress.php')):?>
	    <?php if($wpml_switcher):?>
	    
	    <div class="wpml-switcher hidden-xs hidden-sm lpd-animated-link<?php if($wpml_switcher=='sl_panel_top'){ ?> wpml-sl-panel-top<?php }?>">
	        <?php lpd_language_selector_flags(); ?>
	    </div>
	    <?php endif; ?>
    <?php endif; ?>