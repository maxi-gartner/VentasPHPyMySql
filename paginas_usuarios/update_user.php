<?php
INCLUDE ('../APP/config.php');
INCLUDE ('../layout/sesion.php');
INCLUDE ('../layout/header.php');
INCLUDE ('../layout/nav.php');
INCLUDE ('../layout/sidebar.php');
INCLUDE ('../app/alerts.php');
INCLUDE ('../app/controllers/usuarios/update_user_read.php');

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
    <div class="card card-warning col-sm-8">
    <div class="card-header">
        <h3 h3 class="card-title">Editar usuario</h3>
    </div>
    <form action="../app/controllers/usuarios/update_user_controller.php" method="post">
        <div class="card-body">
        <input type="hidden" name="id_usuario" value="<?php echo $id_usuario_get; ?>">
        <div class="form-group">
            <label for="exampleInputEmail1">Nombres</label>
            <input type="text" class="form-control" id="nombres" name="nombres" value="<?php echo $nombre; ?>">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Apellido</label>
            <input type="text" class="form-control" id="apellido" name="apellido" value="<?php echo $apellido; ?>">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Rol</label>
            <input type="text" class="form-control" id="id_rol" name="id_rol" value="<?php echo $id_rol; ?>">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Correo</label>
            <input type="email" class="form-control" id="email" name="email" value="<?php echo $email; ?>">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Contraseña</label>
            <input type="password" class="form-control" id="password_user" name="password_user">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Repita la contraseña</label>
            <input type="password" class="form-control" id="password_repeat" name="password_repeat">
        </div>
        <!-- <div class="form-group">
            <label for="exampleInputFile">Foto perfil</label>
        <div class="input-group">
        <div class="custom-file">
            <input type="file" class="custom-file-input" id="exampleInputFile">
            <label class="custom-file-label" for="exampleInputFile">Choose file</label>
        </div>
        <div class="input-group-append">
            <span class="input-group-text">Guardar</span>
        </div> -->
        </div>
        </div>
        </div>

        <div class="card-footer">
            <a href="../paginas_usuarios/usuarios.php" class="btn btn-secondary" id="">Cancelar</a>
            <button type="submit" class="btn btn-warning">Actualizar</button>
        </div>
    </form>
    </div>
    </div>
</div>

<?php INCLUDE('../layout/footer.php');?>