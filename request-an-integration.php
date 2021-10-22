<?php
/*
Template Name: request-an-integration
*/
?>
<?php get_header(); ?>

<section class="pt-0  ps-3 pe-lg-0  px-3">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-8">
        <div class="pt-5 text-center">
          <h1 class="mb-5" data-aos="fade"><?php _e("Request an integration", 'mozrest'); ?></h1>
          <p class="text-bold text-yellow" data-aos="fade-up">
            <?php _e("If your systems don't connect yet with Mozrest, contact us, and we'll have it ready for you.", 'mozrest'); ?>
          </p>
          <p data-aos="fade-up">
            <b><?php _e("Step 1", 'mozrest'); ?></b><br />
            <?php _e("Let us know which integration you want to add to the Mozrest ecosystem.", 'mozrest'); ?>
          </p>
          <p data-aos="fade-up">
            <b><?php _e("Step 2", 'mozrest'); ?></b><br />
            <?php _e("We add your integration to Mozrest.", 'mozrest'); ?>
          </p>
          <p data-aos="fade-up">
            <b><?php _e("Step 3", 'mozrest'); ?></b><br />
            <?php _e("Receive all your bookings in one place.", 'mozrest'); ?>
          </p>
        </div>
        <!-- Calendly inline widget begin -->
        <div class="calendly-inline-widget" data-url=" https://calendly.com/jerome-mozrest/mozrest-demo "
          style="min-width:320px;height:630px;"></div>
        <script type="text/javascript" src=" https://assets.calendly.com/assets/external/widget.js " async></script>
        <!-- Calendly inline widget end -->
      </div>
    </div>

  </div>
</section>


<?php get_footer(); ?>