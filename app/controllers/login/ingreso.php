<?php

include('../../config.php');

$email = $_POST['email'];
$password_user = $_POST['password_user'];

$sql = "SELECT * FROM tb_usuarios WHERE email = '$email' AND password_user = '$password_user' ";
$query = $pdo->prepare($sql);
$query->execute();
$usuarios = $query->fetchAll(fetch_style: PDO::FETCH_ASSOC);

if($usuarios){
    foreach ($usuarios as $usuario) {
        $email_tabla = $usuario['email'];
        echo $nombres = $usuario['nombres'];
    }
    echo "Ingreso correcto";
    $_SESSION['sesion_email'] = $email;
    header('Location:' .$URL. 'index.php');
}else{
    echo "Usuario o contrasenya incorrectos";
}
