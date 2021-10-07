<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Mozrest
 */

?>


<div class="blog-post" id="blog-post-<?php the_ID(); ?>">
  <h1 data-aos="fade-up"><?php the_title(); ?></h1>
  <!-- <div class="the-date mb-5" data-aos="fade-up" data-aos-delay="150">
    <?php the_date('F j, Y');?>
  </div> -->

  <div class="content" data-aos="fade-up" data-aos-delay="300">
    <?php the_content();
    wp_link_pages(
			array(
				'before' => '<div class="moz_pagination">' . esc_html__( 'Pages:', 'mozrest' ),
				'after'  => '</div>',
			)
		);
    ?>
  </div>

</div>