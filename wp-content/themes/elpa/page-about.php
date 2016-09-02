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
					<p><?php the_field('about', 'option'); ?></p>
				</section>

			<?php endwhile; ?>

			<?php endif; ?>

		</div>
	</div>

	<div id="contact-info" class="wrap">
		Contact us </br>
		<a><?php the_field('email')?></a>
	</div>

</div>

<?php get_footer(); ?>
