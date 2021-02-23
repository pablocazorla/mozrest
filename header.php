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

  <?php wp_head(); ?>
</head>

<body>

  <div class="main-wrapper">
    <header class="main-header" id="main-header" data-aos="fade-down">
      <div class="container">
        <div class="row no-gutters align-items-center">
          <div class="col-sm col-6">
            <a href="<?php bloginfo( 'url' ); ?>" class="main-brand">
              <img src="<?php bloginfo('template_url'); ?>/img/logo.svg" alt="MOZREST">
            </a>
          </div>
          <div class="col-6 d-md-none d-block">
            <button class="main-menu_mobile-trigger" id="main-menu_mobile-trigger">
              <span class="line-1"></span><span class="line-2"></span><span class="line-3"></span>
            </button>
          </div>
          <div class="col-md col-sm-12 relative">
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