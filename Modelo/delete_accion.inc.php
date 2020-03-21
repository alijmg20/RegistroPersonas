<?php

include_once '../Controlador/conexion.inc.php';

if (isset($_GET['id'])) {
    $id = (int) $_GET['id'];
    $eliminar=$conexion->prepare('DELETE FROM registro WHERE id=:id');
    $eliminar->execute(array(
        ':id' => $id
    ));
    header('Location:../Vistas/index.php');
} else {
    header('Location:../Vistas/index.php');
}
?>