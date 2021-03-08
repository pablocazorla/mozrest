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
  <!-- <script id="cookieyes" type="text/javascript" src="https://cdn-cookieyes.com/client_data/4d662d622bac22e1dfdd5a44.js">
  </script> -->
  <!-- End cookieyes banner -->

  <?php wp_head(); ?>
</head>

<body>
  <!-- Google Tag Manager (noscript) -->
  <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=<?php echo $GTM; ?>" height="0" width="0"
      style="display:none;visibility:hidden"></iframe></noscript>
  <!-- End Google Tag Manager (noscript) -->
  <div class="main-wrapper">
    <header class="main-header" id="main-header" data-aos="fade-down">
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