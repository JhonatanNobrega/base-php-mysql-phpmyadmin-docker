<?php

require __DIR__. "/../vendor/autoload.php";
 
$dotenv = Dotenv\Dotenv::createUnsafeImmutable(__DIR__."/../");
$dotenv->load();

define('HOST', getenv('PDO_HOST'));
define('USER', getenv('PDO_USER'));
define('PASS', getenv('PDO_PASS'));
define('DBNAME', getenv('PDO_DBNAME'));

try {
    $db = new pdo('mysql:host=' . HOST . ';dbname=' . DBNAME, USER, PASS);
} catch (PDOException $e) {
    echo "Erro: Conexão com banco de dados não foi realizada com sucesso. Erro gerado " . $e->getMessage();
}