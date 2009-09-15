<?php

define("FRAME_PATH",substr($_SERVER['SCRIPT_FILENAME'],0,-17));

date_default_timezone_set('America/Phoenix');

require_once(FRAME_PATH.'/library/spf/spf.class.php');

$fileRootPath = $_SERVER['SCRIPT_FILENAME'];
$this_uri = $_SERVER['PHP_SELF'];
$request_uri = $_SERVER['REQUEST_URI'];
$url = explode('/',substr($request_uri,strlen(substr($this_uri,0,-9))));


/////////////////////////////
$returnCode = 200;
$_POST = array();

if ( ($_SERVER['REQUEST_METHOD'] == 'PUT') || ($_SERVER['REQUEST_METHOD'] == 'POST') ) {
	parse_str(file_get_contents('php://input'),$_POST);
	
	foreach ($_POST as $k => $v) {

	}

}

switch ($returnCode) {
		case 200:
				header('HTTP/1.1 200 OK');
                break;
        case 201:
                header('HTTP/1.1 201 Created');
                break;
        case 400:
                header('HTTP/1.1 400 Bad Request');
                break;
        case 405:
                header('HTTP/1.1 405 Method Now Allowed');
                break;
        case 406:
                header('HTTP/1.1 406 Not Acceptable');
                break;
        default:
                header('HTTP/1.1 406 Not Acceptable');
                break;
}

$spf = new Spf();
$spf->load(array_shift($url),array_shift($url),array_shift($url),$url);

?>
