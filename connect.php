<?php
/*
Template Name: connect
*/
?>
<?php get_header(); ?>
<?php
$matchingString = get_query_var('matching');
$matchingArray = explode('--', $matchingString);
$rms_slug = $matchingArray[0];
$rp_slug = $matchingArray[1];

// RMS
$rms_data = get_page_by_path($rms_slug, OBJECT, 'rms');
$rms_id = $rms_data->ID;

// RP
$rp_data = get_page_by_path($rp_slug, OBJECT, 'rp');
$rp_id = $rp_data->ID;


if (!$rms_id || !$rp_id) {
  get_template_part('parts/error404/error404');
} else {
  // RMS
  $rms_img_url = get_the_post_thumbnail_url($rms_id, 'medium');
  $rms_url = get_permalink($rms_id);
  $rms_title = $rms_data->post_title;
  $rms_content = $rms_data->post_excerpt;
  // RP
  $rp_img_url = get_the_post_thumbnail_url($rp_id, 'medium');
  $rp_url = get_permalink($rp_id);
  $rp_title = $rp_data->post_title;
  $rp_content = $rp_data->post_excerpt;
?>
<section>
  <div class="container">
    <div class="row mb-5">
      <div class="col-md-6">
        <h1>
          <?php echo __("We integrate", 'mozrest') . ' ' . $rms_title . ' ' . __("with", 'mozrest') . ' ' . $rp_title; ?>
        </h1>
        <p>
          <?php echo __("Mozrest integrates all your", 'mozrest') . ' ' . $rms_title . ' ' . __("reservations directly to your", 'mozrest') . ' ' . $rp_title . ' ' . __("Reservation Management System", 'mozrest'); ?>
        </p>
        <a href="<?php get_url_by_slug('request-a-demo'); ?>" class="btn btn-primary">
          <?php _e('Request a demo', 'mozrest'); ?>
        </a>
      </div>
      <div class="col-md-6">
        <div class="connect-img">
          <img class="img-auto" src="<?php bloginfo('template_url'); ?>/img/integration.svg" alt="Integration" />
          <div class="connect-img_item rms">
            <div class="connect-img_wrap">
              <img src="<?php echo $rms_img_url; ?>" alt="<?php echo $rms_title; ?>" />
            </div>
          </div>
          <div class="connect-img_item rp">
            <div class="connect-img_wrap">
              <img src="<?php echo $rp_img_url; ?>" alt="<?php echo $rp_title; ?>" />
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-5">
        <p class="m-0 text-bold"><?php echo $rms_title; ?></p>
        <p class="m-0"><?php echo $rms_content; ?></p>
        <p class="m-0">
          <a href="<?php echo $rms_url; ?>">
            <?php echo __("More about", 'mozrest') . ' ' . $rms_title; ?>
          </a>
        </p>
      </div>
      <div class="col-md-5">
        <p class="m-0 text-bold"><?php echo $rp_title; ?></p>
        <p class="m-0"><?php echo $rp_content; ?></p>
        <p class="m-0">
          <a href="<?php echo $rp_url; ?>">
            <?php echo __("More about", 'mozrest') . ' ' . $rp_title; ?>
          </a>
        </p>
      </div>
    </div>

  </div>
</section>
<?php get_template_part('parts/integration/integration-comment'); ?>
<section class="pt-0">
  <?php get_template_part('parts/features/features-list'); ?>
</section>
<?php
}
?>
<?php get_footer(); ?>