<?php
require 'conexion.php';

$nombre = $_POST['nombre'];
$estado = $_POST['estado'];
$valorCargo = $_POST['valorCargo'];

$query = "INSERT INTO cargos VALUES(NULL,'$nombre','$estado','$valorCargo')";
$mysqli ->query($query);

if($mysqli){
    echo '<div class="card">
    <div class="card-header">
      <img src="https://img.icons8.com/dusk/64/000000/good-pincode.png"/>
    </div>
    <div class="card-body">
      <blockquote class="blockquote mb-0">
        <p>Cargo registrado con exito.</p>
        <a href="../views/cargos.php">Regresar</a>
    </div>
  </div>';
}


else{
    echo '<div class="card">
    <div class="card-header">
        <img src="https://img.icons8.com/color/48/000000/fail.png"/>
    </div>
    <div class="card-body">
      <blockquote class="blockquote mb-0">
        <p>No se pudo registrar el cargo.</p>
        <a href="../views/registrarCargo.php">Regresar</a>
    </div>
  </div>';
}

?>