<?php

function create_taxonomy_gear_tag_blog_category()
{
  /**
   * カスタム分類名：タグ
   * スラッグ: gear_tag
   * URLに使用するスラッグ: gear-tag
   * 紐付く投稿タイプ：トレーニングギア
   * 紐付く投稿タイプのスラッグ：training_gear
   * カテゴリ形式か？：false
   */
  $taxonomyName = 'ギアタグ';
  $taxonomySlug = 'gear_tag';
  $taxonomySlugFront = 'gear-tag';
  $taxonomyPostTypes = ['training_gear']; // 配列で複数のポストタイプを指定
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
add_action('init', 'create_taxonomy_gear_tag_blog_category');
