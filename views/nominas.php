<?php
require '../utils/seguridad.php';
require '../controller/conexion.php';

$consulta = "SELECT * FROM nominas
inner join empleados on nominas.idEmpleado_fk=empleados.idEmpleado
inner join cargos on nominas.idCargo_fk=cargos.idCargo
inner join controlpagos on nominas.idControlPago_fk=controlpagos.idControlPago";
$resultado = $mysqli ->query($consulta);
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

  <h1 class="text-center mt-3">Gestion de nominas</h1>

  <a class="btn btn-primary ml-5 mb-3" href="registrarNomina.php">Registrar nómina</a>
  <table class="table container border">
    <thead class="thead-dark">
      <tr>
        <th scope="col">Empleado</th>
        <th scope="col">Cargo</th>
        <th scope="col">Contro Pago</th>
        <th scope="col">Mes</th>
        <th scope="col">Estado</th>
        <th scope="col">Subtotal</th>
        <th scope="col">Total</th>
        <th scope="col">Editar</th>
        <th scope="col">Eliminar</th>
      </tr>
    </thead>
    <tbody>
        <?php while($fila = $resultado->fetch_assoc()):?>
              <tr>
                <td><?php echo $fila['nombreE'];?></td>
                <td><?php echo $fila['nombre'];?></td>
                <td><?php echo $fila['idControlPago_fk'];?></td>
                <td><?php echo $fila['mes'];?></td>
                <td><?php echo $fila['estado'];?></td>
                <td><?php echo $fila['subtotal'];?></td>
                <td><?php echo $fila['total'];?></td>
                <td><a href="editarNomina.php?idNomina=<?php echo $fila['idNomina']?>"><img src="https://img.icons8.com/bubbles/50/000000/edit.png"/></a></td>
                <td><a href="../controller/deleteNomina.php?idNomina=<?php echo $fila['idNomina']?>"><img src="https://img.icons8.com/office/30/000000/delete-folder.png"/></a></td>
              </tr>
         <?php endwhile?>
        </tbody>
  </table>

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