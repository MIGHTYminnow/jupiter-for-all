<?php
/**
 * Plugin Name: Jupiter for All
 * Plugin URI: https://github.com/MIGHTYminnow/jupiter-child-for-all
 * Description: Makes your Jupiter child theme accessible.
 * Version: 1.1.11
 * Author: MIGHTYminnow
 * Author URI: https://mightyminnow.com
 */

if ( ! class_exists( 'Jupiter_All', false ) ) {
	define( 'JUPITER_ALL_PATH', dirname( __FILE__ ) );
	define( 'JUPITER_ALL_URL', plugin_dir_url( __FILE__ ) );
	include_once dirname( __FILE__ ) . '/includes/class-jupiter-all.php';
	global $jupiter_all;
	$jupiter_all = new Jupiter_All();

	require_once( JUPITER_ALL_PATH . '/libraries/BFIGitHubPluginUpdater/BFIGitHubPluginUpdater.php' );
	if ( is_admin() ) {
		new BFIGitHubPluginUpdater( __FILE__, 'MIGHTYminnow', "jupiter-for-all" );
	}
}

