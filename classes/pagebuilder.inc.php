<?php
class pagebuilder {
	protected $head;
	protected $toplinks;
	protected $header;
	protected $content;
	protected $footer;
	protected $scripts;

	public function __construct() {
	}

	private function definePage() {
		$url = $_SERVER['REQUEST_URI'];
		$page = pathinfo( parse_url($url, PHP_URL_PATH), PATHINFO_FILENAME);
		define('PAGE', $page);
		return PAGE;
	}

	private function init() {

	}

	public function createPage() {
		ob_start();
		include HEAD;
		include TOPLINKS;
		include HEADER;
		include NAV;
		include DIR_CONTENT . definePage() . ".phtml";
		include FOOTER;
		include SCRIPTS;
		$output = ob_get_clean();
		return $output;
	}








}
?>