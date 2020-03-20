<?php

$seleccionar = $conexion->prepare('SELECT * FROM registro ORDER BY id DESC');
$seleccionar->execute();
$resultado = $seleccionar->fetchAll();
