<?php

function create_taxonomy_kin_training_tag_blog_category()
{
  /**
   * カスタム分類名：筋トレメニューのタグ
   * スラッグ: kin_training_tag
   * URLに使用するスラッグ: kin-training-tag
   * 紐付く投稿タイプ：筋トレメニュー
   * 紐付く投稿タイプのスラッグ：kin-training
   * カテゴリ形式か？：false
   */
  $taxonomyName = '筋トレメニューのタグ';
  $taxonomySlug = 'kin_training_tag';
  $taxonomySlugFront = 'kin-training-tag';
  $taxonomyPostType = 'kin_training';
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
    "rewrite" => array('slug' => $taxonomySlugFront, 'with_front' => true,),
    "show_admin_column" => false,
    "show_in_rest" => true,
    "rest_base" => $taxonomySlug,
    "rest_controller_class" => "WP_REST_Terms_Controller",
    "show_in_quick_edit" => false,
  );
  register_taxonomy($taxonomySlug, array($taxonomyPostType), $args);
}
add_action('init', 'create_taxonomy_kin_training_tag_blog_category');
