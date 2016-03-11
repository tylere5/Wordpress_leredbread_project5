<?php
/**
 * The main template file.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php
				$terms = get_terms( 'product-type' );
			?>
		<section class="banner">
			<span class="banner-text">Baked to Perfection.</span>
		</section>

		<section class="product-type container">
			<div class="product-cats">
				<?php if ( ! empty( $terms ) ) : ?>
					<?php foreach ($terms as $term) : ?>
							<div class="product-cats-wrap">
								<img src="<?php echo get_template_directory_uri() . '/images\/' . $term->slug; ?>.png" alt="" />
								<h3><?php echo $term->name; ?></h3>
								<p>
									<?php echo $term->description; ?> <a href="<?php echo get_term_link( $term ); ?>">See More...</a>
								</p>
							</div>
					<?php endforeach; ?>
			<?php endif; ?>
		</div>
	</section>

	<section class="redirect-section">
		<p>
			<span>All our products are made fresh daily from locally-sourced ingredients. Our menu is updated frequently.</span>
			<a href="/products/" class="front-button">See Our Products</a>
		</p>
	</section>

	<section class="latest-news">
		<div class="latest-news-container">
			<h2>Our Latest News</h2>
			<ul>
				<?php
	        $args = array( 'post_type'=> 'post', 'posts_per_page' => 4 );
	        $latest_posts = get_posts( $args );
	      ?>

	      <?php foreach( $latest_posts as $post ) : setup_postdata( $post ); ?>
					<li>
						<div class="thumbnail-wrap">
							<?php if ( has_post_thumbnail() ) : ?>
								<?php the_post_thumbnail( 'large' ); ?>
							<?php endif; ?>
						</div>
						<div class="post-info-wrap">
							<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
							<span class="entry-meta">
								<?php red_starter_posted_on(); ?> / <?php comments_number( '0 Comments', '1 Comment', '% Comments' ); ?> / <?php red_starter_posted_by(); ?>
							</span>
		      			<?php endforeach; wp_reset_postdata(); ?>
						</div>
					</li>
			</ul>
		</div>
	</section>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
