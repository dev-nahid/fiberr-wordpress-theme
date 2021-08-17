<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Fiberr
 */

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}
?>

<?php if ( is_active_sidebar( 'sidebar-1' ) ) : ?>
	<div class="theme-center-right">
		<aside id="secondary" class="widget-area">
			<?php dynamic_sidebar( 'sidebar-1' ); ?>
		</aside><!-- #secondary -->
	</div>
<?php endif; ?>
