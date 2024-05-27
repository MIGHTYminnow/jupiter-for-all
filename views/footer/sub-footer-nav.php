<?php

/**
 * template part for sub-footer navigation. views/footer
 *
 * @author 		Artbees
 * @package 	jupiter/views
 * @version     5.0.0
 * 
 * Jupiter Version: 6.12.0
 */


$footer_menu = wp_nav_menu(array(
    'theme_location' => 'footer-menu',
    'container' => 'nav',
    'container_id' => 'mk-footer-navigation',
    'container_class' => 'footer_menu',
    'fallback_cb' => '',
	'echo' => false,
));

echo str_replace( '<nav', '<nav aria-label="Footer Navigation"', $footer_menu );
