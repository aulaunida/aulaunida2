<?php

include ('../../../app/config.php');

$id_materia = $_POST['id_materia'];


$sentencia = $pdo->prepare("DELETE FROM materias where id_materia=:id_materia ");

$sentencia->bindParam('id_materia',$id_materia);


if($sentencia->execute()){
    session_start();
    $_SESSION['mensaje'] = "Se eliminó la materia de manera correcta en la base de datos";
    $_SESSION['icono'] = "success";
    $_SESSION['timer'] = 6000;  // Duración del mensaje en milisegundos (6 segundos)
    $_SESSION['timerProgressBar'] = true;
    $_SESSION['showCloseButton'] = true; // Agregar la cruz de cierre
    header('Location:'.APP_URL."/admin/materias");
}else{
    session_start();
    $_SESSION['mensaje'] = "Error no se pudo eliminar en la base datos, comuníquese con el administrador";
    $_SESSION['icono'] = "warning";
    $_SESSION['timer'] = 6000;  // Duración del mensaje en milisegundos (6 segundos)
    $_SESSION['timerProgressBar'] = true;
    $_SESSION['showCloseButton'] = true; // Agregar la cruz de cierre
    ?><script>window.history.back();</script><?php
}
