<?php
function add_link_files()
{
  // CSSの読み込み
  wp_enqueue_style('main', get_stylesheet_directory_uri() . '/assets/css/main.min.css');
  wp_enqueue_style('my-style', get_stylesheet_directory_uri() . '/style.css', array('main'));
  // JavaScriptの読み込み
  wp_enqueue_script('slick.min',  '//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js', array(), false, true);
  //wp_enqueue_script('main.min', get_template_directory_uri() . '/assets/js/main.min.js', array(), false, true);
  wp_enqueue_script('custom', get_template_directory_uri() . '/assets/js/custom.js', array(), false, true);
}
// タイトルタグ出力
//function output_title()
//{
//  add_theme_support('title-tag');
//}
//add_action('after_setup_theme', 'output_title');

// カスタムクエリパラメータの追加
require_once(dirname(__FILE__) . '/functions/query_vars.php');
// WP管理画面にブランドと味を表示
//require_once(dirname(__FILE__) . '/functions/wp_custom_column.php');
// 計算用ショートカット読み込む
require_once(dirname(__FILE__) . '/functions/keisan.php');
// 商品リンクのショートカット読み込む
require_once(dirname(__FILE__) . '/functions/items.php');
// h2画像差し込みのショートカット読み込む
require_once(dirname(__FILE__) . '/functions/h2img.php');
// h2画像差し込みのショートカット読み込む
require_once(dirname(__FILE__) . '/functions/contributor_iframe.php');
// パーソナルジムのショートコード読み込み用
require_once(dirname(__FILE__) . '/functions/short-code.php');
// 管理画面にターム名表示読み込み用
require_once(dirname(__FILE__) . '/functions/admin-term.php');
// FAQのmicrodata読み込み用
require_once(dirname(__FILE__) . '/functions/faqitems.php');
//アイキャッチ画像の機能を有効化
add_theme_support('post-thumbnails');

//固定ページで抜粋を使えるようにする
add_post_type_support('page', 'excerpt');

//抜粋をmetaディスクリプションで使用できるようにする
function get_description()
{
  // 記事ページと固定ページの場合
  if (is_single() or is_page()) {

    // 投稿画面で入力した抜粋を出力用の変数へ代入
    $description = get_the_excerpt();
  }

  // 抜粋が無い場合は通常通りキャッチフレーズを出力
  if (empty($description)) {
    $description = bloginfo('description');
  }

  return $description;
}

//OGPここから	
// メタタグ用タイトル出力
// メタタグ用タイトル出力
function seo_meta_title()
{
  // トップページ・一覧トップ
  if (is_front_page() || is_home()) {
    return get_bloginfo('name');
  }

  // 固定ページ
  if (is_page()) {
    global $post;

    if (!empty($post->post_name)) {

      // トレハジについて（/about）
      if ($post->post_name === 'about') {
        return 'トレハジについて｜運営方針・制作ポリシー・運営者情報';
      }

      // 運営会社（/company）
      if ($post->post_name === 'company') {
        return '運営会社情報｜株式会社Simple is Best';
      }
    }

    // 固定ページ共通
    if (!empty($post->post_title)) {
      return esc_html($post->post_title) . '｜' . get_bloginfo('name');
    }

    return get_bloginfo('name');
  }

  // 投稿ページ
  if (is_singular()) {
    return esc_html(get_the_title()) . '｜' . get_bloginfo('name');
  }

  // フォールバック
  return get_bloginfo('name');
}

// メタタグ用ディスクリプション出力
function seo_meta_description()
{
  // トップページ・一覧トップ
  if (is_front_page() || is_home()) {
    return get_bloginfo('description');
  }

  // 固定ページ
  if (is_page()) {
    global $post;

    if (!empty($post->post_name)) {

      // トレハジについて（/about）
      if ($post->post_name === 'about') {
        return 'トレハジは、プロテインや自宅トレを通じて、運動初心者が無理なく体づくりを始めるための情報を整理・解説するメディアです。運営方針・制作ポリシー・広告方針についてご紹介しています。';
      }

      // 運営会社（/company）
      if ($post->post_name === 'company') {
        return 'トレハジを運営する株式会社Simple is Bestの会社情報ページです。運営主体、事業内容、責任範囲、広告や情報の取り扱い方針について掲載しています。';
      }
    }

    // 固定ページ共通（個別指定がない場合）
    if (!empty($post->post_excerpt)) {
      return esc_html(strip_tags($post->post_excerpt));
    }

    return get_bloginfo('description');
  }

  // 投稿ページ
  if (is_singular()) {
    return esc_html(strip_tags(get_the_excerpt()));
  }

  // フォールバック
  return get_bloginfo('description');
}

// カテゴリーページの説明をディスクリプション出力する設定
function get_meta_description_from_category()
{
  $cate_desc = trim(strip_tags(term_description()));
  if ($cate_desc) { //カテゴリ設定に説明がある場合はそれを返す
    return $cate_desc;
  }
  $cate_desc = '「' . single_cat_title('', false) . '」の記事一覧です。' . get_bloginfo('description');
  return $cate_desc;
}

// メタタグ用OGPイメージ出力
function seo_meta_ogp()
{
  // 固定で使う画像URL（フルURLで指定してください）
  $default_og_image = 'https://torehaji.com/wp-content/themes/git-torehaji/assets/img/logo/Torehaji-default.png';

  if (is_singular()) {
    $thumbnail = get_the_post_thumbnail_url(get_the_ID(), 'full');
    return $thumbnail ? $thumbnail : $default_og_image;
  } else {
    return $default_og_image;
  }
}


// メタタグ用ページタイプ出力
function seo_meta_type()
{
  if (is_front_page() || is_home()) {
    return 'website';
  } else {
    return 'article';
  }
}

// メタタグ用ページURL出力
function seo_meta_url()
{
  if (is_front_page() || is_home()) {
    return esc_url(home_url());
  } else if (is_page() || is_singular()) {
    return esc_url(get_the_permalink());
  } else {
    return (is_ssl() ? 'https://' : 'http://') . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
  }
}

//OGPここまで
add_action('wp_enqueue_scripts', 'add_link_files');
//カテゴリー・タグ管理画面にIDカラムを設置する
add_filter('manage_edit-category_columns', 'add_taxonomy_columns');
add_filter('manage_edit-post_tag_columns', 'add_taxonomy_columns');
function add_taxonomy_columns($columns)
{
  $index = 4; // 追加位置

  return array_merge(
    array_slice($columns, 0, $index),
    array('id' => 'ID'),
    array_slice($columns, $index)
  );
}

//カテゴリー・タグ管理画面にIDを表示
add_action('manage_category_custom_column', 'add_taxonomy_custom_fields', 10, 3);
add_action('manage_post_tag_custom_column', 'add_taxonomy_custom_fields', 10, 3);
function add_taxonomy_custom_fields($content, $column_name, $term_id)
{
  if ('id' === $column_name) {
    $content = $term_id;
  }
  return $content;
}
// 固定ページの親ページID取得
function get_parent_page_ID()
{
  global $post;
  if (is_page() && $post->post_parent) {
    return $post->post_parent;
  } else {
    return false;
  }
}
//タクソノミーページのアーカイブ
// 日付別アーカイブのチェック
function is_date_archive()
{
  if (get_query_var('year') && get_query_var('monthnum')) {
    return true;
  }
}
// 寄稿者に画像アップロード権限を付与
if (current_user_can('contributor') && !current_user_can('upload_files')) {
  add_action('admin_init', 'allow_contributor_uploads');
}

function allow_contributor_uploads()
{
  $contributor = get_role('contributor');
  $contributor->add_cap('upload_files');
}
// feedページを作らない
remove_action('do_feed_rdf', 'do_feed_rdf');
remove_action('do_feed_rss', 'do_feed_rss');
remove_action('do_feed_rss2', 'do_feed_rss2');
remove_action('do_feed_atom', 'do_feed_atom');
remove_action('wp_head', 'feed_links', 2);
remove_action('wp_head', 'feed_links_extra', 3);
//すべての画像生成を停止する
function resize_disabled($sizes)
{
  $sizes = array();
  return $sizes;
}
add_filter('intermediate_image_sizes', 'resize_disabled');
add_filter('big_image_size_threshold', '__return_false');
//phpの読み込み
require_once(dirname(__FILE__) . '/functions/personal_gym.php');
require_once(dirname(__FILE__) . '/functions/fitness_gym.php');
require_once(dirname(__FILE__) . '/functions/training_gear.php');
require_once(dirname(__FILE__) . '/functions/protein.php');
require_once(dirname(__FILE__) . '/functions/home_training.php');
require_once(dirname(__FILE__) . '/functions/area.php');
require_once(dirname(__FILE__) . '/functions/gym_tag.php');
require_once(dirname(__FILE__) . '/functions/gear_category.php');
require_once(dirname(__FILE__) . '/functions/gear_tag.php');
require_once(dirname(__FILE__) . '/functions/affiliate_code.php');
require_once(dirname(__FILE__) . '/functions/noindex.php');
require_once(dirname(__FILE__) . '/functions/afi-product.php');
require_once(dirname(__FILE__) . '/functions/protein-cost.php');
//END
//星を表示する
add_action('wp_enqueue_scripts', 'enqueue_custom_star_rating_script');
function enqueue_custom_star_rating_script()
{
  wp_enqueue_script('jquery');
  wp_add_inline_script('jquery', '
        jQuery(document).ready(function($) {
            $(".star5_rating").each(function(index, e) {
                let starRate = $(this).data("rate");
                let widthRate = Math.round((starRate / 5) * 100);
                let css = \'.star5_rating[data-rate="\' + starRate + \'"]:after{width:\' + widthRate + \'%;}\';
                let style = $("<style>").text(css);
                $("body").append(style);
            });
        });
    ');
}
//END
//更新日付を一覧ページに出す方法
function add_modified_column($columns)
{
  $columns['modified'] = '更新日時';
  return $columns;
}

function show_modified_column($column, $post_id)
{
  if ($column === 'modified') {
    echo get_the_modified_date('Y-m-d H:i', $post_id);
  }
}

function modified_column_register_for_custom_post_type()
{
  $post_types = ['personal_gym', 'training_gear', 'fitness_gym', 'home_training', 'protein']; // ←カスタム投稿タイプのスラッグを追加
  foreach ($post_types as $post_type) {
    add_filter("manage_edit-{$post_type}_columns", 'add_modified_column');
    add_action("manage_{$post_type}_posts_custom_column", 'show_modified_column', 10, 2);
  }
}
add_action('admin_init', 'modified_column_register_for_custom_post_type');

function modified_column_register_sortable($columns)
{
  $columns['modified'] = 'modified';
  return $columns;
}
// ソート可能なカラムを各カスタム投稿タイプに追加
add_filter('manage_edit-personal_gym_sortable_columns', 'modified_column_register_sortable');
add_filter('manage_edit-training_gear_sortable_columns', 'modified_column_register_sortable');
add_filter('manage_edit-fitness_gym_sortable_columns', 'modified_column_register_sortable');
add_filter('manage_edit-protein_sortable_columns', 'modified_column_register_sortable');
add_filter('manage_edit-home_training_sortable_columns', 'modified_column_register_sortable');
function modified_orderby_custom_column($query)
{
  if (!is_admin() || !$query->is_main_query()) return;

  if ($query->get('orderby') === 'modified') {
    $query->set('orderby', 'modified');
  }
}
add_action('pre_get_posts', 'modified_orderby_custom_column');
/**
 * 全投稿タイプにID列を追加
 */
add_filter('manage_posts_columns', function ($columns) {
  $new = [];
  foreach ($columns as $key => $label) {
    $new[$key] = $label;
    if ($key === 'cb') {
      $new['post_id'] = 'ID';
    }
  }
  return $new;
}, 5);

add_action('manage_posts_custom_column', function ($column, $post_id) {
  if ($column === 'post_id') {
    echo (int) $post_id;
  }
}, 10, 2);
/**
 * 管理画面の投稿一覧でID列の幅を調整
 */
add_action('admin_head', function () {
  echo '<style>
    /* 投稿ID列の幅を固定 */
    .wp-list-table .column-post_id {
      width: 40px;
      text-align: left;
      white-space: nowrap;
    }
  </style>';
});
/**
 * ID列をソート可能にする（全投稿タイプ）
 */
add_action('admin_init', function () {
  $post_types = get_post_types(['public' => true], 'names');

  foreach ($post_types as $post_type) {
    add_filter("manage_edit-{$post_type}_sortable_columns", function ($columns) {
      $columns['post_id'] = 'ID';
      return $columns;
    });
  }
});

/**
 * ソート時に post_id → ID に変換
 */
add_filter('request', function ($vars) {
  if (isset($vars['orderby']) && $vars['orderby'] === 'post_id') {
    $vars['orderby'] = 'ID';
  }
  return $vars;
});
