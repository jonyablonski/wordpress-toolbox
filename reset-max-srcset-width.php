/**
 * Reset Maximum Srcset Image Width Value
 */
add_filter( 'max_srcset_image_width', 'jonyablonski_max_srcset_image_width', 10 , 2 );
function jonyablonski_max_srcset_image_width() {
  return 2560;
}