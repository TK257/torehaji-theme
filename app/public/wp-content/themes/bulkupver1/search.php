<?php get_header(); ?>
<main class="l-main p-page p-front-page">
  <article>
    <section>
      <div class="container">
        <div class="breadcrumb"><?php get_template_part('functions/breadcrumb'); ?></div><?php if ( have_posts() ) : ?>
<?php while ( have_posts() ) : the_post(); ?>
        <div> 
          <div class="gymlist-waku">
            <div class="gymlist-gymkind">
              <ul>
                <li><?php $terms = get_the_terms($post->ID, 'protein_type'); foreach($terms as $term): echo $term->name; ?> <?php endforeach;?></li>
              </ul>
            </div>
            <div class="gymlist-caset">
              <div class="gymlist-name"><a href="<?php the_permalink(); ?>"><?php the_field('name'); ?></a></div>
              <div class="gymlist-detail">
                <div class="detailthum"> <img src="<?php if (!empty(get_field('photo01'))) :?><?php echo get_template_directory_uri(); ?>/assets/img/protein/<?php the_field('photo01'); ?>.webp<?php endif; ?>" alt="<?php the_field('altphoto01'); ?>"></div>
                <div> 
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
                </div>
              </div>
            </div>
          </div>
        </div><?php endwhile; //繰り返し処理終了 ?>
        <h2 class="kon" id="prteinsearch">プロテイン検索</h2>
        <div class="search">
          <div class="searchta"><?php include("searchform.php"); ?></div>
        </div><?php else : //投稿がない場合 ?> 申し訳ございません、検索条件に合致する情報がございません。別の条件で再度検索をお願いいたします。
        <h2 class="kon" id="prteinsearch">プロテイン検索</h2>
        <div class="search">
          <div class="searchta"><?php include("searchform.php"); ?></div>
        </div><?php endif; //条件分岐終了 ?>
      </div>
    </section>
  </article>
</main><?php get_footer(); ?>