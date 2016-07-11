<?php if ( 'post' == get_post_type() ) : // Hide category and tag text for pages on Search ?>
    <?php
        /* translators: used between list items, there is a space after the comma */
        $categories_list = get_the_category_list( __( ', ', 'shape' ) );
        if ( $categories_list && shape_categorized_blog() ) :
    ?>
    <span class="cat-links">
        <?php printf( __( 'Posted in %1$s', 'shape' ), $categories_list ); ?>
    </span>
    <?php endif; // End if categories ?>

    <?php
        /* translators: used between list items, there is a space after the comma */
        $tags_list = get_the_tag_list( '', __( ', ', 'shape' ) );
        if ( $tags_list ) :
    ?>
    <span class="sep"> | </span>
    <span class="tag-links">
        <?php printf( __( 'Tagged %1$s', 'shape' ), $tags_list ); ?>
    </span>
    <?php endif; // End if $tags_list ?>
<?php endif; // End if 'post' == get_post_type() ?>