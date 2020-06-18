<?php
    $mysqli = new mysqli("localhost","root","","nomipro");

    if(mysqli_connect_errno()){
        echo 'conexion fallida', mysqli_connect_error();
        exit();
    }

?>