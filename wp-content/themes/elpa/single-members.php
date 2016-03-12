<?php
/*
 Custom single page template
*/
?>

<?php get_header(); ?>

<div id="content">

	<div class="featured-area">

				<div class="image-gallery">Member artwork goes here.</div>
				<div id="main" class="wrap">
					<h1 id="page-title"><?php the_title(); ?></h1>
					<div><a href="<?php the_field('website'); ?>">Website</a></div>
					<div><a href="mailto:<?php the_field('email'); ?>">Contact Artist</a></div>
					<div id="bio"><?php the_field('bio'); ?></div>
				</div>

	</div>

	<div class="main-area member">
		<?php get_template_part('memberlist'); ?>
	</div>

</div>

<?php get_footer(); ?>
