<?php
/**
 * The template for displaying archive adventure page.
 *
 * @package Inhabitent_Theme
 */

get_header(); ?>

<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">
		<?php if (have_posts()) : ?>
			<header class="page-header">
				<?php the_archive_title('<h1 class="page-title">', '</h1>'); ?>
			</header><!-- .page-header -->
			<div class="adventure-container">
				<?php /* Start the Loop */ ?>
				<?php while (have_posts()) : the_post(); ?>
					<div class="single-adventure-container">
						<?php
						if (has_post_thumbnail()) :
							the_post_thumbnail('large');
						endif;
						?>
						<div class="adventure-title">
							<a class="entry-title" href="<?php echo get_the_permalink(); ?>"><?php the_title('<h2 >', '</h2>'); ?></a>
							<a class="read-more-btn" href="<?php echo get_the_permalink(); ?>">Read More</a>
						</div>
					</div>
				<?php endwhile; ?>
			</div>
		<?php else : ?>
			<?php get_template_part('template-parts/content', 'none'); ?>
		<?php endif; ?>
	</main><!-- #main -->
</div><!-- #primary -->

<?php get_footer(); ?>