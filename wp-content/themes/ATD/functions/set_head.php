<?php
/* head内の不要な要素を削除
---------------------------------------------------------- */
remove_action( 'wp_head', 'feed_links', 2 ); // RSSフィード
remove_action( 'wp_head', 'feed_links_extra', 3 ); // RSSフィード
remove_action( 'wp_head', 'rsd_link' ); // Really Simple Discovery
remove_action( 'wp_head', 'wlwmanifest_link' ); // Windows Live Writer
remove_action( 'wp_head', 'index_rel_link' ); // indexへのリンク
remove_action( 'wp_head', 'parent_post_rel_link', 10, 0 ); // 分割ページへのリンク
remove_action( 'wp_head', 'start_post_rel_link', 10, 0 ); // 分割ページへのリンク
remove_action( 'wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0 ); // 前後のページへのリンク
remove_action( 'wp_head', 'wp_generator' ); // WordPressのバージョン
remove_action( 'wp_head', 'print_emoji_detection_script', 7 ); // 絵文字対応
remove_action( 'admin_print_scripts', 'print_emoji_detection_script' ); // 絵文字対応
remove_action( 'wp_print_styles', 'print_emoji_styles' ); // 絵文字対応
remove_action( 'admin_print_styles', 'print_emoji_styles' ); // 絵文字対応
remove_action('wp_head','rest_output_link_wp_head'); // Embed対応
add_filter( 'show_admin_bar', '__return_false' ); // 管理bar削除


/* ogp設定
---------------------------------------------------------- */
add_action('wp_head', 'my_ogp');
function my_ogp() {
  if (is_front_page() || is_home() || is_singular() || is_archive()) {
    // 初期設定
    $ogp_image = SCF::get_option_meta('artist-options', 'img_ogp');
    $twitter_card = 'summary_large_image';
    // セット変数
    global $post;
    $ogp_title = '';
    $ogp_url = '';
    $html = '';
    // ページ条件分岐
    if (is_singular()) {
      setup_postdata($post);
      $ogp_title = $post->post_title;
      $ogp_url = get_permalink();
      wp_reset_postdata();
    } elseif (is_front_page() || is_home()) {
      $ogp_title = get_bloginfo('name');
      $ogp_url = home_url();
    }
    // type設定
    $ogp_type = (is_front_page() || is_home()) ? 'website' : 'article';
    // 出力設定
    $html = "\n";
    $html .= '<meta property="og:title" content="' . esc_attr($ogp_title) . '">' . "\n";
    $html .= '<meta property="og:type" content="' . $ogp_type . '">' . "\n";
    $html .= '<meta property="og:url" content="' . esc_url($ogp_url) . '">' . "\n";
    $html .= '<meta property="og:image" content="' . esc_url(wp_get_attachment_url($ogp_image)) . '">' . "\n";
    $html .= '<meta property="og:site_name" content="' . esc_attr(get_bloginfo('name')) . '">' . "\n";
    $html .= '<meta name="twitter:card" content="' . $twitter_card . '">' . "\n";
    // 出力
    echo $html;
  }
}