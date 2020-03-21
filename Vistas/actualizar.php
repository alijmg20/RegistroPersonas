<?php
include_once '../Modelo/update_accion.inc.php';

include_once '../plantillas/cabecera.inc.php';
?>

<div class="container">
    <form method="post" action="">
        <div class="row">
            <div class="col-md-6">
                <input type="text" name="nombre" class="form-control" placeholder="Nombre" value="<?php if($resultado) echo $resultado['nombre'] ?>" >
            </div>
            <div class="col-md-6">
                <input type="text" name="apellidos" class="form-control" placeholder="Apellidos" value="<?php if($resultado) echo $resultado['apellidos'] ?>" >
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-md-6">
                <input type="tel" name="telefono" class="form-control" placeholder="Telefono" value="<?php if($resultado) echo $resultado['telefono'] ?>" >
            </div>
            <div class="col-md-6">
                <input type="email" name="email" class="form-control" placeholder="Correo" value="<?php if($resultado) echo $resultado['correo'] ?>" >
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-md-6">
                <input type="text" name="edad" class="form-control" placeholder="edad" value="<?php if($resultado) echo $resultado['edad'] ?>" >
            </div>
            <div class="col-md-6">
                <input type="text" name="ciudad" class="form-control" placeholder="ciudad" value="<?php if($resultado) echo $resultado['ciudad'] ?>" >
            </div>
        </div>
        <br>
        <a href="index.php" class="btn btn-danger">cancelar </a>
        <input type="submit" name="guardar" class=" btn btn-success" value="Guardar">
    </form>    
</div>



<?php
include_once '../plantillas/pie.inc.php';
