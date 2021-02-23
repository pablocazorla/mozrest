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
      <div class="col-md-3" data-aos="fade-up">
        <a href="<?php bloginfo( 'url' ); ?>" class="footer-top_brand">
          <img class="img-100" src="<?php bloginfo('template_url'); ?>/img/logo.svg" alt="MOZREST" class="img-100">
        </a>
      </div>
      <div class="col-md-3" data-aos="fade-up" data-aos-delay="100">
        <nav class="fotter-top_nav">
          <h4>Company</h4>
          <a href="#">Restaurant</a>
          <a href="#">Market Place</a>
          <a href="#">Reservation Software</a>
          <a href="#">Blog</a>
          <a href="#">Contact</a>
        </nav>
      </div>
      <div class="col-md-3" data-aos="fade-up" data-aos-delay="200">
        <nav class="fotter-top_nav">
          <h4>Resources</h4>
          <a href="#">Opt In</a>
          <a href="#">Opt Out</a>
          <a href="#">Presence Check</a>
          <a href="#">Audit</a>
          <a href="#">Listing Video</a>
        </nav>
      </div>
      <div class="col-md-3" data-aos="fade-up" data-aos-delay="300">
        <nav class="fotter-top_nav">
          <h4>Other</h4>
          <a href="#">Privacy Policy</a>
          <a href="#">Terms and Conditions</a>
          <a href="#">Lorem Ipsum</a>
          <a href="#">Lorem Ipsum</a>
          <a href="#">Lorem Ipsum</a>
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
        echo esc_html__( 'Copyright © 2021 Mozrest.com. All Right Reserved.', 'mozrest' );
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