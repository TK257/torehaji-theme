<?php
/* ■ 税込価格を返すショートコード
----------------------------------- */
function get_zeikomi($attr)
{
  extract(shortcode_atts(array(
    'k' => "",
    'zeiritsu' => 1.1,
  ), $attr));
  return number_format(floor($k * $zeiritsu));
}
add_shortcode('price', 'get_zeikomi');
/*END ■ 税込価格を返すショートコード
*使い方はこれ [price k=税抜き価格]
----------------------------------- */
/* ■ 税込み価格を割った数字を返すショートコード
----------------------------------- */
function get_unit_price($attr)
{
  extract(shortcode_atts(array(
    'k' => "",
    'amount' => "",

  ), $attr));
  return number_format(($k * 1.1) / $amount, 1);
}
add_shortcode('per_price', 'get_unit_price');
/*END ■ 税込み価格を割った数字を返すショートコード
*使い方はこれ [per_price k=税抜き価格 amount=割りたい母数 ,表示したい小数点 ]
----------------------------------- */