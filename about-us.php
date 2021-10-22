<?php
/*
Template Name: about-us
*/
?>
<?php get_header(); ?>

<section class="pt-0  ps-3 pe-lg-0  px-3">

  <div class="container">
    <div class="py-5 text-center">
      <h1 class="m-0" data-aos="fade"><?php _e("About us", 'mozrest'); ?></h1>
    </div>
    <div class="row aling-items-stretch" data-aos="fade">
      <div class="col-md-7 pe-md-5 br-blue">
        <h3 class="text-uppercase text-yellow mb-4"><?php _e("Our story", 'mozrest'); ?></h3>
        <?php the_content(); ?>
      </div>
      <div class="col-md-5 ps-md-5">
        <h3 class="text-uppercase text-yellow mb-4"><?php _e("Our expertise", 'mozrest'); ?></h3>
        <p>
          <?php _e("With all online reservations accessible in one place, stressless restaurateurs and business managers can now focus on their core business while providing the best customer experience possible from the appointment phase.<br/><b>>> Less effort for More value.</b>", 'mozrest'); ?><br />
        </p>
        <h3 class="text-uppercase text-yellow mb-4"><?php _e("Our values", 'mozrest'); ?></h3>
        <p class="text-bold text-blue">
          <?php _e("Simplicity", 'mozrest'); ?>
        </p>
        <p>
          <?php _e("Technology should not be complicated. Running a business demands commitment, hard work and perseverance. We aim to provide simple solutions that are easy to use.", 'mozrest'); ?>
        </p>
        <p class="text-bold text-blue">
          <?php _e("Transparency", 'mozrest'); ?>
        </p>
        <p>
          <?php _e("At Mozrest, we love our passion for sharing what we learn and have an honest desire to help others learn from what we know. We care about getting it right and learn from our mistakes.", 'mozrest'); ?>
        </p>
        <p class="text-bold text-blue">
          <?php _e("Honesty", 'mozrest'); ?>
        </p>
        <p>
          <?php _e("Being honest is being open, trustworthy and truthful. Our company aims to be honest and sincere with our team, partners, and customers. We believe in integrity when our words and actions match.", 'mozrest'); ?>
        </p>
        <p class="text-bold text-blue">
          <?php _e("Caring", 'mozrest'); ?>
        </p>
        <p>
          <?php _e("We constantly work to discover better and more cost-efficient ways to provide our customers with a combination of intelligent planning, smart priorities, and quick problem solving to focus on activities that create value.", 'mozrest'); ?>
        </p>
      </div>
    </div>
  </div>
</section>
<section class="bg-blue">
  <div class="container text-center">
    <h2 class="text-white mb-5" data-aos="fade"><?php _e("Meet the team", 'mozrest'); ?></h2>
    <div class="row aling-items-stretch justify-content-center">
      <?php
      // the query
      $args = array(
        'posts_per_page'   => 99999,
        'post_type'        => 'team',
      );
      $the_query = new WP_Query($args);
      ?>
      <?php
      if ($the_query->have_posts()) :
        while ($the_query->have_posts()) : $the_query->the_post();
      ?>
      <div class="col-lg-3 col-md-4 pb-4">
        <div class="card shadow-none h-100 px-4 py-5">
          <div class="about-img">
            <div class="about-img_content">
              <?php if (has_post_thumbnail()) {
                    the_post_thumbnail('thumbnail');
                  } ?>
            </div>
          </div>
          <h4 class="text-yellow text-normal"><?php the_title(); ?></h4>
          <p class="m-0"><?php the_excerpt(); ?></p>
        </div>
      </div>
      <?php
        endwhile;
        wp_reset_postdata();
      endif;
      ?>
    </div>
  </div>

</section>


<?php get_footer(); ?>