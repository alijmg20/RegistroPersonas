<?php
    include_once '../Controlador/conexion.inc.php';
    
    if(isset($_GET['id'])){
        $id = (int)$_GET['id'];
        
        $query = $conexion->prepare('SELECT * FROM registro WHERE id=:id LIMIT 1');
        $query->execute(array(
            ':id'=>$id
        ));
        $resultado = $query->fetch();
    }else{
        header('Location: index.php');
    }
    
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
            $query = $conexion->prepare('UPDATE registro SET nombre=:nombre,apellidos=:apellidos,correo=:correo,edad=:edad,telefono=:telefono,ciudad=:ciudad WHERE id=:id ');
            $query->execute(array(
                ':nombre' => $nombre,
                ':apellidos' => $apellidos,
                ':correo' => $email,
                ':edad' => $edad,
                ':telefono' => $telefono,
                ':ciudad' => $ciudad,
                    ':id'=> $id
            ));
            header('Location:index.php');
        }
    } else {
        echo "<script> alert('Los campos estan vacios');  </script>";
    }
}
    
    

?>