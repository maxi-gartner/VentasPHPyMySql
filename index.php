<?php
INCLUDE ('APP/config.php');
INCLUDE ('layout/sesion.php');
INCLUDE ('layout/header.php');
INCLUDE ('layout/nav.php');
INCLUDE ('layout/sidebar.php');
INCLUDE ('APP/alerts.php');


?>
  <link rel="stylesheet" href="./public/css/index.css">

  <!-- Contenido (titulo) -->
  <div class="content-wrapper">
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
        </div>
      </div>
    </div>
    <!-- Main content -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
<div class="container">
    <div class="d-flex flex-wrap justify-content-evenly">
        <div class="col-md-4 col-xl-3">
            <div class="card bg-c-teal order-card" style="min-height: 180px; width: 100%;">
                <div class="card-block">
                  <div class="d-flex justify-content-between">
                    <i class="fa fa-cart-plus"></i>
                    <h6 class="text-lg">Realizar venta</h6>
                  </div>
                  <div class="mt-2">
                    <p class="m-b-0">Ingreso Bruto<span class="f-right">****</span></p>
                    <p class="m-b-0">Total de Venta<span class="f-right">****</span></p>
                  </div>
                </div>
            </div>
        </div>
        <div class="col-md-4 col-xl-3">
            <div class="card bg-c-lime order-card" style="min-height: 180px; width: 100%;">
                <div class="card-block">
                  <div class="d-flex justify-content-between">
                    <i class="bi bi-shop-window"></i>
                    <h6 class="text-lg">Inventario</h6>
                  </div>
                  <div class="mt-2">
                    <p class="m-b-0">Ingreso Bruto<span class="f-right">****</span></p>
                    <p class="m-b-0">Total de Venta<span class="f-right">****</span></p>
                  </div>
                </div>
              </div>
          </div>
          <div class="col-md-4 col-xl-3">
            <div class="card bg-c-indigo order-card" style="min-height: 180px; width: 100%;">
                <div class="card-block">
                  <div class="d-flex justify-content-between">
                    <i class="bi bi-bookmark-check-fill"></i>
                    <h6 class="text-lg">Órds. preparadas</h6>
                  </div>
                  <div class="mt-2">
                    <p class="m-b-0">Ingreso Bruto<span class="f-right">****</span></p>
                    <p class="m-b-0">Total de Venta<span class="f-right">****</span></p>
                  </div>
                </div>
              </div>
          </div>
          <div class="col-md-4 col-xl-3">
            <div class="card bg-c-cyan order-card" style="min-height: 180px; width: 100%;">
                <div class="card-block">
                  <div class="d-flex justify-content-between">
                    <i class="bi bi-bookmark-check"></i>
                    <h6 class="text-lg">Órds. Pendientes</h6>
                  </div>
                  <div class="mt-2">
                    <p class="m-b-0">Ingreso Bruto<span class="f-right">****</span></p>
                    <p class="m-b-0">Total de Venta<span class="f-right">****</span></p>
                  </div>
                </div>
              </div>
          </div>
          <div class="col-md-4 col-xl-3">
            <div class="card bg-c-magenta order-card" style="min-height: 180px; width: 100%;">
                <div class="card-block">
                  <div class="d-flex justify-content-between">
                    <i class="bi bi-people-fill"></i>
                    <h6 class="text-lg">Mis Clientes</h6>
                  </div>
                  <div class="mt-2">
                    <p class="m-b-0">Ingreso Bruto<span class="f-right">****</span></p>
                    <p class="m-b-0">Total de Venta<span class="f-right">****</span></p>
                  </div>
                </div>
              </div>
          </div>
          <div class="col-md-4 col-xl-3">
            <div class="card bg-c-amber order-card" style="min-height: 180px; width: 100%;">
                <div class="card-block">
                  <div class="d-flex justify-content-between">
                    <i class="bi bi-building"></i>
                    <h6 class="text-lg">Cuenta Corriente</h6>
                  </div>
                  <div class="mt-2">
                    <p class="m-b-0">Ingreso Bruto<span class="f-right">****</span></p>
                    <p class="m-b-0">Total de Venta<span class="f-right">****</span></p>
                  </div>
                </div>
              </div>
          </div>
          <div class="col-md-4 col-xl-3">
            <div class="card bg-c-deep-orange order-card" style="min-height: 180px; width: 100%;">
                <div class="card-block">
                  <div class="d-flex justify-content-between">
                    <i class="fas fa-box"></i>
                    <h6 class="text-lg">Caja</h6>
                  </div>
                  <div class="mt-2">
                    <p class="m-b-0">Ingreso Bruto<span class="f-right">****</span></p>
                    <p class="m-b-0">Total de Venta<span class="f-right">****</span></p>
                  </div>
                </div>
              </div>
          </div>
          <div class="col-md-4 col-xl-3">
            <div class="card bg-c-purple order-card" style="min-height: 180px; width: 100%;">
                <div class="card-block">
                  <div class="d-flex justify-content-between">
                    <i class="bi bi-bar-chart"></i>
                    <h6 class="text-lg">Graficas</h6>
                  </div>
                  <div class="mt-2">
                    <p class="m-b-0">Ingreso Bruto<span class="f-right">****</span></p>
                    <p class="m-b-0">Total de Venta<span class="f-right">****</span></p>
                  </div>
                </div>
              </div>
          </div>
          <div class="col-md-4 col-xl-3">
            <div class="card bg-c-orange order-card" style="min-height: 180px; width: 100%;">
                <div class="card-block">
                  <div class="d-flex justify-content-between">
                    <i class="bi bi-file-earmark-text"></i>
                    <h6 class="text-lg">Reportes</h6>
                  </div>
                  <div class="mt-2">
                    <p class="m-b-0">Ingreso Bruto<span class="f-right">****</span></p>
                    <p class="m-b-0">Total de Venta<span class="f-right">****</span></p>
                  </div>
                </div>
              </div>
          </div>
          <div class="col-md-4 col-xl-3">
            <div class="card bg-c-red order-card" style="min-height: 180px; width: 100%;">
                <div class="card-block">
                  <div class="d-flex justify-content-between">
                    <i class="fas fa-barcode"></i>
                    <h6 class="text-lg">Codigos</h6>
                  </div>
                  <div class="mt-2">
                    <p class="m-b-0">Ingreso Bruto<span class="f-right">****</span></p>
                    <p class="m-b-0">Total de Venta<span class="f-right">****</span></p>
                  </div>
                </div>
              </div>
          </div>
          <div class="col-md-4 col-xl-3">
            <div class="card bg-c-brown order-card" style="min-height: 180px; width: 100%;">
                <div class="card-block">
                  <div class="d-flex justify-content-between">
                    <i class="fas fa-exchange-alt"></i>
                    <h6 class="text-lg">Movimientos</h6>
                  </div>
                  <div class="mt-2">
                    <p class="m-b-0">Ingreso Bruto<span class="f-right">****</span></p>
                    <p class="m-b-0">Total de Venta<span class="f-right">****</span></p>
                  </div>
                </div>
              </div>
          </div>
          <div class="col-md-4 col-xl-3">
            <div class="card bg-c-olive order-card" style="min-height: 180px; width: 100%;">
                <div class="card-block">
                  <div class="d-flex justify-content-between">
                    <i class="fas fa-cog"></i>
                    <h6 class="text-lg">Ajustes</h6>
                  </div>
                  <div class="mt-2">
                    <p class="m-b-0">Ingreso Bruto<span class="f-right">****</span></p>
                    <p class="m-b-0">Total de Venta<span class="f-right">****</span></p>
                  </div>
                </div>
              </div>
          </div>
    </div>
  </div>
  </div>

<?php 

INCLUDE ('APP/alerts.php');
INCLUDE('layout/footer.php'); ?>