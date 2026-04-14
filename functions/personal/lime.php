<?php
// ショートコードから渡された$location変数を利用（必要に応じて）
if (!isset($location)) {
  $location = 'ジム'; // デフォルト値
  $star = '5'; // デフォルト値
}
?>
<div class="gym-box">
  <h3>limeパーソナルジム（ライム）<?php echo esc_html($location); ?></h3>
  <div class="flexbox-l-tb padding-l10 margin-b10">
    <div class="star5_rating" style="--rate: <?php echo esc_html($star); ?>"></div>
    <div class="padding-l5"><?php echo esc_html($star); ?></div>
  </div>
  <div>自重トレーニングを重視し、辛くない、初心者に優しいトレーニングメニューが人気！LINEでの食事指導なので便利。トレーニング後のアフターケアストレッチがついているプランも！
  </div>
  <div class="instagram-media-container">
    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/personal/lime-gym.webp" alt="LIMEパーソナルジム" />
  </div>
  <h4>limeパーソナルジム（ライム）のサービス</h4>
  <ul>
    <li>無料カウンセリング</li>
    <li>完全予約制</li>
    <li>食事指導</li>
    <li>レンタルウェア</li>
    <li>レンタルシューズ</li>
    <li>水</li>
    <li>整体</li>

  </ul>
  <h4>limeパーソナルジム（ライム）の料金と支払い方法</h4>
  <table class="personal_table">
    <tr>
      <th scope="row">入会金</th>
      <td>39,800円</td>
    </tr>
    <tr>
      <th scope="row">サブスク4コース</th>
      <td>36,000円/4回/月</td>
    </tr>
    <tr>
      <th scope="row">サブスク6コース</th>
      <td>51,000円/6回/月</td>
    </tr>
    <tr>
      <th scope="row">サブスク8コース</th>
      <td>64,000円/8回/月</td>
    </tr>
    <tr>
      <th scope="row">トライアルコース</th>
      <td>132,800円/16回</td>
    </tr>
    <tr>
      <th scope="row">メンテナンスコース</th>
      <td>70,400円/8回</td>
    </tr>
    <tr>
      <th scope="row">スタンダードコース</th>
      <td>217,800円/期間2ヶ月/16回</td>
    </tr>
    <tr>
      <th scope="row">コミットコース</th>
      <td>326,700円/期間3ヶ月/24回</td>
    </tr>
    <tr>
      <th scope="row">支払い方法</th>
      <td>分割支払い・クレジットカード</td>
    </tr>
  </table>
</div>