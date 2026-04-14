<?php

function create_taxonomy_gym_tag_blog_category()
{
  /**
   * カスタム分類名：タグ
   * スラッグ: gym_tag
   * URLに使用するスラッグ: gym-tag
   * 紐付く投稿タイプ：パーソナルジム情報,フィットネスジム情報
   * 紐付く投稿タイプのスラッグ：personal_gym,fitness_gym
   * カテゴリ形式か？：false
   */
  $taxonomyName = 'ジムタグ';
  $taxonomySlug = 'gym_tag';
  $taxonomySlugFront = 'gym-tag';
  $taxonomyPostTypes = array('personal_gym', 'fitness_gym'); // 配列で複数のポストタイプを指定
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
    "show_admin_column" => false,
    "show_in_rest" => true,
    "rest_base" => $taxonomySlug,
    "rest_controller_class" => "WP_REST_Terms_Controller",
    "show_in_quick_edit" => false,
  );
  register_taxonomy($taxonomySlug, $taxonomyPostTypes, $args);
}
add_action('init', 'create_taxonomy_gym_tag_blog_category');
