<?php
if(isset($_SESSION['mensaje_error'])) {
    $respuesta = $_SESSION['mensaje_error']; 
        ?>
        <script>
            Swal.fire({
            position: "top-end",
            icon: "error",
            text: '<?php echo $respuesta ?>',
            timer: 1000
            });
        </script>
        <?php
    }
    unset($_SESSION['mensaje_error']);

    if(isset($_SESSION['mensaje_success'])) {
        $respuesta_creacion = $_SESSION['mensaje_success']; 
        ?>
        <script>
            Swal.fire({
            position: "top-end",
            icon: "success",
            title: '<?php echo $respuesta_creacion ?>',
            showConfirmButton: false,
            timer: 1500
            });
        </script>
        <?php
    }
    unset($_SESSION['mensaje_success']);


    if(isset($_SESSION['login_success'])) {
        $respuesta_creacion = $_SESSION['login_success']; 
        ?>
        <script>
            const Toast = Swal.mixin({
                toast: true,
                position: "top-end",
                showConfirmButton: false,
                text: '<?php echo $respuesta_creacion ?>',
                timer: 3000,
                timerProgressBar: true,
                didOpen: (toast) => {
                    toast.onmouseenter = Swal.stopTimer;
                    toast.onmouseleave = Swal.resumeTimer;
                }
                });
                Toast.fire({
                icon: "success",
                title: "Ingreso correcto"
                });
        </script>
        <?php
    }
    unset($_SESSION['login_success']);

    //alerta borrar datos

    if(isset($_SESSION['alert_delete'])) {
        $respuesta_creacion = $_SESSION['alert_delete']; 
        ?>
        <script>
            Swal.fire({
                title: "¿Estás seguro de borrar este registro?",
                text: "<?php echo $respuesta_creacion ?>",
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: "#3085d6",
                cancelButtonColor: "#d33",
                confirmButtonText: "Si, borrar",
                }).then((result) => {
                if (result.isConfirmed) {
                    
                }
                });
        </script>
        <?php
    }
    unset($_SESSION['alert_delete']);