<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?php bloginfo('name'); ?></title>
    <meta name="description" content="<?php bloginfo('description'); ?>">
    <link rel="icon" href="<?php $favicon = SCF::get_option_meta('artist-options', 'img_favicon'); echo esc_url(wp_get_attachment_url($favicon));?>">
    <link rel="apple-touch-icon" sizes="180x180" href="<?php $icon = SCF::get_option_meta('artist-options', 'img_icon'); echo esc_url(wp_get_attachment_url($icon));?>">
    <?php if (!is_front_page()) : ?>
    <meta name="robots" content="noindex">
    <?php endif;?>
    <?php wp_head();?>
  </head>
  <body class="body js-body">
    <div class="loading js-loading">
      <figure class="loading__img"><img src="<?php $loading_logo = SCF::get_option_meta('artist-options', 'loading_logo'); echo esc_url(wp_get_attachment_url($loading_logo));?>" alt="" /></figure>
    </div>
    <div class="loading-after js-loading-after">
      <?php include("includes/inc_header.php");?>
      <main class="main js-main">
        <div class="main__inner">