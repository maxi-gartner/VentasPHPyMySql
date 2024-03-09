<?php

INCLUDE('../../config.php');

$nombres = $_POST['nombres'];
$apellido = $_POST['apellido'];
$email = $_POST['email'];
$password_user = $_POST['password_user'];
$password_repeat = $_POST['password_repeat'];
$id_usuario = $_POST['id_usuario'];

if($password_user === $password_repeat){
    $opciones = ['cost' => 10];
    $password_encriptada = password_hash($password_user, PASSWORD_BCRYPT, $opciones );
}else{
    session_start();
    $_SESSION['mensaje_error'] = "Las contrasenias no coinciden";
    header('Location:' .$URL. 'paginas/update_user.php?id='.$id_usuario);
}

$sentencia = $pdo->prepare("UPDATE tb_usuarios 
    SET nombres= :nombres, 
        apellido= :apellido, 
        email= :email, 
        password_user= :password_user, 
        fyh_actualizacion= :fyh_actualizacion 
    WHERE id_usuario= :id_usuario ");

$sentencia->bindParam(':nombres', $nombres);
$sentencia->bindParam(':apellido', $apellido);
$sentencia->bindParam(':email', $email);
$sentencia->bindParam(':password_user', $password_encriptada);
$sentencia->bindParam(':fyh_actualizacion', $fechaHora);
$sentencia->bindParam(':id_usuario', $id_usuario);
$sentencia->execute();
session_start();
    $_SESSION['mensaje_success'] = "Se actualizaron los datos del usuario con exito";
    header('Location:' .$URL. 'paginas/usuarios.php');
    


    /////////
?>
    <?php

INCLUDE('../../config.php');

$id_usuario = $_POST['id_usuario'];
$nombre_usuario = $_POST['nombre_usuario'];

if(!isset($_SESSION['alert_delete'])) {
    session_start();
    $_SESSION['alert_delete'] = "Se eliminara el usuario de " . $nombre_usuario;
    exit; // Evita que se ejecute el resto del código
}

if(isset($_SESSION['respuesta_delete'])) {
    $consulta = $pdo->prepare("DELETE FROM tb_usuarios WHERE id_usuario = :id_usuario");
    $consulta->bindParam(':id_usuario', $id_usuario);
    
    if ($consulta->execute()) {
        session_start();
        $_SESSION['mensaje_success'] = "Usuario eliminado con exito";
        header('Location:' .$URL. 'paginas/usuarios.php');
        exit; // Evita que se ejecute el resto del código
    } else {
        // Ocurrió un error al eliminar el usuario
        $_SESSION['mensaje_error'] = "Ocurrió un error al eliminar el usuario";
    }
}
unset($_SESSION['respuesta_delete']);


/// alerta
if(isset($_SESSION['alert_delete'])) {
    $respuesta_creacion = $_SESSION['alert_delete']; 
    $id_usuario = $_SESSION['id_user'];
    ?>
    <script>
        Swal.fire({
            title: "¿Estás seguro de borrar este registro?",
            text: "<?php echo $respuesta_creacion ?>",
            icon: "warning",
            showCancelButton: true,
            confirmButtonColor: "#3085d6",
            cancelButtonColor: "#d33",
            confirmButtonText: "Si, borrar",
            }).then((result) => {
            if (result.isConfirmed) {
                
                INCLUDE('../../config.php');

                $consulta = $pdo->prepare("DELETE FROM tb_usuarios WHERE id_usuario = :id_usuario");
                $consulta->bindParam(':id_usuario', $id_usuario);
                
                if ($consulta->execute()) {
                    session_start();
                    $_SESSION['mensaje_success'] = "Usuario eliminado con exito";
                    header('Location:' .$URL. 'paginas/usuarios.php');
                    exit; // Evita que se ejecute el resto del código
                } else {
                    // Ocurrió un error al eliminar el usuario
                    $_SESSION['mensaje_error'] = "Ocurrió un error al eliminar el usuario";
                }
            }
            });
    </script>
    <?php
}
unset($_SESSION['alert_delete']);
unset($_SESSION['alert_delete']);
