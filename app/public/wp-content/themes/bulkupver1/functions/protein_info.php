<?php
//======================================================================
// プロテイン情報のカスタム投稿タイプを自作（投稿ページ用）
//======================================================================
function protein_info_post_type()
{
  register_post_type(
    'protein_info',
    array(
      'label' => 'プロテイン検索', //表示名
      'public' => true, //公開状態
      'exclude_from_search' => false, //検索対象に含めるか
      'show_ui' => true, //管理画面に表示するか
      'show_in_menu' => true, //管理画面のメニューに表示するか
      'menu_position' => 6, //管理メニューの表示位置を指定
      'hierarchical' => false, //階層構造を持たせるか
      'has_archive' => true, //この投稿タイプのアーカイブを作成するか
      'taxonomies' => array('protein_brand', 'protein_flavor', 'protein_type'), //タグ
      "rewrite" => array(
        "slug" => 'protein-info', //URL用のスラッグ
        "with_front" => true
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
add_action('init', 'protein_info_post_type', 1);
//カスタム投稿をカテゴリーページで一覧表示
function protein_main_query($query)
{
  if (is_admin() || !$query->is_main_query())
    return;

  if ($query->is_category() || $query->is_tag()) {
    $query->set('post_type', array('post', 'protein_info'));

    return;
  }
}
add_action('pre_get_posts', 'protein_main_query');
// カスタム投稿タイプを自作終了