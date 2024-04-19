<?php
INCLUDE ('../APP/config.php');
INCLUDE ('../app/alerts.php');

session_start();

if(isset($_SESSION['sesion_email'])) {
  header('Location:' .$URL. 'index.php');
}else{
  
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Log in</title>
  <link rel="stylesheet" href="./output.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <link rel="stylesheet" href="../public/templates/AdminLTE-3.2.0/plugins/fontawesome-free/css/all.min.css">
  <link rel="stylesheet" href="../public/templates/AdminLTE-3.2.0/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <link rel="stylesheet" href="../public/templates/AdminLTE-3.2.0/dist/css/adminlte.min.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body class="hold-transition login-page">

<?php INCLUDE ('../APP/alerts.php'); ?>

<body class="hold-transition register-page">
    <div class="register-box">
        <div class="card card-outline card-primary">
            <div class="card-header text-center">
            <a href="../index.php" style="text-decoration: none;" class="h1"><b>Sistema de Ventas</b></a>
            </div>
            <div class="card-body">
            <p class="login-box-msg">Registro</p>

            <form action="../app/controllers/login/register_controller.php" method="post">
                <div class="input-group mb-3">
                <input type="text" class="form-control" id="nombres" name="nombres" placeholder="Nombre" required>
                <div class="input-group-append">
                    <div class="input-group-text">
                    <span class="fas fa-user"></span>
                    </div>
                </div>
                </div>
                <div class="input-group mb-3">
                <input type="text" class="form-control" id="apellido" name="apellido" placeholder="Apellido" required>
                <div class="input-group-append">
                    <div class="input-group-text">
                    <span class="fas fa-user"></span>
                    </div>
                </div>
                </div>
                <div class="input-group mb-3">
                <input type="email" class="form-control" id="email" name="email" placeholder="Email" required>
                <div class="input-group-append">
                    <div class="input-group-text">
                    <span class="fas fa-envelope"></span>
                    </div>
                </div>
                </div>
                <div class="input-group mb-3">
                <input type="password" class="form-control" id="password_user" name="password_user" placeholder="Contraseña" required>
                <div class="input-group-append">
                    <div class="input-group-text">
                    <span class="fas fa-lock"></span>
                    </div>
                </div>
                </div>
                <div class="input-group mb-3">
                <input type="password" class="form-control" id="password_repeat" name="password_repeat" placeholder="Verificar contraseña" required>
                <div class="input-group-append">
                    <div class="input-group-text">
                    <span class="fas fa-lock"></span>
                    </div>
                </div>
                </div>
                <div class="row">
                <div class="col-12">
                    <div class="icheck-primary">
                        <input type="checkbox" id="agreeTerms" name="terms" value="agree" required>
                        <label for="agreeTerms">
                            Acepto los terminos y condiciones
                        </label>
                    <button type="button" class="btn-link" data-bs-toggle="modal" data-bs-target="#exampleModal">Ver Terminos y Condiciones
                    </button>
                    </div>
                </div>
                <div class="col-12 mt-3 mb-3">
                    <button type="submit" class="btn btn-primary btn-block">Registrar</button>
                </div>
                </div>
            </form>
            <div class="col-12 text-end">
                <a href="login.html" class="text-center mt-3 ">Ya tengo una cuenta</a>
            </div>
            </div>
        </div>
    </div>
    <!-- Modal para los terminos -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel"><strong>Términos y Condiciones de Uso</strong></h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <strong>Bienvenido a Sistema de Ventas. </strong><br>
                            Estos términos y condiciones rigen el uso de este sitio web. Al acceder y utilizar este sitio web, aceptas cumplir con estos términos y condiciones en su totalidad. Si no estás de acuerdo con alguno de estos términos, por favor, no utilices este sitio web.<br>
                            <strong>Uso del Sitio</strong>
                            Este sitio web ha sido creado con el propósito de proporcionar un entorno de práctica y aprendizaje. No está destinado para fines comerciales, de venta o lucro. El contenido proporcionado en este sitio es exclusivamente con fines educativos y de práctica.<br>
                            <strong>Propiedad Intelectual</strong>
                            Todo el contenido, incluyendo pero no limitado a texto, gráficos, logotipos, imágenes, audio y video, son propiedad exclusiva de Gartner Maximiliano Ezequiel, programador Full Stack con experiencia en tecnologías MERN, SQL y PHP, a menos que se indique lo contrario. No se permite la reproducción, distribución o modificación del contenido sin el consentimiento explícito del autor.<br>
                            <strong>Limitación de Responsabilidad</strong>
                            El autor y creador de este sitio web, Gartner Maximiliano Ezequiel, no será responsable de ningún daño directo, indirecto, incidental, especial o consecuente que surja del uso o la imposibilidad de utilizar este sitio web.<br>
                            <strong>Modificaciones de los Términos y Condiciones</strong>
                            Gartner Maximiliano Ezequiel se reserva el derecho de modificar estos términos y condiciones en cualquier momento. Se recomienda revisar periódicamente estos términos para estar al tanto de cualquier cambio. El uso continuado de este sitio web después de la publicación de cambios constituye la aceptación de dichos cambios.<br>
                            <strong>Legislación Aplicable</strong>
                            Estos términos y condiciones se rigen por las leyes de [país] y cualquier disputa relacionada con estos términos y condiciones estará sujeta a la jurisdicción exclusiva de los tribunales de [ciudad].
                            Al acceder y utilizar este sitio web, aceptas estos términos y condiciones en su totalidad.

                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        </div>
                        </div>
                    </div>
                    </div>
</script>
    <script src="../../plugins/jquery/jquery.min.js"></script>
    <script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="../../dist/js/adminlte.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    </body>
</html>
