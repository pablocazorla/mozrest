<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Mozrest
 */

get_header();
?>



<?php if ( have_posts() ) : ?>

<header class="page-header" data-aos="fade-down" data-aos-delay="100">
  <div class="container">
    <?php $cat_name = single_cat_title('',false);?>
    <h1>
      <?php if(is_category()):
          echo $cat_name; 
        elseif(is_tag()):
          esc_html_e( 'Tag', 'mozrest' );
          echo " <i>".$cat_name."</i>"; 
        elseif(is_author()):
          esc_html_e( 'Author', 'mozrest' );
          echo ": <i>".$cat_name."<i>"; 
        elseif(is_archive()):
          esc_html_e( 'In file', 'mozrest' );
          echo " <i>".$cat_name."<i>";
        endif; ?>
    </h1>
  </div>
</header>
<section>
  <div class="container">
    <div class="row">


      <?php
	/* Start the Loop */
	$delay = 0;
	while ( have_posts() ) :
		the_post();

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
	?>
      <div class="col-12">
        <div class="moz_pagination">
          <?php
	$argsPag = array(
		'prev_text'    => '<i class="icon mozresticons-chevron-left"></i> ' . __('Previous'),
    'next_text'    => __('Next') . ' <i class="icon mozresticons-chevron-right"></i>',
	);
	echo paginate_links($argsPag);
	?>
        </div>
      </div>
      <?php
else :
	?>
      <div class="col-12">
        <?php	get_template_part( 'template-parts/content', 'none' );?>
      </div>
      <?php
endif;
?>
    </div>
  </div>
</section>
<section class="pt-0">
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
            <h2 class="mb-3"><?php esc_html_e( 'Digital Marketing complex', 'mozrest' ); ?></h2>
            <p>
              <?php esc_html_e( 'Get the latest tips on Digital Marketing for Restaurants sent to you!', 'mozrest' ); ?>
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
<?php
get_footer();