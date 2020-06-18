<?php

require 'conexion.php';

    $id = $_POST['idEmpleado'];
    $nombre = $_POST['nombreE'];
    $apellido = $_POST['apellido'];
    $correo = $_POST['correo'];
    $telefono = $_POST['telefono'];
    $tipoDoc = $_POST['tipoDoc'];
    $numDoc = $_POST['numDoc'];
    $cargo = $_POST['idCargo_fk'];
    $vinculacion = $_POST['idVinculacion_fk'];
    $horario = $_POST['idHorario_fk'];
    $estado = $_POST['estado'];

$query = "UPDATE empleados SET nombreE='$nombre', apellido='$apellido', correo='$correo', telefono='$telefono',tipoDoc= '$tipoDoc', numDoc='$numDoc', idCargo_fk = '$cargo', idVinculacion_fk = '$vinculacion', idHorario_fk = '$horario', estado = '$estado' WHERE empleados.idEmpleado = '$id'";
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