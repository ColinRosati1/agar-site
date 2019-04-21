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

	<div class="entry-content">
		<?php the_content(); ?>
		<div id="content-body">
			<div id="content-title">AGAR-AGAR</div>
		</div>

		 <div id="cursor">
		 	<img alt="Cursor Hand" src="asset/rotating-cursor.svg">
		 </div>

		 <script texttype="javascript">
					 	
			var rotatingCursor = (function() {

			  /* Local Variables */
			  const INTERVAL_POSITION = 5;
			  const INTERVAL_ROTATION = 100;
			  let lastCursorPos = {x: -999, y: -999};
			  let currentCursorPos = {x: -999, y: -999};
			  let lastCursorAngle = 0, cursorAngle = 0;
			  let cursorEl, cursorImageEl;


			  /* Local Functions */

			  // NOTE: I am transform two different elements here because so I can only animate the rotation with 'transition-property: transform'.
			  function setCurrentCursorProps() {
			    // Apply translation (set to actual cursor position)
			    cursorEl.style.transform = `translate(${currentCursorPos.x}px, ${currentCursorPos.y}px)`;

			    // Ensure correct rotation transition direction
			    while (Math.abs(lastCursorAngle - cursorAngle) > 180) {
			      if (cursorAngle > lastCursorAngle) {
			        cursorAngle -= 360;
			      } else if (cursorAngle < lastCursorAngle) {
			        cursorAngle += 360;
			      }
			    }
			    // Apply rotation
			    cursorImageEl.style.transform = `rotate(${cursorAngle - 90}deg)`;
			  }

			  function updateCursor() {
			    window.addEventListener('mousemove', event => {
			      currentCursorPos = {x: event.clientX, y: event.clientY};
			    });

			    // Interval for updating cursor-position
			    setInterval(setCurrentCursorProps, INTERVAL_POSITION);

			    // Interval for updating cursor-rotation
			    setInterval(() => {
			      const delt = {
			        x: lastCursorPos.x - currentCursorPos.x,
			        y: lastCursorPos.y - currentCursorPos.y
			      }
			      if (Math.abs(delt.x) < 3 && Math.abs(delt.y) < 3) return;
			      cursorAngle = (Math.atan2(delt.y, delt.x) * 180 / Math.PI);

			      setCurrentCursorProps();

			      lastCursorPos = currentCursorPos;
			      lastCursorAngle = cursorAngle;
			    }, INTERVAL_ROTATION);
			  }


			  /* Public Functions */

			  return {

			    'initialize' : () => {
			      cursorEl = document.querySelector('#cursor');
			      cursorImageEl = document.querySelector('#cursor > img');
			      updateCursor();
			    }

			  };

			})();


			document.addEventListener('DOMContentLoaded', rotatingCursor.initialize);
		 </script>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->

