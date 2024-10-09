<?php

include ('../../../app/config.php');

$id_asignacion = $_POST['id_asignacion'];
$id_nivel = $_POST['id_nivel'];
$id_grado = $_POST['id_grado'];
$id_materia = $_POST['id_materia'];

/////////// ACTUALIZAR A LA TABLA ASIGNACIONES

$sentencia = $pdo->prepare('UPDATE asignaciones
SET nivel_id=:nivel_id,
grado_id=:grado_id,
materia_id=:materia_id, 
fyh_actualizacion=:fyh_actualizacion
WHERE id_asignacion=:id_asignacion');

$sentencia->bindParam(':nivel_id',$id_nivel);
$sentencia->bindParam(':grado_id',$id_grado);
$sentencia->bindParam(':materia_id',$id_materia);
$sentencia->bindParam('fyh_actualizacion',$fechaHora);
$sentencia->bindParam('id_asignacion',$id_asignacion);


if($sentencia->execute()){
echo 'success';
session_start();
         $_SESSION['mensaje'] = "Se actualizó correctamente la asignación de la materia";
         $_SESSION['icono'] = "success";
         $_SESSION['timer'] = 3000;  // Duración del mensaje en milisegundos 
         $_SESSION['timerProgressBar'] = true;
         $_SESSION['showCloseButton'] = true; // Agregar la cruz de cierre
         header('Location:'.APP_URL."/admin/docentes/asignacion.php");
}else{
echo 'error al registrar a la base de datos';
session_start();
$_SESSION['mensaje'] = "Error al actualizar la asignación de la materia. Comunicarse con el administrador";
$_SESSION['icono'] = "error";
$_SESSION['timer'] = 3000;  // Duración del mensaje en milisegundos 
$_SESSION['timerProgressBar'] = true;
$_SESSION['showCloseButton'] = true; // Agregar la cruz de cierre
?><script>window.history.back();</script><?php
}