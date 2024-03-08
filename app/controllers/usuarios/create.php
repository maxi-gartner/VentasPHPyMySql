<?php

INCLUDE('../../config.php');

$nombres = mb_strtolower($_POST['nombres']);
$apellido = mb_strtolower($_POST['apellido']);
$email = $_POST['email'];
$password_user = $_POST['password_user'];
$password_repeat = $_POST['password_repeat'];

if($password_user === $password_repeat){
    $opciones = ['cost' => 10];
    $password_encriptada = password_hash($password_user, PASSWORD_BCRYPT, $opciones );
}else{
    session_start();
    $_SESSION['mensaje_error'] = "Las contrasenias no coinciden";
    header('Location:' .$URL. 'paginas/create_user.php');
}

$sentencia = $pdo->prepare("INSERT INTO tb_usuarios 
    (nombres, apellido, email, password_user, fyh_creacion) 
    VALUES (:nombres , :apellido, :email, :password_user, :fyh_creacion)");

$sentencia->bindParam(':nombres', $nombres);
$sentencia->bindParam(':apellido', $apellido);
$sentencia->bindParam(':email', $email);
$sentencia->bindParam(':password_user', $password_encriptada);
$sentencia->bindParam(':fyh_creacion', $fechaHora);
$sentencia->execute();
session_start();
    $_SESSION['mensaje_success'] = "Usuario creado con exito";
    header('Location:' .$URL. 'paginas/create_user.php');