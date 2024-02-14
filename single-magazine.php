<?php /** * Template Name: magazine *//** * Template Post Type: post*/  get_header(); ?>
<article>
  <section>
    <div class="container"> 
      <div class="main-waku">
        <div class="breadcrumb"><?php get_template_part('functions/breadcrumb'); ?></div>
        <h1><?php echo get_the_title(); ?></h1>
        <div> 
          <div class="post-thumail"><?php the_post_thumbnail(); ?></div>
        </div>
        <div class="content"> 
          <div>
            <?php while ( have_posts() ) : the_post(); ?><?php the_content(); ?>
<?php endwhile; ?>
          </div>
        </div>
      </div>
    </div>
  </section>
</article><?php get_footer(); ?>