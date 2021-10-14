<div class="bg-yellow py-5 relative" id="integracion-a" data-aos="fade-up">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-8 text-center">
        <h2>Discover if your Reservation systems connect with Mozrest</h2>
      </div>
    </div>
    <div class="row justify-content-between align-items-center pb-5">
      <div class="col-lg-5 order-1 mb-lg-0 mb-3">
        <div class="integracion-dropdown-container dropdown">
          <div class="row justify-content-between align-items-center" data-bs-toggle="dropdown" aria-expanded="false">
            <div class="col">
              <div class="integracion-dropdown-list_item" id="int-lab-rms">Select your Reservation Management System
              </div>
            </div>
            <div class="col-auto">
              <div class="integracion-dropdown-arrow">
                <i class="mozresticons-chevron-down"></i>
              </div>
            </div>
          </div>
          <div class="dropdown-menu">
            <div class="integracion-dropdown-list" id="int-list-rms">
              <?php
              // the query
              $args = array(
                'posts_per_page'   => 9999,
                'post_type'        => 'rms',
              );
              $the_query = new WP_Query($args);
              if ($the_query->have_posts()) :
                while ($the_query->have_posts()) : $the_query->the_post();
                  get_template_part('parts/integration/home-integration-item', get_post_type());
                endwhile;
                wp_reset_postdata();
              endif;
              ?>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-2 order-lg-2 order-3">
        <div class="integracion-btn-central" id="integracion-btn-central">
          <div class="integracion-btn-central_icon">
            <img class="img-responsive" src="<?php bloginfo('template_url'); ?>/img/mozrest-icon.svg" alt="" />
          </div>
          <a href="<?php get_url_by_slug('connect'); ?>"
            class="integracion-btn-central_a"><?php _e("Learn more", 'mozrest'); ?></a>
        </div>
      </div>
      <div class="col-lg-5 order-lg-3 order-2 mb-lg-0 mb-3">
        <div class="integracion-dropdown-container dropdown">
          <div class="row justify-content-between align-items-center" data-bs-toggle="dropdown" aria-expanded="false">
            <div class="col">
              <div class="integracion-dropdown-list_item" id="int-lab-rp">Select your Reservation Portal</div>
            </div>
            <div class="col-auto">
              <div class="integracion-dropdown-arrow">
                <i class="mozresticons-chevron-down"></i>
              </div>
            </div>
          </div>
          <div class="dropdown-menu">
            <div class="integracion-dropdown-list" id="int-list-rp">
              <?php
              // the query
              $args = array(
                'posts_per_page'   => 9999,
                'post_type'        => 'rp',
              );
              $the_query = new WP_Query($args);
              if ($the_query->have_posts()) :
                while ($the_query->have_posts()) : $the_query->the_post();
                  get_template_part('parts/integration/home-integration-item', get_post_type());
                endwhile;
                wp_reset_postdata();
              endif;
              ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>