<?php

/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Mozrest
 */

get_header();

$postype = get_post_type(); // post , testimonial , customer
$cat = get_queried_object();
$catSlug = $cat->slug;
$catName = $cat->name;
?>
<?php if ($postype === 'testimonial') { // Testimonials 
?>
<section class="pt-0">
  <div class="container">
    <div class="text-center py-5 mb-4">
      <h1 class="mb-4" data-aos="fade-up">
        <?php echo $catName; ?></h1>
      <div data-aos="fade-up">
        <a href="<?php echo get_post_type_archive_link('testimonial') ?>" class="btn btn-outline-primary px-5 py-3">
          <?php _e("All stories", 'mozrest'); ?>
        </a>
        <?php
          $terms = get_terms('testimonial_category');
          if (!empty($terms) && !is_wp_error($terms)) {
            foreach ($terms as $term) {
              $currentSlug = $term->slug;
              if ($currentSlug !== 'testimonials') {
                $isNotCurrentClass = 'outline-';
                if ($currentSlug === $catSlug) {
                  $isNotCurrentClass = '';
                }

                echo '<a class="btn btn-' . $isNotCurrentClass . 'primary px-5 py-3" href="' . get_bloginfo('url') . '/testimonial_category/' . $currentSlug . '">' . $term->name . "</a> ";
              }
            }
          }
          ?>
      </div>
    </div>
    <?php get_template_part('parts/testimonial/loop'); ?>
  </div>
</section>
<?php } // End Testimonials 
?>

<?php if ($postype === 'customer') { // Customers 
?>
<section class="" id="customers">
  <div class="container">
    <h4 class="text-yellow text-center mb-4" data-aos="fade-up"><?php _e("OUR CUSTOMERS", 'mozrest'); ?></h4>
    <div class="row justify-content-center mb-5">
      <div class="col-md-9 text-center">
        <h1 data-aos="fade-up"><?php echo $catName; ?></h1>
      </div>
    </div>
    <?php get_template_part('parts/customer/loop'); ?>
  </div>
</section>
<?php } // End Customers 
?>

<?php if ($postype === 'post') { // Post Blog
?>
<section class="pt-0">
  <div class="container">
    <div class="text-center py-5">
      <h1 class="m-0" data-aos="fade-up"><?php echo $catName; ?></h1>
    </div>
    <?php get_template_part('parts/blog/loop'); ?>
  </div>
</section>
<?php } // End Post Blog 
?>




<?php
get_footer();