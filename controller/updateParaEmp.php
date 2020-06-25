<?php

require 'conexion.php';

    $id = $_POST['idParaxEmp'];
    $nombreP = $_POST['idParafiscal_fk'];
    $nombreE = $_POST['idEmpleado_fk'];
    $mes = $_POST['mes'];
    

$query = "UPDATE parafiscalesxempleados 
SET idParafiscal_fk='$nombreP', idEmpleado_fk='$nombreE', mes = '$mes'
WHERE parafiscalesxempleados.idParaxEmp = '$id'";
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
        <a href="../views/editar.php">Regresar</a>
    </div>
  </div>';
}

?>