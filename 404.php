<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package Mozrest
 */

get_header();
?>

<header class="page-header">
  <div class="container">
    <h1><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'mozrest' ); ?></h1>
  </div>
</header><!-- .page-header -->
<section>
  <div class="container">
    <p class="text-center">
      <?php esc_html_e( 'It looks like nothing was found at this location. Maybe try one of the links below or a search?', 'mozrest' ); ?>
    </p>
  </div>
  <div class="box-search">
    <?php get_search_form(); ?>
  </div>
</section>
<?php
get_footer();