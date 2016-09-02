<?php
/*
 Template Name: News & Events
*/
?>

<?php get_header(); ?>

<div id="content">

</div>
<div id="main-area">

	<div id="news" class="wrap">
		<ul>

				<?php

				$args = array(
					'post_type' => 'news & events',
					'posts_per_page' => 0,
					'orderby' => 'DESC'
				);

				// The Query
				$the_query = new WP_Query( $args );?>

				<?php if ($the_query->have_posts()) : while ($the_query->have_posts()) : $the_query->the_post(); ?>

					<li>
						<h1><?php the_title(); ?></h1>
						<?php the_content(); ?>
					</li>

				<?php endwhile; ?>

			<?php else:
				echo 'No events scheduled. Check back soon!';
			?>

				<?php endif; ?>




		</ul>
	</div>

</div>

<?php get_footer(); ?>
