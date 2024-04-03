<?php /** * Template Name: RIZAPtpl *//** * Template Post Type: post,gym_info */  get_header(); ?>
<article>
  <section>
    <div class="container"> 
      <div class="breadcrumb"><?php get_template_part('functions/breadcrumb'); ?></div>
      <h1 class="gym"><?php echo get_the_title(); ?></h1>
      <!--div.post-thumbnailimg(src!= "<?php if (!empty(get_field('gym_photo01'))):?><?php the_field('gym_photo01'); ?><?php endif; ?>")
      -->
      <div class="gymkind"> 
        <ul><?php foreach(get_field('gym_kind')as $data):?>
          <li><?php echo $data;?></li><?php endforeach;?>
        </ul>
      </div>
      <table class="imgcenter">
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
      <div class="mokuji-waku">
        <p>目次</p>
        <ul> 
          <li> <a href="#syokihiyou">初期費用・入会金</a></li>
          <li> <a href="#ryoukin">料金プラン</a></li>
          <li> <a href="#setubi">設備・サービス</a></li>
          <li> <a href="#osusume">おすすめポイント</a></li>
          <li> <a href="#access">地図・アクセス  </a></li>
        </ul>
      </div>
      <h2 class="flex-center-center" id="syokihiyou"> 
        <p>初期費用・入会金</p>
      </h2>
      <div class="initialname"><?php the_field('initial_costname'); ?></div>
      <div class="initialwaku"><?php the_field('initial_cost'); ?></div>
      <h2 class="flex-center-center" id="ryoukin">
        <p>料金プラン</p>
      </h2>
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
      <div class="planname"><?php the_field('planname2'); ?></div>
      <div class="planwaku">
        <ul>
          <li>
            <div class="gymplan-left flex-center-center">料金</div>
            <div class="gymplan-right flex-none-center"><?php the_field('price2'); ?></div>
          </li>
          <li> 
            <div class="gymplan-left flex-center-center"> 利用可能時間</div>
            <div class="gymplan-right flex-none-center"><?php the_field('riyou_time2'); ?></div>
          </li>
          <li>
            <div class="gymplan-left flex-center-center"> 回数</div>
            <div class="gymplan-right flex-none-center"><?php the_field('use_range2'); ?></div>
          </li>
          <li> 
            <div class="gymplan-left flex-center-center"> 特記事項                 </div>
            <div class="gymplan-right flex-none-center"><?php the_field('notices2'); ?></div>
          </li>
        </ul>
      </div>
      <div class="planname"><?php the_field('planname3'); ?></div>
      <div class="planwaku">
        <ul>
          <li>
            <div class="gymplan-left flex-center-center">料金</div>
            <div class="gymplan-right flex-none-center"><?php the_field('price3'); ?></div>
          </li>
          <li> 
            <div class="gymplan-left flex-center-center"> 利用可能時間</div>
            <div class="gymplan-right flex-none-center"><?php the_field('riyou_time3'); ?></div>
          </li>
          <li>
            <div class="gymplan-left flex-center-center"> 回数</div>
            <div class="gymplan-right flex-none-center"><?php the_field('use_range3'); ?></div>
          </li>
          <li> 
            <div class="gymplan-left flex-center-center"> 特記事項                 </div>
            <div class="gymplan-right flex-none-center"><?php the_field('notices3'); ?></div>
          </li>
        </ul>
      </div>
      <h2 class="flex-center-center"> 
        <p>初期費用・入会金</p>
      </h2>
      <div class="initialname"><?php the_field('initial_costname2'); ?></div>
      <div class="initialwaku"><?php the_field('initial_cost2'); ?></div>
      <div class="planname"><?php the_field('planname4'); ?></div>
      <div class="planwaku">
        <ul>
          <li>
            <div class="gymplan-left flex-center-center">料金</div>
            <div class="gymplan-right flex-none-center"><?php the_field('price4'); ?></div>
          </li>
          <li> 
            <div class="gymplan-left flex-center-center"> 利用可能時間</div>
            <div class="gymplan-right flex-none-center"><?php the_field('riyou_time4'); ?></div>
          </li>
          <li>
            <div class="gymplan-left flex-center-center"> 回数</div>
            <div class="gymplan-right flex-none-center"><?php the_field('use_range4'); ?></div>
          </li>
          <li> 
            <div class="gymplan-left flex-center-center"> 特記事項                 </div>
            <div class="gymplan-right flex-none-center"><?php the_field('notices4'); ?></div>
          </li>
        </ul>
      </div>
      <h2 class="flex-center-center" id="setubi">
        <p>設備・サービス</p>
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
        <ul>
           <?php foreach(get_field('service_info')as $data):?>
          <li><?php echo $data;?></li><?php endforeach;?>
        </ul>
      </div>
      <h2 class="flex-center-center" id="osusume"> 
        <p>おすすめポイント</p>
      </h2>
      <div class="point">
        <div> </div>
        <ul class="recpoint"><?php if (!empty(get_field('point1_title'))) :?>
          <li><?php the_field('point1_title'); ?>
            <p><?php the_field('point1_naiyou'); ?><?php endif; ?></p><?php if (!empty(get_field('point2_title'))) :?>
          </li>
          <li><?php the_field('point2_title'); ?>
            <p><?php the_field('point2_naiyou'); ?><?php endif; ?></p><?php if (!empty(get_field('point3_title'))) :?>
          </li>
          <li><?php the_field('point3_title'); ?>
            <p><?php the_field('point3_naiyou'); ?><?php endif; ?></p><?php if (!empty(get_field('point4_title'))) :?>
          </li>
          <li><?php the_field('point4_title'); ?>
            <p><?php the_field('point4_naiyou'); ?><?php endif; ?></p><?php if (!empty(get_field('point5_title'))) :?>
          </li>
          <li><?php the_field('point5_title'); ?>
            <p><?php the_field('point5_naiyou'); ?><?php endif; ?></p>
          </li>
        </ul>
      </div>
      <div class="margintop flex-center-center">
        <button class="btn1-orange"><a href="/gym-brand/rizap/">ライザップを選ぶ理由・メリット/デメリットを解説</a></button>
      </div>
      <h2 class="flex-center-center"> 
        <p>初期費用・入会金</p>
      </h2>
      <div class="initialname"><?php the_field('initial_costname'); ?></div>
      <div class="initialwaku"><?php the_field('initial_cost'); ?></div>
      <h2 class="flex-center-center"> 
        <p>料金プラン</p>
      </h2>
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
      <div class="planname"><?php the_field('planname2'); ?></div>
      <div class="planwaku">
        <ul>
          <li>
            <div class="gymplan-left flex-center-center">料金</div>
            <div class="gymplan-right flex-none-center"><?php the_field('price2'); ?></div>
          </li>
          <li> 
            <div class="gymplan-left flex-center-center"> 利用可能時間</div>
            <div class="gymplan-right flex-none-center"><?php the_field('riyou_time2'); ?></div>
          </li>
          <li>
            <div class="gymplan-left flex-center-center"> 回数</div>
            <div class="gymplan-right flex-none-center"><?php the_field('use_range2'); ?></div>
          </li>
          <li> 
            <div class="gymplan-left flex-center-center"> 特記事項                 </div>
            <div class="gymplan-right flex-none-center"><?php the_field('notices2'); ?></div>
          </li>
        </ul>
      </div>
      <div class="planname"><?php the_field('planname3'); ?></div>
      <div class="planwaku">
        <ul>
          <li>
            <div class="gymplan-left flex-center-center">料金</div>
            <div class="gymplan-right flex-none-center"><?php the_field('price3'); ?></div>
          </li>
          <li> 
            <div class="gymplan-left flex-center-center"> 利用可能時間</div>
            <div class="gymplan-right flex-none-center"><?php the_field('riyou_time3'); ?></div>
          </li>
          <li>
            <div class="gymplan-left flex-center-center"> 回数</div>
            <div class="gymplan-right flex-none-center"><?php the_field('use_range3'); ?></div>
          </li>
          <li> 
            <div class="gymplan-left flex-center-center"> 特記事項                 </div>
            <div class="gymplan-right flex-none-center"><?php the_field('notices3'); ?></div>
          </li>
        </ul>
      </div>
      <h3 class="flex-center-center"> 
        <p>プライムメンバープラン</p>
      </h3>
      <div class="initialname"><?php the_field('initial_costname2'); ?></div>
      <div class="initialwaku"><?php the_field('initial_cost2'); ?></div>
      <div class="planname"><?php the_field('planname4'); ?></div>
      <div class="planwaku">
        <ul>
          <li>
            <div class="gymplan-left flex-center-center">料金</div>
            <div class="gymplan-right flex-none-center"><?php the_field('price4'); ?></div>
          </li>
          <li> 
            <div class="gymplan-left flex-center-center"> 利用可能時間</div>
            <div class="gymplan-right flex-none-center"><?php the_field('riyou_time4'); ?></div>
          </li>
          <li>
            <div class="gymplan-left flex-center-center"> 回数</div>
            <div class="gymplan-right flex-none-center"><?php the_field('use_range4'); ?></div>
          </li>
          <li> 
            <div class="gymplan-left flex-center-center"> 特記事項                 </div>
            <div class="gymplan-right flex-none-center"><?php the_field('notices4'); ?></div>
          </li>
        </ul>
      </div>
      <h3 class="flex-center-center" id="access"> 
        <p>地図・アクセス</p>
      </h3>
      <div class="access"><?php echo get_field('access'); ?>
        <div class="googlemap"><?php echo get_field('gym_googlemap'); ?></div>
      </div>
      <h2 class="flex-center-center"> 
        <p>よくある質問</p>
      </h2>
      <div class="accordion-item">
        <div class="accordion-title accordion-title-left js-accordion-title">支払いは一括だけでしょうか？</div>
        <div class="accordion-content back-lightglay">一括支払いだけでなく、分割払いも可能です。<br>分割払いは3回/6回/10回/12回/18回/24回/36回/48回/60回などで対応してもらえます。</div>
      </div>
      <div class="accordion-item">
        <div class="accordion-title accordion-title-left js-accordion-title">支払い方法は？</div>
        <div class="accordion-content back-lightglay">支払い方法は一括支払いの際は「銀行振込」「デビッドカード」のどちらかになります。<br>分割支払いの場合は、月々の「口座引き落とし」になります。</div>
      </div>
      <div class="accordion-item">
        <div class="accordion-title accordion-title-left js-accordion-title">何歳から何歳まで通えますか？</div>
        <div class="accordion-content back-lightglay">16歳から入会できますが、無料カウンセリングには保護者の同伴が必要です。<br>年齢の上限設定はされていませんが、健康状態に問題がなければ、どなたでも利用可能です。</div>
      </div>
      <div class="accordion-item">
        <div class="accordion-title accordion-title-left js-accordion-title">運動が苦手でも大丈夫でしょうか？</div>
        <div class="accordion-content back-lightglay">運動が苦手でも、運動神経が悪いと思っている方も、問題なく取り組めます。<br>筋力トレーニングはあまり運動神経と関係がないものが多く、関節を動かしているイメージに近いです。<br>また、トレーナーがマンツーマンで教えてくれますし、随時修正をしてくれるので、初心者や運動神経が悪い方でも安心して取り組めます。</div>
      </div>
      <div class="accordion-item">
        <div class="accordion-title accordion-title-left js-accordion-title">部分痩せはできますか？</div>
        <div class="accordion-content back-lightglay">一人ひとりの目的に合わせて、マンツーマントレーニングを行いますので、全身をスリムにするだけでなく、気になる部位を特に集中的に痩せるプログラムを組んでくれます。<br>なりたい理想の身体をカウンセリングの際に伝えて、トレーナーさんと一緒に理想の身体に近づいていきましょう。</div>
      </div>
      <div class="accordion-item">
        <div class="accordion-title accordion-title-left js-accordion-title">トレーニングは自宅でも行なえますか？</div>
        <div class="accordion-content back-lightglay">自宅でも行える正しいトレーニングを学ぶこともできます。ダイエットに成功した後の体型維持は正しい自宅トレーニングで可能です。</div>
      </div>
      <div class="accordion-item">
        <div class="accordion-title accordion-title-left js-accordion-title">筋肉がつきすぎて逆に太くなりませんか？</div>
        <div class="accordion-content back-lightglay">引き締まった身体を作ることが目的である場合、単に筋肉量を増やすことだけを目的としたトレーニングを行いませんので、太くなりすぎることはありません。<br>脂肪が減り、筋肉が増えるので、細く引き締まって見えます。</div>
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