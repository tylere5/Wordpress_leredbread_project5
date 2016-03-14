<?php
/**
 * The template for displaying all single-product posts.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<div class="single-product-main-container">
				<div class="single-product-content-area">
					<div class="single-product-item">
						<?php while ( have_posts() ) : the_post(); ?>


								<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
									<header class="entry-header">
										<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
										<?php if ( has_post_thumbnail() ) : ?>
											<?php the_post_thumbnail( 'large' ); ?>
										<?php endif; ?>

									</header><!-- .entry-header -->

									<div class="entry-content">
										<?php echo CFS()->get( 'price' ); ?>
										<?php the_content(); ?>
									</div><!-- .entry-content -->
								</article><!-- #post-## -->

						<?php endwhile; // End of the loop. ?>
					</div>
				</div>
				<div class="sidebar-area">
					<?php get_sidebar(); ?>
				</div>
			</div>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
