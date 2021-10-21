<?php get_header(); ?>
<section>
  <div class="container">
    <div class="row justify-content-center mb-5">
      <div class="col-md-6 text-md-start text-center">
        <h1>
          <?php echo __("Get your", 'mozrest') . ' ' . get_the_title() . ' ' . __("account integrated 
to your Reservation Management System", 'mozrest'); ?>
        </h1>
        <p>
          <?php echo __("Mozrest has partnered with", 'mozrest') . ' ' . get_the_title() . ' ' . __("to build a reliable two-way integration so you can easily manage your availability from one single place.", 'mozrest'); ?>
        </p>
        <a href="<?php get_url_by_slug('request-a-demo'); ?>" class="btn btn-primary mb-4">
          <?php _e('Request a demo', 'mozrest'); ?>
        </a>
      </div>
      <div class="col-md-6 col-8">
        <div class="connect-img">
          <img class="img-auto" src="<?php bloginfo('template_url'); ?>/img/integration.svg" alt="Integration" />
          <div class="connect-img_item rms">
            <div class="connect-img_wrap">
              <?php if (has_post_thumbnail()) {
                the_post_thumbnail('medium');
              } ?>
            </div>
          </div>
          <div class="connect-img_item rp">
            <div class="connect-img_wrap">
              <img src="<?php bloginfo('template_url'); ?>/img/logo.svg" alt="Mozrest" />
            </div>
          </div>
        </div>
      </div>
    </div>
    <p class="text-bold">
      <?php echo __("Here’s how our", 'mozrest') . ' ' . get_the_title() . ' ' . __("integration works:", 'mozrest'); ?>
    </p>
    <ol>
      <li>
        <?php echo __("Mozrest establishes a connection between your", 'mozrest') . ' ' . get_the_title() . ' ' . __("and your Reservation Management System.", 'mozrest'); ?>
      </li>
      <li>
        <?php echo __("This allows", 'mozrest') . ' ' . get_the_title() . ' ' . __("to stay up to date on all reservations made online, including with other channels.", 'mozrest'); ?>
      </li>
      <li>
        <?php _e("You get a complete overview of your bookings and availability space left on one device.", 'mozrest'); ?>
      </li>
    </ol>
    <p>
      <?php echo __("This integration requires a subscription to", 'mozrest') . ' ' . get_the_title() . ' ' . __("and Mozrest.", 'mozrest'); ?>
    </p>
  </div>
</section>
<?php get_template_part('parts/integration/integration-comment'); ?>
<section class="pt-0">
  <?php get_template_part('parts/features/features-list'); ?>
</section>












<section class="pt-0  ps-3 pe-lg-0  px-3">
  <div class="py-5 text-center">
    <h4 class="text-yellow text-uppercase m-0" data-aos="fade"><?php _e("Our Customers", 'mozrest'); ?></h4>
  </div>

  <div class="row g-0">
    <div class="col-lg-6 py-3">
      <div class="container semi-container me-lg-0 text-lg-start text-center" data-aos="fade-right">
        <div class="pe-lg-5">
          <h1>
            <?php the_title(); ?></h1>
          <?php the_content(); ?>
          <p class="m-0">
            <a href="#" class="btn btn-primary">
              <?php _e("Testimonials", 'mozrest'); ?>
            </a>
          </p>
        </div>
      </div>
    </div>
    <div class="col-lg-6">
      <div class="ratio ratio-16x9 ratio-img">
        <?php if (has_post_thumbnail()) {
          the_post_thumbnail('large');
        } ?>
      </div>
    </div>
  </div>
</section>
<?php get_footer(); ?>