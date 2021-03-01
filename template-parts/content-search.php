<?php
/**
 * Template part for displaying results in search pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Mozrest
 */

?>

<div class="blog-card" id="post-<?php the_ID(); ?>">
  <a href="<?php the_permalink(); ?>" class="blog-card_img">
    <?php if(has_post_thumbnail()){
			the_post_thumbnail('full');
		}else{ ?>
    <img src="<?php bloginfo('template_url'); ?>/img/default-thumbnail.jpg" />
    <?php } ?>
  </a>
  <div class="blog-card_text">
    <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
    <p><?php the_excerpt(); ?></p>
    <div class="row align-items-center g-0">
      <div class="col-6"><a href="<?php the_permalink(); ?>"
          class="read-more"><?php esc_html_e( 'Read more', 'mozrest' ); ?> <i
            class="icon mozresticons-chevron-right"></i></a>
      </div>
      <div class="col-6 text-right">
        <span class="time-read"><?php the_reading_time(); ?> <?php esc_html_e( 'min read', 'mozrest' ); ?></span>
      </div>
    </div>
  </div>
</div>