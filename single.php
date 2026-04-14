<?php /** * Template Name: 基本テンプレ *//** * Template Post Type: personal_gym */  get_header(); ?>
<article>
  <section>
    <div class="container"> 
      <div class="breadcrumb"><?php get_template_part('functions/breadcrumb'); ?></div>
      <div><?php while ( have_posts() ) : the_post(); ?></div>
      <div class="thum"><?php the_post_thumbnail(); ?></div>
      <h1><?php echo get_the_title(); ?></h1>
      <div class="text-r"><span>最終更新日:<time datetime="<?php echo get_the_modified_time('c'); ?>"><?php the_modified_date('Y年m月d日'); ?></time></span></div><?php the_content(); ?>
<?php endwhile; ?>
      <div class="gym-tag-title">
        <div class="gym-tag gym-tag_border">
          <ul><?php $terms = get_the_terms($post->ID, 'gym_tag'); if ($terms && !is_wp_error($terms)) { foreach ($terms as $term) { $term_link = get_term_link($term); if (!is_wp_error($term_link)) { echo '<a href="' . esc_url($term_link) . '"><li>' . esc_html($term->name) . '</li></a>'; } } } ?></ul>
        </div>
      </div><?php get_template_part('functions/author-box'); ?>
<?php get_template_part('functions/inside_link'); ?>
    </div>
  </section>
  <section> </section>
</article><?php get_footer(); ?>