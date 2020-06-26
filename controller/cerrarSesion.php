<?php
    session_start();

    session_destroy(); // destruyo la sesión
    header("Location: ../index.php"); //envío al usuario a la pag. de autenticación 
?>