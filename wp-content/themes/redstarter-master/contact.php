<?php
/**
* Template Name: Contact Page
*/

get_header(); ?>

  <div class="page-container">
    <div id="primary" class="content-area">
      <div class="contact-content-area">
        <main id="main" class="site-main" role="main">

          <?php while ( have_posts() ) : the_post(); ?>

    				<?php get_template_part( 'template-parts/content', 'page' ); ?>

    			<?php endwhile; // End of the loop. ?>

        </main>
      </div>
    </div>

    <div class="sidebar-area">
      <?php get_sidebar(); ?>
    </div>
  </div>
<?php get_footer(); ?>
