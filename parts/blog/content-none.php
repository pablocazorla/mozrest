<?php
/**
 * Template part for displaying a message that posts cannot be found
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Mozrest
 */

?>

<div class="text-center">
  <?php
if ( is_search() ) :
	?>

  <p>
    <?php esc_html_e( 'Sorry, but nothing matched your search terms. Please try again with some different keywords', 'mozrest' ); ?>:
  </p>
  <?php
	else :
		?>

  <p>
    <?php esc_html_e( 'It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching can help', 'mozrest' ); ?>:
  </p>
  <?php
	endif;
	echo '<div class="box-search">';
	get_search_form();
	echo '</div>';
?>


</div>