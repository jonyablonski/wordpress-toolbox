<?php
 $countPosts = $wp_the_query->post_count;
 $postsPerPage = get_option('posts_per_page');
 if ( have_posts($countPosts <  $postsPerPage) ) :
  echo 'This is a test';
 endif;
 ?>