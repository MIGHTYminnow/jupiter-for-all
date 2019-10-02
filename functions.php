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
 * Add role="group" and aria-label to checkbox fields.
 */
if ( ! function_exists( 'theme_group_same_name_checkboxes' ) ) {
	add_filter( 'gform_field_content', 'theme_group_same_name_checkboxes', 10, 5 );
	function theme_group_same_name_checkboxes( $content, $field, $value, $lead_id, $form_id ) {
		if ( 'checkbox' == $field->type ) {
			$content = str_replace(
				"ginput_container_checkbox'",
				"ginput_container_checkbox' role='group' aria-label='" . esc_attr( $field->label ) . "'",
				$content
			);
		}
		return $content;
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
