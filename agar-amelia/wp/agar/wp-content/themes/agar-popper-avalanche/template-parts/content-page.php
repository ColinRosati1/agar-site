<?php
/**
 * Template part for displaying page content in page.php.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package popper
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php 
		if ( has_post_thumbnail() ) { ?>
			<figure class="featured-image">
				<?php the_post_thumbnail('popper-featured-image'); ?>
			</figure>
		<?php }
		?>
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
	</header><!-- .entry-header -->

		<div id="content">
			<div id="cursor">
		 	<img alt="Cursor Hand" src="wp-content/themes/agar-popper-avalanche/asset/rotating-cursor.svg">
		 </div>	
			<div id="loader" class="hide">
				<section class="shapes">
					<!-- all my matter.js project goes here -->
				</section>
				<div id="footer"><p>AGAR@AGARSTUDIO.COM</p></div> 
			</div>
		</div>

		<section></section>
		<script src="wp-content/themes/agar-popper-avalanche/asset/matter.min.js"></script>
		<script src="wp-content/themes/agar-popper-avalanche/asset/matter-wrap.js"></script>
		<script src="wp-content/themes/agar-popper-avalanche/asset/avalanch.js"></script>


	<footer class="entry-footer">
		
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->

