<div class="splide__track">
  <ul class="splide__list">
    <?php 
        $count = 3;
        while ( $count > 0 ) :?>
    <li class="splide__slide">
      <div class="testimonial-container">
        <div class="testimonial">
          <div class="rating">
            <i class="icon mozresticons-star"></i>
            <i class="icon mozresticons-star"></i>
            <i class="icon mozresticons-star"></i>
            <i class="icon mozresticons-star"></i>
            <i class="icon mozresticons-star"></i>
          </div>
          <p>
            <?php esc_html_e( 'MozRest’s Ads solution drives 16% lower cost on our digital advertising.', 'mozrest' ); ?>
          </p>
          <div class="user-data">
            <div class="user-data_photo">
              <img class="img-auto" src="<?php bloginfo('template_url'); ?>/img/testimonials/ville-heinonen.jpg"
                alt="Ville Heinonen" />
            </div>
            <div class="user-data_text">
              <div class="user-data_title">
                Ville Heinonen
              </div>
              <div class="user-data_position">
                TableOnline.fi CEO
              </div>
            </div>
          </div>
        </div>
      </div>
    </li>
    <?php $count = $count - 1; endwhile;?>
  </ul>
</div>