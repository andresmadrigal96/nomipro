<?php

require 'conexion.php';

    $id = $_POST['idCargo'];
    $nombre = $_POST['nombre'];
    $estado = $_POST['estado'];
    $valorCargo = $_POST['valorCargo'];

$query = "UPDATE cargos SET nombre = '$nombre', estado = '$estado', valorCargo = '$valorCargo' WHERE cargos.idCargo = '$id' ";
$mysqli ->query($query);


if($mysqli){
    echo '<div class="card">
    <div class="card-header">
      <img src="https://img.icons8.com/dusk/64/000000/good-pincode.png"/>
    </div>
    <div class="card-body">
      <blockquote class="blockquote mb-0">
        <p>Datos actualizados.</p>
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
        <p>No se pudo actualizar.</p>
        <a href="../views/editarCargo.php">Regresar</a>
    </div>
  </div>';
}

?>