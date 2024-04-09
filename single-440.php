<?php /** * Template Name: トレーニングジムの選び方 *//** * Template Post Type: magazine */  get_header(); ?>
<article>
  <section>
    <div class="container"> 
      <div class="breadcrumb"><?php get_template_part('functions/breadcrumb'); ?></div>
      <h1 class="gym"><?php echo get_the_title(); ?></h1>
      <div class="post-thumbnail imgcenter"><?php the_post_thumbnail('thumbnail'); ?></div>
      <div>運動しようと思い立って、ジムを探し始めたあなたは、素晴らしい第一歩を踏み出そうとしています。<br>ダイエットやボディメイクで人生が変わったという方はたくさんいます！<br>その第一歩がジム選びです。<br>どんなジムがあり、どのようにジムを選んでいくのか考えていきましょう。<br>初めてジムを選ぶ方や以前、ジムに通っていたけど、長続きしなかった方に、最適なジムを選んで自分が思い描く身体を目指して頑張りましょう！</div>
      <h2 class="kon">トレーニングジムで、何をすればいいの？</h2>
      <div>ダイエットや運動不足の解消、ボディメイクなど目的があり、ジムを探し始めたと思います。<br>でも、<br>ジムに行って何をすればいいの？<br>という方も多いのではないでしょうか？</div>
      <div>おおまかにですが、目的別にジムで何をするか以下のようになります。</div>
      <div class="example">
        <ul>
          <li>運動不足の解消<br>&emsp;&nbsp;有酸素運動 or 筋力トレーニング</li>
          <li>ダイエット<br>&emsp;&nbsp;有酸素運動 and 筋力トレーニング</li>
          <li>ボディメイク<br>&emsp;&nbsp;筋力トレーニング</li>
        </ul>
      </div>
      <h2 class="kon">トレーニングジムで、できること</h2>
      <div>トレーニングジムで、できることはたくさんあります。たとえば以下のようなことができます。</div>
      <div class="search-list">
        <ul class="protein">
          <li>有酸素運動</li>
          <li>筋力トレーニング</li>
          <li>ストレッチ</li>
          <li>ヨガ</li>
          <li>グループプログラム</li>
          <li>パーソナルトレーニング</li>
          <li>加圧トレーニング</li>
          <li>マッサージ</li>
          <li>エステ</li>
          <li>プール</li>
          <li>サウナ</li>
          <li>お風呂</li>
          <li>シャワー</li>
        </ul>
      </div>
      <div>グループプログラムとは、大きな個室で、インストラクターさんの動きをみんなで真似をします。<br>種類は豊富でヨガ・ダンス・空手・ボクシング・など様々なものが用意されています。<br>グループプログラムでジム仲間ができる方も多く、プログラムを目的に通っている方もいらっしゃいます。</div>
      <h2 class="kon">やりたいことができるところを選ぶ</h2>
      <div>やりたいことができる施設を選ぶことが大事です。<br>有酸素運動と一言で言っても、ウォーキング、ランニング、バイク、サイクリング、スイミング、ダンスエクササイズなどがあります。<br>プールがなければスイミングはできないですし、バイクマシンがなければサイクリングはできません。<br></div>
      <div class="item_box">
        <div class="item_img"><img src="$img"></div>
        <div>
          <div class="item_name">商品名だよ</div>
          <div class="item_btn"> 
            <ul>
              <li class="item_amazon"><a href="/">amazonで見る</a></li>
              <li class="item_rakuten"><a href="/">楽天市場で見る</a></li>
              <li class="item_yahoo"> <a href="/">Yahoo!ショッピングで見る</a></li>
              <li class="item_official"> <a href="/">公式サイトで見る</a></li>
            </ul>
          </div>
        </div>
      </div><?php the_content(); ?>
    </div>
  </section>
  <section> </section>
</article><?php get_footer(); ?>