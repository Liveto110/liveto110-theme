<?php
/**
 * The Sidebar containing the main widget areas.
 *
 * @package LiveTo110 Theme
 */
?>

	<div id="secondary" class="widget-area" role="complementary">

		<?php //if ( is_active_sidebar( 'sidebar-right' ) ) : ?>
			<?php dynamic_sidebar( 'sidebar-right' ); ?>
		<?php //endif; // end sidebar widget area ?>
		
	</div><!-- #secondary -->
