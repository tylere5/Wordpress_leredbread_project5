<?php
/**
 * The template for displaying product types pages.
 *
 * @package RED_Starter_Theme
 */
get_header(); ?>

<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">
		<div class="taxonomy-type-container">
			<div class="taxonomy-type-content-area">
				<?php if ( have_posts() ) : ?>

				<header class="page-header">
					<?php
					the_archive_title( '<h1 class="page-title">', '</h1>' );
					the_archive_description( '<div class="taxonomy-description">', '</div>' );
					?>
				</header><!-- .page-header -->

					<?php /* Start the Loop */ ?>
	               	<?php while ( have_posts() ) : the_post(); ?>
				<div class="taxonomy-container">
					<div class="taxonomy-type-img">
						<?php if ( has_post_thumbnail() ) : ?>
						<?php the_post_thumbnail( 'medium' ); ?>
						<?php endif; ?>
					</div>
					<div class="taxonomy-type-info">
						<!-- //<?php the_title('<h3 class="entry-title">', '</h3>' ); ?> -->
						<?php the_title( sprintf( '<h3 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h3>' ); ?>
						<?php the_content(); ?>
						<p class= "price"> Price: <?php echo esc_html( CFS()->get('price')); ?></p>
					</div>
				</div>

				<?php endwhile; ?>

				<?php the_posts_navigation(); ?>

				<?php else : ?>

				<?php get_template_part( 'template-parts/content', 'none' ); ?>

				<?php endif; ?>
			</div>

			<div class="sidebar-area">
				<?php get_sidebar(); ?>
			</div>
		</div>
	</main><!-- #main -->
</div><!-- #primary -->


<?php get_footer(); ?>
