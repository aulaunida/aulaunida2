<?php
/**
 * Created by PhpStorm.
 * User: HILARIWEB
 * Date: 9/1/2024
 * Time: 16:38
 */

include ('../../../app/config.php');

$gestion_id = $_POST['gestion_id'];
$nivel = $_POST['nivel'];
$turno = $_POST['turno'];

$sentencia = $pdo->prepare('INSERT INTO niveles
(gestion_id,nivel,turno, fyh_creacion, estado)
VALUES ( :gestion_id,:nivel,:turno,:fyh_creacion,:estado)');

$sentencia->bindParam(':gestion_id',$gestion_id);
$sentencia->bindParam(':nivel',$nivel);
$sentencia->bindParam(':turno',$turno);
$sentencia->bindParam('fyh_creacion',$fechaHora);
$sentencia->bindParam('estado',$estado_de_registro);

if($sentencia->execute()){
    echo 'success';
    session_start();
    $_SESSION['mensaje'] = "Ciclo lectivo registrado!";
    $_SESSION['icono'] = "success";
    $_SESSION['timer'] = 6000;  // Duración del mensaje en milisegundos (6 segundos)
    $_SESSION['timerProgressBar'] = true;
    $_SESSION['showCloseButton'] = true; // Agregar la cruz de cierre
    header('Location:'.APP_URL."/admin/niveles");
//header('Location:' .$URL.'/');
}else{
    echo 'Error al registrar ciclo lectivo a la base de datos';
    session_start();
    $_SESSION['mensaje'] = "Error al registrar ciclo lectivo, comuníquese con el administrador";
    $_SESSION['icono'] = "warning";
    $_SESSION['timer'] = 6000;  // Duración del mensaje en milisegundos (6 segundos)
    $_SESSION['timerProgressBar'] = true;
    $_SESSION['showCloseButton'] = true; // Agregar la cruz de cierre
    ?><script>window.history.back();</script><?php
}