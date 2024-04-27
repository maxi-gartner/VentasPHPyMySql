<?php
INCLUDE ('./app/config.php');
INCLUDE ('./layout/sesion.php');
INCLUDE ('./layout/header.php');
INCLUDE ('./layout/nav.php');
INCLUDE ('./layout/sidebar.php');
INCLUDE ('./app/alerts.php');
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

session_start();

if(isset($_SESSION['sesion_email'])) {
    $email_sesion = $_SESSION['sesion_email'];

    // Verificar si la variable de sesión está definida
    if(!empty($email_sesion)) {
        // Consulta preparada para seguridad contra inyección SQL
        $sql = "SELECT * FROM tb_usuarios WHERE email = :email";
        $query = $pdo->prepare($sql);
        $query->bindParam(':email', $email_sesion);
        $query->execute();

        // Manejo de errores de base de datos
        if($query) {
            $usuarios = $query->fetchAll(PDO::FETCH_ASSOC);

            if($usuarios){
                foreach ($usuarios as $usuario) {
                    $nombre_tabla = $usuario['nombres'];
                    $apellido_tabla = $usuario['apellido'];
                }
            } else {
                $nombre_tabla = "Sin Nombre";
            }
        } else {
            // Manejo de errores de base de datos
            echo "Error en la consulta SQL";
        }
    } else {
        // Manejo de sesión no definida
        echo "La variable de sesión está vacía";
        header('Location:' . $URL . 'src/login.php');
        exit(); // Terminar la ejecución del script después de redirigir
    }
} else {
    // Manejo de sesión no existente
    echo "No existe sesión";
    header('Location:' . $URL . 'src/login.php');
    exit(); // Terminar la ejecución del script después de redirigir
}

?>
  <link rel="stylesheet" href="./public/css/index.css">

  <!-- Contenido (titulo) -->
  <div class="content-wrapper">
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
        </div>
      </div>
    </div>
    <!-- Main content -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
<div class="container">
    <div class="d-flex flex-wrap justify-content-evenly">
        <a href="#" class="col-md-4 col-xl-3">
            <div class="card bg-c-teal order-card" style="min-height: 180px; width: 100%;">
                <div class="card-block">
                  <div class="d-flex justify-content-between">
                    <i class="fa fa-cart-plus"></i>
                    <h6 class="text-lg">Realizar venta</h6>
                  </div>
                  <div class="mt-2">
                    <p class="m-b-0">Ingreso Bruto<span class="f-right">****</span></p>
                    <p class="m-b-0">Total de Venta<span class="f-right">****</span></p>
                  </div>
                </div>
            </div>
        </a>
        <a href="#" class="col-md-4 col-xl-3">
            <div class="card bg-c-lime order-card" style="min-height: 180px; width: 100%;">
                <div class="card-block">
                  <div class="d-flex justify-content-between">
                    <i class="bi bi-shop-window"></i>
                    <h6 class="text-lg">Inventario</h6>
                  </div>
                  <div class="mt-2">
                    <p class="m-b-0">Ingreso Bruto<span class="f-right">****</span></p>
                    <p class="m-b-0">Total de Venta<span class="f-right">****</span></p>
                  </div>
                </div>
              </div>
          </a>
          <a href="#" class="col-md-4 col-xl-3">
            <div class="card bg-c-indigo order-card" style="min-height: 180px; width: 100%;">
                <div class="card-block">
                  <div class="d-flex justify-content-between">
                    <i class="bi bi-bookmark-check-fill"></i>
                    <h6 class="text-lg">Órds. preparadas</h6>
                  </div>
                  <div class="mt-2">
                    <p class="m-b-0">Ingreso Bruto<span class="f-right">****</span></p>
                    <p class="m-b-0">Total de Venta<span class="f-right">****</span></p>
                  </div>
                </div>
              </div>
          </a>
          <a href="#" class="col-md-4 col-xl-3">
            <div class="card bg-c-cyan order-card" style="min-height: 180px; width: 100%;">
                <div class="card-block">
                  <div class="d-flex justify-content-between">
                    <i class="bi bi-bookmark-check"></i>
                    <h6 class="text-lg">Órds. Pendientes</h6>
                  </div>
                  <div class="mt-2">
                    <p class="m-b-0">Ingreso Bruto<span class="f-right">****</span></p>
                    <p class="m-b-0">Total de Venta<span class="f-right">****</span></p>
                  </div>
                </div>
              </div>
          </a>
          <a href="#" class="col-md-4 col-xl-3">
            <div class="card bg-c-magenta order-card" style="min-height: 180px; width: 100%;">
                <div class="card-block">
                  <div class="d-flex justify-content-between">
                    <i class="bi bi-people-fill"></i>
                    <h6 class="text-lg">Mis Clientes</h6>
                  </div>
                  <div class="mt-2">
                    <p class="m-b-0">Ingreso Bruto<span class="f-right">****</span></p>
                    <p class="m-b-0">Total de Venta<span class="f-right">****</span></p>
                  </div>
                </div>
              </div>
          </a>
          <a href="#" class="col-md-4 col-xl-3">
            <div class="card bg-c-amber order-card" style="min-height: 180px; width: 100%;">
                <div class="card-block">
                  <div class="d-flex justify-content-between">
                    <i class="bi bi-building"></i>
                    <h6 class="text-lg">Cuenta Corriente</h6>
                  </div>
                  <div class="mt-2">
                    <p class="m-b-0">Ingreso Bruto<span class="f-right">****</span></p>
                    <p class="m-b-0">Total de Venta<span class="f-right">****</span></p>
                  </div>
                </div>
              </div>
          </a>
          <a href="#" class="col-md-4 col-xl-3">
            <div class="card bg-c-deep-orange order-card" style="min-height: 180px; width: 100%;">
                <div class="card-block">
                  <div class="d-flex justify-content-between">
                    <i class="fas fa-box"></i>
                    <h6 class="text-lg">Caja</h6>
                  </div>
                  <div class="mt-2">
                    <p class="m-b-0">Ingreso Bruto<span class="f-right">****</span></p>
                    <p class="m-b-0">Total de Venta<span class="f-right">****</span></p>
                  </div>
                </div>
              </div>
          </a>
          <a href="#" class="col-md-4 col-xl-3">
            <div class="card bg-c-purple order-card" style="min-height: 180px; width: 100%;">
                <div class="card-block">
                  <div class="d-flex justify-content-between">
                    <i class="bi bi-bar-chart"></i>
                    <h6 class="text-lg">Graficas</h6>
                  </div>
                  <div class="mt-2">
                    <p class="m-b-0">Ingreso Bruto<span class="f-right">****</span></p>
                    <p class="m-b-0">Total de Venta<span class="f-right">****</span></p>
                  </div>
                </div>
              </div>
          </a>
          <a href="#" class="col-md-4 col-xl-3">
            <div class="card bg-c-orange order-card" style="min-height: 180px; width: 100%;">
                <div class="card-block">
                  <div class="d-flex justify-content-between">
                    <i class="bi bi-file-earmark-text"></i>
                    <h6 class="text-lg">Reportes</h6>
                  </div>
                  <div class="mt-2">
                    <p class="m-b-0">Ingreso Bruto<span class="f-right">****</span></p>
                    <p class="m-b-0">Total de Venta<span class="f-right">****</span></p>
                  </div>
                </div>
              </div>
          </a>
          <a href="#" class="col-md-4 col-xl-3">
            <div class="card bg-c-red order-card" style="min-height: 180px; width: 100%;">
                <div class="card-block">
                  <div class="d-flex justify-content-between">
                    <i class="fas fa-barcode"></i>
                    <h6 class="text-lg">Codigos</h6>
                  </div>
                  <div class="mt-2">
                    <p class="m-b-0">Ingreso Bruto<span class="f-right">****</span></p>
                    <p class="m-b-0">Total de Venta<span class="f-right">****</span></p>
                  </div>
                </div>
              </div>
          </a>
          <a href="#" class="col-md-4 col-xl-3">
            <div class="card bg-c-brown order-card" style="min-height: 180px; width: 100%;">
                <div class="card-block">
                  <div class="d-flex justify-content-between">
                    <i class="fas fa-exchange-alt"></i>
                    <h6 class="text-lg">Movimientos</h6>
                  </div>
                  <div class="mt-2">
                    <p class="m-b-0">Ingreso Bruto<span class="f-right">****</span></p>
                    <p class="m-b-0">Total de Venta<span class="f-right">****</span></p>
                  </div>
                </div>
              </div>
          </a>
          <a href="#" class="col-md-4 col-xl-3">
            <div class="card bg-c-olive order-card" style="min-height: 180px; width: 100%;">
                <div class="card-block">
                  <div class="d-flex justify-content-between">
                    <i class="fas fa-cog"></i>
                    <h6 class="text-lg">Ajustes</h6>
                  </div>
                  <div class="mt-2">
                    <p class="m-b-0">Ingreso Bruto<span class="f-right">****</span></p>
                    <p class="m-b-0">Total de Venta<span class="f-right">****</span></p>
                  </div>
                </div>
              </div>
          </a>
    </div>
  </div>
  </div>

<?php 

INCLUDE ('APP/alerts.php');
INCLUDE('layout/footer.php'); ?>