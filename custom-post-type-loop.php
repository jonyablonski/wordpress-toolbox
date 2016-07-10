<?php $loop = new WP_Query( array( 'post_type' => 'post-type-name', 'posts_per_page' => 3, 'orderby' => 'date', 'order' => 'DSC' ) ); ?>
<?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<!-- Post Content -->
	</article>
<?php endwhile; wp_reset_query(); ?>