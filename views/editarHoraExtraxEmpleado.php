<?php

require '../controller/conexion.php';

$id = $_GET['idHExtraEmp'];
$idE = $_GET['idEmpleado'];
$idH = $_GET['idHExtra'];

$consulta = "SELECT * FROM hextraxempleado 
left join empleados on hextraxempleado.idEmpleado_fk=empleados.idEmpleado 
left join horasextra on hextraxempleado.idHExtra_fk=horasextra.idHExtra
WHERE idHExtraEmp = $id";

if($resultado = $mysqli->query($consulta)){

  while($fila = $resultado->fetch_assoc()){
    $id = $fila['idHExtraEmp'];
    $empleado = $fila['nombreE'];
    $horaExtra = $fila['nombre'];
    $numeroHoras = $fila['numeroHoras'];
    $mes = $fila['mes'];
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
            <a class="dropdown-item" href="horasExtra.php">Horas extra</a>
          </div>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle letterc" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Gestión de nómina
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="controlPagos.php">Control de pagos</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="nominas.php">Nómina</a>
          </div>
        </li>
      </ul>
      <ul class="form-inline my-2 my-lg-0">
        <li class="nav-item active wd bg-dark"><a class="btn btn-outline-secondary my-2 my-sm-0 lyrlo" href="../index.php">Cerrar sesión</a></li>
      </ul>
    </div>
  </nav>

    <h1 class="text-center mt-3">Editar hora extra de empleado</h1>

    <form class="col-7 center p-3 container" action="../controller/updateHoraExtraxEmp.php" method="post">
        <div class="form-group">
                <label for="idEmpleado_fk">Empleado*</label>
                <select class="form-control" id="idEmpleado_fk" name="idEmpleado_fk" required>
                    <option value="<?php echo $idE?>"><?php echo $empleado?></option>
                    <?php
                      $consulta = "SELECT * FROM empleados";
                      $resultado = $mysqli -> query($consulta);
                      while($fila=$resultado->fetch_array()){
                        echo "<option value='".$fila["idEmpleado"]."'>".$fila['nombreE']."</option>";
                      }
                    ?>
                </select>
          </div>
          <div class="form-group">
                <label for="idHExtra_fk">Hora extra*</label>
                <select class="form-control" id="idHExtra_fk" name="idHExtra_fk" required>
                    <option value="<?php echo $idH?>"><?php echo $horaExtra?></option>
                    <?php
                      $consulta = "SELECT * FROM horasextra";
                      $resultado = $mysqli -> query($consulta);
                      while($fila=$resultado->fetch_array()){
                        echo "<option value='".$fila["idHExtra"]."'>".$fila['nombre']."</option>";
                      }
                    ?>
                </select>
          </div>

          <div class="form-group">
              <label for="numeroHoras">Cantidad*</label>
              <input type="text" class="form-control" id="numeroHoras" name="numeroHoras" placeholder="Cantidad" value="<?php echo $numeroHoras ?>">
          </div>

          <div class="form-group">
              <label for="mes">mes*</label>
              <input type="text" class="form-control" id="mes" name="mes" placeholder="10000" value="<?php echo $mes ?>">
          </div>

        <div class="d-flex justify-content-center">
        <input type="text" class="dnone" name="idHExtraEmp" value="<?php echo $id ?>">
        <input type="text" class="dnone" name="idEmpleado" value="<?php echo $idE ?>">
        <input type="text" class="dnone" name="idHExtra" value="<?php echo $idH ?>">
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