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

					$rows = get_field('gallery'); // get all the rows
				  $first_row = $rows[0]; // get the first row
					$first_row_image = $first_row['gallery']; // get the sub field value
					//
					// // Note
					// // $first_row_image = 123 (image ID)
					//
					$image = wp_get_attachment_image_src( $first_row_image, 'full');
					// // url = $image[0];
					// // width = $image[1];
					// // height = $image[2];
					?>
					<div class="featured-image" style="background-image: url('<?php echo $image[0]; ?>')">
				  </div>



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
