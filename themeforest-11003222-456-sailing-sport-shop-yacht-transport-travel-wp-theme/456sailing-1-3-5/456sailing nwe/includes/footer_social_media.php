<?php $sm_target = ot_get_option('sm_target');?>

<?php $forrst = ot_get_option('forrst');?>
<?php $dribbble = ot_get_option('dribbble');?>
<?php $twitter = ot_get_option('twitter');?>
<?php $flickr = ot_get_option('flickr');?>
<?php $twitter_1 = ot_get_option('twitter_1');?>
<?php $facebook = ot_get_option('facebook');?>
<?php $skype = ot_get_option('skype');?>
<?php $digg = ot_get_option('digg');?>
<?php $google= ot_get_option('google');?>
<?php $html5 = ot_get_option('html5');?>
<?php $linkedin = ot_get_option('linkedin');?>
<?php $last_fm = ot_get_option('last_fm');?>
<?php $vimeo = ot_get_option('vimeo');?>
<?php $yahoo = ot_get_option('yahoo');?>
<?php $tumblr = ot_get_option('tumblr');?>
<?php $apple = ot_get_option('apple');?>
<?php $windows = ot_get_option('windows');?>
<?php $youtube = ot_get_option('youtube');?>
<?php $delicious = ot_get_option('delicious');?>
<?php $rss = ot_get_option('rss');?>
<?php $picasa = ot_get_option('picasa');?>
<?php $deviantart = ot_get_option('deviantart');?>
<?php $technorati = ot_get_option('technorati');?>
<?php $stumbleupon = ot_get_option('stumbleupon');?>
<?php $blogger = ot_get_option('blogger');?>
<?php $wordpress = ot_get_option('wordpress');?>
<?php $amazon = ot_get_option('amazon');?>
<?php $appstore = ot_get_option('appstore');?>
<?php $paypal = ot_get_option('paypal');?>
<?php $myspace = ot_get_option('myspace');?>
<?php $dropbox = ot_get_option('dropbox');?>
<?php $windows8 = ot_get_option('windows8');?>
<?php $pinterest = ot_get_option('pinterest');?>
<?php $soundcloud = ot_get_option('soundcloud');?>
<?php $google_drive = ot_get_option('google_drive');?>
<?php $android = ot_get_option('android');?>
<?php $behance = ot_get_option('behance');?>
<?php $instagram = ot_get_option('instagram');?>
<?php $ebay = ot_get_option('ebay');?>
<?php $google_plus = ot_get_option('google_plus');?>

<?php $forrst1 = ot_get_option('forrst1');?>
<?php $dribbble1 = ot_get_option('dribbble1');?>
<?php $twitter1 = ot_get_option('twitter1');?>
<?php $flickr1 = ot_get_option('flickr1');?>
<?php $twitter_11 = ot_get_option('twitter_11');?>
<?php $facebook1 = ot_get_option('facebook1');?>
<?php $skype1 = ot_get_option('skype1');?>
<?php $digg1 = ot_get_option('digg1');?>
<?php $google1= ot_get_option('google1');?>
<?php $html51 = ot_get_option('html51');?>
<?php $linkedin1 = ot_get_option('linkedin1');?>
<?php $last_fm1 = ot_get_option('last_fm1');?>
<?php $vimeo1 = ot_get_option('vimeo1');?>
<?php $yahoo1 = ot_get_option('yahoo1');?>
<?php $tumblr1 = ot_get_option('tumblr1');?>
<?php $apple1 = ot_get_option('apple1');?>
<?php $windows1 = ot_get_option('windows1');?>
<?php $youtube1 = ot_get_option('youtube1');?>
<?php $delicious1 = ot_get_option('delicious1');?>
<?php $rss1 = ot_get_option('rss1');?>
<?php $picasa1 = ot_get_option('picasa1');?>
<?php $deviantart1 = ot_get_option('deviantart1');?>
<?php $technorati1 = ot_get_option('technorati1');?>
<?php $stumbleupon1 = ot_get_option('stumbleupon1');?>
<?php $blogger1 = ot_get_option('blogger1');?>
<?php $wordpress1 = ot_get_option('wordpress1');?>
<?php $amazon1 = ot_get_option('amazon1');?>
<?php $appstore1 = ot_get_option('appstore1');?>
<?php $paypal1 = ot_get_option('paypal1');?>
<?php $myspace1 = ot_get_option('myspace1');?>
<?php $dropbox1 = ot_get_option('dropbox1');?>
<?php $windows81 = ot_get_option('windows81');?>
<?php $pinterest1 = ot_get_option('pinterest1');?>
<?php $soundcloud1 = ot_get_option('soundcloud1');?>
<?php $google_drive1 = ot_get_option('google_drive1');?>
<?php $android1 = ot_get_option('android1');?>
<?php $behance1 = ot_get_option('behance1');?>
<?php $instagram1 = ot_get_option('instagram1');?>
<?php $ebay1 = ot_get_option('ebay1');?>
<?php $google_plus1 = ot_get_option('google_plus1');?>


<?php if($forrst||$dribbble||$twitter||$flickr||$twitter_1||$facebook||$skype||$digg||$google||$html5||$linkedin||$last_fm||$vimeo||$yahoo||$tumblr||$apple||$windows||$youtube||$delicious||$rss||$picasa||$deviantart||$technorati||$stumbleupon||$blogger||$wordpress||$amazon||$appstore||$paypal||$myspace||$dropbox||$windows8||$pinterest||$soundcloud||$google_drive||$android||$behance||$instagram||$ebay||$google_plus||$forrst1||$dribbble1||$twitter1||$flickr1||$twitter_11||$facebook1||$skype1||$digg1||$google1||$html51||$linkedin1||$last_fm1||$vimeo1||$yahoo1||$tumblr1||$apple1||$windows1||$youtube1||$delicious1||$rss1||$picasa1||$deviantart1||$technorati1||$stumbleupon1||$blogger1||$wordpress1||$amazon1||$appstore1||$paypal1||$myspace1||$dropbox1||$windows81||$pinterest1||$soundcloud1||$google_drive1||$android1||$behance1||$instagram1||$ebay1||$google_plus1):?>

<?php $tooltip = ' data-toggle="tooltip" data-placement="bottom"'?>
<?php $tooltip_class = '  lpd-tooltip'?> 

<div class="picons_social">
	<?php if($forrst):?><a title="Forrst"<?php echo $tooltip;?> target="<?php echo esc_attr($sm_target);?>" class="icon forrst<?php echo esc_attr($tooltip_class);?>" href="<?php echo esc_url($forrst);?>"></a><?php endif;?>
	<?php if($dribbble):?><a title="Dribbble"<?php echo $tooltip;?> target="<?php echo esc_attr($sm_target);?>" class="icon dribbble<?php echo esc_attr($tooltip_class);?>" href="<?php echo esc_url($dribbble);?>"></a><?php endif;?>
	<?php if($twitter):?><a title="Twitter"<?php echo $tooltip;?> target="<?php echo esc_attr($sm_target);?>" class="icon twitter<?php echo esc_attr($tooltip_class);?>" href="<?php echo esc_url($twitter);?>"></a><?php endif;?>
	<?php if($flickr):?><a title="Flickr"<?php echo $tooltip;?> target="<?php echo esc_attr($sm_target);?>" class="icon flickr<?php echo esc_attr($tooltip_class);?>" href="<?php echo esc_url($flickr);?>"></a><?php endif;?>
	<?php if($twitter_1):?><a title="Twitter"<?php echo $tooltip;?> target="<?php echo esc_attr($sm_target);?>" class="icon twitter-1<?php echo esc_attr($tooltip_class);?>" href="<?php echo esc_url($twitter_1);?>"></a><?php endif;?>
	<?php if($facebook):?><a title="Facebook"<?php echo $tooltip;?> target="<?php echo esc_attr($sm_target);?>" class="icon facebook<?php echo esc_attr($tooltip_class);?>" href="<?php echo esc_url($facebook);?>"></a><?php endif;?>
	<?php if($skype):?><a title="Skype"<?php echo $tooltip;?> target="<?php echo esc_attr($sm_target);?>" class="icon skype<?php echo esc_attr($tooltip_class);?>" href="<?php echo esc_url($skype);?>"></a><?php endif;?>
	<?php if($digg):?><a title="Digg"<?php echo $tooltip;?> target="<?php echo esc_attr($sm_target);?>" class="icon digg<?php echo esc_attr($tooltip_class);?>" href="<?php echo esc_url($digg);?>"></a><?php endif;?>
	<?php if($google):?><a title="Google"<?php echo $tooltip;?> target="<?php echo esc_attr($sm_target);?>" class="icon google<?php echo esc_attr($tooltip_class);?>" href="<?php echo esc_url($google);?>"></a><?php endif;?>
	<?php if($html5):?><a title="Html5"<?php echo $tooltip;?> target="<?php echo esc_attr($sm_target);?>" class="icon html5<?php echo esc_attr($tooltip_class);?>" href="<?php echo esc_url($html5);?>"></a><?php endif;?>
	<?php if($linkedin):?><a title="Linkedin"<?php echo $tooltip;?> target="<?php echo esc_attr($sm_target);?>" class="icon linkedin<?php echo esc_attr($tooltip_class);?>" href="<?php echo esc_url($linkedin);?>"></a><?php endif;?>
	<?php if($last_fm):?><a title="Last Fm"<?php echo $tooltip;?> target="<?php echo esc_attr($sm_target);?>" class="icon last_fm<?php echo esc_attr($tooltip_class);?>" href="<?php echo esc_url($last_fm);?>"></a><?php endif;?>
	<?php if($vimeo):?><a title="Vimeo"<?php echo $tooltip;?> target="<?php echo esc_attr($sm_target);?>" class="icon vimeo<?php echo esc_attr($tooltip_class);?>" href="<?php echo esc_url($vimeo);?>"></a><?php endif;?>
	<?php if($yahoo):?><a title="Yahoo"<?php echo $tooltip;?> target="<?php echo esc_attr($sm_target);?>" class="icon yahoo<?php echo esc_attr($tooltip_class);?>" href="<?php echo esc_url($yahoo);?>"></a><?php endif;?>
	<?php if($tumblr):?><a title="Tumblr"<?php echo $tooltip;?> target="<?php echo esc_attr($sm_target);?>" class="icon tumblr<?php echo esc_attr($tooltip_class);?>" href="<?php echo esc_url($tumblr);?>"></a><?php endif;?>
	<?php if($apple):?><a title="Apple"<?php echo $tooltip;?> target="<?php echo esc_attr($sm_target);?>" class="icon apple<?php echo esc_attr($tooltip_class);?>" href="<?php echo esc_url($apple);?>"></a><?php endif;?>
	<?php if($windows):?><a title="Windows"<?php echo $tooltip;?> target="<?php echo esc_attr($sm_target);?>" class="icon windows<?php echo esc_attr($tooltip_class);?>" href="<?php echo esc_url($windows);?>"></a><?php endif;?>
	<?php if($youtube):?><a title="Youtube"<?php echo $tooltip;?> target="<?php echo esc_attr($sm_target);?>" class="icon youtube<?php echo esc_attr($tooltip_class);?>" href="<?php echo esc_url($youtube);?>"></a><?php endif;?>
	<?php if($delicious):?><a title="Delicious"<?php echo $tooltip;?> target="<?php echo esc_attr($sm_target);?>" class="icon delicious<?php echo esc_attr($tooltip_class);?>" href="<?php echo esc_url($delicious);?>"></a><?php endif;?>
	<?php if($rss):?><a title="RSS"<?php echo $tooltip;?> target="<?php echo esc_attr($sm_target);?>" class="icon rss<?php echo esc_attr($tooltip_class);?>" href="<?php echo esc_url($rss);?>"></a><?php endif;?>
	<?php if($picasa):?><a title="Picasa"<?php echo $tooltip;?> target="<?php echo $sm_picasa;?>" class="icon picasa<?php echo esc_attr($tooltip_class);?>" href="<?php echo esc_url($picasa);?>"></a><?php endif;?>
	<?php if($deviantart):?><a title="Deviantart"<?php echo $tooltip;?> target="<?php echo esc_attr($sm_target);?>" class="icon deviantart<?php echo esc_attr($tooltip_class);?>" href="<?php echo esc_url($deviantart);?>"></a><?php endif;?>
	<?php if($technorati):?><a title="Technorati"<?php echo $tooltip;?> target="<?php echo esc_attr($sm_target);?>" class="icon technorati<?php echo esc_attr($tooltip_class);?>" href="<?php echo esc_url($technorati);?>"></a><?php endif;?>
	<?php if($stumbleupon):?><a title="Stumbleupon"<?php echo $tooltip;?> target="<?php echo esc_attr($sm_target);?>" class="icon stumbleupon<?php echo esc_attr($tooltip_class);?>" href="<?php echo esc_url($stumbleupon);?>"></a><?php endif;?>
	<?php if($blogger):?><a title="Blogger"<?php echo $tooltip;?> target="<?php echo esc_attr($sm_target);?>" class="icon blogger<?php echo esc_attr($tooltip_class);?>" href="<?php echo esc_url($blogger);?>"></a><?php endif;?>
	<?php if($wordpress):?><a title="Wordpress"<?php echo $tooltip;?> target="<?php echo esc_attr($sm_target);?>" class="icon wordpress<?php echo esc_attr($tooltip_class);?>" href="<?php echo esc_url($wordpress);?>"></a><?php endif;?>
	<?php if($amazon):?><a title="Amazon"<?php echo $tooltip;?> target="<?php echo esc_attr($sm_target);?>" class="icon amazon<?php echo esc_attr($tooltip_class);?>" href="<?php echo esc_url($amazon);?>"></a><?php endif;?>
	<?php if($appstore):?><a title="Appstore"<?php echo $tooltip;?> target="<?php echo esc_attr($sm_target);?>" class="icon appstore<?php echo esc_attr($tooltip_class);?>" href="<?php echo esc_url($appstore);?>"></a><?php endif;?>
	<?php if($paypal):?><a title="Paypal"<?php echo $tooltip;?> target="<?php echo esc_attr($sm_target);?>" class="icon paypal<?php echo esc_attr($tooltip_class);?>" href="<?php echo esc_url($paypal);?>"></a><?php endif;?>
	<?php if($myspace):?><a title="Myspace"<?php echo $tooltip;?> target="<?php echo esc_attr($sm_target);?>" class="icon myspace<?php echo esc_attr($tooltip_class);?>" href="<?php echo esc_url($myspace);?>"></a><?php endif;?>
	<?php if($dropbox):?><a title="Dropbox"<?php echo $tooltip;?> target="<?php echo esc_attr($sm_target);?>" class="icon dropbox<?php echo esc_attr($tooltip_class);?>" href="<?php echo esc_url($dropbox);?>"></a><?php endif;?>
	<?php if($windows8):?><a title="Windows8"<?php echo $tooltip;?> target="<?php echo esc_attr($sm_target);?>" class="icon windows8<?php echo esc_attr($tooltip_class);?>" href="<?php echo esc_url($windows8);?>"></a><?php endif;?>
	<?php if($pinterest):?><a title="Pinterest"<?php echo $tooltip;?> target="<?php echo esc_attr($sm_target);?>" class="icon pinterest<?php echo esc_attr($tooltip_class);?>" href="<?php echo esc_url($pinterest);?>"></a><?php endif;?>
	<?php if($soundcloud):?><a title="Soundcloud"<?php echo $tooltip;?> target="<?php echo esc_attr($sm_target);?>" class="icon soundcloud<?php echo esc_attr($tooltip_class);?>" href="<?php echo esc_url($soundcloud);?>"></a><?php endif;?>
	<?php if($google_drive):?><a title="Google Drive"<?php echo $tooltip;?> target="<?php echo esc_attr($sm_target);?>" class="icon google_drive<?php echo esc_attr($tooltip_class);?>" href="<?php echo esc_url($google_drive);?>"></a><?php endif;?>
	<?php if($android):?><a title="Android"<?php echo $tooltip;?> target="<?php echo esc_attr($sm_target);?>" class="icon android<?php echo esc_attr($tooltip_class);?>" href="<?php echo esc_url($android);?>"></a><?php endif;?>
	<?php if($behance):?><a title="Behance"<?php echo $tooltip;?> target="<?php echo esc_attr($sm_target);?>" class="icon behance<?php echo esc_attr($tooltip_class);?>" href="<?php echo esc_url($behance);?>"></a><?php endif;?>
	<?php if($instagram):?><a title="Instagram"<?php echo $tooltip;?> target="<?php echo esc_attr($sm_target);?>" class="icon instagram<?php echo esc_attr($tooltip_class);?>" href="<?php echo esc_url($instagram);?>"></a><?php endif;?>
	<?php if($ebay):?><a title="Ebay"<?php echo $tooltip;?> target="<?php echo esc_attr($sm_target);?>" class="icon ebay<?php echo esc_attr($tooltip_class);?>" href="<?php echo esc_url($ebay);?>"></a><?php endif;?>
	<?php if($google_plus):?><a title="Google Plus"<?php echo $tooltip;?> target="<?php echo esc_attr($sm_target);?>" class="icon google_plus<?php echo esc_attr($tooltip_class);?>" href="<?php echo esc_url($google_plus);?>"></a><?php endif;?>
	
	<?php if($forrst1):?><a title="Forrst"<?php echo $tooltip;?> target="<?php echo esc_attr($sm_target);?>" class="icon forrst1<?php echo esc_attr($tooltip_class);?>" href="<?php echo esc_url($forrst1);?>"></a><?php endif;?>
	<?php if($dribbble1):?><a title="Dribbble"<?php echo $tooltip;?> target="<?php echo esc_attr($sm_target);?>" class="icon dribbble1<?php echo esc_attr($tooltip_class);?>" href="<?php echo esc_url($dribbble1);?>"></a><?php endif;?>
	<?php if($twitter1):?><a title="Twitter"<?php echo $tooltip;?> target="<?php echo esc_attr($sm_target);?>" class="icon twitter1<?php echo esc_attr($tooltip_class);?>" href="<?php echo esc_url($twitter1);?>"></a><?php endif;?>
	<?php if($flickr1):?><a title="Flickr"<?php echo $tooltip;?> target="<?php echo esc_attr($sm_target);?>" class="icon flickr1<?php echo esc_attr($tooltip_class);?>" href="<?php echo esc_url($flickr1);?>"></a><?php endif;?>
	<?php if($twitter_11):?><a title="Twitter"<?php echo $tooltip;?> target="<?php echo esc_attr($sm_target);?>" class="icon twitter-11<?php echo esc_attr($tooltip_class);?>" href="<?php echo esc_url($twitter_11);?>"></a><?php endif;?>
	<?php if($facebook1):?><a title="Facebook"<?php echo $tooltip;?> target="<?php echo esc_attr($sm_target);?>" class="icon facebook1<?php echo esc_attr($tooltip_class);?>" href="<?php echo esc_url($facebook1);?>"></a><?php endif;?>
	<?php if($skype1):?><a title="Skype"<?php echo $tooltip;?> target="<?php echo esc_attr($sm_target);?>" class="icon skype1<?php echo esc_attr($tooltip_class);?>" href="<?php echo esc_url($skype1);?>"></a><?php endif;?>
	<?php if($digg1):?><a title="Digg"<?php echo $tooltip;?> target="<?php echo esc_attr($sm_target);?>" class="icon digg1<?php echo esc_attr($tooltip_class);?>" href="<?php echo esc_url($digg1);?>"></a><?php endif;?>
	<?php if($google1):?><a title="Google"<?php echo $tooltip;?> target="<?php echo esc_attr($sm_target);?>" class="icon google1<?php echo esc_attr($tooltip_class);?>" href="<?php echo esc_url($google1);?>"></a><?php endif;?>
	<?php if($html51):?><a title="Html5"<?php echo $tooltip;?> target="<?php echo esc_attr($sm_target);?>" class="icon html51<?php echo esc_attr($tooltip_class);?>" href="<?php echo esc_url($html51);?>"></a><?php endif;?>
	<?php if($linkedin1):?><a title="Linkedin"<?php echo $tooltip;?> target="<?php echo esc_attr($sm_target);?>" class="icon linkedin1<?php echo esc_attr($tooltip_class);?>" href="<?php echo esc_url($linkedin1);?>"></a><?php endif;?>
	<?php if($last_fm1):?><a title="Last Fm"<?php echo $tooltip;?> target="<?php echo esc_attr($sm_target);?>" class="icon last_fm1<?php echo esc_attr($tooltip_class);?>" href="<?php echo esc_url($last_fm1);?>"></a><?php endif;?>
	<?php if($vimeo1):?><a title="Vimeo"<?php echo $tooltip;?> target="<?php echo esc_attr($sm_target);?>" class="icon vimeo1<?php echo esc_attr($tooltip_class);?>" href="<?php echo esc_url($vimeo1);?>"></a><?php endif;?>
	<?php if($yahoo1):?><a title="Yahoo"<?php echo $tooltip;?> target="<?php echo esc_attr($sm_target);?>" class="icon yahoo1<?php echo esc_attr($tooltip_class);?>" href="<?php echo esc_url($yahoo1);?>"></a><?php endif;?>
	<?php if($tumblr1):?><a title="Tumblr"<?php echo $tooltip;?> target="<?php echo esc_attr($sm_target);?>" class="icon tumblr1<?php echo esc_attr($tooltip_class);?>" href="<?php echo esc_url($tumblr1);?>"></a><?php endif;?>
	<?php if($apple1):?><a title="Apple"<?php echo $tooltip;?> target="<?php echo esc_attr($sm_target);?>" class="icon apple1<?php echo esc_attr($tooltip_class);?>" href="<?php echo esc_url($apple1);?>"></a><?php endif;?>
	<?php if($windows1):?><a title="Windows"<?php echo $tooltip;?> target="<?php echo esc_attr($sm_target);?>" class="icon windows1<?php echo esc_attr($tooltip_class);?>" href="<?php echo esc_url($windows1);?>"></a><?php endif;?>
	<?php if($youtube1):?><a title="Youtube"<?php echo $tooltip;?> target="<?php echo esc_attr($sm_target);?>" class="icon youtube1<?php echo esc_attr($tooltip_class);?>" href="<?php echo esc_url($youtube1);?>"></a><?php endif;?>
	<?php if($delicious1):?><a title="Delicious"<?php echo $tooltip;?> target="<?php echo esc_attr($sm_target);?>" class="icon delicious1<?php echo esc_attr($tooltip_class);?>" href="<?php echo esc_url($delicious1);?>"></a><?php endif;?>
	<?php if($rss1):?><a title="RSS"<?php echo $tooltip;?> target="<?php echo esc_attr($sm_target);?>" class="icon rss1<?php echo esc_attr($tooltip_class);?>" href="<?php echo esc_url($rss1);?>"></a><?php endif;?>
	<?php if($picasa1):?><a title="Picasa"<?php echo $tooltip;?> target="<?php echo esc_attr($sm_target);?>" class="icon picasa1<?php echo esc_attr($tooltip_class);?>" href="<?php echo esc_url($picasa1);?>"></a><?php endif;?>
	<?php if($deviantart1):?><a title="Deviantart"<?php echo $tooltip;?> target="<?php echo esc_attr($sm_target);?>" class="icon deviantart1<?php echo esc_attr($tooltip_class);?>" href="<?php echo esc_url($deviantart1);?>"></a><?php endif;?>
	<?php if($technorati1):?><a title="Technorati"<?php echo $tooltip;?> target="<?php echo esc_attr($sm_target);?>" class="icon technorati1<?php echo esc_attr($tooltip_class);?>" href="<?php echo esc_url($technorati1);?>"></a><?php endif;?>
	<?php if($stumbleupon1):?><a title="Stumbleupon"<?php echo $tooltip;?> target="<?php echo esc_attr($sm_target);?>" class="icon stumbleupon1<?php echo esc_attr($tooltip_class);?>" href="<?php echo esc_url($stumbleupon1);?>"></a><?php endif;?>
	<?php if($blogger1):?><a title="Blogger"<?php echo $tooltip;?> target="<?php echo esc_attr($sm_target);?>" class="icon blogger1<?php echo esc_attr($tooltip_class);?>" href="<?php echo esc_url($blogger1);?>"></a><?php endif;?>
	<?php if($wordpress1):?><a title="Wordpress"<?php echo $tooltip;?> target="<?php echo esc_attr($sm_target);?>" class="icon wordpress1<?php echo esc_attr($tooltip_class);?>" href="<?php echo esc_url($wordpress1);?>"></a><?php endif;?>
	<?php if($amazon1):?><a title="Amazon"<?php echo $tooltip;?> target="<?php echo esc_attr($sm_target);?>" class="icon amazon1<?php echo esc_attr($tooltip_class);?>" href="<?php echo esc_url($amazon1);?>"></a><?php endif;?>
	<?php if($appstore1):?><a title="Appstore"<?php echo $tooltip;?> target="<?php echo esc_attr($sm_target);?>" class="icon appstore1<?php echo esc_attr($tooltip_class);?>" href="<?php echo esc_url($appstore1);?>"></a><?php endif;?>
	<?php if($paypal1):?><a title="Paypal"<?php echo $tooltip;?> target="<?php echo esc_attr($sm_target);?>" class="icon paypal1<?php echo esc_attr($tooltip_class);?>" href="<?php echo esc_url($paypal1);?>"></a><?php endif;?>
	<?php if($myspace1):?><a title="Myspace"<?php echo $tooltip;?> target="<?php echo esc_attr($sm_target);?>" class="icon myspace1<?php echo esc_attr($tooltip_class);?>" href="<?php echo esc_url($myspace1);?>"></a><?php endif;?>
	<?php if($dropbox1):?><a title="Dropbox"<?php echo $tooltip;?> target="<?php echo esc_attr($sm_target);?>" class="icon dropbox1<?php echo esc_attr($tooltip_class);?>" href="<?php echo esc_url($dropbox1);?>"></a><?php endif;?>
	<?php if($windows81):?><a title="Windows8"<?php echo $tooltip;?> target="<?php echo esc_attr($sm_target);?>" class="icon windows81<?php echo esc_attr($tooltip_class);?>" href="<?php echo esc_url($windows81);?>"></a><?php endif;?>
	<?php if($pinterest1):?><a title="Pinterest"<?php echo $tooltip;?> target="<?php echo esc_attr($sm_target);?>" class="icon pinterest1<?php echo esc_attr($tooltip_class);?>" href="<?php echo esc_url($pinterest1);?>"></a><?php endif;?>
	<?php if($soundcloud1):?><a title="Soundcloud"<?php echo $tooltip;?> target="<?php echo esc_attr($sm_target);?>" class="icon soundcloud1<?php echo esc_attr($tooltip_class);?>" href="<?php echo esc_url($soundcloud1);?>"></a><?php endif;?>
	<?php if($google_drive1):?><a title="Google Drive"<?php echo $tooltip;?> target="<?php echo esc_attr($sm_target);?>" class="icon google_drive1<?php echo esc_attr($tooltip_class);?>" href="<?php echo esc_url($google_drive1);?>"></a><?php endif;?>
	<?php if($android1):?><a title="Android"<?php echo $tooltip;?> target="<?php echo esc_attr($sm_target);?>" class="icon android1<?php echo esc_attr($tooltip_class);?>" href="<?php echo esc_url($android1);?>"></a><?php endif;?>
	<?php if($behance1):?><a title="Behance"<?php echo $tooltip;?> target="<?php echo esc_attr($sm_target);?>" class="icon behance1<?php echo esc_attr($tooltip_class);?>" href="<?php echo esc_url($behance1);?>"></a><?php endif;?>
	<?php if($instagram1):?><a title="Instagram"<?php echo $tooltip;?> target="<?php echo esc_attr($sm_target);?>" class="icon instagram1<?php echo esc_attr($tooltip_class);?>" href="<?php echo esc_url($instagram1);?>"></a><?php endif;?>
	<?php if($ebay1):?><a title="Ebay"<?php echo $tooltip;?> target="<?php echo esc_attr($sm_target);?>" class="icon ebay1<?php echo esc_attr($tooltip_class);?>" href="<?php echo esc_url($ebay1);?>"></a><?php endif;?>
	<?php if($google_plus1):?><a title="Google Plus"<?php echo $tooltip;?> target="<?php echo esc_attr($sm_target);?>" class="icon google_plus1<?php echo esc_attr($tooltip_class);?>" href="<?php echo esc_url($google_plus1);?>"></a><?php endif;?>
</div>

<?php endif;?>