<?php
require '../utils/seguridad.php';
require '../controller/conexion.php';

$id = $_GET['idCargo'];

$consulta = "SELECT * FROM cargos WHERE idCargo = $id";

if($resultado = $mysqli->query($consulta)){

  while($fila = $resultado->fetch_assoc()){
    $id = $fila['idCargo'];
    $nombre = $fila['nombre'];
    $estado = $fila['estado'];
    $valorCargo = $fila['valorCargo'];
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

    <h1 class="text-center mt-3">Editar cargo</h1>

    <form class="col-7 center p-3 container" action="../controller/updateCargo.php" method="post">
        <div class="form-group">
            <label for="nombre">Nombre*</label>
            <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre del cargo" value="<?php echo $nombre ?>">
        </div>
        <div class="form-group">
            <label for="estado">Estado*</label>
            <select class="form-control" id="estado" name="estado">
                <option value="<?php echo $estado ?>"><?php echo $estado ?></option>
                <option value="Activo">Activo</option>
                <option value="Inactivo">Inactivo</option>
            </select>
        </div>
        <div class="form-group">
            <label for="valorCargo">Valor cargo</label>
            <input type="text" class="form-control" id="valorCargo" name="valorCargo" placeholder="500000" value="<?php echo $valorCargo ?>">
        </div>

        <div class="d-flex justify-content-center">
        <input type="text" class="dnone" name="idCargo" value="<?php echo $id ?>">
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