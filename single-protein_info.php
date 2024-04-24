<?php /** * Template Name: Protein *//** * Template Post Type: post,protein_info */  get_header(); ?>
<article>
  <section>
    <div class="container"> 
      <div class="breadcrumb"><?php get_template_part('functions/breadcrumb'); ?></div>
      <h1><?php echo get_the_title(); ?></h1>
      <div class="itemtitle"> プロテインの種類
        <div class="itembox itembox_blue">
          <ul>
            <li><?php $terms = get_the_terms($post->ID, 'protein_type'); foreach($terms as $term): echo $term->name; ?> <?php endforeach;?></li>
          </ul>
        </div>
      </div>
      <div class="itemtitle">プロテインのブランド
        <div class="itembox itembox_darkblue">
          <ul>
            <li><?php $terms = get_the_terms($post->ID, 'protein_brand'); foreach($terms as $term): echo $term->name; ?> <?php endforeach;?></li>
          </ul>
        </div>
      </div>
      <div class="itemtitle">フレーバーの種類
        <div class="itembox itembox_border">
          <ul><?php $terms = get_the_terms($post->ID, 'protein_flavor'); foreach($terms as $term): { echo '<li>'; echo $term->name; echo '</li>';}?> <?php endforeach;?></ul>
        </div>
      </div>
      <p class="flex-center-center">パッケージ画像</p><?php the_field('link'); ?>
      <div class="slideshow-protein">
        <div id="slideshow-image"><img src="<?php if (!empty(get_field('photo01'))) :?><?php echo get_template_directory_uri(); ?>/assets/img/protein/<?php the_field('photo01'); ?>.webp<?php endif; ?>" alt="<?php the_field('altphoto01'); ?>"></div>
        <ul class="thumbnail" id="thumbnail">
          <li><img src="<?php if (!empty(get_field('photo01'))) :?><?php echo get_template_directory_uri(); ?>/assets/img/protein/<?php the_field('photo01'); ?>.webp<?php endif; ?>" alt="<?php the_field('altphoto01'); ?>"></li><?php if (!empty(get_field('photo02'))) :?>
          <li><img src="<?php echo get_template_directory_uri(); ?>/assets/img/protein/<?php the_field('photo02'); ?>.webp" alt="<?php the_field('altphoto02'); ?>"></li><?php endif; ?>
<?php if (!empty(get_field('photo03'))) :?>
          <li><img src="<?php echo get_template_directory_uri(); ?>/assets/img/protein/<?php the_field('photo03'); ?>.webp" alt="<?php the_field('altphoto03'); ?>"></li><?php endif; ?>
<?php if (!empty(get_field('photo04'))) :?>
          <li><img src="<?php echo get_template_directory_uri(); ?>/assets/img/protein/<?php the_field('photo04'); ?>.webp" alt="<?php the_field('altphoto04'); ?>"></li><?php endif; ?>
<?php if (!empty(get_field('photo05'))) :?>
          <li><img src="<?php echo get_template_directory_uri(); ?>/assets/img/protein/<?php the_field('photo05'); ?>.webp" alt="<?php the_field('altphoto05'); ?>"></li><?php endif; ?>
<?php if (!empty(get_field('photo06'))) :?>
          <li><img src="<?php echo get_template_directory_uri(); ?>/assets/img/protein/<?php the_field('photo06'); ?>.webp" alt="<?php the_field('altphoto06'); ?>"></li><?php endif; ?>
<?php if (!empty(get_field('photo07'))) :?>
          <li><img src="<?php echo get_template_directory_uri(); ?>/assets/img/protein/<?php the_field('photo07'); ?>.webp" alt="<?php the_field('altphoto07'); ?>"></li><?php endif; ?>
<?php if (!empty(get_field('photo08'))) :?>
          <li><img src="<?php echo get_template_directory_uri(); ?>/assets/img/protein/<?php the_field('photo08'); ?>.webp" alt="<?php the_field('altphoto08'); ?>"></li><?php endif; ?>
<?php if (!empty(get_field('photo09'))) :?>
          <li><img src="<?php echo get_template_directory_uri(); ?>/assets/img/protein/<?php the_field('photo09'); ?>.webp" alt="<?php the_field('altphoto09'); ?>"></li><?php endif; ?>
<?php if (!empty(get_field('photo10'))) :?>
          <li><img src="<?php echo get_template_directory_uri(); ?>/assets/img/protein/<?php the_field('photo10'); ?>.webp" alt="<?php the_field('altphoto10'); ?>"></li><?php endif; ?>
<?php if (!empty(get_field('photo11'))) :?>
          <li><img src="<?php echo get_template_directory_uri(); ?>/assets/img/protein/<?php the_field('photo11'); ?>.webp" alt="<?php the_field('altphoto11'); ?>"></li><?php endif; ?>
<?php if (!empty(get_field('photo12'))) :?>
          <li><img src="<?php echo get_template_directory_uri(); ?>/assets/img/protein/<?php the_field('photo12'); ?>.webp" alt="<?php the_field('altphoto12'); ?>"></li><?php endif; ?>
<?php if (!empty(get_field('photo13'))) :?>
          <li><img src="<?php echo get_template_directory_uri(); ?>/assets/img/protein/<?php the_field('photo13'); ?>.webp" alt="<?php the_field('altphoto13'); ?>"></li><?php endif; ?>
<?php if (!empty(get_field('photo14'))) :?>
          <li><img src="<?php echo get_template_directory_uri(); ?>/assets/img/protein/<?php the_field('photo14'); ?>.webp" alt="<?php the_field('altphoto14'); ?>"></li><?php endif; ?>
<?php if (!empty(get_field('photo15'))) :?>
          <li><img src="<?php echo get_template_directory_uri(); ?>/assets/img/protein/<?php the_field('photo15'); ?>.webp" alt="<?php the_field('altphoto15'); ?>"></li><?php endif; ?>
        </ul>
      </div>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
      <div class="btn-basyo"><?php if (!empty(get_field('amazonlink'))) :?>
        <div class="flex-center-center">
          <button class="btn3 btn3-amazon"><a href="<?php echo get_field('amazonlink'); ?>" rel="nofollow">アマゾンで見る</a></button>
        </div><?php endif; ?>
<?php if (!empty(get_field('iherblink'))) :?>
        <div class="flex-center-center">
          <button class="btn3 btn3-iherb"><a href="<?php echo get_field('iherblink'); ?>" rel="nofollow">iHerbで見る</a></button>
        </div><?php endif; ?>
<?php if (!empty(get_field('aflink'))) :?>
        <div class="flex-center-center">
          <button class="btn3 btn3-official"><?php echo get_field('aflink'); ?></button>
        </div><?php endif; ?>
<?php if (!empty(get_field('rakutenlink'))) :?>
        <div class="flex-center-center">
          <button class="btn3 btn3-rakuten"><a href="<?php echo get_field('rakutenlink'); ?>" rel="nofollow">楽天市場で見る</a></button>
        </div><?php endif; ?>
<?php if (!empty(get_field('yahoolink'))) :?>
        <div class="flex-center-center">
          <button class="btn3 btn3-yahoo"><a href="<?php echo get_field('yahoolink'); ?>" rel="nofollow">ヤフーショッピングで見る</a></button>
        </div><?php endif; ?>
      </div>
      <h2 class="h2_dotglay"><?php the_field('name'); ?>の商品説明</h2><?php the_content(); ?>
      <div class="btn-basyo"><?php if (!empty(get_field('amazonlink'))) :?>
        <div class="flex-center-center">
          <button class="btn3 btn3-amazon"><a href="<?php echo get_field('amazonlink'); ?>" rel="nofollow">アマゾンで見る</a></button>
        </div><?php endif; ?>
<?php if (!empty(get_field('iherblink'))) :?>
        <div class="flex-center-center">
          <button class="btn3 btn3-iherb"><a href="<?php echo get_field('iherblink'); ?>" rel="nofollow">iHerbで見る</a></button>
        </div><?php endif; ?>
<?php if (!empty(get_field('aflink'))) :?>
        <div class="flex-center-center">
          <button class="btn3 btn3-official"><?php echo get_field('aflink'); ?></button>
        </div><?php endif; ?>
<?php if (!empty(get_field('rakutenlink'))) :?>
        <div class="flex-center-center">
          <button class="btn3 btn3-rakuten"><a href="<?php echo get_field('rakutenlink'); ?>" rel="nofollow">楽天市場で見る</a></button>
        </div><?php endif; ?>
<?php if (!empty(get_field('yahoolink'))) :?>
        <div class="flex-center-center">
          <button class="btn3 btn3-yahoo"><a href="<?php echo get_field('yahoolink'); ?>" rel="nofollow">ヤフーショッピングで見る</a></button>
        </div><?php endif; ?>
      </div>
    </div>
  </section>
  <section> </section>
</article><?php get_footer(); ?>