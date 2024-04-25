
<?php 

include ('../../config.php');

session_start();
if(isset($_SESSION['sesion_email'])) {
    session_unset();
    session_destroy();
    header('Location: ../../../src/login.php');
}else{
    echo "no existe sesion";
}