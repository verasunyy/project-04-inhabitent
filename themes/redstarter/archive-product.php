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
				<?php the_archive_title( '<h1 class="page-title">', '</h1>' );?>
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

			<div class="products-grid-container">
				<?php /* Start the Loop */ ?>
				<?php while (have_posts()) : the_post(); ?>	
					<?php get_template_part('template-parts/content','products');?>				
				<?php endwhile; ?>
			</div>
		<?php else : ?>
			<?php get_template_part('template-parts/content', 'none'); ?>
		<?php endif; ?>
	</main> <!-- #main -->
</div> <!-- #primary -->

<?php get_footer(); ?>