/**
 * Remove default image sizes
 */
function remove_default_image_sizes( $sizes) {
    unset( $sizes['thumbnail']);
    unset( $sizes['medium']);
    unset( $sizes['medium_large']);
    unset( $sizes['large']);
    return $sizes;
}
add_filter('intermediate_image_sizes_advanced', 'remove_default_image_sizes');