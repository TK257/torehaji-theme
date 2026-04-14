<?php
// ショートコードから渡された$location変数を利用（必要に応じて）
if (!isset($location)) {
  $location = 'ジム'; // デフォルト値
  $star = '5'; // デフォルト値
}
?>
<div class="gym-box">
  <div class="kadomaru-li white bgc-orange-li font-12">
    <ul>
      <li>初心者歓迎</li>
      <li>全国展開</li>
      <li>入会金無料</li>
      <li>サービス充実</li>
      <li>プラン充実</li>
      <li>男女対応</li>
    </ul>
  </div>
  <h3>THE PERSONAL GYM(ザ パーソナルジム)<?php echo esc_html($location); ?></h3>
  <div class="flexbox-l-tb padding-l10 margin-b10">
    <div class="star5_rating" style="--rate: <?php echo esc_html($star); ?>"></div>
    <div class="padding-l5"><?php echo esc_html($star); ?></div>
  </div>
  <div>経験豊富なトレーナーが全力であなたを目標をサポートしてくれます！筋肉のエネルギー源となるBCAA（必須アミノ酸）も、無料で提供されるプランもあり至れり尽くせりです。食事管理も毎日チャットで気軽にできるので、安心して取り組めます。
  </div>
  <!-- ここが画像スライド挿入箇所 -->
  <?php
  $slider_html = get_query_var('gym_slider_html', '');
  echo $slider_html;
  ?>
  <h4>THE PERSONAL GYM(ザ パーソナルジム)の口コミ</h4>
  <?php
  $php_slug = get_query_var('gym_php_slug', 'common');
  get_template_part('/functions/personal/shop-reviews/tpg/' . $php_slug); ?>
  <div class="text-c">
    <a href="https://t.afi-b.com/visit.php?a=G15224q-Q496750z&p=g957083b" class="btn bgc-yellow kirakira" rel="nofollow">無料カウンセリングを受ける</a><img src="https://t.afi-b.com/lead/G15224q/g957083b/Q496750z" width="1" height="1" style="border:none;" />
  </div>
  <h4>THE PERSONAL GYM(ザ パーソナルジム)のサービス</h4>
  <ul class="bgc-clearblue-li white">
    <li>無料カウンセリング</li>
    <li>完全予約制</li>
    <li>トレーニング時間 約60分/回</li>
    <li>食事指導</li>
    <li>水</li>
    <li>レンタルウェア</li>
    <li>シューズロッカー*有料</li>
    <li>BCAA※</li>
    <li>アフタープロテイン</li>
  </ul>
  <div class="small">※BCAAとは、筋肉のエネルギー源となる必須アミノ酸</div>
  <h4>THE PERSONAL GYM(ザ パーソナルジム)の料金と支払い方法</h4>
  <table class="personal_table">
    <tbody>
      <tr>
        <th scope="row">入会金</th>
        <td>0円</td>
      </tr>
      <tr>
    </tbody>
  </table>
  <div class="accordion-title js-accordion-title">料金表を見る</div>
  <div class="accordion-content">
    <table class="personal_table">
      <tbody>
        <tr>
          <th scope="row">食事指導コース2ヶ月/16回</th>
          <td>281,600円</td>
        </tr>
        <tr>
          <th scope="row">食事指導コース3ヶ月/24回</th>
          <td>408,000円</td>
        </tr>
        <tr>
          <th scope="row" class="relative"><span class="popular"></span>食事指導コース3ヶ月/36回</th>
          <td>594,000円</td>
        </tr>
        <tr>
          <th scope="row">食事指導コース6ヶ月/48回</th>
          <td>720,000円</td>
        </tr>
        <tr>
          <th scope="row">食事指導コース6ヶ月/72回</th>
          <td>1,044,000円</td>
        </tr>
        <tr>
          <th scope="row">回数券/10回券</th>
          <td>88,000円　（8,800円/1回あたり）</td>
        </tr>
        <tr>
          <th scope="row">回数券/20回券</th>
          <td>165,000円　（8,250円/1回あたり）</td>
        </tr>
        <tr>
          <th scope="row">回数券/30回券</th>
          <td>231,000円　（7,700円/1回あたり）</td>
        </tr>
        <tr>
          <th scope="row" class="relative"><span class="popular"></span>回数券/40回券</th>
          <td>286,000円　（7,150円/1回あたり）</td>
        </tr>
        <tr>
          <th scope="row">月額コース 2回/月</th>
          <td>17,600円（8,800円/1回あたり）</td>
        </tr>
        <tr>
          <th scope="row">月額コース 4回/月</th>
          <td>33,000円（8,250円/1回あたり）</td>
        </tr>
        <tr>
          <th scope="row" class="relative"><span class="popular"></span>月額コース 8回/月</th>
          <td>61,600円（7,700円/1回あたり）</td>
        </tr>
        <tr>
          <th scope="row">支払い方法</th>
          <td>分割支払い・クレジットカード</td>
        </tr>
      </tbody>
    </table>
  </div>
  <div class="text-c">
    <a href="https://t.afi-b.com/visit.php?a=G15224q-Q496750z&p=g957083b" class="btn bgc-yellow kirakira" rel="nofollow">無料カウンセリングを受ける</a><img src="https://t.afi-b.com/lead/G15224q/g957083b/Q496750z" width="1" height="1" style="border:none;" />
  </div>
</div>