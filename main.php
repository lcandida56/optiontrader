<?php

// Set logging options
if (defined("E_DEPRECATED")) {
    ini_set("error_reporting", E_ALL & ~E_NOTICE & ~E_STRICT & ~E_DEPRECATED);
} else {
    ini_set("error_reporting", E_ALL & ~E_NOTICE & ~E_STRICT);
}

/*
 * Purge Values
 */
if (function_exists('filter_var')){
    foreach ($_GET as $key => $value){
        if (!is_array($value)){
            $_GET[$key] = filter_var($value, FILTER_SANITIZE_SPECIAL_CHARS);
        }
    }
}

$inputArguments = array(
    'p' => FILTER_SANITIZE_NUMBER_INT,
    'o' => FILTER_SANITIZE_STRING
    /*
    'min' => FILTER_SANITIZE_STRING,
    'type' => FILTER_SANITIZE_STRING,
    'search' => FILTER_SANITIZE_STRING,
    'limit' => FILTER_SANITIZE_STRING,
    'num' => FILTER_SANITIZE_NUMBER_INT
    */
);
$inputGet = filter_input_array(
    INPUT_GET,
    $inputArguments
);
$inputPost = filter_input_array(
    INPUT_POST,
    $inputArguments
);

$inputs = array();
foreach ($inputArguments as $argumentName => $argumentValue) {
    if (!is_null($inputGet[$argumentName]) && trim($inputGet[$argumentName]) != '') {
        $inputs[$argumentName] = $inputGet[$argumentName];
    } else {
        $inputs[$argumentName] = $inputPost[$argumentName];
    }
}

$p = $inputs["p"];
$o = $inputs["o"];
/*$min = $inputs["min"];
$type = $inputs["type"];
$search = $inputs["search"];
$limit = $inputs["limit"];
$num = $inputs["num"];*/

/*
 * Include all func
 */
include_once("./include/common/common-Func.php");
include_once("./include/core/header/header.php");
include_once("./class/view.class.php");


require_once ("./autoloader.php");

/*
 * LCA Init Common Var
 */


/*
 *  Header HTML
 */
include_once "./include/core/header/htmlHeader.php";

/*
 * Display Menu
 */
include_once "./include/core/menu/menu.php";

$url = '';

switch ($p) {
    case 2:
        $url = './include/formulaMagica/formulaMagica.php';
        break;
    
    default:
        // code...
        break;
}


if (isset($url) && $url) {
    include_once $url;
} else {
    include_once './include/dashboard/dashboard.php';
}


/*
 * Include Footer 
 */
include_once "./include/core/footer/footer.php";