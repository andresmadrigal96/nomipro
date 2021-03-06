<?php
require '../utils/seguridad.php';
require '../controller/conexion.php';

$consulta = "SELECT * FROM empleados 
inner join cargos on empleados.idCargo_fk=cargos.idCargo 
inner join vinculaciones on empleados.idVinculacion_fk=vinculaciones.idVinculacion 
inner join horarios on empleados.idHorario_fk=horarios.idHorario";
$resultado = $mysqli ->query($consulta);

$consulta2 = "SELECT * FROM hextraxempleado 
inner join empleados on hextraxempleado.idEmpleado_fk=empleados.idEmpleado 
inner join horasextra on hextraxempleado.idHExtra_fk=horasextra.idHExtra";
$resultado2 = $mysqli ->query($consulta2);

$consulta3 = "SELECT * FROM parafiscalesxempleados
inner join parafiscales on parafiscalesxempleados.idParafiscal_fk=parafiscales.idParafiscal 
inner join empleados on parafiscalesxempleados.idEmpleado_fk=empleados.idEmpleado";
$resultado3 = $mysqli ->query($consulta3);

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

  <h1 class="text-center mt-3">Gestion de empleados</h1>

  <ul class="nav nav-tabs" id="myTab" role="tablist">
    <li class="nav-item">
      <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Empleados</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Horas extra</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Parafiscales</a>
    </li>
  </ul>
  <div class="tab-content" id="myTabContent">
    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">

      <a class="btn btn-primary mt-3 ml-5 mb-3" href="registrarEmpleado.php">Registrar empleado</a>
 
      <table class="table container border">
        <thead class="thead-dark">
          <tr>
            <th scope="col">Nombre</th>
            <th scope="col">Apellido</th>
            <th scope="col">Correo</th>
            <th scope="col">Teléfono</th>
            <th scope="col">Tipo Documento</th>
            <th scope="col">Documento</th>
            <th scope="col">Cargo</th>
            <th scope="col">Vinculación</th>
            <th scope="col">Horario</th>
            <th scope="col">Estado</th>
            <th scope="col">Editar</th>
            <th scope="col">Eliminar</th>
          </tr>
        </thead>
        <tbody>
            <?php while($fila = $resultado ->fetch_assoc()){?>
                  <tr>
                    <td value=""><?php echo $fila['nombreE'];?></td>
                    <td><?php echo $fila['apellido'];?></td>
                    <td><?php echo $fila['correo'];?></td>
                    <td><?php echo $fila['telefono'];?></td>
                    <td><?php echo $fila['tipoDoc'];?></td>
                    <td><?php echo $fila['numDoc'];?></td>
                    <td><?php echo $fila['nombre'];?></td>
                    <td><?php echo $fila['descripcion'];?></td>
                    <td><?php echo $fila['tipoHorario'];?></td>
                    <td><?php echo $fila['estadoE'];?></td>
                    <td><a href="editar.php?idEmpleado=<?php echo $fila['idEmpleado']?>.& idCargo=<?php echo $fila['idCargo']?>.& idVinculacion=<?php echo $fila['idVinculacion']?>.& idHorario=<?php echo $fila['idHorario']?>"><img src="https://img.icons8.com/bubbles/50/000000/edit.png"/></a></td>
                    <td><a href="../controller/delete.php?idEmpleado=<?php echo $fila['idEmpleado']?>"><img src="https://img.icons8.com/office/30/000000/delete-folder.png"/></a></td>
                  </tr>
              <?php }?>
            </tbody>
      </table>
    </div>

    <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">

      <h1 class="text-center mt-3">Horas extra de empleado</h1>

      <a class="btn btn-primary ml-5 mb-3" href="registrarHoraExtraxEmp.php">Registrar hora extra de empleado</a>

      <table class="table container border">
        <thead class="thead-dark">
          <tr>
            <th scope="col">Empleado</th>
            <th scope="col">Hora extra</th>
            <th scope="col">Cantidad</th>
            <th scope="col">Mes</th>
            <th scope="col">Editar</th>
            <th scope="col">Eliminar</th>
          </tr>
        </thead>
        <tbody>
            <?php while($fila = $resultado2 ->fetch_assoc()){?>
                  <tr>
                    <td><?php echo $fila['nombreE'];?></td>
                    <td><?php echo $fila['nombre'];?></td>
                    <td><?php echo $fila['numeroHoras'];?></td>
                    <td><?php echo $fila['mes'];?></td>
                    <td><a href="editarHoraExtraxEmpleado.php?idHExtraEmp=<?php echo $fila['idHExtraEmp']?>.& idEmpleado=<?php echo $fila['idEmpleado']?>.& idHExtra=<?php echo $fila['idHExtra']?>"><img src="https://img.icons8.com/bubbles/50/000000/edit.png"/></a></td>
                    <td><a href="../controller/deleteHoraExtraxEmpleado.php?idHExtraEmp=<?php echo $fila['idHExtraEmp']?>"><img src="https://img.icons8.com/office/30/000000/delete-folder.png"/></a></td>
                  </tr>
            <?php }?>
            </tbody>
      </table>
    </div>
    <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
        <h1 class="text-center mt-3">Parafiscales de empleado</h1>

        <a class="btn btn-primary ml-5 mb-3" href="registrarParafiscalEmp.php">Registrar parafiscal de empleado</a>

        <table class="table container border">
          <thead class="thead-dark">
            <tr>
              <th scope="col">Nombre</th>
              <th scope="col">Empleado</th>
              <th scope="col">Mes</th>
              <th scope="col">Editar</th>
              <th scope="col">Eliminar</th>
            </tr>
          </thead>
          <tbody>
              <?php while($fila = $resultado3 ->fetch_assoc()){?>
                    <tr>
                      <td><?php echo $fila['nombreP'];?></td>
                      <td><?php echo $fila['nombreE'];?></td>
                      <td><?php echo $fila['mes'];?></td>
                      <td><a href="editarParafiscalEmp.php?idParaxEmp=<?php echo $fila['idParaxEmp']?>.& idParafiscal=<?php echo $fila['idParafiscal']?>.& idEmpleado=<?php echo $fila['idEmpleado']?>"><img src="https://img.icons8.com/bubbles/50/000000/edit.png"/></a></td>
                      <td><a href="../controller/deleteParaEmp.php?idParaxEmp=<?php echo $fila['idParaxEmp']?>"><img src="https://img.icons8.com/office/30/000000/delete-folder.png"/></a></td>
                    </tr>
              <?php }?>
              </tbody>
        </table>
    </div>
  </div>

  

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