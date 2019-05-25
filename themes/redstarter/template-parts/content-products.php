<?php
/**
 * Template part for displaying products.
 *
 * @package RED_Starter_Theme
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="product-image">
		<?php if (has_post_thumbnail()) : ?>
			<a href="<?php echo get_the_permalink(); ?>"><?php the_post_thumbnail('large'); ?></a>
		<?php endif; ?>
	</div>
	<div class="product-content">
		<header class="product-name">
			<?php the_title('<h2 class="entry-title">', '</h2>'); ?>
			<span class="product-price"><?php echo "$", CFS()->get('product_price'); ?></span>
		</div>
	</div>
</article>