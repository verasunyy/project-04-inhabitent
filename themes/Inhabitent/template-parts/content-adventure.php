<?php
/**
 * Template part for displaying single adventure.
 *
 * @package Inhabitent_Theme
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<div class="adventure-thumbnail">
		<?php if (has_post_thumbnail()) : ?>
			<?php the_post_thumbnail('large'); ?>
		<?php endif; ?>
		</div>
		<?php the_title('<h1 class="entry-title">', '</h1>'); ?>
		<div class="entry-meta">
			<?php red_starter_posted_by(); ?>
		</div><!-- .entry-meta -->
	</header><!-- .entry-header -->
	<div class="entry-content">
		<?php the_content(); ?>
		<?php get_template_part('template-parts/content', 'social-media-buttons'); ?>
	</div><!-- .entry-content -->
</article><!-- #post-## -->