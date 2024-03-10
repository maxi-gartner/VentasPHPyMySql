<?php
INCLUDE ('../APP/config.php');
INCLUDE ('../layout/sesion.php');
INCLUDE ('../layout/header.php');
INCLUDE ('../layout/nav.php');
INCLUDE ('../layout/sidebar.php');
INCLUDE ('../app/alerts.php');
INCLUDE ('../app/controllers/roles/details_roles_controller.php')


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
                    foreach ($data_details_rol as $datos_rol) {
                        $id_rol = $datos_rol['id_rol'];
                        $rol = $datos_rol['rol'];
                        $accesos = $datos_rol['restricciones'];
                        $fyh_creacion = $datos_rol['fyh_creacion'];
                        $fyh_actualizacion = $datos_rol['fyh_actualizacion'];
                        ?>

            <h3 h3 class="card-title">Rol: <?php echo ucfirst($rol)?> </h3>
        </div>
            <table class="table table-bordered table-hover">
                <thead>
                    <tr>
                        <th><center><?php echo $id_rol ?></center></th>
                        <th>Nombre</th>
                        <th>Accesos Restringidos</th>
                        <th>Fecha y Hora de Creacion</th>
                        <th>Fecha y Hora de Actualizacion</th>
                    </tr>
                </thead>
                <tbody>
                        <tr>
                            <td><center><?= $id_rol ?></center></td>
                            <td><?= $rol ?></td>
                            <td><?= $accesos ?></td>
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