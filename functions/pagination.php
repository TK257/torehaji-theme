<?php
global $wp_query;

$pages = $wp_query->max_num_pages;
// 現在のページ番号を取得（0なら1に設定）
$paged = get_query_var('paged') ?: 1;
$range = 2; // 現在のページの左右に表示する数
$show_items = ($range * 2) + 1; // 合計表示数

if ($pages > 1) {
  echo '<ul class="pagination">';

  // 最初のページ・前へ
  if ($paged > 1) {
    echo '<li><a href="' . get_pagenum_link(1) . '">&lt;&lt;</a></li>';
    echo '<li><a href="' . get_pagenum_link($paged - 1) . '">&lt;</a></li>';
  }

  // ページ番号ループ
  for ($i = 1; $i <= $pages; $i++) {
    // 表示範囲内（現在地の前後 $range 以内）だけ出力
    if ($i >= $paged - $range && $i <= $paged + $range) {
      if ($paged == $i) {
        // 現在のページ
        echo '<li class="current"><span>' . $i . '</span></li>';
      } else {
        echo '<li><a href="' . get_pagenum_link($i) . '">' . $i . '</a></li>';
      }
    }
  }

  // 次へ・最後のページ
  if ($paged < $pages) {
    echo '<li><a href="' . get_pagenum_link($paged + 1) . '">&gt;</a></li>';
    echo '<li><a href="' . get_pagenum_link($pages) . '">&gt;&gt;</a></li>';
  }

  echo '</ul>';
}
