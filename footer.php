
<footer class="l-footer">
  <section class="l-wrapper">
    <div class="footer-mobile">
      <div class="footer-title">掲載プロテインブランド</div>
      <div class="footer-list">
        <ul><?php  $terms = get_terms('protein_brand'); foreach ( $terms as $term ) {  echo '<li>'; echo  '<a href="'.home_url().'/protein-brand/'.$term->slug.'">'.$term->name.'</a></li>';}?></ul>
      </div>
      <div class="footer-title">トレーニングジム検索</div>
      <div class="footer-search-list">
        <table class="footer-table">
          <th>関東</th>
          <td>
            <ul>
              <li><a href="<?php echo esc_url('/gym-area/tokyo'); ?>">東京都</a></li>
              <li><a href="<?php echo esc_url('/gym-area/kanagawa'); ?>">神奈川県</a></li>
              <li><a href="<?php echo esc_url('/gym-area/chiba'); ?>"> 千葉県</a></li>
              <li><a href="<?php echo esc_url('/gym-area/ibaraki'); ?>">  茨城県</a></li>
              <li><a href="<?php echo esc_url('/gym-area/gunma'); ?>">  群馬県</a></li>
              <li><a href="<?php echo esc_url('/gym-area/tochigi'); ?>">  栃木県</a></li>
            </ul>
          </td>
          <tr></tr>
          <th>東海</th>
          <td>
            <ul>
              <li><a href="<?php echo esc_url('/gym-area/aichi'); ?>">  愛知県</a></li>
              <li><a href="<?php echo esc_url('/gym-area/gifu'); ?>">  岐阜県</a></li>
              <li><a href="<?php echo esc_url('/gym-area/mie'); ?>">  三重県</a></li>
              <li><a href="<?php echo esc_url('/gym-area/shizuoka'); ?>">  静岡県 </a></li>
            </ul>
          </td>
          <tr></tr>
          <th>関西</th>
          <td>
            <ul>
              <li><a href="<?php echo esc_url('/gym-area/osaka'); ?>">  大阪府</a></li>
              <li><a href="<?php echo esc_url('/gym-area/hyogo'); ?>">  兵庫県</a></li>
              <li><a href="<?php echo esc_url('/gym-area/kyoto'); ?>">  京都府</a></li>
              <li><a href="<?php echo esc_url('/gym-area/shiga'); ?>">  滋賀県</a></li>
              <li><a href="<?php echo esc_url('/gym-area/nara'); ?>">  奈良県</a></li>
              <li><a href="<?php echo esc_url('/gym-area/wakayama'); ?>">  和歌山県</a></li>
            </ul>
          </td>
          <tr></tr>
          <th>北海道・東北</th>
          <td>
            <ul>
              <li><a href="<?php echo esc_url('/gym-area/hokkaido'); ?>">  北海道</a></li>
              <li> <a href="<?php echo esc_url('/gym-area/aomori'); ?>">  青森県</a></li>
              <li><a href="<?php echo esc_url('/gym-area/akita'); ?>">  秋田県</a></li>
              <li><a href="<?php echo esc_url('/gym-area/iwate'); ?>">  岩手県</a></li>
              <li><a href="<?php echo esc_url('/gym-area/miyagi'); ?>">  宮城県</a></li>
              <li><a href="<?php echo esc_url('/gym-area/yamagata'); ?>">  山形県</a></li>
              <li><a href="<?php echo esc_url('/gym-area/fukushima'); ?>">  福島県 </a></li>
            </ul>
          </td>
          <tr></tr>
          <th>甲信越・北陸</th>
          <td>
            <ul>
              <li><a href="<?php echo esc_url('/gym-area/yamanashi'); ?>">  山梨県</a></li>
              <li><a href="<?php echo esc_url('/gym-area/nagano'); ?>">  長野県</a></li>
              <li><a href="<?php echo esc_url('/gym-area/niigata'); ?>">  新潟県</a></li>
              <li><a href="<?php echo esc_url('/gym-area/toyama'); ?>">  富山県</a></li>
              <li><a href="<?php echo esc_url('/gym-area/ishikawa'); ?>">  石川県</a></li>
              <li><a href="<?php echo esc_url('/gym-area/fukui'); ?>">  福井県</a></li>
            </ul>
          </td>
          <tr></tr>
          <th>中国・四国</th>
          <td>
            <ul>
              <li><a href="<?php echo esc_url('/gym-area/hiroshima'); ?>">  広島県</a></li>
              <li><a href="<?php echo esc_url('/gym-area/okayama'); ?>">  岡山県</a></li>
              <li class="junbityu"> 鳥取県<br></li>
              <li><a href="<?php echo esc_url('/gym-area/yamaguchi'); ?>">  山口県</a></li>
              <li class="junbityu"> 島根県<br></li>
              <li><a href="<?php echo esc_url('/gym-area/kagawa'); ?>">  香川県</a></li>
              <li><a href="<?php echo esc_url('/gym-area/ehime'); ?>">  愛媛県</a></li>
              <li><a href="<?php echo esc_url('/gym-area/tokushima'); ?>">  徳島県</a></li>
              <li><a href="<?php echo esc_url('/gym-area/kochi'); ?>">  高知県 </a></li>
            </ul>
          </td>
          <tr></tr>
          <th>九州・沖縄</th>
          <td>
            <ul>
              <li><a href="<?php echo esc_url('/gym-area/fukuoka'); ?>">  福岡県</a></li>
              <li><a href="<?php echo esc_url('/gym-area/saga'); ?>">  佐賀県</a></li>
              <li><a href="<?php echo esc_url('/gym-area/nagasaki'); ?>"> 長崎県</a></li>
              <li><a href="<?php echo esc_url('/gym-area/kumamoto'); ?>"> 熊本県</a></li>
              <li><a href="<?php echo esc_url('/gym-area/oita'); ?>"> 大分県</a></li>
              <li><a href="<?php echo esc_url('/gym-area/miyazaki'); ?>"> 宮崎県</a></li>
              <li><a href="<?php echo esc_url('/gym-area/kagoshima'); ?>"> 鹿児島県</a></li>
              <li><a href="<?php echo esc_url('/gym-area/okinawa'); ?>"> 沖縄県</a></li>
            </ul>
          </td>
        </table>
      </div>
      <div id="logo-footer"><a href="/"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo/backkonlogo.png"></a></div>
      <ul>
        <li class="footerli"> <a href="/company/">運営会社</a></li>
        <li class="footerli"><a href="//privacy-policy/">プライバシーポリシー</a></li>
        <li class="footerli"> <a href="/">お問合せ</a></li>
      </ul>
      <div class="footer-mobile-copyright"><small class="footer-mobile-copyright">©︎ Simple is Best Corp. All Rights Reserved.</small></div>
    </div>
  </section>
</footer>
<button id="top-button" type="button"><i class="fa-solid fa-angle-up"></i><br>TOP</button><?php wp_footer(); ?>            
<!-- footer end -->