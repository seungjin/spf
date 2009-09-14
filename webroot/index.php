<?php

require_once('../library/spf/spf.class.php');

$fileRootPath = $_SERVER['SCRIPT_FILENAME'];
$this_uri = $_SERVER['PHP_SELF'];
$request_uri = $_SERVER['REQUEST_URI'];
$url = explode('/',substr($request_uri,strlen(substr($this_uri,0,-9))));


$spf = new Spf();

/*
print("module=>" . array_shift($url) . "<br/>");
print("run->" . array_shift($url) . "<br/>");
print_r($url);
*/

$spf->we("sample","sample", $url);





?>
