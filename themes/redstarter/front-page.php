<?php
/**
 * The template for displaying all pages.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">

		<div class="home-banner">
			<div class="home-logo-full">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/images/logos/inhabitent-logo-full.svg" alt="Inhabitent Logo Full">
			</div>
		</div>
		<div class="shop-stuff-header home-header">
			<h2>shop stuff</h2>

		</div>
		<div class="shop-stuff home-container">

		</div>
		<div class="journal">
			<h2>inhabitent journal</h2>

			<div class="journal-container">

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
						<div class="post-meta">
							<?php echo get_the_date('j F Y'); ?> / <?php echo get_comments_number(); ?> comments
						</div>
						<div class="post-title">
							<a href="<?php echo get_the_permalink(); ?>">
								<h3> <?php the_title(); ?></h3>
							</a>
						</div>
						<div class="read-more-btn">
							<a href="<?php echo get_the_permalink(); ?>">Read Entry</a>
						</div>
					</div>


				<?php endforeach;
			wp_reset_postdata(); ?>

			</div>
		</div>
		<div class="latest-advantures-header home-header">
			<h2>latest advantures</h2>
		</div>
		<div class="latest-advantures home-container">

		</div>
		<div class="latest-advantures-readmore">
			<button>read more</button>
		</div>

	</main><!-- #main -->
</div><!-- #primary -->



<?php get_footer(); ?>