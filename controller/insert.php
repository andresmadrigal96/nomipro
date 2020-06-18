<?php
require 'conexion.php';

$nombre = $_POST['nombreE'];
$apellido = $_POST['apellido'];
$correo = $_POST['correo'];
$telefono = $_POST['telefono'];
$tipoDoc = $_POST['tipoDoc'];
$documento = $_POST['documento'];
$cargo = $_POST['idCargo_fk'];
$vinculacion = $_POST['idVinculacion_fk'];
$horario = $_POST['idHorario_fk'];
$estado = $_POST['estado'];

$query = "INSERT INTO empleados VALUES(NULL,'$nombre','$apellido','$correo','$telefono','$tipoDoc','$documento','$cargo','$vinculacion','$horario','$estado')";
$mysqli ->query($query);

if($mysqli){
    echo '<div class="card">
    <div class="card-header">
      <img src="https://img.icons8.com/dusk/64/000000/good-pincode.png"/>
    </div>
    <div class="card-body">
      <blockquote class="blockquote mb-0">
        <p>Empleado registrado con exito.</p>
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
        <p>No se pudo registrar el empleado.</p>
        <a href="../views/registrarEmpleado.php">Regresar</a>
    </div>
  </div>';
}

?>