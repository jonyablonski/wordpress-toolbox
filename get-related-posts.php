<!-- Related Posts -->
<section class="section">
  <div class="container container--lrg container--divider">

    <header class="section__header section__header--min">
      <h3 class="section__header-title text-align-center">Related News &amp; Views</h3>
    </header>

    <?php if( get_field('related_posts') ): ?>

      <?php $posts = get_field('related_posts'); ?>
      <?php if( $posts ): ?>
        <?php foreach( $posts as $post): ?>
          <?php setup_postdata($post); ?>
          <?php get_template_part( 'template-parts/content', get_post_format() ); ?>
        <?php endforeach; ?>
        <?php wp_reset_postdata(); ?>
      <?php endif; ?>

    <?php else : ?>
      <?php $category = get_the_category(); ?>

      <?php $loop = new WP_Query( array(
        'posts_per_page' => 3,
        'category_name' => $category
      ) ); ?>
      <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
        <?php get_template_part( 'template-parts/content', get_post_format() ); ?>
      <?php endwhile; wp_reset_query(); ?>

    <?php endif; ?>

  </div><!-- .container -->
</section>
<!-- Related Posts -->