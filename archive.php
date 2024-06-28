<?php get_header(); ?>
<article>
  <section>
    <div class="container"> 
      <div class="main-waku">
        <div class="breadcrumb"><?php get_template_part('functions/breadcrumb'); ?></div>
        <h1 class="eriah1"><?php single_term_title(); ?>の一覧</h1>
        <div class="seacheria">
          <div class="eriacity"><i class="fa-solid fa-magnifying-glass"></i>種類から探す
            <ul class="area"><?php  $terms = get_terms('protein_type'); foreach ( $terms as $term ) {  echo '<li>'; echo  '<a href="'.home_url().'/protein_info/protein-type/'.$term->slug.'">'.$term->name.'</a></li>';}?></ul>
          </div>
          <div class="eriacity"><i class="fa-solid fa-magnifying-glass"></i>ブランドから探す
            <ul class="area"><?php  $terms = get_terms('protein_brand'); foreach ( $terms as $term ) {  echo '<li>'; echo  '<a href="'.home_url().'/protein_info/protein-brand/'.$term->slug.'">'.$term->name.'</a></li>';}?></ul>
          </div>
          <div class="eriacity"><i class="fa-solid fa-magnifying-glass"></i>フレーバーから探す
            <ul class="area"><?php  $terms = get_terms('protein_flavor'); foreach ( $terms as $term ) {  echo '<li>'; echo  '<a href="'.home_url().'/protein_info/protein-flavor/'.$term->slug.'">'.$term->name.'</a></li>';}?></ul>
          </div><?php if(have_posts()): ?><?php while(have_posts()): the_post(); ?>
        </div>
        <div class="gymlist-waku">
          <div class="none gymlist-gymkind">
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
                  <div class="textsmall">＊フレーパー・サイズにより異なる場合があります。</div>
                </table>
                <div class="none">フレーバーの種類：これもリストで出したい</div>
                <div><?php the_excerpt(); ?></div>
              </div>
            </div>
          </div>
          <div class="gymlist-bottum"><?php if (!empty(get_field('aflink'))) :?>
            <button class="btn2 btn2-blue"><?php get_field('aflink'); ?> </button>
            <button class="btn2 btn2-orange"><a href="<?php the_permalink(); ?>">詳細ページはこちら</a></button><?php else:?>
            <button class="btn2 btn2-orange"><a href="<?php the_permalink(); ?>">詳細ページはこちら</a></button><?php endif; ?>
          </div><?php endwhile;?>
<?php endif;?>   
        </div>
        <div><?php get_template_part('functions/pagenation'); ?></div>
      </div>
    </div>
  </section>
</article><?php get_footer(); ?>