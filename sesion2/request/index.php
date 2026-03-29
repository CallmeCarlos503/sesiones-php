<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejemplo de request</title>
</head>
<body>
    <form action="procesar.php" method="get">
        <label for="">Nombre del producto</label>
        <br>
        <input type="text" name="txtproducto" id="">
        <br>
        <label for=""> precio del producto</label>
        <br>
        <input type="number" name="txtprecio" step="00.01" id="">
        <br>
        <input type="submit" value="enviar producto">
    </form>
</body>
</html>