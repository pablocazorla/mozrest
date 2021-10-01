<?php
/**
 *
 * @package Mozrest
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="profile" href="https://gmpg.org/xfn/11">

  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@700&family=Open+Sans:wght@400;700&display=swap"
    rel="stylesheet">

  <link rel="apple-touch-icon" sizes="57x57" href="<?php bloginfo('template_url'); ?>/favicon/apple-icon-57x57.png">
  <link rel="apple-touch-icon" sizes="60x60" href="<?php bloginfo('template_url'); ?>/favicon/apple-icon-60x60.png">
  <link rel="apple-touch-icon" sizes="72x72" href="<?php bloginfo('template_url'); ?>/favicon/apple-icon-72x72.png">
  <link rel="apple-touch-icon" sizes="76x76" href="<?php bloginfo('template_url'); ?>/favicon/apple-icon-76x76.png">
  <link rel="apple-touch-icon" sizes="114x114" href="<?php bloginfo('template_url'); ?>/favicon/apple-icon-114x114.png">
  <link rel="apple-touch-icon" sizes="120x120" href="<?php bloginfo('template_url'); ?>/favicon/apple-icon-120x120.png">
  <link rel="apple-touch-icon" sizes="144x144" href="<?php bloginfo('template_url'); ?>/favicon/apple-icon-144x144.png">
  <link rel="apple-touch-icon" sizes="152x152" href="<?php bloginfo('template_url'); ?>/favicon/apple-icon-152x152.png">
  <link rel="apple-touch-icon" sizes="180x180" href="<?php bloginfo('template_url'); ?>/favicon/apple-icon-180x180.png">
  <link rel="icon" type="image/png" sizes="192x192"
    href="<?php bloginfo('template_url'); ?>/favicon/android-icon-192x192.png">
  <link rel="icon" type="image/png" sizes="32x32" href="<?php bloginfo('template_url'); ?>/favicon/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="96x96" href="<?php bloginfo('template_url'); ?>/favicon/favicon-96x96.png">
  <link rel="icon" type="image/png" sizes="16x16" href="<?php bloginfo('template_url'); ?>/favicon/favicon-16x16.png">
  <link rel="manifest" href="<?php bloginfo('template_url'); ?>/favicon/manifest.json">
  <meta name="msapplication-TileColor" content="#ffffff">
  <meta name="msapplication-TileImage" content="<?php bloginfo('template_url'); ?>/favicon/ms-icon-144x144.png">
  <meta name="theme-color" content="#ffffff">

  <script src="https://cdn-eu.pagesense.io/js/mozrest/8eefa95843d84b1e80f6150a68c9802f.js"></script>

  <!-- Google Tag Manager -->
  <?php
    $GTM = 'GTM-T33BZF3';
  ?>

  <script>
  (function(w, d, s, l, i) {
    w[l] = w[l] || [];
    w[l].push({
      'gtm.start': new Date().getTime(),
      event: 'gtm.js'
    });
    var f = d.getElementsByTagName(s)[0],
      j = d.createElement(s),
      dl = l != 'dataLayer' ? '&l=' + l : '';
    j.async = true;
    j.src =
      'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
    f.parentNode.insertBefore(j, f);
  })(window, document, 'script', 'dataLayer', '<?php echo $GTM; ?>');
  </script>
  <!-- End Google Tag Manager -->

  <!-- Start cookieyes banner -->
  <script id="cookieyes" type="text/javascript" src="https://cdn-cookieyes.com/client_data/4d662d622bac22e1dfdd5a44.js">
  </script>
  <!-- End cookieyes banner -->

   <!-- Start zoho marketing hub -->
  <script>var w=window;var p = w.location.protocol;if(p.indexOf("http") < 0){p = "http"+":";}var d = document;var f = d.getElementsByTagName('script')[0],s = d.createElement('script');s.type = 'text/javascript'; s.async = false; if (s.readyState){s.onreadystatechange = function(){if (s.readyState=="loaded"||s.readyState == "complete"){s.onreadystatechange = null;try{loadwaprops('3z403f7d55ff9c7e60971f2ca6bc94d4ed','3zb42549bdf1e018a5d207df703d42728e','3z46d6bf38e5e4be8033b83fd919e8499f98db014cf2b1cced545f58fe34c57e24','3zfd790c7b29b80a7cb831ecd55872cc53',0.0);}catch(e){}}};}else {s.onload = function(){try{loadwaprops('3z403f7d55ff9c7e60971f2ca6bc94d4ed','3zb42549bdf1e018a5d207df703d42728e','3z46d6bf38e5e4be8033b83fd919e8499f98db014cf2b1cced545f58fe34c57e24','3zfd790c7b29b80a7cb831ecd55872cc53',0.0);}catch(e){}};};s.src =p+'//mh.zoho.eu/hub/js/WebsiteAutomation.js'; f.parentNode.insertBefore(s, f);</script>
  <!-- End zoho marketing hub -->

  <?php wp_head(); ?>
</head>

<body>
  <!-- Google Tag Manager (noscript) -->
  <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=<?php echo $GTM; ?>" height="0" width="0"
      style="display:none;visibility:hidden"></iframe></noscript>
  <!-- End Google Tag Manager (noscript) -->
  <div class="main-wrapper">
    <header class="main-header" id="main-header" data-aos="fade">
      <div class="container">
        <div class="row no-gutters align-items-md-center align-items-start">
          <div class="col-6">
            <a href="<?php bloginfo( 'url' ); ?>" class="main-brand">
              <img src="<?php bloginfo('template_url'); ?>/img/logo.svg" alt="MOZREST">
            </a>
          </div>
          <div class="col-6 d-lg-none d-block">
            <button class="main-menu_mobile-trigger" id="main-menu_mobile-trigger">
              <span class="line-1"></span><span class="line-2"></span><span class="line-3"></span>
            </button>
          </div>
          <div class="col-lg-6 col-md-12">
            <menu class="main-menu" id="main-menu">
              <?php
                wp_nav_menu(
                  array(
                    'theme_location' => 'primary',
                    'menu_id'        => 'primary-menu',
                    'container' => '',
                  )
                );
              ?>
            </menu>
          </div>
        </div>

      </div>
    </header>