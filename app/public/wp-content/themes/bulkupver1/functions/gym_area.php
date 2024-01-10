<?php

function create_taxonomy_blog_category()
{
  /**
   * functions.phpに読み込ませているタクソノミーを作るphp
   * カスタム分類名：ジムエリア（都道府県市区町村）
   * スラッグ: gym_aera
   * URLに使用するスラッグ: gym-area
   * 紐付く投稿タイプ：ジム情報
   * 紐付く投稿タイプのスラッグ：gym_info
   * カテゴリ形式か？：true
   */
  $taxonomyName = 'ジムエリア（都道府県市区町村）';
  $taxonomySlug = 'gym_area'; //システム的な部分で使う
  $taxonomySlugFront = 'gym-area'; //URL表示用
  $taxonomyPostType = 'gym_info';
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
    "rewrite" => array('slug' => $taxonomySlugFront, 'with_front' => true,),
    "show_admin_column" => false,
    "show_in_rest" => true,
    "rest_base" => $taxonomySlug,
    "rest_controller_class" => "WP_REST_Terms_Controller",
    "show_in_quick_edit" => false,
  );
  register_taxonomy($taxonomySlug, array($taxonomyPostType), $args);
}
add_action('init', 'create_taxonomy_blog_category');
