/* ■ 税込価格を返すショートコード
----------------------------------- */
function get_zeikomi($attr){
extract(shortcode_atts(array(
'k' => "",
), $attr));
return number_format(floor($k * 1.1));
}
add_shortcode('price', 'get_zeikomi');
/*END ■ 税込価格を返すショートコード
*使い方はこれ [price k=ここに数値]
----------------------------------- */