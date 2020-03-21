<?php
    include_once '../Controlador/conexion.inc.php';
    
    if(isset($_POST['btn_buscar'])){
        $buscar_texto = $_POST['buscar'];
        $buscar = $conexion->prepare( 'SELECT * FROM registro WHERE nombre LIKE :campo OR apellidos LIKE :campo; ' );
        
        $buscar -> execute(array(
            ':campo' => "%".$buscar_texto."%"
        ));
        
        $resultado = $buscar->fetchAll();
        
    }
?>