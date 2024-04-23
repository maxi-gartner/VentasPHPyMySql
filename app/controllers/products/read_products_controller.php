<?php

$sql_productos = "SELECT pr.id, pr.nombre, cat.categoria, pr.descripcion, pr.precio, pr.stock, pr.marca, pr.descuento, pr.img FROM tb_productos as pr inner join tb_categorias as cat on pr.categoria = cat.id";
$query_productos = $pdo->prepare($sql_productos);
$query_productos->execute();
$datos_productos = $query_productos->fetchAll(PDO::FETCH_ASSOC);
