<?php

/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Mozrest
 */

?>


<div class="customer-card" id="customer-<?php the_ID(); ?>">
  <div class="row g-3">
    <div class="col-6">
      <a href="<?php the_permalink(); ?>" class="customer-card_img">
        <?php if (has_post_thumbnail()) {
          the_post_thumbnail('large');
        } else { ?>
        <img src="<?php bloginfo('template_url'); ?>/img/default-thumbnail.jpg" />
        <?php } ?>
      </a>
    </div>
    <div class="col-6">
      <div class="customer-card_text">
        <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
        <?php the_excerpt(); ?>
        <a href="<?php the_permalink(); ?>"><?php _e('Learn more', 'mozrest'); ?></a>
      </div>
    </div>
  </div>




</div>