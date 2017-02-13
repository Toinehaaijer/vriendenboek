<?php

class head {

	public function getHtml() {
		ob_start();
		include HEAD;
		$output = ob_get_clean();
	}




}


?>