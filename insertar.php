<?php

include("conexion.php");

$sql = "INSERT INTO usuarios(nombre, apellido, edad) VALUES('erick', 'gomez', '21')";

$res = $conexion -> query($sql);

if ($res) {
    echo "insercion exitosa";
}
else {
    echo "insercion ha fallado";
}

?>