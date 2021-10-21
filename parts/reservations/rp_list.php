<section class="" id="customers">
  <div class="container">
    <h4 class="text-yellow text-center mb-4 text-uppercase" data-aos="fade-up"><?php _e("Integrations", 'mozrest'); ?>
    </h4>
    <div class="row justify-content-center mb-5">
      <div class="col-xl-8 text-center">
        <h1 data-aos="fade-up"><?php _e("Reservation Portals", 'mozrest'); ?></h1>
        <p class="mb-5" data-aos="fade-up">
          <?php _e("We partner up with Reservation Portals, setting up seamless connections with your Reservation Management System. Do you use a Reservation Portal that isn’t included in the list?", 'mozrest'); ?><br />
          <a href="<?php get_url_by_slug('request-an-integration'); ?>" class="text-blue text-bold">
            <?php _e("Let us know", 'mozrest'); ?>
          </a> <?php _e("and we’ll add it to our upcoming integrations.", 'mozrest'); ?>
        </p>
        <div class="datalist-reservation mb-5" data-aos="fade-up">
          <input class="form-control" list="datalistRP"
            placeholder="<?php _e("Select your Reservation Portal", 'mozrest'); ?>" />
          <datalist id="datalistRP">
            <?php
            // the query
            $args = array(
              'posts_per_page'   => 99999,
              'post_type'        => 'rp',
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
            'post_type'        => 'rp',
          );
          $the_query = new WP_Query($args);
          ?>
          <?php
          if ($the_query->have_posts()) :
            while ($the_query->have_posts()) : $the_query->the_post();
          ?>
          <?php get_template_part('parts/reservations/rp_item', get_post_type()); ?>
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