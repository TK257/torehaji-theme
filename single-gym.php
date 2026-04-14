<?php /** * Template Name: ブランド別テンプレ *//** * Template Post Type: personal_gym */  get_header(); ?>
<article>
  <section>
    <div class="container"> 
      <div class="breadcrumb"><?php get_template_part('functions/breadcrumb'); ?></div>
      <div><?php while ( have_posts() ) : the_post(); ?></div>
      <div class="thum"><?php the_post_thumbnail(); ?></div>
      <h1><?php echo get_the_title(); ?></h1>
      <div class="text-r"><span>最終更新日:<time datetime="<?php echo get_the_modified_time('c'); ?>"><?php the_modified_date('Y年m月d日'); ?></time></span></div>
      <h2><?php echo get_field('gymname'); ?>の特徴</h2>
      <div><?php echo get_field('tokucho'); ?></div>
      <h3 class="gym">利用者に嬉しい設備・サービス一覧</h3>
      <div>入会前に気になるポイントに絞って紹介しています。ココに記載がないサービスも多いので、詳細は公式サイトでご確認ください。</div>
      <div class="kadomaru-li white bgc-clearblue-li font-12 margin-b5">
        <ul><?php foreach(get_field('service')as $data):?>
          <li><?php echo $data;?></li><?php endforeach;?>
        </ul>
      </div><?php if (!empty(get_field('af-official'))) :?>
      <div class="margin-tb40"><?php echo get_field('af-official'); ?></div><?php endif; ?>
      <h3 class="margin-t5b3"><img src="<?php echo get_template_directory_uri() . '/assets/img/common/osusume.webp'; ?>" alt="編集部おすすめポイント"></h3>
      <div><?php echo get_field('osusume'); ?></div><?php if (!empty(get_field('af-official'))) :?>
      <div class="margin-tb40"><?php echo get_field('af-official'); ?></div><?php endif; ?>
      <h2>人気の料金プラン</h2><?php echo get_field('popular-plan'); ?>
<?php if (!empty(get_field('af-plan'))) :?>
      <div class="margin-tb40"><?php echo get_field('af-plan'); ?></div><?php endif; ?>
      <!--h2 PHOTO-->
      <!--div.slideshow
      div#slideshow-image
        img(src!= "<?php echo get_template_directory_uri() . '/assets/img/personal/' . get_field('gym_photo01') . '.webp'; ?>")
      ul#thumbnail.thumbnail
        li: img(src!= "<?php echo get_template_directory_uri() . '/assets/img/personal/' . get_field('gym_photo01') . '.webp'; ?>")
      -->
      <h2>実際の口コミ</h2><?php remove_filter('the_content', 'wpautop'); the_content(); add_filter('the_content', 'wpautop'); endwhile; ?>
<?php if (!empty(get_field('af-trial'))) :?>
      <div class="margin-tb40"><?php echo get_field('af-trial'); ?></div><?php endif; ?>
      <h2>強み・他社との違い</h2>
      <div><?php echo get_field('strength'); ?></div>
      <h2>よくある質問</h2>
      <div><?php echo get_field('faq_html'); ?></div><?php if (!empty(get_field('af-official'))) :?>
      <div class="margin-tb40"><?php echo get_field('af-official'); ?></div><?php endif; ?>
<?php if (!empty(get_field('af-plan'))) :?>
      <div class="margin-tb40"><?php echo get_field('af-plan'); ?></div><?php endif; ?>
<?php if (!empty(get_field('af-trial'))) :?>
      <div class="margin-tb40"><?php echo get_field('af-trial'); ?></div><?php endif; ?>  
      <section>
        <div class="gym-tag-title">
          <div class="gym-tag gym-tag_border">
            <ul><?php $terms = get_the_terms($post->ID, 'gym_tag'); if ($terms && !is_wp_error($terms)) { foreach ($terms as $term) { $term_link = get_term_link($term); if (!is_wp_error($term_link)) { echo '<a href="' . esc_url($term_link) . '"><li>' . esc_html($term->name) . '</li></a>'; } } } ?></ul>
          </div>
        </div>
      </section>
      <section><?php get_template_part('functions/author-box'); ?>
<?php get_template_part('functions/inside_link'); ?>
      </section>
    </div>
  </section>
  <section> </section>
</article><?php get_footer(); ?>