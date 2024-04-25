<?php

INCLUDE('../../config.php');

$id_rol = $_POST['id_rol'];
        
        $consulta = $pdo->prepare("DELETE FROM tb_roles WHERE id_rol = :id_rol");
        $consulta->bindParam(':id_rol', $id_rol);
        
        if ($consulta->execute()) {
            // El usuario fue eliminado exitosamente
            header('Location: ../../../paginas_roles/roles.php');
        } else {
            // Ocurrió un error al eliminar el usuario
            echo "Ocurrió un error al intentar eliminar el usuario.";
        }
