<?php

define('SERVIDOR', 'localhost');
define('USUARIO', 'root');
define('PASSWORD', '');
define('BD', 'sistemadeventas');

$servidor = "mysql:dbname" . BD . ";host=" . SERVIDOR;

try {
    $pdo = new PDO(
        $servidor, 
        $username = USUARIO, 
        $password = PASSWORD, 
        array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8")
    );
    echo "Conexión exitosa";
} catch (PDOException $e) {
    echo "Error al conectar a la base de datos: " . $e->getMessage();
}