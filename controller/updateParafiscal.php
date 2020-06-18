<?php

require 'conexion.php';

    $id = $_POST['idParafiscal'];
    $nombre = $_POST['nombreP'];
    $valor = $_POST['valor'];
    $estado = $_POST['estado'];

$query = "UPDATE parafiscales SET nombreP = '$nombre', valor = '$valor', estado = '$estado' WHERE parafiscales.idParafiscal = '$id' ";
$mysqli ->query($query);


if($mysqli){
    echo '<div class="card">
    <div class="card-header">
      <img src="https://img.icons8.com/dusk/64/000000/good-pincode.png"/>
    </div>
    <div class="card-body">
      <blockquote class="blockquote mb-0">
        <p>Datos actualizados.</p>
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
        <p>No se pudo actualizar.</p>
        <a href="../views/editarParafiscal.php">Regresar</a>
    </div>
  </div>';
}

?>