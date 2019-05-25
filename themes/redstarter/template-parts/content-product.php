<?php
/**
 * Template part for displaying single product.
 *
 * @package RED_Starter_Theme
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="product-image">
		<?php if (has_post_thumbnail()) : ?>
			<?php the_post_thumbnail('large'); ?>
		<?php endif; ?>
	</div>
	<div class="product-content">
		<header class="product-name">
			<?php the_title('<h1 class="entry-title">', '</h1>'); ?>
		</header>
		<div class="product-info">
			<p class="product-price"><?php echo "$", CFS()->get('product_price'); ?></p>
			<p class="product-description"><?php the_content(); ?></p>
			<div class="social-buttons"></div>
		</div>
	</div>
</article>