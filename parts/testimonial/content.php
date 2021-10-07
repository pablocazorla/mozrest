<?php

/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Mozrest
 */

?>


<div class="testimonial-card" id="testimonial-<?php the_ID(); ?>">
  <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
  <a href="<?php the_permalink(); ?>" class="testimonial-card_img">
    <?php if (has_post_thumbnail()) {
      the_post_thumbnail('medium');
    } else { ?>
    <img src="<?php bloginfo('template_url'); ?>/img/default-thumbnail.jpg" />
    <?php } ?>
  </a>
  <p class="m-0">
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


  <?php
  /* LINK INDIVIDUAL
  $terms = get_the_terms($post->ID, 'testimonial_category');
  if (!empty($terms) && !is_wp_error($terms)) {
    foreach ($terms as $term) {
      echo '<a href="testimonial_category/' . $term->slug . '">' . $term->name . "</a>";
    }
  }
  */
  /* PARA TODAS LAS CATS
  $terms = get_terms('testimonial_category');
  if (!empty($terms) && !is_wp_error($terms)) {
    foreach ($terms as $term) {
      echo '<a href="testimonial_category/' . $term->slug . '">' . $term->name . "</a>";
    }
  }
  */
  ?>
  <p class="m-0">"<?php the_excerpt(); ?>"</p>
  <p class="m-0"><a href="<?php the_permalink(); ?>"><?php _e('Read the testimonial', 'mozrest'); ?></a></p>
</div>