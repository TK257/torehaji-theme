<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width, initial-scale=1"><!-- OGP -->
<title><?php echo seo_meta_title(); ?></title><!-- カテゴリーのディスクリプションを表示させるfunctions.php // カテゴリーページの説明をディスクリプション出力する設定と連動 -->
<?php if (is_tax()) : ?> <meta name="description" content="<?php echo get_meta_description_from_category(); ?>" /><?php endif; ?>
<meta name="description" content="<?php echo seo_meta_description(); ?>">
<meta name="twitter:title" content="<?php echo seo_meta_title(); ?>">
<meta name="twitter:description">
<meta name="twitter:url" content="<?php echo seo_meta_url(); ?>">
<meta property="og:title" content="<?php echo seo_meta_title(); ?>">
<meta property="og:description" content="<?php echo seo_meta_description(); ?>">
<meta property="og:url" content="<?php echo seo_meta_url(); ?>">
<meta property="og:type" content="<?php echo seo_meta_type(); ?>">
<meta property="og:image" content="<?php echo seo_meta_ogp(); ?>">
<link rel="canonical" href="<?php echo seo_meta_url(); ?>">
<meta name="description" content="&lt;?php echo $cat_description; ?&gt;"><!-- CSS -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.css"><!-- Add the slick-theme.css if you want default styling -->
<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"><!-- Add the slick-theme.css if you want default styling -->
<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css"><!-- FontAwesome -->
<script src="https://kit.fontawesome.com/0c905e8733.js" crossorigin="anonymous"></script><!-- Google Search Console -->
<meta name="google-site-verification" content="87raqkpqCLr31pI11qIsyqzzRvJxcYNA1oFH6xT1eCo">
<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
<script type="text/javascript" language="javascript">var vc_pid = "890189095";</script>
<script type="text/javascript" src="//aml.valuecommerce.com/vcdal.js" async></script><?php wp_head();?>
  </head>
  <body>
    <header>
      <div class="header-waku">
        <div class="nav-menu" id="nav-button">
          <i class="fa-solid fa-bars"></i><?php include("header-sp-menu.php"); ?></div><a class="logo-top" href="/"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo/BULKUPtopsp_min.png" alt="BULKUPのサイトロゴ"></a><a id="headerbtn" href="/contact">
          <button class="btn3 btn3-darkpink">掲載をご検討の方へ</button></a>
      </div>
      <div class="header-afmongon">当サイトはアフィリエイト広告（Amazonアソシエイト含む）を掲載しています。</div>
    </header>
  </body>
</html>
<!-- header end -->