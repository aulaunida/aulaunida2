<?php

/**
 * Created by PhpStorm.
 * User: HILARIWEB
 * Date: 3/1/2024
 * Time: 15:28
 */


if ((isset($_SESSION['mensaje'])) && (isset($_SESSION['icono']))) {
    $mensaje = $_SESSION['mensaje'];
    $icono = $_SESSION['icono'];
?>
    <script>
        Swal.fire({
            position: "center",
            icon: "<?= $icono; ?>",
            title: "<?= $mensaje; ?>",
            showConfirmButton: false,
            timer: 6000, // Duración del mensaje en milisegundos (6 segundos)
            timerProgressBar: true, // Barra de progreso visual del tiempo
            showCloseButton: true // Mostrar la cruz de cierre
        });
    </script>
<?php
    unset($_SESSION['mensaje']);
    unset($_SESSION['icono']);
}
?>