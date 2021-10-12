<div class="row justify-content-center">
  <?php
  $delay = 0;
  ?>
  <?php if (have_posts()) : ?>
  <?php while (have_posts()) : the_post(); ?>
  <div class="col-lg-4 col-md-6 col-12 pb-5" data-aos="fade-up" data-aos-delay="<?php echo $delay; ?>">
    <?php get_template_part('parts/blog/content', get_post_type());    ?>
  </div>
  <?php
      $delay += 150;
      if ($delay >= 450) {
        $delay = 0;
      }
    endwhile; ?>
  <?php else : ?>
  <h2 class="text-center"><?php _e("Sorry, posts not found", 'mozrest'); ?></h2>
  <?php endif; ?>
  <nav class="text-center">
    <?php
    previous_posts_link('<span class="btn btn-primary me-2">' . __('Previous Posts', 'mozrest') . '</span>');
    next_posts_link('<span class="btn btn-primary">' . __('Next Posts', 'mozrest') . '</span>');
    ?>
  </nav>
</div>