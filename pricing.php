<?php
/*
Template Name: Pricing
*/
?>
<?php get_header(); ?>


<section>
  <div class="container">
    <h1 class="h2 text-center mb-5 pb-4" data-aos="fade-up">Pricing</h1>
    <div class="row justify-content-center" data-aos="fade-up" data-aos-delay="200">
      <div class="col-lg-10">
        <div class="pricing-table">
          <div class="row g-0">
            <div class="col-md-4">
              <div class="princing-col">
                <div class="princing-box bt bb">
                  <div class="princing-title">Basic</div>
                </div>
                <div class="princing-box">
                  <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece.</p>
                </div>
                <div class="princing-box">
                  <div class="princing-price">
                    <span class="price-currency">USD</span> <span class="price-number">65.00</span>
                  </div>
                </div>
                <div class="princing-box">
                  <ul class="pricing-features">
                    <li>Loren Ipsum text</li>
                    <li>Loren Ipsum text</li>
                    <li>Loren Ipsum text</li>
                    <li>Loren Ipsum text</li>
                    <li>Loren Ipsum text</li>
                    <li>Loren Ipsum text</li>
                    <li>Loren Ipsum text</li>
                    <li>Loren Ipsum text</li>
                  </ul>
                </div>
                <div class="princing-box">
                  <p class="princing-more">More information about Basic</p>
                </div>
                <div class="princing-box">
                  <a href="#" class="btn btn-outline-primary">Call to action</a>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="princing-col selected">
                <div class="princing-box bt bb">
                  <div class="princing-title">Premium</div>
                </div>
                <div class="princing-box">
                  <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece.</p>
                </div>
                <div class="princing-box">
                  <div class="princing-price">
                    <span class="price-currency">USD</span> <span class="price-number">55.00</span>
                  </div>
                </div>
                <div class="princing-box">
                  <ul class="pricing-features">
                    <li>Loren Ipsum text</li>
                    <li>Loren Ipsum text</li>
                    <li>Loren Ipsum text</li>
                    <li>Loren Ipsum text</li>
                    <li>Loren Ipsum text</li>
                    <li>Loren Ipsum text</li>
                    <li>Loren Ipsum text</li>
                    <li>Loren Ipsum text</li>
                  </ul>
                </div>
                <div class="princing-box">
                  <p class="princing-more">More information about Premium</p>
                </div>
                <div class="princing-box">
                  <a href="#" class="btn btn-primary">Call to action</a>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="princing-col">
                <div class="princing-box bt bb">
                  <div class="princing-title">Advance</div>
                </div>
                <div class="princing-box">
                  <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece.</p>
                </div>
                <div class="princing-box">
                  <div class="princing-price">
                    <span class="price-currency">USD</span> <span class="price-number">110.00</span>
                  </div>
                </div>
                <div class="princing-box">
                  <ul class="pricing-features">
                    <li>Loren Ipsum text</li>
                    <li>Loren Ipsum text</li>
                    <li>Loren Ipsum text</li>
                    <li>Loren Ipsum text</li>
                    <li>Loren Ipsum text</li>
                    <li>Loren Ipsum text</li>
                    <li>Loren Ipsum text</li>
                    <li>Loren Ipsum text</li>
                  </ul>
                </div>
                <div class="princing-box">
                  <p class="princing-more">More information about Advance</p>
                </div>
                <div class="princing-box">
                  <a href="#" class="btn btn-outline-primary">Call to action</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="pt-0">
  <div class="splide" id="testimonials" data-aos="fade-up">
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
<section class="pt-0">
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
          <a href="#" class="btn btn-primary unwrap">
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