<?php 
//OptionTree Stuff
$custom_js = ot_get_option('custom_js');
?>

<?php if($custom_js){?>
<!-- Option Tree Custom Javascript -->

	<?php echo $custom_js; ?>

<?php }?>