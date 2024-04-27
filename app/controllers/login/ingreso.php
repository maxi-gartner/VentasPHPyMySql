<?php
include('../../config.php');

// Validar y limpiar la entrada
$email = isset($_POST['email']) ? htmlspecialchars($_POST['email']) : '';
$password_user = isset($_POST['password_user']) ? $_POST['password_user'] : '';

$sql = "SELECT * FROM tb_usuarios WHERE email = :email";
$query = $pdo->prepare($sql);
$query->bindParam(':email', $email);
$query->execute();
$usuario = $query->fetch(PDO::FETCH_ASSOC);

if($usuario && password_verify($password_user, $usuario['password_user'])){
    session_start();
    $_SESSION['sesion_email'] = $usuario['email'];
    $_SESSION['login_success'] = "Bienvenido " . ucfirst(strtolower($usuario['nombres'])) . " " . ucfirst(strtolower($usuario['apellido']));
    header('Location: ../../../index.php');
    exit(); // Terminar la ejecución del script después de redirigir
} else {
    session_start();
    $_SESSION['mensaje_error'] = "Usuario o contraseña incorrectos";
    //header('Location: ' . $URL . 'src/login.php');
    header('Location: https://sistemadeventasapp-b723da2b8729.herokuapp.com/index.html');
    exit(); // Terminar la ejecución del script después de redirigir
}
?>