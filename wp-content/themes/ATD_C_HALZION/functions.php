<?php
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
function theme_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
}

/* MW WP FORM VALIDATION
---------------------------------------------------------- */
function halzion_custom_message($error, $key, $rule) {
  if($key === 'name' && $rule === 'noempty') {
    return 'お名前を入力してください';
  }
  if($key === 'email' && $rule === 'noempty') {
    return 'メールアドレスを入力してください';
  }
  if($key === 'email-confirm' && $rule === 'eq') {
    return '確認用のメールアドレスが一致していません';
  }
  if($key === 'live-name' && $rule === 'noempty') {
    return 'ライブタイトルを入力してください';
  }
  if($key === 'ticket' && $rule === 'noempty') {
    return 'ご希望のチケット枚数を入力してください';
  }
  return $error;
}
add_filter('mwform_error_message_mw-wp-form-118', 'halzion_custom_message', 10, 3);

