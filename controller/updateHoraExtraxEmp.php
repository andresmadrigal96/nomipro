<?php

require 'conexion.php';

    $id = $_POST['idHExtraEmp'];
    $empleado = $_POST['idEmpleado_fk'];
    $horasExtra = $_POST['idHExtra_fk'];
    $numeroHoras = $_POST['numeroHoras'];
    $mes = $_POST['mes'];

$query = "UPDATE hextraxempleado 
SET idEmpleado_fk = '$empleado', idHExtra_fk = '$horasExtra', numeroHoras = '$numeroHoras', mes = '$mes' 
WHERE hextraxempleado.idHExtraEmp = '$id' ";
$mysqli ->query($query);


if($mysqli){
    echo '<div class="card">
    <div class="card-header">
      <img src="https://img.icons8.com/dusk/64/000000/good-pincode.png"/>
    </div>
    <div class="card-body">
      <blockquote class="blockquote mb-0">
        <p>Datos actualizados.</p>
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
        <p>No se pudo actualizar.</p>
        <a href="../views/editarHorasExtraxEmpleado.php">Regresar</a>
    </div>
  </div>';
}

?>