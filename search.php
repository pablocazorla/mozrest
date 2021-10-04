<?php

/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package Mozrest
 */

get_header();
?>
<?php if (have_posts()) : ?>
<header class="page-header" data-aos="fade-down" data-aos-delay="100">
  <div class="container">
    <h1 class="search-title">
      <?php
        /* translators: %s: search query. */
        printf(esc_html__('Search Results for: %s', 'mozrest'), '<em>' . get_search_query() . '</em>');
        ?>
    </h1>
  </div>
</header>


<section>
  <div class="container">
    <div class="row">


      <?php
        /* Start the Loop */
        $delay = 0;
        while (have_posts()) :
          the_post();

        ?>
      <div class="col-lg-4 col-md-6 col-12 pb-5" data-aos="fade-up" data-aos-delay="<?php echo $delay; ?>">
        <?php get_template_part('parts/blog/content', 'search');    ?>
      </div>
      <?php
          $delay += 150;
          if ($delay >= 450) {
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

      <header class="page-header" data-aos="fade-down" data-aos-delay="100">
        <div class="container">
          <h1 class="search-title">
            <?php esc_html_e('Nothing Found', 'mozrest'); ?>
          </h1>
        </div>
      </header>
      <section>
        <div class="container">
          <?php get_template_part('parts/blog/content', 'none'); ?>
        </div>
      </section>
      <?php
    endif;
      ?>
    </div>
  </div>
</section>
<?php
  get_footer();