<?php
INCLUDE ('../APP/config.php');
INCLUDE ('../layout/sesion.php');
INCLUDE ('../layout/header.php');
INCLUDE ('../layout/nav.php');
INCLUDE ('../layout/sidebar.php');
INCLUDE ('../app/controllers/products/read_products_controller.php');

INCLUDE ('../app/alerts.php');

?>

<!-- Contenido (titulo) -->
<div class="content-wrapper">
    <div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
        <div class="col-sm-12">
            <h1 class="m-0">Listado de productos</h1>
        </div>
        </div>
    </div>
    </div>
    <!-- Main content -->
    <div class="content">
    <div class="card card-primary col-sm-12">
        <div class="card-header">
        <h3 h3 class="card-title">Lista de productos</h3>
        </div>
        <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                    <th><center>Nro</center></th>
                    <th><center>Nombre</center></th>
                    <th><center>Categoria</center></th>
                    <th><center>Precio</center></th>
                    <th><center>Stock</center></th>
                    <th><center>Marca</center></th>
                    <th><center>Descuento</center></th>
                    <th><center>Acciones</center></th>
                </tr>
                <tbody>
                    <?php 
                    $contador = 0;
                    foreach ($datos_productos as $dato_producto) {
                        $id_producto = $dato_producto['id'];
                        $nro = $contador += 1;
                        $nombre = $dato_producto['nombre'];
                        $categoria = $dato_producto['categoria'];
                        $precio = $dato_producto['precio'];
                        $stock = $dato_producto['stock'];
                        $marca = $dato_producto['marca'];
                        $descuento = $dato_producto['descuento'];
                        ?>
                        <tr>
                        <td><center><?= $nro ?></center></td></td>
                        <td><?= ucfirst($nombre) ?></td>
                        <td><?= ucfirst($categoria) ?></td>
                        <td>$<?= $precio ?></td>
                        <td><?= $stock ?></td>
                        <td><?= ucfirst($marca) ?></td>
                        <td><?= $descuento ?>%</td>
                        <td>
                            <center>
                            <div class="btn-group">
                            <a  href="#" type="button" class="btn btn-info"><i class="fas fa-eye"></i> Ver</a>
                            <a  href="#" type="button" class="btn btn-warning"><i class="fas fa-pencil-alt"></i> Editar</a>
                            <form action="../app/controllers/products/delete_user_controller.php" method="post" style="display: inline;"disabled>
                                <input type="hidden" name="id_usuario" value="<?= $id_producto ?>">
                                <input type="hidden" name="nombre_usuario" value="<?= $nombre ?>">
                                <button type="button" class="btn btn-danger deleteButton" value="<?= $nombre ?>" id="<?php echo $id_producto ?>"disabled><i class="fas fa-trash"></i> Borrar</button>
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
            const id_producto = button.id;
            const nombre_usuario = button.value;

            Swal.fire({
                title: "¿Estás seguro de borrar este registro?",
                text: "El usuario " + nombre_usuario + " se eliminará de forma permanente",
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
    buttons: [{
        extend: 'collection',
        text: 'Reportes',
        orientacion: 'landscape',
        buttons: [{
        text: 'Copiar',
        extend: 'copy',
        },{
        extend:'pdf',
        },{
        extend: 'excel',
        },{
        extend: 'csv',
        },{
        text: 'Imprimir',
        extend: 'print',
        }
        ]
        },{
        extend: 'colvis',
        text: 'Visor de columnas',
        collectionsLayout: 'fixed three-column'
        }
    ],
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
});
</script>