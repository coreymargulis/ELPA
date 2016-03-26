<?php
/*
 Custom single page template
*/
?>

<?php get_header(); ?>

<div id="content">

	<div class="featured-area">

		<div class="image-gallery">Member artwork goes here.

			<?php

			$images = get_field('artwork');

			if( $images ): ?>
			    <div class="media">

				    <div id="slider" class="flexslider <?php if( get_sub_field('drop-shadow')){ ?>drop-shadow-slider<?php } ?>">

				        <ul class="slides">
				            <?php foreach( $images as $image ): ?>
				                <li>
				                    <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
				                </li>
				            <?php endforeach; ?>
				        </ul>
				    </div>
				    <div class="caption"><?php the_sub_field("image-caption"); ?></div>
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
