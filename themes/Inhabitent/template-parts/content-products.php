<?php
/**
 * Template part for displaying products.
 *
 * @package Inhabitent_Theme
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class('single-product-container'); ?> ">
	<div class=" product-image">
	<?php if (has_post_thumbnail()) : ?>
		<a href="<?php echo get_the_permalink(); ?>"><?php the_post_thumbnail('large'); ?></a>
	<?php endif; ?>
	</div>
	<div class="product-title">
		<?php the_title('<h2 class="entry-title">', '</h2>'); ?>
		<p class="product-price"><?php echo "$", CFS()->get('product_price'); ?></p>
	</div>
</article>