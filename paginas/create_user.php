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
          <h1 class="m-0">Starter Page</h1>
        </div>
      </div>
    </div>
  </div>
  <!-- Main content -->
  <div class="content">
    <div class="card card-primary col-sm-8">
      <div class="card-header">
        <h3 h3 class="card-title">Quick Example</h3>
      </div>
      <form action="../app/controllers/usuarios/create.php" method="post">
        <div class="card-body">
          <div class="form-group">
            <label for="exampleInputEmail1">Nombres</label>
            <input type="text" class="form-control" id="nombres" name="nombres" placeholder="Ingresar nombres">
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Apellido</label>
            <input type="text" class="form-control" id="apellido" name="apellido" placeholder="Ingresar apellido">
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Correo</label>
            <input type="email" class="form-control" id="email" name="email" placeholder="Ingresar email">
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
            <a href="<?php echo $URL?>paginas/usuarios.php" class="btn btn-secondary" id="">Cancelar</a>
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
      </form>
      </div>
    </div>
  </div>

<?php INCLUDE('../layout/footer.php'); ?>