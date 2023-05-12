<?php

    include("conexion.php");

    $sql = "DELETE FROM usuarios WHERE id = '2'";

    $res = $conexion -> query($sql);

    if ($res) {
        echo "eliminacion exitosa";
    }
    else {
        echo "ha fallado la eliminacion";
    }
?>