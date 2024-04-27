<?php

INCLUDE('../../config.php');

$rol = mb_strtolower($_POST['nombre']);
$restricciones = mb_strtolower($_POST['restricciones']);

$sentencia = $pdo->prepare("INSERT INTO tb_roles 
    (rol, restricciones, fyh_creacion) 
    VALUES (:rol , :restricciones, :fyh_creacion)");

$sentencia->bindParam(':rol', $rol);
$sentencia->bindParam(':restricciones', $restricciones);
$sentencia->bindParam(':fyh_creacion', $fechaHora);
$sentencia->execute();
session_start();
    $_SESSION['mensaje_success'] = "Rol creado con exito";
    header('Location:' .$URL. 'paginas_roles/roles.html');