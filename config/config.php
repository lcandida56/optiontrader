<?php

/* Credenciais do banco de dados. *

define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'test');
*/


/* Credenciais do banco de dados. */

define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'admin');
define('DB_PASSWORD', 'password');
define('DB_NAME', 'db_trade_opcoes');
 
/* Tentativa de conexão com o banco de dados MySQL 
try{

    $pdo = new PDO("mysql:host=" . DB_SERVER . ";dbname=" . DB_NAME, DB_USERNAME, DB_PASSWORD);
    // Defina o modo de erro PDO para exceção
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

} catch(PDOException $e){
    die("ERROR: Não foi possível conectar." . $e->getMessage());
}
/*



/* path para classes */
$classdir='./class';

/* Path */
$path='/var/www/html/traderOption';

/* Enable PHP error */
ini_set('display_errors', 'On');

