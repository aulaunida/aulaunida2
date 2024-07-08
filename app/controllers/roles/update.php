<?php
/**
 * Created by PhpStorm.
 * User: HILARIWEB
 * Date: 4/1/2024
 * Time: 15:50
 */
include ('../../../app/config.php');

$id_rol = $_POST['id_rol'];
$nombre_rol = $_POST['nombre_rol'];
$nombre_rol = mb_strtoupper($nombre_rol,'UTF-8');

if($nombre_rol == ""){
    session_start();
    $_SESSION['mensaje'] = "Debe completar el campo con el nuevo nombre";
    $_SESSION['icono'] = "warning";
    $_SESSION['timer'] = 6000;  // Duración del mensaje en milisegundos (6 segundos)
    $_SESSION['timerProgressBar'] = true;
    $_SESSION['showCloseButton'] = true; // Agregar la cruz de cierre
    header('Location:'.APP_URL."/admin/roles/edit.php?id=".$id_rol);
}else{
    $sentencia = $pdo->prepare("UPDATE roles 
    SET nombre_rol=:nombre_rol,
        fyh_actualizacion=:fyh_actualizacion
  WHERE id_rol=:id_rol ");

    $sentencia->bindParam('nombre_rol',$nombre_rol);
    $sentencia->bindParam('fyh_actualizacion',$fechaHora);
    $sentencia->bindParam('id_rol',$id_rol);

    try{
        if($sentencia->execute()){
            session_start();
            $_SESSION['mensaje'] = "Se actualizó el rol de manera correcta en la base de datos";
            $_SESSION['icono'] = "success";
            $_SESSION['timer'] = 6000;  // Duración del mensaje en milisegundos (6 segundos)
            $_SESSION['timerProgressBar'] = true;
            $_SESSION['showCloseButton'] = true; // Agregar la cruz de cierre
            header('Location:'.APP_URL."/admin/roles");
        }else{
            session_start();
            $_SESSION['mensaje'] = "Error no se pudo actualizar en la base datos, comuniquese con el administrador";
            $_SESSION['icono'] = "warning";
            $_SESSION['timer'] = 6000;  // Duración del mensaje en milisegundos (6 segundos)
            $_SESSION['timerProgressBar'] = true;
            $_SESSION['showCloseButton'] = true; // Agregar la cruz de cierre
            header('Location:'.APP_URL."/admin/roles/edit.php?id=".$id_rol);
        }
    }catch (Exception $exception){
        session_start();
    $_SESSION['mensaje'] = "Lo sentimos, el rol que estás intentando crear ya existe en nuestra base de datos. Por favor, elige otro nombre para el rol o revisa si ya está registrado";
    $_SESSION['icono'] = "warning"; // Cambio de icono a error para indicar que los datos son incorrectos
    $_SESSION['timer'] = 6000;  // Duración del mensaje en milisegundos (6 segundos)
    $_SESSION['timerProgressBar'] = true;
    $_SESSION['showCloseButton'] = true; // Agregar la cruz de cierre

        header('Location:'.APP_URL."/admin/roles/edit.php?id=".$id_rol);
    }



}


