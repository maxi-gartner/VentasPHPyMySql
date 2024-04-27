<?php

INCLUDE('../../config.php');

$id_usuario = $_POST['id_usuario'];
        
        $consulta = $pdo->prepare("DELETE FROM tb_usuarios WHERE id_usuario = :id_usuario");
        $consulta->bindParam(':id_usuario', $id_usuario);
        
        if ($consulta->execute()) {
            // El usuario fue eliminado exitosamente
            header('Location:' .$URL. 'paginas_usuarios/usuarios.html');
        } else {
            // Ocurrió un error al eliminar el usuario
            echo "Ocurrió un error al intentar eliminar el usuario.";
        }
