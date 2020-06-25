<?php

require 'conexion.php';

    $id = $_POST['idHExtra'];
    $nombre = $_POST['nombre'];
    $valor = $_POST['valor'];
    $estado = $_POST['estado']; 

$query = "UPDATE horasextra SET nombre = '$nombre', valor = '$valor', estado = '$estado' WHERE horasextra.idHExtra = '$id' ";
$mysqli ->query($query);


if($mysqli){
    echo '<div class="card">
    <div class="card-header">
      <img src="https://img.icons8.com/dusk/64/000000/good-pincode.png"/>
    </div>
    <div class="card-body">
      <blockquote class="blockquote mb-0">
        <p>Datos actualizados.</p>
        <a href="../views/horasExtra.php">Regresar</a>
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
        <a href="../views/editarHorasExtra.php">Regresar</a>
    </div>
  </div>';
}

?>