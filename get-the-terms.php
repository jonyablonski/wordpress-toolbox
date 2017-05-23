<?php
  $terms = get_the_terms( $post->ID , 'category' );
  foreach ( $terms as $term ) {
    $term_link = get_term_link( $term );
    echo '<a href="' . $term_link . '" class="card__meta">' . $term->name . '</a>';
  }
  ?>