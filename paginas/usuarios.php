<?php
INCLUDE ('../APP/config.php');
INCLUDE ('../layout/sesion.php');
INCLUDE ('../layout/header.php');
INCLUDE ('../layout/nav.php');
INCLUDE ('../layout/sidebar.php');
INCLUDE ('../app/controllers/usuarios/listado_de_usuarios.php')

?>

  <!-- Contenido (titulo) -->
  <div class="content-wrapper">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="content-header col-sm-12">
          <h1 class="m-0">Starter Page</h1>
        </div>
      </div>
    </div>
    <!-- Main content -->
    <div class="content">
      <div class="card card-primary col-sm-8">
        <div class="card-header">
          <h3 class="card-title">Usuarios registrados</h3>
        <div class="card-tools">
          <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
        </div>
      </div>

        <div class="card-body" style="display: block;">
        <table class="table table-bordered table-hover table-striped table-sm">
          <tr>
            <th>Nro</th>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Email</th>
          </tr>
          <tbody>
            <?php 
            foreach ($datos_usuarios as $dato_usuario) {
                $nro = $dato_usuario['id_usuario'];
                $nombre = $dato_usuario['nombres'];
                $apellido = $dato_usuario['apellido'];
                $email = $dato_usuario['email'];
                ?>
                <tr>
                  <td><?= $nro ?></td>
                  <td><?= $nombre ?></td>
                  <td><?= $apellido ?></td>
                  <td><?= $email ?></td>
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