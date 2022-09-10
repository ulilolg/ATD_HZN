<?php
/* Wysiwyg Editorの不要な要素を削除
---------------------------------------------------------- */
remove_filter('the_content', 'wpautop'); // 記事の自動整形を無効化
remove_filter('the_excerpt', 'wpautop'); // 抜粋の自動整形を無効化
add_filter( 'user_can_richedit', '__return_false' ); // ビジュアルエディターを削除
add_action('admin_head', 'editor_button_detele'); // エディターの不要な要素を削除
function editor_button_detele() {
  if (is_admin()){
    echo '<style>#wp-content-editor-tools,#ed_toolbar {display:none;} textarea.wp-editor-area {margin-top:0px!important;}</style>';
  }
}