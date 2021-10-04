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
<?php if (have_posts()) : ?>

<?php

  $isCatBlog = false;
  $catClass = '';

  if (is_category()) {

    $cat = get_queried_object();

    $catParentID = $cat->parent;

    if ($catParentID !== 0) {

      $catParent = get_category($catParentID);

      if ($catParent->slug === 'blog') {
        $catClass = $cat->slug;
      } else {
        $catClass = $catParent->slug;
      }
    }

    if ($cat->slug === 'blog') {
      $isCatBlog = true;
    }
  }
  ?>

<?php if ($isCatBlog) { ?>





<div class="blog-presentation" data-aos="fade">
  <!-- <?php the_post_thumbnail('medium'); ?> -->
  <img src="<?php bloginfo('template_url'); ?>/img/blog-header.jpg" alt="Mozrest blog" />
  <div class="blog-presentation-content">
    <div class="container">
      <div class="blog-presentation-content-bg"></div>
      <div class="blog-presentation-content-text">
        <h2 class="text-black fs30" data-aos="fade-up">
          <?php esc_html_e('Discover the latest information on Food & Beverage Digital Marketing', 'mozrest'); ?>
        </h2>
      </div>
    </div>
  </div>
</div>

<section class="pt-1 pb-4">
  <div class="container">
    <div data-aos="fade-up">
      <div class="row align-items-end">
        <div class="col-md-8">
          <ul class="nav nav-tabs no-border blog-cat-tabs" role="tablist">
            <?php $categories = get_terms(array(
                  'taxonomy' => 'category',
                  'hide_empty' => false,
                  // 'childless' => false,
                  // 'hierarchical' => false, //can be 1, '1' too
                ));
                $firstCat = ' active';
                foreach ($categories as $category) {

                  $catParentID = $category->parent;

                  $catParent = get_category($catParentID);

                  if ($category->slug === 'blog') {
                    //
                  } else {
                    if ($catParent->slug === 'blog') {
                      $category_link = get_category_link($category->term_id);
                      echo '<li class="nav-item" role="presentation">
                  <a href="' . $category_link . '" class="nav-link' . $firstCat . '">' . $category->name . '</a>
                  </li>';
                      $firstCat = '';
                      //echo "<script>console.log('" . json_encode($category) . "');</script>";
                    }
                  }
                }
                ?>
          </ul>
        </div>
        <div class="col-md-4">
          <?php get_search_form(); ?>
        </div>
      </div>
      <hr class="m-0" />
    </div>
  </div>
</section>
<?php } else { ?>
<header class="page-header <?php echo $catClass; ?> mb-5" data-aos="fade-down" data-aos-delay="100">
  <div class="container">
    <?php $cat_name = single_cat_title('', false); ?>
    <h1>
      <?php if (is_category()) :
            echo $cat_name;
          elseif (is_tag()) :
            esc_html_e('Tag', 'mozrest');
            echo " <i>" . $cat_name . "</i>";
          elseif (is_author()) :
            esc_html_e('Author', 'mozrest');
            echo ": <i>" . $cat_name . "<i>";
          elseif (is_archive()) :
            esc_html_e('In file', 'mozrest');
            echo " <i>" . $cat_name . "<i>";
          endif; ?>
    </h1>
  </div>
</header>
<?php } // End if blog 
  ?>

<section class="pt-0">
  <div class="container">
    <div class="row">


      <?php
        /* Start the Loop */
        $firstPost = true;
        $delay = 0;
        while (have_posts()) :
          the_post();

          if ($firstPost && $isCatBlog) {
        ?>

      <div class="col-12 pb-5">
        <div class="row">
          <div class="col-md-8" data-aos="fade-up" data-aos-delay="100">
            <?php get_template_part('parts/blog/content', get_post_type());    ?>
          </div>
          <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">

            <div class="bg-blue text-white r-4 px-5 pt-4 pb-5">
              <h3 class="mb-1">
                <?php esc_html_e('Check your online profile', 'mozrest'); ?>
              </h3>
              <p class="mb-4">
                <?php esc_html_e('We\'ll find missing or inaccurate data', 'mozrest'); ?>
              </p>
              <a href="/restaurant-online-presence-check" class="btn btn-primary uppercase d-block w-100">
                <?php esc_html_e('Check my profile', 'mozrest'); ?>
              </a>
            </div>
          </div>

        </div>

      </div>

      <?php
            $firstPost = false;
          } else {
          ?>
      <div class="col-lg-4 col-md-6 col-12 pb-5" data-aos="fade-up" data-aos-delay="<?php echo $delay; ?>">
        <?php get_template_part('parts/blog/content', get_post_type());    ?>
      </div>
      <?php
            $delay += 150;
            if ($delay >= 450) {
              $delay = 0;
            }
          } // END $firstPost && $isCatBlog 


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
        <?php get_template_part('parts/blog/content', 'none'); ?>
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
            <h2 class="mb-3"><?php esc_html_e('Digital Marketing is complex', 'mozrest'); ?></h2>
            <p>
              <?php esc_html_e('Get the latest tips on Digital Marketing for Restaurants sent to you!', 'mozrest'); ?>
            </p>
            <?php
              include 'parts/subscribe/subscribe-form.php';
              ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<?php
  get_footer();