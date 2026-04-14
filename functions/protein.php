<?php
function protein_post_type()
{
  register_post_type(
    'protein',
    array(
      'label' => 'プロテイン', //表示名
      'public' => true, //公開状態
      'exclude_from_search' => false, //検索対象に含めるか
      'show_ui' => true, //管理画面に表示するか
      'show_in_menu' => true, //管理画面のメニューに表示するか
      'menu_position' => 5, //管理メニューの表示位置を指定
      'hierarchical' => false, //階層構造を持たせるか
      'has_archive' => true, //この投稿タイプのアーカイブを作成するか
      'taxonomies' => array('protein_category', 'protein_tag'), //タグ
      "rewrite" => array(
        "slug" => 'protein', //URL用のスラッグ
        "with_front" => false
      ),
      'supports' => array(
        'title',
        'editor',
        'comments',
        'excerpt',
        'thumbnail',
        'custom-fields',
        'post-formats',
        'trackbacks',
        'revisions',
        'author'
      ), //編集画面で使用するフィールド
    )
  );
}
add_action('init', 'protein_post_type', 1);
//カスタム投稿をカテゴリーページで一覧表示
function protein_main_query($query)
{
  if (is_admin() || !$query->is_main_query())
    return;

  if ($query->is_category() || $query->is_tag()) {
    $query->set('post_type', array('post', 'protein'));

    return;
  }
}
add_action('pre_get_posts', 'protein_main_query');
// カスタム投稿タイプを自作終了
function create_taxonomy_protein_blog_category()
{
  /**
   * functions.phpに読み込ませているタクソノミーを作るphp
   * カスタム分類名：プロテインカテゴリー
   * スラッグ: protein_category
   * URLに使用するスラッグ: protein-category
   * 紐付く投稿タイプ：プロテイン
   * 紐付く投稿タイプのスラッグ：protein
   * カテゴリ形式か？：true
   */
  $taxonomyName = 'プロテインカテゴリ';
  $taxonomySlug = 'protein_category'; // システム的な部分で使う
  $taxonomySlugFront = 'protein-category'; // URL表示用
  $taxonomyPostTypes = array('protein'); // 配列で複数のポストタイプを指定
  $taxonomyHierarchical = true;

  $labels = array(
    "name" => __($taxonomyName),
    "singular_name" => __($taxonomyName),
  );
  $args = array(
    "label" => __($taxonomyName),
    "labels" => $labels,
    "public" => true,
    "publicly_queryable" => true,
    "hierarchical" => $taxonomyHierarchical,
    "show_ui" => true,
    "show_in_menu" => true,
    "show_in_nav_menus" => true,
    "query_var" => true,
    "rewrite" => array('slug' => $taxonomySlugFront, 'with_front' => true),
    "show_admin_column" => false,
    "show_in_rest" => true,
    "rest_base" => $taxonomySlug,
    "rest_controller_class" => "WP_REST_Terms_Controller",
    "show_in_quick_edit" => false,
  );
  register_taxonomy($taxonomySlug, $taxonomyPostTypes, $args);
}
add_action('init', 'create_taxonomy_protein_blog_category');
function create_taxonomy_protein_tag_blog_category()
{
  /**
   * カスタム分類名：タグ
   * スラッグ: protein_tag
   * URLに使用するスラッグ: protein-tag
   * 紐付く投稿タイプ：プロテイン
   * 紐付く投稿タイプのスラッグ：protein
   * カテゴリ形式か？：false
   */
  $taxonomyName = 'プロテインタグ';
  $taxonomySlug = 'protein_tag';
  $taxonomySlugFront = 'protein-tag';
  $taxonomyPostTypes = 'protein'; // 配列で複数のポストタイプを指定
  $taxonomyHierarchical = false;

  $labels = array(
    "name" => __($taxonomyName),
    "singular_name" => __($taxonomyName),
  );
  $args = array(
    "label" => __($taxonomyName),
    "labels" => $labels,
    "public" => true,
    "publicly_queryable" => true,
    "hierarchical" => $taxonomyHierarchical,
    "show_ui" => true,
    "show_in_menu" => true,
    "show_in_nav_menus" => true,
    "query_var" => true,
    "rewrite" => array('slug' => $taxonomySlugFront, 'with_front' => true),
    "show_admin_column" => true,
    "show_in_rest" => true,
    "rest_base" => $taxonomySlug,
    "rest_controller_class" => "WP_REST_Terms_Controller",
    "show_in_quick_edit" => false,
  );
  register_taxonomy($taxonomySlug, $taxonomyPostTypes, $args);
}
add_action('init', 'create_taxonomy_protein_tag_blog_category');
