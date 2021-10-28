<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Mozrest
 */
?>

<div class="footer-top">
  <div class="container text-md-start text-center">
    <div class="row justify-content-start justify-content-xl-end">
      <div class="col-xl-2 col-lg-4 col-sm-6" data-aos="fade-up">
        <nav class="fotter-top_nav">
          <h4><?php _e('Products', 'mozrest'); ?></h4>
          <?php
          wp_nav_menu(
            array(
              'theme_location' => 'footer1',
              'menu_id'        => 'footer1-menu',
              'container' => '',
            )
          );
          ?>
        </nav>
      </div>
      <div class="col-xl-2 col-lg-4 col-sm-6" data-aos="fade-up">
        <nav class="fotter-top_nav">
          <h4><?php _e('Customers', 'mozrest'); ?></h4>
          <?php
          wp_nav_menu(
            array(
              'theme_location' => 'footer2',
              'menu_id'        => 'footer2-menu',
              'container' => '',
            )
          );
          ?>
        </nav>
      </div>
      <div class="col-xl-2 col-lg-4 col-sm-6" data-aos="fade-up">
        <nav class="fotter-top_nav">
          <h4><?php _e('Integrations', 'mozrest'); ?></h4>
          <?php
          wp_nav_menu(
            array(
              'theme_location' => 'footer3',
              'menu_id'        => 'footer3-menu',
              'container' => '',
            )
          );
          ?>
        </nav>
      </div>
      <div class="col-xl-2 col-lg-4 col-sm-6" data-aos="fade-up">
        <nav class="fotter-top_nav">
          <h4><?php _e('Company', 'mozrest'); ?></h4>
          <?php
          wp_nav_menu(
            array(
              'theme_location' => 'footer4',
              'menu_id'        => 'footer4-menu',
              'container' => '',
            )
          );
          ?>
        </nav>
      </div>
      <div class="col-xl-2 col-lg-5 col-sm-6" data-aos="fade-up">
        <nav class="fotter-top_nav">
          <h4><?php _e('Resources', 'mozrest'); ?></h4>
          <?php
          wp_nav_menu(
            array(
              'theme_location' => 'footer5',
              'menu_id'        => 'footer5-menu',
              'container' => '',
            )
          );
          ?>
        </nav>
      </div>
      <div class="col-xl-2 col-lg-4 col-sm-6" data-aos="fade-up">
        <h4><?php _e('Language', 'mozrest'); ?></h4>
        <div class="dropdown drop-lang-selector mb-2 mx-md-0 mx-auto">
          <div class="drop-lang-selector_btn" data-bs-toggle="dropdown" aria-expanded="false">
            <div class="row align-items-center">
              <div class="col-auto pe-0">
                <div class="drop-lang-selector_icon"><i class="fa fa-comment-o"></i></div>
              </div>
              <div class="col"><span class="selected-lang">English (UK)</span>
              </div>
              <div class="col-auto ps-0">
                <i class="mozresticons-chevron-down icon-caret"></i>
              </div>
            </div>
          </div>
          <?php
          wp_nav_menu(
            array(
              'theme_location' => 'MenuLanguage',
              'menu_id'        => 'MenuLanguage-menu',
              'menu_class' => 'dropdown-menu',
              'container' => '',
            )
          );
          ?>
        </div>
        <!-- <div class="dropdown drop-lang-selector mb-5 mx-md-0 mx-auto">
          <div class="drop-lang-selector_btn" data-bs-toggle="dropdown" aria-expanded="false">
            <div class="row align-items-center">
              <div class="col-auto pe-0">
                <div class="drop-lang-selector_icon"><i class="fa fa-map-marker"></i></div>
              </div>
              <div class="col">U. Kingdom</div>
              <div class="col-auto ps-0">
                <i class="mozresticons-chevron-down icon-caret"></i>
              </div>
            </div>
          </div>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">U. Kingdom</a></li>
            <li><a class="dropdown-item" href="#">United States</a></li>
            <li><a class="dropdown-item" href="#">Spain</a></li>
            <li><a class="dropdown-item" href="#">France</a></li>
          </ul>
        </div> -->
      </div>
      <div class="col-xl-2 col-lg-4 col-sm-6" data-aos="fade-up">
        <h4><?php _e('Call Us', 'mozrest'); ?></h4>
        <div class="mb-4"><a href="tel:+1646XXXXXXX" class="text-green2 text-bold text-decoration-none">+1 646 XXX
            XXXX</a></div>
        <h4><?php _e('Social Media', 'mozrest'); ?></h4>
        <nav class="footer-social">
          <a href="https://www.facebook.com/MozRest-103981881706191" target="_blank">
            <i class="icon fa fa-facebook"></i>
          </a>
          <a href="https://www.linkedin.com/company/mozrest/" target="_blank">
            <i class="icon fa fa-linkedin"></i>
          </a>
          <a href="https://twitter.com/Simply_MOZREST" target="_blank">
            <i class="icon fa fa-twitter"></i>
          </a>
          <a href="https://twitter.com/Simply_MOZREST" target="_blank">
            <i class="icon fa fa-instagram"></i>
          </a>
          <a href="https://twitter.com/Simply_MOZREST" target="_blank">
            <i class="icon fa fa-youtube-play"></i>
          </a>
        </nav>
      </div>
    </div>
  </div>
</div>
<div class="push"></div>
</div><!-- .main-wrap -->
<footer class="main-footer">
  <div class="container" data-aos="fade">
    <div class="row">
      <div class="col-md-6 order-md-1 order-2">
        <div class="footer-brand mb-3 mx-md-0 mx-auto">
          <img class="img-responsive" src="<?php bloginfo('template_url'); ?>/img/logo.svg" alt="MOZREST" />
        </div>
        <p class="text-md-start text-center">&copy; <?php echo date("Y"); ?> Mozrest Ltd. All Rights Reserved.<br />
          29 Corringham Road, HA9 9PX Wembley, UK</p>
      </div>
      <div class="col-md-6 order-md-2 order-1">
        <div class="footer-bottom-menu text-md-end text-center  mb-3">
          <?php
          wp_nav_menu(
            array(
              'theme_location' => 'footerBottom',
              'menu_id'        => 'footerBottom-menu',
              'container' => '',
            )
          );
          ?>
        </div>
      </div>
    </div>

  </div>
</footer>

<?php wp_footer(); ?>

</body>

</html>