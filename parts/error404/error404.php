<section class="pt-5">
  <div class="container text-center">
    <h3 class="text-yellow text-uppercase mb-4" data-aos="fade">
      Error 404
    </h3>
    <h1 class="mb-5" data-aos="fade-up">
      <?php _e("Lost?", 'mozrest'); ?><br />
      <?php _e("There's no place like", 'mozrest'); ?>
      <a class="text-blue" href="<?php bloginfo('url'); ?>"><?php _e("home", 'mozrest'); ?></a>
    </h1>
    <div class="row pt-2">
      <div class="col-md-5 pt-5" data-aos="fade">
        <p>
          <?php _e("Or, maybe, what you're looking for can be found here:", 'mozrest'); ?>
        </p>
        <div class="row justify-content-center">
          <div class="col-md-8">
            <a href="<?php get_url_by_slug('booking-channels-integration'); ?>"
              class="btn btn-outline-green d-block mb-4"><?php _e("Booking channels integration", 'mozrest'); ?>
            </a>
            <a href="<?php get_url_by_slug('profile-and-reviews-management'); ?>"
              class="btn btn-outline-pink d-block mb-4"><?php _e("Profiles & Reviews management", 'mozrest'); ?></a>
            <a href="<?php get_url_by_slug('contact'); ?>"
              class="btn btn-outline-primary d-block"><?php _e("Contact", 'mozrest'); ?></a>
          </div>
        </div>
      </div>
      <div class="col-md-7" data-aos="fade">
        <img class="img-responsive" src="<?php bloginfo('template_url'); ?>/img/home/how-works.png" alt="Error 404" />
      </div>
    </div>
  </div>
</section>