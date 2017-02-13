<?php
if (!empty($_SERVER['HTTPS']) && ('on' == $_SERVER['HTTPS'])) {
	$uri = 'https://';
} else {
	$uri = 'http://';
}

define("ROOT", $uri.'127.0.0.1/vriendenboek');
define("DIR_BASE", './');
define("DIR_INCLUDES",  'includes');
define("DIR_SKIN",  'skin');
define("DIR_PAGE",  'page');
define("DIR_CONTENT", DIR_PAGE . '/content');
define("DIR_BOOTSTRAP", DIR_SKIN . '/bootstrap');
define("DIR_CSS", DIR_SKIN . '/css');
define("DIR_JS", DIR_SKIN . '/js');
define("HEAD", DIR_PAGE . '/head.phtml');
define("HEADER", DIR_PAGE . '/header.phtml');
define("TOPLINKS", DIR_PAGE . '/toplinks.phtml');
define("NAV", DIR_PAGE . '/nav.phtml');
define("FOOTER", DIR_PAGE . '/footer.phtml');
define("SCRIPTS", DIR_PAGE . '/scripts.phtml');

?>