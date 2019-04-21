<?php
/**
 * The header for our child theme.
 *
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
<div id="page" class="hfeed site <?php echo get_theme_mod( 'layout_setting', 'no-sidebar' ); ?>">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'popper-child' ); ?></a>

	
		
		<header id="masthead" class="site-header agar-menu header-navigation main-navigation" role="banner">
		
		

		


		 <?php if ( has_nav_menu( 'secondary' ) ) : ?>
			<nav id="header-navigation" class="header-navigation clear" role="navigation">

				<div class="the-header-menu centered">
					<?php wp_nav_menu( array( 'theme_location' => 'secondary', 'menu_id' => 'secondary-menu' ) ); ?>
				</div>

			</nav><!-- #site-navigation -->
		<?php endif; ?>

		
	</header><!-- #masthead -->

	<div id="content" class="site-content">
