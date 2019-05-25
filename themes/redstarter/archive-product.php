<?php
/**
 * The template for displaying product archive pages.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">

		<?php if (have_posts()) : ?>
			<header class="page-header">
				<?php the_archive_title( '<h2 class="page-title">', '</h2>' );?>
				<?php
				$terms = get_terms(
					array(
						'taxonomy' => 'product-type',
						'hide_empty' => 0
					)
				);
				?>
				<div class="product-term">
					<?php foreach ($terms as $term) : ?>
						<a href="<?php echo get_term_link($term); ?>"><?php echo $term->name; ?></a>
					<?php endforeach; ?>
				</div>
			</header><!-- .page-header -->


			<?php /* Start the Loop */ ?>
			<?php while (have_posts()) : the_post(); ?>
				<div class="product-container">
				<?php
				get_template_part('template-parts/content','products');
				?>
				</div>

			<?php endwhile; ?>



		<?php else : ?>

			<?php get_template_part('template-parts/content', 'none'); ?>

		<?php endif; ?>

	</main><!-- #main -->
</div><!-- #primary -->


<?php get_footer(); ?>