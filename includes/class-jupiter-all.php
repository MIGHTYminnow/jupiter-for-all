<?php
defined( 'ABSPATH' ) || exit;

class Jupiter_All {

	public function __construct() {
		$this->helpers();
		$this->hooks();
	}

	private function helpers() {
		include JUPITER_ALL_PATH . '/framework/helpers/global.php';
		include JUPITER_ALL_PATH . '/framework/helpers/wp_head.php';
		include JUPITER_ALL_PATH . '/includes/helpers/template-part-helpers.php';
	}

	private function hooks() {
		add_action( 'wp_enqueue_scripts', array( $this, 'enqueue_assets' ) );
	}

	public function enqueue_assets() {
		wp_enqueue_style( 'j4a', JUPITER_ALL_URL . '/css/j4a.css', array(), null );
		wp_enqueue_script( 'j4a', JUPITER_ALL_URL . '/js/j4a.js', array( 'jquery' ), null, true );
	}

}
