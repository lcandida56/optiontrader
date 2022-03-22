<?php
if(!isset($path)){
	die('Centreon path not set.');
}

function __autoload($className) {

    $fileName = $className;
    $fileName{0} = strtolower($fileName{0});
    $fileNameType1 = $path  . "/www/class/" . $fileName . ".class.php";
    
    if (file_exists($fileNameType1)) {
        require_once $fileNameType1;
    }
}
