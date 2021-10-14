<?php
/*
Template Name: How it Works
*/
?>
<?php get_header(); ?>
<section>
  <div class="container">
    <div class="text-center mb-5">
      <div class="row justify-content-center">
        <div class="col-lg-9">
          <h4 class="text-yellow mb-4 text-uppercase" data-aos="fade-up"><?php _e("How it Works", 'mozrest'); ?></h4>
          <h2 class="mb-4" data-aos="fade-up">
            <?php _e('Get your customer acquisition simplified and optimised with Mozrest', 'mozrest'); ?></h2>
          <p data-aos="fade-up">
            <?php _e("Whether you’re running a restaurant, a garage, a beauty salon or any other kind of business with online reservations, Mozrest simplifies and optimises your customer acquisition so you can relax and focus on what's more important to you: <b>your core business and your lovely customers.</b>", 'mozrest'); ?>
          </p>
        </div>
      </div>
    </div>
    <div class="row justify-content-center mb-5">
      <div class="col-lg-8">
        <div class="row g-5">
          <div class="col-md-6" data-aos="fade">
            <div class="ratio ratio-16x9 ratio-img">
              <img src="<?php bloginfo('template_url'); ?>/img/howitworks/hw1.jpg" alt="" />
            </div>
          </div>
          <div class="col-md-6" data-aos="fade">
            <h4 class="text-yellow mb-4 text-uppercase"><?php _e("Step 1 - SETUP", 'mozrest'); ?></h4>
            <p class="text-bold"><?php _e("We connect your multiple Reservation Portals to your unique Reservation Management
              System", 'mozrest'); ?></p>
            <p><?php _e("We take care of the set-up process, aggregating your existing online and third-party booking channels
              (Reserve with Google, Facebook, TableOnline, and so many more) to your Mozrest account. No need to make
              you change your Reservation Management System in the process.", 'mozrest'); ?></p>
          </div>
          <div class="col-md-6" data-aos="fade">
            <div class="ratio ratio-16x9 ratio-img">
              <img src="<?php bloginfo('template_url'); ?>/img/howitworks/hw2.jpg" alt="" />
            </div>
          </div>
          <div class="col-md-6" data-aos="fade">
            <h4 class="text-yellow mb-4 text-uppercase"><?php _e("Step 2 - MANAGE INCOMING RESERVATIONS", 'mozrest'); ?>
            </h4>
            <p class="text-bold">
              <?php _e("Receive all your online reservations in your Reservation Management System", 'mozrest'); ?></p>
            <p><?php _e("We provide reliable two-way integrations, pushing all your online reservations to your Reservation
              Management System so you instantly get a complete overview of all your reservations.", 'mozrest'); ?></p>
          </div>
          <div class="col-md-6" data-aos="fade">
            <div class="ratio ratio-16x9 ratio-img">
              <img src="<?php bloginfo('template_url'); ?>/img/howitworks/hw3.jpg" alt="" />
            </div>
          </div>
          <div class="col-md-6" data-aos="fade">
            <h4 class="text-yellow mb-4 text-uppercase"><?php _e("Step 3 - OPERATIONAL FLOW", 'mozrest'); ?></h4>
            <p class="text-bold">
              <?php _e("Say goodbye to reservation mistakes and operational headaches.", 'mozrest'); ?></p>
            <p><?php _e("Your availabilities are constantly updated, improving your operational flow and giving you time to focus
              on your core business and lovely customers.", 'mozrest'); ?></p>
          </div>
        </div>
      </div>
    </div>
    <div class="text-center" data-aos="fade-up">
      <a href="<?php get_url_by_slug('request-a-demo'); ?>"
        class="btn btn-primary"><?php _e("Request a demo", 'mozrest'); ?></a>
    </div>

</section>
<?php get_footer(); ?>