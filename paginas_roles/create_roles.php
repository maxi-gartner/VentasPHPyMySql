<?php
INCLUDE ('../APP/config.php');
INCLUDE ('../layout/sesion.php');
INCLUDE ('../layout/header.php');
INCLUDE ('../layout/nav.php');
INCLUDE ('../layout/sidebar.php');
INCLUDE ('../app/alerts.php');

?>

<!-- Contenido (titulo) -->
<div class="content-wrapper">
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-12">
            <h1 class="m-0">Creación de un nuevo rol</h1>
            </div>
        </div>
    </div>
</div>
<!-- Main content -->
    <div class="content">
        <div class="card card-primary col-sm-8">
            <div class="card-header">
                <h3 h3 class="card-title">Datos de el nuevo rol</h3>
            </div>
            <form action="../app/controllers/roles/create_roles_controller.php" method="post">
                <div class="card-body">
                    <div class="form-group">
                        <label for="nombre">Nombre</label>
                        <input type="text" class="form-control" name="nombre" placeholder="Ingresar nombre del rol" required>
                    </div>
                <div class="form-group">
                    <label for="restricciones">Restricciones</label>
                    <input type="text" class="form-control" name="restricciones" placeholder="Ingresar restricciones" required>
                </div>
                <div class="card-footer">
                    <a href="<?php echo $URL?>paginas_roles/roles.php" class="btn btn-secondary" id="">Cancelar</a>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>

<?php INCLUDE('../layout/footer.php'); ?>