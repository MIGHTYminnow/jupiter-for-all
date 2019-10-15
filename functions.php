<?php

/**
 * Implement "Skip to" links.
 */
if ( ! function_exists( 'jc_skip_to_links' ) ) {
	add_action( 'mk_theme_after_body_opening', 'jc_skip_to_links' );
	function jc_skip_to_links() {
		get_template_part( 'parts/header/global/skip-to-links' );
	}
}
