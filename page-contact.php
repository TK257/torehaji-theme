<?php /** Template Name:publish-request */ get_header(); ?>
<main>
  <article>
    <section>
      <div class="container">
        <div class="breadcrumb"><?php get_template_part('functions/breadcrumb'); ?></div>
        <div class="page_base">
          <h1 class="center">掲載のお申し込み</h1>
          <div class="div-nomal">掲載に費用は必要ございませんので、お気軽に以下フォームよりお申し込みください。</div>
          <div class="page_inner"><?php echo do_shortcode('[contact-form-7 id="63c45cd" title="publish-request"]'); ?></div>
          <script>
            document.addEventListener('wpcf7mailsent', function(event) {
              location = 'http://bulkup.local/';
            }, false);
          </script>
        </div>
      </div>
    </section>
  </article>
</main><?php get_footer(); ?>