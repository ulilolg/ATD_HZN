<?php
/* カスタム投稿タイプの追加
---------------------------------------------------------- */
add_action( 'init', 'add_custom_posts' );
function add_custom_posts() {
  register_post_type(
    'news',
    array(
      'label' => 'お知らせ情報',
      'public' => true,
      'has_archive' => true,
      'menu_position' => 3,
      'supports' => array(
        'title',
        'editor',
      ),
    )
  );
  register_post_type(
    'live',
    array(
      'label' => 'ライブ情報',
      'public' => true,
      'has_archive' => true,
      'menu_position' => 4,
      'supports' => array(
        'title',
      ),
    )
  );
  register_post_type(
    'disc',
    array(
      'label' => 'CDリリース情報',
      'public' => true,
      'has_archive' => true,
      'menu_position' => 5,
      'supports' => array(
        'title',
        'editor',
      ),
    )
  );
  register_post_type(
    'video',
    array(
      'label' => 'MVリリース情報',
      'public' => true,
      'has_archive' => true,
      'menu_position' => 6,
      'supports' => array(
        'title',
        'editor',
      ),
    )
  );
}