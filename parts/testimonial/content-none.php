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
  if (is_search()) :
  ?>

    <p>
      <?php _e('SEARCH_NOTHING_FOUND', 'mozrest'); ?>:
    </p>
  <?php
  else :
  ?>

    <p>
      <?php _e('SEARCH_NOTHING_FOUND_P', 'mozrest'); ?>:
    </p>
  <?php
  endif;
  echo '<div class="box-search">';
  get_search_form();
  echo '</div>';
  ?>


</div>