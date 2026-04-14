<?php

/**
 * ACFにFAQがあるページだけ <html itemscope itemtype="https://schema.org/FAQPage"> を付与
 */
add_filter('language_attributes', function ($output) {
  // シングルページ以外は何もしない
  if (!is_singular()) return $output;

  // 対象の投稿タイプだけに限定（不要ならこの行は外してOK）
  if (!is_singular('personal_gym')) return $output;

  $has_faq = false;

  // ACF: WYSIWYGやtextareaにmicrodata入りFAQを保存している場合（例: faq_html）
  if (function_exists('get_field')) {
    $faq_html = get_field('faq_html');
    if (!empty($faq_html)) {
      $has_faq = true;
    }

    // ACF: リピーター（例: faqs / question, answer）
    if (!$has_faq && function_exists('have_rows') && have_rows('faqs')) {
      // 行が1つでもあればFAQありとみなす
      $has_faq = true;
    }
  }

  if ($has_faq) {
    // すでに itemscope / itemtype が付いていない場合だけ追記（多重付与防止）
    if (strpos($output, 'itemscope') === false) {
      $output .= ' itemscope';
    }
    if (strpos($output, 'itemtype=') === false) {
      $output .= ' itemtype="https://schema.org/FAQPage"';
    }
  }

  return $output;
}, 10);
