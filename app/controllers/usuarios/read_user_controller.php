<?php

$sql_usuarios = "SELECT us.id_usuario, us.nombres, us.apellido, us.email, rol.rol FROM tb_usuarios as us inner join tb_roles as rol on us.id_rol = rol.id_rol";
$query_usuarios = $pdo->prepare($sql_usuarios);
$query_usuarios->execute();
$datos_usuarios = $query_usuarios->fetchAll(PDO::FETCH_ASSOC);