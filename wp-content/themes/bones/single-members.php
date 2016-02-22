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

							<?php get_template_part('memberlist'); ?>

						</main>

				</div>

			</div>

<?php get_footer(); ?>
