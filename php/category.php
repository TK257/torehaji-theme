<?php get_header(); ?>
<article>
  <section>
    <div class="container"> 
      <div class="main-waku">
        <div class="breadcrumb"><?php get_template_part('breadcrumb'); ?></div>
        <h1 class="eriah1"><?php $cat = get_the_category(); foreach ( $cat as $category ) {echo $category->name ;}?>のフィットネスジム・トレーニングジム</h1>
        <div class="seacheria">
          <p><i class="fa-solid fa-magnifying-glass"></i>検索条件</p>
          <div class="erianame"><?php $cat = get_the_category(); foreach ( $cat as $category ) {echo $category->name ;}?></div>
          <div class="eriacity">より詳しいを追加する
            <ul>
              <li>市レベル</li>
              <li>市レベル</li>
            </ul>
          </div><?php $area_terms = get_terms('gym_area_category'); echo'<pre>'; print_r($area_terms);echo '</pre>';?>
          <div class="setsubi"><?php $tags = get_tags();?>
            <ul><?php foreach ( $tags as $tag) {?>
              <li><?php echo $tag->name ;?></li><?php } ?>
            </ul>
          </div><?php $args = array('post_type' => 'gym_info','posts_per_page' => 5 ); $the_query = new WP_Query($args); if ($the_query->have_posts()) :?>
<?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
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
            <div class="detailthum"><img src="<?php echo get_template_directory_uri(); ?>/dist/assets/img/_min/01.jpg"></div>
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
            <button class="btn2-blue"><a href="<?php the_field('aflink'); ?>">見学やお申込みはこちらから</a></button>
            <button class="btn2-orange"><a href="<?php the_field('aflink'); ?>">公式サイトでもっと詳しく</a></button><?php endif; ?>
          </div><?php endwhile;?>
<?php wp_reset_query(); ?>
<?php endif;?>  
        </div>
      </div>
    </div>
  </section>
</article><?php get_footer(); ?>