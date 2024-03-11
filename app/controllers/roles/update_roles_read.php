<?php

$id_rol_get = $_GET['id'];
$sql_rol = "SELECT * FROM tb_roles where id_rol = $id_rol_get";
$query_rol = $pdo->prepare($sql_rol);
$query_rol->execute();
$data_details_rol = $query_rol->fetchAll(PDO::FETCH_ASSOC);

foreach ($data_details_rol as $datos_rol) {
    $id_rol_get = $datos_rol['id_rol'];
    $nombre_rol = $datos_rol['rol'];
    $restricciones_get = $datos_rol['restricciones'];
    }

