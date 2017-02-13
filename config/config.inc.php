<?php
// if (!empty($_SERVER['HTTPS']) && ('on' == $_SERVER['HTTPS'])) {
// 	$uri = 'https://';
// } else {
// 	$uri = 'http://';
// }

define("ROOT", '');
define("DIR_BASE", './');
define("DIR_INCLUDES", ROOT . 'includes/');
define("DIR_CLASSES", ROOT . 'classes/');
define("DIR_SKIN", ROOT . 'skin/');
define("DIR_PAGE", ROOT . 'page/');
define("DIR_CONTENT", DIR_PAGE . '/content');
define("DIR_MATERIALIZE", DIR_SKIN . '/materialize');
define("DIR_CSS", DIR_SKIN . '/css');
define("DIR_JS", DIR_SKIN . '/js');
define("HEAD", DIR_PAGE . '/head.inc.phtml');
define("HEADER", DIR_PAGE . '/header.inc.phtml');
define("TOPLINKS", DIR_PAGE . '/toplinks.inc.phtml');
define("NAV", DIR_PAGE . '/nav.inc.phtml');
define("FOOTER", DIR_PAGE . '/footer.inc.phtml');
define("SCRIPTS", DIR_PAGE . '/scripts.inc.phtml');

?>