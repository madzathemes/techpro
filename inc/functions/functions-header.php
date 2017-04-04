<?php function techpro_header() {
if ( false == get_theme_mod( 't_p_to_search', false ) ) { $t_p_to_search = esc_html__("To search type and hit enter", "techpro");  } else { $t_p_to_search = get_theme_mod( 't_p_to_search' ); }
$allowed_html = array('ins' => array( 'class' => array(), 'style' => array(),'data-ad-client' => array(),'data-ad-slot' => array(),'data-ad-format' => array()), 'iframe' => array( 'id' => array(),'name' => array(),'src' => array(),'style' => array(),'scrolling' => array(),'frameborder' => array()), 'script' => array( 'async' => array(), 'type' => array(),'src' => array()), 'noscript' => array(), 'small' => array( 'class' => array()), 'img' => array( 'src' => array(), 'alt' => array(), 'class' => array(), 'width' => array(), 'height' => array() ), 'a' => array( 'href' => array(), 'title' => array() ), 'br' => array(), 'i' => array('class' => array()),  'em' => array(), 'strong' => array(), 'div' => array('class' => array()), 'span' => array('class' => array()));
$option = get_option("techpro_theme_options");
$optioz = get_option("magazin_theme_options");
$page_option = get_post_meta(get_the_ID(), "magazin_menu_background_width", true);
if(!empty($page_option)) {
	if($page_option=="2") {
		$menu_full =  'menu-background';
		$menu_boxed =  '';
	} else {
		$menu_full =  '';
		$menu_boxed =  'menu-background';
	}
}
else if(!empty($option['menu_background_width'])) {
	if($option['menu_background_width']=="full") {
		$menu_full =  'menu-background';
		$menu_boxed =  '';
	} else {
		$menu_full =  '';
		$menu_boxed =  'menu-background';
	}
} else {
	$menu_full =  '';
	$menu_boxed =  'menu-background';
}
?>

<div class="mt-header-mobile menu-background-mobile hide-desktop top-nav <?php if(!empty($option['menu_search'])) { if($option['menu_search']=="1") { ?>search-on<?php } } ?>">
	<div class="nav-mobile pointer pull-left">
		<div class="mt-m-cool-button">
			<span class="mt-m-cool-button-line"></span>
		</div>
	</div>
	<div class="mt-mobile-logo"><?php techpro_logo_mobile(); ?></div>
	<?php if(!empty($option['menu_search'])) { if($option['menu_search']=="1") { ?>
		<div class="search-close"></div>
		<div class="nav-search-wrap pull-right">
			<div class="nav-search pointer"></div>
			<div class="nav-search-input mt-radius">
				<form method="get" id="searchform" action="<?php echo esc_url(home_url('/')); ?>/">
					<input type="text" placeholder="<?php echo esc_html($t_p_to_search); ?>"  name="s" >
				</form>
			</div>
		</div>
	<?php } } ?>
</div>
<div class="mt-header-space hide-desktop"></div>
<?php if(function_exists("mt_header_ad_top")) { mt_header_ad_top(); } ?>
<div class="header-wrap" itemscope="itemscope" itemtype="http://schema.org/WPHeader">
	<div class="header-mt-container-wrap">
		<div class="container mt-header-container">
			<div class="row">
				<div class="col-md-12">
					<div class="head container-fluid">
						<div class="head-logo"><?php techpro_logo(); ?></div>
						<?php if  (!empty($option['menu_top_ad'])) {  ?>
							<?php if  ($option['menu_top_ad']=="ad") {  ?>
								<div class="top-ad">
									<?php if(function_exists("mt_header_ad_top")) { mt_header_ad_top(); } ?>
								</div>
							<?php } else { echo techpro_top_content(); } ?>
						<?php } else { echo techpro_top_content(); } ?>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="header-menu mt-header-container <?php if(!empty($option['menu_search'])) { if($option['menu_search']=="1") { ?>search-on<?php } } if(!empty($option['menu_small_on'])) { ?> small-on<?php } ?> ">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="top-nav container-fluid">

						<div class="nav-button mt-radius pointer pull-left menu-background-left <?php if(empty($option['menu_small_on'])) { ?>hide-desktop<?php } ?>">
							<div class="mt-m-cool-button">
								<span class="mt-m-cool-button-line"></span>
							</div>
						</div>

						<div class="nav pull-left" itemscope="itemscope" itemtype="http://schema.org/SiteNavigationElement" >
							<?php techpro_nav(); ?>
							<div class="pull-right menu-background mt-radius">
								<?php techpro_socials(); ?>
							</div>
						</div>

						<?php if(!empty($option['menu_search'])) { if($option['menu_search']=="1") { ?>
							<div class="search-close"></div><div class="search-close"></div>
							<div class="nav-search-wrap pull-right menu-background-right mt-radius">
								<div class="nav-search pointer"></div>
								<div class="nav-search-input mt-radius">
									<form method="get" action="<?php echo esc_url(home_url('/')); ?>/">
										<input type="text" placeholder="<?php echo esc_html($t_p_to_search); ?>"  name="s" >
									</form>
								</div>
							</div>
						<?php } } ?>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<?php } add_filter('techpro_header','techpro_header');


function techpro_top_content() { $option = get_option("techpro_theme_options"); ?>
<?php
if ( false == get_theme_mod( 't_o_latest', false ) ) { $t_o_latest = esc_html__("LATEST", "techpro");  } else { $t_o_latest = get_theme_mod( 't_o_latest' ); }
if ( false == get_theme_mod( 't_o_popular', false ) ) { $t_o_popular = esc_html__("POPULAR", "techpro");  } else { $t_o_popular = get_theme_mod( 't_o_popular' ); }
if ( false == get_theme_mod( 't_o_hot', false ) ) { $t_o_hot = esc_html__("HOT", "techpro");  } else { $t_o_hot = get_theme_mod( 't_o_hot' ); }
if ( false == get_theme_mod( 't_o_trending', false ) ) { $t_o_trending = esc_html__("TRENDING", "techpro");  } else { $t_o_trending = get_theme_mod( 't_o_trending' ); }
if ( false == get_theme_mod( 't_o_posts', false ) ) { $t_o_posts = esc_html__("Posts", "techpro");  } else { $t_o_posts = get_theme_mod( 't_o_posts' ); }
?>
		<div class="head-nav">
			<?php if(!empty($option['url_latest'])) { ?><a class="mt_l_latest <?php if($option['url_latest']==get_the_ID()) { ?>active<?php } ?>" href="<?php echo get_permalink(esc_html($option['url_latest'])); ?>"><?php echo esc_html($t_o_latest); ?> <span><?php echo esc_html($t_o_posts); ?></span></a><?php } ?>
			<?php if(!empty($option['url_popular'])) { ?><a class="mt_l_popular <?php if($option['url_popular']==get_the_ID()) { ?>active<?php } ?>" href="<?php echo get_permalink(esc_html($option['url_popular'])); ?>"><?php echo esc_html($t_o_popular); ?> <span><?php echo esc_html($t_o_posts); ?></span></a><?php } ?>
			<?php if(!empty($option['url_hot'])) { ?><a class="mt_l_hot <?php if($option['url_hot']==get_the_ID()) { ?>active<?php } ?>" href="<?php echo get_permalink(esc_html($option['url_hot'])); ?>"><?php echo esc_html($t_o_hot); ?> <span><?php echo esc_html($t_o_posts); ?></span></a><?php } ?>
			<?php if(!empty($option['url_trending'])) { ?>	<a class="mt_l_trending <?php if($option['url_trending']==get_the_ID()) { ?>active<?php } ?>" href="<?php echo get_permalink(esc_html($option['url_trending'])); ?>"><?php echo esc_html($t_o_trending); ?> <span><?php echo esc_html($t_o_posts); ?></span></a><?php } ?>
		</div>

		<?php if(!empty($option['header_link_url'])) { ?>
				<div class="head-bookmark">
					<a class="mt-radius" href="<?php echo esc_url($option['header_link_url']);  ?>" <?php if(!empty($option['header_link_blank'])) { if($option['header_link_blank']=="1") {?>target="_blank" <?php }} ?>><?php echo esc_attr(get_theme_mod('techpro_header_link_name', 'Add Post')); ?></a>
				</div>
		<?php } ?>
<?php }
add_filter('techpro_top_content','techpro_top_content');

function techpro_logo() {

	$option = get_option("techpro_theme_options");

	// Fix for SSL
	if(!empty($option['header_logo'])) {
		$header_logo = esc_url($option['header_logo']);
		if(is_ssl() and 'http' == parse_url($header_logo, PHP_URL_SCHEME) ){
		    $header_logo = str_replace('http://', 'https://', $header_logo);
		}
	}
	if(!empty($option['header_logox2'])) {
		$header_logo2 = esc_url($option['header_logox2']);
		if(is_ssl() and 'http' == parse_url($header_logo2, PHP_URL_SCHEME) ){
		    $header_logo2 = str_replace('http://', 'https://', $header_logo2);
		}
	}

 	if(!empty($option['header_logo'])) { ?>
		<a class="logo"  href="<?php echo esc_url(home_url('/'));?>">
			<img <?php if(!empty($option['logo_width'])) { ?>  width="<?php echo esc_attr($option['logo_width']); ?>" <?php } if(!empty($option['logo_height'])) { ?>  height="<?php echo esc_attr($option['logo_height']); ?>" <?php } ?>
			src="<?php echo esc_url($header_logo); ?>"
			srcset="<?php echo esc_url($header_logo); ?>, <?php if(!empty($option['header_logox2'])) { echo esc_url($header_logo2); } ?> 2x"  alt="<?php echo the_title(); ?>"  />
		</a>
	<?php } else { ?>
		<a class="logo"  href="<?php echo esc_url(home_url('/'));?>">
			<img src="<?php echo get_template_directory_uri(); ?>/inc/img/logo.png" width="212" height="62" alt="<?php echo the_title(); ?>" />
		</a>
	<?php }
}

add_filter('techpro_logo','techpro_logo');

function techpro_logo_mobile() {

	$option = get_option("techpro_theme_options"); ?>

	<?php if(!empty($option['mobile_logo'])) { ?>
		<a href="<?php echo esc_url(home_url('/'));?>">
			<img src="<?php echo esc_url($option['mobile_logo']); ?>" alt="<?php echo the_title(); ?>"  />
		</a>
	<?php } else { ?>
		<a href="<?php echo esc_url(home_url('/'));?>">
			<img src="<?php echo get_template_directory_uri(); ?>/inc/img/logo.png" alt="<?php echo the_title(); ?>" />
		</a>
	<?php }
}
add_filter('techpro_logo_mobile','techpro_logo_mobile');

function techpro_nav() {
	if(class_exists('md_walker_')) {
		wp_nav_menu( array('theme_location'=>"primary",  'menu_class' => 'sf-menu menu-background mt-radius', 'walker'	=> new md_walker, 'echo' => true, 'depth' => 3));
	} else {
		wp_nav_menu( array('theme_location'=>"primary",  'menu_class' => 'sf-menu menu-background mt-radius', 'echo' => true, 'depth' => 3));
	}
}
add_filter('techpro_nav','techpro_nav');

function techpro_nav_fixed() {
	wp_nav_menu( array('theme_location'=>"primary",  'menu_class' => 'fixed-menu-ul',  'echo' => true, 'depth' => 1));
}
add_filter('techpro_nav_fixed','techpro_nav_fixed');

function techpro_nav_mobile() {
	wp_nav_menu( array('theme_location'=>"mobile",  'menu_class' => 'mobile',  'echo' => true, 'depth' => 2));
}
add_filter('techpro_nav_mobile','techpro_nav_mobile');

function techpro_socials() { ?>
	<ul class="social"> <?php
			$option = get_option("techpro_theme_options");
			if(!empty($option['mt_icon_twitter'])) {?><li><a <?php if(!empty($option['mt_icon_blank'])) { if($option['mt_icon_blank']=="on") {?> target="_blank" <?php }} ?> href="<?php echo esc_url($option['mt_icon_twitter']); ?>"><i class="ic-twitter"></i></a></li><?php }
			if(!empty($option['mt_icon_facebook'])) {?><li><a <?php  if(!empty($option['mt_icon_blank'])) { if($option['mt_icon_blank']=="on") {?> target="_blank" <?php }} ?> href="<?php echo esc_url($option['mt_icon_facebook']); ?>" ><i class="ic-facebook"></i></a></li><?php }
			if(!empty($option['mt_icon_intagram'])) {?><li><a <?php if(!empty($option['mt_icon_blank'])) {  if($option['mt_icon_blank']=="on") {?> target="_blank" <?php }} ?> href="<?php echo esc_url($option['mt_icon_intagram']); ?>" ><i class="ic-instagram"></i></a></li><?php }
			if(!empty($option['mt_icon_vimeo'])) {?><li><a <?php  if(!empty($option['mt_icon_blank'])) { if($option['mt_icon_blank']=="on") {?> target="_blank" <?php }} ?> href="<?php echo esc_url($option['mt_icon_vimeo']); ?>"><i class="ic-vimeo"></i></a></li><?php }
			if(!empty($option['mt_icon_youtube'])) {?><li><a <?php  if(!empty($option['mt_icon_blank'])) { if($option['mt_icon_blank']=="on") {?> target="_blank" <?php }} ?> href="<?php echo esc_url($option['mt_icon_youtube']); ?>"><i class="ic-youtube-play"></i></a></li><?php }
			if(!empty($option['mt_icon_linkedin'])) {?><li><a <?php  if(!empty($option['mt_icon_blank'])) { if($option['mt_icon_blank']=="on") {?> target="_blank" <?php }} ?> href="<?php echo esc_url($option['mt_icon_linkedin']); ?>"><i class="ic-linkedin"></i></a></li><?php }
			if(!empty($option['mt_icon_gplus'])) {?><li><a <?php  if(!empty($option['mt_icon_blank'])) { if($option['mt_icon_blank']=="on") {?> target="_blank" <?php }} ?> href="<?php echo esc_url($option['mt_icon_gplus']); ?>"><i class="ic-google-plus"></i></a></li><?php }
			if(!empty($option['mt_icon_dribble'])) {?><li><a <?php  if(!empty($option['mt_icon_blank'])) { if($option['mt_icon_blank']=="on") {?> target="_blank" <?php }} ?> href="<?php echo esc_url($option['mt_icon_dribble']); ?>"><i class="ic-dribbble"></i></a></li><?php }
			if(!empty($option['mt_icon_skype'])) {?><li><a <?php  if(!empty($option['mt_icon_blank'])) { if($option['mt_icon_blank']=="on") {?> target="_blank" <?php }} ?> href="<?php echo esc_url($option['mt_icon_skype']); ?>"><i class="ic-skype"></i></a></li><?php }
			if(!empty($option['mt_icon_pinterest'])) {?><li><a <?php  if(!empty($option['mt_icon_blank'])) { if($option['mt_icon_blank']=="on") {?> target="_blank" <?php }} ?> href="<?php echo esc_url($option['mt_icon_pinterest']); ?>"><i class="ic-pinterest"></i></a></li><?php }
			if(!empty($option['mt_icon_rss'])) {?><li><a <?php  if(!empty($option['mt_icon_blank'])) { if($option['mt_icon_blank']=="on") {?> target="_blank" <?php }} ?> href="<?php echo esc_url($option['mt_icon_rss']); ?>"><i class="ic-rss"></i></a></li><?php }
			?>
	</ul><?php
} add_filter('techpro_socials','techpro_socials');

function techpro_header_fixed() { ?>
	<div class="fixed-top-menu">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<?php techpro_logo(); ?>
					<?php techpro_nav_fixed(); ?>
					<div class="clear"></div>
				</div>
			</div>
		</div>
	</div>
<?php } add_filter('techpro_header_fixed','techpro_header_fixed');

function techpro_header_share() {
	if (is_single()) {
		if ( false == get_theme_mod( 't_p_share_on_facebook', false ) ) { $t_p_share_on_facebook = esc_html__("Share on Facebook", "techpro");  } else { $t_p_share_on_facebook = get_theme_mod( 't_p_share_on_facebook' ); }
		if ( false == get_theme_mod( 't_p_share_on_twitter', false ) ) { $t_p_share_on_twitter = esc_html__("Tweet on Twitter", "techpro");  } else { $t_p_share_on_twitter = get_theme_mod( 't_p_share_on_twitter' ); }
		$url = wp_get_attachment_url( get_post_thumbnail_id(get_the_ID()));	?>
		<?php $option = get_option("techpro_theme_options"); ?>
				<div class="fixed-top">
					<div class="container">
						<div class="row">
							<div class="col-md-12">

								<ul class="share">
									<li class="share-facebook"><a class="mt-radius" href="http://www.facebook.com/sharer.php?u=<?php the_permalink();?>" target="_blank"><span><?php echo esc_html($t_p_share_on_facebook); ?></span></a></li>
									<?php $input = get_the_title().' '.get_the_permalink(); $title = str_replace( ' ', '+', $input ); ?>
									<li class="share-twitter"><a class="mt-radius" href="http://twitter.com/home/?status=<?php echo esc_attr($title); ?>" target="_blank"><span><?php echo esc_html($t_p_share_on_twitter); ?></span></a></li>
									<li class="share-more">
										<div class="share-more-wrap"><div class="share-more-icon mt-radius">+</div></div>
										<a class="mt-radius" href="https://plus.google.com/share?url=<?php the_permalink() ?>" target="_blank"><div class="google mt-radius-b"></div></a>
										<a class="mt-radius" href="http://pinterest.com/pin/create/button/?url=<?php the_permalink() ?>&media=<?php echo esc_url($url); ?>" target="_blank"><div class="pinterest mt-radius-b"></div></a>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
	<?php } ?>
<?php } add_filter('techpro_header_share','techpro_header_share'); ?>
