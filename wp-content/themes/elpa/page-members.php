<?php
/*
 Template Name: Members
*/
?>

<?php get_header(); ?>

<div id="content">

	<div class="featured-area">

		<?php
			$args = array(
				'post_type' => 'members',
				// 'meta_key' => '_featured',
				// 'meta_value' => 'yes',
				'posts_per_page' => 1,
				'orderby' => 'rand'
			);

		$featured_query = new WP_Query( $args );

		if ($featured_query->have_posts()) :

				while ($featured_query->have_posts()) :

					$featured_query->the_post();

						$images = get_field('gallery'); // get gallery
						$image  = $images[0]; // get first image in the gallery [1] for second, [2] for third, and so on.

						if( $image ) : // only show the image if it exists ?>

							<div class="featured-image" style="background-image: url('<?php echo $image['url']; ?>')"></div>

						<?php endif; ?>

				<?php endwhile;

		endif;

		wp_reset_query(); // Remember to reset
		?>

	</div>

	<div id="main-area">
		<?php get_template_part('memberlist'); ?>
	</div>

</div>

<?php get_footer(); ?>
