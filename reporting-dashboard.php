<?php
/*
Template Name: reporting-dashboard
*/
?>
<?php get_header(); ?>

<section class="pt-0  ps-3 pe-lg-0  px-3">
  <div class="py-5 text-center">
    <h1 class="m-0" data-aos="fade"><?php _e("Reporting dashboards", 'mozrest'); ?></h1>
  </div>
  <div class="row g-0">
    <div class="col-lg-6 py-3">
      <div class="container semi-container me-lg-0" data-aos="fade">
        <div class="ps-3 pe-lg-5 px-3 pb-4">
          <?php _e("<p><b>Mozrest Reporting Dashboards</b> help you know your business better than before, thanks to user-friendly insightful analytics and reporting functions accessible from one screen, that you can easily export.</p><p>· Bookings performance<br/>· Online communications performance<br/>· Customers engagement activities</p><p>These online centralised marketing dashboards will allow you to keep track of your performance and better understand how to improve them.</p>", 'mozrest'); ?>
          <p class="m-0">
            <a href="<?php get_url_by_slug('request-a-demo'); ?>" class="btn btn-yellow chat-bot">
              <?php _e('Request a demo', 'mozrest'); ?>
            </a>
          </p>
        </div>
      </div>
    </div>
    <div class="col-lg-6">
      <div class="ratio ratio-16x9 ratio-img">
        <img src="<?php bloginfo('template_url'); ?>/img/reporting.jpg" alt="Mozrest">
      </div>
    </div>
  </div>
</section>
<section class="pt-4">
  <div class="container">
    <h3 class="text-uppercase text-center mb-5">
      <?php _e('BOOKINGS DASHBOARD', 'mozrest'); ?>
    </h3>
    <div class="row justify-content-center pt-4">
      <div class="col-lg-9">
        <div class="row align-items-center mb-5">
          <div class="col-md-6" data-aos="fade">
            <p class="text-bold">
              <?php _e('All bookings centralised', 'mozrest'); ?>
            </p>
            <p class="block-size-2 ms-0">
              <?php _e('Mozrest consolidates all your bookings information to one clear overview and generates regular bookings reports.', 'mozrest'); ?>
            </p>
          </div>
          <div class="col-md-6" data-aos="fade" data-aos-delay="200">
            <img class="img-auto" src="<?php bloginfo('template_url'); ?>/img/booking-channels-integration/bci-1.png"
              alt="MOZREST" />
          </div>
        </div>
        <div class="row align-items-center mb-5">
          <div class="col-md-6 order-md-2 order-1" data-aos="fade">
            <p class="text-bold">
              <?php _e('All cancelations centralised', 'mozrest'); ?>
            </p>
            <p class="block-size-2 ms-0">
              <?php _e('Identify opportunities across reservation platforms to adapt your tactics and decrease your cancellation and no-show rate.', 'mozrest'); ?>
            </p>
          </div>
          <div class="col-md-6 order-md-1 order-2" data-aos="fade" data-aos-delay="200">
            <img class="img-auto" src="<?php bloginfo('template_url'); ?>/img/booking-channels-integration/bci-2.png"
              alt="MOZREST" />
          </div>
        </div>
        <div class="row align-items-center mb-5">
          <div class="col-md-6" data-aos="fade">
            <p class="text-bold">
              <?php _e('Increase your revenue', 'mozrest'); ?>
            </p>
            <p class="block-size-2 ms-0">
              <?php _e('Equipped with insightful analytics and reporting functions, you can highlight opportunities for revenue growth and take your business to the next level.', 'mozrest'); ?>
            </p>
          </div>
          <div class="col-md-6" data-aos="fade" data-aos-delay="200">
            <img class="img-auto" src="<?php bloginfo('template_url'); ?>/img/booking-channels-integration/bci-3.png"
              alt="MOZREST" />
          </div>
        </div>
      </div>
    </div>
    <div class="text-center pt-2">
      <a href="<?php get_url_by_slug('booking-channels-integration'); ?>" class="btn btn-outline-pink me-2">
        <?php _e('Discover how it works', 'mozrest'); ?>
      </a>
      <a href="<?php get_url_by_slug('request-a-demo'); ?>" class="btn btn-pink">
        <?php _e('Request a demo to discover more features', 'mozrest'); ?>
      </a>
    </div>
  </div>
</section>

<section class="pt-4">
  <div class="container">
    <h3 class="text-uppercase text-center mb-5">
      <?php _e('PROFILES & REVIEWS DASHBOARD', 'mozrest'); ?>
    </h3>
    <div class="row justify-content-center pt-4">
      <div class="col-lg-9">
        <div class="row align-items-center mb-5">
          <div class="col-md-6" data-aos="fade">
            <p class="text-bold">
              <?php _e('Profile completeness & Duplicates overview', 'mozrest'); ?>
            </p>
            <p class="block-size-2 ms-0">
              <?php _e('Mozrest helps you get your profiles updated and accurate on a large pannel of social media and online guides. Moreover, we help you find, claim, and correct your listings across the web to keep your listings free of malicious duplicates and incorrect data.', 'mozrest'); ?>
            </p>
          </div>
          <div class="col-md-6" data-aos="fade" data-aos-delay="200">
            <img class="img-auto" src="<?php bloginfo('template_url'); ?>/img/profile-and-reviews-management/pro-1.png"
              alt="MOZREST" />
          </div>
        </div>
        <div class="row align-items-center mb-5">
          <div class="col-md-6 order-md-2 order-1" data-aos="fade">
            <p class="text-bold">
              <?php _e('Average rating on & Reviews reply rate', 'mozrest'); ?>
            </p>
            <p class="block-size-2 ms-0">
              <?php _e('Be alerted the moment a review about your business is created and reply to each of them from one place, whether they come from Google, Facebook or any other site.', 'mozrest'); ?>
            </p>
          </div>
          <div class="col-md-6 order-md-1 order-2" data-aos="fade" data-aos-delay="200">
            <img class="img-auto" src="<?php bloginfo('template_url'); ?>/img/profile-and-reviews-management/pro-2.png"
              alt="MOZREST" />
          </div>
        </div>
        <div class="row align-items-center mb-5">
          <div class="col-md-6" data-aos="fade">
            <p class="text-bold">
              <?php _e('Facebook clicks & Google clicks', 'mozrest'); ?>
            </p>
            <p class="block-size-2 ms-0">
              <?php _e('Equipped with insightful analytics and reporting functions, you can highlight opportunities for revenue growth and take your business to the next level.', 'mozrest'); ?>
            </p>
          </div>
          <div class="col-md-6" data-aos="fade" data-aos-delay="200">
            <img class="img-auto" src="<?php bloginfo('template_url'); ?>/img/profile-and-reviews-management/pro-3.png"
              alt="MOZREST" />
          </div>
        </div>
      </div>
    </div>
    <div class="text-center pt-2">
      <a href="<?php get_url_by_slug('profile-and-reviews-management'); ?>" class="btn btn-outline-pink me-2">
        <?php _e('Discover how it works', 'mozrest'); ?>
      </a>
      <a href="<?php get_url_by_slug('request-a-demo'); ?>" class="btn btn-pink">
        <?php _e('Request a demo to discover more features', 'mozrest'); ?>
      </a>
    </div>
  </div>
</section>

<?php get_template_part('parts/subscribe/subscribe-long-box'); ?>

<?php get_footer(); ?>