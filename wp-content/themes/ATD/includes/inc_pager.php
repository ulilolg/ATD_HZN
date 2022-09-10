<?php
function custom_pagination( $pages, $current_page, $range = 1, $show_only = false ) {
  //// 管理用の変数
  $pages = ( int ) $pages;
  $current_page = $current_page ?: 1;
  $item_class = 'pagination__item';
  $icon_first = '<i class="fa-solid fa-angles-left"></i>';
  $icon_before = '<i class="fa-solid fa-angle-left"></i>';
  $icon_next = '<i class="fa-solid fa-angle-right"></i>';
  $icon_last = '<i class="fa-solid fa-angles-right"></i>';
  //// HTMLの出力
  if ( $pages === 1 || $pages === 0 ) return;
  if ( 1 !== $pages ) {
    echo '<ul class="pagination">';
    if ( $current_page > $range + 1 ) {
      echo '<li class="', $item_class ,' ', $item_class ,'--first"><a href="', get_pagenum_link(1) ,'">', $icon_first ,'</a></li>';
    }
    if ( $current_page > 1 ) {
      echo '<li class="', $item_class ,' ', $item_class ,'--prev"><a href="', get_pagenum_link( $current_page - 1 ) ,'">', $icon_before ,'</a></li>';
    }
    for ( $i = 1; $i <= $pages; $i++ ) {
      if ( $i <= $current_page + $range && $i >= $current_page - $range ) {
        if ( $current_page === $i ) {
          echo '<li class="', $item_class ,' ', $item_class ,'--current"><span>', $i ,'</span></li>';
        } else {
          echo '<li class="', $item_class ,'"><a href="', get_pagenum_link( $i ) ,'">', $i ,'</a></li>';
        }
      }
    }
    if ( $current_page < $pages ) {
      echo '<li class="', $item_class ,' ', $item_class ,'--next"><a href="', get_pagenum_link( $current_page + 1 ) ,'">', $icon_next ,'</a></li>';
    }
    if ( $current_page + $range < $pages ) {
      echo '<li class="', $item_class ,' ', $item_class ,'--last"><a href="', get_pagenum_link( $pages ) ,'">', $icon_last ,'</a></li>';
    }
    echo '</ul>';
  }
}
custom_pagination( $wp_query->max_num_pages, get_query_var( 'paged' ) );