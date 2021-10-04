<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Mozrest
 */

?>

<div id="page-<?php the_ID(); ?>">
  <h1 class="text-center text-lg-start text-blue" data-aos="fade-up"><?php the_title(); ?></h1>


  <div class="content" data-aos="fade-up" data-aos-delay="150">
    <?php
		the_content();

		wp_link_pages(
			array(
				'before' => '<div class="moz_pagination">' . esc_html__( 'Pages:', 'mozrest' ),
				'after'  => '</div>',
			)
		);
		?>
  </div>
</div>