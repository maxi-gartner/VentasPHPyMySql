<?php

session_start();

if(isset($_SESSION['sesion_email'])) {
    $email_sesion = $_SESSION['sesion_email'];

    // Verificar si la variable de sesión está definida
    if(!empty($email_sesion)) {
        // Consulta preparada para seguridad contra inyección SQL
        $sql = "SELECT * FROM tb_usuarios WHERE email = :email";
        $query = $pdo->prepare($sql);
        $query->bindParam(':email', $email_sesion);
        $query->execute();

        // Manejo de errores de base de datos
        if($query) {
            $usuarios = $query->fetchAll(PDO::FETCH_ASSOC);

            if($usuarios){
                foreach ($usuarios as $usuario) {
                    $nombre_tabla = $usuario['nombres'];
                    $apellido_tabla = $usuario['apellido'];
                }
            } else {
                $nombre_tabla = "Sin Nombre";
            }
        } else {
            // Manejo de errores de base de datos
            echo "Error en la consulta SQL";
        }
    } else {
        // Manejo de sesión no definida
        echo "La variable de sesión está vacía";
        header('Location:' . $URL . 'src/login.html');
        exit(); // Terminar la ejecución del script después de redirigir
    }
} else {
    // Manejo de sesión no existente
    echo "No existe sesión";
    header('Location:' . $URL . 'src/login.html');
    exit(); // Terminar la ejecución del script después de redirigir
}
