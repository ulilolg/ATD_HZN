<?php
/* 外部ファイルの読み込み
---------------------------------------------------------- */
function add_files() {
  /* 外部headファイル
  ---------------------------------------------------------- */
	wp_enqueue_style('set', get_template_directory_uri() . '/style.css', array(), null, 'all');
	wp_enqueue_style('main', get_template_directory_uri() . '/assets/css/main.css', array(), date('YmdHi'), 'all');
	wp_enqueue_style('googlefont', 'https://fonts.googleapis.com/css2?family=Noto+Serif+JP:wght@300;700&display=swap', array(), null, 'all');
	wp_enqueue_script('fontawesome', 'https://kit.fontawesome.com/84e4a6c154.js', array(), null, false);
	/* 外部body下部ファイル
  ---------------------------------------------------------- */
	wp_deregister_script('jquery'); // WordPress jQuery読み込み制御
	wp_enqueue_script('jquery',get_template_directory_uri() . '/assets/js/jquery.min.js',array(),null,true);
	wp_enqueue_script('main',get_template_directory_uri() . '/assets/js/main.js',array('jquery'),date('YmdHi'),true);
}
add_action('wp_enqueue_scripts', 'add_files');