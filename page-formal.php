<?php

/** Template Name:フォーマル */ get_header(); ?>
<main>
  <article>
    <section>
      <div class="container">
        <div class="page_formal"><?php if (have_posts()) : ?>
            <?php while (have_posts()) : the_post(); ?>
              <h1 class="text-c"><?php the_title(); ?></h1>
              <div class="page_inner"><?php the_content(); ?></div><?php endwhile; //繰り返し処理終了 
                                                                    ?>
          <?php else : //投稿がない場合 
          ?> 記事が見つかりません。
          <?php endif; //条件分岐終了 
          ?>
        </div>
        <div class="breadcrumb"><?php get_template_part('functions/breadcrumb'); ?></div>
      </div>
    </section>
  </article>
</main><?php get_footer(); ?>