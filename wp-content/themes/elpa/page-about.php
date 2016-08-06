<?php
/*
 Template Name: About
*/
?>

<?php get_header(); ?>

<div id="content">
	<!-- <div class="featured-area">
		<div id="bio" class="wrap">

				The Eastern League of Professional Artists is a society of artists, living in the eastern United States, who came together to introduce, expose and promote their paintings to clients and collectors. We are experienced and award-winning artists that exhibit, paint and teach around the country. The main purpose of the group is to exhibit in high quality venues, participate in plein air events, and continue refining their work. The organization is juried, dedicated to high standards for quality of work, professionalism and integrity.

		</div> -->
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

	<div id="contact-info" class="wrap">
		Contact us </br>
		<a>hello@easternfinearts.com</a>
	</div>


</div>

<?php get_footer(); ?>
