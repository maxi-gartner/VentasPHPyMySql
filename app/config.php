<?php
$RUTA = __DIR__ . "/../"; // Obtener la ruta absoluta del directorio padre
require_once($RUTA . 'vendor/autoload.php'); // Incluir el archivo usando la ruta absoluta

use Dotenv\Dotenv;

$dotenv = Dotenv::createImmutable($RUTA); // Usar la misma ruta para cargar el archivo .env
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

$URL = "http://localhost/VentasPHPyMySql/";

date_default_timezone_set('America/Argentina/Buenos_Aires');
$fechaHora = date('Y-m-d H:i:s');
?>
