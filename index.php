<?php

require_once realpath(dirname(__FILE__).'/config/config.php');

ini_set('display_errors', 'on');

require_once "$classdir/connectDB.class.php";
require_once "$classdir/session.class.php";


Session::start();

if (isset($_GET["disconnect"])) {
    $session = & $_SESSION["loggedin"];


    // Destrua a sessão.
    Session::stop();
 
    // Redirecionar para a página de login
    //header("location: index.php");
    //exit;
   
}

if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
    header("location: main.php?p=1");
    exit;
}
    
/*
 * Check PHP version
 *
 *  Anms doesn't support PHP < 5.3
 *
 */
if (version_compare(phpversion(), '5.3') < 0) {
    echo "<div class='msg'> PHP version is < 5.3. Please Upgrade PHP</div>";
} else {
    include_once("./include/core/login/login.php");
}
