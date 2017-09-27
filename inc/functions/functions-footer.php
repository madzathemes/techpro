<?php function techpro_footer_1() {?>
  <?php $option = get_option("techpro_theme_options"); ?>
  <?php if  (!empty($option['footer_top'])) {  ?>
    <?php if  ($option['footer_top'] == '1') {  ?>
      <div class="footer-top">
        <div class="container">
          <div class="row">
            <div class="col-md-3 footer-logo">
              <?php if(!empty($option['footer_logo'])) { ?>
                <img src="<?php echo esc_url($option['footer_logo']); ?>" srcset="<?php echo esc_url($option['footer_logo']); ?> 1x, <?php echo esc_url($option['footer_logox2']); ?> 2x"  alt="<?php echo the_title(); ?>"  />
              <?php } else { ?>
                <img src="<?php echo get_template_directory_uri(); ?>/inc/img/logo.png" alt="<?php echo the_title(); ?>" />
              <?php } ?>
            </div>
            <div class="col-md-4 footer-about">
              <h2><?php echo esc_html__('About Us', 'techpro'); ?></h2>
              <p><?php echo esc_html(get_theme_mod('techpro_footer_about_us', 'Donec eu tellus convallis, vehicula neque sed, mattis elit. Praesent ornare, ligula in efficitur egestas, massa lacus vulputate enim')); ?> </p>
              <p><?php echo esc_html__('Contact us:', 'techpro'); ?> <a class="mail" href="mailto:<?php echo esc_html(get_theme_mod('techpro_footer_about_us_mail', 'info@techpro.com')); ?>" target="_top"><?php echo esc_html(get_theme_mod('techpro_footer_about_us_mail', 'info@techpro.com')); ?></a></p>
            </div>
            <div class="col-md-5 footer-social">
              <h2><?php echo esc_html__('Follow Us', 'techpro'); ?></h2>
              <?php techpro_socials(); ?>
              <p><?php echo esc_html(get_theme_mod('techpro_footer_follow_us', 'Donec eu tellus convallis, vehicula neque sed')); ?></p>
            </div>
          </div>
          <a href="#" class="footer-scroll-to-top-link"></a>
        </div>
      </div>
    <?php } ?>
  <?php } ?>
  <?php if  (!empty($option['footer_bottom'])) { ?>
    <?php if  ($option['footer_bottom'] == '1') { ?>
      <div class="footer-bottom">
        <div class="container">
          <div class="row">
            <div class="col-md-6 footer-copyright">
              <p><?php echo esc_html(get_theme_mod('techpro_copyright_text', 'Copyright 2017. Powered by WordPress Theme. By Madars Bitenieks')); ?></p>
            </div>
              <div class="col-md-6">
                <?php wp_nav_menu( array('theme_location'  => "footer_menu", 'container' =>false, 'fallback_cb' => false, 'menu_class' => 'footer-nav', 'menu_id' => '','echo' => true, 'before' => '','after' => '', 'link_before' => '','link_after' => '', 'depth' => 1));  ?>
              </div>
            </div>
        </div>
      </div>
    <?php } ?>
  <?php } ?>
  <?php
} add_filter('techpro_footer_1','techpro_footer_1'); ?>
<?php function techpro_footer_2() {?>
  <?php $option = get_option("techpro_theme_options"); ?>
  <?php if  (!empty($option['footer_top'])) {  ?>
    <?php if  ($option['footer_top'] == '1') {  ?>
      <div class="footer-top">
        <div class="container mt-radius">
          <div class="row">
            <div class="col-md-4 footer-logo">

              <?php

              // Fix for SSL
              if(!empty($option['footer_logo'])) {
            		$footer_logo = esc_url($option['footer_logo']);
            		if(is_ssl() and 'http' == parse_url($footer_logo, PHP_URL_SCHEME) ){
            		    $footer_logo = str_replace('http://', 'https://', $footer_logo);
            		}
            	}

              $footer_logo2 = "";
              if(!empty($option['footer_logox2'])) {
            		$footer_logo2 = esc_url($option['footer_logox2']);
            		if(is_ssl() and 'http' == parse_url($footer_logo2, PHP_URL_SCHEME) ){
            		    $footer_logo2 = str_replace('http://', 'https://', $footer_logo2);
            		}
            	}

              ?>

              <?php if(!empty($option['footer_logo'])) { ?>
                <img src="<?php echo esc_url($footer_logo); ?>" srcset="<?php echo esc_url($footer_logo); ?> 1x, <?php echo esc_url($footer_logo2); ?> 2x"  alt="<?php echo the_title(); ?>"  />
              <?php } else { ?>
                <img src="<?php echo get_template_directory_uri(); ?>/inc/img/logo.png" alt="<?php echo the_title(); ?>" />
              <?php } ?>
            </div>
            <div class="col-md-4 footer-about">
              <?php if ( true == get_theme_mod( 'mt_footer_subscribe', true ) ) {  ?>
                <div class="mt-subscribe-footer">
                    <div class="form-overlay"></div>
                    <form method="post" target="popupwindow" action="https://www.specificfeeds.com/subscribe?pub=bWFkemF0aGVtZXMtdXNlcmRhdGEtNzAyOTMy">
                    	<input class="mt-s-i" type="text" name="email" placeholder="<?php echo esc_html("Your email adress", 'techpro'); ?>" required>
                    	<input class="mt-s-b"  type="submit" value="<?php echo esc_html("Subscribe Now", 'techpro'); ?>" name="subscribe">
                      <div class="clear"></div>
                    </form>
                    <div class="clear"></div>
                </div>
              <?php } ?>
            </div>
            <div class="col-md-4 footer-social">
              <?php techpro_socials(); ?>
              <?php wp_nav_menu( array('theme_location'  => "footer_menu", 'container' =>false, 'fallback_cb' => false, 'menu_class' => 'footer-nav', 'menu_id' => '','echo' => true, 'before' => '','after' => '', 'link_before' => '','link_after' => '', 'depth' => 1));  ?>
            </div>
          </div>
        </div>
      </div>
    <?php } ?>
  <?php } ?>
  <?php if  (!empty($option['footer_bottom'])) { ?>
    <?php if  ($option['footer_bottom'] == '1') { ?>
      <div class="footer-bottom">
        <div class="container mt-radius">
          <div class="row">
            <div class="col-md-6 footer-copyright">
              <p><?php echo esc_html(get_theme_mod('techpro_copyright_text', 'Copyright 2017. Powered by WordPress Theme. By Madars Bitenieks')); ?></p>
            </div>
              <div class="col-md-6">
                <div class="head-nav">
                  <?php
                  if ( false == get_theme_mod( 't_o_latest', false ) ) { $t_o_latest = esc_html__("LATEST", "techpro");  } else { $t_o_latest = get_theme_mod( 't_o_latest' ); }
                  if ( false == get_theme_mod( 't_o_popular', false ) ) { $t_o_popular = esc_html__("POPULAR", "techpro");  } else { $t_o_popular = get_theme_mod( 't_o_popular' ); }
                  if ( false == get_theme_mod( 't_o_hot', false ) ) { $t_o_hot = esc_html__("HOT", "techpro");  } else { $t_o_hot = get_theme_mod( 't_o_hot' ); }
                  if ( false == get_theme_mod( 't_o_trending', false ) ) { $t_o_trending = esc_html__("TRENDING", "techpro");  } else { $t_o_trending = get_theme_mod( 't_o_trending' ); }
                  if ( false == get_theme_mod( 't_o_posts', false ) ) { $t_o_posts = esc_html__("Posts", "techpro");  } else { $t_o_posts = get_theme_mod( 't_o_posts' ); }
                  ?>
                  <?php if(!empty($option['url_latest'])) { ?><a class="mt_l_latest <?php if($option['url_latest']==get_the_ID()) { ?>active<?php } ?>" href="<?php echo get_permalink(esc_html($option['url_latest'])); ?>"><?php echo esc_html($t_o_latest); ?> <span><?php echo esc_html($t_o_posts); ?></span></a><?php } ?>
            			<?php if(!empty($option['url_popular'])) { ?><a class="mt_l_popular <?php if($option['url_popular']==get_the_ID()) { ?>active<?php } ?>" href="<?php echo get_permalink(esc_html($option['url_popular'])); ?>"><?php echo esc_html($t_o_popular); ?> <span><?php echo esc_html($t_o_posts); ?></span></a><?php } ?>
            			<?php if(!empty($option['url_hot'])) { ?><a class="mt_l_hot <?php if($option['url_hot']==get_the_ID()) { ?>active<?php } ?>" href="<?php echo get_permalink(esc_html($option['url_hot'])); ?>"><?php echo esc_html($t_o_hot); ?> <span><?php echo esc_html($t_o_posts); ?></span></a><?php } ?>
            			<?php if(!empty($option['url_trending'])) { ?>	<a class="mt_l_trending <?php if($option['url_trending']==get_the_ID()) { ?>active<?php } ?>" href="<?php echo get_permalink(esc_html($option['url_trending'])); ?>"><?php echo esc_html($t_o_trending); ?> <span><?php echo esc_html($t_o_posts); ?></span></a><?php } ?>
            		</div>
              </div>
            </div>
        </div>
      </div>
    <?php } ?>
  <?php } ?>
  <?php
} add_filter('techpro_footer_2','techpro_footer_2'); ?>
