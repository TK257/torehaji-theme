<?php get_header(); ?>
<main class="l-main p-page p-front-page">
  <article>
    <section>
      <div class="container">
        <div class="breadcrumb"><?php get_template_part('functions/breadcrumb'); ?></div>
        <h1 class="text-c">お探しのページが見つかりません。</h1>
        <div class="thum"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/404.webp" alt="404エラー"></div>
        <div class="text-c"><a href="/">トップページへ戻る</a></div>
      </div>
    </section>
  </article>
</main><?php get_footer(); ?>