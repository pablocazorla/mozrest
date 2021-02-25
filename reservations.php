<?php
/*
Template Name: Reservations
*/
?>
<?php get_header(); ?>
<section class="restaurant-presentation">
  <div class="front-content">
    <div class="v-md-centered">
      <div class="container">
        <div class="row">
          <div class="col-md-6 text-center text-md-start pt-md-0 pt-5" data-aos="fade-up">
            <h1 class="text-blue">Pains / Problem</h1>
            <p>
              Creating and growing a restaurant base and promoting them in front of your consumers is a costly and
              never-ending endeavor. You need more restaurants, more locations, to reach more consumers.
            </p>
            <p>
              <a href="#" class="btn btn-green">
                Call to action
              </a>
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="back-content align-right">
    <div class="back-content-col">
      <div class="photo-mosaic">
        <div class="photo-mosaic-column">

          <div class="photo-mosaic-content c-12">

            <figure class="photo-mosaic-figure r-0" data-aos="fade-left" data-aos-delay="200">
              <img src="<?php bloginfo('template_url'); ?>/img/photos/reservations-1.jpg" alt="MOZREST" />
            </figure>

            <div class="moz-pill bg-green restaurant-mp-green" data-aos="fade-left" data-aos-delay="400">
              <i class="icon mozresticons-ok-circle"></i> Marketing and booking platform
            </div>
            <div class="moz-pill bg-pink restaurant-mp-pink" data-aos="fade-left" data-aos-delay="500">
              <i class="icon mozresticons-ok-circle"></i> Allow your customers to access new dinners
            </div>
            <div class="moz-pill bg-yellow restaurant-mp-yellow" data-aos="fade-left" data-aos-delay="600">
              <i class="icon mozresticons-ok-circle"></i> A single software for reservations
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<section>
  <div class="container text-center">
    <h2 class="mb-5 pb-3" data-aos="fade-up">Why it is important</h2>
    <div class="row justify-content-center">
      <div class="col-lg-4" data-aos="fade-up">
        <div class="icon-container big mx-auto text-green mb-3">
          <i class="icon mozresticons-magnet"></i>
        </div>
        <p class="block-size-1">Increase your retention</p>
      </div>
      <div class="col-lg-4" data-aos="fade-up" data-aos-delay="150">
        <div class="icon-container big mx-auto text-green mb-3">
          <i class="icon mozresticons-down-percent"></i>
        </div>
        <p class="block-size-1">Lower your it costs</p>
      </div>
      <div class="col-lg-4" data-aos="fade-up" data-aos-delay="300">
        <div class="icon-container big mx-auto text-green mb-3">
          <i class="icon mozresticons-flag"></i>
        </div>
        <p class="block-size-1">Keep your independent positioning</p>
      </div>
    </div>
  </div>
</section>
<section class="pt-2">
  <div class="container">
    <h2 class="mb-5 text-center" data-aos="fade-up">How we respond to the problem</h2>
    <div class="row justify-content-center pt-4">
      <div class="col-lg-10">
        <div class="row align-items-center justify-content-between">
          <div class="col-md-5" data-aos="fade-right">
            <h3>Access to a reservation network for your clients</h3>
            <p class="block-size-2 ms-0">
              Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece .
            </p>
            <p>
              <a href="" class="btn-link text-green">Call to action <i
                  class="icon mozresticons-long-arrow-right"></i></a>
            </p>
          </div>
          <div class="col-md-6 mb-5 pb-5" data-aos="fade-left" data-aos-delay="200">
            <img class="img-auto" src="<?php bloginfo('template_url'); ?>/img/respond-r-1.png" alt="MOZREST" />
          </div>
        </div>
        <div class="row align-items-center justify-content-between">
          <div class="col-md-6 mb-5 pb-5 order-md-1 order-2" data-aos="fade-right" data-aos-delay="200">
            <img class="img-auto" src="<?php bloginfo('template_url'); ?>/img/respond-r-2.png" alt="MOZREST" />
          </div>
          <div class="col-md-5 order-md-2 order-1" data-aos="fade-left">
            <h3>Simplify your technology </h3>
            <p class="block-size-2 ms-0">
              Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece .
            </p>
            <p>
              <a href="" class="btn-link text-green">Call to action <i
                  class="icon mozresticons-long-arrow-right"></i></a>
            </p>
          </div>
        </div>
        <div class="row align-items-center justify-content-between">
          <div class="col-md-5" data-aos="fade-right">
            <h3>Grow you Business</h3>
            <p class="block-size-2 ms-0">
              Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece .
            </p>
            <p>
              <a href="" class="btn-link text-green">Call to action <i
                  class="icon mozresticons-long-arrow-right"></i></a>
            </p>
          </div>
          <div class="col-md-6" data-aos="fade-left" data-aos-delay="200">
            <img class="img-auto" src="<?php bloginfo('template_url'); ?>/img/respond-r-3.png" alt="MOZREST" />
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<section>
  <div class="container">
    <h2 class="text-center" data-aos="fade-up">Testimonials</h2>
  </div>
  <div class="splide splide__pagination__green" id="testimonials" data-aos="fade-up">
    <div class="splide__track">
      <ul class="splide__list">
        <?php 
        $count = 12;
        while ( $count > 0 ) :?>
        <li class="splide__slide">
          <div class="testimonial-container">
            <div class="testimonial">
              <div class="rating">
                <i class="icon mozresticons-star"></i>
                <i class="icon mozresticons-star"></i>
                <i class="icon mozresticons-star"></i>
                <i class="icon mozresticons-star"></i>
                <i class="icon mozresticons-star"></i>
              </div>
              <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical
                Latin literature from 45 BC, making it over 2000 years old.</p>
              <div class="user-data">
                <div class="user-data_photo">
                  <img class="img-auto" src="<?php bloginfo('template_url'); ?>/img/user-photo.jpg"
                    alt="Emely Wilson" />
                </div>
                <div class="user-data_text">
                  <div class="user-data_title">
                    Emely Wilson
                  </div>
                </div>
              </div>
            </div>
          </div>
        </li>
        <?php $count = $count - 1; endwhile;?>
      </ul>
    </div>
  </div>
</section>
<section class="bg-light-green text-blue">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-9 col-12">
        <h2 class="mb-md-5 pb-md-5 text-md-start text-center" data-aos="fade-up">Feature</h2>
        <div class="row justify-content-between py-md-5">
          <div class="col-md-7" data-aos="fade-up">
            <div class="titles-feature text-md-start text-center">
              <div class="title-feature title-check"> <i class="icon mozresticons-ok"></i> Performance dashboard</div>
              <br />
              <div class="title-feature">Billing</div><br />
              <div class="title-feature">Real time synchronisation</div><br />
            </div>
          </div>
          <div class="col-md-5" data-aos="fade-up" data-aos-delay="200">
            <img class="img-auto mb-4" src="<?php bloginfo('template_url'); ?>/img/reservations-feature.svg"
              alt="MOZREST" />

          </div>
          <div class="col-12" data-aos="fade-up">
            <div class="text-md-start text-center">
              <a href="#" class="btn btn-blue">Call to action</a>
            </div>
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
        <div class="col-md-5 order-1" data-aos="zoom-in">
          <h3>Digital is complex and
            waste of time</h3>
          <p class="m-0">is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
            industry's standard
            dummy text ever</p>
        </div>
        <div class="col-md-2 text-center order-md-2 order-3" data-aos="zoom-in" data-aos-delay="200">
          <a href="#" class="btn btn-green unwrap">
            Call to action
          </a>
        </div>
        <div class="col-md-5 order-md-3 order-2" data-aos="zoom-in" data-aos-delay="400">
          <img class="img-auto" src="<?php bloginfo('template_url'); ?>/img/design-complex.svg" alt="MOZREST" />
        </div>
      </div>
    </div>
  </div>
</section>
<?php get_footer(); ?>