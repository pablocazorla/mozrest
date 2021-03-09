<?php
/*
Template Name: Restaurant
*/
?>
<?php get_header(); ?>

<section class="py-0">
  <div class="row g-0 align-items-center">
    <div class="col-lg-6 py-5">
      <div class="container semi-container-xxl me-xl-0 pe-lg-5" data-aos="fade-right">
        <div class="ps-3 pe-lg-0 px-3 pb-4">
          <h1 class="text-blue"><?php esc_html_e( 'Worried about where could be your next customer?', 'mozrest' ); ?>
          </h1>
          <p class="fs21 mb-2">
            <?php esc_html_e( 'At MozRest we provide a platform that simplifies and combines all the applications to support your digital marketing.', 'mozrest' ); ?>
          </p>
          <p class="fs21">
            <?php esc_html_e( 'From getting found online to accessing new customers and maintaining your information up-to-date in one single place.', 'mozrest' ); ?>
          </p>
          <p>
            <a href="#" id="know-more" class="btn btn-primary">
              <?php esc_html_e( 'Know more', 'mozrest' ); ?>
            </a>
          </p>
        </div>
      </div>
    </div>
    <div class="col-lg-6">
      <div class="relative pt-lg-0 pt-5" data-aos="fade">
        <div class="pt-lg-0 pt-5">
          <img class="img-auto" src="<?php bloginfo('template_url'); ?>/img/photos/restaurant-1.jpg" alt="MOZREST" />
          <div class="moz-pill bg-green restaurant-mp-green">
            <i class="icon mozresticons-ok-circle"></i>
            <?php esc_html_e( 'Manage all your profiles online', 'mozrest' ); ?>
          </div>
          <div class="moz-pill bg-pink restaurant-mp-pink">
            <i class="icon mozresticons-ok-circle"></i>
            <?php esc_html_e( 'Manage your reviews and posts', 'mozrest' ); ?>
          </div>
          <div class="moz-pill bg-yellow restaurant-mp-yellow">
            <i class="icon mozresticons-ok-circle"></i>
            <?php esc_html_e( 'Access new reservation channels', 'mozrest' ); ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<section>
  <div class="container text-center">
    <h2 class="mb-5 pb-3" data-aos="fade-up"><?php esc_html_e( 'Why it is important', 'mozrest' ); ?></h2>
    <div class="row justify-content-center">
      <div class="col-lg-4" data-aos="fade-up">
        <div class="icon-container big mx-auto text-pink mb-3">
          <i class="icon mozresticons-user-connection"></i>
        </div>
        <p class="block-size-1">
          <?php esc_html_e( 'Your digital profile is everywhere, how do you ensure it is coherent and up-to-date?', 'mozrest' ); ?>
        </p>
      </div>
      <div class="col-lg-4" data-aos="fade-up" data-aos-delay="150">
        <div class="icon-container big mx-auto text-pink mb-3">
          <i class="icon mozresticons-ok-loading"></i>
        </div>
        <p class="block-size-1">
          <?php esc_html_e( 'The amount of time spend on digital tools never stops increasing.', 'mozrest' ); ?></p>
      </div>
      <div class="col-lg-4" data-aos="fade-up" data-aos-delay="300">
        <div class="icon-container big mx-auto text-pink mb-3">
          <i class="icon mozresticons-review"></i>
        </div>
        <p class="block-size-1">
          <?php esc_html_e( 'Answering customer´s reviews from many websites puts a strain on operations.', 'mozrest' ); ?>
        </p>
      </div>
    </div>
  </div>
</section>
<section class="pt-2">
  <div class="container">
    <h2 class="mb-2 text-center" data-aos="fade-up"><?php esc_html_e( 'How we respond to the problem', 'mozrest' ); ?>
    </h2>
    <p class="text-center mb-5" data-aos="fade-up">
      <?php esc_html_e( 'Improve your online ranking', 'mozrest' ); ?>
    </p>
    <div class="row justify-content-center pt-4">
      <div class="col-lg-10">
        <div class="row align-items-center justify-content-between">
          <div class="col-md-5" data-aos="fade-right">
            <h3><?php esc_html_e( 'Get found online', 'mozrest' ); ?></h3>
            <p class="block-size-2 ms-0">
              <?php esc_html_e( 'Publish anything, like new menus, changes to your opening hours or special promotions and make them visible on Google & Facebook immediately. Get found online more often, attract more visits, get more customers.  ', 'mozrest' ); ?>
            </p>
            <!-- <p>
              <a href="" class="btn-link"><?php esc_html_e( 'Call to action', 'mozrest' ); ?> <i
                  class="icon mozresticons-long-arrow-right"></i></a>
            </p> -->
          </div>
          <div class="col-md-6 mb-5 pb-5" data-aos="fade" data-aos-delay="200">
            <img class="img-auto" src="<?php bloginfo('template_url'); ?>/img/respond-1.png" alt="MOZREST" />
          </div>
        </div>
        <div class="row align-items-center justify-content-between">
          <div class="col-md-6 mb-5 pb-5 order-md-1 order-2" data-aos="fade-right" data-aos-delay="200">
            <img class="img-auto" src="<?php bloginfo('template_url'); ?>/img/respond-2.png" alt="MOZREST" />
          </div>
          <div class="col-md-5 order-md-2 order-1" data-aos="fade">
            <h3><?php esc_html_e( 'Talk to your customers', 'mozrest' ); ?></h3>
            <p class="block-size-2 ms-0">
              <?php esc_html_e( 'Be alerted the moment a review about your restaurant is created and reply to them from one single place, whether they come from Google, TripAdvisor or many other sites.', 'mozrest' ); ?>
            </p>
            <!-- <p>
              <a href="" class="btn-link"><?php esc_html_e( 'Call to action', 'mozrest' ); ?> <i
                  class="icon mozresticons-long-arrow-right"></i></a>
            </p> -->
          </div>
        </div>
        <div class="row align-items-center justify-content-between">
          <div class="col-md-5" data-aos="fade-right">
            <h3><?php esc_html_e( 'Profile Consistency', 'mozrest' ); ?></h3>
            <p class="block-size-2 ms-0">
              <?php esc_html_e( 'Maintain your profile updated and accurate on a large portfolio of online guides, from directories to car navigation services.', 'mozrest' ); ?>
            </p>
            <!-- <p>
              <a href="" class="btn-link"><?php esc_html_e( 'Call to action', 'mozrest' ); ?> <i
                  class="icon mozresticons-long-arrow-right"></i></a>
            </p> -->
          </div>
          <div class="col-md-6" data-aos="fade" data-aos-delay="200">
            <img class="img-auto" src="<?php bloginfo('template_url'); ?>/img/respond-3.png" alt="MOZREST" />
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<section>
  <div class="container">
    <div class="bg-blue text-white r-4 px-5 py-4">
      <div class="row g-5 align-items-center">
        <div class="col-xl-5 col-lg-4 order-1" data-aos="zoom-in">
          <h3><?php esc_html_e( 'aaaaaaa', 'mozrest' ); ?></h3>
          <p class="m-0">
            <?php esc_html_e( 'Is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever', 'mozrest' ); ?>
          </p>
        </div>
        <div class="col-xl-3 col-lg-4 text-center order-md-2 order-3" data-aos="zoom-in" data-aos-delay="200">
          <a href="#" class="btn btn-primary unwrap">
            <?php esc_html_e( 'Call to action', 'mozrest' ); ?>
          </a>
        </div>
        <div class="col-xl-4 col-lg-4 order-md-3 order-2" data-aos="zoom-in" data-aos-delay="400">
          <img class="img-auto" src="<?php bloginfo('template_url'); ?>/img/design-complex.svg" alt="MOZREST" />
        </div>
      </div>
    </div>
  </div>
</section>
<!-- <section>
  <div class="container">
    <h2 class="text-center" data-aos="fade-up"><?php esc_html_e( 'Testimonials', 'mozrest' ); ?></h2>
  </div>
  <div class="splide splide__pagination__pink" id="testimonials" data-aos="fade-up">
    <?php 
      include 'testimonials.php';
    ?>
  </div>
</section> -->
<section class="bg-light-pink text-blue">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-8 col-12">
        <h2 class="mb-md-5 pb-md-5 text-md-start text-center" data-aos="fade-up">
          <?php esc_html_e( 'Feature', 'mozrest' ); ?></h2>
        <div class="row justify-content-between py-md-5">
          <div class="col-md-5" data-aos="fade-up">
            <div class="tabs-feature slidetab text-md-start text-center slidetab-trigger"
              data-slidetab="slide-features">
              <div class="tab-feature slidetab-tab current">
                <div class="title-feature slidetab-trig">
                  <i class="icon mozresticons-ok"></i>
                  <?php esc_html_e( 'Content Information ', 'mozrest' ); ?>
                </div>
                <div class="content-tab-feature">
                  <ul>
                    <li>
                      <?php esc_html_e( 'Up-to-date profile information', 'mozrest' ); ?>
                    </li>
                    <li>
                      <?php esc_html_e( 'Seamless synchronization', 'mozrest' ); ?>
                    </li>
                    <li>
                      <?php esc_html_e( 'More than 40 partners', 'mozrest' ); ?>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="tab-feature slidetab-tab">
                <div class="title-feature slidetab-trig">
                  <i class="icon mozresticons-ok"></i>
                  <?php esc_html_e( 'Reviews & Posting', 'mozrest' ); ?>
                </div>
                <div class="content-tab-feature">
                  <ul>
                    <li>
                      <?php esc_html_e( 'News & Promotions distributions', 'mozrest' ); ?>
                    </li>
                    <li>
                      <?php esc_html_e( 'Centralised review management', 'mozrest' ); ?>
                    </li>
                    <li>
                      <?php esc_html_e( 'All from one simple tool', 'mozrest' ); ?>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="tab-feature slidetab-tab">
                <div class="title-feature slidetab-trig">
                  <i class="icon mozresticons-ok"></i>
                  <?php esc_html_e( 'Partner Network', 'mozrest' ); ?>
                </div>
                <div class="content-tab-feature">
                  <ul>
                    <li>
                      <?php esc_html_e( 'Simple connection to more Reservation portals', 'mozrest' ); ?>
                    </li>
                    <li>
                      <?php esc_html_e( 'Real time availability', 'mozrest' ); ?>
                    </li>
                    <li>
                      <?php esc_html_e( 'Wide coverage', 'mozrest' ); ?>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6" data-aos="fade-up" data-aos-delay="200">
            <div class="slidetab-content" id="slide-features">
              <div class="slidetab-cont current">
                <img class="img-auto mb-4"
                  src="<?php bloginfo('template_url'); ?>/img/features/restaurant-feature-1.png" alt="MOZREST" />
              </div>
              <div class="slidetab-cont">
                <img class="img-auto mb-4"
                  src="<?php bloginfo('template_url'); ?>/img/features/restaurant-feature-2.png" alt="MOZREST" />
              </div>
              <div class="slidetab-cont">
                <img class="img-auto mb-4"
                  src="<?php bloginfo('template_url'); ?>/img/features/restaurant-feature-3.png" alt="MOZREST" />
              </div>
            </div>
          </div>
          <!-- <div class="col-12" data-aos="fade-up">
            <div class="text-md-start text-center">
              <a href="#" class="btn btn-blue"><?php esc_html_e( 'Call to action', 'mozrest' ); ?></a>
            </div>
          </div> -->
        </div>
      </div>
    </div>
  </div>
</section>
<section class="pt-md-5 pt-0">
  <div class="container">
    <div class="bg-green r-4 text-white px-5">
      <div class="row align-items-center">
        <div class="col-md-5 order-md-1 order-2" data-aos="fade-right">
          <div class="pt-md-6 ps-md-5 pt-4">
            <img class="img-auto m-auto" style="max-width:255px" src="<?php bloginfo('template_url'); ?>/img/man-1.png"
              alt="MOZREST" />
          </div>
        </div>
        <div class="col-md-7 order-md-2 order-1">
          <div class="block-size-2 ms-0 pt-md-0 pt-5" data-aos="fade" data-aos-delay="300">
            <h2 class="mb-3"><?php esc_html_e( 'Digital is complex and waste of time', 'mozrest' ); ?></h2>
            <p>
              <?php esc_html_e( 'Is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever', 'mozrest' ); ?>
            </p>
            <?php 
          include 'subscribe-form.php';
          ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<?php get_footer(); ?>