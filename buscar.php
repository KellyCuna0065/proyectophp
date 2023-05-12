<?php

    include("conexion.php");

    $sql = "SELECT * FROM usuarios WHERE id='3'";
    // $sql = "SELECT * FROM usuarios WHERE edad > 30";
    // $sql = "SELECT * FROM usuarios WHERE edad < 70";
    // $sql = "SELECT * FROM usuarios WHERE apellido LIKE '%a%'";
    // $sql = "SELECT * FROM usuarios WHERE id ASC";
    // $sql = "SELECT * FROM usuarios WHERE id DESC";


    $res = $conexion ->query($sql); 

    while ($usuario = $res -> fetch_assoc()) {
        echo "Usuario #" . $usuario['id'] . "<br>";
        echo "Nombre: " . $usuario['nombre'] . "<br>";
        echo "Apellido: " . $usuario['apellido'] . "<br>";
        echo "Edad: " . $usuario['edad'] . "<br><br>";
    }

?>