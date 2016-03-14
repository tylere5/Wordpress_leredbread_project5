<?php
/**
 * The template for displaying archive pages.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php if ( have_posts() ) : ?>
		<div class="container">
			<header class="page-header">
				<?php
					the_archive_title( '<h1 class="page-title">', '</h1>' );
					the_archive_description( '<div class="taxonomy-description">', '</div>' );
				?>
				<p>We are a team of creative and talented individuals who love making delicious treats.</p>
				<hr class="decorative"></hr>

				<section class="product-type container">
					<div class="product-cats">
						<?php
							$terms = get_terms( 'product-type' );
						?>
						<?php if ( ! empty( $terms ) ) : ?>
							<?php foreach ($terms as $term) : ?>
									<div class="product-cats-wrap">
										<a href="<?php echo get_term_link($term); ?>">
											<img src="<?php echo get_template_directory_uri() . '/images\/' . $term->slug; ?>.png" alt="" />
											<h3><?php echo $term->name; ?></h3>
										</a>
									</div>
							<?php endforeach; ?>
					<?php endif; ?>
				</div>
			</section>

			</header><!-- .page-header -->

			<div class="product-grid">
				<?php /* Start the Loop */ ?>
				<?php while ( have_posts() ) : the_post(); ?>

				<div class="product-grid-item">
	        <?php if ( has_post_thumbnail() ) : ?>
	          <a href="<?php the_permalink() ?>"><?php the_post_thumbnail( 'medium' ); ?></a>
	        <?php endif; ?>


					<div class="product-info">
		        <?php the_title(); ?>

		        <?php echo CFS()->get( 'price' ); ?>
					</div>
				</div>
				<?php endwhile; ?>


		    <?php else : ?>
		      <?php get_template_part( 'template-parts/content', 'none'); ?>
		    <?php endif; ?>
			</div>
		</div>

		</main><!-- #main -->
	</div><!-- #primary -->
<?php get_footer(); ?>
