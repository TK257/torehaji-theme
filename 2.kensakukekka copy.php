<?php get_header(); ?>
<?php function sethtmlspecialchars($data)
{
    if (is_array($data)) { //データが配列の場合
        return array_map('sethtmlspecialchars', $data);
    } else { //データが配列ではない場合
        return htmlspecialchars($data, ENT_QUOTES, 'UTF-8');
    }
}


//検索タイプ
$protein_type = []; //カテゴリー01
$protein_brand = []; //カテゴリー02
$protein_flavor = []; //カテゴリー03


//GETの設定
if (isset($_GET['s']) && $_GET['s']) {
    $s = sethtmlspecialchars($_GET['s']);
}
if (isset($_GET['protein_type']) && $_GET['protein_type']) {
    $protein_type = sethtmlspecialchars($_GET['protein_type']);
}
if (isset($_GET['protein_brand']) && $_GET['protein_brand']) {
    $protein_brand = sethtmlspecialchars($_GET['protein_brand']);
}
if (isset($_GET['protein_flavor']) && $_GET['protein_flavor']) {
    $protein_flavor = sethtmlspecialchars($_GET['protein_flavor']);
}
$paged = get_query_var('paged') ? get_query_var('paged') : 1;

$args = array(
    'paged' => $paged,
    'post_type' => array('protein_info'), //カスタム投稿タイプtest_post_type
    'post_status' => array('publish'), //公開状態
    'order' => 'DESC', //降順
    'orderby' => 'date', //日付で並び替える
    'posts_per_page' => 10 // 1ページあたり10件表示
);

//タクソノミー検索条件追加用配列
$tax_query = [];

//カテゴリー01に値があり、「all」ではないときのみtax_query配列に条件追加。
if (!empty($protein_type) && !in_array('all', $protein_type)) {
    $tax_query[] = array(
        'taxonomy' => 'protein_type',
        'field' => 'slug',
        'terms' => $protein_type,
    );
}
//カテゴリー02に値があり、「all」ではないときのみtax_query配列に条件追加。
if (!empty($protein_brand) && !in_array('all', $protein_brand)) {
    $tax_query[] = array(
        'taxonomy' => 'protein_brand',
        'field' => 'slug',
        'terms' => $protein_brand,
    );
}
//カテゴリー03に値があり、「all」ではないときのみtax_query配列に条件追加。
if (!empty($protein_flavor) && !in_array('all', $protein_flavor)) {
    $tax_query[] = array(
        'taxonomy' => 'protein_flavor',
        'field' => 'slug',
        'terms' => $protein_flavor,
    );
}


//tax_queryに格納
if (count($tax_query) > 0) {
    //AND検索（デフォルト）
    $tax_query['relation'] = 'AND';
    $args += array('tax_query' => $tax_query);
}

$the_query = new WP_Query($args);


/**
 * 検索条件を残す処理
 */
//カテゴリ01
function checkTax01($param)
{
    global $protein_type;
    if (in_array($param, $protein_type)) {
        echo 'checked';
    }
}
//カテゴリ02
function checkTax02($param)
{
    global $protein_brand;
    if (in_array($param, $protein_brand)) {
        echo 'checked';
    }
}
//カテゴリ03
function checkTax02($param)
{
    global $protein_flavor;
    if (in_array($param, $protein_flavor)) {
        echo 'checked';
    }
}


get_header(); ?>

<form action="<?php echo home_url(); ?>" method="GET">
    <input type="hidden" name="post_type" value="test_post_type">
    <input type="hidden" name="s">
    <table>
        <tbody>
            <tr>
                <th>カテゴリー01</th>
                <td>
                    <div>
                        <ul>
                            <?php
                            $taxonomies = 'protein_type';
                            $args = array(
                                'hide_empty'    => false,
                                'orderby' => 'menu_order',
                                'parent' => 0
                            );

                            ?>
                            <li>
                                <label>
                                    <input type="checkbox" name="protein_type[]" value="all" <?php checkTax01('all'); ?>>
                                    <span>すべて</span>
                                </label>
                            </li>
                            <?php
                            $protein_type_terms = get_terms($taxonomies, $args);
                            foreach ($tax_01_terms as $term) :
                                $term_name = $term->name;
                                $term_slug = $term->slug;
                                $term_id = $term->term_id;
                            ?>
                                <li>
                                    <label>
                                        <input type="checkbox" name="protein_type[]" value="<?php echo $term_slug; ?>" <?php checkTax01($term_slug); ?>>
                                        <span><?php echo $term_name; ?></span>
                                    </label>
                                </li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                </td>
            </tr>
            <tr>
                <th>カテゴリー02</th>
                <td>
                    <div>
                        <ul>
                            <?php
                            $taxonomies = 'protein_brand';
                            $args = array(
                                'hide_empty'    => false,
                                'orderby' => 'menu_order',
                                'parent' => 0
                            );

                            ?>
                            <li>
                                <label>
                                    <input type="checkbox" name="protein_brand[]" value="all" <?php checkTax02('all'); ?>>
                                    <span>すべて</span>
                                </label>
                            </li>
                            <?php
                            $protein_brand_terms = get_terms($taxonomies, $args);
                            foreach ($protein_brand_terms as $term) :
                                $term_name = $term->name;
                                $term_slug = $term->slug;
                                $term_id = $term->term_id;
                            ?>
                                <li>
                                    <label>
                                        <input type="checkbox" name="protein_brand[]" value="<?php echo $term_slug; ?>" <?php checkTax02($term_slug); ?>>
                                        <span><?php echo $term_name; ?></span>
                                    </label>
                                </li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                </td>
            </tr>
            <tr>
                <th>カテゴリー03</th>
                <td>
                    <div>
                        <ul>
                            <?php
                            $taxonomies = 'protein_flavor';
                            $args = array(
                                'hide_empty'    => false,
                                'orderby' => 'menu_order',
                                'parent' => 0
                            );

                            ?>
                            <li>
                                <label>
                                    <input type="checkbox" name="protein_flavor[]" value="all" <?php checkTax03('all'); ?>>
                                    <span>すべて</span>
                                </label>
                            </li>
                            <?php
                            $protein_flavor_terms = get_terms($taxonomies, $args);
                            foreach ($protein_flavor_terms as $term) :
                                $term_name = $term->name;
                                $term_slug = $term->slug;
                                $term_id = $term->term_id;
                            ?>
                                <li>
                                    <label>
                                        <input type="checkbox" name="protein_flavor[]" value="<?php echo $term_slug; ?>" <?php checkTax03($term_slug); ?>>
                                        <span><?php echo $term_name; ?></span>
                                    </label>
                                </li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                </td>
            </tr>
        </tbody>
    </table>
    <button type="submit">
        この条件で検索する
    </button>
</form>
<?php if ($the_query->have_posts()) : ?>
    <div style="margin-top:40px;">
        <div>
            <b style="font-size:20px;">検索結果</b>
            <p>
                <span><?php echo $the_query->found_posts; ?>件</span>
                <span>見つかりました</span>
            </p>
        </div>
        <?php
        while ($the_query->have_posts()) : $the_query->the_post();
            //各種データ取得
            $title = get_the_title();
            $post_id = get_the_ID();

            /**
             * カテゴリー取得
             */
            $protein_type = get_the_terms($post_id, 'protein_type'); //カテゴリー01
            $protein_brand = get_the_terms($post_id, 'protein_brand'); //カテゴリー02
            $protein_flavor = get_the_terms($post_id, 'protein_flavor'); //カテゴリー03
        ?>
            <div style="margin-top:20px;">
                <div><b>記事タイトル:</b><?php echo $title; ?></div>
                <div><b>protein_type:</b><?php echo $protein_type[0]->name; ?></div>
                <div><b>protein_brand:</b><?php echo $protein_brand[0]->name; ?></div>
                <div><b>protein_flavor:</b><?php echo $protein_flavor[0]->name; ?></div>
                <div><a href="<?php the_permalink(); ?>">記事リンク</a></div>
            </div>
        <?php endwhile; ?>
        <?php
        /* ページャーの表示 */
        // if (function_exists('pagination')) :
        //     pagination($the_query->max_num_pages, get_query_var('paged'));
        // endif;
        ?>
    </div>
<?php else : ?>
    見つかりませんでした。
<?php endif;
wp_reset_postdata(); ?>

<?php get_footer(); ?>