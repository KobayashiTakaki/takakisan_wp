<?php get_header(); ?>

<div id="main" class="main row bg-light pt-2">
  <div class="col-lg-7">
    <?php
      while(have_posts()) {
        the_post();
        get_template_part('content','card');
      }
    ?>
    <?php if(function_exists("pagination")) pagination($wp_query->max_num_pages); ?>
  </div>
  <?php get_sidebar(); ?>
</div>

<?php get_footer(); ?>
