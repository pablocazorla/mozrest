<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Mozrest
 */

get_header();
?>
<section class="py-0  ps-3 pe-lg-0  px-3">
  <div class="row g-0 align-items-center">
    <div class="col-lg-6 py-5">
      <div class="container semi-container-xxl me-xl-0 pe-lg-5 text-lg-start text-center" data-aos="fade-right">
        <h1 class="text-blue"><?php esc_html_e( "It's everything about Guests", 'mozrest' ); ?></h1>
        <p class="fs21 mb-2">
          <?php esc_html_e( '"How many guests are you not reaching when they are near you because you are not connecting with them on their platforms of choice?"', 'mozrest' ); ?>
        </p>
        <p class="fs21">
          <?php esc_html_e( 'Mozrest platform solves this problem and gives the Restaurant, the Reservation Portals and the Reservation Softwares a unique opportunity to provide a personalised experience across all touchpoints to their Guests.', 'mozrest' ); ?>
        </p>
        <p class="m-0">
          <a href="#" id="know-more" class="btn btn-primary">
            <?php esc_html_e( 'Know more', 'mozrest' ); ?>
          </a>
        </p>
      </div>
    </div>
    <div class="col-lg-6">
      <div class="relative" data-aos="fade">
        <img class="img-auto" src="<?php bloginfo('template_url'); ?>/img/home/header.jpg" alt="MOZREST" />
        <div class="icon-container vh-centered text-pink box-shadow-3 home-presentation-icon-search">
          <i class="icon mozresticons-search"></i>
        </div>
        <div class="icon-container vh-centered box-shadow-3 home-presentation-icon-user-card d-lg-block d-none">
          <img src="<?php bloginfo('template_url'); ?>/img/user-card.svg" alt="MOZREST" />
        </div>
        <div class="icon-container vh-centered text-green box-shadow-3 home-presentation-icon-location">
          <i class="icon mozresticons-location-o"></i>
        </div>
      </div>
    </div>
  </div>
</section>


<section class="pb-0">
  <div class="container">
    <div class="scroll-h" data-aos="fade-up">
      <img class="home-brands" src="<?php bloginfo('template_url'); ?>/img/brands.png" alt="MOZREST" />
    </div>
  </div>
</section>

<section>
  <div class="container text-center">
    <h2 class="mb-5 pb-3" data-aos="fade-up"><?php esc_html_e( 'Empower', 'mozrest' ); ?></h2>
    <div class="row justify-content-center">
      <div class="col-lg-4" data-aos="fade-up">
        <a href="<?php bloginfo('url'); ?>/for-restaurants" class="icontext">
          <div class="icon-container mx-auto bg-pink mb-5">
            <i class="icon mozresticons-food"></i>
          </div>
          <h3><?php esc_html_e( 'Restaurants', 'mozrest' ); ?></h3>
          <p class="block-size-1 fs20">
            <?php esc_html_e( 'Deliver personalised experience to your guests', 'mozrest' ); ?></p>
        </a>
      </div>
      <div class="col-lg-4" data-aos="fade-up" data-aos-delay="150">
        <a href="<?php bloginfo('url'); ?>/market-place" class="icontext">
          <div class="icon-container mx-auto bg-yellow mb-5">
            <i class="icon mozresticons-store"></i>
          </div>
          <h3><?php esc_html_e( 'Reservation Portal', 'mozrest' ); ?></h3>
          <p class="block-size-1 fs20">
            <?php esc_html_e( 'Increase your Reach efficiently', 'mozrest' ); ?></p>
        </a>
      </div>
      <div class="col-lg-4" data-aos="fade-up" data-aos-delay="300">
        <a href="<?php bloginfo('url'); ?>/reservations-software" class="icontext">
          <div class="icon-container mx-auto bg-green mb-5">
            <i class="icon mozresticons-tablet"></i>
          </div>
          <h3><?php esc_html_e( 'Guest Management Software', 'mozrest' ); ?></h3>
          <p class="block-size-1 fs20">
            <?php esc_html_e( 'Increase your Customer Value', 'mozrest' ); ?></p>
        </a>
      </div>
    </div>
  </div>
</section>

<section>
  <div class="container">
    <div class="text-center mb-4" data-aos="fade-up">
      <h2 class="mb-0"><?php esc_html_e( 'Mozrest provides', 'mozrest' ); ?></h2>
      <div class="row justify-content-center">
        <p class="fs25">
          <?php esc_html_e( 'a one-stop-shop for Digital Food & Beverage Marketing', 'mozrest' ); ?>
        </p>
      </div>
    </div>
    <div class="row justify-content-center">
      <div class="col-lg-10 col-sm-12">
        <div id="carouselFeatures" class="carousel slide carousel-dark" data-bs-ride="carousel" data-aos="fade-up">
          <div class="carousel-inner r-4">
            <div class="carousel-item active">
              <div class="bg-blue text-center text-white pt-md-7 pt-4">
                <div class="row justify-content-center mb-4">
                  <div class="col-lg-10 col-9">
                    <h3><?php esc_html_e( 'Guests find', 'mozrest' ); ?></h3>
                    <p class="mb-0">
                      <?php esc_html_e( '"64 Percent Of Mobile Restaurant Searchers Convert “Immediately Or Within An Hour"', 'mozrest' ); ?>
                    </p>
                    <p class="mb-3">
                      <?php esc_html_e( '"80% of all these ‘Near Me’ search queries are unbranded. This means guest don’t necessarily have a name in mind."', 'mozrest' ); ?>
                    </p>
                    <p class="mb-0">
                      <?php esc_html_e( 'Mozrest make you visible and stand out above your competitors.', 'mozrest' ); ?>
                    </p>
                  </div>
                </div>
                <div class="row justify-content-center pb-5">
                  <div class="col-xl-7 col-lg-7 col-9">
                    <img class="img-auto r1-1 r2-1 r3-1 r4-1"
                      src="<?php bloginfo('template_url'); ?>/img/compromises/guest-find.jpg" alt="Guest find" />
                  </div>
                </div>
              </div>
            </div>
            <div class="carousel-item">
              <div class="bg-green text-center text-white pt-md-7 pt-4">
                <div class="row justify-content-center mb-4">
                  <div class="col-lg-10 col-9">
                    <h3><?php esc_html_e( 'Guests trust', 'mozrest' ); ?></h3>
                    <p class="mb-3">
                      <?php esc_html_e( '"88% of guests trust online reviews as much as personal recommendations."', 'mozrest' ); ?>
                    </p>
                    <p class="mb-0">
                      <?php esc_html_e( 'Mozrest facilitate your social media exposure and leverage reviews & comments to increase guests engagement.', 'mozrest' ); ?>
                    </p>
                  </div>
                </div>
                <div class="row justify-content-center pb-5">
                  <div class="col-xl-7 col-lg-7 col-9">
                    <img class="img-auto r1-1 r2-1 r3-1 r4-1"
                      src="<?php bloginfo('template_url'); ?>/img/compromises/guest-trust.jpg" alt="Guest trust" />
                  </div>
                </div>
              </div>
            </div>
            <div class="carousel-item">
              <div class="bg-pink text-center text-white pt-md-7 pt-4">
                <div class="row justify-content-center mb-4">
                  <div class="col-lg-10 col-9">
                    <h3><?php esc_html_e( 'Guests reserve', 'mozrest' ); ?></h3>
                    <p class="mb-3">
                      <?php esc_html_e( '"36% of guests believe that online reservations are the most important technology feature that a restaurant can offer guests."', 'mozrest' ); ?>
                    </p>
                    <p class="mb-0">
                      <?php esc_html_e( 'Mozrest provides a greater convenience for guests by enabling reservation on their platform of choice.', 'mozrest' ); ?>
                    </p>
                  </div>
                </div>
                <div class="row justify-content-center pb-5">
                  <div class="col-xl-7 col-lg-7 col-9">
                    <img class="img-auto r1-1 r2-1 r3-1 r4-1"
                      src="<?php bloginfo('template_url'); ?>/img/compromises/guest-reserve.jpg" alt="Guest reserve" />
                  </div>
                </div>
              </div>
            </div>
            <div class="carousel-item">
              <div class="bg-blue text-center text-white pt-md-7 pt-4">
                <div class="row justify-content-center mb-4">
                  <div class="col-lg-10 col-9">
                    <h3><?php esc_html_e( 'Guests recommend', 'mozrest' ); ?></h3>
                    <p class="mb-3">
                      <?php esc_html_e( '"When Businesses replied to negative reviews, a THIRD of customers either deleted their original negative review or replaced it with a positive review. Nearly A FIFTH went on to become loyal customers."', 'mozrest' ); ?>
                    </p>
                    <p class="mb-0">
                      <?php esc_html_e( 'Mozrest simplifies the review management and keeps you updated.', 'mozrest' ); ?>
                    </p>
                  </div>
                </div>
                <div class="row justify-content-center pb-5">
                  <div class="col-xl-7 col-lg-8 col-9">
                    <img class="img-auto r1-1 r2-1 r3-1 r4-1"
                      src="<?php bloginfo('template_url'); ?>/img/compromises/guest-recommend.jpg"
                      alt="Guest recommend" />
                  </div>
                </div>
              </div>
            </div>
            <div class="carousel-item">
              <div class="bg-green text-center text-white pt-md-7 pt-4">
                <div class="row justify-content-center mb-4">
                  <div class="col-lg-10 col-9">
                    <h3><?php esc_html_e( 'Guests come back', 'mozrest' ); ?></h3>
                    <p class="mb-3">
                      <?php esc_html_e( '""80% of your revenue is generated by 20% of your repeat customers? Customer loyalty is considered a critical factor in business growth by 70% of businesses."', 'mozrest' ); ?>
                    </p>
                    <p class="mb-0">
                      <?php esc_html_e( 'Mozrest combines news, menus and promotions posting on multiple medias to nurture your existing customers and maximise your chance to stay top of mind when guests choose to go out.', 'mozrest' ); ?>
                    </p>
                  </div>
                </div>
                <div class="row justify-content-center pb-5">
                  <div class="col-xl-7 col-lg-7 col-9">
                    <img class="img-auto r1-1 r2-1 r3-1 r4-1"
                      src="<?php bloginfo('template_url'); ?>/img/compromises/guest-comeback.jpg"
                      alt="Guest come back" />
                  </div>
                </div>
              </div>
            </div>
          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#carouselFeatures" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselFeatures" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
          </button>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="mb-7">
  <div class="container">
    <div class="row">
      <div class="col-xl-5 col-lg-6 py-5" data-aos="fade-up">
        <h2><?php esc_html_e( 'One connected platform, endless possibilities', 'mozrest' ); ?>
        </h2>
        <ul class="list fz18">
          <li><?php esc_html_e( 'Marketing Acquisition Efficiency', 'mozrest' ); ?></li>
          <li><?php esc_html_e( 'Profile Management', 'mozrest' ); ?></li>
          <li><?php esc_html_e( 'Social Media Post Management', 'mozrest' ); ?></li>
          <li><?php esc_html_e( 'Reservation Channel Enabler', 'mozrest' ); ?></li>
          <li><?php esc_html_e( 'Review Aggregator', 'mozrest' ); ?></li>
        </ul>
      </div>
      <div class="col-xl-7 col-lg-6" data-aos="fade" data-aos-delay="200">
        <img class="img-auto r-1 displaced-bg-green" src="<?php bloginfo('template_url'); ?>/img/home/possibilities.jpg"
          alt="One connected platform, endless possibilities" />
      </div>
    </div>
  </div>

</section>

<section>
  <div class="container text-center">
    <div class="bg-img-container" data-aos="fade-up">
      <img src="<?php bloginfo('template_url'); ?>/img/home-social-bg.jpg" alt="MOZREST" />
    </div>
    <div class="row justify-content-center mb-md-4 pb-md-5">
      <div class="col-lg-5 col-8  pb-md-5">
        <h2 class="mb-4" data-aos="fade-up"><?php esc_html_e( 'Our Partner Network', 'mozrest' ); ?></h2>
        <p data-aos="fade-up">
          <?php esc_html_e( 'Reservation Portals, Guest Management Software, Search Media, Voice Search, Map & Navigation, General Publishers', 'mozrest' ); ?>
        </p>
        <p data-aos="fade-up">
          <a href="<?php bloginfo('template_url'); ?>/contact" class="btn btn-primary">
            <?php esc_html_e( 'Contact us', 'mozrest' ); ?>
          </a>
        </p>
      </div>
    </div>
  </div>
</section>
<section>
  <div class="container">
    <h2 class="text-center" data-aos="fade-up"><?php esc_html_e( 'Testimonials', 'mozrest' ); ?></h2>
  </div>
  <div class="splide" id="testimonials" data-aos="fade-up">
    <?php 
      include 'testimonials.php';
    ?>
  </div>
</section>
<section class="pb-0">
  <div class="container">
    <h2 class="text-center mb-5" data-aos="fade-up"><?php esc_html_e( 'Article Blog', 'mozrest' ); ?></h2>
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
        if ( $the_query->have_posts() ) :
        while ( $the_query->have_posts() ) : $the_query->the_post();
      ?>
      <div class="col-lg-4 col-md-6 col-12 pb-5" data-aos="fade-up" data-aos-delay="<?php echo $delay;?>">
        <?php	get_template_part( 'template-parts/content', get_post_type() );		?>
      </div>
      <?php
        $delay += 150;
        if($delay >= 450){
          $delay = 0;
        }
        endwhile;
        wp_reset_postdata();
        endif;
      ?>
    </div>
  </div>
</section>
<section class="pt-md-5 pt-0">
  <div class="container">
    <div class="bg-pink r-4 text-white px-5">
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
              <?php esc_html_e( 'is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever', 'mozrest' ); ?>
            </p>
            <?php 
            include 'subscribe-form-home.php';
            ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<?php
get_footer();