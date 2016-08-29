<?php
/*
 Template Name: About
*/
?>

<?php get_header(); ?>

<div id="content">

</div>
<div id="main-area">
	<div id="about" class="wrap">
		<div>

			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

				<section>
					<?php
						the_content();
					?>
				</section>

			<?php endwhile; ?>

			<?php endif; ?>

		</div>
	</div>

</div>

<?php get_footer(); ?>
