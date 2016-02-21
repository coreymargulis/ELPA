<?php
/*
 Template Name: Members
*/
?>

<?php get_header(); ?>

			<div id="content">

				<div class="featured-image">*Full width image goes here*</div>

				<div id="inner-content" class="wrap cf">

						<main id="main">

							<?php
							$type = 'members';
							$args=array(
							  'post_type' => $type,
							  'post_status' => 'publish',
								'orderby' => 'title' );

							$my_query = null;
							$my_query = new WP_Query($args);
							if( $my_query->have_posts() ) {
							  while ($my_query->have_posts()) : $my_query->the_post(); ?>
							    <div id="member"><a href="<?php the_permalink() ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></div>
							    <?php
							  endwhile;
							}
							wp_reset_query();  // Restore global post data stomped by the_post().
							?>

						</main>

				</div>

			</div>


<?php get_footer(); ?>
