  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="<?php echo $URL;  ?>/index.php" class="brand-link">
      <img src="<?php echo $URL; ?>public/images/pngwing.com.png" alt="Sistema de ventas Logo" class="brand-image img-circle" style="opacity: .8">
      <span class="brand-text font-weight-light">Sistema de ventas</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="<?php echo $URL ?>public/templates/AdminLTE-3.2.0/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block"><?php echo ucfirst(strtolower($nombre_tabla))." ".ucfirst(strtolower($apellido_tabla)); ?></a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <li class="nav-item">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-users"></i>
              <p>
                Usuarios
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?php echo $URL;  ?>/paginas_usuarios/usuarios.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Lista de Usuarios</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo $URL;  ?>/paginas_usuarios/create_user.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Creacion de usuarios</p>
                </a>
              </li>
            </ul>
          </li>
          <!-- roles -->
          <li class="nav-item">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-address-book"></i>
              <p>
                Roles
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?php echo $URL;  ?>/paginas_roles/roles.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Lista de Roles</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo $URL;  ?>/paginas_roles/create_roles.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Creacion de rol</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="<?php echo $URL;  ?>/app/controllers/login/cerrar_sesion.php" class="nav-link" style= "background-color: #a71002;">
              <i class="nav-icon fas fa-door-closed"></i>
              <p>
                Cerrar Sesion
              </p>
            </a>
          </li>

        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
  </aside>