<?php
include_once '../Modelo/create_accion.inc.php';

include_once '../plantillas/cabecera.inc.php';
?>

<div class="container">
    <form method="post" action="">
        <div class="row">
            <div class="col-md-6">
                <input type="text" name="nombre" class="form-control" placeholder="Nombre" >
            </div>
            <div class="col-md-6">
                <input type="text" name="apellidos" class="form-control" placeholder="Apellidos" >
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-md-6">
                <input type="tel" name="telefono" class="form-control" placeholder="Telefono" >
            </div>
            <div class="col-md-6">
                <input type="email" name="email" class="form-control" placeholder="Correo" >
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-md-6">
                <input type="text" name="edad" class="form-control" placeholder="edad" >
            </div>
            <div class="col-md-6">
                <input type="text" name="ciudad" class="form-control" placeholder="ciudad" >
            </div>
        </div>
        <br>
        <a href="index.php" class="btn btn-danger">cancelar </a>
        <input type="submit" name="guardar" class=" btn btn-success" value="Guardar">
    </form>    
</div>



<?php
include_once '../plantillas/pie.inc.php';
