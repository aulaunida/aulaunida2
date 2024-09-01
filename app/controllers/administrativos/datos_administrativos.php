<?php

$sql_administrativos = "SELECT * FROM usuarios AS usu 
INNER JOIN roles AS rol ON rol.id_rol = usu.rol_id 
INNER JOIN personAS AS per ON per.usuario_id = usu.id_usuario 
INNER JOIN administrativos AS adm ON adm.persona_id = per.id_persona WHERE adm.estado='1' and adm.id_administrativo = '$id_administrativo' ";
$query_administrativos = $pdo->prepare($sql_administrativos);
$query_administrativos->execute();
$administrativos = $query_administrativos->fetchAll(PDO::FETCH_ASSOC);

foreach($administrativos as $administrativo){
    $nombres = $administrativo['nombres'];
    $apellidos = $administrativo['apellidos'];
    $nombre_rol = $administrativo['nombre_rol'];
    $email = $administrativo['email'];
    $dni = $administrativo['dni'];
    $fecha_nacimiento = $administrativo['fecha_nacimiento'];
    $celular = $administrativo['celular'];
    $profesion = $administrativo['profesion'];
    $direccion = $administrativo['direccion'];
    $fyh_creacion = $administrativo['fyh_creacion'];
    $estado = $administrativo['estado'];
}