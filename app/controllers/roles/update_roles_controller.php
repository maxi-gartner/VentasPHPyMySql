<?php

include('../../config.php');

$nombre = $_POST['nombre'];
$restricciones = $_POST['restricciones'];


// Construyendo la consulta SQL para actualizar los datos del usuario
$sql = "UPDATE tb_roles 
    SET id_rol = :nombre, 
        restricciones = :restricciones, 
        fyh_actualizacion = :fyh_actualizacion";

$sql .= " WHERE id_usuario = :id_usuario";

$sentencia = $pdo->prepare($sql);

// Asignar valores a los parámetros
$sentencia->bindParam(':nombre', $nombre);
$sentencia->bindParam(':restricciones', $restricciones);
$sentencia->bindParam(':fyh_actualizacion', $fechaHora);

$sentencia->execute();

session_start();
$_SESSION['mensaje_success'] = "Se actualizaron los datos del usuario con éxito";
header('Location:' . $URL . 'paginas_usuarios/usuarios.php');