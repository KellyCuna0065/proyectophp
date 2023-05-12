<?php
    $conexion = new mysqli("programacionweb", "root", "", "php");

    if ($conexion) {
        echo "la conexion funciona correctamente c:";
    }
    else {
        echo "la conexion fallo.";
    }

?>