<?php

require '../controller/conexion.php';

$id = $_GET['idEmpleado'];

$consulta = "SELECT * FROM empleados WHERE idEmpleado = $id";

if($resultado = $mysqli->query($consulta)){

  while($fila = $resultado->fetch_assoc()){
    $id = $fila['idEmpleado'];
    $nombre = $fila['nombreE'];
    $apellido = $fila['apellido'];
    $correo = $fila['correo'];
    $telefono = $fila['telefono'];
    $tipoDoc = $fila['tipoDoc'];
    $numDoc = $fila['numDoc'];
    $cargo = $fila['idCargo_fk'];
    $vinculacion = $fila['idVinculacion_fk'];
    $horario = $fila['idHorario_fk'];
    $estado = $fila['estado'];
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
	<title>CRUD</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light nv">
    <a class="navbar-brand letterc">Nomipro</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link letterc" href="inicio.php">Inicio <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle letterc" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Gestión de empleados
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="empleados.php">Empleados</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="cargos.php">Cargos</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="vinculaciones.php">Vinculaciones</a>
          </div>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle letterc" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Gestión de tiempo
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="horarios.php">Horarios</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="parafiscales.php">Parafiscales</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Horas extra</a>
          </div>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle letterc" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Gestión de nómina
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="#">Control de pagos</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Nómina</a>
          </div>
        </li>
      </ul>
      <ul class="form-inline my-2 my-lg-0">
        <li class="nav-item active wd bg-dark"><a class="btn btn-outline-secondary my-2 my-sm-0 lyrlo" href="../index.html">Cerrar sesión</a></li>
      </ul>
    </div>
  </nav>

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
            <input type="text" class="form-control" id="numDoc" name="numDoc" placeholder="documento de identidad" required value="<?php echo $numDoc ?>" >
        </div>
        <div class="form-group">
            <label for="idCargo_fk">Cargo*</label>
            <select class="form-control" id="idCargo_fk" name="idCargo_fk" required value="<?php echo $cargo ?>">
                <option value="<?php echo $cargo?>">Seleccione el cargo</option>
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
            <select class="form-control" id="idVinculacion_fk" name="idVinculacion_fk" required value="<?php echo $vinculacion ?>">
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
            <select class="form-control" id="idHorario_fk" name="idHorario_fk" required value="<?php echo $horario ?>">
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
            <label for="estado">Estado</label>
            <input type="text" class="form-control" id="estado" name="estado" placeholder="vacacines" value="<?php echo $estado ?>">
        </div>
        <div class="d-flex justify-content-center">
        <input type="text" class="dnone" name="idEmpleado" value="<?php echo $id ?>">
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