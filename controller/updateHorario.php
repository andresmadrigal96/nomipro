<?php

require 'conexion.php';

    $id = $_POST['idHorario'];
    $tipoHorario = $_POST['tipoHorario'];
    $hora = $_POST['hora'];

$query = "UPDATE horarios SET tipoHorario = '$tipoHorario', hora = '$hora' WHERE horarios.idHorario = '$id' ";
$mysqli ->query($query);


if($mysqli){
    echo '<div class="card">
    <div class="card-header">
      <img src="https://img.icons8.com/dusk/64/000000/good-pincode.png"/>
    </div>
    <div class="card-body">
      <blockquote class="blockquote mb-0">
        <p>Datos actualizados.</p>
        <a href="../views/horarios.php">Regresar</a>
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
        <a href="../views/editarHorario.php">Regresar</a>
    </div>
  </div>';
}

?>