<?php get_header(); ?>
<main class="l-main p-page p-front-page">
  <article>
    <section>
      <div class="container">
        <div class="breadcrumb"><?php get_template_part('functions/breadcrumb'); ?></div><?php if ( have_posts() ) : ?>
<?php while ( have_posts() ) : the_post(); ?>
        <h2 class="kon"><?php the_title(); ?></h2>
        <div><?php the_content();?></div><?php endwhile; //繰り返し処理終了 ?>
<?php else : //投稿がない場合 ?> 記事が見つかりませんよ。
<?php endif; //条件分岐終了 ?>
      </div>
    </section>
  </article>
</main><?php get_footer(); ?>