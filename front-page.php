<?php get_header(); ?>
<main class="l-main p-page p-front-page">
  <article>
    <section>
      <div class="container"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/top-cover-img1.webp">
        <h2 class="kon" id="prteinsearch">プロテイン検索</h2>
        <div class="search">
          <div class="searchta"><?php include("searchform.php"); ?></div>
        </div>
        <h2 class="kon">新規掲載プロテイン情報</h2>
        <div><?php $args = array('post_type' => 'protein_info','posts_per_page' => 5 ); $the_query = new WP_Query($args); if ($the_query->have_posts()) :?>
<?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
        </div>
        <div class="gymlist-waku">
          <div class="none gymlist-gymkind">
            <ul>
              <li><?php $terms = get_the_terms($post->ID, 'protein_type'); foreach($terms as $term): echo $term->name; ?> <?php endforeach;?></li>
            </ul>
          </div>
          <div class="gymlist-caset">
            <div class="gymlist-name"><a href="<?php the_permalink(); ?>"><?php the_field('name'); ?></a></div>
            <div class="flavor-list">
              <ul><?php $terms = get_the_terms($post->ID, 'protein_flavor'); foreach($terms as $term): { echo '<li>'; echo $term->name; echo '</li>'; }?> <?php endforeach;?></ul>
            </div>
            <div class="gymlist-detail">
              <div class="detailthum"> <img src="<?php if (!empty(get_field('photo01'))) :?><?php echo get_template_directory_uri(); ?>/assets/img/protein/<?php the_field('photo01'); ?>.webp<?php endif; ?>" alt="<?php the_field('altphoto01'); ?>"></div>
              <div class="detailpoint-waku">
                <table class="table-pc">
                  <tr> 
                    <th>1食分の量</th>
                    <td><?php the_field('gpermeel'); ?>g</td>
                    <th>１食あたりのタンパク質量</th>
                    <td><?php the_field('maxprotein'); ?>g </td>
                  </tr>
                  <tr>
                    <th>１食あたりの価格（税込み）</th>
                    <td>¥<?php the_field('pricepermeel'); ?></td>
                    <th>1gあたりの価格（税込み）</th>
                    <td>¥<?php the_field('priceperg'); ?></td>
                  </tr>
                </table>
                <table class="table-smp">
                  <tr> 
                    <th>1食分の量</th>
                    <td><?php the_field('gpermeel'); ?>g</td>
                  </tr>
                  <tr>
                    <th>１食あたりのタンパク質量</th>
                    <td><?php the_field('maxprotein'); ?>g </td>
                  </tr>
                  <tr>
                    <th>１食あたりの価格（税込み）</th>
                    <td>¥<?php the_field('pricepermeel'); ?></td>
                  </tr>
                  <tr>
                    <th>1gあたりの価格（税込み）</th>
                    <td>¥<?php the_field('priceperg'); ?></td>
                  </tr>
                  <div class="textsmall">＊フレーパーにより異なる場合があります。</div>
                </table>
                <div class="point-waku"><?php the_excerpt(); ?></div>
              </div>
            </div>
          </div>
          <div class="gymlist-bottum"></div><?php if (!empty(get_field('aflink'))) :?>
          <button class="btn2 btn2-blue"><?php echo get_field('aflink'); ?></button><?php endif; ?>
          <button class="btn2 btn2-orange"><a href="<?php the_permalink(); ?>">詳細ページはこちら</a></button><?php endwhile;?>
<?php endif;?>  
        </div>
        <h2 class="kon" id="gymsearch">フィットネスジム・トレーニングジム検索</h2>
        <div class="search">
          <div class="searchta"><?php include("gym-searchform.php"); ?></div>
        </div>
        <h2 class="kon">新規掲載フィットネス・トレーニングジム</h2>
        <div><?php $args = array('post_type' => 'gym_info','posts_per_page' => 5 ); $the_query = new WP_Query($args); if ($the_query->have_posts()) :?>
<?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
          <div class="gymlist-waku">
            <div class="gymlist-gymkind">
              <ul><?php foreach(get_field('gym_kind')as $data):?>
                <li><?php echo $data;?></li><?php endforeach;?>
              </ul>
            </div>
            <div class="gymlist-caset">
              <div class="gymlist-name"> <a href="<?php the_permalink(); ?>"><?php the_field('gym_name'); ?></a></div>
              <div>住所：<?php the_field('address'); ?></div>
              <div>アクセス:<?php the_field('access'); ?></div>
            </div>
            <div class="setsubi">
              <ul><?php foreach(get_field('facility')as $data):?>
                <li><?php echo $data;?></li><?php endforeach;?>
              </ul>
            </div>
            <div class="gymlist-detail">
              <div class="detailthum"><?php the_post_thumbnail(); ?></div>
              <div class="detailpoint-waku">
                <table class="table-pc">
                  <tr> 
                    <th>営業時間</th>
                    <td><?php the_field('business_hours'); ?></td>
                    <th>駐車場</th>
                    <td><?php the_field('parking'); ?></td>
                  </tr>
                  <tr>
                    <th>初期費用</th>
                    <td><?php the_field('initial_cost'); ?></td>
                    <th>月額・プラン料金</th>
                    <td><?php the_field('price1'); ?></td>
                  </tr>
                </table>
                <table class="table-smp">
                  <tr> 
                    <th>営業時間</th>
                    <td><?php the_field('business_hours'); ?></td>
                  </tr>
                  <tr>
                    <th>駐車場</th>
                    <td><?php the_field('parking'); ?></td>
                  </tr>
                  <tr>
                    <th>初期費用</th>
                    <td><?php the_field('initial_cost'); ?></td>
                  </tr>
                  <tr>
                    <th>月額・プラン料金</th>
                    <td><?php the_field('price1'); ?></td>
                  </tr>
                </table>
                <div class="point-waku">
                  <ul><?php if (!empty(get_field('point1_title'))) :?>
                    <li>
                      <?php the_field('point1_title'); ?><?php endif; ?><?php if (!empty(get_field('point2_title'))) :?></li>
                    <li>
                      <?php the_field('point2_title'); ?><?php endif; ?><?php if (!empty(get_field('point3_title'))) :?></li>
                    <li><?php the_field('point3_title'); ?><?php endif; ?> </li>
                  </ul>
                </div>
              </div><?php if (!empty(get_field('aflink'))) :?>
            </div>
            <div class="gymlist-bottum">
              <button class="btn2-blue"><a href="<?php the_field('aflink'); ?>">見学やお申込みはこちらから</a></button>
              <button class="btn2-orange"><a href="<?php the_field('aflink'); ?>">公式サイトでもっと詳しく</a></button><?php endif;?>
            </div>
          </div><?php endwhile;?>
<?php wp_reset_query(); ?>
<?php endif;?>
        </div>
        <h2 class="kon">フィットネスジム・トレーニングジム別に探す</h2>
        <div>
          <div class="oote-hako">
            <div class="oote"> <a href="<?php echo esc_url('/gym-brand/rizap'); ?>">
                <div></div><img src="<?php echo get_template_directory_uri(); ?>/assets/img/gym/rizap/rizap0.webp" alt="RIZAPを選ぶ理由"></a></div>
            <div class="oote"> <a href="<?php echo esc_url('/gym-brand/rizapwoman'); ?>">
                <div></div><img src="<?php echo get_template_directory_uri(); ?>/assets/img/gym/rizap/rizapwoman1.webp" alt="RIZAPWOMANを選ぶ理由"></a></div>
            <div class="oote"> <a href="<?php echo esc_url('/gym-brand/beyond'); ?>">
                <div></div><img src="<?php echo get_template_directory_uri(); ?>/assets/img/gym/beyond/beyond1.webp" alt="BEYONDを選ぶ理由"></a></div>
            <div class="oote"> <a href="<?php echo esc_url('/gym-brand/chocozap'); ?>">
                <div></div><img src="<?php echo get_template_directory_uri(); ?>/assets/img/gym/chocozap/chocozap1.webp" alt="chocoZAPを選ぶ理由"></a></div>
          </div>
        </div>
      </div>
    </section>
    <section></section>
  </article>
</main><?php get_footer(); ?>