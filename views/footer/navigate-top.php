<?php
/**
 * Overrides /views/footer/navigate-top.php on Jupiter.
 * 
 * @version 6.12.0
 */

/**
 * template part for footer navigate to top module. views/footer
 *
 * @author 		Artbees
 * @package 	jupiter/views
 * @version     5.0.0
 */

?>

<nav aria-label="<?php _e( 'Go to:', 'j4a' ); ?>">
	<a href="#top-of-page" class="mk-go-top  js-smooth-scroll js-bottom-corner-btn js-bottom-corner-btn--back">
		<?php Mk_SVG_Icons::get_svg_icon_by_class_name(true, 'mk-icon-chevron-up', 16); ?>
		<span class="screen-reader-text"><?php _e( 'Go to top of page', 'mk_framework' ); ?></span>
	</a>
</nav>
