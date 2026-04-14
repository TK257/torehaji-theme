<?php
$data_list = array();
if (!is_front_page() && !is_home()) {
  if (is_page()) {
    // 固定ページ
    if (get_parent_page_ID()) {
      $postId = $post->ID;
      $parentPostArray = array_reverse(get_post_ancestors($post));
      // 固定ページ（親・先祖ページ）
      foreach ($parentPostArray as $index => $parentsPostId) {
        $data_list_item = ',{ "@type": "ListItem", "position": ' . ($index + 2) . ', "item": { "@id": "' . esc_url(get_the_permalink($parentsPostId)) . '", "name": "' . esc_html(get_the_title($parentsPostId)) . '" }}';
        array_push($data_list, $data_list_item);
        $parentPages = $index + 1;
      }
      // 固定ページ（子孫ページ）
      $data_list_item_last = ',{ "@type": "ListItem", "position": ' . ($parentPages + 2) . ', "item": { "@id": "' . esc_url(get_the_permalink($postId)) . '", "name": "' . esc_html(get_the_title($postId)) . '" }}';
      array_push($data_list, $data_list_item_last);
    } else {
      // 固定ページ（子ページ）
      $data_list = array(
        ',{ "@type": "ListItem", "position": 2, "item": { "@id": "' . esc_url(get_the_permalink()) . '", "name": "' . esc_html(single_post_title('', false)) . '" }}'
      );
    }
  } else if (is_post_type_archive()) {
    $postTypeObject = get_post_type_object(get_query_var('post_type'));
    $postTypeName = $postTypeObject->labels->name;
    if (is_date_archive()) {
      // 日付アーカイブページ
      $data_list = array(
        ',{ "@type": "ListItem", "position": 2, "item": { "@id": "' . get_post_type_archive_link(get_query_var('post_type')) . '", "name": "' . $postTypeName . '" }}',
        ',{ "@type": "ListItem", "position": 3, "item": { "@id": "' . esc_url(home_url('/')) . $wp_query->query['year'] . '/' . $wp_query->query['monthnum'] . '/?post_type=' . $wp_query->query['post_type'] . '", "name": "' . get_query_var('year') . '年' . get_query_var('monthnum') . '月の投稿一覧" }}'
      );
    } else {
      // アーカイブページ
      $data_list = array(
        ',{ "@type": "ListItem", "position": 2, "item": { "@id": "' . get_post_type_archive_link(get_query_var('post_type')) . '", "name": "' . $postTypeName . '" }}'
      );
    }
  } else if (is_tax()) {
    // タクソノミーページ
    $postTypeObject = get_post_type_object(get_post_type());
    $postTypeName = $postTypeObject->labels->name;
    $taxonomySlug = get_query_var('taxonomy');
    $termName = urldecode(get_query_var('term'));
    $data_list = array(
      ',{ "@type": "ListItem", "position": 2, "item": { "@id": "' . get_post_type_archive_link(get_post_type()) . '", "name": "' . $postTypeName . '" }}',
      ',{ "@type": "ListItem", "position": 3, "item": { "@id": "' . get_term_link($termName, $taxonomySlug) . '", "name": "' . esc_html(single_term_title('', false)) . 'の記事一覧" }}'
    );
  } else if (is_singular(get_post_type())) {
    // シングルページ
    $postTypeObject = get_post_type_object(get_post_type());
    $postTypeName = $postTypeObject->labels->name;
    $data_list = array(
      ',{ "@type": "ListItem", "position": 2, "item": { "@id": "' . get_post_type_archive_link(get_post_type()) . '", "name": "' . $postTypeName . '" }}',
      ',{ "@type": "ListItem", "position": 3, "item": { "@id": "' . esc_url(get_the_permalink()) . '", "name": "' . esc_html(get_the_title()) . '" }}'
    );
  } else if (is_author()) {
    // 投稿者アーカイブページ
    global $post;
    $author = get_userdata($post->post_author);
    $data_list = array(
      ',{ "@type": "ListItem", "position": 2, "item": { "@id": "' . get_author_posts_url(get_the_author_meta('ID')) . '", "name": "' . $author->display_name . 'の記事一覧" }}'
    );
  } else if (is_search()) {
    // 検索結果ページ
    $data_list = array(
      ',{ "@type": "ListItem", "position": 2, "item": { "@id": "' . esc_url(get_home_url()) . '/?s=' . esc_html($_GET['s']) . '", "name": "キーワード検索結果" }}'
    );
  } else if (is_404()) {
    // 404ページ
    $data_list = array(
      ',{ "@type": "ListItem", "position": 2, "item": { "@id": "' . esc_url(get_home_url()) . '", "name": "Page Not Found" }}'
    );
  }
}
echo '<script type="application/ld+json">';
echo '{ "@context":"http://schema.org", "@type": "BreadcrumbList", "itemListElement": [';
echo '{ "@type": "ListItem", "position": 1, "item": { "@id": "' . esc_url(get_home_url()) . '", "name": "HOME" }}';
foreach ($data_list as $data) {
  echo $data;
}
echo '] }';
echo '</script>';
//パンくずリストEND
?>
<!-- json LD end -->
<?php
//構造化データ
function add_schema_org_markup()
{
  global $post;

  // 対象の投稿タイプ（personal_gym, fitness_gym, page）でのみ実行
  if (!is_singular(['personal_gym', 'fitness_gym', 'page']) || !is_object($post)) {
    return; // 対象外のページまたは投稿がない場合は終了
  }

  // 投稿情報の取得
  $post_id = $post->ID;
  $permalink = get_permalink($post_id);
  $title = get_the_title($post_id);
  $excerpt = wp_strip_all_tags(get_the_excerpt($post_id)) ?: 'No description available'; // 抜粋がない場合のフォールバック
  $date_published = get_the_date('c', $post_id); // ISO 8601形式
  $date_modified = get_the_modified_date('c', $post_id); // ISO 8601形式
  $author_name = get_the_author_meta('display_name', $post->post_author) ?: 'Unknown Author';

  // アイキャッチ画像の取得
  $image = '';
  if (has_post_thumbnail($post_id)) {
    $image_array = wp_get_attachment_image_src(get_post_thumbnail_id($post_id), 'full');
    $image = $image_array ? $image_array[0] : '';
  }
  if (empty($image)) {
    $image = get_template_directory() . '/assets/img/logo/Torehaji-default.png'; // デフォルト画像URLを指定
  }

  // サイトの情報（publisher用）
  $site_name = get_bloginfo('name');
  $site_url = get_site_url();
  $site_logo = get_template_directory() . '/assets/img/common/torehaji-logo.png'; // ロゴのURLを指定

  // JSON-LD構造化データ
  $schema = [
    '@context' => 'https://schema.org',
    '@type' => 'Article', // カスタム投稿タイプでもArticleを使用（必要に応じて変更）
    'mainEntityOfPage' => [
      '@type' => 'WebPage',
      '@id' => esc_url($permalink)
    ],
    'headline' => esc_html($title),
    'image' => esc_url($image),
    'datePublished' => $date_published,
    'dateModified' => $date_modified,
    'author' => [
      '@type' => 'Person',
      'name' => esc_html($author_name)
    ],
    'publisher' => [
      '@type' => 'Organization',
      'name' => esc_html($site_name),
      'logo' => [
        '@type' => 'ImageObject',
        'url' => esc_url($site_logo)
      ]
    ],
    'description' => esc_html($excerpt)
  ];

  // JSON-LDを出力
?>
  <!-- Schema.org JSON-LD for personal_gym, fitness_gym, and page -->
  <script type="application/ld+json">
    <?php echo wp_json_encode($schema, JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT); ?>
  </script>
  <!-- End Schema.org JSON-LD -->
<?php
}
add_action('wp_head', 'add_schema_org_markup', 10);
//構造化データEND
?>