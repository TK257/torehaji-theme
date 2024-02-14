<?php if(!empty($_GET)): ?>
  <?php
    if(get_query_var('category')) {
      $args = array(
        'post_type' => 'protein_info',
        'tax_query' => array(
          array(
            'taxonomy' => 'protein_type',
            'field' => 'slug',
            'terms' => get_query_var('category')
          )
        )
      );
    } else if(get_query_var('tags')) {
      $args = array(
        'post_type' => 'protein_info',
        'tax_query' => array(
          array(
            'taxonomy' => 'protein_brand',
            'field' => 'slug',
            'terms' => get_query_var('tags')
          )
        )
      );
    } else {
      $args = array(
        'post_type' => 'protein_info'
      );
    }
    $the_query = new WP_Query($args);
    if($the_query->have_posts()):
  ?>
    <?php while($the_query->have_posts()): $the_query->the_post(); ?>

      <!-- 投稿記事の内容 -->

    <?php endwhile; ?>
  <?php else: ?>
    <p>投稿記事がありません</p>
  <?php endif; ?>
<?php endif; ?>