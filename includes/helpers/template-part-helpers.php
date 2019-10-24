<?php
/**
 * Overrides mk_get_template_part()
 * from /includes/helpers/template-part-helpers.php on Jupiter Donut.
 * 
 * @version 1.0.2
 */

/**
 * Allows to override Jupiter template parts from Jupiter for All.
 */
if ( ! function_exists( 'mk_get_template_part' ) ) {
	function mk_get_template_part( $file, $view_params = array() ) {
		global $post;
		$view_params = wp_parse_args( $view_params );

		if ( file_exists( get_stylesheet_directory() . '/' . $file . '.php' ) ) {
			$file_path = ( get_stylesheet_directory() . '/' . $file . '.php' );
		} elseif ( file_exists( JUPITER_ALL_PATH . '/' . $file . '.php' ) ) {
			$file_path = realpath( JUPITER_ALL_PATH . '/' . $file . '.php' );
		} elseif ( file_exists( JUPITER_DONUT_INCLUDES_DIR . '/' . $file . '.php' ) ) {
			$file_path = realpath( JUPITER_DONUT_INCLUDES_DIR . '/' . $file . '.php' );
		} elseif ( file_exists( get_template_directory() . '/' . $file . '.php' ) ) {
			$file_path = realpath( get_template_directory() . '/' . $file . '.php' );
		}

		ob_start();
		require( $file_path );
		$output = ob_get_clean();
		echo $output;
	}
}
