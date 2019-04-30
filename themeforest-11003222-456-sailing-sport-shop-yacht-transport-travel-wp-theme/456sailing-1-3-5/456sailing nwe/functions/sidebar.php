<?php
add_action( 'widgets_init', 'theme_lpd_themes_widgets_init' );
function theme_lpd_themes_widgets_init() {
	if ( function_exists('register_sidebar') ) {
		register_sidebar(array(
			'name' => esc_html__('Main Sidebar', GETTEXT_DOMAIN),
			'id' => 'sidebar-1',
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget' => '</div>',
			'before_title' => '<h4 class="title"><span class="align">',
			'after_title' => '</span></h4>',
		));
	}
	if ( function_exists('register_sidebar') ) {
		register_sidebar(array(
			'name' => esc_html__('Footer Top', GETTEXT_DOMAIN),
			'id' => 'sidebar-2',
			'before_widget' => '<div class="col-md-3 one-column"><div id="%1$s" class="widget %2$s">',
			'after_widget' => '</div></div>',
			'before_title' => '<h4 class="title"><span class="align">',
			'after_title' => '</span></h4>',
		));
	}
	if ( function_exists('register_sidebar') ) {
		register_sidebar(array(
			'name' => esc_html__('Footer', GETTEXT_DOMAIN),
			'id' => 'sidebar-3',
			'before_widget' => '<div class="col-md-3 one-column"><div id="%1$s" class="widget %2$s">',
			'after_widget' => '</div></div>',
			'before_title' => '<h4 class="title"><span class="align">',
			'after_title' => '</span></h4>',
		));
	}
	if ( function_exists('register_sidebar') ) {
		register_sidebar(array(
			'name' => esc_html__('Shop Sidebar', GETTEXT_DOMAIN),
			'id' => 'sidebar-4',
	        'description' => '',
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget' => '</div>',
			'before_title' => '<h4 class="title"><span class="align">',
			'after_title' => '</span></h4>',
		));
	}
	if ( function_exists('register_sidebar') ) {
		register_sidebar(array(
			'name' => esc_html__('Product Post Sidebar', GETTEXT_DOMAIN),
			'id' => 'sidebar-5',
	        'description' => '',
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget' => '</div>',
			'before_title' => '<h4 class="title"><span class="align">',
			'after_title' => '</span></h4>',
		));
	}
	if ( function_exists('register_sidebar') ) {
		register_sidebar(array(
			'name' => esc_html__('Footer Top 3 Column', GETTEXT_DOMAIN),
			'id' => 'sidebar-6',
			'before_widget' => '<div class="col-md-4 one-column"><div id="%1$s" class="widget %2$s">',
			'after_widget' => '</div></div>',
			'before_title' => '<h4 class="title"><span class="align">',
			'after_title' => '</span></h4>',
		));
	}
	if ( function_exists('register_sidebar') ) {
		register_sidebar(array(
			'name' => esc_html__('Footer 3 Column', GETTEXT_DOMAIN),
			'id' => 'sidebar-7',
			'before_widget' => '<div class="col-md-4 one-column"><div id="%1$s" class="widget %2$s">',
			'after_widget' => '</div></div>',
			'before_title' => '<h4 class="title"><span class="align">',
			'after_title' => '</span></h4>',
		));
	}
	if ( function_exists('register_sidebar') ) {
		register_sidebar(array(
			'name' => esc_html__('Team Post Sidebar', GETTEXT_DOMAIN),
			'id' => 'sidebar-8',
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget' => '</div>',
			'before_title' => '<h4 class="title"><span class="align">',
			'after_title' => '</span></h4>',
		));
	}
	if ( function_exists('register_sidebar') ) {
		register_sidebar(array(
			'name' => esc_html__('Visual Composer Sidebar', GETTEXT_DOMAIN),
			'id' => 'sidebar-9',
	        'description' => '',
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget' => '</div>',
			'before_title' => '<h4 class="title"><span class="align">',
			'after_title' => '</span></h4>',
		));
	}
}
?>