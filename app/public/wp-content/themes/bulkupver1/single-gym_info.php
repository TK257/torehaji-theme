<?php /** * Template Name: gym *//** * Template Post Type: post,gym_info */  get_header(); ?>
<article>
  <section>
    <div class="container"> 
      <div class="breadcrumb"><?php get_template_part('functions/breadcrumb'); ?></div>
      <h2 class="gym"><?php echo get_the_title(); ?></h2>
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
          <td><?php the_field('business_hours'); ?></td>
        </tr>
      </table>
      <h3 class="flex-center-center"> 
        <p>設備・サービス情報</p>
      </h3>
      <div class="slideshow">
        <div id="slideshow-image"><img src="<?php if (!empty(get_field('gym_photo01'))) :?><?php the_field('gym_photo01'); ?><?php endif; ?>"></div>
        <ul class="thumbnail" id="thumbnail">
          <li><img src="<?php if (!empty(get_field('gym_photo01'))) :?><?php the_field('gym_photo01'); ?><?php endif; ?>"></li><?php if (!empty(get_field('gym_photo02'))) :?>
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
      <h4>設備</h4>
      <div class="setsubi">
        <ul><?php foreach(get_field('facility')as $data):?>
          <li><?php echo $data;?></li><?php endforeach;?>
        </ul>
      </div>
      <h4>支払い方法</h4>
      <div class="setsubi">
        <ul><?php foreach(get_field('payment')as $data):?>
          <li><?php echo $data;?></li><?php endforeach;?>
        </ul>
      </div>
      <h4>サービス情報</h4>
      <div class="setsubi">
        <ul>
           <?php foreach(get_field('service_info')as $data):?>
          <li><?php echo $data;?></li><?php endforeach;?>
        </ul>
      </div>
      <h3 class="flex-center-center"> 
        <p>おすすめポイント</p>
      </h3>
      <div class="point">
        <div></div>
        <ul class="recpoint"><?php if (!empty(get_field('point1_title'))) :?>
          <li><?php the_field('point1_title'); ?>
            <p><?php the_field('point1_naiyou'); ?><?php endif; ?></p><?php if (!empty(get_field('point2_title'))) :?>
          </li>
          <li><?php the_field('point2_title'); ?>
            <p><?php the_field('point2_naiyou'); ?><?php endif; ?></p><?php if (!empty(get_field('point3_title'))) :?>
          </li>
          <li><?php the_field('point3_title'); ?>
            <p><?php the_field('point3_naiyou'); ?><?php endif; ?></p>
          </li>
        </ul>
      </div>
      <h3 class="flex-center-center"> 
        <p>料金プラン</p>
      </h3>
      <div class="planname"><?php the_field('planname1'); ?></div>
      <div class="planwaku">
        <ul>
          <li>
            <div class="gymplan-left flex-center-center">料金</div>
            <div class="gymplan-right flex-none-center"><?php the_field('price1'); ?></div>
          </li>
          <li> 
            <div class="gymplan-left flex-center-center"> 利用可能時間</div>
            <div class="gymplan-right flex-none-center"><?php the_field('riyou_time1'); ?></div>
          </li>
          <li>
            <div class="gymplan-left flex-center-center"> 回数</div>
            <div class="gymplan-right flex-none-center"><?php the_field('use_range1'); ?></div>
          </li>
          <li> 
            <div class="gymplan-left flex-center-center"> 特記事項                 </div>
            <div class="gymplan-right flex-none-center"><?php the_field('notices1'); ?></div>
          </li>
        </ul>
      </div>
      <h3 class="h3_dotglay flex-center-center"> 
        <p>初期費用・入会金</p>
      </h3>
      <div class="initialname"><?php the_field('initial_cost_name'); ?></div>
      <div class="initialwaku"><?php the_field('initial_cost'); ?></div>
      <h3 class="h3_dotglay flex-center-center"> 
        <p>地図・アクセス</p>
      </h3>
      <div class="access"><?php the_field('access'); ?>
        <div class="googlemap"><?php the_field('gym_googlemap'); ?></div>
      </div>
      <h3 class="h3_dotglay flex-center-center"> 
        <p>基本情報</p>
      </h3>
      <div class="flex-center-center"> 
        <table> 
          <tr>
            <th>施設名</th>
            <td><?php the_field('gym_name'); ?></td>
          </tr>
          <tr>
            <th>営業時間</th>
            <td><?php the_field('business_hours'); ?></td>
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
        <div class="officialhp"><a href="<?php the_field('official_link'); ?>" rel="nofollow">
            公式サイトリンク<?php endif; ?></a></div>
      </div>
    </div>
  </section>
  <section> </section>
</article><?php get_footer(); ?>