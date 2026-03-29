<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>
        Matrices y listados
    </h1>
    <br>
    <?php 
    //listados
    $A[]=[3];
    $A[1]= "Juanito";
    $A[2]= "Menganito";
    $A[3]= 2019;
    $cont = 1;
    while ($cont<=3) {
        echo $A[$cont];
        $cont++;
        echo "<br>";
    } 
    ?>
    <h1>Matrices</h1>
    <br>
    <?php 
    // Matrices
    $rry[1][1]=1;
    $rry[2][1]="Hello";
    $B=$rry[1][1];
    echo $B;

    //  haz una area de loteria donde hay varios numeros aleatorios definiendo numeros
    $A[]=[10];
    $cont=1;
    while ($cont <= 10) {
        $A[$cont]=random_int(1,20);
        echo "la pelota numero ".$cont." tiene el valor de".$A[$cont];
        echo "<br>";
        $cont++;
    }
    ?>
</body>
</html>
