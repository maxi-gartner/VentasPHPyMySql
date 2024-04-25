<?php

if(isset($_SESSION['sesion_email'])) {
  //echo "si existe sesion de " . $_SESSION['sesion_email'];
  $email_sesion = $_SESSION['sesion_email'];
  $sql = "SELECT * FROM tb_usuarios WHERE email = '$email_sesion' ";
  $query = $pdo->prepare($sql);
$query->execute();
$usuarios = $query->fetchAll(PDO::FETCH_ASSOC);

if($usuarios){
    foreach ($usuarios as $usuario) {
        $nombre_tabla = $usuario['nombres'];
        $apellido_tabla = $usuario['apellido'];
    }
}else{
  $nombre_tabla = "Sin Nombre";
}
}else{
  echo "no existe sesion";
  header('Location:' .$URL. 'src/login.php');
}