<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="" method="post">
        <label for="">ID</label>
        <br>
        <input type="number" name="txtID" id="">
        <br>
        <label for="">rol</label>
        <br>
        <input type="text" name="txtrol" id="">
        <br><br>
        <input type="submit" value="enviar datos">
        <input type="submit" value="Eliminar sesion" name="btneliminar">
    </form>
    <?php
    session_start();
    
    if (isset($_POST["txtID"]) && $_POST["txtrol"]) {
        $_SESSION["id"] = $_POST["txtID"];
        $_SESSION["rol"] = $_POST["txtrol"];
        echo "Sesion iniciado con el rol de " . $_SESSION["rol"] . "<br> ID: " .$_SESSION["id"];
    }elseif (isset($_POST["btneliminar"])) {
        session_unset();
        session_destroy();
        echo "Se elimino correctamente";
    }
    ?>
</body>

</html>