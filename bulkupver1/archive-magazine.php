<?php get_header(); ?>
<article>
  <section>
    <div class="container"> 
      <div class="main-waku">
        <div class="breadcrumb"><?php get_template_part('functions/breadcrumb'); ?></div>
        <h1>
          掲載記事の一覧<?php if(have_posts()): ?><?php while(have_posts()): the_post(); ?></h1>
        <div class="gymlist-waku">
          <div class="gymlist-caset">
            <h2 class="ar-list"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
          </div>
          <div class="gymlist-detail">
            <div class="detailthum"><img src="<?php the_post_thumbnail_url(); ?>"></div>
            <div class="detailpoint-waku"><?php the_excerpt(); ?> </div>
          </div>
        </div><?php endwhile;?>
<?php endif;?>  
        <div><?php get_template_part('functions/pagenation'); ?></div>
      </div>
    </div>
  </section>
</article><?php get_footer(); ?>