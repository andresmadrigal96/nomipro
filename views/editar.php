<?php
require '../utils/seguridad.php';
require '../controller/conexion.php';

$id = $_GET['idEmpleado'];
$idC = $_GET['idCargo'];
$idV = $_GET['idVinculacion'];
$idH = $_GET['idHorario'];


$consulta = "SELECT * FROM empleados 
left join cargos on empleados.idCargo_fk=cargos.idCargo 
left join vinculaciones on empleados.idVinculacion_fk=vinculaciones.idVinculacion
left join horarios on empleados.idHorario_fk=horarios.idHorario 
WHERE idEmpleado = $id";

if($resultado = $mysqli->query($consulta)){

  while($fila = $resultado->fetch_assoc()){
    $id = $fila['idEmpleado'];
    $nombre = $fila['nombreE'];
    $apellido = $fila['apellido'];
    $correo = $fila['correo'];
    $telefono = $fila['telefono'];
    $tipoDoc = $fila['tipoDoc'];
    $numDoc = $fila['numDoc'];
    $cargo = $fila['nombre'];
    $vinculacion = $fila['descripcion'];
    $horario = $fila['tipoHorario'];
    $estado = $fila['estadoE'];
  }

  $resultado -> free();


}

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="with=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../css/all.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
	<title>Nomipro</title>
</head>
<body>
    <?php include "shared/menu.php" ?>

    <h1 class="text-center mt-3">Editar empleado</h1>

    <form class="col-7 center p-3 container" action="../controller/update.php" method="post">
        <div class="form-group">
            <label for="nombreE">Nombre*</label>
            <input type="text" class="form-control" id="nombreE" name="nombreE" placeholder="Nombre completo" required value="<?php echo $nombre ?>">
        </div>
        <div class="form-group">
            <label for="apellido">Apellidos*</label>
            <input type="text" class="form-control" id="apellido" name="apellido" placeholder="Apellidos" required value="<?php echo $apellido ?>">
        </div>
        <div class="form-group">
            <label for="correo">Correo</label>
            <input type="email" class="form-control" id="correo" name="correo" placeholder="info@dominio.com" require value="<?php echo $correo ?>">
        </div>
        <div class="form-group">
            <label for="telefono">Teléfono</label>
            <input type="text" class="form-control" id="telefono" name="telefono" placeholder="4441122" require value="<?php echo $telefono ?>">
        </div>
        <div class="form-group">
            <label for="tipoDoc">Tipo de documento*</label>
            <select class="form-control" id="tipoDoc" name="tipoDoc" required>
                <option value="<?php echo $tipoDoc ?>"><?php echo $tipoDoc ?></option>
                <option value="CC">Cédula de ciudadanía</option>
                <option value="CE">Cédula de extrangería</option>
            </select>
        </div>
        <div class="form-group">
            <label for="numDoc">Documento*</label>
            <input type="text" class="form-control" id="numDoc" name="numDoc" placeholder="documento de identidad" required value="<?php echo $numDoc ?>">
        </div>
        <div class="form-group">
            <label for="idCargo_fk">Cargo*</label>
            <select class="form-control" id="idCargo_fk" name="idCargo_fk" required>
                <option value="<?php echo $idC?>"><?php echo $cargo?></option>
                <?php
                  $consulta = "SELECT * FROM cargos";
                  $resultado = $mysqli -> query($consulta);
                  while($fila=$resultado->fetch_array()){
                    echo "<option value='".$fila["idCargo"]."'>".$fila['nombre']."</option>";
                  }
                ?>
            </select>
        </div>
        <div class="form-group">
            <label for="idVinculacion_fk">Vinculación*</label>
            <select class="form-control" id="idVinculacion_fk" name="idVinculacion_fk" required>
                <option value="<?php echo $idV?>"><?php echo $vinculacion?></option>
                <?php
                  $consulta = "SELECT * FROM vinculaciones";
                  $resultado = $mysqli -> query($consulta);
                  while($fila=$resultado->fetch_array()){
                    echo "<option value='".$fila["idVinculacion"]."'>".$fila['descripcion']."</option>";
                  }
                ?>
            </select>
        </div>
        <div class="form-group">
            <label for="idHorario_fk">Horario*</label>
            <select class="form-control" id="idHorario_fk" name="idHorario_fk" required value="<?php echo $horario ?>">
                <option value="<?php echo $idH?>"><?php echo $horario?></option>
                <?php
                  $consulta = "SELECT * FROM horarios";
                  $resultado = $mysqli -> query($consulta);
                  while($fila=$resultado->fetch_array()){
                    echo "<option value='".$fila["idHorario"]."'>".$fila['tipoHorario']."</option>";
                  }
                ?>
            </select>
        </div>
        <div class="form-group">
            <label for="estadoE">Estado*</label>
            <select class="form-control" id="estadoE" name="estadoE">
                <option value="<?php echo $estado ?>"><?php echo $estado ?></option>
                <option value="Activo">Activo</option>
                <option value="Inactivo">Inactivo</option>
            </select>
        </div>
        <div class="d-flex justify-content-center">
        <input type="text" class="dnone" name="idEmpleado" value="<?php echo $id ?>">
        <input type="text" class="dnone" name="idCargo" value="<?php echo $idC ?>">
        <input type="text" class="dnone" name="idVinculacion" value="<?php echo $idV ?>">
        <input type="text" class="dnone" name="idHorario" value="<?php echo $idH ?>">
            <input type="submit" value="Actualizar" class="btn btn-primary">
        </div>
        
    </form>

  <footer>
		<p class="footer lyrlo text-center mt-5 p-2">
			Brahian<br>
			Andrés
		</p>
	</footer>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>
</html>