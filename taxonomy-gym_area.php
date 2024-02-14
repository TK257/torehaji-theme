<?php get_header(); ?>
<article>
  <section>
    <div class="container"> 
      <div class="main-waku">
        <div class="breadcrumb"><?php get_template_part('functions/breadcrumb'); ?></div>
        <h1 class="eriah1"><?php single_term_title(); ?>のフィットネスジム・トレーニングジム</h1>
        <div class="seacheria">
          <div class="eriacity"><i class="fa-solid fa-magnifying-glass"></i>近隣のエリアを探す
            <ul class="area"><?php  $current_term = get_query_var('gym_area'); $term_object = get_queried_object($post->ID, $current_term); $parent_term_id = $term_object->parent == 0 ? $term_object->term_id : $term_object->parent; $parent_term = get_term($parent_term_id); $all_terms = get_terms('gym_area'); $child_term_ids = array(); foreach($all_terms as $term) { if($term->parent == $parent_term_id) { array_push($child_term_ids, $term->term_id); } } foreach ($child_term_ids as $child_term_id) {  echo '<li>'; echo '<a href="' . home_url() . '/gym-area/' . get_term($child_term_id, 'gym_area')->slug . '">'; print_r(get_term($child_term_id, 'gym_area')->name); echo '</a></li>';} ?></ul>
          </div><?php if(have_posts()): ?><?php while(have_posts()): the_post(); ?>
        </div>
        <div class="gymlist-waku">
          <div class="gymlist-gymkind">
            <ul><?php foreach(get_field('gym_kind')as $data):?>
              <li><?php echo $data;?></li><?php endforeach;?>
            </ul>
          </div>
          <div class="gymlist-caset">
            <div class="gymlist-name"><a href="<?php the_permalink(); ?>"><?php the_field('gym_name'); ?></a></div>
            <div>住所：<?php the_field('address'); ?></div>
            <div>アクセス:<?php the_field('access'); ?></div>
          </div>
          <div class="setsubi">
            <ul><?php foreach(get_field('facility')as $data):?>
              <li><?php echo $data;?></li><?php endforeach;?>
            </ul>
          </div>
          <div class="gymlist-detail">
            <div class="detailthum"><?php if(get_field('gym_photo01')):?><img src="<?php the_field('gym_photo01'); ?>"><?php endif; ?></div>
            <div class="detailpoint-waku">
              <ul class="recpoint"><?php if (!empty(get_field('point1_title'))) :?>
                <li>
                  <?php the_field('point1_title'); ?><?php endif; ?><?php if (!empty(get_field('point2_title'))) :?></li>
                <li>
                  <?php the_field('point2_title'); ?><?php endif; ?><?php if (!empty(get_field('point3_title'))) :?></li>
                <li><?php the_field('point3_title'); ?><?php endif; ?> </li>
              </ul>
            </div><?php if (!empty(get_field('aflink'))) :?>
          </div>
          <div class="gymlist-bottum">
            <button class="btn2 btn2-blue"><a href="<?php the_field('aflink'); ?>">見学やお申込みはこちらから</a></button>
            <button class="btn2 btn2-orange"><a href="<?php the_field('aflink'); ?>">公式サイトでもっと詳しく</a></button><?php endif; ?>
          </div><?php endwhile;?>
<?php endif;?>  
        </div>
        <div><?php get_template_part('functions/pagenation'); ?></div>
      </div>
    </div>
  </section>
</article><?php get_footer(); ?>