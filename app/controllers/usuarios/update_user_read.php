<?php

$id_usuario_get = $_GET['id'];
$sql_usuarios = "SELECT * FROM tb_usuarios where id_usuario = $id_usuario_get";
$query_usuarios = $pdo->prepare($sql_usuarios);
$query_usuarios->execute();
$data_details_user = $query_usuarios->fetchAll(PDO::FETCH_ASSOC);

foreach ($data_details_user as $datos_usuario) {
    $id_usuario_get = $datos_usuario['id_usuario'];
    $nombre = $datos_usuario['nombres'];
    $apellido = $datos_usuario['apellido'];
    $email = $datos_usuario['email'];
    $id_rol = $datos_usuario['id_rol'];
    }