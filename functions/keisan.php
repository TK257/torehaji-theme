<?php
/* 複利計算
----------------------------------- */
function get_fukuri($attr)
{
  extract(shortcode_atts(array(
    'ganpon' => "",
    'riritsu' => "",
    'kikan' => "",

  ), $attr));
  return number_format($ganpon * (1 + $riritsu / 1) ^ (1 * $kikan));
}
add_shortcode('fukuri', 'get_fukuri');
/*END ■ 税込み価格を割った数字を返すショートコード
*使い方はこれ [fukuri ganpon=元本 riritsu=想定利回り kikan=運用期間 ]
----------------------------------- */
