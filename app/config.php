<?php

define('SERVIDOR', 'localhost');
define('USUARIO', 'root');
define('PASSWORD', '');
define('BD', 'sistemadeventas');

$servidor = "mysql:dbname=" . BD . ";host=" . SERVIDOR;

try {
    $pdo = new PDO(
        $servidor, 
        $username = USUARIO, 
        $password = PASSWORD, 
        array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8")
    );
} catch (PDOException $e) {
    echo "Error al conectar a la base de datos: " . $e->getMessage();
}

$URL = "http://localhost/VentasPHPyMySql/";

date_default_timezone_set('America/Argentina/Buenos_Aires');
$fechaHora = date('Y-m-d H:i:s');