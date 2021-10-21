<section class="" id="customers">
  <div class="container">
    <h4 class="text-yellow text-center mb-4 text-uppercase" data-aos="fade-up"><?php _e("Integrations", 'mozrest'); ?>
    </h4>
    <div class="row justify-content-center mb-5">
      <div class="col-xl-8 text-center">
        <h1 data-aos="fade-up"><?php _e("Reservation Management Systems", 'mozrest'); ?></h1>
        <p class="mb-5" data-aos="fade-up">
          <?php _e("We partner up with Reservation Management Systems, setting up seamless connections with Reservation Portals worldwide. Do you use a Reservation Management System that isn’t included in the list? Let us know and we’ll add it to our upcoming integrations.", 'mozrest'); ?>
        </p>
        <div class="datalist-reservation mb-5" data-aos="fade-up">
          <input class="form-control" list="datalistRMS"
            placeholder="<?php _e("Select your Reservation Management System", 'mozrest'); ?>" />
          <datalist id="datalistRMS">
            <?php
            // the query
            $args = array(
              'posts_per_page'   => 99999,
              'post_type'        => 'rms',
            );
            $the_query = new WP_Query($args);
            ?>
            <?php
            if ($the_query->have_posts()) :
              while ($the_query->have_posts()) : $the_query->the_post();
            ?>
            <option value="<?php the_title(); ?>" data-slug="<?php the_permalink(); ?>">
              <?php
              endwhile;
              wp_reset_postdata();
            endif;
              ?>
          </datalist>
          <a href="#" class="datalist-reservation-link">
            <i class="mozresticons-chevron-right"></i>
          </a>
        </div>
        <div class="mb-5" data-aos="fade-up">
          <a href="<?php get_url_by_slug('request-an-integration'); ?>" class="btn btn-primary px-5 py-3">
            <?php _e("Request an integration", 'mozrest'); ?>
          </a>
        </div>

        <div class="row">
          <?php
          // the query
          $args = array(
            'posts_per_page'   => 99999,
            'post_type'        => 'rms',
          );
          $the_query = new WP_Query($args);
          ?>
          <?php
          if ($the_query->have_posts()) :
            while ($the_query->have_posts()) : $the_query->the_post();
          ?>
          <?php get_template_part('parts/reservations/rms_item', get_post_type()); ?>
          <?php
            endwhile;
            wp_reset_postdata();
          endif;
          ?>
        </div>
      </div>
    </div>
  </div>
</section>