<?php
require '../controller/conexion.php';

$consulta = "SELECT * FROM cargos";
$resultado = $mysqli ->query($consulta);

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

  <h1 class="text-center mt-3">Gestion de cargos</h1>

  <a class="btn btn-primary ml-5 mb-3" href="registrarCargo.php">Registrar cargo</a>
  <table class="table container border">
    <thead class="thead-dark">
      <tr>
        <th scope="col">Nombre</th>
        <th scope="col">estado</th>
        <th scope="col">valor cargo</th>
        <th scope="col"></th>
        <th scope="col"></th>
      </tr>
    </thead>
    <tbody>
        <?php while($fila = $resultado ->fetch_assoc()){?>
              <tr>
                <td><?php echo $fila['nombre'];?></td>
                <td><?php echo $fila['estado'];?></td>
                <td><?php echo $fila['valorCargo'];?></td>
                <td><a href="editarCargo.php?idCargo=<?php echo $fila['idCargo']?>"><img src="https://img.icons8.com/bubbles/50/000000/edit.png"/></a></td>
                <td><a href="../controller/deleteCargo.php?idCargo=<?php echo $fila['idCargo']?>"><img src="https://img.icons8.com/office/30/000000/delete-folder.png"/></a></td>
              </tr>
         <?php }?>
        </tbody>
    <tbody>
      <tr>
        
      </tr>
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