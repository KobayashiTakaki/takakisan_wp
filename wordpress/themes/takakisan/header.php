<?php

?>
<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="utf-8">
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-122483867-1"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());
      gtag('config', 'UA-122483867-1');
    </script>
    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
    <script>
      (adsbygoogle = window.adsbygoogle || []).push({
        google_ad_client: "ca-pub-1028835021221490",
        enable_page_level_ads: true
      });
    </script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/img/favicon.png" />
    <link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_uri().'?'.date("YmdHis"); ?>">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <?php wp_head(); ?>
    <title>
      <?php wp_title('|', true, 'right'); ?>
      <?php bloginfo( 'name' ); ?>
    </title>
  </head>

  <body <?php body_class('container'); ?>>
    <div id="logo" class="row justify-content-center mt-4">
      <div class="col-lg-8 mb-1">
        <a href="<?php echo home_url(); ?>"><img class="logo" src="<?php echo get_stylesheet_directory_uri(); ?>/img/logo.png"></a>
      </div>
    </div>
    <div id="site-header" class="row">
      <header>
        <nav id="top-nav" class="navbar navbar-expand-lg navbar-light mb-1 px-0">
          <button class="navbar-toggler border-0" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fas fa-bars fa-lg"></i>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <?php wp_nav_menu(array(
                'theme_location' => 'top-nav',
                'container' => '',
                'menu_class' => '',
                'items_wrap' => '<ul class="navbar-nav pl-lg-0 pl-3">%3$s</ul>'
              ));
            ?>
          </div>
        </nav>
      </header>
    </div>
    <div id="fixed-nav" class="row">
        <nav class="navbar navbar-expand-lg navbar-light px-0">
          <button class="navbar-toggler border-0" type="button" data-toggle="collapse" data-target="#fixedNavbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fas fa-bars fa-lg"></i>
          </button>
          <div class="collapse navbar-collapse" id="fixedNavbarSupportedContent">
            <?php wp_nav_menu(array(
                'theme_location' => 'top-nav',
                'container' => '',
                'menu_class' => '',
                'items_wrap' => '<ul class="navbar-nav pl-3">%3$s</ul>'
              ));
            ?>
          </div>
        </nav>
    </div>
