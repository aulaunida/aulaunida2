<?php
/**
 * Created by PhpStorm.
 * User: HILARIWEB
 * Date: 8/1/2024
 * Time: 20:35
 */
include ('../../../../app/config.php');

$id_config_institucion = $_POST['id_config_institucion'];


$sentencia = $pdo->prepare("DELETE FROM configuracion_instituciones where id_config_institucion=:id_config_institucion ");

$sentencia->bindParam('id_config_institucion',$id_config_institucion);


if($sentencia->execute()){
    session_start();
    $_SESSION['mensaje'] = "Se eliminaron los datos de la institución de manera correcta en la base de datos";
    $_SESSION['icono'] = "success";
    $_SESSION['timer'] = 6000;  // Duración del mensaje en milisegundos (6 segundos)
    $_SESSION['timerProgressBar'] = true;
    $_SESSION['showCloseButton'] = true; // Agregar la cruz de cierre
    header('Location:'.APP_URL."/admin/configuraciones/institucion");
}else{
    session_start();
    $_SESSION['mensaje'] = "Error no se pudo eliminar en la base datos, comuníquese con el administrador";
    $_SESSION['icono'] = "warning";
    $_SESSION['timer'] = 6000;  // Duración del mensaje en milisegundos (6 segundos)
    $_SESSION['timerProgressBar'] = true;
    $_SESSION['showCloseButton'] = true; // Agregar la cruz de cierre
    ?><script>window.history.back();</script><?php
}

