<?php

include_once '../Controlador/conexion.inc.php';

if (isset($_POST['guardar'])) {

    $nombre = $_POST['nombre'];
    $apellidos = $_POST['apellidos'];
    $telefono = $_POST['telefono'];
    $email = $_POST['email'];
    $edad = $_POST['edad'];
    $ciudad = $_POST['ciudad'];

    if (!empty($nombre) && !empty($apellidos) && !empty($telefono) && !empty($email) && !empty($edad) && !empty($ciudad)) {
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            echo "<script> alert('Correo no valido');  </script>";
        } else {
            $query = $conexion->prepare('INSERT INTO registro(nombre,apellidos,correo,edad,telefono,ciudad) VALUES(:nombre,:apellidos,:correo,:edad,:telefono,:ciudad)');
            $query->execute(array(
                ':nombre' => $nombre,
                ':apellidos' => $apellidos,
                ':correo' => $email,
                ':edad' => $edad,
                ':telefono' => $telefono,
                ':ciudad' => $ciudad
            ));
            header('Location:index.php');
        }
    } else {
        echo "<script> alert('Los campos estan vacios');  </script>";
    }
}
?>