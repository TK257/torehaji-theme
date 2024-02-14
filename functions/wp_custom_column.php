<?php
// 管理画面のカスタム投稿一覧にカテゴリー(ターム)を表示参考→https://junpei-sugiyama.com/wp-term-display/
function add_custom_column( $protein ) {
  $protein['protein_type'] = '種類'; // 『area』はタクソノミースラッグ(複数設定可)
  $protein['protein_brand'] = 'ブランド'; // 『area』はタクソノミースラッグ(複数設定可)
  $protein['protein_flavor'] = '味'; // 『area』はタクソノミースラッグ(複数設定可)
  return $protein;
}
add_filter('manage_protein_info_posts_columns', 'add_custom_column'); // ここの『news』はカスタム投稿タイプスラッグ
function add_custom_column_id($column_name, $id) {
  $terms = get_the_terms($id, $column_name);
  if ( $terms && ! is_wp_error( $terms ) ){
    $protein_info_links = array(); // ここの『news』は変えなくてもOKだが、カスタム投稿タイプスラッグがおすすめ
    foreach ( $terms as $term ) {
      $protein_info_links[] = $term->name;
    }
    echo join( ", ", $protein_info_links );
  }
}
add_action('manage_protein_info_posts_custom_column', 'add_custom_column_id', 10, 2); // ここの『news』はカスタム投稿タイプスラッグ