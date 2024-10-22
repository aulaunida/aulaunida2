<?php

$sql_materias = "SELECT * FROM materias WHERE estado = '1' ORDER BY nombre_materia ASC";
$query_materias = $pdo->prepare($sql_materias);
$query_materias->execute();
$materias = $query_materias->fetchAll(PDO::FETCH_ASSOC);