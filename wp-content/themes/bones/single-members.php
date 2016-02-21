<?php
/*
 * CUSTOM POST TYPE TEMPLATE
*/
?>

<?php get_header(); ?>

			<div id="content">

				<div id="inner-content" class="wrap cf">

						<main id="main">

							<h1 class="page-title" itemprop="headline"><?php the_title(); ?></h1>
							<ul class="lessons">
							    <?php
							        $args = array( 'post_type' => 'members', 'posts_per_page' => 50, 'orderby' => 'date' );
							        $loop = new WP_Query( $args );
							        while ( $loop->have_posts() ) : $loop->the_post();
							    ?>

		                <li class="lesson">

		                  <a href="<?php echo get_permalink( $loop->post->ID ) ?>" title="<?php echo esc_attr($loop->post->post_title ? $loop->post->post_title : $loop->post->ID); ?>">

												<?php
												$image = get_field('artwork');

												  $url = $image['url'];
												  $alt = $image['alt'];

												  // thumbnail
												  $size = 'large';
												  $thumb = $image['sizes'][ $size ];

												  if( !empty($image) ):

												    echo '<img id="painting" src="' . $thumb . '" alt="' . $alt . '" />';

												  endif;

												?>

			                  <h3><?php the_title(); ?></h3>

											</a>

		                </li>

								<?php endwhile; ?>

								<?php wp_reset_query(); ?>

							</ul><!--/members-->

						</main>

				</div>

			</div>

<?php get_footer(); ?>
