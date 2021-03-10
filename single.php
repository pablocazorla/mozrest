<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Mozrest
 */

get_header();
?>
<section>
  <div class="container">
    <div class="row">
      <div class="col-xl-9 col-lg-8">
        <div class="mb-3" data-aos="fade">
          <a href="/blog" class="back-to-blog">
            <i class="icon mozresticons-long-arrow-left"></i> <?php esc_html_e( 'Back to blog', 'mozrest' ); ?>
          </a>
        </div>

        <?php
				while ( have_posts() ) :
					the_post();
					get_template_part( 'template-parts/complete', get_post_type() );
					// the_post_navigation(
					// 	array(
					// 		'prev_text' => '<span class="nav-subtitle">' . esc_html__( 'Previous:', 'mozrest' ) . '</span> <span class="nav-title">%title</span>',
					// 		'next_text' => '<span class="nav-subtitle">' . esc_html__( 'Next:', 'mozrest' ) . '</span> <span class="nav-title">%title</span>',
					// 	)
					// );
					// If comments are open or we have at least one comment, load up the comment template.
					// if ( comments_open() || get_comments_number() ) :
					// 	comments_template();
					// endif;					
					?>
        <hr class="mt-5 mb-0" data-aos="fade-up" />
        <div class="author-box" data-aos="fade-up">
          <div class="author-box_img">
            <div class="author-box_img_container">
              <div class="author-box_img_container_wrap">
                <?php 
									$img = get_avatar(get_the_author_meta('user_email') , 250);
									echo $img;
								?>
              </div>
            </div>
          </div>
          <div class="author-box_text">
            <div class="author-box_text_title">
              <?php the_author_meta( 'display_name'); ?>
            </div>
            <div class="author-box_text_description">
              <?php the_author_meta( 'description'); ?>
            </div>
          </div>
        </div>
        <?php 
				endwhile; // End of the loop.
				?>

      </div>
      <div class="col-xl-3 col-lg-4 pt-5">
        <div class="sidebar-container" data-aos="fade-up" data-aos-delay="450">
          <div class="row">
            <div class="col-lg-12 col-md-6">
              <div class="bg-green r-3 text-white px-4 py-3 mb-4">
                <div class="py-4">
                  <h3 class="mb-2"><?php esc_html_e( 'Digital Marketing complex', 'mozrest' ); ?></h3>
                  <p>
                    <?php esc_html_e( 'Get the latest tips on Digital Marketing for Restaurants sent to you!', 'mozrest' ); ?>
                  </p>
                  <?php 
                    include 'subscribe-form.php';
                    ?>
                </div>
              </div>
            </div>
            <div class="col-lg-12 col-md-6">
              <div class="bg-yellow r-3 text-white px-4 py-5 mb-4">
                <div class="py-4">
                  <h3 class="mb-4"><?php esc_html_e( 'Digital is complex and waste of time', 'mozrest' ); ?></h3>
                  <p class="m-0">
                    <?php esc_html_e( 'Is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever', 'mozrest' ); ?>
                  </p>
                </div>
              </div>
            </div>
          </div>
          <?php get_sidebar(); ?>
        </div>
      </div>
    </div>
    <hr class="m-0" data-aos="fade-up" />
  </div>
</section>
<section class="pt-0 pb-4">
  <div class="container">
    <h3 class="text-center mb-5 pb-3" data-aos="fade-up"><?php esc_html_e( 'Other articles', 'mozrest' ); ?></h3>
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
<?php
get_footer();