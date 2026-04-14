<?php
// ショートコードから渡された$location変数を利用（必要に応じて）
if (!isset($location)) {
  $location = 'ジム'; // デフォルト値
  $star = '5'; // デフォルト値
}
?>
<div class="gym-box">
  <div class="kadomaru-li white bgc-pink-li font-12">
    <ul>
      <li>女性専用</li>
      <li>全国展開</li>
      <li>初心者歓迎</li>
      <li>食事付きプラン</li>
      <li>サービス充実</li>
      <li>プラン充実</li>
      <li>返金制度</li>
    </ul>
  </div>
  <h3>UNDEUX SUPERBODY（アンドゥスーパーボディ）<br><?php echo esc_html($location); ?></h3>
  <div class="flexbox-l-tb padding-l10 margin-b10">
    <div class="star5_rating" style="--rate: <?php echo esc_html($star); ?>"></div>
    <div class="padding-l5"><?php echo esc_html($star); ?></div>
  </div>
  <div>女性専用のパーソナルジムで、糖質オフの宅配食付きプランが大きな特徴です。<br>集中コースが終わった後のアフタープランがあり、リバウンド対策もしっかりされています。<br>食事指導はもちろん充実したフォロー体制で、目標に寄り添って一緒に取り組むことができます。<br>全国に複数店舗を展開しており、通いやすさも魅力です。
  </div>
  <!-- ここが画像スライド挿入箇所 -->
  <?php
  $slider_html = get_query_var('gym_slider_html', '');
  echo $slider_html;
  ?>
  <h4>UNDEUX SUPERBODYの口コミ</h4>
  <?php
  $php_slug = get_query_var('gym_php_slug', 'common');
  get_template_part('/functions/personal/shop-reviews/undeux/' . $php_slug); ?>
  <div class="text-c">
    <a href="https://www.rentracks.jp/adx/r.html?idx=0.32036.363818.2375.3635&dna=56298" class="btn bgc-yellow kirakira" rel="noopener" target="_blank">無料カウンセリングを受ける</a><img src="https://www.rentracks.jp/adx/p.gifx?idx=0.32036.363818.2375.3635&dna=56298" style="border:none;" height="1" width="1">
  </div>
  <h4>UNDEUX SUPERBODYのサービス</h4>
  <ul class="bgc-clearblue-li white">
    <li>無料カウンセリング</li>
    <li>完全予約制</li>
    <li>トレーニング時間 50分/回</li>
    <li>食事指導</li>
    <li>個別LINE相談</li>
    <li>レンタルウェア</li>
    <li>シューズ預かり</li>
    <li>レンタルタオル</li>
    <li>ピラティス※</li>
  </ul>
  <div><span class="small">※導入店舗のみ</span></div>
  <h4>UNDEUX SUPERBODYの料金と支払い方法</h4>
  <table class="personal_table">
    <tbody>
      <tr>
        <th scope="row">入会金</th>
        <td>33,000円※条件コースにより最大0円<br>
          <span class="small">※無料カウンセリングや体験トレーニング後24時間以内の入会で、4ヶ月コース0円、3ヶ月コース16,500円</span>
        </td>
      </tr>
    </tbody>
  </table>
  <div class="accordion-title js-accordion-title">料金表と支払い方法を見る</div>
  <div class="accordion-content">
    <table class="personal_table">
      <tbody>
        <tr>
          <th scope="row">2ヶ月集中コース/16回<br>糖質オフの宅配食16食付き</th>
          <td>230,000円</td>
        </tr>
        <tr>
          <th scope="row">3ヶ月集中コース/24回<br>糖質オフの宅配食32食付き</th>
          <td>340,000円</td>
        </tr>
        <tr>
          <th scope="row">4ヶ月集中コース/32回<br>糖質オフの宅配食60食付き</th>
          <td>440,000円</td>
        </tr>
        <tr>
          <th scope="row" class="relative"><span class="popular"></span>アフターコース<br>終日予約OK 2回</th>
          <td>18,900円</td>
        </tr>
        <tr>
          <th scope="row" class="relative"><span class="popular"></span>アフターコース<br>平日9〜17時 4回</th>
          <td>27,500円</td>
        </tr>
        <tr>
          <th scope="row" class="relative"><span class="popular"></span>アフターコース<br>終日予約OK 4回</th>
          <td>32,000円</td>
        </tr>
        <tr>
          <th scope="row">オプション：食事管理プラン（30日間）</th>
          <td>29,800円<br>栄養士による食事管理・食事指導レッスン・毎日の運動管理</td>
        </tr>
        <tr>
          <th scope="row">支払い方法</th>
          <td>分割支払い・クレジットカード</td>
        </tr>
      </tbody>
    </table>
  </div>
  <div class="text-c">
    <a href="https://www.rentracks.jp/adx/r.html?idx=0.32036.363818.2375.3635&dna=56298" class="btn bgc-yellow kirakira" rel="noopener" target="_blank">無料カウンセリングを受ける</a><img src="https://www.rentracks.jp/adx/p.gifx?idx=0.32036.363818.2375.3635&dna=56298" style="border:none;" height="1" width="1">
  </div>
</div>