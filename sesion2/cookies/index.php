<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <label for="">nombre de la galleta</label>
        <br><br>
        <input type="text" name="txtgalleta" placeholder="Galletita">
        <br><br>
        <input type="submit" value="enviar el valor de la galleta">
        
    </form>
    <br><br>
    <form action="" method="get">
        <input type="submit" value="eliminar galleta" name="btn-galleta">
    </form>
    <?php
    if (isset($_POST['txtgalleta'])) {
        $nombre= $_POST['txtgalleta'];
        setcookie("galleta",$nombre,time() + 3600,"/");
        $galleta= $_COOKIE['galleta'];
        echo "Hola me llamo ".$galleta;

    }else if(isset($_GET['btn-galleta'])){
        setcookie("galleta","",time() - 3600,"/");
        echo "La galleta fue eliminada";
    }
    
    ?>
</body>
</html>