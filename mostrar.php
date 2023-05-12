<?php

    include("conexion.php");

    $sql = "SELECT * FROM usuarios";

    $res = $conexion ->query($sql); 

    while ($usuario = $res -> fetch_assoc()) {
        echo "Usuario #" . $usuario['id'] . "<br>";
        echo "Nombre: " . $usuario['nombre'] . "<br>";
        echo "Apellido: " . $usuario['apellido'] . "<br>";
        echo "Edad: " . $usuario['edad'] . "<br><br>";
    }

?>