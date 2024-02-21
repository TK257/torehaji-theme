<?php /** * Template Name: ANYTIMEtpl *//** * Template Post Type: post,gym_info */  get_header(); ?>
<article>
  <section>
    <div class="container"> 
      <div class="breadcrumb"><?php get_template_part('functions/breadcrumb'); ?></div>
      <h1 class="gym"><?php echo get_the_title(); ?></h1>
      <div class="gym-gaiyou">店舗数・会員数が日本トップクラスのANYTIME FITNESS。入会すると日本国内の店舗（1,000店舗以上）だけでなく、世界中の店舗も利用できます。<br>出張・旅行・引越や転職といった時だけでなく、気分を変えたい時や、使いたい設備によって好きな店舗をその都度選ぶことができます。</div>
      <div class="gymkind"> 
        <ul><?php foreach(get_field('gym_kind')as $data):?>
          <li><?php echo $data;?></li><?php endforeach;?>
        </ul>
      </div>
      <table>
        <tr>
          <th>パーソナル対応</th>
          <td><?php the_field('parsonal'); ?></td>
        </tr>
        <tr> 
          <th>住所</th>
          <td><?php the_field('address'); ?></td>
        </tr>
        <tr> 
          <th>アクセス</th>
          <td><?php the_field('access'); ?></td>
        </tr>
        <tr> 
          <th>駐車場</th>
          <td><?php the_field('parking'); ?></td>
        </tr>
        <tr> 
          <th>営業時間</th>
          <td>24時間 365日</td>
        </tr>
        <tr> 
          <th>スタッフアワー</th>
          <td><?php the_field('staffhour'); ?></td>
        </tr>
      </table>
      <h2 class="flex-center-center"> 
        <p>設備・サービス情報</p>
      </h2>
      <div class="slideshow">
        <div id="slideshow-image"><img src="<?php echo !empty(get_field('gym_photo01')) ? get_field('gym_photo01') : get_template_directory_uri() . '/assets/img/imgpre.webp'; ?>" alt="<?php the_field('gym_name'); ?>の外観"></div>
        <ul class="thumbnail" id="thumbnail">
          <li><img src="<?php echo !empty(get_field('gym_photo01')) ? get_field('gym_photo01') : get_template_directory_uri() . '/assets/img/imgpre.webp'; ?>" alt="<?php the_field('gym_name'); ?>の外観"></li><?php if (!empty(get_field('gym_photo02'))) :?>
          <li><img src="<?php the_field('gym_photo02'); ?>"></li><?php endif; ?>
<?php if (!empty(get_field('gym_photo03'))) :?>
          <li><img src="<?php the_field('gym_photo03'); ?>"></li><?php endif; ?>
<?php if (!empty(get_field('gym_photo04'))) :?>
          <li><img src="<?php the_field('gym_photo04'); ?>"></li><?php endif; ?>
<?php if (!empty(get_field('gym_photo05'))) :?>
          <li><img src="<?php the_field('gym_photo05'); ?>"></li><?php endif; ?>
        </ul>
      </div>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
      <h3 class="h3_dotglay">設備</h3>
      <div class="setsubi">
        <ul><?php foreach(get_field('facility')as $data):?>
          <li><?php echo $data;?></li><?php endforeach;?>
        </ul>
      </div>
      <h3 class="h3_dotglay">支払い方法</h3>
      <div class="setsubi">
        <ul><?php foreach(get_field('payment')as $data):?>
          <li><?php echo $data;?></li><?php endforeach;?>
        </ul>
      </div>
      <h3 class="h3_dotglay">サービス情報</h3>
      <div class="setsubi">
        <ul>
           <?php foreach(get_field('service_info')as $data):?>
          <li><?php echo $data;?></li><?php endforeach;?>
        </ul>
      </div>
      <h2 class="flex-center-center"> 
        <p>おすすめポイント</p>
      </h2>
      <div class="point">
        <div></div>
        <ul class="recpoint"> 
          <li>24時間 365日 全店舗利用可能
            <p>24時間365日利用できるので、あなたの生活スタイルに合わせていつでも、通えるのが大きなメリットです。<br>早朝・深夜でも時間関係なく利用できます。<br>365日利用可能なので、休館日が設定されているジムだとルーティンが崩れてしまったり、やる気がある日に休みということがありません。<br></p>
          </li>
          <li>会費1万円以下
            <p>会費は店舗によって異なりますが、10,000円以下の会費で利用できます。<br>会費は安いですが、設備が充実しているのが、エニタイムフィットネスの特徴です。<br>格安のジムはダンベルやマシンが少なく、やりたいトレーニングができないことがありますが、エニタイムフィットネスは豊富に用意されているので、トレーニングのやる気が削がれることがありません。<br></p>
          </li>
          <li>店舗数が多い 国内1,000店舗以上
            <p>自宅に近い店舗か、勤務先の近くで通うで選ぶ方が多いです。でも、引っ越しや転職や転勤で通えなくなるケースもあります。<br>エニタイムフィットネスは店舗数が多く、引越し先や転職・転勤先にも店舗あることが多く、何も手続きをせずに、そのまま利用できます。<br></p>
          </li>
        </ul>
      </div>
      <div class="margintop flex-center-center">
        <button class="btn1-orange"><a href="/gym-brand/anytimefitness/">エニタイムフィットネスを選ぶ理由・メリット/デメリットを解説</a></button>
      </div>
      <h2 class="flex-center-center"> 
        <p>料金プラン</p>
      </h2>
      <div class="planname">料金プラン</div>
      <div class="planwaku">
        <ul>
          <li>
            <div class="gymplan-left flex-center-center">料金</div>
            <div class="gymplan-right flex-none-center"><?php the_field('price1'); ?></div>
          </li>
          <li> 
            <div class="gymplan-left flex-center-center"> 利用可能時間</div>
            <div class="gymplan-right flex-none-center">24時間 365日</div>
          </li>
          <li>
            <div class="gymplan-left flex-center-center"> スタッフアワー</div>
            <div class="gymplan-right flex-none-center"><?php the_field('staffhour'); ?></div>
          </li>
          <li> 
            <div class="gymplan-left flex-center-center"> 特記事項                 </div>
            <div class="gymplan-right flex-none-center">未成年の方は入会できませんが、15歳以上18歳以下（高校在学期間）の方は、保護者がエニタイムメンバーであれば高校生無料利用（HIGH SCHOOL PASS）をご利用できます。</div>
          </li>
        </ul>
      </div>
      <h2 class="flex-center-center"> 
        <p>初期費用</p>
      </h2>
      <div class="initialname">セキュリティキー発行手数料</div>
      <div class="initialwaku">通常5,500円（税込）*キャンペーンで無料の場合があります。</div>
      <div class="initialname">入会月の会費</div>
      <div class="initialwaku"><?php the_field('price1'); ?>÷月の日数×利用日数</div>
      <h2 class="flex-center-center"> 
        <p>地図・アクセス</p>
      </h2>
      <div class="access"><?php the_field('access'); ?>
        <div class="googlemap"><?php the_field('gym_googlemap'); ?></div>
      </div>
      <h2 class="flex-center-center"> 
        <p>基本情報</p>
      </h2>
      <div class="flex-center-center"> 
        <table> 
          <tr>
            <th>施設名</th>
            <td><?php the_field('gym_name'); ?></td>
          </tr>
          <tr>
            <th>営業時間</th>
            <td>24時間 365日</td>
          </tr>
          <tr> 
            <th>アクセス</th>
            <td><?php the_field('access'); ?></td>
          </tr>
          <tr>
            <th>駐車場</th>
            <td><?php the_field('parking'); ?></td>
          </tr>
        </table>
      </div><?php if (!empty(get_field('aflink'))) :?>
      <div class="btn-basyo">
        <div class="flex-center-center">
          <button class="btn1 btn1-blue"><a href="<?php the_field('aflink'); ?>" rel="nofollow">見学やお申込みはこちらから</a></button>
        </div>
        <div class="flex-center-center">
          <button class="btn1 btn1-orange"><a href="&lt;?php the_field('aflink'); ?&gt;" rel="nofollow">公式サイトでもっと詳しく</a><?php else:?></button>
        </div>
        <div class="officialhp none"><a href="<?php the_field('official_link'); ?>" rel="nofollow">
            公式サイトリンク<?php endif; ?></a></div>
      </div>
    </div>
  </section>
  <section> </section>
</article><?php get_footer(); ?>