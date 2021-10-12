<?php

/**
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Mozrest
 */

get_header();

?>
<section class="py-0  ps-3 pe-lg-0  px-3">
  <div class="row g-0 align-items-center relative">
    <a class="cta-presentation" href="#">
      <div class="cta-presentation_icon">
        <img class="img-responsive" src="<?php bloginfo('template_url'); ?>/img/mozrest-icon.svg" alt="" />
      </div>
      <div class="cta-presentation_text">
        <?php _e("Hey there! We're here to help. Do you have a question for us?", 'mozrest'); ?>
      </div>
    </a>
    <div class="col-lg-6 py-5">
      <div class="container semi-container me-lg-0 text-lg-start text-center" data-aos="fade-right">
        <div class="pe-lg-5">
          <h1>
            <?php _e("Say goodbye to reservation mistakes and operational headaches.", 'mozrest'); ?></h1>
          <p class="">
            <?php _e("<b>Mozrest integrates multiple booking channels into your Reservation Management System,</b> so you get a complete overview of your real-time availability in one place. Restaurants and local businesses (garages, hairdressers, beauty salons, health centres, etc.) rely on Mozrest to easily manage their reservation platforms, gain time, and optimise their customer acquisition. Less effort for more value!", 'mozrest'); ?>
          </p>
          <p class="m-0">
            <a href="#integration" class="btn btn-primary chat-bot" style="max-width:290px">
              <?php _e("Discover if your systems connect with Mozrest", 'mozrest'); ?>
            </a>
          </p>
        </div>
      </div>
    </div>
    <div class="col-lg-6">
      <div class="ratio ratio-16x9">
        <video role="video"
          src="https://media.istockphoto.com/videos/couple-being-greeted-by-maitre-d-using-digital-tablet-as-they-arrive-video-id1213592063"
          alt="" autoplay loop muted></video>
      </div>
    </div>
  </div>
</section>
<section class="pb-0">
  <div class="container">
    <h4 class="text-yellow text-center mb-4" data-aos="fade-up"><?php _e("Our Partners", 'mozrest'); ?></h4>
    <div class="row justify-content-center align-items-center" data-aos="fade-up">
      <div class="col-auto">
        <div class="static-brand-container">
          <a href="javascript:void(0);" class="splide-brand-link">
            <img src="<?php bloginfo('template_url'); ?>/img/logos/city.png" alt="City">
          </a>
        </div>
      </div>
      <div class="col-auto">
        <div class="static-brand-container">
          <a href="javascript:void(0);" class="splide-brand-link">
            <img src="<?php bloginfo('template_url'); ?>/img/logos/guest-online.png" alt="Guest Online">
          </a>
        </div>
      </div>
      <div class="col-auto">
        <div class="static-brand-container">
          <a href="javascript:void(0);" class="splide-brand-link">
            <img src="<?php bloginfo('template_url'); ?>/img/logos/tableonline.png" alt="Table Online">
          </a>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="pb-0" id="company">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-8 text-center">
        <h2 data-aos="fade-up">
          <?php _e("Easily manage multiple booking channels in your Reservation Management System", 'mozrest'); ?>
        </h2>
        <p>
          <a href="#" class="btn btn-outline-pink" data-aos="fade-up">
            <?php _e("Discover how it works", 'mozrest'); ?>
          </a>
        </p>
        <img class="img-responsive" src="<?php bloginfo('template_url'); ?>/img/home/how-works.png" alt="Table Online"
          data-aos="fade" />
      </div>
    </div>
  </div>
</section>
<section class="pb-0" id="products">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-6 text-center">
        <h4 class="text-yellow mb-4" data-aos="fade-up"><?php _e("Features", 'mozrest'); ?></h4>
        <h2 class="mb-5" data-aos="fade-up"><?php _e("Simplify and optimise your customer acquisition", 'mozrest'); ?>
        </h2>
      </div>
    </div>
  </div>
  <div class="sec-feature mb-5" data-aos="fade-up">
    <div class="container mb-3">
      <div class="row align-items-center">
        <div class="col-auto">
          <div class="feature-icon">
            <img class="img-responsive" src="<?php bloginfo('template_url'); ?>/img/features/icons/calendar.png"
              alt="" />
          </div>
        </div>
        <div class="col">
          <h3 class="m-0">
            <?php _e("1. MULTIPLE RESERVATION CHANNELS INTEGRATION", 'mozrest'); ?>
          </h3>
        </div>
      </div>
    </div>
    <div class="bg-blue text-white py-3">
      <div class="container">
        <div class="row align-items-center justify-content-center">
          <div class="col-md-8 mb-md-0 mb-3 text-md-start text-center">
            <p>
              <?php _e("Mozrest <b>aggregates all your online reservations</b> and synchronises them with your existing Reservation Management System, improving your business’ operational flow in the process. <b>Less effort for more value!</b>", 'mozrest'); ?>
            </p>
            <p class="m-0">
              <a href="#" class="btn btn-primary"><?php _e("Manage your booking channels", 'mozrest'); ?>
              </a>
            </p>
          </div>
          <div class="col-md-4 col-sm-6">
            <img class="img-responsive round-bordered"
              src="<?php bloginfo('template_url'); ?>/img/features/feature-1.jpg" alt="" />
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="sec-feature mb-5" data-aos="fade-up">
    <div class="container mb-3">
      <div class="row align-items-center">
        <div class="col-auto">
          <div class="feature-icon">
            <img class="img-responsive" src="<?php bloginfo('template_url'); ?>/img/features/icons/star.png" alt="" />
          </div>
        </div>
        <div class="col">
          <h3 class="m-0"><?php _e("2. ONLINE PROFILES & REVIEWS MANAGEMENT", 'mozrest'); ?></h3>
        </div>
      </div>
    </div>
    <div class="bg-blue text-white py-3">
      <div class="container">
        <div class="row align-items-center justify-content-center">
          <div class="col-md-8 mb-md-0 mb-3 text-md-start text-center">
            <p>
              <?php _e("We give you the tools to <b>improve your visibility and update your online profiles</b> with just one click! Mozrest integrates all the platforms where your customers can see you or speak about you and sends you an alert, so you <b>never miss a review again!</b>", 'mozrest'); ?>
            </p>
            <p class="m-0">
              <a href="#" class="btn btn-primary"><?php _e("Manage your profiles & reviews", 'mozrest'); ?></a>
            </p>
          </div>
          <div class="col-md-4 col-sm-6">
            <img class="img-responsive round-bordered"
              src="<?php bloginfo('template_url'); ?>/img/features/feature-2.jpg" alt="" />
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="sec-feature" data-aos="fade-up">
    <div class="container mb-3">
      <div class="row align-items-center">
        <div class="col-auto">
          <div class="feature-icon">
            <img class="img-responsive" src="<?php bloginfo('template_url'); ?>/img/features/icons/stats.png" alt="" />
          </div>
        </div>
        <div class="col">
          <h3 class="m-0"><?php _e("3. REPORTING DASHBOARD", 'mozrest'); ?></h3>
        </div>
      </div>
    </div>
    <div class="bg-blue text-white py-3">
      <div class="container">
        <div class="row align-items-center justify-content-center">
          <div class="col-md-8 mb-md-0 mb-3 text-md-start text-center">
            <p>
              <?php _e("Mozrest helps you know your business better than before, thanks to our <b>insightful analytics and reporting functions</b> accessible from one screen, that you can easily export.", 'mozrest'); ?>
            </p>
            <p class="m-0">
              <a href="#" class="btn btn-primary"><?php _e("Manage your business", 'mozrest'); ?></a>
            </p>
          </div>
          <div class="col-md-4 col-sm-6">
            <img class="img-responsive round-bordered"
              src="<?php bloginfo('template_url'); ?>/img/features/feature-3.jpg" alt="" />
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="pb-0" id="integrations">
  <div class="container">
    <h4 class="text-yellow text-center mb-4" data-aos="fade-up"><?php _e("MATCHING", 'mozrest'); ?></h4>
  </div>
  <?php get_template_part('parts/integration/home-integration'); ?>
</section>
<section class="pb-0" id="customers">
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
    <div class="row justify-content-center g-5">
      <?php
      $delay = 0;
      // the query
      $args = array(
        'posts_per_page'   => 4,
        'post_type'        => 'customer',
      );
      $the_query = new WP_Query($args);
      ?>
      <?php
      if ($the_query->have_posts()) :
        while ($the_query->have_posts()) : $the_query->the_post();
      ?>
      <div class="col-lg-6 col-md-6 col-12 pb-5" data-aos="fade-up" data-aos-delay="<?php echo $delay; ?>">
        <?php get_template_part('parts/customer/content', get_post_type());    ?>
      </div>
      <?php
          $delay += 150;
          if ($delay >= 450) {
            $delay = 0;
          }
        endwhile;
        wp_reset_postdata();
      endif;
      ?>
    </div>
  </div>
</section>
<section class="pb-0">
  <div class="container">
    <div class="text-center mb-5">
      <h4 class="text-yellow mb-4 text-uppercase" data-aos="fade-up"><?php _e("Testimonials", 'mozrest'); ?></h4>
      <h2 class="mb-4" data-aos="fade-up">
        <?php _e('These restaurants and local businesses trust Mozrest', 'mozrest'); ?></h2>
      <div data-aos="fade-up">
        <a href="<?php echo get_post_type_archive_link('testimonial') ?>" class="btn btn-primary px-5 py-3">
          <?php _e("All customer stories", 'mozrest'); ?>
        </a>
      </div>
    </div>
    <div class="row justify-content-center">
      <?php
      $delay = 0;
      // the query
      $args = array(
        'posts_per_page'   => 3,
        'post_type'        => 'testimonial',
      );
      $the_query = new WP_Query($args);
      ?>
      <?php
      if ($the_query->have_posts()) :
        while ($the_query->have_posts()) : $the_query->the_post();
      ?>
      <div class="col-lg-4 col-md-6 col-12 pb-5" data-aos="fade-up" data-aos-delay="<?php echo $delay; ?>">
        <?php get_template_part('parts/testimonial/content', get_post_type());    ?>
      </div>
      <?php
          $delay += 150;
          if ($delay >= 450) {
            $delay = 0;
          }
        endwhile;
        wp_reset_postdata();
      endif;
      ?>
    </div>
  </div>
</section>
<section class="pb-0">
  <div class="container">
    <div class="text-center mb-5">
      <h4 class="text-yellow mb-4 text-uppercase" data-aos="fade-up"><?php _e("Blog", 'mozrest'); ?></h4>
      <h2 class="mb-4" data-aos="fade-up"><?php _e('Business management tips and news', 'mozrest'); ?></h2>
      <div data-aos="fade-up">
        <a href="<?php the_category_url_by_slug('blog'); ?>" class="btn btn-primary px-5 py-3">
          <?php _e("All blog posts", 'mozrest'); ?>
        </a>
      </div>
    </div>
    <div class="row justify-content-center">
      <?php
      $delay = 0;
      // the query
      $args = array(
        'posts_per_page'   => 3,
        'post_type'        => 'post',
      );
      $the_query = new WP_Query($args);
      ?>
      <?php
      if ($the_query->have_posts()) :
        while ($the_query->have_posts()) : $the_query->the_post();
      ?>
      <div class="col-lg-4 col-md-6 col-12 pb-5" data-aos="fade-up" data-aos-delay="<?php echo $delay; ?>">
        <?php get_template_part('parts/blog/content', get_post_type());    ?>
      </div>
      <?php
          $delay += 150;
          if ($delay >= 450) {
            $delay = 0;
          }
        endwhile;
        wp_reset_postdata();
      endif;
      ?>
    </div>
  </div>
</section>
<section class="bg-blue text-white">
  <div class="container text-center">
    <div class="row justify-content-center">
      <div class="col-lg-8">
        <h2 class="text-white mb-4" data-aos="fade-up"><?php _e("Ready to get started?", 'mozrest'); ?></h2>
        <p class="text-bold" data-aos="fade-up">
          <?php _e("Get in touch with our friendly team to discuss the particular details of your business and set up a free guided demo to see Mozrest in action. We’ll be more than happy to guide you through.", 'mozrest'); ?>
        </p>
        <div data-aos="fade-up">
          <a href="#" class="btn btn-primary px-5 py-3">
            <?php _e("Request a demo", 'mozrest'); ?>
          </a>
        </div>
      </div>
    </div>

  </div>
</section>
<?php
get_footer();