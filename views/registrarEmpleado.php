<?php
    require '../utils/seguridad.php';
    require '../controller/conexion.php';
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
    <?php require 'shared/menu.php'?>

    <h1 class="text-center mt-3">Registrar empleado</h1>

    <form class="col-7 center p-3 container" action="../controller/insert.php" method="post">
        <div class="form-group">
            <label for="nombreE">Nombre*</label>
            <input type="text" class="form-control" id="nombreE" name="nombreE" placeholder="Nombre completo" required>
        </div>
        <div class="form-group">
            <label for="apellido">Apellidos*</label>
            <input type="text" class="form-control" id="apellido" name="apellido" placeholder="Apellidos" required>
        </div>
        <div class="form-group">
            <label for="correo">Correo</label>
            <input type="email" class="form-control" id="correo" name="correo" placeholder="info@dominio.com" require>
        </div>
        <div class="form-group">
            <label for="telefono">Teléfono</label>
            <input type="text" class="form-control" id="telefono" name="telefono" placeholder="4441122" require>
        </div>
        <div class="form-group">
            <label for="tipoDoc">Tipo de documento*</label>
            <select class="form-control" id="tipoDoc" name="tipoDoc" required>
                <option value="CC">Cédula de ciudadanía</option>
                <option value="CE">Cédula de extrangería</option>
            </select>
        </div>
        <div class="form-group">
            <label for="documento">Documento*</label>
            <input type="text" class="form-control" id="documento" name="documento" placeholder="documento de identidad" required>
        </div>
        <div class="form-group">
            <label for="idCargo_fk">Cargo*</label>
            <select class="form-control" id="idCargo_fk" name="idCargo_fk" required>
                <option value="1">Seleccione el cargo</option>
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
                <option value="1">Seleccione la vinculación</option>
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
            <select class="form-control" id="idHorario_fk" name="idHorario_fk" required>
                <option value="1">Seleccione el horario</option>
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
            <select class="form-control" id="estadoE" name="estadoE" required>
                <option value="Activo">Activo</option>
                <option value="Inactivo">Inactivo</option>
            </select>
        </div>
        <div class="d-flex justify-content-center">
            <input type="submit" value="REGISTRAR" class="btn btn-primary">
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