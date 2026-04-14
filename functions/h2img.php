<?php
/* h2画像を挿入できるショートコード
----------------------------------- */
function get_h2img($attr)
{
  extract(shortcode_atts(array(
    'filename' => "",
    'h2title' => "",
    'alt' => "",
  ), $attr));
  return '<h2>' . $h2title . '</h2><img src="' . get_template_directory_uri() . '/assets/img/common/' . $filename . '" alt=" ' . $alt . ' ">';
}
add_shortcode('h2img', 'get_h2img');
//入力*使い方はこれ
//[h2img filename=magazine/記事ID/photo_01.jpg h2title=見出しタイトル alt=alt]
//出力
//'<h2>h2タイトル</h2><img src="'.get_template_directory_uri().'/assets/img/common/' .magazine/1111/filename.jpg . '" alt=" $alt ">';
/*END h2画像を挿入できるショートコード
/*画像を挿入できるショートコード
----------------------------------- */
function get_imginsert($attr)
{
  extract(shortcode_atts(array(
    'filename' => "",
    'alt' => "",
  ), $attr));
  return '<img class="kin_tre" src="' . get_template_directory_uri() . '/assets/img/' . $filename . '" alt=" ' . $alt . ' ">';
}
add_shortcode('imginsert', 'get_imginsert');
//入力*使い方はこれ
//[imginsert filename=magazine/記事ID/photo_01.webp alt=alt]
//出力
//'<img src="'.get_template_directory_uri().'/assets/img/common/' .magazine/1111/filename.webp . '" alt=" $alt ">';
/*END 画像を挿入できるショートコード
//gifを挿入できるショートコード
----------------------------------- */
function get_gifinsert($attr)
{
  extract(shortcode_atts(array(
    'filename' => "",
    'alt' => "",
  ), $attr));
  return '<img class="kin_tre" src="' . get_template_directory_uri() . '/assets/img/' . $filename . '" alt=" ' . $alt . ' ">';
}
add_shortcode('gifinsert', 'get_gifinsert');
//入力*使い方はこれ
//[gifinsert filename=magazine/記事ID/photo_01.gif alt=alt]
//出力
//'<img src="'.get_template_directory_uri().'/assets/img/' .magazine/1111/filename.gif . '" alt=" $alt ">';
