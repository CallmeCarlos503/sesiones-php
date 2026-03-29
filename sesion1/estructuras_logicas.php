<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estructura logicas</title>
</head>

<body>
    <h1>Estructuras logicas</h1>
    <h2> Estructura if</h2>
    <?php
    // Juanito dice que tien 4 años y mengano tiene 3 años, quien de los dos es mayor?
    $Juanito = 4;
    $Mengano = 5;

    // < menor , > mayor , >= mayor o igual , <= menor o igual , <> diferente a, == igual que

    if ($Juanito > $Mengano) {
        echo "Juanito si es mayor que Mengano por " . ($Juanito - $Mengano) . " año";
    } else {
        echo "Menganito es mayor que Juanito";
    }

    echo "<br>";
    //Megan es una persona con 4 años de experiencia en codigo
    // Juan tiene 6 años de experiencia
    // Mengano tiene 1 año de experiencia
    // cual de los tres tiene mas años de experiencia?
    echo "<h1> EJERCICIO 2 </h1>";
    $megan = 10;
    $Juan = 6;
    $Mengano = 1;

    if ($megan > $Juan && $megan > $Mengano) {
        echo "Megan tiene mas tiempo de experiencia";
    } elseif ($Juan > $megan && $Juan > $Mengano) {
        echo "Juan tiene mas tiempo de experiencia";
    } else {
        echo " Mengano tiene mas tiempo de expericia";
    }
    ?>
    <br>
    <h1>
        Estructura logica de switch
    </h1>
    <?php
    $A = 8;
    switch ($A) {
        case 1:
            echo "Hola soy el caso " . $A;
            break;
        case 2:
            echo "Hola soy el caso " . $A;
            break;
        case 3:
            echo "Hola soy el caso " . $A;
            break;
        default:
            echo "no soy ningun caso de opcion";
            break;
    }

    //Una mujer necesita saber cual es la mejor opcion para ir de vacaciones
    // 1. ir a la playa
    // 2. ir al parque
    // 3. no salir
    // Toma la decision por ella
    echo "<br>";
    $decision = 1;
    switch ($decision) {
        case 1:
            echo "Decidistes salir a la playa";
            break;
        case 2:
            echo "Decidistes salir al parque";
            break;
        default:
            echo "Decidiste no salir";
            break;
    }
    ?>
</body>

</html>