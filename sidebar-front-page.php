<?php
/**
 * The sidebar containing the front page widget areas.
 * If no active widgets in either sidebar, they will be hidden completely.
 *
 * @package Canape
 */

if ( ! is_active_sidebar( 'sidebar-4' ) && ! is_active_sidebar( 'sidebar-5' ) && ! is_active_sidebar( 'sidebar-6' ) ) {
	return;
}
?>

<div id="secondary" class="widget-area front-widget-area" role="complementary">
	<div class="inner">
		<?php if ( is_active_sidebar( 'sidebar-4' ) ) : ?>
		<div id="widget-area-5" class="widget-area">
			<?php dynamic_sidebar( 'sidebar-4' ); ?>
		</div><!-- widget-area-5 -->
		<?php endif; ?>

		<?php if ( is_active_sidebar( 'sidebar-5' ) ) : ?>
		<div id="widget-area-6" class="widget-area">
			<?php dynamic_sidebar( 'sidebar-5' ); ?>
		</div><!-- widget-area-6 -->
		<?php endif; ?>

		<?php if ( is_active_sidebar( 'sidebar-6' ) ) : ?>
		<div id="widget-area-7" class="widget-area">
			<?php dynamic_sidebar( 'sidebar-6' ); ?>
		</div><!-- #widget-area-7 -->
		<?php endif; ?>
	</div><!-- .inner -->
</div><!-- #secondary -->
