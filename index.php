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
            <h1 class="text-blue">It is everything about guests!</h1>
            <p>
              Find guests be found by them get bookings discuss whith them share news
            </p>
            <p>
              <a href="#" class="btn btn-primary">
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
    <h2 class="mb-5 pb-3" data-aos="fade-up">Enpower</h2>
    <div class="row justify-content-center">
      <div class="col-lg-4" data-aos="fade-up">
        <div class="icon-container mx-auto bg-pink mb-5">
          <i class="icon mozresticons-food"></i>
        </div>
        <h3>Restaurants</h3>
        <p class="block-size-1">Contrary to popular belief, Lorem Ipsum is not simply random text.</p>
      </div>
      <div class="col-lg-4" data-aos="fade-up" data-aos-delay="150">
        <div class="icon-container mx-auto bg-yellow mb-5">
          <i class="icon mozresticons-store"></i>
        </div>
        <h3>Market place</h3>
        <p class="block-size-1">Contrary to popular belief, Lorem Ipsum is not simply random text.</p>
      </div>
      <div class="col-lg-4" data-aos="fade-up" data-aos-delay="300">
        <div class="icon-container mx-auto bg-green mb-5">
          <i class="icon mozresticons-tablet"></i>
        </div>
        <h3>Guest Management Software</h3>
        <p class="block-size-1">Contrary to popular belief, Lorem Ipsum is not simply random text.</p>
      </div>
    </div>
  </div>
</section>
<section class="mb-7 p-0">
  <div class="container">
    <div class="row">
      <div class="col-md-5 py-5" data-aos="fade-up">
        <h2>One Platform endless possibilities</h2>
        <ul class="list fz18">
          <li>Marketing pagado</li>
          <li>SEO local</li>
          <li>Reserva</li>
          <li>Revisión de la gestión</li>
          <li>Publicación social</li>
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
      <h2 class="mb-4">Feature</h2>
      <div class="row justify-content-center">
        <div class="col-md-5">
          <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece.</p>
        </div>
      </div>
    </div>
    <div id="carouselFeatures" class="carousel slide carousel-dark" data-bs-ride="carousel" data-aos="fade-up">
      <div class="carousel-inner r-4">
        <div class="carousel-item active">
          <div class="bg-blue text-center text-white pt-md-7 pt-4">
            <div class="row justify-content-center mb-4">
              <div class="col-md-7 col-9">
                <h3>Loren Ipsum</h3>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                  industry's standard dummy text ever since the 1500s.</p>
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
                <h3>Loren Ipsum</h3>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                  industry's standard dummy text ever since the 1500s.</p>
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
                <h3>Loren Ipsum</h3>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                  industry's standard dummy text ever since the 1500s.</p>
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
        <h2 class="mb-4" data-aos="fade-up">Loren Ipsum</h2>
        <p data-aos="fade-up">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a
          piece.</p>
        <p data-aos="fade-up">
          <a href="#" class="btn btn-primary">
            Call to action
          </a>
        </p>
      </div>
    </div>


  </div>

</section>
<section>
  <div class="container">
    <h2 class="text-center" data-aos="fade-up">Testimonials</h2>
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
<section>
  <div class="container">
    <h2 class="text-center mb-5" data-aos="fade-up">Article Blog</h2>
    <div class="row g-3 align-items-stretch justify-content-center" data-aos="fade-up">
      <div class="col-md-4">
        <div class="blog-card">
          <a href="#" class="blog-card_img">
            <img src="<?php bloginfo('template_url'); ?>/img/photos/blog-1.jpg" alt="MOZREST" />
          </a>
          <div class="blog-card_text">
            <h3><a href="#">Lorem ipsum text</a></h3>
            <p>is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's...</p>
            <div class="row align-items-center g-0">
              <div class="col-6"><a href="#" class="read-more">Read more <i
                    class="icon mozresticons-chevron-right"></i></a>
              </div>
              <div class="col-6 text-right">
                <span class="time-read">3 min read</span>
              </div>

            </div>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="blog-card">
          <a href="#" class="blog-card_img">
            <img src="<?php bloginfo('template_url'); ?>/img/photos/blog-2.jpg" alt="MOZREST" />
          </a>
          <div class="blog-card_text">
            <h3><a href="#">Lorem ipsum text</a></h3>
            <p>is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's...</p>
            <div class="row align-items-center g-0">
              <div class="col-6"><a href="#" class="read-more">Read more <i
                    class="icon mozresticons-chevron-right"></i></a>
              </div>
              <div class="col-6 text-right">
                <span class="time-read">3 min read</span>
              </div>

            </div>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="blog-card">
          <a href="#" class="blog-card_img">
            <img src="<?php bloginfo('template_url'); ?>/img/photos/blog-3.jpg" alt="MOZREST" />
          </a>
          <div class="blog-card_text">
            <h3><a href="#">Lorem ipsum text</a></h3>
            <p>Is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's...</p>
            <div class="row align-items-center g-0">
              <div class="col-6"><a href="#" class="read-more">Read more <i
                    class="icon mozresticons-chevron-right"></i></a>
              </div>
              <div class="col-6 text-right">
                <span class="time-read">3 min read</span>
              </div>

            </div>
          </div>
        </div>
      </div>
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
            <h2>Digital is complex and waste of time</h2>
            <p>is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's
              standard
              dummy text ever</p>
            <p class="m-0">
              <a href="#" class="btn btn-blue uppercase d-block">
                Call to action
              </a>
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<?php
	//	if ( have_posts() ) :
			
			

		/* Start the Loop */
	//	while ( have_posts() ) :
	//		the_post();

			/*
				* Include the Post-Type-specific template for the content.
				* If you want to override this in a child theme, then include a file
				* called content-___.php (where ___ is the Post Type name) and that will be used instead.
				*/
			//get_template_part( 'template-parts/content', get_post_type() );

	//	endwhile;

	//	the_posts_navigation();

//	else :

//		get_template_part( 'template-parts/content', 'none' );

//	endif;
	?>



<?php
//get_sidebar();
get_footer();