<?php

add_theme_support('post-thumbnails', array('post') );
register_nav_menu('top-nav', 'トップナビ');

add_filter('nav_menu_css_class', 'my_nav_menu_class', 10, 2);
function my_nav_menu_class($classes, $item) {
  $classes = array();
  array_push($classes, 'nav-item mr-3');
  if($item -> current == ture) {
    array_push($classes, 'active');
  }
  return $classes;
}

//ナビゲーションのa要素にクラスを追加する
add_filter('walker_nav_menu_start_el', 'add_class_nav_menu_link', 10, 4);
function add_class_nav_menu_link($item_output, $item){
  return preg_replace('/(<a.*?)/', '$1' . " class='nav-link'", $item_output);
}

// add_filter('wp_list_categories', 'add_class_category_link', 10, 2);
// function add_class_category_link($output, $args) {
//   return preg_replace('/(<a.*?)/', '$1' . " class='badge badge-secondary'", $output);
// }

add_action('widgets_init', 'my_widgets_area');
function my_widgets_area() {
  register_sidebar(
    array(
      'name' => 'サイドバー',
      'id' => 'my_sidebar',
      'before_widget' => '<div class="sidebar-item">',
      'after_widget' => '</div>',
      'before_title' => '<h6 class="text-secondary font-weight-bold">',
      'after_title' => '</h6>'
    )
  );
  register_sidebar(
    array(
      'name' => '記事下',
      'id' => 'article-bottom',
      'before_widget' => '<div class="bottom-item">',
      'after_widget' => '</div>',
      'before_title' => '<h2>',
      'after_title' => '</h2>'
    )
  );
}

function pagination($pages = '', $range = 2) {
  $showitems = ($range * 2) + 1; // 表示するページ数（５ページを表示）

  global $paged; // 現在のページ値
  if(empty($paged)) {
    $paged = 1; // デフォルトのページ
  }

  if($pages == '') {
    global $wp_query;
    $pages = $wp_query->max_num_pages; // 全ページ数を取得
    if(!$pages) {
        $pages = 1;
    }
  }

  if($pages != 1) {
    echo "<div class=\"pagination my-3\">\n";
    echo "<ul class=\"nav justify-content-center nav-pills\">\n";
    // Prev：現在のページ値が１より大きい場合は表示
    if($paged > 1) {
      echo "<li class=\"prev nav-item\"><a class=\"nav-link\" href='".get_pagenum_link($paged - 1)."'><</a></li>\n";
    }

    for ($i=1; $i <= $pages; $i++) {
      if (1 != $pages &&
          (!($i >= $paged+$range+1 || $i <= $paged-$range-1) || $pages <= $showitems )) {
        echo ($paged == $i)? "<li class=\"nav-item\"><span class=\"nav-link btn btn-outline-secondary disabled\">".$i."</span></li>\n":"<li class=\"nav-item\"><a class=\"nav-link\" href='".get_pagenum_link($i)."'>".$i."</a></li>\n";
      }
    }
    //Next：総ページ数より現在のページ値が小さい場合は表示
    if ($paged < $pages) {
      echo "<li class=\"next nav-item\"><a class=\"nav-link\" href=\"".get_pagenum_link($paged + 1)."\">></a></li>\n";
    }
    echo "</ul>\n";
    echo "</div>\n";
  }
}

?>
