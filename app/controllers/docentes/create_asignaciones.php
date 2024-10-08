<?php

include ('../../../app/config.php');

$id_docente = $_POST['id_docente'];
$id_nivel = $_POST['id_nivel'];
$id_grado = $_POST['id_grado'];
$id_materia = $_POST['id_materia'];

$sentencia = $pdo->prepare('INSERT INTO asignaciones
        (docente_id,nivel_id,grado_id,materia_id,fyh_creacion, estado)
VALUES ( :docente_id,:nivel_id,:grado_id,:materia_id,:fyh_creacion,:estado)');


$sentencia->bindParam(':docente_id',$id_docente);
$sentencia->bindParam(':nivel_id',$id_nivel);
$sentencia->bindParam(':grado_id',$id_grado);
$sentencia->bindParam(':materia_id',$id_materia);
$sentencia->bindParam('fyh_creacion',$fechaHora);
$sentencia->bindParam('estado',$estado_de_registro);

if($sentencia->execute()){
    echo 'success';
    session_start();
    $_SESSION['mensaje'] = "Materia asignada correctamente.";
    $_SESSION['icono'] = "success";
    $_SESSION['timer'] = 6000;  // Duración del mensaje en milisegundos (6 segundos)
    $_SESSION['timerProgressBar'] = true;
    $_SESSION['showCloseButton'] = true; // Agregar la cruz de cierre
    header('Location:'.APP_URL."/admin/docentes/asignacion.php");
//header('Location:' .$URL.'/');
}else{
    echo 'Error al asignar la materia';
    session_start();
    $_SESSION['mensaje'] = "Error al registrar materia en la base datos, comuníquese con el administrador";
    $_SESSION['icono'] = "warning";
    $_SESSION['timer'] = 6000;  // Duración del mensaje en milisegundos (6 segundos)
    $_SESSION['timerProgressBar'] = true;
    $_SESSION['showCloseButton'] = true; // Agregar la cruz de cierre
    ?><script>window.history.back();</script><?php
}