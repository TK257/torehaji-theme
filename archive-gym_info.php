<?php get_header(); ?>
<article>
  <section>
    <div class="container"> 
      <div class="main-waku">
        <div class="breadcrumb"><?php get_template_part('functions/breadcrumb'); ?></div>
        <h1>全国のフィットネスジム・トレーニングジム検索</h1>
        <div class="search">
          <div class="searchta"><?php include("gym-searchform.php"); ?></div>
        </div>
        <h2 class="kon">
          全国のフィットネスジム・トレーニングジム一覧<?php if(have_posts()): ?><?php while(have_posts()): the_post(); ?></h2>
        <div class="gymlist-waku">
          <div class="gymlist-gymkind">
            <ul><?php foreach(get_field('gym_kind')as $data):?>
              <li><?php echo $data;?></li><?php endforeach;?>
            </ul>
          </div>
          <div class="gymlist-caset">
            <div class="gymlist-name"><a href="<?php the_permalink(); ?>"><?php the_field('gym_name'); ?></a></div>
            <div>住所：<?php the_field('address'); ?></div>
            <div>アクセス:<?php the_field('access'); ?></div>
          </div>
          <div class="setsubi">
            <ul><?php foreach(get_field('facility')as $data):?>
              <li><?php echo $data;?></li><?php endforeach;?>
            </ul>
          </div>
          <div class="gymlist-detail">
            <div class="detailthum"><?php if(get_field('gym_photo01')):?><img src="<?php the_field('gym_photo01'); ?>" alt="<?php the_field('gym_name'); ?>の外観"><?php endif; ?></div>
            <div class="detailpoint-waku">
              <ul class="recpoint"><?php if (!empty(get_field('point1_title'))) :?>
                <li>
                  <?php the_field('point1_title'); ?><?php endif; ?><?php if (!empty(get_field('point2_title'))) :?></li>
                <li>
                  <?php the_field('point2_title'); ?><?php endif; ?><?php if (!empty(get_field('point3_title'))) :?></li>
                <li><?php the_field('point3_title'); ?><?php endif; ?> </li>
              </ul>
            </div><?php if (!empty(get_field('aflink'))) :?>
          </div>
          <div class="gymlist-bottum">
            <button class="btn2 btn2-blue"><a href="<?php the_field('aflink'); ?>">見学やお申込みはこちらから</a></button>
            <button class="btn2 btn2-orange"><a href="<?php the_field('aflink'); ?>">公式サイトでもっと詳しく</a></button><?php endif; ?>
          </div>
        </div><?php endwhile;?>
<?php endif;?>  
        <div><?php get_template_part('functions/pagenation'); ?></div>
      </div>
    </div>
  </section>
</article><?php get_footer(); ?>