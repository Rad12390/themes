<?php function lpd_page_header_bg() {

$page_title_bg = ot_get_option('page_title_bg');

?><style>#title-breadcrumb{background-color: <?php echo $page_title_bg;?>}</style><?php

}?>
<?php add_action( 'wp_head', 'lpd_page_header_bg' );?>