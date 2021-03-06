<?php
/**
 * Overrides mk_head_meta_tags()
 * from /framework/helpers/wp_head.php on Jupiter Donut.
 * 
 * @version 1.0.2
 */

/**
 * Enables zoom and scale
 */
if ( ! function_exists( 'mk_head_meta_tags' ) ) {
	function mk_head_meta_tags() {
		echo '<meta charset="' . esc_attr( get_bloginfo( 'charset' ) ) . '">';
		echo '<meta name="viewport" content="width=device-width, initial-scale=1.0">';
		echo '<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">';
		echo '<meta name="format-detection" content="telephone=no">';
	}
	add_action( 'wp_head', 'mk_head_meta_tags', 0 );
}
