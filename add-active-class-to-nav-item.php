function custom_active_item_classes($classes = array(), $menu_item = false){
        global $post;
        $classes[] = ($menu_item->url == get_post_type_archive_link($post->post_type)) ? 'current-menu-item active' : '';
        return $classes;
    }
add_filter( 'nav_menu_css_class', 'custom_active_item_classes', 10, 2 );