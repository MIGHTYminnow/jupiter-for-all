<?php
/**
 * Overrides /views/header/global/full-screen-search.php on Jupiter.
 * 
 * @version 6.12.0
 */

/**
 * template part for full screen search form. views/header/global
 *
 * @author 		Artbees
 * @package 	jupiter/views
 * @version     5.0.0
 */

?>

<div class="mk-fullscreen-search-overlay">
	<a href="#" class="mk-fullscreen-close">
		<?php Mk_SVG_Icons::get_svg_icon_by_class_name(true, 'mk-moon-close-2'); ?>
		<span class="screen-reader-text"><?php _e( 'Close Search', 'mk_framework' ); ?></span>
	</a>
	<div class="mk-fullscreen-search-wrapper">
		<p><?php _e('Start typing and press Enter to search', 'mk_framework'); ?></p>
		<form method="get" id="mk-fullscreen-searchform" action="<?php echo home_url('/'); ?>">
			<input type="text" value="" name="s" id="mk-fullscreen-search-input" aria-label="<?php _e( 'Search', 'mk_framework' ); ?>" />
			<i class="fullscreen-search-icon"><?php Mk_SVG_Icons::get_svg_icon_by_class_name(true, 'mk-icon-search', 25); ?></i>
		</form>
	</div>
</div>
