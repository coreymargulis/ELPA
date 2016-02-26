<?php
/*
 Template name: Member
*/
?>

<?php get_header(); ?>

<div id="content">

	<div class="featured-area">

				<div class="featured-image member">Member artwork goes here. This div will probably need to be different</div>
				<div id="main" class="wrap">
					<h1 id="page-title"><?php the_title(); ?></h1>
					<div id="bio">Bio goes here</div>
				</div>

	</div>

	<div class="main-area member">
		<?php get_template_part('memberlist'); ?>
	</div>

</div>

<?php get_footer(); ?>
