<?php
require 'conexion.php';

$idEmpleado = $_POST['idEmpleado_fk'];
$mes = $_POST['mes'];
$estado = $_POST['estado'];

$query = "INSERT INTO nominas(idEmpleado_fk,idCargo_fk,idControlPago_fk,mes,estado,subtotal,total)
WITH
 datos_controlpago as (SELECT idControlPago, valorHorasExtras, valorParafiscales FROM controlpagos 
 WHERE controlpagos.idEmpleado_fk= $idEmpleado),
 datos_cargo as (SELECT idCargo,valorCargo FROM cargos 
inner join empleados on empleados.idCargo_fk=cargos.idCargo 
where empleados.idEmpleado = $idEmpleado)
SELECT $idEmpleado, idCargo, idControlPago, '$mes', '$estado',valorCargo,(valorHorasExtras+valorParafiscales+valorCargo) 
FROM datos_controlpago,datos_cargo";
$mysqli ->query($query);

if($mysqli){
    echo '<div class="card">
    <div class="card-header">
      <img src="https://img.icons8.com/dusk/64/000000/good-pincode.png"/>
    </div>
    <div class="card-body">
      <blockquote class="blockquote mb-0">
        <p>Nómina registrada con exito.</p>
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
        <p>No se pudo registrar la nómina.</p>
        <a href="../views/registrarNomina.php">Regresar</a>
    </div>
  </div>';
}

?>