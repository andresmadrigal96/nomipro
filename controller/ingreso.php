<?php
    require 'conexion.php';

    session_start();

    $user = $_POST['usuario'];
    $passw = $_POST['passw'];

    $q = "SELECT COUNT(*) as contar FROM administrador WHERE usuario = '$user' and passwo = '$passw'";
    $consulta = mysqli_query($mysqli,$q);
    $array = mysqli_fetch_array($consulta);

    if($array['contar']>0)
    {
        $_SESSION["usuario_logeado"] = $user;
        header("location: ../views/inicio.php");
    }
    else{
        $_SESSION["usuario_logeado"] = false;
        header("location: ../index.php?error=Usuario Incorrecto");
    }

?>