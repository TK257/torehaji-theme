<?php get_header(); ?>
<article>
  <section>
    <div class="container"> 
      <div class="breadcrumb"><?php get_template_part('functions/breadcrumb'); ?></div>
      <h1 class="gym"><?php echo get_the_title(); ?></h1>
      <div>
        <?php while ( have_posts() ) : the_post(); ?><?php the_content(); ?>
<?php endwhile; ?>
      </div>
    </div>
  </section>
  <section> </section>
</article><?php get_footer(); ?>