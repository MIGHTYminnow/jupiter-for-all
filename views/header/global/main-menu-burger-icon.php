<?php
/**
 * Overrides /views/header/global/main-menu-burger-icon.php on Jupiter.
 * 
 * @version 6.4.1
 */

global $mk_options;

if ($view_params['header_style'] == 3) return false;

if(isset($mk_options['hide_header_nav']) && $mk_options['hide_header_nav'] == 'false') return false;

?>

<button class="mk-nav-responsive-link" aria-expanded="false">
    <div class="mk-css-icon-menu">
        <div class="mk-css-icon-menu-line-1"></div>
        <div class="mk-css-icon-menu-line-2"></div>
        <div class="mk-css-icon-menu-line-3"></div>
		<span class="screen-reader-text"><?php _e( 'Main navigation', 'jupiter-child' ); ?></span>
    </div>
</button>