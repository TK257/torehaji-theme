<?php get_header(); ?>
<article>
  <section>
    <div class="container">
      <div class="main-waku">
        <div class="breadcrumb"><?php get_template_part('breadcrumb'); ?></div>
        <h1 class="eriah1"><?php single_term_title(); ?>のフィットネスジム・トレーニングジ</h1>
        <div class="seacheria">
          <div class="eriacity"><i class="fa-solid fa-magnifying-glass"></i>他のエリアを探す
            <ul class="area"><?php $terms = get_terms('gym_brand');
                              $parent_term = null;
                              foreach ($terms as $term) {
                                if ($term->parent == 0) {
                                  $parent_term = $term;
                                }
                              }
                              $child_term_ids = get_term_children($parent_term->term_id, 'gym_brand');
                              foreach ($child_term_ids as $child_term_id) {
                                echo '<li>';
                                echo '<a href="' . home_url() . '/gym-brand/' . get_term($child_term_id, 'gym_brand')->slug . '">';
                                print_r(get_term($child_term_id, 'gym_brand')->name);
                                echo '</li>';
                              } ?></ul>
          </div><?php $args = array('post_type' => 'gym_info', 'posts_per_page' => 5);
                $the_query = new WP_Query($args);
                if ($the_query->have_posts()) : ?>
            <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
        </div>
        <div class="gymlist-waku">
          <div class="gymlist-gymkind">
            <ul><?php foreach (get_field('gym_kind') as $data) : ?>
                <li><?php echo $data; ?></li><?php endforeach; ?>
            </ul>
          </div>
          <div class="gymlist-caset">
            <div class="gymlist-name"><a href="<?php the_permalink(); ?>"><?php the_field('gym_name'); ?></a></div>
            <div>住所：<?php the_field('address'); ?></div>
            <div>アクセス:<?php the_field('access'); ?></div>
          </div>
          <div class="setsubi">
            <ul><?php foreach (get_field('facility') as $data) : ?>
                <li><?php echo $data; ?></li><?php endforeach; ?>
            </ul>
          </div>
          <div class="gymlist-detail">
            <div class="detailthum"><?php if (get_field('gym_photo01')) : ?><img src="<?php the_field('gym_photo01'); ?>"><?php endif; ?></div>
            <div class="detailpoint-waku">
              <ul class="recpoint"><?php if (!empty(get_field('point1_title'))) : ?>
                  <li>
                    <?php the_field('point1_title'); ?><?php endif; ?><?php if (!empty(get_field('point2_title'))) : ?></li>
                  <li>
                    <?php the_field('point2_title'); ?><?php endif; ?><?php if (!empty(get_field('point3_title'))) : ?></li>
                  <li><?php the_field('point3_title'); ?><?php endif; ?> </li>
              </ul>
            </div><?php if (!empty(get_field('aflink'))) : ?>
          </div>
          <div class="gymlist-bottum">
            <button class="btn2-blue"><a href="<?php the_field('aflink'); ?>">見学やお申込みはこちらから</a></button>
            <button class="btn2-orange"><a href="<?php the_field('aflink'); ?>">公式サイトでもっと詳しく</a></button><?php endif; ?>
          </div><?php endwhile; ?>
        <?php wp_reset_query(); ?>
      <?php endif; ?>
        </div>
      </div>
    </div>
  </section>
</article><?php get_footer(); ?>