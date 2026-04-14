<?php get_header(); ?>
<main class="l-main mw800 margin-t20a" id="main">
  <section class="archive-hero archive-hero--personal">
    <div class="archive-hero__inner">
      <h1 class="archive-title">続かない人はパーソナルへ</h1>
      <p class="archive-lead">
        トレハジのSTEP3は、「ひとりでは続かない」と感じた人のためのパーソナルジム。<br>
        横浜・千葉エリアを中心に、料金や通いやすさ、雰囲気などをくらべて選べるようにまとめています。
      </p>
    </div>
    <div class="archive-hero__image"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/personal-gym-top.webp" alt="パーソナルジムのイメージ"></div>
  </section>
  <section class="archive-list">
    <div class="archive-list__inner"><?php if ( have_posts() ) : ?>
      <div class="archive-cards"><?php while ( have_posts() ) : the_post(); ?>
        <article class="archive-card"><a class="archive-card__link" href="<?php the_permalink(); ?>">
            <div class="archive-card__thumb">
              <?php if ( has_post_thumbnail() ) : ?>
              <?php the_post_thumbnail('medium_large'); ?>
              <?php else : ?><img src="<?php echo get_template_directory_uri(); ?>/assets/img/noimg.png" alt=""><?php endif; ?>
            </div>
            <div class="archive-card__body">
              <h2 class="archive-card__title"><?php the_title(); ?></h2>
              <p class="archive-card__meta"><?php echo get_the_date('Y.m.d'); ?></p>
            </div></a></article><?php endwhile; ?>
      </div>
      <div class="margin-t20"><?php get_template_part('functions/pagination'); ?></div><?php else : ?>
      <p class="archive-empty">
        現在、パーソナルジムの情報を整理中です。<br>
        横浜・千葉エリアから順に、通いやすさ・料金・特徴を比較できる記事を公開していきます。
      </p><?php endif; ?>
    </div>
  </section>
</main><?php get_footer(); ?>