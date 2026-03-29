<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <legend>
        1. ejercicio 1: <br>
        se requiere hacer una tabla de multiplicacion donde usted pueda
        <br>
        poner el numero exacto que necesita es decir del 1 hasta 12 o cambiar
        <br>
        del 2 hasta N y sucesion
    </legend>
    <form action="" method="post">
        <label for="">Numeros en asignacion</label>
        <input type="number" name="txtnumber1" id="" require> - <input type="number" name="txtnumber2" id="" require>
        <input type="submit" value="calcular">
    </form>
    <?php
    if (isset($_POST["txtnumber1"]) && isset($_POST["txtnumber2"])) {
        $num1 = $_POST["txtnumber1"];
        $num2 = $_POST["txtnumber2"];
        $cont = 1;
        if ($num1 > $num2) {
            $esp = $num1;
            $num1 = $num2;
            $num2 = $esp;
        }
        while ($num1<=$num2) {
            echo "<h1> la tabla del ".$num1;
            echo "<br>";
            while ($cont <= 10) {
                echo $num1."x".$cont."=".($num1*$cont);
                echo "<br>";
                $cont++;
            }
            $cont=1;
            $num1++;
        }
    }
    ?>
</body>

</html>