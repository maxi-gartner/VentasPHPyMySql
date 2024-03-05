<?php

include('../../config.php');

$email = $_POST['email'];
$password_user = $_POST['password_user'];

$sql = "SELECT * FROM tb_usuarios WHERE email = '$email' AND password_user = '$password_user' ";
$query = $pdo->prepare($sql);
$query->execute();
$usuarios = $query->fetchAll(PDO::FETCH_ASSOC);

if($usuarios){
    foreach ($usuarios as $usuario) {
        $email_tabla = $usuario['email'];
        echo $nombres = $usuario['nombres'];
    }
    session_start();
    $_SESSION['sesion_email'] = $email;
    //echo "Ingreso correcto";
    header('Location:' .$URL. 'index.php');
}else{
    session_start();
    $_SESSION['mensaje'] = "Usuario o contrasenya incorrectos";
    header('Location:' .$URL. 'src/login.php');
}
