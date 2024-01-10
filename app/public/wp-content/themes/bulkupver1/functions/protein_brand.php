<?php

function create_taxonomy_protein_brand_blog_category()
{
  /**
   * カスタム分類名：プロテインブランド
   * スラッグ: protein_brand
   * URLに使用するスラッグ: protein-brand
   * 紐付く投稿タイプ：プロテイン情報
   * 紐付く投稿タイプのスラッグ：protein_info
   * カテゴリ形式か？：false
   */
  $taxonomyName = 'プロテインブランド';
  $taxonomySlug = 'protein_brand';
  $taxonomySlugFront = 'protein-brand';
  $taxonomyPostType = 'protein_info';
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
add_action('init', 'create_taxonomy_protein_brand_blog_category');
