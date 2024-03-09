<?php

//INCLUDE('../../config.php');

// $id_usuario = $_POST['id_usuario'];
        
//         $consulta = $pdo->prepare("DELETE FROM tb_usuarios WHERE id_usuario = :id_usuario");
//         $consulta->bindParam(':id_usuario', $id_usuario);
        
//         if ($consulta->execute()) {
//             // El usuario fue eliminado exitosamente
//             header('Location:' .$URL. 'paginas/usuarios.php');
//         } else {
//             // Ocurrió un error al eliminar el usuario
//             echo "Ocurrió un error al intentar eliminar el usuario.";
//         }

INCLUDE('../../config.php');

$id_usuario = $_POST['id_usuario'];
$nombre_usuario = $_POST['nombre_usuario'];

if(!isset($_SESSION['alert_delete'])) {
    session_start();
    $_SESSION['alert_delete'] = "Se eliminara el usuario de " . $nombre_usuario;
    $_SESSION['id_user'] = $id_usuario;
    exit; // Evita que se ejecute el resto del código
}


