/**
 * Responsive Image Helper Function
 *
 * @param string $image_id the id of the image (from ACF or similar)
 * @param string $image_size the size of the thumbnail image or custom image size
 * @param string $max_width the max width this image will be shown to build the sizes attribute
 */
function responsive_image($image_id,$image_size,$max_width){
  // check the image ID is not blank
  if($image_id != '') {
    // set the default src image size
    //$image_src = wp_get_attachment_image_url( $image_id, $image_size );
    // set the srcset with various image sizes
    $image_srcset = wp_get_attachment_image_srcset( $image_id, $image_size );
    // generate the markup for the responsive image
    // echo 'src="'.$image_src.'" srcset="'.$image_srcset.'" sizes="(max-width: '.$max_width.') 100vw, '.$max_width.'"';
    echo 'srcset="'.$image_srcset.'" sizes="(max-width: '.$max_width.') 100vw, '.$max_width.'"';
  }
}