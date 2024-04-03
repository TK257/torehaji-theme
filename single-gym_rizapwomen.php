<?php /** * Template Name: RIZAPWomentpl *//** * Template Post Type: post,gym_info */  get_header(); ?>
<article>
  <section>
    <div class="container"> 
      <div class="breadcrumb"><?php get_template_part('functions/breadcrumb'); ?></div>
      <h1 class="gym"><?php echo get_the_title(); ?></h1>
      <div class="gymkind-woman">女性専用</div>
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
      <h3 class="h3_dotglay">サービス</h3>
      <div class="setsubi">
        <ul><?php foreach(get_field('service_info')as $data):?>
          <li><?php echo $data;?></li><?php endforeach;?>
        </ul>
      </div>
      <h2 class="flex-center-center"> 
        <p>おすすめポイント</p>
      </h2>
      <div class="point">
        <div> </div>
        <ul class="recpoint-woman"><?php if (!empty(get_field('point4_title'))) :?>
          <li><?php the_field('point4_title'); ?>
            <p><?php the_field('point4_naiyou'); ?><?php endif; ?></p><?php if (!empty(get_field('point5_title'))) :?>
          </li>
          <li><?php the_field('point5_title'); ?>
            <p><?php the_field('point5_naiyou'); ?><?php endif; ?></p><?php if (!empty(get_field('point1_title'))) :?>
          </li>
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
      <div class="margintop flex-center-center">
        <button class="btn1-orange"><a href="/gym-brand/rizapwoman/">ライザップウーマンを選ぶ理由・メリット/デメリットを解説</a></button>
      </div>
      <h2 class="flex-center-center"> 
        <p>料金プラン</p>
      </h2>
      <div class="planname-woman"><?php the_field('planname4'); ?></div>
      <div class="planwaku">
        <ul>
          <li>
            <div class="gymplan-left-woman flex-center-center">料金</div>
            <div class="gymplan-right flex-none-center"><?php the_field('price4'); ?></div>
          </li>
          <li> 
            <div class="gymplan-left-woman flex-center-center"> 利用可能時間</div>
            <div class="gymplan-right flex-none-center"><?php the_field('riyou_time4'); ?></div>
          </li>
          <li>
            <div class="gymplan-left-woman flex-center-center"> 回数</div>
            <div class="gymplan-right flex-none-center"><?php the_field('use_range4'); ?></div>
          </li>
          <li> 
            <div class="gymplan-left-woman flex-center-center"> 特記事項                 </div>
            <div class="gymplan-right flex-none-center"><?php the_field('notices4'); ?></div>
          </li>
        </ul>
      </div>
      <h2 class="flex-center-center"> 
        <p>初期費用・入会金</p>
      </h2>
      <div class="initialname-woman"><?php the_field('initial_cost_name'); ?></div>
      <div class="initialwaku"><?php the_field('initial_cost'); ?></div>
      <h2 class="flex-center-center"> 
        <p>料金プラン</p>
      </h2>
      <div class="planname-woman"><?php the_field('planname1'); ?></div>
      <div class="planwaku">
        <ul>
          <li>
            <div class="gymplan-left-woman flex-center-center">料金</div>
            <div class="gymplan-right flex-none-center"><?php the_field('price1'); ?></div>
          </li>
          <li> 
            <div class="gymplan-left-woman flex-center-center"> 利用可能時間</div>
            <div class="gymplan-right flex-none-center"><?php the_field('riyou_time1'); ?></div>
          </li>
          <li>
            <div class="gymplan-left-woman flex-center-center"> 回数</div>
            <div class="gymplan-right flex-none-center"><?php the_field('use_range1'); ?></div>
          </li>
          <li> 
            <div class="gymplan-left-woman flex-center-center"> 特記事項                 </div>
            <div class="gymplan-right flex-none-center"><?php the_field('notices1'); ?></div>
          </li>
        </ul>
      </div>
      <div class="planname-woman"><?php the_field('planname2'); ?></div>
      <div class="planwaku">
        <ul>
          <li>
            <div class="gymplan-left-woman flex-center-center">料金</div>
            <div class="gymplan-right flex-none-center"><?php the_field('price2'); ?></div>
          </li>
          <li> 
            <div class="gymplan-left-woman flex-center-center"> 利用可能時間</div>
            <div class="gymplan-right flex-none-center"><?php the_field('riyou_time2'); ?></div>
          </li>
          <li>
            <div class="gymplan-left-woman flex-center-center"> 回数</div>
            <div class="gymplan-right flex-none-center"><?php the_field('use_range2'); ?></div>
          </li>
          <li> 
            <div class="gymplan-left-woman flex-center-center"> 特記事項                 </div>
            <div class="gymplan-right flex-none-center"><?php the_field('notices2'); ?></div>
          </li>
        </ul>
      </div>
      <div class="planname-woman"><?php the_field('planname3'); ?></div>
      <div class="planwaku">
        <ul>
          <li>
            <div class="gymplan-left-woman flex-center-center">料金</div>
            <div class="gymplan-right flex-none-center"><?php the_field('price3'); ?></div>
          </li>
          <li> 
            <div class="gymplan-left-woman flex-center-center"> 利用可能時間</div>
            <div class="gymplan-right flex-none-center"><?php the_field('riyou_time3'); ?></div>
          </li>
          <li>
            <div class="gymplan-left-woman flex-center-center"> 回数</div>
            <div class="gymplan-right flex-none-center"><?php the_field('use_range3'); ?></div>
          </li>
          <li> 
            <div class="gymplan-left-woman flex-center-center"> 特記事項                 </div>
            <div class="gymplan-right flex-none-center"><?php the_field('notices3'); ?></div>
          </li>
        </ul>
      </div>
      <h2 class="flex-center-center"> 
        <p>地図・アクセス</p>
      </h2>
      <div class="access"><?php the_field('access'); ?>
        <div class="googlemap"><?php echo get_field('gym_googlemap'); ?></div>
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
          <button class="btn2 btn2-blue"><a href="<?php echo get_field('aflink'); ?>" rel="nofollow">見学やお申込みはこちらから</a></button>
        </div>
        <div class="flex-center-center">
          <button class="btn2 btn2-orange"><a href="&lt;?php echo get_field('aflink'); ?&gt;" rel="nofollow">公式サイトでもっと詳しく</a><?php else:?></button>
        </div>
        <div class="officialhp"><a href="<?php echo get_field('official_link'); ?>" rel="nofollow">
            公式サイトリンク<?php endif; ?></a></div>
      </div>
    </div>
  </section>
  <section> </section>
</article><?php get_footer(); ?>