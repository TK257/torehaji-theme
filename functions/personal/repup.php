<?php
// ショートコードから渡された$location変数を利用（必要に応じて）
if (!isset($location)) {
  $location = 'ジム'; // デフォルト値
  $star = '5'; // デフォルト値
}
?>
<div class="gym-box">
  <h3>REP UP GYM（レップアップジム）<?php echo esc_html($location); ?></h3>
  <div class="flexbox-l-tb padding-l10 margin-b10">
    <div class="star5_rating" style="--rate: <?php echo esc_html($star); ?>"></div>
    <div class="padding-l5"><?php echo esc_html($star); ?></div>
  </div>
  <div>太る専門のパーソナルジム！食べても太らない、ガッチリした身体になりたい人にピッタリなパーソナルジムです。食事指導もあり、トレーニング以外でもしっかりサポート。
  </div>
  <div class="instagram-media-container">
    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/personal/rep-up-gym.webp" alt="REPUPGYM レップアップジム パーソナルジム">
  </div>
  <h4>REP UP GYM（レップアップジム）のサービス</h4>
  <ul>
    <li>太る専門</li>
    <li>無料カウンセリング</li>
    <li>完全個室</li>
    <li>完全予約制</li>
    <li>食事指導</li>
    <li>水</li>
    <li>レンタルウェア</li>
  </ul>
  <div class="small">※BCAAとは、筋肉のエネルギー源となる必須アミノ酸</div>
  <h4>REP UP GYM（レップアップジム）の料金と支払い方法</h4>
  <div class="small">下記以外にも多様なコースが用意されています。詳細は公式HPでご確認ください。
  </div>
  <table class="personal_table">
    <tr>
      <th scope="row">入会金</th>
      <td>39,800円</td>
    </tr>
    <tr>
      <th scope="row">2ヶ月コミットプラン</th>
      <td>281,600円/2ヶ月/16回</td>
    </tr>
    <tr>
      <th scope="row">支払い方法</th>
      <td>分割支払い・クレジットカード</td>
    </tr>
  </table>
</div>