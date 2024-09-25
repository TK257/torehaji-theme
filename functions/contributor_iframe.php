<?php
// 寄稿者にiframe権限を付与
add_filter('user_has_cap', 'allow_unfiltered_html', 10, 3);
function allow_unfiltered_html($allcaps, $cap, $args)
{
  $allcaps['unfiltered_html'] = $allcaps['edit_posts'];
  return ($allcaps);
}
