<?php get_header(); ?>

<section class="pt-0  ps-3 pe-lg-0  px-3">
  <div class="py-5 text-center">
    <h4 class="text-yellow text-uppercase m-0" data-aos="fade"><?php _e("Testimonials", 'mozrest'); ?></h4>
  </div>
  <div class="row g-0">
    <div class="col-lg-6 py-3">
      <div class="container semi-container me-lg-0 text-lg-start text-center" data-aos="fade-right">
        <div class="pe-lg-5">
          <h1>
            <?php the_title(); ?></h1>
          <p class="mb-2">
            <b>
              <?php
							$terms = get_the_terms($post->ID, 'testimonial_category');
							if (!empty($terms) && !is_wp_error($terms)) {
								foreach ($terms as $term) {
									echo $term->name;
								}
							}
							?>
            </b>
          </p>
          <?php the_content(); ?>

        </div>
      </div>
    </div>
    <div class="col-lg-6">
      <div class="ratio ratio-16x9 ratio-img">
        <?php if (has_post_thumbnail()) {
					the_post_thumbnail('large');
				} ?>
      </div>
    </div>
  </div>
</section>
<?php get_footer(); ?>