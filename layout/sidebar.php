  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <a href="<?php echo $URL;  ?>index.php" class="brand-link">
      <img src="<?php echo $URL; ?>public/images/pngwing.com.png" alt="Sistema de ventas Logo" class="brand-image img-circle" style="opacity: .8">
      <span class="brand-text font-weight-light">Sistema de ventas</span>
    </a>

    <div class="sidebar">
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="info">
          <a href="#" class="d-block"><?php echo ucfirst(strtolower($nombre_tabla))." ".ucfirst(strtolower($apellido_tabla)); ?></a>
        </div>
      </div>

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
                <a href="<?php echo $URL;  ?>paginas_usuarios/usuarios.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Lista de Usuarios</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo $URL;  ?>paginas_usuarios/create_user.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Creacion de usuarios</p>
                </a>
              </li>
            </ul>
          </li>
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
                <a href="<?php echo $URL;  ?>paginas_roles/roles.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Lista de Roles</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo $URL;  ?>paginas_roles/create_roles.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Creacion de rol</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-tags"></i>
              <p>
                Productos
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?php echo $URL;  ?>paginas_almacen/productos.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Lista de Productos</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Agregar Producto</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-layer-group"></i>
              <p>
                Categorías
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?php echo $URL;  ?>paginas_categorias/categorias.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Lista de Categorías</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Creacion de Categorías</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="<?php echo $URL;  ?>app/controllers/login/cerrar_sesion.php" class="nav-link" style= "background-color: #a71002;">
              <i class="nav-icon fas fa-door-closed"></i>
              <p>
                Cerrar Sesion
              </p>
            </a>
          </li>

        </ul>
      </nav>
    </div>
  </aside>