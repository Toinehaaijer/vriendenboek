<?php
class pagebuilder {

	public function __construct() {
	}

	private function definePage() {
		$url = $_SERVER['REQUEST_URI'];
		$page = pathinfo( parse_url($url, PHP_URL_PATH), PATHINFO_FILENAME);
		$page = str_replace(".inc", "", $page);
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
		$content = DIR_CONTENT . "/" .  $this->definePage() . ".inc.phtml";
		if(file_exists($content)){
			include $content;
		}
		include FOOTER;
		include SCRIPTS;
		$output = ob_get_clean();
		return $output;
	}








}
?>