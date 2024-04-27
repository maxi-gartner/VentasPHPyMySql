<?php

INCLUDE('../../config.php');

$nombres = mb_strtolower($_POST['nombres']);
$apellido = mb_strtolower($_POST['apellido']);
$email = $_POST['email'];
$password_user = $_POST['password_user'];
$password_repeat = $_POST['password_repeat'];
$id_rol = $_POST['id_rol'];

if($password_user === $password_repeat){
    $opciones = ['cost' => 10];
    $password_encriptada = password_hash($password_user, PASSWORD_BCRYPT, $opciones );
}else{
    session_start();
    $_SESSION['mensaje_error'] = "Las contrasenias no coinciden";
    header('Location:' .$URL. 'paginas_usuarios/create_user.html');
}

$sentencia = $pdo->prepare("INSERT INTO tb_usuarios 
    (nombres, apellido, id_rol, email, password_user, fyh_creacion) 
    VALUES (:nombres , :apellido, :id_rol, :email, :password_user, :fyh_creacion)");

$sentencia->bindParam(':nombres', $nombres);
$sentencia->bindParam(':apellido', $apellido);
$sentencia->bindParam(':id_rol', $id_rol);
$sentencia->bindParam(':email', $email);
$sentencia->bindParam(':password_user', $password_encriptada);
$sentencia->bindParam(':fyh_creacion', $fechaHora);
$sentencia->execute();
session_start();
    $_SESSION['mensaje_success'] = "Usuario creado con exito";
    header('Location:' .$URL. 'paginas_usuarios/usuarios.html');