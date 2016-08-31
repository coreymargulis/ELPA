<?php
/*
 Template Name: News & Events
*/
?>

<?php get_header(); ?>

<div id="content">

</div>
<div id="main-area">
	<div id="about" class="wrap">
		<div>

			<?php

			$args = array(
				'post_type' => 'news & events',
				'posts_per_page' => 0,
				'orderby' => 'DESC'
			);

			// The Query
			$the_query = new WP_Query( $args );

			// The Loop
			if ( $the_query->have_posts() ) {
				echo '<ul>';
				while ( $the_query->have_posts() ) {
					$the_query->the_post();
					echo '<li>' . get_the_title() . '</li>';
				}
				echo '</ul>';
				/* Restore original Post Data */
				wp_reset_postdata();
			} else {
				// no posts found
			}
			?>

		</div>
	</div>

</div>

<?php get_footer(); ?>
