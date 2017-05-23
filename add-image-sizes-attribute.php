/**
 * Add image 'sizes' attribute for responsive images
 */
function adjust_image_sizes_attr( $sizes, $size ) {
   $sizes = '(min-width: 30em) 50vw,
      (min-width: 45em) 33.3333vw, 100vw';
   return $sizes;
}
add_filter( 'wp_calculate_image_sizes', 'adjust_image_sizes_attr', 10 , 2 );