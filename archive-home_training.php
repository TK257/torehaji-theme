<?php get_header(); ?>
<main class="l-main mw800 margin-t20a" id="main">
  <section class="archive-hero archive-hero--home">
    <div class="archive-hero__inner">
      <h1 class="archive-title">自宅トレで習慣をつくる</h1>
      <p class="archive-lead">
        トレハジのSTEP2は、自宅でできるやさしいトレーニング。<br>
        5分だけの運動や、道具なしでできるメニューなど、無理なく続けられる「小さな一歩」を集めていきます。
      </p>
    </div>
    <div class="archive-hero__image"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/home-training-top.webp" alt="自宅トレのイメージ"></div>
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
        ただいま、自宅で無理なく続けられるトレーニング記事を準備中です。<br>
        「まずは5分だけ」をテーマに、順次コンテンツを公開していきます。
      </p><?php endif; ?>
    </div>
  </section>
</main><?php get_footer(); ?>