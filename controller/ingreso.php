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
        header("location: ../views/inicio.php");
        echo "Bienvenido: " .$user;
    }
    else{
        echo "Usuario y/o contraseña incorrectos";
    }

?>