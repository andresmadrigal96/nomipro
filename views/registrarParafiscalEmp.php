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

    <form class="col-7 center p-3 container" action="../controller/insertParafiscalEmp.php" method="post">
        
        <div class="form-group">
            <label for="idParafiscal_fk">Parafiscal*</label>
            <select class="form-control" id="idParafiscal_fk" name="idParafiscal_fk" required>
                <option value="1">Seleccionar parafiscal</option>
                <?php
                  $consulta = "SELECT * FROM parafiscales";
                  $resultado = $mysqli -> query($consulta);
                  while($fila=$resultado->fetch_array()){
                    echo "<option value='".$fila["idParafiscal"]."'>".$fila['nombreP']."</option>";
                  }
                ?>
            </select>
        </div>
        <div class="form-group">
                <label for="idEmpleado_fk">Empleado*</label>
                <select class="form-control" id="idEmpleado_fk" name="idEmpleado_fk" required>
                    <option value="1">Seleccione el empleado</option>
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
            <label for="mes">Mes*</label>
            <input type="text" class="form-control" id="mes" name="mes" placeholder="Enero">
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