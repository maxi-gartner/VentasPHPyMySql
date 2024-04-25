<?php
INCLUDE ('../APP/config.php');
INCLUDE ('../layout/sesion.php');
INCLUDE ('../layout/header.php');
INCLUDE ('../layout/nav.php');
INCLUDE ('../layout/sidebar.php');
INCLUDE ('../app/controllers/roles/read_roles_controller.php');

INCLUDE ('../app/alerts.php');

?>

<!-- Contenido (titulo) -->
<div class="content-wrapper">
    <div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
        <div class="col-sm-12">
            <h1 class="m-0">Listado de roles</h1>
        </div>
        </div>
    </div>
    </div>
    <!-- Main content -->
    <div class="content">
    <div class="card card-primary col-sm-12">
        <div class="card-header">
        <h3 h3 class="card-title">Roles</h3>
        </div>
        <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                    <th><center>Numero de Rol</center></th>
                    <th><center>Rol</center></th>
                    <th><center>Accesos restringidos</center></th>
                    <th><center>Acciones</center></th>
                </tr>
                <tbody>
                    <?php 
                    foreach ($datos_roles as $dato_rol) {
                        $id_rol = $dato_rol['id_rol'];
                        $rol = $dato_rol['rol'];
                        $accesos = $dato_rol['restricciones'];
                        ?>
                        <tr>
                        <td><center><?= $id_rol ?></center></td></td>
                        <td><?= $rol ?></td>
                        <td><?= $accesos ?></td>
                        <td>
                            <center>
                            <div class="btn-group">
                            <a href="../paginas_roles/details_roles.php?id=<?= $id_rol ?>" type="button" class="btn btn-info"><i class="fas fa-eye"></i> Ver</a>
                            <a href="../paginas_roles/update_roles.php?id=<?= $id_rol ?>" type="button" class="btn btn-warning"><i class="fas fa-pencil-alt"></i> Editar</a>
                            <form action="../app/controllers/roles/delete_roles_controller.php" method="post" style="display: inline;">
                                <input type="hidden" name="id_rol" value="<?= $id_rol ?>">
                                <button type="button" class="btn btn-danger deleteButton" value="<?= $rol ?>" id="<?php echo $id_rol ?>"><i class="fas fa-trash"></i> Borrar</button>
                            </form>
                            </div>
                            </center>
                        </td>
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
<script>
document.addEventListener('DOMContentLoaded', function() {
    const deleteButtons = document.querySelectorAll('.deleteButton');

    //console.log(deleteButtons);
    deleteButtons.forEach(function(button) {
    console.log(button.id);
        button.addEventListener('click', function(event) {
            event.preventDefault();
            const id_rol = button.id;
            const nombre_rol = button.value;

            Swal.fire({
                title: "¿Estás seguro de borrar este registro?",
                text: "El usuario " + nombre_rol + " se eliminará de forma permanente",
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: "#3085d6",
                cancelButtonColor: "#d33",
                confirmButtonText: "Si, borrar",
                }).then((result) => {
                if (result.isConfirmed) {
                // Obtieniendo el formulario asociado al botón
                const formulario = button.closest('form');
                formulario.submit();
                }
                });
        });
    });
});
</script>

<script>
$(function () {
    $("#example1").DataTable({
    "pageLength": 5,
    "language": {
        "emptyTable": "No hay datos disponibles",
        "info": "Mostrando _START_ a _END_ de _TOTAL_ Usuarios",
        "infoEmpty": "Mostrando 0 a 0 de 0 Usuarios",
        "infoFiltered": "(filtered from _MAX_ total entries)",
        "infoPostFix": "",
        "thousands": ",",
        "lengthMenu": "Mostrar _MENU_ Usuarios",
        "loadingRecords": "Cargando...",
        "processing": "Procesando...",
        "search": "Buscar:",
        "zeroRecords": "No se encontraron coincidencias",
        "paginate": {
        "first": "Primero",
        "last": "Ultimo",
        "next": "Siguiente",
        "previous": "Anterior"
        }
    },
    "responsive": true, 
    "lengthChange": true, 
    "autoWidth": false,
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
});
</script>