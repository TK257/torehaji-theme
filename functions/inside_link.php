<h2 class="ko-midashi article-list-title">プロテイン関連新着一覧</h2>
<div class="flexbox-sb article-list">
  <?php
  $args = array('post_type' => 'protein', 'posts_per_page' => 6);
  $the_query = new WP_Query($args);
  if ($the_query->have_posts()) : ?>
    <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
      <article class="box-kiji">
        <div class="thum shadow">
          <a href="<?php the_permalink(); ?>">
            <img src="<?= the_post_thumbnail_url() ?>" alt="<?= get_post_meta(get_post_thumbnail_id(), '_wp_attachment_image_alt', true) ?: 'トレハジ画像準備中' ?>">
          </a>
        </div>
        <h3 class="text-cut pcnone article-title">
          <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
        </h3>
        <h3 class="text-cut spnone article-title">
          <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
        </h3>
      </article>
    <?php endwhile; ?>
    <?php wp_reset_query(); ?>
  <?php endif; ?>
</div>
<h2 class="ko-midashi article-list-title">パーソナルジム関連新着一覧</h2>
<div class="flexbox-sb article-list">
  <?php
  $args = array('post_type' => 'personal_gym', 'posts_per_page' => 4);
  $the_query = new WP_Query($args);
  if ($the_query->have_posts()) : ?>
    <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
      <article class="box-kiji">
        <div class="thum shadow">
          <a href="<?php the_permalink(); ?>">
            <img src="<?= the_post_thumbnail_url() ?>" alt="<?= get_post_meta(get_post_thumbnail_id(), '_wp_attachment_image_alt', true) ?: 'トレハジ画像準備中' ?>">
          </a>
        </div>
        <h3 class="text-cut pcnone article-title">
          <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
        </h3>
        <h3 class="text-cut spnone article-title">
          <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
        </h3>
      </article>
    <?php endwhile; ?>
    <?php wp_reset_query(); ?>
  <?php endif; ?>
</div>