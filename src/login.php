<?php
INCLUDE ('../APP/config.php');
INCLUDE ('../APP/alerts.php');
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
  header('Location:' .$URL. 'index.php');
}else{
  
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Log in</title>
  <script src='//production-assets.codepen.io/assets/editor/live/console_runner-079c09a0e3b9ff743e39ee2d5637b9216b3545af0de366d4b9aad9dc87e26bfd.js'></script><script src='//production-assets.codepen.io/assets/editor/live/events_runner-73716630c22bbc8cff4bd0f07b135f00a0bdc5d14629260c3ec49e5606f98fdd.js'></script><script src='//production-assets.codepen.io/assets/editor/live/css_live_reload_init-2c0dc5167d60a5af3ee189d570b1835129687ea2a61bee3513dee3a50c115a77.js'></script><meta charset='UTF-8'><meta name="robots" content="noindex"><link rel="shortcut icon" type="image/x-icon" href="//production-assets.codepen.io/assets/favicon/favicon-8ea04875e70c4b0bb41da869e81236e54394d63638a1ef12fa558a4a835f1164.ico" /><link rel="mask-icon" type="" href="//production-assets.codepen.io/assets/favicon/logo-pin-f2d2b6d2c61838f7e76325261b7195c27224080bc099486ddd6dccb469b8e8e6.svg" color="#111" /><link rel="canonical" href="https://codepen.io/frytyler/pen/EGdtg" />
  <link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css'>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/prefixfree/1.0.7/prefixfree.min.js'></script>
  <link rel="stylesheet" href="../public/css/login.css">

</head>
<body>
  <div class="login">
    <h1>Login</h1>
      <form action="../app/controllers/login/ingreso.php" method="post">
        <input type="text" name="email" placeholder="Email" required="required" />
          <input type="password" name="password_user" placeholder="Contraseña" required="required" />
          <button type="submit" class="btn btn-primary btn-block btn-large">Iniciar sesión</button>
      </form>
  <!--     <p class="mb-1">
        <a class="text-white text-decoration-none" href="forgot-password.html">Olvidé mi contraseña</a>
      </p> -->
      <p class="mb-0">
        <a style="color: white; text-decoration: none;" onmouseover="this.style.color='blue'" onmouseout="this.style.color='white'" href="./register.php">Registrarme</a>
      </p>
  </div>
  </body>
<script src='//production-assets.codepen.io/assets/common/stopExecutionOnTimeout-b2a7b3fe212eaa732349046d8416e00a9dec26eb7fd347590fbced3ab38af52e.js'></script>
<script >
</script>
</body></html>