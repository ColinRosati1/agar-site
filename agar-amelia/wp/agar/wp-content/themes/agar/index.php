<!DOCTYPE html>
<html lang="en">
<head>
	<?php wp_head(); ?>
</head>
	<header class="page-header">
	<h1 class="page-title"><?php single_post_title(); ?></h1>
	<!-- <?php
	// $page_for_posts = absint( get_option( 'page_for_posts' ) );

	// if ( ! Modern_Post::is_paged() && has_excerpt( $page_for_posts ) ) :
		?>
		<div class="archive-description">
			<?php echo get_the_excerpt( $page_for_posts ); ?>
		</div>
		<?php
	// endif;
	?> -->
</header>

</html>