<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>
        Estructuras while
    </h1>
    <?php
    $cont = 1;
    while ($cont <= 10) {
        echo "Hola soy el " . $cont;
        echo "<br>";
        $cont++;
    }
    echo "<h1> Ejercicio 2 <h1> <br>";
    // se requiere una tabla de multiplicar del 1 al 5
    // la tabla debe de ser hasta 15
    $A = 1;
    $cont = 1;
    while ($A <= 5) {
        echo "<h1> LA TABLA DEL " . $A . "<br>";
        while ($cont <= 15) {
            echo $A . "x" . $cont . "=" . ($A * $cont);
            echo "<br>";
            $cont++;
        }
        $cont = 1;
        $A++;
    }
    ?>

    <h1> Estructura for</h1>
    <br>
    <?php
    for ($i = 1; $i <= 5; $i++) {
        echo "<h1> LA TABLA DEL " . $i . "<br>";
        for ($z = 1; $z <= 15; $z++) {
            echo $i . "x" . $z . "=" . ($i * $z);
            echo "<br>";
        }
    }
    ?>
</body>

</html>