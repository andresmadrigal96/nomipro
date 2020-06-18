<?php
require 'conexion.php';

$nombre = $_POST['nombreP'];
$valor = $_POST['valor'];
$estado =$_POST['estado'];


$query = "INSERT INTO parafiscales VALUES(NULL,'$nombre','$valor','$estado')";
$mysqli ->query($query);

if($mysqli){
    echo '<div class="card">
    <div class="card-header">
      <img src="https://img.icons8.com/dusk/64/000000/good-pincode.png"/>
    </div>
    <div class="card-body">
      <blockquote class="blockquote mb-0">
        <p>Parafiscal registrada con exito.</p>
        <a href="../views/parafiscales.php">Regresar</a>
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
        <p>No se pudo registrar la parafiscal.</p>
        <a href="../views/registrarParafiscal.php">Regresar</a>
    </div>
  </div>';
}

?>