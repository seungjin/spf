<?php

require_once(FRAME_PATH.'library/spf/aa.class.php');

class sample extends aa {

	public function __construct() {
		print("23");
		//print($p);
	}

	public function a(){
		print("123123");
		print($this->p);
	}
	
}


?>
