<?php
defined( 'ABSPATH' ) || exit;

class Jupiter_All {

	public function __construct() {
		$this->helpers();
	}

	public function helpers() {
		include JUPITER_ALL_PATH . '/framework/helpers/global.php';
		include JUPITER_ALL_PATH . '/includes/helpers/template-part-helpers.php';
	}

}
