<?php

include('../../config.php');

$email = $_POST['email'];
$password_user = $_POST['password_user'];

$sql = "SELECT * FROM tb_usuarios WHERE email = '$email'";
$query = $pdo->prepare($sql);
$query->execute();
$usuarios = $query->fetchAll(PDO::FETCH_ASSOC);

foreach ($usuarios as $usuario) {
    $email_tabla = $usuario['email'];
    $nombres = $usuario['nombres'];
    $apellido = $usuario['apellido'];
    $password_user_tabla = $usuario['password_user'];
}

if($usuarios && (password_verify($password_user, $password_user_tabla))){
    session_start();
    $_SESSION['sesion_email'] = $email;
    //echo "Ingreso correcto";
    header('Location: ../../../index.php');
    session_start();
    $_SESSION['login_success'] = "Bienvenido ".ucfirst(strtolower($nombres))." ".ucfirst(strtolower($apellido));
}else{
    session_start();
    $_SESSION['mensaje_error'] = "Usuario o contrasenya incorrectos";
    header('Location:' .$URL. 'src/login.php');
}

