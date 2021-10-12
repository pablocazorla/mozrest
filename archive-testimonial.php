<?php get_header(); ?>

<section class="pt-0">
  <div class="container">
    <div class="text-center py-5 mb-4">
      <h2 class="mb-4" data-aos="fade-up">
        <?php _e('All customers stories', 'mozrest'); ?></h2>
      <div data-aos="fade-up">
        <a href="<?php echo get_post_type_archive_link('testimonial') ?>" class="btn btn-primary px-5 py-3">
          <?php _e("All stories", 'mozrest'); ?>
        </a>

        <?php


        $terms = get_terms('testimonial_category');
        if (!empty($terms) && !is_wp_error($terms)) {
          foreach ($terms as $term) {
            $currentSlug = $term->slug;
            if ($currentSlug !== 'testimonials') {
              echo '<a class="btn btn-outline-primary px-5 py-3" href="' . get_bloginfo('url') . '/testimonial_category/' . $currentSlug . '">' . $term->name . "</a> ";
            }
          }
        }
        ?>
      </div>
    </div>
    <?php get_template_part('parts/testimonial/loop');    ?>
  </div>
</section>

<?php get_footer(); ?>