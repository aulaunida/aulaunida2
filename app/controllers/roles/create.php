<?php
/**
 * Created by PhpStorm.
 * User: HILARIWEB
 * Date: 3/1/2024
 * Time: 16:58
 */

include ('../../../app/config.php');

$nombre_rol = $_POST['nombre_rol'];
$nombre_rol = mb_strtoupper($nombre_rol,'UTF-8');

if($nombre_rol == ""){
    session_start();
    $_SESSION['mensaje'] = "Llene el campo nombre del rol";
    $_SESSION['icono'] = "error";
    header('Location:'.APP_URL."/admin/roles/create.php");
}else{
    $sentencia = $pdo->prepare("INSERT INTO roles 
       ( nombre_rol, fyh_creacion, estado) 
VALUES (:nombre_rol,:fyh_creacion,:estado) ");

    $sentencia->bindParam('nombre_rol',$nombre_rol);
    $sentencia->bindParam('fyh_creacion',$fechaHora);
    $sentencia->bindParam('estado',$estado_de_registro);

    try{
        if($sentencia->execute()){
            session_start();
            $_SESSION['mensaje'] = "Se registro el rol de manera correcta en la base de datos";
            $_SESSION['icono'] = "success";
            $_SESSION['timer'] = 6000;  // Duración del mensaje en milisegundos (6 segundos)
            $_SESSION['timerProgressBar'] = true;
            $_SESSION['showCloseButton'] = true; // Agregar la cruz de cierre
            header('Location:'.APP_URL."/admin/roles");
        }else{
            session_start();
            $_SESSION['mensaje'] = "Error no se pudo registrar en la base datos, comuniquese con el administrador";
            $_SESSION['icono'] = "warning";
            $_SESSION['timer'] = 6000;  // Duración del mensaje en milisegundos (6 segundos)
            $_SESSION['timerProgressBar'] = true;
            $_SESSION['showCloseButton'] = true; // Agregar la cruz de cierre
            header('Location:'.APP_URL."/admin/roles/create.php");
        }
    }catch (Exception $exception){
        session_start();
            $_SESSION['mensaje'] = "Lo sentimos, el rol que estás intentando crear ya existe en nuestra base de datos. Por favor, elige otro nombre o revisa si ya está registrado";
            $_SESSION['icono'] = "warning"; // Cambio de icono a error para indicar que los datos son incorrectos
            $_SESSION['timer'] = 6000;  // Duración del mensaje en milisegundos (6 segundos)
            $_SESSION['timerProgressBar'] = true;
            $_SESSION['showCloseButton'] = true; // Agregar la cruz de cierre
        header('Location:'.APP_URL."/admin/roles/create.php");
    }



}


