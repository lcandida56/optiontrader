<?php

require_once realpath(dirname(__FILE__).'/../config/config.php');


/**
 * 
 */
class connectDb{
	
	
    private static $instance = array();
    protected $db_type;
    protected $db_port;
    protected $db;
    protected $dsn;
    protected $options;
    protected $path;



}

/* Tentativa de conexão com o banco de dados MySQL */
try{
    $pdo = new PDO("mysql:host=" . DB_SERVER . ";dbname=" . DB_NAME, DB_USERNAME, DB_PASSWORD);
    // Defina o modo de erro PDO para exceção
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e){
    die("ERROR: Não foi possível conectar." . $e->getMessage());
}