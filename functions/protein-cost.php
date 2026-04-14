<?php
function torehaji_enqueue_protein_calc_script()
{
  wp_enqueue_script(
    'protein-calc',
    get_stylesheet_directory_uri() . '/js/protein-calc.js',
    array(),
    '1.1',
    true
  );
}
add_action('wp_enqueue_scripts', 'torehaji_enqueue_protein_calc_script');
