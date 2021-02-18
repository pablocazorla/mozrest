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
<div class="push"></div>
</div><!-- .main-wrap -->
<footer class="main-footer">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-lg-6 offset-lg-3 col-md-8 order-md-1 order-2">
        <?php				
        echo esc_html__( 'Copyright © 2021 Mozrest.com. All Right Reserved.', 'mozrest' );
		?>
      </div>
      <div class="col-lg-3 col-md-4 order-md-2 order-1">
        <nav class="footer-social">
          <a href="#">
            <i class="fa fa-facebook"></i>
          </a>
          <a href="#">
            <i class="fa fa-instagram"></i>
          </a>
          <a href="#">
            <i class="fa fa-twitter"></i>
          </a>
        </nav>
      </div>
    </div>

  </div>
</footer>


<?php wp_footer(); ?>

</body>

</html>