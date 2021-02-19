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
  <div class="back-content align-right">
    <div class="back-content-col">
      <div class="photo-mosaic">
        <div class="row g-0">
          <div class="col-7">
            <div class="photo-mosaic-column">
              <div class="photo-mosaic-content p-left">
                <figure class="photo-mosaic-figure r1-0 r2-0">
                  <img src="<?php bloginfo('template_url'); ?>/img/photos/home-1.jpg" alt="MOZREST" />
                </figure>
              </div>
              <div class="photo-mosaic-content">
                <figure class="photo-mosaic-figure">
                  <img src="<?php bloginfo('template_url'); ?>/img/photos/home-2.jpg" alt="MOZREST" />
                </figure>
              </div>
            </div>
          </div>
          <div class="col-5">
            <div class="photo-mosaic-column">
              <div class="photo-mosaic-content c-4">
                <figure class="photo-mosaic-figure r1-0 r2-0 r3-0">
                  <img src="<?php bloginfo('template_url'); ?>/img/photos/home-3.jpg" alt="MOZREST" />
                </figure>
              </div>
              <div class="photo-mosaic-content c-8">
                <figure class="photo-mosaic-figure r2-0 r3-0">
                  <img src="<?php bloginfo('template_url'); ?>/img/photos/home-4.jpg" alt="MOZREST" />
                </figure>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="front-content">
    <div class="v-centered">
      <div class="container">
        <div class="row">
          <div class="col-6">
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