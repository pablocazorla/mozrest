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
    <h1><?php _e('ERROR_404_TITLE', 'mozrest'); ?></h1>
  </div>
</header><!-- .page-header -->
<section>
  <div class="container">
    <p class="text-center">
      <?php _e('ERROR_404_P', 'mozrest'); ?>
    </p>
  </div>
  <div class="box-search">
    <?php get_search_form(); ?>
  </div>
</section>
<?php
get_footer();
