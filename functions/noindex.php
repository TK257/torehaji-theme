<?php
add_action('wp_head', function () {
  // 1. 特定の固定ページ（お問い合わせ完了など）は一律 noindex
  if (is_page(['thanks', 'contact-confirm'])) {
    echo '<meta name="robots" content="noindex, nofollow">' . "\n";
    return;
  }
});
