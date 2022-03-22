<?php

include_once(realpath(dirname(__FILE__) . "/../../../config/config.php"));

require_once "$classdir/connectDB.class.php";
require_once "$classdir/session.class.php";

/*
 * Create DB Connection
 */
$pearDB = new connectDb();

ini_set("session.gc_maxlifetime", "31536000");

Session::start();


// Verifique se o usuário está logado.
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    exit();
}


