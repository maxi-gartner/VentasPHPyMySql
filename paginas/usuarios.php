<?php
INCLUDE ('../APP/config.php');
INCLUDE ('../layout/sesion.php');
INCLUDE ('../layout/header.php');
INCLUDE ('../layout/nav.php');
INCLUDE ('../layout/sidebar.php');
INCLUDE ('../app/controllers/usuarios/listado_de_usuarios.php');

INCLUDE ('../app/alerts.php');

?>

  <!-- Contenido (titulo) -->
  <div class="content-wrapper">
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-12">
            <h1 class="m-0">Starter Page</h1>
          </div>
        </div>
      </div>
    </div>
    <!-- Main content -->
    <div class="content">
      <div class="card card-primary col-sm-12">
        <div class="card-header">
          <h3 h3 class="card-title">Usuarios registrados</h3>
        </div>
        <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th><center>Nro</center></th>
                    <th><center>Nombre</center></th>
                    <th><center>Apellido</center></th>
                    <th><center>Email</center></th>
                    <th><center>Acciones</center></th>
                  </tr>
                  <tbody>
                    <?php 
                    $contador = 0;
                    foreach ($datos_usuarios as $dato_usuario) {
                        $id_user = $dato_usuario['id_usuario'];
                        $nro = $contador += 1;
                        $nombre = $dato_usuario['nombres'];
                        $apellido = $dato_usuario['apellido'];
                        $email = $dato_usuario['email'];
                        ?>
                        <tr>
                          <td><center><?= $nro ?></center></td></td>
                          <td><?= $nombre ?></td>
                          <td><?= $apellido ?></td>
                          <td><?= $email ?></td>
                          <td>
                            <center>
                            <div class="btn-group">
                              <a href="<?php echo $URL ?>paginas/details_user.php?id=<?= $id_user ?>" type="button" class="btn btn-info"><i class="fas fa-eye"></i> Ver</a>
                              <a href="<?php echo $URL ?>paginas/update_user.php?id=<?= $id_user ?>" type="button" class="btn btn-warning"><i class="fas fa-pencil-alt"></i> Editar</a>
                              <form action="../app/controllers/usuarios/delete.php" method="post" style="display: inline;">
                                  <input type="hidden" name="id_usuario" value="<?= $id_user ?>">
                                  <input type="hidden" name="nombre_usuario" value="<?= $nombre ?>">
                                  <button type="submit" class="btn btn-danger"><i class="fas fa-trash"></i> Borrar</button>
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