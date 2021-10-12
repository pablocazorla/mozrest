<?php get_header(); ?>

<section class="" id="customers">
  <div class="container">
    <h4 class="text-yellow text-center mb-4" data-aos="fade-up"><?php _e("OUR CUSTOMERS", 'mozrest'); ?></h4>
    <div class="row justify-content-center mb-5">
      <div class="col-md-9 text-center">
        <h2 data-aos="fade-up"><?php _e("From local restaurants to multinational chains and much more!", 'mozrest'); ?>
        </h2>
        <p data-aos="fade-up">
          <?php _e("Whether you’re running a restaurant, a garage, a beauty salon or any other kind of business with online reservations, Mozrest simplifies and optimises your customer acquisition so you can relax and focus on what's more important to you: <b>your core business and your lovely customers.</b>", 'mozrest'); ?>
        </p>
      </div>
    </div>
    <?php get_template_part('parts/customer/loop'); ?>
  </div>
</section>

<?php get_footer(); ?>