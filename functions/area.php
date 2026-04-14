<?php

function create_taxonomy_blog_category()
{
  /**
   * functions.phpに読み込ませているタクソノミーを作るphp
   * カスタム分類名：都道府県市区町村
   * スラッグ: area
   * URLに使用するスラッグ: area
   * 紐付く投稿タイプ：パーソナルジム情報,フィットネスジム情報
   * 紐付く投稿タイプのスラッグ：personal_gym,fitness_gym
   * カテゴリ形式か？：true
   */
  $taxonomyName = '都道府県市区町村';
  $taxonomySlug = 'area'; // システム的な部分で使う
  $taxonomySlugFront = 'area'; // URL表示用
  $taxonomyPostTypes = array('personal_gym', 'fitness_gym'); // 配列で複数のポストタイプを指定
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
add_action('init', 'create_taxonomy_blog_category');
