<?php
include_once 'Controlador/conexion.inc.php';

include_once 'Modelo/read_action.inc.php';


include_once 'plantillas/cabecera.inc.php';
?>


<div class="container">
    <div class="row">
        <div class="col-md-8">
            <div class="panel-body">
                <div class="form-group">
                    <input type="search" class="form-control" placeholder="¿A quien desea buscar?">
                </div>
            </div>
        </div>

        <div class="col-md-2">
            <form  method="post">
                <input type="submit" class="btn btn-success btn-block" name="nuevo" value="nuevo">
            </form>
        </div>

        <div class="col-md-2">
            <form  method="post">
                <input type="submit" class="btn btn-warning btn-block" name="buscar" value="buscar">
            </form>
        </div>
    </div>
</div>

<div class="container">
    <table class="table table-bordered ">
        <tr >
            <td>Nombre</td>
            <td>Apellidos</td>
            <td>correo</td>
            <td>edad</td>
            <td>telefono</td>
            <td>ciudad</td>
            <td colspan="2"> Accion</td>
        </tr>

        <?php foreach ($resultado as $fila):
            ?>
            <tr >
                <td><?php echo $fila['nombre'] ; ?></td>
                <td><?php echo $fila['apellidos'] ; ?></td>
                <td><?php echo $fila['correo'] ; ?></td>
                <td><?php echo $fila['edad'] ; ?></td>
                <td><?php echo $fila['telefono'] ; ?></td>
                <td><?php echo $fila['ciudad'] ; ?></td>
                <td><a href="Vistas/actualizar.php?id=<?php echo $fila['id'];?>" class="btn btn-secondary"><i class="fas fa-marker"> </i> </a></td>
                <td><a href="Vistas/eliminar.php?id=<?php echo $fila['id'];?>" class="btn btn-danger"><i class="fas fa-trash-alt"> </i> </a></td>
            </tr>

        <?php endforeach ?>
    </table>
</div>


<?php
include_once 'plantillas/pie.inc.php';


