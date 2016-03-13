<?php
/**
* Template Name: About Page
*/

get_header(); ?>

  <div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">

      <div class="about-main-container">
        <header class="about-header">
          <h1 class="about-title"><?php echo esc_html(CFS()->get( 'title' ) ); ?></h1>
          <p class="about-tagline"><?php echo esc_html(CFS()->get( 'tagline' ) ); ?></p>
        </header>

        <div class="about-content-container">
          <div class="about-left">
            <img src="<?php echo get_template_directory_uri() ?>/images/team.jpg" alt="Le Red Bread team">
            <h3>Le Red Bread Team</h3>
            <p class="team-memo"><?php echo CFS()->get( 'team_memo' ); ?></p>
            <p class="about-text-left"><?php echo CFS()->get( 'team_copy' ); ?></p>
          </div>

          <div class="about-right">
            <img src="<?php echo get_template_directory_uri() ?>/images/bakery.jpg" alt="Le Red Bread Bakery">
            <h3>Le Red Bread Bakery</h3>
            <p class="baker-memo"><?php echo CFS()->get( 'baker_memo' ); ?></p>
            <p class="about-text-right"><?php echo CFS()->get( 'bakery_copy' ); ?></p>
          </div>
        </div>

        <div class="about-story">
          <h2>Our Story</h2>
          <?php echo CFS()->get ( 'our_story' ); ?>
        </div>
        <section class="redirect-section">
          <p>
            <span>Feel free to contact us with any questions comments or suggestions. We even take custom orders!</span>
            <a href="/contact/" class="front-button">Contact Us</a>
          </p>
        </section>
      </div>

    </main>
  </div>

<?php get_footer(); ?>
