<?php
  /*
  Template Name: 固定ページ
  */
?>

<?php get_header(); ?>

<div id="main" class="main row bg-light justify-content-center pt-2">
  <div class="col-lg-7">
    <?php
      while(have_posts()) {
        the_post();
        get_template_part('content', 'page');
      }
    ?>
  </div>
  <?php get_sidebar(); ?>
</div>

<?php get_footer(); ?>
