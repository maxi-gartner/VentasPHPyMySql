<?php

include('../../config.php');

$id_rol = $_POST['id_rol'];
$nombre = $_POST['nombre'];
$restricciones = $_POST['restricciones'];


// Construyendo la consulta SQL para actualizar los datos del rol
$sql = "UPDATE tb_roles SET
        rol = :nombre,
        restricciones = :restricciones, 
        fyh_actualizacion = :fyh_actualizacion";
$sql .= " WHERE id_rol = :id_rol";

$sentencia = $pdo->prepare($sql);

// Asignar valores a los parámetros
$sentencia->bindParam(':id_rol', $id_rol);
$sentencia->bindParam(':nombre', $nombre);
$sentencia->bindParam(':restricciones', $restricciones);
$sentencia->bindParam(':fyh_actualizacion', $fechaHora);

$sentencia->execute();

session_start();
$_SESSION['mensaje_success'] = "Se actualizaron los datos del rol ".$nombre;
header('Location:' . $URL . 'paginas_roles/roles.html');