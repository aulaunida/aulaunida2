<?php
/**
 * Created by PhpStorm.
 * User: HILARIWEB
 * Date: 28/12/2023
 * Time: 19:57
 */

include ('../app/config.php');

$email = $_POST['email'];
$password = $_POST['password'];

$sql = "SELECT * FROM usuarios WHERE email = :email AND estado = '1'";
$query = $pdo->prepare($sql);
$query->bindParam(':email', $email);
$query->execute();

$usuarios = $query->fetchAll(PDO::FETCH_ASSOC);

$contador = 0;
$password_tabla = '';

foreach ($usuarios as $usuario){
    $password_tabla = $usuario['password'];
    $contador++;
}

if (($contador > 0) && (password_verify($password, $password_tabla))) {
    echo "los datos son correctos";
    session_start();
    $_SESSION['mensaje'] = "Bienvenido a Aula Unida®";
    $_SESSION['icono'] = "success";
    $_SESSION['timer'] = 4000;  // Duración del mensaje en milisegundos (4 segundos)
    $_SESSION['timerProgressBar'] = true;
    $_SESSION['showCloseButton'] = true; // Agregar la cruz de cierre
    $_SESSION['sesion_email'] = $email;

    header('Location: '.APP_URL."/admin");
   
} else {
    echo "los datos son incorrectos";
    session_start();
    $_SESSION['mensaje'] = "Dirección de email o contraseña incorrectas. Por favor, vuelve a intentarlo";
    $_SESSION['icono'] = "warning"; // Cambio de icono a error para indicar que los datos son incorrectos
    $_SESSION['timer'] = 4000;  // Duración del mensaje en milisegundos (4 segundos)
    $_SESSION['timerProgressBar'] = true;
    $_SESSION['showCloseButton'] = false; // Agregar la cruz de cierre
   
    header('Location: '.APP_URL."/login");
   
}

