<div id="members-list" class="wrap">
  <?php
  $type = 'members';
  $args=array(
    'post_type' => $type,
    'post_status' => 'publish',
    'orderby' => 'title' );

  $my_query = null;
  $my_query = new WP_Query($args);
    if( $my_query->have_posts() ) {
      echo '<ul>';
      while ($my_query->have_posts()) : $my_query->the_post(); ?>
        <li><a href="<?php the_permalink() ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></li>
        <?php
      endwhile;
      echo '</ul>';
    }
  wp_reset_query();  // Restore global post data stomped by the_post().
  ?>
  <!-- <?php $members_args=array(
    'post_type' => 'members',
    'post_status' => 'publish',
    'orderby' => 'title' ); ?>
  <?php wp_list_pages($members_args) ?> -->

</div>
