<?php get_header(); ?>
<article>
  <section>
    <div class="container">
      <div class="breadcrumb"><?php get_template_part('breadcrumb'); ?></div>
      <h1 class="eriah1"><?php single_term_title(); ?>の記事一覧</h1>
      <div class="flexbox-sb">
         <?php if(have_posts()): ?><?php while(have_posts()): the_post(); ?>          
        <div class="box-kiji"><a class="flexbox-sp" href="<?php the_permalink(); ?>">
            <h3 class="pcnone text-cut"><?php the_title(); ?></h3>
            <div class="thum"><?php if (has_post_thumbnail()): ?>
<?php the_post_thumbnail('thumbnail'); ?>
<?php else: ?>
<img src="https://torehaji.com/wp-content/uploads/2025/06/torehaji-default.webp" alt="トレハジ">
<?php endif; ?>
            </div>
            <h3 class="spnone text-cut"><?php the_title(); ?></h3></a></div><?php endwhile;?>
<?php endif;?> 
      </div>
      <div><?php get_template_part('functions/pagenation'); ?></div>
    </div>
  </section>
</article><?php get_footer(); ?>