<?php

require 'conexion.php';

$nombre = $_POST['idEmpleado_fk'];

$consulta = "SELECT SUM(valor*numeroHoras) as the FROM hextraxempleado 
INNER JOIN horasextra ON hextraxempleado.idHExtra_fk=horasextra.idHExtra 
INNER JOIN empleados ON hextraxempleado.idEmpleado_fk=empleados.idEmpleado 
WHERE nombreE= '$nombre'";



$consulta2 = "SELECT SUM(valor) FROM parafiscalesxempleados 
INNER JOIN parafiscales ON parafiscalesxempleados.idParafiscal_fk=parafiscales.idParafiscal 
INNER JOIN empleados ON parafiscalesxempleados.idEmpleado_fk=empleados.idEmpleado 
WHERE nombreE= '$nombre'";


$estado = $_POST['estado'];

$query = "INSERT INTO controlpagos VALUES(NULL, '$nombre','$consulta','$consulta2','$estado')";
$mysqli ->query($query);

if($mysqli){
    echo '<div class="card">
    <div class="card-header">
      <img src="https://img.icons8.com/dusk/64/000000/good-pincode.png"/>
    </div>
    <div class="card-body">
      <blockquote class="blockquote mb-0">
        <p>Hora extra registrada con exito.</p>
        <a href="../views/controlPagos.php">Regresar</a>
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
        <p>No se pudo registrar la hora extra.</p>
        <a href="../views/registrarControlPago.php">Regresar</a>
    </div>
  </div>';
}

?>