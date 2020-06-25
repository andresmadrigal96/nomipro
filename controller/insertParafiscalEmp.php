<?php
require 'conexion.php';

$nombre = $_POST['idParafiscal_fk'];
$empleado = $_POST['idEmpleado_fk'];
$mes = $_POST['mes'];


$query = "INSERT INTO parafiscalesxempleados VALUES(NULL,'$nombre','$empleado','$mes')";
$mysqli ->query($query);

if($mysqli){
    echo '<div class="card">
    <div class="card-header">
      <img src="https://img.icons8.com/dusk/64/000000/good-pincode.png"/>
    </div>
    <div class="card-body">
      <blockquote class="blockquote mb-0">
        <p>Parafical de empleado registrada con exito.</p>
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
        <p>No se pudo registrar.</p>
        <a href="../views/registrarEmpleado.php">Regresar</a>
    </div>
  </div>';
}

?>