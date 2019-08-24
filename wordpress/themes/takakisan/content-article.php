<article class="mx-3 mb-5">
  <?php the_title('<h1>', '</h1>'); ?>
  <p class="date">
    <?php the_time("Y年m月j日"); ?>
  </p>
  <?php echo the_post_thumbnail('large'); ?>
  <?php the_content(); ?>
</article>
