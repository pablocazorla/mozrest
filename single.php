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

        <?php

        while (have_posts()) :
          the_post();
        ?>
        <div class="mb-3" data-aos="fade">
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
              <?php
                // $homeUrl = get_bloginfo( 'url' );
                // echo '<li class="breadcrumb-item"><a href="'.$homeUrl.'"><i class="icon mozresticons-store"></i></a></li>';

                $category = get_the_category();
                $categoryID = $category[0]->term_id;
                $catName = $category[0]->cat_name;
                $catFatherID = $category[0]->category_parent;
                $catFather = get_category($catFatherID);
                $catGrandFatherID = $catFather->category_parent;
                $catGrandFather = get_category($catGrandFatherID);

                if ($catGrandFatherID !== 0) {
                  $catGrandFatherLink = get_category_link($catGrandFatherID);
                  echo '<li class="breadcrumb-item"><a href="' . $catGrandFatherLink . '">' . $catGrandFather->name . '</a></li>';
                }
                if ($catFatherID !== 0) {
                  $catFatherLink = get_category_link($catFatherID);
                  echo '<li class="breadcrumb-item"><a href="' . $catFatherLink . '">' . $catFather->name . '</a></li>';
                }
                $categoryLink = get_category_link($categoryID);
                echo '<li class="breadcrumb-item"><a href="' . $categoryLink . '">' . $category[0]->cat_name . '</a></li>';
                ?>
            </ol>
          </nav>
        </div>
        <?php
          get_template_part('parts/blog/complete', get_post_type());
          ?>
        <hr class="mt-5 mb-0" data-aos="fade-up" />
        <div class="author-box" data-aos="fade-up">
          <div class="author-box_img">
            <div class="author-box_img_container">
              <div class="author-box_img_container_wrap">
                <?php
                  $img = get_avatar(get_the_author_meta('user_email'), 250);
                  echo $img;
                  ?>
              </div>
            </div>
          </div>
          <div class="author-box_text">
            <div class="author-box_text_title">
              <?php the_author_meta('display_name'); ?>
            </div>
            <div class="author-box_text_description">
              <?php the_author_meta('description'); ?>
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
                  <h3 class="text-white">Digital Marketing is complex</h3>

                  <p>
                    Get the latest tips on Digital Marketing for Restaurants sent to you!
                  </p>
                  <?php
                  include 'parts/subscribe/subscribe-form.php';
                  ?>
                </div>
              </div>
            </div>
            <div class="col-lg-12 col-md-6">
              <div class="bg-yellow r-3 text-white px-4 py-3 mb-4">
                <div class="py-4">
                  <h3 class="mb-4">Lets talk!</h3>
                  <p class="m-3">
                    Do you have a question? Chat with a member of our team.
                  </p>
                  <a href="#" class="btn btn-blue uppercase d-block w-100 chat-bot">
                    Talk to us
                  </a>
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
    <h3 class="text-center mb-5 pb-3" data-aos="fade-up">Other articles</h3>
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
<?php
get_footer();