// Using wp_list_categories
<?php wp_list_categories( array(
    'orderby'    => 'name',
    'show_count' => true,
    'title_li' => ''
) ); ?>

// Using get_categories
<?php
 $categories = get_categories();
 foreach ( $categories as $category ) {
   echo '<li><a href="' . get_category_link ($category->term_id) . '" rel="category">' . $category->name  . ' <span>(' . $category->count . ')<span></li></a>';
 }