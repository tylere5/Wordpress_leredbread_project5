<?php
/**
 * The header for our theme.
 *
 * @package RED_Starter_Theme
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="profile" href="http://gmpg.org/xfn/11">
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

		<?php wp_head(); ?>
	</head>

	<body <?php body_class(); ?>>
		<div id="page" class="hfeed site">
			<a class="skip-link screen-reader-text" href="#content"><?php esc_html( 'Skip to content' ); ?></a>

			<header id="masthead" class="site-header" role="banner">

					<div class="site-branding">
						<div class="site-branding-inner container">
							<div class="logo">
								<h1 class="site-title screen-reader-text"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>

								<div class="social">
									<ul>
										<li><i class="fa fa-facebook"></i></li>
										<li><i class="fa fa-twitter"></i></li>
										<li><i class="fa fa-google-plus"></i></li>
										<li><i class="fa fa-envelope"></i></li>
									</ul>
								</div>
								</div>
								<a href="http://localhost:3000" rel="home">
								<img src="<?php bloginfo('template_directory'); ?>/images/lrb-logo.svg" class="logo" alt="Le Red Bread Logo">
								</a>
						</div>
					</div><!-- .site-branding -->

					<nav id="site-navigation" class="main-navigation" role="navigation">
						<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html( 'Primary Menu' ); ?></button>
						<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
						<?php get_search_form(); ?>
					</nav><!-- #site-navigation -->

			</header><!-- #masthead -->

			<div id="content" class="site-content">
