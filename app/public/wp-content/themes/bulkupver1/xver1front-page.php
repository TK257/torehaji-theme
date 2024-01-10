<?php get_header(); ?>
<!--検索機能を付ける前の状態-->
<main class="l-main p-page p-front-page">
  <article>
    <section>
      <div class="container"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/top-cover-image.webp">
        <h2 class="kon" id="prteinsearch">プロテイン検索</h2>
        <div class="search">
          <div class="searchta"><?php include("searchform.php"); ?>
            <p><i class="fa-solid fa-magnifying-glass"></i>プロテインの種類から探す</p>
            <table class="searchtable">
              <tr>
                 <?php $terms = get_terms('protein_type'); foreach ( $terms as $term ) { if($term->parent == 0) { echo '<td>'; echo  '<a href="'.home_url().'/protein-type/'.$term->slug.'">'.$term->name.'</a></td>';}}?></tr>
            </table>
            <p><i class="fa-solid fa-magnifying-glass"></i>ブランドから探す</p>
            <table class="searchtable">
              <tr><?php  $terms = get_terms('protein_brand'); foreach ( $terms as $term ) {  echo '<td>'; echo  '<a href="'.home_url().'/protein-brand/'.$term->slug.'">'.$term->name.'</a></td>';}?></tr>
            </table>
          </div>
        </div>
        <h2 class="kon" id="gymsearch">フィットネスジム・トレーニングジム検索</h2>
        <div class="search">
          <div class="searchta">
            <p><i class="fa-solid fa-map-location"></i>地域から探す</p>
            <table class="table-pc searchtable">
              <tr> 
                <th>関東</th>
                <td> <a href="<?php echo esc_url('/gym-area/tokyo'); ?>">東京都</a></td>
                <td><a href="<?php echo esc_url('/gym-area/kanagawa'); ?>">神奈川県</a></td>
                <td><a href="<?php echo esc_url('/gym-area/chiba'); ?>"> 千葉県</a></td>
                <td><a href="<?php echo esc_url('/gym-area/ibaraki'); ?>">  茨城県</a></td>
                <td><a href="<?php echo esc_url('/gym-area/gunma'); ?>">  群馬県</a></td>
                <td><a href="<?php echo esc_url('/gym-area/tochigi'); ?>">  栃木県</a></td>
              </tr>
              <tr>
                <th>東海</th>
                <td><a href="<?php echo esc_url('/gym-area/aichi'); ?>">  愛知県</a></td>
                <td><a href="<?php echo esc_url('/gym-area/gifu'); ?>">  岐阜県</a></td>
                <td><a href="<?php echo esc_url('/gym-area/mie'); ?>">  三重県</a></td>
                <td><a href="<?php echo esc_url('/gym-area/shizuoka'); ?>">  静岡県</a></td>
              </tr>
              <tr> 
                <th>関西</th>
                <td><a href="<?php echo esc_url('/gym-area/osaka'); ?>">  大阪府</a></td>
                <td><a href="<?php echo esc_url('/gym-area/hyogo'); ?>">  兵庫県</a></td>
                <td><a href="<?php echo esc_url('/gym-area/kyoto'); ?>">  京都府</a></td>
                <td><a href="<?php echo esc_url('/gym-area/shiga'); ?>">  滋賀県</a></td>
                <td><a href="<?php echo esc_url('/gym-area/nara'); ?>">  奈良県</a></td>
                <td><a href="<?php echo esc_url('/gym-area/wakayama'); ?>">  和歌山県</a></td>
              </tr>
              <tr> 
                <th>北海道・東北</th>
                <td><a href="<?php echo esc_url('/gym-area/hokkaido'); ?>">  北海道</a></td>
                <td><a href="<?php echo esc_url('/gym-area/aomori'); ?>">  青森県</a></td>
                <td><a href="<?php echo esc_url('/gym-area/akita'); ?>">  秋田県</a></td>
                <td><a href="<?php echo esc_url('/gym-area/iwate'); ?>">  岩手県</a></td>
                <td><a href="<?php echo esc_url('/gym-area/miyagi'); ?>">  宮城県</a></td>
                <td><a href="<?php echo esc_url('/gym-area/yamagata'); ?>">  山形県</a></td>
                <td><a href="<?php echo esc_url('/gym-area/fukushima'); ?>">  福島県</a></td>
              </tr>
              <tr> 
                <th>甲信越・北陸</th>
                <td><a href="<?php echo esc_url('/gym-area/yamanashi'); ?>">  山梨県</a></td>
                <td><a href="<?php echo esc_url('/gym-area/nagano'); ?>">  長野県</a></td>
                <td><a href="<?php echo esc_url('/gym-area/niigata'); ?>">  新潟県</a></td>
                <td><a href="<?php echo esc_url('/gym-area/toyama'); ?>">  富山県</a></td>
                <td><a href="<?php echo esc_url('/gym-area/ishikawa'); ?>">  石川県</a></td>
                <td><a href="<?php echo esc_url('/gym-area/fukui'); ?>">  福井県</a></td>
              </tr>
              <tr> 
                <th>中国・四国</th>
                <td><a href="<?php echo esc_url('/gym-area/hiroshima'); ?>">  広島県</a></td>
                <td><a href="<?php echo esc_url('/gym-area/okayama'); ?>">  岡山県</a></td>
                <td class="junbityu"> 鳥取県</td>
                <td><a href="<?php echo esc_url('/gym-area/yamaguchi'); ?>">  山口県</a></td>
                <td class="junbityu"> 島根県</td>
                <td><a href="<?php echo esc_url('/gym-area/kagawa'); ?>">  香川県</a></td>
                <td><a href="<?php echo esc_url('/gym-area/ehime'); ?>">  愛媛県</a></td>
                <td><a href="<?php echo esc_url('/gym-area/tokushima'); ?>">  徳島県</a></td>
                <td><a href="<?php echo esc_url('/gym-area/kochi'); ?>">  高知県</a></td>
              </tr>
              <tr> 
                <th>九州・沖縄</th>
                <td><a href="<?php echo esc_url('/gym-area/fukuoka'); ?>">  福岡県</a></td>
                <td><a href="<?php echo esc_url('/gym-area/saga'); ?>">  佐賀県</a></td>
                <td><a href="<?php echo esc_url('/gym-area/nagasaki'); ?>"> 長崎県</a></td>
                <td><a href="<?php echo esc_url('/gym-area/kumamoto'); ?>"> 熊本県</a></td>
                <td><a href="<?php echo esc_url('/gym-area/oita'); ?>"> 大分県</a></td>
                <td><a href="<?php echo esc_url('/gym-area/miyazaki'); ?>"> 宮崎県</a></td>
                <td><a href="<?php echo esc_url('/gym-area/kagoshima'); ?>"> 鹿児島県</a></td>
                <td><a href="<?php echo esc_url('/gym-area/okinawa'); ?>"> 沖縄県</a></td>
              </tr>
            </table>
            <div class="table-smp search-list"> 
              <p>関東</p>
              <ul> 
                <li><a href="<?php echo esc_url('/gym-area/tokyo'); ?>">東京都</a></li>
                <li><a href="<?php echo esc_url('/gym-area/kanagawa'); ?>">神奈川県</a></li>
                <li><a href="<?php echo esc_url('/gym-area/chiba'); ?>"> 千葉県</a></li>
                <li><a href="<?php echo esc_url('/gym-area/ibaraki'); ?>">  茨城県</a></li>
                <li><a href="<?php echo esc_url('/gym-area/gunma'); ?>">  群馬県</a></li>
                <li><a href="<?php echo esc_url('/gym-area/tochigi'); ?>">  栃木県</a></li>
              </ul>
              <p>東海</p>
              <ul>
                <li><a href="<?php echo esc_url('/gym-area/aichi'); ?>">  愛知県</a></li>
                <li><a href="<?php echo esc_url('/gym-area/gifu'); ?>">  岐阜県</a></li>
                <li><a href="<?php echo esc_url('/gym-area/mie'); ?>">  三重県</a></li>
                <li><a href="<?php echo esc_url('/gym-area/shizuoka'); ?>">  静岡県 </a></li>
              </ul>
              <p>関西</p>
              <ul> 
                <li><a href="<?php echo esc_url('/gym-area/osaka'); ?>">  大阪府</a></li>
                <li><a href="<?php echo esc_url('/gym-area/hyogo'); ?>">  兵庫県</a></li>
                <li><a href="<?php echo esc_url('/gym-area/kyoto'); ?>">  京都府</a></li>
                <li><a href="<?php echo esc_url('/gym-area/shiga'); ?>">  滋賀県</a></li>
                <li><a href="<?php echo esc_url('/gym-area/nara'); ?>">  奈良県</a></li>
                <li><a href="<?php echo esc_url('/gym-area/wakayama'); ?>">  和歌山県</a></li>
              </ul>
              <p>北海道・東北</p>
              <ul>
                <li><a href="<?php echo esc_url('/gym-area/hokkaido'); ?>">  北海道</a></li>
                <li> <a href="<?php echo esc_url('/gym-area/aomori'); ?>">  青森県</a></li>
                <li><a href="<?php echo esc_url('/gym-area/akita'); ?>">  秋田県</a></li>
                <li><a href="<?php echo esc_url('/gym-area/iwate'); ?>">  岩手県</a></li>
                <li><a href="<?php echo esc_url('/gym-area/miyagi'); ?>">  宮城県</a></li>
                <li><a href="<?php echo esc_url('/gym-area/yamagata'); ?>">  山形県</a></li>
                <li><a href="<?php echo esc_url('/gym-area/fukushima'); ?>">  福島県 </a></li>
              </ul>
              <p>甲信越・北陸</p>
              <ul>
                <li><a href="<?php echo esc_url('/gym-area/yamanashi'); ?>">  山梨県</a></li>
                <li><a href="<?php echo esc_url('/gym-area/nagano'); ?>">  長野県</a></li>
                <li><a href="<?php echo esc_url('/gym-area/niigata'); ?>">  新潟県</a></li>
                <li><a href="<?php echo esc_url('/gym-area/toyama'); ?>">  富山県</a></li>
                <li><a href="<?php echo esc_url('/gym-area/ishikawa'); ?>">  石川県</a></li>
                <li><a href="<?php echo esc_url('/gym-area/fukui'); ?>">  福井県</a></li>
              </ul>
              <p>中国・四国</p>
              <ul>
                <li><a href="<?php echo esc_url('/gym-area/hiroshima'); ?>">  広島県</a></li>
                <li><a href="<?php echo esc_url('/gym-area/okayama'); ?>">  岡山県</a></li>
                <li class="junbityu"> 鳥取県<br></li>
                <li><a href="<?php echo esc_url('/gym-area/yamaguchi'); ?>">  山口県</a></li>
                <li class="junbityu"> 島根県<br></li>
                <li><a href="<?php echo esc_url('/gym-area/kagawa'); ?>">  香川県</a></li>
                <li><a href="<?php echo esc_url('/gym-area/ehime'); ?>">  愛媛県</a></li>
                <li><a href="<?php echo esc_url('/gym-area/tokushima'); ?>">  徳島県</a></li>
                <li><a href="<?php echo esc_url('/gym-area/kochi'); ?>">  高知県 </a></li>
              </ul>
              <p>九州・沖縄</p>
              <ul>
                <li><a href="<?php echo esc_url('/gym-area/fukuoka'); ?>">  福岡県</a></li>
                <li><a href="<?php echo esc_url('/gym-area/saga'); ?>">  佐賀県</a></li>
                <li><a href="<?php echo esc_url('/gym-area/nagasaki'); ?>"> 長崎県</a></li>
                <li><a href="<?php echo esc_url('/gym-area/kumamoto'); ?>"> 熊本県</a></li>
                <li><a href="<?php echo esc_url('/gym-area/oita'); ?>"> 大分県</a></li>
                <li><a href="<?php echo esc_url('/gym-area/miyazaki'); ?>"> 宮崎県</a></li>
                <li><a href="<?php echo esc_url('/gym-area/kagoshima'); ?>"> 鹿児島県</a></li>
                <li><a href="<?php echo esc_url('/gym-area/okinawa'); ?>"> 沖縄県</a></li>
              </ul>
            </div>
            <div class="searchta none">
              <p><i class="fa-solid fa-magnifying-glass"></i>設備から探す</p>
              <table> 
                <tr>
                  <td class="searchtd"> <a href="#">24時間</a></td>
                  <td class="searchtd">ヨガ</td>
                  <td class="searchtd">パーソナルトレーニング</td>
                  <td class="searchtd">完全個室</td>
                  <td class="searchtd">プール</td>
                  <td class="searchtd">湯船</td>
                </tr>
              </table>
            </div>
          </div>
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
            <div class="gymlist-detail">
              <div class="detailthum"><?php the_post_thumbnail(); ?></div>
              <div>
                <table class="table-pc">
                  <tr> 
                    <th>営業時間</th>
                    <td><?php the_field('business_hours'); ?></td>
                    <th>定休日</th>
                    <td><?php the_field('maxprotein'); ?></td>
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
                    <th>定休日</th>
                    <td><?php the_field('regular_holiday'); ?></td>
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
              </div>
            </div>
            <div class="setsubi">設備
              <ul><?php foreach(get_field('facility')as $data):?>
                <li><?php echo $data;?></li><?php endforeach;?>
              </ul><?php if (!empty(get_field('aflink'))) :?>
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
                <div class="none">フレーバーの種類：これもリストで出したい</div>
                <div><?php the_excerpt(); ?></div>
              </div>
            </div>
          </div>
          <div class="gymlist-bottum">
            <button class="btn2 btn2-blue"><?php the_field('aflink'); ?> </button>
            <button class="btn2 btn2-orange"><a href="<?php the_permalink(); ?>">詳細ページはこちら</a></button>
          </div><?php endwhile;?>
<?php endif;?>  
        </div>
      </div>
    </section>
    <section></section>
  </article>
</main><?php get_footer(); ?>