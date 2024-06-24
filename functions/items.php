<?php
/* ■ 商品アフィリ用ショートコード
----------------------------------- */
function get_items_link_full($attr)
{
  extract(shortcode_atts(array(
    'img' => "",
    'rakuten' => "",
    'yahoo' => "",
    'amazon' => "",
    'official' => "",
    'name' => "",
  ), $attr));
  $img_url = get_template_directory_uri() . '/assets/img/' . $img;
  return <<<EOM
<div class="item_box">
  <div class="item_img"><img src= "$img_url"></div>
    <div class="item_waku">
      <div class="item_name">$name</div>
      <div class="item_btn"> 
        <ul>
          <li class="item_amazon"><a href="$amazon" rel="nofollow">amazonで見る</a></li>
          <li class="item_rakuten"><a href="$rakuten" rel="nofollow">楽天市場で見る</a></li>
          <li class="item_yahoo"> <a href="$yahoo" rel="nofollow">Yahoo!ショッピングで見る</a></li>
          <li class="item_official"> <a href="$official" rel="nofollow">公式サイトで見る</a></li>
        </ul>
      </div>
    </div>
</div>
EOM;
}
add_shortcode('itemslink', 'get_items_link_full');
/* 使い方はこれ [itemslink img=画像の名前（スペースは全角） name=商品名 rakuten=楽天aflink yahoo=ヤフーlink amazon=アマゾンaflink official=公式サイトリンク]*/
/* アフィリエイト用の公式リンクなしバージョン */
function get_items_link_three($attr)
{
  extract(shortcode_atts(array(
    'img' => "",
    'rakuten' => "",
    'yahoo' => "",
    'amazon' => "",
    'name' => "",
  ), $attr));
  $img_url = get_template_directory_uri() . '/assets/img/' . $img;
  return <<<EOM
<div class="item_box">
  <div class="item_img"><img src= "$img_url"></div>
    <div class="item_waku">
      <div class="item_name">$name</div>
      <div class="item_btn"> 
        <ul>
          <li class="item_amazon"><a href="$amazon" rel="nofollow">amazonで見る</a></li>
          <li class="item_rakuten"><a href="$rakuten" rel="nofollow">楽天市場で見る</a></li>
          <li class="item_yahoo"> <a href="$yahoo" rel="nofollow">Yahoo!ショッピングで見る</a></li>
        </ul>
      </div>
    </div>
</div>
EOM;
}
add_shortcode('itemslink', 'get_items_link_three');
/* 使い方はこれ [itemslink img=画像の名前（スペースは全角） name=商品名 rakuten=楽天aflink yahoo=ヤフーlink amazon=アマゾンaflink ]*/
