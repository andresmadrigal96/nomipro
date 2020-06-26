<?php

session_start();
if (empty($_SESSION["usuario_logeado"])) {
    header("location: ../index.php?error=Intentaste entrar a una pagina sin estar logeado");
}
?>