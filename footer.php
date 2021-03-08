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
    <div class="row">
      <div class="col-md-3">
        <a href="<?php bloginfo( 'url' ); ?>" class="footer-top_brand">
          <img class="img-100" src="<?php bloginfo('template_url'); ?>/img/logo.svg" alt="MOZREST" class="img-100">
        </a>
      </div>
      <div class="col-md-3">
        <nav class="fotter-top_nav">
          <h4><?php esc_html_e( 'Company', 'mozrest' ); ?></h4>
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
      <div class="col-md-3">
        <nav class="fotter-top_nav">
          <h4><?php esc_html_e( 'Resources', 'mozrest' ); ?></h4>
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
      <div class="col-md-3">
        <nav class="fotter-top_nav">
          <h4><?php esc_html_e( 'Legal', 'mozrest' ); ?></h4>
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
    </div>
  </div>
</div>
<div class="push"></div>
</div><!-- .main-wrap -->
<footer class="main-footer">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-lg-6 offset-lg-3 col-md-8 order-md-1 order-2">
        <?php				
        esc_html_e( 'Copyright © 2021 Mozrest.com. All Right Reserved.', 'mozrest' );
		?>
      </div>
      <div class="col-lg-3 col-md-4 order-md-2 order-1">
        <nav class="footer-social">
          <a href="#">
            <i class="icon mozresticons-facebook"></i>
          </a>
          <a href="#">
            <i class="icon mozresticons-instagram"></i>
          </a>
          <a href="#">
            <i class="icon mozresticons-twitter"></i>
          </a>
        </nav>
      </div>
    </div>

  </div>
</footer>


<?php wp_footer(); ?>

</body>

</html>