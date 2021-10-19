<?php get_header(); ?>
<section>
  <div class="container">
    <div class="row mb-5">
      <div class="col-md-6">
        <h1>
          <?php echo __("Get your online reservations 
integrated to", 'mozrest') . ' ' . get_the_title(); ?>
        </h1>
        <p>
          <?php echo __("Mozrest has partnered with", 'mozrest') . ' ' . get_the_title() . ' ' . __("to build a reliable two-way integration so you can easily manage your online reservations from one single place.", 'mozrest'); ?>
        </p>
        <a href="<?php get_url_by_slug('request-a-demo'); ?>" class="btn btn-primary">
          <?php _e('Request a demo', 'mozrest'); ?>
        </a>
      </div>
      <div class="col-md-6">
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
        <?php echo __("Mozrest establishes a connection between your online reservation channels and your", 'mozrest') . ' ' . get_the_title() . ' ' . __("Reservation Management System.", 'mozrest'); ?>
      </li>
      <li>
        <?php echo __("Reservations made on a variety of booking platforms are then aggregated directly to your", 'mozrest') . ' ' . get_the_title() . ' ' . __("Reservation Management System.", 'mozrest'); ?>
      </li>
      <li>
        <?php _e("You get a complete overview of all your reservations on one device.", 'mozrest'); ?>
      </li>
      <li>
        <?php echo __("Thanks to our two-way integrations, you can also sync all your information directly from your", 'mozrest') . ' ' . get_the_title() . ' ' . __("Reservation Management System.", 'mozrest'); ?>
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
<?php get_footer(); ?>