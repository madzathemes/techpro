<?php function techpro_single_cat() {?>

  <div class="single-cat-wrap"><?php echo get_the_category_list(); ?></div>

<?php } ?>
<?php function techpro_single_cat_posts() {

  $category_name = get_the_category(get_the_ID()); $cat =""; if(!empty($category_name[0])) { $cat =''.$category_name[0]->slug.''; } if ( shortcode_exists( 'posts' ) ) { echo do_shortcode('[posts item_nr=5  category="'.$cat.'" type=small-bottom ]'); }

} ?>
<?php function techpro_single_title() { $subtitle = get_post_meta(get_the_ID(), "magazin_subtitle", true); ?>
  <h1 class="single-title"  itemprop="headline"><?php echo get_the_title(); ?></h1>
  <?php if(!empty($subtitle)){ ?><h2 class="single-subtitle" itemprop="description"><?php echo get_post_meta(get_the_ID(), "magazin_subtitle", true); ?></h2><?php } ?>
  <?php if(function_exists("mt_review_title")) {
        $review = get_post_meta(get_the_ID(), "magazin_review_in_title", true);
        if($review=="on"){
          echo mt_review_title();
        } else if ( true == get_theme_mod( 'mt_post_title_score', true ) ) {
          echo mt_review_title();
        }
} ?>
<?php } ?>
<?php function techpro_single_social() {
$share_top = "";
$share_top = get_post_meta(get_the_ID(), "magazin_post_share_top", true);

/* Share Meta from Magazin framework */
$share = get_post_meta(get_the_ID(), "magazin_share_count", true);
$shares = "1";
if (function_exists('magazin_theme_setup')) {
  $shares = magazin_get_shares(get_the_ID());
}
if (!empty($share)){
	$shares = $share+$shares;
}
/* View Meta from Magazin framework */
$view = get_post_meta(get_the_ID(), "magazin_view_count", true);
$views = get_post_meta(get_the_ID(), "magazin_post_views_count", true);
$viewes = $views + "0";
if (!empty($view)){ $viewes = $view + $views; $viewes = number_format($viewes); }

$url = wp_get_attachment_url( get_post_thumbnail_id(get_the_ID()));

?>
  <div class="after-title">
    <div class="pull-left">
      <div class="author-img pull-left">
        <?php global $post; echo get_avatar( $post->post_author, 30 ); ?>
      </div>
      <div class="author-info">
        <strong itemprop="author"><?php the_author_posts_link(); ?></strong>
        <small class="color-silver-light" itemprop="datePublished"><?php the_date(); ?></small>
        <span class="hide" itemprop="dateModified"><?php the_modified_date(); ?></span>
      </div>
    </div>
    <?php if ( false == get_theme_mod( 't_p_shares', false ) ) { $t_p_shares = esc_html__("Shares", "techpro");  } else { $t_p_shares = get_theme_mod( 't_p_shares' ); } ?>
<?php if ( false == get_theme_mod( 't_p_views', false ) ) { $t_p_views = esc_html__("Views", "techpro");  } else { $t_p_views = get_theme_mod( 't_p_views' ); } ?>
<?php if ( false == get_theme_mod( 't_p_share_on_facebook', false ) ) { $t_p_share_on_facebook = esc_html__("Share on Facebook", "techpro");  } else { $t_p_share_on_facebook = get_theme_mod( 't_p_share_on_facebook' ); } ?>
<?php if ( false == get_theme_mod( 't_p_share_on_twitter', false ) ) { $t_p_share_on_twitter = esc_html__("Tweet on Twitter", "techpro");  } else { $t_p_share_on_twitter = get_theme_mod( 't_p_share_on_twitter' ); } ?>
<?php if ( false == get_theme_mod( 't_c_comments', false ) ) { $t_c_comments = esc_html__("Comments", "techpro");  } else { $t_c_comments = get_theme_mod( 't_c_comments' ); } ?>
    <?php if(function_exists('mt_header_script')) { ?>
    <div class="post-statistic pull-left">
      <?php if(!empty($shares)){ ?><span class="stat-shares color-silver-light"><strong><?php echo esc_attr($shares); ?></strong> <?php echo esc_html($t_p_shares); ?></span><?php } ?>
      <?php if(!empty($viewes)){ ?><span class="stat-views"><strong><?php echo esc_attr($viewes) ?></strong> <?php echo esc_html($t_p_views); ?></span><?php } ?>
    </div>
    <?php } ?>

    <div class="clearfix"></div>
    <?php if($share_top == "no"){} else if($share_top == "yes"){ ?>
    <ul class="share top">
      <li class="share-facebook"><a class="mt-radius" href="http://www.facebook.com/sharer.php?u=<?php the_permalink();?>" target="_blank"><span><?php echo esc_html($t_p_share_on_facebook); ?></span></a></li>
      <?php $input = get_the_title().' '.get_the_permalink(); $title = str_replace( ' ', '+', $input ); ?>
      <li class="share-twitter"><a class="mt-radius" href="http://twitter.com/home/?status=<?php echo esc_attr($title); ?>" target="_blank"><span><?php echo esc_html($t_p_share_on_twitter); ?></span></a></li>
      <li class="share-more">
        <div class="share-more-wrap"><div class="share-more-icon mt-radius">+</div></div>

        <a class="mt-radius" href="http://pinterest.com/pin/create/button/?url=<?php the_permalink() ?>&media=<?php echo esc_url($url); ?>" target="_blank"><div class="pinterest mt-radius-b"></div></a>
        <a class="mt-radius" href="https://plus.google.com/share?url=<?php the_permalink() ?>" target="_blank"><div class="google mt-radius-b"></div></a>

      </li>
    </ul>
    <?php } else if ( true == get_theme_mod( 'mt_post_top_share', true ) ) {  ?>
      <ul class="share top">
        <li class="share-facebook"><a class="mt-radius" href="http://www.facebook.com/sharer.php?u=<?php the_permalink();?>" target="_blank"><span><?php echo esc_html($t_p_share_on_facebook); ?></span></a></li>
        <?php $input = get_the_title().' '.get_the_permalink(); $title = str_replace( ' ', '+', $input ); ?>
        <li class="share-twitter"><a class="mt-radius" href="http://twitter.com/home/?status=<?php echo esc_attr($title); ?>" target="_blank"><span><?php echo esc_html($t_p_share_on_twitter); ?></span></a></li>
        <li class="share-more">
          <div class="share-more-wrap"><div class="share-more-icon mt-radius">+</div></div>

          <a class="mt-radius" href="http://pinterest.com/pin/create/button/?url=<?php the_permalink() ?>&media=<?php echo esc_url($url); ?>" target="_blank"><div class="pinterest mt-radius-b"></div></a>
          <a class="mt-radius" href="https://plus.google.com/share?url=<?php the_permalink() ?>" target="_blank"><div class="google mt-radius-b"></div></a>

        </li>
      </ul>
    <?php } ?>
    <div class="single-stat-comments">
      <?php if (get_comments_number()!="0") { ?><span class="stat-comments"><?php echo get_comments_number(); ?> <?php echo esc_html($t_c_comments); ?></span><?php } ?>
    </div>
    <div class="clearfix"></div>
  </div>
<?php $review = get_post_meta(get_the_ID(), "magazin_review_location", true); if($review=="before"){ if(function_exists("mt_review_title")) { echo mt_review_single(); }} ?>
<?php } ?>
