<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width, initial-scale=1"><!-- OGP -->
<title><?php echo seo_meta_title(); ?></title><!-- カテゴリーのディスクリプションを表示させるfunctions.php // カテゴリーページの説明をディスクリプション出力する設定と連動 -->
<?php if (is_tax()) {    $description = get_meta_description_from_category();} else {    $description = seo_meta_description();}if (!empty($description)) :?><meta name="description" content="<?php echo esc_attr($description); ?>"><?php endif; ?>
<meta name="twitter:title" content="<?php echo seo_meta_title(); ?>">
<meta name="twitter:description" content="<?php echo seo_meta_description(); ?>">
<meta name="twitter:url" content="<?php echo seo_meta_url(); ?>">
<meta property="og:title" content="<?php echo seo_meta_title(); ?>">
<meta property="og:description" content="<?php echo seo_meta_description(); ?>">
<meta property="og:url" content="<?php echo seo_meta_url(); ?>">
<meta property="og:type" content="<?php echo seo_meta_type(); ?>">
<meta property="og:image" content="<?php echo seo_meta_ogp(); ?>">
<link rel="canonical" href="<?php echo seo_meta_url(); ?>">
<meta property="article:modified_time" content="<?php echo get_the_modified_time('c'); ?>">
<meta property="article:published_time" content="<?php echo get_the_time('c'); ?>"><!-- パーソナルジム比較系記事のnoindex -->
<?php if (is_singular() && has_term('comparison', 'gym_tag')) {    echo '<meta name="robots" content="noindex, follow">' . "\n";}?>
<!-- CSS -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.css"><!-- Add the slick-theme.css if you want default styling -->
<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"><!-- Add the slick-theme.css if you want default styling -->
<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css"><!-- FontAwesome -->
<script src="https://kit.fontawesome.com/0c905e8733.js" crossorigin="anonymous"></script><!-- Google Search Console -->
<meta name="google-site-verification" content="87raqkpqCLr31pI11qIsyqzzRvJxcYNA1oFH6xT1eCo"><!-- jquery -->
<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script><!-- noto sans jpを使用 -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@100..900&amp;display=swap" rel="stylesheet"><!-- END noto sans jpを使用 -->
<!-- ファビコン設定 -->
<link rel="shortcut icon" href="https://torehaji.com/wp-content/themes/git-SIB-standard/assets/img/logo/favicon.png"><!-- Twitter conversion tracking base code -->
<script>
  !function(e,t,n,s,u,a){
    e.twq||(s=e.twq=function(){
      s.exe?s.exe.apply(s,arguments):s.queue.push(arguments);
    },
    s.version='1.1',
    s.queue=[],
    u=t.createElement(n),
    u.async=!0,
    u.src='https://static.ads-twitter.com/uwt.js',
    a=t.getElementsByTagName(n)[0],
    a.parentNode.insertBefore(u,a))
  }(window,document,'script');
  twq('config','q090y');
  
</script><!-- End Twitter conversion tracking base code -->
<?php get_template_part('parts/json-ld'); ?>
<?php wp_head();?>
  </head>
  <body <?php body_class(); ?>>
    <header class="flexbox-nowrap margin-r15" id="header">
      <div><?php if (is_front_page() || is_home()): ?>  <div><a href="/" class="logo"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo/torehaji_site_logo.png" alt="<?php bloginfo('name'); ?>"></a></div><?php else: ?>  <h1><a href="/" class="logo"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo/torehaji_site_logo.png" alt="<?php bloginfo('name'); ?>"></a></h1><?php endif; ?></div>
      <div class="nav-menu" id="nav-button">
        <i class="fa-solid fa-bars"></i><nav class="sp-nav">
<?php wp_nav_menu(); ?>
</nav>
      </div>
    </header>
  </body>
</html>
<!-- header end -->