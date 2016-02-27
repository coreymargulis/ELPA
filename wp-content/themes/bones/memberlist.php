<div id="members-list" class="wrap">

  <?php $posts = new WP_Query( array( 'post_type' => 'members', 'post_status' => 'publish',
  'orderby' => 'title', 'posts_per_page' => -1 ) ); ?>

  <ul>
  <?php while( $posts->have_posts() ) : $posts->the_post(); ?>
      <li><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></li>
  <?php endwhile; ?>
  </ul>

  <?php wp_reset_postdata(); ?>

</div>
