<?php
if (!empty($_SERVER['HTTPS']) && ('on' == $_SERVER['HTTPS'])) {
	$uri = 'https://';
} else {
	$uri = 'http://';
}

define("ROOT", $uri.'127.0.0.1/vriendenboek');
define("DIR_BASE", '');
define("DIR_INCLUDES",  DIR_BASE .  '/includes');
define("DIR_CLASSES", DIR_BASE .  '/classes');
define("DIR_CONFIG", DIR_BASE .  '/config');
define("DIR_SKIN",  DIR_BASE .  '/skin');
define("DIR_PAGE",  DIR_BASE .  '/page');
define("DIR_MATERIALIZE", DIR_SKIN . '/materialize');
define("DIR_CSS", DIR_SKIN . '/css');
define("DIR_JS", DIR_SKIN . '/js');
define("HEAD", DIR_PAGE . '/head.phtml');
define("HEADER", DIR_PAGE . '/header.phtml');
define("FOOTER", DIR_PAGE . '/footer.phtml');
define("TOPLINKS", DIR_PAGE . '/toplinks.phtml');
define("SCRIPTS", DIR_PAGE . '/scripts.phtml');
?>