<?php
//テーブルの見え方を確認するようで、実際のサイトには埋め込まない
add_shortcode('gymtable', 'gym_table_shortcode');
function gym_table_shortcode($atts)
{


  // 出力バッファリングを開始
  ob_start();

  // ファイルのパス（テーマディレクトリ内）
  $file_path = get_template_directory() . '/functions/personal/gym-table.php';

  // ファイルが存在するかチェック
  if (file_exists($file_path)) {

    // インクルード
    include $file_path;
  } else {
    // ファイルが見つからない場合のエラーメッセージ
    echo '<p>エラー: gym_table.phpが見つかりません。</p>';
  }

  // バッファの内容を取得してクリア
  return ob_get_clean();
}
add_shortcode('gymtable', 'gym_table_shortcode');
function gym_list_shortcode($atts)
{


  // 出力バッファリングを開始
  ob_start();

  // ファイルのパス（テーマディレクトリ内）
  $file_path = get_template_directory() . '/functions/personal/gym-list.php';

  // ファイルが存在するかチェック
  if (file_exists($file_path)) {

    // インクルード
    include $file_path;
  } else {
    // ファイルが見つからない場合のエラーメッセージ
    echo '<p>エラー: gym_list.phpが見つかりません。</p>';
  }


  return ob_get_clean();
}
add_shortcode('gymlist', 'gym_list_shortcode');
// パーソナルジム用画像差し込み
// [pgym_image file="画像タイトル英語" alt="画像タイトル日本語"]
function pgym_image_shortcode($atts)
{
  $atts = shortcode_atts(
    array(
      'file' => '',
      'alt' => 'トレハジ 画像',
    ),
    $atts,
    'pgym_image'
  );

  $file_name = sanitize_file_name($atts['file']);
  if (empty($file_name)) {
    return '<p>エラー: 画像ファイル名を指定してください。</p>';
  }

  $file_path = get_template_directory() . '/assets/img/personal/' . $file_name . '.webp';
  if (!file_exists($file_path)) {
    return '<p>エラー: 画像が見つかりません（' . esc_html($file_name) . '.webp）。</p>';
  }

  $image_url = get_template_directory_uri() . '/assets/img/personal/' . $file_name . '.webp';
  $alt_text = esc_attr($atts['alt']);

  return '<img src="' . esc_url($image_url) . '" alt="' . $alt_text . '" loading="lazy">';
}
add_shortcode('pgym_image', 'pgym_image_shortcode');
//コラム用画像差し込み
// [column_image file="filename" alt="画像タイトル"]
function column_image_shortcode($atts)
{
  $atts = shortcode_atts(
    array(
      'file' => '',
      'alt' => 'トレハジ 画像',
    ),
    $atts,
    'pgym_image'
  );

  $file_name = sanitize_file_name($atts['file']);
  if (empty($file_name)) {
    return '<p>エラー: 画像ファイル名を指定してください。</p>';
  }

  $file_path = get_template_directory() . '/assets/img/column/' . $file_name . '.webp';
  if (!file_exists($file_path)) {
    return '<p>エラー: 画像が見つかりません（' . esc_html($file_name) . '.webp）。</p>';
  }

  $image_url = get_template_directory_uri() . '/assets/img/column/' . $file_name . '.webp';
  $alt_text = esc_attr($atts['alt']);

  return '<img src="' . esc_url($image_url) . '" alt="' . $alt_text . '" loading="lazy">';
}
add_shortcode('column_image', 'column_image_shortcode');
//コラム用gif差し込み
// [column_gif file="filename" alt="gifタイトル"]
function column_gif_shortcode($atts)
{
  $atts = shortcode_atts(
    array(
      'file' => '',
      'alt' => 'トレハジ gif',
    ),
    $atts,
    'pgym_image'
  );

  $file_name = sanitize_file_name($atts['file']);
  if (empty($file_name)) {
    return '<p>エラー: 画像ファイル名を指定してください。</p>';
  }

  $file_path = get_template_directory() . '/assets/img/column/' . $file_name . '.gif';
  if (!file_exists($file_path)) {
    return '<p>エラー: 画像が見つかりません（' . esc_html($file_name) . '.gif）。</p>';
  }

  $image_url = get_template_directory_uri() . '/assets/img/column/' . $file_name . '.gif';
  $alt_text = esc_attr($atts['alt']);

  return '<img src="' . esc_url($image_url) . '" alt="' . $alt_text . '" loading="lazy">';
}
add_shortcode('column_gif', 'column_gif_shortcode');
//内部リンク設置用ショートコード[inside_link slug="kawasaki-station"]
function inside_link_shortcode($atts)
{
  $atts = shortcode_atts(array(
    'slug' => ''
  ), $atts, 'inside_link');

  if (empty($atts['slug'])) {
    return '';
  }

  // 投稿取得：スラッグ一致＆公開投稿全タイプ
  $query = new WP_Query(array(
    'name' => $atts['slug'],
    'post_type' => get_post_types(array('public' => true)),
    'post_status' => 'publish',
    'posts_per_page' => 1
  ));

  if (! $query->have_posts()) {
    return '';
  }

  $post = $query->posts[0];

  $permalink = get_permalink($post->ID);
  $title = get_the_title($post->ID);
  $thumbnail = get_the_post_thumbnail($post->ID, 'thumbnail', array(
    'class' => 'inside-link-thumbnail'
  ));

  if (empty($thumbnail)) {
    $thumbnail = '<div class="inside-link-thumbnail placeholder"></div>';
  }

  $html  = '<div><a href="' . esc_url($permalink) . '" class="inside-link-box">';
  $html .= $thumbnail;
  $html .= '<span class="inside-link-title">' . esc_html($title) . '</span>';
  $html .= '</a></div>';

  return $html;
}
add_shortcode('inside_link', 'inside_link_shortcode');

//内部リンク：ディスクリプションつき
function inside_dlink_shortcode($atts)
{
  $atts = shortcode_atts(array(
    'slug' => ''
  ), $atts, 'inside_d_link'); // ← ここを変更

  if (empty($atts['slug'])) {
    return '';
  }

  // 投稿取得：スラッグ一致＆公開投稿全タイプ
  $query = new WP_Query(array(
    'name' => $atts['slug'],
    'post_type' => get_post_types(array('public' => true)),
    'post_status' => 'publish',
    'posts_per_page' => 1
  ));

  if (! $query->have_posts()) {
    return '';
  }

  $post = $query->posts[0];

  $permalink = get_permalink($post->ID);
  $title = get_the_title($post->ID);
  $excerpt = get_the_excerpt($post->ID);
  $thumbnail = get_the_post_thumbnail($post->ID, 'thumbnail', array(
    'class' => 'inside-dlink-thumbnail'
  ));

  if (empty($thumbnail)) {
    $thumbnail = '<div class="inside-dlink-thumbnail placeholder"></div>';
  }

  $html  = '<div><a href="' . esc_url($permalink) . '" class="inside-dlink-box">';
  $html .= $thumbnail;
  $html .= '<div class="inside-dlink-content">';
  $html .= '<span class="inside-dlink-title">' . esc_html($title) . '</span>';
  $html .= '<p class="inside-dlink-excerpt">' . esc_html($excerpt) . '</p>';
  $html .= '</div>';
  $html .= '</a></div>';

  return $html;
}
add_shortcode('inside_d_link', 'inside_dlink_shortcode'); // ← ここも変更
// 内部リンク：ディスクリプション付き（投稿ID指定版）
// 使い方: [inside_d_link_id id="123"]
function inside_dlink_id_shortcode($atts)
{
  $atts = shortcode_atts(['id' => '', 'class' => 'inside-dlink-box'], $atts, 'inside_d_link_id');
  $post_id = absint($atts['id']);
  if (!$post_id) {
    return '';
  }

  $post = get_post($post_id);
  if (!$post || get_post_status($post_id) !== 'publish' || post_password_required($post)) {
    return '';
  }

  $permalink = get_permalink($post_id);
  $title     = get_the_title($post_id);
  $excerpt   = get_the_excerpt($post_id);
  if ($excerpt === '') {
    $excerpt = wp_trim_words(wp_strip_all_tags(get_post_field('post_content', $post_id)), 80, '…');
  }

  $thumb_html = get_the_post_thumbnail($post_id, 'thumbnail', ['class' => 'inside-dlink-thumbnail']);
  if (empty($thumb_html)) {
    $thumb_html = '<span class="inside-dlink-thumbnail placeholder" aria-hidden="true"></span>';
  }

  // 重要：改行や余計な空白を入れない
  $html  = '<a href="' . esc_url($permalink) . '" class="' . esc_attr($atts['class']) . '">';
  $html .= $thumb_html;
  $html .= '<span class="inside-dlink-content">';
  $html .= '<span class="inside-dlink-title">' . esc_html($title) . '</span>';
  $html .= '<span class="inside-dlink-excerpt">' . esc_html($excerpt) . '</span>';
  $html .= '</span>';
  $html .= '</a>';

  // カード全体をブロック化したければ親でラップ
  return '<div class="inside-dlink-wrap">' . $html . '</div>';
}
add_shortcode('inside_d_link_id', 'inside_dlink_id_shortcode');


// [inside_title slug="〇〇" id="123"] 内部リンク（タイトルのみ）
function inside_title_shortcode($atts)
{
  $atts = shortcode_atts(array(
    'slug' => '',
    'id'   => ''
  ), $atts, 'inside_title');

  $post = null;

  // ① IDが指定されていればID優先
  if (!empty($atts['id'])) {
    $post_id = absint($atts['id']);
    $post = get_post($post_id);
  }
  // ② IDが空でスラッグが指定されていればスラッグ検索
  elseif (!empty($atts['slug'])) {
    $query = new WP_Query(array(
      'name'           => sanitize_title($atts['slug']),
      'post_type'      => get_post_types(array('public' => true)),
      'post_status'    => 'publish',
      'posts_per_page' => 1
    ));
    if ($query->have_posts()) {
      $post = $query->posts[0];
    }
    wp_reset_postdata();
  }

  // 投稿が見つからない・非公開なら終了
  if (!$post || get_post_status($post->ID) !== 'publish' || post_password_required($post)) {
    return '';
  }

  // タイトルリンク生成
  $permalink = get_permalink($post->ID);
  $title     = get_the_title($post->ID);

  $html  = '<a href="' . esc_url($permalink) . '" class="inside-dlink-title">';
  $html .= esc_html($title);
  $html .= '</a>';

  return $html;
}
add_shortcode('inside_title', 'inside_title_shortcode');

//[gym_brand brand="the_personal_gym" php="musako" location="武蔵小杉店" star="5" files="osaka1:大阪1,osaka2:大阪2,osaka3:大阪3,osaka4:大阪4"]
//店舗ごとの画像をimg/personal/ブランド名/店舗名で保存する。filesは画像ファイル名:altで指定する。　ブランド名はfunctions/personal/ブランド名.phpと同じにする。
function gym_brand_shortcode($atts)
{
  $atts = shortcode_atts(
    array(
      'brand'    => '',         // 例: 'the_personal_gym'
      'php'      => '',         // 例: 'musako', 空なら 'common'
      'location' => 'ジム',
      'star'     => '5',
      'files'    => '',         // 例: osaka1:外観,osaka2:内装,...
    ),
    $atts,
    'gym_brand'
  );

  // サニタイズと初期処理
  $brand    = sanitize_title($atts['brand']);
  $php      = sanitize_title($atts['php']);
  $location = esc_html($atts['location']);
  $star     = esc_html($atts['star']);
  $files    = $atts['files'];

  if (empty($php)) {
    $php = 'common';
  }

  // スライドショーを生成
  $slider_html = pgym_image_slider_group_from_params($brand, $files);
  set_query_var('gym_slider_html', $slider_html); // ←追加！

  // テンプレートパーツの変数をセット
  set_query_var('gym_php_slug', $php);
  set_query_var('gym_location', $location);
  set_query_var('gym_star', $star);

  // ブランドテンプレートファイル
  $file_path = get_template_directory() . '/functions/personal/' . $brand . '.php';

  ob_start();

  // ブランドテンプレート表示
  if (file_exists($file_path)) {
    include $file_path;
  } else {
    echo '<p>エラー: テンプレート <code>' . esc_html($brand) . '.php</code> が見つかりません。</p>';
  }

  return ob_get_clean();
}
add_shortcode('gym_brand', 'gym_brand_shortcode');
function pgym_image_slider_group_from_params($brand, $files_string)
{
  $brand = sanitize_file_name($brand);
  $base_dir = get_template_directory() . '/assets/img/personal/' . $brand;
  $base_url = get_template_directory_uri() . '/assets/img/personal/' . $brand;

  if (empty($files_string)) {
    return pgym_image_slider_fallback($brand);
  }

  $items = explode(',', $files_string);
  $thumbnails = '';
  $main_image_html = '';
  $has_image = false;

  foreach ($items as $index => $item) {
    $parts = explode(':', $item);
    $file = sanitize_file_name(trim($parts[0]));
    $alt = isset($parts[1]) ? esc_attr(trim($parts[1])) : '画像';

    if (empty($file)) continue;

    $file_path = $base_dir . '/' . $file . '.webp';
    $file_url = $base_url . '/' . $file . '.webp';

    if (!file_exists($file_path)) continue;

    $img_tag = '<img src="' . esc_url($file_url) . '" alt="' . $alt . '" loading="lazy">';

    if ($index === 0) {
      $main_image_html = $img_tag;
    }

    $has_image = true;
    $thumbnails .= '<li>' . $img_tag . '</li>';
  }

  if (!$has_image) {
    return pgym_image_slider_fallback($brand);
  }

  $output = '<div class="slideshow">';
  $output .= '<div id="slideshow-image">' . $main_image_html . '</div>';
  $output .= '<ul class="thumbnail" id="thumbnail">' . $thumbnails . '</ul>';
  $output .= '</div>';

  return $output;
}
function pgym_image_slider_fallback($brand = 'common')
{
  $safe_brand = sanitize_file_name($brand);
  $file_path = get_template_directory() . '/assets/img/personal/' . $safe_brand . '/common.php';

  if (file_exists($file_path)) {
    ob_start();
    include $file_path;
    return ob_get_clean();
  } else {
    return '<!-- ' . esc_html($safe_brand) . '/common.php が見つかりません -->';
  }
}
// [faq q="質問文"]回答本文[/faq]
// もしくは [faq question="質問文" answer="回答本文"]
// オプション: heading="h2|h3|h4"（見出しタグの変更。デフォルトは h3）
add_shortcode('faq', function ($atts, $content = null) {
  $atts = shortcode_atts([
    'q'        => '',
    'question' => '',
    'a'        => '',
    'answer'   => '',
    'heading'  => 'h3',
  ], $atts, 'faq');

  $question = $atts['q'] ?: $atts['question'] ?: '質問';
  $answer   = $atts['a'] ?: $atts['answer'] ?: (string)$content ?: '回答';

  $allowed_headings = ['h2', 'h3', 'h4', 'h5', 'h6'];
  $heading = in_array(strtolower($atts['heading']), $allowed_headings, true) ? strtolower($atts['heading']) : 'h3';

  $question_esc = esc_html($question);
  $answer_esc   = wp_kses_post($answer);

  // 回答がプレーンテキストだけなら<p>で包む
  if (!preg_match('/<(p|ul|ol|table|blockquote|pre|div|h[1-6]|section|article)\b/i', $answer_esc)) {
    $answer_esc = '<p>' . $answer_esc . '</p>';
  }

  // 余分な改行や空白の少ないHTMLを返す（タグ間の空白を潰す）
  $html =
    '<div itemscope itemprop="mainEntity" itemtype="https://schema.org/Question" class="faq-item">' .
    '<div class="faq-q" itemprop="name">' .
    '<' . $heading . ' class="faq-title">' . $question_esc . '</' . $heading . '>' .
    '</div>' .
    '<div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">' .
    '<div class="faq-a" itemprop="text">' . $answer_esc . '</div>' .
    '</div>' .
    '</div>';

  // 「>   <」のようなタグ間空白・改行を強制的に除去
  $html = preg_replace('/>\s+</', '><', $html);

  return $html;
});

// ショートコード内部の<p>自動挿入を抑制
add_filter('the_content', function ($content) {
  // FAQショートコードを含む場合
  if (has_shortcode($content, 'faq')) {
    // 自動整形を一時的に解除
    remove_filter('the_content', 'wpautop');
    $content = do_shortcode($content);
    add_filter('the_content', 'wpautop');
    return $content;
  }
  return $content;
}, 9);

// [product_review name="" desc="" brand="" image="" image_alt="" review_title="" review_body="" rating="5" author="" author_type="person|org" date="YYYY-MM-DD" agg_rating="" review_count=""]
add_shortcode('product_review', function ($atts) {
  $atts = shortcode_atts([
    'name'         => '',
    'desc'         => '',
    'brand'        => '',
    'image'        => '',
    'image_alt'    => '',
    'review_title' => '',
    'review_body'  => '',
    'rating'       => '5',
    'author'       => '',
    'author_type'  => 'person', // person or org
    'date'         => '',       // 例: 2025-10-17
    'agg_rating'   => '',       // 総合評価(任意)
    'review_count' => '',       // レビュー数(任意)
  ], $atts, 'product_review');

  // サニタイズ
  $name         = esc_html($atts['name']);
  $desc         = wp_kses_post($atts['desc']);
  $brand        = esc_html($atts['brand']);
  $image        = esc_url($atts['image']);
  $image_alt    = esc_attr($atts['image_alt']);
  $review_title = esc_html($atts['review_title']);
  $review_body  = wp_kses_post($atts['review_body']);
  $rating       = intval($atts['rating']);
  $author       = esc_html($atts['author']);
  $author_type  = strtolower($atts['author_type']) === 'org' ? 'Organization' : 'Person';
  $date         = preg_match('/^\d{4}-\d{2}-\d{2}$/', $atts['date']) ? $atts['date'] : '';
  $agg_rating   = $atts['agg_rating'] !== '' ? floatval($atts['agg_rating']) : '';
  $review_count = $atts['review_count'] !== '' ? intval($atts['review_count']) : '';

  if ($rating < 1) $rating = 1;
  if ($rating > 5) $rating = 5;

  ob_start(); ?>

  <div itemscope itemtype="https://schema.org/Product" class="product">
    <?php if ($image): ?>
      <figure class="product-image"><img itemprop="image" src="<?php echo $image; ?>" alt="<?php echo $image_alt ?: $name; ?>" loading="lazy" decoding="async" /></figure>
    <?php endif; ?>

    <?php if ($name): ?>
      <div class="product-name" itemprop="name"><?php echo $name; ?></div>
    <?php endif; ?>

    <?php if ($desc): ?>
      <div itemprop="description"><?php echo $desc; ?></div>
    <?php endif; ?>

    <?php if ($brand): ?>
      <div itemprop="brand" itemscope itemtype="https://schema.org/Brand">
        <meta itemprop="name" content="<?php echo $brand; ?>" />
        <span class="brand-name"><?php echo $brand; ?></span>
      </div>
    <?php endif; ?>

    <div itemprop="review" itemscope itemtype="https://schema.org/Review" class="product-review">
      <?php if ($review_title): ?>
        <div class="review-title" itemprop="name"><?php echo $review_title; ?></div>
      <?php endif; ?>

      <?php if ($review_body): ?>
        <div class="review-body" itemprop="reviewBody"><?php echo $review_body; ?></div>
      <?php endif; ?>

      <div class="review-rating" itemprop="reviewRating" itemscope itemtype="https://schema.org/Rating">
        <meta itemprop="worstRating" content="1" />
        <meta itemprop="bestRating" content="5" />
        <span>評価: <span itemprop="ratingValue"><?php echo $rating; ?></span> / 5</span>
      </div>

      <?php if ($author): ?>
        <p class="review-author">
          投稿者:<span itemprop="author" itemscope itemtype="https://schema.org/<?php echo $author_type; ?>">
            <span itemprop="name"><?php echo $author; ?></span>
          </span>
        </p>
      <?php endif; ?>

      <?php if ($date): ?>
        <meta itemprop="datePublished" content="<?php echo esc_attr($date); ?>" />
      <?php endif; ?>
    </div>

    <?php if ($agg_rating !== '' && $review_count !== ''): ?>
      <div itemprop="aggregateRating" itemscope itemtype="https://schema.org/AggregateRating">
        <meta itemprop="ratingValue" content="<?php echo esc_attr($agg_rating); ?>" />
        <meta itemprop="reviewCount" content="<?php echo esc_attr($review_count); ?>" />
        <p>総合評価：<?php echo esc_html($agg_rating); ?> / 5（<?php echo esc_html($review_count); ?>件のレビュー）</p>
      </div>
    <?php endif; ?>
  </div>

<?php
  $html = ob_get_clean();
  // タグ間の余白・改行を最小化して wpautop による空<p>をできるだけ防ぐ
  $html = preg_replace('/>\s+</', '><', $html);
  return $html;
});
//h2画像挿入使い方　[h2_img file="ファイル名" alt="画像説明" title="画像タイトル"]
function h2_img_shortcode($atts)
{
  $atts = shortcode_atts(
    array(
      'file'  => '',
      'alt'   => 'トレハジ 画像',
      'title' => '',
    ),
    $atts,
    'h2_img'
  );

  $file_name = sanitize_file_name($atts['file']);
  if (empty($file_name)) {
    return '';
  }

  $file_path = get_template_directory() . '/assets/img/h2/' . $file_name . '.webp';
  if (!file_exists($file_path)) {
    return '';
  }

  $image_url = get_template_directory_uri() . '/assets/img/h2/' . $file_name . '.webp';
  $alt_text  = esc_attr($atts['alt']);
  $title_text = trim($atts['title']);
  $title_attr = $title_text !== '' ? ' title="' . esc_attr($title_text) . '"' : '';

  return '<img decoding="async" src="' . esc_url($image_url) . '" alt="' . $alt_text . '"' . $title_attr . ' loading="lazy">';
}
add_shortcode('h2_img', 'h2_img_shortcode');
