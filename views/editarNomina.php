<?php
require '../utils/seguridad.php';
require '../controller/conexion.php';

$id = $_GET['idNomina'];


$consulta = "SELECT nombreE, estadoN FROM nominas 
INNER JOIN empleados ON nominas.idEmpleado_fk=empleados.idEmpleado 
WHERE idNomina = $id";

if($resultado = $mysqli->query($consulta)){

  while($fila = $resultado->fetch_assoc()){
    $id = $_GET['idNomina'];  
    $nombre = $fila['nombreE'];
    $estado = $fila['estadoN'];
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

    <h1 class="text-center mt-3">Editar nomina</h1>

    <form class="col-7 center p-3 container" action="../controller/updateNomina.php" method="post">
        <div class="form-group">
            <label for="idEmpleado_fk">Nombre*</label>
            <input type="text" class="form-control" id="idEmpleado_fk" name="idEmpleado_fk" value="<?php echo $nombre ?>">
        </div>
        <div class="form-group">
            <label for="estadoN">Estado*</label>
            <select class="form-control" id="estadoN" name="estadoN">
                <option value="<?php echo $estado ?>"><?php echo $estado ?></option>
                <option value="Activo">Activo</option>
                <option value="Inactivo">Inactivo</option>
            </select>
        </div>

        <div class="d-flex justify-content-center">
        <input type="text" class="dnone" name="idNomina" value="<?php echo $id ?>">
        <input type="text" class="dnone" name="idEmpleado_fk" value="<?php echo $nombre ?>">
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