<?php
require 'conexion.php';

$tipoHorario = $_POST['tipoHorario'];
$hora = $_POST['hora'];


$query = "INSERT INTO horarios VALUES(NULL,'$tipoHorario','$hora')";
$mysqli ->query($query);

if($mysqli){
    echo '<div class="card">
    <div class="card-header">
      <img src="https://img.icons8.com/dusk/64/000000/good-pincode.png"/>
    </div>
    <div class="card-body">
      <blockquote class="blockquote mb-0">
        <p>Horario registrado con exito.</p>
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
        <p>No se pudo registrar el horario.</p>
        <a href="../views/registrarHorario.php">Regresar</a>
    </div>
  </div>';
}

?>