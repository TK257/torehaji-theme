<?php get_header(); ?>
<main class="l-main p-page p-front-page">
  <article>
    <section>
      <div class="container">
        <div class="breadcrumb"><?php get_template_part('functions/breadcrumb'); ?></div>
        <h1>お探しのページが見つかりません。</h1>
        <div>別の条件で再度お探しください。</div>
        <h2 class="kon">全国のフィットネスジム・トレーニングジムを探す</h2>
        <div class="seacheria">
          <div class="eriacity"><i class="fa-solid fa-magnifying-glass"></i>都道府県から探す<br>都道府県を選択すると市区町村を選択できる画面に移動します。
            <ul class="area"><?php  $current_term = get_query_var('gym_area'); $term_object = get_queried_object($post->ID, $current_term); $parent_term_id = $term_object->parent == 0 ? $term_object->term_id : $term_object->parent; $parent_term = get_term($parent_term_id); $all_terms = get_terms('gym_area'); $child_term_ids = array(); foreach($all_terms as $term) { if($term->parent == $parent_term_id) { array_push($child_term_ids, $term->term_id); } } foreach ($child_term_ids as $child_term_id) {  echo '<li>'; echo '<a href="' . home_url() . '/gym-area/' . get_term($child_term_id, 'gym_area')->slug . '">'; print_r(get_term($child_term_id, 'gym_area')->name); echo '</a></li>';} ?></ul>
          </div>
        </div>
        <h2 class="kon">プロテインを探す</h2>
        <div class="seacheria">
          <div class="eriacity"><i class="fa-solid fa-magnifying-glass"></i>種類から探す
            <ul class="area"><?php $terms = get_terms('protein_type'); foreach ( $terms as $term ) { if($term->parent == 0) { echo '<li>'; echo  '<a href="'.home_url().'/protein-type/'.$term->slug.'">'.$term->name.'</a></li>';}}?></ul>
          </div>
          <div class="eriacity"><i class="fa-solid fa-magnifying-glass"></i>ブランドから探す
            <ul class="area"><?php  $terms = get_terms('protein_brand'); foreach ( $terms as $term ) {  echo '<li>'; echo  '<a href="'.home_url().'/protein-brand/'.$term->slug.'">'.$term->name.'</a></li>';}?></ul>
          </div>
          <div class="eriacity"><i class="fa-solid fa-magnifying-glass"></i>フレーバーから探す
            <ul class="area"><?php  $terms = get_terms('protein_flavor'); foreach ( $terms as $term ) {  echo '<li>'; echo  '<a href="'.home_url().'/protein-flavor/'.$term->slug.'">'.$term->name.'</a></li>';}?></ul>
          </div>
        </div>
      </div>
    </section>
  </article>
</main><?php get_footer(); ?>