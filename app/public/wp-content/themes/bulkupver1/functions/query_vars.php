<?php
  function add_custom_query_vars($query_vars) {
    $querys = array(
      'category',
      'tags'
    );
    foreach($querys as $val){
      $query_vars[] = $val;
    }
    return $query_vars;
  }
  add_filter('query_vars', 'add_custom_query_vars');
