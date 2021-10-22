<?php
/*
Template Name: request-a-demo
*/
?>
<?php get_header(); ?>

<section class="pt-0  ps-3 pe-lg-0  px-3">

  <div class="container">
    <div class="py-5 text-center">
      <h1 class="m-0" data-aos="fade"><?php _e("Book a demo", 'mozrest'); ?></h1>
    </div>
    <!-- Calendly inline widget begin -->
    <div class="calendly-inline-widget" data-url=" https://calendly.com/jerome-mozrest/mozrest-demo "
      style="min-width:320px;height:630px;"></div>
    <script type="text/javascript" src=" https://assets.calendly.com/assets/external/widget.js " async></script>
    <!-- Calendly inline widget end -->
  </div>
</section>


<?php get_footer(); ?>