<?php
function shopping_cart_panel() {

	$shopping_cart_js = new shopping_cart_class();
	$shopping_cart_js->shopping_cart_callback();

}

class shopping_cart_class
{
    protected static $var = '';

    public static function shopping_cart_callback() 
    {
    
    $s_cart = ot_get_option('s_cart');
    
    if ($s_cart=='sl_panel_left') {
    
    	$direction = 'left';
	    
    }else{
	    
	    $direction = 'right';
    }

	
ob_start();?>

<script>
jQuery(function() {

	var shopping_cart_panel = jQuery('#shopping_cart_panel').scotchPanel({
        containerSelector: 'body',
        direction: '<?php echo esc_js($direction);?>',
        duration: 300,
        transition: 'ease',
        clickSelector: '.header-middle .lpd-shopping-cart',
        distanceX: '320px',
        enableEscapeKey: true,
	    beforePanelOpen: function() {
	    	jQuery('.header-bottom').addClass('hb-scotchpanel-open');
			jQuery(".rev_slider_wrapper").each(function(){
				$this = jQuery(this);
				id_array = $this.attr("id").split("_");
				id = id_array[2];
				jQuery.globalEval( 'revapi'+id+'.revpause();' );
			});
	    },
	    beforePanelClose: function() {
	    	jQuery('.header-bottom').removeClass('hb-scotchpanel-open');
		  	jQuery(".rev_slider_wrapper").each(function(){
				$this = jQuery(this);
				id_array = $this.attr("id").split("_");
				id = id_array[2]
				jQuery.globalEval( 'revapi'+id+'.revresume();' );
			});
	    }
    });
	jQuery('#body-wrap').click(function() {
	  shopping_cart_panel.close();
	});


});
</script>

<?php $script = ob_get_clean();

        self::$var[] = $script;

        add_action( 'wp_footer', array ( __CLASS__, 'footer' ), 20 );         
    }

	public static function footer() 
	{
	    foreach( self::$var as $script ){
	        echo $script;
	    }
	}

}



function wpml_panel() {

	$wpml_panel_js = new wpml_panel_class();
	$wpml_panel_js->wpml_panel_callback();

}

class wpml_panel_class
{
    protected static $var = '';

    public static function wpml_panel_callback() 
    {

	
ob_start();?>

<script>
jQuery(function() {

	var wpml_panel = jQuery('#wpml_panel').scotchPanel({
        containerSelector: 'body',
        direction: 'top',
        duration: 300,
        transition: 'ease',
        clickSelector: '.header-middle .wpml-switcher',
        forceMinHeight: true,
        enableEscapeKey: true,
	    beforePanelOpen: function() {
	    	jQuery('.header-bottom').addClass('hb-scotchpanel-open');
			jQuery(".rev_slider_wrapper").each(function(){
				$this = jQuery(this);
				id_array = $this.attr("id").split("_");
				id = id_array[2];
				jQuery.globalEval( 'revapi'+id+'.revpause();' );
			});
	    },
	    beforePanelClose: function() {
	    	jQuery('.header-bottom').removeClass('hb-scotchpanel-open');
		  	jQuery(".rev_slider_wrapper").each(function(){
				$this = jQuery(this);
				id_array = $this.attr("id").split("_");
				id = id_array[2]
				jQuery.globalEval( 'revapi'+id+'.revresume();' );
			});
	    }
    });
	jQuery('#body-wrap').click(function() {
	  wpml_panel.close();
	});


});
</script>

<?php $script = ob_get_clean();

        self::$var[] = $script;

        add_action( 'wp_footer', array ( __CLASS__, 'footer' ), 20 );         
    }

	public static function footer() 
	{
	    foreach( self::$var as $script ){
	        echo $script;
	    }
	}

}

?>