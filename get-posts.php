<!-- Get Posts -->
 <div class="container container--lrg">
   <?php $loop = new WP_Query( array( 'post_type' => 'hosted-events', 'orderby' => 'date', 'order' => 'DSC', 'posts_per_page' => -1 ) ); ?>
     <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
       <?php get_template_part( 'template-parts/content', get_post_format() ); ?>
     <?php endwhile; wp_reset_query(); ?>
 </div><!-- .container -->
 <!-- Get Posts -->