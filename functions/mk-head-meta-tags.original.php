<?php
/**
 * Output header meta tags
 */
if ( ! function_exists( 'mk_head_meta_tags' ) ) {
	function mk_head_meta_tags() {
		echo '<meta charset="' . esc_attr( get_bloginfo( 'charset' ) ) . '" />';
		echo '<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=0" />';
		echo '<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />';
		echo '<meta name="format-detection" content="telephone=no">';
	}
	add_action( 'wp_head', 'mk_head_meta_tags', 0 );
}
