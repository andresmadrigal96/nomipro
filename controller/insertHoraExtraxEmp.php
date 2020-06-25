<?php
require 'conexion.php';

$nombre = $_POST['idEmpleado_fk'];
$horaextra = $_POST['idHExtra_fk'];
$numeroHoras = $_POST['numeroHoras'];
$mes = $_POST['mes'];


$query = "INSERT INTO hextraxempleado VALUES(NULL,'$nombre','$horaextra','$numeroHoras','$mes')";
$mysqli ->query($query);

if($mysqli){
    echo '<div class="card">
    <div class="card-header">
      <img src="https://img.icons8.com/dusk/64/000000/good-pincode.png"/>
    </div>
    <div class="card-body">
      <blockquote class="blockquote mb-0">
        <p>Hora extra de empleado registrada con exito.</p>
        <a href="../views/empleados.php">Regresar</a>
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
        <p>No se pudo registrar la hora extra de empleado.</p>
        <a href="../views/registrarHoraExtraxEmp.php">Regresar</a>
    </div>
  </div>';
}

?>