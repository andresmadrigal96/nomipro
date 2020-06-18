<?php
require 'conexion.php';

$desc = $_POST['descripcion'];
$estado = $_POST['estado'];

$query = "INSERT INTO vinculaciones (idVinculacion, descripcion, estado) VALUES (NULL, '$desc', '$estado'); ";
$mysqli ->query($query);

if($mysqli){
    echo '<div class="card">
    <div class="card-header">
      <img src="https://img.icons8.com/dusk/64/000000/good-pincode.png"/>
    </div>
    <div class="card-body">
      <blockquote class="blockquote mb-0">
        <p>Cargo registrado con exito.</p>
        <a href="../views/vinculaciones.php">Regresar</a>
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
        <a href="../views/registrarVinculacion.php">Regresar</a>
    </div>
  </div>';
}

?>