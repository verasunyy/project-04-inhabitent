<?php
/**
 * The template for displaying all pages.
 *
 * @package Inhabitent_Theme
 */

get_header(); ?>

<div id="primary" class="content-area">
	<!-- home-banner -->
	<div class="home-banner">
		<div class="home-logo-full">
			<img src="<?php echo get_template_directory_uri(); ?>/assets/images/logos/inhabitent-logo-full.svg" alt="Inhabitent Logo Full">
		</div>
	</div>
	<main id="main" class="site-main" role="main">
		<!-- shop stuff -->
		<section class="shop-stuff">
			<h2>shop stuff</h2>
			<?php
			$terms = get_terms(
				array(
					'taxonomy' => 'product-type',
					'hide_empty' => 0
				)
			);
			?>
			<div class="product-terms">
				<?php foreach ($terms as $term) : ?>
					<div class="product-term">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/images/product-type-icons/<?php echo $term->slug; ?>.svg" alt="" />
						<p><?php echo $term->description; ?></p>
						<a class="read-more-btn" href="<?php echo get_term_link($term); ?>"><?php echo $term->name; ?> stuff</a>
					</div>
				<?php endforeach; ?>
			</div>
		</section>

		<!-- journals -->
		<section class="journal">
			<h2>inhabitent journal</h2>
			<article class="journal-container">
				<?php $args = array('post_type' => 'post', 'posts_per_page'   => 3, 'order' => 'ASC');
				$journal_posts = get_posts($args); // returns an array of posts
				?>
				<?php foreach ($journal_posts as $post) : setup_postdata($post); ?>
					<div class="journal-entry">
						<?php if (has_post_thumbnail()) : ?>
							<div class="thumbnail-wrapper">
								<?php the_post_thumbnail('large'); ?>
							</div>
						<?php endif; ?>
						<div class="journal-entry-meta">
							<div class="post-meta">
								<?php echo get_the_date('j F Y'); ?> / <?php echo get_comments_number(); ?> comments
							</div>
							<div class="post-title">
								<a href="<?php echo get_the_permalink(); ?>">
									<h3> <?php the_title(); ?></h3>
								</a>
							</div>
						</div>
						<div class="journal-entry-btn">
							<a class="read-more-btn" href="<?php echo get_the_permalink(); ?>">Read Entry</a>
						</div>
					</div>
				<?php endforeach;
			wp_reset_postdata(); ?>
			</article>
		</section>

		<!-- latest adventure -->
		<section class="adventure">
			<h2>latest advantures</h2>
			<article class="adventure-container">
				<?php $args = array('post_type' => 'adventure', 'posts_per_page'   => 4, 'order' => 'ASC');
				$adventure_posts = get_posts($args); // returns an array of posts
				?>
				<?php foreach ($adventure_posts as $post) : setup_postdata($post); ?>
					<div class="adventure-entry">
						<?php if (has_post_thumbnail()) : ?>
							<div class="thumbnail-wrapper">

								<?php the_post_thumbnail(); ?>
							</div>
						<?php endif; ?>
						<div class="adventure-meta">
							<div class="post-title">
								<a href="<?php echo get_the_permalink(); ?>">
									<h3> <?php the_title(); ?></h3>
								</a>
							</div>
							<a class="read-more-btn" href="<?php echo get_the_permalink(); ?>">Read More</a>
						</div>
					</div>
				<?php endforeach;
			wp_reset_postdata(); ?>
			</article>
			<div class="read-more-btn">
				<a href="<?php echo get_post_type_archive_link('adventure'); ?>">more adventures</a>
			</div>
		</section>
	</main><!-- #main -->
</div><!-- #primary -->

<?php get_footer(); ?>