<?php
/*
Template Name: support
*/
?>
<?php get_header(); ?>

<section class="pt-0 pb-5  ps-3 pe-lg-0  px-3">
  <div class="container">
    <div class="py-5 text-center">
      <h1 class="m-0" data-aos="fade"><?php _e("Support", 'mozrest'); ?></h1>
    </div>
    <div class="row align-items-stretch" data-aos="fade-up">
      <div class="col-md-8">
        <div class="bg-pink text-white p-4 h-100">
          <h3 class="text-white text-uppercase">
            <?php _e("HOW CAN WE HELP YOU TODAY?", 'mozrest'); ?>
          </h3>
          <p>
            <?php _e("Our support team will be happy to help you by email at support@mozrest.com or via our support page.", 'mozrest'); ?>
          </p>
          <p class="m-0">
            <a href="#" class="btn btn-yellow">
              <?php _e('View our support page', 'mozrest'); ?>
            </a>
          </p>
        </div>
      </div>
      <div class="col-md-4">
        <img class="img-auto" src="<?php bloginfo('template_url'); ?>/img/support.jpg" alt="MOZREST" />
      </div>
    </div>
  </div>
</section>
<section class="pt-0" data-aos="fade-up">
  <div class="container">
    <p class="text-center m-0"><?php _e('Alternatively, you can fill in the form below:', 'mozrest'); ?></p>
    <script type="text/javascript" src="https://form.jotform.com/jsform/212902569097362"></script>
  </div>
</section>


<?php get_footer(); ?>