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

<section class="home-presentation">
  <div class="front-content">
    <div class="v-md-centered">
      <div class="container">
        <div class="row">
          <div class="col-md-6 text-center text-md-start pt-md-0 pt-5" data-aos="fade-up">
            <h1 class="text-blue"><?php esc_html_e( 'It is everything about guests!', 'mozrest' ); ?></h1>
            <p>
              <?php esc_html_e( 'Find guests be found by them get bookings discuss whith them share news', 'mozrest' ); ?>
            </p>
            <p>
              <a href="#" class="btn btn-primary">

                <?php esc_html_e( 'Call to action', 'mozrest' ); ?>
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
        <div class="row g-0">
          <div class="col-7">
            <div class="photo-mosaic-column">
              <div class="photo-mosaic-content p-left">
                <div class="icon-container  text-pink box-shadow-3 home-presentation-icon-search" data-aos="zoom-in"
                  data-aos-delay="500">
                  <i class="icon mozresticons-search"></i>
                </div>
                <figure class="photo-mosaic-figure" data-aos="fade-left">
                  <img src="<?php bloginfo('template_url'); ?>/img/photos/home-1.jpg" alt="MOZREST" />
                </figure>
              </div>
              <div class="photo-mosaic-content">
                <div class="icon-container box-shadow-3 home-presentation-icon-user-card" data-aos="fade-left"
                  data-aos-delay="150">
                  <img src="<?php bloginfo('template_url'); ?>/img/user-card.svg" alt="MOZREST" />
                </div>
                <figure class="photo-mosaic-figure" data-aos="fade-left" data-aos-delay="100">
                  <img src="<?php bloginfo('template_url'); ?>/img/photos/home-2.jpg" alt="MOZREST" />
                </figure>
              </div>
            </div>
          </div>
          <div class="col-5">
            <div class="photo-mosaic-column">
              <div class="photo-mosaic-content c-4">
                <figure class="photo-mosaic-figure r2-0 r3-0" data-aos="fade-left" data-aos-delay="300">
                  <img src="<?php bloginfo('template_url'); ?>/img/photos/home-3.jpg" alt="MOZREST" />
                </figure>
              </div>
              <div class="photo-mosaic-content c-8">
                <div class="icon-container  text-green box-shadow-3 home-presentation-icon-location" data-aos="zoom-in"
                  data-aos-delay="860">
                  <i class="icon mozresticons-location-o"></i>
                </div>
                <figure class="photo-mosaic-figure r2-0 r3-0" data-aos="fade-left" data-aos-delay="400">
                  <img src="<?php bloginfo('template_url'); ?>/img/photos/home-4.jpg" alt="MOZREST" />
                </figure>
              </div>
            </div>
          </div>
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
    <h2 class="mb-5 pb-3" data-aos="fade-up"><?php esc_html_e( 'Enpower', 'mozrest' ); ?></h2>
    <div class="row justify-content-center">
      <div class="col-lg-4" data-aos="fade-up">
        <div class="icon-container mx-auto bg-pink mb-5">
          <i class="icon mozresticons-food"></i>
        </div>
        <h3><?php esc_html_e( 'Restaurants', 'mozrest' ); ?></h3>
        <p class="block-size-1">
          <?php esc_html_e( 'Contrary to popular belief, Lorem Ipsum is not simply random text.', 'mozrest' ); ?></p>
      </div>
      <div class="col-lg-4" data-aos="fade-up" data-aos-delay="150">
        <div class="icon-container mx-auto bg-yellow mb-5">
          <i class="icon mozresticons-store"></i>
        </div>
        <h3><?php esc_html_e( 'Market place', 'mozrest' ); ?></h3>
        <p class="block-size-1">
          <?php esc_html_e( 'Contrary to popular belief, Lorem Ipsum is not simply random text.', 'mozrest' ); ?></p>
      </div>
      <div class="col-lg-4" data-aos="fade-up" data-aos-delay="300">
        <div class="icon-container mx-auto bg-green mb-5">
          <i class="icon mozresticons-tablet"></i>
        </div>
        <h3><?php esc_html_e( 'Guest Management Software', 'mozrest' ); ?></h3>
        <p class="block-size-1">
          <?php esc_html_e( 'Contrary to popular belief, Lorem Ipsum is not simply random text.', 'mozrest' ); ?></p>
      </div>
    </div>
  </div>
</section>
<section class="mb-7 p-0">
  <div class="container">
    <div class="row">
      <div class="col-md-5 py-5" data-aos="fade-up">
        <h2>One Platform endless possibilities<?php esc_html_e( 'One Platform endless possibilities', 'mozrest' ); ?>
        </h2>
        <ul class="list fz18">
          <li><?php esc_html_e( 'Marketing pagado', 'mozrest' ); ?></li>
          <li><?php esc_html_e( 'SEO local', 'mozrest' ); ?></li>
          <li><?php esc_html_e( 'Reserva', 'mozrest' ); ?></li>
          <li><?php esc_html_e( 'Revisión de la gestión', 'mozrest' ); ?></li>
          <li><?php esc_html_e( 'Publicación social', 'mozrest' ); ?></li>
        </ul>
      </div>
      <div class="col-md-7" data-aos="fade-left" data-aos-delay="200">
        <img class="img-auto r-1 displaced-bg-green" src="<?php bloginfo('template_url'); ?>/img/photos/home-3.jpg"
          alt="MOZREST" />
      </div>
    </div>
  </div>

</section>
<section class="pb-4">
  <div class="container">
    <div class="text-center mb-4" data-aos="fade-up">
      <h2 class="mb-4"><?php esc_html_e( 'Feature', 'mozrest' ); ?></h2>
      <div class="row justify-content-center">
        <div class="col-md-5">
          <p><?php esc_html_e( 'Contrary to popular belief, Lorem Ipsum is not simply random text.', 'mozrest' ); ?></p>
        </div>
      </div>
    </div>
    <div id="carouselFeatures" class="carousel slide carousel-dark" data-bs-ride="carousel" data-aos="fade-up">
      <div class="carousel-inner r-4">
        <div class="carousel-item active">
          <div class="bg-blue text-center text-white pt-md-7 pt-4">
            <div class="row justify-content-center mb-4">
              <div class="col-md-7 col-9">
                <h3><?php esc_html_e( 'Loren Ipsum', 'mozrest' ); ?></h3>
                <p>
                  <?php esc_html_e( 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s.', 'mozrest' ); ?>
                </p>
              </div>
            </div>
            <div class="row justify-content-center">
              <div class="col-md-5 col-9">
                <img class="img-auto r1-1 r2-1" src="<?php bloginfo('template_url'); ?>/img/screenshot-1.jpg"
                  alt="MOZREST" />
              </div>
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <div class="bg-green text-center text-white pt-md-7 pt-4">
            <div class="row justify-content-center mb-4">
              <div class="col-md-7 col-9">
                <h3><?php esc_html_e( 'Loren Ipsum', 'mozrest' ); ?></h3>
                <p>
                  <?php esc_html_e( 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s.', 'mozrest' ); ?>
                </p>
              </div>
            </div>
            <div class="row justify-content-center">
              <div class="col-md-5 col-9">
                <img class="img-auto r1-1 r2-1" src="<?php bloginfo('template_url'); ?>/img/screenshot-1.jpg"
                  alt="MOZREST" />
              </div>
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <div class="bg-pink text-center text-white pt-md-7 pt-4">
            <div class="row justify-content-center mb-4">
              <div class="col-md-7 col-9">
                <h3><?php esc_html_e( 'Loren Ipsum', 'mozrest' ); ?></h3>
                <p>
                  <?php esc_html_e( 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s.', 'mozrest' ); ?>
                </p>
              </div>
            </div>
            <div class="row justify-content-center">
              <div class="col-md-5 col-9">
                <img class="img-auto r1-1 r2-1" src="<?php bloginfo('template_url'); ?>/img/screenshot-1.jpg"
                  alt="MOZREST" />
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
</section>
<section>

  <div class="container text-center">
    <div class="bg-img-container" data-aos="fade-up">
      <img src="<?php bloginfo('template_url'); ?>/img/home-social-bg.jpg" alt="MOZREST" />
    </div>
    <div class="row justify-content-center mb-md-4 pb-md-5">
      <div class="col-lg-4 col-8  pb-md-5">
        <h2 class="mb-4" data-aos="fade-up"><?php esc_html_e( 'Loren Ipsum', 'mozrest' ); ?></h2>
        <p data-aos="fade-up">
          <?php esc_html_e( 'Contrary to popular belief, Lorem Ipsum is not simply random text.', 'mozrest' ); ?></p>
        <p data-aos="fade-up">
          <a href="#" class="btn btn-primary">
            <?php esc_html_e( 'Call to action', 'mozrest' ); ?>
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
              <p><?php esc_html_e( 'Contrary to popular belief, Lorem Ipsum is not simply random text.', 'mozrest' ); ?>
              </p>
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
          <div class="block-size-2 ms-0 pt-md-0 pt-5" data-aos="fade-left" data-aos-delay="300">
            <h2><?php esc_html_e( 'Digital is complex and waste of time', 'mozrest' ); ?></h2>
            <p>
              <?php esc_html_e( 'is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever', 'mozrest' ); ?>
            </p>
            <p class="m-0">
              <a href="#" class="btn btn-blue uppercase d-block">
                <?php esc_html_e( 'Call to action', 'mozrest' ); ?>
              </a>
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<?php
get_footer();