<?php
/*
 Custom single page template
*/
?>

<?php get_header(); ?>

<div id="content">

	<div class="featured-area">

		<div class="image-gallery">

			<?php

			$images = get_field('gallery');

			if( $images ): ?>


				    <div id="slider" class="flexslider">

				        <ul class="slides">
				            <?php foreach( $images as $image ): ?>
				                <li style="background-image: url('<?php echo $image['url']; ?>')">
				                </li>
				            <?php endforeach; ?>
				        </ul>
				    </div>


			<?php endif; ?>

		</div>

		<div id="bio" class="wrap">
			<h1 id="page-title"><?php the_title(); ?></h1>
			<div id="contact-info">
				<a href="<?php the_field('website'); ?>">Website</a></br>
				<a href="mailto:<?php the_field('email'); ?>">Contact</a>
			</div>
			<div>
				<?php the_field('bio'); ?>
			</div>
		</div>

	</div>

	<div class="main-area member">

		<?php get_template_part('memberlist'); ?>

	</div>

</div>

<?php get_footer(); ?>
