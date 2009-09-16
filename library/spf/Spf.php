<?php
		
class Spf {

	public $LIBRARY;
	public $CONTROLLER;
	public $ACTION;
	public $REQUEST = array();
	public $URL = array();

	public function load() {
		
		require_once(FRAME_PATH.'/library/'.$this->LIBRARY.'/'.$this->CONTROLLER.'.php');
		
		try {
			$r = new $this->CONTROLLER;
		} catch (Exception $e) {
			echo "e";
		};
		$qwe = $this->ACTION;
		echo $r->$qwe();
		
	}

}

?>