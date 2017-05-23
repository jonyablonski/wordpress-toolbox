<?php
// All pages
$total = wp_count_posts()->publish;
echo 'Total Posts: ' . $total;

// Pages with a category
$categories = get_categories('exclude=1,2,3');
foreach($categories as $category) {
  $total += $category->count;
}
echo 'Total Posts: ' . $total;
?>