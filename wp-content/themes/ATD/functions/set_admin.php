<?php
/* 管理画面の不要な要素を削除
---------------------------------------------------------- */
remove_action( 'welcome_panel', 'wp_welcome_panel' ); // WordPressへようこそ！を削除
function remove_dashboard_widget() { // ウィジェットの削除
  remove_meta_box( 'dashboard_right_now', 'dashboard', 'normal' ); // 概要
  remove_meta_box( 'dashboard_activity', 'dashboard', 'normal' ); // アクティビティ
  remove_meta_box( 'dashboard_quick_press', 'dashboard', 'side' ); // クイックドラフト
  remove_meta_box( 'dashboard_primary', 'dashboard', 'side' ); // WordPressニュース
}
add_action('wp_dashboard_setup', 'remove_dashboard_widget' );

function remove_menus() { // 不要メニューの削除
	remove_menu_page( 'edit.php' ); // 投稿
	remove_menu_page( 'edit-comments.php' ); // コメント
	remove_menu_page( 'tools.php' ); // ツール
}
add_action( 'admin_menu', 'remove_menus', 999 );

/* セキュリティ対策
---------------------------------------------------------- */
function theme_slug_redirect_author_archive() { //?author=対策
    if (is_author() ) {
      wp_redirect( home_url());
      exit;
    }
}
add_action( 'template_redirect', 'theme_slug_redirect_author_archive' );

function my_filter_rest_endpoints( $endpoints ) { ///wp-json/wp/v2/users対策
    if ( isset( $endpoints['/wp/v2/users'] ) ) {
        unset( $endpoints['/wp/v2/users'] );
    }
    if ( isset( $endpoints['/wp/v2/users/(?P[\d]+)'] ) ) {
        unset( $endpoints['/wp/v2/users/(?P[\d]+)'] );
    }
    return $endpoints;
}
add_filter( 'rest_endpoints', 'my_filter_rest_endpoints', 10, 1 );