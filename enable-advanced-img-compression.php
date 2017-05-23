/**
 * Enable advanced image compression
 */
function custom_theme_setup() {
    add_theme_support( 'advanced-image-compression' );
}
add_action( 'after_setup_theme', 'custom_theme_setup' );