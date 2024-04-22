<?php
INCLUDE ('../APP/config.php');
INCLUDE ('../app/alerts.php');

session_start();

if(isset($_SESSION['sesion_email'])) {
  header('Location:' .$URL. 'index.php');
}else{
  
}
INCLUDE ('../APP/alerts.php'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Log in</title>
  <script src='//production-assets.codepen.io/assets/editor/live/console_runner-079c09a0e3b9ff743e39ee2d5637b9216b3545af0de366d4b9aad9dc87e26bfd.js'></script><script src='//production-assets.codepen.io/assets/editor/live/events_runner-73716630c22bbc8cff4bd0f07b135f00a0bdc5d14629260c3ec49e5606f98fdd.js'></script><script src='//production-assets.codepen.io/assets/editor/live/css_live_reload_init-2c0dc5167d60a5af3ee189d570b1835129687ea2a61bee3513dee3a50c115a77.js'></script><meta charset='UTF-8'><meta name="robots" content="noindex"><link rel="shortcut icon" type="image/x-icon" href="//production-assets.codepen.io/assets/favicon/favicon-8ea04875e70c4b0bb41da869e81236e54394d63638a1ef12fa558a4a835f1164.ico" /><link rel="mask-icon" type="" href="//production-assets.codepen.io/assets/favicon/logo-pin-f2d2b6d2c61838f7e76325261b7195c27224080bc099486ddd6dccb469b8e8e6.svg" color="#111" /><link rel="canonical" href="https://codepen.io/frytyler/pen/EGdtg" />
  <link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css'>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/prefixfree/1.0.7/prefixfree.min.js'></script>
  <link rel="stylesheet" href="../public/css/login.css">
  <link rel="stylesheet" href="../public/css/register.css">
</head>
<body>
  <div class="login">
    <h1>Login</h1>            
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
                <div class="check-terms">
                    <div class="custom-checkbox">
                        <input type="checkbox" id="agreeTerms" name="terms" value="agree" required>
                        <label for="agreeTerms">
                            Acepto los terminos y condiciones
                        </label>
                    </div>
                    <button id="mostrarModal" type="button"  data-bs-toggle="modal" data-bs-target="#exampleModal">Ver aquí
                </button>
                </div>
            </div>
            <div class="col-12 mt-3 mb-3">
                <button type="submit" class="btn btn-primary btn-block btn-large btn-register">Registrar</button>
            </div>
            </div>
        </form>
      <div class="col-12 text-end">
                <a href="./login.php" class="text-center mt-3 ">Ya tengo una cuenta</a>
            </div>
            </div>
        </div>
    </div>
    <?php $modalVisible = false ?>
    <div id="containerModal" class="containerModal <?php echo $modalVisible ? 'visible' : 'hidden' ?>">
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel"><strong>Términos y Condiciones de Uso</strong></h5>
                        </div>
                        <div class="modal-body">
                            <strong>Bienvenido a Sistema de Ventas. </strong><br><br>
                            Estos términos y condiciones rigen el uso de este sitio web. Al acceder y utilizar este sitio web, aceptas cumplir con estos términos y condiciones en su totalidad. Si no estás de acuerdo con alguno de estos términos, por favor, no utilices este sitio web.<br><br>
                            <strong>Uso del Sitio</strong>
                            Este sitio web ha sido creado con el propósito de proporcionar un entorno de práctica y aprendizaje. No está destinado para fines comerciales, de venta o lucro. El contenido proporcionado en este sitio es exclusivamente con fines educativos y de práctica.<br><br>
                            <strong>Propiedad Intelectual</strong>
                            Todo el contenido, incluyendo pero no limitado a texto, gráficos, logotipos, imágenes, audio y video, son propiedad exclusiva de Gartner Maximiliano Ezequiel, programador Full Stack con experiencia en tecnologías MERN, SQL y PHP, a menos que se indique lo contrario. No se permite la reproducción, distribución o modificación del contenido sin el consentimiento explícito del autor.<br><br>
                            <strong>Limitación de Responsabilidad</strong>
                            El autor y creador de este sitio web, Gartner Maximiliano Ezequiel, no será responsable de ningún daño directo, indirecto, incidental, especial o consecuente que surja del uso o la imposibilidad de utilizar este sitio web.<br><br>
                            <strong>Modificaciones de los Términos y Condiciones</strong>
                            Gartner Maximiliano Ezequiel se reserva el derecho de modificar estos términos y condiciones en cualquier momento. Se recomienda revisar periódicamente estos términos para estar al tanto de cualquier cambio. El uso continuado de este sitio web después de la publicación de cambios constituye la aceptación de dichos cambios.<br><br>
                            <strong>Legislación Aplicable</strong>
                            Estos términos y condiciones se rigen por las leyes de [país] y cualquier disputa relacionada con estos términos y condiciones estará sujeta a la jurisdicción exclusiva de los tribunales de [ciudad].
                            Al acceder y utilizar este sitio web, aceptas estos términos y condiciones en su totalidad.

                        </div>
                        <div class="modal-footer">
                            <button id="ocultarModal" class="ocultarModal" type="button" >Close</button>
                        </div>
                        </div>
                    </div>
        </div>
    </div>
    <script>
        let modal = document.getElementById('containerModal');
        let showButton = document.getElementById('mostrarModal');
        let hideButton = document.getElementById('ocultarModal');

        mostrarModal.addEventListener('click', function() {
        modal.classList.add('visible');
        modal.classList.remove('hidden');
        });

        ocultarModal.addEventListener('click', function() {
        modal.classList.add('hidden');
        modal.classList.remove('visible');
        });
    </script>
  </div>
  </body>
<script src='//production-assets.codepen.io/assets/common/stopExecutionOnTimeout-b2a7b3fe212eaa732349046d8416e00a9dec26eb7fd347590fbced3ab38af52e.js'></script>
<script >
</script>
</body></html>