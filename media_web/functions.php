<?php
//アイキャッチの表示
add_theme_support( 'post-thumbnails' );

// 「続きを読む」をカスタマイズするためのコード
function my_excerpt_more($post) {
    return  '... <a href="'. get_permalink($post->ID) . '">' . ' 続きを読む' . '</a>';
}

// 抜粋（the_excerpt()）を適当な文字数でカットして表示するコード
function my_trim_all_excerpt( $text = '' , $cut = 60 ) {
    $raw_excerpt = $text;
    if ( '' == $text ) {
        $text = get_the_content('');
        $text = strip_shortcodes( $text );
        $text = apply_filters('the_content', $text);
        $text = str_replace(']]>', ']]>', $text);
        $text = strip_tags($text);

    }
    $excerpt_mblength = apply_filters('excerpt_mblength', $cut );
    $excerpt_more = my_excerpt_more( $post );
    $text = wp_trim_words( $text, $excerpt_mblength, $excerpt_more );

    return apply_filters('wp_trim_excerpt', $text, $raw_excerpt);
}

// the_excerpt()にフィルターをかけるコード
remove_filter('get_the_excerpt', 'wp_trim_excerpt');
add_filter('get_the_excerpt', 'my_trim_all_excerpt' );

//人気記事出力
function getPostViews($postID){
  $count_key = 'post_views_count';
  $count = get_post_meta($postID, $count_key, true);
  if($count==''){
    delete_post_meta($postID, $count_key);
    add_post_meta($postID, $count_key, '0');
    return "0 View";
  }
  return $count.'Views';
}
function setPostViews($postID){
  $count_key = 'post_views_count';
  $count = get_post_meta($postID, $count_key, true);
  if($count==''){
    $count =0;
    delete_post_meta($postID, $count_key);
    add_post_meta($postID, $count_key, '0');
  }else{
    $count++;
    update_post_meta($postID, $count_key, $count);
  }
}
remove_action('wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0)



?>
