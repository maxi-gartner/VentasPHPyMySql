<?php

$id_usuario_get = $_GET['id'];
$sql_usuarios = "SELECT * FROM tb_usuarios inner join tb_roles on tb_usuarios.id_rol = tb_roles.id_rol  where id_usuario = $id_usuario_get";
$query_usuarios = $pdo->prepare($sql_usuarios);
$query_usuarios->execute();
$data_details_user = $query_usuarios->fetchAll(PDO::FETCH_ASSOC);