<?php

function sfs_shortcode_mixed_feed($atts) {
  $opts = get_option('sfs-global-options');
  $posts = new WP_Query(array(
    'post_type' => $opts['sfs-post-type'],
    'numberposts' => 25
  ));
  $output = '<div class="SpritesFeed"><div class="SpritesFeed-wrap">';

  if($posts->have_posts()):
    while($posts->have_posts()) : $posts->the_post();
      $thumb = get_post_meta(get_the_ID(), 'feed_picture', true);
      if($thumb !== '') :
        $output .= '<a href="'.get_post_meta(get_the_ID(), "feed_link", true).'" class="SpritesFeedPost">';
        $output .= '<div class="SpritesFeedPost-thumb" style="background-image:url('.$thumb.')"></div>';
      else:
        $output .= '<a href="'.get_post_meta(get_the_ID(), "feed_link", true).'" class="SpritesFeedPost SpritesFeedPost--Flex">';
      endif;
        $output .= '<div class="SpritesFeedPost-post">'.get_the_excerpt(get_the_ID()).'</div>';
      $output .= '</a>';
    endwhile;
  endif;

  $output .= '</div></div>';
  return $output;
}

add_shortcode('spritesfeed', 'sfs_shortcode_mixed_feed');
