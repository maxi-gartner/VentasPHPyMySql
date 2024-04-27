<?php
require_once(__DIR__ . '/vendor/autoload.php');

use Dotenv\Dotenv;

$dotenv = Dotenv::createImmutable(__DIR__);
$dotenv->load();

define('SERVIDOR', $_ENV['SERVIDOR']);
define('USUARIO', $_ENV['USUARIO']);
define('PASSWORD', $_ENV['PASSWORD']);
define('BD', $_ENV['BD']);

$servidor = "mysql:dbname=" . BD . ";host=" . SERVIDOR;

try {
    $pdo = new PDO(
        $servidor, 
        USUARIO, 
        PASSWORD, 
        array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8")
    );
} catch (PDOException $e) {
    echo "Error al conectar a la base de datos: " . $e->getMessage();
}

date_default_timezone_set('America/Argentina/Buenos_Aires');
$fechaHora = date('Y-m-d H:i:s');

$URL = "https://sistemadeventasapp-b723da2b8729.herokuapp.com/";


?>