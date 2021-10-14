<?php $slug = get_post_field('post_name', get_the_ID()); ?>


<div class="integracion-dropdown-list_item" data-value="<?php echo $slug; ?>">
  <div class="row align-items-center">
    <div class="col-auto">
      <div class="integracion-dropdown-list_icon">
        <?php if (has_post_thumbnail()) {
          the_post_thumbnail('thumbnail');
        } ?>
      </div>
    </div>
    <div class="col"><?php the_title(); ?></div>
  </div>
</div>