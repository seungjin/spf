<?php
		
class Spf {

	public function load($library,$controller,$action,$argv){
		
		require_once(FRAME_PATH.'/library/'.$library.'/'.$controller.'.php');
		
		try {
			$r = new $controller;
		} catch (Exception $e) {
			echo "e";
		};
		echo $r->$action($argv);
		
	}
	
	
}

?>