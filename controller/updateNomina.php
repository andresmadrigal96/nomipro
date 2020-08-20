<?php

require 'conexion.php';

    $id = $_POST['idNomina'];
    $nombre = $_POST['idEmpleado_fk'];
    $estado = $_POST['estadoN'];

$query = "UPDATE nominas SET estadoN = '$estado' WHERE nominas.idNomina = '$id'";
$mysqli ->query($query);


if($mysqli){
    echo '<div class="card">
    <div class="card-header">
      <img src="https://img.icons8.com/dusk/64/000000/good-pincode.png"/>
    </div>
    <div class="card-body">
      <blockquote class="blockquote mb-0">
        <p>Estado actualizado.</p>
        <a href="../views/nominas.php">Regresar</a>
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
        <p>No se pudo actualizar.</p>
        <a href="../views/editarNomina.php">Regresar</a>
    </div>
  </div>';
}

?>