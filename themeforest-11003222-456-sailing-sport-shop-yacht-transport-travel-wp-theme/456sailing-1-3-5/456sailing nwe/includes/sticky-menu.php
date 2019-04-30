<?php $disable_sticky = ot_get_option('disable_sticky');
$disable_sticky_cart = ot_get_option('disable_sticky_cart');
$disable_sticky_wpml = ot_get_option('disable_sticky_wpml');
if(!$disable_sticky){ ?>
		<header class="lpd-sticky-menu hidden-xs hidden-sm">
			<div class="container">
				<div class="row">
					<div class="col-md-2"><?php get_template_part('includes/header-middle/logo' ) ?>
					</div>
					<div class="col-md-10">
						<?php if($disable_sticky_cart==''||$disable_sticky_wpml==''){ ?>
						<div class="lpd-sticky-wpml-cart">
							<?php if($disable_sticky_cart==''){ ?><?php get_template_part('includes/header-middle/cart' ) ?><?php } ?>
							<?php if($disable_sticky_wpml==''){ ?><?php get_template_part('includes/wpml' ) ?><?php } ?>
						</div>
						<?php } ?>
						<?php get_template_part('includes/menu' ) ?>
					</div>
				</div>
			</div>
		</header>
<?php } ?>