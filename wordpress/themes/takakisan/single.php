<?php get_header(); ?>

<div id="main" class="main row bg-light pt-2">
  <div class="col-lg-7">
    <?php
      while(have_posts()) {
        the_post();
        get_template_part('content', 'article');
      }
    ?>
  <div class="container related-posts-container">
    <h5>こちらの記事もどうぞ</h5>

    <?php
      $orig_post = $post;
      global $post;
      $tags = wp_get_post_tags($post->ID);
      if ($tags) {
        $tag_ids = array();
        foreach($tags as $tag) {
          $tag_ids[] = $tag->term_id;
        }
        $args = array(
          'tag__in' => $tag_ids,
          'post__not_in' => array($post->ID),
          'posts_per_page' => 4,
          'caller_get_posts' => 1,
          'orderby' => 'rand'
        );

        $my_query = new wp_query($args);
        ?>

        <div class="related-posts">
          <?php
            while($my_query->have_posts()) {
              $my_query->the_post();
              ?>
              <div class="related-inner">
                <h6>
                  <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php echo the_title(); ?></a>
                </h6>
                <?php
                  $cat = get_the_category();
                  $cat = $cat[0];
                  echo '<a class="category-badge" href="' . get_bloginfo('url') . '/category/' . $cat->category_nicename . '">';
                  echo $cat->cat_name;
                  echo '</a>';
                ?>
              </div>
              <?php
            } // while文ここまで
          ?>
        </div>

    <?php
      } // if文ここまで

      $post = $orig_post;
      wp_reset_query();
    ?>
    </div>
  </div>
  <?php get_sidebar(); ?>
</div>
<script src="https://cdn.rawgit.com/google/code-prettify/master/loader/run_prettify.js?skin=sons-of-obsidian"></script>

<?php get_footer(); ?>
