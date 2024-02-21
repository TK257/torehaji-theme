<?php /** * Template Name: chocoZAPtpl *//** * Template Post Type: post,gym_info */  get_header(); ?>
<article>
  <section>
    <div class="container"> 
      <div class="breadcrumb"><?php get_template_part('functions/breadcrumb'); ?></div>
      <h1 class="gym"><?php echo get_the_title(); ?></h1>
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
          <li> <a href="#ryoukin">料金プラン</a></li>
          <li> <a href="#syokihiyou">初期費用・入会金</a></li>
          <li> <a href="#setubi">設備・サービス</a></li>
          <li> <a href="#osusume">おすすめポイント</a></li>
          <li> <a href="#access">地図・アクセス</a></li>
          <li> <a href="#wa">よくある質問</a></li>
          <li> <a href="#nyuukai">入会方法</a></li>
          <li> <a href="#tenpo">店舗の利用方法</a></li>
          <li> <a href="#esute">エステ・脱毛・ネイルなどの利用方法</a></li>
        </ul>
      </div>
      <h2 class="flex-center-center" id="ryoukin">
        <p>料金プラン</p>
      </h2>
      <div class="planname">使い放題プラン</div>
      <div class="planwaku">
        <ul>
          <li>
            <div class="gymplan-left flex-center-center">料金</div>
            <div class="gymplan-right flex-none-center">月額 2,980円（税込3,278円）<br>＊キャンペーン価格ではありません。通常の価格です。</div>
          </li>
          <li> 
            <div class="gymplan-left flex-center-center"> 利用可能時間</div>
            <div class="gymplan-right flex-none-center">24時間（一部店舗は建物の営業時間に準ずる）</div>
          </li>
          <li>
            <div class="gymplan-left flex-center-center"> 利用範囲・回数</div>
            <div class="gymplan-right flex-none-center">全国店店舗・利用回数は無制限</div>
          </li>
          <li> 
            <div class="gymplan-left flex-center-center"> 特記事項                 </div>
            <div class="gymplan-right flex-none-center">エステマシン・脱毛器も追加料金なしで利用可能</div>
          </li>
        </ul>
      </div>
      <div class="plancontent"> 
        <p>入会・退会いつでもスマホで完結</p>
        <p>最短翌月に解約することができます。入会2ヶ月目以降は、毎月10日までに解約手続きを完了すると当月中に解約、11日以降に手続きをすると翌月末に解約となります。</p>
        <ul> 
          <li>3/1 ~ 3/10 に解約手続きをした場合→ 3月末でプラン解約可能</li>
          <li>3/11以降に解約手続きをした場合→ 4月末でプラン解約可能</li>
        </ul>
      </div>
      <h2 class="flex-center-center" id="syokihiyou">
        <p>初期費用・入会金</p>
      </h2>
      <div class="initialname">入会金</div>
      <div class="initialwaku">3,000円（税込）<br>＊キャンペーンで、割引や無料になっていることがございます。</div>
      <div class="initialname">事務手数料</div>
      <div class="initialwaku">2,000円（税込）<br>＊キャンペーンで、割引や無料になっていることがございます。</div>
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
      <h3 class="h3_dotglay">サービス情報</h3>
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
        <div></div>
        <ul class="recpoint"> 
          <li>月額　3,278円（税込）
            <p>月額　3,278円（税込）初期費用　5,000円（入会金＋事務手数料）と一般的なトレーニングジムの価格の半額以下で利用できる</p>
            <p>年額プランにすると10ヶ月分の費用で利用できるので、月額2,732円（税込）になり月額3,000円を切る破格の会費になります。</p>
          </li><?php if (!empty(get_field('24hoursflag'))) :?>
          <li>24時間　365日　全国900店舗以上を利用可能
            <p>chocoZAPは店舗に入るための鍵がchocoZAP専用アプリです。chocoZAP専用アプリがあれば、全国どの店舗でも、24時間、365日利用可能です。しかも店舗は全国900店舗以上まだまだ増え続けています。</p>
          </li><?php else:?>
          <li>24時間 365日　全国900店舗以上を利用可能＊<?php the_field('gym_name'); ?>は24時間営業ではありません。
            <p>chocoZAPは店舗に入るための鍵がchocoZAP専用アプリです。chocoZAP専用アプリがあれば、全国どの店舗でも、24時間、365日利用可能です。しかも店舗は全国900店舗以上まだまだ増え続けています。</p>
          </li><?php endif; ?>
          <li>ダイエットに必要なマシンが全て揃っている
            <p>有酸素運動のマシンと足・胸・背中といった大きな筋肉を動かすマシンが完備されています。有酸素で脂肪を減らし、筋肉量を増やすことができるので、効率の良いダイエットができます。</p>
          </li>
          <li>エステマシン＆脱毛器も利用できる
            <p>エステマシンと脱毛器の利用ができます。トレーニングだけでなく、セルフエステサロンとしても活用できる利便性でこの価格は安い。</p>
          </li>
        </ul>
      </div>
      <div class="margintop flex-center-center">
        <button class="btn1-orange"><a href="/gym-brand/chocoZAP/">chocoZAPを選ぶ理由・メリット/デメリットを解説</a></button>
      </div>
      <h2 class="flex-center-center" id="access">
        <p>地図・アクセス</p>
      </h2>
      <div class="access"><?php the_field('access'); ?>
        <div class="googlemap"><?php the_field('gym_googlemap'); ?></div>
      </div>
      <h2 class="flex-center-center" id="qa">
        <p>よくある質問</p>
      </h2>
      <div class="accordion-item">
        <div class="accordion-title accordion-title-left js-accordion-title">入会前に店舗内を見学できますか？</div>
        <div class="accordion-content back-lightglay">入会前の見学はできません。店舗にスタッフが不在な上に、ジムの鍵になるQRコードは入会しないと発行されないため、事前に見学はできません。店舗の詳細ページに設置されているマシンと台数が記載されています。</div>
      </div>
      <div class="accordion-item">
        <div class="accordion-title accordion-title-left js-accordion-title">登録した日から利用できますか？</div>
        <div class="accordion-content back-lightglay">すぐに利用可能です。会員登録をして、アプリにログインすれば、入館証のQRコードが発行されますので、すぐに利用可能です。</div>
      </div>
      <div class="accordion-item">
        <div class="accordion-title accordion-title-left js-accordion-title">支払い方法はなにが利用できますか？</div>
        <div class="accordion-content back-lightglay">クレジットカードのみです。口座振替は対応しておりません。</div>
      </div>
      <div class="accordion-item">
        <div class="accordion-title accordion-title-left js-accordion-title">支払日はいつになりますか？</div>
        <div class="accordion-content back-lightglay">初回費用の支払い日は、入会手続きを完了した日となります。3ヶ月目以降の会費の支払いは、毎月11日〜20日までの間に行われます。</div>
      </div>
      <div class="accordion-item">
        <div class="accordion-title accordion-title-left js-accordion-title">解約後に再入会はできますか？</div>
        <div class="accordion-content back-lightglay">再入会する場合は、再入会金3,000円がかかります。入会金キャンペーンなどは適用されないです。</div>
      </div>
      <div class="accordion-item">
        <div class="accordion-title accordion-title-left js-accordion-title">事前予約が必要な設備はなんですか？</div>
        <div class="accordion-content back-lightglay">エステ・脱毛器・ホワイトニング・デスクバイク・ワークスペース・ゴルフ（他にも設備が追加される場合がございます）</div>
      </div>
      <div class="accordion-item">
        <div class="accordion-title accordion-title-left js-accordion-title">休会と解約方法は？</div>
        <div class="accordion-content back-lightglay">休会は、アプリのメニューにある「退会/プラン確認」→「休会申請」から手続きができます。費用はかからず、最長3ヶ月ジムを休会することができます。<br>「退会/プラン確認」から手続きが可能です。毎月10日までのが申請で当月末解約。11日以降の申請は翌月末解約となります。<br>解約月の月末までジムは利用可能です。</div>
      </div><?php include("chocozap-join.php"); ?>
<?php if (!empty(get_field('aflink'))) :?>
      <div class="btn-basyo">
        <div class="flex-center-center">
          <button class="btn2 btn2-blue"><a href="<?php the_field('aflink'); ?>" rel="nofollow">見学やお申込みはこちらから</a></button>
        </div>
        <div class="flex-center-center">
          <button class="btn2 btn2-orange"><a href="&lt;?php the_field('aflink'); ?&gt;" rel="nofollow">公式サイトでもっと詳しく</a><?php else:?></button>
        </div>
        <div class="officialhp"><a href="<?php the_field('official_link'); ?>" rel="nofollow">
            公式サイトリンク<?php endif; ?></a></div>
      </div>
    </div>
  </section>
  <section> </section>
</article><?php get_footer(); ?>