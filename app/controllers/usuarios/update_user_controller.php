<?php

include('../../config.php');

$nombres = $_POST['nombres'];
$apellido = $_POST['apellido'];
$email = $_POST['email'];
$id_rol = $_POST['id_rol'];
$password_user = $_POST['password_user'];
$password_repeat = $_POST['password_repeat'];
$id_usuario = $_POST['id_usuario'];

// Verificando si se proporcionó una nueva contraseña
if (!empty($password_user) && $password_user === $password_repeat) {
    $opciones = ['cost' => 10];
    $password_encriptada = password_hash($password_user, PASSWORD_BCRYPT, $opciones);
} elseif (!empty($password_user) && $password_user !== $password_repeat) {
    session_start();
    $_SESSION['mensaje_error'] = "Las contraseñas no coinciden";
    header('Location:' . $URL . 'paginas_usuarios/update_user.php?id=' . $id_usuario);
    exit; // Evita que se ejecute el resto del código
}

// Construyendo la consulta SQL para actualizar los datos del usuario
$sql = "UPDATE tb_usuarios 
    SET nombres = :nombres, 
        apellido = :apellido, 
        email = :email,
        id_rol = :id_rol, 
        fyh_actualizacion = :fyh_actualizacion";

// Si se proporcionó una nueva contraseña, se añade la actualización de la contraseña a la consulta SQL
if (!empty($password_encriptada)) {
    $sql .= ", password_user = :password_user";
}

$sql .= " WHERE id_usuario = :id_usuario";

$sentencia = $pdo->prepare($sql);

// Asignar valores a los parámetros 
$sentencia->bindParam(':nombres', $nombres);
$sentencia->bindParam(':apellido', $apellido); 
$sentencia->bindParam(':email', $email);  
$sentencia->bindParam(':id_rol', $id_rol);       
$sentencia->bindParam(':fyh_actualizacion', $fechaHora);  
$sentencia->bindParam(':id_usuario', $id_usuario);   
 
// Si se proporcionó una nueva contraseña, se asigna a los parámetros  
if (!empty($password_encriptada)) { 
    $sentencia->bindParam(':password_user', $password_encriptada);
}
 
$sentencia->execute();

session_start();
$_SESSION['mensaje_success'] = "Se actualizaron los datos del usuario con éxito";
header('Location:' . $URL . 'paginas_usuarios/usuarios.php');