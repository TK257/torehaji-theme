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
      <li>無料体験</li>
      <li>入会金無料</li>
      <li>サービス充実</li>
      <li>プラン充実</li>
      <li>男女対応</li>
      <li>大会優勝トレーナー</li>
    </ul>
  </div>
  <h3>Rays GYM(レイズジム)<?php echo esc_html($location); ?></h3>
  <div class="flexbox-l-tb padding-l10 margin-b10">
    <div class="star5_rating" style="--rate: <?php echo esc_html($star); ?>"></div>
    <div class="padding-l5"><?php echo esc_html($star); ?></div>
  </div>
  <div>「科学的根拠 × 個別指導」に基づく効率的なトレーニングで、健康的に痩せたい人、筋肉をつけたい人、体型を整えたい人に対応しています。<br>完全予約制マンツーマンのパーソナルトレーニング。解剖学や運動学に精通した正しいフォームを教えてくれるので、怪我をしにくく、効率よくダイエットや筋力アップに取り組めます。<br>運動不足の解消やダイエットから本格的なボディメイクまで幅広く対応しています。
  </div>
  <!-- ここが画像スライド挿入箇所 -->
  <div class="instagram-media-container">
    <blockquote class="instagram-media" data-instgrm-permalink="https://www.instagram.com/p/CvKCPLnSaac/?utm_source=ig_embed&amp;utm_campaign=loading" data-instgrm-version="14" style=" background:#FFF; border:0; border-radius:3px; box-shadow:0 0 1px 0 rgba(0,0,0,0.5),0 1px 10px 0 rgba(0,0,0,0.15); margin: 1px; max-width:540px; min-width:326px; padding:0; width:99.375%; width:-webkit-calc(100% - 2px); width:calc(100% - 2px);">
      <div style="padding:16px;"> <a href="https://www.instagram.com/p/CvKCPLnSaac/?utm_source=ig_embed&amp;utm_campaign=loading" style=" background:#FFFFFF; line-height:0; padding:0 0; text-align:center; text-decoration:none; width:100%;" target="_blank">
          <div style=" display: flex; flex-direction: row; align-items: center;">
            <div style="background-color: #F4F4F4; border-radius: 50%; flex-grow: 0; height: 40px; margin-right: 14px; width: 40px;"></div>
            <div style="display: flex; flex-direction: column; flex-grow: 1; justify-content: center;">
              <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; margin-bottom: 6px; width: 100px;"></div>
              <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; width: 60px;"></div>
            </div>
          </div>
          <div style="padding: 19% 0;"></div>
          <div style="display:block; height:50px; margin:0 auto 12px; width:50px;"><svg width="50px" height="50px" viewBox="0 0 60 60" version="1.1" xmlns="https://www.w3.org/2000/svg" xmlns:xlink="https://www.w3.org/1999/xlink">
              <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                <g transform="translate(-511.000000, -20.000000)" fill="#000000">
                  <g>
                    <path d="M556.869,30.41 C554.814,30.41 553.148,32.076 553.148,34.131 C553.148,36.186 554.814,37.852 556.869,37.852 C558.924,37.852 560.59,36.186 560.59,34.131 C560.59,32.076 558.924,30.41 556.869,30.41 M541,60.657 C535.114,60.657 530.342,55.887 530.342,50 C530.342,44.114 535.114,39.342 541,39.342 C546.887,39.342 551.658,44.114 551.658,50 C551.658,55.887 546.887,60.657 541,60.657 M541,33.886 C532.1,33.886 524.886,41.1 524.886,50 C524.886,58.899 532.1,66.113 541,66.113 C549.9,66.113 557.115,58.899 557.115,50 C557.115,41.1 549.9,33.886 541,33.886 M565.378,62.101 C565.244,65.022 564.756,66.606 564.346,67.663 C563.803,69.06 563.154,70.057 562.106,71.106 C561.058,72.155 560.06,72.803 558.662,73.347 C557.607,73.757 556.021,74.244 553.102,74.378 C549.944,74.521 548.997,74.552 541,74.552 C533.003,74.552 532.056,74.521 528.898,74.378 C525.979,74.244 524.393,73.757 523.338,73.347 C521.94,72.803 520.942,72.155 519.894,71.106 C518.846,70.057 518.197,69.06 517.654,67.663 C517.244,66.606 516.755,65.022 516.623,62.101 C516.479,58.943 516.448,57.996 516.448,50 C516.448,42.003 516.479,41.056 516.623,37.899 C516.755,34.978 517.244,33.391 517.654,32.338 C518.197,30.938 518.846,29.942 519.894,28.894 C520.942,27.846 521.94,27.196 523.338,26.654 C524.393,26.244 525.979,25.756 528.898,25.623 C532.057,25.479 533.004,25.448 541,25.448 C548.997,25.448 549.943,25.479 553.102,25.623 C556.021,25.756 557.607,26.244 558.662,26.654 C560.06,27.196 561.058,27.846 562.106,28.894 C563.154,29.942 563.803,30.938 564.346,32.338 C564.756,33.391 565.244,34.978 565.378,37.899 C565.522,41.056 565.552,42.003 565.552,50 C565.552,57.996 565.522,58.943 565.378,62.101 M570.82,37.631 C570.674,34.438 570.167,32.258 569.425,30.349 C568.659,28.377 567.633,26.702 565.965,25.035 C564.297,23.368 562.623,22.342 560.652,21.575 C558.743,20.834 556.562,20.326 553.369,20.18 C550.169,20.033 549.148,20 541,20 C532.853,20 531.831,20.033 528.631,20.18 C525.438,20.326 523.257,20.834 521.349,21.575 C519.376,22.342 517.703,23.368 516.035,25.035 C514.368,26.702 513.342,28.377 512.574,30.349 C511.834,32.258 511.326,34.438 511.181,37.631 C511.035,40.831 511,41.851 511,50 C511,58.147 511.035,59.17 511.181,62.369 C511.326,65.562 511.834,67.743 512.574,69.651 C513.342,71.625 514.368,73.296 516.035,74.965 C517.703,76.634 519.376,77.658 521.349,78.425 C523.257,79.167 525.438,79.673 528.631,79.82 C531.831,79.965 532.853,80.001 541,80.001 C549.148,80.001 550.169,79.965 553.369,79.82 C556.562,79.673 558.743,79.167 560.652,78.425 C562.623,77.658 564.297,76.634 565.965,74.965 C567.633,73.296 568.659,71.625 569.425,69.651 C570.167,67.743 570.674,65.562 570.82,62.369 C570.966,59.17 571,58.147 571,50 C571,41.851 570.966,40.831 570.82,37.631"></path>
                  </g>
                </g>
              </g>
            </svg></div>
          <div style="padding-top: 8px;">
            <div style=" color:#3897f0; font-family:Arial,sans-serif; font-size:14px; font-style:normal; font-weight:550; line-height:18px;">この投稿をInstagramで見る</div>
          </div>
          <div style="padding: 12.5% 0;"></div>
          <div style="display: flex; flex-direction: row; margin-bottom: 14px; align-items: center;">
            <div>
              <div style="background-color: #F4F4F4; border-radius: 50%; height: 12.5px; width: 12.5px; transform: translateX(0px) translateY(7px);"></div>
              <div style="background-color: #F4F4F4; height: 12.5px; transform: rotate(-45deg) translateX(3px) translateY(1px); width: 12.5px; flex-grow: 0; margin-right: 14px; margin-left: 2px;"></div>
              <div style="background-color: #F4F4F4; border-radius: 50%; height: 12.5px; width: 12.5px; transform: translateX(9px) translateY(-18px);"></div>
            </div>
            <div style="margin-left: 8px;">
              <div style=" background-color: #F4F4F4; border-radius: 50%; flex-grow: 0; height: 20px; width: 20px;"></div>
              <div style=" width: 0; height: 0; border-top: 2px solid transparent; border-left: 6px solid #f4f4f4; border-bottom: 2px solid transparent; transform: translateX(16px) translateY(-4px) rotate(30deg)"></div>
            </div>
            <div style="margin-left: auto;">
              <div style=" width: 0px; border-top: 8px solid #F4F4F4; border-right: 8px solid transparent; transform: translateY(16px);"></div>
              <div style=" background-color: #F4F4F4; flex-grow: 0; height: 12px; width: 16px; transform: translateY(-4px);"></div>
              <div style=" width: 0; height: 0; border-top: 8px solid #F4F4F4; border-left: 8px solid transparent; transform: translateY(-4px) translateX(8px);"></div>
            </div>
          </div>
          <div style="display: flex; flex-direction: column; flex-grow: 1; justify-content: center; margin-bottom: 24px;">
            <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; margin-bottom: 6px; width: 224px;"></div>
            <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; width: 144px;"></div>
          </div>
        </a>
        <p style=" color:#c9c8cd; font-family:Arial,sans-serif; font-size:14px; line-height:17px; margin-bottom:0; margin-top:8px; overflow:hidden; padding:8px 0 7px; text-align:center; text-overflow:ellipsis; white-space:nowrap;"><a href="https://www.instagram.com/p/CvKCPLnSaac/?utm_source=ig_embed&amp;utm_campaign=loading" style=" color:#c9c8cd; font-family:Arial,sans-serif; font-size:14px; font-style:normal; font-weight:normal; line-height:17px; text-decoration:none;" target="_blank">田中光【川越/経営/筋肉】(@hikaru__tanaka)がシェアした投稿</a></p>
      </div>
    </blockquote>
    <script async src="//www.instagram.com/embed.js"></script>
  </div>
  <h4>Rays GYM(レイズジム)の口コミ</h4>
  <div class="shop-reviews">
    <span>指導・サポート体制</span>
    <ul>
      <li>トレーナーが個々の身体や目標に合わせた丁寧な指導をしてくれる。</li>
      <li>米国認定資格を持つオーナーや大会出場経験者による信頼のある指導。</li>
      <li>無理のない提案で初心者や運動が苦手な人でも継続しやすい。</li>
      <li>女性トレーナーも在籍し、同性ならではの悩みも相談しやすい環境。</li>
      <li>毎回のセッションが明るく楽しく、継続するモチベーションに繋がる。</li>
    </ul>
  </div>

  <div class="shop-reviews">
    <span>トレーニング内容・効果</span>
    <ul>
      <li>トレーニングマシンの使い方から基礎フォームまで丁寧に教えてくれる。</li>
      <li>体幹トレーニングや姿勢改善によってゴルフのパフォーマンス向上などの成果も。</li>
      <li>継続により体重減少・筋力向上・体調改善などの効果が実感されている。</li>
      <li>運動習慣がなかった人でも、習慣化しやすいプログラム内容が好評。</li>
      <li>不調の改善や理想のボディメイクに繋がったという声が多数。</li>
    </ul>
  </div>

  <div class="shop-reviews">
    <span>食事指導・生活習慣サポート</span>
    <ul>
      <li>細かい食事指導やライフスタイルに合わせたアドバイスが受けられる。</li>
      <li>糖質制限や無理な食事制限ではなく、バランス重視で長期継続しやすい。</li>
      <li>食材やレシピの提案など、実用的なアドバイスも好評。</li>
      <li>睡眠や生活習慣の相談も受け付けており、総合的なサポート体制。</li>
      <li>結果が出やすいと多くの利用者が満足している。</li>
    </ul>
  </div>

  <div class="shop-reviews">
    <span>施設・設備</span>
    <ul>
      <li>清潔感があり、明るく開放感のある空間で快適にトレーニングできる。</li>
      <li>2店舗間で雰囲気や設備が異なり、気分に合わせて通える。</li>
      <li>駅近でアクセス良好な立地にあり、通いやすい環境。</li>
      <li>マンションの一室など、落ち着いた雰囲気で緊張せず通える。</li>
      <li>レンタルウェア・シューズ・シャワー完備で手ぶら通いが可能。</li>
    </ul>
  </div>
  <div class="text-c">
    <img src="https://www.rentracks.jp/adx/p.gifx?idx=0.32036.363818.7941.11238&dna=135630" style="border:none;" height="1" width="1"><a href="https://www.rentracks.jp/adx/r.html?idx=0.32036.363818.7941.11238&dna=135630" class="btn bgc-yellow kirakira" rel="nofollow noopener" target="_blank">無料カウンセリングを受ける</a>
  </div>
  <h4>Rays GYM(レイズジム)のサービス</h4>
  <ul class="bgc-clearblue-li white">
    <li>無料カウンセリング</li>
    <li>完全予約制</li>
    <li>トレーニング時間 約60分/回</li>
    <li>食事指導</li>
    <li>ダイエットレシピ提供</li>
    <li>レンタルウェア</li>
    <li>レンタルシューズ</li>
    <li>アフタープロテイン</li>
  </ul>
  <h4>Rays GYM(レイズジム)の料金と支払い方法</h4>
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
          <td>236,500円</td>
        </tr>
        <tr>
          <th scope="row">食事指導コース3ヶ月/24回</th>
          <td>316,800円</td>
        </tr>
        <tr>
          <th scope="row">回数券コース/60分/10回</th>
          <td>99,000円（9,900円/1回あたり）</td>
        </tr>
        <tr>
          <th scope="row">回数券コース/60分/20回</th>
          <td>187,000円（9,350円/1回あたり）</td>
        </tr>
        <tr>
          <th scope="row">回数券コース/60分/30回</th>
          <td>264,000円（8,800円/1回あたり）</td>
        </tr>
        <tr>
          <th scope="row">月会員コース/月2回</th>
          <td>19,800円（9,900円/1回あたり）</td>
        </tr>
        <tr>
          <th scope="row">月会員コース/月4回</th>
          <td>37,400円（9,350円/1回あたり）</td>
        </tr>
        <tr>
          <th scope="row">月会員コース/月6回</th>
          <td>52,800円（8,800円/1回あたり）</td>
        </tr>
        <tr>
          <th scope="row">支払い方法</th>
          <td>クレジットカード・電子マネー</td>
        </tr>
      </tbody>
    </table>
  </div>
  <div class="text-c">
    <img src="https://www.rentracks.jp/adx/p.gifx?idx=0.32036.363818.7941.11238&dna=135630" style="border:none;" height="1" width="1"><a href="https://www.rentracks.jp/adx/r.html?idx=0.32036.363818.7941.11238&dna=135630" class="btn bgc-yellow kirakira" rel="nofollow noopener" target="_blank">無料カウンセリングを受ける</a>
  </div>
</div>