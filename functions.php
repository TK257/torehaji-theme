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

//======================================================================
// カスタム投稿タイプを自作（投稿ページ用）
//======================================================================
function self_made_post_type()
{
  register_post_type(
    'gym_info',
    array(
      'label' => 'ジム検索', //表示名
      'public'        => true, //公開状態
      'exclude_from_search' => false, //検索対象に含めるか
      'show_ui' => true, //管理画面に表示するか
      'show_in_menu' => true, //管理画面のメニューに表示するか
      'menu_position' => 5, //管理メニューの表示位置を指定
      'hierarchical' => false, //階層構造を持たせるか
      'has_archive'   => true, //この投稿タイプのアーカイブを作成するか
      'taxonomies' => array('gym_brand', 'gym_area'), //カテゴリ
      "rewrite" => array(
        "slug" => 'gym-info', //URL用のスラッグ
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
add_action('init', 'self_made_post_type', 1);
//カスタム投稿をカテゴリーページで一覧表示
function my_main_query($query)
{
  if (is_admin() || !$query->is_main_query())
    return;

  if ($query->is_category() || $query->is_tag()) {
    $query->set('post_type', array('post', 'gym_info'));

    return;
  }
}
add_action('pre_get_posts', 'my_main_query');
// カスタム投稿タイプを自作終了

// ジム情報用の地域カテゴリーを読み込む
require_once(dirname(__FILE__) . '/functions/gym_area.php');
// ジムブランド用のカテゴリー読み込む
require_once(dirname(__FILE__) . '/functions/gym_brand.php');
// プロテインのカスタム投稿を読み込む
require_once(dirname(__FILE__) . '/functions/protein_info.php');
// プロテインのブランドタグ読み込む
require_once(dirname(__FILE__) . '/functions/protein_brand.php');
// プロテインの種類タグ読み込む
require_once(dirname(__FILE__) . '/functions/protein_type.php');
// プロテインの味タグ読み込む
require_once(dirname(__FILE__) . '/functions/protein_flavor.php');
// マガジンのカスタム投稿を読み込む
require_once(dirname(__FILE__) . '/functions/magazine.php');
// マガジン用のカテゴリ読み込む
require_once(dirname(__FILE__) . '/functions/magazine_cat.php');
// マガジン用のタグ読み込む
require_once(dirname(__FILE__) . '/functions/magazine_tag.php');
// カスタムクエリパラメータの追加
require_once(dirname(__FILE__) . '/functions/query_vars.php');
// WP管理画面にブランドと味を表示
require_once(dirname(__FILE__) . '/functions/wp_custom_column.php');
// 計算用ショートカット読み込む
require_once(dirname(__FILE__) . '/functions/keisan.php');
// 商品リンクのショートカット読み込む
require_once(dirname(__FILE__) . '/functions/items.php');

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
function seo_meta_title()
{
  if (is_singular('gym_info')) {
    // タクソノミーページ
    return esc_html(get_the_title()) . 'の入会情報・基本情報・外観画像・料金プラン・月会費・おすすめポイント|ジム検索なら' . get_bloginfo('name');
  } else if (is_singular('protein_info')) {
    // プロテインの個別ページ
    return esc_html(get_the_title()) . 'の栄養成分・価格比較・おすすめポイント|' . get_bloginfo('name');
  } else if (is_tax('protein_type')) {
    // プロテインの種類一覧
    return esc_html(get_the_title()) . 'の一覧|' . get_bloginfo('name');
  } else if (is_tax('protein_brand')) {
    // プロテインのブランド一覧
    return esc_html(get_the_title()) . 'の一覧|' . get_bloginfo('name');
  } else if (is_tax('protein_flavor')) {
    // プロテインの味一覧
    return esc_html(get_the_title()) . 'の一覧|' . get_bloginfo('name');
  } else if (is_tax('gym_brand', 'beyond')) {
    return  'BEYONDを選ぶ理由、メリット・デメリットを解説|ジム検索なら' . get_bloginfo('name');
    //ビヨンド一覧ページのタイトル
  } else if (is_tax('gym_brand', 'rizap')) {
    //ライザップ一覧ページのタイトル
    return 'RIZAPを選ぶ理由、メリット・デメリットを解説|ジム検索なら' . get_bloginfo('name');
  } else if (is_tax('gym_brand', 'rizapwoman')) {
    //ライザップウーマン一覧ページのタイトル
    return 'RIZAPWOMANを選ぶ理由、メリット・デメリットを解説|ジム検索なら' . get_bloginfo('name');
  } else if (is_tax('gym_brand', 'chocozap')) {
    //chocoZAP一覧ページのタイトル
    return 'chocoZAPを選ぶ理由、メリット・デメリットを解説|ジム検索なら' . get_bloginfo('name');
  } else if (is_tax('gym_area')) { //エリア一覧
    return esc_html(get_queried_object()->name) . 'のフィットネスジム・トレーニングジム一覧|ジム検索なら' . get_bloginfo('name');
  } else if (is_page('gym_info')) {
    // タクソノミーページ
    return esc_html(get_the_title()) . 'の基本情報|' . get_bloginfo('name');
  } else if (is_page() || is_singular()) {
    // 固定ページ・シングルページ
    return esc_html(get_the_title()) . '|' . get_bloginfo('name');
  } else {
    return get_bloginfo('name');
  }
}
// メタタグ用ディスクリプション出力
function seo_meta_description()
{
  if (is_page() || is_singular()) {
    // 固定ページ・シングルページ
    return esc_html(get_the_excerpt()); //抜粋を表示させている
  } else if (is_tax('gym_area')) { //エリア一覧
    return esc_html(get_queried_object()->name) . '内のフィットネスジム・トレーニングジムを一覧でご紹介。|ジム検索なら' . get_bloginfo('name');
  } else {
    return get_bloginfo('description');
  }
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
  if (is_singular()) {
    return get_the_post_thumbnail_url(get_the_ID(), 'full');
  } else {
    return '/BULK-UP/app/public/wp-content/themes/bulkupver1/assets/img/logo/BULKUP正方形ロゴ.png';
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
//ショートコードテスト
function testshort_func($atts, $content = null)
{
  return '挿入する文字列';
}
add_shortcode('testshort', 'testshort_func');
//アイキャッチ画像のサムネイル取得を有効にする
add_theme_support('post-thumbnails');
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
//ショートコードを使ったプロテインテーブルphpファイルの呼び出し方法　使い方は[tpphp file='test']
function my_php_Include($params = array())
{
  extract(shortcode_atts(array('file' => 'default'), $params));
  ob_start();
  include(STYLESHEETPATH . "/tableprotein/$file.php");
  return ob_get_clean();
}
add_shortcode('tpphp', 'my_php_Include');
// 寄稿者に画像アップロード権限を付与
if (current_user_can('contributor') && !current_user_can('upload_files')) {
  add_action('admin_init', 'allow_contributor_uploads');
}

function allow_contributor_uploads()
{
  $contributor = get_role('contributor');
  $contributor->add_cap('upload_files');
}
//END