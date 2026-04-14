<section class="author-box">
  <h3>この記事を書いた人</h3>
  <div class="author-profile">
    <div class="flexbox-l-tb">
      <img
        src="<?php echo get_template_directory_uri(); ?>/assets/img/common/auther_v3.webp"
        alt="トレハジ編集長・トレパン"
        loading="lazy"
        class="author-avatar"
        width="80"
        height="80">
      <div class="margin-l15">
        <strong>トレハジ編集長｜トレパン</strong><br>
        <span class="author-tag">筋トレ歴<?php echo date('Y') - 2017; ?>年 / プロテイン継続摂取<?php echo date('Y') - 2017; ?>年以上</span>
      </div>
    </div>
    <div class="author-text">
      <p class="author-bio">
        2017年から国内外のプロテインを実際に購入・摂取して、<br />
        味・溶けやすさ・コスパを継続的に比較しています。<br>
        得意種目はダンベルフライ。肩と三頭筋のシルエットにこだわったトレーニングを続けています。<br>
        このサイトでは実体験をもとに「続けやすくて自分に合う1杯」を見つけるための情報をお届けします。
      </p>
    </div>
  </div>
</section>

<?php
// 著者構造化データ（JSON-LD）
$years_experience = date('Y') - 2017;
?>
<script type="application/ld+json">
  {
    "@context": "https://schema.org",
    "@type": "Person",
    "name": "トレパン",
    "jobTitle": "トレハジ編集長",
    "description": "筋トレ歴<?php echo $years_experience; ?>年。国内外のプロテインを実際に購入・比較し続けている。",
    "url": "https://torehaji.com/about/",
    "knowsAbout": ["プロテイン", "筋トレ", "ボディメイク", "栄養補助食品"]
  }
</script>