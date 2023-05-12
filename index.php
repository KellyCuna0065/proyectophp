<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        // xampp apache > programacionweb
        echo "hola mundo" . "<br>";
        echo "<h1>titulo</h1>";
    ?>

    <h1><?php echo "otro titulo"?></h1>
    
    <?php
        // declaracion de una varaible
        $num = 3;
        $nombre = "juan";
        $numDos = 3;
        $suma = $num + $numDos;
        echo "<h1>El resultado de la suma es: " . $suma ."</h1>"; // terminar 
    ?>

    <br>
    <!--<input type="submit"  value="formularios"/>-->
    <a href="/formularios.php">
        <button>formularios.php</button>
    </a>
    <br><br>
    
    <?php
        // -- estructuras de control -- 
        // if
        $num = 3;
        if ($num <= 3) {
            echo "soy igual al 3" . "<br>";
        }

        // switch
        $num2 = 4;
        switch($num2) {
            case 1:
                echo "soy el uno" . "<br>";
                break;
            case 4 :
                echo "soy el cuatro" . "<br>";
                break;
            default:
            echo "fallaste" . "<br>";
            break;

        }
    ?>

    <?php
    // -- ciclos --
    // while
        $i = 1;
        echo "while:" . "<br>";
        while ($i <= 10) {
            echo $i . " ";
            $i++;
        }
        echo "<br>";

        // do while 
        $j = 1;
        echo "do while:" . "<br>";
        do {
            echo $j . " ";
            $j++;
        }while ($j <= 10);
        echo "<br>";

        // for 
        echo "for: " . "<br>";
        for ($k = 1; $k <= 10; $k++) {
            echo $k . "<br>";
        }
        echo "<br>";
    ?>

        <h2>info de formularios.php</h2>
    <?php
        // recuperar datos enviados por el metodo POST
        @$nombre = $_POST["nombre"];
        @$correo = $_POST["correo"];

        echo "El nombre introducido es: " . $nombre . "<br>";
        echo "El correo introducido es: " . $correo . "<br>";
    ?>
</body>
</html>