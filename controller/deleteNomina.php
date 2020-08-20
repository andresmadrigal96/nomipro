<?php
require 'conexion.php';

$id = $_GET['idNomina'];

$query = "DELETE FROM nominas WHERE idNomina='$id'";
$mysqli -> query($query);


if($mysqli){
    echo '<div class="card">
    <div class="card-header">
      <img src="https://img.icons8.com/dusk/64/000000/good-pincode.png"/>
    </div>
    <div class="card-body">
      <blockquote class="blockquote mb-0">
        <p>Nomina eliminada.</p>
        <a class="btn btn-primary" href="../views/nominas.php">Regresar</a>
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
        <p>No se pudo eliminar.</p>
        <a href="../views/nominas.php">Regresar</a>
    </div>
  </div>';
}


?>