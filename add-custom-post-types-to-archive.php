/**
 * Make Archives.php Include Custom Post Types
 * https://css-tricks.com/snippets/wordpress/make-archives-php-include-custom-post-types/
 */
function vectorform_add_custom_types( $query ) {
  if( is_category() || is_tag() && empty( $query->query_vars['suppress_filters'] ) ) {
    $query->set( 'post_type', array(
     'post', 'nav_menu_item', 'news'
 ));
   return $query;
 }
}
add_filter( 'pre_get_posts', 'vectorform_add_custom_types' );