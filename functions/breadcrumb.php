<ul>
  <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
    <a href="<?php echo esc_url(home_url()); ?>" itemprop="item"><span itemprop="name">HOME</span></a>
    <meta itemprop="position" content="1" />
  </li>
  <?php
  if (!is_front_page() && !is_home()) {
    if (is_page()) {
      // 固定ページ
      if ($post->post_parent) {
        $postId = $post->ID;
        $parentPostArry = array_reverse(get_post_ancestors($post));
        $parentPages = 0;
        foreach ($parentPostArry as $index => $parentsPostId) {
          echo '<li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">';
          echo '<a href="' . esc_url(get_permalink($parentsPostId)) . '" itemprop="item"><span itemprop="name">' . esc_html(get_the_title($parentsPostId)) . '</span></a>';
          echo '<meta itemprop="position" content="' . ($index + 2) . '" /></li>';
          $parentPages = $index + 1;
        }
        echo '<li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">';
        echo '<a href="' . esc_url(get_permalink($postId)) . '" itemprop="item"><span itemprop="name">' . esc_html(get_the_title($postId)) . '</span></a>';
        echo '<meta itemprop="position" content="' . ($parentPages + 2) . '" /></li>';
      } else {
        echo '<li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">';
        echo '<a href="' . esc_url(get_permalink()) . '" itemprop="item"><span itemprop="name">' . esc_html(get_the_title()) . '</span></a>';
        echo '<meta itemprop="position" content="2" /></li>';
      }
    } elseif (is_post_type_archive()) {
      $postTypeObject = get_post_type_object(get_post_type());
      $postTypeName = $postTypeObject ? $postTypeObject->labels->name : 'アーカイブ';
      if (is_date()) {
        echo '<li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">';
        echo '<a href="' . esc_url(get_post_type_archive_link(get_post_type())) . '" itemprop="item"><span itemprop="name">' . esc_html($postTypeName) . '</span></a>';
        echo '<meta itemprop="position" content="2" /></li>';
        echo '<li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">';
        echo '<a href="' . esc_url(get_month_link(get_query_var('year'), get_query_var('monthnum'))) . '" itemprop="item"><span itemprop="name">' . get_query_var('year') . '年' . get_query_var('monthnum') . '月の投稿一覧</span></a>';
        echo '<meta itemprop="position" content="3" /></li>';
      } else {
        echo '<li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">';
        echo '<a href="' . esc_url(get_post_type_archive_link(get_post_type())) . '" itemprop="item"><span itemprop="name">' . esc_html($postTypeName) . '</span></a>';
        echo '<meta itemprop="position" content="2" /></li>';
      }
    } elseif (is_tax()) {
      // タクソノミーページ
      $taxonomy = get_query_var('taxonomy');
      $term = get_queried_object();
      if ($term && $taxonomy) {
        $postType = get_taxonomy($taxonomy)->object_type[0] ?? 'post';
        $postTypeObject = get_post_type_object($postType);
        $postTypeName = $postTypeObject ? $postTypeObject->labels->name : 'アーカイブ';
        echo '<li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">';
        echo '<a href="' . esc_url(get_post_type_archive_link($postType)) . '" itemprop="item"><span itemprop="name">' . esc_html($postTypeName) . '</span></a>';
        echo '<meta itemprop="position" content="2" /></li>';
        echo '<li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">';
        echo '<a href="' . esc_url(get_term_link($term, $taxonomy)) . '" itemprop="item"><span itemprop="name">' . esc_html($term->name) . '</span></a>';
        echo '<meta itemprop="position" content="3" /></li>';
      } else {
        // デバッグ用: タクソノミー情報が取得できない場合
        echo '<li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">';
        echo '<span itemprop="name">タクソノミーエラー</span>';
        echo '<meta itemprop="position" content="2" /></li>';
      }
    } elseif (is_singular()) {
      $postType = get_post_type();
      $postTypeObject = get_post_type_object($postType);
      $postTypeName = $postTypeObject ? $postTypeObject->labels->name : '投稿';
      echo '<li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">';
      echo '<a href="' . esc_url(get_post_type_archive_link($postType)) . '" itemprop="item"><span itemprop="name">' . esc_html($postTypeName) . '</span></a>';
      echo '<meta itemprop="position" content="2" /></li>';
      echo '<li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">';
      echo '<a href="' . esc_url(get_permalink()) . '" itemprop="item"><span itemprop="name">' . esc_html(get_the_title()) . '</span></a>';
      echo '<meta itemprop="position" content="3" /></li>';
    } elseif (is_author()) {
      $author = get_queried_object();
      echo '<li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">';
      echo '<a href="' . esc_url(get_author_posts_url($author->ID)) . '" itemprop="item"><span itemprop="name">' . esc_html($author->display_name) . 'の記事一覧</span></a>';
      echo '<meta itemprop="position" content="2" /></li>';
    } elseif (is_search()) {
      echo '<li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">';
      echo '<span itemprop="name">キーワード検索結果</span>';
      echo '<meta itemprop="position" content="2" /></li>';
    } elseif (is_404()) {
      echo '<li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">';
      echo '<span itemprop="name">お探しのページが見つかりません</span>';
      echo '<meta itemprop="position" content="2" /></li>';
    }
  }
  ?>
</ul>
<!-- breadcrumb list end -->