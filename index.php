<?php
INCLUDE ('APP/config.php');
INCLUDE ('layout/sesion.php');
INCLUDE ('layout/header.php');
INCLUDE ('layout/nav.php');
INCLUDE ('layout/sidebar.php');
INCLUDE ('APP/alerts.php');


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
            <div class="row">
              <div class="col-lg-3 col-6">

              <div class="small-box bg-info">
              <div class="inner">
              <h3>150</h3>
              <p>New Orders</p>
              </div>
              <div class="icon">
              <i class="ion ion-bag"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
              </div>
              </div>

              <div class="col-lg-3 col-6">

              <div class="small-box bg-success">
              <div class="inner">
              <h3>53<sup style="font-size: 20px">%</sup></h3>
              <p>Bounce Rate</p>
              </div>
              <div class="icon">
              <i class="ion ion-stats-bars"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
              </div>
              </div>

              <div class="col-lg-3 col-6">

              <div class="small-box bg-warning">
              <div class="inner">
              <h3>44</h3>
              <p>User Registrations</p>
              </div>
              <div class="icon">
              <i class="ion ion-person-add"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
              </div>
              </div>

              <div class="col-lg-3 col-6">

              <div class="small-box bg-danger">
              <div class="inner">
              <h3>65</h3>
              <p>Unique Visitors</p>
              </div>
              <div class="icon">
              <i class="ion ion-pie-graph"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
              </div>
              </div>
              </div>
    </div>
  </div>

<?php 

INCLUDE ('APP/alerts.php');
INCLUDE('layout/footer.php'); ?>