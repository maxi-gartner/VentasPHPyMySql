<?php
INCLUDE ('../APP/config.php');
INCLUDE ('../layout/sesion.php');
INCLUDE ('../layout/header.php');
INCLUDE ('../layout/nav.php');
INCLUDE ('../layout/sidebar.php');
INCLUDE ('../app/alerts.php');
INCLUDE ('../app/controllers/usuarios/details_user_controller.php')


?>

<!-- Contenido (titulo) -->
<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-12">
            <h1 class="m-0">Detalles del usuarios</h1>
            </div>
        </div>
        </div>
    </div>
    <!-- Main content -->
    <div class="content">
        <div class="card card-success col-sm-12">
        <div class="card-header">

        <?php 
                    foreach ($data_details_user as $datos_usuario) {
                        $id_user = $datos_usuario['id_usuario'];
                        $nombre = $datos_usuario['nombres'];
                        $apellido = $datos_usuario['apellido'];
                        $email = $datos_usuario['email'];
                        $id_rol = $datos_usuario['rol'];
                        $restricciones = $datos_usuario['restricciones'];
                        $fyh_creacion = $datos_usuario['fyh_creacion'];
                        $fyh_actualizacion = $datos_usuario['fyh_actualizacion'];
                        ?>

            <h3 h3 class="card-title">Usuario: <?php echo ucfirst($nombre) . " " . ucfirst($apellido) ?> </h3>
        </div>
            <table class="table table-bordered table-hover">
                <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Apellido</th>
                        <th>Email</th>
                        <th>Rol</th>
                        <th>Accesos restringidos</th>
                        <th>Fecha y Hora de Creacion</th>
                        <th>Fecha y Hora de Actualizacion</th>
                    </tr>
                </thead>
                <tbody>
                        <tr>
                            <td><?= ucfirst($nombre) ?></td>
                            <td><?= ucfirst($apellido) ?></td>
                            <td><?= $email ?></td>
                            <td><?= ucfirst($id_rol) ?></td>
                            <td><?= ucfirst($restricciones) ?></td>
                            <td><?= $fyh_creacion ?></td>
                            <td><?= $fyh_actualizacion ?></td>
                            </tr>
                            <?php
                        }
                        ?>
                    </tbody>
                    </table>
            </div>
        </div>
    </div>

<?php INCLUDE('../layout/footer.php'); ?>