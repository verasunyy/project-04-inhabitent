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
			<div class="inhabitent-journal-header home-header">
				<h2>inhabitent journal</h2>
			</div>
			<div class="inhabitent-journal home-container">
							<!-- <?php while ( have_posts() ) : the_post(); ?> 

							<?php get_template_part( 'template-parts/content', 'page' ); ?> 

<?php endwhile; // End of the loop. ?> -->

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
