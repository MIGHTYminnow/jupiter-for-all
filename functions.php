<?php
/**
 * Overwrite Jupiter functions (create them before they are created by parent theme).
 */
include_once 'functions/mk-build-main-wrapper.php';
include_once 'functions/mk-head-meta-tags.php';

/**
 * Enqueue child theme styles and scripts.
 */
if ( ! function_exists( 'jc_enqueue_assets' ) ) {
	add_action( 'wp_enqueue_scripts', 'jc_enqueue_assets' );
	function jc_enqueue_assets() {
		wp_enqueue_style( 'jc', get_stylesheet_uri(), array(), null );
		wp_enqueue_script( 'jc', get_stylesheet_directory_uri() . '/main.js', array( 'jquery' ), null, true );
	}
}

/**
 * Implement "Skip to" links.
 */
if ( ! function_exists( 'jc_skip_to_links' ) ) {
	add_action( 'mk_theme_after_body_opening', 'jc_skip_to_links' );
	function jc_skip_to_links() {
		get_template_part( 'parts/header/global/skip-to-links' );
	}
}
