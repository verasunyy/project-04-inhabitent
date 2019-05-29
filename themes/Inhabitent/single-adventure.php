<?php
/**
 * The template for displaying all single adventure.
 *
 * @package Inhabitent_Theme
 */

get_header(); ?>

<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">
		<?php while (have_posts()) : the_post(); ?>
			<?php get_template_part('template-parts/content', 'adventure'); ?>
		<?php endwhile; ?>
	</main><!-- #main -->
</div><!-- #primary -->

<?php get_footer(); ?>