<?php
/*
Template Name: Blog
*/
?>
<?php get_header(); ?>

<?php 
   // the query
   $the_query = new WP_Query( array(
    
      'posts_per_page' => 1,
   )); 
?>

<?php if ( $the_query->have_posts() ) : ?>
<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
<div class="blog-presentation" data-aos="fade">
  <?php the_post_thumbnail('full'); ?>
  <div class="blog-presentation-content">
    <div class="container">
      <div class="blog-presentation-content-bg"></div>
      <div class="blog-presentation-content-text">
        <div class="category mb-1 text-yellow" data-aos="fade-up">
          <?php the_category(','); ?>
        </div>
        <h2 class="text-black" data-aos="fade-up">
          <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
        </h2>
      </div>
    </div>
  </div>
</div>
<?php endwhile; ?>
<?php wp_reset_postdata(); ?>
<?php endif; ?>
<section class="pt-2">
  <div class="container">
    <div class="row align-items-end" data-aos="fade-up">
      <div class="col-md-8">
        <ul class="nav nav-tabs no-border" role="tablist">
          <?php $categories = get_categories(); 
            $firstCat = ' active';
            foreach($categories as $category) {
              echo '<li class="nav-item" role="presentation"><button class="nav-link' . $firstCat . '" data-bs-toggle="tab" data-bs-target="#' . $category->slug .'-tab" type="button"
              role="tab">'. $category->name . '</button></li>';
              $firstCat = '';
            }
          ?>
        </ul>
      </div>
      <div class="col-md-4">
        <?php get_search_form(); ?>
      </div>
    </div>
    <hr class="m-0" data-aos="fade-up" />
    <div class="row pt-4" data-aos="fade-up" data-aos-delay="100">
      <div class="col-md-8">
        <div class="tab-content">
          <?php 
        $firstCat = ' show active';
        foreach($categories as $category) {
          echo '<div class="tab-pane fade'.$firstCat.'" id="'.$category->slug.'-tab" role="tabpanel" aria-labelledby="profile-tab">';
      ?>
          <?php 
        // the query
        $the_query = new WP_Query( array(
            'category_name' => $category->slug,
            'posts_per_page' => 1,
        )); 
      ?>
          <?php if ( $the_query->have_posts() ) : ?>
          <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
          <div class="blog-card">
            <a href="<?php the_permalink(); ?>" class="blog-card_img">
              <?php the_post_thumbnail('full'); ?>
            </a>
            <div class="blog-card_text">
              <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
              <p><?php the_excerpt(); ?></p>
              <div class="row align-items-center g-0">
                <div class="col-6"><a href="<?php the_permalink(); ?>" class="read-more">Read more <i
                      class="icon mozresticons-chevron-right"></i></a>
                </div>
                <div class="col-6 text-right">
                  <span class="time-read">3 min read</span>
                </div>
              </div>
            </div>
          </div>
          <?php endwhile; ?>
          <?php wp_reset_postdata(); ?>
          <?php endif; ?>
          <?php   
          echo '</div>';
          $firstCat = '';
        }
      ?>
        </div>
      </div>
      <div class="col-md-4">

        <div class="bg-blue text-white r-4 px-5 pt-4 pb-5">
          <h3 class="mb-4">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</h3>
          <p class="mb-4">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of
            classical Latin literature from 45 BC, making it over 2000 years old.</p>
          <?php 
          include 'subscribe-form.php';
          ?>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="py-0">
  <div class="container">
    <div class="row justify-content-center">
      <?php 
        $delay = 0;
        // the query
        $args = array(
          'posts_per_page'   => 12,
          'post_type'        => 'post',
        );
        $the_query = new WP_Query($args); 
      ?>
      <?php
        if ( $the_query->have_posts() ) :
        while ( $the_query->have_posts() ) : $the_query->the_post();
      ?>
      <div class="col-md-4 pb-5" data-aos="fade-up" data-aos-delay="<?php echo $delay;?>">
        <div class="blog-card">
          <a href="<?php the_permalink(); ?>" class="blog-card_img">
            <?php the_post_thumbnail('full'); ?>
          </a>
          <div class="blog-card_text">
            <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
            <p><?php the_excerpt(); ?></p>
            <div class="row align-items-center g-0">
              <div class="col-6"><a href="<?php the_permalink(); ?>" class="read-more">Read more <i
                    class="icon mozresticons-chevron-right"></i></a>
              </div>
              <div class="col-6 text-right">
                <span class="time-read">3 min read</span>
              </div>
            </div>
          </div>
        </div>
      </div>
      <?php
        $delay += 150;
        if($delay >= 450){
          $delay = 0;
        }
        endwhile;
        wp_reset_postdata();
        endif;
      ?>
    </div>
    <nav class="text-center" data-aos="fade" data-aos-delay="200">
      <a href="<?php bloginfo( 'url' ); ?>/category/blog" class="btn btn-link">More posts <i
          class="mozresticons-chevron-right"></i> </a>
    </nav>
  </div>
</section>
<section class="pt-md-5 pt-0">
  <div class="container">
    <div class="bg-green r-4 text-white px-5">
      <div class="row align-items-center">
        <div class="col-md-5 order-md-1 order-2" data-aos="fade-right">
          <div class="pt-md-6 ps-md-5 pt-4">
            <img class="img-auto m-auto" style="max-width:255px" src="<?php bloginfo('template_url'); ?>/img/man-1.png"
              alt="MOZREST" />
          </div>
        </div>
        <div class="col-md-7 order-md-2 order-1">
          <div class="block-size-2 ms-0 pt-md-0 pt-5" data-aos="fade-left" data-aos-delay="300">
            <h2 class="mb-3">Digital is complex and waste of time</h2>
            <p>is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's
              standard
              dummy text ever</p>
            <?php 
          include 'subscribe-form.php';
          ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<?php get_footer(); ?>