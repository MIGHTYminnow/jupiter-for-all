<?php
/**
 * Overrides /views/header/global/nav-side-search.php on Jupiter.
 * 
 * @version 6.4.1
 */

/**
 * template part for Search form located beside main navigation. views/header/global
 *
 * @author 		Artbees
 * @package 	jupiter/views
 * @version     5.0.0
 */

global $mk_options;

$icon_height = ($view_params['header_style'] != 2) ? 'add-header-height' : '';

if ($mk_options['header_search_location'] == 'beside_nav') { ?>

<div class="main-nav-side-search">	
	<?php $screen_reader_text = '<span class="screen-reader-text">Open searchbox</span>'; ?>
	<a class="mk-search-trigger <?php echo $icon_height; ?> mk-toggle-trigger" href="#"><i class="mk-svg-icon-wrapper"><?php Mk_SVG_Icons::get_svg_icon_by_class_name(true, 'mk-icon-search', 16); ?></i> <?php echo $screen_reader_text; ?></a>

	<div id="mk-nav-search-wrapper" class="mk-box-to-trigger">
		<form method="get" id="mk-header-navside-searchform" action="<?php echo home_url('/'); ?>">
			<input aria-label="Search:" type="text" name="s" id="mk-ajax-search-input" autocomplete="off" />
			<?php wp_nonce_field('mk-ajax-search-form', 'security'); ?>
			<i class="nav-side-search-icon">
				<button type="submit">
					<?php Mk_SVG_Icons::get_svg_icon_by_class_name(true,'mk-moon-search-3',16); ?>
					<span class="screen-reader-text"><?php _e( 'Search', 'mk_framework-child4a' ); ?></span>
				</button>
			</i>
		</form>
		<ul id="mk-nav-search-result" class="ui-autocomplete"></ul>
	</div>

</div>

<?php } elseif ($mk_options['header_search_location'] == 'fullscreen_search') { ?>

	<div class="main-nav-side-search">
		<a class="mk-search-trigger <?php echo $icon_height; ?> mk-fullscreen-trigger" href="#">
			<i class="mk-svg-icon-wrapper"><?php Mk_SVG_Icons::get_svg_icon_by_class_name(true, 'mk-icon-search', 16); ?></i>
			<span class="screen-reader-text"><?php _e( 'Open Search', 'mk_framework' ); ?></span>
		</a>
	</div>

<?php
}
