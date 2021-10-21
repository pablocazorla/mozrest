<div class="col-md-6" data-aos="fade-up">
  <a href="<?php the_permalink(); ?>" class="reservation-item">
    <div class="reservation-item_row">
      <div class="reservation-item_img">
        <?php if (has_post_thumbnail()) {
          the_post_thumbnail('thumbnail');
        } ?>
      </div>
      <div class="reservation-item_text">
        <b><?php the_title(); ?></b><br />
        <?php _e("Reservation Portal", 'mozrest'); ?>
      </div>
    </div>
  </a>
</div>