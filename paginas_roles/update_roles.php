<?php
INCLUDE ('../APP/config.php');
INCLUDE ('../layout/sesion.php');
INCLUDE ('../layout/header.php');
INCLUDE ('../layout/nav.php');
INCLUDE ('../layout/sidebar.php');
INCLUDE ('../app/alerts.php');
INCLUDE ('../app/controllers/roles/update_roles_read.php');

?>

<!-- Contenido (titulo) -->
<div class="content-wrapper">
<div class="content-header">
    <div class="container-fluid">
    <div class="row mb-2">
        <div class="col-sm-12">
        <h1 class="m-0">Edicion de roles</h1>
        </div>
    </div>
    </div>
</div>
<!-- Main content -->
<div class="content">
    <div class="card card-warning col-sm-8">
    <div class="card-header">
        <h3 h3 class="card-title">Datos editables</h3>
    </div>
    <form action="../app/controllers/roles/update_roles_controller.php" method="post">
        <div class="card-body">
        <input type="hidden" name="id_rol" value="<?php echo $id_rol_get; ?>">
        <div class="form-group">
            <label for="nombre">Nombre</label>
            <input type="text" class="form-control" name="nombre" value="<?php echo $nombre_rol; ?>">
        </div>
        <div class="form-group">
            <label for="restricciones">Restricciones</label>
            <input type="text" class="form-control" name="restricciones" value="<?php echo $restricciones_get; ?>">
        </div>
        <div class="card-footer">
            <a href="<?php echo $URL?>paginas_roles/roles.php" class="btn btn-secondary" id="">Cancelar</a>
            <button type="submit" class="btn btn-warning">Actualizar</button>
        </div>
    </form>
    </div>
    </div>
</div>

<?php INCLUDE('../layout/footer.php');?>