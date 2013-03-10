<?php
/**
 * The Header sidebar
 *
 * @package Toolbox
 * @since Toolbox 0.1
 */
?>
		<div id="secondary" role="complementary">
			<?php do_action( 'before_sidebar' ); ?>
				<?php if ( is_active_sidebar( 'header-sidebar-1' ) ) : ?>
		<div id="tertiary" role="complementary">
			<?php dynamic_sidebar( 'header-sidebar-1' ); ?>
			<?php endif; // end sidebar widget area ?>
			</div><!-- #secondary .widget-area -->