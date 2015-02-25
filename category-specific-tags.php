<ul>
  <?php
    $query_args = array(
        
      // Define Category via ID or slug
      // You can list multiple categories via comma separate list
      'category__in' => array( 'category-name' ),

      // Grabs ALL post
      'posts_per_page' => -1
    );

    $query = new WP_Query( $query_args );
    $posttags = "";
    while( $query->have_posts() ) {
      $query->the_post();
        if( get_the_tag_list() ){
          $posttags = $posttags . get_the_tag_list('',',',',');
        }
    }

    // Reset
    wp_reset_postdata();

    // Explode tags in array
    $sortedtags = explode(',', $posttags);

    // Sort array
    asort($sortedtags);
         
    // Remove duplicates from array
    $sortedtags = array_unique($sortedtags);
        
    // Remove the blank entry due to get_the_tag_list
    $sortedtags = array_values( array_filter($sortedtags) );

    // Wrap each tag in list element
    foreach ($sortedtags as $tagname) {
      echo '<li>' . $tagname . '</li>';
    }

  ?>
</ul>