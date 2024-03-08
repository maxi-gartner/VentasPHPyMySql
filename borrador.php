<?php

INCLUDE('../../config.php');

$nombres = $_POST['nombres'];
$apellido = $_POST['apellido'];
$email = $_POST['email'];
$password_user = $_POST['password_user'];
$password_repeat = $_POST['password_repeat'];
$id_usuario = $_POST['id_usuario'];

if($password_user === $password_repeat){
    $opciones = ['cost' => 10];
    $password_encriptada = password_hash($password_user, PASSWORD_BCRYPT, $opciones );
}else{
    session_start();
    $_SESSION['mensaje_error'] = "Las contrasenias no coinciden";
    header('Location:' .$URL. 'paginas/update_user.php?id='.$id_usuario);
}

$sentencia = $pdo->prepare("UPDATE tb_usuarios 
    SET nombres= :nombres, 
        apellido= :apellido, 
        email= :email, 
        password_user= :password_user, 
        fyh_actualizacion= :fyh_actualizacion 
    WHERE id_usuario= :id_usuario ");

$sentencia->bindParam(':nombres', $nombres);
$sentencia->bindParam(':apellido', $apellido);
$sentencia->bindParam(':email', $email);
$sentencia->bindParam(':password_user', $password_encriptada);
$sentencia->bindParam(':fyh_actualizacion', $fechaHora);
$sentencia->bindParam(':id_usuario', $id_usuario);
$sentencia->execute();
session_start();
    $_SESSION['mensaje_success'] = "Se actualizaron los datos del usuario con exito";
    header('Location:' .$URL. 'paginas/usuarios.php');
    