<?php

$id_rol_get = $_GET['id'];
$sql_roles = "SELECT * FROM tb_roles where id_rol = $id_rol_get";
$query_roles = $pdo->prepare($sql_roles);
$query_roles->execute();
$data_details_rol = $query_roles->fetchAll(PDO::FETCH_ASSOC);